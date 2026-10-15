<script setup>
import { computed } from 'vue';
const props = defineProps({
    id: String,
    size: String,
    labelClass: String,
    type: String,
});
defineOptions({
    inheritAttrs: false,
});
const inputCompClass = computed(() => ({
    'peer relative bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:rounded-full after:bg-gray-300 checked:after:bg-white after:transition-all after:duration-300 cursor-pointer disabled:cursor-not-allowed': true,
    'h-6 w-12 after:h-4 after:w-4 after:top-0.5 after:start-0.5 checked:after:start-6.5':
        !props.size,
    'h-4 w-8 after:h-2 after:w-2 after:top-0.5 after:start-0.5 checked:after:start-4.5':
        props.size === 'sm',
    'h-8 w-16 after:h-5 after:w-5 after:top-1 after:start-1 checked:after:start-9':
        props.size === 'lg',
}));
const labelCompClass = computed(() => ({
    'text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 cursor-pointer inline-block': true,
    'text-sm leading-5 pt-0.5 ps-3': !props.size,
    'text-xs leading-4 ps-2': props.size === 'sm',
    'text-base leading-6 pt-1 ps-4': props.size === 'lg',
    [`${props.labelClass}`]: props.labelClass,
}));
</script>
<template>
    <div class="inline-flex">
        <input
            :type="'checkbox' || type"
            :class="inputCompClass"
            v-bind="$attrs"
            :id="id"
        />
        <label v-if="$slots.default" :class="labelCompClass" :for="id"
            ><slot></slot
        ></label>
    </div>
</template>
