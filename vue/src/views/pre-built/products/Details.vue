<script setup>
import { ref } from 'vue'
import Layout from '@/layout/Main.vue'
import { 
  PageHead, PageHeadGroup, PageHeadTitle, PageHeadSubTitle, PageHeadOption, Button, ButtonZoom, Icon, Avatar, Badge,
  Card, CardBody, NumberSpinner, RadioButton, RadioColor, Block, Lightbox
 } from '@/components'
import { toInitials } from '@/utilities'
import { useRoute } from 'vue-router'

import { Swiper, SwiperSlide } from 'swiper/vue';
import { FreeMode, Navigation, Thumbs } from 'swiper/modules';

const thumbsSwiper = ref(null);
const setThumbsSwiper = (swiper) => {
  thumbsSwiper.value = swiper;
};

import { useProductsStore } from '@/stores/products'
const products = useProductsStore()
const route = useRoute()

const product = products.card.filter(
    (product) => product.id === route.params.id
)[0];
</script>

<template>
  <Layout title="Product Details" container>
    <PageHead>
        <PageHeadGroup>
            <PageHeadTitle>Product Details</PageHeadTitle>
            <PageHeadSubTitle>An example page for product details</PageHeadSubTitle>
        </PageHeadGroup>
        <PageHeadGroup>
            <Button as="router-link" size="rg" variant="white-outline" class="hidden sm:inline-flex" to="/product-card">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
                <span class="ms-3">Back</span>
            </Button>
            <Button as="router-link" size="rg" variant="white-outline" class="sm:hidden" icon to="/product-card">
                <Icon class="text-xl leading-4.5 rtl:-scale-x-100" name="arrow-left" />
            </Button>
        </PageHeadGroup>
    </PageHead>
    <Block>
        <Card class="h-full">
            <CardBody>
                <div class="flex flex-wrap -m-3.5">
                    <div class="w-full lg:w-1/2 p-3.5">
                        <div class="relative h-auto rounded border border-gray-100 mb-7.5 xl:me-1.5 2xl:me-11">
                            <swiper
                                dir="rtl"
                                :loop="true"
                                :spaceBetween="0"
                                :thumbs="{ swiper: thumbsSwiper }"
                                :modules="[FreeMode, Navigation, Thumbs]"
                                class="sliderNav"
                            >
                              <swiper-slide v-for="(item, index) in product.slider" :key="index">
                                  <img :src="item.img" class="w-full rounded" alt="" />
                              </swiper-slide>
                            </swiper>
                            <div class="absolute left-1/2 -translate-x-1/2 -bottom-7.5 z-10 w-[282px] md:w-[384px] 2xl:w-[470px]">
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
                                    :modules="[FreeMode, Navigation, Thumbs]"
                                    class="thumbsSwiper"
                                >
                                  <swiper-slide v-for="(item, index) in product.slider" :key="index" class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto p-2">
                                      <img :src="item.img" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" />
                                  </swiper-slide>
                                </swiper>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 p-3.5">
                        <div class="mt-11 2xl:me-11">
                            <h4 class="text-xl lg:text-2xl tracking-tight font-bold font-heading leading-tighter mb-2 text-primary-600">${{ product.currentPrice }} <small class="text-sm text-slate-400 font-normal">${{product.price}}</small></h4>
                            <h2 class="text-3xl lg:text-4xl tracking-tight font-heading font-bold leading-tighter mb-2 text-slate-700 dark:text-white">{{product.title}}</h2>
                            <div class="flex items-center">
                                <ul class="flex items-center gap-0.5 text-yellow-600">
                                    <li><em class="text-base/none ni ni-star-fill"></em></li>
                                    <li><em class="text-base/none ni ni-star-fill"></em></li>
                                    <li><em class="text-base/none ni ni-star-fill"></em></li>
                                    <li><em class="text-base/none ni ni-star-fill"></em></li>
                                    <li><em class="text-base/none ni ni-star-half"></em></li>
                                </ul>
                                <div class="text-sm ms-2 text-slate-400">(2 Reviews)</div>
                            </div>
                            <div class="mt-6 mb-8 text-slate-400">
                                <p class="text-lg">I must explain to you how all this mistaken idea of denoun cing ple praising pain was born and I will give you a complete account of the system, and expound the actual teaching.</p>
                            </div>
                            <div class="mb-5 last:mb-0">
                                <ul class="flex gap-y-4 gap-x-5.5">
                                    <li>
                                        <div class="text-sm text-slate-400">Type</div>
                                        <div class="text-base font-bold text-slate-700 dark:text-white">Watch</div>
                                    </li>
                                    <li>
                                        <div class="text-sm text-slate-400">Model Number</div>
                                        <div class="text-base font-bold text-slate-700 dark:text-white">Forerunner 290XT</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-5 last:mb-0">
                                <h6 class="text-base -tracking-snug font-heading font-bold leading-tighter mb-2 text-slate-700 dark:text-white">Color</h6>
                                <ul class="flex flex-wrap gap-6 items-center">
                                    <li>
                                        <RadioColor name="productColor" id="productColor1" class="!bg-[#754c24]" checked />
                                    </li>
                                    <li>
                                        <RadioColor name="productColor" id="productColor2" class="!bg-[#636363]" />
                                    </li>
                                    <li>
                                        <RadioColor name="productColor" id="productColor3" class="!bg-[#ba6ed4]" />
                                    </li>
                                    <li>
                                        <RadioColor name="productColor" id="productColor4" class="!bg-[#ff87a3]" />
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-5 last:mb-0">
                                <h6 class="text-base -tracking-snug font-heading font-bold leading-tighter mb-2 text-slate-700 dark:text-white">Size</h6>
                                <ul class="inline-flex flex-wrap items-center gap-3">
                                    <li>
                                        <RadioButton name="sizeCheck" nocontrol id="sizeCheckXS" checked>XS</RadioButton>
                                    </li>
                                    <li>
                                        <RadioButton name="sizeCheck" nocontrol id="sizeCheckSM">SM</RadioButton>
                                    </li>
                                    <li>
                                        <RadioButton name="sizeCheck" nocontrol id="sizeCheckL">L</RadioButton>
                                    </li>
                                    <li>
                                        <RadioButton name="sizeCheck" nocontrol id="sizeCheckXL">XL</RadioButton>
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-5 last:mb-0">
                                <ul class="flex flex-wrap items-center gap-3 pt-1.5">
                                    <li class="w-[140px]">
                                        <NumberSpinner variant="white-outline" :defaultValue="0" inputClass="w-[68px]"></NumberSpinner>
                                    </li>
                                    <li>
                                        <Button size="rg" variant="primary">Add to Cart</Button>
                                    </li>
                                    <li class="ms-n1">
                                        <ButtonZoom size="rg"><Icon class="text-lg text-primary-600" name="heart" /></ButtonZoom>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t my-15 border-gray-400 border-opacity-25"></div>
                <div class="flex flex-wrap lg:flex-row-reverse -m-3.5">
                    <div class="w-full lg:w-5/12 p-3.5">
                        <div class="relative overflow-hidden rounded before:absolute before:bottom-0 before:start-0 before:end-0 before:h-[120px] before:bg-gradient-to-t from-black/40 to-transparent">
                            <img class="w-full" src="/images/product/video-a.jpg" alt="" />
                            <Lightbox class="absolute start-8 bottom-8 text-white text-xl flex items-center gap-2" sources="https://www.youtube.com/watch?v=SSo_EIwHSd4">
                                <Icon class="text-3xl" name="play" />
                                <span>Watch Video</span>
                            </Lightbox>
                        </div>
                    </div>
                    <div class="w-full lg:w-7/12 p-3.5">
                        <div class="2xl:me-4 entry">
                            <h3>Product details of Comfy cushions</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem consectetur, adipisci velit.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                            <ul class="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\e9b9'] prose-li:before:text-xs prose-li:before:text-primary-600 prose-li:leading-6 prose-li:before:leading-6">
                                <li>Meets and/or exceeds performance standards.</li>
                                <li>Liumbar support.</li>
                                <li>Made of bonded teather and poiyurethane.</li>
                                <li>Metal frame.</li>
                                <li>Anatomically shaped cork-latex</li>
                                <li>As attractively priced as you look attractive in one</li>
                            </ul>
                            <p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                            <h3>The best seats in the house</h3>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                        </div>
                    </div>
                </div>
            </CardBody>
        </Card>
    </Block>
    <Block>
        <div class="relative mb-5 last:mb-0">
            <h3 class="font-heading font-bold text-2xl lg:text-3xl text-slate-700 dark:text-white">Related Products</h3>
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
            <SwiperSlide v-for="(item, index) in products.card" :key="index" class="px-3.5">
                <Card class="h-full group">
                    <div class="relative">
                        <router-link :to="`/product-details/${item.id}`">
                            <img class="rounded-t" :src="item.img" alt="" />
                        </router-link>
                        <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                            <li v-if="item.new"><Badge variant="green">New</Badge></li>
                            <li v-if="item.hot"><Badge variant="red">Hot</Badge></li>
                        </ul>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#link"  @click="(e)=> e.preventDefault()" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#link"  @click="(e)=> e.preventDefault()"  class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#link"  @click="(e)=> e.preventDefault()" >{{item.category}}</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <router-link class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300"  :to="`/product-details/${item.id}`">{{item.title}}</router-link>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">${{item.price}}</small> 
                            ${{item.currentPrice}}
                        </div>
                    </div>
                </Card>
            </SwiperSlide>
            <div class="swiper-button-prev after:hidden !h-11 !w-11 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-full !text-slate-400 dark:!text-slate-200 !-translate-x-2 sm:!-translate-x-2.5 [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400 [&.swiper-button-disabled]:cursor-not-allowed">
                <Icon class="text-2xl leading-none text-current" name="chevron-left" />
            </div>
            <div class="swiper-button-next after:hidden !h-11 !w-11 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-full !text-slate-400 dark:!text-slate-200 !translate-x-2 sm:!translate-x-2.5 [&.swiper-button-disabled]:!text-slate-200 [&.swiper-button-disabled]:dark:!text-slate-400 [&.swiper-button-disabled]:cursor-not-allowed">
                <Icon class="text-2xl leading-none text-current" name="chevron-right" />
            </div>
        </Swiper>
    </Block>
  </Layout>
</template>
