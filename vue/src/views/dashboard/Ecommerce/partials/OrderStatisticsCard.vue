<script setup>
import { Card, CardBody } from '@/components'

import { Doughnut } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, RadialLinearScale, Tooltip, Filler, Legend, ArcElement} from "chart.js";
Chart.register(CategoryScale, LinearScale, RadialLinearScale, Tooltip, Filler, Legend, ArcElement);

const chartData = {
    labels: ["Completed", "Processing", "Canclled"],
    legend: false,
    datasets: [
        {
            borderColor: "#fff",
            backgroundColor: ["#816bff", "#13c9f2", "#ff82b7"],
            data: [4305, 859, 482],
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
        backgroundColor: "#1c2b46",
        titleFont: {
            size: '13px',
        },
        titleColor: "#fff",
        titleMarginBottom: 6,
        bodyColor: "#fff",
        bodyFont: {
            size: '12px',
        },
        bodySpacing: 4,
        padding: 10,
        footerMarginTop: 0,
        callbacks: {
            label: function (context) {
                return `${context.parsed} Orders`;
            },
        },
    },
    },
    rotation: -1.5,
    cutoutPercentage: 70,
    maintainAspectRatio: false,
}
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-6">Order Statistics</h6>
            <div class="h-44">
                <Doughnut :data="chartData" :options="options" />
            </div>
            <ul class="flex justify-center flex-wrap gap-x-8 gap-y-2 mt-5">
                <li>
                    <div class="flex items-center text-slate-400 text-sm">
                        <span class="h-3 w-3 inline-block rounded-sm me-2 bg-[#816bff]"></span>
                        <span>Completed</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center text-slate-400 text-sm">
                        <span class="h-3 w-3 inline-block rounded-sm me-2 bg-[#13c9f2]"></span>
                        <span>Processing</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center text-slate-400 text-sm">
                        <span class="h-3 w-3 inline-block rounded-sm me-2 bg-[#ff82b7]"></span>
                        <span>Cancelled</span>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>