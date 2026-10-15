import React, { useState } from 'react';
import { Button, Head, Icon, PageHead } from '../../../componenets';
import AudienceOverviewCard from './AudienceOverviewCard';
import ActiveUsersCard from './ActiveUsersCard';
import WebsitePerformanceCard from './WebsitePerformanceCard';
import TrafficChannelListCard from './TrafficChannelListCard';
import TrafficChannelCard from './TrafficChannelCard';
import UsersCountryCard from './UsersCountryCard';
import BrowserUsedCard from './BrowserUsedCard';
import PagesViewCard from './PagesViewCard';
import SessionsCard from './SessionsCard';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const AnalyticsHomepage = () => {
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
        <>
            <Head title="Analytics Dashboard" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Website Analytics</PageHead.Title>
                    <PageHead.SubTitle>
                        Welcome to Analytics Dashboard.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <PageHead.Option>
                        <ul className="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                            <li>
                                <Menu as="div" className="relative inline-flex">
                                    {({ open }) => (
                                        <>
                                            <Menu.Button
                                                as="div"
                                                className={`inline-flex${open ? ' active' : ''}`}
                                                ref={setDropdownToggle}
                                            >
                                                <Button
                                                    size="rg"
                                                    variant="white-outline"
                                                >
                                                    <Icon
                                                        className="me-3 hidden text-xl/4.5 sm:inline"
                                                        name="calender-date"
                                                    />
                                                    <span className="me-4">
                                                        <span className="hidden md:inline">
                                                            Last
                                                        </span>{' '}
                                                        30 Days
                                                    </span>
                                                    <Icon
                                                        className="text-xl/4.5 rtl:-scale-x-100"
                                                        name="chevron-right"
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
                                                            <span>
                                                                Last 30 Days
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Last 6 Months
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Last 1 Years
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                </ul>
                                            </Menu.Items>
                                        </>
                                    )}
                                </Menu>
                            </li>
                            <li className="ms-auto">
                                <Button size="rg" variant="primary">
                                    <Icon
                                        className="text-xl/4.5"
                                        name="reports"
                                    />
                                    <span className="ms-3">Reports</span>
                                </Button>
                            </li>
                        </ul>
                    </PageHead.Option>
                </PageHead.Group>
            </PageHead>
            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                <div className="col-span-12 lg:col-span-8 2xl:col-span-6">
                    <AudienceOverviewCard />
                </div>
                <div className="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                    <ActiveUsersCard />
                </div>
                <div className="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                    <WebsitePerformanceCard />
                </div>
                <div className="col-span-12 lg:col-span-8 2xl:col-span-6">
                    <TrafficChannelListCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-3">
                    <TrafficChannelCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-3">
                    <UsersCountryCard />
                </div>
                <div className="col-span-12 2xl:col-span-6">
                    <BrowserUsedCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-3">
                    <PagesViewCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-3">
                    <SessionsCard />
                </div>
            </div>
        </>
    );
};
export default AnalyticsHomepage;
