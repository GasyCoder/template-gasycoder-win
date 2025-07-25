<script setup>
import { ref, watch, onMounted, onBeforeMount } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown, CheckBox, Badge, ButtonGroup, AvatarGroup } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';
import Profile from './Profile.vue'
import { useChatStore } from '@/stores/chats'
const chats = useChatStore()

const showProfile = ref(true);
const showChat = ref(null);
const showUploadOption = ref(false);
const chat = ref(null);

function selectChat(selected) {
   return chats.data.filter((chat) => chat.id == selected)[0]
}

onMounted(()=> {
    chat.value = selectChat(showChat.value);

    const handleAside = () => {
        if (window.innerWidth < 1536) {
            showProfile.value=false;
        }else{
            showProfile.value=true;
        }
    }

    handleAside();
    window.addEventListener('resize', handleAside);
    return () => {
    window.removeEventListener('resize', handleAside);
    };
})

onBeforeMount(()=> {
  const handlePreview = () => {
        if (window.innerWidth > 1023) {
        showChat.value = '1'
        }
    }
    handlePreview();
})

watch(() => showChat.value, () => {
  chat.value = selectChat(showChat.value);
})

</script>

<template>
  <Layout :title="'Chats'">
    <div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
        <div class="w-full lg:w-[320px] 2xl:w-[380px] lg:border-e lg:border-gray-200 dark:border-gray-800 overflow-hidden max-h-full relative flex flex-col flex-shrink-0 rounded-s">
            <div class="flex items-center justify-between pt-4.5 pb-4 px-5 md:px-7">
                <Dropdown placement="bottom-start" rtlPlacement="bottom-end" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                    <template #button>
                      <button class="dropdown-toggle *:pointer-events-none peer flex items-center">
                          <Avatar size="rg" rounded img="/images/avatar/b-sm.jpg" />
                          <div class="text-xl ms-4 text-slate-700 dark:text-white">Chats</div>
                          <Icon class="text-lg/none ms-4" name="chevron-down" />
                      </button>
                    </template>
                    <template #content>
                      <ul class="py-2">
                          <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                  <span>Contacts</span>
                              </MenuItem>
                          </li>
                          <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                  <span>Channels</span>
                              </MenuItem>
                          </li>
                          <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                          <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                  <span>Help</span>
                              </MenuItem>
                          </li>
                      </ul>
                    </template>
                </Dropdown>
                <ul class="flex items-center gap-3">
                    <li>
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                              <Button icon pill size="rg" variant="light">
                                  <Icon class="text-xl/none" name="setting-alt-fill" />
                              </Button>
                            </template>
                            <template #content>
                              <ul class="py-2">
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <span>Settings</span>
                                      </MenuItem>
                                  </li>
                                  <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <span>Message Requests</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <span>Archives Chats</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <span>Unread Chats</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <span>Group Chats</span>
                                      </MenuItem>
                                  </li>
                              </ul>
                            </template>
                        </Dropdown>
                    </li>
                    <li>
                        <Button icon pill size="rg" variant="light">
                            <Icon class="text-xl/none" name="edit-alt-fill" />
                        </Button>
                    </li>
                </ul>
            </div>
            <SimpleBar class="h-full max-h-full overflow-auto">
                <div class="px-5 md:px-7 pt-1 pb-7">
                    <div class="relative">
                        <div class="absolute h-9 w-9 top-0 start-0 flex items-center justify-center">
                            <Icon class="text-slate-400 text-base/none" name="search" />
                        </div>
                        <input type="text" class="block w-full text-xs/4.5 ps-10 pe-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-gray-100 dark:bg-gray-900 border border-gray-100 dark:border-gray-900 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed placeholder:text-slate-400 rounded-full transition-all" id="default-03" placeholder="Search by name" />
                    </div>
                </div>
                <div class="px-5 pb-7 lg:px-7">
                    <h6 class="font-bold text-xxs/tight tracking-widest text-slate-400 uppercase mb-3">Favorites</h6>
                    <ul class="flex overflow-x-auto gap-2.5 md:flex-wrap">
                        <li>
                            <a href="#link"  @click="(e)=> e.preventDefault()" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-full h-11 w-11 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-gray-700 hover:dark:bg-gray-700 hover:text-white hover:dark:text-white active:bg-gray-800 active:dark:bg-gray-800 active:text-white active:active:text-white transition-all duration-300">
                                <Icon class="text-2xl/4.5" name="plus" />
                            </a>
                        </li>
                        <li v-for="(item,index) in chats.fav" :key="index">
                            <a href="#link" @click="(e)=> e.preventDefault()">
                              <Avatar v-if="item.image" size="rg" rounded :img="item.image"/>
                              <Avatar v-else size="rg" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-2 lg:px-4">
                    <h6 class="font-bold text-xxs/tight tracking-widest text-slate-400 uppercase ms-3 mb-3">Messages</h6>
                    <ul>
                      <li v-for="(item,index) in chats.data" :key="index" :class="{'group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900': true, 'is-unread' : item.lastStatus == 'unread', 'current' : showChat == item.id}">
                          <a class="flex items-center w-full p-3 cursor-pointer" @click="()=> showChat = item.id" href="#link">
                            <template v-if="item.user?.length > 1">
                              <AvatarGroup variant="s2" size="rg">
                                <template v-for="(uItem,uIndex) in item.user.slice(0,2)" :key="uIndex">
                                    <Avatar v-if="uItem.image" rounded :img="uItem.image"/>
                                    <Avatar v-else :variant="uItem.theme" rounded :text="toInitials(uItem.name)"/>
                                </template>
                              </AvatarGroup> 
                            </template>
                            <template v-else>
                              <Avatar v-if="item.image" size="rg" rounded :img="item.image"/>
                              <Avatar v-else size="rg" :variant="item.theme" rounded :text="toInitials(item.name)"/>
                            </template>
                              
                              <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                  <div class="flex items-center justify-between">
                                      <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">{{item.name}}</div>
                                      <span class="text-xs text-slate-400">{{item.date}}</span>
                                  </div>
                                  <div class="flex items-center justify-between">
                                      <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]">
                                        <p>{{item.messages[item.messages.length - 1].chat[item.messages[item.messages.length - 1].chat.length-1]}}</p></div>
                                      <div v-if="item.lastStatus == 'delivered'" class="flex text-slate-400">
                                          <Icon class="text-sm/none" name="check-circle-fill"></Icon>
                                      </div>
                                      <div v-if="item.lastStatus == 'sent'" class="flex text-slate-400">
                                          <Icon class="text-sm/none" name="check-circle"></Icon>
                                      </div>
                                      <div v-if="item.lastStatus == 'unread'" class="flex text-primary-600">
                                          <Icon class="text-sm/none" name="bullet-fill"></Icon>
                                      </div>
                                  </div>
                              </div>
                          </a>
                          <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                              <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                  <template #button>
                                    <ButtonZoom size="rg">
                                        <Icon class="text-lg text-slate-600 dark:text-slate-300" name="more-h" />
                                    </ButtonZoom>
                                  </template>
                                  <template #content>
                                    <ul class="py-2">
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Mute</span>
                                          </MenuItem>
                                      </li>
                                      <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Hide</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Delete</span>
                                          </MenuItem>
                                      </li>
                                      <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Mark as Unread</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Ignore Messages</span>
                                          </MenuItem>
                                      </li>
                                      <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Block Messages</span>
                                          </MenuItem>
                                      </li>
                                  </ul>
                                  </template>
                              </Dropdown>
                          </div>
                      </li>
                    </ul>
                </div>
            </SimpleBar>
        </div>
        <div v-if="chat" :class="{'conversation-body group/messagebody flex flex-col overflow-hidden flex-grow z-[5] transition-all duration-300 ease-in-out absolute inset-0 opacity-0 pointer-events-none lg:opacity-100 lg:pointer-events-auto [&.conversation-shown]:opacity-100 [&.conversation-shown]:pointer-events-auto lg:static bg-white dark:bg-gray-950 [&.profile-shown]:2xl:pe-[365px]': true, 'profile-shown' : showProfile, 'conversation-shown' : showChat !== null}">
            <div class="relative flex items-center justify-between py-4 px-7 bg-white dark:bg-gray-950 border-b border-gray-200 dark:border-gray-800">
                <ul class="flex items-center -m-0.5 sm:-m-1.5">
                    <li class="p-0.5 sm:p-1.5 lg:hidden -ms-3">
                        <ButtonZoom size="rg" @click="()=> showChat = null">
                            <Icon class="text-xl/none rtl:-scale-x-100" name="arrow-left"></Icon>
                        </ButtonZoom>
                    </li>
                    <li class="p-0.5 sm:p-1.5">
                        <div class="flex items-center">
                            <template v-if="chat.user?.length > 1">
                              <AvatarGroup variant="s2" size="rg">
                                <template v-for="(uItem,uIndex) in chat.user.slice(0,2)" :key="uIndex">
                                    <Avatar v-if="uItem.image" rounded :img="uItem.image"/>
                                    <Avatar v-else :variant="uItem.theme" rounded :text="toInitials(uItem.name)"/>
                                </template>
                              </AvatarGroup> 
                            </template>
                            <template v-else>
                              <Avatar v-if="chat.image" size="rg" rounded :img="chat.image"/>
                              <Avatar v-else size="rg" :variant="chat.theme" rounded :text="toInitials(chat.name)"/>
                            </template>

                            <div class="ms-4">
                                <div class="font-bold text-sm text-slate-700 dark:text-white mb-1 line-clamp-1">{{chat.name}}</div>
                                <div class="text-xs text-slate-400"><span class="hidden sm:inline-block me-0.5">Active </span> 35m ago</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="flex items-center -m-0.5 sm:-m-1.5">
                    <li class="p-0.5 sm:p-1.5">
                        <ButtonZoom size="rg">
                            <Icon class="text-xl/none text-primary-600" name="call-fill"></Icon>
                        </ButtonZoom>
                    </li>
                    <li class="p-0.5 sm:p-1.5">
                        <ButtonZoom size="rg">
                            <Icon class="text-xl/none text-primary-600" name="video-fill"></Icon>
                        </ButtonZoom>
                    </li>
                    <li class="p-0.5 sm:p-1.5 hidden sm:block">
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                              <ButtonZoom size="rg">
                                  <Icon class="text-xl/none text-primary-600" name="setting-fill"></Icon>
                              </ButtonZoom>
                            </template>
                            <template #content>
                              <ul class="py-2">
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg/none w-7 opacity-80" name="archive"></Icon>
                                          <span>Make as Archive</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg/none w-7 opacity-80" name="cross-c"></Icon>
                                          <span>Remove Conversion</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg/none w-7 opacity-80" name="setting"></Icon>
                                          <span>More Options</span>
                                      </MenuItem>
                                  </li>
                              </ul>
                            </template>
                        </Dropdown>
                    </li>
                    <li class="p-0.5 sm:p-1.5 -me-3">
                        <ButtonZoom @click="()=> showProfile = !showProfile" size="rg" :class="{'active' : showProfile}">
                            <Icon class="text-xl/none text-primary-600" name="alert-circle-fill"></Icon>
                        </ButtonZoom>
                    </li>
                </ul>
            </div>
            <SimpleBar class="p-5 lg:px-7 bg-gray-100 dark:bg-gray-1000 bg-opacity-70 h-full max-h-full overflow-auto">
              <template v-for="(item,index) in chat.messages" :key="index">
                  
                      <div v-if="item.separator" class="overflow-hidden py-4 text-center"> <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute before:h-px before:bg-gray-300 before:dark:bg-gray-900 before:w-screen before:top-1/2 before:end-full after:absolute after:h-px after:bg-gray-300 after:dark:bg-gray-900 after:w-screen after:top-1/2 after:start-full"><span>{{item.separator.date}}</span></div> </div> 
                      
                      <div v-else :class="{'group/chat flex items-end -m-1 pt-2 first:pt-0': true, 'is-me': item.me, 'is-you':!item.me}">
                          <div v-if="!item.me" class="p-1 mb-6">
                            <Avatar v-if="chat.image" size="rg" rounded :img="chat.image"/>
                            <Avatar v-else size="rg" :variant="chat.theme" rounded :text="toInitials(chat.name)"/>
                          </div>
                          <div :class="{'p-1' : true, 'w-full' : item.me }">
                              <div class="chat-bubbles">
                                <div v-for="(cItem, cIndex) in item.chat" key={cIndex} :class="{'group/chatbubble flex items-center py-0.5': true,'flex-row-reverse' : item.me }">
                                    <div :class="{'px-4 py-2': true, 'bg-primary-600 text-white rounded-lg group-last/chatbubble:ltr:rounded-br-none  group-last/chatbubble:rtl:rounded-bl-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl' : item.me, 'bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr': !item.me }">
                                        {{cItem}}
                                    </div>
                                    <ul :class="{'flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100': true, 'flex-row-reverse': item.me }">
                                        <li class="hidden md:block">
                                            <ButtonZoom size="sm">
                                                <Icon class="text-base/none" name="reply-fill"></Icon>
                                            </ButtonZoom>
                                        </li>
                                        <li>
                                            <Dropdown :placement="item.me ? 'bottom-start' : 'bottom-end'" :rtlPlacement="item.me ? 'bottom-end' : 'bottom-start'" :offset="item.me ? [14, -8] : [-14, -8]" :rtlOffset="item.me ? [-14, -8] : [14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]">
                                              <template #button>
                                                <ButtonZoom size="sm">
                                                    <Icon class="text-base/none" name="more-h"></Icon>
                                                </ButtonZoom>
                                              </template>
                                              <template #content>
                                                <ul class="py-2">
                                                    <li class="sm:hidden">
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="reply-fill"></Icon><span>Reply</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="pen-alt-fill"></Icon> <span>Edit</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="trash-fill"></Icon> <span>Remove</span>
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                              </template>
                                          </Dropdown>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                              <ul :class="{'flex items-center pt-1 gap-3': true, 'justify-end' : item.me}">
                                  <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.date}}</li>
                              </ul>
                          </div>
                      </div>
              </template>
            </SimpleBar>
            <div class="flex items-center bg-white dark:bg-gray-950 py-4 px-5">
                <div class="relative z-[2] flex items-center -ms-1.5">
                    <ButtonZoom @click="()=> showUploadOption = !showUploadOption" size="sm"  :class="{'active' : showUploadOption}">
                        <Icon class="text-2xl/none text-primary-600" name="plus-circle-fill"></Icon>
                    </ButtonZoom>
                    <div :class="{'absolute start-full p-2 bg-white dark:bg-gray-950 hidden [&.active]:block': true, 'active' : showUploadOption }">
                        <ul class="flex items-center">
                            <li>
                                <a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#link"  @click="(e)=> e.preventDefault()">
                                    <Icon class="text-xl/none" name="img-fill"></Icon>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#link"  @click="(e)=> e.preventDefault()">
                                    <Icon class="text-xl/none" name="camera-fill"></Icon>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#link"  @click="(e)=> e.preventDefault()">
                                    <Icon class="text-xl/none" name="mic"></Icon>
                                </a>
                            </li>
                            <li>
                                <a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#link"  @click="(e)=> e.preventDefault()">
                                    <Icon class="text-xl/none" name="grid-sq"></Icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-grow px-2">
                    <div class="form-control-wrap">
                        <textarea class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" rows="1" id="default-textarea" placeholder="Type your message..."></textarea>
                    </div>
                </div>
                <ul class="flex items-center gap-1.5">
                    <li>
                        <ButtonZoom  size="sm">
                            <Icon class="text-xl/none text-primary-600" name="happyf-fill"></Icon>
                        </ButtonZoom>
                    </li>
                    <li>
                        <Button size="rg" icon pill variant="primary"><Icon class="text-xl/4.5" name="send-alt"></Icon></Button>
                    </li>
                </ul>
            </div>
            <Profile v-model:show="showProfile" :data="chat" />
        </div>
        <div v-else class='flex flex-col justify-center items-center flex-grow bg-gray-100 dark:bg-gray-1000'>
            <div class='h-16 w-16 rounded-full bg-white dark:bg-gray-950 text-slate-700 dark:text-white flex items-center justify-center mb-3'>
              <Icon class="text-2xl" name="chat" />
            </div>
            <div class='text-slate-600 dark:text-slate-200 text-lg'> Select a chat </div>
        </div>
    </div>
  </Layout>
</template>
