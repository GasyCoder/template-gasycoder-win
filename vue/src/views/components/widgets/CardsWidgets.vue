<script setup>
import Layout from '@/layout/Main.vue'
import { MenuItem } from '@headlessui/vue'
import { 
  Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, 
  Avatar, Button, ButtonZoom, Badge, Icon, Progress, ProgressBar, Lightbox, Dropdown, 

} from "@/components";
import { toInitials } from '@/utilities'

import InvestmentOverviewCard from '../../dashboard/Invest/partials/InvestmentOverviewCard.vue';
import NewUsersCard from '../../dashboard/Sales/partials/NewUsersCard.vue';
import RecentActivitiesCard from '../../dashboard/Sales/partials/RecentActivitiesCard.vue';
import SupportRequestsCard from '../../dashboard/Sales/partials/SupportRequestsCard.vue';
import RecentNotificationsCard from '../../dashboard/Invest/partials/RecentNotificationsCard.vue';
import PagesViewCard from '../../dashboard/Analytics/partials/PagesViewCard.vue';
import ActionCenterCard from '../../dashboard/Crypto/partials/ActionCenterCard.vue';

</script>
<template>
    <Layout title="Card Widgets">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Card Widgets</BlockTitleLg>
          </BlockPageHead>

          <Block>
              <BlockHead>
                  <BlockTitle>Product card</BlockTitle>
                  <BlockText>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 sm:col-span-7 md:col-span-5">
                                  <div class="border dark:border-gray-900 rounded-md">
                                      <div class="relative">
                                          <router-link to="/product-details/1">
                                              <img class="rounded-t" src="/images/product/lg-a.jpg" alt="" />
                                          </router-link>
                                          <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                                              <li><Badge variant="green">New</Badge></li>
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
                                              <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#link" @click="(e)=> e.preventDefault()">Smart Watch</a></li>
                                          </ul>
                                          <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                                              <router-link class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300"  to="/product-details/1">Classy Modern Smart watch</router-link>
                                          </h5>
                                          <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                                              <small class="text-slate-400 text-xs font-normal line-through me-1">$350</small> 
                                              $324
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Image Popup</BlockTitle>
                  <BlockText>Use <code class="text-pink-600">.popup-image</code> on an <code class="text-pink-600">a</code> tag then popup image in <code class="text-pink-600">[href]</code> attribute.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12">
                          <div class="col-span-12 sm:col-span-6 lg:col-span-5">
                              <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                                  <Lightbox class="relative z-[1]" sources="/images/stock/a.jpg">
                                      <img class="w-full rounded-t" src="/images/stock/a.jpg" alt="" />
                                  </Lightbox>
                                  <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                                      <div class="flex items-center">
                                          <Avatar size="rg" rounded img="/images/avatar/a-sm.jpg"/>
                                          <div class="ms-4">
                                              <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Dustin Mock</span>
                                              <span class="block text-xs leading-4 text-slate-400">mock@softnio.com</span>
                                          </div>
                                      </div>
                                      <div>
                                          <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                                              <Icon class="text-xl leading-4.5" name="heart" />
                                              <span class="ms-3">34</span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>User card</BlockTitle>
                  <BlockText>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12">
                          <div class="col-span-12 md:col-span-6 lg:col-span-4">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <div class="relative">
                                          <div class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-red-600 text-white"><Icon name="na" /></div>
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
                                              <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600  rounded-full font-medium">
                                              <Avatar size="xl" rounded :text="toInitials('Abu Bin Ishtiyak')" status="active"/>
                                              </div>
                                              <div class="mt-5">
                                                  <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Abu Bin Ishtiyak</h6>
                                                  <span class="text-sm text-slate-400">@ishtiyak</span>
                                              </div>
                                          </div>
                                          <div class="pt-2 text-center mx-auto max-w-[200px]">
                                              <p>I am an UI/UX Designer and Love to be creative.</p>
                                          </div>
                                          <ul class="flex justify-around text-center pt-4 pb-6 w-full">
                                              <li class="px-2">
                                                  <span class="text-lg text-slate-800 dark:text-white block">213</span>
                                                  <span class="text-sm leading-6 text-slate-400 block">Projects</span>
                                              </li>
                                              <li class="px-2">
                                                  <span class="text-lg text-slate-800 dark:text-white block">87.5%</span>
                                                  <span class="text-sm leading-6 text-slate-400 block">Performed</span>
                                              </li>
                                              <li class="px-2">
                                                  <span class="text-lg text-slate-800 dark:text-white block">587</span>
                                                  <span class="text-sm leading-6 text-slate-400 block">Tasks</span>
                                              </li>
                                          </ul>
                                          <div class="flex justify-center pb-1">
                                              <Button as="router-link" to="/user-details/1" size="rg" variant="white-outline" pill class="min-w-[150px] justify-center"><span>View Profile</span></Button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>User Cards Alternet</BlockTitle>
                  <BlockText>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12">
                          <div class="col-span-12 md:col-span-6 lg:col-span-4">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
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
                                              <div class="relative flex-shrink-0 flex items-center justify-center  text-sm text-white bg-primary-600  rounded-full font-medium">
                                                  <Avatar size="2xl"  rounded :text="toInitials('Abu Bin Ishtiyak')" status="active"/>
                                              </div>
                                              <div class="mt-5">
                                                  <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2 ">Abu Bin Ishtiyak</h6>
                                                  <span class="text-sm text-slate-400">@ishtiyak</span>
                                              </div>
                                          </div>
                                          <ul class="pt-4 pb-5">
                                              <li class="flex items-center justify-between text-base leading-7">
                                                  <span class="text-slate-400 dark:text-slate-600">Join Date</span>
                                                  <span class="text-slate-600 dark:text-slate-400">24 Jun 2015</span>
                                              </li>
                                              <li class="flex items-center justify-between text-base leading-7">
                                                  <span class="text-slate-400 dark:text-slate-600">Contact</span>
                                                  <span class="text-slate-600 dark:text-slate-400">+88 01713-123656</span>
                                              </li>
                                              <li class="flex items-center justify-between text-base leading-7">
                                                  <span class="text-slate-400 dark:text-slate-600">Email</span>
                                                  <span class="text-slate-600 dark:text-slate-400">info@softnio.com</span>
                                              </li>
                                          </ul>
                                          <div class="flex justify-center pb-1">
                                              <Button as="router-link" to="/user-details/1" size="rg" variant="primary-pale" block class="min-w-[150px] justify-center"><span>View Profile</span></Button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Card with tabs</BlockTitle>
                  <BlockText>With this card design, you can use multiple tabs on a Card</BlockText>
                  <BlockText>Card titles are used by adding <code class="text-pink-600">.card-title</code> to a <code class="text-primary-600">&lt;h*&gt;</code> tag. <br/> In the same way, links are added and placed next to each other by adding <code class="text-pink-600">.card-link</code> to an <code class="text-primary-600">&lt;a&gt;</code> tag.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <InvestmentOverviewCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Pricing table</BlockTitle>
                  <BlockText>You can customize it ton of ways.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6 lg:col-span-4 border dark:border-gray-900 rounded-md">
                                  <div class="text-center p-5 sm:p-6">
                                      <div class="pb-5">
                                          <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Starter</h4>
                                          <p class="text-sm text-slate-400">Enjoy entry level of invest & earn.</p>
                                      </div>
                                      <div class="flex flex-wrap -mx-3.5">
                                          <div class="w-1/2 px-3.5">
                                              <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">1.67%</div>
                                              <div class="text-sm text-slate-400">Daily Interest</div>
                                          </div>
                                          <div class="w-1/2 px-3.5">
                                              <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">30</div>
                                              <div class="text-sm text-slate-400">Term Days</div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="border-t p-5 sm:p-6 border-gray-200 dark:border-gray-800">
                                      <ul>
                                          <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$250</span></li>
                                          <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$1,999</span></li>
                                          <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                                          <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">125%</span></li>
                                      </ul>
                                      <div class="mt-6 text-center">
                                          <Button size="rg" variant="white-outline">Choose this Plan</Button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Pricing table alt</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6 lg:col-span-4 border dark:border-gray-900 rounded-md">
                                  <div class="text-center p-5 sm:p-6">
                                      <div class="py-1 mb-6">
                                          <img class="max-w-[90px] mx-auto" src="/images/icons/plan-s1.svg" alt="" />
                                      </div>
                                      <div class="w-[220px] mx-auto">
                                          <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Starter</h5>
                                          <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                                      </div>
                                      <div class="pt-5">
                                          <div class="text-2xl text-slate-600 dark:text-white font-bold">$99 <span>/yr</span></div>
                                          <span class="text-sm text-slate-400">1 User, Billed Yearly</span>
                                      </div>
                                      <div class="pt-6">
                                          <Button size="rg" variant="primary">Select Plan</Button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Pricing table alt</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6 lg:col-span-5 rounded-md">
                                  <div class="border dark:border-gray-900 rounded-md h-full">
                                      <div class="p-5 sm:p-6">
                                          <div class="flex justify-between items-start gap-x-3 mb-5">
                                              <a href="#link" @click="(e)=> e.preventDefault()" class="flex items-center">
                                                  <Avatar size="rg" variant="purple" :text="toInitials('DashWind Development')" />
                                                  <div class="ms-4 flex flex-col">
                                                      <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">DashWind Development</h6>
                                                      <span class="text-sm leading-4 text-slate-400">Softnio</span>
                                                  </div>
                                              </a>
                                              <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                                <template #button>
                                                  <ButtonZoom size="md" class="-me-2 -mt-2">
                                                      <Icon class="text-xl" name="more-h" />
                                                  </ButtonZoom>
                                                </template>
                                                <template #content>
                                                  <ul class="py-2">
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-lg/none w-7 opacity-80" name="eye" />
                                                            <span>View Project</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-lg/none w-7 opacity-80" name="edit" />
                                                            <span>Edit Project</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <Icon class="text-lg/none w-7 opacity-80" name="check-round-cut" />
                                                            <span>Mark As Done</span>
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                                </template>
                                              </Dropdown>
                                          </div>
                                          <div class="mb-4">
                                              <p>Design and develop the DashWind template for Envato Marketplace.</p>
                                          </div>
                                          <div class="mb-4">
                                              <div class="flex justify-between mb-2">
                                                  <div class="flex items-center text-slate-400">
                                                      <Icon class="me-2 text-base/6" name="check-round-cut" />
                                                      <span>3 Tasks</span>
                                                  </div>
                                                  <div class="font-medium text-slate-600 dark:text-slate-300">93.5%</div>
                                              </div>
                                              <Progress>
                                                  <ProgressBar :progress="93.5" />
                                              </Progress>
                                          </div>
                                          <div class="flex items-center justify-between">
                                              <ul class="flex items-center gap-1.5">
                                                  <li>
                                                      <Avatar variant="primary" size="sm" rounded :text="toInitials('Abu')"/>
                                                  </li>
                                                  <li>
                                                      <Avatar size="sm" rounded img="/images/avatar/b-sm.jpg"/>
                                                  </li>
                                                  <li>
                                                      <Avatar size="sm" text="+12" variant="light" rounded/>
                                                  </li>
                                              </ul>
                                              <Badge variant="yellow-pale">
                                                  <Icon class="me-2 text-base/none" name="clock" />
                                                  <span>5 Days Left</span>
                                              </Badge>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Kanban Card</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6 lg:col-span-5">
                                  <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                                      <div class="p-5 sm:p-6">
                                          <div class="flex justify-between">
                                              <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Techyspec Keyword Research</h6>
                                              <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="p-4 m-1.5 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]" buttonClass="[&>*]:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                                <template #button>
                                                    <Avatar size="xs" rounded variant="red" text="VL"></Avatar>
                                                </template>
                                                <template #content>
                                                  <div class="flex items-center w-full">
                                                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-red-600 h-8 w-8 rounded-full font-medium">
                                                            <span>VL</span>
                                                        </div>
                                                        <div class="ms-3">
                                                            <div class="text-slate-600 dark:text-slate-400 text-xs font-bold">Victoria Lynch</div>
                                                        </div>
                                                    </div>
                                                </template>
                                              </Dropdown>
                                          </div>
                                          <p class="pt-3">Keyword recarch for @techyspec business profile and there other websites, to improve ranking.</p>
                                          <div class="pt-2">
                                              <span class="relative inline-flex rounded-sm px-1.5 border border-gray-900 dark:border-gray-400 bg-gray-900 dark:bg-gray-400 text-white dark:text-gray-700 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Techyspec</span>
                                              <span class="relative inline-flex rounded-sm px-1.5 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle ms-1">SEO</span>
                                          </div>

                                          <div class="flex justify-between pt-2 text-slate-400">
                                              <ul class="flex gap-2">
                                                  <li><em class="icon ni ni-calendar me-1"></em><span>02 Jan 2021</span></li>
                                                  <li><em class="icon ni ni-notes me-1"></em><span>Recharch</span></li>
                                              </ul>
                                              <ul class="flex gap-2">
                                                  <li><em class="icon ni ni-clip me-1"></em><span>31</span></li>
                                                  <li><em class="icon ni ni-comments me-1"></em><span>21</span></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>User list card</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">User list, customer list</strong> related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <NewUsersCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Activities card with tabs.</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">Activities</strong> or related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <RecentActivitiesCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Support Requests</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">Support Requests</strong>  related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <SupportRequestsCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Notification Card</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">Notifications</strong>  related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <RecentNotificationsCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>User Count</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">User Count, View Count</strong>  related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <PagesViewCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>

          <Block>
              <BlockHead>
                  <BlockTitle>Action Center</BlockTitle>
                  <BlockText>The following card can be use for <strong class="text-primary-600">Action Center, Settings</strong>  related filed.</BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class=" rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                          <div class="grid grid-cols-12">
                              <div class="col-span-12 md:col-span-6">
                                  <ActionCenterCard/>
                              </div>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>