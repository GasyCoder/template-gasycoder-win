import React, { useEffect, useState } from 'react';
import { Avatar, Button, Icon, Dropdown, Head } from '../../../../componenets';
import SimpleBar from 'simplebar-react';
import { Tab } from '@headlessui/react';
import Social from './Social';
import Security from './Security';
import Activity from './Activity';
import Notification from './Notification';
import Personal from './Personal';
import { useSearchParams } from 'react-router-dom';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../../layout/context';

const UserProfilePage = () => {
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

    const [pageAside, setPageAside] = useState(false);
    let [searchParams] = useSearchParams();
    const selectedTab = Number(searchParams.get('tab'));

    const [selectedIndex, setSelectedIndex] = useState();

    useEffect(() => {
        setSelectedIndex(selectedTab);
    }, [selectedTab]);

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
            <Head title="Profile" />
            <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <Tab.Group
                    as="div"
                    className="relative flex"
                    selectedIndex={selectedIndex}
                    onChange={setSelectedIndex}
                >
                    <div
                        id="pageAside"
                        className={`peer fixed start-0 top-0 z-[999] w-[300px] max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink-0 -translate-x-full border-e border-gray-300 bg-white transition-transform duration-500 max-lg:min-h-screen lg:static lg:transform-none lg:bg-transparent lg:transition-none 2xl:w-[380px] rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none ${pageAside ? 'active' : ''}`}
                    >
                        <SimpleBar className="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]">
                            <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                                <div className="flex items-center">
                                    <Avatar
                                        size="rg"
                                        variant="primary"
                                        rounded
                                        text="AB"
                                    />
                                    <div className="ms-4 flex flex-col">
                                        <span className="text-sm font-bold text-slate-700 dark:text-white">
                                            Abu Bin Ishtiyak
                                        </span>
                                        <span className="mt-1 text-xs text-slate-400">
                                            info@softnio.com
                                        </span>
                                    </div>
                                    <Menu
                                        as="div"
                                        className="relative ms-auto -me-2 inline-flex"
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
                                                            className="text-xl/4.5"
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
                                                                    name="camera-fill"
                                                                />
                                                                <span>
                                                                    Change Photo
                                                                </span>
                                                            </Menu.Item>
                                                        </li>
                                                        <li>
                                                            <Menu.Item
                                                                as="button"
                                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                            >
                                                                <Icon
                                                                    className="w-7 text-start text-lg leading-none opacity-80"
                                                                    name="edit-fill"
                                                                />
                                                                <span>
                                                                    Update
                                                                    Profile
                                                                </span>
                                                            </Menu.Item>
                                                        </li>
                                                    </ul>
                                                </Menu.Items>
                                            </>
                                        )}
                                    </Menu>
                                </div>
                            </div>
                            <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                                <h6 className="text-xxs mb-3 leading-tight font-bold tracking-widest whitespace-nowrap text-slate-400 uppercase">
                                    Nio Wallet Account{' '}
                                </h6>
                                <div className="text-primary-600 pb-2 text-2xl leading-none">
                                    12.395769{' '}
                                    <small className="text-base font-normal">
                                        BTC
                                    </small>
                                </div>
                                <div className="text-xs text-slate-400">
                                    Locked{' '}
                                    <span className="text-slate-600 dark:text-slate-400">
                                        0.344939 <span>BTC</span>
                                    </span>
                                </div>
                            </div>
                            <div className="relative">
                                <Tab.List as="ul" className="py-3 text-start">
                                    <li>
                                        <Tab
                                            onClick={() => {
                                                setPageAside(false);
                                            }}
                                            className="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                        >
                                            <Icon
                                                className="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                                name="user-fill-c"
                                            />
                                            <span>Personal Infomation</span>
                                            <em className="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"></em>
                                        </Tab>
                                    </li>
                                    <li>
                                        <Tab
                                            onClick={() => {
                                                setPageAside(false);
                                            }}
                                            className="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                        >
                                            <Icon
                                                className="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                                name="bell-fill"
                                            />
                                            <span>Notifications</span>
                                            <em className="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"></em>
                                        </Tab>
                                    </li>
                                    <li>
                                        <Tab
                                            onClick={() => {
                                                setPageAside(false);
                                            }}
                                            className="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                        >
                                            <Icon
                                                className="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                                name="activity-round-fill"
                                            />
                                            <span>Account Activity</span>
                                            <em className="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"></em>
                                        </Tab>
                                    </li>
                                    <li>
                                        <Tab
                                            onClick={() => {
                                                setPageAside(false);
                                            }}
                                            className="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                        >
                                            <Icon
                                                className="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                                name="lock-alt-fill"
                                            />
                                            <span>Security Settings</span>
                                            <em className="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"></em>
                                        </Tab>
                                    </li>
                                    <li>
                                        <Tab
                                            onClick={() => {
                                                setPageAside(false);
                                            }}
                                            className="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                        >
                                            <Icon
                                                className="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                                name="grid-add-fill-c"
                                            />
                                            <span>Connected with Social</span>
                                            <em className="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"></em>
                                        </Tab>
                                    </li>
                                </Tab.List>
                            </div>
                        </SimpleBar>
                    </div>
                    <div
                        onClick={() => {
                            setPageAside(false);
                        }}
                        className="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
                    ></div>
                    <div className="flex-grow">
                        <Tab.Panels className="tab-content p-5 sm:p-10">
                            <Tab.Panel>
                                <Personal pageAside={setPageAside} />
                            </Tab.Panel>
                            <Tab.Panel>
                                <Notification pageAside={setPageAside} />
                            </Tab.Panel>
                            <Tab.Panel>
                                <Activity pageAside={setPageAside} />
                            </Tab.Panel>
                            <Tab.Panel>
                                <Security pageAside={setPageAside} />
                            </Tab.Panel>
                            <Tab.Panel>
                                <Social pageAside={setPageAside} />
                            </Tab.Panel>
                        </Tab.Panels>
                    </div>
                </Tab.Group>
            </div>
        </>
    );
};

export default UserProfilePage;
