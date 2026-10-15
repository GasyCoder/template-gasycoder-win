<script setup>
import { computed } from 'vue';
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue';

import { usePopper } from '@/utilities/usePopper';
import { useThemeStore } from '@/stores/theme';
const theme = useThemeStore();

const props = defineProps({
    placement: String,
    rtlPlacement: String,
    offset: Array,
});

const localPlacement = props.placement ? props.placement : 'right';
const localRtlPlacement = props.rtlPlacement
    ? props.rtlPlacement
    : localPlacement;

let [popoverToggle, popoverContent] = usePopper({
    placement: theme.direction === 'rtl' ? localRtlPlacement : localPlacement,
    modifiers: [
        {
            name: 'offset',
            options: {
                offset: props.offset || [0, 10],
            },
        },
        {
            name: 'flip',
            options: {
                fallbackPlacements: ['top', 'bottom'],
            },
        },
    ],
});

const panelClass = computed(() => ({
    'absolute w-screen max-w-[276px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow-md z-[1070]': true,
    "[&[data-popper-placement='top']_.popover-arrow]:h-2 [&[data-popper-placement='top']_.popover-arrow]:w-4 [&[data-popper-placement='top']_.popover-arrow]:-bottom-2 [&[data-popper-placement='top']_.popover-arrow]:left-1/2 [&[data-popper-placement='top']_.popover-arrow]:-translate-x-1/2 [&[data-popper-placement='top']_.popover-arrow]:before:border-t-gray-300 [&[data-popper-placement='top']_.popover-arrow]:before:dark:border-t-gray-900 [&[data-popper-placement='top']_.popover-arrow]:before:border-t-8 [&[data-popper-placement='top']_.popover-arrow]:before:border-r-8 [&[data-popper-placement='top']_.popover-arrow]:before:border-b-0 [&[data-popper-placement='top']_.popover-arrow]:before:border-l-8 [&[data-popper-placement='top']_.popover-arrow]:after:bottom-px [&[data-popper-placement='top']_.popover-arrow]:after:left-0 [&[data-popper-placement='top']_.popover-arrow]:after:border-t-white [&[data-popper-placement='top']_.popover-arrow]:after:dark:border-t-gray-950 [&[data-popper-placement='top']_.popover-arrow]:after:border-t-8 [&[data-popper-placement='top']_.popover-arrow]:after:border-r-8 [&[data-popper-placement='top']_.popover-arrow]:after:border-b-0 [&[data-popper-placement='top']_.popover-arrow]:after:border-l-8": true,
    "[&data-popper-placement='right']_.popover-arrow]:h-4 [&[data-popper-placement='right']_.popover-arrow]:w-2 [&[data-popper-placement='right']_.popover-arrow]:-left-2 [&[data-popper-placement='right']_.popover-arrow]:top-1/2 [&[data-popper-placement='right']_.popover-arrow]:-translate-y-1/2 [&[data-popper-placement='right']_.popover-arrow]:before:border-r-gray-300 [&[data-popper-placement='right']_.popover-arrow]:before:dark:border-r-gray-900 [&[data-popper-placement='right']_.popover-arrow]:before:border-t-8 [&[data-popper-placement='right']_.popover-arrow]:before:border-r-8 [&[data-popper-placement='right']_.popover-arrow]:before:border-b-8 [&[data-popper-placement='right']_.popover-arrow]:before:border-l-0 [&[data-popper-placement='right']_.popover-arrow]:after:left-px [&[data-popper-placement='right']_.popover-arrow]:after:top-0 [&[data-popper-placement='right']_.popover-arrow]:after:border-r-white [&[data-popper-placement='right']_.popover-arrow]:after:dark:border-r-gray-950 [&[data-popper-placement='right']_.popover-arrow]:after:border-t-8 [&[data-popper-placement='right']_.popover-arrow]:after:border-r-8 [&[data-popper-placement='right']_.popover-arrow]:after:border-b-8 [&[data-popper-placement='right']_.popover-arrow]:after:border-l-0": true,
    "[&[data-popper-placement='bottom']_.popover-arrow]:h-2 [&[data-popper-placement='bottom']_.popover-arrow]:w-4 [&[data-popper-placement='bottom']_.popover-arrow]:-top-2 [&[data-popper-placement='bottom']_.popover-arrow]:left-1/2 [&[data-popper-placement='bottom']_.popover-arrow]:-translate-x-1/2 [&[data-popper-placement='bottom']_.popover-arrow]:before:left-0 [&[data-popper-placement='bottom']_.popover-arrow]:before:border-b-gray-300 [&[data-popper-placement='bottom']_.popover-arrow]:before:dark:border-b-gray-900 [&[data-popper-placement='bottom']_.popover-arrow]:before:border-t-0 [&[data-popper-placement='bottom']_.popover-arrow]:before:border-r-8 [&[data-popper-placement='bottom']_.popover-arrow]:before:border-b-8 [&[data-popper-placement='bottom']_.popover-arrow]:before:border-l-8 [&[data-popper-placement='bottom']_.popover-arrow]:after:top-px [&[data-popper-placement='bottom']_.popover-arrow]:after:left-0 [&[data-popper-placement='bottom']_.popover-arrow]:after:border-b-white [&[data-popper-placement='bottom']_.popover-arrow]:after:dark:border-b-gray-950 [&[data-popper-placement='bottom']_.popover-arrow]:after:border-t-0 [&[data-popper-placement='bottom']_.popover-arrow]:after:border-r-8 [&[data-popper-placement='bottom']_.popover-arrow]:after:border-b-8 [&[data-popper-placement='bottom']_.popover-arrow]:after:border-l-8": true,
    "[&[data-popper-placement='left']_.popover-arrow]:h-4 [&[data-popper-placement='left']_.popover-arrow]:w-2 [&[data-popper-placement='left']_.popover-arrow]:-right-2 [&[data-popper-placement='left']_.popover-arrow]:top-1/2 [&[data-popper-placement='left']_.popover-arrow]:-translate-y-1/2 [&[data-popper-placement='left']_.popover-arrow]:before:top-0 [&[data-popper-placement='left']_.popover-arrow]:before:border-l-gray-300 [&[data-popper-placement='left']_.popover-arrow]:before:dark:border-l-gray-900 [&[data-popper-placement='left']_.popover-arrow]:before:border-t-8 [&[data-popper-placement='left']_.popover-arrow]:before:border-r-0 [&[data-popper-placement='left']_.popover-arrow]:before:border-b-8 [&[data-popper-placement='left']_.popover-arrow]:before:border-l-8 [&[data-popper-placement='left']_.popover-arrow]:after:right-px [&[data-popper-placement='left']_.popover-arrow]:after:top-0 [&[data-popper-placement='left']_.popover-arrow]:after:border-l-white [&[data-popper-placement='left']_.popover-arrow]:after:dark:border-l-gray-950 [&[data-popper-placement='left']_.popover-arrow]:after:border-t-8 [&[data-popper-placement='left']_.popover-arrow]:after:border-r-0 [&[data-popper-placement='left']_.popover-arrow]:after:border-b-8 [&[data-popper-placement='left']_.popover-arrow]:after:border-l-8": true,
}));
</script>
<template>
    <Popover class="relative inline-block">
        <PopoverButton ref="popoverToggle" as="div" class="peer inline-block">
            <slot name="button"></slot>
        </PopoverButton>
        <PopoverPanel :class="panelClass" ref="popoverContent">
            <div
                class="popover-arrow absolute before:block before:h-0 before:w-0 before:border-transparent after:absolute after:block after:h-0 after:w-0 after:border-transparent"
            ></div>
            <slot name="content"></slot>
        </PopoverPanel>
    </Popover>
</template>
