import React from 'react';
import { Card, Icon, Tooltip as TooltipComponent } from '../../../componenets';
import { Bar } from 'react-chartjs-2';

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

const StatusCard = ({
    title,
    totalAmount,
    thisMonthAmount,
    thisWeekAmount,
    chart,
    change,
    tooltip,
    className,
}) => {
    return (
        <Card className="h-full">
            <Card.Body className="flex h-full flex-col">
                <div className="relative mb-1 flex items-center justify-between">
                    <h6 className="font-heading text-sm leading-4 font-medium text-slate-400">
                        {title}
                    </h6>
                    <TooltipComponent
                        content={tooltip}
                        placement="left"
                        rtlPlacement="right"
                    >
                        <Icon
                            className="text-slate-300"
                            name="help-fill"
                        ></Icon>
                    </TooltipComponent>
                </div>
                <div className="xs:mb-1 mb-3">
                    <span className="text-2xl text-slate-700 dark:text-white">
                        {totalAmount}{' '}
                        <span className="text-slate-600 dark:text-slate-400">
                            USD
                        </span>
                    </span>
                    {change &&
                        (Math.sign(change) === -1 ? (
                            <span className="text-sm text-red-600">
                                <em className="icon ni ni-arrow-long-down"></em>
                                {Math.abs(change)}%
                            </span>
                        ) : (
                            <span className="text-sm text-green-600">
                                <em className="icon ni ni-arrow-long-up"></em>
                                {change}%
                            </span>
                        ))}
                </div>
                <div className="mt-auto flex items-end justify-between gap-2">
                    <div className="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                        <div className="me-5 flex-grow last:me-0">
                            <div className="text-xxs mb-0.5 tracking-widest text-slate-400 uppercase">
                                This Month
                            </div>
                            <div className="leading-tighter text-sm text-slate-700 dark:text-white">
                                {thisMonthAmount}{' '}
                                <span className="text-slate-500">USD</span>
                            </div>
                        </div>
                        <div className="me-5 flex-grow last:me-0">
                            <div className="text-xxs mb-0.5 tracking-widest text-slate-400 uppercase">
                                This Week
                            </div>
                            <div className="leading-tighter text-sm text-slate-700 dark:text-white">
                                {thisWeekAmount}{' '}
                                <span className="text-slate-500">USD</span>
                            </div>
                        </div>
                    </div>
                    <div className="xs:h-12 xs:w-20 mb-0.5 h-17 w-28 flex-grow md:h-17 md:w-28 2xl:h-12">
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
                </div>
            </Card.Body>
        </Card>
    );
};

export default StatusCard;
