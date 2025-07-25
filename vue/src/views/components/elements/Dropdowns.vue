<script setup>
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Button, Dropdown, TextOverline, Icon } from "@/components";
</script>
<template>
    <Layout title="Dropdowns">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>List Style for Dropdown</BlockTitleLg>
              <BlockLeadText>Toggle contextual overlays for displaying lists of links and more with the <a class="text-primary-600 hover:text-primary-800" target="_blank" href="https://headlessui.com/v1/vue/menu">HeadlessUI Menu</a> component. Our exclusive link list style for dropdown that give you more power.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Dropdown Variations</BlockTitle>
                <BlockText>Here some examples for dropdown previews.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TextOverline class="mb-3">Previews</TextOverline>
                <div class="flex flex-wrap gap-4">
                  <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                      <template #button>
                        <Button size="rg" variant="light">Dropdown</Button>
                      </template>
                      <template #content>
                        <ul class="py-2">
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>List Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>Another Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>More Action</span>
                              </MenuItem>
                            </li>
                        </ul>
                      </template>
                  </Dropdown>

                  <Dropdown placement="top-start" rtlPlacement="top-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                      <template #button>
                        <Button size="rg" variant="light">DropUp</Button>
                      </template>
                      <template #content>
                        <ul class="py-2">
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>List Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>Another Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>More Action</span>
                              </MenuItem>
                            </li>
                        </ul>
                      </template>
                  </Dropdown>

                  <Dropdown placement="right-start" rtlPlacement="left-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                      <template #button>
                        <Button size="rg" variant="light">DropEnd</Button>
                      </template>
                      <template #content>
                        <ul class="py-2">
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>List Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>Another Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>More Action</span>
                              </MenuItem>
                            </li>
                        </ul>
                      </template>
                  </Dropdown>

                  <Dropdown placement="left-start" rtlPlacement="right-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                      <template #button>
                        <Button size="rg" variant="light">DropStart</Button>
                      </template>
                      <template #content>
                        <ul class="py-2">
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>List Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>Another Action</span>
                              </MenuItem>
                            </li>
                            <li>
                              <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                <span>More Action</span>
                              </MenuItem>
                            </li>
                        </ul>
                      </template>
                  </Dropdown>
                </div>
              </CardBody>
            </Card>
          </Block>
          
          <Block>
            <BlockHead>
                <BlockTitle>Dropdown List Style - General</BlockTitle>
                <BlockText>Here is few General styles for dropdown list style.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                  <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">With Border</h6>
                  <div class="flex flex-wrap -m-3.5">
                    <div class="p-3.5">
                          <TextOverline class="mb-3">Default</TextOverline>
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                              <ul>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <span>List Action</span>
                                    </a>
                                  </li>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <span>Another Action</span>
                                    </a>
                                  </li>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <span>More Action</span>
                                    </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">Selected / Actived</TextOverline>
                          
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group">
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>List Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group active">
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>Another Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group">
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>More Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                            </ul>
                          </div>
                          
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">With Icon</TextOverline>
                          
                            <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                              <ul>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="setting" />
                                      <span>Action Settings</span>
                                    </a>
                                  </li>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="notify" />
                                      <span>Push Notification</span>
                                    </a>
                                  </li>
                                  <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                      <span>Login Activity</span>
                                    </a>
                                  </li>
                              </ul>
                            </div>
                          
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">Preview</TextOverline>
                          <div class="flex flex-wrap gap-4">
                            <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                                <template #button>
                                    <Button size="rg" variant="light">
                                        Click Here
                                    </Button>
                                </template>
                                <template #content>
                                  <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                        <span>Action Settings</span>
                                      </MenuItem>
                                    </li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                        <span>Push Notification</span>
                                      </MenuItem>
                                    </li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                        <span>Login Activity</span>
                                      </MenuItem>
                                    </li>
                                </ul>
                                </template>
                            </Dropdown>
                            <Dropdown placement="bottom-end" rtlPlacement="bottom-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"> >
                                <template #button>
                                    <Button size="rg" variant="light" icon>
                                        <Icon class="text-xl leading-4.5" name="more-h" />
                                    </Button>
                                </template>
                                <template #content>
                                  <ul>
                                      <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                          <span>Action Settings</span>
                                        </MenuItem>
                                      </li>
                                      <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                          <span>Push Notification</span>
                                        </MenuItem>
                                      </li>
                                      <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900">
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                          <span>Login Activity</span>
                                        </MenuItem>
                                      </li>
                                  </ul>
                                </template>
                            </Dropdown>
                          </div>
                      </div>
                  </div>
              </CardBody>
            </Card>
          </Block>
          
          <Block>
            <Card>
              <CardBody>
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">Without Border</h6>
                    <div class="flex flex-wrap -m-3.5">
                        <div class="p-3.5">
                            <TextOverline class="mb-3">Default</TextOverline>
                            
                              <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                                <ul class="py-2">
                                    <li>
                                      <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                        <span>List Action</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                        <span>Another Action</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                        <span>More Action</span>
                                      </a>
                                    </li>
                                </ul>
                              </div>
                            
                        </div>
                        <div class="p-3.5">
                            <TextOverline class="mb-3">Selected / Actived</TextOverline>
                            
                              <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                                <ul class="py-2">
                                    <li class="group">
                                      <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                        <span>List Action</span>
                                      <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                    </a>
                                    </li>
                                    <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <span>Another Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                    </a>
                                    </li>
                                    <li class="group">
                                      <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                        <span>More Action</span>
                                      <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                    </a>
                                    </li>
                                </ul>
                              </div>
                            
                        </div>
                        <div class="p-3.5">
                            <TextOverline class="mb-3">With Icon</TextOverline>
                            
                            <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                              <ul class="py-2">
                                  <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="setting" />
                                      <span>Action Settings</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="notify" />
                                      <span>Push Notification</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                      <Icon class="text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                      <span>Login Activity</span>
                                    </a>
                                  </li>
                              </ul>
                            </div>
                            
                        </div>
                        <div class="p-3.5">
                            <TextOverline class="mb-3">Preview</TextOverline>
                            <div class="flex flex-wrap gap-4">
                              <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                                  <template #button>
                                      <Button size="rg" variant="light">
                                          Click Here
                                      </Button>
                                  </template>
                                  <template #content>
                                    <ul class="py-2">
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                            <span>Action Settings</span>
                                          </MenuItem>
                                        </li>
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                            <span>Push Notification</span>
                                          </MenuItem>
                                        </li>
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                            <span>Login Activity</span>
                                          </MenuItem>
                                        </li>
                                    </ul>
                                  </template>
                              </Dropdown>
                              <Dropdown placement="bottom-end" rtlPlacement="bottom-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                                  <template #button>
                                      <Button size="rg" variant="light" icon>
                                          <Icon class="text-xl leading-4.5" name="more-h" />
                                      </Button>
                                  </template>
                                  <template #content>
                                    <ul class="py-2">
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                            <span>Action Settings</span>
                                          </MenuItem>
                                        </li>
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                            <span>Push Notification</span>
                                          </MenuItem>
                                        </li>
                                        <li>
                                          <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                            <span>Login Activity</span>
                                          </MenuItem>
                                        </li>
                                    </ul>
                                  </template>
                              </Dropdown>
                            </div>
                        </div>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <Card>
              <CardBody>
                  <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">With Separator</h6>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="p-3.5">
                          <TextOverline class="mb-3">Default</TextOverline>
                          
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul class="py-2">
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>List Action</span>
                                  </a>
                                </li>
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>Another Action</span>
                                  </a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2">

                                </li>
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>More Action</span>
                                  </a>
                                </li>
                            </ul>
                          </div>
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">Selected / Actived</TextOverline>
                          
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">  
                            <ul class="py-2">
                                <li class="group">
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>List Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                  <span>Another Action</span>
                                  <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li class="group">
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>More Action</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                            </ul>
                          </div>
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">With Icon</TextOverline>
                          
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul class="py-2">
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7 opacity-80" name="setting" />
                                    <span>Action Settings</span>
                                  </a>
                                </li>
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7 opacity-80" name="notify" />
                                    <span>Push Notification</span>
                                  </a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2">

                                </li>
                                <li>
                                  <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                    <span>Login Activity</span>
                                  </a>
                                </li>
                            </ul>
                          </div>
                          
                      </div>
                      <div class="p-3.5">
                          <TextOverline class="mb-3">Preview</TextOverline>
                          <div class="flex flex-wrap gap-4">
                            <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                                <template #button>
                                  <Button size="rg" variant="light">
                                      Click Here
                                  </Button>
                                </template>
                                <template #content>
                                  <ul class="py-2">
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                        <span>Action Settings</span>
                                      </MenuItem>
                                    </li>
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                        <span>Push Notification</span>
                                      </MenuItem>
                                    </li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2">

                                    </li>
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                        <span>Login Activity</span>
                                      </MenuItem>
                                    </li>
                                </ul>
                                </template>
                            </Dropdown>
                            <Dropdown placement="bottom-end" rtlPlacement="bottom-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                                <template #button>
                                    <Button size="rg" variant="light" icon>
                                        <Icon class="text-xl leading-4.5" name="more-h" />
                                    </Button>
                                </template>
                                <template #content>
                                  <ul class="py-2">
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="setting" />
                                        <span>Action Settings</span>
                                      </MenuItem>
                                    </li>
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="notify" />
                                        <span>Push Notification</span>
                                      </MenuItem>
                                    </li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="activity-alt" />
                                        <span>Login Activity</span>
                                      </MenuItem>
                                    </li>
                                </ul>
                                </template>
                            </Dropdown>
                          </div>
                      </div>
                  </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <BlockHead>
                <BlockTitle>Dropdown List Style - Column</BlockTitle>
                <BlockText>Here is few Column styles for dropdown list style.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">Multiple Column</h6>
                <div class="flex flex-wrap -m-3.5">
                    <div class="p-3.5">
                        <TextOverline class="mb-3">3 Column</TextOverline>
                        
                          <div class="min-w-[280px] max-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">  
                            <ul class="flex flex-wrap text-center">
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jan</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Feb</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Mar</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Apr</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>May</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jun</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jul</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Aug</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Sep</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Oct</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Nov</span>
                                  </a>
                                </li>
                                <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Dec</span>
                                  </a>
                                </li>
                            </ul>
                          </div>
                        
                    </div>
                    <div class="p-3.5">
                        <TextOverline class="mb-3">4 Column</TextOverline>
                        
                          <div class="min-w-[280px] max-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul class="flex flex-wrap text-center">
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jan</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Feb</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Mar</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Apr</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>May</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jun</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Jul</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Aug</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Sep</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Oct</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Nov</span>
                                  </a>
                                </li>
                                <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                  <a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Dec</span>
                                  </a>
                                </li>
                            </ul>
                          </div>
                        
                    </div>
                    <div class="p-3.5">
                        <TextOverline class="mb-3">Preview</TextOverline>
                        <div class="flex flex-wrap gap-4">
                          <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[280px]">
                              <template #button>
                                <Button size="rg" variant="light">
                                    Click Here
                                </Button>
                              </template>
                              <template #content>
                                <ul class="flex flex-wrap text-center">
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jan</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Feb</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Mar</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Apr</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>May</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jun</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jul</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Aug</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Sep</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Oct</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Nov</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Dec</span>
                                    </MenuItem>
                                  </li>
                                </ul>
                              </template>
                          </Dropdown>
                          <Dropdown placement="bottom-end" rtlPlacement="bottom-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[280px]">
                              <template #button>
                                <Button size="rg" variant="light" icon>
                                    <Icon class="text-xl leading-4.5" name="more-h" />
                                </Button>
                              </template>
                              <template #content>
                                <ul class="flex flex-wrap text-center">
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jan</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Feb</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Mar</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Apr</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>May</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jun</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Jul</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Aug</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Sep</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Oct</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Nov</span>
                                    </MenuItem>
                                  </li>
                                  <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Dec</span>
                                    </MenuItem>
                                  </li>
                                </ul>
                              </template>
                          </Dropdown>
                        </div>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <BlockHead>
                <BlockTitle>Dropdown List Style - Heading</BlockTitle>
                <BlockText>Here is a style for dropdown list with heading style.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">with Heading</h6>
                <div class="flex flex-wrap -m-3.5">
                    <div class="p-3.5">
                        <TextOverline class="mb-3">Default</TextOverline>
                        
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul class="py-2">
                                <li>
                                  <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6>
                                </li>
                                <li>
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Hello Team!</span>
                                    </a>
                                </li>
                                <li>
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Thank You!</span>
                                    </a>
                                </li>
                                <li>
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()"><span>Most Welcome!</span>
                                    </a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2">

                                </li>
                                <li>
                                  <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6>
                                </li>
                                <li>
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7" name="file-plus" />
                                    <span>Save as Template</span>
                                  </a>
                                </li>
                                <li>
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7" name="notes-alt" />
                                    <span>Manage Template</span>
                                  </a>
                                </li>
                            </ul>
                          </div>
                        
                    </div>
                    <div class="p-3.5">
                        <TextOverline class="mb-3">Selected / Actived</TextOverline>
                        
                          <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                            <ul class="py-2">
                                <li>
                                  <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Show</h6>
                                </li>
                                <li class="group">
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>10 Items</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                  <span>20 Items</span>
                                  <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="group">
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <span>30 Items</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li>
                                  <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Order By</h6>
                                </li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                  <Icon class="text-lg leading-none w-7" name="arrow-long-up"/>
                                  <span>DESC</span>
                                  <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                                <li class="group">
                                  <a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                                    <Icon class="text-lg leading-none w-7" name="arrow-long-down"/>
                                    <span>ASC</span>
                                    <Icon class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2" name="check-thick"/>
                                  </a>
                                </li>
                            </ul>
                          </div>
                        
                    </div>
                    <div class="p-3.5">
                        <TextOverline class="mb-3">Preview</TextOverline>
                        <div class="flex flex-wrap gap-4">
                          <Dropdown placement="bottom-start" rtlPlacement="bottom-end" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                              <template #button>
                                <Button size="rg" variant="light">
                                    Click Here
                                </Button>
                              </template>
                              <template #content>
                                <ul class="py-2">
                                  <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Hello Team!</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Thank You!</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Most Welcome!</span>
                                    </MenuItem>
                                  </li>
                                  <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                  <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                      <Icon class="text-lg leading-none w-7" name="file-plus" />
                                      <span>Save as Template</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                      <Icon class="text-lg leading-none w-7" name="notes-alt" />
                                      <span>Manage Template</span>
                                    </MenuItem>
                                  </li>
                                </ul>
                              </template>
                          </Dropdown>
                          <Dropdown placement="bottom-end" rtlPlacement="bottom-start" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]">
                              <template #button>
                                <Button size="rg" variant="light" icon>
                                    <Icon class="text-xl leading-4.5" name="more-h" />
                                </Button>
                              </template>
                              <template #content>
                                <ul class="py-2">
                                  <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Hello Team!</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Thank You!</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300"><span>Most Welcome!</span>
                                    </MenuItem>
                                  </li>
                                  <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                  <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                      <Icon class="text-lg leading-none w-7" name="file-plus" />
                                      <span>Save as Template</span>
                                    </MenuItem>
                                  </li>
                                  <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                      <Icon class="text-lg leading-none w-7" name="notes-alt" />
                                      <span>Manage Template</span>
                                    </MenuItem>
                                  </li>
                                </ul>
                              </template>
                          </Dropdown>
                        </div>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>

        </div>
    </Layout>
</template>