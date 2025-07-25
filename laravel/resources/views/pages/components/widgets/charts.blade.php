@extends('layouts.main', ['title'=> 'Chart Widgets'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Chart Widgets</h2>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Single Bar Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A bar chart provides a way of showing data values represented as vertical bars.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-start gap-2 mb-5">
                                <div>
                                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Active Users</h6>
                                    <p class="text-xs leading-5 text-slate-400">How do your users visited in the time.</p>
                                </div>
                                <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle" data-title="Users of this month">
                                    <em class="text-slate-300 ni ni-help"></em>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2 mb-6">
                                <div class="w-1/3 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Monthly</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">9.28K</span>
                                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>4.63%</span>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Weekly</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.69K</span>
                                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>1.92%</span>
                                </div>
                                <div class="w-1/3 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Daily (Avg)</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">0.94K</span>
                                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>3.45%</span>
                                </div>
                            </div>
                            <div class="h-[170px]">
                                <canvas class="analytics-au-chart max-w-full" id="analyticAuData"></canvas>
                            </div>
                            <div class="flex justify-between mt-2">
                                <div class="text-xs text-slate-400">01 Jan, 2020</div>
                                <div class="text-xs text-slate-400">30 Jan, 2020</div>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Multiple Bar Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A bar chart provides a way of comparison of multiple data sets side by side.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-start gap-2 mb-4">
                                <div>
                                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Orders Overview</h6>
                                    <p class="text-xs leading-5 text-slate-400">In last 15 days buy and sells overview. <a class="text-primary-500 hover:text-primary-600" href="#">Detailed Stats</a></p>
                                </div>
                                <div class="dropdown relative -mt-2">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>3 Months</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-flow-dense grid-cols-12 gap-6">
                                <div class="col-span-12 2xl:col-span-8 2xl:row-span-2">
                                    <div class="h-[180px] 2xl:h-[260px]">
                                        <canvas class="order-overview-chart max-w-full" id="orderOverview"></canvas>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-span-12 sm:col-span-6 2xl:col-span-4">
                                    <div class="rounded border-2 border-green-300 dark:border-green-900 pt-3 pb-5 px-5 buy">
                                        <div class="text-2xl leading-10 font-bold text-green-600">12,954.63 <small class="font-normal text-xl">USD</small></div>
                                        <div class="text-xs mb-1 text-slate-400">Last month <strong class="text-slate-700 dark:text-white font-medium">39,485 USD</strong></div>
                                        <div class="text-sm leading-tight text-slate-400 font-medium"><em class="text-base h-7 w-7 rounded-full bg-slate-50 dark:bg-slate-900 inline-flex items-center justify-center me-2 text-green-600 ni ni-arrow-down-left"></em> Buy Orders</div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 2xl:col-span-4">
                                    <div class="rounded border-2 border-primary-300 dark:border-primary-900 pt-3 pb-5 px-5 sell">
                                        <div class="text-2xl leading-10 font-bold text-primary-600">12,954.63 <small class="font-normal text-xl">USD</small></div>
                                        <div class="text-xs mb-1 text-slate-400">Last month <strong class="text-slate-700 dark:text-white font-medium">39,485 USD</strong></div>
                                        <div class="text-sm leading-tight text-slate-400 font-medium"><em class="text-base h-7 w-7 rounded-full bg-slate-50 dark:bg-slate-900 inline-flex items-center justify-center me-2 text-primary-600 ni ni-arrow-up-left"></em> Sell Orders</div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Stacked Bar Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A bar chart provides a way of comparison of multiple data with stacked view.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-start gap-2 mb-4">
                                <div>
                                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">User Activities</h6>
                                    <p class="text-xs leading-5 text-slate-400">In last 30 days <span data-placement="right"  data-rtl-placement="left" class="tooltip-toggle" data-title="Referral Informations">
                                    <em class="text-slate-300 leading-5 align-middle ni ni-info"></em>
                                </span></p>
                                </div>
                                <div class="dropdown relative"> 
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>3 Months</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-6">
                                <div class="flex">
                                    <em class="text-xl w-9 text-slate-400 ni ni-users"></em>
                                    <div class="me-4">
                                        <span class="text-lg font-medium leading-tight text-slate-600 dark:text-white">345</span>
                                        <span class="block text-xs text-slate-400">Direct Join</span>
                                    </div>
                                    <div class="w-[50px] h-[24px] self-end text-[#9cabff]">
                                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex">
                                    <em class="text-xl w-9 text-slate-400 ni ni-users"></em>
                                    <div class="me-4">
                                        <span class="text-lg font-medium leading-tight text-slate-600 dark:text-white">49</span>
                                        <span class="block text-xs text-slate-400">Referral Join</span>
                                    </div>
                                    <div class="w-[50px] h-[24px] self-end text-[#ccd4ff]">
                                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-[102px] px-2">
                            <canvas class="user-activity-chart max-w-full" id="userActivity"></canvas>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Solid Line Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A line chart is a way of plotting data points on a line.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-start gap-2 mb-4">
                                <div>
                                    <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Sales Overview</h6>
                                    <p class="text-xs leading-5 text-slate-400">In 30 days sales of product subscription. <a class="text-primary-500 hover:text-primary-600" href="#">See Details</a></p>
                                </div>
                                <div class="dropdown relative">
                                    <a tabindex="0" href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:bg-primary-600 [&.show]:bg-primary-600 hover:dark:bg-primary-600 [&.show]:dark:bg-primary-600 hover:border-primary-600 [&.show]:border-primary-600 hover:dark:border-primary-600 [&.show]:dark:border-primary-600 active:bg-primary-700 active:dark:bg-primary-700 active:border-primary-700 active:dark:border-primary-700 transition-all duration-300">
                                        <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3"><span class="hidden md:inline">Download</span> Report</span>
                                    </a>
                                    <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle [&>*]:pointer-events-none peer relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-100 text-primary-600 bg-primary-100 hover:text-white hover:bg-primary-600 hover:border-primary-600 active:bg-primary-700 active:border-primary-700 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-download-cloud"></em></a>
                                    <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Download Mini Version</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Download Full Version</span></a></li>
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-opt-alt"></em>
                                                    <span>More Options</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center justify-between gap-x-5 gap-y-2">
                                <div class="block text-3xl text-slate-700 dark:text-white">
                                    $82,944.60
                                </div>
                                <div class="block text-lg text-slate-400">
                                    1,937 <small>Subscribers</small>
                                </div>
                            </div>
                            <div class="h-[200px] pt-6">
                                <canvas class="sales-overview-chart" id="salesOverview"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Solid Line Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-center gap-2 mb-5">
                                <div>
                                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Audience Overview</h6>
                                    <p class="text-xs leading-5 text-slate-400">How have your users, sessions, bounce rate metrics trended.</p>
                                </div>
                                <div class="inline-flex align-middle -space-x-px">
                                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">7 D</a>
                                    <a href="#" class="active relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">1 M</a>
                                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">3 M</a>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2 mb-6">
                                <div class="w-1/2 xs:w-1/4 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Users</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.57K</span>
                                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>12.37%</span>
                                </div>
                                <div class="w-1/2 xs:w-1/4 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Sessions</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">3.98K</span>
                                    <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>47.74%</span>
                                </div>
                                <div class="w-1/2 xs:w-1/4 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Bounce</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">28.49%</span>
                                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                                </div>
                                <div class="w-1/2 xs:w-1/4 px-2">
                                    <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Time</div>
                                    <span class="block text-2xl leading-7 text-slate-700 dark:text-white">7m 28s</span>
                                    <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                                </div>
                            </div>
                            <div class="h-[175px]">
                                <canvas class="analytics-line-large max-w-full" id="analyticOvData"></canvas>
                            </div>
                            <div class="flex justify-between mt-2 ms-11">
                                <div class="text-xs text-slate-400">01 Jan, 2020</div>
                                <div class="text-xs text-slate-400 hidden sm:block">15 Jan, 2020</div>
                                <div class="text-xs text-slate-400">30 Jan, 2020</div>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Multiple Line Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A line chart is a way of plotting data points on a line.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 pb-2 sm:p-6 sm:pb-3">
                            <div class="flex justify-between items-center gap-2">
                                <div>
                                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Traffic Channel</h6>
                                    <p class="text-xs leading-5 text-slate-400">Top traffic channels metrics.</p>
                                </div>
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
                        <div class="table w-full text-sm text-slate-400">
                            <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Channel</span></div>
                                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Sessions</span></div>
                                <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Prev Sessions</span></div>
                                <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Change</span></div>
                                <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Trend</span></div>
                            </div>
                            <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Organic Search</div>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">4,305</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">4,129</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs">4.29% <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                                    <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                                        <canvas class="analytics-line-small max-w-full" id="OrganicSearchData"></canvas>
                                    </div>
                                </div>
                            </div><!-- row -->
                            <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Social Media</div>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">859</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">936</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs">15.8% <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                                    <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                                        <canvas class="analytics-line-small max-w-full" id="SocialMediaData"></canvas>
                                    </div>
                                </div>
                            </div><!-- row -->
                            <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Referrals</div>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">482</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">793</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs">41.3% <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                                    <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                                        <canvas class="analytics-line-small max-w-full" id="ReferralsData"></canvas>
                                    </div>
                                </div>
                            </div><!-- row -->
                            <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Others</div>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">138</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs text-slate-500">97</span>
                                </div>
                                <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                                    <span class="text-xs">12.6% <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                </div>
                                <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                                    <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                                        <canvas class="analytics-line-small max-w-full" id="OthersData"></canvas>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- table -->
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Donught Charts</h5>
            <p class="text-sm leading-6 text-slate-400">Dughnut charts are probably the most commonly used charts. It use to show relational proportions between data.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-center gap-2 mb-4">
                                <div>
                                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Traffic Channel</h6>
                                </div>
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
                            <div class="h-[160px]">
                                <canvas class="analytics-doughnut max-w-full" id="TrafficChannelDoughnutData"></canvas>
                            </div>
                            <div class="flex flex-wrap pt-7 mx-auto w-80 max-w-full -m-1.5">
                                <div class="w-1/2 p-1.5">
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#9cabff]"></span>
                                        <span class="text-xs text-slate-400">Organic Search</span>
                                    </div>
                                    <div class="text-lg text-slate-700 dark:text-white ms-5">4,305 <small class="text-xs text-slate-400">58.63%</small></div>
                                </div>
                                <div class="w-1/2 p-1.5">
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#b8acff]"></span>
                                        <span class="text-xs text-slate-400">Social Media</span>
                                    </div>
                                    <div class="text-lg text-slate-700 dark:text-white ms-5">859 <small class="text-xs text-slate-400">23.94%</small></div>
                                </div>
                                <div class="w-1/2 p-1.5">
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#ffa9ce]"></span>
                                        <span class="text-xs text-slate-400">Referrals</span>
                                    </div>
                                    <div class="text-lg text-slate-700 dark:text-white ms-5">482 <small class="text-xs text-slate-400">12.94%</small></div>
                                </div>
                                <div class="w-1/2 p-1.5">
                                    <div class="flex items-center">
                                        <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#f9db7b]"></span>
                                        <span class="text-xs text-slate-400">Others</span>
                                    </div>
                                    <div class="text-lg text-slate-700 dark:text-white ms-5">138 <small class="text-xs text-slate-400">4.49%</small></div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Donught Charts with icons</h5>
            <p class="text-sm leading-6 text-slate-400">Dughnut charts are probably the most commonly used charts. It use to show relational proportions between data.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                        <div class="p-5 sm:p-6">
                            <div class="flex justify-between items-center gap-2 mb-4">
                                <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Sessions by Device</h6>
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
                            <div class="h-[200px]">
                                <canvas class="analytics-doughnut max-w-full" id="deviceStatusData"></canvas>
                            </div>
                            <div class="flex flex-wrap justify-between pt-7 mx-auto w-[280px] max-w-full -m-1.5 my-auto">
                                <div class="p-1.5">
                                    <em class="text-2xl leading-none text-[#798bff] ni ni-monitor"></em>
                                    <div class="text-xs leading-5 mb-2 text-slate-400">Desktop</div>
                                    <div class="text-lg font-medium text-slate-700 dark:text-white">84.5%</div>
                                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                </div>
                                <div class="p-1.5">
                                    <em class="text-2xl leading-none text-[#baaeff] ni ni-mobile"></em>
                                    <div class="text-xs leading-5 mb-2 text-slate-400">Mobile</div>
                                    <div class="text-lg font-medium text-slate-700 dark:text-white">14.2%</div>
                                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                                </div>
                                <div class="p-1.5">
                                    <em class="text-2xl leading-none text-[#7de1f8] ni ni-tablet"></em>
                                    <div class="text-xs leading-5 mb-2 text-slate-400">Tablet</div>
                                    <div class="text-lg font-medium text-slate-700 dark:text-white">1.3%</div>
                                    <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    
</div>
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
        var analyticAuData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Active Users",
                color: "#9cabff",
                background: "#9cabff",
                data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200, 1250, 900, 950, 1300, 1200, 1250, 650, 950, 750]
            }]
        };
        Bar({selector:'#analyticAuData', data:analyticAuData, scales: "noScaleLine" });

        var orderOverview = {
            labels : ["19 Dec", "20 Dec", "21 Dec", "22 Dec", "23 Dec", "24 Dec", "25 Dec", "26 Dec", "27 Dec", "28 Dec", "29 Dec", "30 Dec", "31 Dec", "01 Jan"],
            dataUnit : 'USD',
            datasets : [{
                label : "Buy Orders",
                color : "#8feac5",
                data: [1740, 2500, 1820, 1200, 1600, 2500, 1820, 1200, 1700, 1820, 1400, 1600, 1930, 2100]
            },{
                label : "Sell Orders",
                color : "#9cabff",
                data: [2420, 1820, 3000, 5000, 2450, 1820, 2700, 5000, 2400, 2600, 4000, 2380, 2120, 1700]
            }]
        };
        Bar({selector:'#orderOverview', data:orderOverview, scales: "scales2" });

        var userActivity = {
            labels : ["01 Nov", "02 Nov", "03 Nov", "04 Nov", "05 Nov", "06 Nov", "07 Nov", "08 Nov", "09 Nov", "10 Nov", "11 Nov", "12 Nov", "13 Nov", "14 Nov", "15 Nov", "16 Nov", "17 Nov", "18 Nov", "19 Nov", "20 Nov", "21 Nov"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Direct Join",
                color : "#9cabff",
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90]
            },{
                label : "Referral Join",
                color : hexRGB("#9cabff", .4),
                data: [125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
            }]
        };

        Bar({selector:'#userActivity', data:userActivity, scales: "noScale" });


        let salesOverview = {
            labels : ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
            dataUnit : 'BTC',
            lineTension : 0.1,
            datasets : [{
                label : "Sales Overview",
                color : "#798bff",
                background : hexRGB('#798bff',.3),
                data: [8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690,8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690,8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Line({selector:'#salesOverview', data:salesOverview, scales: "scales3" });

        var analyticOvData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Current Month",
                color: "#c4cefe",
                dash: [5,5],
                background: "transparent",
                data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750]
            }, {
                label: "Current Month",
                color: "#798bff",
                dash: [0,0],
                background: hexRGB('#798bff', .15),
                data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750]
            }]
        };
        Line({selector: '#analyticOvData', data : analyticOvData, scales: "scales4" });

        var OrganicSearchData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Organic Search",
                color: "#798bff",
                background: hexRGB('#798bff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#OrganicSearchData', data : OrganicSearchData, scales: "noScale", tooltip:"tooltipSmall" });

        var SocialMediaData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Social Media",
                color: "#b8acff",
                background: hexRGB('#b8acff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#SocialMediaData', data : SocialMediaData, scales: "noScale", tooltip:"tooltipSmall" });

        var ReferralsData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Referrals",
                color: "#ffa9ce",
                background: hexRGB('#ffa9ce', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#ReferralsData', data : ReferralsData, scales: "noScale", tooltip:"tooltipSmall" });

        var OthersData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Others",
                color: "#f9db7b",
                background: hexRGB('#f9db7b', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#OthersData', data : OthersData, scales: "noScale", tooltip:"tooltipSmall" });
        

        var deviceStatusData = {
            labels: ["Desktop", "Mobile", "Tablet"],
            dataUnit: 'People',
            legend: false,
            datasets: [{
                borderColor: "#fff",
                background: ["#9cabff", "#b8acff", "#7de1f8"],
                data: [84.5, 14.2, 1.3]
            }]
        };
        Doughnut({selector:'#deviceStatusData', data:deviceStatusData});
        
        var TrafficChannelDoughnutData = {
            labels: ["Organic Search", "Social Media", "Referrals", "Others"],
            dataUnit: 'People',
            legend: false,
            datasets: [{
                borderColor: "#fff",
                background: ["#798bff", "#b8acff", "#ffa9ce", "#f9db7b"],
                data: [4305, 859, 482, 138]
            }]
        };
        Doughnut({selector:'#TrafficChannelDoughnutData', data:TrafficChannelDoughnutData});

    </script>
@endpush