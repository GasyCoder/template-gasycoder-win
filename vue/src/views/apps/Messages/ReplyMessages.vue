<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';

const props = defineProps({
    data: Object,
});
</script>
<template>
    <div
        class="border-b border-gray-200 px-5 py-6 sm:px-9 lg:hidden dark:border-gray-800"
    >
        <h4
            class="font-heading text-xl/tighter mb-2 line-clamp-1 font-bold tracking-tight text-slate-700 sm:mb-4 dark:text-white"
        >
            {{ data.title }}
        </h4>
        <ul class="flex flex-wrap gap-6">
            <li>
                <span class="inline-flex items-center gap-2 text-slate-400">
                    <Icon
                        class="text-primary-600 text-sm/none"
                        name="flag-fill"
                    />
                    <span>Technical Problem</span>
                </span>
            </li>
        </ul>
    </div>
    <div class="px-5 py-5 sm:px-9 lg:py-8">
        <div
            class="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default"
        >
            <div class="flex items-center">
                <Avatar v-if="data.image" size="sm" rounded :img="data.image" />
                <Avatar
                    v-else
                    size="sm"
                    :variant="data.theme"
                    rounded
                    :text="toInitials(data.name)"
                />
                <div
                    class="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white"
                >
                    {{ data.name }}
                </div>
            </div>
            <div class="text-xs text-slate-400">{{ data.date }}</div>
        </div>
        <div class="ms-12">
            <div class="entry">
                <p v-for="(item, index) in data.message" key="index">
                    {{ item }}
                </p>
            </div>
            <div
                class="mt-7 rounded border border-gray-200 dark:border-gray-800"
            >
                <ul class="flex flex-wrap gap-x-8 gap-y-2 px-5 py-4">
                    <li class="w-[180px]">
                        <a
                            class="flex w-full items-center text-slate-600 dark:text-slate-300"
                            href="#link"
                            @click="(e) => e.preventDefault()"
                            ><em
                                class="text-primary-600 ni ni-img me-4 text-2xl/none"
                            ></em
                            ><span class="line-clamp-1"
                                >error-show-On-order.jpg</span
                            ></a
                        >
                    </li>
                    <li class="w-[180px]">
                        <a
                            class="flex w-full items-center text-slate-600 dark:text-slate-300"
                            href="#link"
                            @click="(e) => e.preventDefault()"
                            ><em
                                class="text-primary-600 ni ni-img me-4 text-2xl/none"
                            ></em
                            ><span class="line-clamp-1"
                                >full-page-error.jpg</span
                            ></a
                        >
                    </li>
                </ul>
                <div
                    class="flex flex-wrap justify-between rounded-b border-t border-gray-200 bg-gray-50 px-5 py-3 dark:border-gray-800 dark:bg-gray-900"
                >
                    <span
                        class="text-sm font-medium text-slate-700 dark:text-white"
                        >2 files attached</span
                    >
                    <a
                        class="group/link inline-flex items-center gap-3.5 text-sm/none font-medium whitespace-nowrap"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                    >
                        <em
                            class="text-primary-500 group-hover/link:text-primary-600 ni ni-download text-lg/none transition-all duration-300"
                        ></em>
                        <span
                            class="group-hover/link:text-primary-600 text-slate-400 transition-all duration-300"
                            >Download All</span
                        >
                    </a>
                </div>
            </div>
        </div>
    </div>
    <template v-for="(item, index) in data.reply" :key="index">
        <div v-if="item.note" class="px-5 py-5 sm:px-9 lg:py-8">
            <div
                class="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default"
            >
                <div class="flex items-center">
                    <Avatar
                        v-if="item.image"
                        size="sm"
                        rounded
                        :img="item.image"
                    />
                    <Avatar
                        v-else
                        size="sm"
                        :variant="item.theme"
                        rounded
                        :text="toInitials(item.name)"
                    />
                    <div
                        class="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white"
                    >
                        {{ item.name }}
                        <span class="font-normal text-slate-400"
                            >added a note</span
                        >
                    </div>
                </div>
                <div class="text-xs text-slate-400">{{ item.date }}</div>
            </div>
            <div class="ms-12">
                <div
                    class="entry bg-opacity-70 rounded bg-gray-100 px-5 py-3 dark:bg-gray-900"
                >
                    <p v-for="(item, index) in item.message" key="index">
                        {{ item }}
                    </p>
                </div>
            </div>
        </div>
        <div
            v-else-if="item.assigned"
            class="mx-5 overflow-hidden px-8 text-center sm:mx-9 lg:mx-10"
        >
            <div
                class="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-200 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-200 before:dark:bg-gray-900 after:dark:bg-gray-900"
            >
                <span class="text-slate-600 dark:text-slate-400">{{
                    item.assigned.by
                }}</span>
                assigned user:
                <span class="text-primary-600">{{ item.assigned.name }}</span>
                at {{ item.assigned.date }} at {{ item.assigned.time }}
            </div>
        </div>
        <div
            v-else-if="item.sap"
            class="mx-5 overflow-hidden px-8 text-center sm:mx-9 lg:mx-10"
        >
            <div
                class="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-200 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-200 before:dark:bg-gray-900 after:dark:bg-gray-900"
            >
                <strong class="text-gray-600 dark:text-gray-400">{{
                    item.sap.date
                }}</strong>
            </div>
        </div>

        <div v-else class="px-5 py-5 sm:px-9 lg:py-8">
            <div
                class="mb-2 flex cursor-pointer items-center justify-between [&.is-opended]:cursor-default"
            >
                <div class="flex items-center">
                    <Avatar
                        v-if="item.image"
                        size="sm"
                        rounded
                        :img="item.image"
                    />
                    <Avatar
                        v-else
                        size="sm"
                        :variant="item.theme"
                        rounded
                        :text="toInitials(item.name)"
                    />
                    <div
                        class="ms-3 text-sm/4 font-bold text-slate-600 dark:text-white"
                    >
                        {{ item.name }}
                        <span v-if="item.you" class="font-normal text-slate-400"
                            >(You)</span
                        >
                    </div>
                </div>
                <div class="text-xs text-slate-400">{{ item.date }}</div>
            </div>
            <div class="ms-12">
                <div class="entry">
                    <p v-for="(item, index) in item.message" key="index">
                        {{ item }}
                    </p>
                </div>
                <div
                    class="bg-opacity-70 mt-5 inline-block rounded bg-gray-100 px-3 py-1.5 text-xs dark:bg-gray-900"
                >
                    Replied by <span>{{ item.name }}</span> at {{ item.time }}
                </div>
            </div>
        </div>
    </template>
</template>
