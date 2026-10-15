<script setup>
import { ref } from 'vue';
import Layout from '@/layout/Main.vue';
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
} from '@/components';
import { toInitials } from '@/utilities';
import { useRoute } from 'vue-router';
import { useUserStore } from '@/stores/users';
const users = useUserStore();
const route = useRoute();

const user = users.userData.filter((user) => user.id === route.params.id)[0];

import SimpleBar from 'simplebar-vue';
const showPageAside = ref(false);
</script>

<template>
    <Layout title="Users Details">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle
                    >Users /
                    <strong class="text-primary-600 text-2xl font-normal">{{
                        user.name
                    }}</strong></PageHeadTitle
                >
                <ul class="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
                    <li>
                        User ID:
                        <span class="text-slate-600 dark:text-slate-400"
                            >UD003054</span
                        >
                    </li>
                    <li>
                        Last Login:
                        <span class="text-slate-600 dark:text-slate-400"
                            >{{ user.lastLogin }}, 01:02 PM</span
                        >
                    </li>
                </ul>
            </PageHeadGroup>
            <PageHeadGroup>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="hidden sm:inline-flex"
                    to="/user-card"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                    <span class="ms-3">Back</span>
                </Button>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="sm:hidden"
                    icon
                    to="/user-card"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                </Button>
            </PageHeadGroup>
        </PageHead>
        <Card class="h-full">
            <div class="relative flex">
                <div class="flex-grow">
                    <ul
                        class="font-heading flex flex-wrap items-center border-b border-gray-300 px-5 text-sm sm:px-6 dark:border-gray-900"
                    >
                        <li class="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                            <button
                                class="after:bg-primary-600 [&.active]:text-primary-600 active relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100"
                            >
                                <em class="ni ni-user-circle text-xl"></em>
                                <span class="ms-2 max-md:hidden">Personal</span>
                            </button>
                        </li>
                        <li class="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                            <button
                                class="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100"
                            >
                                <em class="ni ni-repeat text-xl"></em>
                                <span class="ms-2 max-md:hidden"
                                    >Transactions</span
                                >
                            </button>
                        </li>
                        <li class="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                            <button
                                class="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100"
                            >
                                <em class="ni ni-file-text text-xl"></em>
                                <span class="ms-2 max-md:hidden"
                                    >Documents</span
                                >
                            </button>
                        </li>
                        <li class="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                            <button
                                class="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100"
                            >
                                <em class="ni ni-bell text-xl"></em>
                                <span class="ms-2 max-md:hidden"
                                    >Notifications</span
                                >
                            </button>
                        </li>
                        <li class="pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9">
                            <button
                                class="after:bg-primary-600 [&.active]:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 max-md:px-2 max-sm:px-1 [&.active]:after:opacity-100"
                            >
                                <em class="ni ni-activity text-xl"></em>
                                <span class="ms-2 max-md:hidden"
                                    >Activities</span
                                >
                            </button>
                        </li>
                        <li
                            class="ms-auto pe-4 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9 2xl:hidden"
                        >
                            <div class="py-2">
                                <ButtonZoom
                                    @click="
                                        () => {
                                            showPageAside = !showPageAside;
                                        }
                                    "
                                    class="-me-2"
                                >
                                    <Icon
                                        class="text-xl"
                                        name="user-list-fill"
                                    />
                                </ButtonZoom>
                            </div>
                        </li>
                    </ul>
                    <div class="p-5 sm:p-6">
                        <div class="pb-7 md:pb-8">
                            <h5
                                class="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white"
                            >
                                Personal Information
                            </h5>
                            <p class="text-slate-600 dark:text-slate-400">
                                Basic info, like your name and address, that you
                                use on Nio Platform.
                            </p>
                        </div>
                        <div
                            class="-my-2 flex flex-wrap overflow-hidden md:-mx-6 lg:-mx-12 2xl:max-w-5xl"
                        >
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Title</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >Mr.</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Full Name</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.name }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Date of Birth</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.dob }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Surname</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >IO</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Mobile Number</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.phone }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Email Address</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.email }}</span
                                    >
                                </div>
                            </div>
                        </div>
                        <h6
                            class="tracking-relaxed mt-6 mb-5 text-xs leading-tight font-bold whitespace-nowrap text-slate-600 uppercase dark:text-slate-300"
                        >
                            Additional Information
                        </h6>
                        <div
                            class="-my-2 flex flex-wrap overflow-hidden md:-mx-6 lg:-mx-12 2xl:max-w-5xl"
                        >
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Joining Date</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >08-16-2018 09:04PM</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Reg Method</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >Email</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Country</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.country }}</span
                                    >
                                </div>
                            </div>
                            <div
                                class="w-full py-2 md:w-1/2 md:px-6 md:py-3 lg:px-12"
                            >
                                <div class="flex justify-between gap-2">
                                    <span class="-tracking-snug text-slate-400"
                                        >Nationality</span
                                    >
                                    <span
                                        class="font-medium text-slate-600 dark:text-slate-300"
                                        >{{ user.country }}</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div
                            class="my-6 block border-t border-gray-300 dark:border-gray-900"
                        ></div>
                        <div
                            class="flex items-center justify-between gap-2 pb-4"
                        >
                            <h5
                                class="-tracking-snug font-heading leading-tighter text-xl font-bold text-slate-700 dark:text-white"
                            >
                                Admin Note
                            </h5>
                            <a
                                href="#link"
                                @click="(e) => e.preventDefault()"
                                class="text-primary-600 hover:text-primary-700 text-sm leading-none font-medium whitespace-nowrap"
                                >+ Add Note</a
                            >
                        </div>

                        <div class="flex flex-col gap-7">
                            <div>
                                <div
                                    class="rounded bg-slate-50 px-5 py-4 sm:px-6 sm:py-5 dark:bg-gray-900"
                                >
                                    <p
                                        class="text-slate-600 dark:text-slate-400"
                                    >
                                        Aproin at metus et dolor tincidunt
                                        feugiat eu id quam. Pellentesque
                                        habitant morbi tristique senectus et
                                        netus et malesuada fames ac turpis
                                        egestas. Aenean sollicitudin non nunc
                                        vel pharetra.
                                    </p>
                                </div>
                                <div
                                    class="mt-3 flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600"
                                >
                                    <span
                                        >Added on
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >November 18, 2019</span
                                        >
                                        at
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >5:34 PM</span
                                        ></span
                                    >
                                    <span class="px-1">|</span>
                                    <span
                                        >By
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >Softnio</span
                                        ></span
                                    >
                                    <a
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                        class="ms-3 text-xs leading-none font-medium whitespace-nowrap text-red-600 hover:text-red-700"
                                        >Delete Note</a
                                    >
                                </div>
                            </div>
                            <div>
                                <div
                                    class="rounded bg-slate-50 px-5 py-4 sm:px-6 sm:py-5 dark:bg-gray-900"
                                >
                                    <p
                                        class="text-slate-600 dark:text-slate-400"
                                    >
                                        Aproin at metus et dolor tincidunt
                                        feugiat eu id quam. Pellentesque
                                        habitant morbi tristique senectus et
                                        netus et malesuada fames ac turpis
                                        egestas. Aenean sollicitudin non nunc
                                        vel pharetra.
                                    </p>
                                </div>
                                <div
                                    class="mt-3 flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600"
                                >
                                    <span
                                        >Added on
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >November 18, 2019</span
                                        >
                                        at
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >5:34 PM</span
                                        ></span
                                    >
                                    <span class="px-1">|</span>
                                    <span
                                        >By
                                        <span
                                            class="text-slate-600 dark:text-slate-400"
                                            >Softnio</span
                                        ></span
                                    >
                                    <a
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                        class="ms-3 text-xs leading-none font-medium whitespace-nowrap text-red-600 hover:text-red-700"
                                        >Delete Note</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    id="pageAside"
                    :class="{
                        'peer fixed end-0 top-0 z-[999] w-[300px] max-w-[calc(100%-2.5rem)] min-w-[260px] flex-shrink-0 translate-x-full border-s border-gray-300 bg-white transition-transform duration-500 max-2xl:min-h-screen 2xl:static 2xl:w-[380px] 2xl:transform-none 2xl:bg-transparent 2xl:transition-none rtl:-translate-x-full 2xl:rtl:transform-none dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none': true,
                        active: showPageAside,
                    }"
                >
                    <SimpleBar
                        class="max-2xl:mt-16 max-2xl:max-h-[calc(100vh-theme(spacing.16))]"
                    >
                        <div
                            class="flex flex-col items-center border-b border-gray-300 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-900"
                        >
                            <Avatar
                                v-if="user.img"
                                size="2xl"
                                rounded
                                :img="user.img"
                            />
                            <Avatar
                                v-else
                                :variant="user.theme"
                                size="2xl"
                                rounded
                                :text="toInitials(user.name)"
                            />
                            <div class="mt-4">
                                <span
                                    class="text-xxs tracking-snug relative inline-flex rounded-full border border-gray-300 px-2 text-center align-middle leading-4.5 font-medium whitespace-nowrap text-slate-400 uppercase dark:border-gray-900"
                                    >{{ user.role }}</span
                                >
                                <h6
                                    class="font-heading leading-tighter mt-4 mb-2 text-xl font-bold text-slate-700 dark:text-white"
                                >
                                    {{ user.name }}
                                </h6>
                                <span class="text-sm text-slate-400">{{
                                    user.email
                                }}</span>
                            </div>
                        </div>
                        <div
                            class="border-b border-gray-300 px-5 py-3 sm:px-6 dark:border-gray-900"
                        >
                            <ul class="flex flex-wrap justify-center gap-1.5">
                                <li>
                                    <ButtonZoom>
                                        <Icon
                                            class="text-lg"
                                            name="shield-off"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <ButtonZoom>
                                        <Icon class="text-lg" name="mail" />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <ButtonZoom>
                                        <Icon
                                            class="text-lg"
                                            name="download-cloud"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <ButtonZoom>
                                        <Icon class="text-lg" name="bookmark" />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <ButtonZoom>
                                        <Icon
                                            class="text-lg text-red-600"
                                            name="na"
                                        />
                                    </ButtonZoom>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                        >
                            <h6
                                class="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                            >
                                In Account
                            </h6>
                            <div class="-mx-3 flex items-end">
                                <div
                                    class="flex gap-x-2 px-3 text-sm text-slate-400"
                                >
                                    <div class="flex flex-col">
                                        <div
                                            class="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white"
                                        >
                                            2,500.00
                                            <span
                                                class="text-lg leading-6 font-normal"
                                            >
                                                USD</span
                                            >
                                        </div>
                                        <div class="mt-2 text-xs">
                                            Invested Amount
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex gap-x-2 px-3 text-sm text-slate-400"
                                >
                                    <span class="text-base text-slate-400"
                                        ><em class="ni ni-plus"></em
                                    ></span>
                                    <div class="flex flex-col">
                                        <div
                                            class="text-xl leading-6 font-bold whitespace-nowrap text-slate-700 dark:text-white"
                                        >
                                            1,643.76
                                        </div>
                                        <div class="mt-2 text-xs">
                                            Profit Earned
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                        >
                            <div class="grid grid-flow-dense grid-cols-12">
                                <div class="col-span-4">
                                    <div class="text-center">
                                        <span
                                            class="block text-lg font-bold text-slate-600 dark:text-white"
                                            >23</span
                                        >
                                        <span
                                            class="block text-xs leading-5 text-slate-400"
                                            >Total Order</span
                                        >
                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <div class="text-center">
                                        <span
                                            class="block text-lg font-bold text-slate-600 dark:text-white"
                                            >20</span
                                        >
                                        <span
                                            class="block text-xs leading-5 text-slate-400"
                                            >Complete</span
                                        >
                                    </div>
                                </div>
                                <div class="col-span-4">
                                    <div class="text-center">
                                        <span
                                            class="block text-lg font-bold text-slate-600 dark:text-white"
                                            >3</span
                                        >
                                        <span
                                            class="block text-xs leading-5 text-slate-400"
                                            >Progress</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="border-b border-gray-300 p-5 sm:p-6 dark:border-gray-900"
                        >
                            <h6
                                class="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                            >
                                Additional
                            </h6>
                            <div
                                class="grid grid-flow-dense grid-cols-12 gap-4"
                            >
                                <div class="col-span-6">
                                    <span class="block text-xs text-slate-400"
                                        >User ID:</span
                                    >
                                    <span
                                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                        >UD003054</span
                                    >
                                </div>
                                <div class="col-span-6">
                                    <span class="block text-xs text-slate-400"
                                        >Last Login:</span
                                    >
                                    <span
                                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                        >{{ user.lastLogin }}, 01:02 PM</span
                                    >
                                </div>
                                <div class="col-span-6">
                                    <span class="block text-xs text-slate-400"
                                        >KYC Status:</span
                                    >
                                    <span
                                        class="mt-1 block text-sm font-bold text-green-600"
                                        >Approved</span
                                    >
                                </div>
                                <div class="col-span-6">
                                    <span class="block text-xs text-slate-400"
                                        >Register At:</span
                                    >
                                    <span
                                        class="mt-1 block text-sm text-slate-600 dark:text-slate-200"
                                        >Nov 24, 2019</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h6
                                class="tracking-relaxed mb-3 text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase"
                            >
                                Groups
                            </h6>
                            <ul class="flex flex-wrap gap-2">
                                <ButtonGroup as="li">
                                    <Button size="xs" variant="light-pale"
                                        >investor</Button
                                    >
                                    <Button size="xs" variant="light-pale" icon
                                        ><Icon
                                            class="text-xs leading-4.5"
                                            name="cross"
                                    /></Button>
                                </ButtonGroup>
                                <ButtonGroup as="li">
                                    <Button size="xs" variant="light-pale"
                                        >support</Button
                                    >
                                    <Button size="xs" variant="light-pale" icon
                                        ><Icon
                                            class="text-xs leading-4.5"
                                            name="cross"
                                    /></Button>
                                </ButtonGroup>
                                <ButtonGroup as="li">
                                    <Button size="xs" variant="light-pale"
                                        >another tag</Button
                                    >
                                    <Button size="xs" variant="light-pale" icon
                                        ><Icon
                                            class="text-xs leading-4.5"
                                            name="cross"
                                    /></Button>
                                </ButtonGroup>
                            </ul>
                        </div>
                    </SimpleBar>
                </div>
                <div
                    @click="
                        () => {
                            showPageAside = false;
                        }
                    "
                    class="class-toggle bg-opacity-20 invisible fixed inset-0 z-[900] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100 2xl:!invisible 2xl:!opacity-0"
                ></div>
            </div>
        </Card>
    </Layout>
</template>
