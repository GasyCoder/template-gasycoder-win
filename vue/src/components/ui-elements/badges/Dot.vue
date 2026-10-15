<script setup>
import { computed } from 'vue';
const props = defineProps({
    variant: String,
    as: String,
});

const compClass = computed(() => ({
    "relative inline-flex items-center ps-3 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current": true,
    'text-primary-600': props.variant === 'primary',
    'text-gray-600 dark:text-gray-500': props.variant === 'secondary',
    'text-green-600': props.variant === 'green',
    'text-red-600': props.variant === 'red',
    'text-yellow-600': props.variant === 'yellow',
    'text-cyan-600': props.variant === 'cyan',
    'text-gray-500 dark:text-gray-600': props.variant === 'light',
    'text-gray-900 dark:text-gray-400': props.variant === 'dark',
}));
</script>
<template>
    <component :is="as ? as : 'span'" :class="compClass">
        <slot></slot>
    </component>
</template>
