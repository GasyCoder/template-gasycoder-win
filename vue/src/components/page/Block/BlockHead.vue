<script setup>
const props = defineProps({
    as: String,
});
</script>
<template>
    <component :is="as ? as : 'div'" class="pb-5">
        <slot></slot>
    </component>
</template>
