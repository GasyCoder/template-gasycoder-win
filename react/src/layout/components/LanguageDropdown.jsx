import React from 'react';
import { Menu } from '@headlessui/react';

const LanguageDropdown = () => {
    return (
        <Menu as="div" className="dropdown relative">
            {({ open }) => (
                <>
                    <Menu.Button
                        className={`dropdown-toggle peer relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:transition-all before:duration-300 before:content-[''] dark:before:bg-gray-900 ${open ? 'before:h-10 before:w-10 before:opacity-100' : 'before:h-5 before:w-5 before:opacity-0 hover:before:h-10 hover:before:w-10 hover:before:opacity-100'}`}
                    >
                        <div className="inline-flex h-6 w-6 overflow-hidden rounded-full">
                            <img src="/images/flags/english-sq.png" alt="" />
                        </div>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        className="dropdown-menu border-t-primary-600 dark:border-t-primary-600 absolute end-0 top-full z-[1000] mt-2.5 min-w-[180px] rounded border border-t-3 border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <img
                                        src="/images/flags/english.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span className="language-name">
                                        English
                                    </span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <img
                                        src="/images/flags/spanish.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span className="language-name">
                                        Español
                                    </span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <img
                                        src="/images/flags/french.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span className="language-name">
                                        Français
                                    </span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <img
                                        src="/images/flags/turkey.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span className="language-name">
                                        Türkçe
                                    </span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

export default LanguageDropdown;
