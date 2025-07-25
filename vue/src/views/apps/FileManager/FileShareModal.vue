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
                        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center">
                                <div class="h-10 [&>svg]:h-full" v-html="icons.data.folder">
                                </div>
                                <div class="ms-2">
                                    <div class="flex items-center text-sm font-medium mb-1"><span class="line-clamp-1">UI/UX Design</span></div>
                                    <div class="text-xs font-medium text-slate-400">394.87 MB</div>
                                </div>
                            </div>
                            <button @click="() => show = false" class="text-slate-500 hover:text-slate-700 dark:text-white">
                                <Icon class="text-2xl" name="cross"></Icon>
                            </button>
                        </div>
                        <div class="px-5 sm:px-6 py-4 sm:py-5 border-b border-gray-200 dark:border-gray-800">
                            <div class="flex items-center">
                                <label class="text-sm text-slate-400 pe-4">To</label>
                                <input type="text" class="block w-full text-sm placeholder-slate-300 bg-transparent leading-4.5 p-0 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none" placeholder="Email or Name" />
                                <Button size="sm" variant="white-outline" class="whitespace-nowrap">Can View</Button>
                            </div>
                        </div>
                        <div class="px-5 sm:px-6 py-5 sm:py-6">
                            <textarea class="block w-full text-sm leading-4.5 p-0 min-h-[200px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Add a Message (optional)"></textarea>
                        </div>
                        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
                            <div class="flex items-center justify-end flex-wrap gap-3">
                                <ul class="flex items-center gap-5">
                                    <li><Button @click="() => show = false" size="rg" variant="light" class="bg-white">Cancel</Button></li>
                                    <li><Button @click="() => show = false" size="rg" variant="primary">Share</Button></li>
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
