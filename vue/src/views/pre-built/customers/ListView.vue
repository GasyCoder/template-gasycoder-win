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
} from '@/components';
import { toInitials } from '@/utilities';
import { useCustomerStore } from '@/stores/customer';
const customers = useCustomerStore();
const showSearchForm = ref(false);
const showCardOptions = ref(false);
</script>

<template>
    <Layout title="Customers List">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Customers List</PageHeadTitle>
                <PageHeadSubTitle
                    >You have total 1,261 customers.</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <PageHeadOption>
                    <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                        <li>
                            <Button size="rg" variant="white-outline">
                                <Icon
                                    class="text-xl/4.5"
                                    name="download-cloud"
                                />
                                <span class="ms-3">Export</span>
                            </Button>
                        </li>
                        <li class="ms-auto">
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[0, 4]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <Button size="rg" variant="primary" icon>
                                        <Icon class="text-xl/4.5" name="plus" />
                                    </Button>
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span>Add User</span></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span>Add Team</span></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Import User</span
                                                ></MenuItem
                                            >
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                    </ul>
                </PageHeadOption>
            </PageHeadGroup>
        </PageHead>
        <div
            class="-mx-3.5 h-full border-y border-gray-300 bg-white sm:m-0 sm:rounded-md sm:border-x dark:border-gray-900 dark:bg-gray-950"
        >
            <div class="relative p-5">
                <div class="relative flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="relative w-[132px]">
                            <SelectChoice
                                id="Bulk_Action"
                                placeholder="Bulk Action"
                            >
                                <SelectOption value="SendEmail"
                                    >Send Email</SelectOption
                                >
                                <SelectOption value="ChangeGroup"
                                    >Change Group</SelectOption
                                >
                                <SelectOption value="SuspendUser"
                                    >Suspend User</SelectOption
                                >
                                <SelectOption value="DeleteUser"
                                    >Delete User</SelectOption
                                >
                            </SelectChoice>
                        </div>
                        <Button
                            size="rg"
                            variant="light-pale-outline"
                            class="hidden sm:inline-flex"
                            disabled
                            >Apply</Button
                        >
                        <Button
                            size="rg"
                            variant="light-pale-outline"
                            class="sm:hidden"
                            icon
                            disabled
                            ><Icon
                                class="text-xl leading-4.5 rtl:-scale-x-100"
                                name="arrow-right"
                        /></Button>
                    </div>
                    <ul class="flex flex-wrap items-start gap-2.5">
                        <li>
                            <ButtonZoom @click="() => (showSearchForm = true)">
                                <Icon class="text-xl/4.5" name="search" />
                            </ButtonZoom>
                        </li>
                        <li
                            class="h-9 border-s border-gray-200 dark:border-gray-800"
                        ></li>
                        <li>
                            <ButtonZoom
                                @click="() => (showCardOptions = true)"
                                class="sm:hidden"
                                size="rg"
                            >
                                <Icon
                                    class="text-xl text-slate-600 rtl:-scale-x-100 dark:text-slate-300"
                                    name="menu-right"
                                />
                            </ButtonZoom>
                            <div
                                :class="{
                                    'invisible absolute start-0 end-0 top-0 bottom-0 z-[700] -m-5 bg-white p-5 opacity-0 shadow shadow-gray-200 sm:visible sm:relative sm:m-0 sm:bg-transparent sm:p-0 sm:opacity-100 sm:shadow-none dark:bg-gray-950 dark:shadow-gray-900 sm:dark:bg-transparent [&.active]:visible [&.active]:opacity-100': true,
                                    active: showCardOptions,
                                }"
                            >
                                <ul class="flex items-center gap-x-1">
                                    <li class="-ms-2 me-auto sm:hidden">
                                        <ButtonZoom
                                            @click="
                                                () => (showCardOptions = false)
                                            "
                                            size="rg"
                                        >
                                            <Icon
                                                class="text-xl/4.5 rtl:-scale-x-100"
                                                name="arrow-left"
                                            />
                                        </ButtonZoom>
                                    </li>
                                    <li>
                                        <Dropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            :offset="[-14, -8]"
                                            :rtlOffset="[14, -8]"
                                            contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[260px] xs:min-w-[360px]"
                                        >
                                            <template #button>
                                                <ButtonZoom>
                                                    <Icon
                                                        class="text-xl/4.5"
                                                        name="filter-alt"
                                                    />
                                                    <span
                                                        class="bg-primary-600 absolute end-0.5 top-0.5 inline-block h-2 w-2 rounded-full"
                                                    ></span>
                                                </ButtonZoom>
                                            </template>
                                            <template #content>
                                                <div
                                                    class="flex items-center justify-between border-b border-gray-200 px-5 py-3 dark:border-gray-800"
                                                >
                                                    <span
                                                        class="font-medium text-slate-700 dark:text-white"
                                                        >Filter Users</span
                                                    >
                                                </div>
                                                <div class="p-5">
                                                    <div
                                                        class="grid grid-flow-dense grid-cols-12 gap-x-6 gap-y-4"
                                                    >
                                                        <div class="col-span-6">
                                                            <CheckBox
                                                                size="sm"
                                                                id="haveBalance"
                                                                >Have
                                                                Balance</CheckBox
                                                            >
                                                        </div>
                                                        <div class="col-span-6">
                                                            <CheckBox
                                                                size="sm"
                                                                id="KYCVerified"
                                                                >KYC
                                                                Verified</CheckBox
                                                            >
                                                        </div>
                                                        <div class="col-span-6">
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-3"
                                                                    htmlFor="userRole"
                                                                    >Role
                                                                </FormLabel>
                                                                <InputWrap>
                                                                    <SelectChoice
                                                                        id="userRole"
                                                                    >
                                                                        <SelectOption
                                                                            value="AnyRole"
                                                                            >Any
                                                                            Role</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Investor"
                                                                            >Investor</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Seller"
                                                                            >Seller</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Buyer"
                                                                            >Buyer</SelectOption
                                                                        >
                                                                    </SelectChoice>
                                                                </InputWrap>
                                                            </FormGroup>
                                                        </div>
                                                        <div class="col-span-6">
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-3"
                                                                    htmlFor="userStatus"
                                                                    >Status</FormLabel
                                                                >
                                                                <InputWrap>
                                                                    <SelectChoice
                                                                        id="userStatus"
                                                                    >
                                                                        <SelectOption
                                                                            value="AnyRole"
                                                                            >Any
                                                                            Status</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Active"
                                                                            >Active</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Pending"
                                                                            >Pending</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Suspend"
                                                                            >Suspend</SelectOption
                                                                        >
                                                                        <SelectOption
                                                                            value="Deleted"
                                                                            >Deleted</SelectOption
                                                                        >
                                                                    </SelectChoice>
                                                                </InputWrap>
                                                            </FormGroup>
                                                        </div>
                                                        <div
                                                            class="col-span-12"
                                                        >
                                                            <MenuItem
                                                                as="template"
                                                            >
                                                                <Button
                                                                    size="rg"
                                                                    variant="secondary"
                                                                    >Filter</Button
                                                                >
                                                            </MenuItem>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center justify-between border-t border-gray-200 px-5 py-3 dark:border-gray-800"
                                                >
                                                    <a
                                                        class="text-primary-500 hover:text-primary-700 text-sm transition-all duration-300"
                                                        href="#link"
                                                        @click="
                                                            (e) =>
                                                                e.preventDefault()
                                                        "
                                                        >Reset Filter</a
                                                    >
                                                    <a
                                                        class="text-primary-500 hover:text-primary-700 text-sm transition-all duration-300"
                                                        href="#link"
                                                        @click="
                                                            (e) =>
                                                                e.preventDefault()
                                                        "
                                                        >Save Filter</a
                                                    >
                                                </div>
                                            </template>
                                        </Dropdown>
                                    </li>
                                    <li>
                                        <Dropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            :offset="[-14, -8]"
                                            :rtlOffset="[14, -8]"
                                            contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]"
                                        >
                                            <template #button>
                                                <ButtonZoom>
                                                    <Icon
                                                        class="text-xl/4.5"
                                                        name="setting"
                                                    />
                                                </ButtonZoom>
                                            </template>
                                            <template #content>
                                                <ul class="py-2">
                                                    <li>
                                                        <h6
                                                            class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                        >
                                                            Show
                                                        </h6>
                                                    </li>
                                                    <li class="group">
                                                        <MenuItem
                                                            as="button"
                                                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        >
                                                            <span
                                                                >10 Items</span
                                                            >
                                                            <em
                                                                class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            ></em>
                                                        </MenuItem>
                                                    </li>
                                                    <li class="group active">
                                                        <MenuItem
                                                            as="button"
                                                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        >
                                                            <span
                                                                >20 Items</span
                                                            >
                                                            <em
                                                                class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            ></em>
                                                        </MenuItem>
                                                    </li>
                                                    <li class="group">
                                                        <MenuItem
                                                            as="button"
                                                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        >
                                                            <span
                                                                >30 Items</span
                                                            >
                                                            <em
                                                                class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            ></em>
                                                        </MenuItem>
                                                    </li>
                                                    <li
                                                        class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                    ></li>
                                                    <li>
                                                        <h6
                                                            class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                        >
                                                            Order By
                                                        </h6>
                                                    </li>
                                                    <li class="group active">
                                                        <MenuItem
                                                            as="button"
                                                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        >
                                                            <span>DESC</span>
                                                            <em
                                                                class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            ></em>
                                                        </MenuItem>
                                                    </li>
                                                    <li class="group">
                                                        <MenuItem
                                                            as="button"
                                                            class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        >
                                                            <span>ASC</span>
                                                            <em
                                                                class="ni ni-check-thick absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                            ></em>
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                            </template>
                                        </Dropdown>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div
                    :class="{
                        'invisible absolute inset-0 z-[800] bg-white opacity-0 transition-all duration-300 sm:rounded-t-md dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100': true,
                        active: showSearchForm,
                    }"
                >
                    <div class="flex items-center p-5">
                        <button
                            @click="() => (showSearchForm = false)"
                            class="relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                        >
                            <Icon
                                class="text-xl/4.5 rtl:-scale-x-100"
                                name="arrow-left"
                            />
                        </button>
                        <input
                            type="text"
                            class="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                            placeholder="Search by user or email"
                            auto-complete="off"
                        />
                        <button
                            type="submit"
                            class="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                        >
                            <Icon class="text-xl/4.5" name="search" />
                        </button>
                    </div>
                </div>
            </div>
            <table
                class="w-full border-collapse border-gray-300 dark:border-gray-900"
            >
                <thead>
                    <tr>
                        <th
                            class="w-12 border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900"
                        >
                            <input
                                type="checkbox"
                                class="peer checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 checked:dark:border-primary-600 h-4 w-4 cursor-pointer rounded border-2 border-gray-300 bg-white transition-all duration-300 outline-none focus:ring-0 focus:ring-offset-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:border-gray-900 dark:bg-gray-950 disabled:dark:bg-slate-900"
                                id="cid-all"
                            />
                        </th>
                        <th
                            class="border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Customer</span
                            >
                        </th>
                        <th
                            class="xs:table-cell hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Email</span
                            >
                        </th>
                        <th
                            class="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Phone</span
                            >
                        </th>
                        <th
                            class="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Company</span
                            >
                        </th>
                        <th
                            class="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Payment Methods</span
                            >
                        </th>
                        <th
                            class="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Joined</span
                            >
                        </th>
                        <th
                            class="hidden border-t border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Status</span
                            >
                        </th>
                        <th
                            class="max-w-[3.75rem] border-t border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-normal text-slate-400"
                                >Actions</span
                            >
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(item, index) in customers.data"
                        :key="index"
                        class="hover:dark:bg-gray-1000 group transition-all duration-300 hover:bg-gray-50"
                    >
                        <td
                            class="w-12 border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <CheckBox size="sm" :id="item.id" />
                            </div>
                        </td>
                        <td
                            class="border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <router-link
                                :to="'/customer-details/' + item.id"
                                class="flex items-center"
                            >
                                <Avatar
                                    v-if="item.img"
                                    size="sm"
                                    rounded
                                    :img="item.img"
                                />
                                <Avatar
                                    v-else
                                    :variant="item.theme"
                                    size="sm"
                                    rounded
                                    :text="toInitials(item.name)"
                                />
                                <span
                                    class="ms-3 block text-xs leading-6 font-medium text-slate-700 dark:text-white"
                                >
                                    {{ item.name }}
                                    <span
                                        :class="{
                                            'ms-1 inline-block h-2 w-2 rounded-full lg:hidden': true,
                                            'bg-green-600':
                                                item.status == 'active',
                                            'bg-yellow-600':
                                                item.status == 'inactive',
                                            'bg-red-600':
                                                item.status == 'suspended',
                                        }"
                                    ></span>
                                </span>
                            </router-link>
                        </td>
                        <td
                            class="xs:table-cell hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.email
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.phone
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.company
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <Icon
                                    v-if="item.cardType === 'visa'"
                                    class="text-primary-500 w-7 text-xl"
                                    name="visa"
                                />
                                <Icon
                                    v-if="item.cardType === 'mastercard'"
                                    class="w-7 text-xl text-red-500"
                                    name="mc"
                                />
                                <Icon
                                    v-if="item.cardType === 'amex'"
                                    class="w-7 text-xl text-indigo-800"
                                    name="american-express"
                                />
                                <span class="text-sm text-slate-400">{{
                                    item.cardNumber
                                }}</span>
                            </div>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.joined
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span
                                :class="{
                                    'text-sm font-medium capitalize': true,
                                    'text-green-600': item.status == 'active',
                                    'text-yellow-600':
                                        item.status == 'inactive',
                                    'text-red-600': item.status == 'suspended',
                                }"
                                >{{ item.status }}</span
                            >
                        </td>
                        <td
                            class="max-w-[3.75rem] border-b border-gray-300 px-2 py-4 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <ul
                                class="relative -me-2 flex items-center justify-end"
                            >
                                <li
                                    class="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100"
                                >
                                    <ButtonZoom
                                        v-nk-tooltip="{
                                            content: 'Details',
                                            placement: 'top',
                                        }"
                                    >
                                        <Icon
                                            class="text-xl/4.5"
                                            name="eye-fill"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li
                                    class="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100"
                                >
                                    <ButtonZoom
                                        v-nk-tooltip="{
                                            content: 'Send Email',
                                            placement: 'top',
                                        }"
                                    >
                                        <Icon
                                            class="text-xl/4.5"
                                            name="mail-fill"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li
                                    class="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover:opacity-100"
                                >
                                    <ButtonZoom
                                        v-nk-tooltip="{
                                            content: 'Suspend',
                                            placement: 'top',
                                        }"
                                    >
                                        <Icon
                                            class="text-xl/4.5"
                                            name="cross-fill-c"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        :offset="[-14, -8]"
                                        :rtlOffset="[14, -8]"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <ButtonZoom>
                                                <Icon
                                                    class="text-xl"
                                                    name="more-h"
                                                />
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
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="eye"
                                                        />
                                                        <span
                                                            >View Details</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="mail"
                                                        />
                                                        <span>Send Mail</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="cart"
                                                        />
                                                        <span>Orders</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="na"
                                                        />
                                                        <span>Suspend</span>
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </li>
                            </ul>
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
                            <SelectChoice id="ListPagination">
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
    </Layout>
</template>
