<script setup>
import { ref } from 'vue';
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
    Avatar,
    Badge,
    Card,
    CardBody,
    NumberSpinner,
    RadioButton,
    RadioColor,
    Block,
    Lightbox,
} from '@/components';
import { toInitials } from '@/utilities';
import { useRoute } from 'vue-router';

import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';

const thumbsSwiper = ref(null);
const setThumbsSwiper = (swiper) => {
    thumbsSwiper.value = swiper;
};

import { useProductsStore } from '@/stores/products';
const products = useProductsStore();
const route = useRoute();

const product = products.card.filter(
    (product) => product.id === route.params.id,
)[0];
</script>

<template>
    <Layout title="Product Details" container>
        <PageHead>
            <PageHeadGroup>
                <PageHeadTitle>Product Details</PageHeadTitle>
                <PageHeadSubTitle
                    >An example page for product details</PageHeadSubTitle
                >
            </PageHeadGroup>
            <PageHeadGroup>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="hidden sm:inline-flex"
                    to="/product-card"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                    <span class="ms-3">Back</span>
                </Button>
                <Button
                    as="router-link"
                    size="rg"
                    variant="white-outline"
                    class="sm:hidden"
                    icon
                    to="/product-card"
                >
                    <Icon
                        class="text-xl leading-4.5 rtl:-scale-x-100"
                        name="arrow-left"
                    />
                </Button>
            </PageHeadGroup>
        </PageHead>
        <Block>
            <Card class="h-full">
                <CardBody>
                    <div class="-m-3.5 flex flex-wrap">
                        <div class="w-full p-3.5 lg:w-1/2">
                            <div
                                class="relative mb-7.5 h-auto rounded border border-gray-100 xl:me-1.5 2xl:me-11"
                            >
                                <swiper
                                    dir="rtl"
                                    :loop="true"
                                    :spaceBetween="0"
                                    :thumbs="{ swiper: thumbsSwiper }"
                                    :modules="[FreeMode, Navigation, Thumbs]"
                                    class="sliderNav"
                                >
                                    <swiper-slide
                                        v-for="(item, index) in product.slider"
                                        :key="index"
                                    >
                                        <img
                                            :src="item.img"
                                            class="w-full rounded"
                                            alt=""
                                        />
                                    </swiper-slide>
                                </swiper>
                                <div
                                    class="absolute -bottom-7.5 left-1/2 z-10 w-[282px] -translate-x-1/2 md:w-[384px] 2xl:w-[470px]"
                                >
                                    <swiper
                                        @swiper="setThumbsSwiper"
                                        :loop="true"
                                        :spaceBetween="0"
                                        :slidesPerView="2"
                                        :breakpoints="{
                                            420: {
                                                slidesPerView: 3,
                                            },
                                            768: {
                                                slidesPerView: 4,
                                            },
                                            1540: {
                                                slidesPerView: 5,
                                            },
                                        }"
                                        :freeMode="true"
                                        :watchSlidesProgress="true"
                                        :modules="[
                                            FreeMode,
                                            Navigation,
                                            Thumbs,
                                        ]"
                                        class="thumbsSwiper"
                                    >
                                        <swiper-slide
                                            v-for="(
                                                item, index
                                            ) in product.slider"
                                            :key="index"
                                            class="group swiper-slide cursor-pointer p-2 [&.swiper-slide-thumb-active]:cursor-auto"
                                        >
                                            <img
                                                :src="item.img"
                                                class="group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600 w-full rounded border-2 border-white ring-2 ring-gray-200 transition-all dark:border-gray-950 dark:ring-gray-600"
                                                alt=""
                                            />
                                        </swiper-slide>
                                    </swiper>
                                </div>
                            </div>
                        </div>
                        <div class="w-full p-3.5 lg:w-1/2">
                            <div class="mt-11 2xl:me-11">
                                <h4
                                    class="font-heading leading-tighter text-primary-600 mb-2 text-xl font-bold tracking-tight lg:text-2xl"
                                >
                                    ${{ product.currentPrice }}
                                    <small
                                        class="text-sm font-normal text-slate-400"
                                        >${{ product.price }}</small
                                    >
                                </h4>
                                <h2
                                    class="font-heading leading-tighter mb-2 text-3xl font-bold tracking-tight text-slate-700 lg:text-4xl dark:text-white"
                                >
                                    {{ product.title }}
                                </h2>
                                <div class="flex items-center">
                                    <ul
                                        class="flex items-center gap-0.5 text-yellow-600"
                                    >
                                        <li>
                                            <em
                                                class="ni ni-star-fill text-base/none"
                                            ></em>
                                        </li>
                                        <li>
                                            <em
                                                class="ni ni-star-fill text-base/none"
                                            ></em>
                                        </li>
                                        <li>
                                            <em
                                                class="ni ni-star-fill text-base/none"
                                            ></em>
                                        </li>
                                        <li>
                                            <em
                                                class="ni ni-star-fill text-base/none"
                                            ></em>
                                        </li>
                                        <li>
                                            <em
                                                class="ni ni-star-half text-base/none"
                                            ></em>
                                        </li>
                                    </ul>
                                    <div class="ms-2 text-sm text-slate-400">
                                        (2 Reviews)
                                    </div>
                                </div>
                                <div class="mt-6 mb-8 text-slate-400">
                                    <p class="text-lg">
                                        I must explain to you how all this
                                        mistaken idea of denoun cing ple
                                        praising pain was born and I will give
                                        you a complete account of the system,
                                        and expound the actual teaching.
                                    </p>
                                </div>
                                <div class="mb-5 last:mb-0">
                                    <ul class="flex gap-x-5.5 gap-y-4">
                                        <li>
                                            <div class="text-sm text-slate-400">
                                                Type
                                            </div>
                                            <div
                                                class="text-base font-bold text-slate-700 dark:text-white"
                                            >
                                                Watch
                                            </div>
                                        </li>
                                        <li>
                                            <div class="text-sm text-slate-400">
                                                Model Number
                                            </div>
                                            <div
                                                class="text-base font-bold text-slate-700 dark:text-white"
                                            >
                                                Forerunner 290XT
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-5 last:mb-0">
                                    <h6
                                        class="-tracking-snug font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                                    >
                                        Color
                                    </h6>
                                    <ul
                                        class="flex flex-wrap items-center gap-6"
                                    >
                                        <li>
                                            <RadioColor
                                                name="productColor"
                                                id="productColor1"
                                                class="!bg-[#754c24]"
                                                checked
                                            />
                                        </li>
                                        <li>
                                            <RadioColor
                                                name="productColor"
                                                id="productColor2"
                                                class="!bg-[#636363]"
                                            />
                                        </li>
                                        <li>
                                            <RadioColor
                                                name="productColor"
                                                id="productColor3"
                                                class="!bg-[#ba6ed4]"
                                            />
                                        </li>
                                        <li>
                                            <RadioColor
                                                name="productColor"
                                                id="productColor4"
                                                class="!bg-[#ff87a3]"
                                            />
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-5 last:mb-0">
                                    <h6
                                        class="-tracking-snug font-heading leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                                    >
                                        Size
                                    </h6>
                                    <ul
                                        class="inline-flex flex-wrap items-center gap-3"
                                    >
                                        <li>
                                            <RadioButton
                                                name="sizeCheck"
                                                nocontrol
                                                id="sizeCheckXS"
                                                checked
                                                >XS</RadioButton
                                            >
                                        </li>
                                        <li>
                                            <RadioButton
                                                name="sizeCheck"
                                                nocontrol
                                                id="sizeCheckSM"
                                                >SM</RadioButton
                                            >
                                        </li>
                                        <li>
                                            <RadioButton
                                                name="sizeCheck"
                                                nocontrol
                                                id="sizeCheckL"
                                                >L</RadioButton
                                            >
                                        </li>
                                        <li>
                                            <RadioButton
                                                name="sizeCheck"
                                                nocontrol
                                                id="sizeCheckXL"
                                                >XL</RadioButton
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-5 last:mb-0">
                                    <ul
                                        class="flex flex-wrap items-center gap-3 pt-1.5"
                                    >
                                        <li class="w-[140px]">
                                            <NumberSpinner
                                                variant="white-outline"
                                                :defaultValue="0"
                                                inputClass="w-[68px]"
                                            ></NumberSpinner>
                                        </li>
                                        <li>
                                            <Button size="rg" variant="primary"
                                                >Add to Cart</Button
                                            >
                                        </li>
                                        <li class="ms-n1">
                                            <ButtonZoom size="rg"
                                                ><Icon
                                                    class="text-primary-600 text-lg"
                                                    name="heart"
                                            /></ButtonZoom>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="border-opacity-25 my-15 border-t border-gray-400"
                    ></div>
                    <div class="-m-3.5 flex flex-wrap lg:flex-row-reverse">
                        <div class="w-full p-3.5 lg:w-5/12">
                            <div
                                class="relative overflow-hidden rounded from-black/40 to-transparent before:absolute before:start-0 before:end-0 before:bottom-0 before:h-[120px] before:bg-gradient-to-t"
                            >
                                <img
                                    class="w-full"
                                    src="/images/product/video-a.jpg"
                                    alt=""
                                />
                                <Lightbox
                                    class="absolute start-8 bottom-8 flex items-center gap-2 text-xl text-white"
                                    sources="https://www.youtube.com/watch?v=SSo_EIwHSd4"
                                >
                                    <Icon class="text-3xl" name="play" />
                                    <span>Watch Video</span>
                                </Lightbox>
                            </div>
                        </div>
                        <div class="w-full p-3.5 lg:w-7/12">
                            <div class="entry 2xl:me-4">
                                <h3>Product details of Comfy cushions</h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt
                                    explicabo. Neque porro quisquam est, qui
                                    dolorem consectetur, adipisci velit.Nam
                                    libero tempore, cum soluta nobis est
                                    eligendi optio cumque nihil impedit quo
                                    minus.
                                </p>
                                <ul
                                    class="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\e9b9'] prose-li:before:text-xs prose-li:before:text-primary-600 prose-li:leading-6 prose-li:before:leading-6"
                                >
                                    <li>
                                        Meets and/or exceeds performance
                                        standards.
                                    </li>
                                    <li>Liumbar support.</li>
                                    <li>
                                        Made of bonded teather and poiyurethane.
                                    </li>
                                    <li>Metal frame.</li>
                                    <li>Anatomically shaped cork-latex</li>
                                    <li>
                                        As attractively priced as you look
                                        attractive in one
                                    </li>
                                </ul>
                                <p>
                                    Unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae.
                                </p>
                                <h3>The best seats in the house</h3>
                                <p>
                                    I must explain to you how all this mistaken
                                    idea of denouncing pleasure and praising
                                    pain was born and I will give you a complete
                                    account of the system, and expound the
                                    actual teachings. Unde omnis iste natus
                                    error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo inventore veritatis et quasi
                                    architecto beatae.
                                </p>
                            </div>
                        </div>
                    </div>
                </CardBody>
            </Card>
        </Block>
        <Block>
            <div class="relative mb-5 last:mb-0">
                <h3
                    class="font-heading text-2xl font-bold text-slate-700 lg:text-3xl dark:text-white"
                >
                    Related Products
                </h3>
            </div>
            <Swiper
                dir="rtl"
                :spaceBetween="0"
                :slidesPerView="1"
                :slidesPerGroup="1"
                :navigation="{
                    prevEl: '.swiper-button-prev',
                    nextEl: '.swiper-button-next',
                }"
                :breakpoints="{
                    576: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
                    992: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                    },
                    1540: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                    },
                }"
                :modules="[Navigation]"
                class="swiper !-mx-3.5"
            >
                <SwiperSlide
                    v-for="(item, index) in products.card"
                    :key="index"
                    class="px-3.5"
                >
                    <Card class="group h-full">
                        <div class="relative">
                            <router-link :to="`/product-details/${item.id}`">
                                <img class="rounded-t" :src="item.img" alt="" />
                            </router-link>
                            <ul
                                class="absolute start-4 top-4 flex flex-wrap gap-2"
                            >
                                <li v-if="item.new">
                                    <Badge variant="green">New</Badge>
                                </li>
                                <li v-if="item.hot">
                                    <Badge variant="red">Hot</Badge>
                                </li>
                            </ul>
                            <ul
                                class="absolute bottom-1 left-1/2 flex -translate-x-1/2 overflow-hidden rounded-t opacity-0 transition duration-200 ease-linear group-hover:opacity-100"
                            >
                                <li class="px-0.5">
                                    <a
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                        class="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                    >
                                        <em class="ni ni-cart text-base"></em>
                                    </a>
                                </li>
                                <li class="px-0.5">
                                    <a
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                        class="hover:text-primary-600 inline-flex h-8 w-8 items-center justify-center text-slate-600 transition-all duration-300"
                                    >
                                        <em class="ni ni-heart text-base"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-5 text-center sm:p-6">
                            <ul class="flex flex-wrap justify-center">
                                <li class="p-1">
                                    <a
                                        class="hover:text-primary-600 text-sm/6 text-slate-400"
                                        href="#link"
                                        @click="(e) => e.preventDefault()"
                                        >{{ item.category }}</a
                                    >
                                </li>
                            </ul>
                            <h5
                                class="font-heading leading-tighter mt-2 mb-4 text-lg font-bold"
                            >
                                <router-link
                                    class="hover:text-primary-600 text-slate-700 transition-all duration-300 dark:text-white"
                                    :to="`/product-details/${item.id}`"
                                    >{{ item.title }}</router-link
                                >
                            </h5>
                            <div
                                class="font-heading leading-tighter text-primary-600 text-lg font-bold"
                            >
                                <small
                                    class="text-xs font-normal text-slate-400 line-through"
                                    >${{ item.price }}</small
                                >
                                ${{ item.currentPrice }}
                            </div>
                        </div>
                    </Card>
                </SwiperSlide>
                <div
                    class="swiper-button-prev !h-11 !w-11 !-translate-x-2 rounded-full border border-gray-200 bg-white !text-slate-400 after:hidden sm:!-translate-x-2.5 dark:border-gray-800 dark:bg-gray-950 dark:!text-slate-200 [&.swiper-button-disabled]:cursor-not-allowed [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400"
                >
                    <Icon
                        class="text-2xl leading-none text-current"
                        name="chevron-left"
                    />
                </div>
                <div
                    class="swiper-button-next !h-11 !w-11 !translate-x-2 rounded-full border border-gray-200 bg-white !text-slate-400 after:hidden sm:!translate-x-2.5 dark:border-gray-800 dark:bg-gray-950 dark:!text-slate-200 [&.swiper-button-disabled]:cursor-not-allowed [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400"
                >
                    <Icon
                        class="text-2xl leading-none text-current"
                        name="chevron-right"
                    />
                </div>
            </Swiper>
        </Block>
    </Layout>
</template>
