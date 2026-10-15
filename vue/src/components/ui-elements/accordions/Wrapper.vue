<script setup>
defineProps({
    close: String,
});
</script>

<template>
    <div class="accordion" :class="{ 'manual-close': close === 'manual' }">
        <slot></slot>
    </div>
</template>
