<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
});
</script>
<template>
    <component
        :is="as ? as : 'h6'"
        class="tracking-relaxed text-xs leading-tight font-bold whitespace-nowrap text-slate-400 uppercase dark:text-slate-300"
    >
        <slot></slot>
    </component>
</template>
