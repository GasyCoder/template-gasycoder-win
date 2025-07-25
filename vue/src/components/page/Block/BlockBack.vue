<script setup>
import { Icon } from '@/components';
const props = defineProps({
    icon: String
});
</script>
<template>
    <router-link class="inline-flex items-center text-base [&:not(:last-child)]:mb-3 relative font-normal text-slate-400">
        <Icon class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 -tracking-wide" :name="icon ? icon : 'arrow-left'"></Icon>
        <span class="ms-1"><slot></slot></span>
    </router-link>
</template>