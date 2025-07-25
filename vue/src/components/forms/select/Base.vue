<script setup>
import { computed } from 'vue'
const props = defineProps({
    multiple:Boolean,
    size:String,
})

const compClass = computed(() => ({
    "block w-full text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all focus:z-10": true,
    "text-sm leading-4.5 pe-8 ps-4 py-1.5 h-9 bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]": !props.multiple && !props.size,
    "text-xs leading-4.5 pe-6 ps-3 py-1 h-8 bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]": !props.multiple && props.size === "sm",
    "text-sm leading-5 pe-4 ps-4 pt-1.5 pb-4 [&>*]:px-2 [&>*]:py-1 [&>*]:my-0.5 [&>*]:-mx-2 [&>*]:rounded-sm [&>*]:cursor-pointer [&>*]:text-slate-600": props.multiple,
}))

</script>
<template>
    <select :class="compClass" :multiple="multiple && multiple" >
        <slot></slot>
    </select>
</template>