<script setup>
import { computed } from 'vue'
const props = defineProps({
    as:String,
    size:String,
})

const compClass = computed(() => ({
    "px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 rounded flex items-center":true,
    "py-1" : !props.size,
    "py-1.5" : props.size === "lg",
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>