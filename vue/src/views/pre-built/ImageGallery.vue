<script setup>
import Layout from '@/layout/Main.vue';
import {
    Block,
    PageHead,
    PageHeadGroup,
    PageHeadSubTitle,
    PageHeadTitle,
    Icon,
    Button,
    Lightbox,
    Avatar,
} from '@/components';

import { toInitials } from '@/utilities';

// import { useGalleryStore } from '@/stores/gallery'
// const gallery = useGalleryStore()

const gallery = [
    {
        id: 1,
        img: '/images/stock/a.jpg',
        userImg: '/images/avatar/a-sm.jpg',
        theme: 'purple',
        userName: 'Dustin Mock',
        userEmail: 'mock@softnio.com',
        heart: 34,
    },
    {
        id: 2,
        img: '/images/stock/b.jpg',
        userImg: null,
        theme: 'pink',
        userName: 'Ander Durham',
        userEmail: 'ander@softnio.com',
        heart: 40,
    },
    {
        id: 3,
        img: '/images/stock/c.jpg',
        userImg: '/images/avatar/b-sm.jpg',
        theme: 'pink',
        userName: 'Krish Kendall',
        userEmail: 'krish@softnio.com',
        heart: 349,
    },
    {
        id: 4,
        img: '/images/stock/d.jpg',
        userImg: '/images/avatar/c-sm.jpg',
        theme: 'pink',
        userName: 'Keith Jensen',
        userEmail: 'keith@softnio.com',
        heart: 92,
    },
    {
        id: 5,
        img: '/images/stock/e.jpg',
        userImg: null,
        theme: 'primary',
        userName: 'Heather Walker',
        userEmail: 'walker@softnio.com',
        heart: 341,
    },
    {
        id: 6,
        img: '/images/stock/f.jpg',
        userImg: '/images/avatar/d-sm.jpg',
        theme: 'primary',
        userName: 'Asiya Wolff',
        userEmail: 'asiya@softnio.com',
        heart: 139,
    },
    {
        id: 7,
        img: '/images/stock/g.jpg',
        userImg: null,
        theme: 'primary',
        userName: 'Abu Bin Ishtiak',
        userEmail: 'abu@softnio.com',
        heart: 149,
    },
    {
        id: 8,
        img: '/images/stock/h.jpg',
        userImg: '/images/avatar/a-sm.jpg',
        theme: 'purple',
        userName: 'Dustin Mock',
        userEmail: 'mock@softnio.com',
        heart: 34,
    },
];
</script>

<template>
    <Layout title="Gallery">
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Image Gallery</PageHeadTitle>
                <PageHeadSubTitle
                    >You have total
                    <span class="text-slate-600 dark:text-slate-400"
                        >1,257</span
                    >
                    Media.</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <Button
                    size="rg"
                    variant="white-outline"
                    class="hidden sm:inline-flex"
                >
                    <Icon class="text-xl/4.5" name="download-cloud" />
                    <span class="ms-3">Download All</span>
                </Button>
                <Button
                    size="rg"
                    variant="white-outline"
                    class="sm:hidden"
                    icon
                >
                    <Icon class="text-xl/4.5" name="download-cloud" />
                </Button>
            </PageHeadGroup>
        </PageHead>
        <Block>
            <div class="grid grid-flow-dense grid-cols-12 gap-7">
                <div
                    v-for="(item, index) in gallery"
                    :key="index"
                    class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3"
                >
                    <div
                        class="relative h-full rounded-md border border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                    >
                        <Lightbox class="relative z-[1]" :sources="item.img">
                            <img
                                class="w-full rounded-t"
                                :src="item.img"
                                alt=""
                            />
                        </Lightbox>
                        <div
                            class="flex flex-wrap items-center justify-between gap-3 p-5 sm:p-6"
                        >
                            <div class="flex items-center">
                                <Avatar
                                    v-if="item.userImg"
                                    size="rg"
                                    rounded
                                    :img="item.userImg"
                                />
                                <Avatar
                                    v-else
                                    size="rg"
                                    :variant="item.theme"
                                    rounded
                                    :text="toInitials(item.userName)"
                                />
                                <div class="ms-4">
                                    <span
                                        class="block text-sm leading-6 font-medium text-slate-700 dark:text-white"
                                        >{{ item.userName }}</span
                                    >
                                    <span
                                        class="block text-xs leading-4 text-slate-400"
                                        >{{ item.userEmail }}</span
                                    >
                                </div>
                            </div>
                            <div>
                                <button
                                    class="font-heading relative inline-flex items-center text-center align-middle text-sm leading-4.5 font-bold tracking-wide transition-all duration-300"
                                >
                                    <Icon
                                        class="text-xl leading-4.5"
                                        name="heart"
                                    />
                                    <span class="ms-3">{{ item.heart }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Block>
    </Layout>
</template>
