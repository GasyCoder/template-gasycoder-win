import React, { Fragment, useState } from 'react';
import { Button, Icon } from '../../../componenets';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const Header = ({ setShowUploadModal }) => {
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
        <div className="hidden flex-wrap items-center justify-between rounded-tr-md border-b border-gray-300 bg-white px-5 py-3 lg:flex dark:border-gray-900 dark:bg-gray-950">
            <div className="flex flex-grow items-center">
                <Icon
                    className="text-base/none text-slate-600"
                    name="search"
                ></Icon>
                <input
                    type="text"
                    className="box-border block h-9 w-full rounded border-0 bg-white px-2 py-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                    placeholder="Search files, folders"
                />
            </div>
            <ul className="flex items-center gap-4">
                <li>
                    <Menu as="div" className="relative inline-flex w-full">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex w-full ${open ? 'active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <Button size="rg" variant="light">
                                        <Icon
                                            className="text-xl/4.5"
                                            name="plus"
                                        />
                                        <span className="ms-3">Create</span>
                                    </Button>
                                </Menu.Button>
                                <Menu.Items
                                    modal={false}
                                    ref={setDropdownContent}
                                    style={styles.popper}
                                    {...attributes.popper}
                                    className="absolute z-[1000] min-w-[160px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                >
                                    <ul className="py-2">
                                        <li>
                                            <Menu.Item as={Fragment}>
                                                <button
                                                    onClick={() =>
                                                        setShowUploadModal(true)
                                                    }
                                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <em className="ni ni-upload-cloud w-7 text-start text-lg/none opacity-80"></em>
                                                    <span>Upload File</span>
                                                </button>
                                            </Menu.Item>
                                        </li>
                                        <li>
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <em className="ni ni-file-plus w-7 text-start text-lg/none opacity-80"></em>
                                                <span>Create File</span>
                                            </Menu.Item>
                                        </li>
                                        <li>
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <em className="ni ni-folder-plus w-7 text-start text-lg/none opacity-80"></em>
                                                <span>Create Folder</span>
                                            </Menu.Item>
                                        </li>
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </li>
                <li>
                    <Button
                        onClick={() => setShowUploadModal(true)}
                        size="rg"
                        variant="primary"
                    >
                        <Icon
                            className="text-xl/4.5"
                            name="upload-cloud"
                        ></Icon>{' '}
                        <span className="ms-3">Upload</span>
                    </Button>
                </li>
            </ul>
        </div>
    );
};

export default Header;
