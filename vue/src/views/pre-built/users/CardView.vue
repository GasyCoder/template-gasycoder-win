<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Dropdown, Card, CardBody, Block,
  CheckBox, Avatar, Pagination, PaginationPrev, PaginationItem, PaginationDot, PaginationNext, SelectChoice, SelectOption, FormGroup, FormLabel, InputWrap

 } from '@/components'
import { toInitials } from '@/utilities'
import { useUserStore } from '@/stores/users'
const users = useUserStore()
</script>

<template>
  <Layout title="Users Cards">
    <PageHead>
        <PageHeadGroup>
            <PageHeadTitle>Users Lists</PageHeadTitle>
            <PageHeadSubTitle>You have total 2,595 users.</PageHeadSubTitle>
        </PageHeadGroup>
        <PageHeadGroup>
            <PageHeadOption>
                <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                    <li>
                        <Button size="rg" variant="white-outline">
                            <Icon class="text-xl/4.5" name="download-cloud" />
                            <span class="ms-3">Export</span>
                        </Button>
                    </li>
                    <li class="ms-auto">
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0,4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                          <template #button>
                              <Button size="rg" variant="primary" icon >
                                  <Icon class="text-xl/4.5" name="plus" />
                              </Button>
                          </template>
                          <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Add User</span></MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Add Team</span></MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Import User</span></MenuItem>
                                </li>
                            </ul>
                          </template>
                        </Dropdown>
                    </li>
                </ul>
            </PageHeadOption>
        </PageHeadGroup>
    </PageHead>
    <Block>
        <div class="grid grid-flow-dense grid-cols-12 gap-6">
          <div v-for="(item, index) in users.userData.slice(0,4)" :key="index" class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
              <Card>
                  <CardBody>
                      <div class="relative">
                          <div v-if="item.status == 'Active'" class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-green-600 text-white"><Icon name="check-thick" /></div>
                          <div v-if="item.status == 'Inactive'" class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-gray-200 text-gray-600"><Icon name="check-thick" /></div>
                          <div v-if="item.status == 'Pending'" class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-yellow-600 text-white"><Icon name="clock" /></div>
                          <div v-if="item.status == 'Suspend'" class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-red-600 text-white"><Icon name="na" /></div>
                          <Dropdown class="!absolute top-0 end-0 -mt-1 -me-1" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                              <ButtonZoom size="sm">
                                  <Icon class="text-xl" name="more-h" />
                              </ButtonZoom>
                            </template>
                            <template #content>
                              <ul class="py-2">
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="focus" />
                                          <span>Quick View</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                          <span>View Details</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="mail" />
                                          <span>Send Email</span>
                                      </MenuItem>
                                  </li>
                                  <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="shield-star" />
                                          <span>Reset Pass</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="shield-off" />
                                          <span>Reset 2FA</span>
                                      </MenuItem>
                                  </li>
                                  <li>
                                      <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                          <Icon class="text-start text-lg leading-none w-7 opacity-80" name="na" />
                                          <span>Suspend User</span>
                                      </MenuItem>
                                  </li>
                              </ul>
                            </template>
                          </Dropdown>
                          <div class="flex flex-col items-center text-center p-2">
                              <Avatar v-if="item.img" size="xl" rounded :img="item.img" status="active"/>
                              <Avatar v-else :variant="item.theme" size="xl" rounded :text="toInitials(item.name)" status="active"/>
                              <div class="mt-5">
                                  <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{item.name}}</h6>
                                  <span class="text-sm text-slate-400">@{{item.displayName}}</span>
                              </div>
                          </div>
                          <div class="pt-2 text-center mx-auto max-w-[200px]">
                              <p>I am an UI/UX Designer and Love to be creative.</p>
                          </div>
                          <ul class="flex justify-around text-center pt-4 pb-6 w-full">
                              <li class="px-2">
                                  <span class="text-lg text-slate-800 dark:text-white block">{{item.projects}}</span>
                                  <span class="text-sm leading-6 text-slate-400 block">Projects</span>
                              </li>
                              <li class="px-2">
                                  <span class="text-lg text-slate-800 dark:text-white block">{{item.performed}}</span>
                                  <span class="text-sm leading-6 text-slate-400 block">Performed</span>
                              </li>
                              <li class="px-2">
                                  <span class="text-lg text-slate-800 dark:text-white block">{{item.tasks}}</span>
                                  <span class="text-sm leading-6 text-slate-400 block">Tasks</span>
                              </li>
                          </ul>
                          <div class="flex justify-center pb-1">
                              <Button as="router-link" :to="`/user-details/${item.id}`" size="rg" variant="white-outline" pill class="min-w-[150px] justify-center"><span>View Profile</span></Button>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </div>
        </div>
    </Block>
    <Block>
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User Cards Alternet</h5>
            <p class="text-sm leading-6 text-slate-400">An alternet version of user card here.</p>
        </div>

        <div class="grid grid-flow-dense grid-cols-12 gap-6">
            <div v-for="(item, index) in users.userData.slice(0,4)" :key="index" class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
                <Card>
                    <CardBody>
                        <div class="relative">
                            <Dropdown class="!absolute top-0 end-0 -mt-1 -me-1" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                              <template #button>
                                <ButtonZoom size="sm">
                                    <Icon class="text-xl" name="more-h" />
                                </ButtonZoom>
                              </template>
                              <template #content>
                                <ul class="py-2">
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="focus" />
                                            <span>Quick View</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                            <span>View Details</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="mail" />
                                            <span>Send Email</span>
                                        </MenuItem>
                                    </li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="shield-star" />
                                            <span>Reset Pass</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="shield-off" />
                                            <span>Reset 2FA</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg leading-none w-7 opacity-80" name="na" />
                                            <span>Suspend User</span>
                                        </MenuItem>
                                    </li>
                                </ul>
                              </template>
                            </Dropdown>
                            <div class="flex flex-col items-center text-center p-2">
                                <Avatar v-if="item.img" size="2xl" rounded :img="item.img" status="active"/>
                                <Avatar v-else :variant="item.theme" size="2xl" rounded :text="toInitials(item.name)" status="active"/>
                                <div class="mt-5">
                                    <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{item.name}}</h6>
                                    <span class="text-sm text-slate-400">{{item.designation}}</span>
                                </div>
                            </div>
                            <ul class="pt-4 pb-5">
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Join Date</span>
                                    <span class="text-slate-600 dark:text-slate-400">24 Jun 2015</span>
                                </li>
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Contact</span>
                                    <span class="text-slate-600 dark:text-slate-400">{{item.phone}}</span>
                                </li>
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Email</span>
                                    <span class="text-slate-600 dark:text-slate-400">{{item.email}}</span>
                                </li>
                            </ul>
                            <div class="flex justify-center pb-1">
                                <Button as="router-link" :to="`/user-details/${item.id}`" size="rg" variant="primary-pale" block class="min-w-[150px] justify-center"><span>View Profile</span></Button>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </div>
        </div>
    </Block>
  </Layout>
</template>
