import React, { useState } from 'react';
import { Button, Head, Icon, PageHead } from '../../../componenets';
import OrdersOverviewCard from './OrdersOverviewCard';
import OrdersActivitiesCard from './OrdersActivitiesCard';
import ActionCenterCard from './ActionCenterCard';
import TopCoinCard from './TopCoinCard';
import UserActivitiesCard from './UserActivitiesCard';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const CryptoHomepage = () => {
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
            <Head title="Crypto Dashboard" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Overview</PageHead.Title>
                    <PageHead.SubTitle>
                        Welcome to Crypto Buy/Sell Platform.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <PageHead.Option>
                        <ul className="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                            <li>
                                <Button
                                    size="rg"
                                    variant="primary-pale-outline"
                                    className="bg-white"
                                >
                                    <Icon
                                        className="text-xl/4.5"
                                        name="download-cloud"
                                    />
                                    <span className="ms-3">Export</span>
                                </Button>
                            </li>
                            <li>
                                <Button
                                    size="rg"
                                    variant="primary-pale-outline"
                                    className="bg-white"
                                >
                                    <Icon
                                        className="text-xl/4.5"
                                        name="reports"
                                    />
                                    <span className="ms-3">Reports</span>
                                </Button>
                            </li>
                            <li className="ms-auto">
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
                                                    variant="primary"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-xl/4.5"
                                                        name="plus"
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
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-start text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <Icon
                                                                name="user-add-fill"
                                                                className="w-7 text-lg leading-none opacity-80"
                                                            />
                                                            <span>
                                                                Add User
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-start text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <Icon
                                                                name="coin-alt-fill"
                                                                className="w-7 text-lg leading-none opacity-80"
                                                            />
                                                            <span>
                                                                Add order
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-start text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <Icon
                                                                name="note-add-fill-c"
                                                                className="w-7 text-lg leading-none opacity-80"
                                                            />
                                                            <span>
                                                                Add Page
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
                    </PageHead.Option>
                </PageHead.Group>
            </PageHead>
            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                <div className="col-span-12 lg:col-span-8">
                    <OrdersOverviewCard />
                </div>
                <div className="col-span-12 lg:col-span-4">
                    <ActionCenterCard />
                </div>
                <div className="col-span-12 row-span-2 2xl:col-span-8">
                    <OrdersActivitiesCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-4">
                    <TopCoinCard />
                </div>
                <div className="col-span-12 md:col-span-6 2xl:col-span-4">
                    <UserActivitiesCard />
                </div>
            </div>
        </>
    );
};
export default CryptoHomepage;
