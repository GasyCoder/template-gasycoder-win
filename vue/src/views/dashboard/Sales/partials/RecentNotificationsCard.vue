<script setup>
import { Card, CardBody, Icon } from '@/components'
import { toInitials } from '@/utilities'

const data = [
    {
        date: "13 Nov",
        time: "09:30am",
        title: "Submited KYC Application",
        subtitle: "Re-submitted KYC Application form.",
        theme: "primary",
        unread: true,
    },
    {
        date: "13 Nov",
        time: "09:30am",
        title: "Submited KYC Application",
        subtitle: "Re-submitted KYC Application form.",
        theme: "primary",
        unread: false,
    },
    {
        date: "13 Nov",
        time: "09:30am",
        title: "Submited KYC Application",
        subtitle: "Re-submitted KYC Application form.",
        theme: "pink",
        unread: false,
    },
]
</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 dark:border-gray-900">
            <div class="relative flex items-center justify-between -my-1">
                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Notifications</h6>
                <a href="#link"  @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">View All</a>
            </div>
        </CardBody>
        <CardBody>
            <h6 class="text-sm font-heading font-bold text-slate-400 mb-4">November, 2019</h6>
            <ul>
                <li v-for="(item,index) in data" :key="index" class="relative flex items-start pb-6 last:pb-0 before:absolute before:w-px before:h-[calc(100%-11px)] before:bg-gray-300 before:dark:bg-gray-800 before:top-[13px] before:start-[5px] before:last:hidden">
                    <div :class="{
                        'relative h-[11px] w-[11px] rounded-full flex-shrink-0 mt-0.5':true,
                        'bg-primary-500': !item.theme || item.theme === 'primary',
                        'bg-green-500': item.theme === 'green',
                        'bg-yellow-500': item.theme === 'yellow',
                        'bg-cyan-500': item.theme === 'cyan',
                        'bg-red-500': item.theme === 'red',
                        'bg-slate-500': item.theme === 'dark',
                        'bg-pink-500': item.theme === 'pink',
                        'before:absolute before:h-[7px] before:w-[7px] before:rounded-full before:bg-white before:dark:bg-gray-800 before:top-0.5 before:start-0.5': item.unread,
                    }"></div>
                    <div class="relative flex justify-between text-slate-400 w-[90px] ms-3 flex-shrink-0 leading-4">{{item.date}} <Icon name="alarm-alt"></Icon></div>
                    <div class="ps-2">
                        <h6 class="block text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-3">{{item.title}}</h6>
                        <p class="text-slate-400 leading-4.5 mb-1">{{item.subtitle}}</p>
                        <span class="text-xs leading-4 text-slate-400 block">{{item.time}}</span>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>