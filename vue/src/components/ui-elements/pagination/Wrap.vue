<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
});
const compClass = computed(() => ({
    'inline-flex align-middle -space-x-px': true,
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
