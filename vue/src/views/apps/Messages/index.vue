<script setup>
import { ref, watch, onMounted } from 'vue';
import { MenuItem } from '@headlessui/vue';
import Layout from '@/layout/Main.vue';
import { Avatar, Button, ButtonZoom, Icon, Dropdown } from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import Profile from './Profile.vue';
import ReplyForm from './ReplyForm.vue';
import ReplyMessages from './ReplyMessages.vue';
import { useMessageStore } from '@/stores/messages';
const messages = useMessageStore();

const showProfile = ref(true);
const showSearch = ref(false);
const showMessage = ref('1');

const message = ref(null);

function selectMessage(selected) {
    return messages.data.filter((message) => message.id == selected)[0];
}

onMounted(() => {
    message.value = selectMessage(showMessage.value);

    const handleAside = () => {
        if (window.innerWidth < 1536) {
            showProfile.value = false;
        } else {
            showProfile.value = true;
        }
    };

    handleAside();
    window.addEventListener('resize', handleAside);
    return () => {
        window.removeEventListener('resize', handleAside);
    };
});

watch(
    () => showMessage.value,
    () => {
        message.value = selectMessage(showMessage.value);
    },
);
</script>

<template>
    <Layout title="Messages - Support Ticket">
        <div
            class="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <div
                class="bg-opacity-70 relative flex max-h-full w-full flex-shrink-0 flex-col overflow-hidden rounded-s bg-slate-50 lg:w-[320px] lg:border-e lg:border-gray-200 2xl:w-[380px] dark:border-gray-800 dark:bg-gray-900"
            >
                <TabGroup>
                    <div
                        class="relative z-[2] rounded-ss border-b border-gray-200 bg-slate-50 px-5 sm:px-8 lg:px-7 dark:border-gray-800 dark:bg-slate-900"
                    >
                        <TabList as="ul" class="-mx-3 flex">
                            <li class="group/navitem px-3">
                                <Tab
                                    class="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    >Active</Tab
                                >
                            </li>
                            <li class="group/navitem px-3">
                                <Tab
                                    class="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    >Closed</Tab
                                >
                            </li>
                            <li class="group/navitem px-3">
                                <Tab
                                    class="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    >Stared</Tab
                                >
                            </li>
                            <li class="group/navitem px-3">
                                <Tab
                                    class="hover:text-primary-600 ui-selected:text-primary-600 after:bg-primary-600 ui-selected:after:opacity-100 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 outline-none after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300"
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    >All</Tab
                                >
                            </li>
                            <li class="group/navitem ms-auto px-3">
                                <button
                                    @click="
                                        () => {
                                            showSearch = true;
                                        }
                                    "
                                    class="hover:text-primary-600 group-[.active]/navitem:text-primary-600 after:bg-primary-600 relative inline-flex py-4 text-sm/6 font-medium text-slate-400 transition-all duration-300 after:absolute after:start-0 after:end-0 after:-bottom-px after:h-0.5 after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100"
                                >
                                    <Icon
                                        class="text-lg leading-6"
                                        name="search"
                                    />
                                </button>
                            </li>
                        </TabList>
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
                                    @click="
                                        () => {
                                            showSearch = false;
                                        }
                                    "
                                    class="relative -ms-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <Icon
                                        class="text-lg/6 rtl:-scale-x-100"
                                        name="arrow-left"
                                    />
                                </button>
                                <input
                                    type="text"
                                    class="box-border block h-9 w-full flex-grow rounded border-0 bg-white px-2 py-1.5 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                    placeholder="Search by user or message"
                                    autoComplete="off"
                                />
                                <button
                                    type="submit"
                                    class="hover:text-primary-600 relative -me-px inline-flex h-9 w-9 items-center justify-center rounded text-center align-middle text-sm leading-4.5 font-bold text-slate-600 transition-all duration-300"
                                >
                                    <Icon class="text-lg/6" name="search" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <SimpleBar class="h-full max-h-full overflow-auto">
                        <div
                            v-for="(item, index) in messages.data"
                            @click="
                                () => {
                                    showMessage = item.id;
                                }
                            "
                            :key="index"
                            :class="{
                                'group/messageitem conversation-item flex cursor-pointer border-b border-gray-200 px-5 py-5 last:border-b-0 sm:px-8 lg:px-7 dark:border-gray-800 [&.current]:cursor-default [&.current]:bg-white [&.current]:dark:bg-gray-950': true,
                                'is-unread': item.unread,
                                current: showMessage == item.id,
                            }"
                        >
                            <Avatar
                                v-if="item.image"
                                size="rg"
                                rounded
                                :img="item.image"
                            />
                            <Avatar
                                v-else
                                size="rg"
                                :variant="item.theme"
                                rounded
                                :text="toInitials(item.name)"
                            />
                            <div
                                class="max-w-(calc(100%-theme(spacing.15))) ms-3 flex-grow"
                            >
                                <div class="flex items-center justify-between">
                                    <div
                                        class="inline-flex items-center text-xs/5 text-slate-400 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white"
                                    >
                                        <span>{{ item.name }}</span>
                                        <div
                                            v-if="item.closed"
                                            class="ms-1 inline-block h-1.5 w-1.5 rounded-full bg-pink-400"
                                        ></div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-xs text-slate-400"
                                    >
                                        <div
                                            v-if="item.attactchment"
                                            class="inline-flex"
                                        >
                                            <em
                                                class="ni ni-clip-h text-lg/none"
                                            ></em>
                                        </div>
                                        <div class="ms-3">{{ item.date }}</div>
                                    </div>
                                </div>
                                <div class="mt-2 flex justify-between">
                                    <div
                                        class="max-w-[calc(100%-theme(spacing.7))] flex-grow-0 pe-2"
                                    >
                                        <h6
                                            class="font-heading leading-tighter mb-1 line-clamp-1 text-sm font-bold text-slate-700 dark:text-white"
                                        >
                                            {{ item.title }}
                                        </h6>
                                        <p
                                            class="line-clamp-2 text-[13px] text-slate-400 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600"
                                        >
                                            {{ item.excerpt }}
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex flex-col py-0.5 text-center"
                                    >
                                        <div v-if="item.unread" class="unread">
                                            <span
                                                class="border-primary-600 bg-primary-600 text-xxs tracking-snug relative inline-flex rounded-sm border px-1 text-center align-middle leading-3.5 font-medium whitespace-nowrap text-white"
                                                >{{ item.unread }}</span
                                            >
                                        </div>
                                        <div
                                            :class="{
                                                'group/asterisk relative mt-auto inline-flex cursor-pointer': true,
                                                active: item.marked,
                                            }"
                                        >
                                            <em
                                                class="ni ni-star text-lg/none text-slate-400"
                                            ></em>
                                            <em
                                                class="ni ni-star-fill absolute top-0 text-lg/none text-yellow-600 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100"
                                            ></em>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </SimpleBar>
                </TabGroup>
            </div>
            <div
                v-if="message"
                :class="{
                    'conversation-body group/messagebody pointer-events-none absolute inset-0 z-[5] flex flex-grow flex-col overflow-hidden bg-white opacity-0 transition-all duration-300 ease-in-out lg:pointer-events-auto lg:static lg:opacity-100 dark:bg-gray-950 [&.conversation-shown]:pointer-events-auto [&.conversation-shown]:opacity-100 [&.profile-shown]:2xl:pe-[280px]': true,
                    'conversation-shown': showMessage,
                    'profile-shown': showProfile,
                }"
            >
                <div
                    class="relative border-b border-gray-200 px-5 py-3 sm:px-9 sm:py-4 lg:py-8 dark:border-gray-800"
                >
                    <h4
                        class="font-heading leading-tighter mb-2 line-clamp-1 hidden text-2xl font-bold tracking-tight text-slate-700 sm:mb-4 lg:block dark:text-white"
                    >
                        {{ message.title }}
                    </h4>
                    <div class="flex items-center justify-between">
                        <div class="hidden lg:block">
                            <ul class="flex flex-wrap gap-6">
                                <li>
                                    <span
                                        class="inline-flex items-center gap-2 text-slate-400"
                                    >
                                        <Icon
                                            class="text-primary-600 text-sm/none"
                                            name="flag-fill"
                                        ></Icon>
                                        <span>Technical Problem</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="-ms-2 lg:hidden">
                            <ButtonZoom
                                @click="
                                    () => {
                                        showMessage = null;
                                    }
                                "
                            >
                                <Icon
                                    class="text-xl rtl:-scale-x-100"
                                    name="arrow-left"
                                />
                            </ButtonZoom>
                        </div>
                        <ul class="flex gap-2">
                            <li>
                                <Button size="sm" variant="light-pale-outline">
                                    <Icon
                                        class="text-base leading-4.5"
                                        name="check"
                                    />
                                    <span class="ms-3">Mark as Closed</span>
                                </Button>
                            </li>
                            <li class="lg:hidden">
                                <Button
                                    @click="
                                        () => {
                                            showProfile = !showProfile;
                                        }
                                    "
                                    size="sm"
                                    variant="light"
                                    class="bg-white"
                                    icon
                                >
                                    <Icon class="text-base" name="info-i" />
                                </Button>
                            </li>
                            <li>
                                <Dropdown
                                    placement="bottom-end"
                                    rtlPlacement="bottom-start"
                                    :offset="[0, 4]"
                                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                >
                                    <template #button>
                                        <Button
                                            size="sm"
                                            variant="light"
                                            class="bg-white"
                                            icon
                                        >
                                            <Icon
                                                class="text-lg"
                                                name="more-h"
                                            />
                                        </Button>
                                    </template>
                                    <template #content>
                                        <ul class="p-1">
                                            <li class="rounded">
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <Icon
                                                        class="w-7 text-start text-lg leading-none opacity-80"
                                                        name="user-add"
                                                    />
                                                    <span
                                                        >Assign To Member</span
                                                    >
                                                </MenuItem>
                                            </li>
                                            <li class="rounded">
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <Icon
                                                        class="w-7 text-start text-lg leading-none opacity-80"
                                                        name="archive"
                                                    />
                                                    <span>Move to Archive</span>
                                                </MenuItem>
                                            </li>
                                            <li class="rounded">
                                                <MenuItem
                                                    as="button"
                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                >
                                                    <Icon
                                                        class="w-7 text-start text-lg leading-none opacity-80"
                                                        name="done"
                                                    />
                                                    <span>Mark as Close</span>
                                                </MenuItem>
                                            </li>
                                        </ul>
                                    </template>
                                </Dropdown>
                            </li>
                        </ul>
                    </div>
                    <button
                        @click="
                            () => {
                                showProfile = !showProfile;
                            }
                        "
                        class="absolute -end-4.5 -bottom-4.5 z-[2] me-13 hidden h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-slate-400 transition-all duration-300 ease-in-out group-[.profile-shown]/messagebody:me-0 group-[.profile-shown]/messagebody:-rotate-180 lg:flex 2xl:z-[200] dark:border-gray-800 dark:bg-gray-950"
                    >
                        <Icon
                            class="text-lg/none rtl:-scale-x-100"
                            name="arrow-left"
                        />
                    </button>
                </div>
                <SimpleBar class="h-full max-h-full overflow-auto">
                    <ReplyMessages :data="message"> </ReplyMessages>
                    <ReplyForm></ReplyForm>
                </SimpleBar>
                <Profile v-model:show="showProfile" :data="message" />
            </div>
            <div
                v-else
                class="flex flex-grow flex-col items-center justify-center bg-white dark:bg-gray-950"
            >
                <div
                    class="dark:bg-gray-1000 mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-gray-100 text-slate-700 dark:text-white"
                >
                    <Icon class="text-2xl" name="chat" />
                </div>
                <div class="text-lg text-slate-600 dark:text-slate-200">
                    Select a Message
                </div>
            </div>
        </div>
    </Layout>
</template>
