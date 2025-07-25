@extends('layouts.main', ['title'=> 'Product Details'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Product Details
        </h3>
        <p class="text-slate-400">An example page for product details</p>
    </div>
    <div>
        <a href="{{ route('product.list') }}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{ route('product.list') }}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
    <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
        <div class="p-5 sm:p-6">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full lg:w-1/2 p-3.5">
                    <div class="relative h-auto rounded border border-gray-100 mb-7.5 xl:me-1.5 2xl:me-11">
                        <div class="swiper" data-effect="fade" id="sliderNav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/product/lg-a.jpg') }}" class="w-full rounded" alt="" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/product/lg-g.jpg') }}" class="w-full rounded" alt="" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/product/lg-d.jpg') }}" class="w-full rounded" alt="" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/product/lg-h.jpg') }}" class="w-full rounded" alt="" >
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/product/lg-e.jpg') }}" class="w-full rounded" alt="" >
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-1/2 -translate-x-1/2 -bottom-7.5 z-10 w-[282px] md:w-[384px] 2xl:w-[470px]">
                            <div class="swiper js-slider" data-parent="#sliderNav" data-breakpoints='{
                                "0":{"slidesPerView":2,"slidesPerGroup":2},
                                "420":{"slidesPerView":3,"slidesPerGroup":3},
                                "778":{"slidesPerView":4,"slidesPerGroup":4},
                                "1540":{"slidesPerView":5,"slidesPerGroup":5}
                                }'>
                                <div class="swiper-wrapper py-0.5">
                                    <div class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto px-2">
                                        <img src="{{ asset('images/product/lg-a.jpg') }}" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" >
                                    </div>
                                    <div class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto px-2">
                                        <img src="{{ asset('images/product/lg-g.jpg') }}" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" >
                                    </div>
                                    <div class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto px-2">
                                        <img src="{{ asset('images/product/lg-d.jpg') }}" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" >
                                    </div>
                                    <div class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto px-2">
                                        <img src="{{ asset('images/product/lg-h.jpg') }}" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" >
                                    </div>
                                    <div class="group swiper-slide cursor-pointer [&.swiper-slide-thumb-active]:cursor-auto px-2">
                                        <img src="{{ asset('images/product/lg-e.jpg') }}" class="w-full rounded border-2 border-white dark:border-gray-950 transition-all ring-2 ring-gray-200 dark:ring-gray-600 group-[.swiper-slide-thumb-active]:ring-primary-600 group-[.swiper-slide-thumb-active]:dark:ring-primary-600" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-3.5">
                    <div class="mt-11 2xl:me-11">
                        <h4 class="text-xl lg:text-2xl tracking-tight font-bold font-heading leading-tighter mb-2 text-primary-600">$78.00 <small class="text-sm text-slate-400 font-normal">$98.00</small></h4>
                        <h2 class="text-3xl lg:text-4xl tracking-tight font-heading font-bold leading-tighter mb-2 text-slate-700 dark:text-white">Classy Modern Smart watch</h2>
                        <div class="flex items-center">
                            <ul class="flex items-center gap-0.5 text-yellow-600">
                                <li><em class="text-base leading-none ni ni-star-fill"></em></li>
                                <li><em class="text-base leading-none ni ni-star-fill"></em></li>
                                <li><em class="text-base leading-none ni ni-star-fill"></em></li>
                                <li><em class="text-base leading-none ni ni-star-fill"></em></li>
                                <li><em class="text-base leading-none ni ni-star-half"></em></li>
                            </ul>
                            <div class="text-sm ms-2 text-slate-400">(2 Reviews)</div>
                        </div><!-- .product-rating -->
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
                                    <input type="radio" class="relative h-4 w-4 rounded-full cursor-pointer transition-all duration-300 border-0 !bg-[#754c24] checked:bg-none checked:dark:shadow-none checked:ring-2 ring-offset-2 ring-primary-600 ring-offset-white dark:ring-offset-gray-950" id="productColor1" name="productColor" checked>
                                </li>
                                <li>
                                    <input type="radio" class="relative h-4 w-4 rounded-full cursor-pointer transition-all duration-300 border-0 !bg-[#636363] checked:bg-none checked:dark:shadow-none checked:ring-2 ring-offset-2 ring-primary-600 ring-offset-white dark:ring-offset-gray-950" id="productColor2" name="productColor">
                                </li>
                                <li>
                                    <input type="radio" class="relative h-4 w-4 rounded-full cursor-pointer transition-all duration-300 border-0 !bg-[#ba6ed4] checked:bg-none checked:dark:shadow-none checked:ring-2 ring-offset-2 ring-primary-600 ring-offset-white dark:ring-offset-gray-950" id="productColor3" name="productColor">
                                </li>
                                <li>
                                    <input type="radio" class="relative h-4 w-4 rounded-full cursor-pointer transition-all duration-300 border-0 !bg-[#ff87a3] checked:bg-none checked:dark:shadow-none checked:ring-2 ring-offset-2 ring-primary-600 ring-offset-white dark:ring-offset-gray-950" id="productColor4" name="productColor">
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5 last:mb-0">
                            <h6 class="text-base -tracking-snug font-heading font-bold leading-tighter mb-2 text-slate-700 dark:text-white">Size</h6>
                            <ul class="inline-flex flex-wrap items-center gap-3">
                                <li>
                                    <div class="inline-flex relative">
                                        <input type="radio" name="sizeCheck" class="peer h-0 w-0 absolute opacity-0" id="sizeCheck1" checked>
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="sizeCheck1">XS</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inline-flex relative">
                                        <input type="radio" name="sizeCheck" class="peer h-0 w-0 absolute opacity-0" id="sizeCheck2">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="sizeCheck2">SM</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inline-flex relative">
                                        <input type="radio" name="sizeCheck" class="peer h-0 w-0 absolute opacity-0" id="sizeCheck3">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="sizeCheck3">L</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inline-flex relative">
                                        <input type="radio" name="sizeCheck" class="peer h-0 w-0 absolute opacity-0" id="sizeCheck4">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="sizeCheck4">XL</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-5 last:mb-0">
                            <ul class="flex flex-wrap items-center gap-3 pt-1.5">
                                <li class="w-[140px]">
                                    <div class="relative flex -space-x-px w-full items-stretch number-spinner-wrap">
                                        <button class="relative inline-flex items-center justify-center flex-shrink-0 text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-minus" data-number="minus"><em class="text-sm leading-4.5 ni ni-minus"></em></button>
                                        <input type="number" class="number-spinner w-[68px] relative z-10 text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500  focus:dark:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" value="0">
                                        <button class="relative inline-flex items-center justify-center flex-shrink-0 text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-plus" data-number="plus"><em class="text-sm leading-4.5 ni ni-plus"></em></button>
                                    </div>
                                </li>
                                <li>
                                    <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Add to Cart</button>
                                </li>
                                <li class="ms-n1">
                                    <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600"><em class="text-lg ni ni-heart"></em></button>
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
                        <img class="w-full" src="{{ asset('images/product/video-a.jpg') }}" alt="">
                        <a class="absolute start-8 bottom-8 text-white text-xl flex items-center gap-2" data-fslightbox href="https://www.youtube.com/watch?v=SSo_EIwHSd4">
                            <em class="text-3xl ni ni-play"></em>
                            <span>Watch Video</span>
                        </a>
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
        </div>
    </div>
</div>
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
    <div class="relative mb-5 last:mb-0">
        <h3 class="font-heading font-bold text-2xl lg:text-3xl text-slate-700 dark:text-white">Related Products</h3>
    </div>
    <div class="swiper js-slider !-mx-3.5" data-breakpoints='{
        "0":{"slidesPerView":1,"slidesPerGroup":1},
        "576":{"slidesPerView":2,"slidesPerGroup":2},
        "992":{"slidesPerView":3,"slidesPerGroup":3},
        "1540":{"slidesPerView":4,"slidesPerGroup":4}
        }'>
        <div class="swiper-wrapper">
            <div class="swiper-slide px-3.5">
                <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
                    <div class="relative">
                        <a href="{{ route('product.details') }}">
                            <img class="rounded-t" src="{{ asset('images/product/lg-a.jpg') }}" alt="">
                        </a>
                        <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                            <li><span class="relative inline-flex rounded-sm px-1.5 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">New</span></li>
                        </ul>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Smart Watch</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Classy Modern Smart watch</a>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">$350</small> 
                            $324
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide px-3.5">
                <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
                    <div class="relative">
                        <a href="{{ route('product.details') }}">
                            <img class="rounded-t" src="{{ asset('images/product/lg-b.jpg') }}" alt="">
                        </a>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Vintage Phone</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">White Vintage telephone</a>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">$209</small> 
                            $119
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide px-3.5">
                <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
                    <div class="relative">
                        <a href="{{ route('product.details') }}">
                            <img class="rounded-t" src="{{ asset('images/product/lg-c.jpg') }}" alt="">
                        </a>
                        <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                            <li><span class="relative inline-flex rounded-sm px-1.5 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">hot</span></li>
                        </ul>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Headphone</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Black Wireless Headphones</a>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">$129</small> 
                            $89
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide px-3.5">
                <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
                    <div class="relative">
                        <a href="{{ route('product.details') }}">
                            <img class="rounded-t" src="{{ asset('images/product/lg-d.jpg') }}" alt="">
                        </a>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Smart Watch</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Modular Smart Watch</a>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">$169</small> 
                            $120
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide px-3.5">
                <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
                    <div class="relative">
                        <a href="{{ route('product.details') }}">
                            <img class="rounded-t" src="{{ asset('images/product/lg-e.jpg') }}" alt="">
                        </a>
                        <ul class="flex rounded-t overflow-hidden transition ease-linear duration-200 absolute bottom-1 start-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100">
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-cart"></em>
                                </a>
                            </li>
                            <li class="px-0.5">
                                <a href="#" class="w-8 h-8 inline-flex items-center justify-center transition-all duration-300 text-slate-600 hover:text-primary-600">
                                    <em class="text-base ni ni-heart"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5 sm:p-6 text-center">
                        <ul class="flex flex-wrap justify-center">
                            <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Headphones</a></li>
                        </ul>
                        <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                            <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">White Wireless Headphones</a>
                        </h5>
                        <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                            <small class="text-slate-400 text-xs font-normal line-through">$109</small> 
                            $78
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev after:hidden !h-11 !w-11 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-full !text-slate-400 dark:!text-slate-200 !-translate-x-2 sm:!-translate-x-2.5 [&[aria-disabled='true']]:!text-slate-200 [&[aria-disabled='true']]:dark:!text-slate-400 [&[aria-disabled='true']]:cursor-not-allowed">
            <em class="text-2xl leading-none text-current ni ni-chevron-left"></em>
        </div>
        <div class="swiper-button-next after:hidden !h-11 !w-11 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 rounded-full !text-slate-400 dark:!text-slate-200 !translate-x-2 sm:!translate-x-2.5 [&[aria-disabled='true']]:!text-slate-200 [&[aria-disabled='true']]:dark:!text-slate-400 [&[aria-disabled='true']]:cursor-not-allowed">
            <em class="text-2xl leading-none text-current rtl:-scale-x-100 ni ni-chevron-right"></em>
        </div>
    </div>
</div>
@endsection