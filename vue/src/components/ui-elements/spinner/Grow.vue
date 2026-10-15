<script setup>
import { computed } from 'vue';
const props = defineProps({
    variant: String,
    size: String,
    as: String,
});

const compClass = computed(() => ({
    'inline-block rounded-full align-[-0.125em] animate-[grow_750ms_linear_infinite]': true,
    'bg-primary-600': props.variant === 'primary',
    'bg-gray-600': props.variant === 'secondary',
    'bg-green-600': props.variant === 'green',
    'bg-cyan-600': props.variant === 'cyan',
    'bg-yellow-600': props.variant === 'yellow',
    'bg-red-600': props.variant === 'red',
    'bg-slate-600': props.variant === 'light',
    'bg-gray-800': props.variant === 'dark',
    'bg-white': props.variant === 'white',
    'h-8 w-8': !props.size || props.size === 'rg',
    'h-4 w-4': props.size === 'sm',
    'h-12 w-12': props.size === 'lg',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
