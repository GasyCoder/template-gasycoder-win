<script setup>
import { ref, watch, onMounted } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown, CheckBox, Badge, ButtonGroup } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';
import Aside from './Aside.vue'
import ReplyForm from './ReplyForm.vue'
import { useInboxStore } from '@/stores/inbox'
const inboxs = useInboxStore()

const pageAside = ref(false);
const showSearch = ref(false);
const showMessage = ref(null);

const message = ref(null);

function selectMessage(selected) {
   return inboxs.data.filter((message) => message.id == selected)[0]
}

onMounted(()=> {
    message.value =  selectMessage(showMessage.value);
    
    const handleAside = () => {
        if (window.innerWidth > 1023) {
          pageAside.value = false;
        }
    }

    handleAside();
    window.addEventListener('resize', handleAside);
})

watch(() => showMessage.value, () => {
  message.value =  selectMessage(showMessage.value);
})

</script>

<template>
  <Layout title="Inbox / Mails">
    <div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
        <Aside v-model:show="pageAside"> </Aside>
        <div class="flex-grow relative flex flex-col overflow-hidden flex-shrink bg-white dark:bg-gray-950">
            <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
                <ul class="flex items-center gap-0.75">
                    <li class="w-8 text-start">
                        <div class="flex">
                            <CheckBox size="sm" id="mid-all" />
                        </div>
                    </li>
                    <li class="hidden sm:block">
                        <ButtonZoom size="rg">
                            <Icon class="text-xl text-slate-600" name="undo" />
                        </ButtonZoom>
                    </li>
                    <li class="hidden sm:block">
                        <ButtonZoom size="rg">
                            <Icon class="text-xl text-slate-600" name="archived" />
                        </ButtonZoom>
                    </li>
                    <li>
                        <ButtonZoom size="rg">
                            <Icon class="text-xl text-slate-600" name="trash" />
                        </ButtonZoom>
                    </li>
                    <li>
                      <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]">
                          <template #button>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl/4.5 text-slate-600" name="more-v" />
                            </ButtonZoom>
                          </template>
                          <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                        <span>Move To</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="trash" />
                                        <span>Delete</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="archived" />
                                        <span>Archive</span>
                                    </MenuItem>
                                </li>
                            </ul>
                          </template>
                      </Dropdown>
                    </li>
                </ul>
                <ul class="flex items-center gap-0.75">
                    <li>
                      <ButtonZoom v-nk-tooltip="{placement:'top', content:'Prev Page'}" size="rg">
                          <Icon class="text-xl text-slate-600 rtl:-scale-x-100" name="arrow-left" />
                      </ButtonZoom>
                    </li>
                    <li>
                      <ButtonZoom v-nk-tooltip="{placement:'top', content:'Next Page'}" size="rg">
                          <Icon class="text-xl text-slate-600 rtl:-scale-x-100" name="arrow-right" />
                      </ButtonZoom>
                    </li>
                    <li class="lg:-me-1.5">
                        <ButtonZoom @click="()=> showSearch = !showSearch" size="rg">
                            <Icon class="text-xl text-slate-600" name="search" />
                        </ButtonZoom>
                    </li>
                    <li class="lg:hidden -me-1.5">
                        <ButtonZoom @click="()=> pageAside = !pageAside" size="rg">
                            <Icon class="text-xl text-slate-600" name="menu-alt-r" />
                        </ButtonZoom>
                    </li>
                </ul>
                <div :class="{'absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center': true, 'active' :showSearch}" id="searchForm">
                    <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                        <button @click="()=> showSearch = false" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                            <em class="text-xl leading-6 rtl:-scale-x-100 ni ni-arrow-left"></em>
                        </button>
                        <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autoComplete="off" />
                        <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                            <em class="text-xl leading-6 ni ni-search"></em>
                        </button>
                    </div>
                </div>
            </div>
            <SimpleBar class="flex flex-col max-h-full h-full overflow-auto" >
              <div v-for="(item,index) in inboxs.data" :key="index" :class="{'group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100' :true, 'is-unread' : item.unread }">
                  <button  @click="()=> showMessage = item.id" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                  <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                      <div class="flex">
                          <CheckBox size="sm" id={item.id} />
                      </div>
                  </div>
                  <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                      <div :class="{'inline-flex relative group/asterisk cursor-pointer': true, 'active' : item.favourite}">
                          <Icon class="text-lg/none text-slate-400" name="star" />
                          <Icon class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill" name="star-fill" />
                      </div>
                  </div>
                  <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                      <div class="flex items-center">
                          <Avatar v-if="item.user.image" size="rg" rounded :img="item.user.image"/>
                          <Avatar v-else size="rg" :variant="item.user.theme" rounded :text="toInitials(item.user.name)"/>
                          <div class="ms-4">
                              <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">{{item.user.name}}</span>
                          </div>
                      </div>
                  </div>
                  <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                      <div class="flex items-center">
                          <div v-if="item.badge" class="me-3 max-md:hidden"><Badge size="rg" :variant="item.badge.theme">{{item.badge.text}}</Badge></div>
                          <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                              <span class="inline text-slate-400">
                                  <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">{{item.message.subject}}</span> {{item.message.excerpt}}
                              </span>
                          </div>
                      </div>
                  </div>
                  <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden">
                      <a v-if="item.attachment" class="text-slate-500"> <Icon class="text-lg/none" name="clip-h" /></a>
                  </div>
                  <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                      <div class="text-sm text-slate-400">{{item.time}}</div>
                  </div>
                  <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                      <ul class="relative flex items-center justify-end md:-me-2">
                          <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <ButtonZoom v-nk-tooltip="{placement:'top', content:'Archive'}" size="sm">
                                <Icon class="text-base/4.5" name="archived" />
                            </ButtonZoom>
                          </li>
                          <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <ButtonZoom v-nk-tooltip="{placement:'top', content:'Delete'}" size="sm">
                                <Icon class="text-base/4.5" name="trash" />
                            </ButtonZoom>
                          </li>
                          <li>
                              <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                <template #button>
                                  <ButtonZoom size="sm" class="z-[1]">
                                      <Icon class="text-base/4.5" name="more-h" />
                                  </ButtonZoom>
                                </template>
                                <template #content>
                                  <ul class="py-2">
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                              <span>View</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <Icon class="text-start text-lg leading-none w-7 opacity-80" name="trash" />
                                              <span>Delete</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <Icon class="text-start text-lg leading-none w-7 opacity-80" name="archived" />
                                              <span>Archive</span>
                                          </MenuItem>
                                      </li>
                                  </ul>
                                </template>
                              </Dropdown>
                          </li>
                      </ul>
                  </div>
              </div>
            </SimpleBar>
            <div v-if="message" id="ibxDetails" :class="{'absolute inset-0 bg-white dark:bg-gray-950 z-[2] opacity-0 pointer-events-none invisible [&.active]:opacity-100 [&.active]:pointer-events-auto [&.active]:visible overflow-hidden flex flex-col' : true, 'active' : showMessage !== null}">
                <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
                    <ul class="flex items-center gap-0.75">
                        <li class="-ms-1.5">
                            <ButtonZoom size="rg" @click="()=> showMessage = null">
                                <Icon class="text-xl text-slate-600 rtl:-scale-x-100" name="arrow-left" />
                            </ButtonZoom>
                        </li>
                        <li>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl text-slate-600" name="archived" />
                            </ButtonZoom>
                        </li>
                        <li class="hidden sm:block">
                            <ButtonZoom size="rg">
                                <Icon class="text-xl text-slate-600" name="report" />
                            </ButtonZoom>
                        </li>
                        <li>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl text-slate-600" name="trash" />
                            </ButtonZoom>
                        </li>
                        <li>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl text-slate-600" name="label" />
                            </ButtonZoom>
                        </li>
                        <li>
                            <Dropdown class="ms-auto -me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                <template #button>
                                  <ButtonZoom size="rg">
                                      <Icon class="text-xl/4.5 text-slate-600" name="more-v" />
                                  </ButtonZoom>
                                </template>
                                <template #content>
                                  <ul class="py-2">
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Mark as unread</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Mark as not important</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Archive this message</span>
                                          </MenuItem>
                                      </li>
                                  </ul>
                                </template>
                            </Dropdown>
                        </li>
                    </ul>
                    <ul class="flex items-center gap-0.75">
                        <li>
                          <ButtonZoom v-nk-tooltip="{placement:'top', content:'Prev Page'}" size="rg">
                              <Icon class="text-xl text-slate-600" name="chevron-left" />
                          </ButtonZoom>
                        </li>
                        <li>
                          <ButtonZoom v-nk-tooltip="{placement:'top', content:'Next Page'}" size="rg">
                              <Icon class="text-xl text-slate-600 rtl:-scale-x-100" name="chevron-right" />
                          </ButtonZoom>
                        </li>
                        <li class="-me-1.5">
                            <ButtonZoom @click="()=> showSearch = !showSearch" size="rg">
                                <Icon class="text-xl text-slate-600" name="search" />
                            </ButtonZoom>
                        </li>
                    </ul>
                    <div :class="{'absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-100 transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center': true, 'active' : showSearch}" id="searchFormMessage">
                        <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                            <button  @click="()=> showSearch = false" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                                <em class="text-xl leading-6 rtl:-scale-x-100 ni ni-arrow-left"></em>
                            </button>
                            <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autoComplete="off" />
                            <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                                <em class="text-xl leading-6 ni ni-search"></em>
                            </button>
                        </div>
                    </div>
                </div>
                <SimpleBar class="h-full max-h-full overflow-auto" >
                    <div class="flex items-start justify-between pt-6 sm:pt-7 pb-8 px-5 sm:px-9 lg:px-7">
                        <div>
                            <h4 class="font-heading font-bold text-xl lg:text-2xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-3">{{message.message.subject}}</h4>
                            <ul class="flex flex-wrap gap-2">
                                <li class="inline-flex">
                                    <ButtonGroup>
                                        <Button variant="primary-pale" size="xs">Business</Button>
                                        <Button variant="primary-pale" size="xs" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                                    </ButtonGroup>
                                </li>
                                <li class="inline-flex">
                                    <ButtonGroup>
                                        <Button variant="red-pale" size="xs">Management</Button>
                                        <Button variant="red-pale" size="xs" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                                    </ButtonGroup>
                                </li>
                                <li class="inline-flex">
                                    <ButtonGroup>
                                        <Button variant="cyan-pale" size="xs">Team</Button>
                                        <Button variant="cyan-pale" size="xs" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                                    </ButtonGroup>
                                </li>
                            </ul>
                        </div>
                        <ul class="flex items-center gap-1.5">
                            <li class="hidden sm:block">
                                <ButtonZoom size="rg">
                                    <Icon class="text-xl text-slate-600" name="printer" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom size="rg" class="group/asterisk-button">
                                    <div :class="{'inline-flex relative cursor-pointer group/asterisk': true, 'active' : message.favourite}">
                                        <Icon class="text-lg/none text-slate-400" name="star" />
                                        <Icon class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100  group-hover/asterisk-button:opacity-100 group-[.active]/asterisk-button:opacity-100" name="star-fill" />
                                    </div>
                                </ButtonZoom>
                            </li>
                        </ul>
                    </div>
                    <div class="relative">
                      <div v-for="(item,index) in message.message.reply" :key="index" class="relative px-5 sm:px-9 lg:px-7 pb-8 sm:pb-11 after:absolute after:bg-gray-200 after:dark:bg-gray-900 after:h-px after:bottom-4 sm:after:bottom-5.5 after:inset-x-5 sm:after:inset-x-9 last:after:hidden">
                          <div class="peer group/replyheader cursor-pointer flex items-center justify-between mb-2 gap-x-4" id="reply-01">
                              <div class="flex items-center flex-grow group-[.is-collapsed]/replyheader:overflow-hidden">
                                  <Avatar v-if="item.user.image" size="rg" rounded :img="item.user.image"/>
                                  <Avatar v-else size="rg" :variant="item.user.theme" rounded :text="toInitials(item.user.name)"/>
                                  <div class="ms-4 max-w-[calc(100%-theme(spacing.14))]">
                                      <div class="text-sm/6 font-bold text-slate-700 dark:text-white">{{item.user.name}} <span class="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden">14 Jan, 2020</span></div>
                                      <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[240px] sm:min-w-[280px]">
                                          <template #button>
                                            <button class="dropdown-toggle *:pointer-events-none peer inline-flex items-center relative z-[1]">
                                                <span>to Mildred</span>
                                                <Icon class="text-sm leading-none ms-1" name="chevron-down" />
                                            </button>
                                          </template>
                                          <template #content>
                                            <ul class="p-3">
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">from:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#link" @click="(e)=> e.preventDefault()">info@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">to:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#link" @click="(e)=> e.preventDefault()">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">bcc:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#link" @click="(e)=> e.preventDefault()">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">mailed-by:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#link" @click="(e)=> e.preventDefault()">softnio.com</a></span>
                                                </li>
                                            </ul>
                                          </template>
                                      </Dropdown>
                                      <div class="text-xs sm:text-sm leading-6 hidden group-[.is-collapsed]/replyheader:block text-slate-600 whitespace-nowrap overflow-hidden text-ellipsis max-sm:mt-0.5">I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</div>
                                  </div>
                              </div>
                              <ul class="flex items-center flex-shrink-0 cursor-default gap-1.5 -me-2">
                                  <li v-if="item.attachment" class="max-sm:hidden me-1.5"><Icon class="text-xl/none" name="clip-h" /></li>
                                  <li class="max-sm:hidden"><span class="me-4 text-slate-600">{{item.date}}</span></li>
                                  <li class="group-[.is-collapsed]/replyheader:hidden relative">
                                    <ButtonZoom v-nk-tooltip="{placement:'top', content:'Reply'}" size="rg">
                                        <Icon class="text-xl text-slate-600" name="curve-up-left" />
                                    </ButtonZoom>
                                  </li>
                                  <li class="group-[.is-collapsed]/replyheader:hidden dropdown relative">
                                      <Dropdown class="ms-auto -me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                        <template #button>
                                          <ButtonZoom size="rg">
                                              <Icon class="text-xl/4.5 text-slate-400 dark:text-slate-300" name="more-v" />
                                          </ButtonZoom>
                                        </template>
                                        <template #content>
                                          <ul class="py-2">
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80" name="reply-fill" />
                                                      <span>Reply to</span>
                                                  </MenuItem>
                                              </li>
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80" name="forward-arrow-fill" />
                                                      <span>Forward</span>
                                                  </MenuItem>
                                              </li>
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80" name="trash-fill" />
                                                      <span>Delete this</span>
                                                  </MenuItem>
                                              </li>
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80" name="report-fill" />
                                                      <span>Report Spam</span>
                                                  </MenuItem>
                                              </li>
                                          </ul>
                                        </template>
                                    </Dropdown>
                                  </li>
                              </ul>
                          </div>
                          <div class="ms-12 sm:ms-14 mt-5 mb-3 peer-[.is-collapsed]:hidden">
                              <div class="entry">
                                  <p v-for="(item,index) in item.message" :key="index">{{item}}</p>
                              </div>
                              <div v-if="item.attachment" class="rounded border border-gray-200 dark:border-gray-800 mt-7">
                                  <ul class="flex flex-wrap px-5 py-4 gap-x-8 gap-y-2">
                                    <li v-for="(aItem,aIndex) in item.attachment" :key="aIndex" class="w-[180px]">
                                        <a class="flex items-center w-full text-slate-600 dark:text-slate-300" href="#link" @click="(e)=> e.preventDefault()"><em class="text-2xl/none text-primary-600 me-4 ni ni-img"></em><span class="line-clamp-1">{{aItem.name}}</span></a>
                                    </li>
                                  </ul>
                                  <div class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 px-5 py-3 flex flex-wrap justify-between rounded-b">
                                      <span class="font-medium text-slate-700 dark:text-white text-sm">{{item.attachment.length}} files attached</span>
                                      <a class="inline-flex items-center text-sm/none font-medium whitespace-nowrap gap-3.5 group/link" href="#link" @click="(e)=> e.preventDefault()">
                                          <em class="text-lg/none text-primary-500 group-hover/link:text-primary-600 transition-all duration-300 ni ni-download"></em>
                                          <span class="text-slate-400 group-hover/link:text-primary-600 transition-all duration-300">Download All</span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <ReplyForm />
                </SimpleBar>
            </div>
        </div>
    </div>
  </Layout>
</template>
