import React, { useState } from 'react';
import { Card, Button, Icon, WorldMap } from '../../../componenets';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const UsersCountryCard = ({ className }) => {
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
        <Card className="h-full">
            <Card.Body>
                <div className="mb-3 flex items-center justify-between gap-2">
                    <h6 className="font-heading -tracking-snug leading-tighter text-sm font-bold text-slate-700 dark:text-white">
                        Users by Country
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
                <div className="flex justify-center">
                    <WorldMap
                        className="my-4 h-[160px] w-max [&_svg]:!h-full [&_svg]:!w-full"
                        id="worldMap"
                    ></WorldMap>
                </div>
                <table className="-mb-1 w-full">
                    <tbody>
                        <tr className="text-sm">
                            <td className="py-2 text-slate-400">
                                United States
                            </td>
                            <td className="py-2 text-slate-700 dark:text-white">
                                12,094
                            </td>
                            <td className="py-2 text-end text-slate-400">
                                23.54%
                            </td>
                        </tr>
                        <tr className="text-sm">
                            <td className="py-2 text-slate-400">India</td>
                            <td className="py-2 text-slate-700 dark:text-white">
                                7,984
                            </td>
                            <td className="py-2 text-end text-slate-400">
                                7.16%
                            </td>
                        </tr>
                        <tr className="text-sm">
                            <td className="py-2 text-slate-400">Turkey</td>
                            <td className="py-2 text-slate-700 dark:text-white">
                                6,338
                            </td>
                            <td className="py-2 text-end text-slate-400">
                                6.54%
                            </td>
                        </tr>
                        <tr className="text-sm">
                            <td className="py-2 text-slate-400">Bangladesh</td>
                            <td className="py-2 text-slate-700 dark:text-white">
                                4,749
                            </td>
                            <td className="py-2 text-end text-slate-400">
                                5.29%
                            </td>
                        </tr>
                    </tbody>
                </table>
            </Card.Body>
        </Card>
    );
};

export default UsersCountryCard;
