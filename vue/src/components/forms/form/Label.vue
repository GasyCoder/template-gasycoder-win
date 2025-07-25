<script setup>
import { computed } from 'vue'
const props = defineProps({
    as:String,
})

const compClass = computed(() => ({
    "inline-block text-sm font-medium text-slate-700 dark:text-white cursor-pointer":true,
}))

</script>
<template>
    <component :is="as ? as : 'label'" :class="compClass">
        <slot></slot>
    </component>
</template>