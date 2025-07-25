<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
})
const compClass = computed(() => ({
    "p-5 sm:p-6" : true,
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>