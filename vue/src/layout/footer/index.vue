<script setup>

import LanguageDropdown from '../components/LanguageDropdownAlt.vue'
import RegionModal from '../components/RegionModal.vue'
</script>

<template>
    <div class="w-full min-w-[320px] mt-auto border-t bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-1.5 sm:px-5 py-5">
        <div class="container max-w-none">
            <div class="flex items-center justify-between flex-wrap">
                <div class="text-sm text-slate-500 pb-1 sm:pb-0"> &copy; 2025 DashWind. Template by <a class="hover:text-primary-500" href="https://softnio.com" target="_blank">Softnio</a>
                </div>
                <ul class="flex flex-wrap items-center -mx-3.5 -my-2">
                    <li class="inline-flex">
                        <LanguageDropdown />
                    </li>
                    <li class="inline-flex">
                        <RegionModal />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>