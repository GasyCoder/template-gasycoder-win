<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities';
</script>
<template>
    <div
        class="border-t border-gray-200 sm:mx-9 sm:mt-2 sm:mb-9 sm:rounded sm:border lg:mx-10 lg:mb-10 dark:border-gray-800"
    >
        <TabGroup>
            <div
                class="flex items-center justify-between border-b border-gray-200 px-5 sm:px-6 dark:border-gray-800"
            >
                <TabList
                    as="ul"
                    class="tab-nav font-heading flex flex-wrap text-sm"
                >
                    <li class="tab-item pe-5 last:pe-0">
                        <Tab
                            class="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 outline-none after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400"
                            >Reply</Tab
                        >
                    </li>
                    <li class="tab-item pe-5 last:pe-0">
                        <Tab
                            class="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 outline-none after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400"
                            >Private Note</Tab
                        >
                    </li>
                </TabList>
                <div class="flex items-center">
                    <div class="me-3 text-slate-400">Reply as:</div>
                    <Avatar variant="purple" size="xs" rounded text="IH" />
                </div>
            </div>
            <TabPanels class="tab-content">
                <TabPanel class="tab-panel" id="tabItem1">
                    <div class="nk-reply-form-editor">
                        <div
                            class="border-b border-gray-200 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-800"
                        >
                            <textarea
                                class="block min-h-[78px] w-full resize-none rounded border-0 bg-white px-0 pt-3 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                placeholder="Hello"
                            ></textarea>
                        </div>
                        <div class="flex justify-between p-5 sm:px-6 sm:py-4">
                            <ul class="inline-flex items-center gap-1.5">
                                <li class="me-2">
                                    <Button
                                        size="rg"
                                        variant="primary"
                                        type="submit"
                                        >Reply</Button
                                    >
                                </li>
                                <li>
                                    <Dropdown
                                        placement="top-start"
                                        rtlPlacement="top-end"
                                        :offset="[0, 4]"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <button
                                                v-nk-tooltip="{
                                                    placement: 'top',
                                                    content: 'Template',
                                                }"
                                                class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                            >
                                                <Icon
                                                    class="text-base/none"
                                                    name="hash"
                                                />
                                            </button>
                                        </template>
                                        <template #content>
                                            <ul class="py-2">
                                                <li>
                                                    <h6
                                                        class="relative flex items-center px-5 py-2.5 text-xs leading-5 text-slate-400"
                                                    >
                                                        Quick Insert
                                                    </h6>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                                    >
                                                        <span
                                                            >Thank you
                                                            message</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                                    >
                                                        <span
                                                            >Your issues
                                                            solved</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                                    >
                                                        <span
                                                            >Thank you
                                                            message</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                ></li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none"
                                                            name="file-plus"
                                                        />
                                                        <span
                                                            >Save as
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none"
                                                            name="notes-alt"
                                                        />
                                                        <span
                                                            >Manage
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </li>
                                <li>
                                    <a
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Upload Attachment',
                                        }"
                                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-base/none"
                                            name="clip-v"
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Insert Emoji',
                                        }"
                                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-base/none"
                                            name="happy"
                                        />
                                    </a>
                                </li>
                                <li>
                                    <a
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Upload Images',
                                        }"
                                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-base/none"
                                            name="img"
                                        />
                                    </a>
                                </li>
                            </ul>
                            <Dropdown
                                class="ms-auto -me-2"
                                placement="top-end"
                                rtlPlacement="top-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom size="sm">
                                        <Icon class="text-xl" name="more-v" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Option</span>
                                            </MenuItem>
                                        </li>
                                        <li class="active">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Option</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </TabPanel>
                <TabPanel class="tab-panel" id="tabItem2">
                    <div class="nk-reply-form-editor">
                        <div
                            class="border-b border-gray-200 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-800"
                        >
                            <textarea
                                class="block min-h-[78px] w-full resize-none rounded border-0 bg-white px-0 pt-3 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                placeholder="Type your private note, that only visible to internal team."
                            ></textarea>
                        </div>
                        <div class="flex justify-between p-5 sm:px-6 sm:py-4">
                            <ul class="inline-flex items-center gap-1.5">
                                <li class="me-2">
                                    <Button
                                        size="rg"
                                        variant="primary"
                                        type="submit"
                                        >Add Note</Button
                                    >
                                </li>
                                <li>
                                    <a
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Upload Attachment',
                                        }"
                                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-base/none"
                                            name="clip-v"
                                        />
                                    </a>
                                </li>
                            </ul>
                            <Dropdown
                                class="ms-auto -me-2"
                                placement="top-end"
                                rtlPlacement="top-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom size="sm">
                                        <Icon class="text-xl" name="more-v" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Option</span>
                                            </MenuItem>
                                        </li>
                                        <li class="active">
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Option</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>
