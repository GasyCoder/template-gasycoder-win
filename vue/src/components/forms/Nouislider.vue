<script setup>
import { onMounted } from 'vue';
import noUiSlider from 'nouislider';

const props = defineProps({
    id: String,
    start: String,
    connect: String,
    min: Number,
    max: Number,
    minDistance: Number,
    maxDistance: Number,
    step: Number,
    orientation: String,
    tooltip: Boolean,
});

let startValue = props.start;
startValue = /\s/g.test(startValue) ? startValue.split(' ') : startValue;
startValue = startValue ? startValue : 0;

let connectValue = props.connect;
connectValue = /\s/g.test(connectValue)
    ? connectValue.split(' ')
    : connectValue;
connectValue = typeof connectValue === 'undefined' ? 'lower' : connectValue;
connectValue =
    connectValue === 'true' || connectValue === 'false'
        ? JSON.parse(connectValue)
        : connectValue;

onMounted(() => {
    noUiSlider.create(document.getElementById(props.id), {
        start: startValue,
        connect: connectValue,
        range: {
            min: props.min || 0,
            max: props.max || 100,
        },
        margin: props.minDistance || null,
        limit: props.maxDistance || null,
        step: props.step || 1,
        orientation: props.orientation || 'horizontal',
        tooltips: props.tooltip || false,
    });
});
</script>
<template>
    <div :id="id"></div>
</template>
