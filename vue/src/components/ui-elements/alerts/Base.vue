<script setup>
import { computed } from 'vue';
import { Icon } from '@/components';
const props = defineProps({
    variant: String,
    icon: String,
    as: String,
});

const compClass = computed(() => ({
    'py-4 relative rounded-md border': true,
    'px-5': !props.icon,
    'pe-5 ps-12': props.icon,
    'border-primary-300 dark:border-primary-900 bg-primary-100 dark:bg-primary-950 text-primary-800 dark:text-primary-600':
        props.variant === 'primary',
    'border-primary-600 bg-primary-600 text-white':
        props.variant === 'primary-fill',
    'border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-slate-200':
        props.variant === 'secondary',
    'border-gray-600 bg-gray-600 text-white':
        props.variant === 'secondary-fill',
    'border-green-300 dark:border-green-900 bg-green-100 dark:bg-green-950 text-green-800 dark:text-green-600':
        props.variant === 'green',
    'border-green-600 bg-green-600 text-white': props.variant === 'green-fill',
    'border-cyan-300 dark:border-cyan-900 bg-cyan-100 dark:bg-cyan-950 text-cyan-800 dark:text-cyan-600':
        props.variant === 'cyan',
    'border-cyan-600 bg-cyan-600 text-white': props.variant === 'cyan-fill',
    'border-yellow-300 dark:border-yellow-900 bg-yellow-100 dark:bg-yellow-950 text-yellow-800 dark:text-yellow-600':
        props.variant === 'yellow',
    'border-yellow-600 bg-yellow-600 text-white':
        props.variant === 'yellow-fill',
    'border-red-300 dark:border-red-800 bg-red-100 dark:bg-red-950 text-red-800 dark:text-red-600':
        props.variant === 'red',
    'border-red-600 bg-red-600 text-white': props.variant === 'red-fill',
    'border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200':
        props.variant === 'light',
    'border-gray-100 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-slate-300':
        props.variant === 'light-fill',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <Icon
            v-if="icon"
            class="absolute start-5 top-4 w-8 text-xl leading-none"
            :name="icon"
        />
        <slot></slot>
    </component>
</template>
