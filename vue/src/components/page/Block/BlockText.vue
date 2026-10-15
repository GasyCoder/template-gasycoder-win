<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component
        :is="as ? as : 'p'"
        class="text-sm leading-6 text-slate-400 [&:not(:last-child)]:mb-3"
    >
        <slot></slot>
    </component>
</template>
