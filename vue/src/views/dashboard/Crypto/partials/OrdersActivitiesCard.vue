<script setup>
import { Card, CardBody, Icon } from '@/components'
const data = [
    {
        title: "Buy Bitcoin",
        type: "buy",
        currency: "bitcoin",
        date: "02/10/2020",
        time: "11:37 PM",
        reference: "RE2309232",
        amount:"0.2040",
        usdAmount: "4,596.75"
    },
    {
        title: "Buy Ethereum",
        type: "buy",
        currency: "ethereum",
        date: "02/10/2020",
        time: "10:37 PM",
        reference: "RE2309231",
        amount:"0.12600",
        usdAmount: "2,039.39"
    },
    {
        title: "Sell Bitcoin",
        type: "sell",
        currency: "bitcoin",
        date: "02/10/2020",
        time: "10:45 PM",
        reference: "RE2309230",
        amount:"0.94750",
        usdAmount: "9,285.71"
    },
    {
        title: "Sell Ethereum",
        type: "sell",
        currency: "ethereum",
        date: "02/11/2020",
        time: "10:25 PM",
        reference: "RE2309229",
        amount:"1.02050",
        usdAmount: "12,596.75"
    },
    {
        title: "Buy Bitcoin",
        type: "buy",
        currency: "bitcoin",
        date: "02/10/2020",
        time: "10:12 PM",
        reference: "RE2309228",
        amount:"0.00056",
        usdAmount: "400.00"
    },
    {
        title: "Sell Ethereum",
        type: "sell",
        currency: "ethereum",
        date: "02/09/2020",
        time: "05:15 PM",
        reference: "RE2309227",
        amount:"0.02575",
        usdAmount: "6,246.50"
    },
]
</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 dark:border-gray-900">
            <div class="relative flex items-center justify-between -my-1">
                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white"><span class="me-2">Orders Activities</span> <a href="#link" @click="(e)=> e.preventDefault()" class="hidden sm:inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline">See History</a></h6>
                <ul class="flex gap-x-5 -my-1">
                    <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link" @click="(e)=> e.preventDefault()"><span>Paid</span></a></li>
                    <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link" @click="(e)=> e.preventDefault()"><span>Pending</span></a></li>
                    <li><a class="active relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#link" @click="(e)=> e.preventDefault()"><span>All</span></a></li>
                </ul>
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]"><span>Type</span></div>
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Desc</span></div>
                <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                <div class="relative hidden xl:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Time</span></div>
                <div class="relative hidden 2xl:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Ref</span></div>
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>USD Amount</span></div>
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Amount</span></div>
            </div>
            <div v-for="(item,index) in data" key="index" class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                    <ul class="flex items-center">
                        <li class="first:ms-0 -ms-3.5">
                            <Icon v-if="item.type === 'buy'" name="arrow-down-left" class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-green-600 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium" />
                            <Icon v-if="item.type === 'sell'" name="arrow-up-right" class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-primary-600 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium" />
                        </li>
                        <li class="first:ms-0 -ms-3.5">
                            <Icon v-if="item.currency === 'bitcoin'" name="sign-btc" class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#f9841e] bg-[#feefe2] dark:bg-[#362c25] h-10 w-10 rounded-full font-medium" />
                            <Icon v-if="item.currency === 'ethereum'" name="sign-eth" class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#6174b9] bg-[#eaedf6] dark:bg-[#20293c] h-10 w-10 rounded-full font-medium" />
                        </li>
                    </ul>
                </div>
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">{{item.title}}</div>
                </div>
                <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs">{{item.date}}</span>
                </div>
                <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs">{{item.time}}</span>
                </div>
                <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs text-primary-600">{{item.reference}}</span>
                </div>
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                    <span class="text-xs font-medium text-slate-700 dark:text-white">{{item.usdAmount}} <span class="font-normal text-slate-500">USD</span></span>
                </div>
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                    <span class="text-xs font-medium text-slate-700 dark:text-white">+ {{item.amount}} 
                        <span class="font-normal text-slate-500">
                            <template v-if="item.currency  === 'bitcoin'">BTC</template>
                            <template v-if="item.currency  === 'ethereum'">ETH</template>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </Card>
</template>