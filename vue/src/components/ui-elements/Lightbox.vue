<script setup>
import { ref } from 'vue'
import FsLightbox from "fslightbox-vue"
const props = defineProps({
    sources: String
})
const toggler = ref(false);
defineOptions({
  inheritAttrs: false
})
</script>
<template>
    <button v-bind="$attrs" @click="toggler = !toggler">
		<slot></slot>
	</button>

	<FsLightbox
		:toggler="toggler"
		:sources="[sources]"
	/>

</template>