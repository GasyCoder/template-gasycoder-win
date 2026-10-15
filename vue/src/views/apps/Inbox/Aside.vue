<script setup>
import { ref, watch, onMounted } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    Avatar,
    Button,
    ButtonZoom,
    Icon,
    Dropdown,
    CheckBox,
    Progress,
    ProgressBar,
    Badge,
} from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
import ComposeModal from './ComposeModal.vue';
import { useInboxStore } from '@/stores/inbox';
const inboxs = useInboxStore();

const show = defineModel('show');
</script>
<template>
    <div
        id="ibxAside"
        :class="{
            'peer lg:h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] absolute start-0 top-0 z-[999] flex h-full max-h-full w-[260px] max-w-[calc(100%-2.5rem)] flex-shrink-0 -translate-x-full flex-col items-stretch overflow-hidden border-e border-gray-300 bg-white transition-transform duration-500 lg:static lg:transform-none lg:bg-transparent lg:transition-none xl:w-[300px] rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none': true,
            active: show,
        }"
    >
        <div
            class="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800"
        >
            <h5
                class="font-heading leading-tighter -tracking-snug text-xl font-bold text-slate-700 dark:text-white"
            >
                NioMail
            </h5>
            <ComposeModal />
        </div>
        <SimpleBar
            class="h-full max-w-full flex-grow overflow-auto [&_.simplebar-content]:box-border [&_.simplebar-content]:flex [&_.simplebar-content]:h-full [&_.simplebar-content]:flex-col"
        >
            <ul class="px-3 pt-3 lg:px-4 lg:pt-4">
                <li
                    v-for="(item, index) in inboxs.nav"
                    :key="index"
                    :class="{
                        'group [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:dark:bg-gray-1000 my-0.5 rounded hover:bg-gray-50': true,
                        active: item.active,
                    }"
                >
                    <a
                        class="relative flex items-center px-3 py-2"
                        href="#link"
                        @click="
                            (e) => {
                                e.preventDefault();
                            }
                        "
                    >
                        <Icon
                            class="group-[.active]:text-primary-600 w-8 text-xl leading-6 text-slate-400"
                            :name="item.icon"
                        ></Icon>
                        <span
                            class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 ms-1 text-sm leading-6 font-medium text-slate-600 dark:text-slate-300"
                            >{{ item.name }}</span
                        >
                        <Badge
                            v-if="item.badge"
                            pill
                            size="sm"
                            :variant="item.badge.theme"
                            class="ms-auto min-w-[2.25rem] justify-center"
                            >{{ item.badge.text }}</Badge
                        >
                    </a>
                </li>
            </ul>
            <div
                class="flex items-center justify-between px-6 pt-8 pb-3 lg:px-7"
            >
                <h6
                    class="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white"
                >
                    Label
                </h6>
                <a
                    class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white"
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    ><em class="ni ni-plus-c text-lg/none"></em
                ></a>
            </div>
            <ul class="px-3 lg:px-4">
                <li
                    v-for="(item, index) in inboxs.labels"
                    :key="index"
                    class="group hover:dark:bg-gray-1000 relative my-0.5 flex items-center rounded transition-all duration-300 hover:bg-gray-50"
                >
                    <a
                        class="flex flex-grow px-3 py-2"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                    >
                        <span
                            :class="{
                                'h-4 w-4 rounded-full border-3 bg-white dark:bg-gray-950': true,
                                'border-primary-600': item.color === 'primary',
                                'border-red-600': item.color === 'red',
                                'border-green-600': item.color === 'green',
                            }"
                        ></span>
                        <span
                            class="ms-4 text-sm/none font-medium text-slate-600 dark:text-white"
                            >{{ item.text }}</span
                        >
                    </a>
                    <Dropdown
                        class="opacity-0 group-hover:opacity-100"
                        placement="bottom-end"
                        rtlPlacement="bottom-start"
                        :offset="[-8, -8]"
                        :rtlOffset="[8, -8]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]"
                    >
                        <template #button>
                            <button
                                class="relative inline-flex h-9 w-9 items-center justify-center text-center align-middle text-sm leading-4.5 font-bold text-slate-600"
                            >
                                <Icon class="text-sm/4.5" name="more-h" />
                            </button>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>Edit Label</span></MenuItem
                                    >
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>Remove Label</span></MenuItem
                                    >
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>Label Color</span></MenuItem
                                    >
                                </li>
                                <li
                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                ></li>
                                <li class="group">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                    >
                                        <span>Show if unread</span>
                                        <Icon
                                            class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                            name="check-thick"
                                        />
                                    </MenuItem>
                                </li>
                                <li class="group active">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                    >
                                        <span>Show</span>
                                        <Icon
                                            class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                            name="check-thick"
                                        />
                                    </MenuItem>
                                </li>
                                <li class="group">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                    >
                                        <span>Hide</span>
                                        <Icon
                                            class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                            name="check-thick"
                                        />
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </li>
            </ul>
            <div
                class="flex items-center justify-between px-6 pt-8 pb-3 lg:px-7"
            >
                <h6
                    class="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white"
                >
                    Contact
                </h6>
                <a
                    class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white"
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    ><em class="ni ni-plus-c text-lg/none"></em
                ></a>
            </div>
            <ul class="px-3 pb-3 lg:px-4 lg:pb-4">
                <li
                    v-for="(item, index) in inboxs.contacts"
                    :key="index"
                    class="group hover:dark:bg-gray-1000 relative my-0.5 flex items-center rounded transition-all duration-300 hover:bg-gray-50"
                >
                    <div class="flex flex-grow px-3 py-2">
                        <div class="flex items-center">
                            <Avatar
                                v-if="item.image"
                                size="rg"
                                rounded
                                :img="item.image"
                            />
                            <Avatar
                                v-else
                                size="rg"
                                :variant="item.theme"
                                rounded
                                :text="toInitials(item.name)"
                            />
                            <div class="ms-4">
                                <span
                                    class="block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                    >{{ item.name }}</span
                                >
                                <span
                                    class="block text-xs leading-4 text-slate-400"
                                    >{{ item.designation }}</span
                                >
                            </div>
                        </div>
                    </div>
                    <Dropdown
                        class="opacity-0 group-hover:opacity-100"
                        placement="bottom-end"
                        rtlPlacement="bottom-start"
                        :offset="[-8, -8]"
                        :rtlOffset="[8, -8]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]"
                    >
                        <template #button>
                            <button
                                class="relative inline-flex h-9 w-9 items-center justify-center text-center align-middle text-sm leading-4.5 font-bold text-slate-600"
                            >
                                <Icon class="text-sm/4.5" name="more-h" />
                            </button>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>View Profile</span></MenuItem
                                    >
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>Send Email</span></MenuItem
                                    >
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                        ><span>Start Chat</span></MenuItem
                                    >
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </li>
            </ul>

            <div class="mt-auto bg-gray-50 p-6 dark:bg-gray-900">
                <div class="mb-2">
                    <em class="ni ni-hard-drive text-xl/none"></em>
                    <span
                        class="ms-1 text-sm text-slate-600 dark:text-slate-300"
                        ><strong>6 GB</strong> (5%) of 100GB used</span
                    >
                </div>
                <Progress class="!bg-slate-100 dark:!bg-gray-700">
                    <ProgressBar :progress="5"></ProgressBar>
                </Progress>
            </div>
        </SimpleBar>
    </div>
    <div
        @click="() => (show = false)"
        class="bg-opacity-20 invisible absolute inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
    ></div>
</template>
