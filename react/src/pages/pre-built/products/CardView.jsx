import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import {
    Button,
    Card,
    Icon,
    PageHead,
    Input,
    Badge,
    Head,
} from '../../../componenets';
import AddProduct from './AddProduct';
import { productCardData } from '../../../store/products';

import { Menu } from '@headlessui/react';
import { usePopper } from 'react-popper';
import { useTheme } from '../../../layout/context';

const ProductsCardPage = () => {
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
            <Head title="Product Card" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Products</PageHead.Title>
                </PageHead.Group>
                <PageHead.Group>
                    <PageHead.Option responsive="xs">
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
            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                {productCardData.map((item, index) => {
                    return (
                        <div
                            key={index}
                            className="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3"
                        >
                            <Card className="group h-full">
                                <div className="relative">
                                    <Link to={`/product-details/${item.id}`}>
                                        <img
                                            className="rounded-t"
                                            src={item.img}
                                            alt=""
                                        />
                                    </Link>
                                    <ul className="absolute start-4 top-4 flex flex-wrap gap-2">
                                        {item.new && (
                                            <li>
                                                <Badge variant="green">
                                                    New
                                                </Badge>
                                            </li>
                                        )}
                                        {item.hot && (
                                            <li>
                                                <Badge variant="red">Hot</Badge>
                                            </li>
                                        )}
                                    </ul>
                                    <ul className="absolute start-1/2 bottom-1 flex -translate-x-1/2 overflow-hidden rounded-t opacity-0 transition duration-200 ease-linear group-hover:opacity-100">
                                        <li className="px-0.5">
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                                className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                            >
                                                <em className="ni ni-cart text-base"></em>
                                            </a>
                                        </li>
                                        <li className="px-0.5">
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                                className="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                            >
                                                <em className="ni ni-heart text-base"></em>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div className="p-5 text-center sm:p-6">
                                    <ul className="flex flex-wrap justify-center">
                                        <li className="p-1">
                                            <a
                                                className="hover:text-primary-600 text-sm/6 text-slate-400"
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                            >
                                                {item.category}
                                            </a>
                                        </li>
                                    </ul>
                                    <h5 className="font-heading leading-tighter mt-2 mb-4 text-lg font-bold">
                                        <Link
                                            className="hover:text-primary-600 text-slate-700 transition-all duration-300 dark:text-white"
                                            to={`/product-details/${item.id}`}
                                        >
                                            {item.title}
                                        </Link>
                                    </h5>
                                    <div className="font-heading leading-tighter text-primary-600 text-lg font-bold">
                                        <small className="text-xs font-normal text-slate-400 line-through">
                                            ${item.price}
                                        </small>
                                        ${item.currentPrice}
                                    </div>
                                </div>
                            </Card>
                        </div>
                    );
                })}
            </div>
            <AddProduct
                show={showAddProduct}
                setShowAddProduct={setShowAddProduct}
            />
        </>
    );
};

export default ProductsCardPage;
