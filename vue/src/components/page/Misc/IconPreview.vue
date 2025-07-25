<script setup>
import { ref } from 'vue'
import { useClipboard } from '@vueuse/core'
import { Icon } from "@/components"
import CopyToClipboard from 'vue-copy-to-clipboard'
const props = defineProps({
    icon: String
})

const source = ref(`<Icon name="${props.icon}" />`)
const { copy, copied } = useClipboard({ source })

</script>
<template>
    <div class="p-2.5 sm:p-4 max-w-[50%] flex-[1_0_150px]">
        <div class="group relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5 overflow-hidden">
            <button @click="copy(source)" class="flex items-center justify-center h-8 w-8 absolute top-1 end-1 text-base opacity-0 group-hover:opacity-100 transition-all">
                <Icon v-if="copied" class="text-green-600" name="copy-fill" />
                <Icon v-else name="copy" />
            </button>
            <div>
                <Icon class="text-3xl text-slate-600 dark:text-slate-300 transition-none" :name="icon" />
            </div>
            <span class="text-xxs text-slate-400">{{icon}}</span>
            <span :class="{'text-sm text-primary-600 absolute pointer-events-none inset-0 bg-white dark:bg-gray-800 bg-opacity-90 transition-all duration-300 flex items-center justify-center' : true, 'opacity-100': copied, 'opacity-0': !copied}">Copied</span>
        </div>
    </div>
</template>