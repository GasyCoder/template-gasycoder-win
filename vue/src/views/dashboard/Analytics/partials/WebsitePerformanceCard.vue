<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Button, Icon } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()
import { Line } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, LineElement, Tooltip, Filler} from "chart.js";
Chart.register(CategoryScale, LinearScale, LineElement, Tooltip, Filler);

const data = [
    {
        title: "Bounce Rate",
        amount: "23.59%",
        change:4.5,
        chart: {
            labels: [
                "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan",
            ],
            datasets: [
                {
                    label: "Bounce Rate",
                    lineTension: 0,
                    borderWidth: 2,
                    fill:true,
                    color: "#798bff",
                    backgroundColor: "rgba(121, 139, 255, 0.25)",
                    borderColor: "#798bff",
                    pointBorderColor: "transparent",
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#798bff",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        }
    },
    {
        title: "Pageviews",
        amount: "5.48",
        change:-1.48,
        chart: {
            labels: [
                "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan",
            ],
            datasets: [
                {
                    label: "Pageviews",
                    lineTension: 0,
                    borderWidth: 2,
                    fill:true,
                    color: "#9a89ff",
                    backgroundColor: "rgba(154, 137, 255, 0.25)",
                    borderColor: "#9a89ff",
                    pointBorderColor: "transparent",
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#9a89ff",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        }
    },
    {
        title: "New Users",
        amount: "549",
        change:6.8,
        chart: {
            labels: [
                "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan",
            ],
            datasets: [
                {
                    label: "New Users",
                    lineTension: 0,
                    borderWidth: 2,
                    fill:true,
                    color: "#798bff",
                    backgroundColor: "rgba(121, 139, 255, 0.25)",
                    borderColor: "#798bff",
                    pointBorderColor: "transparent",
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#798bff",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
                    data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        }
    },
    {
        title: "Time on Site",
        amount: "3m 35s",
        change:1.4,
        chart: {
            labels: [
                "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan",
            ],
            datasets: [
                {
                label: "Time on Site",
                lineTension: 0,
                borderWidth: 2,
                fill:true,
                color: "#9a89ff",
                backgroundColor: "rgba(154, 137, 255, 0.25)",
                borderColor: "#9a89ff",
                pointBorderColor: "transparent",
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "#9a89ff",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 4,
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
                },
            ],
        }
    },
]

const options={
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
                return `${context.parsed.y} People`;
            },
        },
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
    },
    },
    maintainAspectRatio: false,
    scales: {
    y: {
        display: false,
        ticks: {
            beginAtZero: false,
            color:"#9eaecf", 
            font: {
            size: '12px',
            },
            padding: 0,
            stepSize: 300,
        },
        grid: {
            color: "rgba(82, 100, 132, 0.2)",
            tickMarkLength: 0,
            zeroLineColor: "rgba(82, 100, 132, 0.2)",
        },
        },
    x: {
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
            zeroLineColor: "rgba(82, 100, 132,0.2)",
            offsetGridLines: true,
        },
        },
    },
}

</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex justify-between items-start gap-2 mb-3">
                <div>
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Website Performance</h6>
                    <p class="text-xs leading-5 text-slate-400">How has performend this month.</p>
                </div>
                <Icon v-nk-tooltip="{placement: 'left',  rtlPlacement:'right', content:'Performance of this month'}" class="text-slate-300" name="help"></Icon>
            </div>
            <div class="flex flex-col gap-4">
                <div v-for="(item,index) in data" :key="index" class="flex justify-between items-end">
                    <div class="w-[150px] xs:w-[350px] md:w-[150px] my-0.5">
                        <div class="text-xs font-medium text-slate-400">{{item.title}} <span class="font-normal">(avg)</span></div>
                        <div class="h-[36px]">
                            <Line class="max-w-full" :data="item.chart" :options="options" ></Line>
                        </div>
                    </div>
                    <div class="text-end ms-2">
                        <div class="text-lg leading-tight mb-1 text-slate-700 dark:text-white">{{item.amount}}</div>
                        <span v-if="Math.sign(item.change) === -1" class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>{{item.change}}%</span> 
                        <span v-else class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>{{item.change}}%</span>
                        <div class="text-xs text-slate-400">vs. last month</div>
                    </div>
                </div>
            </div>
        </CardBody>
    </Card>
</template>