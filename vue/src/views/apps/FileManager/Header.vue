<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Icon, Dropdown, Button } from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
const showUploadModal = defineModel('showUploadModal');
</script>
<template>
    <div
        class="hidden flex-wrap items-center justify-between rounded-tr-md border-b border-gray-300 bg-white px-5 py-3 lg:flex dark:border-gray-900 dark:bg-gray-950"
    >
        <div class="flex flex-grow items-center">
            <Icon class="text-base/none text-slate-600" name="search"></Icon>
            <input
                type="text"
                class="box-border block h-9 w-full rounded border-0 bg-white px-2 py-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                placeholder="Search files, folders"
            />
        </div>
        <ul class="flex items-center gap-4">
            <li>
                <Dropdown
                    class="w-full"
                    buttonClass="w-full"
                    placement="bottom-end"
                    rtlPlacement="bottom-start"
                    :offset="[0, 4]"
                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[160px]"
                >
                    <template #button>
                        <Button size="rg" variant="light">
                            <Icon class="text-xl/4.5" name="plus" /><span
                                class="ms-3"
                                >Create</span
                            >
                        </Button>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem as="template">
                                    <button
                                        @click="() => (showUploadModal = true)"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <em
                                            class="ni ni-upload-cloud w-7 text-start text-lg/none opacity-80"
                                        ></em
                                        ><span>Upload File</span>
                                    </button>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <em
                                        class="ni ni-file-plus w-7 text-start text-lg/none opacity-80"
                                    ></em
                                    ><span>Create File</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <em
                                        class="ni ni-folder-plus w-7 text-start text-lg/none opacity-80"
                                    ></em
                                    ><span>Create Folder</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </li>
            <li>
                <Button
                    @click="() => (showUploadModal = true)"
                    size="rg"
                    variant="primary"
                    ><Icon class="text-xl/4.5" name="upload-cloud"></Icon>
                    <span class="ms-3">Upload</span></Button
                >
            </li>
        </ul>
    </div>
</template>
