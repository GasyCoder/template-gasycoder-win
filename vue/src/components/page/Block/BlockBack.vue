<script setup>
import { Icon } from '@/components';
const props = defineProps({
    icon: String,
});
</script>
<template>
    <router-link
        class="relative inline-flex items-center text-base font-normal text-slate-400 [&:not(:last-child)]:mb-3"
    >
        <Icon
            class="-mt-0.5 inline-block w-8 text-2xl leading-none -tracking-wide rtl:-scale-x-100"
            :name="icon ? icon : 'arrow-left'"
        ></Icon>
        <span class="ms-1"><slot></slot></span>
    </router-link>
</template>
