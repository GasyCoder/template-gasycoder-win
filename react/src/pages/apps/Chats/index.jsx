import React, { useState, useEffect, useLayoutEffect } from 'react';
import Profile from './Profile';
import { Avatar, Button, Head, Icon } from '../../../componenets';
import { chatData, chatFav } from '../../../store/chats';
import SimpleBar from 'simplebar-react';
import { toInitials } from '../../../utilities';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ProfileDropdown = ({ className }) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-end' : 'bottom-start',
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
                        <button className="dropdown-toggle peer flex items-center *:pointer-events-none">
                            <Avatar
                                size="rg"
                                rounded
                                img="/images/avatar/b-sm.jpg"
                            />
                            <div className="ms-4 text-xl text-slate-700 dark:text-white">
                                Chats
                            </div>
                            <Icon
                                className="ms-4 text-lg/none"
                                name="chevron-down"
                            />
                        </button>
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
                                    <span>Contacts</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Channels</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Help</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};
const SettingsDropdown = ({ className }) => {
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
                        <Button icon pill size="rg" variant="light">
                            <Icon
                                className="text-xl/none"
                                name="setting-alt-fill"
                            />
                        </Button>
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
                                    <span>Settings</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Message Requests</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Archives Chats</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Unread Chats</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Group Chats</span>
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
                                className="text-lg text-slate-600 dark:text-slate-300"
                                name="more-h"
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
                                    <span>Mute</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Hide</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Delete</span>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Mark as Unread</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Ignore Messages</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Block Messages</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ItemOptionsDropdown = ({ className }) => {
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
                                className="text-primary-600 text-xl/none"
                                name="setting-fill"
                            ></Icon>
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
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="archive"
                                    ></Icon>
                                    <span>Make as Archive</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="cross-c"
                                    ></Icon>
                                    <span>Remove Conversion</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="setting"
                                    ></Icon>
                                    <span>More Options</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const MessageOptionsDropdown = ({
    className,
    placement,
    rtlPlacement,
    offset,
    rtlOffset,
}) => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? rtlPlacement : placement,
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: theme.direction === 'rtl' ? rtlOffset : offset,
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
                            <Icon
                                className="text-base/none"
                                name="more-h"
                            ></Icon>
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li className="sm:hidden">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="reply-fill"
                                    ></Icon>
                                    <span>Reply</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="pen-alt-fill"
                                    ></Icon>{' '}
                                    <span>Edit</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="trash-fill"
                                    ></Icon>{' '}
                                    <span>Remove</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ChatsPage = () => {
    const [showProfile, setShowProfile] = useState(true);
    const [showChat, setShowChat] = useState(null);
    const [showUploadOption, setShowUploadOption] = useState(false);

    const chat = chatData.filter((chat) => chat.id === showChat)[0];

    useEffect(() => {
        const handleAside = () => {
            if (window.innerWidth < 1536) {
                setShowProfile(false);
            } else {
                setShowProfile(true);
            }
        };

        handleAside();
        window.addEventListener('resize', handleAside);
        return () => {
            window.removeEventListener('resize', handleAside);
        };
    }, []);

    useLayoutEffect(() => {
        const handlePreview = () => {
            if (window.innerWidth > 1023) {
                setShowChat(1);
            }
        };

        handlePreview();
    }, []);

    return (
        <>
            <Head title="Chats" />
            <div className="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <div className="relative flex max-h-full w-full flex-shrink-0 flex-col overflow-hidden rounded-s lg:w-[320px] lg:border-e lg:border-gray-200 2xl:w-[380px] dark:border-gray-800">
                    <div className="flex items-center justify-between px-5 pt-4.5 pb-4 md:px-7">
                        <ProfileDropdown />
                        <ul className="flex items-center gap-3">
                            <li>
                                <SettingsDropdown />
                            </li>
                            <li>
                                <Button icon pill size="rg" variant="light">
                                    <Icon
                                        className="text-xl/none"
                                        name="edit-alt-fill"
                                    />
                                </Button>
                            </li>
                        </ul>
                    </div>
                    <SimpleBar className="h-full max-h-full overflow-auto">
                        <div className="px-5 pt-1 pb-7 md:px-7">
                            <div className="relative">
                                <div className="absolute start-0 top-0 flex h-9 w-9 items-center justify-center">
                                    <Icon
                                        className="text-base/none text-slate-400"
                                        name="search"
                                    />
                                </div>
                                <input
                                    type="text"
                                    className="focus:border-primary-500 focus:dark:border-primary-600 focus:outline-primary-200 focus:dark:outline-primary-950 block h-9 w-full rounded-full border border-gray-100 bg-gray-100 py-1.5 ps-10 pe-4 text-xs/4.5 text-slate-700 placeholder-slate-300 transition-all outline-none placeholder:text-slate-400 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:border-gray-900 dark:bg-gray-900 dark:text-white disabled:dark:bg-slate-950"
                                    id="default-03"
                                    placeholder="Search by name"
                                />
                            </div>
                        </div>
                        <div className="px-5 pb-7 lg:px-7">
                            <h6 className="text-xxs/tight mb-3 font-bold tracking-widest text-slate-400 uppercase">
                                Favorites
                            </h6>
                            <ul className="flex gap-2.5 overflow-x-auto md:flex-wrap">
                                <li>
                                    <a
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                        className="relative inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-center align-middle text-base leading-4.5 font-bold tracking-wide text-slate-600 transition-all duration-300 hover:bg-gray-700 hover:text-white active:bg-gray-800 active:active:text-white active:text-white dark:border-gray-800 dark:bg-gray-950 dark:text-white hover:dark:bg-gray-700 hover:dark:text-white active:dark:bg-gray-800"
                                    >
                                        <Icon
                                            className="text-2xl/4.5"
                                            name="plus"
                                        />
                                    </a>
                                </li>
                                {chatFav.map((item, index) => {
                                    return (
                                        <li key={index}>
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
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
                                                        text={toInitials(
                                                            item.name,
                                                        )}
                                                    />
                                                )}
                                            </a>
                                        </li>
                                    );
                                })}
                            </ul>
                        </div>
                        <div className="px-2 lg:px-4">
                            <h6 className="text-xxs/tight ms-3 mb-3 font-bold tracking-widest text-slate-400 uppercase">
                                Messages
                            </h6>
                            <ul>
                                {chatData.map((item, index) => {
                                    return (
                                        <li
                                            key={index}
                                            className={`group/chatitem conversation-item [&.current]:dark:bg-gray-1000 relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900 [&.current]:bg-gray-50 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900 ${item.lastStatus === 'unread' ? 'is-unread' : ''} ${showChat === item.id ? 'current' : ''}`}
                                        >
                                            <a
                                                className="flex w-full cursor-pointer items-center p-3"
                                                onClick={() =>
                                                    setShowChat(item.id)
                                                }
                                                href="#link"
                                            >
                                                {item.user?.length > 1 ? (
                                                    <Avatar.GroupS2 size="rg">
                                                        {item.user
                                                            .slice(0, 2)
                                                            .map(
                                                                (
                                                                    uItem,
                                                                    uIndex,
                                                                ) => {
                                                                    return (
                                                                        <React.Fragment
                                                                            key={
                                                                                uIndex
                                                                            }
                                                                        >
                                                                            {uItem.image ? (
                                                                                <Avatar
                                                                                    rounded
                                                                                    img={
                                                                                        uItem.image
                                                                                    }
                                                                                />
                                                                            ) : (
                                                                                <Avatar
                                                                                    variant={
                                                                                        uItem.theme
                                                                                    }
                                                                                    rounded
                                                                                    text={toInitials(
                                                                                        uItem.name,
                                                                                    )}
                                                                                />
                                                                            )}
                                                                        </React.Fragment>
                                                                    );
                                                                },
                                                            )}
                                                    </Avatar.GroupS2>
                                                ) : item.image ? (
                                                    <Avatar
                                                        status={
                                                            item.online !==
                                                                'invisible' &&
                                                            item.online
                                                        }
                                                        size="rg"
                                                        rounded
                                                        img={item.image}
                                                    />
                                                ) : (
                                                    <Avatar
                                                        status={
                                                            item.online !==
                                                                'invisible' &&
                                                            item.online
                                                        }
                                                        size="rg"
                                                        variant={item.theme}
                                                        rounded
                                                        text={toInitials(
                                                            item.name,
                                                        )}
                                                    />
                                                )}
                                                <div className="w-[calc(100%-theme(spacing.15))] ms-4">
                                                    <div className="flex items-center justify-between">
                                                        <div className="mb-1 text-sm font-medium text-slate-600 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 dark:text-white group-[.is-unread]/chatitem:dark:text-white">
                                                            {item.name}
                                                        </div>
                                                        <span className="text-xs text-slate-400">
                                                            {item.date}
                                                        </span>
                                                    </div>
                                                    <div className="flex items-center justify-between">
                                                        <div className="line-clamp-1 w-[calc(100%-theme(spacing.10))] text-xs text-slate-400 group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600">
                                                            <p>
                                                                {
                                                                    item
                                                                        .messages[
                                                                        item
                                                                            .messages
                                                                            .length -
                                                                            1
                                                                    ].chat[
                                                                        item
                                                                            .messages[
                                                                            item
                                                                                .messages
                                                                                .length -
                                                                                1
                                                                        ].chat
                                                                            .length -
                                                                            1
                                                                    ]
                                                                }
                                                            </p>
                                                        </div>
                                                        {item.lastStatus ===
                                                            'delivered' && (
                                                            <div className="flex text-slate-400">
                                                                <Icon
                                                                    className="text-sm/none"
                                                                    name="check-circle-fill"
                                                                ></Icon>
                                                            </div>
                                                        )}
                                                        {item.lastStatus ===
                                                            'sent' && (
                                                            <div className="flex text-slate-400">
                                                                <Icon
                                                                    className="text-sm/none"
                                                                    name="check-circle"
                                                                ></Icon>
                                                            </div>
                                                        )}
                                                        {item.lastStatus ===
                                                            'unread' && (
                                                            <div className="text-primary-600 flex">
                                                                <Icon
                                                                    className="text-sm/none"
                                                                    name="bullet-fill"
                                                                ></Icon>
                                                            </div>
                                                        )}
                                                    </div>
                                                </div>
                                            </a>
                                            <div className="pointer-events-none absolute inset-y-0 end-3 z-[2] flex w-12 items-center justify-end bg-gray-100 opacity-0 transition-all group-hover/chatitem:pointer-events-auto group-hover/chatitem:opacity-100 dark:bg-gray-900">
                                                <ItemActionDropdown />
                                            </div>
                                        </li>
                                    );
                                })}
                            </ul>
                        </div>
                    </SimpleBar>
                </div>
                {chat ? (
                    <div
                        className={`conversation-body group/messagebody pointer-events-none absolute inset-0 z-[5] flex flex-grow flex-col overflow-hidden bg-white opacity-0 transition-all duration-300 ease-in-out lg:pointer-events-auto lg:static lg:opacity-100 dark:bg-gray-950 [&.conversation-shown]:pointer-events-auto [&.conversation-shown]:opacity-100 [&.profile-shown]:2xl:pe-[365px] ${showProfile ? 'profile-shown' : ''} ${showChat !== null ? 'conversation-shown' : ''}`}
                    >
                        <div className="relative flex items-center justify-between border-b border-gray-200 bg-white px-7 py-4 dark:border-gray-800 dark:bg-gray-950">
                            <ul className="-m-0.5 flex items-center sm:-m-1.5">
                                <li className="-ms-3 p-0.5 sm:p-1.5 lg:hidden">
                                    <Button.Zoom
                                        size="rg"
                                        onClick={() => setShowChat(null)}
                                    >
                                        <Icon
                                            className="text-xl/none rtl:-scale-x-100"
                                            name="arrow-left"
                                        ></Icon>
                                    </Button.Zoom>
                                </li>
                                <li className="p-0.5 sm:p-1.5">
                                    <div className="flex items-center">
                                        {chat.user?.length > 1 ? (
                                            <Avatar.GroupS2 size="rg">
                                                {chat.user
                                                    .slice(0, 2)
                                                    .map((uItem, uIndex) => {
                                                        return (
                                                            <React.Fragment
                                                                key={uIndex}
                                                            >
                                                                {uItem.image ? (
                                                                    <Avatar
                                                                        rounded
                                                                        img={
                                                                            uItem.image
                                                                        }
                                                                    />
                                                                ) : (
                                                                    <Avatar
                                                                        variant={
                                                                            uItem.theme
                                                                        }
                                                                        rounded
                                                                        text={toInitials(
                                                                            uItem.name,
                                                                        )}
                                                                    />
                                                                )}
                                                            </React.Fragment>
                                                        );
                                                    })}
                                            </Avatar.GroupS2>
                                        ) : chat.image ? (
                                            <Avatar
                                                size="rg"
                                                rounded
                                                img={chat.image}
                                            />
                                        ) : (
                                            <Avatar
                                                size="rg"
                                                variant={chat.theme}
                                                rounded
                                                text={toInitials(chat.name)}
                                            />
                                        )}
                                        <div className="ms-4">
                                            <div className="mb-1 line-clamp-1 text-sm font-bold text-slate-700 dark:text-white">
                                                {chat.name}
                                            </div>
                                            <div className="text-xs text-slate-400">
                                                <span className="me-0.5 hidden sm:inline-block">
                                                    Active{' '}
                                                </span>{' '}
                                                35m ago
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul className="-m-0.5 flex items-center sm:-m-1.5">
                                <li className="p-0.5 sm:p-1.5">
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-primary-600 text-xl/none"
                                            name="call-fill"
                                        ></Icon>
                                    </Button.Zoom>
                                </li>
                                <li className="p-0.5 sm:p-1.5">
                                    <Button.Zoom size="rg">
                                        <Icon
                                            className="text-primary-600 text-xl/none"
                                            name="video-fill"
                                        ></Icon>
                                    </Button.Zoom>
                                </li>
                                <li className="hidden p-0.5 sm:block sm:p-1.5">
                                    <ItemOptionsDropdown />
                                </li>
                                <li className="-me-3 p-0.5 sm:p-1.5">
                                    <Button.Zoom
                                        onClick={() =>
                                            setShowProfile(!showProfile)
                                        }
                                        size="rg"
                                        className={showProfile ? 'active' : ''}
                                    >
                                        <Icon
                                            className="text-primary-600 text-xl/none"
                                            name="alert-circle-fill"
                                        ></Icon>
                                    </Button.Zoom>
                                </li>
                            </ul>
                        </div>
                        <SimpleBar className="dark:bg-gray-1000 bg-opacity-70 h-full max-h-full overflow-auto bg-gray-100 p-5 lg:px-7">
                            {chat.messages.map((item, index) => {
                                return (
                                    <React.Fragment key={index}>
                                        {item.separator ? (
                                            <div className="overflow-hidden py-4 text-center">
                                                {' '}
                                                <div className="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-300 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-300 before:dark:bg-gray-900 after:dark:bg-gray-900">
                                                    <span>
                                                        {item.separator.date}
                                                    </span>
                                                </div>{' '}
                                            </div>
                                        ) : (
                                            <div
                                                className={`group/chat -m-1 flex items-end pt-2 first:pt-0 ${item.me ? 'is-me' : 'is-you'}`}
                                            >
                                                {!item.me && (
                                                    <div className="mb-6 p-1">
                                                        {chat.image ? (
                                                            <Avatar
                                                                size="rg"
                                                                rounded
                                                                img={chat.image}
                                                            />
                                                        ) : (
                                                            <Avatar
                                                                size="rg"
                                                                variant={
                                                                    chat.theme
                                                                }
                                                                rounded
                                                                text={toInitials(
                                                                    chat.name,
                                                                )}
                                                            />
                                                        )}
                                                    </div>
                                                )}
                                                <div
                                                    className={`p-1 ${item.me ? 'w-full' : ''}`}
                                                >
                                                    <div className="chat-bubbles">
                                                        {item.chat.map(
                                                            (cItem, cIndex) => {
                                                                return (
                                                                    <div
                                                                        key={
                                                                            cIndex
                                                                        }
                                                                        className={`group/chatbubble flex items-center py-0.5 ${item.me ? 'flex-row-reverse' : ''}`}
                                                                    >
                                                                        <div
                                                                            className={`px-4 py-2 ${item.me ? 'bg-primary-600 rounded-lg text-white group-last/chatbubble:ltr:rounded-br-none group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-last/chatbubble:rtl:rounded-bl-none group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl' : 'rounded-lg bg-white group-last/chatbubble:ltr:rounded-bl-none group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-last/chatbubble:rtl:rounded-br-none group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-br dark:bg-gray-900'}`}
                                                                        >
                                                                            {
                                                                                cItem
                                                                            }
                                                                        </div>
                                                                        <ul
                                                                            className={`mx-3 flex flex-shrink-0 items-center opacity-0 transition-all duration-300 group-hover/chatbubble:opacity-100 ${item.me ? 'flex-row-reverse' : ''}`}
                                                                        >
                                                                            <li className="hidden md:block">
                                                                                <Button.Zoom size="sm">
                                                                                    <Icon
                                                                                        className="text-base/none"
                                                                                        name="reply-fill"
                                                                                    ></Icon>
                                                                                </Button.Zoom>
                                                                            </li>
                                                                            <li>
                                                                                <MessageOptionsDropdown
                                                                                    placement={
                                                                                        item.me
                                                                                            ? 'bottom-start'
                                                                                            : 'bottom-end'
                                                                                    }
                                                                                    rtlPlacement={
                                                                                        item.me
                                                                                            ? 'bottom-end'
                                                                                            : 'bottom-start'
                                                                                    }
                                                                                    offset={
                                                                                        item.me
                                                                                            ? [
                                                                                                  14,
                                                                                                  -8,
                                                                                              ]
                                                                                            : [
                                                                                                  -14,
                                                                                                  -8,
                                                                                              ]
                                                                                    }
                                                                                    rtlOffset={
                                                                                        item.me
                                                                                            ? [
                                                                                                  -14,
                                                                                                  -8,
                                                                                              ]
                                                                                            : [
                                                                                                  14,
                                                                                                  -8,
                                                                                              ]
                                                                                    }
                                                                                />
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                );
                                                            },
                                                        )}
                                                    </div>
                                                    <ul
                                                        className={`flex items-center gap-3 pt-1 ${item.me ? 'justify-end' : ''}`}
                                                    >
                                                        <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                            {item.date}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        )}
                                    </React.Fragment>
                                );
                            })}
                        </SimpleBar>
                        <div className="flex items-center bg-white px-5 py-4 dark:bg-gray-950">
                            <div className="relative z-[2] -ms-1.5 flex items-center">
                                <Button.Zoom
                                    onClick={() =>
                                        setShowUploadOption(!showUploadOption)
                                    }
                                    size="sm"
                                    className={showUploadOption ? 'active' : ''}
                                >
                                    <Icon
                                        className="text-primary-600 text-2xl/none"
                                        name="plus-circle-fill"
                                    ></Icon>
                                </Button.Zoom>
                                <div
                                    className={`absolute start-full hidden bg-white p-2 dark:bg-gray-950 [&.active]:block ${showUploadOption ? 'active' : ''}`}
                                >
                                    <ul className="flex items-center">
                                        <li>
                                            <a
                                                className="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-xl/none"
                                                    name="img-fill"
                                                ></Icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-xl/none"
                                                    name="camera-fill"
                                                ></Icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-xl/none"
                                                    name="mic"
                                                ></Icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                className="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                <Icon
                                                    className="text-xl/none"
                                                    name="grid-sq"
                                                ></Icon>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div className="flex-grow px-2">
                                <div className="form-control-wrap">
                                    <textarea
                                        className="box-border block h-9 w-full flex-grow resize-none rounded border-0 bg-white px-2 py-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                        rows="1"
                                        id="default-textarea"
                                        placeholder="Type your message..."
                                    ></textarea>
                                </div>
                            </div>
                            <ul className="flex items-center gap-1.5">
                                <li>
                                    <Button.Zoom size="sm">
                                        <Icon
                                            className="text-primary-600 text-xl/none"
                                            name="happyf-fill"
                                        ></Icon>
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button
                                        size="rg"
                                        icon
                                        pill
                                        variant="primary"
                                    >
                                        <Icon
                                            className="text-xl/4.5"
                                            name="send-alt"
                                        ></Icon>
                                    </Button>
                                </li>
                            </ul>
                        </div>
                        <Profile
                            show={showProfile}
                            setShow={setShowProfile}
                            data={chat}
                        />
                    </div>
                ) : (
                    <div className="dark:bg-gray-1000 flex flex-grow flex-col items-center justify-center bg-gray-100">
                        <div className="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-white text-slate-700 dark:bg-gray-950 dark:text-white">
                            <Icon className="text-2xl" name="chat" />
                        </div>
                        <div className="text-lg text-slate-600 dark:text-slate-200">
                            Select a chat
                        </div>
                    </div>
                )}
            </div>
        </>
    );
};

export default ChatsPage;
