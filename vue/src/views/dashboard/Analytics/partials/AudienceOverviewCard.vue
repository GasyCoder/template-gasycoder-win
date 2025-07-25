<script setup>
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Filler,
    Legend,
} from "chart.js";
import { Line } from "vue-chartjs";

import { Card, CardBody } from '@/components'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Filler,
    Legend
);


let chartData = {
    labels: [
        "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan",
    ],
    datasets: [
        {
        label: "Current Month",
        borderDash: [5],
        borderWidth: 2,
        fill: true,
        borderColor: "#c4cefe",
        backgroundColor: "transparent",
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#c4cefe",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        data: [
            3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750
        ],
        },
        {
        label: "Prev Month",
        color: "#9d72ff",
        borderWidth: 2,
        fill: true,
        lineTension: 0,
        dash: 0,
        borderColor: "#798bff",
        backgroundColor: "rgba(121, 139, 255, 0.15)",
        borderCapStyle: "square",
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#798bff",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        data: [
            4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750
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
            callbacks: {
                label: function (context) {
                    return `${context.parsed.y} People`;
                },
            },
            displayColors: false,
            backgroundColor: "#eff6ff",
            titleFont: {
                size: '13px',
            },
            titleColor: "#6783b8",
            titleMarginBottom: 6,
            bodyColor: "#9eaecf",
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
        y:{
            display: true,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: true,
                color:"#9eaecf", 
                font: {
                size: '12px',
                },
                padding: 8,
                stepSize: 2400,
            },
            grid: {
                color: "rgba(82, 100, 132, 0.2)",
                tickMarkLength: 0,
                zeroLineColor: "rgba(82, 100, 132,0.2)",
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
            <div class="flex justify-between items-center gap-2 mb-5">
                <div>
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Audience Overview</h6>
                    <p class="text-xs leading-5 text-slate-400">How have your users, sessions, bounce rate metrics trended.</p>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#link" @click="(e)=> e.preventDefault()" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">7 D</a>
                    <a href="#link" @click="(e)=> e.preventDefault()" class="active relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">1 M</a>
                    <a href="#link" @click="(e)=> e.preventDefault()" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">3 M</a>
                </div>
            </div>
            <div class="flex flex-wrap -mx-2 mb-6">
                <div class="w-1/2 xs:w-1/4 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Users</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.57K</span>
                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>12.37%</span>
                </div>
                <div class="w-1/2 xs:w-1/4 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Sessions</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">3.98K</span>
                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>47.74%</span>
                </div>
                <div class="w-1/2 xs:w-1/4 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Bounce</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">28.49%</span>
                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                </div>
                <div class="w-1/2 xs:w-1/4 px-2">
                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Time</div>
                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">7m 28s</span>
                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                </div>
            </div>
            <div class="h-[175px]">
                <Line class="max-w-full" :data="chartData" :options="options"></Line>
            </div>
            <div class="flex justify-between mt-2 ms-11">
                <div class="text-xs text-slate-400">01 Jan 2020</div>
                <div class="text-xs text-slate-400 hidden sm:block">15 Jan 2020</div>
                <div class="text-xs text-slate-400">30 Jan 2020</div>
            </div>
        </CardBody>
    </Card>
</template>