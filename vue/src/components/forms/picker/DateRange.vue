<script setup>
import { onMounted, computed } from 'vue';
import { DateRangePicker } from 'vanillajs-datepicker';

const props = defineProps({
    id: String,
    placeholder: String,
    autoHide: Boolean,
    clearBtn: Boolean,
    format: String,
    maxView: Number,
    pickLevel: Number,
    startView: Number,
    title: String,
    todayBtn: Boolean,
    todayBtnMode: Number,
    weekStart: Number,
    size: String,
    icon: String,
});
let options = {
    autohide: props.autoHide || true,
    clearBtn: props.clearBtn || false,
    format: props.format || 'mm/dd/yyyy',
    maxView: props.maxView || 3,
    pickLevel: props.pickLevel || 0,
    startView: props.startView || 0,
    title: props.title || '',
    todayBtn: props.todayBtn || false,
    todayBtnMode: props.todayBtnMode || 0,
    weekStart: props.weekStart || 0,
};

const inputCompClass = computed(() => ({
    'block rounded-[inherit] flex-grow min-w-[120px] box-border text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed transition-all': true,
    ["text-sm leading-4.5 px-4 py-1.5 h-9 [&[name='start']]:rounded-s [&[name='end']]:rounded-e"]:
        !props.size,
    ["text-base leading-4.5 px-4 py-2.5 h-11 [&[name='start']]:rounded-s-md [&[name='end']]:rounded-e-md"]:
        props.size === 'lg',
    ["text-xs leading-5 px-4 py-1 h-8 [&[name='start']]:rounded-s-sm [&[name='end']]:rounded-e-sm"]:
        props.size === 'sm',
}));
const compClass = computed(() => ({
    'relative flex -space-x-px w-full items-stretch': true,
}));

onMounted(() => {
    new DateRangePicker(document.getElementById(props.id), options);
});
</script>
<template>
    <div :id="id" :class="compClass">
        <input
            :placeholder="placeholder"
            type="text"
            :class="inputCompClass"
            name="start"
        />
        <span
            class="flex items-center border border-gray-300 bg-gray-100 px-3 dark:border-gray-900 dark:bg-gray-900"
            >to</span
        >
        <input
            :placeholder="placeholder"
            type="text"
            :class="inputCompClass"
            name="end"
        />
    </div>
</template>
