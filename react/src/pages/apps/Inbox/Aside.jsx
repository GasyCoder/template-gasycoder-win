import React, { useState } from 'react';
import SimpleBar from 'simplebar-react';
import ComposeModal from './ComposeModal';
import { inboxNav, inboxLabels, inboxContacts } from '../../../store/inbox';
import { Avatar, Badge, Icon, Progress } from '../../../componenets';
import classNames from 'classnames';
import { toInitials } from '../../../utilities';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const LabelDropdown = ({ className }) => {
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
                        <button className="relative inline-flex h-9 w-9 items-center justify-center text-center align-middle text-sm leading-4.5 font-bold text-slate-600">
                            <Icon className="text-sm/4.5" name="more-h" />
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Edit Label</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Remove Label</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Label Color</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Show if unread</span>
                                    <Icon
                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    />
                                </Menu.Item>
                            </li>
                            <li className="group active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Show</span>
                                    <Icon
                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    />
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>Hide</span>
                                    <Icon
                                        className="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    />
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};
const ContactDropdown = ({ className }) => {
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
                        <button className="relative inline-flex h-9 w-9 items-center justify-center text-center align-middle text-sm leading-4.5 font-bold text-slate-600">
                            <Icon className="text-sm/4.5" name="more-h" />
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>View Profile</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Send Email</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Start Chat</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const Aside = ({ show, setShow }) => {
    return (
        <>
            <div
                id="ibxAside"
                className={`peer lg:h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] absolute start-0 top-0 z-[999] flex h-full max-h-full w-[260px] max-w-[calc(100%-2.5rem)] flex-shrink-0 -translate-x-full flex-col items-stretch overflow-hidden border-e border-gray-300 bg-white transition-transform duration-500 lg:static lg:transform-none lg:bg-transparent lg:transition-none xl:w-[300px] rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none ${show ? 'active' : ''}`}
            >
                <div className="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800">
                    <h5 className="font-heading leading-tighter -tracking-snug text-xl font-bold text-slate-700 dark:text-white">
                        NioMail
                    </h5>
                    <ComposeModal />
                </div>
                <SimpleBar className="h-full max-w-full flex-grow overflow-auto [&_.simplebar-content]:box-border [&_.simplebar-content]:flex [&_.simplebar-content]:h-full [&_.simplebar-content]:flex-col">
                    <ul className="px-3 pt-3 lg:px-4 lg:pt-4">
                        {inboxNav.map((item, index) => {
                            return (
                                <li
                                    key={index}
                                    className={`group [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:dark:bg-gray-1000 my-0.5 rounded hover:bg-gray-50 ${item.active ? 'active' : ''}`}
                                >
                                    <a
                                        className="relative flex items-center px-3 py-2"
                                        href="#link"
                                        onClick={(e) => {
                                            e.preventDefault();
                                        }}
                                    >
                                        <Icon
                                            className="group-[.active]:text-primary-600 w-8 text-xl leading-6 text-slate-400"
                                            name={item.icon}
                                        ></Icon>
                                        <span className="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 ms-1 text-sm leading-6 font-medium text-slate-600 dark:text-slate-300">
                                            {item.name}
                                        </span>
                                        {item.badge && (
                                            <Badge
                                                pill
                                                size="sm"
                                                variant={item.badge.theme}
                                                className="ms-auto min-w-[2.25rem] justify-center"
                                            >
                                                {item.badge.text}
                                            </Badge>
                                        )}
                                    </a>
                                </li>
                            );
                        })}
                    </ul>
                    <div className="flex items-center justify-between px-6 pt-8 pb-3 lg:px-7">
                        <h6 className="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white">
                            Label
                        </h6>
                        <a
                            className="inline-flex text-slate-400 hover:text-slate-700 dark:text-white"
                            href="#link"
                            onClick={(e) => e.preventDefault()}
                        >
                            <em className="ni ni-plus-c text-lg/none"></em>
                        </a>
                    </div>
                    <ul className="px-3 lg:px-4">
                        {inboxLabels.map((item, index) => {
                            const dotClass = classNames({
                                'h-4 w-4 rounded-full bg-white dark:bg-gray-950 border-3': true,
                                'border-primary-600': item.color === 'primary',
                                'border-red-600': item.color === 'red',
                                'border-green-600': item.color === 'green',
                            });
                            return (
                                <li
                                    key={index}
                                    className="group hover:dark:bg-gray-1000 relative my-0.5 flex items-center rounded transition-all duration-300 hover:bg-gray-50"
                                >
                                    <a
                                        className="flex flex-grow px-3 py-2"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        <span className={dotClass}></span>
                                        <span className="ms-4 text-sm/none font-medium text-slate-600 dark:text-white">
                                            {item.text}
                                        </span>
                                    </a>
                                    <LabelDropdown className="opacity-0 group-hover:opacity-100" />
                                </li>
                            );
                        })}
                    </ul>
                    <div className="flex items-center justify-between px-6 pt-8 pb-3 lg:px-7">
                        <h6 className="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white">
                            Contact
                        </h6>
                        <a
                            className="inline-flex text-slate-400 hover:text-slate-700 dark:text-white"
                            href="#link"
                            onClick={(e) => e.preventDefault()}
                        >
                            <em className="ni ni-plus-c text-lg/none"></em>
                        </a>
                    </div>
                    <ul className="px-3 pb-3 lg:px-4 lg:pb-4">
                        {inboxContacts.map((item, index) => {
                            return (
                                <li
                                    key={index}
                                    className="group hover:dark:bg-gray-1000 relative my-0.5 flex items-center rounded transition-all duration-300 hover:bg-gray-50"
                                >
                                    <div className="flex flex-grow px-3 py-2">
                                        <div className="flex items-center">
                                            {item.image ? (
                                                <Avatar
                                                    size="rg"
                                                    rounded
                                                    img={item.image}
                                                />
                                            ) : (
                                                <Avatar
                                                    size="rg"
                                                    variant={item.theme}
                                                    rounded
                                                    text={toInitials(item.name)}
                                                />
                                            )}
                                            <div className="ms-4">
                                                <span className="block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                    {item.name}
                                                </span>
                                                <span className="block text-xs leading-4 text-slate-400">
                                                    {item.designation}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <ContactDropdown className="opacity-0 group-hover:opacity-100" />
                                </li>
                            );
                        })}
                    </ul>

                    <div className="mt-auto bg-gray-50 p-6 dark:bg-gray-900">
                        <div className="mb-2">
                            <em className="ni ni-hard-drive text-xl/none"></em>
                            <span className="ms-1 text-sm text-slate-600 dark:text-slate-300">
                                <strong>6 GB</strong> (5%) of 100GB used
                            </span>
                        </div>
                        <Progress className="!bg-slate-100 dark:!bg-gray-700">
                            <Progress.Bar progress="5%"></Progress.Bar>
                        </Progress>
                    </div>
                </SimpleBar>
            </div>
            <div
                onClick={() => setShow(false)}
                className="bg-opacity-20 invisible absolute inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
            ></div>
        </>
    );
};

export default Aside;
