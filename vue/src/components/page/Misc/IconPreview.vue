<script setup>
import { ref } from 'vue';
import { useClipboard } from '@vueuse/core';
import { Icon } from '@/components';
import CopyToClipboard from 'vue-copy-to-clipboard';
const props = defineProps({
    icon: String,
});

const source = ref(`<Icon name="${props.icon}" />`);
const { copy, copied } = useClipboard({ source });
</script>
<template>
    <div class="max-w-[50%] flex-[1_0_150px] p-2.5 sm:p-4">
        <div
            class="group relative h-full overflow-hidden rounded-md border border-gray-300 bg-white px-4 py-5 text-center dark:border-gray-900 dark:bg-gray-950"
        >
            <button
                @click="copy(source)"
                class="absolute end-1 top-1 flex h-8 w-8 items-center justify-center text-base opacity-0 transition-all group-hover:opacity-100"
            >
                <Icon v-if="copied" class="text-green-600" name="copy-fill" />
                <Icon v-else name="copy" />
            </button>
            <div>
                <Icon
                    class="text-3xl text-slate-600 transition-none dark:text-slate-300"
                    :name="icon"
                />
            </div>
            <span class="text-xxs text-slate-400">{{ icon }}</span>
            <span
                :class="{
                    'text-primary-600 bg-opacity-90 pointer-events-none absolute inset-0 flex items-center justify-center bg-white text-sm transition-all duration-300 dark:bg-gray-800': true,
                    'opacity-100': copied,
                    'opacity-0': !copied,
                }"
                >Copied</span
            >
        </div>
    </div>
</template>
