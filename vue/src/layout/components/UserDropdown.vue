<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Icon, Avatar } from '@/components';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton
            class="dropdown-toggle peer group inline-flex items-center *:pointer-events-none"
        >
            <div class="flex items-center">
                <Avatar rounded icon="user-alt" size="sm" variant="primary" />
                <div class="ms-4 hidden text-start md:block">
                    <div
                        class="text-primary-500 group-hover:text-primary-600 pt-0.5 pb-1.5 text-xs leading-none font-medium"
                    >
                        Administrator
                    </div>
                    <div
                        class="flex items-center text-xs font-bold text-slate-600 dark:text-white"
                    >
                        Abu Bin Ishityak
                        <em
                            class="ni ni-chevron-down ms-1 text-sm leading-none"
                        ></em>
                    </div>
                </div>
            </div>
        </MenuButton>
        <MenuItems
            class="dropdown-menu max-xs:min-w-[240px] max-xs:max-w-[240px] border-t-primary-600 dark:border-t-primary-600 absolute end-0 top-full z-[1000] mt-2.5 max-w-[280px] min-w-[280px] rounded border border-t-3 border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
        >
            <div
                class="hidden border-b border-gray-200 bg-slate-50 px-7 py-5 sm:block dark:border-gray-800 dark:bg-slate-900"
            >
                <div class="flex items-center">
                    <Avatar rounded text="AB" size="rg" variant="primary" />
                    <div class="ms-4 flex flex-col text-start">
                        <span
                            class="text-sm font-bold text-slate-700 dark:text-white"
                            >Abu Bin Ishtiyak</span
                        >
                        <span class="mt-1 text-xs text-slate-400"
                            >info@softnio.com</span
                        >
                    </div>
                </div>
            </div>
            <ul class="py-3">
                <li>
                    <MenuItem as="template">
                        <router-link
                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-7 py-2.5 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 dark:text-slate-400"
                            to="/user-profile-regular?tab=0"
                        >
                            <Icon
                                class="w-7 text-lg leading-none"
                                name="user-alt"
                            />
                            <span>View Profile</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem as="template">
                        <router-link
                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-7 py-2.5 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 dark:text-slate-400"
                            to="/user-profile-regular?tab=3"
                        >
                            <Icon
                                class="w-7 text-lg leading-none"
                                name="setting-alt"
                            />
                            <span>Account Setting</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem as="template">
                        <router-link
                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-7 py-2.5 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 dark:text-slate-400"
                            to="/user-profile-regular?tab=2"
                        >
                            <Icon
                                class="w-7 text-lg leading-none"
                                name="activity-alt"
                            />
                            <span>Login Activity</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <button
                        @click="theme.updateMode"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-7 py-2.5 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 dark:text-slate-400"
                    >
                        <div class="flex items-center dark:hidden">
                            <Icon
                                class="w-7 text-start text-lg leading-none"
                                name="moon"
                            ></Icon>
                            <span>Dark Mode</span>
                        </div>
                        <div class="hidden items-center dark:flex">
                            <Icon
                                class="w-7 text-start text-lg leading-none"
                                name="sun"
                            ></Icon>
                            <span>Light Mode</span>
                        </div>
                        <div
                            class="dark:border-primary-600 dark:bg-primary-600 relative ms-auto h-6 w-12 rounded-full border-2 border-gray-200 bg-white"
                        >
                            <div
                                class="absolute start-0.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 transition-all duration-300 dark:start-6.5 dark:bg-white"
                            ></div>
                        </div>
                    </button>
                </li>
                <li
                    class="my-3 block border-t border-gray-200 dark:border-gray-800"
                ></li>
                <li>
                    <MenuItem as="template">
                        <router-link
                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-7 py-2.5 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 dark:text-slate-400"
                            to="/auths/auth-login"
                        >
                            <Icon
                                class="w-7 text-lg leading-none"
                                name="signout"
                            />
                            <span>Sign out</span>
                        </router-link>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>
