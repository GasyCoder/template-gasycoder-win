<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import SimpleBar from 'simplebar-vue';
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';
import Social from './Social.vue';
import Security from './Security.vue';
import Activity from './Activity.vue';
import Notification from './Notification.vue';
import Personal from './Personal.vue';

const showPageAside = ref(false);

const selectedTab = ref(0)

function changeTab(index) {
  selectedTab.value = index
}
</script>

<template>
  <Layout title="Profile">
    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
      <TabGroup as="div" class="relative flex" :selectedIndex="selectedTab" @change="changeTab">
          <div id="pageAside" :class="{'peer min-w-[260px] max-w-[calc(100%-2.5rem)] w-[300px] 2xl:w-[380px] max-lg:min-h-screen bg-white dark:bg-gray-950 lg:bg-transparent border-e border-gray-300 dark:border-gray-900 flex-shrink-0 fixed lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none': true, 'active': showPageAside}">
              <SimpleBar class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]" >
                  <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                      <div class="flex items-center">
                          <Avatar size="rg" variant="primary" rounded text="AB" />
                          <div class="ms-4 flex flex-col">
                              <span class="text-sm font-bold text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                              <span class="text-xs text-slate-400 mt-1">info@softnio.com</span>
                          </div>
                          <Dropdown class="ms-auto -me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                              <ButtonZoom size="sm">
                                  <Icon class="text-xl/4.5" name="more-v" />
                              </ButtonZoom>
                            </template>
                            <template #content>
                              <ul class="py-2">
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-lg text-start leading-none w-7 opacity-80" name="camera-fill" />
                                          <span>Change Photo</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-lg text-start leading-none w-7 opacity-80" name="edit-fill" />
                                          <span>Update Profile</span>
                                      </MenuItem>
                                  </li>
                              </ul>
                            </template>
                          </Dropdown>
                      </div>
                  </div>
                  <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                      <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-widest leading-tight mb-3">Nio Wallet Account </h6>
                      <div class="text-2xl leading-none pb-2 text-primary-600">12.395769 <small class="font-normal text-base">BTC</small></div>
                      <div class="text-xs text-slate-400">Locked <span class="text-slate-600 dark:text-slate-400">0.344939 <span>BTC</span></span></div>
                  </div>
                  <div class="relative">
                      <TabList as="ul" class="py-3 text-start">
                          <li>
                              <Tab @click="()=> showPageAside = false" class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300 w-full outline-none">
                                  <Icon class="text-lg w-8 text-start leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300" name="user-fill-c" />
                                  <span>Personal Infomation</span>
                                  <em class="text-base font-medium ms-auto leading-none rtl:-scale-x-100 -me-1 ni ni-chevron-right"></em>
                              </Tab>
                          </li>
                          <li>
                              <Tab @click="()=> showPageAside = false" class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300 w-full outline-none">
                                  <Icon class="text-lg w-8 text-start leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300" name="bell-fill" />
                                  <span>Notifications</span>
                                  <em class="text-base font-medium ms-auto leading-none rtl:-scale-x-100 -me-1 ni ni-chevron-right"></em>
                              </Tab>
                          </li>
                          <li>
                              <Tab @click="()=> showPageAside = false" class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300 w-full outline-none">
                                  <Icon class="text-lg w-8 text-start leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300" name="activity-round-fill" />
                                  <span>Account Activity</span>
                                  <em class="text-base font-medium ms-auto leading-none rtl:-scale-x-100 -me-1 ni ni-chevron-right"></em>
                              </Tab>
                          </li>
                          <li>
                              <Tab @click="()=> showPageAside = false" class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300 w-full outline-none">
                                  <Icon class="text-lg w-8 text-start leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300" name="lock-alt-fill" />
                                  <span>Security Settings</span>
                                  <em class="text-base font-medium ms-auto leading-none rtl:-scale-x-100 -me-1 ni ni-chevron-right"></em>
                              </Tab>
                          </li>
                          <li>
                              <Tab @click="()=> showPageAside = false" class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300 w-full outline-none">
                                  <Icon class="text-lg w-8 text-start leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 ui-selected:text-primary-600 transition-all duration-300" name="grid-add-fill-c" />
                                  <span>Connected with Social</span>
                                  <em class="text-base font-medium ms-auto leading-none rtl:-scale-x-100 -me-1 ni ni-chevron-right"></em>
                              </Tab>
                          </li>
                      </TabList>
                  </div>
              </SimpleBar>
          </div>
          <div @click="()=> showPageAside = false" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
          <div class="flex-grow">
              <TabPanels class="tab-content p-5 sm:p-10">
                  <TabPanel>
                      <Personal v-model:pageAside="showPageAside" />
                  </TabPanel>
                  <TabPanel>
                      <Notification v-model:pageAside="showPageAside" />
                  </TabPanel>
                  <TabPanel>
                      <Activity v-model:pageAside="showPageAside" />
                  </TabPanel>
                  <TabPanel>
                      <Security v-model:pageAside="showPageAside" />
                  </TabPanel>
                  <TabPanel>
                      <Social v-model:pageAside="showPageAside" />
                  </TabPanel>
              </TabPanels>
          </div>
      </TabGroup>
  </div>
  </Layout>
</template>
