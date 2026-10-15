import React, { useState } from 'react';
import { Card, Button, Icon } from '../../../componenets';
import { Doughnut } from 'react-chartjs-2';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

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

const SessionsCard = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    const chart = {
        labels: ['Desktop', 'Mobile', 'Tablet'],
        dataUnit: 'People',
        legend: false,
        datasets: [
            {
                borderColor: '#fff',
                backgroundColor: ['#9cabff', '#b8acff', '#7de1f8'],
                data: [84.5, 14.2, 1.3],
            },
        ],
    };
    return (
        <Card className="h-full">
            <Card.Body>
                <div className="mb-4 flex items-center justify-between gap-2">
                    <h6 className="font-heading -tracking-snug leading-tighter text-sm font-bold text-slate-700 dark:text-white">
                        Sessions by Device
                    </h6>

                    <Menu as="div" className="relative ms-auto inline-flex">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex${open ? ' active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <Button size="sm" variant="white-outline">
                                        <span>30 Days</span>
                                        <Icon
                                            className="ms-1 -me-0.5 text-sm leading-none font-bold"
                                            name="chevron-down"
                                        />
                                    </Button>
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
                                                <span>7 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
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
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </div>
                <div className="h-[200px]">
                    <Doughnut
                        className="max-w-full"
                        data={chart}
                        options={{
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
                        }}
                    ></Doughnut>
                </div>
                <div className="-m-1.5 mx-auto my-auto flex w-[280px] max-w-full flex-wrap justify-between pt-7">
                    <div className="p-1.5">
                        <em className="ni ni-monitor text-2xl leading-none text-[#798bff]"></em>
                        <div className="mb-2 text-xs leading-5 text-slate-400">
                            Desktop
                        </div>
                        <div className="text-lg font-medium text-slate-700 dark:text-white">
                            84.5%
                        </div>
                        <div className="-ms-0.5 leading-none text-green-600">
                            <em className="icon ni ni-arrow-long-up"></em>4.5%
                        </div>
                    </div>
                    <div className="p-1.5">
                        <em className="ni ni-mobile text-2xl leading-none text-[#baaeff]"></em>
                        <div className="mb-2 text-xs leading-5 text-slate-400">
                            Mobile
                        </div>
                        <div className="text-lg font-medium text-slate-700 dark:text-white">
                            14.2%
                        </div>
                        <div className="-ms-0.5 leading-none text-green-600">
                            <em className="icon ni ni-arrow-long-up"></em>133.2%
                        </div>
                    </div>
                    <div className="p-1.5">
                        <em className="ni ni-tablet text-2xl leading-none text-[#7de1f8]"></em>
                        <div className="mb-2 text-xs leading-5 text-slate-400">
                            Tablet
                        </div>
                        <div className="text-lg font-medium text-slate-700 dark:text-white">
                            1.3%
                        </div>
                        <div className="-ms-0.5 leading-none text-green-600">
                            <em className="icon ni ni-arrow-long-up"></em>25.3%
                        </div>
                    </div>
                </div>
            </Card.Body>
        </Card>
    );
};

export default SessionsCard;
