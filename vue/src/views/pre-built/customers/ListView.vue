<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Dropdown,
  CheckBox, Avatar, Pagination, PaginationPrev, PaginationItem, PaginationDot, PaginationNext, SelectChoice, SelectOption, FormGroup, FormLabel, InputWrap

 } from '@/components'
import { toInitials } from '@/utilities'
import { useCustomerStore } from '@/stores/customer'
const customers = useCustomerStore()
const showSearchForm = ref(false)
const showCardOptions = ref(false)
</script>

<template>
  <Layout title="Customers List">
    <PageHead>
      <PageHeadGroup>
        <PageHeadTitle>Customers List</PageHeadTitle>
        <PageHeadSubTitle>You have total 1,261 customers.</PageHeadSubTitle>
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
                    <Button size="rg" variant="primary" icon>
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
    <div class="border-y sm:border-x sm:rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full -mx-3.5 sm:m-0">
      <div class="p-5 relative">
          <div class="flex items-center justify-between relative">
              <div class="flex items-center gap-4">
                  <div class="relative w-[132px]">
                      <SelectChoice id="Bulk_Action" placeholder="Bulk Action">
                          <SelectOption value="SendEmail">Send Email</SelectOption>
                          <SelectOption value="ChangeGroup">Change Group</SelectOption>
                          <SelectOption value="SuspendUser">Suspend User</SelectOption>
                          <SelectOption value="DeleteUser">Delete User</SelectOption>
                      </SelectChoice>
                  </div>
                  <Button size="rg" variant="light-pale-outline" class="hidden sm:inline-flex" disabled>Apply</Button>
                  <Button size="rg" variant="light-pale-outline" class="sm:hidden" icon disabled><Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-right" /></Button>
              </div>
              <ul class="flex flex-wrap items-start gap-2.5">
                  <li>
                      <ButtonZoom @click="()=> showSearchForm = true">
                          <Icon class="text-xl/4.5" name="search" />
                      </ButtonZoom>
                  </li>
                  <li class="h-9 border-s border-gray-200 dark:border-gray-800"></li>
                  <li>
                      <ButtonZoom @click="()=> showCardOptions = true" class="sm:hidden" size="rg">
                          <Icon class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100" name="menu-right" />
                      </ButtonZoom>
                      <div :class="{'absolute sm:relative start-0 end-0 top-0 bottom-0 -m-5 p-5 sm:p-0 sm:m-0 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent shadow sm:shadow-none shadow-gray-200 dark:shadow-gray-900 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[700]': true, 'active': showCardOptions}">
                          <ul class="flex items-center gap-x-1">
                              <li class="me-auto sm:hidden -ms-2">
                                  <ButtonZoom @click="()=> showCardOptions = false" size="rg">
                                      <Icon class="text-xl/4.5 rtl:-scale-x-100" name="arrow-left" />
                                  </ButtonZoom>
                              </li>
                              <li>
                                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[260px] xs:min-w-[360px]">
                                  <template #button>
                                    <ButtonZoom>
                                        <Icon class="text-xl/4.5" name="filter-alt" />
                                        <span class="absolute top-0.5 end-0.5 h-2 w-2 inline-block rounded-full bg-primary-600"></span>
                                    </ButtonZoom>
                                  </template>
                                  <template #content>
                                    <div class="flex items-center justify-between px-5 py-3 border-b border-gray-200 dark:border-gray-800">
                                        <span class="font-medium text-slate-700 dark:text-white">Filter Users</span>
                                    </div>
                                    <div class="p-5">
                                        <div class="grid grid-flow-dense grid-cols-12 gap-x-6 gap-y-4">
                                            <div class="col-span-6">
                                                <CheckBox size="sm" id="haveBalance">Have Balance</CheckBox>
                                            </div>
                                            <div class="col-span-6">
                                                <CheckBox size="sm" id="KYCVerified">KYC Verified</CheckBox>
                                            </div>
                                            <div class="col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-3" htmlFor="userRole">Role </FormLabel>
                                                    <InputWrap>
                                                        <SelectChoice id="userRole">
                                                            <SelectOption value="AnyRole">Any Role</SelectOption>
                                                            <SelectOption value="Investor">Investor</SelectOption>
                                                            <SelectOption value="Seller">Seller</SelectOption>
                                                            <SelectOption value="Buyer">Buyer</SelectOption>
                                                        </SelectChoice>
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-3" htmlFor="userStatus">Status</FormLabel>
                                                    <InputWrap>
                                                        <SelectChoice id="userStatus">
                                                            <SelectOption value="AnyRole">Any Status</SelectOption>
                                                            <SelectOption value="Active">Active</SelectOption>
                                                            <SelectOption value="Pending">Pending</SelectOption>
                                                            <SelectOption value="Suspend">Suspend</SelectOption>
                                                            <SelectOption value="Deleted">Deleted</SelectOption>
                                                        </SelectChoice>
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12">
                                                <MenuItem as="template">
                                                    <Button size="rg" variant="secondary">Filter</Button>
                                                </MenuItem>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between px-5 py-3 border-t border-gray-200 dark:border-gray-800">
                                        <a class="text-sm text-primary-500 hover:text-primary-700 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">Reset Filter</a>
                                        <a class="text-sm text-primary-500 hover:text-primary-700 transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">Save Filter</a>
                                    </div>
                                  </template>
                                </Dropdown>
                              </li>
                              <li>
                                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]">
                                  <template #button>
                                    <ButtonZoom>
                                        <Icon class="text-xl/4.5" name="setting" />
                                    </ButtonZoom>
                                  </template>
                                  <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Show</h6>
                                        </li>
                                        <li class="group">
                                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                <span>10 Items</span>
                                                <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group active">
                                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                <span>20 Items</span>
                                                <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group">
                                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                <span>30 Items</span>
                                                <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                            </MenuItem>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Order By</h6>
                                        </li>
                                        <li class="group active">
                                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                <span>DESC</span>
                                                <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                            </MenuItem>
                                        </li>
                                        <li class="group">
                                            <MenuItem as="button" class="w-full relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                <span>ASC</span>
                                                <em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                  </template>
                                </Dropdown>
                              </li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </div>
          <div :class="{'absolute inset-0 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t-md': true, 'active': showSearchForm}">
              <div class="p-5 flex items-center">
                  <button @click="()=> showSearchForm = false" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300">
                      <Icon class="text-xl/4.5 rtl:-scale-x-100" name="arrow-left" />
                  </button>
                  <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or email" auto-complete="off" />
                  <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                      <Icon class="text-xl/4.5" name="search" />
                  </button>
              </div>
          </div>
      </div>
      <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
          <thead>
              <tr>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start w-12 sm:w-13">
                      <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cid-all" />
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Customer</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden xs:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Email</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Phone</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Company</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Payment Methods</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Joined</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Status</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                      <span class="block text-sm leading-relaxed text-slate-400 font-normal">Actions</span>
                  </th>
              </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in  customers.data" :key="index" class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <div class="flex items-center">
                        <CheckBox size="sm" :id="item.id" />
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <router-link :to="'/customer-details/' + item.id" class="flex items-center">
                        <Avatar v-if="item.img" size="sm" rounded :img="item.img" />
                        <Avatar v-else :variant="item.theme" size="sm" rounded :text="toInitials(item.name)"/>
                        <span class="ms-3 block text-xs font-medium leading-6 text-slate-700 dark:text-white">
                            {{item.name}}
                            <span :class="{'h-2 w-2 inline-block rounded-full lg:hidden ms-1':true, 
                            'bg-green-600': item.status == 'active', 
                            'bg-yellow-600': item.status == 'inactive', 
                            'bg-red-600': item.status == 'suspended', 
                            }"></span>
                        </span>
                    </router-link>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="text-sm text-slate-400">{{item.email}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <span class="text-sm text-slate-400">{{item.phone}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">{{item.company}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center">
                        <Icon v-if="item.cardType === 'visa'" class="text-primary-500 text-xl w-7" name="visa" />
                        <Icon v-if="item.cardType === 'mastercard'" class="text-red-500 text-xl w-7" name="mc" />
                        <Icon v-if="item.cardType === 'amex'" class="text-indigo-800 text-xl w-7" name="american-express" />
                        <span class="text-sm text-slate-400">{{item.cardNumber}}</span>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">{{item.joined}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span :class="{'text-sm font-medium capitalize':true, 
                        'text-green-600': item.status == 'active', 
                        'text-yellow-600': item.status == 'inactive', 
                        'text-red-600': item.status == 'suspended', 
                        }">{{ item.status }}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <ul class="relative flex items-center justify-end -me-2">
                        <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                          <ButtonZoom v-nk-tooltip="{content:'Details', placement:'top'}">
                              <Icon class="text-xl/4.5" name="eye-fill" />
                          </ButtonZoom>
                        </li>
                        <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                          <ButtonZoom v-nk-tooltip="{content:'Send Email', placement:'top'}">
                              <Icon class="text-xl/4.5" name="mail-fill" />
                          </ButtonZoom>
                        </li>
                        <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                          <ButtonZoom v-nk-tooltip="{content:'Suspend', placement:'top'}">
                              <Icon class="text-xl/4.5" name="cross-fill-c" />
                          </ButtonZoom>
                        </li>
                        <li>
                          <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                              <ButtonZoom>
                                  <Icon class="text-xl" name="more-h" />
                              </ButtonZoom>
                            </template>
                            <template #content>
                              <ul class="py-2">
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="eye" />
                                        <span>View Details</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="mail" />
                                        <span>Send Mail</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="cart" />
                                        <span>Orders</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="na" />
                                        <span>Suspend</span>
                                    </MenuItem>
                                </li>
                            </ul>
                            </template>
                          </Dropdown>
                        </li>
                    </ul>
                </td>
            </tr>
          </tbody>
      </table>
      <div class="p-5">
          <div class="flex flex-wrap justify-center sm:justify-between gap-4">
              <Pagination>
                  <PaginationPrev text="Prev"/>
                  <PaginationItem>1</PaginationItem>
                  <PaginationItem>2</PaginationItem>
                  <PaginationDot />
                  <PaginationItem>6</PaginationItem>
                  <PaginationItem>7</PaginationItem>
                  <PaginationNext text="Next"/>
              </Pagination>
              <div class="flex items-center gap-x-4">
                  <div class="text-xs uppercase text-slate-600">Page</div>
                  <div class="relative w-16">
                      <SelectChoice id="ListPagination">
                          <SelectOption value="1">1</SelectOption>
                          <SelectOption value="2">2</SelectOption>
                          <SelectOption value="3">3</SelectOption>
                      </SelectChoice>
                  </div>
                  <div class="text-xs uppercase text-slate-600">Of 102</div>
              </div>
          </div>
      </div>
    </div>
  </Layout>
</template>
