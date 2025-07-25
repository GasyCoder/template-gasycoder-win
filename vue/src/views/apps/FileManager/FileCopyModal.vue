<script setup>
import { Dialog, DialogPanel, TransitionRoot, TransitionChild, MenuItem } from '@headlessui/vue'
import { Button, ButtonZoom, Icon, } from '@/components'
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
                        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 pt-4 rounded-t-[inherit]">
                            <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white">Copy item to ...</h5>
                            <button @click="() => show = false" class="text-slate-500 hover:text-slate-700 dark:text-white">
                                <Icon class="text-2xl" name="cross"></Icon>
                            </button>
                        </div>
                        <div class="px-5 sm:px-6 pb-5 sm:pb-6">
                            <ul class="flex flex-wrap py-1 mb-2">
                                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">
                                    <a class="text-slate-400 hover:text-primary-600" href="#link"  @click="(e)=> e.preventDefault()">Project</a>
                                    <Icon class="text-slate-400 my-0.5 ms-2 text-xxs/none font-medium rtl:-scale-x-100" name="forward-ios"></Icon>
                                </li>
                                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">Apps</li>
                            </ul>
                            <div class="border border-gray-200 dark:border-gray-800 rounded">
                                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#link"  @click="(e)=> e.preventDefault()">
                                    <div class="h-8 [&>svg]:h-full" v-html="icons.data.folder">
                                    </div>
                                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI/UX Design</span></span>
                                    <div class="ms-auto inline-flex -me-1"><Icon class="text-base/none rtl:-scale-x-100" name="chevron-right"></Icon></div>
                                </a>
                                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#link"  @click="(e)=> e.preventDefault()">
                                    <div class="h-8 [&>svg]:h-full" v-html="icons.data.folder">
                                    </div>
                                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI Design</span></span>
                                    <div class="ms-auto inline-flex -me-1"><Icon class="text-base/none rtl:-scale-x-100" name="chevron-right"></Icon></div>
                                </a>
                                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit] selected" href="#link"  @click="(e)=> e.preventDefault()">
                                    <div class="h-8 [&>svg]:h-full" v-html="icons.data.folderShared">
                                    </div>
                                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">Projects</span></span>
                                    <div class="ms-auto inline-flex -me-1"><Icon class="text-base/none rtl:-scale-x-100" name="chevron-right"></Icon></div>
                                </a>
                                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#link"  @click="(e)=> e.preventDefault()">
                                    <div class="h-8 [&>svg]:h-full" v-html="icons.data.folder">
                                    </div>
                                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">2019 Project</span></span>
                                    <div class="ms-auto inline-flex -me-1"><Icon class="text-base/none rtl:-scale-x-100" name="chevron-right"></Icon></div>
                                </a>
                            </div>
                        </div>
                        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
                            <div class="flex items-center justify-between flex-wrap gap-3">
                                <button class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">Create New Folder</button>
                                <ul class="flex items-center gap-5">
                                    <li><Button @click="() => show = false" size="rg" variant="light" class="bg-white">Cancel</Button></li>
                                    <li><Button @click="() => show = false" size="rg" variant="primary">Copy</Button></li>
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
