<script setup>
import { computed } from 'vue';
import { Icon } from '@/components';
const props = defineProps({
    as: String,
});

const compClass = computed(() => ({
    'text-slate-400 hover:text-primary-600': true,
}));
</script>
<template>
    <component :is="as ? as : 'a'" :class="compClass">
        <slot></slot>
    </component>
</template>
