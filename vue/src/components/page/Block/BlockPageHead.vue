<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component :is="as ? as : 'div'" class="relative pb-6 sm:pb-10">
        <slot></slot>
    </component>
</template>
