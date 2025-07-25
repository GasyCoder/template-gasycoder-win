<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
    variant:String,
})

const compClass = computed(() => ({
    "px-5 sm:px-6 py-3 sm:py-4 rounded-b-md border-t" : true,
    "border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900": !props.variant,
    "bg-primary-700 bg-opacity-40 border-primary-700 border-opacity-70": props.variant === "primary",
    "bg-gray-700 bg-opacity-40 border-gray-700 border-opacity-70": props.variant === "secondary",
    "bg-green-700 bg-opacity-40 border-green-700 border-opacity-70": props.variant === "green",
    "bg-red-700 bg-opacity-40 border-red-700 border-opacity-70": props.variant === "red",
    "bg-yellow-700 bg-opacity-40 border-yellow-700 border-opacity-70": props.variant === "yellow",
    "bg-cyan-700 bg-opacity-40 border-cyan-700 border-opacity-70": props.variant === "cyan",
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>