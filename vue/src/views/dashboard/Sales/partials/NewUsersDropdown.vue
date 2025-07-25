<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { ButtonZoom, Icon } from '@/components'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? "bottom-start" : "bottom-end",
    modifiers: [
        {name: 'offset', options: { offset: theme.direction === "rtl" ? [14, -8] : [-14, -8]}},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})
</script>
<template>
    <Menu as="div" class="inline-flex relative" v-slot="{ open }">
        <MenuButton as='div' :class="{'inline-flex':true, 'active' : open}" ref="dropdownToggle">
            <ButtonZoom class="-me-2">
                <Icon class="text-xl" name="more-h" />
            </ButtonZoom>
        </MenuButton>
        <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[180px]">
            <ul class="py-2">
                <li>
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                        <Icon class="text-lg leading-none w-7 text-start opacity-80" name="setting"/>
                        <span>Action Settings</span>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                        <Icon class="text-lg leading-none w-7 text-start opacity-80" name="notify"/>
                        <span>Push Notification</span>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>