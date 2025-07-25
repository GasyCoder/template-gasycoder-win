<script setup>
import { Card, CardBody, Icon} from '@/components'
import { Tab, TabGroup, TabList, TabPanels, TabPanel  } from '@headlessui/vue'
</script>
<template>
    <Card class="h-full">
        <CardBody class="pb-2 sm:pb-2">
            <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Investment Overview</h6>
            <p class="text-xs leading-5 text-slate-400">The investment overview of your platform. <a class="text-primary-500 hover:text-primary-600" href="#link" @click="(e)=> e.preventDefault()">All Investment</a></p>
        </CardBody>
        <TabGroup>
            <TabList as="ul" class="tab-nav flex flex-wrap border-b border-gray-300 dark:border-gray-900 px-5 sm:px-6">
                <li class="tab-item pe-5 last:pe-0">
                    <Tab class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">Overview</Tab>
                </li>
                <li class="tab-item pe-5 last:pe-0">
                    <Tab class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">This Year</Tab>
                </li>
                <li class="tab-item pe-5 last:pe-0">
                    <Tab class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 focus-visible:outline-none">All Time</Tab>
                </li>
            </TabList>
            <TabPanels class="tab-content p-5 sm:p-6">
                <TabPanel>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">56</span><span class="ms-1 text-sm text-green-600"><Icon name="arrow-long-up"></Icon>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                        <div class="flex">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">23</span><span class="ms-1 text-sm text-red-600"><Icon name="arrow-long-down"></Icon>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                    </div>
                </TabPanel>
                <TabPanel>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">89,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">96</span><span class="ms-1 text-sm text-green-600"><Icon name="arrow-long-up"></Icon>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">99,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                        <div class="flex">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">149,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">83</span><span class="ms-1 text-sm text-red-600"><Icon name="arrow-long-down"></Icon>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                    </div>
                </TabPanel>
                <TabPanel>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">249,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">556</span><span class="ms-1 text-sm text-green-600"><em class="ni ni-arrow-long-up"></em>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                        <div class="flex py-1.5">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">149,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                        <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                        <div class="flex">
                            <div class="w-3/5">
                                <div class="text-xl leading-tighter text-slate-700 dark:text-white">249,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                            </div>
                            <div class="w-2/5">
                                <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">223</span><span class="ms-1 text-sm text-red-600"><em class="ni ni-arrow-long-down"></em>1.93%</span></div>
                                <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                            </div>
                        </div>
                    </div>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </Card>
</template>