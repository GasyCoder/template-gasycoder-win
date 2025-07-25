<script setup>
import { computed } from 'vue';
const props = defineProps({
    variant:String,
    size:String,
    as:String,
    striped:Boolean,
    animated:Boolean,
    progress:Number
})

const compClass = computed(() => ({
    "text-xs text-center px-1" : true,
    "text-white bg-primary-600": !props.variant || props.variant === "primary",
    "text-white bg-green-600": props.variant === "green",
    "text-white bg-cyan-600": props.variant === "cyan",
    "text-white bg-yellow-600": props.variant === "yellow",
    "text-white bg-red-600": props.variant === "red",
    "text-white bg-pink-600": props.variant === "pink",
    "text-white bg-indigo-600": props.variant === "indigo",
    "bg-gradient-to-br stripe" : props.striped,
    "bg-[length:theme(spacing.1.5)_theme(spacing.1.5)]" : !props.size || props.size === "rg",
    "bg-[length:theme(spacing.1)_theme(spacing.1)]" : props.size === "xs",
    "bg-[length:theme(spacing.2)_theme(spacing.2)]" : props.size === "sm",
    "bg-[length:theme(spacing.4)_theme(spacing.4)]" : props.size === "lg",
    "animate-[progressBarStripes_1s_linear_infinite]" : props.animated,
}))

</script>
<template>
    <component :is="as ? as : 'div'" :class="compClass" :style="{'width':progress + '%'}">
        <slot></slot>
    </component>
</template>