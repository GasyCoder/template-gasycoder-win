<script setup>
import { Card, CardBody, Icon } from '@/components';
const data = [
    {
        title: 'Orders',
        amount: '1,795',
        icon: 'bag',
        variant: 'primary',
    },
    {
        title: 'Customers',
        amount: '2,327',
        icon: 'users',
        variant: 'cyan',
    },
    {
        title: 'Products',
        amount: '674',
        icon: 'box',
        variant: 'pink',
    },
    {
        title: 'Categories',
        amount: '68',
        icon: 'server',
        variant: 'purple',
    },
];
</script>
<template>
    <Card>
        <CardBody>
            <h6
                class="font-heading -tracking-snug leading-tighter mb-3 text-base font-bold text-slate-700 dark:text-white"
            >
                Store Statistics
            </h6>
            <ul class="flex flex-col gap-y-4 py-2">
                <li
                    v-for="(item, index) in data"
                    class="flex items-center justify-between"
                >
                    <div>
                        <div class="mb-1 text-sm text-slate-400">
                            {{ item.title }}
                        </div>
                        <div
                            class="text-xl font-bold text-slate-700 dark:text-white"
                        >
                            {{ item.amount }}
                        </div>
                    </div>
                    <Icon
                        :class="{
                            'flex h-11 w-11 items-center justify-center rounded-md text-2xl/none': true,
                            'text-primary-600 bg-primary-100 dark:bg-primary-950':
                                !item.variant || item.variant === 'primary',
                            'bg-cyan-100 text-cyan-600 dark:bg-cyan-950':
                                item.variant === 'cyan',
                            'bg-pink-100 text-pink-600 dark:bg-pink-950':
                                item.variant === 'pink',
                            'bg-purple-100 text-purple-600 dark:bg-purple-950':
                                item.variant === 'purple',
                        }"
                        :name="item.icon"
                    />
                </li>
            </ul>
        </CardBody>
    </Card>
</template>
