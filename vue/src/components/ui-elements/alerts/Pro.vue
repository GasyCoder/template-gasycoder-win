<script setup>
import { computed } from 'vue';
const props = defineProps({
    variant: String,
    as: String,
});

const compClass = computed(() => ({
    'py-4 px-5 border-s-4 shadow-md rounded-md bg-white dark:bg-gray-950': true,
    'border-primary-600': props.variant === 'primary',
    'border-gray-600': props.variant === 'secondary',
    'border-green-600': props.variant === 'green',
    'border-cyan-600': props.variant === 'cyan',
    'border-yellow-600': props.variant === 'yellow',
    'border-red-600': props.variant === 'red',
    'border-gray-400': props.variant === 'light',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
