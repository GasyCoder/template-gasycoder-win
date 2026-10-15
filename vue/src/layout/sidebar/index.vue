<script setup>
import { ref } from 'vue';
import SimpleBar from 'simplebar-vue';
import { useResizeObserver } from '@vueuse/core';
import Menu from './Menu.vue';
import { Icon } from '@/components';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const visibility = defineModel('visibility');
const compact = defineModel('compact');

let mobile = ref(false);
let mouseEnter = ref(false);

useResizeObserver(document.documentElement, (entries) => {
    if (entries[0].contentRect.width < 1280) {
        setTimeout(() => {
            mobile.value = true;
            compact.value = false;
        }, 2000);
    } else {
        mobile.value = false;
        visibility.value = false;
    }
});
</script>
<template>
    <div
        :class="{
            'nk-sidebar group/sidebar peer fixed start-0 top-0 z-[1031] h-full max-h-screen min-h-screen w-72 -translate-x-full overflow-hidden transition-[transform,width] duration-300 xl:translate-x-0 rtl:translate-x-full xl:rtl:translate-x-0 [&.is-compact:not(.has-hover)]:w-[74px] [&.sidebar-visible]:translate-x-0': true,
            'sidebar-visible': visibility,
            'nk-sidebar-mobile': mobile,
            'is-compact': compact,
            'has-hover': compact && mouseEnter,
            dark: theme.sidebar == 'dark',
        }"
    >
        <div
            class="flex h-16 w-72 min-w-full items-center overflow-hidden border-e border-b border-gray-200 bg-white px-6 py-3 dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="-ms-1 me-4">
                <div class="hidden xl:block">
                    <a
                        href="#sidebar"
                        @click="
                            (ev) => {
                                ev.preventDefault();
                                compact = !compact;
                            }
                        "
                        class="sidebar-compact-toggle relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 dark:before:bg-gray-900"
                    >
                        <Icon
                            class="text-2xl text-slate-600 dark:text-slate-300"
                            name="menu"
                        />
                    </a>
                </div>
                <div class="xl:hidden">
                    <button
                        @click="
                            () => {
                                visibility = !visibility;
                            }
                        "
                        class="sidebar-toggle relative isolate inline-flex h-9 w-9 items-center px-1.5 *:pointer-events-none before:absolute before:top-1/2 before:left-1/2 before:-z-[1] before:h-5 before:w-5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-gray-200 before:opacity-0 before:transition-all before:duration-300 before:content-[''] hover:before:h-10 hover:before:w-10 hover:before:opacity-100 rtl:-scale-x-100 dark:before:bg-gray-900"
                    >
                        <Icon
                            name="arrow-left"
                            class="text-2xl text-slate-600 dark:text-slate-300"
                        />
                    </button>
                </div>
            </div>
            <div class="relative flex flex-shrink-0">
                <router-link
                    to="/"
                    class="relative inline-block h-9 transition-opacity duration-300 group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0"
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
        </div>
        <div
            @mouseenter="() => (mouseEnter = true)"
            @mouseleave="() => (mouseEnter = false)"
            class="nk-sidebar-body relative max-h-full w-full overflow-hidden border-e border-gray-200 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="flex h-[calc(100vh-theme(spacing.16))] w-full flex-col">
                <SimpleBar class="h-full pt-4 pb-10">
                    <Menu v-model:visibility="visibility"></Menu>
                </SimpleBar>
            </div>
        </div>
    </div>
    <div
        @click="
            (ev) => {
                ev.preventDefault();
                visibility = false;
            }
        "
        class="sidebar-toggle bg-opacity-20 invisible fixed inset-0 z-[1030] bg-slate-950 opacity-0 peer-[.sidebar-visible]:visible peer-[.sidebar-visible]:opacity-100 xl:!invisible xl:!opacity-0"
    ></div>
</template>
