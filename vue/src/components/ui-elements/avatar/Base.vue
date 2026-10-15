<script setup>
import { computed } from 'vue';
import { Icon } from '@/components';
const props = defineProps({
    rounded: Boolean,
    size: String,
    variant: String,
    status: String,
    icon: String,
    img: String,
    text: String,
});

const compClass = computed(() => ({
    'relative flex-shrink-0 flex items-center justify-center rounded-full font-medium': true,
    'rounded-md': !props.rounded,
    'rounded-full': props.rounded,
    'text-[9px] h-6 w-6': props.size === 'xs',
    'text-xs h-7 w-7': props.size === 'mb',
    'text-xs h-8 w-8': props.size === 'sm',
    'text-sm h-10 w-10': props.size === 'rg',
    'text-sm h-12 w-12': props.size === 'lg',
    'text-xl h-16 w-16': props.size === 'xl',
    'text-3xl h-20 w-20': props.size === '2xl',
    'text-5xl h-28 w-28': props.size === '3xl',
    'text-white bg-primary-600': props.variant === 'primary',
    'bg-primary-100 dark:bg-primary-950 text-primary-600':
        props.variant === 'primary-pale',
    'text-white bg-slate-900': props.variant === 'secondary',
    'bg-slate-100 dark:bg-slate-900 text-slate-900 dark:text-slate-100':
        props.variant === 'secondary-pale',
    'text-white bg-yellow-600': props.variant === 'yellow',
    'bg-yellow-100 dark:bg-yellow-950 text-yellow-600':
        props.variant === 'yellow-pale',
    'text-white bg-red-600': props.variant === 'red',
    'bg-red-100 dark:bg-red-950 text-red-600': props.variant === 'red-pale',
    'text-white bg-green-600': props.variant === 'green',
    'bg-green-100 dark:bg-green-950 text-green-600':
        props.variant === 'green-pale',
    'text-white bg-cyan-600': props.variant === 'cyan',
    'bg-cyan-100 dark:bg-cyan-950 text-cyan-600': props.variant === 'cyan-pale',
    'text-white bg-blue-600': props.variant === 'blue',
    'bg-blue-100 dark:bg-blue-950 text-blue-600': props.variant === 'blue-pale',
    'text-white bg-pink-600': props.variant === 'pink',
    'bg-pink-100 dark:bg-pink-950 text-pink-600': props.variant === 'pink-pale',
    'text-white bg-indigo-600': props.variant === 'indigo',
    'bg-indigo-100 dark:bg-indigo-950 text-indigo-600':
        props.variant === 'indigo-pale',
    'text-white bg-black': props.variant === 'black',
    'bg-gray-200 dark:bg-gray-800 text-black dark:text-white':
        props.variant === 'black-pale',
    'text-white bg-slate-600': props.variant === 'slate',
    'bg-slate-100 dark:bg-slate-950 text-slate-600':
        props.variant === 'slate-pale',
    'text-slate-600 bg-gray-100': props.variant === 'light',
    'text-white bg-orange-600': props.variant === 'orange',
    'bg-orange-100 dark:bg-orange-950 text-orange-600':
        props.variant === 'orange-pale',
    'text-white bg-purple-600': props.variant === 'purple',
    'bg-purple-100 dark:bg-purple-950 text-purple-600':
        props.variant === 'purple-pale',
}));
const statusClass = computed(() => ({
    'absolute rounded-full  h-3 w-3 border-2 border-white dark:border-gray-950': true,
    'bg-green-600': props.status === 'active',
    'bg-gray-500 dark:bg-gray-300': props.status === 'inactive',
    'bg-yellow-600': props.status === 'away',
    '-end-1.5 -bottom-1.5': !props.rounded,
    'end-0 bottom-0': props.rounded && props.size === 'rg',
    'end-1 bottom-1': props.rounded && props.size === 'xl',
    'end-1.5 bottom-1.5': props.rounded && props.size === '2xl',
}));
</script>
<template>
    <div :class="compClass">
        <span v-if="text">{{ text }}</span>
        <img
            v-else-if="img"
            :class="{ 'rounded-full': rounded, 'rounded-md': !rounded }"
            :src="img"
            alt=""
        />
        <Icon v-else-if="icon" :name="icon" />
        <slot v-else></slot>
        <div v-if="status" :class="statusClass"></div>
    </div>
</template>
