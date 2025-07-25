<script setup>
import { computed } from 'vue';
import { Menu, MenuButton, MenuItems } from '@headlessui/vue'

import { usePopper } from '@/utilities/usePopper'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

const props = defineProps({
    placement: String,
    rtlPlacement: String,
    offset: Array,
    rtlOffset: Array,
    contentClass: String,
    buttonClass: String,
})

const localPlacement = props.placement ? props.placement : "bottom-end";
const localRtlPlacement = props.rtlPlacement ? props.rtlPlacement : "bottom-start";
const localOffset = props.offset ? props.offset : [0,4];
const localRtlOffset = props.rtlOffset ? props.rtlOffset : [0,4];

let [dropdownToggle, dropdownContent] = usePopper({
    placement : theme.direction === "rtl" ? localRtlPlacement : localPlacement,
    modifiers: [
        {name: 'offset', options: { offset: theme.direction === "rtl" ? localRtlOffset : localOffset}},
        {name: 'preventOverflow', options: { padding: 8 }},
    ],
})

const contClass = computed(() => ({
    "absolute z-[1000]" : true,
    [`${props.contentClass}`]: props.contentClass,
}))
</script>
<template>
    <Menu as="div" class="inline-flex relative" v-slot="{ open }">
        <MenuButton as='div' class="inline-flex" :class="{'active': open, [`${buttonClass}`]: buttonClass }" ref="dropdownToggle">
            <slot name="button"></slot>
        </MenuButton>
        <MenuItems ref="dropdownContent" :class="contClass">
            <slot name="content"></slot>
        </MenuItems>
    </Menu>
</template>
