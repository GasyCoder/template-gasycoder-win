<script setup>
import { ref, computed } from 'vue'
import {Icon} from '@/components'
import LanguageDropdown from '../components/LanguageDropdown.vue'
import NotificationDropdown from '../components/NotificationDropdown.vue'
import UserDropdown from '../components/UserDropdown.vue'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

const visibility = defineModel('visibility')

const compClass = computed(() => ({
    "nk-header fixed start-0 w-full h-16 top-0 z-[1021] transition-all duration-300 min-w-[320px]": true,
    [`dark`]: theme.header == "dark",
}))

</script>

<template>
<div :class="compClass">
    <div class="h-16 border-b bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-1.5 sm:px-5">
        <div class="container max-w-none">
            <div class="relative flex items-center -mx-1">
                <div class="px-1 me-4 -ms-1.5 xl:hidden">
                    <button @click="(()=> {visibility = true})" class="sidebar-toggle *:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" >
                        <Icon name="menu" class="text-2xl text-slate-600 dark:text-slate-300" />
                    </button>
                </div>
                <div class="px-1 py-3.5 flex xl:hidden">
                    <router-link to="/" class="relative inline-block transition-opacity duration-300 h-9">
                        <img class="h-full opacity-0 dark:opacity-100" src="/logo.png" srcSet="/logo2x.png 2x" alt="logo" />
                        <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="/logo-dark.png" srcSet="/logo-dark2x.png 2x" alt="logo" />
                    </router-link>
                </div>
                <div class="px-1 py-2 hidden xl:block">
                    <a class="flex items-center transition-all duration-300" href="#link" @click="(e)=> e.preventDefault()">
                        <div class="w-8 inline-flex flex-shrink-0">
                            <Icon class="text-2xl leading-none text-primary-600" name="card-view" />
                        </div>
                        <div class="flex items-center max-w-[calc(100%-theme(spacing.8))]">
                            <p class="text-sm text-slate-600 dark:text-slate-300 font-medium text-ellipsis overflow-hidden whitespace-nowrap w-[calc(100%-theme(spacing.8))]">Do you know the latest update of 2022? <span class="text-slate-400 dark:text-slate-500 font-normal"> A overview of our is now available on YouTube</span></p>
                            <Icon class="text-slate-400 ms-1" name="external" /> 
                        </div>
                    </a>
                </div>
                <div class="px-1 py-3.5 ms-auto">
                    <ul class="flex item-center -mx-1.5 sm:-mx-2.5">
                        <li class="px-1.5 sm:px-2.5 hidden sm:inline-flex">
                            <LanguageDropdown />
                        </li>
                        <li class="px-1.5 sm:px-2.5 inline-flex">
                            <UserDropdown />
                        </li>
                        <li class="px-1.5 sm:px-2.5 inline-flex">
                            <NotificationDropdown />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</template>