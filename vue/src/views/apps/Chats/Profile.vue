<script setup>
import { ref } from 'vue';
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
    AvatarGroup,
    AccordionItem,
    Accordion,
    Switch,
} from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
const show = defineModel('show');
const props = defineProps({
    data: Object,
});
</script>
<template>
    <SimpleBar
        :class="{
            'conversation-profile peer !absolute end-0 top-0 z-[100] h-full max-h-full w-[325px] max-w-[calc(100%-2.5rem)] translate-x-full border-gray-200 bg-white transition-transform duration-300 ease-in-out 2xl:w-[365px] 2xl:border-s rtl:-translate-x-full dark:border-gray-800 dark:bg-gray-950 [&.visible]:translate-x-0': true,
            visible: show,
        }"
    >
        <div
            class="relative flex flex-col items-center border-b border-gray-200 p-5 text-center sm:px-6 sm:py-8 dark:border-gray-800"
        >
            <div class="absolute end-4 top-4">
                <Dropdown
                    placement="bottom-end"
                    rtlPlacement="bottom-start"
                    :offset="[-14, -8]"
                    :rtlOffset="[14, -8]"
                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                >
                    <template #button>
                        <ButtonZoom size="md">
                            <Icon
                                class="text-lg text-slate-600 dark:text-slate-300"
                                name="more-h"
                            />
                        </ButtonZoom>
                    </template>
                    <template #content>
                        <ul class="py-2">
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="eye"
                                    />
                                    <span>View Profile</span>
                                </MenuItem>
                            </li>
                            <li>
                                <MenuItem
                                    as="button"
                                    class="hover:text-primary-600 hover:dark:text-primary-600 relative flex w-full items-center px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-400 hover:dark:bg-slate-900"
                                >
                                    <Icon
                                        class="w-7 text-start text-lg leading-none opacity-80"
                                        name="na"
                                    />
                                    <span>Block Messsages</span>
                                </MenuItem>
                            </li>
                        </ul>
                    </template>
                </Dropdown>
            </div>
            <template v-if="data.user?.length > 1">
                <AvatarGroup variant="s2" size="xl">
                    <template
                        v-for="(uItem, uIndex) in data.user.slice(0, 2)"
                        :key="uIndex"
                    >
                        <Avatar v-if="uItem.image" rounded :img="uItem.image" />
                        <Avatar
                            v-else
                            :variant="uItem.theme"
                            rounded
                            :text="toInitials(uItem.name)"
                        />
                    </template>
                </AvatarGroup>
            </template>
            <template v-else>
                <Avatar v-if="data.image" size="xl" rounded :img="data.image" />
                <Avatar
                    v-else
                    size="xl"
                    :variant="data.theme"
                    rounded
                    :text="toInitials(data.name)"
                />
            </template>
            <div class="mt-4">
                <h6
                    class="font-heading leading-tighter mb-2 text-xl font-bold text-slate-700 dark:text-white"
                >
                    {{ data.name }}
                </h6>
                <span class="text-sm text-slate-400">Active 35m ago</span>
            </div>
        </div>

        <Accordion close="manual">
            <AccordionItem
                iconClass="text-sm/5 text-primary-500 font-normal"
                contentClass="pt-0 pb-6 lg:px-7"
                buttonClass="py-5 lg:px-7 group-[.active]:border-b-0"
                active
            >
                <template #button>
                    <h6
                        class="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase"
                    >
                        Options
                    </h6>
                </template>
                <template #content>
                    <ul class="-m-1">
                        <li class="p-1">
                            <a
                                class="group/chatoption flex items-center"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <div
                                    class="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white"
                                >
                                    <Icon
                                        class="text-base/none"
                                        name="edit-alt"
                                    ></Icon>
                                </div>
                                <div
                                    class="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white"
                                >
                                    Nickname
                                </div>
                            </a>
                        </li>
                        <li class="p-1">
                            <a
                                class="group/chatoption chat-search-toggle flex items-center"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <div
                                    class="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white"
                                >
                                    <Icon
                                        class="text-base/none"
                                        name="search"
                                    ></Icon>
                                </div>
                                <div
                                    class="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white"
                                >
                                    Search In Conversation
                                </div>
                            </a>
                        </li>
                        <li class="p-1">
                            <a
                                class="group/chatoption flex items-center"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <div
                                    class="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white"
                                >
                                    <Icon
                                        class="text-base/none"
                                        name="circle-fill"
                                    ></Icon>
                                </div>
                                <div
                                    class="ms-3 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-300 group-hover/chatoption:dark:text-white"
                                >
                                    Change Theme
                                </div>
                            </a>
                        </li>
                    </ul>
                </template>
            </AccordionItem>
            <AccordionItem
                iconClass="text-sm/5 text-primary-500 font-normal"
                contentClass="pt-0 pb-6 lg:px-7"
                buttonClass="py-5 lg:px-7 group-[.active]:border-b-0"
            >
                <template #button>
                    <h6
                        class="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase"
                    >
                        Settings
                    </h6>
                </template>
                <template #content>
                    <ul class="-m-2">
                        <li class="inline-flex p-2">
                            <Switch
                                type="checkbox"
                                size="sm"
                                id="notifications"
                                labelClass="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 !text-sm/4 font-bold ps-3 cursor-pointer inline-block"
                                >Notifications</Switch
                            >
                        </li>
                        <li class="p-2">
                            <a
                                class="group/chatoption flex items-center"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <div
                                    class="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white"
                                >
                                    <Icon
                                        class="text-base/none"
                                        name="bell-off-fill"
                                    ></Icon>
                                </div>
                                <div class="ms-3">
                                    <div
                                        class="mb-0.5 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-200 group-hover/chatoption:dark:text-white"
                                    >
                                        Ignore Messages
                                    </div>
                                    <div class="text-xs text-slate-400">
                                        You won’t be notified when message you.
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="p-2">
                            <a
                                class="group/chatoption flex items-center"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <div
                                    class="relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-gray-200 text-xs font-medium text-gray-600 dark:bg-gray-900 dark:text-white"
                                >
                                    <Icon
                                        class="text-base/none"
                                        name="alert-fill"
                                    ></Icon>
                                </div>
                                <div class="ms-3">
                                    <div
                                        class="mb-0.5 text-sm font-bold text-slate-600 transition-all duration-300 group-hover/chatoption:text-slate-800 dark:text-slate-200 group-hover/chatoption:dark:text-white"
                                    >
                                        Something Wrong
                                    </div>
                                    <div class="text-xs text-slate-400">
                                        Give feedback and report conversion.
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </template>
            </AccordionItem>
            <AccordionItem
                iconClass="text-sm/5 text-primary-500 font-normal"
                contentClass="pt-0 pb-6 lg:px-7"
                buttonClass="py-5 lg:px-7 group-[.active]:border-b-0"
            >
                <template #button>
                    <h6
                        class="text-xxs/4 tracking-relaxed pt-0.5 font-bold text-slate-400 uppercase"
                    >
                        Shared Photos
                    </h6>
                </template>
                <template #content>
                    <ul class="-m-1 flex flex-wrap">
                        <li class="inline-flex w-1/3 p-1">
                            <a
                                class="inline-block"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <img
                                    class="rounded"
                                    src="/images/slides/slide-a.jpg"
                                    alt=""
                                />
                            </a>
                        </li>
                        <li class="inline-flex w-1/3 p-1">
                            <a
                                class="inline-block"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <img
                                    class="rounded"
                                    src="/images/slides/slide-b.jpg"
                                    alt=""
                                />
                            </a>
                        </li>
                        <li class="inline-flex w-1/3 p-1">
                            <a
                                class="inline-block"
                                href="#link"
                                @click="(e) => e.preventDefault()"
                            >
                                <img
                                    class="rounded"
                                    src="/images/slides/slide-c.jpg"
                                    alt=""
                                />
                            </a>
                        </li>
                    </ul>
                </template>
            </AccordionItem>
        </Accordion>
    </SimpleBar>
    <div
        @click="
            () => {
                show = false;
            }
        "
        class="profile-toggle bg-opacity-20 invisible absolute inset-0 z-[99] bg-slate-950 opacity-0 peer-[.visible]:visible peer-[.visible]:opacity-100 2xl:!invisible 2xl:!opacity-0"
    ></div>
</template>
