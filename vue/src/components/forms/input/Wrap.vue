<script setup>
import { computed } from 'vue'
const props = defineProps({
    as:String,
})

const compClass = computed(() => ({
    "form-wrap relative":true,
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass">
        <slot></slot>
    </component>
</template>