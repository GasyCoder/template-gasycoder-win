<script setup>

import { ref } from 'vue'
import { MenuItem } from '@headlessui/vue'
import { Button, ButtonZoom, Icon, Dropdown, Tags } from '@/components'

const showCC  = ref(false);
const showBCC  = ref(false);
</script>
<template>
  <div class="border-t border-gray-200 dark:border-gray-800 sm:rounded sm:border sm:mt-2 sm:mb-9 lg:mb-10 sm:ms-24 lg:ms-20 sm:me-9 lg:me-10">
        <div class="px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
            <div class="relative py-4 flex-grow flex items-center sm:items-start max-sm:flex-wrap">
                <div class="-ms-2 me-3">
                    <Dropdown placement="bottom-end" rtlPlacement="bottom-start" :offset="[14, -8]" :rtlOffset="[-14, -8]" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[280px]">
                        <template #button>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl/4.5 text-slate-400 dark:text-slate-300" name="curve-up-left" />
                            </ButtonZoom>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="reply-fill"></Icon><span>Reply to Abu Bin Ishtiyak</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="forward-arrow-fill"></Icon><span>Forward</span>
                                    </MenuItem>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"> </li>
                                <li>
                                    <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                        <Icon class="text-start text-lg leading-none w-7 opacity-80" name="edit-fill"></Icon><span>Edit Subject</span>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </div>
                <div class="text-sm font-bold sm:hidden">Reply</div>
                <div class="w-full ">
                    <div class="flex items-center sm:pe-14">
                        <label class="text-sm text-slate-400 pe-2 w-6">To</label>
                        <Tags id="mailtoreply" class='!border-transparent' value="info@softnio.com" />
                    </div>
                    <div v-if="showCC" class="flex items-center [&_.tags-input]:flex-grow" id="mail-cc">
                        <label class="text-sm text-slate-400 pe-2 w-6">Cc</label>
                        <Tags  id="mailtoreplycc" class='!border-transparent' />
                        <button @click="()=> showCC = !showCC" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600">
                            <Icon name="cross"></Icon>
                        </button>
                    </div>
                    <div v-if="showBCC" class="flex items-center [&_.tags-input]:flex-grow" id="mail-bcc">
                        <label class="text-sm text-slate-400 pe-2 w-6">Bcc</label>
                        <Tags  id="mailtoreplybcc" class='!border-transparent' />
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
        <div class="border-b border-gray-200 dark:border-gray-800">
            <div class="py-2 px-5 sm:px-6">
                <textarea class="block w-full text-sm leading-4.5 p-0 pt-2 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
            </div>
        </div>
        <div class="flex justify-between py-4 px-5 sm:px-6">
            <ul class="inline-flex items-center gap-1.5">
                <li class="me-2">
                    <Button size="rg" variant="primary" type="submit">Send</Button>
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
    </div>
</template>
