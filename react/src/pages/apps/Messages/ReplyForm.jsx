import React, { useState } from 'react';
import { Tab } from '@headlessui/react';
import { Avatar, Button, Icon, Tooltip } from '../../../componenets';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'top-start' : 'top-end',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [14, -8] : [-14, -8],
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
                        <Button.Zoom size="sm">
                            <Icon className="text-xl" name="more-v" />
                        </Button.Zoom>
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
                                    <span>Another Option</span>
                                </Menu.Item>
                            </li>
                            <li className="active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>More Option</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const TemplateDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'top-end' : 'top-start',
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
                        <Tooltip placement="top" content="Template">
                            <button className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide">
                                <Icon className="text-base/none" name="hash" />
                            </button>
                        </Tooltip>
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
                                <h6 className="relative flex items-center px-5 py-2.5 text-xs leading-5 text-slate-400">
                                    Quick Insert
                                </h6>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Thank you message</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Your issues solved</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Thank you message</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none"
                                        name="file-plus"
                                    />
                                    <span>Save as Template</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none"
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

const ReplyForm = () => {
    return (
        <div className="border-t border-gray-200 sm:mx-9 sm:mt-2 sm:mb-9 sm:rounded sm:border lg:mx-10 lg:mb-10 dark:border-gray-800">
            <Tab.Group>
                <div className="flex items-center justify-between border-b border-gray-200 px-5 sm:px-6 dark:border-gray-800">
                    <Tab.List
                        as="ul"
                        className="tab-nav font-heading flex flex-wrap text-sm"
                    >
                        <li className="tab-item pe-5 last:pe-0">
                            <Tab className="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 outline-none after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400">
                                Reply
                            </Tab>
                        </li>
                        <li className="tab-item pe-5 last:pe-0">
                            <Tab className="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 outline-none after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400">
                                Private Note
                            </Tab>
                        </li>
                    </Tab.List>
                    <div className="flex items-center">
                        <div className="me-3 text-slate-400">Reply as:</div>
                        <Avatar variant="purple" size="xs" rounded text="IH" />
                    </div>
                </div>
                <Tab.Panels className="tab-content">
                    <Tab.Panel className="tab-panel" id="tabItem1">
                        <div className="nk-reply-form-editor">
                            <div className="border-b border-gray-200 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-800">
                                <textarea
                                    className="block min-h-[78px] w-full resize-none rounded border-0 bg-white px-0 pt-3 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Hello"
                                ></textarea>
                            </div>
                            <div className="flex justify-between p-5 sm:px-6 sm:py-4">
                                <ul className="inline-flex items-center gap-1.5">
                                    <li className="me-2">
                                        <Button
                                            size="rg"
                                            variant="primary"
                                            type="submit"
                                        >
                                            Reply
                                        </Button>
                                    </li>
                                    <li>
                                        <TemplateDropdown />
                                    </li>
                                    <li>
                                        <Tooltip
                                            placement="top"
                                            content="Upload Attachment"
                                        >
                                            <a
                                                className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-base/none"
                                                    name="clip-v"
                                                />
                                            </a>
                                        </Tooltip>
                                    </li>
                                    <li>
                                        <Tooltip
                                            placement="top"
                                            content="Insert Emoji"
                                        >
                                            <a
                                                className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-base/none"
                                                    name="happy"
                                                />
                                            </a>
                                        </Tooltip>
                                    </li>
                                    <li>
                                        <Tooltip
                                            placement="top"
                                            content="Upload Images"
                                        >
                                            <a
                                                className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-base/none"
                                                    name="img"
                                                />
                                            </a>
                                        </Tooltip>
                                    </li>
                                </ul>
                                <ActionDropdown />
                            </div>
                        </div>
                    </Tab.Panel>
                    <Tab.Panel className="tab-panel" id="tabItem2">
                        <div className="nk-reply-form-editor">
                            <div className="border-b border-gray-200 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-800">
                                <textarea
                                    className="block min-h-[78px] w-full resize-none rounded border-0 bg-white px-0 pt-3 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Type your private note, that only visible to internal team."
                                ></textarea>
                            </div>
                            <div className="flex justify-between p-5 sm:px-6 sm:py-4">
                                <ul className="inline-flex items-center gap-1.5">
                                    <li className="me-2">
                                        <Button
                                            size="rg"
                                            variant="primary"
                                            type="submit"
                                        >
                                            Add Note
                                        </Button>
                                    </li>
                                    <li>
                                        <Tooltip
                                            placement="top"
                                            content="Upload Attachment"
                                        >
                                            <a
                                                className="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-base/none"
                                                    name="clip-v"
                                                />
                                            </a>
                                        </Tooltip>
                                    </li>
                                </ul>
                                <ActionDropdown />
                            </div>
                        </div>
                    </Tab.Panel>
                </Tab.Panels>
            </Tab.Group>
        </div>
    );
};

export default ReplyForm;
