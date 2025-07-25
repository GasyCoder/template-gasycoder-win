<script setup>
import { ref } from 'vue'
import Layout from '@/layout/FullScreen.vue'
import { MenuItem } from '@headlessui/vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Avatar,
  Card, CardBody, ButtonGroup, Dropdown, FormGroup, FormLabel, InputWrap, Input
 } from '@/components'
 import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';
const showPageAside = ref(false);
</script>

<template>
  <Layout title="Reset">
    <div class="relative flex min-h-screen">
        <div class="relative flex flex-col min-h-full bg-white dark:bg-gray-950 w-full lg:w-[45%] flex-shrink-0">
            <div class="absolute lg:hidden top-0 end-0 p-5 sm:p-11 z-10">
                <Button  @click="()=>{ showPageAside = ! showPageAside }" icon size="rg" variant="white-outline"><Icon class="text-xl" name="info" /></Button>
            </div>

            <div class="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
                <div class="relative flex flex-shrink-0 pb-11">
                    <router-link to="/" class="relative inline-block transition-opacity duration-300 h-10">
                        <img class="h-full opacity-0 dark:opacity-100" src="/logo.png" srcSet="/logo2x.png 2x" alt="logo" />
                        <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="/logo-dark.png" srcSet="/logo-dark2x.png 2x" alt="logo" />
                    </router-link>
                </div>
                <div class="pb-5">
                    <h5 class="text-xl font-heading font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Reset password</h5>
                    <p class="text-sm leading-6 text-slate-400">If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                </div>
                <form action="#">
                    <FormGroup>
                        <FormLabel class="flex justify-between items-center mb-2" htmlFor="emailAddress">
                            <span>Email </span>
                            <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-xs leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">Need Help?</a>
                        </FormLabel>
                        <InputWrap>
                            <Input id="emailAddress" placeholder="Enter your email address or username" autoComplete="off" size="lg" />
                        </InputWrap>
                    </FormGroup>
                    <FormGroup>
                        <Button as="router-link" to="/auths/auth-success" size="lg" variant="primary" block>Send Reset Link</Button>
                    </FormGroup>
                </form>
                <div class="pt-6"> 
                    <router-link class="text-primary-500 hover:text-primary-600 font-medium transition-all duration-300" to="/auths/auth-login">Return to login</router-link>
                </div>
            </div>
            <div class="mx-auto w-full max-w-[420px] px-5 pt-7 pb-10 2xl:me-[90px]">
                <ul class="flex flex-wrap items-center -m-3 relative">
                    <li>
                        <router-link class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" to="/terms-policy">Terms &amp; Condition</router-link>
                    </li>
                    <li>
                        <router-link class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" to="/terms-policy">Privacy Policy</router-link>
                    </li>
                    <li>
                        <router-link class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" to="/faqs">Help</router-link>
                    </li>
                    <li>
                        <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[0,0]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]">
                          <template #button>
                              <button class="inline-flex items-center text-xs leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3">
                                <span>English</span> 
                                <Icon class="text-sm ms-1" name="chevron-up" />
                            </button>
                          </template>
                          <template #content>
                            <ul>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <img src="/images/flags/english.png" alt="" class="w-6 me-3" />
                                        <span>English</span>
                                    </MenuItem>
                                </li>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <img src="/images/flags/spanish.png" alt="" class="w-6 me-3" />
                                        <span>Español</span>
                                    </MenuItem>
                                </li>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <img src="/images/flags/french.png" alt="" class="w-6 me-3" />
                                        <span>Français</span>
                                    </MenuItem>
                                </li>
                                <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <img src="/images/flags/turkey.png" alt="" class="w-6 me-3" />
                                        <span>Türkçe</span>
                                    </MenuItem>
                                </li>
                            </ul>
                          </template>
                        </Dropdown>
                    </li>
                </ul>
                <div class="mt-4.5">
                    <p>&copy; 2025 DashWind. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <div id="pageAside" :class="{'peer min-w-[260px] max-w-[calc(100%-2.5rem)] flex flex-col w-full min-h-screen bg-gray-50 dark:bg-gray-900 flex-shrink flex-grow fixed lg:static top-0 end-0 z-[999] transition-transform duration-500 lg:transition-none translate-x-full rtl:-translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none':true, 'active': showPageAside}">
            <div class="m-auto w-full max-w-[550px] p-4 sm:p-11">
                <Swiper
                dir="rtl"
                :modules="[Pagination]"
                :pagination="{clickable: true}"
                :slidesPerView="1"
                class="[&>.swiper-pagination]:relative [&>.swiper-pagination]:flex [&>.swiper-pagination]:justify-center [&>.swiper-pagination]:gap-1 [&>.swiper-pagination]:pt-6 [&>.swiper-pagination_.swiper-pagination-bullet]:bg-gray-300 [&>.swiper-pagination_.swiper-pagination-bullet]:opacity-100 [&>.swiper-pagination_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-slate-400"
                >
                    <SwiperSlide>
                        <div class="text-center">
                            <img src="/images/slides/promo-a.png" srcSet="/images/slides/promo-a2x.png 2x" alt="" />
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="text-center">
                            <img src="/images/slides/promo-b.png" srcSet="/images/slides/promo-b2x.png 2x" alt="" />
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </SwiperSlide>
                    <SwiperSlide>
                        <div class="text-center">
                            <img src="/images/slides/promo-c.png" srcSet="/images/slides/promo-c2x.png 2x" alt="" />
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </SwiperSlide>
                </Swiper>
            </div>
        </div>
        <div @click="()=>{ showPageAside = false }" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
    </div>
  </Layout>
</template>
