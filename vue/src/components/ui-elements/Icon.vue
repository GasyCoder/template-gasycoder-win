<script setup>
import { computed } from 'vue';
const props = defineProps({
    id: String,
    style:String,
    name:String,
})

const compClass = computed(() => ({
    "icon ni": true,
    [`ni-${props.name}`]: props.name,
}))
</script>
<template>
    <em :class="compClass" :id="id" :style="style" ></em>
</template>