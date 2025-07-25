<script setup>
import {ref, watch} from 'vue'
import PaginationButton from './PaginationButton.vue'
import {Icon} from '@/components'


const props = defineProps({table : Object, first:Boolean, last:Boolean})

const paginationItems = ref('');

const paginationNumber = () => {
    if (props.table.getPageCount() <= 3) {
        const pages = []
        for (let i = 1; i <= props.table.getPageCount(); i++) {
            pages.push(i);
        }
        return pages;
    } 
    else if (
        props.table.getPageCount() >= 2 &&
        props.table.getState().pagination.pageIndex + 1 <= 2
    ) {
        return [1, 2, 3, "blank", props.table.getPageCount()];
    } 
    else if (
        props.table.getPageCount() >= 3 &&
        props.table.getState().pagination.pageIndex + 1 >=
        props.table.getPageCount() - 1
    ) {
        return [
            1,
            "blank",
            props.table.getPageCount() - 2,
            props.table.getPageCount() - 1,
            props.table.getPageCount(),
        ];
    } else if (
        props.table.getPageCount() > 3 &&
        props.table.getState().pagination.pageIndex + 1 > 2 &&
        props.table.getState().pagination.pageIndex + 1 <
            props.table.getPageCount() - 1
    ) {
        return [
            "blank",
            props.table.getState().pagination.pageIndex + 1 - 1,
            props.table.getState().pagination.pageIndex + 1,
            props.table.getState().pagination.pageIndex + 1 + 1,
            "blank",
        ];
    }
};

paginationItems.value = paginationNumber();
watch([() => props.table.getState().pagination.pageIndex, () => props.table.getState().pagination.pageSize], () => {
    paginationItems.value = paginationNumber();
})

</script>
<template>
    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm">
        <PaginationButton
            v-if="first"
            icon
            @click="table.setPageIndex(0)"
            :disabled="!table.getCanPreviousPage()"
        >
            <Icon class="rtl:-scale-x-100" name="chevrons-left"></Icon>
        </PaginationButton>
        <PaginationButton
            icon
            @click="table.previousPage()"
            :disabled="!table.getCanPreviousPage()"
        >
            <Icon class="rtl:-scale-x-100" name="chevron-left"></Icon>
        </PaginationButton>
            <PaginationButton
                v-for="(number,index) in paginationItems"
                :key="index"
                :current="number - 1 === table.getState().pagination.pageIndex"
                @click="table.setPageIndex(number - 1)"
                :icon="number === 'blank'"
                :disabled="number === 'blank'"
            >
                <template v-if="number !== 'blank'">
                    {{ number }}
                </template>
                <Icon v-else name="more-h"></Icon>
            </PaginationButton>
        <PaginationButton
            icon
            @click="table.nextPage()"
            :disabled="!table.getCanNextPage()"
        >
            <Icon class="rtl:-scale-x-100" name="chevron-right"></Icon>
        </PaginationButton>
        <PaginationButton
            v-if="last"
            icon
            @click="table.setPageIndex(table.getPageCount() - 1)"
            :disabled="!table.getCanNextPage()"
        >
            <Icon class="rtl:-scale-x-100" name="chevrons-right"></Icon>
        </PaginationButton>
    </nav>
</template>