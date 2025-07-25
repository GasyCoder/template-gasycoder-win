<script setup>
import { onMounted } from 'vue'
import Choices from 'choices.js'
const props = defineProps({
    multiple:Boolean,
    search:Boolean,
    shouldSort:Boolean,
    removeItemButton:Boolean,
    searchPlaceholder:String,
    placeholder:String,
    id:String,
})

onMounted(() => {
    new Choices( document.getElementById(props.id), {
        silent: true,
        allowHTML: false,
        searchEnabled: false || props.search,
        placeholder: true,
        placeholderValue: props.placeholder,
        searchPlaceholderValue: 'Search' || props.searchPlaceholder,
        shouldSort: false || props.shouldSort,
        removeItemButton: false || props.removeItemButton,
        itemSelectText: '',
        noResultsText: 'No results',
    });
})


</script>
<template>
    <select :id="id" :multiple="multiple && multiple">
        <option v-if="placeholder" value=''>{{placeholder}}</option>
        <slot></slot>
    </select>
</template>