<script setup>
const props = defineProps({
    as:String,
})
</script>
<template>
    <component :is="as ? as : 'div'" class="pb-6 sm:pb-10 relative">
        <slot></slot>
    </component>
</template>