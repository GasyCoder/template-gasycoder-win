<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Icon } from '@/components'
</script>

<template>
    <Menu as="div" class="dropdown relative" v-slot="{ open }">
        <MenuButton :class="{'dropdown-toggle *:pointer-events-none peer inline-flex items-center isolate relative h-9 w-9 px-1.5 before:absolute before:-z-[1] before:rounded-full before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900':true, 'before:h-10 before:w-10 before:opacity-100': open, 'before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:opacity-0 hover:before:opacity-100': !open}">
            <div class="relative inline-flex after:content-[''] after:absolute after:rounded-full after:end-0 after:top-px after:h-2.5 after:w-2.5 after:border-2 after:border-white after:bg-sky-400">
                <Icon class="text-2xl leading-none text-slate-600 dark:text-slate-300" name="bell" />
            </div>
        </MenuButton>
        <MenuItems class="dropdown-menu absolute end-0 top-full mt-2.5 max-xs:min-w-[240px] max-xs:max-w-[240px] min-w-[360px] max-w-[360px] border border-t-3 border-gray-200 dark:border-gray-800 border-t-primary-600 dark:border-t-primary-600 bg-white dark:bg-gray-950 rounded shadow z-[1000]">
            <div class="flex items-center justify-between px-5 py-3 border-b border-gray-200 dark:border-gray-800">
                <span class="text-sm font-normal">Notifications</span>
                <MenuItem as="button" class="text-sm font-normal text-primary-600 hover:text-primary-700">
                    Mark All as Read
                </MenuItem>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                        <em class="text-lg leading-none ni ni-curve-down-right"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">You have requested to <span>Widthdrawl</span></div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-green-100 dark:bg-green-950 text-green-600">
                        <em class="text-lg leading-none ni ni-curve-down-left"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">Your Deposit Order is placed</div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                        <em class="text-lg leading-none ni ni-curve-down-right"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">You have requested to <span>Widthdrawl</span></div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center px-5 py-3 border-t border-gray-200 dark:border-gray-800">
                <MenuItem as="button" class="text-sm font-normal text-primary-600 hover:text-primary-700">
                View All
                </MenuItem>
            </div>
        </MenuItems>
    </Menu>
</template>