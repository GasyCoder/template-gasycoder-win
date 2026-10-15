<script setup>
import { ref } from 'vue';
import Layout from '@/layout/FullScreen.vue';
import { MenuItem } from '@headlessui/vue';
import {
    PageHead,
    PageHeadGroup,
    PageHeadTitle,
    PageHeadSubTitle,
    PageHeadOption,
    Button,
    ButtonZoom,
    Icon,
    Avatar,
    Card,
    CardBody,
    ButtonGroup,
    Dropdown,
    FormGroup,
    FormLabel,
    InputWrap,
    Input,
} from '@/components';
const showPageAside = ref(false);
</script>

<template>
    <Layout title="Reset v3">
        <div class="relative flex min-h-screen flex-wrap lg:flex-nowrap">
            <div
                class="relative flex min-h-full w-full flex-shrink-0 flex-col bg-white lg:w-[45%] dark:bg-gray-950"
            >
                <div class="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
                    <div class="relative flex flex-shrink-0 pb-11">
                        <router-link
                            to="/"
                            class="relative inline-block h-10 transition-opacity duration-300"
                        >
                            <img
                                class="h-full opacity-0 dark:opacity-100"
                                src="/logo.png"
                                srcSet="/logo2x.png 2x"
                                alt="logo"
                            />
                            <img
                                class="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                                src="/logo-dark.png"
                                srcSet="/logo-dark2x.png 2x"
                                alt="logo"
                            />
                        </router-link>
                    </div>
                    <div class="pb-5">
                        <h5
                            class="font-heading -tracking-snug leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white"
                        >
                            Reset password
                        </h5>
                        <p class="text-sm leading-6 text-slate-400">
                            If you forgot your password, well, then we’ll email
                            you instructions to reset your password.
                        </p>
                    </div>
                    <form action="#">
                        <FormGroup>
                            <FormLabel
                                class="mb-2 flex items-center justify-between"
                                htmlFor="emailAddress"
                            >
                                <span>Email </span>
                                <a
                                    href="#link"
                                    class="font-body text-primary-500 hover:text-primary-600 inline-flex text-xs leading-none font-medium whitespace-nowrap transition-all duration-300"
                                    >Need Help?</a
                                >
                            </FormLabel>
                            <InputWrap>
                                <Input
                                    id="emailAddress"
                                    placeholder="Enter your email address or username"
                                    autoComplete="off"
                                    size="lg"
                                />
                            </InputWrap>
                        </FormGroup>
                        <FormGroup>
                            <Button
                                as="router-link"
                                to="/auths/auth-success-v3"
                                size="lg"
                                variant="primary"
                                block
                                >Send Reset Link</Button
                            >
                        </FormGroup>
                    </form>
                    <div class="pt-6">
                        <router-link
                            class="text-primary-500 hover:text-primary-600 font-medium transition-all duration-300"
                            to="/auths/auth-login-v3"
                            >Return to login</router-link
                        >
                    </div>
                </div>
                <div
                    class="mx-auto w-full max-w-[420px] px-5 pt-7 pb-10 2xl:me-[90px]"
                >
                    <ul class="relative -m-3 flex flex-wrap items-center">
                        <li>
                            <router-link
                                class="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                to="/terms-policy"
                                >Terms &amp; Condition</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                to="/terms-policy"
                                >Privacy Policy</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                class="font-body text-primary-600 hover:text-primary-700 inline-flex p-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                to="/faqs"
                                >Help</router-link
                            >
                        </li>
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[0, 0]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]"
                            >
                                <template #button>
                                    <button
                                        class="font-body text-primary-600 hover:text-primary-700 inline-flex items-center p-3 text-xs leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    >
                                        <span>English</span>
                                        <Icon
                                            class="ms-1 text-sm"
                                            name="chevron-up"
                                        />
                                    </button>
                                </template>
                                <template #content>
                                    <ul>
                                        <li
                                            class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                                        >
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <img
                                                    src="/images/flags/english.png"
                                                    alt=""
                                                    class="me-3 w-6"
                                                />
                                                <span>English</span>
                                            </MenuItem>
                                        </li>
                                        <li
                                            class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                                        >
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <img
                                                    src="/images/flags/spanish.png"
                                                    alt=""
                                                    class="me-3 w-6"
                                                />
                                                <span>Español</span>
                                            </MenuItem>
                                        </li>
                                        <li
                                            class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                                        >
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <img
                                                    src="/images/flags/french.png"
                                                    alt=""
                                                    class="me-3 w-6"
                                                />
                                                <span>Français</span>
                                            </MenuItem>
                                        </li>
                                        <li
                                            class="border-t border-gray-200 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-800"
                                        >
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <img
                                                    src="/images/flags/turkey.png"
                                                    alt=""
                                                    class="me-3 w-6"
                                                />
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
            <div
                class="min-h-full w-full flex-shrink flex-grow bg-[linear-gradient(to_right,_#2c3782_calc(60%-150px),_#39469f_calc(60%-150px),_#39469f_60%,_#4856b5_60%,_#4856b5_calc(60%+150px),_#5b6ac6_calc(60%+150px),_#5b6ac6_100%)]"
            ></div>
        </div>
    </Layout>
</template>
