<script setup>
import {
    Dialog,
    DialogPanel,
    TransitionRoot,
    TransitionChild,
    MenuItem,
} from '@headlessui/vue';
import {
    Button,
    ButtonZoom,
    Icon,
    Progress,
    ProgressBar,
    FileDropzone,
} from '@/components';
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
                            <button
                                @click="() => (show = false)"
                                class="absolute end-3 top-3 text-slate-500 hover:text-slate-700 dark:text-white"
                            >
                                <Icon class="text-xl" name="cross"></Icon>
                            </button>
                            <div class="px-5 py-6 sm:p-8">
                                <div class="mb-9">
                                    <h5
                                        class="font-heading mb-4 text-xl font-bold text-slate-700 dark:text-white"
                                    >
                                        Upload File
                                    </h5>
                                    <FileDropzone
                                        id="DropzoneDefault"
                                        class="!bg-gray-50 dark:!bg-gray-900"
                                    >
                                        <div class="dz-message !my-3">
                                            <span
                                                class="text-primary-600 block text-sm"
                                                >Drag and drop
                                                <span class="text-slate-400">
                                                    file here or
                                                </span>
                                                browse</span
                                            >
                                        </div>
                                    </FileDropzone>
                                </div>
                                <h6
                                    class="font-heading text-base/tighter -tracking-snug mb-3 font-bold text-slate-700 dark:text-white"
                                >
                                    Uploaded Files
                                </h6>
                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex items-center rounded border border-gray-200 p-2 dark:border-gray-800"
                                    >
                                        <div
                                            class="me-1 h-12 flex-shrink-0 [&>svg]:h-full"
                                            v-html="icons.data.fileZip"
                                        ></div>
                                        <div class="flex-grow pe-3">
                                            <div
                                                class="mb-2 flex items-center justify-between"
                                            >
                                                <span
                                                    class="text-sm/tighter flex items-center font-medium text-slate-600 dark:text-white"
                                                >
                                                    <span class="line-clamp-1"
                                                        >DashWind-latest-version</span
                                                    >.zip
                                                </span>
                                            </div>
                                            <div class="text-xs text-slate-400">
                                                25.49 MB
                                            </div>
                                        </div>
                                        <div class="ms-auto">
                                            <ButtonZoom size="rg">
                                                <Icon
                                                    class="text-xl text-slate-500 dark:text-slate-300"
                                                    name="trash"
                                                />
                                            </ButtonZoom>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center rounded border border-gray-200 p-2 dark:border-gray-800"
                                    >
                                        <div
                                            class="me-1 h-12 flex-shrink-0 [&>svg]:h-full"
                                            v-html="icons.data.fileDoc"
                                        ></div>
                                        <div class="flex-grow pe-3">
                                            <div
                                                class="mb-2 flex items-center justify-between"
                                            >
                                                <span
                                                    class="text-sm/tighter flex items-center font-medium text-slate-600 dark:text-white"
                                                >
                                                    <span class="line-clamp-1"
                                                        >Update work
                                                        history</span
                                                    >.docx
                                                </span>
                                                <span
                                                    class="text-xs text-slate-400"
                                                    >70% Done</span
                                                >
                                            </div>
                                            <Progress
                                                size="xs"
                                                class="bg-slate-100 dark:bg-slate-900"
                                            >
                                                <ProgressBar
                                                    :progress="70"
                                                ></ProgressBar>
                                            </Progress>
                                        </div>
                                        <div class="ms-auto">
                                            <ButtonZoom size="rg">
                                                <Icon
                                                    class="text-xl text-slate-500 dark:text-slate-300"
                                                    name="trash"
                                                />
                                            </ButtonZoom>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 flex justify-end">
                                    <ul class="flex items-center gap-5">
                                        <li>
                                            <button
                                                @click="() => (show = false)"
                                                class="text-primary-600 hover:text-primary-700 text-sm font-medium transition-all duration-300"
                                            >
                                                Cancel
                                            </button>
                                        </li>
                                        <li>
                                            <Button size="rg" variant="primary"
                                                >Add Files</Button
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
