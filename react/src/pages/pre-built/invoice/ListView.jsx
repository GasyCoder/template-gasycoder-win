import React, { useState } from 'react';
import {
    Button,
    Badge,
    Icon,
    PageHead,
    Pagination,
    Head,
} from '../../../componenets';
import { invoiceData } from '../../../store/Invoice';
import { Link } from 'react-router-dom';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

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

const InvoiceListPage = () => {
    const [showSearchForm, setShowSearchForm] = useState(false);

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
            <Head title="Invoice List" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Invoices</PageHead.Title>
                    <PageHead.SubTitle>
                        You have total 937 invoices.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <Menu as="div" className="relative inline-flex">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex${open ? ' active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <Button size="rg" variant="primary" icon>
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
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Add New</span>
                                            </Menu.Item>
                                        </li>
                                        <li>
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Import</span>
                                            </Menu.Item>
                                        </li>
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </PageHead.Group>
            </PageHead>
            <div className="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950">
                <div className="relative p-5">
                    <div className="relative flex items-center justify-between">
                        <h5 className="font-heading leading-tighter tracking-snug text-xl font-bold text-slate-700 dark:text-white">
                            All Invoice
                        </h5>
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
                                <SettingsDropdown />
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
                                placeholder="Quick search by order id"
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
                            <th className="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                                    <span className="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Order ID
                                    </span>
                                </span>
                                <span className="hidden md:inline-block">
                                    <span className="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Date
                                    </span>
                                </span>
                            </th>
                            <th className="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                                    <span className="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Amount
                                    </span>
                                </span>
                                <span className="hidden md:inline-block">
                                    <span className="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                        Status
                                    </span>
                                </span>
                            </th>
                            <th className="border-t border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {invoiceData.map((item, index) => {
                            const badgeVariant =
                                item.status === 'Complete'
                                    ? 'green'
                                    : item.status === 'Pending'
                                      ? 'yellow'
                                      : item.status === 'Cancelled'
                                        ? 'red'
                                        : 'light';
                            return (
                                <tr
                                    key={index}
                                    className="hover:dark:bg-gray-1000 group transition-all duration-300 hover:bg-gray-50"
                                >
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <div className="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                                            <Link
                                                to={`/invoice-details/${item.id}`}
                                                className="font-body text-primary-500 hover:text-primary-600 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >
                                                #{item.orderId}
                                            </Link>
                                        </div>
                                        <span className="text-sm whitespace-nowrap text-slate-400">
                                            {item.date}, {item.time}
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <div className="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                                            <span className="text-sm font-medium text-slate-700 dark:text-white">
                                                ${item.totalAmount}
                                            </span>
                                        </div>
                                        <Badge.Dot
                                            className="capitalize"
                                            variant={badgeVariant}
                                        >
                                            {item.status}
                                        </Badge.Dot>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <ul className="hidden items-center justify-end gap-2 sm:flex">
                                            <li>
                                                <Button
                                                    as="Link"
                                                    to={`/invoice-print/${item.id}`}
                                                    target="_blank"
                                                    size="sm"
                                                    variant="primary-transparent"
                                                    icon
                                                >
                                                    <Icon
                                                        className="text-base/4.5"
                                                        name="printer-fill"
                                                    />
                                                </Button>
                                            </li>
                                            <li>
                                                <Button
                                                    as="Link"
                                                    to={`/invoice-details/${item.id}`}
                                                    size="sm"
                                                    variant="primary-pale"
                                                >
                                                    View
                                                </Button>
                                            </li>
                                        </ul>
                                        <div className="sm:hidden">
                                            <Button.Zoom
                                                as="Link"
                                                to={`/invoice-details/${item.id}`}
                                                size="sm"
                                            >
                                                <Icon
                                                    className="text-xl rtl:-scale-x-100"
                                                    name="chevron-right"
                                                />
                                            </Button.Zoom>
                                        </div>
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
                    </div>
                </div>
            </div>
        </>
    );
};

export default InvoiceListPage;
