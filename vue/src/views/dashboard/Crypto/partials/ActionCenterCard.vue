<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, ButtonZoom, Icon } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        {
            name: 'offset',
            options: {
                offset: theme.direction === 'rtl' ? [14, -8] : [-14, -8],
            },
        },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});
</script>
<template>
    <Card class="h-full">
        <CardBody class="border-b border-gray-300 sm:py-4 dark:border-gray-900">
            <div class="relative -my-1 flex items-center justify-between">
                <h6
                    class="font-heading -tracking-snug text-base leading-6.5 font-bold text-slate-700 dark:text-white"
                >
                    Action Center
                </h6>
                <Menu
                    as="div"
                    class="relative ms-auto inline-flex"
                    v-slot="{ open }"
                >
                    <MenuButton
                        as="div"
                        class="inline-flex"
                        :class="{ active: open }"
                        ref="dropdownToggle"
                    >
                        <ButtonZoom class="-me-2">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="setting"
                                    />
                                    <span>Action Settings</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="notify"
                                    />
                                    <span>Push Notification</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
        </CardBody>
        <ul>
            <li
                class="flex items-center justify-between gap-4 border-b border-gray-300 p-5 last:border-b-0 sm:p-6 dark:border-gray-900"
            >
                <div class="flex">
                    <em
                        class="ni ni-cc-alt-fill -mt-1 w-8 flex-shrink-0 text-2xl text-slate-400"
                    ></em>
                    <div>
                        <div
                            class="pb-1 text-sm leading-6 font-medium text-slate-600 dark:text-white"
                        >
                            Pending Buy/Sell Orders
                        </div>
                        <p class="text-sm leading-5 text-slate-400">
                            We have still
                            <strong class="text-primary-600 font-medium"
                                >40 buy orders</strong
                            >
                            and
                            <strong class="text-primary-600 font-medium"
                                >12 sell orders</strong
                            >, thats need to review &amp; take necessary action.
                        </p>
                    </div>
                </div>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="relative isolate -me-3 inline-flex h-9 w-9 items-center justify-center px-1.5 before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900 [&.show]:before:h-10 [&.show]:before:w-10 [&.show]:before:opacity-100"
                    ><em
                        class="ni ni-forward-ios text-xl text-slate-600 rtl:-scale-x-100 dark:text-slate-300"
                    ></em
                ></a>
            </li>
            <li
                class="flex items-center justify-between gap-4 border-b border-gray-300 p-5 last:border-b-0 sm:p-6 dark:border-gray-900"
            >
                <div class="flex">
                    <em
                        class="ni ni-help-fill -mt-1 w-8 flex-shrink-0 text-2xl text-slate-400"
                    ></em>
                    <div>
                        <div
                            class="pb-1 text-sm leading-6 font-medium text-slate-600 dark:text-white"
                        >
                            Support Messages
                        </div>
                        <p class="text-sm leading-5 text-slate-400">
                            Here is
                            <strong class="text-primary-600 font-medium"
                                >18 new</strong
                            >
                            support message.
                        </p>
                    </div>
                </div>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="relative isolate -me-3 inline-flex h-9 w-9 items-center justify-center px-1.5 before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900 [&.show]:before:h-10 [&.show]:before:w-10 [&.show]:before:opacity-100"
                    ><em
                        class="ni ni-forward-ios text-xl text-slate-600 rtl:-scale-x-100 dark:text-slate-300"
                    ></em
                ></a>
            </li>
            <li
                class="flex items-center justify-between gap-4 border-b border-gray-300 p-5 last:border-b-0 sm:p-6 dark:border-gray-900"
            >
                <div class="flex">
                    <em
                        class="ni ni-wallet-fill -mt-1 w-8 flex-shrink-0 text-2xl text-slate-400"
                    ></em>
                    <div>
                        <div
                            class="pb-1 text-sm leading-6 font-medium text-slate-600 dark:text-white"
                        >
                            Upcoming Deposit
                        </div>
                        <p class="text-sm leading-5 text-slate-400">
                            Here is
                            <strong class="text-primary-600 font-medium"
                                >7 upcoming</strong
                            >
                            deposit need to review.
                        </p>
                    </div>
                </div>
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="relative isolate -me-3 inline-flex h-9 w-9 items-center justify-center px-1.5 before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900 [&.show]:before:h-10 [&.show]:before:w-10 [&.show]:before:opacity-100"
                    ><em
                        class="ni ni-forward-ios text-xl text-slate-600 rtl:-scale-x-100 dark:text-slate-300"
                    ></em
                ></a>
            </li>
        </ul>
    </Card>
</template>
