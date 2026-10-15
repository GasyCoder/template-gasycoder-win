<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component
        :is="as ? as : 'p'"
        class="text-lg text-slate-600 dark:text-slate-400 [&:not(:last-child)]:mb-4"
    >
        <slot></slot>
    </component>
</template>
