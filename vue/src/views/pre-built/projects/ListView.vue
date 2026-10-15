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
    Card,
    Badge,
    CheckBox,
    Avatar,
    Pagination,
    PaginationPrev,
    PaginationItem,
    PaginationDot,
    PaginationNext,
    SelectChoice,
    SelectOption,
    ProgressBar,
    Progress,
} from '@/components';
import { toInitials } from '@/utilities';
import { useProjectStore } from '@/stores/projects';
const projects = useProjectStore();
</script>

<template>
    <Layout title="Projects">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Projects</PageHeadTitle>
                <PageHeadSubTitle>You have total 95 projects.</PageHeadSubTitle>
            </PageHeadGroup>
            <PageHeadGroup>
                <PageHeadOption>
                    <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[0, 4]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <Button size="rg" variant="white-outline">
                                        <Icon
                                            class="me-3 text-xl/4.5"
                                            name="filter-alt"
                                        />
                                        <span class="me-4">Filtered By</span>
                                        <Icon
                                            class="text-xl/4.5 rtl:-scale-x-100"
                                            name="chevron-right"
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
                                                    >Last 30 Days</span
                                                ></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Last 6 Months</span
                                                ></MenuItem
                                            >
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                ><span
                                                    >Last 1 Years</span
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
                            >
                                <Icon class="text-xl/4.5" name="plus" />
                                <span class="ms-3">Add Project</span>
                            </Button>
                            <Button
                                size="rg"
                                variant="primary"
                                icon
                                class="sm:hidden"
                            >
                                <Icon class="text-xl/4.5" name="plus" />
                            </Button>
                        </li>
                    </ul>
                </PageHeadOption>
            </PageHeadGroup>
        </PageHead>
        <Card>
            <table
                class="w-full border-collapse border-gray-300 dark:border-gray-900"
            >
                <thead>
                    <tr>
                        <th
                            class="w-12 border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 sm:w-13 dark:border-gray-900"
                        >
                            <div class="flex items-center">
                                <CheckBox size="sm" id="pid-all" />
                            </div>
                        </th>
                        <th
                            class="border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Project Name</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Client</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Project Lead</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Team</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Status</span
                            >
                        </th>
                        <th
                            class="hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Progress</span
                            >
                        </th>
                        <th
                            class="xs:table-cell hidden border-b border-gray-300 px-2 py-2 text-start first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <span
                                class="block text-sm leading-relaxed font-bold text-slate-400"
                                >Deadline</span
                            >
                        </th>
                        <th
                            class="max-w-[3.75rem] border-b border-gray-300 px-2 py-2 text-end first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <Dropdown
                                class="-me-1"
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-8, -8]"
                                :rtlOffset="[8, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom size="xs">
                                        <Icon class="text-lg" name="more-h" />
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
                                                    name="check-round-cut"
                                                />
                                                <span>Mark As Done</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="archive"
                                                />
                                                <span>Mark As Archive</span>
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
                                                <span>Remove Projects</span>
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
                        v-for="(item, index) in projects.data"
                        :key="index"
                        class="hover:dark:bg-gray-1000 transition-all duration-300 hover:bg-gray-50"
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
                            <a
                                href="#link"
                                @click="(e) => e.preventDefault()"
                                class="flex items-center"
                            >
                                <Avatar
                                    size="rg"
                                    :variant="item.theme"
                                    :text="toInitials(item.title)"
                                />
                                <h6
                                    class="font-heading ms-4 mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white"
                                >
                                    {{ item.title }}
                                </h6>
                            </a>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.client
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">{{
                                item.teamLead
                            }}</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 lg:table-cell dark:border-gray-900"
                        >
                            <ul class="flex items-center gap-1.5">
                                <li
                                    v-for="(tItem, tIndex) in item.team"
                                    :key="tIndex"
                                >
                                    <Avatar
                                        v-if="tItem.img"
                                        size="sm"
                                        rounded
                                        :img="tItem.img"
                                    />
                                    <Avatar
                                        v-else
                                        :variant="tItem.theme"
                                        size="sm"
                                        rounded
                                        :text="toInitials(tItem.name)"
                                    />
                                </li>
                                <li v-if="item.teamCount > 2">
                                    <Avatar
                                        size="sm"
                                        :text="`+${item.teamCount - 2}`"
                                        variant="light"
                                        rounded
                                    />
                                </li>
                            </ul>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 2xl:table-cell dark:border-gray-900"
                        >
                            <span class="text-sm text-slate-400">Open</span>
                        </td>
                        <td
                            class="hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 md:table-cell dark:border-gray-900"
                        >
                            <div class="flex items-center gap-4">
                                <Progress class="w-[140px]">
                                    <ProgressBar :progress="item.progress" />
                                </Progress>
                                <div
                                    class="font-medium text-slate-600 dark:text-slate-300"
                                >
                                    {{ item.progress }}%
                                </div>
                            </div>
                        </td>
                        <td
                            class="xs:table-cell hidden border-b border-gray-300 px-2 py-4 first:ps-6 last:pe-6 dark:border-gray-900"
                        >
                            <Badge :variant="item.status.theme">
                                <Icon
                                    class="me-2 text-base/none"
                                    name="clock"
                                />
                                <span>{{ item.status.message }}</span>
                            </Badge>
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
                                    <ButtonZoom size="rg">
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
                                                    name="eye"
                                                />
                                                <span>View Project</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="edit"
                                                />
                                                <span>Edit Project</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="check-round-cut"
                                                />
                                                <span>Mark As Done</span>
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
                            <SelectChoice id="PageNumber">
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
        </Card>
    </Layout>
</template>
