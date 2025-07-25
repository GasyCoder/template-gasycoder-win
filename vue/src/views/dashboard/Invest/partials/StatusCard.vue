<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, ButtonZoom, Icon } from '@/components'

import { Bar } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend } from "chart.js";
Chart.register(CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend);

const props = defineProps({
    title:String, totalAmount:String, thisMonthAmount:String, thisWeekAmount:String, change:Number, tooltip:String, chart:Object
})

const options = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            callbacks: {
                title: function() {
                    return false;
                },
                label: function (context) {
                    return `${context.parsed.y} ${props.chart.dataUnit}`;
                },
            },
            displayColors: false,
            backgroundColor: "#eff6ff",
            titleFont: {
            size: '11px',
            },
            titleColor: "#6783b8",
            titleMarginBottom: 4,
            bodyColor: "#9eaecf",
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
        y:{
            display: false,
            ticks: {
            beginAtZero: true,
            },
        },
        x:{
            display: false,
        },
    },
}
</script>
<template>
    <Card class="h-full">
        <CardBody class="h-full flex flex-col">
            <div class="relative flex items-center justify-between mb-1">
                <h6 class="text-sm leading-4 font-medium font-heading text-slate-400">{{title}}</h6>
                <Icon v-nk-tooltip="{content:tooltip, placement:'left',  rtlPlacement:'right'}" class="text-slate-300" name="help-fill"></Icon>
            </div>
            <div class="mb-3 xs:mb-1">
                <span class="text-2xl text-slate-700 dark:text-white">
                    {{totalAmount}} <span class="text-slate-600 dark:text-slate-400">USD</span>
                </span>
                <template v-if="change">
                    <span v-if="Math.sign(change) === -1" class="text-sm text-red-600"><em class="icon ni ni-arrow-long-down"></em>{{Math.abs(change)}}%</span>
                    <span v-else class="text-sm text-green-600"><em class="icon ni ni-arrow-long-up"></em>{{change}}%</span>
                </template>
            </div>
            <div class="flex gap-2 items-end justify-between mt-auto">
                <div class="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                    <div class="flex-grow me-5 last:me-0">
                        <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Month</div>
                        <div class="text-sm leading-tighter text-slate-700 dark:text-white">{{thisMonthAmount}} <span class="text-slate-500">USD</span></div>
                    </div>
                    <div class="flex-grow me-5 last:me-0">
                        <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Week</div>
                        <div class="text-sm leading-tighter text-slate-700 dark:text-white">{{thisWeekAmount}} <span class="text-slate-500">USD</span></div>
                    </div>
                </div>
                <div class="h-17 xs:h-12 md:h-17 2xl:h-12 w-28 xs:w-20 md:w-28 flex-grow mb-0.5">
                    <Bar class="max-w-full" :data="chart" :options="options" ></Bar>
                </div>
            </div>
        </CardBody>
    </Card>
</template>