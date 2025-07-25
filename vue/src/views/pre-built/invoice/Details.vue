<script setup>
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Avatar,
 } from '@/components'
import { useRoute } from 'vue-router'
import { useInvoiceStore } from '@/stores/invoice'
const invoices = useInvoiceStore()
const route = useRoute()

const invoice = invoices.data.filter(
    (invoice) => invoice.id === route.params.id
)[0];
</script>

<template>
  <Layout title="Details">
    <PageHead>
        <PageHeadGroup>
            <PageHeadTitle>Invoice <strong class="text-primary-600 text-2xl font-normal">#{{invoice.orderId}}</strong></PageHeadTitle>
            <PageHeadSubTitle>Created At:  <span class="text-slate-600 dark:text-slate-400">{{invoice.date}}, {{invoice.time}}</span></PageHeadSubTitle>
        </PageHeadGroup>
        <PageHeadGroup>
            <Button as="router-link" size="rg" variant="white-outline" class="hidden sm:inline-flex" to="/invoice-list">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
                <span class="ms-3">Back</span>
            </Button>
            <Button as="router-link" size="rg" variant="white-outline" class="sm:hidden" icon to="/invoice-list">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
            </Button>
        </PageHeadGroup>
    </PageHead>
    <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
        <div class="absolute top-5 end-5">
            <router-link :to="`/invoice-print/${invoice.id}`" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md h-11 w-11 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 transition-all duration-300">
                <Icon class="text-xl/4.5" name="printer-fill"></Icon>
            </router-link>
        </div>
        <div class="p-5 md:p-12">
            <div class="flex justify-center mb-6">
                <router-link to="/" class="relative inline-block transition-opacity duration-300 h-9">
                    <img class="h-full opacity-0 dark:opacity-100" src="/logo.png" srcSet="/logo2x.png 2x" alt="logo" />
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="/logo-dark.png" srcSet="/logo-dark2x.png 2x" alt="logo" />
                </router-link>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-6 pb-6">
                <div class="relative">
                    <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Invoice To</span>
                    <div class="invoice-contact-info">
                        <h4 class="text-2xl text-slate-700 dark:text-white font-heading font-bold tracking-tight mb-4">{{invoice.name}}</h4>
                        <ul class="flex flex-col gap-4">
                            <li class="flex gap-2 text-slate-400">
                                <Icon class="text-base/5 text-primary-600" name="map-pin-fill"></Icon>
                                <span class="text-sm">House #65, 4328 Marion Street<br />Newbury, VT 05051</span>
                            </li>
                            <li class="flex gap-2 text-slate-400">
                                <Icon class="text-base/5 text-primary-600" name="call-fill"></Icon>
                                <span class="text-sm">{{invoice.phone}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-[210px]">
                    <h3 class="text-3xl text-primary-600 font-heading font-bold uppercase tracking-tight mb-2">Invoice</h3>
                    <ul class="flex flex-col gap-2">
                        <li>
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight inline-block min-w-[90px]">Invoice ID</span>:<span class="font-medium text-sm text-slate-600 ms-3">{{invoice.orderId}}</span>
                        </li>
                        <li>
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight inline-block min-w-[90px]">Date</span>:<span class="font-medium text-sm text-slate-600 ms-3">{{invoice.date}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
                    <thead>
                        <tr>
                            <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Item Id</span>
                            </th>
                            <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Description</span>
                            </th>
                            <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Price</span>
                            </th>
                            <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Qty</span>
                            </th>
                            <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Amount</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">24108054</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">DashWind - Conceptual App Dashboard - Regular License</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$40.00</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">5</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$200.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">24108054</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">6 months premium support</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$25.00</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$25.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">23604094</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">Invest Management Dashboard - Regular License</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$131.25</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$131.25</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">23604094</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">6 months premium support</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$78.75</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                            </td>
                            <td class="py-2 px-2 first:ps-6 last:pe-6  border-b border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5">$78.75</span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="pt-4">
                        <tr>
                            <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6" colSpan="2"></td>
                            <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6" colSpan="2">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">Subtotal</span>
                            </td>
                            <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">$435.00</span>    
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 first:ps-6 last:pe-6" colSpan="2"></td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6" colSpan="2">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">Processing fee</span>
                            </td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">$10.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 first:ps-6 last:pe-6" colSpan="2"></td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6" colSpan="2">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">TAX</span>
                            </td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">$43.50</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 first:ps-6 last:pe-6" colSpan="2"></td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6 border-t border-gray-300 dark:border-gray-900" colSpan="2">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">Grand Total</span>
                            </td>
                            <td class="py-1 px-2 first:ps-6 last:pe-6 border-t border-gray-300 dark:border-gray-900 text-end">
                                <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">$478.50</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="italic text-xs text-slate-400 px-0.5"> Invoice was created on a computer and is valid without the signature and seal. </div>
            </div>
        </div>
    </div>
  </Layout>
</template>
