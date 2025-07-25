<script setup>
import { computed } from 'vue';
const props = defineProps({
    current:Boolean,
    disabled:Boolean,
    icon:Boolean,
    class:String
})

const compClass = computed(() => ({
    "relative inline-flex items-center text-sm/[22px] font-normal focus:z-20 border first:rounded-s last:rounded-e": true,
    ["text-slate-600 dark:text-slate-200 hover:bg-slate-100 hover:dark:bg-slate-900"]: !props.current && !props.disabled,
    ["border-gray-200 dark:border-gray-800"]: !props.current,
    ["text-slate-400 dark:text-slate-600 pointer-events-none"]: props.disabled,
    ["bg-primary-600 hover:bg-primary-600 text-white border-primary-600 z-20"]:
        props.current,
    ["px-3 py-1.5"]: props.icon,
    ["px-3.5 py-1.5"]: !props.icon,
}))
</script>
<template>
    <button :class="compClass">
        <slot></slot>
    </button>
</template>