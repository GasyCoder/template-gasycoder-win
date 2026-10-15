import React, { useState } from 'react';
import { Avatar, Button, Card, Badge, Icon } from '../../../componenets';
import { toInitials } from '../../../utilities';
import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

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
                        <Button.Zoom className="-me-2">
                            <Icon className="text-xl" name="more-h" />
                        </Button.Zoom>
                    </Menu.Button>
                    <Menu.Items
                        modal={false}
                        ref={setDropdownContent}
                        style={styles.popper}
                        {...attributes.popper}
                        className="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>View</span>
                                </Menu.Item>
                            </li>
                            <li className="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800">
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                >
                                    <span>Remove</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};
const RecentTransactionCard = ({ className }) => {
    const data = [
        {
            id: '95954',
            amount: '4,596.75',
            date: '02/11/2020',
            reference: 'SUB-2309232',
            status: 'paid',
            customer: {
                name: 'Abu Bin Ishityak',
                theme: 'purple',
            },
        },
        {
            id: '95850',
            amount: '596.75',
            date: '02/02/2020',
            reference: 'SUB-2309154',
            status: 'canceled',
            customer: {
                name: 'Desiree Edwards',
                theme: 'blue',
            },
        },
        {
            id: '95812',
            amount: '199.99',
            date: '02/01/2020',
            reference: 'SUB-2309143',
            status: 'paid',
            customer: {
                name: 'Blanca Schultz',
                image: '/images/avatar/b-sm.jpg',
            },
        },
        {
            id: '95256',
            amount: '1099.99',
            date: '01/29/2020',
            reference: 'SUB-2305684',
            status: 'paid',
            customer: {
                name: 'Naomi Lawrence',
                theme: 'indigo',
            },
        },
        {
            id: '95935',
            amount: '1099.99',
            date: '01/29/2020',
            reference: 'SUB-2305564',
            status: 'due',
            customer: {
                name: 'Cassandra Hogan',
                theme: 'green',
            },
        },
    ];
    return (
        <Card className="h-full">
            <Card.Body className="border-b border-gray-300 dark:border-gray-900">
                <div className="relative -my-1 flex items-center justify-between">
                    <h6 className="font-heading -tracking-snug text-base leading-6.5 font-bold text-slate-700 dark:text-white">
                        <span className="me-2">Transaction</span>{' '}
                        <a
                            href="#link"
                            onClick={(e) => e.preventDefault()}
                            className="font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline hidden text-sm leading-none font-medium whitespace-nowrap transition-all duration-300 sm:inline-flex"
                        >
                            See History
                        </a>
                    </h6>
                    <ul className="-my-1 flex gap-x-5">
                        <li>
                            <a
                                className="before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>Paid</span>
                            </a>
                        </li>
                        <li>
                            <a
                                className="before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>Pending</span>
                            </a>
                        </li>
                        <li>
                            <a
                                className="active before:bg-primary-600 relative block py-2.5 leading-none text-slate-400 before:absolute before:inset-0 before:top-auto before:h-0.5 before:opacity-0 [&.active]:text-slate-600 [&.active]:before:opacity-100"
                                href="#link"
                                onClick={(e) => e.preventDefault()}
                            >
                                <span>All</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </Card.Body>
            <div className="table w-full text-sm text-slate-400">
                <div className="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div className="relative table-cell border-gray-300 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Order No.</span>
                    </div>
                    <div className="relative hidden border-gray-300 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                        <span>Customer</span>
                    </div>
                    <div className="relative hidden border-gray-300 py-2 align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                        <span>Date</span>
                    </div>
                    <div className="relative hidden border-gray-300 py-2 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                        <span>Ref</span>
                    </div>
                    <div className="relative table-cell border-gray-300 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>Amount</span>
                    </div>
                    <div className="relative table-cell border-gray-300 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span className="xs:inline hidden">Status</span>
                    </div>
                    <div className="relative table-cell border-gray-300 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                        <span>&nbsp;</span>
                    </div>
                </div>
                {data.map((item, index) => {
                    const badgeVariant =
                        item.status === 'paid'
                            ? 'green'
                            : item.status === 'due'
                              ? 'yellow'
                              : item.status === 'canceled'
                                ? 'red'
                                : 'light';
                    return (
                        <div
                            key={index}
                            className="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                        >
                            <div className="relative table-cell border-gray-300 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span>
                                    <a
                                        className="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-snug font-medium whitespace-nowrap transition-all duration-300"
                                        href=""
                                    >
                                        #{item.id}
                                    </a>
                                </span>
                            </div>
                            <div className="relative hidden border-gray-300 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                <div className="flex items-center">
                                    {item.customer.image ? (
                                        <Avatar
                                            size="rg"
                                            rounded
                                            img={item.customer.image}
                                        />
                                    ) : (
                                        <Avatar
                                            size="rg"
                                            variant={item.customer.theme}
                                            rounded
                                            text={toInitials(
                                                item.customer.name,
                                            )}
                                        />
                                    )}
                                    <div className="ms-3 flex items-center text-xs font-bold text-slate-600 dark:text-white">
                                        {item.customer.name}
                                    </div>
                                </div>
                            </div>
                            <div className="relative hidden border-gray-300 py-4 align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                <span className="text-xs">{item.date}</span>
                            </div>
                            <div className="relative hidden border-gray-300 py-4 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900">
                                <span className="text-primary-600 text-xs">
                                    {item.reference}
                                </span>
                            </div>
                            <div className="relative table-cell border-gray-300 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="text-xs font-medium text-slate-600 dark:text-white">
                                    {item.amount}{' '}
                                    <span className="font-normal text-slate-500">
                                        USD
                                    </span>
                                </span>
                            </div>
                            <div className="relative table-cell border-gray-300 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <Badge.Dot
                                    className="capitalize"
                                    variant={badgeVariant}
                                >
                                    {item.status}
                                </Badge.Dot>
                            </div>
                            <div className="relative table-cell border-gray-300 py-4 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <ActionDropdown />
                            </div>
                        </div>
                    );
                })}
            </div>
        </Card>
    );
};

export default RecentTransactionCard;
