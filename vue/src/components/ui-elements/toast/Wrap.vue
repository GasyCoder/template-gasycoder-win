<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
    variant:String
})
const compClass = computed(() => ({
    "w-[350px] max-w-full text-sm pointer-events-auto border rounded mb-3 last:mb-0" : true,
    "text-slate-600 bg-white dark:bg-gray-950 bg-opacity-85 border-gray-300 dark:border-gray-900 shadow" : !props.variant || props.variant === "light",
    "text-primary-100 bg-primary-600 border-primary-700 shadow-[0_3px_12px_1px] shadow-primary-200 dark:shadow-primary-950" : props.variant === "primary",
    "text-gray-100 bg-gray-600 border-gray-700 shadow-[0_3px_12px_1px] shadow-gray-200 dark:shadow-gray-950" : props.variant === "secondary",
    "text-green-100 bg-green-600 border-green-700 shadow-[0_3px_12px_1px] shadow-green-200 dark:shadow-green-950" : props.variant === "green",
    "text-cyan-100 bg-cyan-600 border-cyan-700 shadow-[0_3px_12px_1px] shadow-cyan-200 dark:shadow-cyan-950" : props.variant === "cyan",
    "text-yellow-100 bg-yellow-600 border-yellow-700 shadow-[0_3px_12px_1px] shadow-yellow-200 dark:shadow-yellow-950" : props.variant === "yellow",
    "text-red-100 bg-red-600 border-red-700 shadow-[0_3px_12px_1px] shadow-red-200 dark:shadow-red-950" : props.variant === "red",
    "text-slate-100 bg-slate-700 border-slate-800 shadow-[0_3px_12px_1px] shadow-slate-200 dark:shadow-slate-950" : props.variant === "dark",
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>