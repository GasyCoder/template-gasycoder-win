<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, Icon } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

let [dropdownToggle, dropdownContent] = usePopper({
    placement: theme.direction === 'rtl' ? 'bottom-start' : 'bottom-end',
    modifiers: [
        { name: 'offset', options: { offset: [0, 4] } },
        { name: 'preventOverflow', options: { padding: 8 } },
    ],
});

const data = [
    {
        title: 'Pink Fitness Tracker',
        price: 99,
        sold: 10,
        image: '/images/product/a.png',
    },
    {
        title: 'Purple Smartwatch',
        price: 109,
        sold: 9,
        image: '/images/product/b.png',
    },
    {
        title: 'Black Smartwatch',
        price: 109,
        sold: 13,
        image: '/images/product/c.png',
    },
    {
        title: 'Black Headphones',
        price: 76,
        sold: 12,
        image: '/images/product/d.png',
    },
    {
        title: 'iPhone 7 Headphones',
        price: 88,
        sold: 20,
        image: '/images/product/e.png',
    },
];
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="mb-3 flex items-center justify-between gap-x-3">
                <h6
                    class="font-heading -tracking-snug leading-tighter text-base font-bold text-slate-700 dark:text-white"
                >
                    Top products
                </h6>
                <Menu as="div" class="relative inline-flex" v-slot="{ open }">
                    <MenuButton
                        as="div"
                        class="inline-flex"
                        :class="{ active: open }"
                        ref="dropdownToggle"
                    >
                        <button
                            class="relative inline-flex items-center text-xs font-bold tracking-wide text-slate-400 transition-all duration-300 hover:text-slate-600 [.active_&]:text-slate-600"
                        >
                            <span>Weekly</span>
                            <Icon
                                class="text-base leading-4.5"
                                name="chevron-down"
                            />
                        </button>
                    </MenuButton>
                    <MenuItems
                        ref="dropdownContent"
                        class="absolute z-[1000] min-w-[180px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
                    >
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Daily</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Weekly</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>Monthly</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
            <ul class="flex flex-col gap-y-5 py-2.5 leading-tight">
                <li
                    v-for="(item, index) in data"
                    :key="index"
                    class="flex items-center"
                >
                    <div class="w-11">
                        <img
                            class="rounded"
                            :src="item.image"
                            :alt="item.title"
                        />
                    </div>
                    <div class="ms-4">
                        <div class="text-base text-slate-700 dark:text-white">
                            {{ item.title }}
                        </div>
                        <div class="text-sm text-slate-400">
                            ${{ item.price.toFixed(2) }}
                        </div>
                    </div>
                    <div class="ms-auto text-end">
                        <div class="text-base text-slate-700 dark:text-white">
                            ${{ (item.price * item.sold).toFixed(2) }}
                        </div>
                        <div class="text-sm text-slate-400">
                            {{ item.sold }} Sold
                        </div>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>
