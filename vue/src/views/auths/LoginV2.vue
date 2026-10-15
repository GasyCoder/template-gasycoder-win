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
const showPassword = ref(false);
</script>

<template>
    <Layout title="Login v2">
        <div class="relative flex min-h-screen">
            <div
                class="relative flex min-h-full w-full flex-shrink-0 flex-col bg-white dark:bg-gray-950"
            >
                <div class="xs:max-w-[520px] m-auto w-full max-w-[420px] p-5">
                    <div
                        class="relative flex flex-shrink-0 justify-center pb-6"
                    >
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
                    <div
                        class="rounded border border-gray-300 p-5 sm:p-6 md:p-10 dark:border-gray-900"
                    >
                        <div class="pb-5">
                            <h5
                                class="font-heading -tracking-snug leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white"
                            >
                                Sign-In
                            </h5>
                            <p class="text-sm leading-6 text-slate-400">
                                Access the DashWind panel using your email and
                                passcode.
                            </p>
                        </div>
                        <form action="#">
                            <FormGroup>
                                <FormLabel
                                    class="mb-2 flex items-center justify-between"
                                    htmlFor="emailAddress"
                                >
                                    <span>Email or Username </span>
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
                                <FormLabel
                                    class="mb-2 flex items-center justify-between"
                                    htmlFor="password"
                                >
                                    <span>Passcode </span>
                                    <router-link
                                        to="/auths/auth-reset-v2"
                                        class="font-body text-primary-500 hover:text-primary-600 inline-flex text-xs leading-none font-medium whitespace-nowrap transition-all duration-300"
                                        >Forgot Code?</router-link
                                    >
                                </FormLabel>
                                <InputWrap>
                                    <a
                                        tabIndex="-1"
                                        href="#password"
                                        @click="
                                            (ev) => {
                                                ev.preventDefault();
                                                showPassword = !showPassword;
                                            }
                                        "
                                        :class="{
                                            'js-password-toggle group/password absolute end-0 top-0 flex h-11 w-11 items-center justify-center': true,
                                            'is-shown': showPassword,
                                        }"
                                    >
                                        <em
                                            class="ni ni-eye text-base leading-none text-slate-400 group-[.is-shown]/password:hidden"
                                        ></em>
                                        <em
                                            class="ni ni-eye-off hidden text-base leading-none text-slate-400 group-[.is-shown]/password:block"
                                        ></em>
                                    </a>
                                    <Input
                                        id="password"
                                        :type="
                                            showPassword ? 'text' : 'password'
                                        "
                                        placeholder="Enter your passcode"
                                        autoComplete="off"
                                        size="lg"
                                    />
                                </InputWrap>
                            </FormGroup>
                            <FormGroup>
                                <Button
                                    as="router-link"
                                    to="/"
                                    size="lg"
                                    variant="primary"
                                    block
                                    >Sign In</Button
                                >
                            </FormGroup>
                        </form>
                        <div class="pt-6">
                            New on our platform?
                            <router-link
                                class="text-primary-500 hover:text-primary-600 transition-all duration-300"
                                to="/auths/auth-register-v2"
                            >
                                Create an account</router-link
                            >
                        </div>
                        <div class="pt-6 pb-4 text-center">
                            <h6
                                class="text-xxs tracking-relaxed relative inline-block px-1.5 leading-tight font-bold whitespace-nowrap text-slate-300 uppercase before:absolute before:end-full before:top-1/2 before:h-px before:w-5 before:-translate-y-1/2 before:bg-slate-300 after:absolute after:start-full after:top-1/2 after:h-px after:w-5 after:-translate-y-1/2 after:bg-slate-300"
                            >
                                Or
                            </h6>
                        </div>
                        <ul class="flex flex-wrap justify-center gap-x-6">
                            <li>
                                <a
                                    class="font-body text-primary-600 hover:text-primary-700 inline-flex px-4 py-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    href="#link"
                                    >Facebook</a
                                >
                            </li>
                            <li>
                                <a
                                    class="font-body text-primary-600 hover:text-primary-700 inline-flex px-4 py-3 text-sm leading-none font-normal whitespace-nowrap transition-all duration-300"
                                    href="#link"
                                    >Google</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="border-t border-gray-200 px-5.5 py-6 dark:border-gray-800"
                >
                    <div class="container max-w-7xl">
                        <div class="-m-2 flex flex-wrap">
                            <div class="w-full p-2 lg:order-last lg:w-1/2">
                                <ul
                                    class="relative -m-3 flex flex-wrap justify-center lg:justify-end"
                                >
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
                                                            <span
                                                                >Français</span
                                                            >
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
                            </div>
                            <div class="w-full p-2 lg:w-1/2">
                                <p
                                    class="text-center text-sm/4 text-slate-400 lg:text-start"
                                >
                                    &copy; 2025 DashWind. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
