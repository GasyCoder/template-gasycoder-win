<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
    textClass: String,
});

const compClass = computed(() => ({
    'absolute h-7 top-1 end-1 px-3 bg-white dark:bg-gray-950 rounded flex items-center': true,
}));
const textClass = computed(() => ({
    'text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight': true,
    [`${props.textClass}`]: props.textClass,
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <span :class="textClass">
            <slot></slot>
        </span>
    </component>
</template>
