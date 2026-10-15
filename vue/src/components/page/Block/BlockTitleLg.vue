<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component
        :is="as ? as : 'h5'"
        class="leading-tighter font-heading text-3xl font-normal tracking-tight text-slate-700 lg:text-5xl dark:text-white [&:not(:last-child)]:mb-4"
    >
        <slot></slot>
    </component>
</template>
