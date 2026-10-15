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

const props = defineProps({
    title: String,
    totalAmount: String,
    thisMonthAmount: String,
    thisWeekAmount: String,
    change: Number,
    tooltip: String,
    chart: Object,
});

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
                    return `${context.parsed.y} ${props.chart.dataUnit}`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '11px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 4,
            bodyColor: '#9eaecf',
            bodyFont: {
                size: '10px',
            },
            bodySpacing: 3,
            padding: 8,
            footerMarginTop: 0,
        },
    },
    maintainAspectRatio: false,
    scales: {
        y: {
            display: false,
            ticks: {
                beginAtZero: true,
            },
        },
        x: {
            display: false,
        },
    },
};
</script>
<template>
    <Card class="h-full">
        <CardBody class="flex h-full flex-col">
            <div class="relative mb-1 flex items-center justify-between">
                <h6
                    class="font-heading text-sm leading-4 font-medium text-slate-400"
                >
                    {{ title }}
                </h6>
                <Icon
                    v-nk-tooltip="{
                        content: tooltip,
                        placement: 'left',
                        rtlPlacement: 'right',
                    }"
                    class="text-slate-300"
                    name="help-fill"
                ></Icon>
            </div>
            <div class="xs:mb-1 mb-3">
                <span class="text-2xl text-slate-700 dark:text-white">
                    {{ totalAmount }}
                    <span class="text-slate-600 dark:text-slate-400">USD</span>
                </span>
                <template v-if="change">
                    <span
                        v-if="Math.sign(change) === -1"
                        class="text-sm text-red-600"
                        ><em class="icon ni ni-arrow-long-down"></em
                        >{{ Math.abs(change) }}%</span
                    >
                    <span v-else class="text-sm text-green-600"
                        ><em class="icon ni ni-arrow-long-up"></em
                        >{{ change }}%</span
                    >
                </template>
            </div>
            <div class="mt-auto flex items-end justify-between gap-2">
                <div class="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                    <div class="me-5 flex-grow last:me-0">
                        <div
                            class="text-xxs mb-0.5 tracking-widest text-slate-400 uppercase"
                        >
                            This Month
                        </div>
                        <div
                            class="leading-tighter text-sm text-slate-700 dark:text-white"
                        >
                            {{ thisMonthAmount }}
                            <span class="text-slate-500">USD</span>
                        </div>
                    </div>
                    <div class="me-5 flex-grow last:me-0">
                        <div
                            class="text-xxs mb-0.5 tracking-widest text-slate-400 uppercase"
                        >
                            This Week
                        </div>
                        <div
                            class="leading-tighter text-sm text-slate-700 dark:text-white"
                        >
                            {{ thisWeekAmount }}
                            <span class="text-slate-500">USD</span>
                        </div>
                    </div>
                </div>
                <div
                    class="xs:h-12 xs:w-20 mb-0.5 h-17 w-28 flex-grow md:h-17 md:w-28 2xl:h-12"
                >
                    <Bar
                        class="max-w-full"
                        :data="chart"
                        :options="options"
                    ></Bar>
                </div>
            </div>
        </CardBody>
    </Card>
</template>
