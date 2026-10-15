import React, { useState } from 'react';
import SimpleBar from 'simplebar-react';
import { Button, Icon, Avatar, Switch } from '../../../componenets';
import { toInitials } from '../../../utilities';
import { Accordion, AccordionItem } from '@szhsin/react-accordion';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const Profile = ({ show, setShow, data }) => {
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
        <>
            <SimpleBar
                className={`conversation-profile peer !absolute end-0 top-0 z-[100] h-full max-h-full w-[325px] max-w-[calc(100%-2.5rem)] translate-x-full border-gray-200 bg-white transition-transform duration-300 ease-in-out 2xl:w-[365px] 2xl:border-s rtl:-translate-x-full dark:border-gray-800 dark:bg-gray-950 [&.visible]:translate-x-0 ${show ? 'visible' : ''}`}
            >
                <div className="relative flex flex-col items-center border-b border-gray-200 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-800">
                    <div className="absolute end-4 top-4">
                        <Menu as="div" className="relative inline-flex">
                            {({ open }) => (
                                <>
                                    <Menu.Button
                                        as="div"
                                        className={`inline-flex${open ? ' active' : ''}`}
                                        ref={setDropdownToggle}
                                    >
                                        <Button.Zoom size="md">
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
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                >
                                                    <Icon
                                                        className="w-7 text-start text-lg leading-none opacity-80"
                                                        name="eye"
                                                    />
                                                    <span>View Profile</span>
                                                </Menu.Item>
                                            </li>
                                            <li>
                                                <Menu.Item
                                                    as="button"
                                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                >
                                                    <Icon
                                                        className="w-7 text-start text-lg leading-none opacity-80"
                                                        name="na"
                                                    />
                                                    <span>Block Messsages</span>
                                                </Menu.Item>
                                            </li>
                                        </ul>
                                    </Menu.Items>
                                </>
                            )}
                        </Menu>
                    </div>
                    {data.user?.length > 1 ? (
                        <Avatar.GroupS2 size="xl">
                            {data.user.slice(0, 2).map((uItem, uIndex) => {
                                return (
                                    <React.Fragment key={uIndex}>
                                        {uItem.image ? (
                                            <Avatar rounded img={uItem.image} />
                                        ) : (
                                            <Avatar
                                                variant={uItem.theme}
                                                rounded
                                                text={toInitials(uItem.name)}
                                            />
                                        )}
                                    </React.Fragment>
                                );
                            })}
                        </Avatar.GroupS2>
                    ) : data.image ? (
                        <Avatar size="xl" rounded img={data.image} />
                    ) : (
                        <Avatar
                            size="xl"
                            variant={data.theme}
                            rounded
                            text={toInitials(data.name)}
                        />
                    )}
                    <div className="mt-4">
                        <h6 className="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white">
                            {data.name}
                        </h6>
                        <span className="text-sm text-slate-400">
                            Active 35m ago
                        </span>
                    </div>
                </div>

                <Accordion
                    allowMultiple
                    transition
                    transitionTimeout={250}
                    className="accordion"
                >
                    <AccordionItem
                        initialEntered
                        className="accordion-item group border-t border-gray-200 first:border-t-0 dark:border-gray-800"
                        header={({ state: { isEnter } }) => (
                            <>
                                <h6 className="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase">
                                    Options
                                </h6>
                                <Icon
                                    className={`text-primary-500 absolute end-6 top-1/2 h-5 w-5 -translate-y-1/2 text-center text-sm/5 transition-all duration-300 group-[.active]:rotate-180 ${isEnter ? 'rotate-180' : ''}`}
                                    name="chevron-down"
                                ></Icon>
                            </>
                        )}
                        contentProps={{
                            className:
                                'transition-height duration-200 ease-in-out',
                        }}
                        buttonProps={{
                            className:
                                'accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full',
                        }}
                        panelProps={{
                            className: 'accordion-body px-6 pb-6 lg:px-7',
                        }}
                    >
                        <ul className="-m-1">
                            <li className="p-1">
                                <a
                                    className="group/chatoption flex items-center"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white">
                                        <Icon
                                            className="text-base/none"
                                            name="edit-alt"
                                        ></Icon>
                                    </div>
                                    <div className="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white">
                                        Nickname
                                    </div>
                                </a>
                            </li>
                            <li className="p-1">
                                <a
                                    className="group/chatoption chat-search-toggle flex items-center"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white">
                                        <Icon
                                            className="text-base/none"
                                            name="search"
                                        ></Icon>
                                    </div>
                                    <div className="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white">
                                        Search In Conversation
                                    </div>
                                </a>
                            </li>
                            <li className="p-1">
                                <a
                                    className="group/chatoption flex items-center"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white">
                                        <Icon
                                            className="text-base/none"
                                            name="circle-fill"
                                        ></Icon>
                                    </div>
                                    <div className="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white">
                                        Change Theme
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </AccordionItem>
                    <AccordionItem
                        initialEntered
                        className="accordion-item group border-t border-gray-200 first:border-t-0 dark:border-gray-800"
                        header={({ state: { isEnter } }) => (
                            <>
                                <h6 className="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase">
                                    Settings
                                </h6>
                                <Icon
                                    className={`text-primary-500 absolute end-6 top-1/2 h-5 w-5 -translate-y-1/2 text-center text-sm/5 transition-all duration-300 group-[.active]:rotate-180 ${isEnter ? 'rotate-180' : ''}`}
                                    name="chevron-down"
                                ></Icon>
                            </>
                        )}
                        contentProps={{
                            className:
                                'transition-height duration-200 ease-in-out',
                        }}
                        buttonProps={{
                            className:
                                'accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full',
                        }}
                        panelProps={{
                            className: 'accordion-body px-6 pb-6 lg:px-7',
                        }}
                    >
                        <ul className="-m-2">
                            <li className="inline-flex p-2">
                                <Switch
                                    type="checkbox"
                                    size="sm"
                                    id="notifications"
                                    labelClass="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 !text-sm/4 font-bold ps-3 cursor-pointer inline-block"
                                >
                                    Notifications
                                </Switch>
                            </li>
                            <li className="p-2">
                                <a
                                    className="group/chatoption flex items-center"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white">
                                        <Icon
                                            className="text-base/none"
                                            name="bell-off-fill"
                                        ></Icon>
                                    </div>
                                    <div className="ms-3">
                                        <div className="mb-0.5 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-200 group-hover/chatoption:dark:text-white">
                                            Ignore Messages
                                        </div>
                                        <div className="text-xs text-slate-400">
                                            You won’t be notified when message
                                            you.
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li className="p-2">
                                <a
                                    className="group/chatoption flex items-center"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <div className="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white">
                                        <Icon
                                            className="text-base/none"
                                            name="alert-fill"
                                        ></Icon>
                                    </div>
                                    <div className="ms-3">
                                        <div className="mb-0.5 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-200 group-hover/chatoption:dark:text-white">
                                            Something Wrong
                                        </div>
                                        <div className="text-xs text-slate-400">
                                            Give feedback and report conversion.
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </AccordionItem>
                    <AccordionItem
                        initialEntered
                        className="accordion-item group border-t border-gray-200 first:border-t-0 dark:border-gray-800"
                        header={({ state: { isEnter } }) => (
                            <>
                                <h6 className="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase">
                                    Shared Photos
                                </h6>
                                <Icon
                                    className={`text-primary-500 absolute end-6 top-1/2 h-5 w-5 -translate-y-1/2 text-center text-sm/5 transition-all duration-300 group-[.active]:rotate-180 ${isEnter ? 'rotate-180' : ''}`}
                                    name="chevron-down"
                                ></Icon>
                            </>
                        )}
                        contentProps={{
                            className:
                                'transition-height duration-200 ease-in-out',
                        }}
                        buttonProps={{
                            className:
                                'accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full',
                        }}
                        panelProps={{
                            className: 'accordion-body px-6 pb-6 lg:px-7',
                        }}
                    >
                        <ul className="-m-1 flex flex-wrap">
                            <li className="inline-flex w-1/3 p-1">
                                <a
                                    className="inline-block"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <img
                                        className="rounded"
                                        src="/images/slides/slide-a.jpg"
                                        alt=""
                                    />
                                </a>
                            </li>
                            <li className="inline-flex w-1/3 p-1">
                                <a
                                    className="inline-block"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <img
                                        className="rounded"
                                        src="/images/slides/slide-b.jpg"
                                        alt=""
                                    />
                                </a>
                            </li>
                            <li className="inline-flex w-1/3 p-1">
                                <a
                                    className="inline-block"
                                    href="#link"
                                    onClick={(e) => e.preventDefault()}
                                >
                                    <img
                                        className="rounded"
                                        src="/images/slides/slide-c.jpg"
                                        alt=""
                                    />
                                </a>
                            </li>
                        </ul>
                    </AccordionItem>
                </Accordion>
            </SimpleBar>
            <div
                onClick={() => {
                    setShow(false);
                }}
                className="profile-toggle bg-opacity-20 invisible absolute inset-0 z-[99] bg-slate-950 opacity-0 peer-[.visible]:visible peer-[.visible]:opacity-100 2xl:!invisible 2xl:!opacity-0"
            ></div>
        </>
    );
};

export default Profile;
