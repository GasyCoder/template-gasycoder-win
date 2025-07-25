@extends('layouts.main', ['title'=> 'Rating Widgets'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Card Style for Ratings</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Use ratings card with variant for an invaluable source of feedback.</p>
    
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Rating Card</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            
                            <div class="flex flex-col items-center text-center p-2">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-cyan-600 h-16 w-16 rounded-full font-normal">
                                <span>JL</span>
                                <div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                                <div class="mt-5">
                                    <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Joe Larson</h6>
                                    <span class="text-sm text-slate-400">@larson</span>
                                </div>
                            </div>

                            <ul class="flex gap-1 mt-1 text-yellow-600 justify-center text-base">
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-half-fill"></em></li>
                                <li><em class="icon ni ni-star"></em></li>
                            </ul>
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
                    </div><!-- card -->
                </div><!-- col -->

                <div class="col-span-12 md:col-span-5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter text-center font-bold font-heading text-slate-700 dark:text-white mb-3">Design Quality</h5>
                            
                            <div class="flex flex-col items-center text-center p-2">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-green-600 h-16 w-16 rounded-full font-normal">
                                    <span>4.5</span>
                                    <div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                                </div>
                            </div>

                            <ul class="flex gap-1 mt-1 text-yellow-600 justify-center text-base">
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-half-fill"></em></li>
                            </ul>
                            <div class="pt-2 text-center mx-auto max-w-[200px]">
                                <p>108 Ratings</p>
                            </div>
                            <div class="pt-4">
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">5 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-green-700 rounded-sm" data-progress="72%"></div>
                                    </div>
                                    <div class="text-xs">72%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">4 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-green-600 rounded-sm" data-progress="58%"></div>
                                    </div>
                                    <div class="text-xs">58%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">3 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-cyan-600 rounded-sm" data-progress="34%"></div>
                                    </div>
                                    <div class="text-xs">34%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">2 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-yellow-600 rounded-sm" data-progress="18%"></div>
                                    </div>
                                    <div class="text-xs">18%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 pt-2">
                                    <div class="text-sm w-fit whitespace-nowrap">1 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-red-600 rounded-sm" data-progress="55%"></div>
                                    </div>
                                    <div class="text-xs">55%</div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Customer Review</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter text-center font-bold font-heading text-slate-700 dark:text-white mb-4">Customer Review</h5>
                            <div class="flex items-center justify-center gap-3 mx-auto w-fit bg-gray-200 dark:bg-gray-1000 rounded-full px-4 py-2 my-2">
                                <ul class="flex gap-1 text-yellow-600 justify-center text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                    <li><em class="icon ni ni-star"></em></li>
                                </ul>
                                <div class="text-center mx-auto">
                                    <p>3.5 out of 5</p>
                                </div>
                            </div>
                            
                            <div class="pt-2 text-center mx-auto max-w-[200px]">
                                <span class="text-sm text-slate-400">40 customers ratings</span>
                            </div>
                            <div class="pt-4">
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">5 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-primary-600 rounded-sm" data-progress="62%"></div>
                                    </div>
                                    <div class="text-xs">62%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">4 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-primary-600 rounded-sm" data-progress="47%"></div>
                                    </div>
                                    <div class="text-xs">47%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">3 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-primary-600 rounded-sm" data-progress="24%"></div>
                                    </div>
                                    <div class="text-xs">24%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 py-2">
                                    <div class="text-sm w-fit whitespace-nowrap">2 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-primary-600 rounded-sm" data-progress="30%"></div>
                                    </div>
                                    <div class="text-xs">30%</div>
                                </div>
                                <div class="flex items-center justify-between gap-4 text-slate-400 pt-2">
                                    <div class="text-sm w-fit whitespace-nowrap">1 star</div>
                                    <div class="flex h-1.5 w-full rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                                        <div class="text-xs text-white bg-primary-600 rounded-sm" data-progress="40%"></div>
                                    </div>
                                    <div class="text-xs">40%</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->

                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6 flex items-center gap-6">
                            <div>
                                <h1 class="text-6xl leading-tighter text-center font-normal font-heading text-slate-700 dark:text-white mb-2">4.4</h1>
                                <div class="flex items-center justify-center gap-3 mx-auto ">
                                    <ul class="flex gap-1 text-yellow-600 justify-center text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-half-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                            
                                <div class="pt-2 text-center mx-auto max-w-[200px]">
                                    <span class="text-sm text-slate-400"><em class="icon ni ni-users-fill me-1"></em>47,860 Total</span>
                                </div>
                            </div>
                            <div class="pt-4 w-full">
                                <div class="flex items-center gap-4 text-slate-400 py-2">
                                    <div class="text-sm">5</div>
                                    <div class="flex h-4 w-full overflow-hidden">
                                        <div class=" text-xs text-white bg-green-700 rounded-sm" data-progress="70%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 text-slate-400 py-2">
                                    <div class="text-sm">4</div>
                                    <div class="flex h-4 w-full overflow-hidden">
                                        <div class="text-xs text-white bg-green-600 rounded-sm" data-progress="55%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 text-slate-400 py-2">
                                    <div class="text-sm">3</div>
                                    <div class="flex h-4 w-full overflow-hidden">
                                        <div class="text-xs text-white bg-cyan-600 rounded-sm" data-progress="38%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 text-slate-400 py-2">
                                    <div class="text-sm">2</div>
                                    <div class="flex h-4 w-full overflow-hidden">
                                        <div class="text-xs text-white bg-yellow-600 rounded-sm" data-progress="15%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 text-slate-400 pt-2">
                                    <div class="text-sm">1</div>
                                    <div class="flex h-4 w-full overflow-hidden">
                                        <div class="text-xs text-white bg-red-600 rounded-sm" data-progress="30%"></div>
                                    </div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User Profile</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">UI/UX Designer at Google</h4>
                            <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-half-fill"></em></li>
                                <li><em class="icon ni ni-star"></em></li>
                            </ul>
                            <div class="flex items-end justify-between">
                                <ul class="pt-2 gy-1">
                                    <li><em class="icon ni ni-map-pin me-1"></em>60311 Frankfurt am Main, Italy</li>
                                    <li><em class="icon ni ni-calender-date me-1"></em>28th Sept, 2021</li>
                                    <li><em class="icon ni ni-briefcase me-1"></em>Fulltime</li>
                                </ul>
                                <span class="relative inline-flex rounded-full px-3 py-1 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">$1550.00</span>
                            </div>

                            <div class="hidden pt-7" id="collapseDes1">
                                <div class="border-t border-gray-200 dark:border-gray-900 mb-7"></div>
                                <div class="rating-card-description">
                                    <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                    <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                    <ul class="pt-2 gy-1">
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">30 days off</span></li
                                        ><li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Free drinks</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Paid leave</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Healthcare</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900 flex items-center justify-between">
                            <a href="#" class="block-toggle group flex items-center font-medium text-gray-500" data-active-class="show" data-target="#collapseDes1">
                                <span class="group-[.show]:hidden">More Info</span> <span class="hidden group-[.show]:block">Less Info</span><em class="icon ni ni-downward-ios ms-3 font-bold text-base group-[.show]:-scale-y-100"></em>
                            </a>
                            <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->

                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Developer at Softnio</h4>
                            <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-fill"></em></li>
                                <li><em class="icon ni ni-star-half-fill"></em></li>
                                <li><em class="icon ni ni-star"></em></li>
                            </ul>
                            <div class="flex items-end justify-between">
                                <ul class="pt-2 gy-1">
                                    <li><em class="icon ni ni-map-pin me-1"></em>60311 Frankfurt am Main, Italy</li>
                                    <li><em class="icon ni ni-calender-date me-1"></em>28th Sept, 2021</li>
                                    <li><em class="icon ni ni-briefcase me-1"></em>Fulltime</li>
                                </ul>
                                <span class="relative inline-flex rounded-full px-3 py-1 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">$1550.00</span>
                            </div>

                            <div class="hidden pt-7" id="collapseDes2">
                                <div class="border-t border-gray-200 dark:border-gray-900 mb-7"></div>
                                <div class="rating-card-description">
                                    <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                    <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                    <ul class="pt-2 gy-1">
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">30 days off</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Free drinks</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Paid leave</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Healthcare</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900 flex items-center justify-between">
                            <a href="#" class="block-toggle group flex items-center font-medium text-gray-500" data-active-class="show" data-target="#collapseDes2">
                                <span class="group-[.show]:hidden">More Info</span> <span class="hidden group-[.show]:block">Less Info</span><em class="icon ni ni-downward-ios ms-3 font-bold text-base group-[.show]:-scale-y-100"></em>
                            </a>
                            <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Institute Profile</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                            <div class="flex gap-3 items-center">
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                    <li><em class="icon ni ni-star"></em></li>
                                </ul>
                                <span>4.4 (78)</span>
                            </div>
                            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-6 mb-3">Criteria on Softnio</h5>
                            <div class="flex justify-between py-2">
                                <span class="text-slate-400">Productivity</span>
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                </ul>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-slate-400">Competitive Position</span>
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star"></em></li>
                                </ul>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-slate-400">Brand Value</span>
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                </ul>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-slate-400">Environment</span>
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star"></em></li>
                                </ul>
                            </div>
                            <div class="hidden pt-7" id="collapseDes3">
                                <div class="border-t border-gray-200 dark:border-gray-900 mb-7"></div>
                                <div class="rating-card-description">
                                    <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-3">Description</h5>
                                    <p class="text-slate-500 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title bulk.</p>
                                    <ul class="pt-2 gy-1">
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">30 days off</span></li
                                        ><li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Free drinks</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Paid leave</span></li>
                                        <li class="py-1"><em class="icon ni ni-check-circle text-primary-600 me-1"></em><span class="text-slate-400">Healthcare</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900 flex items-center justify-between">
                            <a href="#" class="block-toggle group flex items-center font-medium text-gray-500" data-active-class="show" data-target="#collapseDes3">
                                <span class="group-[.show]:hidden">More Info</span> <span class="hidden group-[.show]:block">Less Info</span><em class="icon ni ni-downward-ios ms-3 font-bold text-base group-[.show]:-scale-y-100"></em>
                            </a>
                            <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Apply</a>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Review form</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                            <div>
                                <div class="flex gap-3 items-center">
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-half-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                    <span>4.4 (78)</span>
                                </div>

                                <div class="my-4">
                                    <div class="mb-5">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-02">Title</label>
                                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-02" value="You only miss it when it gone!">
                                        </div>
                                    </div>  
                                    <div class="mb-5">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-02">Job Title</label>
                                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-02" value="Sr. Frontend Developer">
                                        </div>
                                    </div>   
                                    <div class=" mb-5">
                                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-textarea">How was your experience?</label>
                                        <div class="relative">
                                            <textarea class="block w-full text-sm leading-4.5 px-4 py-2.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="default-textarea" autocomplete="off">I've been using Dashlite for months now and with every update, it's just becoming better. Thank you for such a great design touch. Really love it</textarea>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-11 mb-3">Criteria on Softnio</h5>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Productivity</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Competitive Position</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Brand Value</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Environment</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900 flex items-center justify-end">
                            <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Published Review</a>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h4 class="text-2xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Softnio</h4>
                            <div>
                                <div class="flex gap-3 items-center">
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-half-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                    <span>4.4 (78)</span>
                                </div>

                                <div class="my-4">
                                    <div class="mb-5">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-02">Title</label>
                                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-02" placeholder="Title">
                                        </div>
                                    </div>  
                                    <div class="mb-5">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-02">Job Title</label>
                                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-02" placeholder="Job Title">
                                        </div>
                                    </div>   
                                    <div class=" mb-5">
                                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-textarea">How was your experience?</label>
                                        <div class="relative">
                                            <textarea class="block w-full text-sm leading-4.5 px-4 py-2.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="default-textarea" autocomplete="off" placeholder="Describe your experience at Softnio"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter  mt-11 mb-3">Criteria on Softnio</h5>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Productivity</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Competitive Position</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Brand Value</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                                <div class="flex justify-between py-2">
                                    <span class="text-slate-400">Environment</span>
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-200 dark:bg-gray-1000 border-t rounded-b-md border-gray-300 dark:border-gray-900 flex items-center justify-end">
                            <a href="#" class="btn bg-primary-600 text-white px-5 py-2 rounded-md font-medium">Published Review</a>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Customers Ratings</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12 md:col-span-9">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Design Quality</h4>
                                    <p class="text-slate-600">by <span class="text-primary-600">Softnio</span> 13 days ago</p>
                                </div>
                                <div class="flex gap-3 items-center">
                                    <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-fill"></em></li>
                                        <li><em class="icon ni ni-star-half-fill"></em></li>
                                        <li><em class="icon ni ni-star"></em></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div><!-- card -->

                    <div class="border rounded-md bg-white-50 dark:bg-gray-950 border-gray-300 dark:border-gray-900 mt-7 ">
                        <div class="flex items-center justify-between bg-slate-50 dark:bg-gray-1000 rounded-tl-md rounded-tr-md p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <div class="card-title">
                                <h4 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-2">Feature Quality</h4>
                                <p class="text-slate-600">by <span class="text-primary-600">Softnio</span> 6 days ago</p>
                            </div>
                            <div class="flex gap-3 items-center">
                                <ul class="flex gap-1 text-yellow-600 justify-start text-base">
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-fill"></em></li>
                                    <li><em class="icon ni ni-star-half-fill"></em></li>
                                    <li><em class="icon ni ni-star"></em></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <p class="text-slate-400">I've been using Dashlite for months now and with every update, update it's just becoming more and more better it's just becoming better. Thank you for such a great design touch. Further I definitely cooperate with your product . Highly appriciate it. Really love it</p>
                        </div>
                        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="ms-4">
                                    <div class="flex items-center gap-3 mb-3">
                                        <h6 class="text-lg leading-tighter font-bold font-heading text-slate-700 dark:text-white">Abu Bin Ishiyak</h6>
                                        <span class="relative inline-flex rounded-sm px-2 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Author</span>
                                    </div>
                                    <p class=" text-slate-400">Time zone depend on your server time as we use that by default. So you need to change that from your server. For data display issues, you may send your website url so we can check what actually wrong.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-full font-medium">
                                    <span>IB</span>
                                </div>
                                <div class="ms-4">
                                    <h6 class="text-lg leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Ifrat Binte</h6>
                                    <p class=" text-slate-400">Thanks for the help. Really great support.</p>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Customization</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12 gap-7">
                <div class="col-span-12">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <div class="flex gap-3 items-center">
                                <ul class="flex gap-1 text-red-600 justify-start text-base">
                                    <li><em class="icon ni ni-heart-fill"></em></li>
                                    <li><em class="icon ni ni-heart-fill"></em></li>
                                    <li><em class="icon ni ni-heart-fill"></em></li>
                                    <li><em class="icon ni ni-heart-fill"></em></li>
                                    <li><em class="icon ni ni-heart"></em></li>
                                </ul>
                            </div>
                        </div>

                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block --> 

</div>
@endsection
