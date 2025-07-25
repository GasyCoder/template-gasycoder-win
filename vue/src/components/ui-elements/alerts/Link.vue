<script setup>
import { computed } from 'vue';
import { Icon } from "@/components";
const props = defineProps({
    as:String,
})

const compClass = computed(() => ({
    "font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current" : true,
}))

</script>
<template>
    <component :is="as ? as : 'a'" :class="compClass">
        <slot></slot>
    </component>
</template>