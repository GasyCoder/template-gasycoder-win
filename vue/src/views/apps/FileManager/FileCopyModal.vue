<script setup>
import {
    Dialog,
    DialogPanel,
    TransitionRoot,
    TransitionChild,
    MenuItem,
} from '@headlessui/vue';
import { Button, ButtonZoom, Icon } from '@/components';
import { useIconStore } from '@/stores/icon';
const icons = useIconStore();
const show = defineModel('show');
</script>
<template>
    <TransitionRoot appear :show="show" as="template">
        <Dialog
            as="div"
            class="relative z-[5000]"
            @close="() => (show = false)"
        >
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enterFrom="opacity-0"
                enterTo="opacity-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100"
                leaveTo="opacity-0"
            >
                <div class="fixed inset-0 bg-slate-700/50"></div>
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div
                    class="flex min-h-full items-center justify-center p-4 text-center"
                >
                    <TransitionChild
                        as="template"
                        enter="ease-out duration-300"
                        enterFrom="opacity-0 -translate-y-6"
                        enterTo="opacity-100 translate-y-0"
                        leave="ease-in duration-200"
                        leaveFrom="opacity-100 translate-y-0"
                        leaveTo="opacity-0 -translate-y-6"
                    >
                        <DialogPanel
                            class="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] md:w-[720px] dark:bg-gray-950"
                        >
                            <div
                                class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] px-5 pt-4 sm:px-6"
                            >
                                <h5
                                    class="font-heading text-xl font-bold text-slate-700 dark:text-white"
                                >
                                    Copy item to ...
                                </h5>
                                <button
                                    @click="() => (show = false)"
                                    class="text-slate-500 hover:text-slate-700 dark:text-white"
                                >
                                    <Icon class="text-2xl" name="cross"></Icon>
                                </button>
                            </div>
                            <div class="px-5 pb-5 sm:px-6 sm:pb-6">
                                <ul class="mb-2 flex flex-wrap py-1">
                                    <li
                                        class="text-xxs inline-flex items-center ps-2 font-medium tracking-wider text-slate-300 first:ps-0"
                                    >
                                        <a
                                            class="hover:text-primary-600 text-slate-400"
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            >Project</a
                                        >
                                        <Icon
                                            class="text-xxs/none my-0.5 ms-2 font-medium text-slate-400 rtl:-scale-x-100"
                                            name="forward-ios"
                                        ></Icon>
                                    </li>
                                    <li
                                        class="text-xxs inline-flex items-center ps-2 font-medium tracking-wider text-slate-300 first:ps-0"
                                    >
                                        Apps
                                    </li>
                                </ul>
                                <div
                                    class="rounded border border-gray-200 dark:border-gray-800"
                                >
                                    <a
                                        class="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <div
                                            class="h-8 [&>svg]:h-full"
                                            v-html="icons.data.folder"
                                        ></div>
                                        <span class="ms-3 text-sm font-medium"
                                            ><span class="line-clamp-1"
                                                >UI/UX Design</span
                                            ></span
                                        >
                                        <div class="ms-auto -me-1 inline-flex">
                                            <Icon
                                                class="text-base/none rtl:-scale-x-100"
                                                name="chevron-right"
                                            ></Icon>
                                        </div>
                                    </a>
                                    <a
                                        class="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <div
                                            class="h-8 [&>svg]:h-full"
                                            v-html="icons.data.folder"
                                        ></div>
                                        <span class="ms-3 text-sm font-medium"
                                            ><span class="line-clamp-1"
                                                >UI Design</span
                                            ></span
                                        >
                                        <div class="ms-auto -me-1 inline-flex">
                                            <Icon
                                                class="text-base/none rtl:-scale-x-100"
                                                name="chevron-right"
                                            ></Icon>
                                        </div>
                                    </a>
                                    <a
                                        class="selected flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <div
                                            class="h-8 [&>svg]:h-full"
                                            v-html="icons.data.folderShared"
                                        ></div>
                                        <span class="ms-3 text-sm font-medium"
                                            ><span class="line-clamp-1"
                                                >Projects</span
                                            ></span
                                        >
                                        <div class="ms-auto -me-1 inline-flex">
                                            <Icon
                                                class="text-base/none rtl:-scale-x-100"
                                                name="chevron-right"
                                            ></Icon>
                                        </div>
                                    </a>
                                    <a
                                        class="flex items-center border-b border-gray-200 px-5 py-2 first:rounded-t-[inherit] last:rounded-b-[inherit] last:border-b-0 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <div
                                            class="h-8 [&>svg]:h-full"
                                            v-html="icons.data.folder"
                                        ></div>
                                        <span class="ms-3 text-sm font-medium"
                                            ><span class="line-clamp-1"
                                                >2019 Project</span
                                            ></span
                                        >
                                        <div class="ms-auto -me-1 inline-flex">
                                            <Icon
                                                class="text-base/none rtl:-scale-x-100"
                                                name="chevron-right"
                                            ></Icon>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="rounded-b-[inherit] bg-gray-200 px-5 py-4 sm:px-6 dark:bg-gray-900"
                            >
                                <div
                                    class="flex flex-wrap items-center justify-between gap-3"
                                >
                                    <button
                                        class="text-primary-600 hover:text-primary-700 text-sm font-medium transition-all duration-300"
                                    >
                                        Create New Folder
                                    </button>
                                    <ul class="flex items-center gap-5">
                                        <li>
                                            <Button
                                                @click="() => (show = false)"
                                                size="rg"
                                                variant="light"
                                                class="bg-white"
                                                >Cancel</Button
                                            >
                                        </li>
                                        <li>
                                            <Button
                                                @click="() => (show = false)"
                                                size="rg"
                                                variant="primary"
                                                >Copy</Button
                                            >
                                        </li>
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
