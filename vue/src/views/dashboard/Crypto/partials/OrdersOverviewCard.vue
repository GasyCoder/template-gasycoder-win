<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, ButtonZoom, Icon } from '@/components';

import { Bar } from 'vue-chartjs';

import {
    Chart,
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Filler,
    Legend,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Filler,
    Legend,
);

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        {
            name: 'offset',
            options: {
                offset: theme.direction === 'rtl' ? [14, -8] : [-14, -8],
            },
        },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});

const chartData = {
    labels: [
        '19 Dec',
        '20 Dec',
        '21 Dec',
        '22 Dec',
        '23 Dec',
        '24 Dec',
        '25 Dec',
        '26 Dec',
        '27 Dec',
        '28 Dec',
        '29 Dec',
        '30 Dec',
        '31 Dec',
        '01 Jan',
    ],
    datasets: [
        {
            label: 'Buy Orders',
            color: '#8feac5',
            backgroundColor: '#8feac5',
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            barPercentage: window.innerWidth < 768 ? 1 : 0.7,
            categoryPercentage: window.innerWidth < 768 ? 1 : 0.7,
            data: [
                1740, 2500, 1820, 1200, 1600, 2500, 1820, 1200, 1700, 1820,
                1400, 1600, 1930, 2100,
            ],
        },
        {
            label: 'Sell Orders',
            color: '#9cabff',
            backgroundColor: '#9cabff',
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            barPercentage: window.innerWidth < 768 ? 1 : 0.7,
            categoryPercentage: window.innerWidth < 768 ? 1 : 0.7,
            data: [
                2420, 1820, 3000, 5000, 2450, 1820, 2700, 5000, 2400, 2600,
                4000, 2380, 2120, 1700,
            ],
        },
    ],
};
const options = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.y} USD`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '13px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 6,
            bodyColor: '#9eaecf',
            bodyFont: {
                size: '12px',
            },
            bodySpacing: 4,
            padding: 10,
            footerMarginTop: 0,
        },
    },
    maintainAspectRatio: false,
    scales: {
        y: {
            display: true,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: true,
                color: '#9eaecf',
                font: {
                    size: '11px',
                },
                padding: 10,
                callback: function (value, index, values) {
                    return '$ ' + value;
                },
                min: 100,
                max: 5000,
                stepSize: 1200,
            },
            grid: {
                color: 'rgba(82, 100, 132, .2)',
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: true,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '9px',
                },
                source: 'auto',
                padding: 10,
                stepSize: 2400,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 0,
                zeroLineColor: 'transparent',
                drawTicks: false,
            },
        },
    },
};
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="mb-4 flex items-start justify-between gap-2">
                <div>
                    <h6
                        class="font-heading -tracking-snug leading-tighter mb-1 text-base font-bold text-slate-700 dark:text-white"
                    >
                        Orders Overview
                    </h6>
                    <p class="text-xs leading-5 text-slate-400">
                        In last 15 days buy and sells overview.
                        <a
                            class="text-primary-500 hover:text-primary-600"
                            href="#link"
                            @click="(e) => e.preventDefault()"
                            >Detailed Stats</a
                        >
                    </p>
                </div>
                <Menu
                    as="div"
                    class="relative ms-auto inline-flex"
                    v-slot="{ open }"
                >
                    <MenuButton
                        as="div"
                        class="inline-flex"
                        :class="{ active: open }"
                        ref="dropdownToggle"
                    >
                        <ButtonZoom class="-me-2">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>15 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>30 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>3 Months</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <div class="grid grid-flow-dense grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-8 2xl:row-span-2">
                    <div class="h-[180px] 2xl:h-[260px]">
                        <Bar
                            class="max-w-full"
                            :data="chartData"
                            :options="options"
                        />
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 2xl:col-span-4">
                    <div
                        class="buy rounded border-2 border-green-300 px-5 pt-3 pb-5 dark:border-green-900"
                    >
                        <div
                            class="text-2xl leading-10 font-bold text-green-600"
                        >
                            12,954.63
                            <small class="text-xl font-normal">USD</small>
                        </div>
                        <div class="mb-1 text-xs text-slate-400">
                            Last month
                            <strong
                                class="font-medium text-slate-700 dark:text-white"
                                >39,485 USD</strong
                            >
                        </div>
                        <div
                            class="text-sm leading-tight font-medium text-slate-400"
                        >
                            <em
                                class="ni ni-arrow-down-left me-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-slate-50 text-base text-green-600 dark:bg-slate-900"
                            ></em>
                            Buy Orders
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 2xl:col-span-4">
                    <div
                        class="border-primary-300 dark:border-primary-900 sell rounded border-2 px-5 pt-3 pb-5"
                    >
                        <div
                            class="text-primary-600 text-2xl leading-10 font-bold"
                        >
                            12,954.63
                            <small class="text-xl font-normal">USD</small>
                        </div>
                        <div class="mb-1 text-xs text-slate-400">
                            Last month
                            <strong
                                class="font-medium text-slate-700 dark:text-white"
                                >39,485 USD</strong
                            >
                        </div>
                        <div
                            class="text-sm leading-tight font-medium text-slate-400"
                        >
                            <em
                                class="text-primary-600 ni ni-arrow-up-left me-2 inline-flex h-7 w-7 items-center justify-center rounded-full bg-slate-50 text-base dark:bg-slate-900"
                            ></em>
                            Sell Orders
                        </div>
                    </div>
                </div>
            </div>
        </CardBody>
    </Card>
</template>
