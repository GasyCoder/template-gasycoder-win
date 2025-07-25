<script setup>
const props = defineProps({
    as:String,
})
</script>
<template>
    <component :is="as ? as : 'h5'" class="font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading [&:not(:last-child)]:mb-4">
        <slot></slot>
    </component>
</template>