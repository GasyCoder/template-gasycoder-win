<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Icon } from '@/components';
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
            <div
                class="relative inline-flex after:absolute after:end-0 after:top-px after:h-2.5 after:w-2.5 after:rounded-full after:border-2 after:border-white after:bg-sky-400 after:content-['']"
            >
                <Icon
                    class="text-2xl leading-none text-slate-600 dark:text-slate-300"
                    name="bell"
                />
            </div>
        </MenuButton>
        <MenuItems
            class="dropdown-menu max-xs:min-w-[240px] max-xs:max-w-[240px] border-t-primary-600 dark:border-t-primary-600 absolute end-0 top-full z-[1000] mt-2.5 max-w-[360px] min-w-[360px] rounded border border-t-3 border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
        >
            <div
                class="flex items-center justify-between border-b border-gray-200 px-5 py-3 dark:border-gray-800"
            >
                <span class="text-sm font-normal">Notifications</span>
                <MenuItem
                    as="button"
                    class="text-primary-600 hover:text-primary-700 text-sm font-normal"
                >
                    Mark All as Read
                </MenuItem>
            </div>
            <div class="flex flex-col">
                <div
                    class="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800"
                >
                    <div
                        class="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-600 dark:bg-yellow-950"
                    >
                        <em
                            class="ni ni-curve-down-right text-lg leading-none"
                        ></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">
                            You have requested to <span>Widthdrawl</span>
                        </div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
                <div
                    class="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800"
                >
                    <div
                        class="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600 dark:bg-green-950"
                    >
                        <em
                            class="ni ni-curve-down-left text-lg leading-none"
                        ></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">
                            Your Deposit Order is placed
                        </div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
                <div
                    class="flex items-center border-b border-gray-200 p-5 last:border-b-0 dark:border-gray-800"
                >
                    <div
                        class="me-3 inline-flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100 text-yellow-600 dark:bg-yellow-950"
                    >
                        <em
                            class="ni ni-curve-down-right text-lg leading-none"
                        ></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">
                            You have requested to <span>Widthdrawl</span>
                        </div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center justify-center border-t border-gray-200 px-5 py-3 dark:border-gray-800"
            >
                <MenuItem
                    as="button"
                    class="text-primary-600 hover:text-primary-700 text-sm font-normal"
                >
                    View All
                </MenuItem>
            </div>
        </MenuItems>
    </Menu>
</template>
