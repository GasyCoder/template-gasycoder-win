<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown, CheckBox, Badge, ButtonGroup, AvatarGroup, AccordionItem, Accordion, Switch } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
const show = defineModel('show')
const props = defineProps({
    data: Object
})
</script>
<template>
    <SimpleBar :class="{'conversation-profile peer !absolute top-0 end-0 translate-x-full rtl:-translate-x-full max-w-[calc(100%-2.5rem)] w-[325px] 2xl:w-[365px] h-full max-h-full bg-white dark:bg-gray-950 z-[100] transition-transform duration-300 ease-in-out 2xl:border-s border-gray-200 dark:border-gray-800 [&.visible]:translate-x-0': true, 'visible' : show}">
        <div class="relative flex flex-col items-center text-center p-5 sm:px-6 sm:py-8 border-b border-gray-200 dark:border-gray-800">
            <div class="absolute top-4 end-4">
                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                    <template #button>
                        <ButtonZoom size="md">
                            <Icon class="text-lg text-slate-600 dark:text-slate-300" name="more-h" />
                        </ButtonZoom>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                    <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                    <span>View Profile</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                    <Icon class="text-start text-lg leading-none w-7 opacity-80" name="na" />
                                    <span>Block Messsages</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </div>
            <template v-if="data.user?.length > 1">
                <AvatarGroup variant="s2" size="xl">
                    <template v-for="(uItem,uIndex) in data.user.slice(0,2)" :key="uIndex">
                        <Avatar v-if="uItem.image" rounded :img="uItem.image"/>
                        <Avatar v-else :variant="uItem.theme" rounded :text="toInitials(uItem.name)"/>
                    </template>
                </AvatarGroup> 
            </template>
            <template v-else>
                <Avatar v-if="data.image" size="xl" rounded :img="data.image"/>
                <Avatar v-else size="xl" :variant="data.theme" rounded :text="toInitials(data.name)"/>
            </template>
            <div class="mt-4">
                <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{data.name}}</h6>
                <span class="text-sm text-slate-400">Active 35m ago</span>
            </div>
        </div>
        
        <Accordion close="manual">
            <AccordionItem iconClass="text-sm/5 text-primary-500 font-normal" contentClass="pt-0 pb-6 lg:px-7" buttonClass="py-5 lg:px-7 group-[.active]:border-b-0" active>
                <template #button>
                    <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Options</h6>
                </template>
                <template #content>
                    <ul class="-m-1">
                        <li class="p-1">
                            <a class="flex items-center group/chatoption" href="#link" @click="(e)=> e.preventDefault()">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                    <Icon class="text-base/none" name="edit-alt"></Icon>
                                </div>
                                <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Nickname</div>
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="flex items-center group/chatoption chat-search-toggle" href="#link" @click="(e)=> e.preventDefault()">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                    <Icon class="text-base/none" name="search"></Icon>
                                </div>
                                <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Search In Conversation</div>
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="flex items-center group/chatoption" href="#link" @click="(e)=> e.preventDefault()">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                    <Icon class="text-base/none" name="circle-fill"></Icon>
                                </div>
                                <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Change Theme</div>
                            </a>
                        </li>
                    </ul>
                </template>
            </AccordionItem>
            <AccordionItem iconClass="text-sm/5 text-primary-500 font-normal" contentClass="pt-0 pb-6 lg:px-7" buttonClass="py-5 lg:px-7 group-[.active]:border-b-0">
                <template #button>
                    <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Settings</h6>
                </template>
                <template #content>
                    <ul class="-m-2">
                        <li class="p-2 inline-flex">
                            <Switch type="checkbox" size="sm" id="notifications" labelClass="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 !text-sm/4 font-bold ps-3 cursor-pointer inline-block">Notifications</Switch>
                        </li>
                        <li class="p-2">
                            <a class="flex items-center group/chatoption" href="#link" @click="(e)=> e.preventDefault()">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                    <Icon class="text-base/none" name="bell-off-fill"></Icon>
                                </div>
                                <div class="ms-3">
                                    <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-200 mb-0.5">Ignore Messages</div>
                                    <div class="text-xs text-slate-400">You won’t be notified when message you.</div>
                                </div>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="flex items-center group/chatoption" href="#link" @click="(e)=> e.preventDefault()">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                    <Icon class="text-base/none" name="alert-fill"></Icon>
                                </div>
                                <div class="ms-3">
                                    <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-200 mb-0.5">Something Wrong</div>
                                    <div class="text-xs text-slate-400">Give feedback and report conversion.</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </template>
            </AccordionItem>
            <AccordionItem iconClass="text-sm/5 text-primary-500 font-normal" contentClass="pt-0 pb-6 lg:px-7" buttonClass="py-5 lg:px-7 group-[.active]:border-b-0">
                <template #button>
                    <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Shared Photos</h6>
                </template>
                <template #content>
                    <ul class="flex flex-wrap -m-1">
                        <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#link" @click="(e)=> e.preventDefault()">
                            <img class="rounded" src="/images/slides/slide-a.jpg" alt="" />
                        </a></li>
                        <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#link" @click="(e)=> e.preventDefault()">
                            <img class="rounded" src="/images/slides/slide-b.jpg" alt="" />
                        </a></li>
                        <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#link" @click="(e)=> e.preventDefault()">
                            <img class="rounded" src="/images/slides/slide-c.jpg" alt="" />
                        </a></li>
                    </ul>
                </template>
            </AccordionItem>
        </Accordion>
    </SimpleBar>
    <div @click="()=> {
        show = false
    }" class="profile-toggle absolute inset-0 bg-slate-950 bg-opacity-20 z-[99] opacity-0 invisible peer-[.visible]:opacity-100 peer-[.visible]:visible 2xl:!opacity-0 2xl:!invisible"></div>
</template>
