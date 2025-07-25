<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, Icon } from '@/components'

import OrdersOverviewCard from "./partials/OrdersOverviewCard.vue"
import OrdersActivitiesCard from "./partials/OrdersActivitiesCard.vue"
import ActionCenterCard from "./partials/ActionCenterCard.vue"
import TopCoinCard from "./partials/TopCoinCard.vue"
import UserActivitiesCard from "./partials/UserActivitiesCard.vue"

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
  <Layout title="Crypto Dashboard">
    <PageHead>
      <PageHeadGroup>
        <PageHeadTitle>Overview</PageHeadTitle>
        <PageHeadSubTitle>Welcome to Crypto Buy/Sell Platform.</PageHeadSubTitle>
      </PageHeadGroup>
      <PageHeadGroup>
        <PageHeadOption>
          <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
              <li>
                  <Button size="rg" variant="primary-pale-outline" class="bg-white">
                      <Icon class="text-xl/4.5" name="download-cloud" />
                      <span class="ms-3">Export</span>
                  </Button>
              </li>
              <li>
                  <Button size="rg" variant="primary-pale-outline" class="bg-white">
                      <Icon class="text-xl/4.5" name="reports" />
                      <span class="ms-3">Reports</span>
                  </Button>
              </li>
              <li class="ms-auto">
                <Menu as="div" class="inline-flex relative" v-slot="{ open }">
                  <MenuButton as='div'  class="inline-flex" :class="{'active': open}" ref="dropdownToggle">
                    <Button size="rg" variant="primary" icon>
                      <Icon class="text-xl/4.5" name="plus" />
                    </Button>
                  </MenuButton>
                  <MenuItems ref="dropdownContent" class="absolute border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow z-[1000] min-w-[180px]">
                      <ul class="py-2">
                          <li>
                            <MenuItem as="button" class="text-start w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                              <Icon name="user-add-fill" class="text-lg leading-none w-7 opacity-80" />
                              <span>Add User</span>
                            </MenuItem>
                          </li>
                          <li>
                            <MenuItem as="button" class="text-start w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                              <Icon name="coin-alt-fill" class="text-lg leading-none w-7 opacity-80" />
                              <span>Add order</span>
                            </MenuItem>
                          </li>
                          <li>
                            <MenuItem as="button" class="text-start w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                              <Icon name="note-add-fill-c" class="text-lg leading-none w-7 opacity-80" />
                              <span>Add Page</span>
                            </MenuItem>
                          </li>
                      </ul>
                  </MenuItems>
                </Menu>
              </li>
          </ul>
        </PageHeadOption>
      </PageHeadGroup>
    </PageHead>
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
        <div class="col-span-12 lg:col-span-8">
            <OrdersOverviewCard />
        </div>
        <div class="col-span-12 lg:col-span-4">
            <ActionCenterCard />
        </div>
        <div class="col-span-12 2xl:col-span-8 row-span-2">
            <OrdersActivitiesCard />
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6">
            <TopCoinCard />
        </div>
        <div class="col-span-12 2xl:col-span-4 md:col-span-6">
            <UserActivitiesCard />
        </div>
    </div>
  </Layout>
</template>
