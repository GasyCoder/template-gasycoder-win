import React, { useState, useEffect, Fragment } from 'react';
import Aside from './Aside';
import Header from './Header';
import QuickAccess from './QuickAccess';
import { Button, Icon, CheckBox, Avatar, Head } from '../../../componenets';
import { fileManagerIcons } from '../../../store/icons';
import { toInitials } from '../../../utilities';
import { Tab } from '@headlessui/react';
import UploadModal from './UploadModal';
import FileDetailsModal from './FileDetailsModal';
import FileCopyModal from './FileCopyModal';
import FileMoveModal from './FileMoveModal';
import FileShareModal from './FileShareMOdal';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ItemActionDropdown = ({
    className,
    setShowDetailsModal,
    setShowShareModal,
    setShowCopyModal,
    setShowMoveModal,
}) => {
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
                        <Button.Zoom size="sm">
                            <Icon className="text-base/4.5" name="more-h" />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[150px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() =>
                                            setShowDetailsModal(true)
                                        }
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="eye"
                                        />
                                        <span>Details</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowShareModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="share"
                                        />
                                        <span>Share</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowCopyModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="copy"
                                        />
                                        <span>Copy</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowMoveModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="forward-arrow"
                                        />
                                        <span>Move</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                        name="download"
                                    />
                                    <span>Download</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                        name="pen"
                                    />
                                    <span>Rename</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                        name="trash"
                                    />
                                    <span>Delete</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const BulkActionDropdown = ({
    className,
    setShowShareModal,
    setShowCopyModal,
    setShowMoveModal,
}) => {
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
                        <Button.Zoom size="sm">
                            <Icon className="text-base/4.5" name="more-h" />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[150px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowShareModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="share"
                                        />
                                        <span>Share</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowCopyModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="copy"
                                        />
                                        <span>Copy</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowMoveModal(true)}
                                        className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 outline-none hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                            name="forward-arrow"
                                        />
                                        <span>Move</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2 text-xs leading-5 text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        className="text-primary-600 w-8 text-start text-lg/none opacity-80"
                                        name="download"
                                    />
                                    <span>Download</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const AddDropdown = ({ className, setShowUploadModal }) => {
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
                                className="text-xl/none text-slate-400 dark:text-slate-300"
                                name="plus"
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
                                <Menu.Item as={Fragment}>
                                    <button
                                        onClick={() => setShowUploadModal(true)}
                                        className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <Icon
                                            className="w-7 text-start text-lg leading-none opacity-80"
                                            name="upload-cloud"
                                        ></Icon>
                                        <span>Upload File</span>
                                    </button>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="file-plus"
                                    ></Icon>
                                    <span>Create File</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="folder-plus"
                                    ></Icon>
                                    <span>Create Folder</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const FilterDropdown = ({ className, icon, textClassName }) => {
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
                        <button className="inline-flex items-center">
                            <span className={`me-1 ${textClassName}`}>
                                Last Opened
                            </span>
                            <Icon className="text-base/4.5" name={icon}></Icon>
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[150px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li className="group active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Last Opened</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Name</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Size</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const OrderedDropdown = ({ className, icon, textClassName }) => {
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
                        <button className="inline-flex items-center">
                            <span className="me-1 text-sm font-medium">
                                Name
                            </span>
                            <em className="ni ni-caret-down-fill text-base/4.5"></em>
                        </button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[150px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li className="group">
                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                    Ordered By
                                </h6>
                            </li>
                            <li className="group active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Ascending</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>Descending</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const FileManagerPage = () => {
    const [pageAside, setPageAside] = useState(false);
    const [showSearch, setShowSearch] = useState(false);
    const [showUploadModal, setShowUploadModal] = useState(false);
    const [showDetailsModal, setShowDetailsModal] = useState(false);
    const [showShareModal, setShowShareModal] = useState(false);
    const [showMoveModal, setShowMoveModal] = useState(false);
    const [showCopyModal, setShowCopyModal] = useState(false);
    const files = [
        {
            id: 1,
            icon: fileManagerIcons.folderSecureAlt,
            name: 'UI Design',
            date: 'Today',
            time: '08:29 AM',
            size: '4.5 MB',
            stared: false,
            type: 'folder',
        },
        {
            id: 2,
            icon: fileManagerIcons.folderAlt,
            name: 'Proposal',
            date: 'Today',
            time: '08:29 AM',
            size: '4.5 MB',
            stared: true,
            type: 'folder',
        },
        {
            id: 3,
            icon: fileManagerIcons.folderSharedAlt,
            name: 'Projects',
            date: 'Yesterday',
            time: '08:29 AM',
            size: '35 MB',
            stared: false,
            type: 'folder',
            owner: { name: 'Iliash Hossain' },
            users: [
                { name: 'Iliash Hossain', theme: 'purple' },
                { name: 'Abu Bin Ishityak', theme: 'pink' },
                { name: 'Ricardo Salazar', image: '/images/avatar/b-sm.jpg' },
            ],
        },
        {
            id: 4,
            icon: fileManagerIcons.folderAlt,
            name: '2022 Projects',
            date: '03 May',
            time: '08:29 AM',
            size: '1.2 GB',
            stared: false,
            type: 'folder',
        },
        {
            icon: fileManagerIcons.fileSheetAlt,
            name: 'Update Data',
            ext: 'xlsx',
            date: 'Yesterday',
            time: '08:29 AM',
            size: '235 KB',
            stared: false,
            type: 'file',
            owner: { name: 'Abu Bin Ishityak' },
            users: [
                { name: 'Ricardo Salazar', image: '/images/avatar/b-sm.jpg' },
                { name: 'Iliash Hossain', theme: 'purple' },
                { name: 'Abu Bin Ishityak', theme: 'pink' },
                { name: 'Mildred Delga', image: '/images/avatar/c-sm.jpg' },
                { name: 'Larry Hughes', theme: 'primary' },
            ],
        },
        {
            id: 5,
            icon: fileManagerIcons.fileZipAlt,
            name: 'DashWind v.1.2',
            ext: 'zip',
            date: '03 May',
            time: '08:29 AM',
            size: '235 KB',
            stared: false,
            type: 'file',
        },
        {
            id: 6,
            icon: fileManagerIcons.fileZipAlt,
            name: 'covstats v1.0',
            ext: 'zip',
            date: '01 May',
            time: '08:29 AM',
            size: '235 KB',
            stared: false,
            type: 'file',
        },
        {
            id: 7,
            icon: fileManagerIcons.fileDocAlt,
            name: 'Quotation',
            ext: 'doc',
            date: '06 Apr',
            time: '08:29 AM',
            size: '23 MB',
            stared: false,
            type: 'file',
        },
        {
            id: 8,
            icon: fileManagerIcons.fileDocAlt,
            name: 'Work-to-do',
            ext: 'txt',
            date: '02 Apr',
            time: '08:29 AM',
            size: '23 MB',
            stared: false,
            type: 'file',
        },
        {
            id: 9,
            icon: fileManagerIcons.fileMediaAlt,
            name: 'DashWind-Crypto-v1',
            ext: 'psd',
            date: '02 Apr',
            time: '08:29 AM',
            size: '23 MB',
            stared: false,
            type: 'file',
        },
    ];

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
            <Head title="File Manager" />
            <div className="bg-opacity-40 h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                <div className="relative flex">
                    <Aside show={pageAside} setShow={setPageAside} />
                    <div className="flex-grow">
                        <Header
                            showUploadModal={showUploadModal}
                            setShowUploadModal={setShowUploadModal}
                        />
                        <div className="h-full max-h-full overflow-auto px-5 py-4.5 sm:py-5 lg:p-7">
                            <div className="pb-4">
                                <div className="relative flex items-center justify-between">
                                    <h3 className="font-heading text-2xl/tighter font-bold tracking-tight text-slate-700 dark:text-white">
                                        Files
                                    </h3>
                                    <ul className="-me-1.5 flex items-center gap-1.5 lg:hidden">
                                        <li>
                                            <Button.Zoom
                                                size="rg"
                                                onClick={() => {
                                                    setShowSearch(!showSearch);
                                                }}
                                            >
                                                <Icon
                                                    className="text-xl/none text-slate-400 dark:text-slate-300"
                                                    name="search"
                                                ></Icon>
                                            </Button.Zoom>
                                        </li>
                                        <li>
                                            <AddDropdown
                                                setShowUploadModal={
                                                    setShowUploadModal
                                                }
                                            />
                                        </li>
                                        <li>
                                            <Button.Zoom
                                                size="rg"
                                                onClick={() => {
                                                    setPageAside(!pageAside);
                                                }}
                                            >
                                                <Icon
                                                    className="text-xl/none text-slate-400 dark:text-slate-300"
                                                    name="menu-alt-r"
                                                ></Icon>
                                            </Button.Zoom>
                                        </li>
                                    </ul>
                                    <div
                                        className={`pointer-events-none absolute inset-x-0 -inset-y-0.5 rounded-md bg-white px-3 opacity-0 transition-all duration-300 lg:hidden dark:bg-gray-950 [&.active]:pointer-events-auto [&.active]:z-10 [&.active]:opacity-100 ${showSearch ? 'active' : ''}`}
                                        id="search"
                                    >
                                        <div className="relative flex w-full items-center">
                                            <button
                                                onClick={(e) => {
                                                    setShowSearch(false);
                                                }}
                                                className="inline-flex h-9 w-9 items-center justify-center text-slate-600 hover:text-red-600"
                                            >
                                                <Icon
                                                    className="text-lg/none rtl:-scale-x-100"
                                                    name="arrow-left"
                                                />
                                            </button>
                                            <input
                                                type="text"
                                                className="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                                placeholder="Search files, folders"
                                            />
                                            <button className="hover:text-primary-600 inline-flex h-9 w-9 items-center justify-center text-slate-600">
                                                <Icon
                                                    className="text-lg/none"
                                                    name="search"
                                                />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mb-10 last:mb-0">
                                <QuickAccess />
                            </div>
                            <div className="mb-10 last:mb-0">
                                <Tab.Group>
                                    <div className="relative flex items-center justify-between pb-3">
                                        <h6 className="font-heading text-base/tighter -tracking-snug font-bold text-slate-700 dark:text-white">
                                            Browse Files
                                        </h6>
                                        <Tab.List
                                            as="ul"
                                            className="tab-nav flex items-center gap-4"
                                        >
                                            <li className="tab-item">
                                                <Tab className="tab-toggle ui-selected:text-primary-600 flex h-6 w-6 items-center justify-center text-slate-400 transition-all duration-300 outline-none hover:text-slate-700 dark:text-white">
                                                    <em className="ni ni-view-grid3-wd text-2xl/none"></em>
                                                </Tab>
                                            </li>
                                            <li className="tab-item">
                                                <Tab className="tab-toggle ui-selected:text-primary-600 flex h-6 w-6 items-center justify-center text-slate-400 transition-all duration-300 outline-none hover:text-slate-700 dark:text-white">
                                                    <em className="ni ni-view-group-wd text-2xl/none"></em>
                                                </Tab>
                                            </li>
                                            <li className="tab-item">
                                                <Tab className="tab-toggle ui-selected:text-primary-600 flex h-6 w-6 items-center justify-center text-slate-400 transition-all duration-300 outline-none hover:text-slate-700 dark:text-white">
                                                    <em className="ni ni-view-row-wd text-2xl/none"></em>
                                                </Tab>
                                            </li>
                                        </Tab.List>
                                    </div>
                                    <Tab.Panels className="tab-content">
                                        <Tab.Panel className="tab-panel">
                                            <div className="flex items-center justify-between gap-3">
                                                <FilterDropdown icon="caret-down-fill" />
                                                <BulkActionDropdown
                                                    className="dropdown"
                                                    setShowShareModal={
                                                        setShowShareModal
                                                    }
                                                    setShowCopyModal={
                                                        setShowCopyModal
                                                    }
                                                    setShowMoveModal={
                                                        setShowMoveModal
                                                    }
                                                />
                                            </div>
                                            <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                                {files.map((item, index) => {
                                                    return (
                                                        <div
                                                            key={index}
                                                            className="group/fileitem xs:col-span-6 relative col-span-12 rounded border border-gray-300 bg-white sm:col-span-4 xl:col-span-3 2xl:col-span-2 dark:border-gray-900 dark:bg-gray-950"
                                                        >
                                                            <a
                                                                href="#link"
                                                                onClick={(e) =>
                                                                    e.preventDefault()
                                                                }
                                                                className="flex flex-col pt-6 pb-4"
                                                            >
                                                                <div className="h-18 [&>svg]:mx-auto [&>svg]:h-full">
                                                                    {item.icon}
                                                                </div>
                                                                <div className="relative mx-auto inline-flex justify-center px-5.5 pt-4 text-center text-sm/snug font-medium">
                                                                    <span className="line-clamp-1">
                                                                        {
                                                                            item.name
                                                                        }
                                                                    </span>{' '}
                                                                    {item.ext &&
                                                                        '.' +
                                                                            item.ext}
                                                                    <div
                                                                        className={`group/asterisk absolute end-0 inline-flex cursor-pointer opacity-0 group-hover/fileitem:opacity-100 ${item.stared ? 'active' : ''}`}
                                                                    >
                                                                        <em className="text-primary-600 ni ni-star text-lg/none"></em>
                                                                        <em className="text-primary-600 ni ni-star-fill absolute top-0 text-lg/none opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                                                    </div>
                                                                </div>
                                                                <ul className="flex items-center justify-center gap-3 pt-1">
                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                        {
                                                                            item.date
                                                                        }
                                                                    </li>
                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                        {
                                                                            item.size
                                                                        }
                                                                    </li>
                                                                </ul>
                                                            </a>
                                                            <div className="absolute end-2 top-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                                                <ItemActionDropdown
                                                                    setShowDetailsModal={
                                                                        setShowDetailsModal
                                                                    }
                                                                    setShowShareModal={
                                                                        setShowShareModal
                                                                    }
                                                                    setShowCopyModal={
                                                                        setShowCopyModal
                                                                    }
                                                                    setShowMoveModal={
                                                                        setShowMoveModal
                                                                    }
                                                                />
                                                            </div>
                                                        </div>
                                                    );
                                                })}
                                            </div>
                                        </Tab.Panel>
                                        <Tab.Panel className="tab-panel">
                                            <div className="flex items-center justify-between gap-3">
                                                <FilterDropdown icon="caret-down-fill" />
                                                <BulkActionDropdown
                                                    className="dropdown"
                                                    setShowShareModal={
                                                        setShowShareModal
                                                    }
                                                    setShowCopyModal={
                                                        setShowCopyModal
                                                    }
                                                    setShowMoveModal={
                                                        setShowMoveModal
                                                    }
                                                />
                                            </div>
                                            <div className="mb-10 last:mb-0">
                                                <h6 className="font-heading border-t border-gray-200 py-4 text-xs font-bold tracking-wider uppercase dark:border-gray-800">
                                                    Folder
                                                </h6>
                                                <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                                    {files.map(
                                                        (item, index) => {
                                                            return (
                                                                <React.Fragment
                                                                    key={index}
                                                                >
                                                                    {item.type ===
                                                                        'folder' && (
                                                                        <div className="group/fileitem relative col-span-12 rounded border border-gray-300 bg-white sm:col-span-6 2xl:col-span-4 dark:border-gray-900 dark:bg-gray-950">
                                                                            <a
                                                                                href="#link"
                                                                                onClick={(
                                                                                    e,
                                                                                ) =>
                                                                                    e.preventDefault()
                                                                                }
                                                                                className="flex flex-col p-4"
                                                                            >
                                                                                <div className="flex items-center">
                                                                                    <div className="h-8 [&>svg]:mx-auto [&>svg]:h-full">
                                                                                        {
                                                                                            item.icon
                                                                                        }
                                                                                    </div>
                                                                                    <div className="relative inline-flex ps-3 pe-5.5 text-sm/snug font-medium">
                                                                                        <span className="line-clamp-1">
                                                                                            {
                                                                                                item.name
                                                                                            }
                                                                                        </span>
                                                                                        <div
                                                                                            className={`group/asterisk absolute end-0 inline-flex cursor-pointer opacity-0 group-hover/fileitem:opacity-100 ${item.stared ? 'active' : ''}`}
                                                                                        >
                                                                                            <em className="text-primary-600 ni ni-star text-lg/none"></em>
                                                                                            <em className="text-primary-600 ni ni-star-fill absolute top-0 text-lg/none opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul className="flex items-center gap-3 pt-1">
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {
                                                                                            item.date
                                                                                        }
                                                                                    </li>
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {
                                                                                            item.size
                                                                                        }
                                                                                    </li>
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {item.users
                                                                                            ? item
                                                                                                  .users
                                                                                                  .length +
                                                                                              ' Members'
                                                                                            : 'Only Me'}
                                                                                    </li>
                                                                                </ul>
                                                                            </a>
                                                                            <div className="absolute end-2 top-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                                                                <ItemActionDropdown
                                                                                    setShowDetailsModal={
                                                                                        setShowDetailsModal
                                                                                    }
                                                                                    setShowShareModal={
                                                                                        setShowShareModal
                                                                                    }
                                                                                    setShowCopyModal={
                                                                                        setShowCopyModal
                                                                                    }
                                                                                    setShowMoveModal={
                                                                                        setShowMoveModal
                                                                                    }
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    )}
                                                                </React.Fragment>
                                                            );
                                                        },
                                                    )}
                                                </div>
                                            </div>
                                            <div className="mb-10 last:mb-0">
                                                <h6 className="font-heading border-t border-gray-200 py-4 text-xs font-bold tracking-wider uppercase dark:border-gray-800">
                                                    Files
                                                </h6>
                                                <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                                    {files.map(
                                                        (item, index) => {
                                                            return (
                                                                <React.Fragment
                                                                    key={index}
                                                                >
                                                                    {item.type ===
                                                                        'file' && (
                                                                        <div className="group/fileitem relative col-span-12 rounded border border-gray-300 bg-white sm:col-span-6 2xl:col-span-4 dark:border-gray-900 dark:bg-gray-950">
                                                                            <a
                                                                                href="#link"
                                                                                onClick={(
                                                                                    e,
                                                                                ) =>
                                                                                    e.preventDefault()
                                                                                }
                                                                                className="flex flex-col p-4"
                                                                            >
                                                                                <div className="flex items-center">
                                                                                    <div className="h-8 [&>svg]:mx-auto [&>svg]:h-full">
                                                                                        {
                                                                                            item.icon
                                                                                        }
                                                                                    </div>
                                                                                    <div className="relative inline-flex ps-3 pe-5.5 text-sm/snug font-medium">
                                                                                        <span className="line-clamp-1">
                                                                                            {
                                                                                                item.name
                                                                                            }
                                                                                        </span>{' '}
                                                                                        {item.ext &&
                                                                                            '.' +
                                                                                                item.ext}
                                                                                        <div
                                                                                            className={`group/asterisk absolute end-0 inline-flex cursor-pointer opacity-0 group-hover/fileitem:opacity-100 ${item.stared ? 'active' : ''}`}
                                                                                        >
                                                                                            <em className="text-primary-600 ni ni-star text-lg/none"></em>
                                                                                            <em className="text-primary-600 ni ni-star-fill absolute top-0 text-lg/none opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul className="flex items-center gap-3 pt-1">
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {
                                                                                            item.date
                                                                                        }
                                                                                    </li>
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {
                                                                                            item.size
                                                                                        }
                                                                                    </li>
                                                                                    <li className="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden">
                                                                                        {item.users
                                                                                            ? item
                                                                                                  .users
                                                                                                  .length +
                                                                                              ' Members'
                                                                                            : 'Only Me'}
                                                                                    </li>
                                                                                </ul>
                                                                            </a>
                                                                            <div className="absolute end-2 top-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                                                                <ItemActionDropdown
                                                                                    setShowDetailsModal={
                                                                                        setShowDetailsModal
                                                                                    }
                                                                                    setShowShareModal={
                                                                                        setShowShareModal
                                                                                    }
                                                                                    setShowCopyModal={
                                                                                        setShowCopyModal
                                                                                    }
                                                                                    setShowMoveModal={
                                                                                        setShowMoveModal
                                                                                    }
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    )}
                                                                </React.Fragment>
                                                            );
                                                        },
                                                    )}
                                                </div>
                                            </div>
                                        </Tab.Panel>
                                        <Tab.Panel className="tab-panel">
                                            <div className="w-full">
                                                <div className="flex items-center">
                                                    <div className="flex-grow">
                                                        <OrderedDropdown />
                                                    </div>
                                                    <div className="hidden w-3/12 sm:block">
                                                        <FilterDropdown
                                                            icon="arrow-long-down"
                                                            textClassName="text-sm font-medium"
                                                        />
                                                    </div>
                                                    <div className="hidden w-3/12 md:block">
                                                        <div className="text-sm font-medium">
                                                            Members
                                                        </div>
                                                    </div>
                                                    <div className="w-[60px] flex-shrink pe-4 text-end">
                                                        <BulkActionDropdown
                                                            className="dropdown me-px"
                                                            setShowShareModal={
                                                                setShowShareModal
                                                            }
                                                            setShowCopyModal={
                                                                setShowCopyModal
                                                            }
                                                            setShowMoveModal={
                                                                setShowMoveModal
                                                            }
                                                        />
                                                    </div>
                                                </div>
                                                <div className="rounded border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-950">
                                                    {files.map(
                                                        (item, index) => {
                                                            return (
                                                                <div
                                                                    key={index}
                                                                    className="group/filelist flex w-full items-center border-b border-gray-200 last:border-b-0 dark:border-gray-800"
                                                                >
                                                                    <div className="flex-grow py-4 first:ps-5">
                                                                        <div className="flex items-center">
                                                                            <div className="me-3">
                                                                                <div className="flex">
                                                                                    <CheckBox
                                                                                        size="sm"
                                                                                        id="mid-01"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                            <div className="h-8 [&>svg]:mx-auto [&>svg]:h-full">
                                                                                {
                                                                                    item.icon
                                                                                }
                                                                            </div>
                                                                            <div className="relative inline-flex ps-3 pe-5.5 text-sm/snug font-medium">
                                                                                <span className="line-clamp-1">
                                                                                    {
                                                                                        item.name
                                                                                    }
                                                                                    {item.ext &&
                                                                                        '.' +
                                                                                            item.ext}
                                                                                </span>
                                                                                <div
                                                                                    className={`group/asterisk absolute end-0 inline-flex cursor-pointer opacity-0 group-hover/filelist:opacity-100 ${item.stared ? 'active' : ''}`}
                                                                                >
                                                                                    <em className="text-primary-600 ni ni-star text-lg/none"></em>
                                                                                    <em className="text-primary-600 ni ni-star-fill absolute top-0 text-lg/none opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div className="hidden w-3/12 py-4 first:ps-5 sm:block">
                                                                        <div className="text-sm text-slate-600 dark:text-slate-400">
                                                                            {
                                                                                item.date
                                                                            }
                                                                            ,&nbsp;{' '}
                                                                            {
                                                                                item.time
                                                                            }
                                                                        </div>
                                                                        {item.owner && (
                                                                            <>
                                                                                <div className="mt-0.5 text-xs text-slate-400">
                                                                                    by{' '}
                                                                                    {
                                                                                        item
                                                                                            .owner
                                                                                            .name
                                                                                    }
                                                                                </div>
                                                                            </>
                                                                        )}
                                                                    </div>
                                                                    <div className="hidden w-3/12 py-4 first:ps-5 md:block">
                                                                        {item
                                                                            .users
                                                                            ?.length >
                                                                        1 ? (
                                                                            <Avatar.Group size="mb">
                                                                                {item.users
                                                                                    .slice(
                                                                                        0,
                                                                                        3,
                                                                                    )
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
                                                                                                            size="mb"
                                                                                                            rounded
                                                                                                            img={
                                                                                                                uItem.image
                                                                                                            }
                                                                                                        />
                                                                                                    ) : (
                                                                                                        <Avatar
                                                                                                            size="mb"
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
                                                                                {item
                                                                                    .users
                                                                                    ?.length >
                                                                                    3 && (
                                                                                    <Avatar
                                                                                        variant="slate"
                                                                                        size="mb"
                                                                                        rounded
                                                                                        text={`+${item.users?.length - 3}`}
                                                                                    ></Avatar>
                                                                                )}
                                                                            </Avatar.Group>
                                                                        ) : (
                                                                            <div className="text-sm text-slate-600 dark:text-slate-400">
                                                                                Only
                                                                                Me
                                                                            </div>
                                                                        )}
                                                                    </div>
                                                                    <div className="w-[60px] flex-shrink py-4 pe-4 text-end first:ps-5">
                                                                        <ItemActionDropdown
                                                                            setShowDetailsModal={
                                                                                setShowDetailsModal
                                                                            }
                                                                            setShowShareModal={
                                                                                setShowShareModal
                                                                            }
                                                                            setShowCopyModal={
                                                                                setShowCopyModal
                                                                            }
                                                                            setShowMoveModal={
                                                                                setShowMoveModal
                                                                            }
                                                                        />
                                                                    </div>
                                                                </div>
                                                            );
                                                        },
                                                    )}
                                                </div>
                                            </div>
                                        </Tab.Panel>
                                    </Tab.Panels>
                                </Tab.Group>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <UploadModal show={showUploadModal} setShow={setShowUploadModal} />
            <FileDetailsModal
                show={showDetailsModal}
                setShow={setShowDetailsModal}
            />
            <FileCopyModal show={showCopyModal} setShow={setShowCopyModal} />
            <FileMoveModal show={showMoveModal} setShow={setShowMoveModal} />
            <FileShareModal show={showShareModal} setShow={setShowShareModal} />
        </>
    );
};

export default FileManagerPage;
