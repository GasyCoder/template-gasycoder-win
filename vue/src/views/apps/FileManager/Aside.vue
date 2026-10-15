<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Icon, Progress, ProgressBar, Dropdown } from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
const show = defineModel('show');

const menuData = [
    {
        icon: 'home-alt',
        text: 'Home',
        active: true,
    },
    {
        icon: 'file-docs',
        text: 'Files',
        sub: [
            { text: 'New Files' },
            { text: 'This Months' },
            { text: 'Older Files' },
        ],
    },
    {
        icon: 'star',
        text: 'Starred',
    },
    {
        icon: 'share-alt',
        text: 'Shared',
    },
    {
        icon: 'trash-alt',
        text: 'Recovery',
    },
    {
        icon: 'setting-alt',
        text: 'Settings',
    },
];
</script>
<template>
    <div
        id="pageAside"
        :class="{
            'peer fixed start-0 top-0 z-[999] w-[220px] max-w-[calc(100%-2.5rem)] flex-shrink-0 -translate-x-full border-e border-gray-300 bg-white transition-transform duration-500 max-lg:min-h-screen lg:static lg:transform-none lg:rounded-s-md lg:transition-none rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none': true,
            active: show,
        }"
    >
        <SimpleBar
            class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]"
        >
            <ul class="p-4">
                <li
                    v-for="(item, index) in menuData"
                    :key="index"
                    :class="{
                        'group/fmgmenu py-0.5': true,
                        active: item.active,
                    }"
                >
                    <a
                        class="group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950 relative flex items-center rounded px-3 py-2 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-900"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                    >
                        <Icon
                            class="group-[.active]/fmgmenu:text-primary-600 -mt-0.5 w-8 text-xl/5 text-slate-400"
                            :name="item.icon"
                        />
                        <span
                            class="group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600 ms-1 text-sm/6 font-medium text-slate-600 dark:text-slate-400"
                            >{{ item.text }}</span
                        >
                    </a>
                    <ul v-if="item.sub" class="-mt-0.5 mb-2 ps-12">
                        <li
                            v-for="(sItem, sIndex) in item.sub"
                            :key="sIndex"
                            class="py-0.5"
                        >
                            <a
                                href="#link"
                                @click="(e) => e.preventDefault()"
                                class="hover:text-primary-600 relative flex items-center rounded py-0.5 text-slate-600"
                                ><span class="text-xs/5 font-medium">{{
                                    sItem.text
                                }}</span></a
                            >
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="mt-24">
                <div class="p-7">
                    <h6
                        class="font-heading text-sm/tighter -tracking-snug mb-4 flex items-center font-bold text-slate-600"
                    >
                        <Icon
                            class="me-4 text-xl/none"
                            name="hard-drive"
                        /><span>Storage</span>
                    </h6>
                    <Progress>
                        <ProgressBar variant="primary" :progress="5" />
                    </Progress>
                    <div class="mt-4 text-xs font-medium text-slate-400">
                        12.47 GB of 50 GB used
                    </div>
                    <div class="mt-1">
                        <a
                            href="#link"
                            @click="(e) => e.preventDefault()"
                            class="text-primary-600 hover:text-primary-700 text-xs/none font-medium whitespace-nowrap transition-all duration-300"
                            >Upgrade Storage</a
                        >
                    </div>
                </div>
                <div class="border-t border-gray-300 p-2 dark:border-gray-900">
                    <Dropdown
                        class="w-full"
                        buttonClass="w-full"
                        placement="top-end"
                        rtlPlacement="top-start"
                        :offset="[0, -4]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[160px]"
                    >
                        <template #button>
                            <button
                                class="flex w-full items-center justify-between px-5 py-3"
                            >
                                <div class="text-start">
                                    <div
                                        class="mb-1 text-sm/5 font-bold text-slate-700 dark:text-white"
                                    >
                                        Personal
                                    </div>
                                    <div class="text-xs/4 text-slate-400">
                                        Only you
                                    </div>
                                </div>
                                <em
                                    class="ni ni-unfold-more -me-1 text-base/none text-slate-600"
                                ></em>
                            </button>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li class="group">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Team Plan</span>
                                        <em
                                            class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        ></em>
                                    </MenuItem>
                                </li>
                                <li class="group active">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Personal</span>
                                        <em
                                            class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        ></em>
                                    </MenuItem>
                                </li>
                                <li
                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                ></li>
                                <li class="group">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Upgrade Plan</span>
                                        <em
                                            class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        ></em>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </div>
            </div>
        </SimpleBar>
    </div>
    <div
        @click="() => (show = false)"
        class="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
    ></div>
</template>
