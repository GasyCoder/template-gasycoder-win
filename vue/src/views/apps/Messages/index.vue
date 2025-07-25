<script setup>
import { ref, watch, onMounted } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';
import Profile from './Profile.vue'
import ReplyForm from './ReplyForm.vue'
import ReplyMessages from './ReplyMessages.vue'
import { useMessageStore } from '@/stores/messages'
const messages = useMessageStore()

const showProfile = ref(true);
const showSearch = ref(false);
const showMessage = ref('1');

const message = ref(null);

function selectMessage(selected) {
   return messages.data.filter((message) => message.id == selected)[0]
}


onMounted(()=> {

    message.value =  selectMessage(showMessage.value);

    const handleAside = () => {
        if (window.innerWidth < 1536) {
          showProfile.value = false;
        }else{
          showProfile.value = true;
        }
    }

    handleAside();
    window.addEventListener('resize', handleAside);
    return () => {
      window.removeEventListener('resize', handleAside);
    };
})

watch(() => showMessage.value, () => {
  message.value =  selectMessage(showMessage.value);
})

</script>

<template>
  <Layout title="Messages - Support Ticket">
    <div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
        <div class="w-full lg:w-[320px] 2xl:w-[380px] lg:border-e lg:border-gray-200 dark:border-gray-800 overflow-hidden max-h-full relative flex flex-col flex-shrink-0 rounded-s bg-slate-50 dark:bg-gray-900 bg-opacity-70">
            <TabGroup>
                <div class="relative border-b border-gray-200 dark:border-gray-800 px-5 sm:px-8 lg:px-7 bg-slate-50 dark:bg-slate-900 z-[2] rounded-ss">
                    <TabList as="ul" class="flex -mx-3">
                        <li class="px-3 group/navitem">
                            <Tab class="inline-flex relative text-slate-400 hover:text-primary-600 ui-selected:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 ui-selected:after:opacity-100 outline-none" href="#link" @click="(e)=> e.preventDefault()">Active</Tab>
                        </li>
                        <li class="px-3 group/navitem">
                            <Tab class="inline-flex relative text-slate-400 hover:text-primary-600 ui-selected:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 ui-selected:after:opacity-100 outline-none" href="#link" @click="(e)=> e.preventDefault()">Closed</Tab>
                        </li>
                        <li class="px-3 group/navitem">
                            <Tab class="inline-flex relative text-slate-400 hover:text-primary-600 ui-selected:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 ui-selected:after:opacity-100 outline-none" href="#link" @click="(e)=> e.preventDefault()">Stared</Tab>
                        </li>
                        <li class="px-3 group/navitem">
                            <Tab class="inline-flex relative text-slate-400 hover:text-primary-600 ui-selected:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 ui-selected:after:opacity-100 outline-none" href="#link" @click="(e)=> e.preventDefault()">All</Tab>
                        </li>
                        <li class="px-3 group/navitem ms-auto">
                            <button
                                @click="()=> {
                                    showSearch = true
                                }"
                                class="inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100">
                                <Icon class="text-lg leading-6" name="search" />
                            </button>
                        </li>
                    </TabList>
                    <div :class="{'absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center': true, 'active' : showSearch}" id="searchForm">
                        <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                            <button 
                                @click="()=> {
                                    showSearch = false
                                }"
                                class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                                <Icon class="text-lg/6 rtl:-scale-x-100" name="arrow-left" />
                            </button>
                            <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autoComplete="off" />
                            <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300 -me-px">
                                <Icon class="text-lg/6" name="search" />
                            </button>
                        </div>
                    </div>
                </div>
                <SimpleBar class="h-full max-h-full overflow-auto">
                  <div v-for="(item,index) in messages.data" @click="()=> { showMessage = item.id }" :key="index" :class="{'group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default' : true, 'is-unread' : item.unread, 'current' : showMessage == item.id}" >
                        <Avatar v-if="item.image" size="rg" rounded :img="item.image"/>
                        <Avatar v-else size="rg" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                        <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                            <div class="flex justify-between items-center">
                                <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                                    <span>{{item.name}}</span>
                                    <div v-if="item.closed" class="h-1.5 w-1.5 inline-block rounded-full bg-pink-400 ms-1"></div>
                                </div>
                                <div class="inline-flex items-center text-xs text-slate-400">
                                    <div v-if="item.attactchment" class="inline-flex"><em class="text-lg/none ni ni-clip-h"></em></div>
                                    <div class="ms-3">{{item.date}}</div>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2">
                                <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                                    <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">{{item.title}}</h6>
                                    <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">{{item.excerpt}}</p>
                                </div>
                                <div class="inline-flex flex-col text-center py-0.5">
                                    <div v-if="item.unread" class="unread">
                                        <span class="relative inline-flex rounded-sm px-1 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-3.5 tracking-snug whitespace-nowrap align-middle">{{item.unread}}</span>
                                    </div>
                                    <div :class="{'inline-flex relative group/asterisk cursor-pointer mt-auto' : true, 'active' : item.marked}">
                                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </SimpleBar>
            </TabGroup>
        </div>
        <div v-if="message" :class="{'conversation-body group/messagebody flex flex-col overflow-hidden flex-grow z-[5] transition-all duration-300 ease-in-out absolute inset-0 opacity-0 pointer-events-none lg:opacity-100 lg:pointer-events-auto [&.conversation-shown]:opacity-100 [&.conversation-shown]:pointer-events-auto lg:static bg-white dark:bg-gray-950 [&.profile-shown]:2xl:pe-[280px]' : true, 'conversation-shown' : showMessage, 'profile-shown' : showProfile}">
            <div class="relative border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:py-4 sm:px-9 lg:py-8">
                <h4 class="font-heading font-bold leading-tighter tracking-tight text-slate-700 dark:text-white text-2xl hidden lg:block mb-2 sm:mb-4 line-clamp-1">{{message.title}}</h4>
                <div class="flex items-center justify-between">
                    <div class="hidden lg:block">
                        <ul class="flex flex-wrap gap-6">
                            <li>
                                <span class="inline-flex items-center text-slate-400 gap-2">
                                    <Icon class="text-sm/none text-primary-600" name="flag-fill"></Icon> 
                                    <span>Technical Problem</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:hidden -ms-2">
                        <ButtonZoom @click="()=> {showMessage = null}">
                            <Icon class="text-xl rtl:-scale-x-100" name="arrow-left" />
                        </ButtonZoom>
                    </div>
                    <ul class="flex gap-2">
                        <li>
                            <Button size="sm" variant="light-pale-outline">
                                <Icon class="text-base leading-4.5" name="check" />
                                <span class="ms-3">Mark as Closed</span>
                            </Button>
                        </li>
                        <li class="lg:hidden">
                            <Button @click="()=> { showProfile = !showProfile }" size="sm" variant="light" class="bg-white" icon>
                                <Icon class="text-base" name="info-i" />
                            </Button>
                        </li>
                        <li>
                          <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                              <template #button>
                                <Button size="sm" variant="light" class="bg-white" icon>
                                    <Icon class="text-lg" name="more-h" />
                                </Button>
                              </template>
                              <template #content>
                                <ul class="p-1">
                                    <li class="rounded">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="user-add" />
                                            <span>Assign To Member</span>
                                        </MenuItem>
                                    </li>
                                    <li class="rounded">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="archive" />
                                            <span>Move to Archive</span>
                                        </MenuItem>
                                    </li>
                                    <li class="rounded">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="done" />
                                            <span>Mark as Close</span>
                                        </MenuItem>
                                    </li>
                                </ul>
                              </template>
                          </Dropdown>
                        </li>
                    </ul>
                </div>
                <button 
                    @click="()=> { showProfile = !showProfile }"
                    class="hidden lg:flex me-13 group-[.profile-shown]/messagebody:me-0 group-[.profile-shown]/messagebody:-rotate-180 h-9 w-9 items-center justify-center border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-full z-[2] 2xl:z-[200] text-slate-400 absolute -bottom-4.5 -end-4.5 transition-all duration-300 ease-in-out">
                    <Icon class="text-lg/none rtl:-scale-x-100" name="arrow-left" />
                </button>
            </div>
            <SimpleBar class="h-full max-h-full overflow-auto">
                <ReplyMessages :data="message"> </ReplyMessages>
                <ReplyForm></ReplyForm>
            </SimpleBar>
            <Profile v-model:show="showProfile" :data="message" />
        </div>
        <div v-else class='flex flex-col justify-center items-center flex-grow bg-white dark:bg-gray-950'>
            <div class='h-16 w-16 rounded-full bg-gray-100 dark:bg-gray-1000 text-slate-700 dark:text-white flex items-center justify-center mb-3'><Icon class="text-2xl" name="chat"/></div>
            <div class='text-slate-600 dark:text-slate-200 text-lg'>Select a Message</div>
        </div>
    </div>
  </Layout>
</template>
