<script setup>
import { computed } from 'vue';
import {Icon} from '@/components'
const props = defineProps({
    size:String,
    as:String,
    active:Boolean,
})

const compClass = computed(() => ({
    "inline-flex items-center justify-center px-1.5 isolate relative before:content-[''] before:absolute before:-z-[1] before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 [.active>&]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 focus-visible:outline-0": true,
    "before:bg-gray-200 dark:before:bg-gray-900 text-slate-500 dark:text-slate-300 hover:text-slate-600 [&.active]:text-slate-600 [.active>&]:text-slate-600 [.active>&]:dark:text-slate-200" : props.variant === "light" || !props.variant,
    "h-9 w-9 before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 [.active>&]:before:h-10 [.active>&]:before:w-10" : props.size === "rg" || !props.size,
    "h-9 w-9 before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.active]:before:h-9 [&.active]:before:w-9 [.active>&]:before:h-9 [.active>&]:before:w-9" : props.size === "md",
    "h-8 w-8 before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.active]:before:h-8 [&.active]:before:w-8 [.active>&]:before:h-8 [.active>&]:before:w-8" : props.size === "sm",
    "h-7 w-7 before:h-5 before:w-5 hover:before:h-7 hover:before:w-7 [&.active]:before:h-7 [&.active]:before:w-7 [.active>&]:before:h-7 [.active>&]:before:w-7" : props.size === "xs",
    "h-4 w-4 before:h-5 before:w-5 hover:before:h-6 hover:before:w-6 [&.active]:before:h-6 [&.active]:before:w-6 [.active>&]:before:h-6 [.active>&]:before:w-6" : props.size === "tiny",
    "active": props.active,
}))

</script>
<template>
    <component :is="as ? as : 'button'" :class="compClass">
        <slot></slot>
    </component>
</template>