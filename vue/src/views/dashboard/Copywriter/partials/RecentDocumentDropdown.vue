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
                            name="eye"
                        />
                        <span>View Document</span>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                    >
                        <Icon
                            class="w-7 text-start text-lg leading-none opacity-80"
                            name="edit"
                        />
                        <span>Rename</span>
                    </MenuItem>
                </li>
                <li>
                    <MenuItem
                        as="button"
                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                    >
                        <Icon
                            class="w-7 text-start text-lg leading-none opacity-80"
                            name="trash"
                        />
                        <span>Move to Trash</span>
                    </MenuItem>
                </li>
            </ul>
        </MenuItems>
    </Menu>
</template>
