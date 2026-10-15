<script setup>
import { ref, watch } from 'vue';
import { Card, Input } from '@/components';
import {
    FlexRender,
    getCoreRowModel,
    useVueTable,
    getPaginationRowModel,
    getFilteredRowModel,
} from '@tanstack/vue-table';
import Pagination from './Pagination.vue';
const props = defineProps({
    columns: Array,
    tableData: Array,
});

const data = ref(props.tableData);
const globalFilter = ref('');

const pageSizeSelect = [10, 20, 50, 100];

const selectedPageSize = ref(pageSizeSelect[0]);

const table = useVueTable({
    data: data.value,
    columns: props.columns,
    enableGlobalFilter: true,
    getCoreRowModel: getCoreRowModel(),
    getFilteredRowModel: getFilteredRowModel(),
    getPaginationRowModel: getPaginationRowModel(),
    state: {
        get globalFilter() {
            return globalFilter.value;
        },
    },
    initialState: {
        pagination: {
            pageSize: selectedPageSize.value,
        },
    },
});
const rerender = () => {
    data.value = props.data;
};

const handleFilterChange = (e) => {
    const value = e.target.value || undefined;
    globalFilter.value = value;
};
const handlePageSizeChange = (option) => {
    table.setPageSize(Number(option));
};
</script>
<template>
    <div class="flex items-center justify-between gap-3 pb-4">
        <div class="xs:w-64 w-full">
            <Input
                :value="globalFilter"
                @input="handleFilterChange"
                placeholder="Type in to Search"
            />
        </div>
        <div class="flex items-center gap-x-3">
            <div
                class="xs:block hidden text-sm text-slate-500 dark:text-slate-300"
            >
                Show
            </div>
            <div class="w-20">
                <select
                    v-model="selectedPageSize"
                    @change="handlePageSizeChange(selectedPageSize)"
                    class="focus:border-primary-500 focus:dark:border-primary-600 focus:outline-primary-200 focus:dark:outline-primary-950 block h-9 w-full rounded border border-gray-200 bg-white bg-[right_0.5rem_center] py-1.5 ps-4 pe-8 text-sm leading-4.5 text-slate-700 placeholder-slate-300 transition-all outline-none focus:z-10 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 rtl:bg-[left_0.5rem_center] dark:border-gray-800 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                >
                    <option
                        v-for="(item, index) in pageSizeSelect"
                        :key="index"
                        :value="item"
                    >
                        {{ item }}
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div
        class="overflow-x-auto rounded border border-gray-200 dark:border-gray-800"
    >
        <table class="w-full table-auto border-collapse text-sm">
            <thead class="text-slate-600 dark:text-slate-200">
                <tr
                    v-for="headerGroup in table.getHeaderGroups()"
                    :key="headerGroup.id"
                >
                    <th
                        class="py-1 ps-5 pe-5 text-start"
                        v-for="header in headerGroup.headers"
                        :key="header.id"
                        :colSpan="header.colSpan"
                    >
                        <FlexRender
                            v-if="!header.isPlaceholder"
                            :render="header.column.columnDef.header"
                            :props="header.getContext()"
                        />
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="row in table.getRowModel().rows" :key="row.id">
                    <td
                        class="border-t border-gray-200 py-2.5 ps-5 pe-5 dark:border-gray-800"
                        v-for="cell in row.getVisibleCells()"
                        :key="cell.id"
                    >
                        <FlexRender
                            :render="cell.column.columnDef.cell"
                            :props="cell.getContext()"
                        />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div
        class="flex flex-col justify-between gap-4 pt-4 sm:flex-row sm:items-center"
    >
        <Pagination :table="table" />
        <span
            class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-300"
        >
            {{
                table.getState().pagination.pageSize *
                    (table.getState().pagination.pageIndex + 1 - 1) +
                1
            }}
            {{ ' ' }}-{{ ' ' }}
            {{
                table.getFilteredRowModel().rows.length >
                table.getState().pagination.pageSize *
                    (table.getState().pagination.pageIndex + 1)
                    ? table.getState().pagination.pageSize *
                      (table.getState().pagination.pageIndex + 1)
                    : table.getFilteredRowModel().rows.length
            }}{{ ' ' }} of{{ ' ' }}{{ table.getFilteredRowModel().rows.length }}
        </span>
    </div>
</template>
