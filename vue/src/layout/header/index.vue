<script setup>
import { ref, computed } from 'vue';
import { Icon } from '@/components';
import LanguageDropdown from '../components/LanguageDropdown.vue';
import NotificationDropdown from '../components/NotificationDropdown.vue';
import UserDropdown from '../components/UserDropdown.vue';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const visibility = defineModel('visibility');

const compClass = computed(() => ({
    'nk-header fixed start-0 w-full h-16 top-0 z-[1021] transition-all duration-300 min-w-[320px]': true,
    [`dark`]: theme.header == 'dark',
}));
</script>

<template>
    <div :class="compClass">
        <div
            class="h-16 border-b border-gray-200 bg-white px-1.5 sm:px-5 dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="container max-w-none">
                <div class="relative -mx-1 flex items-center">
                    <div class="-ms-1.5 me-4 px-1 xl:hidden">
                        <button
                            @click="
                                () => {
                                    visibility = true;
                                }
                            "
                            class="sidebar-toggle relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900"
                        >
                            <Icon
                                name="menu"
                                class="text-2xl text-slate-600 dark:text-slate-300"
                            />
                        </button>
                    </div>
                    <div class="flex px-1 py-3.5 xl:hidden">
                        <router-link
                            to="/"
                            class="relative inline-block h-9 transition-opacity duration-300"
                        >
                            <img
                                class="h-full opacity-0 dark:opacity-100"
                                src="/logo.png"
                                srcSet="/logo2x.png 2x"
                                alt="logo"
                            />
                            <img
                                class="absolute start-0 top-0 h-full opacity-100 dark:opacity-0"
                                src="/logo-dark.png"
                                srcSet="/logo-dark2x.png 2x"
                                alt="logo"
                            />
                        </router-link>
                    </div>
                    <div class="hidden px-1 py-2 xl:block">
                        <a
                            class="flex items-center transition-all duration-300"
                            href="#link"
                            @click="(e) => e.preventDefault()"
                        >
                            <div class="inline-flex w-8 flex-shrink-0">
                                <Icon
                                    class="text-primary-600 text-2xl leading-none"
                                    name="card-view"
                                />
                            </div>
                            <div
                                class="flex max-w-[calc(100%-theme(spacing.8))] items-center"
                            >
                                <p
                                    class="w-[calc(100%-theme(spacing.8))] overflow-hidden text-sm font-medium text-ellipsis whitespace-nowrap text-slate-600 dark:text-slate-300"
                                >
                                    Do you know the latest update of 2022?
                                    <span
                                        class="font-normal text-slate-400 dark:text-slate-500"
                                    >
                                        A overview of our is now available on
                                        YouTube</span
                                    >
                                </p>
                                <Icon
                                    class="ms-1 text-slate-400"
                                    name="external"
                                />
                            </div>
                        </a>
                    </div>
                    <div class="ms-auto px-1 py-3.5">
                        <ul class="item-center -mx-1.5 flex sm:-mx-2.5">
                            <li class="hidden px-1.5 sm:inline-flex sm:px-2.5">
                                <LanguageDropdown />
                            </li>
                            <li class="inline-flex px-1.5 sm:px-2.5">
                                <UserDropdown />
                            </li>
                            <li class="inline-flex px-1.5 sm:px-2.5">
                                <NotificationDropdown />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
