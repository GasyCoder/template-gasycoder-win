<script setup>
import { computed } from 'vue';
import {Icon} from '@/components'
const props = defineProps({
    size:String,
    as:String,
})

const compClass = computed(() => ({
    "inline-flex align-middle -space-x-px [&>*]:rounded-none [&>*:hover]:z-10": true,
    "[&>*:first-child]:rounded-s [&>*:last-child]:rounded-e" : props.size === "rg" || !props.size,
    "[&>*:first-child]:rounded-s-md [&>*:last-child]:rounded-e-md" : props.size === "lg",
    "[&>*:first-child]:rounded-s-sm [&>*:last-child]:rounded-e-sm" : props.size === "sm",
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>