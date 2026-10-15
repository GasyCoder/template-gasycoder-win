import React, { useState } from 'react';
import { Icon, Progress } from '../../../componenets';
import SimpleBar from 'simplebar-react';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const Aside = ({ show, setShow }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'top-start' : 'top-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, -4] } },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    const menu = [
        {
            icon: 'home-alt',
            text: 'Home',
            active: true,
        },
        {
            icon: 'file-docs',
            text: 'Files',
            sub: [
                { text: 'New Files' },
                { text: 'This Months' },
                { text: 'Older Files' },
            ],
        },
        {
            icon: 'star',
            text: 'Starred',
        },
        {
            icon: 'share-alt',
            text: 'Shared',
        },
        {
            icon: 'trash-alt',
            text: 'Recovery',
        },
        {
            icon: 'setting-alt',
            text: 'Settings',
        },
    ];

    return (
        <>
            <div
                id="pageAside"
                className={`peer fixed start-0 top-0 z-[999] w-[220px] max-w-[calc(100%-2.5rem)] flex-shrink-0 -translate-x-full border-e border-gray-300 bg-white transition-transform duration-500 max-lg:min-h-screen lg:static lg:transform-none lg:rounded-s-md lg:transition-none rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none ${show ? 'active' : ''}`}
            >
                <SimpleBar className="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]">
                    <ul className="p-4">
                        {menu.map((item, index) => {
                            return (
                                <li
                                    key={index}
                                    className={`group/fmgmenu py-0.5 ${item.active ? 'active' : ''}`}
                                >
                                    <a
                                        className="group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950 relative flex items-center rounded px-3 py-2 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-900"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        <Icon
                                            className="group-[.active]/fmgmenu:text-primary-600 -mt-0.5 w-8 text-xl/5 text-slate-400"
                                            name={item.icon}
                                        />
                                        <span className="group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600 ms-1 text-sm/6 font-medium text-slate-600 dark:text-slate-400">
                                            {item.text}
                                        </span>
                                    </a>
                                    {item.sub && (
                                        <ul className="-mt-0.5 mb-2 ps-12">
                                            {item.sub.map((item, index) => {
                                                return (
                                                    <li
                                                        key={index}
                                                        className="py-0.5"
                                                    >
                                                        <a
                                                            href="#link"
                                                            onClick={(e) =>
                                                                e.preventDefault()
                                                            }
                                                            className="hover:text-primary-600 relative flex items-center rounded py-0.5 text-slate-600"
                                                        >
                                                            <span className="text-xs/5 font-medium">
                                                                {item.text}
                                                            </span>
                                                        </a>
                                                    </li>
                                                );
                                            })}
                                        </ul>
                                    )}
                                </li>
                            );
                        })}
                    </ul>

                    <div className="mt-24">
                        <div className="p-7">
                            <h6 className="font-heading text-sm/tighter -tracking-snug mb-4 flex items-center font-bold text-slate-600">
                                <Icon
                                    className="me-4 text-xl/none"
                                    name="hard-drive"
                                />
                                <span>Storage</span>
                            </h6>
                            <Progress>
                                <Progress.Bar variant="primary" progress="5%" />
                            </Progress>
                            <div className="mt-4 text-xs font-medium text-slate-400">
                                12.47 GB of 50 GB used
                            </div>
                            <div className="mt-1">
                                <a
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                    className="text-primary-600 hover:text-primary-700 text-xs/none font-medium whitespace-nowrap transition-all duration-300"
                                >
                                    Upgrade Storage
                                </a>
                            </div>
                        </div>
                        <div className="border-t border-gray-300 p-2 dark:border-gray-900">
                            <Menu
                                as="div"
                                className="relative inline-flex w-full"
                            >
                                {({ open }) => (
                                    <>
                                        <Menu.Button
                                            as="div"
                                            className={`inline-flex w-full ${open ? 'active' : ''}`}
                                            ref={setDropdownToggle}
                                        >
                                            <button className="flex w-full items-center justify-between px-5 py-3">
                                                <div className="text-start">
                                                    <div className="mb-1 text-sm/5 font-bold text-slate-700 dark:text-white">
                                                        Personal
                                                    </div>
                                                    <div className="text-xs/4 text-slate-400">
                                                        Only you
                                                    </div>
                                                </div>
                                                <em className="ni ni-unfold-more -me-1 text-base/none text-slate-600"></em>
                                            </button>
                                        </Menu.Button>
                                        <Menu.Items
                                            modal={false}
                                            ref={setDropdownContent}
                                            style={styles.popper}
                                            {...attributes.popper}
                                            className="absolute z-[1000] min-w-[160px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                        >
                                            <ul className="py-2">
                                                <li className="group">
                                                    <Menu.Item
                                                        as="button"
                                                        className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span>Team Plan</span>
                                                        <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                                    </Menu.Item>
                                                </li>
                                                <li className="group active">
                                                    <Menu.Item
                                                        as="button"
                                                        className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span>Personal</span>
                                                        <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                                    </Menu.Item>
                                                </li>
                                                <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                                <li className="group">
                                                    <Menu.Item
                                                        as="button"
                                                        className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span>
                                                            Upgrade Plan
                                                        </span>
                                                        <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                                    </Menu.Item>
                                                </li>
                                            </ul>
                                        </Menu.Items>
                                    </>
                                )}
                            </Menu>
                        </div>
                    </div>
                </SimpleBar>
            </div>
            <div
                onClick={() => setShow(false)}
                className="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
            ></div>
        </>
    );
};

export default Aside;
