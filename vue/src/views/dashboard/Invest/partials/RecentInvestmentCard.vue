<script setup>
import {
    Card,
    CardBody,
    Icon,
    Avatar,
    Progress,
    ProgressBar,
} from '@/components';
import { toInitials } from '@/utilities';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
import ActionDropdown from './RecentInvestmentDropdown.vue';
const theme = useThemeStore();

const data = [
    {
        plan: {
            code: 'P1',
            name: 'Silver',
            details: 'Daily 4.76% for 21 Days',
        },
        user: {
            name: 'Janice Carroll',
            theme: 'pink-pale',
        },
        date: '18/10/2019',
        amount: '1.094780',
        progress: 75,
    },
    {
        plan: {
            code: 'P2',
            name: 'Dimond',
            details: 'Daily 8.52% for 14 Days',
        },
        user: {
            name: 'Victoria Aguilar',
            theme: 'indigo-pale',
        },
        date: '18/10/2019',
        amount: '1.094780',
        progress: 100,
    },
    {
        plan: {
            code: 'P3',
            name: 'Platinam',
            details: 'Daily 14.82% for 7 Days',
        },
        user: {
            name: 'Emma Henry',
            theme: 'purple-pale',
        },
        date: '18/10/2019',
        amount: '1.094780',
        progress: 100,
    },
    {
        plan: {
            code: 'P1',
            name: 'Silver',
            details: 'Daily 4.76% for 21 Days',
        },
        user: {
            name: 'Alice Ford',
            theme: 'green-pale',
        },
        date: '18/10/2019',
        amount: '1.094780',
        progress: 100,
    },
    {
        plan: {
            code: 'P3',
            name: 'Platinam',
            details: 'Daily 14.82% for 7 Days',
        },
        user: {
            name: 'Harold Walker',
            theme: 'orange-pale',
        },
        date: '18/10/2019',
        amount: '1.094780',
        progress: 100,
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
                    Recent Investment
                </h6>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                    >View All</a
                >
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Plan</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span>Who</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                >
                    <span>Date</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Amount</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span>&nbsp;</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>&nbsp;</span>
                </div>
            </div>
            <div
                v-for="(item, index) in data"
                :key="index"
                class="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
            >
                <div
                    class="relative table-cell border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <div class="flex items-center">
                        <div
                            class="relative flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-slate-100 text-sm font-medium text-slate-600 dark:bg-slate-900 dark:text-slate-200"
                        >
                            <span>{{ item.plan.code }}</span>
                        </div>
                        <div class="ms-3 inline-block text-xs text-slate-400">
                            {{ item.plan.name }}
                            <span class="hidden md:inline"
                                >- {{ item.plan.details }}</span
                            >
                        </div>
                    </div>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <div class="flex items-center">
                        <Avatar
                            v-if="item.user.image"
                            size="rg"
                            rounded
                            :img="item.user.image"
                        />
                        <Avatar
                            v-else
                            size="rg"
                            :variant="item.user.theme"
                            rounded
                            :text="toInitials(item.user.name)"
                        />
                        <div
                            class="ms-3 flex items-center text-xs font-bold text-slate-600"
                        >
                            {{ item.user.name }}
                        </div>
                    </div>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                >
                    <span class="text-xs">{{ item.date }}</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span
                        class="text-xs font-medium text-slate-700 dark:text-white"
                        >1.094780
                        <span class="font-normal text-slate-500"
                            >BTC</span
                        ></span
                    >
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-4 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <Progress v-if="item.progress !== 100"
                        ><ProgressBar :progress="item.progress"
                    /></Progress>
                    <span v-else class="text-xs text-green-600">Completed</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-4 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <ActionDropdown />
                </div>
            </div>
        </div>
    </Card>
</template>
