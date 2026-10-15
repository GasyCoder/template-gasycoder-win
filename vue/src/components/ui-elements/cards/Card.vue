<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
    variant: String,
});

const compClass = computed(() => ({
    'border rounded-md': true,
    'bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900':
        !props.variant,
    'bg-primary-600 border-primary-600': props.variant === 'primary',
    'bg-gray-600 border-gray-600': props.variant === 'secondary',
    'bg-green-600 border-green-600': props.variant === 'green',
    'bg-red-600 border-red-600': props.variant === 'red',
    'bg-yellow-600 border-yellow-600': props.variant === 'yellow',
    'bg-cyan-600 border-cyan-600': props.variant === 'cyan',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
