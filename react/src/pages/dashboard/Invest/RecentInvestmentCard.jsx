import React, { useState } from 'react';
import { Avatar, Card, Button, Icon, Progress } from '../../../componenets';
import { toInitials } from '../../../utilities';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [8, -8] : [-8, -8],
                },
            },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    return (
        <Menu
            as="div"
            className={`relative inline-flex ${className ? className : ''}`}
        >
            {({ open }) => (
                <>
                    <Menu.Button
                        as="div"
                        className={`inline-flex${open ? ' active' : ''}`}
                        ref={setDropdownToggle}
                    >
                        <Button.Zoom size="sm" className="-me-2">
                            <Icon
                                className="text-xl rtl:-scale-x-100"
                                name="chevron-right"
                            />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>View</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Invoice</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Print</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};
const RecentInvestmentCard = ({ className }) => {
    const data = [
        {
            plan: {
                code: 'P1',
                name: 'Silver',
                details: 'Daily 4.76% for 21 Days',
            },
            user: {
                name: 'Janice Carroll',
                theme: 'pink-pale',
            },
            date: '18/10/2019',
            amount: '1.094780',
            progress: '75%',
        },
        {
            plan: {
                code: 'P2',
                name: 'Dimond',
                details: 'Daily 8.52% for 14 Days',
            },
            user: {
                name: 'Victoria Aguilar',
                theme: 'indigo-pale',
            },
            date: '18/10/2019',
            amount: '1.094780',
            progress: '100%',
        },
        {
            plan: {
                code: 'P3',
                name: 'Platinam',
                details: 'Daily 14.82% for 7 Days',
            },
            user: {
                name: 'Emma Henry',
                theme: 'purple-pale',
            },
            date: '18/10/2019',
            amount: '1.094780',
            progress: '100%',
        },
        {
            plan: {
                code: 'P1',
                name: 'Silver',
                details: 'Daily 4.76% for 21 Days',
            },
            user: {
                name: 'Alice Ford',
                theme: 'green-pale',
            },
            date: '18/10/2019',
            amount: '1.094780',
            progress: '100%',
        },
        {
            plan: {
                code: 'P3',
                name: 'Platinam',
                details: 'Daily 14.82% for 7 Days',
            },
            user: {
                name: 'Harold Walker',
                theme: 'orange-pale',
            },
            date: '18/10/2019',
            amount: '1.094780',
            progress: '100%',
        },
    ];
    return (
        <Card className="h-full">
            <Card.Body className="border-b border-gray-300 dark:border-gray-900">
                <div className="relative -my-1 flex items-center justify-between">
                    <h6 className="font-heading -tracking-snug text-base leading-6.5 font-bold text-slate-700 dark:text-white">
                        Recent Investment
                    </h6>
                    <a
                        href="#link"
                        onClick={(e) => e.preventDefault()}
                        className="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                    >
                        View All
                    </a>
                </div>
            </Card.Body>
            <div className="table w-full text-sm text-slate-400">
                <div className="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div className="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Plan</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                        <span>Who</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                        <span>Date</span>
                    </div>
                    <div className="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Amount</span>
                    </div>
                    <div className="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                        <span>&nbsp;</span>
                    </div>
                    <div className="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>&nbsp;</span>
                    </div>
                </div>
                {data.map((item, index) => {
                    return (
                        <div
                            key={index}
                            className="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                        >
                            <div className="relative table-cell border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <div className="flex items-center">
                                    <div className="relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-600 dark:bg-slate-900 dark:text-slate-200">
                                        <span>{item.plan.code}</span>
                                    </div>
                                    <div className="ms-3 inline-block text-xs text-slate-400">
                                        {item.plan.name}{' '}
                                        <span className="hidden md:inline">
                                            - {item.plan.details}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                <div className="flex items-center">
                                    {item.user.image ? (
                                        <Avatar
                                            size="rg"
                                            rounded
                                            img={item.user.image}
                                        />
                                    ) : (
                                        <Avatar
                                            size="rg"
                                            variant={item.user.theme}
                                            rounded
                                            text={toInitials(item.user.name)}
                                        />
                                    )}
                                    <div className="ms-3 flex items-center text-xs font-bold text-slate-600">
                                        {item.user.name}
                                    </div>
                                </div>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="text-xs">{item.date}</span>
                            </div>
                            <div className="relative table-cell border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="text-xs font-medium text-slate-700 dark:text-white">
                                    1.094780{' '}
                                    <span className="font-normal text-slate-500">
                                        BTC
                                    </span>
                                </span>
                            </div>
                            <div className="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                {item.progress !== '100%' ? (
                                    <Progress>
                                        <Progress.Bar
                                            progress={item.progress}
                                        />
                                    </Progress>
                                ) : (
                                    <span className="text-xs text-green-600">
                                        Completed
                                    </span>
                                )}
                            </div>
                            <div className="relative table-cell border-gray-300 px-2 py-4 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <ActionDropdown />
                            </div>
                        </div>
                    );
                })}
            </div>
        </Card>
    );
};

export default RecentInvestmentCard;
