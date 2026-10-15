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
                                class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                            >
                                <div class="flex items-center">
                                    <div
                                        class="h-10 [&>svg]:h-full"
                                        v-html="icons.data.folder"
                                    ></div>
                                    <div class="ms-2">
                                        <div
                                            class="mb-1 flex items-center text-sm font-medium"
                                        >
                                            <span class="line-clamp-1"
                                                >UI/UX Design</span
                                            >
                                        </div>
                                        <div
                                            class="text-xs font-medium text-slate-400"
                                        >
                                            394.87 MB
                                        </div>
                                    </div>
                                </div>
                                <button
                                    @click="() => (show = false)"
                                    class="text-slate-500 hover:text-slate-700 dark:text-white"
                                >
                                    <Icon class="text-2xl" name="cross"></Icon>
                                </button>
                            </div>
                            <div
                                class="border-b border-gray-200 px-5 py-4 sm:px-6 sm:py-5 dark:border-gray-800"
                            >
                                <div class="flex items-center">
                                    <label class="pe-4 text-sm text-slate-400"
                                        >To</label
                                    >
                                    <input
                                        type="text"
                                        class="block w-full border-0 bg-transparent p-0 text-sm leading-4.5 placeholder-slate-300 focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0"
                                        placeholder="Email or Name"
                                    />
                                    <Button
                                        size="sm"
                                        variant="white-outline"
                                        class="whitespace-nowrap"
                                        >Can View</Button
                                    >
                                </div>
                            </div>
                            <div class="px-5 py-5 sm:px-6 sm:py-6">
                                <textarea
                                    class="block min-h-[200px] w-full resize-none rounded border-0 bg-white p-0 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all focus:border-0 focus:shadow-none focus:ring-0 focus:ring-offset-0 focus:outline-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Add a Message (optional)"
                                ></textarea>
                            </div>
                            <div
                                class="rounded-b-[inherit] bg-gray-200 px-5 py-4 sm:px-6 dark:bg-gray-900"
                            >
                                <div
                                    class="flex flex-wrap items-center justify-end gap-3"
                                >
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
                                                >Share</Button
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
