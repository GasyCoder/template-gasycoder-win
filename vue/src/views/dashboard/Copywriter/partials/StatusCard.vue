<script setup>
import { Card, CardBody } from '@/components';
const props = defineProps({
    title: String,
    linktext: String,
    linkto: String,
    amount: Number,
    amountText: String,
    total: Number,
    note: String,
    theme: String,
});
</script>
<template>
    <div
        :class="{
            'h-full rounded-md': true,
            'bg-primary-600': props.theme === 'primary',
            'bg-orange-400': props.theme === 'orange',
            'bg-blue-500': props.theme === 'blue',
            'bg-red-600': props.theme === 'red',
        }"
    >
        <CardBody>
            <div class="mb-2 flex items-center justify-between">
                <div class="text-base text-white">{{ title }}</div>
                <router-link :to="linkto" class="text-white">{{
                    linktext
                }}</router-link>
            </div>
            <h5
                class="font-heading leading-tighter mb-2 text-3xl font-bold tracking-tight text-white"
            >
                {{ amount }}
                <small class="text-2xl font-normal">{{ amountText }}</small>
            </h5>
            <div class="text-opacity-75 mt-1 text-sm text-white">
                <span class="text-white">{{ total - amount }}</span
                >/{{ total }} {{ note }}
            </div>
        </CardBody>
    </div>
</template>
