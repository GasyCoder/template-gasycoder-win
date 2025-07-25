<script setup>
import { ref, watch, onMounted } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Avatar, Button, ButtonZoom, Icon, Dropdown, CheckBox, Badge, ButtonGroup, AvatarGroup } from '@/components';
import { toInitials } from '@/utilities'
import SimpleBar from 'simplebar-vue';
import { TabGroup,TabList, Tab,TabPanels, TabPanel  } from '@headlessui/vue';

import Aside from './Aside.vue';
import Header from './Header.vue';
import QuickAccess from './QuickAccess.vue';
import UploadModal from './UploadModal.vue';
import FileDetailsModal from './FileDetailsModal.vue';
import FileCopyModal from './FileCopyModal.vue';
import FileMoveModal from './FileMoveModal.vue';
import FileShareModal from './FileShareMOdal.vue';

import { useIconStore } from '@/stores/icon'
const icons = useIconStore()

const pageAside = ref(false);
const showSearch = ref(false);
const showUploadModal = ref(false);
const showDetailsModal = ref(false);
const showShareModal = ref(false);
const showMoveModal = ref(false);
const showCopyModal = ref(false);

const files = [
    {
        id:1,
        icon: icons.data.folderSecureAlt,
        name : "UI Design",
        date: "Today",
        time: "08:29 AM",
        size: "4.5 MB",
        stared: false,
        type: 'folder',
    },
    {
        id:2,
        icon: icons.data.folderAlt,
        name : "Proposal",
        date: "Today",
        time: "08:29 AM",
        size: "4.5 MB",
        stared: true,
        type: 'folder',
    },
    {
        id:3,
        icon: icons.data.folderSharedAlt,
        name : "Projects",
        date: "Yesterday",
        time: "08:29 AM",
        size: "35 MB",
        stared: false,
        type: 'folder',
        owner:{name:"Iliash Hossain"},
        users:[
            {name:"Iliash Hossain", theme:"purple"},
            {name:"Abu Bin Ishityak", theme:"pink"},
            {name:"Ricardo Salazar", image:"/images/avatar/b-sm.jpg"},
        ]
    },
    {
        id:4,
        icon: icons.data.folderAlt,
        name : "2022 Projects",
        date: "03 May",
        time: "08:29 AM",
        size: "1.2 GB",
        stared: false,
        type: 'folder',
    },
    {
        icon: icons.data.fileSheetAlt,
        name : "Update Data",
        ext: "xlsx",
        date: "Yesterday",
        time: "08:29 AM",
        size: "235 KB",
        stared: false,
        type: 'file',
        owner:{name:"Abu Bin Ishityak"},
        users:[
            {name:"Ricardo Salazar", image:"/images/avatar/b-sm.jpg"},
            {name:"Iliash Hossain", theme:"purple"},
            {name:"Abu Bin Ishityak", theme:"pink"},
            {name: "Mildred Delga", image: "/images/avatar/c-sm.jpg",},
            {name: "Larry Hughes", theme: "primary"},
        ]
    },
    {
        id:5,
        icon: icons.data.fileZipAlt,
        name : "DashWind v.1.2",
        ext: "zip",
        date: "03 May",
        time: "08:29 AM",
        size: "235 KB",
        stared: false,
        type: 'file',
    },
    {
        id:6,
        icon: icons.data.fileZipAlt,
        name : "covstats v1.0",
        ext: "zip",
        date: "01 May",
        time: "08:29 AM",
        size: "235 KB",
        stared: false,
        type: 'file',
    },
    {
        id:7,
        icon: icons.data.fileDocAlt,
        name : "Quotation",
        ext: "doc",
        date: "06 Apr",
        time: "08:29 AM",
        size: "23 MB",
        stared: false,
        type: 'file',
    },
    {
        id:8,
        icon: icons.data.fileDocAlt,
        name : "Work-to-do",
        ext: "txt",
        date: "02 Apr",
        time: "08:29 AM",
        size: "23 MB",
        stared: false,
        type: 'file',
    },
    {
        id:9,
        icon: icons.data.fileMediaAlt,
        name : "DashWind-Crypto-v1",
        ext: "psd",
        date: "02 Apr",
        time: "08:29 AM",
        size: "23 MB",
        stared: false,
        type: 'file',
    },
]

onMounted(()=> {
  const handleAside = () => {
      if (window.innerWidth > 1023) {
        pageAside.value = false;
      }
  }

  handleAside();
  window.addEventListener('resize', handleAside);
  return () => {
    window.removeEventListener('resize', handleAside);
  };
})

</script>

<template>
  <Layout title="File Manager">
    <div class="border rounded-md bg-white dark:bg-gray-950 bg-opacity-40 border-gray-300 dark:border-gray-900 h-full">
        <div class="relative flex">
            <Aside v-model:show="pageAside"></Aside>
            <div class="flex-grow">
                <Header v-model:showUploadModal="showUploadModal" ></Header>
                <div class="h-full max-h-full overflow-auto py-4.5 px-5 sm:py-5 lg:p-7">
                    <div class="pb-4">
                        <div class="relative flex items-center justify-between">
                            <h3 class="font-heading font-bold text-2xl/tighter tracking-tight text-slate-700 dark:text-white">Files</h3>
                            <ul class="flex items-center gap-1.5 lg:hidden -me-1.5">
                                <li>
                                    <ButtonZoom size="rg" @click="()=> {
                                        showSearch = !showSearch;
                                    }">
                                        <Icon class="text-xl/none text-slate-400 dark:text-slate-300" name="search"></Icon>
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                        <template #button>
                                          <ButtonZoom size="rg">
                                              <Icon class="text-xl/none text-slate-400 dark:text-slate-300" name="plus" />
                                          </ButtonZoom>
                                        </template>
                                        <template #content>
                                          <ul class="py-2">
                                              <li>
                                                  <MenuItem as="template">
                                                      <button  @click="() => showUploadModal = true" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="upload-cloud"></Icon><span>Upload File</span>
                                                      </button>
                                                  </MenuItem>
                                              </li>
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80" name="file-plus"></Icon><span>Create File</span>
                                                  </MenuItem>
                                              </li>
                                              <li>
                                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                      <Icon class="text-start text-lg leading-none w-7 opacity-80 " name="folder-plus"></Icon><span>Create Folder</span>
                                                  </MenuItem>
                                              </li>
                                          </ul>
                                        </template>
                                    </Dropdown>
                                </li>
                                <li>
                                    <ButtonZoom size="rg" @click="()=> {
                                        pageAside = !pageAside;
                                    }">
                                        <Icon class="text-xl/none text-slate-400 dark:text-slate-300" name="menu-alt-r"></Icon>
                                    </ButtonZoom>
                                </li>
                            </ul>
                            <div :class="{'absolute inset-x-0 -inset-y-0.5 opacity-0 bg-white dark:bg-gray-950 transition-all duration-300 rounded-md pointer-events-none px-3 lg:hidden [&.active]:opacity-100 [&.active]:pointer-events-auto [&.active]:z-10': true, 'active': showSearch}" id="search">
                                <div class="relative w-full flex items-center">
                                    <button  @click="(e)=> {
                                        showSearch = false;
                                    }" class="inline-flex items-center justify-center h-9 w-9 text-slate-600 hover:text-red-600">
                                        <Icon class="text-lg/none rtl:-scale-x-100" name="arrow-left" />
                                    </button>
                                    <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search files, folders" />
                                    <button class="inline-flex items-center justify-center h-9 w-9 text-slate-600 hover:text-primary-600">
                                        <Icon class="text-lg/none" name="search" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-10 last:mb-0">
                        <QuickAccess />
                    </div>
                    <div class="mb-10 last:mb-0">
                        <TabGroup>
                            <div class="pb-3 relative flex justify-between items-center">
                                <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white">Browse Files</h6>
                                <TabList as="ul" class="tab-nav flex items-center gap-4">
                                    <li class="tab-item">
                                        <Tab class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 ui-selected:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300 outline-none">
                                            <em class="text-2xl/none ni ni-view-grid3-wd"></em>
                                        </Tab>
                                    </li>
                                    <li class="tab-item">
                                        <Tab class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 ui-selected:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300 outline-none">
                                            <em class="text-2xl/none ni ni-view-group-wd"></em>
                                        </Tab>
                                    </li>
                                    <li class="tab-item">
                                        <Tab class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 ui-selected:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300 outline-none">
                                            <em class="text-2xl/none ni ni-view-row-wd"></em>
                                        </Tab>
                                    </li>
                                </TabList>
                            </div>
                            <TabPanels class="tab-content">
                                <TabPanel class="tab-panel">
                                    <div class="flex items-center justify-between gap-3">
                                        <Dropdown placement="bottom-start" rtlPlacement="bottom-end" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                            <template #button>
                                              <button class="inline-flex items-center">
                                                  <span class="me-1">Last Opened</span>
                                                  <Icon class="text-base/4.5" name="caret-down-fill"></Icon>
                                              </button>
                                            </template>
                                            <template #content>
                                              <ul class="py-2">
                                                  <li class="group active">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Last Opened</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                                  <li class="group">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Name</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                                  <li class="group">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Size</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                              </ul>
                                            </template>
                                        </Dropdown>
                                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                            <template #button>
                                              <ButtonZoom size="sm">
                                                  <Icon class="text-base/4.5" name="more-h" />
                                              </ButtonZoom>
                                            </template>
                                            <template #content>
                                              <ul class="py-2">
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                              <span>Share</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                              <span>Copy</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                              <span>Move</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                          <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                          <span>Download</span>
                                                      </MenuItem>
                                                  </li>
                                              </ul>
                                            </template>
                                        </Dropdown>
                                    </div>
                                    <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                      <div v-for="(item,index) in files" :key="index" class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                          <a href="#link" @click="(e)=> e.preventDefault()" class="flex flex-col pt-6 pb-4">
                                              <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.icon"></div>
                                              <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                                  <span class="line-clamp-1">{{item.name}}</span> <template v-if="item.ext">{{ '.' + item.ext }}</template> 
                                                  <div :class="{'inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100': true, 'active' : item.stared }">
                                                      <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                      <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                  </div>
                                              </div>
                                              <ul class="flex items-center justify-center pt-1 gap-3">
                                                  <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.date}}</li>
                                                  <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.size}}</li>
                                              </ul>
                                          </a>
                                          <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                <template #button>
                                                  <ButtonZoom size="sm">
                                                      <Icon class="text-base/4.5" name="more-h" />
                                                  </ButtonZoom>
                                                </template>
                                                <template #content>
                                                  <ul class="py-2">
                                                      <li>
                                                          <MenuItem as="template">
                                                              <button @click="() => showDetailsModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="eye" />
                                                                  <span>Details</span>
                                                              </button>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="template">
                                                              <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                                  <span>Share</span>
                                                              </button>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="template">
                                                              <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                                  <span>Copy</span>
                                                              </button>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="template">
                                                              <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                                  <span>Move</span>
                                                              </button>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                              <span>Download</span>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="pen" />
                                                              <span>Rename</span>
                                                          </MenuItem>
                                                      </li>
                                                      <li>
                                                          <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="trash" />
                                                              <span>Delete</span>
                                                          </MenuItem>
                                                      </li>
                                                  </ul>
                                                </template>
                                            </Dropdown>
                                          </div>
                                      </div>
                                    </div>
                                </TabPanel>
                                <TabPanel class="tab-panel">
                                    <div class="flex items-center justify-between gap-3">
                                        <Dropdown placement="bottom-start" rtlPlacement="bottom-end" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                            <template #button>
                                              <button class="inline-flex items-center">
                                                  <span class="me-1">Last Opened</span>
                                                  <Icon class="text-base/4.5" name="caret-down-fill"></Icon>
                                              </button>
                                            </template>
                                            <template #content>
                                              <ul class="py-2">
                                                  <li class="group active">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Last Opened</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                                  <li class="group">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Name</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                                  <li class="group">
                                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                          <span>Size</span>
                                                          <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                      </MenuItem>
                                                  </li>
                                              </ul>
                                            </template>
                                        </Dropdown>
                                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                            <template #button>
                                              <ButtonZoom size="sm">
                                                  <Icon class="text-base/4.5" name="more-h" />
                                              </ButtonZoom>
                                            </template>
                                            <template #content>
                                              <ul class="py-2">
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                              <span>Share</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                              <span>Copy</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="template">
                                                          <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                              <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                              <span>Move</span>
                                                          </button>
                                                      </MenuItem>
                                                  </li>
                                                  <li>
                                                      <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                          <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                          <span>Download</span>
                                                      </MenuItem>
                                                  </li>
                                              </ul>
                                            </template>
                                        </Dropdown>
                                    </div>
                                    <div class="mb-10 last:mb-0">
                                        <h6 class="border-t border-gray-200 dark:border-gray-800 font-heading font-bold text-xs tracking-wider uppercase py-4">Folder</h6>
                                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                          <template v-for="(item,index) in files" :key="index">
                                              <div v-if="item.type === 'folder'" class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                                  <a href="#link" @click="(e)=> e.preventDefault()" class="flex flex-col p-4">
                                                      <div class="flex items-center">
                                                          <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.icon"></div>
                                                          <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                              <span class="line-clamp-1">{{item.name}}</span>
                                                              <div :class="{'inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100' : true, 'active' : item.stared }">
                                                                  <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                                  <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <ul class="flex items-center pt-1 gap-3">
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.date}}</li>
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.size}}</li>
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">
                                                            <template v-if="item.users">{{ item.users.length + ' Members' }}</template>
                                                            <template v-else> Only Me </template>
                                                          </li>
                                                      </ul>
                                                  </a>
                                                  <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                                      <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                          <template #button>
                                                            <ButtonZoom size="sm">
                                                                <Icon class="text-base/4.5" name="more-h" />
                                                            </ButtonZoom>
                                                          </template>
                                                          <template #content>
                                                            <ul class="py-2">
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showDetailsModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="eye" />
                                                                            <span>Details</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                                            <span>Share</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                                            <span>Copy</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                                            <span>Move</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                                        <span>Download</span>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="pen" />
                                                                        <span>Rename</span>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="trash" />
                                                                        <span>Delete</span>
                                                                    </MenuItem>
                                                                </li>
                                                            </ul>
                                                          </template>
                                                      </Dropdown>
                                                  </div>
                                              </div>
                                          </template>
                                        </div>
                                    </div>
                                    <div class="mb-10 last:mb-0">
                                        <h6 class="border-t border-gray-200 dark:border-gray-800 font-heading font-bold text-xs tracking-wider uppercase py-4">Files</h6>
                                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                          <template v-for="(item,index) in files" :key="index">
                                              <div v-if="item.type === 'file'" class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                                  <a href="#link" @click="(e)=> e.preventDefault()" class="flex flex-col p-4">
                                                      <div class="flex items-center">
                                                          <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.icon"></div>
                                                          <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                              <span class="line-clamp-1">{{item.name}}</span> <template v-if="item.ext">{{ '.' + item.ext }}</template> 
                                                              <div :class="{'inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100': true, 'active' : item.stared }">
                                                                  <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                                  <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <ul class="flex items-center pt-1 gap-3">
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.date}}</li>
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">{{item.size}}</li>
                                                          <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">
                                                            <template v-if="item.users">{{ item.users.length + ' Members' }}</template>
                                                            <template v-else> Only Me </template>
                                                          </li>
                                                      </ul>
                                                  </a>
                                                  <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                                    <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                          <template #button>
                                                            <ButtonZoom size="sm">
                                                                <Icon class="text-base/4.5" name="more-h" />
                                                            </ButtonZoom>
                                                          </template>
                                                          <template #content>
                                                            <ul class="py-2">
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showDetailsModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="eye" />
                                                                            <span>Details</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                                            <span>Share</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                                            <span>Copy</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="template">
                                                                        <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                            <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                                            <span>Move</span>
                                                                        </button>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                                        <span>Download</span>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="pen" />
                                                                        <span>Rename</span>
                                                                    </MenuItem>
                                                                </li>
                                                                <li>
                                                                    <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                        <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="trash" />
                                                                        <span>Delete</span>
                                                                    </MenuItem>
                                                                </li>
                                                            </ul>
                                                          </template>
                                                    </Dropdown>
                                                  </div>
                                              </div>
                                          </template>
                                        </div>
                                    </div>
                                </TabPanel>
                                <TabPanel class="tab-panel">
                                    <div class="w-full">
                                        <div class="flex items-center">
                                            <div class="flex-grow ">
                                                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                    <template #button>
                                                      <button class="inline-flex items-center">
                                                          <span class="me-1 font-medium text-sm">Name</span>
                                                          <em class="text-base/4.5 ni ni-caret-down-fill"></em>
                                                      </button>
                                                    </template>
                                                    <template #content>
                                                      <ul class="py-2">
                                                          <li class="group">
                                                              <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Ordered By</h6>
                                                          </li>
                                                          <li class="group active">
                                                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                                  <span>Ascending</span>
                                                                  <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                              </MenuItem>
                                                          </li>
                                                          <li class="group">
                                                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                                  <span>Descending</span>
                                                                  <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                              </MenuItem>
                                                          </li>
                                                      </ul>
                                                    </template>
                                                </Dropdown>
                                            </div>
                                            <div class="w-3/12 hidden sm:block">
                                                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                    <template #button>
                                                      <button class="inline-flex items-center">
                                                          <span class="me-1 text-sm font-medium">Last Opened</span>
                                                          <Icon class="text-base/4.5" name="arrow-long-down"></Icon>
                                                      </button>
                                                    </template>
                                                    <template #content>
                                                      <ul class="py-2">
                                                          <li class="group active">
                                                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                                  <span>Last Opened</span>
                                                                  <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                              </MenuItem>
                                                          </li>
                                                          <li class="group">
                                                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                                  <span>Name</span>
                                                                  <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                              </MenuItem>
                                                          </li>
                                                          <li class="group">
                                                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                                  <span>Size</span>
                                                                  <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                                              </MenuItem>
                                                          </li>
                                                      </ul>
                                                    </template>
                                                </Dropdown>
                                            </div>
                                            <div class="w-3/12 hidden md:block"><div class="font-medium text-sm">Members</div></div>
                                            <div class="flex-shrink w-[60px] pe-4 text-end">
                                                <Dropdown  class="dropdown me-px" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                  <template #button>
                                                    <ButtonZoom size="sm">
                                                        <Icon class="text-base/4.5" name="more-h" />
                                                    </ButtonZoom>
                                                  </template>
                                                  <template #content>
                                                    <ul class="py-2">
                                                        <li>
                                                            <MenuItem as="template">
                                                                <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                    <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                                    <span>Share</span>
                                                                </button>
                                                            </MenuItem>
                                                        </li>
                                                        <li>
                                                            <MenuItem as="template">
                                                                <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                    <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                                    <span>Copy</span>
                                                                </button>
                                                            </MenuItem>
                                                        </li>
                                                        <li>
                                                            <MenuItem as="template">
                                                                <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                    <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                                    <span>Move</span>
                                                                </button>
                                                            </MenuItem>
                                                        </li>
                                                        <li>
                                                            <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                                <span>Download</span>
                                                            </MenuItem>
                                                        </li>
                                                    </ul>
                                                  </template>
                                              </Dropdown>
                                            </div>
                                        </div>
                                        <div class="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded">
                                          <div v-for="(item,index) in files" :key="index" class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                              <div class="flex-grow py-4 first:ps-5">
                                                  <div class="flex items-center">
                                                      <div class="me-3">
                                                          <div class="flex">
                                                              <CheckBox size="sm" id="mid-01" />
                                                          </div>
                                                      </div>
                                                      <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.icon"></div>
                                                      <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                          <span class="line-clamp-1">{{item.name}}<template v-if="item.ext">{{ '.' + item.ext }}</template> </span>
                                                          <div :class="{'inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100': true, 'active' : item.stared }">
                                                              <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                              <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="w-3/12 py-4 first:ps-5 hidden sm:block">
                                                  <div class="text-sm text-slate-600 dark:text-slate-400">{{item.date}},&nbsp; {{item.time}}</div>
                                                  <div v-if="item.owner" class="text-xs text-slate-400 mt-0.5">by {{item.owner.name}}</div>
                                              </div>
                                              <div class="w-3/12 py-4 first:ps-5 hidden md:block">
                                                <template v-if="item.user?.length > 1">
                                                  <AvatarGroup size="mb">
                                                    <template v-for="(uItem,uIndex) in item.user.slice(0,3)" :key="uIndex">
                                                        <Avatar size="mb" v-if="uItem.image" rounded :img="uItem.image"/>
                                                        <Avatar size="mb" v-else :variant="uItem.theme" rounded :text="toInitials(uItem.name)"/>
                                                        <Avatar v-if="item.users?.length > 3" variant="slate" size="mb" rounded :text="item.users?.length - 3"></Avatar>
                                                    </template>
                                                  </AvatarGroup> 
                                                </template>
                                                <template v-else>
                                                  <div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div> 
                                                </template>
                                              </div>
                                              <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[150px]">
                                                    <template #button>
                                                      <ButtonZoom size="sm">
                                                          <Icon class="text-base/4.5" name="more-h" />
                                                      </ButtonZoom>
                                                    </template>
                                                    <template #content>
                                                      <ul class="py-2">
                                                          <li>
                                                              <MenuItem as="template">
                                                                  <button @click="() => showDetailsModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                      <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="eye" />
                                                                      <span>Details</span>
                                                                  </button>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="template">
                                                                  <button @click="() => showShareModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                      <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="share" />
                                                                      <span>Share</span>
                                                                  </button>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="template">
                                                                  <button @click="() => showCopyModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                      <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="copy" />
                                                                      <span>Copy</span>
                                                                  </button>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="template">
                                                                  <button @click="() => showMoveModal = true" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300 outline-none">
                                                                      <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="forward-arrow" />
                                                                      <span>Move</span>
                                                                  </button>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="download" />
                                                                  <span>Download</span>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="pen" />
                                                                  <span>Rename</span>
                                                              </MenuItem>
                                                          </li>
                                                          <li>
                                                              <MenuItem as="button" class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                  <Icon class="text-lg/none w-8 opacity-80 text-primary-600 text-start" name="trash" />
                                                                  <span>Delete</span>
                                                              </MenuItem>
                                                          </li>
                                                      </ul>
                                                    </template>
                                                </Dropdown>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </TabPanel>
                            </TabPanels>
                        </TabGroup>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <UploadModal v-model:show="showUploadModal" />
    <FileDetailsModal v-model:show="showDetailsModal" />
    <FileCopyModal v-model:show="showCopyModal" />
    <FileMoveModal v-model:show="showMoveModal" />
    <FileShareModal v-model:show="showShareModal" />
  </Layout>
</template>
