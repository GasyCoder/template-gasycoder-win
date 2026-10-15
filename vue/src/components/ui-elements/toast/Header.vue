<script setup>
import { computed } from 'vue';
import { Icon } from '@/components';
const props = defineProps({
    as: String,
    title: String,
    subtitle: String,
    variant: String,
});
const compClass = computed(() => ({
    'flex items-center py-1 px-3 rounded-t-[inherit] border-b': true,
    'border-gray-200 dark:border-gray-800':
        !props.variant || props.variant === 'light',
    'border-primary-700': props.variant === 'primary',
    'border-gray-700': props.variant === 'secondary',
    'border-green-700': props.variant === 'green',
    'border-cyan-700': props.variant === 'cyan',
    'border-yellow-700': props.variant === 'yellow',
    'border-red-700': props.variant === 'red',
    'border-slate-800': props.variant === 'dark',
}));
const titleClass = computed(() => ({
    'me-auto': true,
    'text-primary-600': !props.variant || props.variant === 'light',
    'text-white':
        props.variant === 'primary' ||
        props.variant === 'secondary' ||
        props.variant === 'green' ||
        props.variant === 'cyan' ||
        props.variant === 'yellow' ||
        props.variant === 'red' ||
        props.variant === 'dark',
}));
const subtitleClass = computed(() => ({
    'text-xs': true,
    'text-slate-500': !props.variant || props.variant === 'light',
    'text-slate-200': props.variant === 'primary',
    'text-gray-100': props.variant === 'secondary',
    'text-green-100': props.variant === 'green',
    'text-cyan-100': props.variant === 'cyan',
    'text-yellow-100': props.variant === 'yellow',
    'text-red-100': props.variant === 'red',
    'text-slate-100': props.variant === 'dark',
}));
const closeClass = computed(() => ({
    'inline-flex border-0 text-2xl -me-1 ms-1 ': true,
    'text-slate-400 hover:text-red-400':
        !props.variant || props.variant === 'light',
    'text-slate-200 hover:text-white': props.variant === 'primary',
    'text-gray-100 hover:text-white': props.variant === 'secondary',
    'text-green-100 hover:text-white': props.variant === 'green',
    'text-cyan-100 hover:text-white': props.variant === 'cyan',
    'text-yellow-100 hover:text-white': props.variant === 'yellow',
    'text-red-100 hover:text-white': props.variant === 'red',
    'text-slate-100 hover:text-white': props.variant === 'dark',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <strong :class="titleClass">{{ title }}</strong>
        <small v-if="subtitle" :class="subtitleClass">{{ subtitle }}</small>
        <button :class="closeClass">
            <Icon name="cross-sm" class="leading-none"></Icon>
        </button>
    </component>
</template>
