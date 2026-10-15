<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';

const props = defineProps({
    data: Object,
});

const show = defineModel('show');
</script>
<template>
    <SimpleBar
        :class="{
            'conversation-profile peer !absolute end-0 top-0 z-[100] h-full max-h-full w-[280px] translate-x-full border-s border-gray-200 bg-white transition-transform duration-300 ease-in-out rtl:-translate-x-full dark:border-gray-800 dark:bg-gray-950 [&.visible]:translate-x-0': true,
            visible: show,
        }"
    >
        <div
            class="relative flex flex-col items-center border-b border-gray-300 p-5 text-center sm:p-6 dark:border-gray-900"
        >
            <div class="absolute end-4 top-4">
                <Dropdown
                    class="ms-auto -me-2"
                    placement="bottom-end"
                    rtlPlacement="bottom-start"
                    :offset="[-14, -8]"
                    :rtlOffset="[14, -8]"
                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                >
                    <template #button>
                        <ButtonZoom size="sm">
                            <Icon class="text-lg" name="more-h" />
                        </ButtonZoom>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Profile</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="na"
                                    />
                                    <span>Ban From System</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="repeat"
                                    />
                                    <span>View Orders</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </div>

            <Avatar v-if="data.image" size="xl" rounded :img="data.image" />
            <Avatar
                v-else
                size="xl"
                :variant="data.theme"
                rounded
                :text="toInitials(data.name)"
            />
            <div class="mt-4">
                <h6
                    class="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white"
                >
                    {{ data.name }}
                </h6>
                <span class="text-sm text-slate-400">info@softnio.com</span>
            </div>
            <div class="mt-5 grid w-full grid-flow-dense grid-cols-12">
                <div class="col-span-4">
                    <div class="text-center">
                        <span
                            class="block text-lg font-bold text-slate-600 dark:text-white"
                            >23</span
                        >
                        <span class="block text-xs leading-5 text-slate-400"
                            >Total Order</span
                        >
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="text-center">
                        <span
                            class="block text-lg font-bold text-slate-600 dark:text-white"
                            >20</span
                        >
                        <span class="block text-xs leading-5 text-slate-400"
                            >Complete</span
                        >
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="text-center">
                        <span
                            class="block text-lg font-bold text-slate-600 dark:text-white"
                            >3</span
                        >
                        <span class="block text-xs leading-5 text-slate-400"
                            >Progress</span
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 sm:p-6">
            <h6
                class="text-xxs tracking-relaxed mt-6 mb-3 leading-tight font-bold whitespace-nowrap text-slate-400 uppercase first:mt-0"
            >
                Additional
            </h6>
            <ul class="user-contacts">
                <li
                    class="flex py-1 text-sm/6 text-slate-600 dark:text-slate-300"
                >
                    <Icon
                        class="inline-block w-7 text-base/6 text-slate-400"
                        name="mail"
                    />
                    <span>info@softnio.com</span>
                </li>
                <li
                    class="flex py-1 text-sm/6 text-slate-600 dark:text-slate-300"
                >
                    <Icon
                        class="inline-block w-7 text-base/6 text-slate-400"
                        name="call"
                    />
                    <span>+938392939</span>
                </li>
                <li
                    class="flex py-1 text-sm/6 text-slate-600 dark:text-slate-300"
                >
                    <Icon
                        class="inline-block w-7 text-base/6 text-slate-400"
                        name="map-pin"
                    />
                    <span
                        >1134 Ridder Park Road <br />San Fransisco, CA
                        94851</span
                    >
                </li>
            </ul>
            <h6
                class="text-xxs tracking-relaxed mt-6 mb-3 leading-tight font-bold whitespace-nowrap text-slate-400 uppercase first:mt-0"
            >
                Additional
            </h6>
            <div class="grid grid-flow-dense grid-cols-12 gap-4">
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">Ref ID:</span>
                    <span
                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                        >TID-049583</span
                    >
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">Requested:</span>
                    <span
                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                        >Abu Bin Ishtiak</span
                    >
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">Status:</span>
                    <span class="mt-1 block text-sm font-bold text-green-600"
                        >Open</span
                    >
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400"
                        >Last Reply:</span
                    >
                    <span
                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                        >Abu Bin Ishtiak</span
                    >
                </div>
            </div>
            <h6
                class="text-xxs tracking-relaxed mt-6 mb-3 leading-tight font-bold whitespace-nowrap text-slate-400 uppercase first:mt-0"
            >
                Assigned Account
            </h6>
            <ul class="flex flex-wrap gap-3">
                <li>
                    <Avatar size="rg" variant="purple" text="IH" rounded />
                </li>
                <li>
                    <Avatar size="rg" variant="pink" text="ST" rounded />
                </li>
                <li>
                    <Avatar size="rg" variant="slate" text="SI" rounded />
                </li>
            </ul>
        </div>
    </SimpleBar>
    <div
        @click="
            () => {
                show = false;
            }
        "
        class="profile-toggle bg-opacity-20 dark:bg-opacity-50 invisible absolute inset-0 z-[99] bg-slate-950 opacity-0 peer-[.visible]:visible peer-[.visible]:opacity-100 2xl:!invisible 2xl:!opacity-0"
    ></div>
</template>
