<script setup>
import {ref} from 'vue'
import SimpleBar from "simplebar-vue"
import { useResizeObserver } from '@vueuse/core'
import Menu from "./Menu.vue";
import {Icon} from "@/components" 
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

const visibility = defineModel('visibility')
const compact = defineModel('compact')

let mobile = ref(false)
let mouseEnter = ref(false)

useResizeObserver(document.documentElement, (entries) => {
    if (entries[0].contentRect.width < 1280) {
        setTimeout(() => {
            mobile.value = true; compact.value = false
        }, 2000);
    } else {
        mobile.value = false;
        visibility.value = false;
    }
})

</script>
<template>
    <div :class="{'nk-sidebar group/sidebar peer fixed w-72 [&.is-compact:not(.has-hover)]:w-[74px] min-h-screen max-h-screen overflow-hidden h-full start-0 top-0 z-[1031] transition-[transform,width] duration-300 -translate-x-full rtl:translate-x-full xl:translate-x-0 xl:rtl:translate-x-0 [&.sidebar-visible]:translate-x-0':true, 'sidebar-visible': visibility, 'nk-sidebar-mobile': mobile, 'is-compact': compact, 'has-hover': compact && mouseEnter, 'dark': theme.sidebar == 'dark'}">
        <div class="flex items-center min-w-full w-72 h-16 border-b border-e bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-6 py-3 overflow-hidden">
            <div class="-ms-1 me-4">
                <div class="hidden xl:block">
                    <a href="#sidebar" @click="(ev) => { ev.preventDefault(); compact = !compact; }" class="sidebar-compact-toggle *:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <Icon class="text-2xl text-slate-600 dark:text-slate-300" name="menu" />
                    </a>
                </div>
                <div class="xl:hidden">
                    <button @click="(()=> {visibility = !visibility})" class="sidebar-toggle *:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 rtl:-scale-x-100" >
                        <Icon name="arrow-left" class="text-2xl text-slate-600 dark:text-slate-300" />
                    </button>
                </div>
            </div>
            <div class="relative flex flex-shrink-0">
                <router-link to="/" class="relative inline-block transition-opacity duration-300 h-9 group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0">
                    <img class="h-full opacity-0 dark:opacity-100" src="/logo.png" srcSet="/logo2x.png 2x" alt="logo" />
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="/logo-dark.png" srcSet="/logo-dark2x.png 2x" alt="logo" />
                </router-link>
            </div>
        </div>
        <div @mouseenter="() => mouseEnter = true" @mouseleave="() => mouseEnter = false" class="nk-sidebar-body max-h-full relative overflow-hidden w-full bg-white dark:bg-gray-950 border-e border-gray-200 dark:border-gray-900">
            <div class="flex flex-col w-full h-[calc(100vh-theme(spacing.16))]">
                <SimpleBar class='h-full pt-4 pb-10'>
                    <Menu v-model:visibility="visibility"></Menu>
                </SimpleBar>
            </div>
        </div>
    </div>
    <div @click="(ev) => { ev.preventDefault(); visibility = false; }" class="sidebar-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[1030] opacity-0 invisible peer-[.sidebar-visible]:opacity-100 peer-[.sidebar-visible]:visible xl:!opacity-0 xl:!invisible"></div>
</template>