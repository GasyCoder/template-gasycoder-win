<script setup>
import { ref } from 'vue';
import Sidebar from './sidebar/index.vue';
import Header from './header/index.vue';
import Footer from './footer/index.vue';
import { useTitle } from '@vueuse/core';

const props = defineProps({
    title: String,
    container: Boolean,
});

useTitle(
    `${props.title ? props.title + ' - ' : ''} Multipurpose Tailwind CSS Admin Dashboard Template`,
);

const sidebarVisibility = ref(false);
const sidebarCompact = ref(false);
</script>
<template>
    <div class="nk-main">
        <Sidebar
            v-model:visibility="sidebarVisibility"
            v-model:compact="sidebarCompact"
        ></Sidebar>
        <div
            class="nk-wrap flex min-h-screen flex-col transition-all duration-300 xl:ps-72 peer-[&.is-compact:not(.has-hover)]:xl:ps-[74px] [&>.nk-header]:xl:start-72 [&>.nk-header]:xl:w-[calc(100%-theme(spacing.72))] peer-[&.is-compact:not(.has-hover)]:[&>.nk-header]:xl:start-[74px] peer-[&.is-compact:not(.has-hover)]:[&>.nk-header]:xl:w-[calc(100%-74px)]"
        >
            <Header v-model:visibility="sidebarVisibility"></Header>
            <div class="nk-content mt-16 px-1.5 py-6 sm:px-5 sm:py-8">
                <div :class="{ container: true, 'max-w-none': !container }">
                    <slot></slot>
                </div>
            </div>
            <Footer></Footer>
        </div>
    </div>
</template>
