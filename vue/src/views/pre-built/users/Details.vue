<script setup>
import { ref } from 'vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Avatar,
  Card, CardBody, ButtonGroup
 } from '@/components'
import { toInitials } from '@/utilities'
import { useRoute } from 'vue-router'
import { useUserStore } from '@/stores/users'
const users = useUserStore()
const route = useRoute()

const user = users.userData.filter(
    (user) => user.id === route.params.id
)[0];

import SimpleBar from 'simplebar-vue';
const showPageAside = ref(false);

</script>

<template>
  <Layout title="Users Details">
    <PageHead>
        <PageHeadGroup>
            <PageHeadTitle>Users / <strong class="text-primary-600 text-2xl font-normal">{{user.name}}</strong></PageHeadTitle>
            <ul class="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
                <li>User ID: <span class="text-slate-600 dark:text-slate-400">UD003054</span></li>
                <li>Last Login: <span class="text-slate-600 dark:text-slate-400">{{user.lastLogin}}, 01:02 PM</span></li>
            </ul>
        </PageHeadGroup>
        <PageHeadGroup>
            <Button as="router-link" size="rg" variant="white-outline" class="hidden sm:inline-flex" to="/user-card">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
                <span class="ms-3">Back</span>
            </Button>
            <Button as="router-link" size="rg" variant="white-outline" class="sm:hidden" icon to="/user-card">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
            </Button>
        </PageHeadGroup>
    </PageHead>
    <Card class="h-full">
        <div class="relative flex">
            <div class="flex-grow">
                <ul class="flex flex-wrap items-center font-heading text-sm border-b border-gray-300 dark:border-gray-900 px-5 sm:px-6">
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                        <button class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active">
                            <em class="text-xl ni ni-user-circle"></em>
                            <span class="ms-2 max-md:hidden">Personal</span>
                        </button>
                    </li>
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                        <button class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600">
                            <em class="text-xl ni ni-repeat"></em>
                            <span class="ms-2 max-md:hidden">Transactions</span>
                        </button>
                    </li>
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                        <button class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600">
                            <em class="text-xl ni ni-file-text"></em>
                            <span class="ms-2 max-md:hidden">Documents</span>
                        </button>
                    </li>
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                        <button class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600">
                            <em class="text-xl ni ni-bell"></em>
                            <span class="ms-2 max-md:hidden">Notifications</span>
                        </button>
                    </li>
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                        <button class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600">
                            <em class="text-xl ni ni-activity"></em>
                            <span class="ms-2 max-md:hidden">Activities</span>
                        </button>
                    </li>
                    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0 ms-auto 2xl:hidden">
                        <div class="py-2">
                            <ButtonZoom 
                                @click="()=>{ showPageAside = ! showPageAside }" 
                                class="-me-2">
                                <Icon class="text-xl" name="user-list-fill" />
                            </ButtonZoom>
                        </div>
                    </li>
                </ul>
                <div class="p-5 sm:p-6">
                    <div class="pb-7 md:pb-8">
                        <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Personal Information</h5>
                        <p class="text-slate-600 dark:text-slate-400">Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
                    <div class="flex flex-wrap 2xl:max-w-5xl -my-2 md:-mx-6 lg:-mx-12 overflow-hidden">
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Title</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">Mr.</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Full Name</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.name}}</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Date of Birth</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.dob}}</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Surname</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">IO</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Mobile Number</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.phone}}</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Email Address</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.email}}</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-slate-600 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-5 mt-6">
                        Additional Information
                    </h6>
                    <div class="flex flex-wrap 2xl:max-w-5xl -my-2 md:-mx-6 lg:-mx-12 overflow-hidden">
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Joining Date</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">08-16-2018 09:04PM</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Reg Method</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">Email</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Country</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.country}}</span>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                            <div class="flex justify-between gap-2">
                                <span class="text-slate-400 -tracking-snug">Nationality</span>
                                <span class="font-medium text-slate-600 dark:text-slate-300">{{user.country}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-t block border-gray-300 dark:border-gray-900 my-6"></div>
                    <div class="flex items-center justify-between pb-4 gap-2">
                        <h5 class="text-xl -tracking-snug font-heading leading-tighter font-bold text-slate-700 dark:text-white">Admin Note</h5>
                        <a href="#link" @click="(e)=> e.preventDefault()" class="text-sm font-medium leading-none whitespace-nowrap text-primary-600 hover:text-primary-700">+ Add Note</a>
                    </div>

                    <div class="flex flex-col gap-7">
                        <div>
                            <div class="py-4 px-5 sm:py-5 sm:px-6 bg-slate-50 dark:bg-gray-900 rounded">
                                <p class="text-slate-600 dark:text-slate-400">Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                            </div>
                            <div class="flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600 mt-3">
                                <span>Added on <span class="text-slate-600 dark:text-slate-400">November 18, 2019</span> at <span class="text-slate-600 dark:text-slate-400">5:34 PM</span></span>
                                <span class="px-1">|</span>
                                <span>By <span class="text-slate-600 dark:text-slate-400">Softnio</span></span>
                                <a href="#link" @click="(e)=> e.preventDefault()" class="ms-3 text-xs font-medium leading-none whitespace-nowrap text-red-600 hover:text-red-700">Delete Note</a>
                            </div>
                        </div>
                        <div>
                            <div class="py-4 px-5 sm:py-5 sm:px-6 bg-slate-50 dark:bg-gray-900 rounded">
                                <p class="text-slate-600 dark:text-slate-400">Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                            </div>
                            <div class="flex flex-wrap items-center text-xs text-slate-400 dark:text-slate-600 mt-3">
                                <span>Added on <span class="text-slate-600 dark:text-slate-400">November 18, 2019</span> at <span class="text-slate-600 dark:text-slate-400">5:34 PM</span></span>
                                <span class="px-1">|</span>
                                <span>By <span class="text-slate-600 dark:text-slate-400">Softnio</span></span>
                                <a href="#link" @click="(e)=> e.preventDefault()" class="ms-3 text-xs font-medium leading-none whitespace-nowrap text-red-600 hover:text-red-700">Delete Note</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pageAside" :class="{'peer min-w-[260px] max-w-[calc(100%-2.5rem)] w-[300px] 2xl:w-[380px] max-2xl:min-h-screen bg-white dark:bg-gray-950 2xl:bg-transparent border-s border-gray-300 dark:border-gray-900 flex-shrink-0 fixed 2xl:static top-0 end-0 z-[999] transition-transform duration-500 2xl:transition-none translate-x-full rtl:-translate-x-full [&.active]:transform-none 2xl:transform-none 2xl:rtl:transform-none': true, 'active': showPageAside}">
                <SimpleBar class="max-2xl:mt-16 max-2xl:max-h-[calc(100vh-theme(spacing.16))]">
                    <div class="flex flex-col items-center text-center p-5 sm:px-6 sm:py-8 border-b border-gray-300 dark:border-gray-900">
                        <Avatar v-if="user.img" size="2xl" rounded :img="user.img"/>
                        <Avatar v-else :variant="user.theme" size="2xl" rounded :text="toInitials(user.name)"/>
                        <div class="mt-4">
                            <span class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-900 text-slate-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle uppercase">{{user.role}}</span>
                            <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2 mt-4">{{user.name}}</h6>
                            <span class="text-sm text-slate-400">{{user.email}}</span>
                        </div>
                    </div>
                    <div class="px-5 py-3 sm:px-6 border-b border-gray-300 dark:border-gray-900">
                        <ul class="flex flex-wrap justify-center gap-1.5">
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="shield-off" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="mail" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="download-cloud" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg" name="bookmark" />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom>
                                    <Icon class="text-lg text-red-600" name="na" />
                                </ButtonZoom>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">In Account </h6>
                        <div class="flex items-end -mx-3">
                            <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                                <div class="flex flex-col">
                                    <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">
                                        2,500.00
                                        <span class="text-lg leading-6 font-normal"> USD</span>
                                    </div>
                                    <div class="text-xs mt-2">Invested Amount</div>
                                </div>
                            </div>
                            <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                                <span class="text-slate-400 text-base"><em class="ni ni-plus"></em></span>
                                <div class="flex flex-col">
                                    <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">1,643.76</div>
                                    <div class="text-xs mt-2">Profit Earned</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                        <div class="grid grid-flow-dense grid-cols-12">
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span class="block text-lg text-slate-600 dark:text-white font-bold">23</span>
                                    <span class="block text-xs leading-5 text-slate-400">Total Order</span>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span class="block text-lg text-slate-600 dark:text-white font-bold">20</span>
                                    <span class="block text-xs leading-5 text-slate-400">Complete</span>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="text-center">
                                    <span class="block text-lg text-slate-600 dark:text-white font-bold">3</span>
                                    <span class="block text-xs leading-5 text-slate-400">Progress</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Additional </h6>
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div class="col-span-6">
                                <span class="block text-xs text-slate-400">User ID:</span>
                                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">UD003054</span>
                            </div>
                            <div class="col-span-6">
                                <span class="block text-xs text-slate-400">Last Login:</span>
                                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">{{user.lastLogin}}, 01:02 PM</span>
                            </div>
                            <div class="col-span-6">
                                <span class="block text-xs text-slate-400">KYC Status:</span>
                                <span class="block text-sm font-bold mt-1 text-green-600">Approved</span>
                            </div>
                            <div class="col-span-6">
                                <span class="block text-xs text-slate-400">Register At:</span>
                                <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Nov 24, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6">
                        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Groups </h6>
                        <ul class="flex flex-wrap gap-2">
                            <ButtonGroup as="li">
                                <Button size="xs" variant="light-pale">investor</Button>
                                <Button size="xs" variant="light-pale" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                            </ButtonGroup>
                            <ButtonGroup as="li">
                                <Button size="xs" variant="light-pale">support</Button>
                                <Button size="xs" variant="light-pale" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                            </ButtonGroup>
                            <ButtonGroup as="li">
                                <Button size="xs" variant="light-pale">another tag</Button>
                                <Button size="xs" variant="light-pale" icon><Icon class="text-xs leading-4.5" name="cross" /></Button>
                            </ButtonGroup>
                        </ul>
                    </div>
                </SimpleBar>
            </div>
            <div @click="()=>{ showPageAside = false }" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible 2xl:!opacity-0 2xl:!invisible"></div>
        </div>
    </Card>
  </Layout>
</template>
