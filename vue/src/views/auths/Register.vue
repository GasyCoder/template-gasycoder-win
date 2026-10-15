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
    CheckBox,
} from '@/components';

import { Swiper, SwiperSlide } from 'swiper/vue';
import { Pagination } from 'swiper/modules';

const showPageAside = ref(false);
const showPassword = ref(false);
</script>

<template>
    <Layout title="Registration">
        <div class="relative flex min-h-screen">
            <div
                class="relative flex min-h-full w-full flex-shrink-0 flex-col bg-white lg:w-[45%] dark:bg-gray-950"
            >
                <div class="absolute end-0 top-0 z-10 p-5 sm:p-11 lg:hidden">
                    <Button
                        @click="
                            () => {
                                showPageAside = !showPageAside;
                            }
                        "
                        icon
                        size="rg"
                        variant="white-outline"
                        ><Icon class="text-xl" name="info"
                    /></Button>
                </div>

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
                            Register
                        </h5>
                        <p class="text-sm leading-6 text-slate-400">
                            Create New DashWind Account
                        </p>
                    </div>
                    <form action="#">
                        <FormGroup>
                            <FormLabel
                                class="mb-2 flex items-center justify-between"
                                htmlFor="fullName"
                            >
                                <span>Name </span>
                            </FormLabel>
                            <InputWrap>
                                <Input
                                    id="fullName"
                                    placeholder="Enter your name"
                                    autoComplete="off"
                                    size="lg"
                                />
                            </InputWrap>
                        </FormGroup>
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
                                    :type="showPassword ? 'text' : 'password'"
                                    placeholder="Enter your passcode"
                                    autoComplete="off"
                                    size="lg"
                                />
                            </InputWrap>
                        </FormGroup>
                        <FormGroup class="flex">
                            <CheckBox id="checkAgree">
                                I agree to DashWind
                                <router-link
                                    class="text-primary-500 hover:text-primary-600 transition-all duration-300"
                                    to="/terms-policy"
                                    >Privacy Policy</router-link
                                >
                                &amp;
                                <router-link
                                    class="text-primary-500 hover:text-primary-600 transition-all duration-300"
                                    to="/terms-policy"
                                    >Terms</router-link
                                >.
                            </CheckBox>
                        </FormGroup>
                        <FormGroup>
                            <Button
                                as="router-link"
                                to="/auths/auth-login"
                                size="lg"
                                variant="primary"
                                block
                                >Register</Button
                            >
                        </FormGroup>
                    </form>
                    <div class="pt-6">
                        Already have an account ?
                        <router-link
                            class="text-primary-500 hover:text-primary-600 font-medium transition-all duration-300"
                            to="/auths/auth-login"
                        >
                            Sign in instead</router-link
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
                id="pageAside"
                :class="{
                    'peer fixed end-0 top-0 z-[999] flex min-h-screen w-full max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink flex-grow translate-x-full flex-col bg-gray-50 transition-transform duration-500 lg:static lg:transform-none lg:transition-none rtl:-translate-x-full lg:rtl:transform-none dark:bg-gray-900 [&.active]:transform-none': true,
                    active: showPageAside,
                }"
            >
                <div class="m-auto w-full max-w-[550px] p-4 sm:p-11">
                    <Swiper
                        dir="rtl"
                        :modules="[Pagination]"
                        :pagination="{ clickable: true }"
                        :slidesPerView="1"
                        class="[&>.swiper-pagination]:relative [&>.swiper-pagination]:flex [&>.swiper-pagination]:justify-center [&>.swiper-pagination]:gap-1 [&>.swiper-pagination]:pt-6 [&>.swiper-pagination_.swiper-pagination-bullet]:bg-gray-300 [&>.swiper-pagination_.swiper-pagination-bullet]:opacity-100 [&>.swiper-pagination_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-slate-400"
                    >
                        <SwiperSlide>
                            <div class="text-center">
                                <img
                                    src="/images/slides/promo-a.png"
                                    srcSet="/images/slides/promo-a2x.png 2x"
                                    alt=""
                                />
                                <div class="py-6 sm:p-11">
                                    <h4
                                        class="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white"
                                    >
                                        DashWind
                                    </h4>
                                    <p>
                                        You can start to create your products
                                        easily with its user-friendly design
                                        &amp; most completed responsive layout.
                                    </p>
                                </div>
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="text-center">
                                <img
                                    src="/images/slides/promo-b.png"
                                    srcSet="/images/slides/promo-b2x.png 2x"
                                    alt=""
                                />
                                <div class="py-6 sm:p-11">
                                    <h4
                                        class="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white"
                                    >
                                        DashWind
                                    </h4>
                                    <p>
                                        You can start to create your products
                                        easily with its user-friendly design
                                        &amp; most completed responsive layout.
                                    </p>
                                </div>
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="text-center">
                                <img
                                    src="/images/slides/promo-c.png"
                                    srcSet="/images/slides/promo-c2x.png 2x"
                                    alt=""
                                />
                                <div class="py-6 sm:p-11">
                                    <h4
                                        class="font-heading leading-tighter mb-2 text-xl font-bold -tracking-tight text-slate-700 lg:text-2xl dark:text-white"
                                    >
                                        DashWind
                                    </h4>
                                    <p>
                                        You can start to create your products
                                        easily with its user-friendly design
                                        &amp; most completed responsive layout.
                                    </p>
                                </div>
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>
            <div
                @click="
                    () => {
                        showPageAside = false;
                    }
                "
                class="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 lg:!invisible lg:!opacity-0"
            ></div>
        </div>
    </Layout>
</template>
