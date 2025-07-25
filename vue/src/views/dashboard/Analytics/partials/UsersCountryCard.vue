<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { Card, CardBody, Button, Icon } from '@/components'

import WorldMap from './WorldMap.vue'
import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

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
        <CardBody>
            <div class="flex justify-between items-center gap-2 mb-3">
                <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Users by Country</h6>
                
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
            <div class="flex justify-center">
                <WorldMap class="h-[160px] w-max my-4 [&_svg]:!w-full [&_svg]:!h-full "></WorldMap>
            </div>
            <table class="w-full -mb-1">
              <tbody>
                <tr class="text-sm">
                    <td class="py-2 text-slate-400">United States</td>
                    <td class="py-2 text-slate-700 dark:text-white">12,094</td>
                    <td class="py-2 text-slate-400 text-end">23.54%</td>
                </tr>
                <tr class="text-sm">
                    <td class="py-2 text-slate-400">India</td>
                    <td class="py-2 text-slate-700 dark:text-white">7,984</td>
                    <td class="py-2 text-slate-400 text-end">7.16%</td>
                </tr>
                <tr class="text-sm">
                    <td class="py-2 text-slate-400">Turkey</td>
                    <td class="py-2 text-slate-700 dark:text-white">6,338</td>
                    <td class="py-2 text-slate-400 text-end">6.54%</td>
                </tr>
                <tr class="text-sm">
                    <td class="py-2 text-slate-400">Bangladesh</td>
                    <td class="py-2 text-slate-700 dark:text-white">4,749</td>
                    <td class="py-2 text-slate-400 text-end">5.29%</td>
                </tr>
              </tbody>
            </table>
        </CardBody>
    </Card>
</template>