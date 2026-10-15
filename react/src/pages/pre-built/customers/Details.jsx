import React, { useEffect, useState } from 'react';
import { Avatar, Button, Head, Icon, PageHead } from '../../../componenets';
import { useParams } from 'react-router-dom';
import { customerData } from '../../../store/customers';
import { toInitials } from '../../../utilities';
const CustomersDetailsPage = () => {
    const [data, setData] = useState([]);

    let { customerId } = useParams();
    // grabs the id of the url and loads the corresponding data
    useEffect(() => {
        const id = customerId;
        if (id !== undefined || null || '') {
            let customer = customerData.find((item) => item.id === Number(id));
            if (customer) {
                setData(customer);
            }
        } else {
            setData(customerData[0]);
        }
    }, [customerId]);
    return (
        <>
            <Head title="Customer Details" />
            <PageHead>
                <PageHead.Group>
                    <PageHead.Title>Customer Details</PageHead.Title>
                    <PageHead.SubTitle>
                        An example page for customer details.
                    </PageHead.SubTitle>
                </PageHead.Group>
                <PageHead.Group>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="hidden sm:inline-flex"
                        to="/customer-list"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                        <span className="ms-3">Back</span>
                    </Button>
                    <Button
                        as="Link"
                        size="rg"
                        variant="white-outline"
                        className="sm:hidden"
                        icon
                        to="/customer-list"
                    >
                        <Icon
                            className="text-xl leading-4.5 rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </Button>
                </PageHead.Group>
            </PageHead>

            <div className="grid grid-flow-dense grid-cols-12 gap-7">
                <div className="col-span-12 lg:col-span-4 2xl:col-span-3">
                    <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                        <div className="flex flex-col items-center border-b border-gray-300 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-900">
                            {data.img ? (
                                <Avatar size="2xl" rounded img={data.img} />
                            ) : (
                                <Avatar
                                    variant={data.theme}
                                    size="2xl"
                                    rounded
                                    text={data.name && toInitials(data.name)}
                                />
                            )}
                            <div className="mt-4">
                                <span className="text-xxs tracking-snug relative inline-flex rounded-full border border-gray-100 bg-gray-100 px-2 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-slate-700 uppercase dark:border-gray-900 dark:bg-gray-900 dark:text-white">
                                    Platinam
                                </span>
                                <h6 className="font-heading leading-tighter mt-4 mb-2 text-xl font-bold text-slate-700 dark:text-white">
                                    {data.name}
                                </h6>
                                <span className="text-sm text-slate-400">
                                    {data.email}
                                </span>
                            </div>
                        </div>
                        <div className="border-b border-gray-300 px-5 py-3 sm:px-6 dark:border-gray-900">
                            <ul className="flex flex-wrap justify-center gap-1.5">
                                <li>
                                    <Button.Zoom>
                                        <Icon
                                            className="text-lg"
                                            name="shield-off"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom>
                                        <Icon className="text-lg" name="mail" />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom>
                                        <Icon
                                            className="text-lg"
                                            name="bookmark"
                                        />
                                    </Button.Zoom>
                                </li>
                                <li>
                                    <Button.Zoom>
                                        <Icon
                                            className="text-lg text-red-600"
                                            name="na"
                                        />
                                    </Button.Zoom>
                                </li>
                            </ul>
                        </div>
                        <div className="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900">
                            <div className="grid grid-flow-dense grid-cols-12">
                                <div className="col-span-4">
                                    <div className="text-center">
                                        <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                            23
                                        </span>
                                        <span className="block text-xs leading-5 text-slate-400">
                                            Total Order
                                        </span>
                                    </div>
                                </div>
                                <div className="col-span-4">
                                    <div className="text-center">
                                        <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                            20
                                        </span>
                                        <span className="block text-xs leading-5 text-slate-400">
                                            Complete
                                        </span>
                                    </div>
                                </div>
                                <div className="col-span-4">
                                    <div className="text-center">
                                        <span className="block text-lg font-bold text-slate-600 dark:text-white">
                                            3
                                        </span>
                                        <span className="block text-xs leading-5 text-slate-400">
                                            Progress
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="p-5 sm:p-6">
                            <h6 className="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                Short Details
                            </h6>
                            <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        User ID:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        UD003054
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        Billing Email:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        billing@softnio.com
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        Billing Address:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        551 Swanston Street, Melbourne
                                        <br />
                                        Victoria 3053 Australia
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        Language:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        English, France
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        Last Login:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        15 Feb, 2019 01:02 PM
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        KYC Status:
                                    </span>
                                    <span className="mt-1 block text-sm font-bold text-green-600">
                                        Approved
                                    </span>
                                </div>
                                <div className="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                                    <span className="block text-xs text-slate-400">
                                        Register At:
                                    </span>
                                    <span className="mt-1 block text-sm text-slate-600 dark:text-slate-200">
                                        Nov 24, 2019
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                        <div className="p-5 sm:p-6">
                            <h6 className="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase">
                                In Account{' '}
                            </h6>
                            <div className="-mx-3 mb-6 flex items-end">
                                <div className="flex gap-x-2 px-3 text-sm text-slate-400">
                                    <div className="flex flex-col">
                                        <div className="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white">
                                            237.89
                                            <span className="text-lg leading-6 font-normal">
                                                1,643
                                            </span>
                                        </div>
                                        <div className="mt-2 text-xs">
                                            Wallet Balance
                                        </div>
                                    </div>
                                </div>
                                <div className="flex gap-x-2 px-3 text-sm text-slate-400">
                                    <span className="text-base text-slate-400">
                                        <Icon name="plus" />
                                    </span>
                                    <div className="flex flex-col">
                                        <div className="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white">
                                            1,643.76
                                        </div>
                                        <div className="mt-2 text-xs">
                                            Credit Points
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 className="font-heading mb-4 text-sm font-bold text-slate-700 dark:text-white">
                                Recent Orders
                            </h6>
                            <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="table w-full border-collapse border-gray-300 dark:border-gray-900">
                                    <div className="table-row [&>*]:border-b [&>*]:last:border-b-0">
                                        <div className="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Order ID
                                            </span>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Product Name
                                            </span>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Total Price
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Status
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Delivery
                                            </span>
                                        </div>
                                    </div>
                                    <div className="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0">
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                                className="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >
                                                #4947
                                            </a>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900">
                                            <div className="flex items-center">
                                                <div className="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white">
                                                    <img
                                                        className="rounded"
                                                        src="/images/product/c.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <span className="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                    Black Mi Band Smartwatch
                                                </span>
                                            </div>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900">
                                            <span className="text-sm text-slate-400">
                                                $ 89.49
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-sm font-medium text-yellow-600">
                                                Shipped
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                In 2 days
                                            </span>
                                        </div>
                                    </div>
                                    <div className="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0">
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                                className="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >
                                                #4948
                                            </a>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900">
                                            <div className="flex items-center">
                                                <div className="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white">
                                                    <img
                                                        className="rounded"
                                                        src="/images/product/b.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <span className="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                    Purple Smartwatch
                                                </span>
                                            </div>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900">
                                            <span className="text-sm text-slate-400">
                                                $299.49
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-sm font-medium text-green-600">
                                                Delivered
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                12 Dec, 2020
                                            </span>
                                        </div>
                                    </div>
                                    <div className="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0">
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <a
                                                href="#link"
                                                onClick={(e) =>
                                                    e.preventDefault()
                                                }
                                                className="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >
                                                #4949
                                            </a>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900">
                                            <div className="flex items-center">
                                                <div className="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white">
                                                    <img
                                                        className="rounded"
                                                        src="/images/product/a.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <span className="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white">
                                                    Pink Fitness Tracker
                                                </span>
                                            </div>
                                        </div>
                                        <div className="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900">
                                            <span className="text-sm text-slate-400">
                                                $99.49
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-sm font-medium text-red-600">
                                                Canceled
                                            </span>
                                        </div>
                                        <div className="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900">
                                            <span className="text-xs text-slate-400">
                                                Never
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 className="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white">
                                Payment Methods
                            </h6>
                            <div className="grid grid-flow-dense grid-cols-12 gap-4">
                                <div className="col-span-12 2xl:col-span-6">
                                    <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <div className="p-5 sm:p-6">
                                            <div className="flex items-center justify-between">
                                                <div className="flex items-center">
                                                    <div className="bg-primary-600 relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full font-medium text-white">
                                                        <Icon
                                                            className="text-2xl"
                                                            name="visa"
                                                        />
                                                    </div>
                                                    <div className="ms-4">
                                                        <h6 className="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white">
                                                            Visa Card
                                                            <span className="ms-1 font-normal text-slate-400">
                                                                **** 1955
                                                            </span>
                                                        </h6>
                                                        <span className="block text-xs leading-4 text-slate-400">
                                                            Expires Nov 2023
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul className="-me-1.5 flex flex-nowrap gap-1.5">
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="edit"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="trash"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-span-12 2xl:col-span-6">
                                    <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <div className="p-5 sm:p-6">
                                            <div className="flex items-center justify-between">
                                                <div className="flex items-center">
                                                    <div className="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-indigo-900 font-medium text-white">
                                                        <Icon
                                                            className="text-2xl"
                                                            name="american-express"
                                                        />
                                                    </div>
                                                    <div className="ms-4">
                                                        <h6 className="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white">
                                                            American Express
                                                            <span className="ms-1 font-normal text-slate-400">
                                                                **** 4352
                                                            </span>
                                                        </h6>
                                                        <span className="block text-xs leading-4 text-slate-400">
                                                            Expires Feb 2024
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul className="-me-1.5 flex flex-nowrap gap-1.5">
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="edit"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="trash"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-span-12 2xl:col-span-6">
                                    <div className="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                        <div className="p-5 sm:p-6">
                                            <div className="flex items-center justify-between">
                                                <div className="flex items-center">
                                                    <div className="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-orange-500 font-medium text-white">
                                                        <Icon
                                                            className="text-2xl"
                                                            name="mc"
                                                        />
                                                    </div>
                                                    <div className="ms-4">
                                                        <h6 className="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white">
                                                            Mastercard
                                                            <span className="ms-1 font-normal text-slate-400">
                                                                **** 9478
                                                            </span>
                                                        </h6>
                                                        <span className="block text-xs leading-4 text-red-600">
                                                            Expired
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul className="-me-1.5 flex flex-nowrap gap-1.5">
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="edit"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                    <li>
                                                        <Button.Zoom>
                                                            <Icon
                                                                className="text-lg"
                                                                name="trash"
                                                            />
                                                        </Button.Zoom>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-span-12 2xl:col-span-6">
                                    <button className="h-full w-full rounded-md border border-dashed border-gray-300 bg-white p-5 sm:p-6 dark:border-gray-900 dark:bg-gray-950">
                                        <span className="text-slate-400">
                                            Add New Card
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <h6 className="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white">
                                Connect to Facebook
                            </h6>
                            <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="p-5 sm:p-6">
                                    <div className="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap">
                                        <div className="flex items-center gap-4 sm:max-w-lg">
                                            <div className="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#3b5998] font-medium text-white">
                                                <Icon
                                                    className="text-2xl"
                                                    name="facebook-f"
                                                />
                                            </div>
                                            <div>
                                                <p className="text-slate-600 dark:text-slate-400">
                                                    You have successfully
                                                    connected with your facebook
                                                    account, you can easily log
                                                    in using your account too.
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <Button size="lg" variant="red">
                                                Revoke Access
                                            </Button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 className="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white">
                                Connect to Google
                            </h6>
                            <div className="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950">
                                <div className="p-5 sm:p-6">
                                    <div className="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap">
                                        <div className="flex items-center gap-4 sm:max-w-lg">
                                            <div className="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#de5246] font-medium text-white">
                                                <Icon
                                                    className="text-2xl"
                                                    name="google"
                                                />
                                            </div>
                                            <div>
                                                <p className="text-slate-600 dark:text-slate-400">
                                                    You can connect with your
                                                    google account.{' '}
                                                    <em className="block text-slate-400">
                                                        Not connected yet
                                                    </em>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <Button
                                                size="lg"
                                                variant="primary-pale"
                                            >
                                                Connect
                                            </Button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="mt-10">
                                <h6 className="font-heading text-base font-bold">
                                    Import Contacts{' '}
                                    <a
                                        href="#link"
                                        onClick={(e) => e.preventDefault()}
                                        className="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >
                                        Import from Google
                                    </a>
                                </h6>
                                <p className="text-sm text-slate-600 dark:text-slate-400">
                                    You have not imported contacts from your
                                    mobile phone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default CustomersDetailsPage;
