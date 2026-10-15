<script setup>
import { computed } from 'vue';
const props = defineProps({
    id: String,
    size: String,
    labelClass: String,
});
defineOptions({
    inheritAttrs: false,
});
const inputClass = computed(() => ({
    'relative rounded-full cursor-pointer transition-all duration-300 border-0 checked:bg-none checked:dark:shadow-none checked:ring-2 ring-offset-2 ring-primary-600 ring-offset-white dark:ring-offset-gray-950': true,
    'h-4 w-4': !props.size,
    'h-6 w-6': props.size === 'rg',
    'h-8 w-8': props.size === 'lg',
}));

const labelClasses = computed(() => ({
    'text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 cursor-pointer inline-block': true,
    'text-sm leading-5 pt-0.5 ps-3': !pros.size,
    'text-xs leading-4 ps-2': pros.size === 'sm',
    'text-base leading-6 pt-1 ps-4': pros.size === 'lg',
    [`${props.labelClass}`]: props.labelClass,
}));
</script>
<template>
    <div class="inline-flex">
        <input v-bind="$attrs" type="radio" :id="id" :class="inputClass" />
        <label v-if="$slots.default" :class="labelClasses" :for="id">
            <slot></slot>
        </label>
    </div>
</template>
