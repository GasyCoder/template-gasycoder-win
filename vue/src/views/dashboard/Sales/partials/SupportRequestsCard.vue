<script setup>
import { Card, CardBody, Avatar, BadgeDot } from '@/components';
import { toInitials } from '@/utilities';

const data = [
    {
        user: {
            name: 'Vincent Lopez',
            image: '/images/avatar/a-sm.jpg',
        },
        message: 'Thanks for contact us with your issues...',
        when: '6 min ago',
        status: 'pending',
    },
    {
        user: {
            name: 'Daniel Moore',
            theme: 'purple-pale',
        },
        message: 'Thanks for contact us with your issues...',
        when: '2 Hours ago',
        status: 'open',
    },
    {
        user: {
            name: 'Larry Henry',
            image: '/images/avatar/b-sm.jpg',
        },
        message: 'Thanks for contact us with your issues...',
        when: '3 Hours ago',
        status: 'solved',
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
                    Support Requests
                </h6>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                    >All Tickets</a
                >
            </div>
        </CardBody>
        <ul>
            <li
                v-for="(item, index) in data"
                :key="index"
                class="flex border-b border-gray-300 p-5 last:border-b-0 sm:px-6 dark:border-gray-900"
            >
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
                <div class="ms-4 flex-grow">
                    <div
                        class="flex items-center justify-between text-sm font-bold text-slate-700 dark:text-white"
                    >
                        <span>{{ item.user.name }}</span>
                        <BadgeDot
                            class="capitalize"
                            :variant="
                                item.status === 'solved'
                                    ? 'green'
                                    : item.status === 'pending'
                                      ? 'yellow'
                                      : item.status === 'open'
                                        ? 'cyan'
                                        : 'light'
                            "
                            >{{ item.status }}</BadgeDot
                        >
                    </div>
                    <p class="mt-1">{{ item.message }}</p>
                    <span class="block text-xs leading-5 text-slate-400">{{
                        item.when
                    }}</span>
                </div>
            </li>
        </ul>
    </Card>
</template>
