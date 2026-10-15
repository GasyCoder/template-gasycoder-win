import React, { useState } from 'react';
import Input from '../forms/Input';
import Select from '../forms/Select';
import Pagination from './Pagination';

import {
    flexRender,
    getCoreRowModel,
    getFilteredRowModel,
    useReactTable,
    getPaginationRowModel,
} from '@tanstack/react-table';

function DataTable({ columns, tableData }) {
    const [data, setData] = useState(() => [...tableData]);
    const [globalFilter, setGlobalFilter] = useState('');

    // Update the state when input changes
    const handleFilterChange = (e) => {
        const value = e.target.value || undefined;
        setGlobalFilter(value);
    };

    const table = useReactTable({
        data,
        columns,
        state: {
            globalFilter,
        },
        getPaginationRowModel: getPaginationRowModel(),
        onGlobalFilterChange: setGlobalFilter,
        getCoreRowModel: getCoreRowModel(),
        getFilteredRowModel: getFilteredRowModel(),
        initialState: {
            pagination: {
                pageSize: 10,
            },
        },
    });
    const pageSizeSelect = [
        { name: 10 },
        { name: 20 },
        { name: 50 },
        { name: 100 },
    ];
    const [selected, setSelected] = useState(pageSizeSelect[1]);

    return (
        <>
            <div className="flex items-center justify-between gap-3 pb-4">
                <div className="xs:w-64 w-full">
                    <Input
                        value={globalFilter}
                        onChange={handleFilterChange}
                        placeholder="Type in to Search"
                    />
                </div>
                <div className="flex items-center gap-x-3">
                    <div className="xs:block hidden text-sm text-slate-500 dark:text-slate-300">
                        Show
                    </div>
                    <div className="w-20">
                        <Select
                            selected={selected}
                            onChange={(e) => {
                                table.setPageSize(Number(e.target.value));
                                setSelected(e.target.value);
                            }}
                        >
                            {pageSizeSelect.map((item, index) => {
                                return (
                                    <option key={index} value={item.name}>
                                        {item.name}
                                    </option>
                                );
                            })}
                        </Select>
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto rounded border border-gray-200 dark:border-gray-800">
                <table className="w-full table-auto border-collapse text-sm">
                    <thead className="text-slate-600 dark:text-slate-200">
                        {table.getHeaderGroups().map((headerGroup) => (
                            <tr key={headerGroup.id}>
                                {headerGroup.headers.map((header) => (
                                    <th
                                        className="py-1 ps-5 pe-5 text-start"
                                        key={header.id}
                                    >
                                        {header.isPlaceholder
                                            ? null
                                            : flexRender(
                                                  header.column.columnDef
                                                      .header,
                                                  header.getContext(),
                                              )}
                                    </th>
                                ))}
                            </tr>
                        ))}
                    </thead>
                    <tbody>
                        {table.getRowModel().rows.map((row) => (
                            <tr key={row.id}>
                                {row.getVisibleCells().map((cell) => (
                                    <td
                                        className="border-t border-gray-200 py-2.5 ps-5 pe-5 dark:border-gray-800"
                                        key={cell.id}
                                    >
                                        {flexRender(
                                            cell.column.columnDef.cell,
                                            cell.getContext(),
                                        )}
                                    </td>
                                ))}
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
            <div
                className={`flex flex-col justify-between gap-4 pt-4 sm:flex-row sm:items-center`}
            >
                <Pagination table={table} />
                <span className="flex items-center gap-1 text-xs text-slate-500 dark:text-slate-300">
                    {table.getState().pagination.pageSize *
                        (table.getState().pagination.pageIndex + 1 - 1) +
                        1}{' '}
                    -{' '}
                    {table.getFilteredRowModel().rows.length >
                    table.getState().pagination.pageSize *
                        (table.getState().pagination.pageIndex + 1)
                        ? table.getState().pagination.pageSize *
                          (table.getState().pagination.pageIndex + 1)
                        : table.getFilteredRowModel().rows.length}{' '}
                    of {table.getFilteredRowModel().rows.length}
                </span>
            </div>
        </>
    );
}

export default DataTable;
