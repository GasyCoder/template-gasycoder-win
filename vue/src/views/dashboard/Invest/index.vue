<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, Icon } from '@/components'

import StatusCard from "./partials/StatusCard.vue"
import InvestmentOverviewCard from "./partials/InvestmentOverviewCard.vue"
import TopPlanCard from "./partials/TopPlanCard.vue"
import RecentActivitiesCard from "./partials/RecentActivitiesCard.vue"
import RecentNotificationsCard from "./partials/RecentNotificationsCard.vue"
import RecentInvestmentCard from "./partials/RecentInvestmentCard.vue"


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


var totalDeposit = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit: "USD",
    stacked: true,
    datasets: [
      {
        label: "Active User", // @v2.0
        backgroundColor: [
          "rgba(9, 113, 254, 0.5)",
          "rgba(9, 113, 254, 0.5)",
          "rgba(9, 113, 254, 0.5)",
          "rgba(9, 113, 254, 0.5)",
          "rgba(9, 113, 254, 0.5)",
          "rgba(9, 113, 254, 0.5)",
          "rgb(101, 118, 255)",
        ],
        barPercentage: 0.7,
        categoryPercentage: 0.7,
        data: [7200, 8200, 7800, 9500, 5500, 9200, 9690],
      },
    ],
  };
  
  var totalWithdraw = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit: "USD",
    stacked: true,
    datasets: [
      {
        label: "Active User",
        backgroundColor: [
          "rgba(129, 107, 255, 0.2)",
          "rgba(129, 107, 255, 0.2)",
          "rgba(129, 107, 255, 0.2)",
          "rgba(129, 107, 255, 0.2)",
          "rgba(129, 107, 255, 0.2)",
          "rgba(129, 107, 255, 0.2)",
          "rgb(129, 107, 255)",
        ],
        barPercentage: 0.7,
        categoryPercentage: 0.7,
        data: [7200, 8200, 7800, 9500, 5500, 9200, 9690],
      },
    ],
  };
  
  var totalBalance = {
    labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
    dataUnit: "USD",
    stacked: true,
    datasets: [
      {
        label: "Active User",
        backgroundColor: [
          "rgba(85, 155, 251, 0.2)",
          "rgba(85, 155, 251, 0.2)",
          "rgba(85, 155, 251, 0.2)",
          "rgba(85, 155, 251, 0.2)",
          "rgba(85, 155, 251, 0.2)",
          "rgba(85, 155, 251, 0.2)",
          "rgb(85, 155, 251)",
        ],
        barPercentage: 0.7,
        categoryPercentage: 0.7,
        data: [6000, 8200, 7800, 9500, 5500, 9200, 9690],
      },
    ],
  };
</script>

<template>
  <Layout title="Invest Dashboard">
    <PageHead>
        <PageHeadGroup>
          <PageHeadTitle>Investment Dashboard</PageHeadTitle>
          <PageHeadSubTitle>Welcome to Crypto Invest Dashboard</PageHeadSubTitle>
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
                  <Menu as="div" class="inline-flex relative" v-slot="{open}">
                    <MenuButton as='div' class="inline-flex" :class="{'active': open}" ref="dropdownToggle">
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
        <div class="col-span-12 md:col-span-4">
          <StatusCard 
            title="Total Deposit"
            tooltip="Total Deposit"
            totalAmount="49,595.34"
            thisMonthAmount="2,940.59"
            thisWeekAmount="1,259.28"
            :change="1.93"
            :chart="totalDeposit"
          />
        </div>
        <div class="col-span-12 md:col-span-4">
          <StatusCard 
            title="Total Withdraw"
            tooltip="Total Withdraw"
            totalAmount="49,595.34"
            thisMonthAmount="2,940.59"
            thisWeekAmount="1,259.28"
            :change="-1.93"
            :chart="totalWithdraw"
          />
        </div>
        <div class="col-span-12 md:col-span-4">
          <StatusCard 
            title="Balance in Account"
            tooltip="Total Balance in Account"
            totalAmount="79,358.50"
            thisMonthAmount="2,940.59"
            thisWeekAmount="1,259.28"
            :chart="totalBalance"
          />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <InvestmentOverviewCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <TopPlanCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <RecentActivitiesCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-4">
          <RecentNotificationsCard />
        </div>
        <div class="col-span-12 2xl:col-span-8">
          <RecentInvestmentCard />
        </div>
    </div>
  </Layout>
</template>
