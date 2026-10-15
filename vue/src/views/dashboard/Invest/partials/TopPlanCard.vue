<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import {
    Card,
    CardBody,
    ButtonZoom,
    Icon,
    Progress,
    ProgressBar,
} from '@/components';

import { Bar } from 'vue-chartjs';

import {
    Chart,
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Filler,
    Legend,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Filler,
    Legend,
);

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        {
            name: 'offset',
            options: {
                offset: theme.direction === 'rtl' ? [14, -8] : [-14, -8],
            },
        },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});

const data = [
    {
        name: 'Strater Plan',
        progress: 58,
        theme: 'primary',
    },
    {
        name: 'Silver Plan',
        progress: 18.49,
        theme: 'yellow',
    },
    {
        name: 'Dimond Plan',
        progress: 16,
        theme: 'green',
    },
    {
        name: 'Platinam Plan',
        progress: 29,
        theme: 'pink',
    },
    {
        name: 'Vibranium Plan',
        progress: 33,
        theme: 'indigo',
    },
];

const chartData = {
    labels: [
        '01 Jan',
        '02 Jan',
        '03 Jan',
        '04 Jan',
        '05 Jan',
        '06 Jan',
        '07 Jan',
        '01 Jan',
        '02 Jan',
        '03 Jan',
        '04 Jan',
        '05 Jan',
        '06 Jan',
        '07 Jan',
        '01 Jan',
        '02 Jan',
        '03 Jan',
        '04 Jan',
        '05 Jan',
        '06 Jan',
        '07 Jan',
    ],
    stacked: true,
    datasets: [
        {
            label: 'Top plans',
            backgroundColor: 'rgba(9, 113, 254, 0.2)',
            borderWidth: 2,
            borderColor: 'transparent',
            hoverBorderColor: 'transparent',
            borderSkipped: 'bottom',
            barPercentage: 0.85,
            categoryPercentage: 0.9,
            data: [
                6000, 8200, 7800, 9500, 5500, 9200, 9690, 6000, 8200, 7800,
                9500, 5500, 9200, 9690, 6000, 8200, 7800, 9500, 5500, 9200,
                9690,
            ],
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
            callbacks: {
                title: function () {
                    return false;
                },
                label: function (context) {
                    return `${context.parsed.y} USD`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '11px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 4,
            bodyColor: '#9eaecf',
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
        y: {
            display: false,
            ticks: {
                beginAtZero: true,
            },
        },
        x: {
            display: false,
        },
    },
};
</script>
<template>
    <Card class="h-full">
        <CardBody class="flex h-full flex-col">
            <div class="mb-4 flex items-start justify-between gap-2">
                <div>
                    <h6
                        class="font-heading -tracking-snug leading-tighter mb-1 text-base font-bold text-slate-700 dark:text-white"
                    >
                        Top Invested Plan
                    </h6>
                    <p class="text-xs leading-5 text-slate-400">
                        In last 30 days top invested schemes.
                    </p>
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
                        <ButtonZoom class="-me-2">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                    </MenuButton>
                    <MenuItems
                        modal="{false}"
                        ref="{setDropdownContent}"
                        class="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>15 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
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
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>3 Months</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <div class="-my-2.5">
                <div v-for="(item, index) in data" :key="index" class="py-2.5">
                    <div
                        class="mb-1.5 flex items-center justify-between text-slate-400"
                    >
                        <div class="text-sm">{{ item.name }}</div>
                        <div class="text-xs">{{ item.progress }}%</div>
                    </div>
                    <Progress>
                        <ProgressBar
                            :variant="item.theme"
                            :progress="parseInt(item.progress)"
                        />
                    </Progress>
                </div>
            </div>
            <div class="mt-auto h-[70px] pt-5">
                <Bar
                    class="max-w-full"
                    :data="chartData"
                    :options="options"
                ></Bar>
            </div>
        </CardBody>
    </Card>
</template>
