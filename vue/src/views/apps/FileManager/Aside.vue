<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Icon, Progress, ProgressBar, Dropdown } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
const show = defineModel('show')

const menuData = [
    {
        icon:"home-alt",
        text: "Home",
        active: true,
    },
    {
        icon:"file-docs",
        text: "Files",
        sub: [
            {text: "New Files"},
            {text: "This Months"},
            {text: "Older Files"},
        ]
    },
    {
        icon:"star",
        text: "Starred",
    },
    {
        icon:"share-alt",
        text: "Shared",
    },
    {
        icon:"trash-alt",
        text: "Recovery",
    },
    {
        icon:"setting-alt",
        text: "Settings",
    },
]
</script>
<template>
<div id="pageAside" :class="{'peer max-w-[calc(100%-2.5rem)] w-[220px] max-lg:min-h-screen lg:rounded-s-md bg-white dark:bg-gray-950 border-e border-gray-300 dark:border-gray-900 flex-shrink-0 fixed lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none' : true, 'active' : show}">
    <SimpleBar class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]">
        <ul class="p-4">
            <li v-for="(item,index) in menuData" :key="index" :class="{'group/fmgmenu py-0.5': true, 'active' : item.active}">
                <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#link" @click="(e)=> e.preventDefault()">
                    <Icon class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600" :name="item.icon" />
                    <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">{{item.text}}</span>
                </a>
                <ul v-if="item.sub" class="ps-12 mb-2 -mt-0.5">
                    <li v-for="(sItem,sIndex) in item.sub" :key="sIndex" class="py-0.5">
                        <a href="#link" @click="(e)=> e.preventDefault()" class="relative flex items-center py-0.5 rounded text-slate-600 hover:text-primary-600"><span class="text-xs/5 font-medium">{{sItem.text}}</span></a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="mt-24">
            <div class="p-7">
                <h6 class="font-heading text-sm/tighter font-bold -tracking-snug text-slate-600 mb-4 flex items-center">
                    <Icon class="text-xl/none me-4" name="hard-drive" /><span>Storage</span>
                </h6>
                <Progress>
                    <ProgressBar variant="primary" :progress="5" />
                </Progress>
                <div class="text-xs font-medium text-slate-400 mt-4">12.47 GB of 50 GB used</div>
                <div class="mt-1">
                    <a href="#link" @click="(e)=> e.preventDefault()" class="text-xs/none font-medium whitespace-nowrap text-primary-600 hover:text-primary-700 transition-all duration-300">Upgrade Storage</a>
                </div>
            </div>
            <div class="border-t border-gray-300 dark:border-gray-900 p-2">
                <Dropdown class="w-full" buttonClass="w-full" placement="top-end" rtlPlacement="top-start" :offset="[0, -4]"  contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[160px]">
                    <template #button>
                        <button class="flex items-center justify-between py-3 px-5 w-full">
                            <div class="text-start">
                                <div class="text-sm/5 font-bold text-slate-700 dark:text-white mb-1">Personal</div>
                                <div class="text-xs/4 text-slate-400">Only you</div>
                            </div>
                            <em class="text-base/none -me-1 text-slate-600 ni ni-unfold-more"></em>
                        </button>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <span>Team Plan</span>
                                    <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <span>Personal</span>
                                    <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <span>Upgrade Plan</span>
                                    <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </div>
        </div>
    </SimpleBar>
</div>
<div @click="()=> show = false" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
</template>
