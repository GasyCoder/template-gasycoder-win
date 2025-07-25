<script setup>
import {ref} from "vue"
import { useTitle } from '@vueuse/core'

const props = defineProps({
  title: String
})

useTitle(`${props.title ? props.title + ' - ' : ''} Multipurpose Tailwind CSS Admin Dashboard Template`)

</script>
<template>
    <div class="nk-main">
        <div class="nk-wrap flex flex-col min-h-screen">
          <slot></slot>
        </div>
    </div>
</template>