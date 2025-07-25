<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Icon, Form, FormGroup, FormLabel, Input, InputWrap, TextArea, Progress, ProgressBar, Avatar, Button } from "@/components";

import { toInitials } from '@/utilities'
import slideUp from '@/utilities/slideUp';
import slideDown from '@/utilities/slideDown';


const handleToggle = (event, target) => {
  const targetElm = document.getElementById(target);
  event.target.classList.toggle('active');
  if (window.getComputedStyle(targetElm).display === 'none') {
      slideDown(targetElm, 400);
      targetElm.classList.add('hidden')
      targetElm.classList.remove('block')
  } else {
      slideUp(targetElm, 400);
      targetElm.classList.remove('hidden')
      targetElm.classList.add('block')
  }
};
</script>
<template>
    <Layout title="Ratings Widgets">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Card Style for Ratings</BlockTitleLg>
              <BlockLeadText>Use ratings card with variant for an invaluable source of feedback.</BlockLeadText>
          </BlockPageHead>

          <Block>
              <BlockHead>
                  <BlockTitle>Rating card</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-5 ">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <div class="flex flex-col items-center text-center p-2">
                                          <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600  rounded-full font-medium">
                                          <Avatar size="xl" rounded :text="toInitials('Joe Larson')" status="active"/>
                                          </div>
                                          <div class="mt-5">
                                              <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Joe Larson</h6>
                                              <span class="text-sm text-slate-400">@Larson</span>
                                          </div>
                                      </div>
                                      <ul class="flex gap-1 mt-1 text-yellow-600 justify-center text-base">
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-half-fill"></Icon></li>
                                          <li><Icon name="star"></Icon></li>
                                      </ul>
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
                                          <Button as="Link" to="/user-details/id" size="rg" variant="white-outline" pill class="min-w-[150px] justify-center"><span>View Profile</span></Button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-span-12 md:col-span-5 ">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <h5 class="text-xl leading-tighter text-center font-bold font-heading text-slate-700 dark:text-white mb-3">Design Quality</h5>
                                      <div class="flex flex-col items-center text-center p-2">
                                          <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600  rounded-full font-medium">
                                          <Avatar size="xl" rounded text="4.5" status="active"/>
                                          </div>
                                      </div>
                                      <ul class="flex gap-1 mt-1 text-yellow-600 justify-center text-base">
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-half-fill"></Icon></li>
                                      </ul>
                                      <div class="pt-2 text-center mx-auto max-w-[200px]">
                                          <p>108 Ratings</p>
                                      </div>
                                      <div class="pt-4 ">
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                              <div class="text-sm w-fit whitespace-nowrap">5 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="72" variant="green"/>
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">72%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                              <div class="text-sm w-fit whitespace-nowrap">4 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="58" variant="indigo" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">58%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                              <div class="text-sm w-fit whitespace-nowrap">3 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="34" variant="cyan" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">34%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                              <div class="text-sm w-fit whitespace-nowrap">2 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="18" variant="yellow" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">18%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 pt-2">
                                              <div class="text-sm w-fit whitespace-nowrap">1 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="55" variant="red" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">55%</div>
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
                  <BlockTitle>Customer Review</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-6 lg:col-span-4 ">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <h5 class="text-xl leading-tighter text-center font-bold font-heading text-slate-700 dark:text-white mb-3">Customer Review</h5>
                                      <div class="flex items-center justify-center gap-3 mx-auto w-fit bg-gray-200 dark:bg-gray-1000 rounded-full px-4 py-2 my-2">
                                          <ul class="flex gap-1 text-yellow-600 justify-center text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-half-fill"></Icon></li>
                                              <li><Icon name="star"></Icon></li>
                                          </ul>
                                          <div class="text-center mx-auto">
                                              <p>3.5 out of 5</p>
                                          </div>
                                      </div>
                                      <div class="pt-2 text-center mx-auto max-w-[200px]">
                                          <span class="text-sm text-slate-400">40 customers ratings</span>
                                      </div>
                                      <div class="pt-4 ">
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                          <div class="text-sm w-fit whitespace-nowrap">5 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="62" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">62%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                          <div class="text-sm w-fit whitespace-nowrap">4 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="47"/>
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">47%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                          <div class="text-sm w-fit whitespace-nowrap">3 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="24"/>
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">24%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                          <div class="text-sm w-fit whitespace-nowrap">2 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="30" />
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">30%</div>
                                          </div>
                                          <div class="flex items-center justify-between gap-4 text-slate-400 pt-2">
                                          <div class="text-sm w-fit whitespace-nowrap">1 star</div>
                                              <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                                  <Progress class="rounded-sm w-full">
                                                      <ProgressBar :progress="40"/>
                                                  </Progress>
                                              </div>
                                              <div class="text-xs">40%</div>
                                          </div>
                                      </div>
                                      
                                      
                                  </div>
                              </div>
                          </div>

                          <div class="col-span-12 md:col-span-6 ">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6 flex items-center gap-6">
                                      <div>
                                          <h1 class="text-6xl leading-tighter text-center font-normal font-heading text-slate-700 dark:text-white mb-2">4.4</h1>
                                          <div class="flex items-center justify-center gap-3 mx-auto ">
                                              <ul class="flex gap-1 text-yellow-600 justify-center text-base">
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-half-fill"></Icon></li>
                                                  <li><Icon name="star"></Icon></li>
                                              </ul>
                                          </div>
                                      
                                          <div class="pt-2 text-center mx-auto max-w-[200px]">
                                              <span class="text-sm text-slate-400"><Icon class="me-1" name="users-fill"></Icon>47,860 Total</span>
                                          </div>
                                      </div>
                                      <div class="pt-4 w-full">
                                          <div class="flex items-center gap-4 text-slate-400 py-2">
                                              <div class="text-sm">5</div>
                                              <Progress class="rounded-sm w-full h-4">
                                                  <ProgressBar :progress="70" variant="green"/>
                                              </Progress>
                                          </div>
                                          <div class="flex items-center gap-4 text-slate-400 py-2">
                                              <div class="text-sm">4</div>
                                              <Progress class="rounded-sm w-full h-4">
                                                  <ProgressBar :progress="55" variant="indigo"/>
                                              </Progress>
                                          </div>
                                          <div class="flex items-center gap-4 text-slate-400 py-2">
                                              <div class="text-sm">3</div>
                                              <Progress class="rounded-sm w-full h-4">
                                                  <ProgressBar :progress="38" variant="cyan"/>
                                              </Progress>
                                          </div>
                                          <div class="flex items-center gap-4 text-slate-400 py-2">
                                              <div class="text-sm">2</div>
                                              <Progress class="rounded-sm w-full h-4">
                                                  <ProgressBar :progress="15" variant="yellow"/>
                                              </Progress>
                                          </div>
                                          <div class="flex items-center gap-4 text-slate-400 pt-2">
                                              <div class="text-sm">1</div>
                                              <Progress class="rounded-sm w-full h-4">
                                                  <ProgressBar :progress="30" variant="red"/>
                                              </Progress>
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
                  <BlockTitle>User Profile</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-6">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">UI/UX Designer at Google</h4>
                                      <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-half-fill"></Icon></li>
                                          <li><Icon name="star"></Icon></li>
                                      </ul>
                                      <div class="flex items-end justify-between">
                                          <ul class="pt-2 gy-2">
                                              <li><Icon name="map-pin" class="me-1"></Icon>60311 Frankfurt am Main, Italy</li>
                                              <li><Icon name="calender-date" class="me-1"></Icon>28th Sept, 2021</li>
                                              <li><Icon name="briefcase" class="me-1"></Icon>Fulltime</li>
                                          </ul>
                                          <span class="relative inline-flex rounded-full px-3 py-1 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">$1550.00</span>
                                      </div>
                                      <div id="designer" class="pt-7 hidden">
                                          <div class="border border-gray-200 dark:border-gray-900 mb-7"></div>
                                          <div class="rating-card-description">
                                              <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                              <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                              <ul class="pt-2 gy-1">
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">30 days off</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Free drinks</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Paid leave</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Healthcare</span></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="px-5 py-3 flex items-center justify-between bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900"> 
                                      <a class="font-medium text-gray-500 cursor-pointer *:pointer-events-none group" @click="(ev) => handleToggle(ev, 'designer')">
                                          <span class="group-[.active]:hidden">More info</span>
                                          <span class="hidden group-[.active]:inline-block">Less info</span>
                                          <Icon class="group-[.active]:hidden ms-3 font-bold text-base" name="upword-ios"></Icon>
                                          <Icon class="hidden group-[.active]:inline-block ms-3 font-bold text-base" name="downward-ios"></Icon>
                                      </a>
                                      <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                                  </div>
                              </div>
                          </div>

                          <div class="col-span-12 md:col-span-6">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Developer at Google</h4>
                                      <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-fill"></Icon></li>
                                          <li><Icon name="star-half-fill"></Icon></li>
                                          <li><Icon name="star"></Icon></li>
                                      </ul>
                                      <div class="flex items-end justify-between">
                                          <ul class="pt-2 gy-2">
                                              <li><Icon name="map-pin" class="me-1"></Icon>60311 Frankfurt am Main, Italy</li>
                                              <li><Icon name="calender-date" class="me-1"></Icon>28th Sept, 2021</li>
                                              <li><Icon name="briefcase" class="me-1"></Icon>Fulltime</li>
                                          </ul>
                                          <span class="relative inline-flex rounded-full px-3 py-1 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">$1550.00</span>
                                      </div>

                                      <div id="developer" class="pt-7 hidden">
                                          <div class="border border-gray-200 dark:border-gray-900 mb-7"></div>
                                          <div class="rating-card-description">
                                              <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                              <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                              <ul class="pt-2 gy-1">
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">30 days off</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Free drinks</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Paid leave</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Healthcare</span></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="px-5 py-3 flex items-center justify-between bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900">
                                      <a class="font-medium text-gray-500 cursor-pointer *:pointer-events-none group" @click="(ev) => handleToggle(ev, 'developer')">
                                          <span class="group-[.active]:hidden">More info</span>
                                          <span class="hidden group-[.active]:inline-block">Less info</span>
                                          <Icon class="group-[.active]:hidden ms-3 font-bold text-base" name="upword-ios"></Icon>
                                          <Icon class="hidden group-[.active]:inline-block ms-3 font-bold text-base" name="downward-ios"></Icon>
                                      </a>
                                      <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                                  </div>
                              </div>
                          </div>
                      </div>  
                  </CardBody>
              </Card>
          </Block> 
      
          <Block>
              <BlockHead>
                  <BlockTitle>Institute Profile</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-6">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  
                                  <div class="p-5 sm:p-6">
                                      <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                                      <div class="flex items-end justify-between">
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-half-fill"></Icon></li>
                                              <li><Icon name="star"></Icon></li>
                                          </ul>
                                          <span class="relative inline-flex rounded-full px-3 py-1 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">$1550.00</span>
                                      </div>
                                      <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-6 mb-3">Criteria on Softnio</h5>
                                      <div class="flex justify-between py-2">
                                          <span class="text-slate-400">Productivity</span>
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                          </ul>
                                      </div>
                                      <div class="flex justify-between py-2">
                                          <span class="text-slate-400">Competitive Position</span>
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star"></Icon></li>
                                          </ul>
                                      </div>
                                      <div class="flex justify-between py-2">
                                          <span class="text-slate-400">Brand Value</span>
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                          </ul>
                                      </div>
                                      <div class="flex justify-between py-2">
                                          <span class="text-slate-400">Environment</span>
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star"></Icon></li>
                                          </ul>
                                      </div>
                                      
                                      <div id="institute" class="pt-7 hidden">
                                          <div class="border-t border-gray-200 dark:border-gray-900 mb-7"></div>
                                          <div class="rating-card-description">
                                              <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                              <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                              <ul class="pt-2 py-1">
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">30 days off</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Free drinks</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Paid leave</span></li>
                                                  <li class="py-1"><Icon name="check-circle" class="text-primary-600 me-1"></Icon><span class="text-slate-400">Healthcare</span></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="px-5 py-3 flex items-center justify-between bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900"> 
                                      <a class="font-medium text-gray-500 cursor-pointer *:pointer-events-none group" @click="(ev) => handleToggle(ev, 'institute')">
                                          <span class="group-[.active]:hidden">More info</span>
                                          <span class="hidden group-[.active]:inline-block">Less info</span>
                                          <Icon class="group-[.active]:hidden ms-3 font-bold text-base" name="upword-ios"></Icon>
                                          <Icon class="hidden group-[.active]:inline-block ms-3 font-bold text-base" name="downward-ios"></Icon>
                                      </a>
                                      <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                                  </div>
                              </div>
                          </div> 
                      </div>  
                  </CardBody>
              </Card>
          </Block> 

          <Block>
              <BlockHead>
                  <BlockTitle>Review form</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-6">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <Form>
                                      <div class="p-5 sm:p-6">
                                          <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                                          <div class="flex gap-3 items-center">
                                              <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-half-fill"></Icon></li>
                                                  <li><Icon name="star"></Icon></li>
                                              </ul>
                                              <span>4.4 (78)</span>
                                          </div>
                                          <div class="my-4">
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="title">Title</FormLabel>
                                                  <InputWrap>
                                                      <Input id="title" defaultValue="You only miss it when it gone!"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="job-title">Job Title</FormLabel>
                                                  <InputWrap>
                                                      <Input id="job-title" defaultValue="Sr. Frontend Developer"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="experience">How was your experience?</FormLabel>
                                                  <InputWrap>
                                                      <TextArea id="experience" autoComplete="off" defaultValue="I've been using Dashlite for months now and with every update, it's just becoming better. Thank you for such a great design touch. Really love it"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-11 mb-3">Criteria on Softnio</h5>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Productivity</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Competitive Position</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Brand Value</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Environment</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star-fill"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="px-5 py-4 flex items-center justify-end bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900">
                                          <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Published Review</a>
                                      </div>
                                  </Form>
                              </div>
                          </div>

                          <div class="col-span-12 md:col-span-6">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <Form>
                                      <div class="p-5 sm:p-6">
                                          <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                                          <div class="flex gap-3 items-center">
                                              <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-half-fill"></Icon></li>
                                                  <li><Icon name="star"></Icon></li>
                                              </ul>
                                              <span>4.4 (78)</span>
                                          </div>
                                          <div class="my-4">
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="title">Title</FormLabel>
                                                  <InputWrap>
                                                      <Input id="title" placeholder="Title"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="job-title">Job Title</FormLabel>
                                                  <InputWrap>
                                                      <Input id="job-title" placeholder="Job Title"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <FormGroup>
                                                  <FormLabel class="mb-2" htmlFor="experience">How was your experience?</FormLabel>
                                                  <InputWrap>
                                                      <TextArea id="experience" autoComplete="off" placeholder="Describe your experience at Softnio"/>
                                                  </InputWrap>
                                              </FormGroup>
                                              <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-11 mb-3">Criteria on Softnio</h5>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Productivity</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Competitive Position</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Brand Value</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                              <div class="flex justify-between py-2">
                                                  <span class="text-slate-400">Environment</span>
                                                  <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                      <li><Icon name="star"></Icon></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="px-5 py-4 flex items-center justify-end bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900">
                                          <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Published Review</a>
                                      </div>
                                  </Form>
                              </div>
                          </div>
                      </div>  
                  </CardBody>
              </Card>
          </Block> 

          <Block>
              <BlockHead>
                  <BlockTitle>Customers Ratings</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-9">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <div class="flex items-center justify-between">
                                          <div>
                                              <h4 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Design Quality</h4>
                                              <p class="text-slate-600">by <span class="text-primary-600">Softnio</span> 13 days ago</p>
                                          </div>
                                          <div class="flex gap-3 items-center">
                                              <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-fill"></Icon></li>
                                                  <li><Icon name="star-half-fill"></Icon></li>
                                                  <li><Icon name="star"></Icon></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div> 

                              <div class="border rounded-md bg-white-50 dark:bg-gray-950 border-gray-300 dark:border-gray-900 mt-7 ">
                                  <div class="flex items-center justify-between bg-slate-50 dark:bg-gray-1000 rounded-tl-md rounded-tr-md p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                                      <div class="card-title">
                                          <h4 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Feature Quality</h4>
                                          <p class="text-slate-600">by <span class="text-primary-600">Softnio</span> 6 days ago</p>
                                      </div>
                                      <div class="flex gap-3 items-center">
                                          <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-fill"></Icon></li>
                                              <li><Icon name="star-half-fill"></Icon></li>
                                              <li><Icon name="star"></Icon></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                                      <p class="text-slate-400">I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it. Really love it</p>
                                  </div>
                                  <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                                      <div class="flex items-center">
                                          <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                              <span>AB</span>
                                          </div>
                                          <div class="ms-4">
                                              <div class="flex items-center gap-3 mb-3">
                                                  <h6 class="text-lg leading-tighter font-bold font-heading text-slate-700 dark:text-white">Abu Bin Ishiyak</h6>
                                                  <span class="relative inline-flex rounded-sm px-2 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Author</span>
                                              </div>
                                              <p class=" text-slate-400">Time zone depend on your server time as we use that by default. So you need to change that from your server. For data display issues, you may send your website url so we can check what actually wrong.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="p-5 sm:p-6">
                                      <div class="flex items-center">
                                          <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-full font-medium">
                                              <span>IB</span>
                                          </div>
                                          <div class="ms-4">
                                              <h6 class="text-lg leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Ifrat Binte</h6>
                                              <p class=" text-slate-400">Thanks for the help. Really great support.</p>
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
                  <BlockTitle>Customers Ratings</BlockTitle>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-cols-12 gap-7">
                          <div class="col-span-12 md:col-span-9">
                              <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                                  <div class="p-5 sm:p-6">
                                      <div class="flex gap-3 items-center">
                                          <ul class="flex gap-1 text-red-600 justify-start text-base">
                                              <li><Icon name="heart-fill"></Icon></li>
                                              <li><Icon name="heart-fill"></Icon></li>
                                              <li><Icon name="heart-fill"></Icon></li>
                                              <li><Icon name="heart-fill"></Icon></li>
                                              <li><Icon name="heart"></Icon></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div> 
                          </div>
                      </div>  
                  </CardBody>
              </Card>
          </Block> 
        </div>
    </Layout>
</template>