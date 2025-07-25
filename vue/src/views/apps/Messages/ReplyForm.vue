<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities'

</script>
<template>
    <div class="border-t sm:border border-gray-200 dark:border-gray-800 sm:rounded sm:mt-2 sm:mx-9 lg:mx-10 sm:mb-9 lg:mb-10">
        <TabGroup>
            <div class="flex items-center justify-between px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
                <TabList as="ul" class="tab-nav flex flex-wrap font-heading text-sm">
                    <li class="tab-item pe-5 last:pe-0">
                        <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 outline-none">Reply</Tab>
                    </li>
                    <li class="tab-item pe-5 last:pe-0">
                        <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600 outline-none" >Private Note</Tab>
                    </li>
                </TabList>
                <div class="flex items-center">
                    <div class="text-slate-400 me-3">Reply as:</div>
                    <Avatar variant="purple" size="xs" rounded text="IH" />
                </div>
            </div>
            <TabPanels class="tab-content">
                <TabPanel class="tab-panel" id="tabItem1">
                    <div class="nk-reply-form-editor">
                        <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-2 px-5 sm:px-6">
                            <textarea class="block w-full text-sm leading-4.5 px-0 pt-3 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
                        </div>
                        <div class="flex justify-between p-5 sm:py-4 sm:px-6">
                            <ul class="inline-flex items-center gap-1.5">
                                <li class="me-2">
                                    <Button size="rg" variant="primary" type="submit">Reply</Button>
                                </li>
                                <li>
                                    <Dropdown placement="top-start" rtlPlacement="top-end" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                        <template #button>
                                            <button v-nk-tooltip="{placement:'top', content:'Template'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide">
                                                <Icon class="text-base/none" name="hash" />
                                            </button>
                                        </template>
                                        <template #content>
                                            <ul class="py-2">
                                                <li>
                                                    <h6 class="relative px-5 py-2.5 flex items-center text-xs leading-5 text-slate-400">Quick Insert</h6>
                                                </li>
                                                <li>
                                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                        <span>Thank you message</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                        <span>Your issues solved</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                        <span>Thank you message</span>
                                                    </MenuItem>
                                                </li>
                                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                                <li>
                                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                        <Icon class="text-start text-lg leading-none w-7" name="file-plus" />
                                                        <span>Save as Template</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                        <Icon class="text-start text-lg leading-none w-7" name="notes-alt" />
                                                        <span>Manage Template</span>
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </li>
                                <li>
                                    <a v-nk-tooltip="{placement:'top', content:'Upload Attachment'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#link" @click="(e)=> e.preventDefault()">
                                        <Icon class="text-base/none" name="clip-v" />
                                    </a>
                                </li>
                                <li>
                                    <a v-nk-tooltip="{placement:'top', content:'Insert Emoji'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#link" @click="(e)=> e.preventDefault()">
                                        <Icon class="text-base/none" name="happy" />
                                    </a>
                                </li>
                                <li>
                                    <a v-nk-tooltip="{placement:'top', content:'Upload Images'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#link" @click="(e)=> e.preventDefault()">
                                        <Icon class="text-base/none" name="img" />
                                    </a>
                                </li>
                            </ul>
                            <Dropdown class="ms-auto -me-2" placement="top-end" rtlPlacement="top-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                <template #button>
                                    <ButtonZoom size="sm">
                                        <Icon class="text-xl" name="more-v" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <span>Another Option</span>
                                            </MenuItem>
                                        </li>
                                        <li class="active">
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <span>More Option</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </TabPanel>
                <TabPanel class="tab-panel" id="tabItem2">
                    <div class="nk-reply-form-editor">
                        <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-2 px-5 sm:px-6">
                            <textarea class="block w-full text-sm leading-4.5 px-0 pt-3 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Type your private note, that only visible to internal team."></textarea>
                        </div>
                        <div class="flex justify-between p-5 sm:py-4 sm:px-6">
                            <ul class="inline-flex items-center gap-1.5">
                                <li class="me-2">
                                    <Button size="rg" variant="primary" type="submit">Add Note</Button>
                                </li>
                                <li>
                                    <a  v-nk-tooltip="{placement:'top', content:'Upload Attachment'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#link" @click="(e)=> e.preventDefault()">
                                        <Icon class="text-base/none" name="clip-v" />
                                    </a>
                                </li>
                            </ul>
                            <Dropdown class="ms-auto -me-2" placement="top-end" rtlPlacement="top-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                <template #button>
                                    <ButtonZoom size="sm">
                                        <Icon class="text-xl" name="more-v" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <span>Another Option</span>
                                            </MenuItem>
                                        </li>
                                        <li class="active">
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <span>More Option</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </div>
                    </div>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>
