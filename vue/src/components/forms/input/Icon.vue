<script setup>
import { computed } from 'vue'
import { Icon } from '@/components'
const props = defineProps({
    as:String,
    icon:String,
    iconClass:String,
    start:Boolean,
    end:Boolean,
})

const compClass = computed(() => ({
    "absolute h-9 w-9 top-0 flex items-center justify-center z-[1]":true,
    "start-0" : props.start,
    "end-0" : props.end,
}))
const textClass = computed(() => ({
    "text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight":true,
    [`${props.iconClass}`] : props.iconClass
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <Icon :class="iconClass" class="text-slate-400 text-base leading-none" :name="icon" />
    </component>
</template>