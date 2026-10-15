<script setup>
import { computed, onMounted } from 'vue';
import { Dropzone } from 'dropzone';
Dropzone.autoDiscover = false;

const props = defineProps({
    id: String,
    labelClass: String,
    maxFilesize: Number,
    maxFiles: Number,
    acceptedFiles: String,
});

onMounted(() => {
    new Dropzone(`#${props.id}`, {
        url: 'image',
        maxFilesize: props.maxFiles ? props.maxFiles : null,
        maxFiles: props.maxFiles ? props.maxFiles : 256,
        acceptedFiles: props.acceptedFiles ? props.acceptedFiles : null,
    });
});
</script>
<template>
    <div class="dropzone" :id="id">
        <template v-if="$slots.default">
            <slot></slot>
        </template>
        <div v-else class="dz-message" data-dz-message>
            <span class="block text-sm text-slate-400">Drag and drop file</span>
            <span class="mb-1 block text-base text-slate-400 uppercase"
                >or</span
            >
            <button
                class="border-primary-600 bg-primary-600 hover:bg-primary-700 active:bg-primary-800 relative inline-flex items-center rounded border px-5 py-2 text-center align-middle text-sm leading-4.5 font-bold tracking-wide text-white transition-all duration-300"
            >
                SELECT
            </button>
        </div>
    </div>
</template>
