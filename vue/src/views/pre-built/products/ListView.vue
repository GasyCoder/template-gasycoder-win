<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Dropdown,
  CheckBox, Avatar, Pagination, PaginationPrev, PaginationItem, PaginationDot, PaginationNext, SelectChoice, SelectOption, FormGroup, FormLabel, InputWrap, Input, InputIcon

 } from '@/components'
import { toInitials } from '@/utilities'

import AddProduct from './AddProduct.vue';
import { useProductsStore } from '@/stores/products'
const products = useProductsStore()
const showAddProduct = ref(false)
</script>

<template>
  <Layout title="Product List">
    <PageHead>
        <PageHeadGroup>
            <PageHeadTitle>Products</PageHeadTitle>
        </PageHeadGroup>
        <PageHeadGroup>
            <PageHeadOption>
                <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                    <li>
                        <InputWrap class="max-w-[190px]">
                            <InputIcon icon="search" end/>
                            <Input id="default-03" icon="end" placeholder="Quick search by id" />
                        </InputWrap>
                    </li>
                    <li>
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0,4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                          <template #button>
                            <Button size="rg" variant="white-outline">
                                <span class="me-1">Status</span>
                                <Icon class="-me-1 text-base/4.5" name="chevron-down" />
                            </Button>
                          </template>
                          <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>New Items</span></MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Featured</span></MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><span>Out of Stock</span></MenuItem>
                                </li>
                            </ul>
                          </template>
                        </Dropdown>
                    </li>
                    <li class="ms-auto">
                        <Button size="rg" variant="primary" class="hidden sm:inline-flex" @click="()=>{showAddProduct = !showAddProduct }">
                            <Icon class="text-xl/4.5" name="plus" />
                            <span class="ms-3">Add Product</span>
                        </Button>
                        <Button size="rg" variant="primary" icon class="sm:hidden"  @click="()=>{showAddProduct = !showAddProduct }">
                            <Icon class="text-xl/4.5" name="plus" />
                        </Button>
                    </li>
                </ul>
            </PageHeadOption>
        </PageHeadGroup>
    </PageHead>
    <div class="border-y sm:border-x sm:rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full -mx-3.5 sm:m-0">
        <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
            <thead>
                <tr>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start w-12 sm:w-13">
                        <div class="flex items-center">
                            <CheckBox size="sm" id="pid-all" />
                        </div>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start hidden sm:table-cell">
                        <span class="block text-xs/5 text-slate-400 font-normal">Name</span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start">
                        <span class="block text-xs/5 text-slate-400 font-normal">SKU</span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start">
                        <span class="block text-xs/5 text-slate-400 font-normal">Price</span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start">
                        <span class="block text-xs/5 text-slate-400 font-normal">Stock</span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                        <span class="block text-xs/5 text-slate-400 font-normal">Category</span>
                    </th>
                    <th class="py-2 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                        <em class="block text-lg/5 text-slate-400 ni ni-star-round"></em>
                    </th>
                    <th class="py-0 px-2 first:ps-6 last:pe-6 border-b align-middle border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                        <Dropdown class="-me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                                <ButtonZoom size="md">
                                    <Icon class="text-xl" name="more-h" />
                                </ButtonZoom>
                            </template>
                            <template #content>
                                <ul class="py-2">
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="edit" />
                                            <span>Edit Selected</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="trash" />
                                            <span>Remove Selected</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="bar-c" />
                                            <span>Update Stock</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="invest" />
                                            <span>Update Price</span>
                                        </MenuItem>
                                    </li>
                                </ul>
                            </template>
                        </Dropdown>
                    </th>
                </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in products.list" :key="index" class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                      <div class="flex items-center">
                          <CheckBox size="sm" :id="'check'+item.id" />
                      </div>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden sm:table-cell">
                      <div class="flex items-center">
                          <Avatar :img="item.img" size="lg" />
                          <span class="ms-4 block text-sm font-medium leading-6 text-slate-700 dark:text-white">
                              {{item.name}}
                          </span>
                      </div>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                      <span class="text-xs text-slate-400">{{item.sku}}</span>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                      <span class="text-sm font-medium text-slate-700 dark:text-white">$ {{item.price}}</span>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                      <span class="text-xs text-slate-400">{{item.stock}}</span>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                      <span class="text-xs text-slate-400">
                        <template v-for="(cItem,cIndex) in item.category" :key="cIndex">
                            {{cItem}}{{item.category.length > cIndex + 1 && ", "}}
                        </template>
                      </span>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                      <div :class="`inline-flex relative group/asterisk cursor-pointer ${item.fav ? 'active' : ''}`">
                          <em class="text-lg/none text-primary-600 ni ni-star"></em>
                          <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                      </div>
                  </td>
                  <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                        <Dropdown class="-me-2" placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                            <template #button>
                                <ButtonZoom>
                                    <Icon class="text-xl" name="more-h" />
                                </ButtonZoom>
                            </template>
                            <template #content>
                                <ul class="py-2">
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="edit" />
                                            <span>Edit Product</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="eye" />
                                            <span>View Product</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="activity-round" />
                                            <span>Product Orders</span>
                                        </MenuItem>
                                    </li>
                                    <li>
                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                            <Icon class="text-start text-lg/none w-7 opacity-80" name="trash" />
                                            <span>Remove Product</span>
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
                        <SelectChoice id="pageNumber">
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
    <AddProduct v-model:show="showAddProduct" />
  </Layout>
</template>
