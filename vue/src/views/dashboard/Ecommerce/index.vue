<script setup>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, Icon } from '@/components'

import StatusCard from "./partials/StatusCard.vue"
import OverviewCard from "./partials/OverviewCard.vue"
import OrderStatisticsCard from "./partials/OrderStatisticsCard.vue"
import StoreStatisticsCard from "./partials/StoreStatisticsCard.vue"
import RecentOrdersCard from "./partials/RecentOrdersCard.vue"
import TopProductsCard from "./partials/TopProductsCard.vue"

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

const todayOrders = {
    labels: [
      "12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM",
    ],
    dataUnit: "Orders",
    lineTension: 0.3,
    datasets: [
      {
        label: "Orders",
        color: "#854fff",
        borderWidth: 2,
        borderColor: "#854fff",
        lineTension: 0.3,
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#854fff",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        backgroundColor: "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110],
      },
    ],
};

const todayRevenue = {
    labels: [
      "12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM",
    ],
    dataUnit: "USD",
    lineTension: 0.3,
    datasets: [
      {
        label: "Revenue",
        color: "#33d895",
        borderWidth: 2,
        borderColor: "#33d895",
        lineTension: 0.3,
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#33d895",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        backgroundColor: "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110],
      },
    ],
};
  
const todayCustomers = {
    labels: [
        "12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM",
    ],
    dataUnit: "Customers",
    lineTension: 0.3,
    datasets: [
        {
        label: "Customers",
        color: "#ff63a5",
        borderWidth: 2,
        borderColor: "#ff63a5",
        lineTension: 0.3,
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#ff63a5",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        backgroundColor: "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110],
        },
    ],
};

const todayVisitors = {
    labels: [
        "12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM",
    ],
    dataUnit: "Visitors",
    lineTension: 0.3,
    datasets: [
        {
        label: "Visitors",
        color: "#559bfb",
        borderWidth: 2,
        borderColor: "#559bfb",
        lineTension: 0.3,
        pointBorderColor: "transparent",
        pointBackgroundColor: "transparent",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#559bfb",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 4,
        backgroundColor: "transparent",
        data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110],
        },
    ],
};

</script>

<template>
  <Layout title="Ecommerce Dashboard">
    <PageHead>
        <PageHeadGroup>
          <PageHeadTitle>Ecommerce Dashboard</PageHeadTitle>
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
                    <Button href="#link" @click="(e)=> e.preventDefault()" size="rg" variant="primary">
                        <Icon class="text-xl/4.5" name="reports" />
                        <span class="ms-3">Reports</span>
                    </Button>
                </li>
            </ul>
          </PageHeadOption>
        </PageHeadGroup>
    </PageHead>
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
            <StatusCard 
              title="Today Orders" 
              count="1,945"
              up="4.63%"
              :chart="todayOrders"
            />
        </div>
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
            <StatusCard 
              title="Today Revenue" 
              count="$2,338"
              down="2.34%"
              :chart="todayRevenue"
            />
        </div>
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
            <StatusCard 
              title="Today Customers" 
              count="847"
              up="4.63%"
              :chart="todayCustomers"
            />
        </div>
        <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
            <StatusCard 
              title="Today Visitors" 
              count="23,485"
              down="2.34%"
              :chart="todayVisitors"
            />
        </div>
        <div class="col-span-12 2xl:col-span-6">
            <OverviewCard/>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <OrderStatisticsCard />
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <StoreStatisticsCard />
        </div>
        <div class="col-span-12 2xl:col-span-8">
            <RecentOrdersCard />
        </div>
        <div class="col-span-12 md:col-span-8 lg:col-span-6 2xl:col-span-4">
            <TopProductsCard />
        </div>
    </div>
  </Layout>
</template>
