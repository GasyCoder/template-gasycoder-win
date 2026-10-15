<script setup>
import Layout from '@/layout/Main.vue';
import {
    Card,
    CardBody,
    Block,
    BlockHead,
    BlockTitle,
    BlockTitleLg,
    BlockText,
    BlockBack,
    BlockPageHead,
    BlockLeadText,
} from '@/components';

import { Line, Bar, Pie, PolarArea, Doughnut } from 'vue-chartjs';
import {
    Chart,
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    LineElement,
    RadialLinearScale,
    Tooltip,
    Filler,
    Legend,
    ArcElement,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    LineElement,
    RadialLinearScale,
    Tooltip,
    Filler,
    Legend,
    ArcElement,
);

import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const lineOptions = {
    plugins: {
        legend: {
            display: true,
            reverse: theme.direction === 'rtl' ? true : false,
            labels: {
                boxWidth: 12,
                padding: 20,
                color: '#6783b8',
            },
        },
        tooltip: {
            enabled: true,
            rtl: theme.direction === 'rtl' ? true : false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.y} BTC`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            borderColor: '#eff6ff',
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
    maintainAspectRatio: false,
    scales: {
        y: {
            display: true,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: false,
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                padding: 15,
            },
            grid: {
                color: 'rgba(82, 100, 132, .2)',
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: true,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                align: 'inner',
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                source: 'auto',
                padding: 10,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 10,
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                offsetGridLines: true,
                drawTicks: false,
            },
        },
    },
};

const lineOptionsAlt = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            rtl: theme.direction === 'rtl' ? true : false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.y} BTC`;
                },
            },
            displayColors: false,
            backgroundColor: '#eff6ff',
            borderColor: '#eff6ff',
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
    maintainAspectRatio: false,
    scales: {
        y: {
            display: true,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: false,
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                padding: 15,
            },
            grid: {
                color: 'rgba(82, 100, 132, .2)',
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: true,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                align: 'inner',
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                source: 'auto',
                padding: 10,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 10,
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                offsetGridLines: true,
                drawTicks: false,
            },
        },
    },
};

const barOptions = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            displayColors: false,
            callbacks: {
                title: function () {
                    return false;
                },
                label: function (context) {
                    return `${context.parsed.y} People`;
                },
            },
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '11px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 6,
            bodyColor: '#9eaecf',
            bodyFont: {
                size: '9px',
            },
            bodySpacing: 4,
            padding: 8,
            footerMarginTop: 0,
        },
    },
    maintainAspectRatio: false,
    scales: {
        y: {
            display: true,
            stacked: false,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: true,
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                padding: 10,
            },
            grid: {
                color: 'rgba(82, 100, 132, .2)',
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: true,
            stacked: false,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                source: 'auto',
                padding: 10,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 10,
                zeroLineColor: 'transparent',
                drawTicks: false,
            },
        },
    },
};

const barStackedOptions = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            displayColors: false,
            callbacks: {
                title: function () {
                    return false;
                },
                label: function (context) {
                    return `${context.parsed.y} People`;
                },
            },
            backgroundColor: '#eff6ff',
            titleFont: {
                size: '11px',
            },
            titleColor: '#6783b8',
            titleMarginBottom: 6,
            bodyColor: '#9eaecf',
            bodyFont: {
                size: '9px',
            },
            bodySpacing: 4,
            padding: 8,
            footerMarginTop: 0,
        },
    },
    maintainAspectRatio: false,
    scales: {
        y: {
            display: true,
            stacked: true,
            position: theme.direction === 'rtl' ? 'right' : 'left',
            ticks: {
                beginAtZero: true,
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                padding: 10,
            },
            grid: {
                color: 'rgba(82, 100, 132, .2)',
                zeroLineColor: 'rgba(82, 100, 132, .2)',
                tickMarkLength: 0,
                drawTicks: false,
            },
        },
        x: {
            display: true,
            stacked: true,
            reverse: theme.direction === 'rtl' ? true : false,
            ticks: {
                color: '#9eaecf',
                font: {
                    size: '12px',
                },
                source: 'auto',
                padding: 10,
            },
            grid: {
                color: 'transparent',
                tickMarkLength: 10,
                zeroLineColor: 'transparent',
                drawTicks: false,
            },
        },
    },
};

const pieOptions = {
    plugins: {
        legend: {
            display: false,
            position: 'bottom',
            labels: {
                boxWidth: 12,
                padding: 20,
                color: '#6783b8',
            },
        },
        tooltip: {
            enabled: true,
            displayColors: false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed} BTC`;
                },
            },
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
    maintainAspectRatio: false,
};

const doughnutOptions = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            rtl: theme.direction === 'rtl' ? true : false,
            displayColors: false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed} BTC`;
                },
            },
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
    rotation: 1,
    cutoutPercentage: 40,
    maintainAspectRatio: false,
};

const polarOptions = {
    plugins: {
        legend: {
            display: false,
        },
        tooltip: {
            enabled: true,
            displayColors: false,
            rtl: theme.direction === 'rtl' ? true : false,
            callbacks: {
                label: function (context) {
                    return `${context.parsed.r} BTC`;
                },
            },
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
    maintainAspectRatio: false,
};

const solidLineChart = {
    labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ],
    datasets: [
        {
            label: 'Total Received',
            borderColor: '#5ce0aa',
            backgroundColor: 'transparent',
            pointBorderWidth: 2,
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            borderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            pointHitRadius: 4,
            fill: false,
            lineTension: 0.4,
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
        },
        {
            label: 'Total Send',
            backgroundColor: 'transparent',
            pointBorderWidth: 2,
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            borderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            pointHitRadius: 4,
            borderColor: '#798bff',
            fill: false,
            lineTension: 0.4,
            data: [80, 54, 105, 120, 82, 85, 60, 80, 54, 105, 120, 82],
        },
    ],
};
const filledLineChart = {
    labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ],
    datasets: [
        {
            label: 'Total Received',
            borderColor: '#798bff',
            backgroundColor: 'rgba(121, 139, 255, 0.4)',
            pointBorderWidth: 2,
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            borderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            pointHitRadius: 4,
            fill: true,
            lineTension: 0.4,
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
        },
    ],
};
const straightLineChart = {
    labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ],
    datasets: [
        {
            label: 'Total Received',
            borderColor: '#798bff',
            backgroundColor: 'rgba(121, 139, 255, 0.3)',
            pointBorderWidth: 2,
            pointBackgroundColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            borderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
            pointHitRadius: 4,
            fill: true,
            lineTension: 0,
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
        },
    ],
};
const barChartData = {
    labels: [
        '01',
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08',
        '09',
        '10',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
        '24',
        '25',
        '26',
        '27',
        '28',
        '29',
        '30',
    ],
    datasets: [
        {
            label: 'join',
            backgroundColor: '#9cabff',
            borderWidth: 0,
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            data: [
                110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110,
                80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90,
            ],
        },
    ],
};
const barChartMultiple = {
    labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ],
    datasets: [
        {
            label: 'Income',
            backgroundColor: '#9cabff',
            borderWidth: 0,
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
        },
        {
            label: 'Expense',
            backgroundColor: '#f4aaa4',
            borderWidth: 0,
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125],
        },
    ],
};
const barChartStacked = {
    labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ],
    datasets: [
        {
            label: 'Income',
            backgroundColor: '#9cabff',
            borderWidth: 0,
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
        },
        {
            label: 'Expense',
            backgroundColor: '#f4aaa4',
            borderWidth: 0,
            barPercentage: 0.7,
            categoryPercentage: 0.7,
            data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125],
        },
    ],
};
const pieChartData = {
    labels: ['Send', 'Receive', 'Withdraw'],
    datasets: [
        {
            borderColor: '#fff',
            backgroundColor: [
                'rgba(156, 171, 255, 0.8)',
                'rgba(244, 170, 164, 0.8)',
                'rgba(143, 234, 197, 0.8)',
            ],
            data: [110, 80, 125],
        },
    ],
};
const doughnutChartData = {
    labels: ['Send', 'Receive', 'Withdraw'],
    datasets: [
        {
            borderColor: '#fff',
            backgroundColor: [
                'rgba(156, 171, 255, 0.8)',
                'rgba(244, 170, 164, 0.8)',
                'rgba(143, 234, 197, 0.8)',
            ],
            data: [110, 80, 125],
        },
    ],
};
const polarChartData = {
    labels: ['Send', 'Receive', 'Withdraw'],
    datasets: [
        {
            borderColor: '#fff',
            backgroundColor: [
                'rgba(156, 171, 255, 0.8)',
                'rgba(244, 170, 164, 0.8)',
                'rgba(143, 234, 197, 0.8)',
            ],
            data: [110, 80, 125],
        },
    ],
};
</script>
<template>
    <Layout title="Chart Js">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Chart Js</BlockTitleLg>
                <BlockLeadText>
                    <a
                        target="_blank"
                        class="text-primary-600 hover:text-primary-800"
                        href="https://www.chartjs.org/"
                        >ChartJs</a
                    >
                    is ver simple and flexible JavaScript charting for designers
                    & developers, With the help with
                    <a
                        target="_blank"
                        class="text-primary-600 hover:text-primary-800"
                        href="https://vue-chartjs.org/"
                        >vue-chartjs</a
                    >
                    You can use with vue.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Solid Line Chart</BlockTitle>
                    <BlockText
                        >A line chart is a way of plotting data points on a
                        line. Often, it is used to show trend data, or the
                        comparison of two data sets.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="h-[260px]">
                            <Line
                                :data="solidLineChart"
                                :options="lineOptions"
                            />
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Filled Line Chart</BlockTitle>
                    <BlockText
                        >Alternetly, you can use line chart with some background
                        to display more visualy.</BlockText
                    >
                </BlockHead>
                <div class="grid grid-flow-dense grid-cols-12 gap-7">
                    <div class="col-span-12 md:col-span-6">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 font-bold"
                                >
                                    Rounded Chart
                                </h6>
                                <div class="h-[180px]">
                                    <Line
                                        :data="filledLineChart"
                                        :options="lineOptionsAlt"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 font-bold"
                                >
                                    Straight Chart
                                </h6>
                                <div class="h-[180px]">
                                    <Line
                                        :data="straightLineChart"
                                        :options="lineOptionsAlt"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                </div>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Bar Chart - Single</BlockTitle>
                    <BlockText
                        >A bar chart provides a way of showing data values
                        represented as vertical bars.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="h-[260px]">
                            <Bar :data="barChartData" :options="barOptions" />
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Bar Chart - Multiple</BlockTitle>
                    <BlockText
                        >A bar chart provides a way of comparison of multiple
                        data sets side by side or with stacked view.</BlockText
                    >
                </BlockHead>
                <div class="grid grid-flow-dense grid-cols-12 gap-7">
                    <div class="col-span-12 md:col-span-6">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 font-bold"
                                >
                                    Multiple Bar
                                </h6>
                                <div class="h-[180px]">
                                    <Bar
                                        :data="barChartMultiple"
                                        :options="barOptions"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 font-bold"
                                >
                                    Stacked Bar
                                </h6>
                                <div class="h-[180px]">
                                    <Bar
                                        :data="barChartStacked"
                                        :options="barStackedOptions"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                </div>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Pie & Donught Charts</BlockTitle>
                    <BlockText
                        >Pie and doughnut charts are probably the most commonly
                        used charts. It use to show relational proportions
                        between data.</BlockText
                    >
                </BlockHead>
                <div class="grid grid-flow-dense grid-cols-12 gap-7">
                    <div class="col-span-12 md:col-span-4">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 text-center font-bold"
                                >
                                    Pie Chart
                                </h6>
                                <div class="h-[180px]">
                                    <Pie
                                        :data="pieChartData"
                                        :options="pieOptions"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 text-center font-bold"
                                >
                                    Doughnut Chart
                                </h6>
                                <div class="h-[180px]">
                                    <Doughnut
                                        :data="doughnutChartData"
                                        :options="doughnutOptions"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <Card>
                            <CardBody>
                                <h6
                                    class="font-heading text-base/tighter mb-4 text-center font-bold"
                                >
                                    Polar Chart
                                </h6>
                                <div class="h-[180px]">
                                    <PolarArea
                                        :data="polarChartData"
                                        :options="polarOptions"
                                    />
                                </div>
                            </CardBody>
                        </Card>
                    </div>
                </div>
            </Block>
        </div>
    </Layout>
</template>
