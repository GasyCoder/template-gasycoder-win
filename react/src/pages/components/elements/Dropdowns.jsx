import React, { useState } from 'react';
import { Head, Block, Card, Text, Icon, Button } from '../../../componenets';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const BasicDropdown = ({ className, button, placement, rtlPlacement }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>List Action</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Another Action</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>More Action</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const GeneralBorderDropdown = ({
    className,
    button,
    placement,
    rtlPlacement,
}) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="setting"
                                    />
                                    <span>Action Settings</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="notify"
                                    />
                                    <span>Push Notification</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="activity-alt"
                                    />
                                    <span>Login Activity</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const GeneralNoBorderDropdown = ({
    className,
    button,
    placement,
    rtlPlacement,
}) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="setting"
                                    />
                                    <span>Action Settings</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="notify"
                                    />
                                    <span>Push Notification</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="activity-alt"
                                    />
                                    <span>Login Activity</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const SeparatorDropdown = ({ className, button, placement, rtlPlacement }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="setting"
                                    />
                                    <span>Action Settings</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="notify"
                                    />
                                    <span>Push Notification</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="activity-alt"
                                    />
                                    <span>Login Activity</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const MultiColumnDropdown = ({
    className,
    button,
    placement,
    rtlPlacement,
}) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[280px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="flex flex-wrap text-center">
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Jan</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Feb</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Mar</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Apr</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>May</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Jun</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Jul</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Aug</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Sep</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Oct</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Nov</span>
                                </Menu.Item>
                            </li>
                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <span>Dec</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const HeadingDropdown = ({ className, button, placement, rtlPlacement }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            { name: 'offset', options: { offset: [0, 4] } },
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
                        {button}
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                    List Action
                                </h6>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Hello Team!</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Thank You!</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Most Welcome!</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                    Manage
                                </h6>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-lg leading-none"
                                        name="file-plus"
                                    />
                                    <span>Save as Template</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-lg leading-none"
                                        name="notes-alt"
                                    />
                                    <span>Manage Template</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const DropdownPage = () => {
    return (
        <>
            <Head title="List Dropdowns" />
            <div className="mx-auto lg:max-w-[960px]">
                <Block.PageHead className="md:max-w-[720px]">
                    <Block.Back to="/components">Components</Block.Back>
                    <Block.TitleLg>List Style for Dropdown</Block.TitleLg>
                    <Block.LeadText>
                        Toggle contextual overlays for displaying lists of links
                        and more with the{' '}
                        <a
                            className="text-primary-600 hover:text-primary-800"
                            target="_blank"
                            href="https://headlessui.com/react/menu"
                        >
                            HeadlessUI Menu
                        </a>{' '}
                        component. Our exclusive link list style for dropdown
                        that give you more power.
                    </Block.LeadText>
                </Block.PageHead>
                <Block>
                    <Block.Head>
                        <Block.Title>Dropdown Variations</Block.Title>
                        <Block.Text>
                            Here some examples for dropdown previews.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <Text.Overline className="mb-3">
                                Previews
                            </Text.Overline>
                            <div className="flex flex-wrap gap-4">
                                <BasicDropdown
                                    button={
                                        <Button size="rg" variant="light">
                                            Dropdown
                                        </Button>
                                    }
                                    placement="bottom-start"
                                    rtlPlacement="bottom-end"
                                />
                                <BasicDropdown
                                    button={
                                        <Button size="rg" variant="light">
                                            DropUp
                                        </Button>
                                    }
                                    placement="top-start"
                                    rtlPlacement="top-end"
                                />
                                <BasicDropdown
                                    button={
                                        <Button size="rg" variant="light">
                                            DropEnd
                                        </Button>
                                    }
                                    placement="right-start"
                                    rtlPlacement="left-start"
                                />
                                <BasicDropdown
                                    button={
                                        <Button size="rg" variant="light">
                                            DropStart
                                        </Button>
                                    }
                                    placement="left-start"
                                    rtlPlacement="right-start"
                                />
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                <Block>
                    <Block.Head>
                        <Block.Title>Dropdown List Style - General</Block.Title>
                        <Block.Text>
                            Here is few General styles for dropdown list style.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <h6 className="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white">
                                With Border
                            </h6>
                            <div className="-m-3.5 flex flex-wrap">
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Default
                                    </Text.Overline>
                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>List Action</span>
                                                </a>
                                            </li>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Another Action</span>
                                                </a>
                                            </li>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>More Action</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Selected / Actived
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul>
                                            <li className="group border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>List Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group active border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Another Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>More Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        With Icon
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="setting"
                                                    />
                                                    <span>Action Settings</span>
                                                </a>
                                            </li>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="notify"
                                                    />
                                                    <span>
                                                        Push Notification
                                                    </span>
                                                </a>
                                            </li>
                                            <li className="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="activity-alt"
                                                    />
                                                    <span>Login Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Preview
                                    </Text.Overline>
                                    <div className="flex flex-wrap gap-4">
                                        <GeneralBorderDropdown
                                            placement="bottom-start"
                                            rtlPlacement="bottom-end"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                >
                                                    Click Here
                                                </Button>
                                            }
                                        />
                                        <GeneralBorderDropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xl leading-4.5"
                                                        name="more-h"
                                                    />
                                                </Button>
                                            }
                                        />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                <Block>
                    <Card>
                        <Card.Body>
                            <div className="rounded-md border border-gray-300 bg-white p-5 sm:p-6 dark:border-gray-900 dark:bg-gray-950">
                                <h6 className="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white">
                                    Without Border
                                </h6>
                                <div className="-m-3.5 flex flex-wrap">
                                    <div className="p-3.5">
                                        <Text.Overline className="mb-3">
                                            Default
                                        </Text.Overline>

                                        <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                            <ul className="py-2">
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>List Action</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>
                                                            Another Action
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>More Action</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="p-3.5">
                                        <Text.Overline className="mb-3">
                                            Selected / Actived
                                        </Text.Overline>

                                        <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                            <ul className="py-2">
                                                <li className="group">
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>List Action</span>
                                                        <Icon
                                                            className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            name="check-thick"
                                                        />
                                                    </a>
                                                </li>
                                                <li className="group active">
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>
                                                            Another Action
                                                        </span>
                                                        <Icon
                                                            className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            name="check-thick"
                                                        />
                                                    </a>
                                                </li>
                                                <li className="group">
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <span>More Action</span>
                                                        <Icon
                                                            className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            name="check-thick"
                                                        />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="p-3.5">
                                        <Text.Overline className="mb-3">
                                            With Icon
                                        </Text.Overline>

                                        <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                            <ul className="py-2">
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <Icon
                                                            className="w-7 text-lg leading-none opacity-80"
                                                            name="setting"
                                                        />
                                                        <span>
                                                            Action Settings
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <Icon
                                                            className="w-7 text-lg leading-none opacity-80"
                                                            name="notify"
                                                        />
                                                        <span>
                                                            Push Notification
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        href="#link"
                                                        onClick={(e) =>
                                                            e.preventDefault()
                                                        }
                                                    >
                                                        <Icon
                                                            className="w-7 text-lg leading-none opacity-80"
                                                            name="activity-alt"
                                                        />
                                                        <span>
                                                            Login Activity
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="p-3.5">
                                        <Text.Overline className="mb-3">
                                            Preview
                                        </Text.Overline>
                                        <div className="flex flex-wrap gap-4">
                                            <GeneralNoBorderDropdown
                                                placement="bottom-start"
                                                rtlPlacement="bottom-end"
                                                button={
                                                    <Button
                                                        size="rg"
                                                        variant="light"
                                                    >
                                                        Click Here
                                                    </Button>
                                                }
                                            />
                                            <GeneralNoBorderDropdown
                                                placement="bottom-end"
                                                rtlPlacement="bottom-start"
                                                button={
                                                    <Button
                                                        size="rg"
                                                        variant="light"
                                                        icon
                                                    >
                                                        <Icon
                                                            className="text-xl leading-4.5"
                                                            name="more-h"
                                                        />
                                                    </Button>
                                                }
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                <Block>
                    <Card>
                        <Card.Body>
                            <h6 className="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white">
                                With Separator
                            </h6>
                            <div className="-m-3.5 flex flex-wrap">
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Default
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="py-2">
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>List Action</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Another Action</span>
                                                </a>
                                            </li>
                                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>More Action</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Selected / Actived
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="py-2">
                                            <li className="group">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>List Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group active">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Another Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                            <li className="group">
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>More Action</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        With Icon
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="py-2">
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="setting"
                                                    />
                                                    <span>Action Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="notify"
                                                    />
                                                    <span>
                                                        Push Notification
                                                    </span>
                                                </a>
                                            </li>
                                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none opacity-80"
                                                        name="activity-alt"
                                                    />
                                                    <span>Login Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Preview
                                    </Text.Overline>
                                    <div className="flex flex-wrap gap-4">
                                        <SeparatorDropdown
                                            placement="bottom-start"
                                            rtlPlacement="bottom-end"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                >
                                                    Click Here
                                                </Button>
                                            }
                                        />
                                        <SeparatorDropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xl leading-4.5"
                                                        name="more-h"
                                                    />
                                                </Button>
                                            }
                                        />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                <Block>
                    <Block.Head>
                        <Block.Title>Dropdown List Style - Column</Block.Title>
                        <Block.Text>
                            Here is few Column styles for dropdown list style.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <h6 className="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white">
                                Multiple Column
                            </h6>
                            <div className="-m-3.5 flex flex-wrap">
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        3 Column
                                    </Text.Overline>

                                    <div className="max-w-[280px] min-w-[280px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="flex flex-wrap text-center">
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jan</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Feb</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Mar</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Apr</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>May</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jun</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jul</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Aug</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Sep</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Oct</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Nov</span>
                                                </a>
                                            </li>
                                            <li className="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Dec</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        4 Column
                                    </Text.Overline>

                                    <div className="max-w-[280px] min-w-[280px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="flex flex-wrap text-center">
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jan</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Feb</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Mar</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Apr</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>May</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jun</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Jul</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Aug</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Sep</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Oct</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Nov</span>
                                                </a>
                                            </li>
                                            <li className="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Dec</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Preview
                                    </Text.Overline>
                                    <div className="flex flex-wrap gap-4">
                                        <MultiColumnDropdown
                                            placement="bottom-start"
                                            rtlPlacement="bottom-end"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                >
                                                    Click Here
                                                </Button>
                                            }
                                        />
                                        <MultiColumnDropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xl leading-4.5"
                                                        name="more-h"
                                                    />
                                                </Button>
                                            }
                                        />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
                <Block>
                    <Block.Head>
                        <Block.Title>Dropdown List Style - Heading</Block.Title>
                        <Block.Text>
                            Here is a style for dropdown list with heading
                            style.
                        </Block.Text>
                    </Block.Head>
                    <Card>
                        <Card.Body>
                            <h6 className="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white">
                                with Heading
                            </h6>
                            <div className="-m-3.5 flex flex-wrap">
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Default
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="py-2">
                                            <li>
                                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                                    List Action
                                                </h6>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Hello Team!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Thank You!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>Most Welcome!</span>
                                                </a>
                                            </li>
                                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                            <li>
                                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                                    Manage
                                                </h6>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none"
                                                        name="file-plus"
                                                    />
                                                    <span>
                                                        Save as Template
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none"
                                                        name="notes-alt"
                                                    />
                                                    <span>Manage Template</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Selected / Actived
                                    </Text.Overline>

                                    <div className="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950">
                                        <ul className="py-2">
                                            <li>
                                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                                    Show
                                                </h6>
                                            </li>
                                            <li className="group">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>10 Items</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group active">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>20 Items</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <span>30 Items</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                                            <li>
                                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                                    Order By
                                                </h6>
                                            </li>
                                            <li className="group active">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none"
                                                        name="arrow-long-up"
                                                    />
                                                    <span>DESC</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li className="group">
                                                <a
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    href="#link"
                                                    onClick={(e) =>
                                                        e.preventDefault()
                                                    }
                                                >
                                                    <Icon
                                                        className="w-7 text-lg leading-none"
                                                        name="arrow-long-down"
                                                    />
                                                    <span>ASC</span>
                                                    <Icon
                                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div className="p-3.5">
                                    <Text.Overline className="mb-3">
                                        Preview
                                    </Text.Overline>
                                    <div className="flex flex-wrap gap-4">
                                        <HeadingDropdown
                                            placement="bottom-start"
                                            rtlPlacement="bottom-end"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                >
                                                    Click Here
                                                </Button>
                                            }
                                        />
                                        <HeadingDropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            button={
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xl leading-4.5"
                                                        name="more-h"
                                                    />
                                                </Button>
                                            }
                                        />
                                    </div>
                                </div>
                            </div>
                        </Card.Body>
                    </Card>
                </Block>
            </div>
        </>
    );
};

export default DropdownPage;
