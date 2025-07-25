<script setup>
import { computed } from 'vue';
import {Icon} from '@/components'
const props = defineProps({
    size:String,
    variant:String,
})

const compClass = computed(() => ({
    "flex [&>*]:border-2 [&>*]:border-white [&>*]:dark:border-gray-950": !props.variant || props.variant === 'default',
    "relative flex [&>*]:border-2 [&>*]:border-white [&>*]:dark:border-gray-950 [&>*]:h-[70%] [&>*]:w-[70%] [&>*]:absolute [&>*:first-child]:top-0 [&>*:first-child]:end-0 [&>*:last-child]:bottom-0 [&>*:last-child]:start-0": props.variant === 's2',
    "[&>:not(:first-child)]:-ms-1": (!props.variant || props.variant === 'default') & props.size === "xs",
    "[&>:not(:first-child)]:-ms-2": (!props.variant || props.variant === 'default') & props.size === "mb",
    "[&>:not(:first-child)]:-ms-3": (!props.variant || props.variant === 'default') & props.size === "sm",
    "[&>:not(:first-child)]:-ms-3.5": (!props.variant || props.variant === 'default') & (!props.size || props.size === "rg"),
    "[&>:not(:first-child)]:-ms-4.5": (!props.variant || props.variant === 'default') & props.size === "lg",
    "[&>:not(:first-child)]:-ms-5.5": (!props.variant || props.variant === 'default') & props.size === "xl",
    "[&>:not(:first-child)]:-ms-6.5": (!props.variant || props.variant === 'default') & props.size === "2xl",
    "[&>:not(:first-child)]:-ms-7.5": (!props.variant || props.variant === 'default') & props.size === "3xl",
    "text-[9px] h-6 w-6": props.variant === 's2' & props.size === "xs",
    "text-xs h-7 w-7": props.variant === 's2' & props.size === "mb",
    "text-xs h-8 w-8": props.variant === 's2' & props.size === "sm",
    "text-xs h-10 w-10": props.variant === 's2' & (props.size === "rg" || !props.size),
    "text-sm h-12 w-12": props.variant === 's2' & props.size === "lg",
    "text-base h-16 w-16": props.variant === 's2' & props.size === "xl",
    "text-2xl h-20 w-20": props.variant === 's2' & props.size === "2xl",
    "text-4xl h-28 w-28": props.variant === 's2' & props.size === "3xl",
}))

</script>
<template>
    <div :class="compClass">
        <slot></slot>
    </div>
</template>