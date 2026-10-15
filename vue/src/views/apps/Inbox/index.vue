<script setup>
import { ref, watch, onMounted } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    Avatar,
    Button,
    ButtonZoom,
    Icon,
    Dropdown,
    CheckBox,
    Badge,
    ButtonGroup,
} from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import Aside from './Aside.vue';
import ReplyForm from './ReplyForm.vue';
import { useInboxStore } from '@/stores/inbox';
const inboxs = useInboxStore();

const pageAside = ref(false);
const showSearch = ref(false);
const showMessage = ref(null);

const message = ref(null);

function selectMessage(selected) {
    return inboxs.data.filter((message) => message.id == selected)[0];
}

onMounted(() => {
    message.value = selectMessage(showMessage.value);

    const handleAside = () => {
        if (window.innerWidth > 1023) {
            pageAside.value = false;
        }
    };

    handleAside();
    window.addEventListener('resize', handleAside);
});

watch(
    () => showMessage.value,
    () => {
        message.value = selectMessage(showMessage.value);
    },
);
</script>

<template>
    <Layout title="Inbox / Mails">
        <div
            class="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <Aside v-model:show="pageAside"> </Aside>
            <div
                class="relative flex flex-shrink flex-grow flex-col overflow-hidden bg-white dark:bg-gray-950"
            >
                <div
                    class="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800"
                >
                    <ul class="flex items-center gap-0.75">
                        <li class="w-8 text-start">
                            <div class="flex">
                                <CheckBox size="sm" id="mid-all" />
                            </div>
                        </li>
                        <li class="hidden sm:block">
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-xl text-slate-600"
                                    name="undo"
                                />
                            </ButtonZoom>
                        </li>
                        <li class="hidden sm:block">
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-xl text-slate-600"
                                    name="archived"
                                />
                            </ButtonZoom>
                        </li>
                        <li>
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-xl text-slate-600"
                                    name="trash"
                                />
                            </ButtonZoom>
                        </li>
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[140px]"
                            >
                                <template #button>
                                    <ButtonZoom size="rg">
                                        <Icon
                                            class="text-xl/4.5 text-slate-600"
                                            name="more-v"
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
                                                <span>Move To</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg leading-none opacity-80"
                                                    name="trash"
                                                />
                                                <span>Delete</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg leading-none opacity-80"
                                                    name="archived"
                                                />
                                                <span>Archive</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                    </ul>
                    <ul class="flex items-center gap-0.75">
                        <li>
                            <ButtonZoom
                                v-nk-tooltip="{
                                    placement: 'top',
                                    content: 'Prev Page',
                                }"
                                size="rg"
                            >
                                <Icon
                                    class="text-xl text-slate-600 rtl:-scale-x-100"
                                    name="arrow-left"
                                />
                            </ButtonZoom>
                        </li>
                        <li>
                            <ButtonZoom
                                v-nk-tooltip="{
                                    placement: 'top',
                                    content: 'Next Page',
                                }"
                                size="rg"
                            >
                                <Icon
                                    class="text-xl text-slate-600 rtl:-scale-x-100"
                                    name="arrow-right"
                                />
                            </ButtonZoom>
                        </li>
                        <li class="lg:-me-1.5">
                            <ButtonZoom
                                @click="() => (showSearch = !showSearch)"
                                size="rg"
                            >
                                <Icon
                                    class="text-xl text-slate-600"
                                    name="search"
                                />
                            </ButtonZoom>
                        </li>
                        <li class="-me-1.5 lg:hidden">
                            <ButtonZoom
                                @click="() => (pageAside = !pageAside)"
                                size="rg"
                            >
                                <Icon
                                    class="text-xl text-slate-600"
                                    name="menu-alt-r"
                                />
                            </ButtonZoom>
                        </li>
                    </ul>
                    <div
                        :class="{
                            'invisible absolute inset-0 -bottom-px z-[800] flex items-center border-b border-gray-200 bg-white opacity-0 transition-all duration-300 sm:rounded-t dark:border-gray-800 dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100': true,
                            active: showSearch,
                        }"
                        id="searchForm"
                    >
                        <div
                            class="flex w-full items-center px-4 sm:px-7 lg:px-6"
                        >
                            <button
                                @click="() => (showSearch = false)"
                                class="class-toggle relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                            >
                                <em
                                    class="ni ni-arrow-left text-xl leading-6 rtl:-scale-x-100"
                                ></em>
                            </button>
                            <input
                                type="text"
                                class="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                placeholder="Search by user or message"
                                autoComplete="off"
                            />
                            <button
                                type="submit"
                                class="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                            >
                                <em class="ni ni-search text-xl leading-6"></em>
                            </button>
                        </div>
                    </div>
                </div>
                <SimpleBar
                    class="flex h-full max-h-full flex-col overflow-auto"
                >
                    <div
                        v-for="(item, index) in inboxs.data"
                        :key="index"
                        :class="{
                            'group/ibxitem hover:dark:bg-gray-1000 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100 relative flex cursor-pointer items-center border-b border-gray-200 bg-white px-5 py-4 transition-all last:border-b-0 hover:bg-gray-50 max-md:flex-wrap sm:px-9 lg:px-7 dark:border-gray-800 dark:bg-gray-950 [&.is-unread]:bg-gray-50': true,
                            'is-unread': item.unread,
                        }"
                    >
                        <button
                            @click="() => (showMessage = item.id)"
                            class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"
                        ></button>
                        <div
                            class="relative z-[2] inline-flex w-7 flex-shrink-0 pe-1 md:pe-2"
                        >
                            <div class="flex">
                                <CheckBox size="sm" id="{item.id}" />
                            </div>
                        </div>
                        <div
                            class="relative z-[2] flex-shrink-0 px-1 max-md:absolute max-md:start-7.5 max-md:top-13 max-sm:start-3.5 md:px-2"
                        >
                            <div
                                :class="{
                                    'group/asterisk relative inline-flex cursor-pointer': true,
                                    active: item.favourite,
                                }"
                            >
                                <Icon
                                    class="text-lg/none text-slate-400"
                                    name="star"
                                />
                                <Icon
                                    class="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"
                                    name="star-fill"
                                />
                            </div>
                        </div>
                        <div
                            class="flex-shrink-0 px-1 max-md:flex-grow max-md:pe-20 md:w-[180px] md:px-2 xl:w-[200px]"
                        >
                            <div class="flex items-center">
                                <Avatar
                                    v-if="item.user.image"
                                    size="rg"
                                    rounded
                                    :img="item.user.image"
                                />
                                <Avatar
                                    v-else
                                    size="rg"
                                    :variant="item.user.theme"
                                    rounded
                                    :text="toInitials(item.user.name)"
                                />
                                <div class="ms-4">
                                    <span
                                        class="block text-sm leading-6 font-normal text-slate-700 group-[.is-unread]/ibxitem:font-medium dark:text-white"
                                        >{{ item.user.name }}</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-full max-w-full flex-shrink flex-grow overflow-hidden px-1 max-md:mt-1.5 max-md:ps-8 max-md:pe-12 md:px-2"
                        >
                            <div class="flex items-center">
                                <div
                                    v-if="item.badge"
                                    class="me-3 max-md:hidden"
                                >
                                    <Badge
                                        size="rg"
                                        :variant="item.badge.theme"
                                        >{{ item.badge.text }}</Badge
                                    >
                                </div>
                                <div
                                    class="overflow-hidden text-ellipsis whitespace-nowrap"
                                >
                                    <span class="inline text-slate-400">
                                        <span
                                            class="me-0.5 text-slate-600 group-[.is-unread]/ibxitem:font-medium max-md:block dark:text-slate-400"
                                            >{{ item.message.subject }}</span
                                        >
                                        {{ item.message.excerpt }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-9 flex-shrink-0 px-1 text-center max-md:hidden md:px-2"
                        >
                            <a v-if="item.attachment" class="text-slate-500">
                                <Icon class="text-lg/none" name="clip-h"
                            /></a>
                        </div>
                        <div
                            class="w-20 flex-shrink-0 px-1 text-end max-md:absolute max-md:end-7.5 max-md:top-5 max-sm:end-3.5 md:px-2 xl:me-8"
                        >
                            <div class="text-sm text-slate-400">
                                {{ item.time }}
                            </div>
                        </div>
                        <div
                            class="relative ms-auto w-8 flex-shrink-0 flex-grow-0 ps-1 max-md:absolute max-md:end-6.5 max-md:bottom-5 max-sm:end-3 md:ps-2"
                        >
                            <ul
                                class="relative flex items-center justify-end md:-me-2"
                            >
                                <li
                                    class="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover/ibxitem:opacity-100"
                                >
                                    <ButtonZoom
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Archive',
                                        }"
                                        size="sm"
                                    >
                                        <Icon
                                            class="text-base/4.5"
                                            name="archived"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li
                                    class="dark:bg-gray-1000 bg-gray-50 px-0.5 opacity-0 transition-all duration-300 group-hover/ibxitem:opacity-100"
                                >
                                    <ButtonZoom
                                        v-nk-tooltip="{
                                            placement: 'top',
                                            content: 'Delete',
                                        }"
                                        size="sm"
                                    >
                                        <Icon
                                            class="text-base/4.5"
                                            name="trash"
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
                                            <ButtonZoom size="sm" class="z-[1]">
                                                <Icon
                                                    class="text-base/4.5"
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
                                                        <span>View</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="trash"
                                                        />
                                                        <span>Delete</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="archived"
                                                        />
                                                        <span>Archive</span>
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </li>
                            </ul>
                        </div>
                    </div>
                </SimpleBar>
                <div
                    v-if="message"
                    id="ibxDetails"
                    :class="{
                        'pointer-events-none invisible absolute inset-0 z-[2] flex flex-col overflow-hidden bg-white opacity-0 dark:bg-gray-950 [&.active]:pointer-events-auto [&.active]:visible [&.active]:opacity-100': true,
                        active: showMessage !== null,
                    }"
                >
                    <div
                        class="relative flex min-h-[61px] items-center justify-between border-b border-gray-200 px-5 py-3 sm:px-9 lg:px-7 dark:border-gray-800"
                    >
                        <ul class="flex items-center gap-0.75">
                            <li class="-ms-1.5">
                                <ButtonZoom
                                    size="rg"
                                    @click="() => (showMessage = null)"
                                >
                                    <Icon
                                        class="text-xl text-slate-600 rtl:-scale-x-100"
                                        name="arrow-left"
                                    />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom size="rg">
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="archived"
                                    />
                                </ButtonZoom>
                            </li>
                            <li class="hidden sm:block">
                                <ButtonZoom size="rg">
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="report"
                                    />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom size="rg">
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="trash"
                                    />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom size="rg">
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="label"
                                    />
                                </ButtonZoom>
                            </li>
                            <li>
                                <Dropdown
                                    class="ms-auto -me-2"
                                    placement="bottom-end"
                                    rtlPlacement="bottom-start"
                                    :offset="[-14, -8]"
                                    :rtlOffset="[14, -8]"
                                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                >
                                    <template #button>
                                        <ButtonZoom size="rg">
                                            <Icon
                                                class="text-xl/4.5 text-slate-600"
                                                name="more-v"
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
                                                    <span>Mark as unread</span>
                                                </MenuItem>
                                            </li>
                                            <li>
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <span
                                                        >Mark as not
                                                        important</span
                                                    >
                                                </MenuItem>
                                            </li>
                                            <li>
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <span
                                                        >Archive this
                                                        message</span
                                                    >
                                                </MenuItem>
                                            </li>
                                        </ul>
                                    </template>
                                </Dropdown>
                            </li>
                        </ul>
                        <ul class="flex items-center gap-0.75">
                            <li>
                                <ButtonZoom
                                    v-nk-tooltip="{
                                        placement: 'top',
                                        content: 'Prev Page',
                                    }"
                                    size="rg"
                                >
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="chevron-left"
                                    />
                                </ButtonZoom>
                            </li>
                            <li>
                                <ButtonZoom
                                    v-nk-tooltip="{
                                        placement: 'top',
                                        content: 'Next Page',
                                    }"
                                    size="rg"
                                >
                                    <Icon
                                        class="text-xl text-slate-600 rtl:-scale-x-100"
                                        name="chevron-right"
                                    />
                                </ButtonZoom>
                            </li>
                            <li class="-me-1.5">
                                <ButtonZoom
                                    @click="() => (showSearch = !showSearch)"
                                    size="rg"
                                >
                                    <Icon
                                        class="text-xl text-slate-600"
                                        name="search"
                                    />
                                </ButtonZoom>
                            </li>
                        </ul>
                        <div
                            :class="{
                                'invisible absolute inset-0 -bottom-px z-100 flex items-center border-b border-gray-200 bg-white opacity-0 transition-all duration-300 sm:rounded-t dark:border-gray-800 dark:bg-gray-950 [&.active]:visible [&.active]:opacity-100': true,
                                active: showSearch,
                            }"
                            id="searchFormMessage"
                        >
                            <div
                                class="flex w-full items-center px-4 sm:px-7 lg:px-6"
                            >
                                <button
                                    @click="() => (showSearch = false)"
                                    class="class-toggle relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <em
                                        class="ni ni-arrow-left text-xl leading-6 rtl:-scale-x-100"
                                    ></em>
                                </button>
                                <input
                                    type="text"
                                    class="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Search by user or message"
                                    autoComplete="off"
                                />
                                <button
                                    type="submit"
                                    class="hover:text-primary-600 relative inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <em
                                        class="ni ni-search text-xl leading-6"
                                    ></em>
                                </button>
                            </div>
                        </div>
                    </div>
                    <SimpleBar class="h-full max-h-full overflow-auto">
                        <div
                            class="flex items-start justify-between px-5 pt-6 pb-8 sm:px-9 sm:pt-7 lg:px-7"
                        >
                            <div>
                                <h4
                                    class="font-heading leading-tighter mb-3 text-xl font-bold tracking-tight text-slate-700 lg:text-2xl dark:text-white"
                                >
                                    {{ message.message.subject }}
                                </h4>
                                <ul class="flex flex-wrap gap-2">
                                    <li class="inline-flex">
                                        <ButtonGroup>
                                            <Button
                                                variant="primary-pale"
                                                size="xs"
                                                >Business</Button
                                            >
                                            <Button
                                                variant="primary-pale"
                                                size="xs"
                                                icon
                                                ><Icon
                                                    class="text-xs leading-4.5"
                                                    name="cross"
                                            /></Button>
                                        </ButtonGroup>
                                    </li>
                                    <li class="inline-flex">
                                        <ButtonGroup>
                                            <Button variant="red-pale" size="xs"
                                                >Management</Button
                                            >
                                            <Button
                                                variant="red-pale"
                                                size="xs"
                                                icon
                                                ><Icon
                                                    class="text-xs leading-4.5"
                                                    name="cross"
                                            /></Button>
                                        </ButtonGroup>
                                    </li>
                                    <li class="inline-flex">
                                        <ButtonGroup>
                                            <Button
                                                variant="cyan-pale"
                                                size="xs"
                                                >Team</Button
                                            >
                                            <Button
                                                variant="cyan-pale"
                                                size="xs"
                                                icon
                                                ><Icon
                                                    class="text-xs leading-4.5"
                                                    name="cross"
                                            /></Button>
                                        </ButtonGroup>
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex items-center gap-1.5">
                                <li class="hidden sm:block">
                                    <ButtonZoom size="rg">
                                        <Icon
                                            class="text-xl text-slate-600"
                                            name="printer"
                                        />
                                    </ButtonZoom>
                                </li>
                                <li>
                                    <ButtonZoom
                                        size="rg"
                                        class="group/asterisk-button"
                                    >
                                        <div
                                            :class="{
                                                'group/asterisk relative inline-flex cursor-pointer': true,
                                                active: message.favourite,
                                            }"
                                        >
                                            <Icon
                                                class="text-lg/none text-slate-400"
                                                name="star"
                                            />
                                            <Icon
                                                class="absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-hover/asterisk-button:opacity-100 group-[.active]/asterisk:opacity-100 group-[.active]/asterisk-button:opacity-100"
                                                name="star-fill"
                                            />
                                        </div>
                                    </ButtonZoom>
                                </li>
                            </ul>
                        </div>
                        <div class="relative">
                            <div
                                v-for="(item, index) in message.message.reply"
                                :key="index"
                                class="relative px-5 pb-8 after:absolute after:inset-x-5 after:bottom-4 after:h-px after:bg-gray-200 last:after:hidden sm:px-9 sm:pb-11 sm:after:inset-x-9 sm:after:bottom-5.5 lg:px-7 after:dark:bg-gray-900"
                            >
                                <div
                                    class="peer group/replyheader mb-2 flex cursor-pointer items-center justify-between gap-x-4"
                                    id="reply-01"
                                >
                                    <div
                                        class="flex flex-grow items-center group-[.is-collapsed]/replyheader:overflow-hidden"
                                    >
                                        <Avatar
                                            v-if="item.user.image"
                                            size="rg"
                                            rounded
                                            :img="item.user.image"
                                        />
                                        <Avatar
                                            v-else
                                            size="rg"
                                            :variant="item.user.theme"
                                            rounded
                                            :text="toInitials(item.user.name)"
                                        />
                                        <div
                                            class="ms-4 max-w-[calc(100%-theme(spacing.14))]"
                                        >
                                            <div
                                                class="text-sm/6 font-bold text-slate-700 dark:text-white"
                                            >
                                                {{ item.user.name }}
                                                <span
                                                    class="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden"
                                                    >14 Jan, 2020</span
                                                >
                                            </div>
                                            <Dropdown
                                                placement="bottom-end"
                                                rtlPlacement="bottom-start"
                                                :offset="[0, 4]"
                                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[240px] sm:min-w-[280px]"
                                            >
                                                <template #button>
                                                    <button
                                                        class="dropdown-toggle peer relative z-[1] inline-flex items-center *:pointer-events-none"
                                                    >
                                                        <span>to Mildred</span>
                                                        <Icon
                                                            class="ms-1 text-sm leading-none"
                                                            name="chevron-down"
                                                        />
                                                    </button>
                                                </template>
                                                <template #content>
                                                    <ul class="p-3">
                                                        <li
                                                            class="flex py-0.75 leading-4.5"
                                                        >
                                                            <span
                                                                class="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19"
                                                                >from:</span
                                                            >
                                                            <span
                                                                class="text-sm/4.5"
                                                                ><a
                                                                    class="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                                                    href="#link"
                                                                    @click="
                                                                        (e) =>
                                                                            e.preventDefault()
                                                                    "
                                                                    >info@softnio.com</a
                                                                ></span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex py-0.75 leading-4.5"
                                                        >
                                                            <span
                                                                class="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19"
                                                                >to:</span
                                                            >
                                                            <span
                                                                class="text-sm/4.5"
                                                                ><a
                                                                    class="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                                                    href="#link"
                                                                    @click="
                                                                        (e) =>
                                                                            e.preventDefault()
                                                                    "
                                                                    >team@softnio.com</a
                                                                ></span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex py-0.75 leading-4.5"
                                                        >
                                                            <span
                                                                class="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19"
                                                                >bcc:</span
                                                            >
                                                            <span
                                                                class="text-sm/4.5"
                                                                ><a
                                                                    class="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                                                    href="#link"
                                                                    @click="
                                                                        (e) =>
                                                                            e.preventDefault()
                                                                    "
                                                                    >team@softnio.com</a
                                                                ></span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex py-0.75 leading-4.5"
                                                        >
                                                            <span
                                                                class="me-3 w-17 text-end text-xs/4.5 text-slate-400 sm:w-19"
                                                                >mailed-by:</span
                                                            >
                                                            <span
                                                                class="text-sm/4.5"
                                                                ><a
                                                                    class="hover:text-primary-600 text-slate-700 transition-all dark:text-white"
                                                                    href="#link"
                                                                    @click="
                                                                        (e) =>
                                                                            e.preventDefault()
                                                                    "
                                                                    >softnio.com</a
                                                                ></span
                                                            >
                                                        </li>
                                                    </ul>
                                                </template>
                                            </Dropdown>
                                            <div
                                                class="hidden overflow-hidden text-xs leading-6 text-ellipsis whitespace-nowrap text-slate-600 group-[.is-collapsed]/replyheader:block max-sm:mt-0.5 sm:text-sm"
                                            >
                                                I am facing problem as i can not
                                                select currency on buy order
                                                page. Can you guys let me know
                                                what i am doing doing wrong?
                                                Please check attached files.
                                            </div>
                                        </div>
                                    </div>
                                    <ul
                                        class="-me-2 flex flex-shrink-0 cursor-default items-center gap-1.5"
                                    >
                                        <li
                                            v-if="item.attachment"
                                            class="me-1.5 max-sm:hidden"
                                        >
                                            <Icon
                                                class="text-xl/none"
                                                name="clip-h"
                                            />
                                        </li>
                                        <li class="max-sm:hidden">
                                            <span class="me-4 text-slate-600">{{
                                                item.date
                                            }}</span>
                                        </li>
                                        <li
                                            class="relative group-[.is-collapsed]/replyheader:hidden"
                                        >
                                            <ButtonZoom
                                                v-nk-tooltip="{
                                                    placement: 'top',
                                                    content: 'Reply',
                                                }"
                                                size="rg"
                                            >
                                                <Icon
                                                    class="text-xl text-slate-600"
                                                    name="curve-up-left"
                                                />
                                            </ButtonZoom>
                                        </li>
                                        <li
                                            class="dropdown relative group-[.is-collapsed]/replyheader:hidden"
                                        >
                                            <Dropdown
                                                class="ms-auto -me-2"
                                                placement="bottom-end"
                                                rtlPlacement="bottom-start"
                                                :offset="[-14, -8]"
                                                :rtlOffset="[14, -8]"
                                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                            >
                                                <template #button>
                                                    <ButtonZoom size="rg">
                                                        <Icon
                                                            class="text-xl/4.5 text-slate-400 dark:text-slate-300"
                                                            name="more-v"
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
                                                                    name="reply-fill"
                                                                />
                                                                <span
                                                                    >Reply
                                                                    to</span
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
                                                                    name="forward-arrow-fill"
                                                                />
                                                                <span
                                                                    >Forward</span
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
                                                                    name="trash-fill"
                                                                />
                                                                <span
                                                                    >Delete
                                                                    this</span
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
                                                                    name="report-fill"
                                                                />
                                                                <span
                                                                    >Report
                                                                    Spam</span
                                                                >
                                                            </MenuItem>
                                                        </li>
                                                    </ul>
                                                </template>
                                            </Dropdown>
                                        </li>
                                    </ul>
                                </div>
                                <div
                                    class="ms-12 mt-5 mb-3 peer-[.is-collapsed]:hidden sm:ms-14"
                                >
                                    <div class="entry">
                                        <p
                                            v-for="(
                                                item, index
                                            ) in item.message"
                                            :key="index"
                                        >
                                            {{ item }}
                                        </p>
                                    </div>
                                    <div
                                        v-if="item.attachment"
                                        class="mt-7 rounded border border-gray-200 dark:border-gray-800"
                                    >
                                        <ul
                                            class="flex flex-wrap gap-x-8 gap-y-2 px-5 py-4"
                                        >
                                            <li
                                                v-for="(
                                                    aItem, aIndex
                                                ) in item.attachment"
                                                :key="aIndex"
                                                class="w-[180px]"
                                            >
                                                <a
                                                    class="flex w-full items-center text-slate-600 dark:text-slate-300"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                    ><em
                                                        class="text-primary-600 ni ni-img me-4 text-2xl/none"
                                                    ></em
                                                    ><span
                                                        class="line-clamp-1"
                                                        >{{ aItem.name }}</span
                                                    ></a
                                                >
                                            </li>
                                        </ul>
                                        <div
                                            class="flex flex-wrap justify-between rounded-b border-t border-gray-200 bg-gray-50 px-5 py-3 dark:border-gray-800 dark:bg-gray-900"
                                        >
                                            <span
                                                class="text-sm font-medium text-slate-700 dark:text-white"
                                                >{{
                                                    item.attachment.length
                                                }}
                                                files attached</span
                                            >
                                            <a
                                                class="group/link inline-flex items-center gap-3.5 text-sm/none font-medium whitespace-nowrap"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <em
                                                    class="text-primary-500 group-hover/link:text-primary-600 ni ni-download text-lg/none transition-all duration-300"
                                                ></em>
                                                <span
                                                    class="group-hover/link:text-primary-600 text-slate-400 transition-all duration-300"
                                                    >Download All</span
                                                >
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ReplyForm />
                    </SimpleBar>
                </div>
            </div>
        </div>
    </Layout>
</template>
