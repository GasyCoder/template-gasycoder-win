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
import { useRoute } from 'vue-router';
import { useInvoiceStore } from '@/stores/invoice';
const invoices = useInvoiceStore();
const route = useRoute();

const invoice = invoices.data.filter(
    (invoice) => invoice.id === route.params.id,
)[0];
</script>

<template>
    <Layout title="Details">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle
                    >Invoice
                    <strong class="text-primary-600 text-2xl font-normal"
                        >#{{ invoice.orderId }}</strong
                    ></PageHeadTitle
                >
                <PageHeadSubTitle
                    >Created At:
                    <span class="text-slate-600 dark:text-slate-400"
                        >{{ invoice.date }}, {{ invoice.time }}</span
                    ></PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="hidden sm:inline-flex"
                    to="/invoice-list"
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
                    to="/invoice-list"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                </Button>
            </PageHeadGroup>
        </PageHead>
        <div
            class="relative h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="absolute end-5 top-5">
                <router-link
                    :to="`/invoice-print/${invoice.id}`"
                    target="_blank"
                    class="border-primary-300 dark:border-primary-800 text-primary-600 hover:bg-primary-600 active:bg-primary-700 relative inline-flex h-11 w-11 items-center justify-center rounded-md border text-center align-middle text-base leading-4.5 font-bold tracking-wide transition-all duration-300 hover:text-white"
                >
                    <Icon class="text-xl/4.5" name="printer-fill"></Icon>
                </router-link>
            </div>
            <div class="p-5 md:p-12">
                <div class="mb-6 flex justify-center">
                    <router-link
                        to="/"
                        class="relative inline-block h-9 transition-opacity duration-300"
                    >
                        <img
                            class="h-full opacity-0 dark:opacity-100"
                            src="/logo.png"
                            srcSet="/logo2x.png 2x"
                            alt="logo"
                        />
                        <img
                            class="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                            src="/logo-dark.png"
                            srcSet="/logo-dark2x.png 2x"
                            alt="logo"
                        />
                    </router-link>
                </div>
                <div
                    class="flex flex-col justify-between gap-6 pb-6 md:flex-row"
                >
                    <div class="relative">
                        <span
                            class="text-xxs tracking-relaxed leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                            >Invoice To</span
                        >
                        <div class="invoice-contact-info">
                            <h4
                                class="font-heading mb-4 text-2xl font-bold tracking-tight text-slate-700 dark:text-white"
                            >
                                {{ invoice.name }}
                            </h4>
                            <ul class="flex flex-col gap-4">
                                <li class="flex gap-2 text-slate-400">
                                    <Icon
                                        class="text-primary-600 text-base/5"
                                        name="map-pin-fill"
                                    ></Icon>
                                    <span class="text-sm"
                                        >House #65, 4328 Marion Street<br />Newbury,
                                        VT 05051</span
                                    >
                                </li>
                                <li class="flex gap-2 text-slate-400">
                                    <Icon
                                        class="text-primary-600 text-base/5"
                                        name="call-fill"
                                    ></Icon>
                                    <span class="text-sm">{{
                                        invoice.phone
                                    }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-[210px]">
                        <h3
                            class="text-primary-600 font-heading mb-2 text-3xl font-bold tracking-tight uppercase"
                        >
                            Invoice
                        </h3>
                        <ul class="flex flex-col gap-2">
                            <li>
                                <span
                                    class="text-xxs tracking-relaxed inline-block min-w-[90px] leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Invoice ID</span
                                >:<span
                                    class="ms-3 text-sm font-medium text-slate-600"
                                    >{{ invoice.orderId }}</span
                                >
                            </li>
                            <li>
                                <span
                                    class="text-xxs tracking-relaxed inline-block min-w-[90px] leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                                    >Date</span
                                >:<span
                                    class="ms-3 text-sm font-medium text-slate-600"
                                    >{{ invoice.date }}</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table
                        class="w-full border-collapse border-gray-300 dark:border-gray-900"
                    >
                        <thead>
                            <tr>
                                <th
                                    class="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-primary-600 text-xs leading-tight font-bold uppercase"
                                        >Item Id</span
                                    >
                                </th>
                                <th
                                    class="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-primary-600 text-xs leading-tight font-bold uppercase"
                                        >Description</span
                                    >
                                </th>
                                <th
                                    class="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-primary-600 text-xs leading-tight font-bold uppercase"
                                        >Price</span
                                    >
                                </th>
                                <th
                                    class="border-b border-gray-300 px-2 py-1 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-primary-600 text-xs leading-tight font-bold uppercase"
                                        >Qty</span
                                    >
                                </th>
                                <th
                                    class="border-b border-gray-300 px-2 py-1 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-primary-600 text-xs leading-tight font-bold uppercase"
                                        >Amount</span
                                    >
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >24108054</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >DashWind - Conceptual App Dashboard -
                                        Regular License</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$40.00</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >5</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$200.00</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >24108054</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >6 months premium support</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$25.00</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >1</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$25.00</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >23604094</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >Invest Management Dashboard - Regular
                                        License</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$131.25</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >1</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$131.25</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >23604094</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >6 months premium support</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$78.75</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >1</span
                                    >
                                </td>
                                <td
                                    class="border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 text-slate-600 dark:text-slate-400"
                                        >$78.75</span
                                    >
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="pt-4">
                            <tr>
                                <td
                                    class="px-2 pt-6 pb-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                ></td>
                                <td
                                    class="px-2 pt-6 pb-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                >
                                    <span
                                        class="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >Subtotal</span
                                    >
                                </td>
                                <td
                                    class="px-2 pt-6 pb-1 text-end first:ps-6 last:pe-6"
                                >
                                    <span
                                        class="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >$435.00</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-2 py-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                ></td>
                                <td
                                    class="px-2 py-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >Processing fee</span
                                    >
                                </td>
                                <td
                                    class="px-2 py-1 text-end first:ps-6 last:pe-6"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >$10.00</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-2 py-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                ></td>
                                <td
                                    class="px-2 py-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >TAX</span
                                    >
                                </td>
                                <td
                                    class="px-2 py-1 text-end first:ps-6 last:pe-6"
                                >
                                    <span
                                        class="text-sm/5 whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >$43.50</span
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="px-2 py-1 first:ps-6 last:pe-6"
                                    colSpan="2"
                                ></td>
                                <td
                                    class="border-t border-gray-300 px-2 py-1 first:ps-6 last:pe-6 dark:border-gray-900"
                                    colSpan="2"
                                >
                                    <span
                                        class="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >Grand Total</span
                                    >
                                </td>
                                <td
                                    class="border-t border-gray-300 px-2 py-1 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                                >
                                    <span
                                        class="text-sm/5 font-medium whitespace-nowrap text-slate-600 dark:text-slate-400"
                                        >$478.50</span
                                    >
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="px-0.5 text-xs text-slate-400 italic">
                        Invoice was created on a computer and is valid without
                        the signature and seal.
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
