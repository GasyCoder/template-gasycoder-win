<script setup>
import { computed } from 'vue';
const props = defineProps({
    as: String,
    responsive: String,
});

const compClass = computed(() => ({
    'relative flex w-full items-stretch': true,
    '[&>*:not(:first-child)]:rounded-s-none [&>*:not(:last-child)]:rounded-e-none -space-x-px':
        !props.responsive,
    '[&>*:not(:first-child)]:max-xs:rounded-t-none [&>*:not(:last-child)]:max-xs:rounded-b-none [&>*:not(:first-child)]:xs:rounded-s-none [&>*:not(:last-child)]:xs:rounded-e-none max-xs:flex-col max-xs:-space-y-px xs:-space-x-px':
        props.responsive === 'xs',
    '[&>*:not(:first-child)]:max-sm:rounded-t-none [&>*:not(:last-child)]:max-sm:rounded-b-none [&>*:not(:first-child)]:sm:rounded-s-none [&>*:not(:last-child)]:sm:rounded-e-none max-sm:flex-col max-sm:-space-y-px sm:-space-x-px':
        props.responsive === 'sm',
}));
</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>
