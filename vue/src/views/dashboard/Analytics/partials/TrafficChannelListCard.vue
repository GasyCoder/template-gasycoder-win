<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, Button, Icon } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();
import { Line } from 'vue-chartjs';

import {
    Chart,
    CategoryScale,
    LinearScale,
    LineElement,
    Tooltip,
    Filler,
} from 'chart.js';
Chart.register(CategoryScale, LinearScale, LineElement, Tooltip, Filler);

const data = [
    {
        title: 'Organic Search',
        amount: '4,305',
        prevAmount: '4,129',
        change: 4.29,
        chart: {
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
            ],
            dataUnit: 'People',
            datasets: [
                {
                    label: 'Organic Search',
                    lineTension: 0,
                    borderWidth: 2,
                    fill: true,
                    color: '#798bff',
                    backgroundColor: 'rgba(121, 139, 255, 0.25)',
                    borderColor: '#798bff',
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#798bff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        },
    },
    {
        title: 'Social Media',
        amount: '859',
        prevAmount: '936',
        change: -15.8,
        chart: {
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
            ],
            dataUnit: 'People',
            datasets: [
                {
                    label: 'Pageviews',
                    lineTension: 0,
                    borderWidth: 2,
                    fill: true,
                    color: '#9a89ff',
                    backgroundColor: 'rgba(184, 172, 255, 0.25)',
                    borderColor: '#9a89ff',
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#9a89ff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        },
    },
    {
        title: 'Referrals',
        amount: '482',
        prevAmount: '793',
        change: -41.3,
        chart: {
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
            ],
            dataUnit: 'People',
            datasets: [
                {
                    label: 'New Users',
                    lineTension: 0,
                    borderWidth: 2,
                    fill: true,
                    color: '#ffa9ce',
                    backgroundColor: 'rgba(255, 169, 206, 0.25)',
                    borderColor: '#ffa9ce',
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#ffa9ce',
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        },
    },
    {
        title: 'Others',
        amount: '138',
        prevAmount: '97',
        change: 12.6,
        chart: {
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
            ],
            dataUnit: 'People',
            datasets: [
                {
                    label: 'Time on Site',
                    lineTension: 0,
                    borderWidth: 2,
                    fill: true,
                    color: '#f9db7b',
                    backgroundColor: 'rgba(249, 219, 123, 0.25)',
                    borderColor: '#f9db7b',
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: '#f9db7b',
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        },
    },
];

const options = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            callbacks: {
                title: function () {
                    return false;
                },
                label: function (context) {
                    return `${context.parsed.y} People`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '9px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 6,
            bodyColor: '#9eaecf',
            bodyFont: {
                size: '9px',
            },
            bodySpacing: 4,
            padding: 6,
            footerMarginTop: 0,
        },
    },
    maintainAspectRatio: false,
    scales: {
        y: {
            display: false,
            ticks: {
                beginAtZero: false,
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                padding: 0,
                stepSize: 300,
            },
            grid: {
                color: 'rgba(82, 100, 132, 0.2)',
                tickMarkLength: 0,
                zeroLineColor: 'rgba(82, 100, 132, 0.2)',
            },
        },
        x: {
            display: false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                source: 'auto',
                padding: 0,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 0,
                zeroLineColor: 'rgba(82, 100, 132,0.2)',
                offsetGridLines: true,
            },
        },
    },
};

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        { name: 'offset', options: { offset: [0, 4] } },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});
</script>
<template>
    <Card class="h-full">
        <CardBody class="pb-2 sm:pb-3">
            <div class="flex items-center justify-between gap-2">
                <div>
                    <h6
                        class="font-heading -tracking-snug leading-tighter mb-1 text-sm font-bold text-slate-700 dark:text-white"
                    >
                        Traffic Channel
                    </h6>
                    <p class="text-xs leading-5 text-slate-400">
                        Top traffic channels metrics.
                    </p>
                </div>
                <Menu
                    as="div"
                    class="relative ms-auto inline-flex"
                    v-slot="{ open }"
                >
                    <MenuButton
                        as="div"
                        :class="{ 'inline-flex': true, active: open }"
                        ref="dropdownToggle"
                    >
                        <Button size="sm" variant="white-outline">
                            <span>30 Days</span>
                            <Icon
                                class="ms-1 -me-0.5 text-sm leading-none font-bold"
                                name="chevron-down"
                            />
                        </Button>
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
                                    ><span>7 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>15 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
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
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Channel</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Sessions</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span>Prev Sessions</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span>Change</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Trend</span>
                </div>
            </div>
            <div
                v-for="(item, index) in data"
                :key="index"
                class="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
            >
                <div
                    class="relative table-cell border-gray-300 px-2 py-3.5 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <div
                        class="flex items-center text-sm font-medium text-slate-700 dark:text-white"
                    >
                        {{ item.title }}
                    </div>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-3.5 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span class="text-xs text-slate-500">{{
                        item.amount
                    }}</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-3.5 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span class="text-xs text-slate-500">{{
                        item.prevAmount
                    }}</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-3.5 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span class="text-xs"
                        >{{ Math.abs(item.change) }}%
                        <span
                            v-if="Math.sign(item.change) === -1"
                            class="text-sm leading-none text-red-600"
                            ><em class="icon ni ni-arrow-long-down"></em
                        ></span>
                        <span v-else class="text-sm leading-none text-green-600"
                            ><em class="icon ni ni-arrow-long-up"></em
                        ></span>
                    </span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-3.5 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <div class="ms-auto h-[44px] w-[90px] sm:w-[130px]">
                        <Line
                            class="max-w-full"
                            :data="item.chart"
                            :options="options"
                        ></Line>
                    </div>
                </div>
            </div>
        </div>
    </Card>
</template>
