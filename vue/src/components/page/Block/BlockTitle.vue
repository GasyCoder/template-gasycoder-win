<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component
        :is="as ? as : 'h5'"
        class="-tracking-snug leading-tighter text-xl font-medium text-slate-700 dark:text-white [&:not(:last-child)]:mb-2"
    >
        <slot></slot>
    </component>
</template>
