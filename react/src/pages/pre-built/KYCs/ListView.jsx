import React, { Fragment, useState } from 'react';
import {
    Avatar,
    Button,
    Icon,
    PageHead,
    Select,
    CheckBox,
    Form,
    Input,
    Pagination,
    Tooltip,
    Head,
} from '../../../componenets';
import { toInitials } from '../../../utilities';
import { kycDocuments } from '../../../store/kycdocuments';
import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';
import { Link } from 'react-router-dom';

const ActionDropdown = ({ className }) => {
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
                        <Button.Zoom>
                            <Icon className="text-xl" name="more-h" />
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
                                        name="focus"
                                    />
                                    <span>Quick View</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Details</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="user"
                                    />
                                    <span>View Profile</span>
                                </Menu.Item>
                            </li>

                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="check-round"
                                    />
                                    <span>Approved</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
                                        name="na"
                                    />
                                    <span>Rejected</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg leading-none opacity-80"
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
const FilterDropdown = ({ className }) => {
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
                        <Button.Zoom>
                            <Icon className="text-xl/4.5" name="filter-alt" />
                            <span className="bg-primary-600 absolute end-0.5 top-0.5 inline-block h-2 w-2 rounded-full"></span>
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="xs:min-w-[360px] absolute z-[1000] min-w-[260px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <div className="flex items-center justify-between border-b border-gray-200 px-5 py-3 dark:border-gray-800">
                            <span className="font-medium text-slate-700 dark:text-white">
                                Filter Users
                            </span>
                        </div>
                        <div className="p-5">
                            <div className="grid grid-flow-dense grid-cols-12 gap-x-6 gap-y-4">
                                <div className="col-span-6">
                                    <CheckBox size="sm" id="haveBalance">
                                        Have Balance
                                    </CheckBox>
                                </div>
                                <div className="col-span-6">
                                    <CheckBox size="sm" id="KYCVerified">
                                        KYC Verified
                                    </CheckBox>
                                </div>
                                <div className="col-span-6">
                                    <Form.Group>
                                        <Form.Label
                                            className="mb-3"
                                            htmlFor="userRole"
                                        >
                                            Role{' '}
                                        </Form.Label>
                                        <Input.Wrap>
                                            <Select.Choice id="userRole">
                                                <Select.Option value="AnyRole">
                                                    Any Role
                                                </Select.Option>
                                                <Select.Option value="Investor">
                                                    Investor
                                                </Select.Option>
                                                <Select.Option value="Seller">
                                                    Seller
                                                </Select.Option>
                                                <Select.Option value="Buyer">
                                                    Buyer
                                                </Select.Option>
                                            </Select.Choice>
                                        </Input.Wrap>
                                    </Form.Group>
                                </div>
                                <div className="col-span-6">
                                    <Form.Group>
                                        <Form.Label
                                            className="mb-3"
                                            htmlFor="userStatus"
                                        >
                                            Status
                                        </Form.Label>
                                        <Input.Wrap>
                                            <Select.Choice id="userStatus">
                                                <Select.Option value="AnyRole">
                                                    Any Status
                                                </Select.Option>
                                                <Select.Option value="Active">
                                                    Active
                                                </Select.Option>
                                                <Select.Option value="Pending">
                                                    Pending
                                                </Select.Option>
                                                <Select.Option value="Suspend">
                                                    Suspend
                                                </Select.Option>
                                                <Select.Option value="Deleted">
                                                    Deleted
                                                </Select.Option>
                                            </Select.Choice>
                                        </Input.Wrap>
                                    </Form.Group>
                                </div>
                                <div className="col-span-12">
                                    <Menu.Item as={Fragment}>
                                        <Button size="rg" variant="secondary">
                                            Filter
                                        </Button>
                                    </Menu.Item>
                                </div>
                            </div>
                        </div>
                        <div className="flex items-center justify-between border-t border-gray-200 px-5 py-3 dark:border-gray-800">
                            <a
                                className="text-primary-500 hover:text-primary-700 text-sm transition-all duration-300"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                Reset Filter
                            </a>
                            <a
                                className="text-primary-500 hover:text-primary-700 text-sm transition-all duration-300"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                Save Filter
                            </a>
                        </div>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};
const SettingsDropdown = ({ className }) => {
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
                        <Button.Zoom>
                            <Icon className="text-xl/4.5" name="setting" />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2">
                            <li>
                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                    Show
                                </h6>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>10 Items</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>20 Items</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>30 Items</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="my-2 block border-t border-gray-300 dark:border-gray-900"></li>
                            <li>
                                <h6 className="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white">
                                    Order By
                                </h6>
                            </li>
                            <li className="group active">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>DESC</span>
                                    <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                </Menu.Item>
                            </li>
                            <li className="group">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                >
                                    <span>ASC</span>
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
const OptionsDropdown = ({ className }) => {
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
                        <Button size="xs" icon>
                            <Icon className="text-sm/4.5" name="plus" />
                        </Button>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul className="py-2 text-start">
                            <li className="px-4 py-2">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="checkBalance">
                                        Balance
                                    </CheckBox>
                                </div>
                            </li>
                            <li className="px-4 py-2">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="checkPhone">
                                        Phone
                                    </CheckBox>
                                </div>
                            </li>
                            <li className="px-4 py-2">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="checkVerified">
                                        Verified
                                    </CheckBox>
                                </div>
                            </li>
                            <li className="px-4 py-2">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="checkStatus">
                                        Status
                                    </CheckBox>
                                </div>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const KYCListPage = () => {
    const [showSearchForm, setShowSearchForm] = useState(false);
    const [showCardOptions, setShowCardOptions] = useState(false);

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
            <Head title="KYC Documents" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>KYC Documents</PageHead.Title>
                    <PageHead.SubTitle>
                        You have total{' '}
                        <span className="text-slate-600">1,257</span> KYC
                        documents.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <ul className="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                        <li>
                            <Button size="rg" variant="white-outline">
                                <Icon
                                    className="text-xl/4.5"
                                    name="download-cloud"
                                />
                                <span className="ms-3 hidden md:block">
                                    Export
                                </span>
                            </Button>
                        </li>
                    </ul>
                </PageHead.Group>
            </PageHead>
            <div className="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950">
                <div className="relative p-5">
                    <div className="relative flex items-center justify-between">
                        <div className="flex items-center gap-4">
                            <div className="relative w-[132px]">
                                <Select.Choice placeholder="Bulk Action">
                                    <Select.Option value="SendEmail">
                                        Send Email
                                    </Select.Option>
                                    <Select.Option value="ChangeGroup">
                                        Change Group
                                    </Select.Option>
                                    <Select.Option value="SuspendUser">
                                        Suspend User
                                    </Select.Option>
                                    <Select.Option value="DeleteUser">
                                        Delete User
                                    </Select.Option>
                                </Select.Choice>
                            </div>
                            <Button
                                size="rg"
                                variant="light-pale-outline"
                                className="hidden sm:inline-flex"
                                disabled
                            >
                                Apply
                            </Button>
                            <Button
                                size="rg"
                                variant="light-pale-outline"
                                className="sm:hidden"
                                icon
                                disabled
                            >
                                <Icon
                                    className="text-xl leading-4.5 rtl:-scale-x-100"
                                    name="arrow-right"
                                />
                            </Button>
                        </div>
                        <ul className="flex flex-wrap items-start gap-2.5">
                            <li>
                                <Button.Zoom
                                    onClick={() => setShowSearchForm(true)}
                                >
                                    <Icon
                                        className="text-xl/4.5"
                                        name="search"
                                    />
                                </Button.Zoom>
                            </li>
                            <li className="h-9 border-s border-gray-200 dark:border-gray-800"></li>
                            <li>
                                <Button.Zoom
                                    onClick={() => setShowCardOptions(true)}
                                    className="sm:hidden"
                                    size="rg"
                                >
                                    <Icon
                                        className="text-xl text-slate-600 rtl:-scale-x-100 dark:text-slate-300"
                                        name="menu-right"
                                    />
                                </Button.Zoom>
                                <div
                                    className={`invisible absolute start-0 end-0 top-0 bottom-0 z-[700] -m-5 bg-white p-5 opacity-0 shadow shadow-gray-200 sm:visible sm:relative sm:m-0 sm:bg-transparent sm:p-0 sm:opacity-100 sm:shadow-none dark:bg-gray-950 dark:shadow-gray-900 sm:dark:bg-transparent [&.active]:visible [&.active]:opacity-100 ${showCardOptions ? 'active' : ''}`}
                                >
                                    <ul className="flex items-center gap-x-1">
                                        <li className="-ms-2 me-auto sm:hidden">
                                            <Button.Zoom
                                                onClick={() =>
                                                    setShowCardOptions(false)
                                                }
                                                size="rg"
                                            >
                                                <Icon
                                                    className="text-xl/4.5 rtl:-scale-x-100"
                                                    name="arrow-left"
                                                />
                                            </Button.Zoom>
                                        </li>
                                        <li>
                                            <FilterDropdown />
                                        </li>
                                        <li>
                                            <SettingsDropdown />
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div
                        className={`invisible absolute inset-0 z-[800] bg-white opacity-0 transition-all duration-300 sm:rounded-t-md dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100 ${showSearchForm ? 'active' : ''}`}
                    >
                        <div className="flex items-center p-5">
                            <button
                                onClick={() => setShowSearchForm(false)}
                                className="relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                            >
                                <Icon
                                    className="text-xl/4.5 rtl:-scale-x-100"
                                    name="arrow-left"
                                />
                            </button>
                            <input
                                type="text"
                                className="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                placeholder="Search by user or email"
                                autoComplete="off"
                            />
                            <button
                                type="submit"
                                className="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                            >
                                <Icon className="text-xl/4.5" name="search" />
                            </button>
                        </div>
                    </div>
                </div>
                <table className="w-full border-collapse border-gray-300 dark:border-gray-900">
                    <thead>
                        <tr>
                            <th className="w-12 border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="uid-all" />
                                </div>
                            </th>
                            <th className="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    User
                                </span>
                            </th>
                            <th className="xs:table-cell hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    Doc Type
                                </span>
                            </th>
                            <th className="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    Documents
                                </span>
                            </th>
                            <th className="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    Submitted
                                </span>
                            </th>
                            <th className="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    Status
                                </span>
                            </th>
                            <th className="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                <span className="block text-sm leading-relaxed font-normal text-slate-400">
                                    Checked By
                                </span>
                            </th>
                            <th className="max-w-[3.75rem] border-t border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                <OptionsDropdown />
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {kycDocuments.map((item, index) => {
                            return (
                                <tr
                                    key={index}
                                    className="hover:dark:bg-gray-1000 group transition-all duration-300 hover:bg-gray-50"
                                >
                                    <td className="w-12 border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900">
                                        <div className="flex items-center">
                                            <CheckBox size="sm" id={item.id} />
                                        </div>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <Link
                                            to={`/kyc-details/${item.id}`}
                                            className="flex items-center"
                                        >
                                            <div className="flex items-center">
                                                {item.avatar.image ? (
                                                    <Avatar
                                                        size="rg"
                                                        rounded
                                                        img={item.avatar.image}
                                                    />
                                                ) : (
                                                    <Avatar
                                                        variant={
                                                            item.avatar.theme
                                                        }
                                                        size="rg"
                                                        rounded
                                                        text={toInitials(
                                                            item.username,
                                                        )}
                                                    />
                                                )}
                                                <div className="ms-4">
                                                    <span className="block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                        {item.username}
                                                        {item.status ===
                                                            'approved' && (
                                                            <span className="ms-1 inline-block h-2 w-2 rounded-full bg-green-600 lg:hidden"></span>
                                                        )}
                                                        {item.status ===
                                                            'pending' && (
                                                            <span className="ms-1 inline-block h-2 w-2 rounded-full bg-cyan-600 lg:hidden"></span>
                                                        )}
                                                        {item.status ===
                                                            'rejected' && (
                                                            <span className="ms-1 inline-block h-2 w-2 rounded-full bg-red-600 lg:hidden"></span>
                                                        )}
                                                    </span>
                                                    <span className="block text-xs leading-4 text-slate-400">
                                                        {item.id}
                                                    </span>
                                                </div>
                                            </div>
                                        </Link>
                                    </td>
                                    <td className="xs:table-cell hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm font-normal text-slate-600 dark:text-white">
                                            {item.docType}
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                        <ul className="flex gap-4 text-sm font-normal text-slate-400">
                                            {item?.documents?.map(
                                                (item, index) => (
                                                    <li
                                                        key={index}
                                                        className="inline-flex items-center gap-2.5 align-middle"
                                                    >
                                                        {item}{' '}
                                                        <span>
                                                            <em className="icon ni ni-download text-primary-500 text-xl"></em>
                                                        </span>
                                                    </li>
                                                ),
                                            )}
                                        </ul>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                        <span className="text-sm text-slate-400">
                                            {item.submitted}
                                        </span>
                                    </td>

                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                        {item.status === 'approved' && (
                                            <span className="text-sm font-medium text-green-600">
                                                Approved{' '}
                                            </span>
                                        )}
                                        {item.status === 'pending' && (
                                            <span className="text-sm font-medium text-cyan-600">
                                                Pending{' '}
                                            </span>
                                        )}
                                        {item.status === 'rejected' && (
                                            <span className="text-sm font-medium text-red-600">
                                                Rejected{' '}
                                            </span>
                                        )}
                                        {(item.status == 'approved' ||
                                            item.status == 'rejected') && (
                                            <Tooltip
                                                placement="top"
                                                className="text-sm"
                                                content={`${item.status.charAt(0).toUpperCase() + item.status.slice(1)} at ${item.submitted}`}
                                            >
                                                <Icon name="info" />
                                            </Tooltip>
                                        )}
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900">
                                        <div className="flex items-center gap-3">
                                            <div className="relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-orange-100 text-sm font-medium text-orange-600 dark:bg-orange-950">
                                                <Avatar
                                                    size="rg"
                                                    rounded
                                                    text={toInitials(
                                                        item?.checkedBy.name,
                                                    )}
                                                />
                                            </div>
                                            <span className="text-xs font-medium text-slate-700 dark:text-white">
                                                {item.checkedBy.name}
                                            </span>
                                        </div>
                                    </td>
                                    <td className="max-w-[3.75rem] border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <ul className="relative -me-2 flex items-center justify-end">
                                            <li className="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                                <Tooltip
                                                    placement="top"
                                                    content="Wallet"
                                                >
                                                    <Button.Zoom>
                                                        <Icon
                                                            className="text-xl/4.5"
                                                            name="eye-fill"
                                                        />
                                                    </Button.Zoom>
                                                </Tooltip>
                                            </li>
                                            <li className="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                                <Tooltip
                                                    placement="top"
                                                    content="Send Email"
                                                >
                                                    <Button.Zoom>
                                                        <Icon
                                                            className="text-xl/4.5"
                                                            name="check-fill-c"
                                                        />
                                                    </Button.Zoom>
                                                </Tooltip>
                                            </li>
                                            <li className="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                                <Tooltip
                                                    placement="top"
                                                    content="Suspend"
                                                >
                                                    <Button.Zoom>
                                                        <Icon
                                                            className="text-xl/4.5"
                                                            name="cross-fill-c"
                                                        />
                                                    </Button.Zoom>
                                                </Tooltip>
                                            </li>
                                            <li>
                                                <ActionDropdown />
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            );
                        })}
                    </tbody>
                </table>
                <div className="p-5">
                    <div className="flex flex-wrap justify-center gap-4 sm:justify-between">
                        <Pagination>
                            <Pagination.Prev text="Prev" />
                            <Pagination.Item>1</Pagination.Item>
                            <Pagination.Item>2</Pagination.Item>
                            <Pagination.Dot />
                            <Pagination.Item>6</Pagination.Item>
                            <Pagination.Item>7</Pagination.Item>
                            <Pagination.Next text="Next" />
                        </Pagination>
                        <div className="flex items-center gap-x-4">
                            <div className="text-xs text-slate-600 uppercase">
                                Page
                            </div>
                            <div className="relative w-16">
                                <Select.Choice>
                                    <Select.Option value="1">1</Select.Option>
                                    <Select.Option value="2">2</Select.Option>
                                    <Select.Option value="3">3</Select.Option>
                                </Select.Choice>
                            </div>
                            <div className="text-xs text-slate-600 uppercase">
                                Of 102
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default KYCListPage;
