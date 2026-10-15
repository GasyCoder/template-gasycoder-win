<script setup>
import { ref } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    PageHead,
    PageHeadGroup,
    PageHeadTitle,
    PageHeadSubTitle,
    PageHeadOption,
    Button,
    ButtonZoom,
    Icon,
    Dropdown,
    CheckBox,
    Avatar,
    Pagination,
    PaginationPrev,
    PaginationItem,
    PaginationDot,
    PaginationNext,
    SelectChoice,
    SelectOption,
    FormGroup,
    FormLabel,
    InputWrap,
    Input,
    InputIcon,
} from '@/components';
import { toInitials } from '@/utilities';

import AddProduct from './AddProduct.vue';
import { useProductsStore } from '@/stores/products';
const products = useProductsStore();
const showAddProduct = ref(false);
</script>

<template>
    <Layout title="Product List">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Products</PageHeadTitle>
            </PageHeadGroup>
            <PageHeadGroup>
                <PageHeadOption>
                    <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                        <li>
                            <InputWrap class="max-w-[190px]">
                                <InputIcon icon="search" end />
                                <Input
                                    id="default-03"
                                    icon="end"
                                    placeholder="Quick search by id"
                                />
                            </InputWrap>
                        </li>
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[0, 4]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <Button size="rg" variant="white-outline">
                                        <span class="me-1">Status</span>
                                        <Icon
                                            class="-me-1 text-base/4.5"
                                            name="chevron-down"
                                        />
                                    </Button>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >New Items</span
                                                ></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span>Featured</span></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Out of Stock</span
                                                ></MenuItem
                                            >
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                        <li class="ms-auto">
                            <Button
                                size="rg"
                                variant="primary"
                                class="hidden sm:inline-flex"
                                @click="
                                    () => {
                                        showAddProduct = !showAddProduct;
                                    }
                                "
                            >
                                <Icon class="text-xl/4.5" name="plus" />
                                <span class="ms-3">Add Product</span>
                            </Button>
                            <Button
                                size="rg"
                                variant="primary"
                                icon
                                class="sm:hidden"
                                @click="
                                    () => {
                                        showAddProduct = !showAddProduct;
                                    }
                                "
                            >
                                <Icon class="text-xl/4.5" name="plus" />
                            </Button>
                        </li>
                    </ul>
                </PageHeadOption>
            </PageHeadGroup>
        </PageHead>
        <div
            class="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950"
        >
            <table
                class="w-full border-collapse border-gray-300 dark:border-gray-900"
            >
                <thead>
                    <tr>
                        <th
                            class="w-12 border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <CheckBox size="sm" id="pid-all" />
                            </div>
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-xs/5 font-normal text-slate-400"
                                >Name</span
                            >
                        </th>
                        <th
                            class="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-xs/5 font-normal text-slate-400"
                                >SKU</span
                            >
                        </th>
                        <th
                            class="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-xs/5 font-normal text-slate-400"
                                >Price</span
                            >
                        </th>
                        <th
                            class="border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-xs/5 font-normal text-slate-400"
                                >Stock</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-xs/5 font-normal text-slate-400"
                                >Category</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start align-middle first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <em
                                class="ni ni-star-round block text-lg/5 text-slate-400"
                            ></em>
                        </th>
                        <th
                            class="max-w-[3.75rem] border-b border-gray-300 px-2 py-0 text-end align-middle first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <Dropdown
                                class="-me-2"
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom size="md">
                                        <Icon class="text-xl" name="more-h" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="edit"
                                                />
                                                <span>Edit Selected</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="trash"
                                                />
                                                <span>Remove Selected</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="bar-c"
                                                />
                                                <span>Update Stock</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="invest"
                                                />
                                                <span>Update Price</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(item, index) in products.list"
                        :key="index"
                        class="hover:dark:bg-gray-1000 group transition-all duration-300 hover:bg-gray-50"
                    >
                        <td
                            class="w-12 border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <CheckBox size="sm" :id="'check' + item.id" />
                            </div>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:table-cell dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <Avatar :img="item.img" size="lg" />
                                <span
                                    class="ms-4 block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                >
                                    {{ item.name }}
                                </span>
                            </div>
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span class="text-xs text-slate-400">{{
                                item.sku
                            }}</span>
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="text-sm font-medium text-slate-700 dark:text-white"
                                >$ {{ item.price }}</span
                            >
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span class="text-xs text-slate-400">{{
                                item.stock
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span class="text-xs text-slate-400">
                                <template
                                    v-for="(cItem, cIndex) in item.category"
                                    :key="cIndex"
                                >
                                    {{ cItem
                                    }}{{
                                        item.category.length > cIndex + 1 &&
                                        ', '
                                    }}
                                </template>
                            </span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <div
                                :class="`group/asterisk relative inline-flex cursor-pointer ${item.fav ? 'active' : ''}`"
                            >
                                <em
                                    class="text-primary-600 ni ni-star text-lg/none"
                                ></em>
                                <em
                                    class="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"
                                ></em>
                            </div>
                        </td>
                        <td
                            class="max-w-[3.75rem] border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <Dropdown
                                class="-me-2"
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom>
                                        <Icon class="text-xl" name="more-h" />
                                    </ButtonZoom>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="edit"
                                                />
                                                <span>Edit Product</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="eye"
                                                />
                                                <span>View Product</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="activity-round"
                                                />
                                                <span>Product Orders</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="trash"
                                                />
                                                <span>Remove Product</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="p-5">
                <div
                    class="flex flex-wrap justify-center gap-4 sm:justify-between"
                >
                    <Pagination>
                        <PaginationPrev text="Prev" />
                        <PaginationItem>1</PaginationItem>
                        <PaginationItem>2</PaginationItem>
                        <PaginationDot />
                        <PaginationItem>6</PaginationItem>
                        <PaginationItem>7</PaginationItem>
                        <PaginationNext text="Next" />
                    </Pagination>
                    <div class="flex items-center gap-x-4">
                        <div class="text-xs text-slate-600 uppercase">Page</div>
                        <div class="relative w-16">
                            <SelectChoice id="pageNumber">
                                <SelectOption value="1">1</SelectOption>
                                <SelectOption value="2">2</SelectOption>
                                <SelectOption value="3">3</SelectOption>
                            </SelectChoice>
                        </div>
                        <div class="text-xs text-slate-600 uppercase">
                            Of 102
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <AddProduct v-model:show="showAddProduct" />
    </Layout>
</template>
