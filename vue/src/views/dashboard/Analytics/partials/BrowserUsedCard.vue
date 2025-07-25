<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Button, Icon } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()


const data = [
    {
        name: "Google Chrome",
        theme: "primary",
        amount: "1,641",
        change: 72.84,
        bounce: 22.62
    },
    {
        name: "Mozilla Firefox",
        theme: "red",
        amount: "497",
        change: 7.93,
        bounce: 20.49
    },
    {
        name: "Safari Browser",
        theme: "cyan",
        amount: "187",
        change: 4.87,
        bounce: 21.34
    },
    {
        name: "Edge / IE",
        theme: "indigo",
        amount: "28",
        change: 1.14,
        bounce: 21.34
    },
    {
        name: "Other Browser",
        theme: "purple",
        amount: "683",
        change: 10.76,
        bounce: 20.49
    },
]

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? "bottom-start" : "bottom-end",
    modifiers: [
        {name: 'offset', options: { offset:  [0, 4] }},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})

</script>
<template>
<Card class="h-full">
    <CardBody class="pb-2 sm:pb-3">
        <div class="flex justify-between items-center gap-2">
            <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Browser Used</h6>
            
            <Menu as="div" class="inline-flex relative ms-auto" v-slot="{ open }">
                <MenuButton as='div' :class="{'inline-flex':true, 'active' : open}" ref="dropdownToggle">
                    <Button size="sm" variant="white-outline">
                        <span>30 Days</span>
                        <Icon class="text-sm leading-none font-bold -me-0.5 ms-1" name="chevron-down" />
                    </Button>
                </MenuButton>
                <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[140px]">
                    <ul class="py-2">
                        <li class="group">
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>7 Days</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"></Icon>
                            </MenuItem>
                        </li>
                        <li class="group">
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>15 Days</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"></Icon>
                            </MenuItem>
                        </li>
                        <li class="group active">
                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>30 Days</span>
                                <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"></Icon>
                            </MenuItem>
                        </li>
                    </ul>
                </MenuItems>
            </Menu>
        </div>
    </CardBody>
    <div class="table w-full text-sm text-slate-400">
        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
            <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Browser</span></div>
            <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Users</span></div>
            <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>% Users</span></div>
            <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Bounce Rate</span></div>
        </div>
        <div v-for="(item,index) in data" key="index" class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
            <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                <div class="flex items-center">
                    <Icon :class="{
                        'text-xl w-7': true,
                        'text-primary-600': item.theme === 'primary',
                        'text-red-600': item.theme === 'red',
                        'text-yellow-600': item.theme === 'yellow',
                        'text-cyan-600': item.theme === 'cyan',
                        'text-indigo-600': item.theme === 'indigo',
                        'text-purple-600': item.theme === 'purple',
                    }" name="globe"/>
                    <div class="text-slate-700 dark:text-white font-medium">{{item.name}}</div>
                </div>
            </div>
            <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                <span class="text-xs text-slate-600">{{item.amount}}</span>
            </div>
            <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                <div class="flex items-center bg-transparent">
                    <div class="text-white rounded-sm h-1.5 bg-primary-600" :style="{'width': item.change + '%'}"></div>
                    <div class="text-xs text-slate-400 ps-2">{{item.change}}%</div>
                </div>
            </div>
            <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                <span class="text-xs text-slate-400">{{item.bounce}}%</span>
            </div>
        </div>
    </div>
</Card>
</template>