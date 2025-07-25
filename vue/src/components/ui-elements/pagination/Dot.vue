<script setup>
import { computed } from 'vue'
import {Icon} from '@/components'
const props = defineProps({
    as:String,
    size: String,

})
const compClass = computed(() => ({
    "relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300" : true,
    "w-9 h-9 text-sm": !props.size,
    "w-7.5 h-7.5 text-xs": props.size === "sm",
    "w-11 h-11 text-base": props.size === "lg",
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <Icon name="more-h" />
    </component>
</template>