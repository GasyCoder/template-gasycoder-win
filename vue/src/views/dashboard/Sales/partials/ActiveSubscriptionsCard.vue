
<script setup>
import { Card, CardBody, Icon } from '@/components'

import { Bar } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend } from "chart.js";
Chart.register(CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend);

const chartData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    stacked: true,
    datasets: [
        {
            label: "Active User",
            borderWidth:2,
            borderColor: 'transparent',
            hoverBorderColor : 'transparent',
            borderSkipped : 'bottom',
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            backgroundColor: [
            "rgba(101,118,255,0.2)",
            "rgba(101,118,255,0.2)",
            "rgba(101,118,255,0.2)",
            "rgba(101,118,255,0.2)",
            "rgba(101,118,255,0.2)",
            "rgba(101,118,255,1)",
            ],
            data: [8200, 7800, 9500, 5500, 9200, 9690],
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
            callbacks: {
            title: function() {
                return false;
            },
            label: function (context) {
                return `${context.parsed.y} USD`;
            },
            },
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
    scales: {
        y:{
            display: false,
            ticks: {
                beginAtZero:true
            }
        },
        x:{
            display: false,
        },
    },
    maintainAspectRatio: false,
}
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex justify-between items-start gap-2 mb-3">
                <div>
                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Active Subscriptions</h6>
                </div>
                <Icon v-nk-tooltip="{content:'Total active subscription', placement:'left', rtlPlacement:'right'}" class="text-slate-300" name="help-fill" />
            </div>
            <div class="flex items-end sm:flex-wrap gap-3 md:flex-nowrap">
                <div class="flex-shrink-0 box-border">
                    <span class="block text-3xl text-slate-700 dark:text-white">9.69K</span>
                    <span class="text-xs text-slate-400">
                        <span class="change down text-red-600 me-1"><Icon name="arrow-long-down"></Icon>1.93%</span>
                        since last month
                    </span>
                </div>
                <div class="h-[56px] flex-grow box-border">
                    <Bar class="max-w-full" :data="chartData" :options="options" />
                </div>
            </div>
        </CardBody>
    </Card>
</template>