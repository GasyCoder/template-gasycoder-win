import React from 'react';
import { Card } from '../../../componenets';
import { Tab } from '@headlessui/react';

const InvestmentOverviewCard = ({ className }) => {
    return (
        <Card className="h-full">
            <Card.Body className="pb-2 sm:pb-2">
                <h6 className="font-heading -tracking-snug leading-tighter mb-1 text-base font-bold text-slate-700 dark:text-white">
                    Investment Overview
                </h6>
                <p className="text-xs leading-5 text-slate-400">
                    The investment overview of your platform.{' '}
                    <a
                        className="text-primary-500 hover:text-primary-600"
                        href="#link"
                        onClick={(e) => e.preventDefault()}
                    >
                        All Investment
                    </a>
                </p>
            </Card.Body>
            <Tab.Group>
                <Tab.List
                    as="ul"
                    className="tab-nav flex flex-wrap border-b border-gray-300 px-5 sm:px-6 dark:border-gray-900"
                >
                    <li className="tab-item pe-5 last:pe-0">
                        <Tab className="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-3 text-sm font-medium text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 focus-visible:outline-none">
                            Overview
                        </Tab>
                    </li>
                    <li className="tab-item pe-5 last:pe-0">
                        <Tab className="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-3 text-sm font-medium text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 focus-visible:outline-none">
                            This Year
                        </Tab>
                    </li>
                    <li className="tab-item pe-5 last:pe-0">
                        <Tab className="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-3 text-sm font-medium text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 focus-visible:outline-none">
                            All Time
                        </Tab>
                    </li>
                </Tab.List>
                <Tab.Panels className="tab-content p-5 sm:p-6">
                    <Tab.Panel>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Currently Actived Investment
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        49,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            56
                                        </span>
                                        <span className="ms-1 text-sm text-green-600">
                                            <em className="ni ni-arrow-long-up"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        49,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Paid Profit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Investment in this Month
                            </div>
                            <div className="flex">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        49,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            23
                                        </span>
                                        <span className="ms-1 text-sm text-red-600">
                                            <em className="ni ni-arrow-long-down"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Tab.Panel>
                    <Tab.Panel>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Currently Actived Investment
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        89,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            96
                                        </span>
                                        <span className="ms-1 text-sm text-green-600">
                                            <em className="ni ni-arrow-long-up"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        99,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Paid Profit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Investment in this Month
                            </div>
                            <div className="flex">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        149,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            83
                                        </span>
                                        <span className="ms-1 text-sm text-red-600">
                                            <em className="ni ni-arrow-long-down"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Tab.Panel>
                    <Tab.Panel>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Currently Actived Investment
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        249,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            556
                                        </span>
                                        <span className="ms-1 text-sm text-green-600">
                                            <em className="ni ni-arrow-long-up"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                            <div className="flex py-1.5">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        149,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Paid Profit
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="border-b border-gray-200 py-5 first:pt-0 last:border-b-0 last:pb-0 dark:border-gray-800">
                            <div className="mb-2 text-sm font-medium text-slate-400">
                                Investment in this Month
                            </div>
                            <div className="flex">
                                <div className="w-3/5">
                                    <div className="leading-tighter text-xl text-slate-700 dark:text-white">
                                        249,395.395{' '}
                                        <span className="text-slate-600 dark:text-slate-400">
                                            USD
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Amount
                                    </div>
                                </div>
                                <div className="w-2/5">
                                    <div>
                                        <span className="leading-tighter text-xl text-slate-700 dark:text-white">
                                            223
                                        </span>
                                        <span className="ms-1 text-sm text-red-600">
                                            <em className="ni ni-arrow-long-down"></em>
                                            1.93%
                                        </span>
                                    </div>
                                    <div className="mt-1 text-xs tracking-widest text-slate-400 uppercase">
                                        Plans
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Tab.Panel>
                </Tab.Panels>
            </Tab.Group>
        </Card>
    );
};

export default InvestmentOverviewCard;
