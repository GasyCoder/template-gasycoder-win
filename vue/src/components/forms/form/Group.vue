<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
});

const compClass = computed(() => ({
    'form-group relative mb-5 last:mb-0': true,
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
