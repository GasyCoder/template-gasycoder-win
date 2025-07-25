<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, Button, ButtonZoom, Icon, Dropdown,
  Pagination, PaginationPrev, PaginationItem, PaginationDot, PaginationNext, BadgeDot
 } from '@/components'
import { useInvoiceStore } from '@/stores/invoice'
const invoices = useInvoiceStore()
const showSearchForm = ref(false)

</script>

<template>
  <Layout title="Invoice List">
    <PageHead>
      <PageHeadGroup>
        <PageHeadTitle>Invoices</PageHeadTitle>
        <PageHeadSubTitle>You have total 937 invoices.</PageHeadSubTitle>
      </PageHeadGroup>
      <PageHeadGroup>
        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0,4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
          <template #button>
            <Button size="rg" variant="primary" icon>
                <Icon class="text-xl/4.5" name="plus" />
            </Button>
          </template>
          <template #content>
            <ul class="py-2">
                <li>
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Add New</span></MenuItem>
                </li>
                <li>
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Import</span></MenuItem>
                </li>
            </ul>
          </template>
        </Dropdown>
      </PageHeadGroup>
    </PageHead>
    <div class="border-y sm:border-x sm:rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full -mx-3.5 sm:m-0">
        <div class="p-5 relative">
            <div class="flex items-center justify-between relative">
                <h5 class="font-heading font-bold text-xl leading-tighter tracking-snug text-slate-700 dark:text-white">All Invoice</h5>
                <ul class="flex flex-wrap items-start gap-2.5">
                    <li>
                        <ButtonZoom @click="()=> showSearchForm = true">
                            <Icon class="text-xl/4.5" name="search" />
                        </ButtonZoom>
                    </li>
                    <li class="h-9 border-s border-gray-200 dark:border-gray-800"></li>
                    <li>
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]">
                            <template #button>
                                <ButtonZoom>
                                    <Icon class="text-xl/4.5" name="setting" />
                                </ButtonZoom>
                            </template>
                            <template #content>
                                <ul class="py-2">
                                    <li>
                                        <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Show</h6>
                                    </li>
                                    <li class="group">
                                        <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                            <span>10 Items</span>
                                            <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                        </MenuItem>
                                    </li>
                                    <li class="group active">
                                        <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                            <span>20 Items</span>
                                            <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                        </MenuItem>
                                    </li>
                                    <li class="group">
                                        <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                            <span>30 Items</span>
                                            <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                        </MenuItem>
                                    </li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li>
                                        <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Order By</h6>
                                    </li>
                                    <li class="group active">
                                        <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                            <span>DESC</span>
                                            <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                        </MenuItem>
                                    </li>
                                    <li class="group">
                                        <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                            <span>ASC</span>
                                            <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                        </MenuItem>
                                    </li>
                                </ul>
                            </template>
                        </Dropdown>
                    </li>
                </ul>
            </div>
            <div :class="{'absolute inset-0 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t-md': true, 'active': showSearchForm}">
                <div class="p-5 flex items-center">
                    <button @click="()=> showSearchForm = false" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300">
                        <Icon class="text-xl/4.5 rtl:-scale-x-100" name="arrow-left" />
                    </button>
                    <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Quick search by order id" auto-complete="off" />
                    <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                        <Icon class="text-xl/4.5" name="search" />
                    </button>
                </div>
            </div>
        </div>
        <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
            <thead>
                <tr>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                        <span class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed     leading-tight">Order ID</span>
                        </span>
                        <span class="hidden md:inline-block">
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Date</span>
                        </span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                        <span class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Amount</span>
                        </span>
                        <span class="hidden md:inline-block">
                            <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Status</span>
                        </span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-end"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in invoices.data" :key="index" class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                        <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                            <router-link :to="`/invoice-details/${item.id}`" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#{{item.orderId}}</router-link>
                        </div>
                        <span class="text-sm whitespace-nowrap text-slate-400">{{item.date}}, {{item.time}}</span>
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                        <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                            <span class="text-sm font-medium text-slate-700 dark:text-white">${{item.totalAmount}}</span>
                        </div>
                        <BadgeDot class="capitalize" :variant="item.status == 'Complete' ? 'green' : item.status == 'Pending' ? 'yellow' : item.status == 'Cancelled' ? 'red' : 'light'">{{item.status}}</BadgeDot>
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                        <ul class="hidden sm:flex items-center justify-end gap-2">
                            <li>
                                <Button as="router-link" :to="`/invoice-print/${item.id}`" target="_blank" size="sm" variant="primary-transparent" icon>
                                    <Icon class="text-base/4.5" name="printer-fill" />
                                </Button>
                            </li>
                            <li>
                                <Button as="router-link" :to="`/invoice-details/${item.id}`" size="sm" variant="primary-pale">View</Button>
                            </li>
                        </ul>
                        <div class="sm:hidden">
                            <ButtonZoom  as="router-link" :to="`/invoice-details/${item.id}`" size="sm">
                                <Icon class="text-xl rtl:-scale-x-100" name="chevron-right" />
                            </ButtonZoom>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="p-5">
            <div class="flex flex-wrap justify-center sm:justify-between gap-4">
                <Pagination>
                    <PaginationPrev text="Prev"/>
                    <PaginationItem>1</PaginationItem>
                    <PaginationItem>2</PaginationItem>
                    <PaginationDot />
                    <PaginationItem>6</PaginationItem>
                    <PaginationItem>7</PaginationItem>
                    <PaginationNext text="Next"/>
                </Pagination>
            </div>
        </div>
    </div>
  </Layout>
</template>
