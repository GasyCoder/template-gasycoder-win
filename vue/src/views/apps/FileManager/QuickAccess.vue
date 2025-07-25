<script setup>
import { ref } from 'vue'
import Layout from '@/layout/Main.vue'
import { Icon, Button, ButtonZoom } from '@/components';
import { useIconStore } from '@/stores/icon'
const icons = useIconStore()

const show = ref(true)

const files = [
    {
        icon: icons.data.folderAlt,
        name : "UI Design"
    },
    {
        icon: icons.data.folderAlt,
        name : "DashWind Resource"
    },
    {
        icon: icons.data.folderAlt,
        name : "Projects",
        ext : "xlsx"
    },
    {
        icon: icons.data.fileZipAlt,
        name : "All work",
        ext : "zip"
    },
    {
        icon: icons.data.fileSheetAlt,
        name : "Sales Reports",
        ext : "xlsx"
    },
]
</script>
<template>
  <div class="pb-3 relative flex justify-between items-center">
        <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white">Quick Access</h6>
        <button @click="()=> show= !show" :class="{'group text-sm font-medium text-primary-600 hover:text-primary-700':true, 'active': show}">
            <div class="group-[.active]:hidden block">Show</div>
            <div class="group-[.active]:block hidden">Hide</div>
        </button>
    </div>
    <div :class="{'hidden [&.active]:block' : true, 'active' : show}">
        <div class="grid grid-flow-dense grid-cols-12 gap-4">
            <div v-for="(item,index) in files" :key="index" class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                <a href="#link" @click="(e)=> e.preventDefault()" class="block py-6 px-4">
                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.icon"></div>
                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">{{item.name}}</span> <template v-if="item.ext">{{ '.' + item.ext }}</template> </div>
                </a>
                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                    <ButtonZoom size="sm"><Icon class="text-base/none" name="cross" /></ButtonZoom>
                </div>
            </div>
        </div>
    </div>
</template>
