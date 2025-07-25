<script setup>
import { computed } from 'vue';
import {Icon} from '@/components'
const props = defineProps({
    separator:String,
    as:String,
})

const compClass = computed(() => ({
    "first:ps-0 ps-2 inline-flex last:after:hidden text-slate-300 text-xs font-medium tracking-wider" : true,
    "after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400": !props.separator,
    "after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400": props.separator === "pipe",
    "group/arrow": props.separator === "arrow",
}))

</script>
<template>
    <component :is="as ? as : 'li'" :class="compClass">
        <slot></slot>
        <Icon v-if="separator === 'arrow'" name="forward-ios" class="group-last/arrow:hidden text-slate-400 my-0.5 ms-2 rtl:-scale-x-100 font-medium"></Icon>
    </component>
</template>