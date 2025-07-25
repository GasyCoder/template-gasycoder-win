<script setup>
import { computed } from 'vue';
const props = defineProps({
    as:String,
})

</script>
<template>
    <component :is="as ? as : 'div'" class="entry">
        <slot></slot>
    </component>
</template>