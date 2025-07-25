<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
})

</script>
<template>
    <component :is="as ? as : 'h6'" class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">
        <slot></slot>
    </component>
</template>