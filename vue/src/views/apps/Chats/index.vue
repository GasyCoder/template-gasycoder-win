<script setup>
import { ref, watch, onMounted, onBeforeMount } from 'vue';
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
} from '@/components';
import { toInitials } from '@/utilities';
import SimpleBar from 'simplebar-vue';
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue';
import Profile from './Profile.vue';
import { useChatStore } from '@/stores/chats';
const chats = useChatStore();

const showProfile = ref(true);
const showChat = ref(null);
const showUploadOption = ref(false);
const chat = ref(null);

function selectChat(selected) {
    return chats.data.filter((chat) => chat.id == selected)[0];
}

onMounted(() => {
    chat.value = selectChat(showChat.value);

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

onBeforeMount(() => {
    const handlePreview = () => {
        if (window.innerWidth > 1023) {
            showChat.value = '1';
        }
    };
    handlePreview();
});

watch(
    () => showChat.value,
    () => {
        chat.value = selectChat(showChat.value);
    },
);
</script>

<template>
    <Layout :title="'Chats'">
        <div
            class="min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] relative flex overflow-hidden rounded border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
        >
            <div
                class="relative flex max-h-full w-full flex-shrink-0 flex-col overflow-hidden rounded-s lg:w-[320px] lg:border-e lg:border-gray-200 2xl:w-[380px] dark:border-gray-800"
            >
                <div
                    class="flex items-center justify-between px-5 pt-4.5 pb-4 md:px-7"
                >
                    <Dropdown
                        placement="bottom-start"
                        rtlPlacement="bottom-end"
                        :offset="[0, 4]"
                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                    >
                        <template #button>
                            <button
                                class="dropdown-toggle peer flex items-center *:pointer-events-none"
                            >
                                <Avatar
                                    size="rg"
                                    rounded
                                    img="/images/avatar/b-sm.jpg"
                                />
                                <div
                                    class="ms-4 text-xl text-slate-700 dark:text-white"
                                >
                                    Chats
                                </div>
                                <Icon
                                    class="ms-4 text-lg/none"
                                    name="chevron-down"
                                />
                            </button>
                        </template>
                        <template #content>
                            <ul class="py-2">
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Contacts</span>
                                    </MenuItem>
                                </li>
                                <li>
                                    <MenuItem
                                        as="button"
                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                    >
                                        <span>Channels</span>
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
                                        <span>Help</span>
                                    </MenuItem>
                                </li>
                            </ul>
                        </template>
                    </Dropdown>
                    <ul class="flex items-center gap-3">
                        <li>
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[0, 4]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <Button icon pill size="rg" variant="light">
                                        <Icon
                                            class="text-xl/none"
                                            name="setting-alt-fill"
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
                                                <span>Settings</span>
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
                                                <span>Message Requests</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Archives Chats</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Unread Chats</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <span>Group Chats</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                        <li>
                            <Button icon pill size="rg" variant="light">
                                <Icon
                                    class="text-xl/none"
                                    name="edit-alt-fill"
                                />
                            </Button>
                        </li>
                    </ul>
                </div>
                <SimpleBar class="h-full max-h-full overflow-auto">
                    <div class="px-5 pt-1 pb-7 md:px-7">
                        <div class="relative">
                            <div
                                class="absolute start-0 top-0 flex h-9 w-9 items-center justify-center"
                            >
                                <Icon
                                    class="text-base/none text-slate-400"
                                    name="search"
                                />
                            </div>
                            <input
                                type="text"
                                class="focus:border-primary-500 focus:dark:border-primary-600 focus:outline-primary-200 focus:dark:outline-primary-950 block h-9 w-full rounded-full border border-gray-100 bg-gray-100 py-1.5 ps-10 pe-4 text-xs/4.5 text-slate-700 placeholder-slate-300 transition-all outline-none placeholder:text-slate-400 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:border-gray-900 dark:bg-gray-900 dark:text-white disabled:dark:bg-slate-950"
                                id="default-03"
                                placeholder="Search by name"
                            />
                        </div>
                    </div>
                    <div class="px-5 pb-7 lg:px-7">
                        <h6
                            class="text-xxs/tight mb-3 font-bold tracking-widest text-slate-400 uppercase"
                        >
                            Favorites
                        </h6>
                        <ul class="flex gap-2.5 overflow-x-auto md:flex-wrap">
                            <li>
                                <a
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
                                    class="relative inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-center align-middle text-base leading-4.5 font-bold tracking-wide text-slate-600 transition-all duration-300 hover:bg-gray-700 hover:text-white active:bg-gray-800 active:active:text-white active:text-white dark:border-gray-800 dark:bg-gray-950 dark:text-white hover:dark:bg-gray-700 hover:dark:text-white active:dark:bg-gray-800"
                                >
                                    <Icon class="text-2xl/4.5" name="plus" />
                                </a>
                            </li>
                            <li v-for="(item, index) in chats.fav" :key="index">
                                <a
                                    href="#link"
                                    @click="(e) => e.preventDefault()"
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
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-2 lg:px-4">
                        <h6
                            class="text-xxs/tight ms-3 mb-3 font-bold tracking-widest text-slate-400 uppercase"
                        >
                            Messages
                        </h6>
                        <ul>
                            <li
                                v-for="(item, index) in chats.data"
                                :key="index"
                                :class="{
                                    'group/chatitem conversation-item [&.current]:dark:bg-gray-1000 relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900 [&.current]:bg-gray-50 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900': true,
                                    'is-unread': item.lastStatus == 'unread',
                                    current: showChat == item.id,
                                }"
                            >
                                <a
                                    class="flex w-full cursor-pointer items-center p-3"
                                    @click="() => (showChat = item.id)"
                                    href="#link"
                                >
                                    <template v-if="item.user?.length > 1">
                                        <AvatarGroup variant="s2" size="rg">
                                            <template
                                                v-for="(
                                                    uItem, uIndex
                                                ) in item.user.slice(0, 2)"
                                                :key="uIndex"
                                            >
                                                <Avatar
                                                    v-if="uItem.image"
                                                    rounded
                                                    :img="uItem.image"
                                                />
                                                <Avatar
                                                    v-else
                                                    :variant="uItem.theme"
                                                    rounded
                                                    :text="
                                                        toInitials(uItem.name)
                                                    "
                                                />
                                            </template>
                                        </AvatarGroup>
                                    </template>
                                    <template v-else>
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
                                    </template>

                                    <div
                                        class="w-[calc(100%-theme(spacing.15))] ms-4"
                                    >
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div
                                                class="mb-1 text-sm font-medium text-slate-600 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 dark:text-white group-[.is-unread]/chatitem:dark:text-white"
                                            >
                                                {{ item.name }}
                                            </div>
                                            <span
                                                class="text-xs text-slate-400"
                                                >{{ item.date }}</span
                                            >
                                        </div>
                                        <div
                                            class="flex items-center justify-between"
                                        >
                                            <div
                                                class="line-clamp-1 w-[calc(100%-theme(spacing.10))] text-xs text-slate-400 group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600"
                                            >
                                                <p>
                                                    {{
                                                        item.messages[
                                                            item.messages
                                                                .length - 1
                                                        ].chat[
                                                            item.messages[
                                                                item.messages
                                                                    .length - 1
                                                            ].chat.length - 1
                                                        ]
                                                    }}
                                                </p>
                                            </div>
                                            <div
                                                v-if="
                                                    item.lastStatus ==
                                                    'delivered'
                                                "
                                                class="flex text-slate-400"
                                            >
                                                <Icon
                                                    class="text-sm/none"
                                                    name="check-circle-fill"
                                                ></Icon>
                                            </div>
                                            <div
                                                v-if="item.lastStatus == 'sent'"
                                                class="flex text-slate-400"
                                            >
                                                <Icon
                                                    class="text-sm/none"
                                                    name="check-circle"
                                                ></Icon>
                                            </div>
                                            <div
                                                v-if="
                                                    item.lastStatus == 'unread'
                                                "
                                                class="text-primary-600 flex"
                                            >
                                                <Icon
                                                    class="text-sm/none"
                                                    name="bullet-fill"
                                                ></Icon>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div
                                    class="pointer-events-none absolute inset-y-0 end-3 z-[2] flex w-12 items-center justify-end bg-gray-100 opacity-0 transition-all group-hover/chatitem:pointer-events-auto group-hover/chatitem:opacity-100 dark:bg-gray-900"
                                >
                                    <Dropdown
                                        placement="bottom-end"
                                        rtlPlacement="bottom-start"
                                        :offset="[-14, -8]"
                                        :rtlOffset="[14, -8]"
                                        contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                                    >
                                        <template #button>
                                            <ButtonZoom size="rg">
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
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span>Mute</span>
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
                                                        <span>Hide</span>
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span>Delete</span>
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
                                                        <span
                                                            >Mark as
                                                            Unread</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span
                                                            >Ignore
                                                            Messages</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                                <li>
                                                    <MenuItem
                                                        as="button"
                                                        class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                    >
                                                        <span
                                                            >Block
                                                            Messages</span
                                                        >
                                                    </MenuItem>
                                                </li>
                                            </ul>
                                        </template>
                                    </Dropdown>
                                </div>
                            </li>
                        </ul>
                    </div>
                </SimpleBar>
            </div>
            <div
                v-if="chat"
                :class="{
                    'conversation-body group/messagebody pointer-events-none absolute inset-0 z-[5] flex flex-grow flex-col overflow-hidden bg-white opacity-0 transition-all duration-300 ease-in-out lg:pointer-events-auto lg:static lg:opacity-100 dark:bg-gray-950 [&.conversation-shown]:pointer-events-auto [&.conversation-shown]:opacity-100 [&.profile-shown]:2xl:pe-[365px]': true,
                    'profile-shown': showProfile,
                    'conversation-shown': showChat !== null,
                }"
            >
                <div
                    class="relative flex items-center justify-between border-b border-gray-200 bg-white px-7 py-4 dark:border-gray-800 dark:bg-gray-950"
                >
                    <ul class="-m-0.5 flex items-center sm:-m-1.5">
                        <li class="-ms-3 p-0.5 sm:p-1.5 lg:hidden">
                            <ButtonZoom
                                size="rg"
                                @click="() => (showChat = null)"
                            >
                                <Icon
                                    class="text-xl/none rtl:-scale-x-100"
                                    name="arrow-left"
                                ></Icon>
                            </ButtonZoom>
                        </li>
                        <li class="p-0.5 sm:p-1.5">
                            <div class="flex items-center">
                                <template v-if="chat.user?.length > 1">
                                    <AvatarGroup variant="s2" size="rg">
                                        <template
                                            v-for="(
                                                uItem, uIndex
                                            ) in chat.user.slice(0, 2)"
                                            :key="uIndex"
                                        >
                                            <Avatar
                                                v-if="uItem.image"
                                                rounded
                                                :img="uItem.image"
                                            />
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
                                    <Avatar
                                        v-if="chat.image"
                                        size="rg"
                                        rounded
                                        :img="chat.image"
                                    />
                                    <Avatar
                                        v-else
                                        size="rg"
                                        :variant="chat.theme"
                                        rounded
                                        :text="toInitials(chat.name)"
                                    />
                                </template>

                                <div class="ms-4">
                                    <div
                                        class="mb-1 line-clamp-1 text-sm font-bold text-slate-700 dark:text-white"
                                    >
                                        {{ chat.name }}
                                    </div>
                                    <div class="text-xs text-slate-400">
                                        <span
                                            class="me-0.5 hidden sm:inline-block"
                                            >Active
                                        </span>
                                        35m ago
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="-m-0.5 flex items-center sm:-m-1.5">
                        <li class="p-0.5 sm:p-1.5">
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-primary-600 text-xl/none"
                                    name="call-fill"
                                ></Icon>
                            </ButtonZoom>
                        </li>
                        <li class="p-0.5 sm:p-1.5">
                            <ButtonZoom size="rg">
                                <Icon
                                    class="text-primary-600 text-xl/none"
                                    name="video-fill"
                                ></Icon>
                            </ButtonZoom>
                        </li>
                        <li class="hidden p-0.5 sm:block sm:p-1.5">
                            <Dropdown
                                placement="bottom-end"
                                rtlPlacement="bottom-start"
                                :offset="[-14, -8]"
                                :rtlOffset="[14, -8]"
                                contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[180px]"
                            >
                                <template #button>
                                    <ButtonZoom size="rg">
                                        <Icon
                                            class="text-primary-600 text-xl/none"
                                            name="setting-fill"
                                        ></Icon>
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
                                                    name="archive"
                                                ></Icon>
                                                <span>Make as Archive</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="cross-c"
                                                ></Icon>
                                                <span>Remove Conversion</span>
                                            </MenuItem>
                                        </li>
                                        <li>
                                            <MenuItem
                                                as="button"
                                                class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                            >
                                                <Icon
                                                    class="w-7 text-start text-lg/none opacity-80"
                                                    name="setting"
                                                ></Icon>
                                                <span>More Options</span>
                                            </MenuItem>
                                        </li>
                                    </ul>
                                </template>
                            </Dropdown>
                        </li>
                        <li class="-me-3 p-0.5 sm:p-1.5">
                            <ButtonZoom
                                @click="() => (showProfile = !showProfile)"
                                size="rg"
                                :class="{ active: showProfile }"
                            >
                                <Icon
                                    class="text-primary-600 text-xl/none"
                                    name="alert-circle-fill"
                                ></Icon>
                            </ButtonZoom>
                        </li>
                    </ul>
                </div>
                <SimpleBar
                    class="dark:bg-gray-1000 bg-opacity-70 h-full max-h-full overflow-auto bg-gray-100 p-5 lg:px-7"
                >
                    <template
                        v-for="(item, index) in chat.messages"
                        :key="index"
                    >
                        <div
                            v-if="item.separator"
                            class="overflow-hidden py-4 text-center"
                        >
                            <div
                                class="relative inline-block px-3 text-xs/snug text-slate-400 before:absolute before:end-full before:top-1/2 before:h-px before:w-screen before:bg-gray-300 after:absolute after:start-full after:top-1/2 after:h-px after:w-screen after:bg-gray-300 before:dark:bg-gray-900 after:dark:bg-gray-900"
                            >
                                <span>{{ item.separator.date }}</span>
                            </div>
                        </div>

                        <div
                            v-else
                            :class="{
                                'group/chat -m-1 flex items-end pt-2 first:pt-0': true,
                                'is-me': item.me,
                                'is-you': !item.me,
                            }"
                        >
                            <div v-if="!item.me" class="mb-6 p-1">
                                <Avatar
                                    v-if="chat.image"
                                    size="rg"
                                    rounded
                                    :img="chat.image"
                                />
                                <Avatar
                                    v-else
                                    size="rg"
                                    :variant="chat.theme"
                                    rounded
                                    :text="toInitials(chat.name)"
                                />
                            </div>
                            <div :class="{ 'p-1': true, 'w-full': item.me }">
                                <div class="chat-bubbles">
                                    <div
                                        v-for="(cItem, cIndex) in item.chat"
                                        key="{cIndex}"
                                        :class="{
                                            'group/chatbubble flex items-center py-0.5': true,
                                            'flex-row-reverse': item.me,
                                        }"
                                    >
                                        <div
                                            :class="{
                                                'px-4 py-2': true,
                                                'bg-primary-600 rounded-lg text-white group-last/chatbubble:ltr:rounded-br-none group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-last/chatbubble:rtl:rounded-bl-none group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl':
                                                    item.me,
                                                'rounded-lg bg-white group-last/chatbubble:ltr:rounded-bl-none group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-last/chatbubble:rtl:rounded-br-none group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-br dark:bg-gray-900':
                                                    !item.me,
                                            }"
                                        >
                                            {{ cItem }}
                                        </div>
                                        <ul
                                            :class="{
                                                'mx-3 flex flex-shrink-0 items-center opacity-0 transition-all duration-300 group-hover/chatbubble:opacity-100': true,
                                                'flex-row-reverse': item.me,
                                            }"
                                        >
                                            <li class="hidden md:block">
                                                <ButtonZoom size="sm">
                                                    <Icon
                                                        class="text-base/none"
                                                        name="reply-fill"
                                                    ></Icon>
                                                </ButtonZoom>
                                            </li>
                                            <li>
                                                <Dropdown
                                                    :placement="
                                                        item.me
                                                            ? 'bottom-start'
                                                            : 'bottom-end'
                                                    "
                                                    :rtlPlacement="
                                                        item.me
                                                            ? 'bottom-end'
                                                            : 'bottom-start'
                                                    "
                                                    :offset="
                                                        item.me
                                                            ? [14, -8]
                                                            : [-14, -8]
                                                    "
                                                    :rtlOffset="
                                                        item.me
                                                            ? [-14, -8]
                                                            : [14, -8]
                                                    "
                                                    contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow min-w-[120px]"
                                                >
                                                    <template #button>
                                                        <ButtonZoom size="sm">
                                                            <Icon
                                                                class="text-base/none"
                                                                name="more-h"
                                                            ></Icon>
                                                        </ButtonZoom>
                                                    </template>
                                                    <template #content>
                                                        <ul class="py-2">
                                                            <li
                                                                class="sm:hidden"
                                                            >
                                                                <MenuItem
                                                                    as="button"
                                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        class="w-7 text-start text-lg/none opacity-80"
                                                                        name="reply-fill"
                                                                    ></Icon
                                                                    ><span
                                                                        >Reply</span
                                                                    >
                                                                </MenuItem>
                                                            </li>
                                                            <li>
                                                                <MenuItem
                                                                    as="button"
                                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        class="w-7 text-start text-lg/none opacity-80"
                                                                        name="pen-alt-fill"
                                                                    ></Icon>
                                                                    <span
                                                                        >Edit</span
                                                                    >
                                                                </MenuItem>
                                                            </li>
                                                            <li>
                                                                <MenuItem
                                                                    as="button"
                                                                    class="hover:text-primary-600 relative flex w-full items-center rounded-[inherit] px-5 py-2.5 text-xs leading-5 font-medium text-slate-600 transition-all duration-300 hover:bg-slate-50 dark:text-slate-300 hover:dark:bg-gray-900"
                                                                >
                                                                    <Icon
                                                                        class="w-7 text-start text-lg/none opacity-80"
                                                                        name="trash-fill"
                                                                    ></Icon>
                                                                    <span
                                                                        >Remove</span
                                                                    >
                                                                </MenuItem>
                                                            </li>
                                                        </ul>
                                                    </template>
                                                </Dropdown>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul
                                    :class="{
                                        'flex items-center gap-3 pt-1': true,
                                        'justify-end': item.me,
                                    }"
                                >
                                    <li
                                        class="relative text-xs/5 text-slate-400 before:absolute before:-start-1.5 before:top-1/2 before:h-1 before:w-1 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-slate-400 before:opacity-80 first:before:hidden"
                                    >
                                        {{ item.date }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </template>
                </SimpleBar>
                <div
                    class="flex items-center bg-white px-5 py-4 dark:bg-gray-950"
                >
                    <div class="relative z-[2] -ms-1.5 flex items-center">
                        <ButtonZoom
                            @click="
                                () => (showUploadOption = !showUploadOption)
                            "
                            size="sm"
                            :class="{ active: showUploadOption }"
                        >
                            <Icon
                                class="text-primary-600 text-2xl/none"
                                name="plus-circle-fill"
                            ></Icon>
                        </ButtonZoom>
                        <div
                            :class="{
                                'absolute start-full hidden bg-white p-2 dark:bg-gray-950 [&.active]:block': true,
                                active: showUploadOption,
                            }"
                        >
                            <ul class="flex items-center">
                                <li>
                                    <a
                                        class="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-xl/none"
                                            name="img-fill"
                                        ></Icon>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-xl/none"
                                            name="camera-fill"
                                        ></Icon>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-xl/none"
                                            name="mic"
                                        ></Icon>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="text-primary-600 hover:text-primary-700 inline-flex h-9 w-9 items-center justify-center"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                    >
                                        <Icon
                                            class="text-xl/none"
                                            name="grid-sq"
                                        ></Icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-grow px-2">
                        <div class="form-control-wrap">
                            <textarea
                                class="box-border block h-9 w-full flex-grow resize-none rounded border-0 bg-white px-2 py-2 text-sm leading-4.5 text-slate-700 placeholder-slate-300 shadow-none transition-all focus:ring-0 focus:ring-offset-0 focus:outline-0 focus:outline-offset-0 disabled:cursor-not-allowed disabled:bg-slate-50 dark:bg-gray-950 dark:text-white disabled:dark:bg-slate-950"
                                rows="1"
                                id="default-textarea"
                                placeholder="Type your message..."
                            ></textarea>
                        </div>
                    </div>
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <ButtonZoom size="sm">
                                <Icon
                                    class="text-primary-600 text-xl/none"
                                    name="happyf-fill"
                                ></Icon>
                            </ButtonZoom>
                        </li>
                        <li>
                            <Button size="rg" icon pill variant="primary"
                                ><Icon
                                    class="text-xl/4.5"
                                    name="send-alt"
                                ></Icon
                            ></Button>
                        </li>
                    </ul>
                </div>
                <Profile v-model:show="showProfile" :data="chat" />
            </div>
            <div
                v-else
                class="dark:bg-gray-1000 flex flex-grow flex-col items-center justify-center bg-gray-100"
            >
                <div
                    class="mb-3 flex h-16 w-16 items-center justify-center rounded-full bg-white text-slate-700 dark:bg-gray-950 dark:text-white"
                >
                    <Icon class="text-2xl" name="chat" />
                </div>
                <div class="text-lg text-slate-600 dark:text-slate-200">
                    Select a chat
                </div>
            </div>
        </div>
    </Layout>
</template>
