<script setup>
import {
    Chart as ChartJS,
    Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale
} from "chart.js";
import { Bar } from "vue-chartjs";

import { Card, CardBody, Icon } from '@/components'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

ChartJS.register(
    Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale
);


let chartData = {
    labels: [
        "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan",
    ],
    dataUnit: "People",
    datasets: [
        {
        label: "Active Users Analytics",
        fill:true,
        barPercentage: 0.7,
        categoryPercentage: 0.7,
        backgroundColor: "#9cabff",
        data: [
            1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200,
            1250, 900, 950, 1300, 1200, 1250, 650, 950, 750,
        ],
        },
    ],
};

let options = {
    plugins: {
    legend: {
        display: false,
    },
    tooltip: {
        enabled: true,
        displayColors: false,
        backgroundColor: "#eff6ff",
        titleFont: {
            size: '9px',
        },
        titleColor: "#6783b8",
        titleMarginBottom: 6,
        bodyColor: "#9eaecf",
        bodyFont: {
            size: '9px',
        },
        bodySpacing: 4,
        padding: 6,
        footerMarginTop: 0,
        callbacks: {
            label: function (context) {
                return context.parsed.y;
            },
        },
    },
    },
    maintainAspectRatio: false,
    scales: {
    y:{
        display: true,
        ticks: {
            beginAtZero: false,
            color:"#9eaecf", 
            font: {
            size: '12px',
            },
            padding: 0,
            display: false,
            stepSize: 300,
        },
        grid: {
            color: "rgba(82, 100, 132, 0.2)",
            tickMarkLength: 0,
            zeroLineColor: "rgba(82, 100, 132, 0.2)",
            drawTicks:false,
        },
        },
    x:{
        display: false,
        reverse: theme.direction === 'rtl' ? true : false,
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
            zeroLineColor: "transparent",
            offsetGridLines: true,
            drawTicks:false,
        },
        },
    },
}
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex justify-between items-start gap-2 mb-5">
                <div>
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Active Users</h6>
                    <p class="text-xs leading-5 text-slate-400">How do your users visited in the time.</p>
                </div>
                <Icon v-nk-tooltip="{ placement: 'left', rtlPlacement:'right',  content:'Users of this month' }" class="text-slate-300" name="help"></Icon>
            </div>
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-1/3 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Monthly</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">9.28K</span>
                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>4.63%</span>
                </div>
                <div class="w-1/3 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Weekly</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.69K</span>
                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>1.92%</span>
                </div>
                <div class="w-1/3 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Daily (Avg)</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">0.94K</span>
                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>3.45%</span>
                </div>
            </div>
            <div class="h-[170px]">
                <Bar :data="chartData" :options="options" ></Bar>
            </div>
            <div class="flex justify-between mt-2">
                <div class="text-xs text-slate-400">01 Jan, 2020</div>
                <div class="text-xs text-slate-400">30 Jan, 2020</div>
            </div>
        </CardBody>
    </Card>
</template>