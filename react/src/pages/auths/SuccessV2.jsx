import React, { useState } from 'react';
import { Head, Icon } from '../../componenets';
import { Link } from 'react-router-dom';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../layout/context';

const LanguageDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, 0] } },
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
                        <button className="font-body text-primary-600 hover:text-primary-700 inline-flex items-center px-3 py-2 text-xs leading-none font-normal whitespace-nowrap transition-all duration-300">
                            <span>English</span>
                            <Icon className="ms-1 text-sm" name="chevron-up" />
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/english.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>English</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/spanish.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Español</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/french.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Français</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <img
                                        src="/images/flags/turkey.png"
                                        alt=""
                                        className="me-3 w-6"
                                    />
                                    <span>Türkçe</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const SuccessV2Page = () => {
    return (
        <>
            <Head title="Success v2" />
            <div className="relative flex min-h-screen">
                <div className="relative flex min-h-full w-full flex-shrink-0 flex-col bg-white dark:bg-gray-950">
                    <div className="xs:max-w-[520px] m-auto w-full max-w-[420px] p-5">
                        <div className="relative flex flex-shrink-0 justify-start pb-11">
                            <Link
                                to="/"
                                className="relative inline-block h-10 transition-opacity duration-300"
                            >
                                <img
                                    className="h-full opacity-0 dark:opacity-100"
                                    src="/logo.png"
                                    srcSet="/logo2x.png 2x"
                                    alt="logo"
                                />
                                <img
                                    className="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                                    src="/logo-dark.png"
                                    srcSet="/logo-dark2x.png 2x"
                                    alt="logo"
                                />
                            </Link>
                        </div>
                        <div className="pb-5">
                            <h5 className="font-heading -tracking-snug leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                Thank you for submitting form
                            </h5>
                            <p className="text-sm leading-6 text-green-600">
                                You can now sign in with your new password
                            </p>
                        </div>
                    </div>
                    <div className="border-t border-gray-200 px-5.5 py-6 dark:border-gray-800">
                        <div className="container max-w-7xl">
                            <div className="-m-2 flex flex-wrap">
                                <div className="w-full p-2 lg:order-last lg:w-1/2">
                                    <ul className="relative -m-3 flex flex-wrap justify-center lg:justify-end">
                                        <li>
                                            <Link
                                                className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                                to="/terms-policy"
                                            >
                                                Terms &amp; Condition
                                            </Link>
                                        </li>
                                        <li>
                                            <Link
                                                className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                                to="/terms-policy"
                                            >
                                                Privacy Policy
                                            </Link>
                                        </li>
                                        <li>
                                            <Link
                                                className="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                                to="/faqs"
                                            >
                                                Help
                                            </Link>
                                        </li>
                                        <li>
                                            <LanguageDropdown />
                                        </li>
                                    </ul>
                                </div>
                                <div className="w-full p-2 lg:w-1/2">
                                    <p className="text-center text-sm/4 text-slate-400 lg:text-start">
                                        &copy; 2025 DashWind. All Rights
                                        Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};
export default SuccessV2Page;
