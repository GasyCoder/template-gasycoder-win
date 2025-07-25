<script setup>
import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Dropdown, Badge,
  CheckBox, Avatar, SelectChoice, SelectOption, FormGroup, FormLabel, InputWrap, Input, InputIcon, Card, CardBody
 } from '@/components'
import { toInitials } from '@/utilities'

import AddProduct from './AddProduct.vue';
import { useProductsStore } from '@/stores/products'
const products = useProductsStore()
const showAddProduct = ref(false)
</script>

<template>
  <Layout title="Product Cards" container>
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
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
      <div v-for="(item, index) in products.card" key="index" class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
          <Card class="h-full group">
              <div class="relative">
                  <router-link :to="`/product-details/${item.id}`">
                      <img class="rounded-t" :src="item.img" alt="" />
                  </router-link>
                  <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                      <li v-if="item.new"><Badge variant="green">New</Badge></li>
                      <li v-if="item.hot"><Badge variant="red">Hot</Badge></li>
                  </ul>
                  <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                      <li class="px-0.5">
                          <a href="#link" @click="(e)=> e.preventDefault()" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                              <em class="text-base ni ni-cart"></em>
                          </a>
                      </li>
                      <li class="px-0.5">
                          <a href="#link" @click="(e)=> e.preventDefault()" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                              <em class="text-base ni ni-heart"></em>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="p-5 sm:p-6 text-center">
                  <ul class="flex flex-wrap justify-center">
                      <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#link" @click="(e)=> e.preventDefault()">{{item.category}}</a></li>
                  </ul>
                  <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                      <router-link class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300"  :to="`/product-details/${item.id}`">{{item.title}}</router-link>
                  </h5>
                  <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                      <small class="text-slate-400 text-xs font-normal line-through">${{item.price}}</small> 
                      ${{item.currentPrice}}
                  </div>
              </div>
          </Card>
      </div>
    </div>
    <AddProduct v-model:show="showAddProduct" />
  </Layout>
</template>
