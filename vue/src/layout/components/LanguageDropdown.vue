<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton
            :class="{
                'dropdown-toggle peer relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:transition-all before:duration-300 dark:before:bg-gray-900': true,
                'before:h-10 before:w-10 before:opacity-100': open,
                'before:h-5 before:w-5 before:opacity-0 hover:before:h-10 hover:before:w-10 hover:before:opacity-100':
                    !open,
            }"
        >
            <div class="inline-flex h-6 w-6 overflow-hidden rounded-full">
                <img src="/images/flags/english-sq.png" alt="" />
            </div>
        </MenuButton>
        <MenuItems
            class="dropdown-menu border-t-primary-600 dark:border-t-primary-600 absolute end-0 top-full z-[1000] mt-2.5 min-w-[180px] rounded border border-t-3 border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
        >
            <ul>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <img
                            src="/images/flags/english.png"
                            alt=""
                            class="me-3 w-6"
                        />
                        <span class="language-name">English</span>
                    </MenuItem>
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <img
                            src="/images/flags/spanish.png"
                            alt=""
                            class="me-3 w-6"
                        />
                        <span class="language-name">Español</span>
                    </MenuItem>
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <img
                            src="/images/flags/french.png"
                            alt=""
                            class="me-3 w-6"
                        />
                        <span class="language-name">Français</span>
                    </MenuItem>
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <img
                            src="/images/flags/turkey.png"
                            alt=""
                            class="me-3 w-6"
                        />
                        <span class="language-name">Türkçe</span>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>
