<script setup>
import { computed, ref } from 'vue';
const props = defineProps({
    id: String,
    labelClass: String,
});
defineOptions({
    inheritAttrs: false,
});

const labelCompClass = computed(() => ({
    "flex items-center absolute top-0 start-0 z-1 w-full text-sm leading-4.5 ps-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-[inherit] transition-all after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-900 after:px-4 after:rounded-e-[inherit] after:border after:border-gray-200 after:dark:border-gray-800": true,
    [`${props.labelClass}`]: props.labelClass,
}));

const files = ref([]);
function handleMultipleChange(event) {
    files.value = event.target.files;
}
</script>
<template>
    <div class="relative w-full rounded whitespace-nowrap">
        <input
            v-bind="$attrs"
            :id="id"
            @change="handleMultipleChange"
            type="file"
            class="relative z-[2] m-0 block h-9 w-full opacity-0"
        />
        <label :class="labelCompClass" :for="id">
            <span
                v-if="files.length"
                class="flex-grow overflow-hidden pe-4 text-ellipsis whitespace-nowrap"
            >
                <template v-for="(item, index) in files" :key="index">
                    {{ item.name }}
                    <template v-if="files.length - 1 > index">, </template>
                </template>
            </span>
            <span v-else class="flex-grow"><slot></slot></span>
        </label>
    </div>
</template>
