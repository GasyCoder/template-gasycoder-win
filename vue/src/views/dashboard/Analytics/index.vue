<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    PageHead,
    PageHeadGroup,
    PageHeadTitle,
    PageHeadSubTitle,
    PageHeadOption,
    Button,
    Icon,
} from '@/components';

import AudienceOverviewCard from './partials/AudienceOverviewCard.vue';
import ActiveUsersCard from './partials/ActiveUsersCard.vue';
import WebsitePerformanceCard from './partials/WebsitePerformanceCard.vue';
import TrafficChannelListCard from './partials/TrafficChannelListCard.vue';
import TrafficChannelCard from './partials/TrafficChannelCard.vue';
import UsersCountryCard from './partials/UsersCountryCard.vue';
import BrowserUsedCard from './partials/BrowserUsedCard.vue';
import PagesViewCard from './partials/PagesViewCard.vue';
import SessionsCard from './partials/SessionsCard.vue';

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
</script>

<template>
    <Layout title="Analytics Dashboard">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Website Analytics</PageHeadTitle>
                <PageHeadSubTitle
                    >Welcome to Analytics Dashboard.</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <PageHeadOption>
                    <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                        <li>
                            <Menu
                                as="div"
                                class="relative inline-flex"
                                v-slot="{ open }"
                            >
                                <MenuButton
                                    as="div"
                                    class="inline-flex"
                                    :class="{ active: open }"
                                    ref="dropdownToggle"
                                >
                                    <Button size="rg" variant="white-outline">
                                        <Icon
                                            class="me-3 hidden text-xl/4.5 sm:inline"
                                            name="calender-date"
                                        />
                                        <span class="me-4"
                                            ><span class="hidden md:inline"
                                                >Last</span
                                            >
                                            30 Days</span
                                        >
                                        <Icon
                                            class="text-xl/4.5 rtl:-scale-x-100"
                                            name="chevron-right"
                                        />
                                    </Button>
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
                                                ><span
                                                    >Last 30 Days</span
                                                ></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Last 6 Months</span
                                                ></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Last 1 Years</span
                                                ></MenuItem
                                            >
                                        </li>
                                    </ul>
                                </MenuItems>
                            </Menu>
                        </li>
                        <li class="ms-auto">
                            <Button size="rg" variant="primary">
                                <Icon class="text-xl/4.5" name="reports" />
                                <span class="ms-3">Reports</span>
                            </Button>
                        </li>
                    </ul>
                </PageHeadOption>
            </PageHeadGroup>
        </PageHead>

        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12 lg:col-span-8 2xl:col-span-6">
                <AudienceOverviewCard />
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                <ActiveUsersCard />
            </div>
            <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
                <WebsitePerformanceCard />
            </div>
            <div class="col-span-12 lg:col-span-8 2xl:col-span-6">
                <TrafficChannelListCard />
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <TrafficChannelCard />
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <UsersCountryCard />
            </div>
            <div class="col-span-12 2xl:col-span-6">
                <BrowserUsedCard />
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <PagesViewCard />
            </div>
            <div class="col-span-12 md:col-span-6 2xl:col-span-3">
                <SessionsCard />
            </div>
        </div>
    </Layout>
</template>
