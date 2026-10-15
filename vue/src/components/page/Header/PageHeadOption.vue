<script setup>
import { ref, computed } from 'vue';
import { ButtonZoom, Icon } from '@/components';

const pageOption = ref(false);

const props = defineProps({
    responsive: String,
});

const buttonClass = computed(() => ({
    '-me-2': true,
    'sm:hidden': !props.responsive || props.responsive === 'sm',
    'xs:hidden': props.responsive === 'xs',
}));
const optionClass = computed(() => ({
    'absolute start-0 end-0 top-full -mx-3.5 bg-white dark:bg-gray-950 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[1000]': true,
    'sm:relative sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800 sm:opacity-100 sm:visible':
        !props.responsive || props.responsive === 'sm',
    'xs:relative xs:bg-transparent xs:dark:bg-transparent max-xs:shadow max-xs:dark:shadow-gray-800 xs:opacity-100 xs:visible':
        props.responsive === 'xs',
    active: pageOption.value,
}));
</script>
<template>
    <ButtonZoom
        :class="buttonClass"
        as="button"
        :active="pageOption.value"
        @click="() => (pageOption = !pageOption)"
    >
        <Icon class="text-xl" name="more-v" />
    </ButtonZoom>
    <div :class="optionClass">
        <slot></slot>
    </div>
</template>
