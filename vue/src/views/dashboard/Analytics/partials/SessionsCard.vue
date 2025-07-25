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
    labels: ["Desktop", "Mobile", "Tablet"],
    dataUnit: "People",
    legend: false,
    datasets: [
        {
        borderColor: "#fff",
        backgroundColor: ["#9cabff", "#b8acff", "#7de1f8"],
        data: [84.5, 14.2, 1.3],
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
                <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Sessions by Device</h6>
                
                <Menu as="div" class="inline-flex relative ms-auto" v-slot="{ open }">
                    <MenuButton as='div' :class="{'inline-flex':true, 'active':open}" ref="dropdownToggle">
                        <Button size="sm" variant="white-outline">
                            <span>30 Days</span>
                            <Icon class="text-sm leading-none font-bold -me-0.5 ms-1" name="chevron-down" />
                        </Button>
                    </MenuButton>
                    <MenuItems modal={false} ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px]">
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
            <div class="h-[200px]">
                <Doughnut
                    class="max-w-full"
                    :data="chartData"
                    :options="options"
                ></Doughnut>
            </div>
            <div class="flex flex-wrap justify-between pt-7 mx-auto w-[280px] max-w-full -m-1.5 my-auto">
                <div class="p-1.5">
                    <em class="text-2xl leading-none text-[#798bff] ni ni-monitor"></em>
                    <div class="text-xs leading-5 mb-2 text-slate-400">Desktop</div>
                    <div class="text-lg font-medium text-slate-700 dark:text-white">84.5%</div>
                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                </div>
                <div class="p-1.5">
                    <em class="text-2xl leading-none text-[#baaeff] ni ni-mobile"></em>
                    <div class="text-xs leading-5 mb-2 text-slate-400">Mobile</div>
                    <div class="text-lg font-medium text-slate-700 dark:text-white">14.2%</div>
                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                </div>
                <div class="p-1.5">
                    <em class="text-2xl leading-none text-[#7de1f8] ni ni-tablet"></em>
                    <div class="text-xs leading-5 mb-2 text-slate-400">Tablet</div>
                    <div class="text-lg font-medium text-slate-700 dark:text-white">1.3%</div>
                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                </div>
            </div>
        </CardBody>
    </Card>
</template>