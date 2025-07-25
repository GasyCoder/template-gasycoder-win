<script setup>
  import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton :class="{'dropdown-toggle *:pointer-events-none peer inline-flex items-center isolate relative h-9 w-9 px-1.5 before:absolute before:-z-[1] before:rounded-full before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900':true, 'before:h-10 before:w-10 before:opacity-100': open, 'before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:opacity-0 hover:before:opacity-100': !open}">
            <div class="inline-flex rounded-full h-6 w-6 overflow-hidden">
                <img src="/images/flags/english-sq.png" alt="" />
            </div>
        </MenuButton>
        <MenuItems class="dropdown-menu absolute end-0 top-full mt-2.5 min-w-[180px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow z-[1000]">
            <ul>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                        <img src="/images/flags/english.png" alt="" class="w-6 me-3" />
                        <span class="language-name">English</span>
                    </MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                        <img src="/images/flags/spanish.png" alt="" class="w-6 me-3" />
                        <span class="language-name">Español</span>
                    </MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                        <img src="/images/flags/french.png" alt="" class="w-6 me-3" />
                        <span class="language-name">Français</span>
                    </MenuItem>
                </li>
                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                        <img src="/images/flags/turkey.png" alt="" class="w-6 me-3" />
                        <span class="language-name">Türkçe</span>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>