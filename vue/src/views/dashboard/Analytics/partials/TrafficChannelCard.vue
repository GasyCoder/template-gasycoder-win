<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, Button, Icon } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();
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
    labels: ['Organic Search', 'Social Media', 'Referrals', 'Others'],
    dataUnit: 'People',
    legend: false,
    datasets: [
        {
            borderColor: '#fff',
            backgroundColor: ['#798bff', '#b8acff', '#ffa9ce', '#f9db7b'],
            data: [4305, 859, 482, 138],
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
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '13px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 6,
            bodyColor: '#9eaecf',
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
};

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        { name: 'offset', options: { offset: [0, 4] } },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="mb-4 flex items-center justify-between gap-2">
                <div>
                    <h6
                        class="font-heading -tracking-snug leading-tighter text-sm font-bold text-slate-700 dark:text-white"
                    >
                        Traffic Channel
                    </h6>
                </div>

                <Menu
                    as="div"
                    class="relative ms-auto inline-flex"
                    v-slot="{ open }"
                >
                    <MenuButton
                        as="div"
                        :class="{ 'inline-flex': true, active: open }"
                        ref="dropdownToggle"
                    >
                        <Button size="sm" variant="white-outline">
                            <span>30 Days</span>
                            <Icon
                                class="ms-1 -me-0.5 text-sm leading-none font-bold"
                                name="chevron-down"
                            />
                        </Button>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>7 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>15 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>30 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
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
            <div class="-m-1.5 mx-auto flex w-80 max-w-full flex-wrap pt-7">
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#9cabff]"
                        ></span>
                        <span class="text-xs text-slate-400"
                            >Organic Search</span
                        >
                    </div>
                    <div class="ms-5 text-lg text-slate-700 dark:text-white">
                        4,305
                        <small class="text-xs text-slate-400">58.63%</small>
                    </div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#b8acff]"
                        ></span>
                        <span class="text-xs text-slate-400">Social Media</span>
                    </div>
                    <div class="ms-5 text-lg text-slate-700 dark:text-white">
                        859 <small class="text-xs text-slate-400">23.94%</small>
                    </div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#ffa9ce]"
                        ></span>
                        <span class="text-xs text-slate-400">Referrals</span>
                    </div>
                    <div class="ms-5 text-lg text-slate-700 dark:text-white">
                        482 <small class="text-xs text-slate-400">12.94%</small>
                    </div>
                </div>
                <div class="w-1/2 p-1.5">
                    <div class="flex items-center">
                        <span
                            class="me-2 inline-block h-3 w-3 rounded-sm bg-[#f9db7b]"
                        ></span>
                        <span class="text-xs text-slate-400">Others</span>
                    </div>
                    <div class="ms-5 text-lg text-slate-700 dark:text-white">
                        138 <small class="text-xs text-slate-400">4.49%</small>
                    </div>
                </div>
            </div>
        </CardBody>
    </Card>
</template>
