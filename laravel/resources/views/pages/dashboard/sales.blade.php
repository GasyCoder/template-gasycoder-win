@extends('layouts.main', ['title'=> 'Sales Dashboard'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Sales Overview</h3>
        <p class="text-slate-400">Welcome to DashWind Dashboard Template.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 [&.show]:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <em class="text-xl leading-4.5 me-3 hidden sm:inline ni ni-calender-date"></em>
                            <span class="me-4"><span class="hidden md:inline">Last</span> 30 Days</span>
                            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 30 Days</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 6 Months</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 1 Years</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="ms-auto">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-reports"></em><span class="ms-3">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 lg:col-span-6 2xl:col-span-6 lg:row-span-2 2xl:row-span-1">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-3">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Sales Revenue</h6>
                        <p class="text-xs leading-5 text-slate-400">In last 30 days revenue from subscription.</p>
                    </div>
                    <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle relative" data-title="Revenue from subscription">
                        <em class="text-slate-300 ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="flex items-end gap-y-2 gap-x-5 flex-wrap md:flex-nowrap lg:flex-wrap 2xl:flex-nowrap">
                    <div class="flex flex-wrap md:flex-nowrap gap-5">
                        <div class="flex-shrink-0">
                            <span class="block text-3xl text-slate-700 dark:text-white">14,299.59 
                                <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>16.93%</span>
                            </span>
                            <span class="text-xs text-slate-400">This Month</span>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="block text-3xl text-slate-700 dark:text-white">7,299.59 
                                <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>4.26%</span>
                            </span>
                            <span class="text-xs text-slate-400">This Week</span>
                        </div>
                    </div>
                    <div class="h-[64px] lg:h-[148px] 2xl:h-[64px] flex-grow">
                        <canvas class="sales-bar-chart max-w-full" id="salesRevenue"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-3">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Active Subscriptions</h6>
                    </div>
                    <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle relative" data-title="Total active subscription">
                        <em class="text-slate-300 icon ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="flex items-end sm:flex-wrap gap-3 md:flex-nowrap">
                    <div class="flex-shrink-0 box-border">
                        <span class="block text-3xl text-slate-700 dark:text-white">9.69K</span>
                        <span class="text-xs text-slate-400">
                            <span class="change down text-red-600 me-1"><em class="ni ni-arrow-long-down"></em>1.93%</span>
                            since last month
                        </span>
                    </div>
                    <div class="h-[56px] flex-grow box-border">
                        <canvas class="sales-bar-chart max-w-full" id="activeSubscription"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-3">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Avg Subscriptions</h6>
                    </div>
                    <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle relative" data-title="Daily Avg. subscription">
                        <em class="text-slate-300 icon ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="flex items-end sm:flex-wrap gap-3 md:flex-nowrap">
                    <div class="flex-shrink-0 box-border">
                        <span class="block text-3xl text-slate-700 dark:text-white">346.2</span>
                        <span class="text-xs text-slate-400">
                            <span class="change down text-green-600 me-1"><em class="ni ni-arrow-long-up"></em>2.45%</span>
                            since last week
                        </span>
                    </div>
                    <div class="h-[56px] flex-grow box-border">
                        <canvas class="sales-bar-chart max-w-full" id="totalSubscription"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 2xl:col-span-6 2xl:row-span-2 2xl:col-start-7 2xl:row-start-1">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-4">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Sales Overview</h6>
                        <p class="text-xs leading-5 text-slate-400">In 30 days sales of product subscription. <a class="text-primary-500 hover:text-primary-600" href="#">See Details</a></p>
                    </div>
                    <div class="dropdown relative">
                        <a tabindex="0" href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:bg-primary-600 [&.show]:bg-primary-600 hover:dark:bg-primary-600 [&.show]:dark:bg-primary-600 hover:border-primary-600 [&.show]:border-primary-600 hover:dark:border-primary-600 [&.show]:dark:border-primary-600 active:bg-primary-700 active:dark:bg-primary-700 active:border-primary-700 active:dark:border-primary-700 transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3"><span class="hidden md:inline">Download</span> Report</span>
                        </a>
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-100 text-primary-600 bg-primary-100 hover:text-white hover:bg-primary-600 hover:border-primary-600 active:bg-primary-700 active:border-primary-700 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-download-cloud"></em></a>
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
    <div class="col-span-12 2xl:col-span-8">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex items-center justify-between -my-1">
                    <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white"><span class="me-2">Transaction</span> <a href="#" class="hidden sm:inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline">See History</a></h6>
                    <ul class="flex gap-x-5 -my-1">
                        <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>Paid</span></a></li>
                        <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>Pending</span></a></li>
                        <li><a class="active relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>All</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Order No.</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Customer</span></div>
                    <div class="relative hidden md:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                    <div class="relative hidden lg:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 dark:border-gray-900"><span>Ref</span></div>
                    <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Amount</span></div>
                    <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span class="hidden xs:inline">Status</span></div>
                    <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span>
                            <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95954</a>
                        </span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-500 h-10 w-10 rounded-full font-medium">
                                <span>AB</span>
                            </div>
                            <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Abu Bin Ishityak</div>
                        </div>
                    </div>
                    <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/11/2020</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">SUB-2309232</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-600 dark:text-white">4,596.75 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Remove</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span>
                            <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95850</a>
                        </span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-blue-700 h-10 w-10 rounded-full font-medium">
                                <span>DE</span>
                            </div>
                            <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Desiree Edwards</div>
                        </div>
                    </div>
                    <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/02/2020</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">SUB-2309154</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-600 dark:text-white">596.75 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-red-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Canceled</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Remove</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span>
                            <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95812</a>
                        </span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                                <img src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Blanca Schultz</div>
                        </div>
                    </div>
                    <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/01/2020</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">SUB-2309143</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-600 dark:text-white">199.99 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Remove</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span>
                            <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95256</a>
                        </span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-indigo-400 h-10 w-10 rounded-full font-medium">
                                <span>NL</span>
                            </div>
                            <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Naomi Lawrence</div>
                        </div>
                    </div>
                    <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">01/29/2020</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">SUB-2305684</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-600 dark:text-white">1099.99 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Remove</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span>
                            <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95135</a>
                        </span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-500 h-10 w-10 rounded-full font-medium">
                                <span>CH</span>
                            </div>
                            <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Cassandra Hogan</div>
                        </div>
                    </div>
                    <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">01/29/2020</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">SUB-2305564</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-600 dark:text-white">1099.99 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-yellow-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Due</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Remove</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
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
                        <span class="block text-xs text-slate-400 leading-[1.3]">2 hours ago</span>
                    </div>
                </li>
                <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-500 h-10 w-10 rounded-full font-medium">HS</div>
                    <div class="ms-4">
                        <div class="text-slate-600 dark:text-slate-400">Harry Simpson placed a Order.</div>
                        <span class="block text-xs text-slate-400 leading-[1.3]">2 hours ago</span>
                    </div>
                </li>
                <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-blue-600 h-10 w-10 rounded-full font-medium">SM</div>
                    <div class="ms-4">
                        <div class="text-slate-600 dark:text-slate-400">Stephanie Marshall got a huge bonus.</div>
                        <span class="block text-xs text-slate-400 leading-[1.3]">2 hours ago</span>
                    </div>
                </li>
                <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <div class="text-slate-600 dark:text-slate-400">Nicholas Carr deposited funds.</div>
                        <span class="block text-xs text-slate-400 leading-[1.3]">2 hours ago</span>
                    </div>
                </li>
                <li class="flex items-center p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-500 h-10 w-10 rounded-full font-medium">TM</div>
                    <div class="ms-4">
                        <div class="text-slate-600 dark:text-slate-400">Timothy Moreno placed a Order.</div>
                        <span class="block text-xs text-slate-400 leading-[1.3]">2 hours ago</span>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
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
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
    <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex items-center justify-between -my-1">
                    <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Support Requests</h6>
                    <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">All Tickets</a>
                </div>
            </div>
            <ul>
                <li class="flex p-5 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                    </div>
                    <div class="ms-4 flex-grow">
                        <div class="flex items-center justify-between text-sm font-bold text-slate-700 dark:text-white">
                            <span>Vincent Lopez</span>
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-yellow-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Pending</span>
                        </div>
                        <p class="mt-1">Thanks for contact us with your issues...</p>
                        <span class="text-xs leading-5 text-slate-400 block">6 min ago</span>
                    </div>
                </li>
                <li class="flex p-5 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-purple-600 bg-purple-100 dark:bg-purple-950 h-10 w-10 rounded-full font-medium">
                        <span>DM</span>
                    </div>
                    <div class="ms-4 flex-grow">
                        <div class="flex items-center justify-between text-sm font-bold text-slate-700 dark:text-white">
                            <span>Daniel Moore</span>
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-cyan-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Open</span>
                        </div>
                        <p class="mt-1">Thanks for contact us with your issues...</p>
                        <span class="text-xs leading-5 text-slate-400 block">2 Hours ago</span>
                    </div>
                </li>
                <li class="flex p-5 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <div class="relative flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                    </div>
                    <div class="ms-4 flex-grow">
                        <div class="flex items-center justify-between text-sm font-bold text-slate-700 dark:text-white">
                            <span>Larry Henry</span>
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0 before:top-1/2 before:-translate-y-1/2 before:rounded-full before:h-1.5 before:w-1.5 before:bg-current">Solved</span>
                        </div>
                        <p class="mt-1">Thanks for contact us with your issues...</p>
                        <span class="text-xs leading-5 text-slate-400 block">3 Hours ago</span>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- col -->
    <div class="col-span-12 lg:col-span-6 2xl:col-span-4">
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
</div><!-- grid -->
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
        // Line Charts
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

        // Bar Charts
        let salesRevenue = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Sales Revenue",
                color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"],
                data: [11000, 8000, 12500, 5500, 9500, 14299, 11000, 8000, 12500, 5500, 9500, 14299]
            }]
        };
        Bar({selector:'#salesRevenue', data:salesRevenue, tooltip: "tooltipSmall", scales: "noScale" });

        let activeSubscription = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"],
                data: [8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#activeSubscription', data:activeSubscription, tooltip: "tooltipSmall", scales: "noScale" });

        let totalSubscription = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : [hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), hexRGB("#aea1ff", .2), "#aea1ff"],
                data: [8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#totalSubscription', data:totalSubscription, tooltip: "tooltipSmall", scales: "noScale" });

    </script>
@endpush