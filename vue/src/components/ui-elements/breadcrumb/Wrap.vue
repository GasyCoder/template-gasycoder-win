<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
})
const compClass = computed(() => ({
    "flex flex-wrap py-1" : true,
}))

</script>
<template>
    <component :is="as ? as : 'ul'" :class="compClass">
        <slot></slot>
    </component>
</template>