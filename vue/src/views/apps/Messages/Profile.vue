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

const show = defineModel('show')
</script>
<template>
  <SimpleBar :class="{'conversation-profile peer !absolute top-0 end-0 translate-x-full rtl:-translate-x-full w-[280px] h-full max-h-full bg-white dark:bg-gray-950 z-[100] transition-transform duration-300 ease-in-out border-s border-gray-200 dark:border-gray-800 [&.visible]:translate-x-0':true, 'visible' : show}">
    <div class="relative flex flex-col items-center text-center p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
        <div class="absolute top-4 end-4">
            
            <Dropdown class="ms-auto -me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                <template #button>
                    <ButtonZoom size="sm">
                        <Icon class="text-lg" name="more-h" />
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
                                <span>Ban From System</span>
                            </MenuItem>
                        </li>
                        <li>
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                <Icon class="text-start text-lg leading-none w-7 opacity-80" name="repeat" />
                                <span>View Orders</span>
                            </MenuItem>
                        </li>
                    </ul>
                </template>
            </Dropdown>
        </div>
        
        <Avatar v-if="data.image" size="xl" rounded :img="data.image"/>
        <Avatar v-else size="xl" :variant="data.theme" rounded :text="toInitials(data.name)"/>
        <div class="mt-4">
            <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{data.name}}</h6>
            <span class="text-sm text-slate-400">info@softnio.com</span>
        </div>
        <div class="grid grid-flow-dense grid-cols-12 mt-5 w-full">
            <div class="col-span-4">
                <div class="text-center">
                    <span class="block text-lg text-slate-600 dark:text-white font-bold">23</span>
                    <span class="block text-xs leading-5 text-slate-400">Total Order</span>
                </div>
            </div>
            <div class="col-span-4">
                <div class="text-center">
                    <span class="block text-lg text-slate-600 dark:text-white font-bold">20</span>
                    <span class="block text-xs leading-5 text-slate-400">Complete</span>
                </div>
            </div>
            <div class="col-span-4">
                <div class="text-center">
                    <span class="block text-lg text-slate-600 dark:text-white font-bold">3</span>
                    <span class="block text-xs leading-5 text-slate-400">Progress</span>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5 sm:p-6">
        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Additional </h6>
        <ul class="user-contacts">
            <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                <Icon class="text-base/6 inline-block text-slate-400 w-7" name="mail" />
                <span>info@softnio.com</span>
            </li>
            <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                <Icon class="text-base/6 inline-block text-slate-400 w-7" name="call" />
                <span>+938392939</span>
            </li>
            <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                <Icon class="text-base/6 inline-block text-slate-400 w-7" name="map-pin" />
                <span>1134 Ridder Park Road <br />San Fransisco, CA 94851</span>
            </li>
        </ul>
        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Additional </h6>
        <div class="grid grid-flow-dense grid-cols-12 gap-4">
            <div class="col-span-6">
                <span class="block text-xs text-slate-400">Ref ID:</span>
                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">TID-049583</span>
            </div>
            <div class="col-span-6">
                <span class="block text-xs text-slate-400">Requested:</span>
                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Abu Bin Ishtiak</span>
            </div>
            <div class="col-span-6">
                <span class="block text-xs text-slate-400">Status:</span>
                <span class="block text-sm font-bold mt-1 text-green-600">Open</span>
            </div>
            <div class="col-span-6">
                <span class="block text-xs text-slate-400">Last Reply:</span>
                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Abu Bin Ishtiak</span>
            </div>
        </div>
        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Assigned Account </h6>
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
    @click="()=> {
        show = false
    }" class="profile-toggle absolute inset-0 bg-slate-950 bg-opacity-20 dark:bg-opacity-50 z-[99] opacity-0 invisible peer-[.visible]:opacity-100 peer-[.visible]:visible 2xl:!opacity-0 2xl:!invisible"></div>
</template>
