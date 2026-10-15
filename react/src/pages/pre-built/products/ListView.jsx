import React, { useState } from 'react';
import {
    Button,
    Card,
    CheckBox,
    Icon,
    PageHead,
    Pagination,
    Select,
    Input,
    Avatar,
    Head,
} from '../../../componenets';
import { productData } from '../../../store/products';
import AddProduct from './AddProduct';

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
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="edit"
                                    />
                                    <span>Edit Product</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Product</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="activity-round"
                                    />
                                    <span>Product Orders</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-start text-lg/none opacity-80"
                                        name="trash"
                                    />
                                    <span>Remove Product</span>
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
                        <Button.Zoom size="md">
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
                                        className="w-7 text-lg/none opacity-80"
                                        name="edit"
                                    />
                                    <span>Edit Selected</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="trash"
                                    />
                                    <span>Remove Selected</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="bar-c"
                                    />
                                    <span>Update Stock</span>
                                </Menu.Item>
                            </li>
                            <li>
                                <Menu.Item
                                    as="button"
                                    className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        className="w-7 text-lg/none opacity-80"
                                        name="invest"
                                    />
                                    <span>Update Price</span>
                                </Menu.Item>
                            </li>
                        </ul>
                    </Menu.Items>
                </>
            )}
        </Menu>
    );
};

const ProductsListPage = () => {
    const [showAddProduct, setShowAddProduct] = useState(false);

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
            <Head title="Product List" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Products</PageHead.Title>
                </PageHead.Group>
                <PageHead.Group>
                    <PageHead.Option>
                        <ul className="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                            <li>
                                <Input.Wrap className="max-w-[190px]">
                                    <Input.Icon icon="search" end />
                                    <Input
                                        id="default-03"
                                        icon="end"
                                        placeholder="Quick search by id"
                                    />
                                </Input.Wrap>
                            </li>
                            <li>
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
                                                    variant="white-outline"
                                                >
                                                    <span className="me-1">
                                                        Status
                                                    </span>
                                                    <Icon
                                                        className="-me-1 text-base/4.5"
                                                        name="chevron-down"
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
                                                            <span>
                                                                New Items
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Featured
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                    <li>
                                                        <Menu.Item
                                                            as="button"
                                                            className="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                        >
                                                            <span>
                                                                Out of Stock
                                                            </span>
                                                        </Menu.Item>
                                                    </li>
                                                </ul>
                                            </Menu.Items>
                                        </>
                                    )}
                                </Menu>
                            </li>
                            <li className="ms-auto">
                                <Button
                                    size="rg"
                                    variant="primary"
                                    className="hidden sm:inline-flex"
                                    onClick={() => {
                                        setShowAddProduct(!showAddProduct);
                                    }}
                                >
                                    <Icon className="text-xl/4.5" name="plus" />
                                    <span className="ms-3">Add Product</span>
                                </Button>
                                <Button
                                    size="rg"
                                    variant="primary"
                                    icon
                                    className="sm:hidden"
                                    onClick={() => {
                                        setShowAddProduct(!showAddProduct);
                                    }}
                                >
                                    <Icon className="text-xl/4.5" name="plus" />
                                </Button>
                            </li>
                        </ul>
                    </PageHead.Option>
                </PageHead.Group>
            </PageHead>
            <div className="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950">
                <table className="w-full border-collapse border-gray-300 dark:border-gray-900">
                    <thead>
                        <tr>
                            <th className="w-12 border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900">
                                <div className="flex items-center">
                                    <CheckBox size="sm" id="pid-all" />
                                </div>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                <span className="block text-xs/5 font-normal text-slate-400">
                                    Name
                                </span>
                            </th>
                            <th className="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-xs/5 font-normal text-slate-400">
                                    SKU
                                </span>
                            </th>
                            <th className="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-xs/5 font-normal text-slate-400">
                                    Price
                                </span>
                            </th>
                            <th className="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <span className="block text-xs/5 font-normal text-slate-400">
                                    Stock
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                <span className="block text-xs/5 font-normal text-slate-400">
                                    Category
                                </span>
                            </th>
                            <th className="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                <em className="ni ni-star-round block text-lg/5 text-slate-400"></em>
                            </th>
                            <th className="max-w-[3.75rem] border-b border-gray-300 px-2 py-0 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900">
                                <OptionsDropdown className="-me-2" />
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {productData.map((item, index) => {
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
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900">
                                        <div className="flex items-center">
                                            <Avatar img={item.img} size="lg" />
                                            <span className="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                {item.name}
                                            </span>
                                        </div>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-xs text-slate-400">
                                            {item.sku}
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-sm font-medium text-slate-700 dark:text-white">
                                            $ {item.price}
                                        </span>
                                    </td>
                                    <td className="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900">
                                        <span className="text-xs text-slate-400">
                                            {item.stock}
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                        <span className="text-xs text-slate-400">
                                            {item.category.map(
                                                (cItem, cIndex) => {
                                                    return (
                                                        <React.Fragment
                                                            key={cIndex}
                                                        >
                                                            {cItem}
                                                            {item.category
                                                                .length >
                                                                cIndex + 1 &&
                                                                ', '}
                                                        </React.Fragment>
                                                    );
                                                },
                                            )}
                                        </span>
                                    </td>
                                    <td className="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900">
                                        <div
                                            className={`group/asterisk relative inline-flex cursor-pointer ${item.fav ? 'active' : ''}`}
                                        >
                                            <em className="text-primary-600 ni ni-star text-lg/none"></em>
                                            <em className="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"></em>
                                        </div>
                                    </td>
                                    <td className="max-w-[3.75rem] border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900">
                                        <ActionDropdown className="-me-2" />
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
            <AddProduct
                show={showAddProduct}
                setShowAddProduct={setShowAddProduct}
            />
        </>
    );
};

export default ProductsListPage;
