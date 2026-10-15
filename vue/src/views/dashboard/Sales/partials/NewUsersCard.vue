<script setup>
import { Card, CardBody, Avatar, Button } from '@/components';
import { toInitials } from '@/utilities';
import ActionDropdown from './NewUsersDropdown.vue';

const data = [
    {
        name: 'Abu Bin Ishtiyak',
        email: 'info@softnio.com',
        theme: 'primary-pale',
    },
    {
        name: 'Sharon Walker',
        email: 'sharon-90@example.com',
        theme: 'pink-pale',
    },
    {
        name: 'Gloria Oliver',
        email: 'gloria_72@example.com',
        theme: 'yellow-pale',
    },
    {
        name: 'Phillip Sullivan',
        email: 'phillip-85@example.com',
        theme: 'green-pale',
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
                    New Users
                </h6>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="font-body text-primary-500 hover:text-primary-600 inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                    >View All</a
                >
            </div>
        </CardBody>
        <ul>
            <li
                v-for="(item, index) in data"
                :key="index"
                class="flex items-center border-b border-gray-300 p-5 last:border-b-0 sm:px-6 sm:py-4 dark:border-gray-900"
            >
                <Avatar v-if="item.image" size="rg" rounded :img="item.image" />
                <Avatar
                    size="rg"
                    :variant="item.theme"
                    rounded
                    :text="toInitials(item.name)"
                />
                <div class="ms-4">
                    <span
                        class="block text-sm leading-6 font-bold text-slate-700 dark:text-white"
                        >{{ item.name }}</span
                    >
                    <span class="block text-xs leading-4 text-slate-400">{{
                        item.email
                    }}</span>
                </div>
                <ActionDropdown class="ms-auto" />
            </li>
        </ul>
    </Card>
</template>
