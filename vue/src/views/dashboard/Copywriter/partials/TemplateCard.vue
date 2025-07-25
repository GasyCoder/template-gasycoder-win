<script setup>
import { Card, CardBody, Avatar } from '@/components'
const props = defineProps({
    title: String, icon: String, excerpt: String, theme: String
})
</script>
<template>
    <Card class="h-full">
        <CardBody>
            <Avatar size="rg" rounded :variant="theme" class="mb-3" :icon="icon"></Avatar>
            <h5 class="text-xl font-heading font-bold text-slate-700 dark:text-white mb-1">{{title}}</h5>
            <p class="text-slate-600 dark:text-slate-400">{{excerpt}}</p>
        </CardBody>
    </Card>
</template>