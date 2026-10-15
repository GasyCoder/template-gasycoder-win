import React, { useState } from 'react';
import { Card, Button, Icon, Progress } from '../../../componenets';
import { Bar } from 'react-chartjs-2';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

import {
    Chart,
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Legend,
} from 'chart.js';
Chart.register(
    CategoryScale,
    LinearScale,
    BarElement,
    PointElement,
    Tooltip,
    Legend,
);

const TopPlanCard = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
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
    const chart = {
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
        dataUnit: 'USD',
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
    const data = [
        {
            name: 'Strater Plan',
            progress: '58%',
            theme: 'primary',
        },
        {
            name: 'Silver Plan',
            progress: '18.49%',
            theme: 'yellow',
        },
        {
            name: 'Dimond Plan',
            progress: '16%',
            theme: 'green',
        },
        {
            name: 'Platinam Plan',
            progress: '29%',
            theme: 'pink',
        },
        {
            name: 'Vibranium Plan',
            progress: '33%',
            theme: 'indigo',
        },
    ];
    return (
        <Card className="h-full">
            <Card.Body className="flex h-full flex-col">
                <div className="mb-4 flex items-start justify-between gap-2">
                    <div>
                        <h6 className="font-heading -tracking-snug leading-tighter mb-1 text-base font-bold text-slate-700 dark:text-white">
                            Top Invested Plan
                        </h6>
                        <p className="text-xs leading-5 text-slate-400">
                            In last 30 days top invested schemes.
                        </p>
                    </div>
                    <Menu as="div" className="relative ms-auto inline-flex">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex${open ? ' active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <Button.Zoom className="-me-2">
                                        <Icon
                                            className="text-xl"
                                            name="more-h"
                                        />
                                    </Button.Zoom>
                                </Menu.Button>
                                <Menu.Items
                                    modal={false}
                                    ref={setDropdownContent}
                                    style={styles.popper}
                                    {...attributes.popper}
                                    className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                >
                                    <ul className="py-2">
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>15 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group active">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>30 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>3 Months</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </div>
                <div className="-my-2.5">
                    {data.map((item, index) => {
                        return (
                            <div key={index} className="py-2.5">
                                <div className="mb-1.5 flex items-center justify-between text-slate-400">
                                    <div className="text-sm">{item.name}</div>
                                    <div className="text-xs">
                                        {item.progress}
                                    </div>
                                </div>
                                <Progress>
                                    <Progress.Bar
                                        variant={item.theme}
                                        progress={item.progress}
                                    />
                                </Progress>
                            </div>
                        );
                    })}
                </div>
                <div className="mt-auto h-[70px] pt-5">
                    <Bar
                        className="max-w-full"
                        data={chart}
                        options={{
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
                                            return `${context.parsed.y} ${chart.dataUnit}`;
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
                        }}
                    ></Bar>
                </div>
            </Card.Body>
        </Card>
    );
};

export default TopPlanCard;
