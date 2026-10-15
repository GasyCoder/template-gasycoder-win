import React, { useState } from 'react';
import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../context';

const LanguageDropdown = () => {
    const theme = useTheme();
    let [dropdownToggle, setDropdownToggle] = useState();
    let [dropdownContent, setDropdownContent] = useState();
    let { styles, attributes } = usePopper(dropdownToggle, dropdownContent, {
        placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
        modifiers: [
            { name: 'offset', options: { offset: [0, 0] } },
            { name: 'preventOverflow', options: { padding: 8 } },
        ],
    });
    return (
        <Menu as="div" className="relative inline-flex">
            {({ open }) => (
                <>
                    <Menu.Button
                        as="div"
                        className={`inline-flex${open ? ' active' : ''}`}
                        ref={setDropdownToggle}
                    >
                        <button className="relative inline-flex items-center px-4 py-2 text-sm text-slate-700 transition-all duration-300 dark:text-white">
                            <span>English</span>
                            <em className="ni ni-chevron-up ms-1 text-sm"></em>
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>English</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Español</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Français</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Türkçe</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

export default LanguageDropdown;
