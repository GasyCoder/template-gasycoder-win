<script setup>
import { computed } from 'vue';
import {Icon} from '@/components'
const props = defineProps({
    as:String,
    size: String,
    text: String,
    icon: String,
    active: Boolean,
})
const compClass = computed(() => ({
    "relative inline-flex items-center justify-center text-center align-middle font-normal leading-4.5 first:rounded-s last:rounded-e tracking-wide border hover:z-10 transition-all duration-300" : true,
    "border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700": !props.active,
    "border-primary-600 bg-primary-600 text-white": props.active,
    "px-3 sm:px-4" : props.text,
    "h-9 text-sm": !props.size,
    "h-7.5 text-xs": props.size === "sm",
    "h-11 text-base": props.size === "lg",
    "w-9": (!props.size && !props.text),
    "w-7.5": (props.size === "sm" && !props.text),
    "w-11": (props.size === "lg" && !props.text),
}))

</script>
<template>
    <component :is="as ? as : 'a'" :class="compClass">
        <Icon v-if="icon" class="rtl:-scale-x-100" :name="icon"/> 
        <span v-if="text">{{text}}</span>
    </component>
</template>