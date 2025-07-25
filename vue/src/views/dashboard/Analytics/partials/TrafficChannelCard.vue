<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Button, Icon } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()
import { Doughnut } from "vue-chartjs";

import { Chart, CategoryScale, LinearScale, RadialLinearScale, Tooltip, Filler, Legend, ArcElement} from "chart.js";
Chart.register(CategoryScale, LinearScale, RadialLinearScale, Tooltip, Filler, Legend, ArcElement);
const chartData = {
    labels: ["Organic Search", "Social Media", "Referrals", "Others"],
    dataUnit: "People",
    legend: false,
    datasets: [
        {
        borderColor: "#fff",
        backgroundColor: ["#798bff", "#b8acff", "#ffa9ce", "#f9db7b"],
        data: [4305, 859, 482, 138],
        },
    ],
};

const options={
    plugins: {
    legend: {
        display: false,
    },
    tooltip: {
        enabled: true,
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
    rotation: -1.5,
    cutoutPercentage: 70,
    maintainAspectRatio: false,
}

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? "bottom-start" : "bottom-end",
    modifiers: [
        {name: 'offset', options: { offset:  [0, 4] }},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex justify-between items-center gap-2 mb-4">
                <div>
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Traffic Channel</h6>
                </div>
                
                <Menu as="div" class="inline-flex relative ms-auto" v-slot="{ open }">
                    <MenuButton as='div' :class="{'inline-flex':true, 'active' : open}" ref="dropdownToggle">
                        <Button size="sm" variant="white-outline">
                            <span>30 Days</span>
                            <Icon class="text-sm leading-none font-bold -me-0.5 ms-1" name="chevron-down" />
                        </Button>
                    </MenuButton>
                    <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px]">
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <div class="h-[160px]">
                <Doughnut
                    class="max-w-full"
                    :data="chartData"
                    :options="options"
                ></Doughnut>
            </div>
            <div class="flex flex-wrap pt-7 mx-auto w-80 max-w-full -m-1.5">
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#9cabff]"></span>
                        <span class="text-xs text-slate-400">Organic Search</span>
                    </div>
                    <div class="text-lg text-slate-700 dark:text-white ms-5">4,305 <small class="text-xs text-slate-400">58.63%</small></div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#b8acff]"></span>
                        <span class="text-xs text-slate-400">Social Media</span>
                    </div>
                    <div class="text-lg text-slate-700 dark:text-white ms-5">859 <small class="text-xs text-slate-400">23.94%</small></div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#ffa9ce]"></span>
                        <span class="text-xs text-slate-400">Referrals</span>
                    </div>
                    <div class="text-lg text-slate-700 dark:text-white ms-5">482 <small class="text-xs text-slate-400">12.94%</small></div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#f9db7b]"></span>
                        <span class="text-xs text-slate-400">Others</span>
                    </div>
                    <div class="text-lg text-slate-700 dark:text-white ms-5">138 <small class="text-xs text-slate-400">4.49%</small></div>
                </div>
            </div>
        </CardBody>
    </Card>
</template>