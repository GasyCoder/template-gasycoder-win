import React, { useState } from 'react';
import { Card, Icon } from '../../../componenets';
import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const Item = ({ title, price, sold, image }) => {
    return (
        <li className="flex items-center">
            <div className="w-11">
                <img className="rounded" src={image} alt={title} />
            </div>
            <div className="ms-4">
                <div className="text-base text-slate-700 dark:text-white">
                    {title}
                </div>
                <div className="text-sm text-slate-400">
                    ${price.toFixed(2)}
                </div>
            </div>
            <div className="ms-auto text-end">
                <div className="text-base text-slate-700 dark:text-white">
                    ${(price * sold).toFixed(2)}
                </div>
                <div className="text-sm text-slate-400">{sold} Sold</div>
            </div>
        </li>
    );
};

const TopProductsCard = () => {
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
        {
            title: 'Pink Fitness Tracker',
            price: 99,
            sold: 10,
            image: '/images/product/a.png',
        },
        {
            title: 'Purple Smartwatch',
            price: 109,
            sold: 9,
            image: '/images/product/b.png',
        },
        {
            title: 'Black Smartwatch',
            price: 109,
            sold: 13,
            image: '/images/product/c.png',
        },
        {
            title: 'Black Headphones',
            price: 76,
            sold: 12,
            image: '/images/product/d.png',
        },
        {
            title: 'iPhone 7 Headphones',
            price: 88,
            sold: 20,
            image: '/images/product/e.png',
        },
    ];
    return (
        <Card className="h-full">
            <Card.Body>
                <div className="mb-3 flex items-center justify-between gap-x-3">
                    <h6 className="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white">
                        Top products
                    </h6>
                    <Menu as="div" className="relative inline-flex">
                        {({ open }) => (
                            <>
                                <Menu.Button
                                    as="div"
                                    className={`inline-flex${open ? ' active' : ''}`}
                                    ref={setDropdownToggle}
                                >
                                    <button className="relative inline-flex items-center text-xs font-bold tracking-wide text-slate-400 transition-all duration-300 hover:text-slate-600 [.active_&]:text-slate-600">
                                        <span>Weekly</span>
                                        <Icon
                                            className="text-base leading-4.5"
                                            name="chevron-down"
                                        />
                                    </button>
                                </Menu.Button>
                                <Menu.Items
                                    modal={false}
                                    ref={setDropdownContent}
                                    style={styles.popper}
                                    {...attributes.popper}
                                    className="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                                >
                                    <ul className="py-2">
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Daily</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group active">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Weekly</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                        <li className="group">
                                            <Menu.Item
                                                as="button"
                                                className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Monthly</span>
                                                <em className="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"></em>
                                            </Menu.Item>
                                        </li>
                                    </ul>
                                </Menu.Items>
                            </>
                        )}
                    </Menu>
                </div>
                <ul className="flex flex-col gap-y-5 py-2.5 leading-tight">
                    {data.map((item, index) => {
                        return (
                            <Item
                                key={index}
                                title={item.title}
                                price={item.price}
                                sold={item.sold}
                                image={item.image}
                            />
                        );
                    })}
                </ul>
            </Card.Body>
        </Card>
    );
};

export default TopProductsCard;
