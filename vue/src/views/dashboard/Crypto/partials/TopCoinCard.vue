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
    labels: ['Bitcoin', 'Ethereum', 'NioCoin', 'Litecoin', 'Bitcoin'],
    stacked: true,
    datasets: [
        {
            label: 'Buy Orders',
            color: ['#f98c45', '#9cabff', '#8feac5', '#6b79c8', '#79f1dc'],
            backgroundColor: [
                '#f98c45',
                '#9cabff',
                '#8feac5',
                '#6b79c8',
                '#79f1dc',
            ],
            data: [1740, 2500, 1820, 1200, 1600, 2500],
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            borderSkipped: 'bottom',
            barThickness: '8',
            categoryPercentage: 0.5,
            barPercentage: 1.0,
        },
        {
            label: 'Sell Orders',
            backgroundColor: [
                'rgba(249, 140, 69, 0.2)',
                'rgba(156, 171, 255, 0.4)',
                'rgba(143, 234, 197, 0.4)',
                'rgba(107, 121, 200, 0.4)',
                'rgba(121, 241, 220, 0.4)',
            ],
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            borderSkipped: 'bottom',
            barThickness: '8',
            data: [2420, 1820, 3000, 5000, 2450, 1820],
            categoryPercentage: 0.5,
            barPercentage: 1.0,
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
            rtl: theme.direction === 'rtl' ? true : false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.x}`;
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
    indexAxis: 'y',
    maintainAspectRatio: false,
    scales: {
        y: {
            display: false,
            stacked: true,
            ticks: {
                beginAtZero: true,
                padding: 0,
            },
            grid: {
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: false,
            stacked: true,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '9px',
                },
                source: 'auto',
                padding: 0,
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
                        Top Coin in Orders
                    </h6>
                    <p class="text-xs leading-5 text-slate-400">
                        In last 15 days buy and sells overview.
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
                        modal="{false}"
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
            <div class="flex gap-x-3">
                <div class="h-[165px] flex-grow">
                    <Bar
                        :data="chartData"
                        class="max-w-full"
                        :options="options"
                    />
                </div>
                <ul class="w-[100px] flex-shrink-0">
                    <li
                        class="flex items-center gap-2 py-1 text-xs leading-5 text-slate-400"
                    >
                        <span
                            class="relative inline-block h-3 w-3 rounded-sm bg-[#f98c45]"
                        ></span
                        ><span>Bitcoin</span>
                    </li>
                    <li
                        class="flex items-center gap-2 py-1 text-xs leading-5 text-slate-400"
                    >
                        <span
                            class="relative inline-block h-3 w-3 rounded-sm bg-[#9cabff]"
                        ></span
                        ><span>Ethereum</span>
                    </li>
                    <li
                        class="flex items-center gap-2 py-1 text-xs leading-5 text-slate-400"
                    >
                        <span
                            class="relative inline-block h-3 w-3 rounded-sm bg-[#8feac5]"
                        ></span
                        ><span>NioCoin</span>
                    </li>
                    <li
                        class="flex items-center gap-2 py-1 text-xs leading-5 text-slate-400"
                    >
                        <span
                            class="relative inline-block h-3 w-3 rounded-sm bg-[#6b79c8]"
                        ></span
                        ><span>Litecoin</span>
                    </li>
                    <li
                        class="flex items-center gap-2 py-1 text-xs leading-5 text-slate-400"
                    >
                        <span
                            class="relative inline-block h-3 w-3 rounded-sm bg-[#79f1dc]"
                        ></span
                        ><span>Bitcoin Cash</span>
                    </li>
                </ul>
            </div>
        </CardBody>
    </Card>
</template>
