<script setup>
import Layout from '@/layout/Main.vue';
import {
    PageHead,
    PageHeadGroup,
    PageHeadTitle,
    PageHeadSubTitle,
    PageHeadOption,
    Button,
    ButtonZoom,
    Icon,
    Avatar,
} from '@/components';
import { toInitials } from '@/utilities';
import { useRoute } from 'vue-router';
import { useCustomerStore } from '@/stores/customer';
const customers = useCustomerStore();
const route = useRoute();

const customer = customers.data.filter(
    (customer) => customer.id === route.params.id,
)[0];
</script>

<template>
    <Layout :title="'Details'">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Customer Details</PageHeadTitle>
                <PageHeadSubTitle
                    >An example page for customer details.</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="hidden sm:inline-flex"
                    to="/customer-list"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                    <span class="ms-3">Back</span>
                </Button>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="sm:hidden"
                    icon
                    to="/customer-list"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                </Button>
            </PageHeadGroup>
        </PageHead>

        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                <div
                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                >
                    <div
                        class="flex flex-col items-center border-b border-gray-300 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-900"
                    >
                        <Avatar
                            v-if="customer.img"
                            size="2xl"
                            rounded
                            :img="customer.img"
                        />
                        <Avatar
                            v-else
                            :variant="customer.theme"
                            size="2xl"
                            rounded
                            :text="toInitials(customer.name)"
                        />
                        <div class="mt-4">
                            <span
                                class="text-xxs tracking-snug relative inline-flex rounded-full border border-gray-100 bg-gray-100 px-2 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-slate-700 uppercase dark:border-gray-900 dark:bg-gray-900 dark:text-white"
                                >Platinam</span
                            >
                            <h6
                                class="font-heading leading-tighter mt-4 mb-2 text-xl font-bold text-slate-700 dark:text-white"
                            >
                                {{ customer.name }}
                            </h6>
                            <span class="text-sm text-slate-400">{{
                                customer.email
                            }}</span>
                        </div>
                    </div>
                    <div
                        class="border-b border-gray-300 px-5 py-3 sm:px-6 dark:border-gray-900"
                    >
                        <ul class="flex flex-wrap justify-center gap-1.5">
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="shield-off" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="mail" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="bookmark" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon
                                        class="text-lg text-red-600"
                                        name="na"
                                    />
                                </ButtonZoom>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                    >
                        <div class="grid grid-flow-dense grid-cols-12">
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span
                                        class="block text-lg font-bold text-slate-600 dark:text-white"
                                        >23</span
                                    >
                                    <span
                                        class="block text-xs leading-5 text-slate-400"
                                        >Total Order</span
                                    >
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span
                                        class="block text-lg font-bold text-slate-600 dark:text-white"
                                        >20</span
                                    >
                                    <span
                                        class="block text-xs leading-5 text-slate-400"
                                        >Complete</span
                                    >
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span
                                        class="block text-lg font-bold text-slate-600 dark:text-white"
                                        >3</span
                                    >
                                    <span
                                        class="block text-xs leading-5 text-slate-400"
                                        >Progress</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6">
                        <h6
                            class="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                        >
                            Short Details
                        </h6>
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >User ID:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >UD003054</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >Billing Email:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >billing@softnio.com</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >Billing Address:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >551 Swanston Street, Melbourne
                                    <br />Victoria 3053 Australia</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >Language:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >English, France</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >Last Login:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >15 Feb, 2019 01:02 PM</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >KYC Status:</span
                                >
                                <span
                                    class="mt-1 block text-sm font-bold text-green-600"
                                    >Approved</span
                                >
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12"
                            >
                                <span class="block text-xs text-slate-400"
                                    >Register At:</span
                                >
                                <span
                                    class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                    >Nov 24, 2019</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                <div
                    class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                >
                    <div class="p-5 sm:p-6">
                        <h6
                            class="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                        >
                            In Account
                        </h6>
                        <div class="-mx-3 mb-6 flex items-end">
                            <div
                                class="flex gap-x-2 px-3 text-sm text-slate-400"
                            >
                                <div class="flex flex-col">
                                    <div
                                        class="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white"
                                    >
                                        237.89
                                        <span
                                            class="text-lg leading-6 font-normal"
                                            >1,643</span
                                        >
                                    </div>
                                    <div class="mt-2 text-xs">
                                        Wallet Balance
                                    </div>
                                </div>
                            </div>
                            <div
                                class="flex gap-x-2 px-3 text-sm text-slate-400"
                            >
                                <span class="text-base text-slate-400"
                                    ><Icon name="plus"
                                /></span>
                                <div class="flex flex-col">
                                    <div
                                        class="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white"
                                    >
                                        1,643.76
                                    </div>
                                    <div class="mt-2 text-xs">
                                        Credit Points
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6
                            class="font-heading mb-4 text-sm font-bold text-slate-700 dark:text-white"
                        >
                            Recent Orders
                        </h6>
                        <div
                            class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div
                                class="table w-full border-collapse border-gray-300 dark:border-gray-900"
                            >
                                <div
                                    class="table-row [&>*]:border-b [&>*]:last:border-b-0"
                                >
                                    <div
                                        class="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Order ID</span
                                        >
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Product Name</span
                                        >
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Total Price</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Status</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-1 text-start align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Delivery</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                                >
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <a
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            class="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >#4947</a
                                        >
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white"
                                            >
                                                <img
                                                    class="rounded"
                                                    src="/images/product/c.png"
                                                    alt=""
                                                />
                                            </div>
                                            <span
                                                class="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                            >
                                                Black Mi Band Smartwatch
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900"
                                    >
                                        <span class="text-sm text-slate-400"
                                            >$ 89.49</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span
                                            class="text-sm font-medium text-yellow-600"
                                            >Shipped</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >In 2 days</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                                >
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <a
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            class="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >#4948</a
                                        >
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white"
                                            >
                                                <img
                                                    class="rounded"
                                                    src="/images/product/b.png"
                                                    alt=""
                                                />
                                            </div>
                                            <span
                                                class="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                            >
                                                Purple Smartwatch
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900"
                                    >
                                        <span class="text-sm text-slate-400"
                                            >$299.49</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span
                                            class="text-sm font-medium text-green-600"
                                            >Delivered</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >12 Dec, 2020</span
                                        >
                                    </div>
                                </div>
                                <div
                                    class="hover:dark:bg-gray-1000 group table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
                                >
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <a
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            class="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                            >#4949</a
                                        >
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 sm:table-cell dark:border-gray-900"
                                    >
                                        <div class="flex items-center">
                                            <div
                                                class="text-xxs bg-primary-600 relative flex h-12 w-12 flex-shrink-0 items-center justify-center rounded font-medium text-white"
                                            >
                                                <img
                                                    class="rounded"
                                                    src="/images/product/a.png"
                                                    alt=""
                                                />
                                            </div>
                                            <span
                                                class="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                            >
                                                Pink Fitness Tracker
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="hidden border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 2xl:table-cell dark:border-gray-900"
                                    >
                                        <span class="text-sm text-slate-400"
                                            >$99.49</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span
                                            class="text-sm font-medium text-red-600"
                                            >Canceled</span
                                        >
                                    </div>
                                    <div
                                        class="table-cell border-gray-300 px-2 py-2 align-middle first:ps-5 last:pe-5 dark:border-gray-900"
                                    >
                                        <span class="text-xs text-slate-400"
                                            >Never</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6
                            class="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white"
                        >
                            Payment Methods
                        </h6>
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div class="col-span-12 2xl:col-span-6">
                                <div
                                    class="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="bg-primary-600 relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full font-medium text-white"
                                                >
                                                    <Icon
                                                        class="text-2xl"
                                                        name="visa"
                                                    />
                                                </div>
                                                <div class="ms-4">
                                                    <h6
                                                        class="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white"
                                                    >
                                                        Visa Card
                                                        <span
                                                            class="ms-1 font-normal text-slate-400"
                                                            >**** 1955</span
                                                        >
                                                    </h6>
                                                    <span
                                                        class="block text-xs leading-4 text-slate-400"
                                                        >Expires Nov 2023</span
                                                    >
                                                </div>
                                            </div>
                                            <ul
                                                class="-me-1.5 flex flex-nowrap gap-1.5"
                                            >
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="edit"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="trash"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div
                                    class="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-indigo-900 font-medium text-white"
                                                >
                                                    <Icon
                                                        class="text-2xl"
                                                        name="american-express"
                                                    />
                                                </div>
                                                <div class="ms-4">
                                                    <h6
                                                        class="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white"
                                                    >
                                                        American Express
                                                        <span
                                                            class="ms-1 font-normal text-slate-400"
                                                            >**** 4352</span
                                                        >
                                                    </h6>
                                                    <span
                                                        class="block text-xs leading-4 text-slate-400"
                                                        >Expires Feb 2024</span
                                                    >
                                                </div>
                                            </div>
                                            <ul
                                                class="-me-1.5 flex flex-nowrap gap-1.5"
                                            >
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="edit"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="trash"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div
                                    class="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <div class="p-5 sm:p-6">
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div class="flex items-center">
                                                <div
                                                    class="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-orange-500 font-medium text-white"
                                                >
                                                    <Icon
                                                        class="text-2xl"
                                                        name="mc"
                                                    />
                                                </div>
                                                <div class="ms-4">
                                                    <h6
                                                        class="font-heading block text-sm leading-6 font-bold text-slate-700 dark:text-white"
                                                    >
                                                        Mastercard
                                                        <span
                                                            class="ms-1 font-normal text-slate-400"
                                                            >**** 9478</span
                                                        >
                                                    </h6>
                                                    <span
                                                        class="block text-xs leading-4 text-red-600"
                                                        >Expired</span
                                                    >
                                                </div>
                                            </div>
                                            <ul
                                                class="-me-1.5 flex flex-nowrap gap-1.5"
                                            >
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="edit"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                                <li>
                                                    <ButtonZoom>
                                                        <Icon
                                                            class="text-lg"
                                                            name="trash"
                                                        />
                                                    </ButtonZoom>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <button
                                    class="h-full w-full rounded-md border border-dashed border-gray-300 bg-white p-5 sm:p-6 dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <span class="text-slate-400">
                                        Add New Card
                                    </span>
                                </button>
                            </div>
                        </div>

                        <h6
                            class="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white"
                        >
                            Connect to Facebook
                        </h6>
                        <div
                            class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="p-5 sm:p-6">
                                <div
                                    class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
                                >
                                    <div
                                        class="flex items-center gap-4 sm:max-w-lg"
                                    >
                                        <div
                                            class="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#3b5998] font-medium text-white"
                                        >
                                            <Icon
                                                class="text-2xl"
                                                name="facebook-f"
                                            />
                                        </div>
                                        <div>
                                            <p
                                                class="text-slate-600 dark:text-slate-400"
                                            >
                                                You have successfully connected
                                                with your facebook account, you
                                                can easily log in using your
                                                account too.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <Button size="lg" variant="red"
                                            >Revoke Access</Button
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6
                            class="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white"
                        >
                            Connect to Google
                        </h6>
                        <div
                            class="rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="p-5 sm:p-6">
                                <div
                                    class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
                                >
                                    <div
                                        class="flex items-center gap-4 sm:max-w-lg"
                                    >
                                        <div
                                            class="relative flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#de5246] font-medium text-white"
                                        >
                                            <Icon
                                                class="text-2xl"
                                                name="google"
                                            />
                                        </div>
                                        <div>
                                            <p
                                                class="text-slate-600 dark:text-slate-400"
                                            >
                                                You can connect with your google
                                                account.
                                                <em class="block text-slate-400"
                                                    >Not connected yet</em
                                                >
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <Button size="lg" variant="primary-pale"
                                            >Connect</Button
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <h6 class="font-heading text-base font-bold">
                                Import Contacts
                                <a
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    class="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >Import from Google</a
                                >
                            </h6>
                            <p
                                class="text-sm text-slate-600 dark:text-slate-400"
                            >
                                You have not imported contacts from your mobile
                                phone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
