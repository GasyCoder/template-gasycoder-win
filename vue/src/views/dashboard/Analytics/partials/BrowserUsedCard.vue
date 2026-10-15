<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, Button, Icon } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const data = [
    {
        name: 'Google Chrome',
        theme: 'primary',
        amount: '1,641',
        change: 72.84,
        bounce: 22.62,
    },
    {
        name: 'Mozilla Firefox',
        theme: 'red',
        amount: '497',
        change: 7.93,
        bounce: 20.49,
    },
    {
        name: 'Safari Browser',
        theme: 'cyan',
        amount: '187',
        change: 4.87,
        bounce: 21.34,
    },
    {
        name: 'Edge / IE',
        theme: 'indigo',
        amount: '28',
        change: 1.14,
        bounce: 21.34,
    },
    {
        name: 'Other Browser',
        theme: 'purple',
        amount: '683',
        change: 10.76,
        bounce: 20.49,
    },
];

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        { name: 'offset', options: { offset: [0, 4] } },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});
</script>
<template>
    <Card class="h-full">
        <CardBody class="pb-2 sm:pb-3">
            <div class="flex items-center justify-between gap-2">
                <h6
                    class="font-heading -tracking-snug leading-tighter text-sm font-bold text-slate-700 dark:text-white"
                >
                    Browser Used
                </h6>

                <Menu
                    as="div"
                    class="relative ms-auto inline-flex"
                    v-slot="{ open }"
                >
                    <MenuButton
                        as="div"
                        :class="{ 'inline-flex': true, active: open }"
                        ref="dropdownToggle"
                    >
                        <Button size="sm" variant="white-outline">
                            <span>30 Days</span>
                            <Icon
                                class="ms-1 -me-0.5 text-sm leading-none font-bold"
                                name="chevron-down"
                            />
                        </Button>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[140px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>7 Days</span>
                                    <Icon
                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    ></Icon>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>15 Days</span>
                                    <Icon
                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    ></Icon>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                >
                                    <span>30 Days</span>
                                    <Icon
                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                        name="check-thick"
                                    ></Icon>
                                </MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
        </CardBody>
        <div class="table w-full text-sm text-slate-400">
            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Browser</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Users</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-2 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <span>% Users</span>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-2 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span>Bounce Rate</span>
                </div>
            </div>
            <div
                v-for="(item, index) in data"
                key="index"
                class="hover:dark:bg-gray-1000 table-row transition-all duration-300 hover:bg-gray-50 [&>*]:border-b [&>*]:last:border-b-0"
            >
                <div
                    class="relative table-cell border-gray-300 px-2 py-4.5 align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <div class="flex items-center">
                        <Icon
                            :class="{
                                'w-7 text-xl': true,
                                'text-primary-600': item.theme === 'primary',
                                'text-red-600': item.theme === 'red',
                                'text-yellow-600': item.theme === 'yellow',
                                'text-cyan-600': item.theme === 'cyan',
                                'text-indigo-600': item.theme === 'indigo',
                                'text-purple-600': item.theme === 'purple',
                            }"
                            name="globe"
                        />
                        <div class="font-medium text-slate-700 dark:text-white">
                            {{ item.name }}
                        </div>
                    </div>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-4.5 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span class="text-xs text-slate-600">{{
                        item.amount
                    }}</span>
                </div>
                <div
                    class="relative hidden border-gray-300 px-2 py-4.5 align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                >
                    <div class="flex items-center bg-transparent">
                        <div
                            class="bg-primary-600 h-1.5 rounded-sm text-white"
                            :style="{ width: item.change + '%' }"
                        ></div>
                        <div class="ps-2 text-xs text-slate-400">
                            {{ item.change }}%
                        </div>
                    </div>
                </div>
                <div
                    class="relative table-cell border-gray-300 px-2 py-4.5 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                >
                    <span class="text-xs text-slate-400"
                        >{{ item.bounce }}%</span
                    >
                </div>
            </div>
        </div>
    </Card>
</template>
