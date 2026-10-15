<script setup>
import { Card, CardBody } from '@/components';

import { Doughnut } from 'vue-chartjs';

import {
    Chart,
    CategoryScale,
    LinearScale,
    RadialLinearScale,
    Tooltip,
    Filler,
    Legend,
    ArcElement,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    RadialLinearScale,
    Tooltip,
    Filler,
    Legend,
    ArcElement,
);

const chartData = {
    labels: ['Completed', 'Processing', 'Canclled'],
    legend: false,
    datasets: [
        {
            borderColor: '#fff',
            backgroundColor: ['#816bff', '#13c9f2', '#ff82b7'],
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
            backgroundColor: '#1c2b46',
            titleFont: {
                size: '13px',
            },
            titleColor: '#fff',
            titleMarginBottom: 6,
            bodyColor: '#fff',
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
};
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <h6
                class="font-heading -tracking-snug leading-tighter mb-6 text-base font-bold text-slate-700 dark:text-white"
            >
                Order Statistics
            </h6>
            <div class="h-44">
                <Doughnut :data="chartData" :options="options" />
            </div>
            <ul class="mt-5 flex flex-wrap justify-center gap-x-8 gap-y-2">
                <li>
                    <div class="flex items-center text-sm text-slate-400">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#816bff]"
                        ></span>
                        <span>Completed</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center text-sm text-slate-400">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#13c9f2]"
                        ></span>
                        <span>Processing</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center text-sm text-slate-400">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#ff82b7]"
                        ></span>
                        <span>Cancelled</span>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>
