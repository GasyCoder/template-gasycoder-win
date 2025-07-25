<script setup>

import { ref } from 'vue'
import { Dialog, DialogPanel, TransitionRoot, TransitionChild, MenuItem } from '@headlessui/vue'
import { Button, ButtonZoom, Icon, Dropdown, Tags } from '@/components'

let isOpen  = ref(false);
const showCC  = ref(false);
const showBCC  = ref(false);
</script>
<template>
    <button @click="() => isOpen = true" class="modal-toggle *:pointer-events-none inline-flex items-center text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">
        <Icon class="text-lg leading-none me-3" name="plus" /> <span>Compose</span>
    </button>
    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" class="relative z-[5000]" @close="() => isOpen = false">
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enterFrom="opacity-0"
                enterTo="opacity-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100"
                leaveTo="opacity-0"
            >
                <div class="fixed inset-0 bg-black/25" ></div>
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
                                <h5 class="text-xl -tracking-snug font-heading font-bold text-slate-700 dark:text-white">Compose Mail</h5>
                                <button @click="() => isOpen = false" class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                                    <Icon class="text-2xl" name="cross"></Icon>
                                </button>
                            </div>
                            <div class="px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
                                <div class="relative py-4 flex-grow flex items-center sm:items-start max-sm:flex-wrap">
                                    <div class="w-full ">
                                        <div class="flex items-center sm:pe-14">
                                            <label class="text-sm text-slate-400 pe-2 w-6">To</label>
                                            <Tags auto-complete="off" id="mailtoreplyModal" class='!border-transparent' value="info@softnio.com" />
                                        </div>
                                        <div v-if="showCC" class="flex items-center [&_.tags-input]:flex-grow" id="mail-cc">
                                            <label class="text-sm text-slate-400 pe-2 w-6">Cc</label>
                                            <Tags  id="mailtoreplyccModal" class='!border-transparent' />
                                            <button @click="()=> showCC = !showCC" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600">
                                                <Icon name="cross"></Icon>
                                            </button>
                                        </div>
                                        <div v-if="showBCC" class="flex items-center [&_.tags-input]:flex-grow" id="mail-bcc">
                                            <label class="text-sm text-slate-400 pe-2 w-6">Bcc</label>
                                            <Tags  id="mailtoreplybccModal" class='!border-transparent' />
                                            <button @click="()=> showBCC = !showBCC" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600">
                                                <Icon name="cross"></Icon>
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="flex gap-x-3 absolute top-5 sm:top-6 end-0">
                                        <li><button @click="()=> showCC = !showCC" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600">CC</button></li>
                                        <li><button @click="()=> showBCC = !showBCC" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600">BCC</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-5 sm:px-6 py-6">
                                <textarea class="block w-full text-sm leading-4.5 p-0 min-h-[278px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
                            </div>
                            <div class="flex justify-between p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800 rounded-b-[inherit]">
                                <ul class="inline-flex items-center gap-1.5">
                                    <li class="me-2">
                                        <Button @click="() => isOpen = false" size="rg" variant="primary" type="submit">Send</Button>
                                    </li>
                                    <li>
                                        <Dropdown placement="top-start" rtlPlacement="top-end" :offset="[0, 4]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                            <template #button>
                                                <button v-nk-tooltip="{placement:'top', content:'Template'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide">
                                                    <Icon class="text-base/none" name="hash" />
                                                </button>
                                            </template>
                                            <template #content>
                                                <ul class="py-2">
                                                    <li>
                                                        <h6 class="relative px-5 py-2.5 flex items-center text-xs leading-5 text-slate-400">Quick Insert</h6>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                            <span>Thank you message</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                            <span>Your issues solved</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                            <span>Thank you message</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                            <Icon class="text-start text-lg leading-none w-7" name="file-plus" />
                                                            <span>Save as Template</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" >
                                                            <Icon class="text-start text-lg leading-none w-7" name="notes-alt" />
                                                            <span>Manage Template</span>
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                            </template>
                                        </Dropdown>
                                    </li>
                                    <li>
                                        <a v-nk-tooltip="{placement:'top', content:'Upload Attachment'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#link" @click="(e)=> e.preventDefault()">
                                            <Icon class="text-base/none" name="clip-v"></Icon>
                                        </a>
                                    </li>
                                    <li>
                                        <a v-nk-tooltip="{placement:'top', content:'Upload Images'}" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide"  href="#link" @click="(e)=> e.preventDefault()">
                                            <Icon class="text-base/none" name="img"></Icon>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="inline-flex items-center gap-1 -me-2">
                                    <li>
                                        <Dropdown placement="top-end" rtlPlacement="top-start" :offset="[-14, -8]" :rtlOffset="[14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]">
                                            <template #button>
                                                <ButtonZoom size="rg">
                                                    <Icon class="text-xl" name="more-v" />
                                                </ButtonZoom>
                                            </template>
                                            <template #content>
                                                <ul class="py-2">
                                                    <li>
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <span>Another Option</span>
                                                        </MenuItem>
                                                    </li>
                                                    <li class="active">
                                                        <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                            <span>More Option</span>
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                            </template>
                                        </Dropdown>
                                    </li>
                                    <li>
                                        <ButtonZoom size="rg">
                                            <Icon class="text-base/none text-slate-600" name="trash" />
                                        </ButtonZoom>
                                    </li>
                                </ul>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
