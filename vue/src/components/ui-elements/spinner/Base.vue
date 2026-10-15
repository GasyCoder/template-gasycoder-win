<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
    size: String,
    variant: String,
});

const compClass = computed(() => ({
    'inline-block rounded-full align-[-0.125em] border-r-transparent animate-[spin_750ms_linear_infinite]': true,
    'border-primary-600': props.variant === 'primary',
    'border-gray-600': props.variant === 'secondary',
    'border-green-600': props.variant === 'green',
    'border-cyan-600': props.variant === 'cyan',
    'border-yellow-600': props.variant === 'yellow',
    'border-red-600': props.variant === 'red',
    'border-slate-600': props.variant === 'light',
    'border-gray-800': props.variant === 'dark',
    'border-white': props.variant === 'white',
    'h-8 w-8 border-4': !props.size || props.size === 'rg',
    'h-4 w-4 border-2': props.size === 'sm',
    'h-12 w-12 border-4': props.size === 'lg',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
