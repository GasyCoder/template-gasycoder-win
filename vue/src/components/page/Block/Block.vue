<script setup>
const props = defineProps({
    as:String,
})
</script>
<template>
    <component :is="as ? as : 'div'" class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <slot></slot>
    </component>
</template>