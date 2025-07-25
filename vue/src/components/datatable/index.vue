<script setup>
import { ref, watch } from 'vue'
import { Card, Input } from '@/components'
import { FlexRender, getCoreRowModel, useVueTable, getPaginationRowModel, getFilteredRowModel } from '@tanstack/vue-table'
import Pagination from "./Pagination.vue";
const props = defineProps({
    columns:Array,
    tableData:Array,
})

const data = ref(props.tableData)
const globalFilter = ref("")

const pageSizeSelect = [ 10,20,50,100 ];
    
const selectedPageSize = ref(pageSizeSelect[0])

const table = useVueTable({
  data: data.value,
  columns: props.columns,
  enableGlobalFilter: true,
  getCoreRowModel: getCoreRowModel(),
  getFilteredRowModel: getFilteredRowModel(),
  getPaginationRowModel: getPaginationRowModel(),
  state: {
    get globalFilter(){
        return globalFilter.value;
    },
},
    initialState: {
        pagination: {
            pageSize: selectedPageSize.value,
        },
    },
})
const rerender = () => {
  data.value = props.data
}


const handleFilterChange = (e) => {
    const value = e.target.value || undefined;
    globalFilter.value = value;
};
const handlePageSizeChange = (option) => {
    table.setPageSize(Number(option))
};

</script>
<template>
    <div class="pb-4 flex gap-3 items-center justify-between">
        <div class="w-full xs:w-64">
            <Input
                :value="globalFilter"
                @input="handleFilterChange"
                placeholder="Type in to Search"
            />
        </div>
        <div class="flex items-center gap-x-3">
            <div class="text-slate-500 dark:text-slate-300 text-sm hidden xs:block">
                Show
            </div>
            <div class="w-20">
                <select v-model="selectedPageSize" @change="handlePageSizeChange(selectedPageSize)" class="block w-full text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all focus:z-10 text-sm leading-4.5 pe-8 ps-4 py-1.5 h-9 bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" >
                    <option v-for="(item,index) in pageSizeSelect" :key="index" :value="item">{{item}}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="rounded border border-gray-200 dark:border-gray-800 overflow-x-auto">
        <table class="table-auto w-full text-sm border-collapse">
            <thead class="text-slate-600 dark:text-slate-200">
                <tr v-for="headerGroup in table.getHeaderGroups()" :key="headerGroup.id">
                    <th class="text-start ps-5 pe-5 py-1" v-for="header in headerGroup.headers" :key="header.id" :colSpan="header.colSpan" >
                        <FlexRender v-if="!header.isPlaceholder" :render="header.column.columnDef.header" :props="header.getContext()" />
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="row in table.getRowModel().rows" :key="row.id">
                    <td class="ps-5 pe-5 py-2.5 border-t border-gray-200 dark:border-gray-800" v-for="cell in row.getVisibleCells()" :key="cell.id" >
                        <FlexRender :render="cell.column.columnDef.cell" :props="cell.getContext()" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="pt-4 flex sm:items-center justify-between flex-col sm:flex-row gap-4">
        <Pagination :table="table" />
        <span class="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-300">
            {{table.getState().pagination.pageSize * (table.getState().pagination.pageIndex + 1 - 1) + 1}}
            {{" "}}-{{" "}}
            {{table.getFilteredRowModel().rows.length > table.getState().pagination.pageSize * (table.getState().pagination.pageIndex + 1) ? table.getState().pagination.pageSize * (table.getState().pagination.pageIndex + 1) : table.getFilteredRowModel().rows.length}}{{" "}}
            of{{" "}}{{table.getFilteredRowModel().rows.length}}
        </span>
    </div>
</template>