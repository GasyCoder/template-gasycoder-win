<script setup>
import { computed } from 'vue';
const props = defineProps({
    variant:String,
    size:String,
    as:String,
    pill:Boolean,
})

const compClass = computed(() => ({
    "relative inline-flex border text-center font-medium tracking-snug whitespace-nowrap align-middle": true,
    "border-primary-600 bg-primary-600 text-white" :  props.variant === "primary",
    "border-gray-500 bg-gray-500 text-white" :  props.variant === "secondary",
    "border border-green-600 bg-green-600 text-white" :  props.variant === "green",
    "border-red-600 bg-red-600 text-white" :  props.variant === "red",
    "border-yellow-600 bg-yellow-600 text-white" :  props.variant === "yellow",
    "border-cyan-600 bg-cyan-600 text-white" :  props.variant === "cyan",
    "border-blue-600 bg-blue-600 text-white" :  props.variant === "blue",
    "border-purple-600 bg-purple-600 text-white" :  props.variant === "purple",
    "border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-600 dark:text-slate-200" :  props.variant === "light",
    "border-gray-900 dark:border-gray-400 bg-gray-900 dark:bg-gray-400 text-white dark:text-gray-700" :  props.variant === "dark",
    "border-primary-100 dark:border-primary-950 bg-primary-100 dark:bg-primary-950 text-primary-600" :  props.variant === "primary-pale",
    "border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300" :  props.variant === "secondary-pale",
    "border-green-100 dark:border-green-950 bg-green-100 dark:bg-green-950 text-green-600" :  props.variant === "green-pale",
    "border-red-100 dark:border-red-950 bg-red-100 dark:bg-red-950 text-red-600" :  props.variant === "red-pale",
    "border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600" :  props.variant === "yellow-pale",
    "border-cyan-100 dark:border-cyan-950 bg-cyan-100 dark:bg-cyan-950 text-cyan-600" :  props.variant === "cyan-pale",
    "border-blue-100 dark:border-blue-950 bg-blue-100 dark:bg-blue-950 text-blue-600" :  props.variant === "blue-pale",
    "border-purple-100 dark:border-purple-950 bg-purple-100 dark:bg-purple-950 text-purple-600" :  props.variant === "purple-pale",
    "border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200" :  props.variant === "light-pale",
    "border-gray-300 dark:border-gray-900 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200" :  props.variant === "dark-pale",
    "border-primary-600 text-primary-600" :  props.variant === "primary-outline",
    "border-gray-400 text-gray-500" :  props.variant === "secondary-outline",
    "border-green-600 text-green-600" :  props.variant === "green-outline",
    "border-red-600 text-red-600" :  props.variant === "red-outline",
    "border-yellow-600 text-yellow-600" :  props.variant === "yellow-outline",
    "border-cyan-600 text-cyan-600" :  props.variant === "cyan-outline",
    "border-blue-600 text-blue-600" :  props.variant === "blue-outline",
    "border-purple-600 text-purple-600" :  props.variant === "purple-outline",
    "border-gray-300 dark:border-gray-900 text-slate-400" :  props.variant === "light-outline",
    "border-gray-900 dark:border-gray-400 text-gray-900 dark:text-gray-400" :  props.variant === "dark-outline",
    "border-primary-300 dark:border-primary-800 bg-primary-100 dark:bg-primary-950 text-primary-600" :  props.variant === "primary-pale-outline",
    "border-gray-400 dark:border-gray-600 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300" :  props.variant === "secondary-pale-outline",
    "border-green-300 dark:border-green-800 bg-green-100 dark:bg-green-950 text-green-600" :  props.variant === "green-pale-outline",
    "border-red-300 dark:border-red-800 bg-red-100 dark:bg-red-950 text-red-600" :  props.variant === "red-pale-outline",
    "border-yellow-300 dark:border-yellow-800 bg-yellow-100 dark:bg-yellow-950 text-yellow-600" :  props.variant === "yellow-pale-outline",
    "border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600" :  props.variant === "cyan-pale-outline",
    "border-blue-300 dark:border-blue-800 bg-blue-100 dark:bg-blue-950 text-blue-600" :  props.variant === "blue-pale-outline",
    "border-purple-300 dark:border-purple-800 bg-purple-100 dark:bg-purple-950 text-purple-600" :  props.variant === "purple-pale-outline",
    "border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200" :  props.variant === "light-pale-outline",
    "border-gray-500 dark:border-gray-700 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200" :  props.variant === "dark-pale-outline",
    "text-xxs/4 px-2 py-px": props.size === "sm",
    "text-xxs leading-4.5 px-2": props.size === "rg" || !props.size ,
    "text-xs leading-4.5 py-1 px-3": props.size === "lg" ,
    "text-sm leading-4.5 py-2 px-4": props.size === "xl" ,
    "text-base leading-4.5 py-3 px-5": props.size === "2xl" ,
    "text-lg leading-5 py-3 px-6": props.size === "3xl" ,
    ["rounded-sm"]: !props.pill,
    "rounded-full": props.pill,
}))

</script>
<template>
    <component :is="as ? as : 'span'" :class="compClass">
        <slot></slot>
    </component>
</template>