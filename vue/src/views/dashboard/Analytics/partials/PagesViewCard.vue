<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import { Card, CardBody, Button, Icon, Dropdown } from '@/components';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const data = [
    { url: '/', amount: '2,879' },
    { url: '/subscription/index.html', amount: '2,094' },
    { url: '/general/index.html', amount: '1,634' },
    { url: '/crypto/index.html', amount: '1,497' },
    { url: '/invest/index.html', amount: '1,349' },
    { url: '/subscription/profile.html', amount: '984' },
    { url: '/general/index-crypto.html', amount: '879' },
    { url: '/apps/messages/index.html', amount: '598' },
    { url: '/general/index-crypto.html', amount: '436' },
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
                    Pages View by Users
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
                                    ><span>7 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em>
                                </MenuItem>
                            </li>
                            <li class="group">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>15 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                            <li class="group active">
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    ><span>30 Days</span
                                    ><em
                                        class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                    ></em
                                ></MenuItem>
                            </li>
                        </ul>
                    </MenuItems>
                </Menu>
            </div>
        </CardBody>
        <div>
            <div
                class="flex items-center justify-between gap-4 border-b border-gray-300 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-900"
            >
                <span class="text-xs text-slate-400">Page</span>
                <span class="text-xs text-slate-400">Page Views</span>
            </div>
            <div
                v-for="(item, index) in data"
                :key="index"
                class="flex items-center justify-between gap-4 border-b border-gray-300 px-5 py-2 last:border-b-0 sm:px-6 dark:border-gray-900"
            >
                <span class="text-xs text-slate-400">{{ item.url }}</span>
                <span class="text-xs text-slate-600">{{ item.amount }}</span>
            </div>
        </div>
    </Card>
</template>
