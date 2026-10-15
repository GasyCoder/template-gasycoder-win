<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
    size: String,
    active: Boolean,
});
const compClass = computed(() => ({
    'relative inline-flex items-center justify-center text-center align-middle font-normal leading-4.5 first:rounded-s last:rounded-e tracking-wide border  hover:z-10 transition-all duration-300': true,
    'border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700':
        !props.active,
    'border-primary-600 bg-primary-600 text-white': props.active,
    'w-9 h-9 text-sm': !props.size,
    'w-7.5 h-7.5 text-xs': props.size === 'sm',
    'w-11 h-11 text-base': props.size === 'lg',
}));
</script>
<template>
    <component :is="as ? as : 'a'" :class="compClass">
        <slot></slot>
    </component>
</template>
