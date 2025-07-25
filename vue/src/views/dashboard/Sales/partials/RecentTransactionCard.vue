<script setup>
import { Card, CardBody, Avatar, Button, BadgeDot, Icon} from '@/components'
import { toInitials } from '@/utilities'
import ActionDropdown from './RecentTransactionDropdown.vue'

const data = [
    {
        id: "95954",
        amount: "4,596.75",
        date: "02/11/2020",
        reference: "SUB-2309232",
        status: "paid",
        customer: {
        name: "Abu Bin Ishityak",
        theme: "purple"
        }
    },
    {
        id: "95850",
        amount: "596.75",
        date: "02/02/2020",
        reference: "SUB-2309154",
        status: "canceled",
        customer: {
        name: "Desiree Edwards",
        theme: "blue"
        }
    },
    {
        id: "95812",
        amount: "199.99",
        date: "02/01/2020",
        reference: "SUB-2309143",
        status: "paid",
        customer: {
        name: "Blanca Schultz",
        image: "/images/avatar/b-sm.jpg"
        }
    },
    {
        id: "95256",
        amount: "1099.99",
        date: "01/29/2020",
        reference: "SUB-2305684",
        status: "paid",
        customer: {
        name: "Naomi Lawrence",
        theme: "indigo"
        }
    },
    {
        id: "95935",
        amount: "1099.99",
        date: "01/29/2020",
        reference: "SUB-2305564",
        status: "due",
        customer: {
        name: "Cassandra Hogan",
        theme: "green"
        }
    },
]
</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 dark:border-gray-900">
            <div class="relative flex items-center justify-between -my-1">
                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white"><span class="me-2">Transaction</span> <a href="#link"  @click="(e)=> e.preventDefault()" class="hidden sm:inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline">See History</a></h6>
                <ul class="flex gap-x-5 -my-1">
                    <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link"  @click="(e)=> e.preventDefault()"><span>Paid</span></a></li>
                    <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link"  @click="(e)=> e.preventDefault()"><span>Pending</span></a></li>
                    <li><a class="active relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link"  @click="(e)=> e.preventDefault()"><span>All</span></a></li>
                </ul>
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Order No.</span></div>
                <div class="relative hidden sm:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Customer</span></div>
                <div class="relative hidden md:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                <div class="relative hidden lg:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Ref</span></div>
                <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Amount</span></div>
                <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span class="hidden xs:inline">Status</span></div>
                <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
            </div>
            <div v-for="(item,index) in data" :key="index" class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span>
                        <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#{{item.id}}</a>
                    </span>
                </div>
                <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <div class="flex items-center">
                        <Avatar v-if="item.customer.image" size="rg" rounded :img="item.customer.image"/>
                        <Avatar v-else size="rg" :variant="item.customer.theme" rounded :text="toInitials(item.customer.name)"/>
                        <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">{{item.customer.name}}</div>
                    </div>
                </div>
                <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs">{{item.date}}</span>
                </div>
                <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs text-primary-600">{{item.reference}}</span>
                </div>
                <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs font-medium text-slate-600 dark:text-white">{{item.amount}} <span class="font-normal text-slate-500">USD</span></span>
                </div>
                <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <BadgeDot class="capitalize" :variant="item.status === 'paid' ? 'green' : item.status === 'due' ? 'yellow' : item.status === 'canceled' ? 'red' : 'light'">{{item.status}}</BadgeDot>
                </div>
                <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                    <ActionDropdown />
                </div>
            </div>
        </div>
    </Card>
</template>