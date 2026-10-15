<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { ButtonZoom, Icon } from '@/components';

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
    <Menu as="div" class="relative inline-flex" v-slot="{ open }">
        <MenuButton
            as="div"
            :class="{ 'inline-flex': true, active: open }"
            ref="dropdownToggle"
        >
            <ButtonZoom class="-me-2">
                <Icon class="text-xl" name="more-h" />
            </ButtonZoom>
        </MenuButton>
        <MenuItems
            ref="dropdownContent"
            class="absolute z-[1000] min-w-[120px] rounded-md border border-gray-200 bg-white shadow dark:border-gray-800 dark:bg-gray-950"
        >
            <ul>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <span>View</span>
                    </MenuItem>
                </li>
                <li
                    class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                >
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                    >
                        <span>Remove</span>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>
