<script setup>
import Layout from '@/layout/Main.vue';
import { MenuItem } from '@headlessui/vue';
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
    <Layout title="Project Card">
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
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div
                v-for="(item, index) in projects.data"
                :key="index"
                class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3"
            >
                <div
                    class="h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                >
                    <div class="p-5 sm:p-6">
                        <div
                            class="mb-5 flex items-start justify-between gap-x-3"
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
                                <div class="ms-4 flex flex-col">
                                    <h6
                                        class="font-heading mb-0.5 text-base leading-5 font-bold text-slate-700 dark:text-white"
                                    >
                                        {{ item.title }}
                                    </h6>
                                    <span
                                        class="text-sm leading-4 text-slate-400"
                                        >{{ item.client }}</span
                                    >
                                </div>
                            </a>
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
                        </div>
                        <div class="mb-4">
                            <p>{{ item.description }}</p>
                        </div>
                        <div class="mb-4">
                            <div class="mb-2 flex justify-between">
                                <div class="flex items-center text-slate-400">
                                    <Icon
                                        class="me-2 text-base/6"
                                        name="check-round-cut"
                                    />
                                    <span>{{ item.tasks }} Tasks</span>
                                </div>
                                <div
                                    class="font-medium text-slate-600 dark:text-slate-300"
                                >
                                    {{ item.progress }} %
                                </div>
                            </div>
                            <Progress>
                                <ProgressBar :progress="item.progress" />
                            </Progress>
                        </div>
                        <div class="flex items-center justify-between">
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
                            <Badge :variant="item.status.theme">
                                <Icon
                                    class="me-2 text-base/none"
                                    name="clock"
                                />
                                <span>{{ item.status.message }}</span>
                            </Badge>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
