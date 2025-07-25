<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, ButtonZoom, Icon, Progress, ProgressBar } from '@/components'

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

const data = [
    {
        name: "Strater Plan",
        progress: 58,
        theme: "primary"
    },
    {
        name: "Silver Plan",
        progress: 18.49,
        theme: "yellow"
    },
    {
        name: "Dimond Plan",
        progress: 16,
        theme: "green"
    },
    {
        name: "Platinam Plan",
        progress: 29,
        theme: "pink"
    },
    {
        name: "Vibranium Plan",
        progress: 33,
        theme: "indigo"
    },
]

const chartData = {
    labels: [
        "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan",
    ],
    stacked: true,
    datasets: [
        {
        label: "Top plans",
        backgroundColor: "rgba(9, 113, 254, 0.2)",
        borderWidth:2,
        borderColor: 'transparent',
        hoverBorderColor : 'transparent',
        borderSkipped : 'bottom',
        barPercentage : .85,
        categoryPercentage : .9,
        data: [
            6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690
        ],
        },
    ],
}
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
                    return `${context.parsed.y} USD`;
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
            <div class="flex justify-between items-start gap-2 mb-4">
                <div>
                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Top Invested Plan</h6>
                    <p class="text-xs leading-5 text-slate-400">In last 30 days top invested schemes.</p>
                </div>
                <Menu as="div" class="inline-flex relative ms-auto" v-slot="{open}">
                    <MenuButton as='div'  :class="{'inline-flex':true, 'active' : open}" ref="dropdownToggle">
                        <ButtonZoom class="-me-2">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                    </MenuButton>
                    <MenuItems modal={false} ref={setDropdownContent} class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px]">
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
            <div class="-my-2.5">
                <div v-for="(item,index) in data" :key="index" class="py-2.5">
                    <div class="flex items-center justify-between text-slate-400 mb-1.5">
                        <div class="text-sm">{{item.name}}</div>
                        <div class="text-xs">{{item.progress}}%</div>
                    </div>
                    <Progress>
                        <ProgressBar :variant="item.theme" :progress="parseInt(item.progress)"/>
                    </Progress>
                </div>
            </div>
            <div class="h-[70px] pt-5 mt-auto">
                <Bar class="max-w-full" :data="chartData" :options="options" ></Bar>
            </div>
        </CardBody>
    </Card>
</template>