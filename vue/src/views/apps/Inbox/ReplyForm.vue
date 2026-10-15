<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import { Button, ButtonZoom, Icon, Dropdown, Tags } from '@/components';

const showCC = ref(false);
const showBCC = ref(false);
</script>
<template>
    <div
        class="border-t border-gray-200 sm:ms-24 sm:me-9 sm:mt-2 sm:mb-9 sm:rounded sm:border lg:ms-20 lg:me-10 lg:mb-10 dark:border-gray-800"
    >
        <div class="border-b border-gray-200 px-5 sm:px-6 dark:border-gray-800">
            <div
                class="relative flex flex-grow items-center py-4 max-sm:flex-wrap sm:items-start"
            >
                <div class="-ms-2 me-3">
                    <Dropdown
                        placement="bottom-end"
                        rtlPlacement="bottom-start"
                        :offset="[14, -8]"
                        :rtlOffset="[-14, -8]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[280px]"
                    >
                        <template #button>
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-xl/4.5 text-slate-400 dark:text-slate-300"
                                    name="curve-up-left"
                                />
                            </ButtonZoom>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <Icon
                                            class="w-7 text-start text-lg leading-none opacity-80"
                                            name="reply-fill"
                                        ></Icon
                                        ><span>Reply to Abu Bin Ishtiyak</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <Icon
                                            class="w-7 text-start text-lg leading-none opacity-80"
                                            name="forward-arrow-fill"
                                        ></Icon
                                        ><span>Forward</span>
                                    </MenuItem>
                                </li>
                                <li
                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                ></li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <Icon
                                            class="w-7 text-start text-lg leading-none opacity-80"
                                            name="edit-fill"
                                        ></Icon
                                        ><span>Edit Subject</span>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </div>
                <div class="text-sm font-bold sm:hidden">Reply</div>
                <div class="w-full">
                    <div class="flex items-center sm:pe-14">
                        <label class="w-6 pe-2 text-sm text-slate-400"
                            >To</label
                        >
                        <Tags
                            id="mailtoreply"
                            class="!border-transparent"
                            value="info@softnio.com"
                        />
                    </div>
                    <div
                        v-if="showCC"
                        class="flex items-center [&_.tags-input]:flex-grow"
                        id="mail-cc"
                    >
                        <label class="w-6 pe-2 text-sm text-slate-400"
                            >Cc</label
                        >
                        <Tags id="mailtoreplycc" class="!border-transparent" />
                        <button
                            @click="() => (showCC = !showCC)"
                            class="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                        >
                            <Icon name="cross"></Icon>
                        </button>
                    </div>
                    <div
                        v-if="showBCC"
                        class="flex items-center [&_.tags-input]:flex-grow"
                        id="mail-bcc"
                    >
                        <label class="w-6 pe-2 text-sm text-slate-400"
                            >Bcc</label
                        >
                        <Tags id="mailtoreplybcc" class="!border-transparent" />
                        <button
                            @click="() => (showBCC = !showBCC)"
                            class="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                        >
                            <Icon name="cross"></Icon>
                        </button>
                    </div>
                </div>
                <ul class="absolute end-0 top-5 flex gap-x-3 sm:top-6">
                    <li>
                        <button
                            @click="() => (showCC = !showCC)"
                            class="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                        >
                            CC
                        </button>
                    </li>
                    <li>
                        <button
                            @click="() => (showBCC = !showBCC)"
                            class="class-toggle hover:text-primary-600 text-slate-400 *:pointer-events-none"
                        >
                            BCC
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-b border-gray-200 dark:border-gray-800">
            <div class="px-5 py-2 sm:px-6">
                <textarea
                    class="block min-h-[78px] w-full resize-none rounded border-0 bg-white p-0 pt-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                    placeholder="Hello"
                ></textarea>
            </div>
        </div>
        <div class="flex justify-between px-5 py-4 sm:px-6">
            <ul class="inline-flex items-center gap-1.5">
                <li class="me-2">
                    <Button size="rg" variant="primary" type="submit"
                        >Send</Button
                    >
                </li>
                <li>
                    <Dropdown
                        placement="top-start"
                        rtlPlacement="top-end"
                        :offset="[0, 4]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                    >
                        <template #button>
                            <button
                                v-nk-tooltip="{
                                    placement: 'top',
                                    content: 'Template',
                                }"
                                class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                            >
                                <Icon class="text-base/none" name="hash" />
                            </button>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <h6
                                        class="relative flex items-center px-5 py-2.5 text-xs leading-5 text-slate-400"
                                    >
                                        Quick Insert
                                    </h6>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                    >
                                        <span>Thank you message</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                    >
                                        <span>Your issues solved</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                    >
                                        <span>Thank you message</span>
                                    </MenuItem>
                                </li>
                                <li
                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                ></li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            class="w-7 text-start text-lg leading-none"
                                            name="file-plus"
                                        />
                                        <span>Save as Template</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-200 hover:dark:bg-slate-900"
                                    >
                                        <Icon
                                            class="w-7 text-start text-lg leading-none"
                                            name="notes-alt"
                                        />
                                        <span>Manage Template</span>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </li>
                <li>
                    <a
                        v-nk-tooltip="{
                            placement: 'top',
                            content: 'Upload Attachment',
                        }"
                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                    >
                        <Icon class="text-base/none" name="clip-v"></Icon>
                    </a>
                </li>
                <li>
                    <a
                        v-nk-tooltip="{
                            placement: 'top',
                            content: 'Upload Images',
                        }"
                        class="relative inline-flex h-7.5 w-7.5 items-center justify-center rounded-sm text-center align-middle text-xs leading-4.5 font-bold tracking-wide"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                    >
                        <Icon class="text-base/none" name="img"></Icon>
                    </a>
                </li>
            </ul>
            <ul class="-me-2 inline-flex items-center gap-1">
                <li>
                    <Dropdown
                        placement="top-end"
                        rtlPlacement="top-start"
                        :offset="[-14, -8]"
                        :rtlOffset="[14, -8]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                    >
                        <template #button>
                            <ButtonZoom size="rg">
                                <Icon class="text-xl" name="more-v" />
                            </ButtonZoom>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Another Option</span>
                                    </MenuItem>
                                </li>
                                <li class="active">
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>More Option</span>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                </li>
                <li>
                    <ButtonZoom size="rg">
                        <Icon
                            class="text-base/none text-slate-600"
                            name="trash"
                        />
                    </ButtonZoom>
                </li>
            </ul>
        </div>
    </div>
</template>
