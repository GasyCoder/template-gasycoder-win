import React, { useState, useEffect, Fragment } from 'react';
import SimpleBar from 'simplebar-react';
import {
    Button,
    CheckBox,
    Icon,
    Tooltip,
    Avatar,
    Badge,
    Head,
} from '../../../componenets';
import { toInitials } from '../../../utilities';
import { inboxMessages } from '../../../store/inbox';
import Aside from './Aside';
import ReplyForm from './ReplyForm';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const BulkActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-end' : 'bottom-start',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [-14, -8] : [14, -8],
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
                        <Button.Zoom size="rg">
                            <Icon
                                className="text-xl/4.5 text-slate-600"
                                name="more-v"
                            />
                        </Button.Zoom>
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
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>Move To</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="trash"
                                    />
                                    <span>Delete</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="archived"
                                    />
                                    <span>Archive</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ItemActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
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
            className={`dropdown relative ${className ? className : ''}`}
        >
            {({ open }) => (
                <>
                    <Menu.Button
                        as={Fragment}
                        className={`inline-flex${open ? ' active' : ''}`}
                        ref={setDropdownToggle}
                    >
                        <Button.Zoom size="sm" className="z-[1]">
                            <Icon className="text-base/4.5" name="more-h" />
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
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>View</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="trash"
                                    />
                                    <span>Delete</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="archived"
                                    />
                                    <span>Archive</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const PreviewActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-end' : 'bottom-start',
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? [-14, -8] : [14, -8],
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
                        <Button.Zoom size="rg">
                            <Icon
                                className="text-xl/4.5 text-slate-600"
                                name="more-v"
                            />
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
                                    <span>Mark as unread</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Mark as not important</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Archive this message</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ReplyActionDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
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
                        <Button.Zoom size="rg">
                            <Icon
                                className="text-xl/4.5 text-slate-400 dark:text-slate-300"
                                name="more-v"
                            />
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
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="reply-fill"
                                    />
                                    <span>Reply to</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="forward-arrow-fill"
                                    />
                                    <span>Forward</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="trash-fill"
                                    />
                                    <span>Delete this</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="report-fill"
                                    />
                                    <span>Report Spam</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ReplyMetaDropdown = ({ className }) => {
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
                        <button className="dropdown-toggle peer relative z-[1] inline-flex items-center *:pointer-events-none">
                            <span>to Mildred</span>
                            <Icon
                                className="ms-1 text-sm leading-none"
                                name="chevron-down"
                            />
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[240px] rounded-md border border-gray-200 bg-white shadow sm:min-w-[280px] dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="p-3">
                            <li className="flex py-0.75 leading-4.5">
                                <span className="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19">
                                    from:
                                </span>
                                <span className="text-sm/4.5">
                                    <a
                                        className="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        info@softnio.com
                                    </a>
                                </span>
                            </li>
                            <li className="flex py-0.75 leading-4.5">
                                <span className="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19">
                                    to:
                                </span>
                                <span className="text-sm/4.5">
                                    <a
                                        className="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        team@softnio.com
                                    </a>
                                </span>
                            </li>
                            <li className="flex py-0.75 leading-4.5">
                                <span className="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19">
                                    bcc:
                                </span>
                                <span className="text-sm/4.5">
                                    <a
                                        className="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        team@softnio.com
                                    </a>
                                </span>
                            </li>
                            <li className="flex py-0.75 leading-4.5">
                                <span className="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19">
                                    mailed-by:
                                </span>
                                <span className="text-sm/4.5">
                                    <a
                                        className="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        softnio.com
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const InboxPage = () => {
    const [pageAside, setPageAside] = useState(false);
    const [showSearch, setShowSearch] = useState(false);
    const [showMessage, setShowMessage] = useState(null);

    const message = inboxMessages.filter(
        (message) => message.id === showMessage,
    )[0];

    useEffect(() => {
        const handleAside = () => {
            if (window.innerWidth > 1023) {
                setPageAside(false);
            }
        };

        handleAside();
        window.addEventListener('resize', handleAside);
        return () => {
            window.removeEventListener('resize', handleAside);
        };
    }, []);
    return (
        <>
            <Head title="Inbox / Mails" />
            <div className="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <Aside show={pageAside} setShow={setPageAside} />
                <div className="relative flex flex-shrink flex-grow flex-col overflow-hidden bg-white dark:bg-gray-950">
                    <div className="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800">
                        <ul className="flex items-center gap-0.75">
                            <li className="w-8 text-start">
                                <div className="flex">
                                    <CheckBox size="sm" id="mid-all" />
                                </div>
                            </li>
                            <li className="hidden sm:block">
                                <Button.Zoom size="rg">
                                    <Icon
                                        className="text-xl text-slate-600"
                                        name="undo"
                                    />
                                </Button.Zoom>
                            </li>
                            <li className="hidden sm:block">
                                <Button.Zoom size="rg">
                                    <Icon
                                        className="text-xl text-slate-600"
                                        name="archived"
                                    />
                                </Button.Zoom>
                            </li>
                            <li>
                                <Button.Zoom size="rg">
                                    <Icon
                                        className="text-xl text-slate-600"
                                        name="trash"
                                    />
                                </Button.Zoom>
                            </li>
                            <li>
                                <BulkActionDropdown />
                            </li>
                        </ul>
                        <ul className="flex items-center gap-0.75">
                            <li>
                                <Tooltip placement="top" content="Prev Page">
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600 rtl:-scale-x-100"
                                            name="arrow-left"
                                        />
                                    </Button.Zoom>
                                </Tooltip>
                            </li>
                            <li>
                                <Tooltip placement="top" content="Next Page">
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600 rtl:-scale-x-100"
                                            name="arrow-right"
                                        />
                                    </Button.Zoom>
                                </Tooltip>
                            </li>
                            <li className="lg:-me-1.5">
                                <Button.Zoom
                                    onClick={() => setShowSearch(!showSearch)}
                                    size="rg"
                                >
                                    <Icon
                                        className="text-xl text-slate-600"
                                        name="search"
                                    />
                                </Button.Zoom>
                            </li>
                            <li className="-me-1.5 lg:hidden">
                                <Button.Zoom
                                    onClick={() => setPageAside(!pageAside)}
                                    size="rg"
                                >
                                    <Icon
                                        className="text-xl text-slate-600"
                                        name="menu-alt-r"
                                    />
                                </Button.Zoom>
                            </li>
                        </ul>
                        <div
                            className={`invisible absolute inset-0 -bottom-px z-[800] flex items-center border-b border-gray-200 bg-white opacity-0 transition-all duration-300 sm:rounded-t dark:border-gray-800 dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100 ${showSearch ? 'active' : ''}`}
                            id="searchForm"
                        >
                            <div className="flex w-full items-center px-4 sm:px-7 lg:px-6">
                                <button
                                    onClick={() => setShowSearch(false)}
                                    className="class-toggle relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <em className="ni ni-arrow-left text-xl leading-6 rtl:-scale-x-100"></em>
                                </button>
                                <input
                                    type="text"
                                    className="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Search by user or message"
                                    autoComplete="off"
                                />
                                <button
                                    type="submit"
                                    className="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <em className="ni ni-search text-xl leading-6"></em>
                                </button>
                            </div>
                        </div>
                    </div>
                    <SimpleBar className="flex h-full max-h-full flex-col overflow-auto">
                        {inboxMessages.map((item, index) => {
                            return (
                                <div
                                    key={index}
                                    className={`group/ibxitem hover:dark:bg-gray-1000 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100 relative flex cursor-pointer items-center border-b border-gray-200 bg-white px-5 py-4 transition-all last:border-b-0 hover:bg-gray-50 max-md:flex-wrap sm:px-9 lg:px-7 dark:border-gray-800 dark:bg-gray-950 [&.is-unread]:bg-gray-50 ${item.unread ? 'is-unread' : ''}`}
                                >
                                    <button
                                        onClick={() => setShowMessage(item.id)}
                                        className="class-toggle absolute inset-x-0 inset-y-0 z-[1]"
                                    ></button>
                                    <div className="relative z-[2] inline-flex w-7 flex-shrink-0 pe-1 md:pe-2">
                                        <div className="flex">
                                            <CheckBox size="sm" id={item.id} />
                                        </div>
                                    </div>
                                    <div className="relative z-[2] flex-shrink-0 px-1 max-md:absolute max-md:start-7.5 max-md:top-13 max-sm:start-3.5 md:px-2">
                                        <div
                                            className={`group/asterisk relative inline-flex cursor-pointer ${item.favourite ? 'active' : ''}`}
                                        >
                                            <Icon
                                                className="text-lg/none text-slate-400"
                                                name="star"
                                            />
                                            <Icon
                                                className="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"
                                                name="star-fill"
                                            />
                                        </div>
                                    </div>
                                    <div className="flex-shrink-0 px-1 max-md:flex-grow max-md:pe-20 md:w-[180px] md:px-2 xl:w-[200px]">
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
                                                    text={toInitials(
                                                        item.user.name,
                                                    )}
                                                />
                                            )}
                                            <div className="ms-4">
                                                <span className="block text-sm leading-6 font-normal text-slate-700 group-[.is-unread]/ibxitem:font-medium dark:text-white">
                                                    {item.user.name}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="w-full max-w-full flex-shrink flex-grow overflow-hidden px-1 max-md:mt-1.5 max-md:ps-8 max-md:pe-12 md:px-2">
                                        <div className="flex items-center">
                                            {item.badge && (
                                                <div className="me-3 max-md:hidden">
                                                    <Badge
                                                        size="rg"
                                                        variant={
                                                            item.badge.theme
                                                        }
                                                    >
                                                        {item.badge.text}
                                                    </Badge>
                                                </div>
                                            )}
                                            <div className="overflow-hidden text-ellipsis whitespace-nowrap">
                                                <span className="inline text-slate-400">
                                                    <span className="me-0.5 text-slate-600 group-[.is-unread]/ibxitem:font-medium max-md:block dark:text-slate-400">
                                                        {item.message.subject}
                                                    </span>{' '}
                                                    {item.message.excerpt}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="w-9 flex-shrink-0 px-1 text-center max-md:hidden md:px-2">
                                        {item.attachment && (
                                            <a className="text-slate-500">
                                                {' '}
                                                <Icon
                                                    className="text-lg/none"
                                                    name="clip-h"
                                                />
                                            </a>
                                        )}
                                    </div>
                                    <div className="w-20 flex-shrink-0 px-1 text-end max-md:absolute max-md:end-7.5 max-md:top-5 max-sm:end-3.5 md:px-2 xl:me-8">
                                        <div className="text-sm text-slate-400">
                                            {item.time}
                                        </div>
                                    </div>
                                    <div className="relative ms-auto w-8 flex-shrink-0 flex-grow-0 ps-1 max-md:absolute max-md:end-6.5 max-md:bottom-5 max-sm:end-3 md:ps-2">
                                        <ul className="relative flex items-center justify-end md:-me-2">
                                            <li className="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover/ibxitem:opacity-100">
                                                <Tooltip
                                                    placement="top"
                                                    content="Archive"
                                                >
                                                    <Button.Zoom size="sm">
                                                        <Icon
                                                            className="text-base/4.5"
                                                            name="archived"
                                                        />
                                                    </Button.Zoom>
                                                </Tooltip>
                                            </li>
                                            <li className="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover/ibxitem:opacity-100">
                                                <Tooltip
                                                    placement="top"
                                                    content="Delete"
                                                >
                                                    <Button.Zoom size="sm">
                                                        <Icon
                                                            className="text-base/4.5"
                                                            name="trash"
                                                        />
                                                    </Button.Zoom>
                                                </Tooltip>
                                            </li>
                                            <li>
                                                <ItemActionDropdown />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            );
                        })}
                    </SimpleBar>
                    <div
                        id="ibxDetails"
                        className={`pointer-events-none invisible absolute inset-0 z-[2] flex flex-col overflow-hidden bg-white opacity-0 dark:bg-gray-950 [&.active]:pointer-events-auto [&.active]:visible [&.active]:opacity-100 ${showMessage !== null ? 'active' : ''}`}
                    >
                        <div className="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800">
                            <ul className="flex items-center gap-0.75">
                                <li className="-ms-1.5">
                                    <Button.Zoom
                                        size="rg"
                                        onClick={() => setShowMessage(null)}
                                    >
                                        <Icon
                                            className="text-xl text-slate-600 rtl:-scale-x-100"
                                            name="arrow-left"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600"
                                            name="archived"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li className="hidden sm:block">
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600"
                                            name="report"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600"
                                            name="trash"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-xl text-slate-600"
                                            name="label"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <PreviewActionDropdown />
                                </li>
                            </ul>
                            <ul className="flex items-center gap-0.75">
                                <li>
                                    <Tooltip
                                        placement="top"
                                        content="Prev Page"
                                    >
                                        <Button.Zoom size="rg">
                                            <Icon
                                                className="text-xl text-slate-600"
                                                name="chevron-left"
                                            />
                                        </Button.Zoom>
                                    </Tooltip>
                                </li>
                                <li>
                                    <Tooltip
                                        placement="top"
                                        content="Next Page"
                                    >
                                        <Button.Zoom size="rg">
                                            <Icon
                                                className="text-xl text-slate-600 rtl:-scale-x-100"
                                                name="chevron-right"
                                            />
                                        </Button.Zoom>
                                    </Tooltip>
                                </li>
                                <li className="-me-1.5">
                                    <Button.Zoom
                                        onClick={() =>
                                            setShowSearch(!showSearch)
                                        }
                                        size="rg"
                                    >
                                        <Icon
                                            className="text-xl text-slate-600"
                                            name="search"
                                        />
                                    </Button.Zoom>
                                </li>
                            </ul>
                            <div
                                className={`invisible absolute inset-0 -bottom-px z-100 flex items-center border-b border-gray-200 bg-white opacity-0 transition-all duration-300 sm:rounded-t dark:border-gray-800 dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100 ${showSearch ? 'active' : ''}`}
                                id="searchFormMessage"
                            >
                                <div className="flex w-full items-center px-4 sm:px-7 lg:px-6">
                                    <button
                                        onClick={() => setShowSearch(false)}
                                        className="class-toggle relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                    >
                                        <em className="ni ni-arrow-left text-xl leading-6 rtl:-scale-x-100"></em>
                                    </button>
                                    <input
                                        type="text"
                                        className="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                        placeholder="Search by user or message"
                                        autoComplete="off"
                                    />
                                    <button
                                        type="submit"
                                        className="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                    >
                                        <em className="ni ni-search text-xl leading-6"></em>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <SimpleBar className="h-full max-h-full overflow-auto">
                            <div className="flex items-start justify-between px-5 pt-6 pb-8 sm:px-9 sm:pt-7 lg:px-7">
                                <div>
                                    <h4 className="font-heading leading-tighter mb-3 text-xl font-bold tracking-tight text-slate-700 lg:text-2xl dark:text-white">
                                        {message?.message.subject}
                                    </h4>
                                    <ul className="flex flex-wrap gap-2">
                                        <li className="inline-flex">
                                            <Button.Group>
                                                <Button
                                                    variant="primary-pale"
                                                    size="xs"
                                                >
                                                    Business
                                                </Button>
                                                <Button
                                                    variant="primary-pale"
                                                    size="xs"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xs leading-4.5"
                                                        name="cross"
                                                    />
                                                </Button>
                                            </Button.Group>
                                        </li>
                                        <li className="inline-flex">
                                            <Button.Group>
                                                <Button
                                                    variant="red-pale"
                                                    size="xs"
                                                >
                                                    Management
                                                </Button>
                                                <Button
                                                    variant="red-pale"
                                                    size="xs"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xs leading-4.5"
                                                        name="cross"
                                                    />
                                                </Button>
                                            </Button.Group>
                                        </li>
                                        <li className="inline-flex">
                                            <Button.Group>
                                                <Button
                                                    variant="cyan-pale"
                                                    size="xs"
                                                >
                                                    Team
                                                </Button>
                                                <Button
                                                    variant="cyan-pale"
                                                    size="xs"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xs leading-4.5"
                                                        name="cross"
                                                    />
                                                </Button>
                                            </Button.Group>
                                        </li>
                                    </ul>
                                </div>
                                <ul className="flex items-center gap-1.5">
                                    <li className="hidden sm:block">
                                        <Button.Zoom size="rg">
                                            <Icon
                                                className="text-xl text-slate-600"
                                                name="printer"
                                            />
                                        </Button.Zoom>
                                    </li>
                                    <li>
                                        <Button.Zoom
                                            size="rg"
                                            className="group/asterisk-button"
                                        >
                                            <div
                                                className={`group/asterisk relative inline-flex cursor-pointer ${message?.favourite ? 'active' : ''}`}
                                            >
                                                <Icon
                                                    className="text-lg/none text-slate-400"
                                                    name="star"
                                                />
                                                <Icon
                                                    className="absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-hover/asterisk-button:opacity-100 group-[.active]/asterisk:opacity-100 group-[.active]/asterisk-button:opacity-100"
                                                    name="star-fill"
                                                />
                                            </div>
                                        </Button.Zoom>
                                    </li>
                                </ul>
                            </div>
                            <div className="relative">
                                {message?.message.reply.map((item, index) => {
                                    return (
                                        <div
                                            key={index}
                                            className="relative px-5 pb-8 after:absolute after:inset-x-5 after:bottom-4 after:h-px after:bg-gray-200 last:after:hidden sm:px-9 sm:pb-11 sm:after:inset-x-9 sm:after:bottom-5.5 lg:px-7 after:dark:bg-gray-900"
                                        >
                                            <div
                                                className="peer group/replyheader mb-2 flex cursor-pointer items-center justify-between gap-x-4"
                                                id="reply-01"
                                            >
                                                <div className="flex flex-grow items-center group-[.is-collapsed]/replyheader:overflow-hidden">
                                                    {item.user.image ? (
                                                        <Avatar
                                                            size="rg"
                                                            rounded
                                                            img={
                                                                item.user.image
                                                            }
                                                        />
                                                    ) : (
                                                        <Avatar
                                                            size="rg"
                                                            variant={
                                                                item.user.theme
                                                            }
                                                            rounded
                                                            text={toInitials(
                                                                item.user.name,
                                                            )}
                                                        />
                                                    )}
                                                    <div className="ms-4 max-w-[calc(100%-theme(spacing.14))]">
                                                        <div className="text-sm/6 font-bold text-slate-700 dark:text-white">
                                                            {item.user.name}{' '}
                                                            <span className="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden">
                                                                14 Jan, 2020
                                                            </span>
                                                        </div>
                                                        <ReplyMetaDropdown className="dropdown group-[.is-collapsed]/replyheader:hidden" />
                                                        <div className="hidden overflow-hidden text-xs leading-6 text-ellipsis whitespace-nowrap text-slate-600 group-[.is-collapsed]/replyheader:block max-sm:mt-0.5 sm:text-sm">
                                                            I am facing problem
                                                            as i can not select
                                                            currency on buy
                                                            order page. Can you
                                                            guys let me know
                                                            what i am doing
                                                            doing wrong? Please
                                                            check attached
                                                            files.
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul className="-me-2 flex flex-shrink-0 cursor-default items-center gap-1.5">
                                                    {item.attachment && (
                                                        <li className="me-1.5 max-sm:hidden">
                                                            <Icon
                                                                className="text-xl/none"
                                                                name="clip-h"
                                                            />
                                                        </li>
                                                    )}
                                                    <li className="max-sm:hidden">
                                                        <span className="me-4 text-slate-600">
                                                            {item.date}
                                                        </span>
                                                    </li>
                                                    <li className="relative group-[.is-collapsed]/replyheader:hidden">
                                                        <Tooltip
                                                            placement="top"
                                                            content="Reply"
                                                        >
                                                            <Button.Zoom size="rg">
                                                                <Icon
                                                                    className="text-xl text-slate-600"
                                                                    name="curve-up-left"
                                                                />
                                                            </Button.Zoom>
                                                        </Tooltip>
                                                    </li>
                                                    <li className="dropdown relative group-[.is-collapsed]/replyheader:hidden">
                                                        <ReplyActionDropdown />
                                                    </li>
                                                </ul>
                                            </div>
                                            <div className="ms-12 mt-5 mb-3 peer-[.is-collapsed]:hidden sm:ms-14">
                                                <div className="entry">
                                                    {item.message.map(
                                                        (item, index) => {
                                                            return (
                                                                <p key={index}>
                                                                    {item}
                                                                </p>
                                                            );
                                                        },
                                                    )}
                                                </div>
                                                {item.attachment && (
                                                    <div className="mt-7 rounded border border-gray-200 dark:border-gray-800">
                                                        <ul className="flex flex-wrap gap-x-8 gap-y-2 px-5 py-4">
                                                            {item.attachment.map(
                                                                (
                                                                    aItem,
                                                                    aIndex,
                                                                ) => {
                                                                    return (
                                                                        <li
                                                                            key={
                                                                                aIndex
                                                                            }
                                                                            className="w-[180px]"
                                                                        >
                                                                            <a
                                                                                className="flex w-full items-center text-slate-600 dark:text-slate-300"
                                                                                href="#link"
                                                                                onClick={(
                                                                                    e,
                                                                                ) =>
                                                                                    e.preventDefault()
                                                                                }
                                                                            >
                                                                                <em className="text-primary-600 ni ni-img me-4 text-2xl/none"></em>
                                                                                <span className="line-clamp-1">
                                                                                    {
                                                                                        aItem.name
                                                                                    }
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    );
                                                                },
                                                            )}
                                                        </ul>
                                                        <div className="flex flex-wrap justify-between rounded-b border-t border-gray-200 bg-gray-50 px-5 py-3 dark:border-gray-800 dark:bg-gray-900">
                                                            <span className="text-sm font-medium text-slate-700 dark:text-white">
                                                                {
                                                                    item
                                                                        .attachment
                                                                        .length
                                                                }{' '}
                                                                files attached
                                                            </span>
                                                            <a
                                                                className="group/link inline-flex items-center gap-3.5 text-sm/none font-medium whitespace-nowrap"
                                                                href="#link"
                                                                onClick={(e) =>
                                                                    e.preventDefault()
                                                                }
                                                            >
                                                                <em className="text-primary-500 group-hover/link:text-primary-600 ni ni-download text-lg/none transition-all duration-300"></em>
                                                                <span className="group-hover/link:text-primary-600 text-slate-400 transition-all duration-300">
                                                                    Download All
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                )}
                                            </div>
                                        </div>
                                    );
                                })}
                            </div>
                            <ReplyForm />
                        </SimpleBar>
                    </div>
                </div>
            </div>
        </>
    );
};

export default InboxPage;
