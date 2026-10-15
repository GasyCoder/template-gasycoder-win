<script setup>
import { ref } from 'vue';
import Layout from '@/layout/Main.vue';
import { Icon, Button, ButtonZoom } from '@/components';
import { useIconStore } from '@/stores/icon';
const icons = useIconStore();

const show = ref(true);

const files = [
    {
        icon: icons.data.folderAlt,
        name: 'UI Design',
    },
    {
        icon: icons.data.folderAlt,
        name: 'DashWind Resource',
    },
    {
        icon: icons.data.folderAlt,
        name: 'Projects',
        ext: 'xlsx',
    },
    {
        icon: icons.data.fileZipAlt,
        name: 'All work',
        ext: 'zip',
    },
    {
        icon: icons.data.fileSheetAlt,
        name: 'Sales Reports',
        ext: 'xlsx',
    },
];
</script>
<template>
    <div class="relative flex items-center justify-between pb-3">
        <h6
            class="font-heading text-base/tighter -tracking-snug font-bold text-slate-700 dark:text-white"
        >
            Quick Access
        </h6>
        <button
            @click="() => (show = !show)"
            :class="{
                'group text-primary-600 hover:text-primary-700 text-sm font-medium': true,
                active: show,
            }"
        >
            <div class="block group-[.active]:hidden">Show</div>
            <div class="hidden group-[.active]:block">Hide</div>
        </button>
    </div>
    <div :class="{ 'hidden [&.active]:block': true, active: show }">
        <div class="grid grid-flow-dense grid-cols-12 gap-4">
            <div
                v-for="(item, index) in files"
                :key="index"
                class="group/fileitem xs:col-span-6 relative col-span-12 rounded border border-gray-300 bg-white sm:col-span-4 xl:col-span-3 2xl:col-span-2 dark:border-gray-900 dark:bg-gray-950"
            >
                <a
                    href="#link"
                    @click="(e) => e.preventDefault()"
                    class="block px-4 py-6"
                >
                    <div
                        class="h-18 [&>svg]:mx-auto [&>svg]:h-full"
                        v-html="item.icon"
                    ></div>
                    <div
                        class="flex justify-center pt-4 text-center text-sm/snug font-medium"
                    >
                        <span class="line-clamp-1">{{ item.name }}</span>
                        <template v-if="item.ext">{{
                            '.' + item.ext
                        }}</template>
                    </div>
                </a>
                <div
                    class="hideable absolute end-2 top-2 transition-all duration-300 group-hover/fileitem:opacity-100 [&.hideable]:opacity-0"
                >
                    <ButtonZoom size="sm"
                        ><Icon class="text-base/none" name="cross"
                    /></ButtonZoom>
                </div>
            </div>
        </div>
    </div>
</template>
