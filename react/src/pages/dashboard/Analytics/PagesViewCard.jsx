import React, { useState } from 'react';
import { Card, Button, Icon } from '../../../componenets';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const PagesViewCard = ({ className }) => {
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
    const data = [
        { url: '/', amount: '2,879' },
        { url: '/subscription/index.html', amount: '2,094' },
        { url: '/general/index.html', amount: '1,634' },
        { url: '/crypto/index.html', amount: '1,497' },
        { url: '/invest/index.html', amount: '1,349' },
        { url: '/subscription/profile.html', amount: '984' },
        { url: '/general/index-crypto.html', amount: '879' },
        { url: '/apps/messages/index.html', amount: '598' },
        { url: '/general/index-crypto.html', amount: '436' },
    ];
    return (
        <Card className="h-full">
            <Card.Body className="pb-2 sm:pb-3">
                <div className="flex items-center justify-between gap-2">
                    <h6 className="font-heading -tracking-snug leading-tighter text-sm font-bold text-slate-700 dark:text-white">
                        Pages View by Users
                    </h6>

                    <Menu as="div" className="relative ms-auto inline-flex">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex${open ? ' active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <Button size="sm" variant="white-outline">
                                        <span>30 Days</span>
                                        <Icon
                                            className="ms-1 -me-0.5 text-sm leading-none font-bold"
                                            name="chevron-down"
                                        />
                                    </Button>
                                </Menu.Button>
                                <Menu.Items
                                    modal={false}
                                    ref={setDropdownContent}
                                    style={styles.popper}
                                    {...attributes.popper}
                                    className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                >
                                    <ul className="py-2">
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>7 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>15 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group active">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>30 Days</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </div>
            </Card.Body>
            <div>
                <div className="flex items-center justify-between gap-4 border-b border-gray-300 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-900">
                    <span className="text-xs text-slate-400">Page</span>
                    <span className="text-xs text-slate-400">Page Views</span>
                </div>
                {data.map((item, index) => {
                    return (
                        <div
                            key={index}
                            className="flex items-center justify-between gap-4 border-b border-gray-300 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-900"
                        >
                            <span className="text-xs text-slate-400">
                                {item.url}
                            </span>
                            <span className="text-xs text-slate-600">
                                {item.amount}
                            </span>
                        </div>
                    );
                })}
            </div>
        </Card>
    );
};

export default PagesViewCard;
