<script setup>
import { Card, CardBody, Icon } from '@/components'

import { Bar } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend } from "chart.js";
Chart.register(CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend);

const chartData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [
      {
        label: "Sales Revenue",
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
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,0.2)",
          "rgba(101,118,255,1)",
        ],
        data: [11000, 8000, 12500, 5500, 9500, 14299, 11000, 8000, 12500, 5500, 9500, 14299],
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
                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Sales Revenue</h6>
                    <p class="text-xs leading-5 text-slate-400">In last 30 days revenue from subscription.</p>
                </div>
                <Icon v-nk-tooltip="{content:'Revenue from subscription', placement:'left', rtlPlacement:'right'}" class="text-slate-300" name="help-fill" />
            </div>
            <div class="flex items-end gap-y-2 gap-x-5 flex-wrap md:flex-nowrap lg:flex-wrap 2xl:flex-nowrap">
                <div class="flex flex-wrap md:flex-nowrap gap-5">
                    <div class="flex-shrink-0">
                        <span class="block text-3xl text-slate-700 dark:text-white">14,299.59 
                            <span class="text-sm leading-none text-red-600 ps-1"> <Icon name="arrow-long-down"></Icon>16.93%</span>
                        </span>
                        <span class="text-xs text-slate-400">This Month</span>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="block text-3xl text-slate-700 dark:text-white">7,299.59 
                            <span class="text-sm leading-none text-green-600 ps-1"> <Icon name="arrow-long-up"></Icon>4.26%</span>
                        </span>
                        <span class="text-xs text-slate-400">This Week</span>
                    </div>
                </div>
                <div class="h-[64px] lg:h-[148px] 2xl:h-[64px] flex-grow">
                    <Bar class="max-w-full" :data="chartData" :options="options" />
                </div>
            </div>
        </CardBody>
    </Card>
</template>