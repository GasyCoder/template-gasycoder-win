<script setup>
import { ref, watch, onMounted } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown, CheckBox, Progress, ProgressBar, Badge } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
import ComposeModal from './ComposeModal.vue'
import { useInboxStore } from '@/stores/inbox'
const inboxs = useInboxStore();

const show = defineModel('show')
</script>
<template>
  <div id="ibxAside" :class="{'peer max-w-[calc(100%-2.5rem)] w-[260px] xl:w-[300px] h-full lg:h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-full bg-white dark:bg-gray-950 lg:bg-transparent border-e border-gray-300 dark:border-gray-900 flex-shrink-0 absolute lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none flex flex-col items-stretch overflow-hidden': true, 'active' : show}">
    <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
        <h5 class="font-heading font-bold text-xl text-slate-700 dark:text-white leading-tighter -tracking-snug">NioMail</h5>
        <ComposeModal />
    </div>
    <SimpleBar class="flex-grow h-full max-w-full overflow-auto [&_.simplebar-content]:flex  [&_.simplebar-content]:flex-col [&_.simplebar-content]:h-full  [&_.simplebar-content]:box-border" >
        <ul class="px-3 pt-3 lg:px-4 lg:pt-4">
            <li  v-for="(item,index) in inboxs.nav" :key="index" :class="{'group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000': true, 'active' : item.active}">
                <a class="relative flex items-center px-3 py-2" href="#link" @click="(e)=> {e.preventDefault()}">
                    <Icon class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600" :name="item.icon"></Icon>
                    <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">{{item.name}}</span>
                    <Badge v-if="item.badge" pill size="sm" :variant="item.badge.theme" class="justify-center min-w-[2.25rem] ms-auto">{{item.badge.text}}</Badge>
                </a>
            </li>
        </ul>
        <div class="flex items-center justify-between pt-8 px-6 pb-3 lg:px-7">
            <h6 class="text-base font-heading font-bold -tracking-snug leading-tighter text-slate-700 dark:text-white">Label</h6>
            <a class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white" href="#link" @click="(e)=> e.preventDefault()"><em class="text-lg/none ni ni-plus-c"></em></a>
        </div>
        <ul class="px-3 lg:px-4">
            <li v-for="(item,index) in inboxs.labels" :key="index" class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <a class="flex flex-grow px-3 py-2" href="#link" @click="(e)=> e.preventDefault()">
                    <span :class="{'h-4 w-4 rounded-full bg-white dark:bg-gray-950 border-3':true,
                        'border-primary-600': item.color === 'primary',
                        'border-red-600': item.color === 'red',
                        'border-green-600': item.color === 'green'}"></span>
                    <span class="text-sm/none text-slate-600 dark:text-white font-medium ms-4">{{item.text}}</span>
                </a>
                <Dropdown class="opacity-0 group-hover:opacity-100" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-8, -8]" :rtlOffset="[8, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]">
                    <template #button>
                    <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600">
                        <Icon class="text-sm/4.5" name="more-h" />
                    </button>
                    </template>
                    <template #content>
                    <ul class="py-2">
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Edit Label</span></MenuItem>
                        </li>
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Remove Label</span></MenuItem>
                        </li>
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Label Color</span></MenuItem>
                        </li>
                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2">

                        </li>
                        <li class="group">
                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                <span>Show if unread</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick" />
                            </MenuItem>
                        </li>
                        <li class="group active">
                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                <span>Show</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick" />
                            </MenuItem>
                        </li>
                        <li class="group">
                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                <span>Hide</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick" />
                            </MenuItem>
                        </li>
                    </ul>
                    </template>
                </Dropdown>
            </li>
        </ul>
        <div class="flex items-center justify-between pt-8 px-6 pb-3 lg:px-7">
            <h6 class="text-base font-heading font-bold -tracking-snug leading-tighter text-slate-700 dark:text-white">Contact</h6>
            <a class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white" href="#link" @click="(e)=> e.preventDefault()"><em class="text-lg/none ni ni-plus-c"></em></a>
        </div>
        <ul class="px-3 lg:px-4 pb-3 lg:pb-4">
            <li v-for="(item,index) in inboxs.contacts" :key="index" class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <div class="flex flex-grow px-3 py-2">
                    <div class="flex items-center">
                        <Avatar v-if="item.image" size="rg" rounded :img="item.image"/>
                        <Avatar v-else size="rg" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">{{item.name}}</span>
                            <span class="block text-xs leading-4 text-slate-400">{{item.designation}}</span>
                        </div>
                    </div>
                </div>
                <Dropdown class="opacity-0 group-hover:opacity-100" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-8, -8]" :rtlOffset="[8, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]">
                  <template #button>
                    <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600">
                        <Icon class="text-sm/4.5" name="more-h" />
                    </button>
                  </template>
                  <template #content>
                    <ul class="py-2">
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>View Profile</span></MenuItem>
                        </li>
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Send Email</span></MenuItem>
                        </li>
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Start Chat</span></MenuItem>
                        </li>
                    </ul>
                  </template>
                </Dropdown>
            </li>
        </ul>

        <div class="bg-gray-50 dark:bg-gray-900 p-6 mt-auto">
            <div class="mb-2">
                <em class="text-xl/none ni ni-hard-drive"></em>
                <span class="ms-1 text-sm text-slate-600 dark:text-slate-300"><strong>6 GB</strong> (5%) of 100GB used</span>
            </div>
            <Progress class="!bg-slate-100 dark:!bg-gray-700">
                <ProgressBar :progress="5"></ProgressBar>
            </Progress>
        </div>
    </SimpleBar>
</div>
<div @click="()=> show = false" class="absolute inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
</template>
