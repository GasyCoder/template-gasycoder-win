<script setup>
import { computed } from 'vue'
const props = defineProps({
    as:String,
    floating:Boolean,
    check:Boolean,
})

const compClass = computed(() => ({
    "text-[11px] italic mt-1":true,
    "block leading-[1.8] text-red-600": !props.floating,
    "absolute leading-none bottom-[calc(100%+4px)] px-2 py-1 z-[1] rounded-sm whitespace-nowrap bg-red-500 text-white before:absolute before:h-0 before:w-0 before:top-full before:border-s-6 before:border-e-6 before:border-b-6 before:border-b-transparent ": props.floating ,
    "before:border-s-transparent before:border-e-red-500 before:end-2.5 end-0": props.floating && !props.check,
    "before:border-s-red-500 before:border-e-transparent before:start-2.5 start-0": props.floating && props.check,
}))

</script>
<template>
    <component :is="as ? as : 'span'" :class="compClass">
        <slot></slot>
    </component>
</template>