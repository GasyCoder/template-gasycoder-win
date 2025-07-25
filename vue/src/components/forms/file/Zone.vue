<script setup>
import { computed, onMounted } from 'vue'
import { Dropzone } from "dropzone";
Dropzone.autoDiscover = false;

const props = defineProps({
    id:String,
    labelClass:String,
    maxFilesize: Number,
    maxFiles:Number,
    acceptedFiles: String,
})

onMounted(() => {
    new Dropzone(`#${props.id}`,{
        url: "image",
        maxFilesize: props.maxFiles ? props.maxFiles : null,
        maxFiles: props.maxFiles ? props.maxFiles : 256,
        acceptedFiles: props.acceptedFiles ? props.acceptedFiles : null
    });
})

</script>
<template>
    <div class="dropzone" :id="id">
        <template v-if="$slots.default" >
            <slot></slot>
        </template>
        <div v-else class="dz-message" data-dz-message>
            <span class="block text-sm text-slate-400">Drag and drop file</span>
            <span class="block text-base text-slate-400 mb-1 uppercase">or</span>
            <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">SELECT</button>
        </div>
    </div>
</template>