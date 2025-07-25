<script setup>
import { computed } from 'vue'
const props = defineProps({
    id:String,
    size:String,
    src:String,
    alt:String,
})
defineOptions({
  inheritAttrs: false
})
const inputClass = computed(() => ({
    "peer absolute z-10 start-4 top-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border border-white dark:border-gray-950 transition-all duration-300" : true,
    "h-6 w-6" : !props.size,
    "h-4 w-4" : props.size === "sm",
    "h-8 w-8" : props.size === "lg",
}))

</script>
<template>
    <div class="relative z-[1] inline-flex group">
        <input type="radio" :class="inputClass" v-bind="$attrs" :id="id" />
        <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" :for="id">
          <img class="transition-all duration-300 group-hover:opacity-80" :src="src" :alt="alt" />
        </label>
    </div>
</template>