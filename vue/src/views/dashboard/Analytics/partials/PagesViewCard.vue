<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Button, Icon, Dropdown } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

const data = [
    {url: "/", amount:"2,879"},
    {url: "/subscription/index.html", amount:"2,094"},
    {url: "/general/index.html", amount:"1,634"},
    {url: "/crypto/index.html", amount:"1,497"},
    {url: "/invest/index.html", amount:"1,349"},
    {url: "/subscription/profile.html", amount:"984"},
    {url: "/general/index-crypto.html", amount:"879"},
    {url: "/apps/messages/index.html", amount:"598"},
    {url: "/general/index-crypto.html", amount:"436"},
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
                <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Pages View by Users</h6>
                
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
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
        </CardBody>
        <div>
            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                <span class="text-xs text-slate-400">Page</span>
                <span class="text-xs text-slate-400">Page Views</span>
            </div>
            <div v-for="(item,index) in data" :key="index" class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                <span class="text-xs text-slate-400">{{item.url}}</span>
                <span class="text-xs text-slate-600">{{item.amount}}</span>
            </div>
        </div>
    </Card>
</template>