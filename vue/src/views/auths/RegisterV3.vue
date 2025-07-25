<script setup>
import { ref } from 'vue'
import Layout from '@/layout/FullScreen.vue'
import { MenuItem } from '@headlessui/vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Avatar,
  Card, CardBody, ButtonGroup, Dropdown, FormGroup, FormLabel, InputWrap, Input, CheckBox
 } from '@/components'
const showPageAside = ref(false);

const showPassword = ref(false);
</script>

<template>
  <Layout title="Registration v3">
    <div class="relative flex flex-wrap lg:flex-nowrap min-h-screen">
        <div class="relative flex flex-col min-h-full bg-white dark:bg-gray-950 w-full lg:w-[45%] flex-shrink-0">
        <div class="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
            <div class="relative flex flex-shrink-0 pb-11">
                <router-link to="/" class="relative inline-block transition-opacity duration-300 h-10">
                    <img class="h-full opacity-0 dark:opacity-100" src="/logo.png" srcSet="/logo2x.png 2x" alt="logo" />
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="/logo-dark.png" srcSet="/logo-dark2x.png 2x" alt="logo" />
                </router-link>
            </div>
            <div class="pb-5">
                <h5 class="text-xl font-heading font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Register</h5>
                <p class="text-sm leading-6 text-slate-400">Create New DashWind Account</p>
            </div>
            <form action="#">
                <FormGroup>
                    <FormLabel class="flex justify-between items-center mb-2" htmlFor="fullName">
                        <span>Name </span>
                    </FormLabel>
                    <InputWrap>
                        <Input id="fullName" placeholder="Enter your name" autoComplete="off" size="lg" />
                    </InputWrap>
                </FormGroup>
                <FormGroup>
                    <FormLabel class="flex justify-between items-center mb-2" htmlFor="emailAddress">
                        <span>Email or Username </span>
                    </FormLabel>
                    <InputWrap>
                        <Input id="emailAddress" placeholder="Enter your email address or username" autoComplete="off" size="lg" />
                    </InputWrap>
                </FormGroup>
                <FormGroup>
                    <FormLabel class="flex justify-between items-center mb-2" htmlFor="password">
                        <span>Passcode </span>
                    </FormLabel>
                    <InputWrap>
                      <a tabIndex="-1" href="#password" @click="(ev) => {
                              ev.preventDefault();
                              showPassword = !showPassword;
                            }" :class="{'absolute h-11 w-11 top-0 end-0 flex items-center justify-center js-password-toggle group/password':true, 'is-shown':showPassword}">
                            <em class="group-[.is-shown]/password:hidden text-slate-400 text-base leading-none ni ni-eye"></em>
                            <em class="hidden group-[.is-shown]/password:block text-slate-400 text-base leading-none ni ni-eye-off"></em>
                        </a>
                        <Input id="password" :type="showPassword ? 'text' : 'password'" placeholder="Enter your passcode" autoComplete="off" size="lg" />
                    </InputWrap>
                </FormGroup>
                <FormGroup class="flex">
                    <CheckBox id="checkAgree">
                    I agree to DashWind <router-link class="text-primary-500 hover:text-primary-600 transition-all duration-300" to="/terms-policy">Privacy Policy</router-link> &amp; <router-link class="text-primary-500 hover:text-primary-600 transition-all duration-300" to="/terms-policy">Terms</router-link>.
                    </CheckBox>
                </FormGroup>
                <FormGroup>
                    <Button as="router-link" to="/auths/auth-login-v3" size="lg" variant="primary" block>Register</Button>
                </FormGroup>
            </form>
            <div class="pt-6"> 
                Already have an account ?
                <router-link class="text-primary-500 hover:text-primary-600 font-medium transition-all duration-300 " to="/auths/auth-login-v3"> Sign in instead</router-link>
            </div>
            <div class="text-center pt-6 pb-4">
                <h6 class="text-slate-300 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight px-1.5 inline-block relative before:absolute before:h-px before:w-5 before:bg-slate-300 before:top-1/2 before:-translate-y-1/2 before:end-full after:absolute after:h-px after:w-5 after:bg-slate-300 after:top-1/2 after:-translate-y-1/2 after:start-full">Or</h6>
            </div>
            <ul class="flex flex-wrap justify-center gap-x-6">
                <li>
                    <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 px-4 py-3" href="#link">Facebook</a>
                </li>
                <li>
                    <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 px-4 py-3" href="#link">Google</a>
                </li>
            </ul>
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
        <div class="w-full min-h-full flex-shrink flex-grow bg-[linear-gradient(to_right,_#2c3782_calc(60%-150px),_#39469f_calc(60%-150px),_#39469f_60%,_#4856b5_60%,_#4856b5_calc(60%+150px),_#5b6ac6_calc(60%+150px),_#5b6ac6_100%)]"></div>
    </div>
  </Layout>
</template>
