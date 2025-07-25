<script setup>
import { Card, CardBody} from '@/components'

import { Line } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, LineElement, PointElement, Tooltip, Filler} from "chart.js";
Chart.register(CategoryScale, LinearScale, LineElement, PointElement, Tooltip, Filler);

const props = defineProps({
    title:String, count:String, up:String, down:String, chart:Object
})

const options = {
    plugins: {
    legend: {
        display: false,
    },
    tooltip: {
        enabled: true,
        displayColors: false,
        backgroundColor: "#1c2b46",
        titleFont: {
            size: '8px',
        },
        titleColor: "#fff",
        titleMarginBottom: 4,
        bodyColor: "#fff",
        bodyFont: {
            size: '8px',
        },
        bodySpacing: 4,
        padding: 6,
        footerMarginTop: 0,
        callbacks: {
            title: function () {
                return false; 
            },
            label: function (context) {
                return `${context.parsed.y} ${props.chart.dataUnit}`;
            },
        },
    },
    },
    maintainAspectRatio: false,
    scales: {
        y:{
            display: false,
            ticks: {
                beginAtZero: false,
                color:"#9eaecf", 
                font: {
                size: '12px',
                },
                padding: 0,
            },
            grid: {
                color: "rgba(82, 100, 132, 0.2)",
                tickMarkLength: 0,
                zeroLineColor: "rgba(82, 100, 132, 0.2)",
            },
            },
        x:{
            display: false,
            ticks: {
                color:"#9eaecf", 
                font: {
                size: '12px',
                },
                source: "auto",
                padding: 0,
            },
            grid: {
                color: "transparent",
                tickMarkLength: 0,
                zeroLineColor: "rgba(82, 100, 132, 0.2)",
                offsetGridLines: true,
            },
        },
    },
}
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">{{title}}</h6>
            <div class="flex items-center justify-between my-2">
                <div class="text-3xl font-medium text-slate-700 dark:text-white">{{count}}</div>
                <div class="h-10 w-24">
                    <Line :data="chart" :options="options" />
                </div>
            </div>
            <div class="text-sm">
                <span v-if="up" class="text-green-600"><em class="icon ni ni-arrow-long-up"></em>{{up}}</span>
                <span v-if="down" class="text-red-600"><em class="icon ni ni-arrow-long-down"></em>{{down}}</span>
                <span> vs. last week</span>
            </div>
        </CardBody>
    </Card>
</template>