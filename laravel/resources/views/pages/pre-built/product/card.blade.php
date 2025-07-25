@extends('layouts.main', ['title'=> 'Product List'])
@section('content')
<div class="flex justify-between items-center pb-7 gap-x-3 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white">Products</h3>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle xs:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute xs:relative start-0 end-0 top-full xs:mt-1 -mx-3.5 bg-white dark:bg-gray-950 xs:bg-transparent xs:dark:bg-transparent max-xs:shadow max-xs:dark:shadow-gray-800  opacity-0 invisible xs:opacity-100 xs:visible [&.active]:opacity-100 [&.active]:visible z-[700]">
            <ul class="flex items-center gap-4 px-3.5 py-5 xs:py-0">
                <li>
                    <div class="relative max-w-[190px]">
                        <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                            <em class="text-slate-400 text-base leading-none ni ni-search"></em>
                        </div>
                        <input type="text" class="block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-03" placeholder="Quick search by id" autocomplete="off">
                    </div>
                </li>
                <li>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 [&.show]:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span class="me-1">Status</span>
                            <em class="-me-1 text-base leading-4.5 ni ni-chevron-down"></em>
                        </a>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>New Items</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Featured</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Out of Stock</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="ms-auto">
                    <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none relative inline-flex md:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-plus"></em>
                    </button>
                    <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none relative hidden md:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-plus"></em>
                        <span class="ms-3">Add Product</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
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
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
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
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
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
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
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
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
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
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
            <div class="relative">
                <a href="{{ route('product.details') }}">
                    <img class="rounded-t" src="{{ asset('images/product/lg-f.jpg') }}" alt="">
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
                    <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Phone</a></li>
                </ul>
                <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                    <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Black Android Phone</a>
                </h5>
                <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                    $329
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
            <div class="relative">
                <a href="{{ route('product.details') }}">
                    <img class="rounded-t" src="{{ asset('images/product/lg-g.jpg') }}" alt="">
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
                    <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Modern Smart watch</a>
                </h5>
                <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                    <small class="text-slate-400 text-xs font-normal line-through">$200</small> 
                    $178
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 xs:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 rounded h-full group">
            <div class="relative">
                <a href="{{ route('product.details') }}">
                    <img class="rounded-t" src="{{ asset('images/product/lg-h.jpg') }}" alt="">
                </a>
                <ul class="flex flex-wrap gap-2 absolute top-4 start-4">
                    <li><span class="relative inline-flex rounded-sm px-1.5 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Hot</span></li>
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
                    <li class="p-1"><a class="text-slate-400 hover:text-primary-600 text-sm/6" href="#">Bundle</a></li>
                </ul>
                <h5 class="text-lg font-bold font-heading leading-tighter mt-2 mb-4">
                    <a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all duration-300" href="{{ route('product.details') }}">Gadget Bundle</a>
                </h5>
                <div class="text-lg font-bold font-heading leading-tighter text-primary-600">
                    <small class="text-slate-400 text-xs font-normal line-through">$609</small> 
                    $498
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pageAside" class="peer max-w-[calc(100%-2.5rem)] w-[400px] min-h-screen bg-white dark:bg-gray-950 border-s border-gray-300 dark:border-gray-900 flex-shrink-0 fixed top-0 end-0 z-[999] transition-transform duration-500 translate-x-full rtl:-translate-x-full [&.active]:transform-none">
    <div class="mt-16 max-h-[calc(100vh-theme(spacing.16))]" data-simplebar>
        <div class="p-5 sm:p-6">
            <div class="relative mb-5">
                <h5 class="text-xl/6 text-slate-700 dark:text-white font-heading font-bold -tracking-snug mb-2">New Product</h5>
                <p>Add information and add new product.</p>
            </div>
            <div class="grid grid-flow-dense grid-cols-12 gap-7">
                <div class="col-span-12">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="product-title">Product Title</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="product-title">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xs:col-span-6">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="regular-price">Regular Price</label>
                        <div class="relative">
                            <input type="number" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="regular-price" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xs:col-span-6">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="sale-price">Sale Price</label>
                        <div class="relative">
                            <input type="number" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="sale-price">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xs:col-span-6">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="stock">Stock</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="stock">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xs:col-span-6">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="SKU">SKU</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="SKU">
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="category">Category</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="category">
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="relative mb-5 last:mb-0">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="tags">Tags</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="tags">
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="js-upload !bg-gray-50 dark:!bg-gray-950" id="DropzoneDefault">
                        <div class="dz-message !my-4" data-dz-message>
                            <span class="block text-sm text-slate-400">Drag and drop file</span>
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-plus"></em><span class="ms-3">Add New</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-target="#pageAside" data-body-scroll="off" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible"></div>
@endsection