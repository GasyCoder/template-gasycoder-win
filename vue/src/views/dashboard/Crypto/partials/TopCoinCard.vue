<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, ButtonZoom, Icon } from '@/components'

import { Bar } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend } from "chart.js";
Chart.register(CategoryScale, LinearScale, BarElement, PointElement, Tooltip, Filler, Legend);

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? "bottom-start" : "bottom-end",
    modifiers: [
        {name: 'offset', options: { offset: theme.direction === "rtl" ? [14, -8] : [-14, -8]}},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})

const chartData = {
    labels: ["Bitcoin", "Ethereum", "NioCoin", "Litecoin", "Bitcoin"],
    stacked: true,
    datasets: [
        {
        label: "Buy Orders",
        color: ["#f98c45", "#9cabff", "#8feac5", "#6b79c8", "#79f1dc"],
        backgroundColor: ["#f98c45", "#9cabff", "#8feac5", "#6b79c8", "#79f1dc"],
        data: [1740, 2500, 1820, 1200, 1600, 2500],
        borderWidth:2,
        borderColor: 'transparent',
        hoverBorderColor : 'transparent',
        borderSkipped : 'bottom',
        barThickness:'8',
        categoryPercentage: 0.5,
        barPercentage: 1.0
        },
        {
        label: "Sell Orders",
        backgroundColor: [
            "rgba(249, 140, 69, 0.2)",
            "rgba(156, 171, 255, 0.4)",
            "rgba(143, 234, 197, 0.4)",
            "rgba(107, 121, 200, 0.4)",
            "rgba(121, 241, 220, 0.4)",
        ],
        borderWidth:2,
        borderColor: 'transparent',
        hoverBorderColor : 'transparent',
        borderSkipped : 'bottom',
        barThickness:'8',
        data: [2420, 1820, 3000, 5000, 2450, 1820],
        categoryPercentage: 0.5,
        barPercentage: 1.0
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
        rtl: theme.direction === 'rtl' ? true : false,
        callbacks: {
            label: function (context) {
                return `${context.parsed.x}`;
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
    indexAxis: "y",
    maintainAspectRatio: false,
    scales: {
    y: {
        display: false,
        stacked: true,
        ticks: {
            beginAtZero: true,
            padding: 0,
        },
        grid: {
            tickMarkLength: 0,
            drawTicks:false,
        },
    },
    x:{
        display: false,
        stacked: true,
        reverse: theme.direction === 'rtl' ? true : false,
        ticks: {
            color:"#9eaecf", 
            font: {
            size: '9px',
            },
            source: "auto",
            padding: 0,
        },
        grid: {
            color: "transparent",
            tickMarkLength: 0,
            zeroLineColor: "transparent",
            drawTicks:false,
        },
    },
    },
}
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex justify-between items-start gap-2 mb-4">
                <div>
                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Top Coin in Orders</h6>
                    <p class="text-xs leading-5 text-slate-400">In last 15 days buy and sells overview.</p>
                </div>
                <Menu as="div" class="inline-flex relative ms-auto" v-slot="{open}">
                    <MenuButton as='div' class="inline-flex" :class="{'active': open}" ref="dropdownToggle">
                        <ButtonZoom class="-me-2">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                    </MenuButton>
                    <MenuItems modal={false} ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px]">
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>3 Months</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <div class="flex gap-x-3">
                <div class="flex-grow h-[165px]">
                    <Bar :data="chartData" class="max-w-full" :options="options" />
                </div>
                <ul class="flex-shrink-0 w-[100px]">
                    <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#f98c45]"></span><span>Bitcoin</span></li>
                    <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#9cabff]"></span><span>Ethereum</span></li>
                    <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#8feac5]"></span><span>NioCoin</span></li>
                    <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#6b79c8]"></span><span>Litecoin</span></li>
                    <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#79f1dc]"></span><span>Bitcoin Cash</span></li>
                </ul>
            </div>
        </CardBody>
    </Card>
</template>