<script setup>
import { Dialog, DialogPanel, TransitionRoot, TransitionChild, MenuItem } from '@headlessui/vue'
import { Button, ButtonZoom, Icon, Avatar, AvatarGroup, Breadcrumb, BreadcrumbItem, BreadcrumbLink } from '@/components'
import { useIconStore } from '@/stores/icon'
const icons = useIconStore()
const show = defineModel('show')
</script>
<template>
    <TransitionRoot appear :show="show" as="template">
        <Dialog as="div" class="relative z-[5000]" @close="() => show = false">
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enterFrom="opacity-0"
                enterTo="opacity-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100"
                leaveTo="opacity-0"
            >
                <div class="fixed inset-0 bg-slate-700/50" ></div>
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center">
                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enterFrom="opacity-0 -translate-y-6"
                    enterTo="opacity-100 translate-y-0"
                    leave="ease-in duration-200"
                    leaveFrom="opacity-100 translate-y-0"
                    leaveTo="opacity-0 -translate-y-6"
                >
                    <DialogPanel class="relative bg-white dark:bg-gray-950 rounded-md w-full md:w-[720px] sm:w-[520px] mx-auto text-start">
                        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center">
                                <div class="h-10 [&>svg]:h-full" v-html="icons.data.folder">
                                </div>
                                <div class="ms-2">
                                    <div class="flex items-center text-sm font-medium mb-1"><span class="line-clamp-1">UI/UX Design</span></div>
                                    <div class="text-xs text-slate-400">Project</div>
                                </div>
                            </div>
                            <button @click="() => show = false" class="text-slate-500 hover:text-slate-700 dark:text-white">
                                <Icon class="text-2xl" name="cross" />
                            </button>
                        </div>
                        <div class="px-5 sm:px-6 py-5 sm:py-6">
                            <div class="nk-file-details">
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Type</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Folder</div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Size</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">35.48 MB</div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Location</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">
                                        <Breadcrumb>
                                            <BreadcrumbItem separator="arrow"><BreadcrumbLink to="/">ThemeForest</BreadcrumbLink></BreadcrumbItem>
                                            <BreadcrumbItem separator="arrow">Project</BreadcrumbItem>
                                        </Breadcrumb>
                                    </div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Owner</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Me</div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Shared with</div>
                                    <div class="text-sm/5 flex-shrink-0 text-slate-600">
                                        <AvatarGroup size="mb">
                                            <Avatar variant="primary" size="mb" rounded img="/images/avatar/b-sm.jpg"></Avatar>
                                            <Avatar variant="purple" size="mb" rounded text="IH"></Avatar>
                                            <Avatar variant="pink" size="mb" rounded text="AB"></Avatar>
                                            <Avatar variant="slate" size="mb" rounded text="+2"></Avatar>
                                        </AvatarGroup>
                                    </div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Modified</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Feb 19, 2020 by Abu Bit Istiyak</div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Opened</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Apr 23, 2020 by Me</div>
                                </div>
                                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Created</div>
                                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Feb 19, 2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
                            <div class="flex items-center justify-between flex-wrap gap-3">
                                <button class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">View All Activity</button>
                                <ul class="flex items-center gap-5">
                                    <li><Button size="rg" variant="light" class="bg-white">Share</Button></li>
                                    <li><Button @click="() => show = false" size="rg" variant="primary">Download</Button></li>
                                </ul>
                            </div>
                        </div>
                    </DialogPanel>
                </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
