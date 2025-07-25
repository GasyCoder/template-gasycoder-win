<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Icon, Avatar } from '@/components'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton class="dropdown-toggle *:pointer-events-none peer inline-flex items-center group">
            <div class="flex items-center">
                <Avatar rounded icon="user-alt" size="sm" variant="primary"/>
                <div class="hidden md:block ms-4 text-start">
                    <div class="text-xs font-medium leading-none pt-0.5 pb-1.5 text-primary-500 group-hover:text-primary-600">Administrator</div>
                    <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center">Abu Bin Ishityak <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em></div>
                </div>
            </div>
        </MenuButton>
        <MenuItems class="dropdown-menu absolute end-0 top-full mt-2.5 max-xs:min-w-[240px] max-xs:max-w-[240px] min-w-[280px] max-w-[280px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow z-[1000]">
            <div class="hidden sm:block px-7 py-5 bg-slate-50 dark:bg-slate-900 border-b border-gray-200 dark:border-gray-800">
                <div class="flex items-center">
                    <Avatar rounded text="AB" size="rg" variant="primary"/>
                    <div class="ms-4 flex flex-col text-start">
                        <span class="text-sm font-bold text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                        <span class="text-xs text-slate-400 mt-1">info@softnio.com</span>
                    </div>
                </div>
            </div>
            <ul class="py-3">
                <li>
                    <MenuItem as="template">
                        <router-link class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" to="/user-profile-regular?tab=0">
                            <Icon class="text-lg leading-none w-7" name="user-alt" />
                            <span>View Profile</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem as="template">
                        <router-link class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" to="/user-profile-regular?tab=3">
                            <Icon class="text-lg leading-none w-7" name="setting-alt" />
                            <span>Account Setting</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem as="template">
                        <router-link class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" to="/user-profile-regular?tab=2">
                            <Icon class="text-lg leading-none w-7" name="activity-alt" />
                            <span>Login Activity</span>
                        </router-link>
                    </MenuItem>
                </li>
                <li>
                    <button @click="theme.updateMode" class="w-full relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300">
                        <div class="flex dark:hidden items-center">    
                            <Icon class="text-start text-lg leading-none w-7" name="moon"></Icon>
                            <span>Dark Mode</span>
                        </div>
                        <div class="hidden dark:flex items-center">    
                            <Icon class="text-start text-lg leading-none w-7" name="sun"></Icon>
                            <span>Light Mode</span>
                        </div>
                        <div class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-white dark:bg-primary-600">
                            <div class="absolute start-0.5 dark:start-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-white transition-all duration-300"></div>
                        </div>
                    </button>
                </li>
                <li class="block border-t border-gray-200 dark:border-gray-800 my-3"></li>
                <li>
                    <MenuItem as="template">
                        <router-link class="relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" to="/auths/auth-login">
                            <Icon class="text-lg leading-none w-7" name="signout" />
                            <span>Sign out</span>
                        </router-link>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>