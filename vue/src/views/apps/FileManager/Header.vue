<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Icon, Dropdown,Button } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
const showUploadModal = defineModel('showUploadModal')

</script>
<template>
    <div class="hidden lg:flex items-center justify-between flex-wrap py-3 px-5 border-b border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-tr-md">
        <div class="flex items-center flex-grow">
            <Icon class="text-base/none text-slate-600" name="search"></Icon>
            <input type="text" class="block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search files, folders" />
        </div>
        <ul class="flex items-center gap-4">
            <li>
                <Dropdown class="w-full" buttonClass="w-full" placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]"  contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[160px]">
                    <template #button>
                        <Button size="rg" variant='light'>
                            <Icon class="text-xl/4.5" name="plus" /><span class="ms-3">Create</span>
                        </Button>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem as="template">
                                    <button @click="() => showUploadModal = true" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" >
                                        <em class="text-lg/none text-start w-7 opacity-80 ni ni-upload-cloud"></em><span>Upload File</span>
                                    </button>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <em class="text-lg/none text-start w-7 opacity-80 ni ni-file-plus"></em><span>Create File</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <em class="text-lg/none text-start w-7 opacity-80 ni ni-folder-plus"></em><span>Create Folder</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </li>
            <li>
                <Button @click="() => showUploadModal = true" size="rg" variant="primary"><Icon class="text-xl/4.5" name="upload-cloud"></Icon> <span class="ms-3">Upload</span></Button>
            </li>
        </ul>
    </div>
</template>
