<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';

const props = defineProps({
    data:Object
})

</script>
<template>
    <div class="px-5 sm:px-9 py-6 lg:hidden border-b border-gray-200 dark:border-gray-800">
        <h4 class="font-heading font-bold tracking-tight text-slate-700 dark:text-white text-xl/tighter mb-2 sm:mb-4 line-clamp-1">{{data.title}}</h4>
        <ul class="flex flex-wrap gap-6">
            <li>
                <span class="inline-flex items-center text-slate-400 gap-2">
                    <Icon class="text-sm/none text-primary-600" name="flag-fill" /> 
                    <span>Technical Problem</span>
                </span>
            </li>
        </ul>
    </div>
    <div class="py-5 px-5 sm:px-9 lg:py-8">
        <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
            <div class="flex items-center">
                <Avatar v-if="data.image" size="sm" rounded :img="data.image"/>
                <Avatar v-else size="sm" :variant="data.theme" rounded :text="toInitials(data.name)"/>
                <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">{{data.name}}</div>
            </div>
            <div class="text-xs text-slate-400">{{data.date}}</div>
        </div>
        <div class="ms-12">
            <div class="entry">
                <p v-for="(item,index) in data.message" key="index">{{item}}</p>
            </div>
            <div class="rounded border border-gray-200 dark:border-gray-800 mt-7">
                <ul class="flex flex-wrap px-5 py-4 gap-x-8 gap-y-2">
                    <li class="w-[180px]">
                        <a class="flex items-center w-full text-slate-600 dark:text-slate-300" href="#link" @click="(e)=> e.preventDefault()"><em class="text-2xl/none text-primary-600 me-4 ni ni-img"></em><span class="line-clamp-1">error-show-On-order.jpg</span></a>
                    </li>
                    <li class="w-[180px]">
                        <a class="flex items-center w-full text-slate-600 dark:text-slate-300" href="#link" @click="(e)=> e.preventDefault()"><em class="text-2xl/none text-primary-600 me-4 ni ni-img"></em><span class="line-clamp-1">full-page-error.jpg</span></a>
                    </li>
                </ul>
                <div class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 px-5 py-3 flex flex-wrap justify-between rounded-b">
                    <span class="font-medium text-slate-700 dark:text-white text-sm">2 files attached</span>
                    <a class="inline-flex items-center text-sm/none font-medium whitespace-nowrap gap-3.5 group/link" href="#link" @click="(e)=> e.preventDefault()">
                        <em class="text-lg/none text-primary-500 group-hover/link:text-primary-600 transition-all duration-300 ni ni-download"></em>
                        <span class="text-slate-400 group-hover/link:text-primary-600 transition-all duration-300">Download All</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <template v-for="(item,index) in data.reply" :key="index">
        <div v-if="item.note" class="py-5 px-5 sm:px-9 lg:py-8">
            <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                <div class="flex items-center">
                    <Avatar v-if="item.image" size="sm" rounded :img="item.image"/>
                    <Avatar v-else size="sm" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                    <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">{{item.name}} <span class="text-slate-400 font-normal">added a note</span></div>
                </div>
                <div class="text-xs text-slate-400">{{item.date}}</div>
            </div>
            <div class="ms-12">
                <div class="entry rounded bg-gray-100 dark:bg-gray-900 bg-opacity-70 px-5 py-3">
                    <p v-for="(item,index) in item.message" key="index">{{item}}</p>
                </div>
            </div>
        </div>
        <div v-else-if="item.assigned" class="text-center overflow-hidden mx-5 sm:mx-9 lg:mx-10 px-8">
            <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute after:absolute before:h-px after:h-px before:bg-gray-200 before:dark:bg-gray-900 after:bg-gray-200 after:dark:bg-gray-900 before:w-screen after:w-screen before:top-1/2 after:top-1/2 before:end-full after:start-full"><span class="text-slate-600 dark:text-slate-400">{{item.assigned.by}}</span> assigned user: <span class="text-primary-600">{{item.assigned.name}}</span> at {{item.assigned.date}} at {{item.assigned.time}}</div>
        </div>
        <div v-else-if="item.sap" class="text-center overflow-hidden mx-5 sm:mx-9 lg:mx-10 px-8">
            <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute after:absolute before:h-px after:h-px before:bg-gray-200 before:dark:bg-gray-900 after:bg-gray-200 after:dark:bg-gray-900 before:w-screen after:w-screen before:top-1/2 after:top-1/2 before:end-full after:start-full"><strong class="text-gray-600 dark:text-gray-400">{{item.sap.date}}</strong></div>
        </div>
        
        <div v-else class="py-5 px-5 sm:px-9 lg:py-8">
            <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                <div class="flex items-center">
                    <Avatar v-if="item.image" size="sm" rounded :img="item.image"/>
                    <Avatar v-else size="sm" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                    <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">
                        {{item.name}} 
                        <span v-if="item.you" class="text-slate-400 font-normal">(You)</span>
                    </div>
                </div>
                <div class="text-xs text-slate-400">{{item.date}}</div>
            </div>
            <div class="ms-12">
                <div class="entry">
                    <p v-for="(item,index) in item.message" key="index">{{item}}</p>
                </div>
                <div class="inline-block text-xs rounded bg-gray-100 dark:bg-gray-900 bg-opacity-70 px-3 py-1.5 mt-5">
                    Replied by <span>{{item.name}}</span> at {{item.time}}
                </div>
            </div>
        </div>
    </template>
</template>
