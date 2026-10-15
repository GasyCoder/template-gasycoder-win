<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton
            :class="{
                'dropdown-toggle peer inline-flex *:pointer-events-none': true,
                active: open,
            }"
        >
            <button
                class="relative inline-flex items-center px-4 py-2 text-sm text-slate-700 transition-all duration-300 dark:text-white"
            >
                <span>English</span>
                <em class="ni ni-chevron-up ms-1 text-sm"></em>
            </button>
        </MenuButton>
        <MenuItems
            class="absolute end-0 bottom-full z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
        >
            <ul>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                        ><span>English</span></MenuItem
                    >
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                        ><span>Español</span></MenuItem
                    >
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                        ><span>Français</span></MenuItem
                    >
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                        ><span>Türkçe</span></MenuItem
                    >
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>
