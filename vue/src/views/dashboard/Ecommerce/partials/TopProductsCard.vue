<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Icon } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? "bottom-start" : "bottom-end",
    modifiers: [
        {name: 'offset', options: { offset: [0,4]}},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})

const data = [
    {
      title: "Pink Fitness Tracker",
      price: 99,
      sold: 10,
      image: "/images/product/a.png"
    },
    {
      title: "Purple Smartwatch",
      price: 109,
      sold: 9,
      image: "/images/product/b.png"
    },
    {
      title: "Black Smartwatch",
      price: 109,
      sold: 13,
      image: "/images/product/c.png"
    },
    {
      title: "Black Headphones",
      price: 76,
      sold: 12,
      image: "/images/product/d.png"
    },
    {
      title: "iPhone 7 Headphones",
      price: 88,
      sold: 20,
      image: "/images/product/e.png"
    },
]
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <div class="flex items-center justify-between gap-x-3 mb-3">
                <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Top products</h6>
                <Menu as="div" class="inline-flex relative" v-slot="{open}">
                    <MenuButton as='div' class="inline-flex" :class="{'active': open}" ref="dropdownToggle">
                        <button class="relative inline-flex items-center text-xs font-bold tracking-wide text-slate-400 hover:text-slate-600 [.active_&]:text-slate-600 transition-all duration-300">
                            <span>Weekly</span>
                            <Icon class="text-base leading-4.5" name="chevron-down" />
                        </button>
                    </MenuButton>
                    <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[180px]">
                        <ul class="py-2">
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Daily</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Weekly</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Monthly</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
              </Menu>
            </div>
            <ul class="flex flex-col gap-y-5 py-2.5 leading-tight">
                <li v-for="(item,index) in data" :key="index" class="flex items-center">
                    <div class="w-11">
                        <img class="rounded" :src="item.image" :alt="item.title " />
                    </div>
                    <div class="ms-4">
                        <div class="text-base text-slate-700 dark:text-white">{{ item.title }}</div>
                        <div class="text-sm text-slate-400">${{item.price.toFixed(2)}}</div>
                    </div>
                    <div class="text-end ms-auto">
                        <div class="text-base text-slate-700 dark:text-white">${{(item.price * item.sold).toFixed(2)}}</div>
                        <div class="text-sm text-slate-400">{{item.sold}} Sold</div>
                    </div>
                </li>
            </ul>
        </CardBody>
    </Card>
</template>