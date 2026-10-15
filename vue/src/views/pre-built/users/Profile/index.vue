<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import SimpleBar from 'simplebar-vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import Social from './Social.vue';
import Security from './Security.vue';
import Activity from './Activity.vue';
import Notification from './Notification.vue';
import Personal from './Personal.vue';

const showPageAside = ref(false);

const selectedTab = ref(0);

function changeTab(index) {
    selectedTab.value = index;
}
</script>

<template>
    <Layout title="Profile">
        <div
            class="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <TabGroup
                as="div"
                class="relative flex"
                :selectedIndex="selectedTab"
                @change="changeTab"
            >
                <div
                    id="pageAside"
                    :class="{
                        'peer fixed start-0 top-0 z-[999] w-[300px] max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink-0 -translate-x-full border-e border-gray-300 bg-white transition-transform duration-500 max-lg:min-h-screen lg:static lg:transform-none lg:bg-transparent lg:transition-none 2xl:w-[380px] rtl:translate-x-full lg:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none': true,
                        active: showPageAside,
                    }"
                >
                    <SimpleBar
                        class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]"
                    >
                        <div
                            class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <Avatar
                                    size="rg"
                                    variant="primary"
                                    rounded
                                    text="AB"
                                />
                                <div class="ms-4 flex flex-col">
                                    <span
                                        class="text-sm font-bold text-slate-700 dark:text-white"
                                        >Abu Bin Ishtiyak</span
                                    >
                                    <span class="mt-1 text-xs text-slate-400"
                                        >info@softnio.com</span
                                    >
                                </div>
                                <Dropdown
                                    class="ms-auto -me-2"
                                    placement="bottom-end"
                                    rtlPlacement="bottom-start"
                                    :offset="[-14, -8]"
                                    :rtlOffset="[14, -8]"
                                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                >
                                    <template #button>
                                        <ButtonZoom size="sm">
                                            <Icon
                                                class="text-xl/4.5"
                                                name="more-v"
                                            />
                                        </ButtonZoom>
                                    </template>
                                    <template #content>
                                        <ul class="py-2">
                                            <li>
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <Icon
                                                        class="w-7 text-start text-lg leading-none opacity-80"
                                                        name="camera-fill"
                                                    />
                                                    <span>Change Photo</span>
                                                </MenuItem>
                                            </li>
                                            <li>
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <Icon
                                                        class="w-7 text-start text-lg leading-none opacity-80"
                                                        name="edit-fill"
                                                    />
                                                    <span>Update Profile</span>
                                                </MenuItem>
                                            </li>
                                        </ul>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>
                        <div
                            class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                        >
                            <h6
                                class="text-xxs mb-3 leading-tight font-bold tracking-widest whitespace-nowrap text-slate-400 uppercase"
                            >
                                Nio Wallet Account
                            </h6>
                            <div
                                class="text-primary-600 pb-2 text-2xl leading-none"
                            >
                                12.395769
                                <small class="text-base font-normal">BTC</small>
                            </div>
                            <div class="text-xs text-slate-400">
                                Locked
                                <span class="text-slate-600 dark:text-slate-400"
                                    >0.344939 <span>BTC</span></span
                                >
                            </div>
                        </div>
                        <div class="relative">
                            <TabList as="ul" class="py-3 text-start">
                                <li>
                                    <Tab
                                        @click="() => (showPageAside = false)"
                                        class="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                    >
                                        <Icon
                                            class="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                            name="user-fill-c"
                                        />
                                        <span>Personal Infomation</span>
                                        <em
                                            class="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"
                                        ></em>
                                    </Tab>
                                </li>
                                <li>
                                    <Tab
                                        @click="() => (showPageAside = false)"
                                        class="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                    >
                                        <Icon
                                            class="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                            name="bell-fill"
                                        />
                                        <span>Notifications</span>
                                        <em
                                            class="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"
                                        ></em>
                                    </Tab>
                                </li>
                                <li>
                                    <Tab
                                        @click="() => (showPageAside = false)"
                                        class="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                    >
                                        <Icon
                                            class="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                            name="activity-round-fill"
                                        />
                                        <span>Account Activity</span>
                                        <em
                                            class="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"
                                        ></em>
                                    </Tab>
                                </li>
                                <li>
                                    <Tab
                                        @click="() => (showPageAside = false)"
                                        class="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                    >
                                        <Icon
                                            class="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                            name="lock-alt-fill"
                                        />
                                        <span>Security Settings</span>
                                        <em
                                            class="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"
                                        ></em>
                                    </Tab>
                                </li>
                                <li>
                                    <Tab
                                        @click="() => (showPageAside = false)"
                                        class="group hover:text-primary-600 ui-selected:text-primary-600 flex w-full items-center px-5 py-3 text-sm leading-5 font-medium text-slate-600 transition-all duration-300 outline-none sm:px-6 sm:py-4"
                                    >
                                        <Icon
                                            class="group-hover:text-primary-600 ui-selected:text-primary-600 w-8 text-start text-lg leading-5 text-slate-400 opacity-80 transition-all duration-300"
                                            name="grid-add-fill-c"
                                        />
                                        <span>Connected with Social</span>
                                        <em
                                            class="ni ni-chevron-right ms-auto -me-1 text-base leading-none font-medium rtl:-scale-x-100"
                                        ></em>
                                    </Tab>
                                </li>
                            </TabList>
                        </div>
                    </SimpleBar>
                </div>
                <div
                    @click="() => (showPageAside = false)"
                    class="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
                ></div>
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
