<script setup>
import {computed} from 'vue'
import { twMerge } from 'tailwind-merge'
import {Icon} from '@/components'
const props = defineProps({
    class:String,
    variant:String,
    buttonClass:String,
    contentClass:String,
    iconClass:String,
    active:Boolean,
})

const compClass = computed(() => {
    return twMerge(`accordion-item group ${props.active ? 'active' : ''} ${!props.variant || props.variant === 'default' ? 'border-t border-gray-300 dark:border-gray-900 first:border-t-0': ''} `, props.class)
})

const btnClass = computed(() => {
    return twMerge(`relative w-full ${!props.variant || props.variant === 'default' ? 'block text-start ps-6 pe-12 py-4 group-[.active]:border-b border-gray-200 dark:border-gray-800' : ''} ${props.variant === 's2' ? 'block text-start py-2 pe-9': ''} ${props.variant === 's3' ? 'block text-start py-2 ps-9': ''} `, props.buttonClass)
})

const contClass = computed(() => {
    return twMerge(`accordion-body hidden group-[.active]:block ${!props.variant || props.variant === 'default' ? 'px-6 pt-4 pb-5' : ''} ${props.variant === 's2' ? 'py-2': ''} ${props.variant === 's3' ? 'ps-9 py-2': ''} `, props.contentClass)
})

const iconChevronClass = computed(() => {
    return twMerge('absolute end-6 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white font-bold leading-5 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ', props.iconClass)
})

const icons2Class = computed(() => {
    return twMerge('absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 ', props.iconClass)
})
const icons3Class = computed(() => {
    return twMerge('absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 ', props.iconClass)
})



</script>

<template>
    <div :class="compClass">
        <button v-nk-accordion :class="btnClass">
            <slot name="button"></slot>
            <Icon v-if="!variant || variant === 'default'" name="chevron-down" :class="iconChevronClass"></Icon>
            <template v-if="variant === 's2'">
                <Icon name="minus" :class="icons2Class" class="opacity-0 group-[.active]:opacity-100"></Icon>
                <Icon name="plus" :class="icons2Class" class="opacity-100 group-[.active]:opacity-0"></Icon>
            </template>
            <template v-if="variant === 's3'">
                <Icon name="minus" :class="icons3Class" class="opacity-0 group-[.active]:opacity-100"></Icon>
                <Icon name="plus" :class="icons3Class" class="opacity-100 group-[.active]:opacity-0"></Icon>
            </template>
        </button>
        
        <div :class="contClass">
            <slot name="content"></slot>
        </div>
    </div>
</template>