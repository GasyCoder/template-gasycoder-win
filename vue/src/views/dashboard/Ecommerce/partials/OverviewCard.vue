<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, ButtonZoom, Icon } from '@/components';

import { Line } from 'vue-chartjs';

import {
    Chart,
    CategoryScale,
    LinearScale,
    LineElement,
    PointElement,
    Tooltip,
    Filler,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    LineElement,
    PointElement,
    Tooltip,
    Filler,
);

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        { name: 'offset', options: { offset: [0, 4] } },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});

const chartData = {
    labels: [
        '01 Jan',
        '02 Jan',
        '03 Jan',
        '04 Jan',
        '05 Jan',
        '06 Jan',
        '07 Jan',
        '08 Jan',
        '09 Jan',
        '10 Jan',
        '11 Jan',
        '12 Jan',
        '13 Jan',
        '14 Jan',
        '15 Jan',
        '16 Jan',
        '17 Jan',
        '18 Jan',
        '19 Jan',
        '20 Jan',
        '21 Jan',
        '22 Jan',
        '23 Jan',
        '24 Jan',
        '25 Jan',
        '26 Jan',
        '27 Jan',
        '28 Jan',
        '29 Jan',
        '30 Jan',
    ],
    datasets: [
        {
            label: 'Total orders',
            color: '#9d72ff',
            borderWidth: 2,
            borderColor: '#9d72ff',
            fill: true,
            dash: 0,
            pointRadius: 0,
            lineTension: 0.4,
            backgroundColor: 'rgba(157, 114, 255, 0.15)',
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: '#9d72ff',
            pointBorderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointHitRadius: 4,
            data: [
                3710, 4820, 4810, 5480, 5300, 5670, 6660, 4830, 5590, 5730,
                4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000,
                7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750,
            ],
        },
        {
            label: 'Canceled orders',
            color: '#eb6459',
            borderWidth: 2,
            borderColor: '#eb6459',
            borderDash: [5],
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'transparent',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: '#eb6459',
            pointBorderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointHitRadius: 4,
            backgroundColor: 'transparent',
            data: [
                110, 220, 810, 480, 600, 670, 660, 830, 590, 730, 790, 950, 100,
                800, 950, 850, 950, 450, 900, 0, 200, 250, 900, 950, 300, 200,
                250, 650, 950, 750,
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
            displayColors: false,
            backgroundColor: '#1c2b46',
            titleFont: {
                size: '13px',
            },
            titleColor: '#fff',
            titleMarginBottom: 6,
            bodyColor: '#fff',
            bodyFont: {
                size: '12px',
            },
            bodySpacing: 4,
            padding: 10,
            footerMarginTop: 0,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.y} USD`;
                },
            },
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
                min: 0,
                stepSize: 3000,
            },
            grid: {
                color: 'rgba(82, 100, 132, 0.2)',
                tickMarkLength: 0,
                zeroLineColor: 'rgba(82, 100, 132, 0.2)',
            },
        },
        x: {
            display: false,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '9px',
                },
                source: 'auto',
                padding: 10,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 0,
                zeroLineColor: 'transparent',
            },
        },
    },
};
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="mb-3 flex items-center justify-between gap-x-3">
                <h6
                    class="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white"
                >
                    Today Orders
                </h6>
                <Menu as="div" class="relative inline-flex" v-slot="{ open }">
                    <MenuButton
                        as="div"
                        class="inline-flex"
                        :class="{ active: open }"
                        ref="dropdownToggle"
                    >
                        <button
                            class="relative inline-flex items-center text-xs font-bold tracking-wide text-slate-400 transition-all duration-300 hover:text-slate-600 [.active_&]:text-slate-600"
                        >
                            <span>Weekly</span>
                            <Icon
                                class="text-base leading-4.5"
                                name="chevron-down"
                            />
                        </button>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Daily</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Weekly</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Monthly</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <ul class="mb-3 flex flex-wrap justify-center gap-x-8 gap-y-2">
                <li>
                    <div class="flex items-center text-sm text-slate-400">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#6576ff]"
                        ></span>
                        <span>Total Order</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center text-sm text-slate-400">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#eb6459]"
                        ></span>
                        <span>Cancelled Order</span>
                    </div>
                </li>
            </ul>
            <div class="h-52">
                <Line :data="chartData" :options="options" />
            </div>
            <div class="ms-11 mt-2 flex justify-between">
                <div class="text-xs text-slate-400">01 Jan, 2020</div>
                <div class="text-xs text-slate-400">30 Jan, 2020</div>
            </div>
        </CardBody>
    </Card>
</template>
