<script setup>
import { ref } from 'vue';
import {
    Dialog,
    DialogPanel,
    TransitionRoot,
    TransitionChild,
} from '@headlessui/vue';
import { Icon } from '@/components';
import { useCountryStore } from '@/stores/countries';
const countries = useCountryStore();

const isOpen = ref(false);
function setIsOpen(value) {
    isOpen.value = value;
}
</script>
<template>
    <button
        @click="() => setIsOpen(true)"
        class="modal-toggle text-primary-500 relative inline-flex items-center px-4 py-2 text-sm transition-all duration-300 *:pointer-events-none"
    >
        <Icon class="text-lg" name="globe" />
        <span class="ms-1">Select Region</span>
    </button>
    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog
            as="div"
            class="relative z-[5000]"
            @close="() => setIsOpen(false)"
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
                <div class="fixed inset-0 bg-black/25"></div>
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
                                @click="() => setIsOpen(false)"
                                class="modal-close absolute end-4 top-4 text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                            >
                                <em class="ni ni-cross text-xl"></em>
                            </button>
                            <div class="px-5 py-5 sm:px-6 sm:py-6 md:p-9">
                                <h5
                                    class="font-heading mb-3 pe-6 text-xl font-bold text-slate-700 dark:text-white"
                                >
                                    Select Your Country
                                </h5>
                                <ul
                                    class="xs:grid-cols-2 grid grid-flow-dense gap-3 md:grid-cols-3"
                                >
                                    <li
                                        v-for="(
                                            country, index
                                        ) in countries.data"
                                        :key="index"
                                    >
                                        <a
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            class="flex items-center"
                                        >
                                            <img
                                                :src="country.flag"
                                                :alt="country.name"
                                                class="me-3 w-5"
                                            />
                                            <span
                                                class="text-base text-slate-600 dark:text-slate-200"
                                                >{{ country.name }}
                                                <small v-if="country.language"
                                                    >({{
                                                        country.language
                                                    }})</small
                                                ></span
                                            >
                                        </a>
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
