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
        '01 Nov',
        '02 Nov',
        '03 Nov',
        '04 Nov',
        '05 Nov',
        '06 Nov',
        '07 Nov',
        '08 Nov',
        '09 Nov',
        '10 Nov',
        '11 Nov',
        '12 Nov',
        '13 Nov',
        '14 Nov',
        '15 Nov',
        '16 Nov',
        '17 Nov',
        '18 Nov',
        '19 Nov',
        '20 Nov',
        '21 Nov',
    ],
    datasets: [
        {
            label: 'Direct Join',
            color: '#9cabff',
            backgroundColor: '#9cabff',
            data: [
                110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110,
                80, 125, 55, 95, 75, 90,
            ],
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            borderSkipped: 'bottom',
            barPercentage: 0.8,
            categoryPercentage: 0.9,
        },
        {
            label: 'Referral Join',
            color: '#9cabff',
            backgroundColor: 'rgba(156, 171, 255, 0.4)',
            data: [
                125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125,
                55, 95, 75, 90, 75, 90,
            ],
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            borderSkipped: 'bottom',
            barPercentage: 0.8,
            categoryPercentage: 0.9,
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
            display: false,
            stacked: true,
            ticks: {
                beginAtZero: true,
            },
        },
        x: {
            display: false,
            stacked: true,
            reverse: theme.direction === 'rtl' ? true : false,
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
                        User Activities
                    </h6>
                    <p class="text-xs leading-5 text-slate-400">
                        <span class="me-1">In last 30 days </span>
                        <Icon
                            v-nk-tooltip="{
                                placement: 'right',
                                rtlPlacement: 'left',
                                content: 'Referral Informations',
                            }"
                            class="align-middle leading-5 text-slate-300"
                            name="info"
                        />
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
            <div class="flex flex-wrap gap-6">
                <div class="flex">
                    <em class="ni ni-users w-9 text-xl text-slate-400"></em>
                    <div class="me-4">
                        <span
                            class="text-lg leading-tight font-medium text-slate-600 dark:text-white"
                            >345</span
                        >
                        <span class="block text-xs text-slate-400"
                            >Direct Join</span
                        >
                    </div>
                    <div class="h-[24px] w-[50px] self-end text-[#9cabff]">
                        <svg
                            enableBackground="new 0 0 48 17.5"
                            version="1.1"
                            viewBox="0 0 48 17.5"
                            xmlSpace="preserve"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill="currentColor"
                                d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"
                            />
                        </svg>
                    </div>
                </div>
                <div class="flex">
                    <em class="ni ni-users w-9 text-xl text-slate-400"></em>
                    <div class="me-4">
                        <span
                            class="text-lg leading-tight font-medium text-slate-600 dark:text-white"
                            >49</span
                        >
                        <span class="block text-xs text-slate-400"
                            >Referral Join</span
                        >
                    </div>
                    <div class="h-[24px] w-[50px] self-end text-[#ccd4ff]">
                        <svg
                            enableBackground="new 0 0 48 17.5"
                            version="1.1"
                            viewBox="0 0 48 17.5"
                            xmlSpace="preserve"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill="currentColor"
                                d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </CardBody>
        <div class="h-[102px] px-2">
            <Bar class="max-w-full" :data="chartData" :options="options" />
        </div>
    </Card>
</template>
