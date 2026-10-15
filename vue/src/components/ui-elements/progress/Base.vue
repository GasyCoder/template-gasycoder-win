<script setup>
import { computed } from 'vue';
const props = defineProps({
    size: String,
    as: String,
});

const compClass = computed(() => ({
    'flex rounded-sm bg-slate-100 dark:bg-slate-900 overflow-hidden': true,
    'h-1.5': !props.size || props.size === 'rg',
    'h-1': props.size === 'xs',
    'h-2': props.size === 'sm',
    'h-4': props.size === 'lg',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
