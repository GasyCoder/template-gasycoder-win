<script setup>
import { Card, CardBody, Icon, Avatar, Progress, ProgressBar } from '@/components'
import { toInitials } from '@/utilities'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
import ActionDropdown from './RecentInvestmentDropdown.vue'
const theme = useThemeStore()

const data = [
    {
        plan:{
            code: "P1",
            name: "Silver",
            details: "Daily 4.76% for 21 Days"
        },
        user:{
            name:"Janice Carroll",
            theme:"pink-pale"
        },
        date: "18/10/2019",
        amount: "1.094780",
        progress: 75,
    },
    {
        plan:{
            code: "P2",
            name: "Dimond",
            details: "Daily 8.52% for 14 Days"
        },
        user:{
            name:"Victoria Aguilar",
            theme:"indigo-pale"
        },
        date: "18/10/2019",
        amount: "1.094780",
        progress: 100,
    },
    {
        plan:{
            code: "P3",
            name: "Platinam",
            details: "Daily 14.82% for 7 Days"
        },
        user:{
            name:"Emma Henry",
            theme:"purple-pale"
        },
        date: "18/10/2019",
        amount: "1.094780",
        progress: 100,
    },
    {
        plan:{
            code: "P1",
            name: "Silver",
            details: "Daily 4.76% for 21 Days"
        },
        user:{
            name:"Alice Ford",
            theme:"green-pale"
        },
        date: "18/10/2019",
        amount: "1.094780",
        progress: 100,
    },
    {
        plan:{
            code: "P3",
            name: "Platinam",
            details: "Daily 14.82% for 7 Days"
        },
        user:{
            name:"Harold Walker",
            theme:"orange-pale"
        },
        date: "18/10/2019",
        amount: "1.094780",
        progress: 100,
    },
]

</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 dark:border-gray-900">
            <div class="relative flex items-center justify-between -my-1">
                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Recent Investment</h6>
                <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">View All</a>
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Plan</span></div>
                <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Who</span></div>
                <div class="relative hidden lg:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Amount</span></div>
                <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
            </div>
            <div v-for="(item,index) in data" :key="index" class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                            <span>{{item.plan.code}}</span>
                        </div>
                        <div class="text-slate-400 text-xs inline-block ms-3">{{item.plan.name}} <span class="hidden md:inline">- {{item.plan.details}}</span></div>
                    </div>
                </div>
                <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <div class="flex items-center">
                            <Avatar v-if="item.user.image" size="rg" rounded :img="item.user.image"/>
                            <Avatar v-else size="rg" :variant="item.user.theme" rounded :text="toInitials(item.user.name)"/>
                        <div class="text-slate-600 text-xs font-bold flex items-center ms-3">{{item.user.name}}</div>
                    </div>
                </div>
                <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs">{{item.date}}</span>
                </div>
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                </div>
                <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                    <Progress v-if="item.progress !== 100"><ProgressBar :progress="item.progress" /></Progress>
                    <span v-else class="text-xs text-green-600">Completed</span>
                </div>
                <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                    <ActionDropdown />
                </div>
            </div>
        </div>
    </Card>
</template>