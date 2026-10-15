<script setup>
import LanguageDropdown from '../components/LanguageDropdownAlt.vue';
import RegionModal from '../components/RegionModal.vue';
</script>

<template>
    <div
        class="mt-auto w-full min-w-[320px] border-t border-gray-200 bg-white px-1.5 py-5 sm:px-5 dark:border-gray-900 dark:bg-gray-950"
    >
        <div class="container max-w-none">
            <div class="flex flex-wrap items-center justify-between">
                <div class="pb-1 text-sm text-slate-500 sm:pb-0">
                    &copy; 2025 DashWind. Template by
                    <a
                        class="hover:text-primary-500"
                        href="https://softnio.com"
                        target="_blank"
                        >Softnio</a
                    >
                </div>
                <ul class="-mx-3.5 -my-2 flex flex-wrap items-center">
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
