<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    PageHead,
    PageHeadGroup,
    PageHeadTitle,
    PageHeadSubTitle,
    Button,
    ButtonZoom,
    Icon,
    Dropdown,
    Pagination,
    PaginationPrev,
    PaginationItem,
    PaginationDot,
    PaginationNext,
    BadgeDot,
} from '@/components';
import { useInvoiceStore } from '@/stores/invoice';
const invoices = useInvoiceStore();
const showSearchForm = ref(false);
</script>

<template>
    <Layout title="Invoice List">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Invoices</PageHeadTitle>
                <PageHeadSubTitle
                    >You have total 937 invoices.</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <Dropdown
                    placement="bottom-end"
                    rtlPlacement="bottom-start"
                    :offset="[0, 4]"
                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                >
                    <template #button>
                        <Button size="rg" variant="primary" icon>
                            <Icon class="text-xl/4.5" name="plus" />
                        </Button>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Add New</span></MenuItem
                                >
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Import</span></MenuItem
                                >
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </PageHeadGroup>
        </PageHead>
        <div
            class="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="relative p-5">
                <div class="relative flex items-center justify-between">
                    <h5
                        class="font-heading leading-tighter tracking-snug text-xl font-bold text-slate-700 dark:text-white"
                    >
                        All Invoice
                    </h5>
                    <ul class="flex flex-wrap items-start gap-2.5">
                        <li>
                            <ButtonZoom @click="() => (showSearchForm = true)">
                                <Icon class="text-xl/4.5" name="search" />
                            </ButtonZoom>
                        </li>
                        <li
                            class="h-9 border-s border-gray-200 dark:border-gray-800"
                        ></li>
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]"
                            >
                                <template #button>
                                    <ButtonZoom>
                                        <Icon
                                            class="text-xl/4.5"
                                            name="setting"
                                        />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <h6
                                                class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                            >
                                                Show
                                            </h6>
                                        </li>
                                        <li class="group">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                            >
                                                <span>10 Items</span>
                                                <em
                                                    class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                ></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group active">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                            >
                                                <span>20 Items</span>
                                                <em
                                                    class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                ></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                            >
                                                <span>30 Items</span>
                                                <em
                                                    class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                ></em>
                                            </MenuItem>
                                        </li>
                                        <li
                                            class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                        ></li>
                                        <li>
                                            <h6
                                                class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                            >
                                                Order By
                                            </h6>
                                        </li>
                                        <li class="group active">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                            >
                                                <span>DESC</span>
                                                <em
                                                    class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                ></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                            >
                                                <span>ASC</span>
                                                <em
                                                    class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                ></em>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                    </ul>
                </div>
                <div
                    :class="{
                        'invisible absolute inset-0 z-[800] bg-white opacity-0 transition-all duration-300 sm:rounded-t-md dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100': true,
                        active: showSearchForm,
                    }"
                >
                    <div class="flex items-center p-5">
                        <button
                            @click="() => (showSearchForm = false)"
                            class="relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                        >
                            <Icon
                                class="text-xl/4.5 rtl:-scale-x-100"
                                name="arrow-left"
                            />
                        </button>
                        <input
                            type="text"
                            class="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                            placeholder="Quick search by order id"
                            auto-complete="off"
                        />
                        <button
                            type="submit"
                            class="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                        >
                            <Icon class="text-xl/4.5" name="search" />
                        </button>
                    </div>
                </div>
            </div>
            <table
                class="w-full border-collapse border-gray-300 dark:border-gray-900"
            >
                <thead>
                    <tr>
                        <th
                            class="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="md:inline-block md:min-w-[90px] lg:min-w-[120px]"
                            >
                                <span
                                    class="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Order ID</span
                                >
                            </span>
                            <span class="hidden md:inline-block">
                                <span
                                    class="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Date</span
                                >
                            </span>
                        </th>
                        <th
                            class="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="md:inline-block md:min-w-[100px] lg:min-w-[50%]"
                            >
                                <span
                                    class="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Amount</span
                                >
                            </span>
                            <span class="hidden md:inline-block">
                                <span
                                    class="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Status</span
                                >
                            </span>
                        </th>
                        <th
                            class="border-t border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        ></th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(item, index) in invoices.data"
                        :key="index"
                        class="hover:dark:bg-gray-1000 group transition-all duration-300 hover:bg-gray-50"
                    >
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <div
                                class="md:inline-block md:min-w-[90px] lg:min-w-[120px]"
                            >
                                <router-link
                                    :to="`/invoice-details/${item.id}`"
                                    class="font-body text-primary-500 hover:text-primary-600 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >#{{ item.orderId }}</router-link
                                >
                            </div>
                            <span
                                class="text-sm whitespace-nowrap text-slate-400"
                                >{{ item.date }}, {{ item.time }}</span
                            >
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <div
                                class="md:inline-block md:min-w-[100px] lg:min-w-[50%]"
                            >
                                <span
                                    class="text-sm font-medium text-slate-700 dark:text-white"
                                    >${{ item.totalAmount }}</span
                                >
                            </div>
                            <BadgeDot
                                class="capitalize"
                                :variant="
                                    item.status == 'Complete'
                                        ? 'green'
                                        : item.status == 'Pending'
                                          ? 'yellow'
                                          : item.status == 'Cancelled'
                                            ? 'red'
                                            : 'light'
                                "
                                >{{ item.status }}</BadgeDot
                            >
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <ul
                                class="hidden items-center justify-end gap-2 sm:flex"
                            >
                                <li>
                                    <Button
                                        as="router-link"
                                        :to="`/invoice-print/${item.id}`"
                                        target="_blank"
                                        size="sm"
                                        variant="primary-transparent"
                                        icon
                                    >
                                        <Icon
                                            class="text-base/4.5"
                                            name="printer-fill"
                                        />
                                    </Button>
                                </li>
                                <li>
                                    <Button
                                        as="router-link"
                                        :to="`/invoice-details/${item.id}`"
                                        size="sm"
                                        variant="primary-pale"
                                        >View</Button
                                    >
                                </li>
                            </ul>
                            <div class="sm:hidden">
                                <ButtonZoom
                                    as="router-link"
                                    :to="`/invoice-details/${item.id}`"
                                    size="sm"
                                >
                                    <Icon
                                        class="text-xl rtl:-scale-x-100"
                                        name="chevron-right"
                                    />
                                </ButtonZoom>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="p-5">
                <div
                    class="flex flex-wrap justify-center gap-4 sm:justify-between"
                >
                    <Pagination>
                        <PaginationPrev text="Prev" />
                        <PaginationItem>1</PaginationItem>
                        <PaginationItem>2</PaginationItem>
                        <PaginationDot />
                        <PaginationItem>6</PaginationItem>
                        <PaginationItem>7</PaginationItem>
                        <PaginationNext text="Next" />
                    </Pagination>
                </div>
            </div>
        </div>
    </Layout>
</template>
