<script setup>
import { Card, CardBody } from '@/components'
const props = defineProps({
    title: String, linktext: String, linkto: String, amount: Number, amountText:String, total:Number, note:String, theme:String
})
</script>
<template>
    <div :class="{
        'rounded-md h-full': true,
        'bg-primary-600': props.theme === 'primary',
        'bg-orange-400': props.theme === 'orange',
        'bg-blue-500': props.theme === 'blue',
        'bg-red-600': props.theme === 'red',
    }">
        <CardBody>
            <div class="flex items-center justify-between mb-2">
                <div class="text-base text-white">{{ title }}</div>
                <router-link :to="linkto" class="text-white">{{ linktext }}</router-link>
            </div>
            <h5 class="font-heading font-bold text-3xl leading-tighter tracking-tight mb-2 text-white">{{amount}} <small class="text-2xl font-normal">{{amountText}}</small></h5>
            <div class="text-sm text-white text-opacity-75 mt-1"><span class="text-white">{{total - amount}}</span>/{{total}} {{note}}</div>
        </CardBody>
    </div>
</template>