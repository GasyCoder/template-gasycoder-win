<script setup>
import { onMounted } from 'vue';
import Tagify from '@yaireo/tagify';
const props = defineProps({
    id: String,
});

onMounted(() => {
    let elm = document.getElementById(props.id);
    let tagify = new Tagify(elm);
});
</script>
<template>
    <input type="text" :id="id" class="tagify" />
</template>
