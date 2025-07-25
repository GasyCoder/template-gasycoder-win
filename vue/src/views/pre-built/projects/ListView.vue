<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Dropdown, Card, Badge,
  CheckBox, Avatar, Pagination, PaginationPrev, PaginationItem, PaginationDot, PaginationNext, SelectChoice, SelectOption, ProgressBar, Progress

 } from '@/components'
import { toInitials } from '@/utilities'
import { useProjectStore } from '@/stores/projects'
const projects = useProjectStore()
</script>

<template>
  <Layout title="Projects">
    <PageHead>
      <PageHeadGroup>
        <PageHeadTitle>Projects</PageHeadTitle>
        <PageHeadSubTitle>You have total 95 projects.</PageHeadSubTitle>
      </PageHeadGroup>
      <PageHeadGroup>
        <PageHeadOption>
          <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
              <li>
                <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0,4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                  <template #button>
                    <Button size="rg" variant="white-outline">
                        <Icon class="text-xl/4.5 me-3" name="filter-alt" />
                        <span class="me-4">Filtered By</span>
                        <Icon class="text-xl/4.5 rtl:-scale-x-100" name="chevron-right" />
                    </Button>
                  </template>
                  <template #content>
                    <ul class="py-2">
                        <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 30 Days</span></MenuItem></li>
                        <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 6 Months</span></MenuItem></li>
                        <li><MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Last 1 Years</span></MenuItem></li>
                    </ul>
                  </template>
                </Dropdown>
              </li>
              <li class="ms-auto">
                  <Button size="rg" variant="primary" class="hidden sm:inline-flex">
                      <Icon class="text-xl/4.5" name="plus" />
                      <span class="ms-3">Add Project</span>
                  </Button>
                  <Button size="rg" variant="primary" icon class="sm:hidden">
                      <Icon class="text-xl/4.5" name="plus" />
                  </Button>
              </li>
          </ul>
        </PageHeadOption>
      </PageHeadGroup>
    </PageHead>
    <Card>
      <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
          <thead>
              <tr>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start w-12 sm:w-13">
                      <div class="flex items-center">
                          <CheckBox size="sm" id="pid-all" />
                      </div>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Project Name</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Client</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Project Lead</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Team</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Status</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Progress</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden xs:table-cell">
                      <span class="block text-sm leading-relaxed font-bold text-slate-400">Deadline</span>
                  </th>
                  <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                      <Dropdown class="-me-1" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-8, -8]" :rtlOffset="[8, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                        <template #button>
                          <ButtonZoom size="xs">
                              <Icon class="text-lg" name="more-h" />
                          </ButtonZoom>
                        </template>
                        <template #content>
                          <ul class="py-2">
                              <li>
                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                      <Icon class="text-lg/none text-start w-7 opacity-80" name="check-round-cut" />
                                      <span>Mark As Done</span>
                                  </MenuItem>
                              </li>
                              <li>
                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                      <Icon class="text-lg/none text-start w-7 opacity-80" name="archive" />
                                      <span>Mark As Archive</span>
                                  </MenuItem>
                              </li>
                              <li>
                                  <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                      <Icon class="text-lg/none text-start w-7 opacity-80" name="trash" />
                                      <span>Remove Projects</span>
                                  </MenuItem>
                              </li>
                          </ul>
                        </template>
                      </Dropdown>
                  </th>
              </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in projects.data" :key="index" class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <div class="flex items-center">
                        <CheckBox size="sm" :id="item.id" />
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#link" @click="(e)=> e.preventDefault()" class="flex items-center">
                        <Avatar size="rg" :variant="item.theme" :text="toInitials(item.title)" />
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">{{item.title}}</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">{{item.client}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">{{item.teamLead}}</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li v-for="(tItem,tIndex) in item.team" :key="tIndex">
                              <Avatar v-if="tItem.img" size="sm" rounded :img="tItem.img"/>
                              <Avatar v-else :variant="tItem.theme" size="sm" rounded :text="toInitials(tItem.name)"/>
                        </li>
                        <li v-if="item.teamCount > 2">
                            <Avatar size="sm" :text="`+${item.teamCount - 2}`" variant="light" rounded/>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Open</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <Progress class="w-[140px]">
                            <ProgressBar :progress="item.progress" />
                        </Progress>
                        <div class="font-medium text-slate-600 dark:text-slate-300">{{item.progress}}%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <Badge :variant="item.status.theme">
                        <Icon class="me-2 text-base/none" name="clock" />
                        <span>{{item.status.message}}</span>
                    </Badge>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <Dropdown class="-me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                      <template #button>
                        <ButtonZoom size="rg">
                            <Icon class="text-xl" name="more-h" />
                        </ButtonZoom>
                      </template>
                      <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <Icon class="text-lg/none text-start w-7 opacity-80" name="eye" />
                                    <span>View Project</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <Icon class="text-lg/none text-start w-7 opacity-80" name="edit" />
                                    <span>Edit Project</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                    <Icon class="text-lg/none text-start w-7 opacity-80" name="check-round-cut" />
                                    <span>Mark As Done</span>
                                </MenuItem>
                            </li>
                        </ul>
                      </template>
                    </Dropdown>
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
                      <SelectChoice id="PageNumber">
                          <SelectOption value="1">1</SelectOption>
                          <SelectOption value="2">2</SelectOption>
                          <SelectOption value="3">3</SelectOption>
                      </SelectChoice>
                  </div>
                  <div class="text-xs uppercase text-slate-600">Of 102</div>
              </div>
          </div>
      </div>
  </Card>
  </Layout>
</template>
