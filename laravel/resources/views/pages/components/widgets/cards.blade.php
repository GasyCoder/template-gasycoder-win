@extends('layouts.main', ['title'=> 'Card Widgets'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Card Widgets</h2>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Product card</h5>
            <p class="text-sm leading-6 text-slate-400">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 xs:col-span-7 md:col-span-5 ">
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
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Image Popup</h5>
            <p class="text-sm leading-6 text-slate-400">Use <code class="text-pink-600">.popup-image</code> on an <code class="text-pink-600">a</code> tag then popup image in <code class="text-pink-600">[href]</code> attribute.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-6 lg:col-span-5">
                    <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/a.jpg') }}">
                            <img class="w-full rounded-t" src="{{ asset('images/stock/a.jpg') }}" alt="">
                        </a>
                        <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                    <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                                </div>
                                <div class="ms-4">
                                    <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Dustin Mock</span>
                                    <span class="block text-xs leading-4 text-slate-400">mock@softnio.com</span>
                                </div>
                            </div>
                            <div>
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                                    <em class="text-xl leading-4.5 ni ni-heart"></em>
                                    <span class="ms-3">34</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User card</h5>
            <p class="text-sm leading-6 text-slate-400">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <div class="relative">
                                <div class="absolute flex items-center justify-center h-5 w-5 rounded-full bg-red-600 text-white"><em class="icon ni ni-na"></em></div>
                                <div class="dropdown absolute top-0 end-0 -mt-1 -me-1" >
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="text-base ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-focus"></em>
                                                    <span>Quick View</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                    <span>View Details</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-mail"></em>
                                                    <span>Send Email</span>
                                                </a>
                                            </li>
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-star"></em>
                                                    <span>Reset Pass</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-off"></em>
                                                    <span>Reset 2FA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                                    <span>Suspend User</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center text-center p-2">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-primary-600 h-16 w-16 rounded-full font-normal">
                                        <span>AB</span>
                                        <div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                                    </div>
                                    <div class="mt-5">
                                        <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Abu Bin Ishtiyak</h6>
                                        <span class="text-sm text-slate-400">@ishtiyak</span>
                                    </div>
                                </div>
                                <div class="pt-2 text-center mx-auto max-w-[200px]">
                                    <p>I am an UI/UX Designer and Love to be creative.</p>
                                </div>
                                <ul class="flex justify-around text-center pt-4 pb-6 w-full">
                                    <li class="px-2">
                                        <span class="text-lg text-slate-800 dark:text-white block">213</span>
                                        <span class="text-sm leading-6 text-slate-400 block">Projects</span>
                                    </li>
                                    <li class="px-2">
                                        <span class="text-lg text-slate-800 dark:text-white block">87.5%</span>
                                        <span class="text-sm leading-6 text-slate-400 block">Performed</span>
                                    </li>
                                    <li class="px-2">
                                        <span class="text-lg text-slate-800 dark:text-white block">587</span>
                                        <span class="text-sm leading-6 text-slate-400 block">Tasks</span>
                                    </li>
                                </ul>
                                <div class="flex justify-center pb-1">
                                    <a href="{{route('user.details')}}" class="relative inline-flex items-center justify-center text-center font-heading align-middle text-sm font-bold leading-4.5 rounded-full px-4.5 py-2 tracking-wide min-w-[150px] border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
                                        <span>View Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- card -->
                </div>
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User card Alternet</h5>
            <p class="text-sm leading-6 text-slate-400">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <div class="relative">
                                <div class="dropdown absolute top-0 end-0 -mt-1 -me-1" >
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="text-base ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-focus"></em>
                                                    <span>Quick View</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                    <span>View Details</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-mail"></em>
                                                    <span>Send Email</span>
                                                </a>
                                            </li>
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-star"></em>
                                                    <span>Reset Pass</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-off"></em>
                                                    <span>Reset 2FA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                                    <span>Suspend User</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center text-center p-2">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-3xl text-white bg-primary-600 h-20 w-20 rounded-full font-normal">
                                        <span>AB</span>
                                        <div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                                    </div>
                                    <div class="mt-5">
                                        <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Abu Bin Ishtiyak</h6>
                                        <span class="text-sm text-slate-400">UI/UX Designer</span>
                                    </div>
                                </div>
                                <ul class="pt-4 pb-5">
                                    <li class="flex items-center justify-between text-base leading-7">
                                        <span class="text-slate-400 dark:text-slate-600">Join Date</span>
                                        <span class="text-slate-600 dark:text-slate-400">24 Jun 2015</span>
                                    </li>
                                    <li class="flex items-center justify-between text-base leading-7">
                                        <span class="text-slate-400 dark:text-slate-600">Contact</span>
                                        <span class="text-slate-600 dark:text-slate-400">+88 01713-123656</span>
                                    </li>
                                    <li class="flex items-center justify-between text-base leading-7">
                                        <span class="text-slate-400 dark:text-slate-600">Email</span>
                                        <span class="text-slate-600 dark:text-slate-400">info@softnio.com</span>
                                    </li>
                                </ul>
                                <div class="flex justify-center pb-1">
                                    <a href="{{route('user.details')}}" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide w-full border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">
                                        <span>View Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Card with tabs</h5>
            <p class="text-sm leading-6 text-slate-400">With this card design, you can use multiple tabs on a card.</p>
            <p class="text-sm leading-6 text-slate-400">Card titles are used by adding <code class="text-pink-600">.card-title</code> to a <code class="text-primary-600">&lt;h*&gt;</code> tag. <br> In the same way, links are added and placed next to each other by adding <code class="text-pink-600">.card-link</code> to an <code class="text-primary-600">&lt;a&gt;</code> tag.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 pb-2 sm:p-6 sm:pb-2">
                            <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Investment Overview</h6>
                            <p class="text-xs leading-5 text-slate-400">The investment overview of your platform. <a class="text-primary-500 hover:text-primary-600" href="#">All Investment</a></p>
                        </div>
                        <ul class="tab-nav flex flex-wrap border-b border-gray-300 dark:border-gray-900 px-5 sm:px-6">
                            <li class="tab-item pe-5 last:pe-0">
                                <button class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#tabOverview">Overview</button>
                            </li>
                            <li class="tab-item pe-5 last:pe-0">
                                <button class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabThisyear">This Year</button>
                            </li>
                            <li class="tab-item pe-5 last:pe-0">
                                <button class="tab-toggle inline-flex items-center text-sm font-medium py-3 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabAllTime">All Time</button>
                            </li>
                        </ul>
                        <div class="tab-content p-5 sm:p-6">
                            <div class="tab-panel hidden [&.active]:block active" id="tabOverview">
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">56</span><span class="ms-1 text-sm text-green-600"><em class="ni ni-arrow-long-up"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                                    <div class="flex">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">49,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">23</span><span class="ms-1 text-sm text-red-600"><em class="ni ni-arrow-long-down"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel hidden [&.active]:block" id="tabThisyear">
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">89,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">96</span><span class="ms-1 text-sm text-green-600"><em class="ni ni-arrow-long-up"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">99,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                                    <div class="flex">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">149,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">83</span><span class="ms-1 text-sm text-red-600"><em class="ni ni-arrow-long-down"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-panel hidden [&.active]:block" id="tabAllTime">
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Currently Actived Investment</div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">249,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">556</span><span class="ms-1 text-sm text-green-600"><em class="ni ni-arrow-long-up"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                    <div class="flex py-1.5">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">149,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Paid Profit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-5 first:pt-0 last:pb-0">
                                    <div class="text-sm font-medium text-slate-400 mb-2">Investment in this Month</div>
                                    <div class="flex">
                                        <div class="w-3/5">
                                            <div class="text-xl leading-tighter text-slate-700 dark:text-white">249,395.395  <span class="text-slate-600 dark:text-slate-400">USD</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Amount</div>
                                        </div>
                                        <div class="w-2/5">
                                            <div><span class="text-xl leading-tighter text-slate-700 dark:text-white">223</span><span class="ms-1 text-sm text-red-600"><em class="ni ni-arrow-long-down"></em>1.93%</span></div>
                                            <div class="text-xs text-slate-400 uppercase mt-1 tracking-widest">Plans</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Pricing table</h5>
            <p class="text-sm leading-6 text-slate-400">You can customize it ton of ways.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6 text-center">
                            <div class="pb-5">
                                <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Starter</h4>
                                <p class="text-sm text-slate-400">Enjoy entry level of invest &amp; earn.</p>
                            </div>
                            <div class="flex flex-wrap -mx-3.5">
                                <div class="w-1/2 px-3.5">
                                    <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">1.67%</div>
                                    <div class="text-sm text-slate-400">Daily Interest</div>
                                </div>
                                <div class="w-1/2 px-3.5">
                                    <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">30</div>
                                    <div class="text-sm text-slate-400">Term Days</div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800">
                            <ul>
                                <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$250</span></li>
                                <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$1,999</span></li>
                                <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                                <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">125%</span></li>
                            </ul>
                            <div class="mt-6 text-center">
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 bg-white dark:bg-gray-950 hover:bg-gray-200 hover:dark:bg-gray-900 hover:text-slate-700 dark:text-white hover:border-gray-200 dark:border-gray-800 active:bg-gray-300 active:text-slate-700 dark:text-white active:border-gray-300 dark:border-gray-900 transition-all duration-300">Choose this plan</button>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Pricing table alt</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6 text-center">
                            <div class="py-1 mb-6">
                                <img class="max-w-[90px] mx-auto" src="{{ asset('images/icons/plan-s1.svg') }}" alt="">
                            </div>
                            <div class="w-[220px] mx-auto">
                                <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Starter</h5>
                                <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                            </div>
                            <div class="pt-5">
                                <div class="text-2xl text-slate-600 dark:text-white font-bold">$99 <span>/yr</span></div>
                                <span class="text-sm text-slate-400">1 User, Billed Yearly</span>
                            </div>
                            <div class="pt-6">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Project card</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-start gap-x-3 mb-5">
                                <a href="#" class="flex items-center">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-md font-medium">
                                        <span>DD</span>
                                    </div>
                                    <div class="ms-4 flex flex-col">
                                        <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">DashWind Development</h6>
                                        <span class="text-sm leading-4 text-slate-400">Softnio</span>
                                    </div>
                                </a>
                                <div class="relative dropdown">
                                    <button  data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-eye"></em><span>View Project</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-edit"></em><span>Edit Project</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p>Design and develop the DashWind template for Envato Marketplace.</p>
                            </div>
                            <div class="mb-4">
                                <div class="flex justify-between mb-2">
                                    <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                    <div class="font-medium text-slate-600 dark:text-slate-300">93.5%</div>
                                </div>
                                <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                                    <div class="rounded-full bg-primary-600" data-progress="93.5%"></div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <ul class="flex items-center gap-1.5">
                                    <li>
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                            <span>A</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                            <img class="rounded-[inherit]" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-slate-600 bg-gray-100 h-8 w-8 rounded-full font-medium">
                                            <span>+12</span>
                                        </div>
                                    </li>
                                </ul>
                                <span class="relative inline-flex items-center rounded-sm px-2 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                                    <em class="me-2 text-base leading-none ni ni-clock"></em><span>5 Days Left</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Kanban card</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6 lg:col-span-5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between">
                                <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Techyspec Keyword Research</h6>
                                <div class="relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-red-600 h-6 w-6 rounded-full font-medium">
                                            <span>V</span>
                                        </div>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute  p-4 m-1.5 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                        <div class="flex w-full">
                                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-red-600 h-8 w-8 rounded-full font-medium">
                                                <span>VL</span>
                                            </div>
                                            <div class="ms-3">
                                                <div class="text-slate-600 dark:text-slate-400 text-xs font-bold">Victoria Lynch</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="pt-3">Keyword recarch for @techyspec business profile and there other websites, to improve ranking.</p>
                            <div class="pt-2">
                                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-900 dark:border-gray-400 bg-gray-900 dark:bg-gray-400 text-white dark:text-gray-700 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Techyspec</span>
                                <span class="relative inline-flex rounded-sm px-1.5 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">SEO</span>
                            </div>

                            <div class="flex justify-between pt-2 text-slate-400">
                                <ul class="flex gap-2">
                                    <li><em class="icon ni ni-calendar me-1"></em><span>02 Jan 2021</span></li>
                                    <li><em class="icon ni ni-notes me-1"></em><span>Recharch</span></li>
                                </ul>
                                <ul class="flex gap-2">
                                    <li><em class="icon ni ni-clip me-1"></em><span>31</span></li>
                                    <li><em class="icon ni ni-comments me-1"></em><span>21</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <!-- kanban card -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User list card</h5>
            <p>The following card can be use for <strong class="text-primary-600">User list, customer list</strong> related filed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <div class="relative flex items-center justify-between -my-1">
                                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">New Users</h6>
                                <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">View All</a>
                            </div>
                        </div>
                        <ul>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-primary-500 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="ms-4">
                                    <span class="block text-sm font-bold leading-6 text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                                    <span class="block text-xs leading-4 text-slate-400">info@softnio.com</span>
                                </div>
                                <div class="dropdown relative ms-auto">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-pink-500 bg-pink-100 dark:bg-pink-950 h-10 w-10 rounded-full font-medium">
                                    <span>SW</span>
                                </div>
                                <div class="ms-4">
                                    <span class="block text-sm font-bold leading-6 text-slate-700 dark:text-white">Sharon Walker</span>
                                    <span class="block text-xs leading-4 text-slate-400">sharon-90@example.com</span>
                                </div>
                                <div class="dropdown relative ms-auto">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-yellow-500 bg-yellow-100 dark:bg-yellow-950 h-10 w-10 rounded-full font-medium">
                                    <span>GO</span>
                                </div>
                                <div class="ms-4">
                                    <span class="block text-sm font-bold leading-6 text-slate-700 dark:text-white">Gloria Oliver</span>
                                    <span class="block text-xs leading-4 text-slate-400">gloria_72@example.com</span>
                                </div>
                                <div class="dropdown relative ms-auto">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-green-500 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium">
                                    <span>PS</span>
                                </div>
                                <div class="ms-4">
                                    <span class="block text-sm font-bold leading-6 text-slate-700 dark:text-white">Phillip Sullivan</span>
                                    <span class="block text-xs leading-4 text-slate-400">phillip-85@example.com</span>
                                </div>
                                <div class="dropdown relative ms-auto">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Activities card with tabs.</h5>
            <p>The following card can be use for <strong class="text-primary-600">Activities</strong> or related filed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <div class="relative flex items-center justify-between -my-1">
                                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Recent Activities</h6>
                                <ul class="flex gap-x-5 -my-1">
                                    <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>Cancel</span></a></li>
                                    <li><a class="active relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>All</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <ul>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                                    <img src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                </div>
                                <div class="ms-4">
                                    <div class="text-slate-600 dark:text-slate-400">Keith Jensen requested to Widthdrawl.</div>
                                    <span class="block text-xs text-slate-400 leading-tight">2 hours ago</span>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-500 h-10 w-10 rounded-full font-medium">HS</div>
                                <div class="ms-4">
                                    <div class="text-slate-600 dark:text-slate-400">Harry Simpson placed a Order.</div>
                                    <span class="block text-xs text-slate-400 leading-tight">2 hours ago</span>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-blue-600 h-10 w-10 rounded-full font-medium">SM</div>
                                <div class="ms-4">
                                    <div class="text-slate-600 dark:text-slate-400">Stephanie Marshall got a huge bonus.</div>
                                    <span class="block text-xs text-slate-400 leading-tight">2 hours ago</span>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                                    <img src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                                </div>
                                <div class="ms-4">
                                    <div class="text-slate-600 dark:text-slate-400">Nicholas Carr deposited funds.</div>
                                    <span class="block text-xs text-slate-400 leading-tight">2 hours ago</span>
                                </div>
                            </li>
                            <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-500 h-10 w-10 rounded-full font-medium">TM</div>
                                <div class="ms-4">
                                    <div class="text-slate-600 dark:text-slate-400">Timothy Moreno placed a Order.</div>
                                    <span class="block text-xs text-slate-400 leading-tight">2 hours ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Notification Card</h5>
            <p>The following card can be use for <strong class="text-primary-600">Notification</strong> or related filed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <div class="relative flex items-center justify-between -my-1">
                                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Notifications</h6>
                                <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">View All</a>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h6 class="text-sm font-heading font-bold text-slate-400 mb-4">November, 2019</h6>
                            <ul>
                                <li class="relative flex items-start pb-6 last:pb-0 before:absolute before:w-px before:h-[calc(100%-11px)] before:bg-gray-300 before:dark:bg-gray-800 before:top-[13px] before:start-[5px] before:last:hidden">
                                    <div class="relative h-[11px] w-[11px] rounded-full flex-shrink-0 mt-0.5 bg-primary-500 before:absolute before:h-[7px] before:w-[7px] before:rounded-full before:bg-white before:dark:bg-gray-800 before:top-0.5 before:start-0.5"></div>
                                    <div class="relative flex justify-between text-slate-400 w-[90px] ms-3 flex-shrink-0 leading-4">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                    <div class="ps-2">
                                        <h6 class="block text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-3">Submited KYC Application</h6>
                                        <p class="text-slate-400 leading-4.5 mb-1">Re-submitted KYC Application form.</p>
                                        <span class="text-xs leading-4 text-slate-400 block">09:30am</span>
                                    </div>
                                </li>
                                <li class="relative flex items-start pb-6 last:pb-0 before:absolute before:w-px before:h-[calc(100%-11px)] before:bg-gray-300 before:dark:bg-gray-800 before:top-[13px] before:start-[5px] before:last:hidden">
                                    <div class="relative h-[11px] w-[11px] rounded-full flex-shrink-0 mt-0.5 bg-primary-500"></div>
                                    <div class="relative flex justify-between text-slate-400 w-[90px] ms-3 flex-shrink-0 leading-4">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                    <div class="ps-2">
                                        <h6 class="block text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-3">Submited KYC Application</h6>
                                        <p class="text-slate-400 leading-4.5 mb-1">Re-submitted KYC Application form.</p>
                                        <span class="text-xs leading-4 text-slate-400 block">09:30am</span>
                                    </div>
                                </li>
                                <li class="relative flex items-start pb-6 last:pb-0 before:absolute before:w-px before:h-[calc(100%-11px)] before:bg-gray-300 before:dark:bg-gray-800 before:top-[13px] before:start-[5px] before:last:hidden">
                                    <div class="relative h-[11px] w-[11px] rounded-full flex-shrink-0 mt-0.5 bg-pink-500"></div>
                                    <div class="relative flex justify-between text-slate-400 w-[90px] ms-3 flex-shrink-0 leading-4">13 Nov <em class="icon ni ni-alarm-alt"></em></div>
                                    <div class="ps-2">
                                        <h6 class="block text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-3">Submited KYC Application</h6>
                                        <p class="text-slate-400 leading-4.5 mb-1">Re-submitted KYC Application form.</p>
                                        <span class="text-xs leading-4 text-slate-400 block">09:30am</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User Count</h5>
            <p>The following card can be use for <strong class="text-primary-600">User Count, View Count</strong> or related filed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 pb-2 sm:p-6 sm:pb-3">
                            <div class="flex justify-between items-center gap-2">
                                <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Pages View by Users</h6>
                                <div class="dropdown relative">
                                    <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                                        <span>30 Days</span>
                                        <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                                    </a>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">Page</span>
                                <span class="text-xs text-slate-400">Page Views</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/</span>
                                <span class="text-xs text-slate-600">2,879</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/subscription/index.html</span>
                                <span class="text-xs text-slate-600">2,094</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/general/index.html</span>
                                <span class="text-xs text-slate-600">1,634</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/crypto/index.html</span>
                                <span class="text-xs text-slate-600">1,497</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/invest/index.html</span>
                                <span class="text-xs text-slate-600">1,349</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/subscription/profile.html</span>
                                <span class="text-xs text-slate-600">984</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/general/index-crypto.html</span>
                                <span class="text-xs text-slate-600">879</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/apps/messages/index.html</span>
                                <span class="text-xs text-slate-600">598</span>
                            </div>
                            <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <span class="text-xs text-slate-400">/general/index-crypto.html</span>
                                <span class="text-xs text-slate-600">436</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Action Center</h5>
            <p>The following card can be use for <strong class="text-primary-600">Action Center, Settings</strong> or related filed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900">
                            <div class="relative flex items-center justify-between -my-1">
                                <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Action Center</h6>
                                <div class="dropdown relative ms-auto">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="flex items-center justify-between gap-4 p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="flex">
                                    <em class="text-2xl text-slate-400 w-8 -mt-1 flex-shrink-0 ni ni-cc-alt-fill"></em>
                                    <div>
                                        <div class="text-sm leading-6 font-medium pb-1 text-slate-600 dark:text-white">Pending Buy/Sell Orders</div>
                                        <p class="text-sm leading-5 text-slate-400">We have still <strong class="font-medium text-primary-600">40 buy orders</strong> and <strong class="font-medium text-primary-600">12 sell orders</strong>, thats need to review &amp; take necessary action.</p>
                                    </div>
                                </div>
                                <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 -me-3"><em class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-forward-ios"></em></a>
                            </li>
                            <li class="flex items-center justify-between gap-4 p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="flex">
                                    <em class="text-2xl text-slate-400 w-8 -mt-1 flex-shrink-0 ni ni-help-fill"></em>
                                    <div>
                                        <div class="text-sm leading-6 font-medium pb-1 text-slate-600 dark:text-white">Support Messages</div>
                                        <p class="text-sm leading-5 text-slate-400">Here is <strong class="font-medium text-primary-600">18 new</strong> support message. </p>
                                    </div>
                                </div>
                                <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 -me-3"><em class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-forward-ios"></em></a>
                            </li>
                            <li class="flex items-center justify-between gap-4 p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                                <div class="flex">
                                    <em class="text-2xl text-slate-400 w-8 -mt-1 flex-shrink-0 ni ni-wallet-fill"></em>
                                    <div>
                                        <div class="text-sm leading-6 font-medium pb-1 text-slate-600 dark:text-white">Upcoming Deposit</div>
                                        <p class="text-sm leading-5 text-slate-400">Here is <strong class="font-medium text-primary-600">7 upcoming</strong> deposit need to review.</p>
                                    </div>
                                </div>
                                <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 -me-3"><em class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-forward-ios"></em></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
</div>
@endsection
