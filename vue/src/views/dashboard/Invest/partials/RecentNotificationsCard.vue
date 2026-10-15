<script setup>
import { Card, CardBody } from '@/components';
const data = [
    {
        date: '13 Nov',
        time: '09:30am',
        title: 'Submited KYC Application',
        subtitle: 'Re-submitted KYC Application form.',
        theme: 'primary',
        unread: true,
    },
    {
        date: '13 Nov',
        time: '09:30am',
        title: 'Submited KYC Application',
        subtitle: 'Re-submitted KYC Application form.',
        theme: 'primary',
        unread: false,
    },
    {
        date: '13 Nov',
        time: '09:30am',
        title: 'Submited KYC Application',
        subtitle: 'Re-submitted KYC Application form.',
        theme: 'primary',
        unread: false,
    },
    {
        date: '13 Nov',
        time: '09:30am',
        title: 'Submited KYC Application',
        subtitle: 'Re-submitted KYC Application form.',
        theme: 'pink',
        unread: false,
    },
];
</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 dark:border-gray-900">
            <div class="relative -my-1 flex items-center justify-between">
                <h6
                    class="font-heading -tracking-snug text-base leading-6.5 font-bold text-slate-700 dark:text-white"
                >
                    Notifications
                </h6>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                    >View All</a
                >
            </div>
        </CardBody>
        <CardBody>
            <h6 class="font-heading mb-4 text-sm font-bold text-slate-400">
                November, 2019
            </h6>
            <ul>
                <li
                    v-for="(item, index) in data"
                    :key="index"
                    class="relative flex items-start pb-6 before:absolute before:start-[5px] before:top-[13px] before:h-[calc(100%-11px)] before:w-px before:bg-gray-300 last:pb-0 before:last:hidden before:dark:bg-gray-800"
                >
                    <div
                        :class="{
                            'relative mt-0.5 h-[11px] w-[11px] flex-shrink-0 rounded-full': true,
                            'bg-primary-500':
                                !item.theme || item.theme === 'primary',
                            'bg-green-500': item.theme === 'green',
                            'bg-yellow-500': item.theme === 'yellow',
                            'bg-cyan-500': item.theme === 'cyan',
                            'bg-red-500': item.theme === 'red',
                            'bg-slate-500': item.theme === 'dark',
                            'bg-pink-500': item.theme === 'pink',
                            'before:absolute before:start-0.5 before:top-0.5 before:h-[7px] before:w-[7px] before:rounded-full before:bg-white before:dark:bg-gray-800':
                                item.unread,
                        }"
                    ></div>
                    <div
                        class="relative ms-3 flex w-[90px] flex-shrink-0 justify-between leading-4 text-slate-400"
                    >
                        {{ item.date }} <em class="icon ni ni-alarm-alt"></em>
                    </div>
                    <div class="ps-2">
                        <h6
                            class="leading-tighter mb-3 block text-sm font-bold text-slate-700 dark:text-white"
                        >
                            {{ item.title }}
                        </h6>
                        <p class="mb-1 leading-4.5 text-slate-400">
                            {{ item.subtitle }}
                        </p>
                        <span class="block text-xs leading-4 text-slate-400">{{
                            item.time
                        }}</span>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>
