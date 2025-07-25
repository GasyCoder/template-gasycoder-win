<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, Icon } from '@/components'

import SalesRevenueCard from "./partials/SalesRevenueCard.vue"
import ActiveSubscriptionsCard from "./partials/ActiveSubscriptionsCard.vue"
import AvgSubscriptionsCard from "./partials/AvgSubscriptionsCard.vue"
import SalesOverviewCard from "./partials/SalesOverviewCard.vue"
import RecentTransactionCard from "./partials/RecentTransactionCard.vue"
import RecentActivitiesCard from "./partials/RecentActivitiesCard.vue"
import NewUsersCard from "./partials/NewUsersCard.vue"
import SupportRequestsCard from "./partials/SupportRequestsCard.vue"
import RecentNotificationsCard from "./partials/RecentNotificationsCard.vue"


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
</script>

<template>
  <Layout title="Sales Dashboard">
    <PageHead>
        <PageHeadGroup>
          <PageHeadTitle>Sales Overview</PageHeadTitle>
          <PageHeadSubTitle>Welcome to DashWind Dashboard Template.</PageHeadSubTitle>
        </PageHeadGroup>
        <PageHeadGroup>
          <PageHeadOption>
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                  <Menu as="div" class="inline-flex relative" v-slot="{open}">
                    <MenuButton as='div' class="inline-flex" :class="{'active': open}" ref="dropdownToggle">
                        <Button size="rg" variant="white-outline">
                          <Icon class="text-xl/4.5 me-3 hidden sm:inline" name="calender-date" />
                          <span class="me-4"><span class="hidden md:inline">Last</span> 30 Days</span>
                          <Icon class="text-xl/4.5 rtl:-scale-x-100" name="chevron-right" />
                        </Button>
                    </MenuButton>
                    <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[180px]">
                        <ul class="py-2">
                            <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 30 Days</span></MenuItem></li>
                            <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 6 Months</span></MenuItem></li>
                            <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 1 Years</span></MenuItem></li>
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
        <div class="col-span-12 lg:col-span-6 2xl:col-span-6 lg:row-span-2 2xl:row-span-1">
          <SalesRevenueCard />
        </div>
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
          <ActiveSubscriptionsCard />
        </div>
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
          <AvgSubscriptionsCard />
        </div>
        <div class="col-span-12 2xl:col-span-6 2xl:row-span-2 2xl:col-start-7 2xl:row-start-1">
          <SalesOverviewCard />
        </div>
        <div class="col-span-12 2xl:col-span-8">
          <RecentTransactionCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <RecentActivitiesCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <NewUsersCard />
        </div>
        <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
          <SupportRequestsCard />
        </div>
        <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
          <RecentNotificationsCard />
        </div>
      </div>
  </Layout>
</template>
