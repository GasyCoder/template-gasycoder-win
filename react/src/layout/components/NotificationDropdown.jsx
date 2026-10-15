import React, { Fragment } from 'react';
import { Menu } from '@headlessui/react';

const NotificationDropdown = () => {
    return (
        <Menu as="div" className="dropdown relative">
            {({ open }) => (
                <>
                    <Menu.Button
                        className={`dropdown-toggle peer relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:transition-all before:duration-300 before:content-[''] dark:before:bg-gray-900 ${open ? 'before:h-10 before:w-10 before:opacity-100' : 'before:h-5 before:w-5 before:opacity-0 hover:before:h-10 hover:before:w-10 hover:before:opacity-100'}`}
                    >
                        <div className="relative inline-flex after:absolute after:end-0 after:top-px after:h-2.5 after:w-2.5 after:rounded-full after:border-2 after:border-white after:bg-sky-400 after:content-['']">
                            <em className="ni ni-bell text-2xl leading-none text-slate-600 dark:text-slate-300"></em>
                        </div>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        className="dropdown-menu max-xs:min-w-[240px] max-xs:max-w-[240px] border-t-primary-600 dark:border-t-primary-600 absolute end-0 top-full z-[1000] mt-2.5 max-w-[360px] min-w-[360px] rounded border border-t-3 border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <div className="flex items-center justify-between border-b border-gray-200 px-5 py-3 dark:border-gray-800">
                            <span className="text-sm font-normal">
                                Notifications
                            </span>
                            <Menu.Item
                                as="button"
                                className="text-primary-600 hover:text-primary-700 text-sm font-normal"
                            >
                                Mark All as Read
                            </Menu.Item>
                        </div>
                        <div className="flex flex-col">
                            <div className="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800">
                                <div className="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-600 dark:bg-yellow-950">
                                    <em className="ni ni-curve-down-right text-lg leading-none"></em>
                                </div>
                                <div>
                                    <div className="text-sm text-slate-600 dark:text-slate-300">
                                        You have requested to{' '}
                                        <span>Widthdrawl</span>
                                    </div>
                                    <div className="text-xs text-slate-400">
                                        2 hrs ago
                                    </div>
                                </div>
                            </div>
                            <div className="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800">
                                <div className="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600 dark:bg-green-950">
                                    <em className="ni ni-curve-down-left text-lg leading-none"></em>
                                </div>
                                <div>
                                    <div className="text-sm text-slate-600 dark:text-slate-300">
                                        Your Deposit Order is placed
                                    </div>
                                    <div className="text-xs text-slate-400">
                                        2 hrs ago
                                    </div>
                                </div>
                            </div>
                            <div className="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800">
                                <div className="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-600 dark:bg-yellow-950">
                                    <em className="ni ni-curve-down-right text-lg leading-none"></em>
                                </div>
                                <div>
                                    <div className="text-sm text-slate-600 dark:text-slate-300">
                                        You have requested to{' '}
                                        <span>Widthdrawl</span>
                                    </div>
                                    <div className="text-xs text-slate-400">
                                        2 hrs ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="flex items-center justify-center border-t border-gray-200 px-5 py-3 dark:border-gray-800">
                            <Menu.Item
                                as="button"
                                className="text-primary-600 hover:text-primary-700 text-sm font-normal"
                            >
                                View All
                            </Menu.Item>
                        </div>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

export default NotificationDropdown;
