<script setup>
  import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton :class="{'dropdown-toggle *:pointer-events-none peer inline-flex':true, 'active': open}">
            <button class="relative inline-flex items-center transition-all duration-300 px-4 py-2 text-slate-700 dark:text-white text-sm">
                <span>English</span> 
                <em class="text-sm ms-1 ni ni-chevron-up"></em>
            </button>
        </MenuButton>
        <MenuItems class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px] bottom-full end-0">
            <ul>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>English</span></MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Español</span></MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Français</span></MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Türkçe</span></MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>