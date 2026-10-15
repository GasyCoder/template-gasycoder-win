import React, { useState, useEffect } from 'react';
import SimpleBar from 'simplebar-react';
import { Button, Icon, Avatar, Head } from '../../../componenets';
import Profile from './Profile';
import ReplyForm from './ReplyForm';
import ReplyMessages from './ReplyMessages';

import { messageData } from '../../../store/messages';
import { toInitials } from '../../../utilities';
import { Tab } from '@headlessui/react';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const MessagesPage = () => {
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

    const [showProfile, setShowProfile] = useState(true);
    const [showSearch, setShowSearch] = useState(false);
    const [showMessage, setShowMessage] = useState(1);

    const message = messageData.filter(
        (message) => message.id === showMessage,
    )[0];

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

    return (
        <>
            <Head title="Messages - Support Ticket" />
            <div className="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <div className="bg-opacity-70 relative flex max-h-full w-full flex-shrink-0 flex-col overflow-hidden rounded-s bg-slate-50 lg:w-[320px] lg:border-e lg:border-gray-200 2xl:w-[380px] dark:border-gray-800 dark:bg-gray-900">
                    <div className="relative z-[2] rounded-ss border-b border-gray-200 bg-slate-50 px-5 sm:px-8 lg:px-7 dark:border-gray-800 dark:bg-slate-900">
                        <Tab.Group>
                            <Tab.List as="ul" className="-mx-3 flex">
                                <li className="group/navitem px-3">
                                    <Tab
                                        className="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        Active
                                    </Tab>
                                </li>
                                <li className="group/navitem px-3">
                                    <Tab
                                        className="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        Closed
                                    </Tab>
                                </li>
                                <li className="group/navitem px-3">
                                    <Tab
                                        className="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        Stared
                                    </Tab>
                                </li>
                                <li className="group/navitem px-3">
                                    <Tab
                                        className="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                    >
                                        All
                                    </Tab>
                                </li>
                                <li className="group/navitem ms-auto px-3">
                                    <button
                                        onClick={() => {
                                            setShowSearch(true);
                                        }}
                                        className="hover:text-primary-600 group-[.active]/navitem:text-primary-600 after:bg-primary-600 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100"
                                    >
                                        <Icon
                                            className="text-lg leading-6"
                                            name="search"
                                        />
                                    </button>
                                </li>
                            </Tab.List>
                        </Tab.Group>
                        <div
                            className={`invisible absolute inset-0 -bottom-px z-[800] flex items-center border-b border-gray-200 bg-white opacity-0 transition-all duration-300 sm:rounded-t dark:border-gray-800 dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100 ${showSearch ? 'active' : ''}`}
                            id="searchForm"
                        >
                            <div className="flex w-full items-center px-4 sm:px-7 lg:px-6">
                                <button
                                    onClick={() => {
                                        setShowSearch(false);
                                    }}
                                    className="relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <Icon
                                        className="text-lg/6 rtl:-scale-x-100"
                                        name="arrow-left"
                                    />
                                </button>
                                <input
                                    type="text"
                                    className="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Search by user or message"
                                    autoComplete="off"
                                />
                                <button
                                    type="submit"
                                    className="hover:text-primary-600 relative -me-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <Icon className="text-lg/6" name="search" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <SimpleBar className="h-full max-h-full overflow-auto">
                        {messageData.map((item, index) => {
                            return (
                                <div
                                    onClick={() => {
                                        setShowMessage(item.id);
                                    }}
                                    key={index}
                                    className={`group/messageitem conversation-item flex cursor-pointer border-b border-gray-200 px-5 py-5 last:border-b-0 sm:px-8 lg:px-7 dark:border-gray-800 [&.current]:cursor-default [&.current]:bg-white [&.current]:dark:bg-gray-950 ${item.unread ? 'is-unread' : ''} ${showMessage === item.id ? 'current' : ''}`}
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
                                            text={toInitials(item.name)}
                                        />
                                    )}
                                    <div className="max-w-(calc(100%-theme(spacing.15))) ms-3 flex-grow">
                                        <div className="flex items-center justify-between">
                                            <div className="inline-flex items-center text-xs/5 text-slate-400 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                                                <span>{item.name}</span>
                                                {item.closed && (
                                                    <div className="ms-1 inline-block h-1.5 w-1.5 rounded-full bg-pink-400"></div>
                                                )}
                                            </div>
                                            <div className="inline-flex items-center text-xs text-slate-400">
                                                {item.attactchment && (
                                                    <div className="inline-flex">
                                                        <em className="ni ni-clip-h text-lg/none"></em>
                                                    </div>
                                                )}
                                                <div className="ms-3">
                                                    {item.date}
                                                </div>
                                            </div>
                                        </div>
                                        <div className="mt-2 flex justify-between">
                                            <div className="max-w-[calc(100%-theme(spacing.7))] flex-grow-0 pe-2">
                                                <h6 className="font-heading leading-tighter mb-1 line-clamp-1 text-sm font-bold text-slate-700 dark:text-white">
                                                    {item.title}
                                                </h6>
                                                <p className="line-clamp-2 text-[13px] text-slate-400 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">
                                                    {item.excerpt}
                                                </p>
                                            </div>
                                            <div className="inline-flex flex-col py-0.5 text-center">
                                                {item.unread && (
                                                    <div className="unread">
                                                        <span className="border-primary-600 bg-primary-600 text-xxs tracking-snug relative inline-flex rounded-sm border px-1 text-center align-middle leading-3.5 font-medium whitespace-nowrap text-white">
                                                            {item.unread}
                                                        </span>
                                                    </div>
                                                )}
                                                <div
                                                    className={`group/asterisk relative mt-auto inline-flex cursor-pointer ${item.marked ? 'active' : ''}`}
                                                >
                                                    <em className="ni ni-star text-lg/none text-slate-400"></em>
                                                    <em className="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            );
                        })}
                    </SimpleBar>
                </div>
                {message ? (
                    <div
                        className={`conversation-body group/messagebody pointer-events-none absolute inset-0 z-[5] flex flex-grow flex-col overflow-hidden bg-white opacity-0 transition-all duration-300 ease-in-out lg:pointer-events-auto lg:static lg:opacity-100 dark:bg-gray-950 [&.conversation-shown]:pointer-events-auto [&.conversation-shown]:opacity-100 [&.profile-shown]:2xl:pe-[280px] ${showMessage ? 'conversation-shown' : ''} ${showProfile ? 'profile-shown' : ''}`}
                    >
                        <div className="relative border-b border-gray-200 px-5 py-3 sm:px-9 sm:py-4 lg:py-8 dark:border-gray-800">
                            <h4 className="font-heading leading-tighter mb-2 line-clamp-1 hidden text-2xl font-bold tracking-tight text-slate-700 sm:mb-4 lg:block dark:text-white">
                                {message.title}
                            </h4>
                            <div className="flex items-center justify-between">
                                <div className="hidden lg:block">
                                    <ul className="flex flex-wrap gap-6">
                                        <li>
                                            <span className="inline-flex items-center gap-2 text-slate-400">
                                                <Icon
                                                    className="text-primary-600 text-sm/none"
                                                    name="flag-fill"
                                                ></Icon>
                                                <span>Technical Problem</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div className="-ms-2 lg:hidden">
                                    <Button.Zoom
                                        onClick={() => {
                                            setShowMessage(null);
                                        }}
                                    >
                                        <Icon
                                            className="text-xl rtl:-scale-x-100"
                                            name="arrow-left"
                                        />
                                    </Button.Zoom>
                                </div>
                                <ul className="flex gap-2">
                                    <li>
                                        <Button
                                            size="sm"
                                            variant="light-pale-outline"
                                        >
                                            <Icon
                                                className="text-base leading-4.5"
                                                name="check"
                                            />
                                            <span className="ms-3">
                                                Mark as Closed
                                            </span>
                                        </Button>
                                    </li>
                                    <li className="lg:hidden">
                                        <Button
                                            onClick={() => {
                                                setShowProfile(!showProfile);
                                            }}
                                            size="sm"
                                            variant="light"
                                            className="bg-white"
                                            icon
                                        >
                                            <Icon
                                                className="text-base"
                                                name="info-i"
                                            />
                                        </Button>
                                    </li>
                                    <li>
                                        <Menu
                                            as="div"
                                            className="relative inline-flex"
                                        >
                                            {({ open }) => (
                                                <>
                                                    <Menu.Button
                                                        as="div"
                                                        className={`inline-flex${open ? ' active' : ''}`}
                                                        ref={setDropdownToggle}
                                                    >
                                                        <Button
                                                            size="sm"
                                                            variant="light"
                                                            className="bg-white"
                                                            icon
                                                        >
                                                            <Icon
                                                                className="text-lg"
                                                                name="more-h"
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
                                                        <ul className="p-1">
                                                            <li className="rounded">
                                                                <Menu.Item
                                                                    as="button"
                                                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        className="w-7 text-start text-lg leading-none opacity-80"
                                                                        name="user-add"
                                                                    />
                                                                    <span>
                                                                        Assign
                                                                        To
                                                                        Member
                                                                    </span>
                                                                </Menu.Item>
                                                            </li>
                                                            <li className="rounded">
                                                                <Menu.Item
                                                                    as="button"
                                                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        className="w-7 text-start text-lg leading-none opacity-80"
                                                                        name="archive"
                                                                    />
                                                                    <span>
                                                                        Move to
                                                                        Archive
                                                                    </span>
                                                                </Menu.Item>
                                                            </li>
                                                            <li className="rounded">
                                                                <Menu.Item
                                                                    as="button"
                                                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        className="w-7 text-start text-lg leading-none opacity-80"
                                                                        name="done"
                                                                    />
                                                                    <span>
                                                                        Mark as
                                                                        Close
                                                                    </span>
                                                                </Menu.Item>
                                                            </li>
                                                        </ul>
                                                    </Menu.Items>
                                                </>
                                            )}
                                        </Menu>
                                    </li>
                                </ul>
                            </div>
                            <button
                                onClick={() => {
                                    setShowProfile(!showProfile);
                                }}
                                className="absolute -end-4.5 -bottom-4.5 z-[2] me-13 hidden h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-slate-400 transition-all duration-300 ease-in-out group-[.profile-shown]/messagebody:me-0 group-[.profile-shown]/messagebody:-rotate-180 lg:flex 2xl:z-[200] dark:border-gray-800 dark:bg-gray-950"
                            >
                                <Icon
                                    className="text-lg/none rtl:-scale-x-100"
                                    name="arrow-left"
                                />
                            </button>
                        </div>
                        <SimpleBar className="h-full max-h-full overflow-auto">
                            <ReplyMessages data={message} />
                            <ReplyForm />
                        </SimpleBar>
                        <Profile
                            show={showProfile}
                            setShow={setShowProfile}
                            data={message}
                        />
                    </div>
                ) : (
                    <div className="flex flex-grow flex-col items-center justify-center bg-white dark:bg-gray-950">
                        <div className="dark:bg-gray-1000 mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-gray-100 text-slate-700 dark:text-white">
                            <Icon className="text-2xl" name="chat" />
                        </div>
                        <div className="text-lg text-slate-600 dark:text-slate-200">
                            Select a Message
                        </div>
                    </div>
                )}
            </div>
        </>
    );
};

export default MessagesPage;
