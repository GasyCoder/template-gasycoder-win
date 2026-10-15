<script setup>
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import {
    Card,
    CardBody,
    Block,
    BlockHead,
    BlockTitle,
    BlockTitleLg,
    BlockText,
    BlockBack,
    BlockPageHead,
    BlockLeadText,
    Button,
    Dropdown,
    TextOverline,
    Icon,
} from '@/components';
</script>
<template>
    <Layout title="Dropdowns">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>List Style for Dropdown</BlockTitleLg>
                <BlockLeadText
                    >Toggle contextual overlays for displaying lists of links
                    and more with the
                    <a
                        class="text-primary-600 hover:text-primary-800"
                        target="_blank"
                        href="https://headlessui.com/v1/vue/menu"
                        >HeadlessUI Menu</a
                    >
                    component. Our exclusive link list style for dropdown that
                    give you more power.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Dropdown Variations</BlockTitle>
                    <BlockText
                        >Here some examples for dropdown previews.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <TextOverline class="mb-3">Previews</TextOverline>
                        <div class="flex flex-wrap gap-4">
                            <Dropdown
                                placement="bottom-start"
                                rtlPlacement="bottom-end"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                            >
                                >
                                <template #button>
                                    <Button size="rg" variant="light"
                                        >Dropdown</Button
                                    >
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>List Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Action</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>

                            <Dropdown
                                placement="top-start"
                                rtlPlacement="top-end"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                            >
                                >
                                <template #button>
                                    <Button size="rg" variant="light"
                                        >DropUp</Button
                                    >
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>List Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Action</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>

                            <Dropdown
                                placement="right-start"
                                rtlPlacement="left-start"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                            >
                                >
                                <template #button>
                                    <Button size="rg" variant="light"
                                        >DropEnd</Button
                                    >
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>List Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Action</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>

                            <Dropdown
                                placement="left-start"
                                rtlPlacement="right-start"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                            >
                                >
                                <template #button>
                                    <Button size="rg" variant="light"
                                        >DropStart</Button
                                    >
                                </template>
                                <template #content>
                                    <ul class="py-2">
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>List Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Another Action</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>More Action</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Dropdown List Style - General</BlockTitle>
                    <BlockText
                        >Here is few General styles for dropdown list
                        style.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <h6
                            class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                        >
                            With Border
                        </h6>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Default</TextOverline
                                >
                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>List Action</span>
                                            </a>
                                        </li>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>Another Action</span>
                                            </a>
                                        </li>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>More Action</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Selected / Actived</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul>
                                        <li
                                            class="group border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>List Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li
                                            class="group active border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>Another Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li
                                            class="group border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>More Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >With Icon</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="setting"
                                                />
                                                <span>Action Settings</span>
                                            </a>
                                        </li>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="notify"
                                                />
                                                <span>Push Notification</span>
                                            </a>
                                        </li>
                                        <li
                                            class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                        >
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="activity-alt"
                                                />
                                                <span>Login Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Preview</TextOverline
                                >
                                <div class="flex flex-wrap gap-4">
                                    <Dropdown
                                        placement="bottom-start"
                                        rtlPlacement="bottom-end"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        >
                                        <template #button>
                                            <Button size="rg" variant="light">
                                                Click Here
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="setting"
                                                        />
                                                        <span
                                                            >Action
                                                            Settings</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="notify"
                                                        />
                                                        <span
                                                            >Push
                                                            Notification</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="activity-alt"
                                                        />
                                                        <span
                                                            >Login
                                                            Activity</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        >
                                        <template #button>
                                            <Button
                                                size="rg"
                                                variant="light"
                                                icon
                                            >
                                                <Icon
                                                    class="text-xl leading-4.5"
                                                    name="more-h"
                                                />
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="setting"
                                                        />
                                                        <span
                                                            >Action
                                                            Settings</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="notify"
                                                        />
                                                        <span
                                                            >Push
                                                            Notification</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="border-t border-gray-300 first:rounded-t-md first:border-t-0 last:rounded-b-md dark:border-gray-900"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="activity-alt"
                                                        />
                                                        <span
                                                            >Login
                                                            Activity</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border border-gray-300 bg-white p-5 sm:p-6 dark:border-gray-900 dark:bg-gray-950"
                        >
                            <h6
                                class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                            >
                                Without Border
                            </h6>
                            <div class="-m-3.5 flex flex-wrap">
                                <div class="p-3.5">
                                    <TextOverline class="mb-3"
                                        >Default</TextOverline
                                    >

                                    <div
                                        class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                    >
                                        <ul class="py-2">
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>List Action</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>Another Action</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>More Action</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-3.5">
                                    <TextOverline class="mb-3"
                                        >Selected / Actived</TextOverline
                                    >

                                    <div
                                        class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                    >
                                        <ul class="py-2">
                                            <li class="group">
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>List Action</span>
                                                    <Icon
                                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li class="group active">
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>Another Action</span>
                                                    <Icon
                                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                            <li class="group">
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <span>More Action</span>
                                                    <Icon
                                                        class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                        name="check-thick"
                                                    />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-3.5">
                                    <TextOverline class="mb-3"
                                        >With Icon</TextOverline
                                    >

                                    <div
                                        class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                    >
                                        <ul class="py-2">
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <Icon
                                                        class="w-7 text-lg leading-none opacity-80"
                                                        name="setting"
                                                    />
                                                    <span>Action Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <Icon
                                                        class="w-7 text-lg leading-none opacity-80"
                                                        name="notify"
                                                    />
                                                    <span
                                                        >Push Notification</span
                                                    >
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                >
                                                    <Icon
                                                        class="w-7 text-lg leading-none opacity-80"
                                                        name="activity-alt"
                                                    />
                                                    <span>Login Activity</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-3.5">
                                    <TextOverline class="mb-3"
                                        >Preview</TextOverline
                                    >
                                    <div class="flex flex-wrap gap-4">
                                        <Dropdown
                                            placement="bottom-start"
                                            rtlPlacement="bottom-end"
                                            contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                        >
                                            <template #button>
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                >
                                                    Click Here
                                                </Button>
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
                                                                name="setting"
                                                            />
                                                            <span
                                                                >Action
                                                                Settings</span
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
                                                                name="notify"
                                                            />
                                                            <span
                                                                >Push
                                                                Notification</span
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
                                                                name="activity-alt"
                                                            />
                                                            <span
                                                                >Login
                                                                Activity</span
                                                            >
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                            </template>
                                        </Dropdown>
                                        <Dropdown
                                            placement="bottom-end"
                                            rtlPlacement="bottom-start"
                                            contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                        >
                                            <template #button>
                                                <Button
                                                    size="rg"
                                                    variant="light"
                                                    icon
                                                >
                                                    <Icon
                                                        class="text-xl leading-4.5"
                                                        name="more-h"
                                                    />
                                                </Button>
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
                                                                name="setting"
                                                            />
                                                            <span
                                                                >Action
                                                                Settings</span
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
                                                                name="notify"
                                                            />
                                                            <span
                                                                >Push
                                                                Notification</span
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
                                                                name="activity-alt"
                                                            />
                                                            <span
                                                                >Login
                                                                Activity</span
                                                            >
                                                        </MenuItem>
                                                    </li>
                                                </ul>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <Card>
                    <CardBody>
                        <h6
                            class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                        >
                            With Separator
                        </h6>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Default</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="py-2">
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>List Action</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>Another Action</span>
                                            </a>
                                        </li>
                                        <li
                                            class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                        ></li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>More Action</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Selected / Actived</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="py-2">
                                        <li class="group">
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>List Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li class="group active">
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>Another Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li
                                            class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                        ></li>
                                        <li class="group">
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>More Action</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >With Icon</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="py-2">
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="setting"
                                                />
                                                <span>Action Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="notify"
                                                />
                                                <span>Push Notification</span>
                                            </a>
                                        </li>
                                        <li
                                            class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                        ></li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none opacity-80"
                                                    name="activity-alt"
                                                />
                                                <span>Login Activity</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Preview</TextOverline
                                >
                                <div class="flex flex-wrap gap-4">
                                    <Dropdown
                                        placement="bottom-start"
                                        rtlPlacement="bottom-end"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <Button size="rg" variant="light">
                                                Click Here
                                            </Button>
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
                                                            name="setting"
                                                        />
                                                        <span
                                                            >Action
                                                            Settings</span
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
                                                            name="notify"
                                                        />
                                                        <span
                                                            >Push
                                                            Notification</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                ></li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="activity-alt"
                                                        />
                                                        <span
                                                            >Login
                                                            Activity</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <Button
                                                size="rg"
                                                variant="light"
                                                icon
                                            >
                                                <Icon
                                                    class="text-xl leading-4.5"
                                                    name="more-h"
                                                />
                                            </Button>
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
                                                            name="setting"
                                                        />
                                                        <span
                                                            >Action
                                                            Settings</span
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
                                                            name="notify"
                                                        />
                                                        <span
                                                            >Push
                                                            Notification</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                ></li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-start text-lg leading-none opacity-80"
                                                            name="activity-alt"
                                                        />
                                                        <span
                                                            >Login
                                                            Activity</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Dropdown List Style - Column</BlockTitle>
                    <BlockText
                        >Here is few Column styles for dropdown list
                        style.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <h6
                            class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Multiple Column
                        </h6>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >3 Column</TextOverline
                                >

                                <div
                                    class="max-w-[280px] min-w-[280px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="flex flex-wrap text-center">
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jan</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Feb</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Mar</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Apr</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>May</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jun</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jul</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Aug</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Sep</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Oct</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Nov</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/3 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(3n)]:border-e-0 [&:nth-last-child(-n+3)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Dec</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >4 Column</TextOverline
                                >

                                <div
                                    class="max-w-[280px] min-w-[280px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="flex flex-wrap text-center">
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jan</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Feb</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Mar</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Apr</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>May</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jun</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Jul</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Aug</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Sep</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Oct</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Nov</span>
                                            </a>
                                        </li>
                                        <li
                                            class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                        >
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Dec</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Preview</TextOverline
                                >
                                <div class="flex flex-wrap gap-4">
                                    <Dropdown
                                        placement="bottom-start"
                                        rtlPlacement="bottom-end"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[280px]"
                                    >
                                        <template #button>
                                            <Button size="rg" variant="light">
                                                Click Here
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul
                                                class="flex flex-wrap text-center"
                                            >
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jan</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Feb</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Mar</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Apr</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>May</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jun</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jul</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Aug</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Sep</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Oct</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Nov</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Dec</span>
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[280px]"
                                    >
                                        <template #button>
                                            <Button
                                                size="rg"
                                                variant="light"
                                                icon
                                            >
                                                <Icon
                                                    class="text-xl leading-4.5"
                                                    name="more-h"
                                                />
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul
                                                class="flex flex-wrap text-center"
                                            >
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jan</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Feb</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Mar</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Apr</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>May</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jun</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Jul</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Aug</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Sep</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Oct</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Nov</span>
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="w-1/4 border-e border-b border-gray-300 dark:border-gray-900 [&:nth-child(4n)]:border-e-0 [&:nth-last-child(-n+4)]:border-b-0"
                                                >
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center justify-center px-5 py-2.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                                        ><span>Dec</span>
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Dropdown List Style - Heading</BlockTitle>
                    <BlockText
                        >Here is a style for dropdown list with heading
                        style.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <h6
                            class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                        >
                            with Heading
                        </h6>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Default</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="py-2">
                                        <li>
                                            <h6
                                                class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                            >
                                                List Action
                                            </h6>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Hello Team!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Thank You!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                                ><span>Most Welcome!</span>
                                            </a>
                                        </li>
                                        <li
                                            class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                        ></li>
                                        <li>
                                            <h6
                                                class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                            >
                                                Manage
                                            </h6>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none"
                                                    name="file-plus"
                                                />
                                                <span>Save as Template</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none"
                                                    name="notes-alt"
                                                />
                                                <span>Manage Template</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Selected / Actived</TextOverline
                                >

                                <div
                                    class="min-w-[180px] rounded-md border border-gray-300 bg-white shadow dark:border-gray-900 dark:bg-gray-950"
                                >
                                    <ul class="py-2">
                                        <li>
                                            <h6
                                                class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                            >
                                                Show
                                            </h6>
                                        </li>
                                        <li class="group">
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>10 Items</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li class="group active">
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>20 Items</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li class="group">
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <span>30 Items</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
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
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none"
                                                    name="arrow-long-up"
                                                />
                                                <span>DESC</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                        <li class="group">
                                            <a
                                                class="hover:text-primary-600 hover:dark:text-primary-600 relative flex items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                href="#link"
                                                @click="
                                                    (e) => e.preventDefault()
                                                "
                                            >
                                                <Icon
                                                    class="w-7 text-lg leading-none"
                                                    name="arrow-long-down"
                                                />
                                                <span>ASC</span>
                                                <Icon
                                                    class="absolute end-4 top-1/2 hidden -translate-y-1/2 text-xs leading-none font-medium group-[.active]:block"
                                                    name="check-thick"
                                                />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-3.5">
                                <TextOverline class="mb-3"
                                    >Preview</TextOverline
                                >
                                <div class="flex flex-wrap gap-4">
                                    <Dropdown
                                        placement="bottom-start"
                                        rtlPlacement="bottom-end"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <Button size="rg" variant="light">
                                                Click Here
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul class="py-2">
                                                <li>
                                                    <h6
                                                        class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                    >
                                                        List Action
                                                    </h6>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span
                                                            >Hello Team!</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span>Thank You!</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span
                                                            >Most Welcome!</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                ></li>
                                                <li>
                                                    <h6
                                                        class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                    >
                                                        Manage
                                                    </h6>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-lg leading-none"
                                                            name="file-plus"
                                                        />
                                                        <span
                                                            >Save as
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-lg leading-none"
                                                            name="notes-alt"
                                                        />
                                                        <span
                                                            >Manage
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <Button
                                                size="rg"
                                                variant="light"
                                                icon
                                            >
                                                <Icon
                                                    class="text-xl leading-4.5"
                                                    name="more-h"
                                                />
                                            </Button>
                                        </template>
                                        <template #content>
                                            <ul class="py-2">
                                                <li>
                                                    <h6
                                                        class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                    >
                                                        List Action
                                                    </h6>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span
                                                            >Hello Team!</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span>Thank You!</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                        ><span
                                                            >Most Welcome!</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li
                                                    class="my-2 block border-t border-gray-300 dark:border-gray-900"
                                                ></li>
                                                <li>
                                                    <h6
                                                        class="relative flex items-center px-5 py-1.5 text-xs leading-5 font-bold tracking-[1px] text-slate-700 uppercase dark:text-white"
                                                    >
                                                        Manage
                                                    </h6>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-lg leading-none"
                                                            name="file-plus"
                                                        />
                                                        <span
                                                            >Save as
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-1.5 text-xs leading-5 font-normal text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-slate-900"
                                                    >
                                                        <Icon
                                                            class="w-7 text-lg leading-none"
                                                            name="notes-alt"
                                                        />
                                                        <span
                                                            >Manage
                                                            Template</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
