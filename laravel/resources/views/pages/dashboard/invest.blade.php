@extends('layouts.main', ['title'=> 'Invest Dashboard'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Investment Dashboard</h3>
        <p class="text-slate-400">Welcome to Crypto Invest Dashboard</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-primary-300 dark:border-primary-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:text-white hover:dark:text-white hover:border-primary-600 hover:dark:border-primary-600 active:bg-primary-700 active:dark:bg-primary-700 active:text-white active:dark:text-white active:border-primary-700 active:dark:border-primary-700 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3">Export</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-primary-300 dark:border-primary-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:text-white hover:dark:text-white hover:border-primary-600 hover:dark:border-primary-600 active:bg-primary-700 active:dark:bg-primary-700 active:text-white active:dark:text-white active:border-primary-700 active:dark:border-primary-700 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-reports"></em><span class="ms-3">Reports</span>
                    </a>
                </li>
                <li class="ms-auto">
                    <div class="dropdown relative">
                        <a href="#" data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-plus"></em>
                        </a>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-coin-alt-fill"></em><span>Add order</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 md:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 h-full flex flex-col">
                <div class="relative flex items-center justify-between mb-1">
                    <h6 class="text-sm leading-4 font-medium font-heading text-slate-400">Total Deposit</h6>
                    <div data-title="Total Deposited" data-placement="left"  data-rtl-placement="right" class="tooltip-toggle">
                        <em class="text-slate-200 ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="mb-3 xs:mb-1">
                    <span class="text-2xl text-slate-700 dark:text-white">
                        49,595.34 <span class="text-slate-600 dark:text-slate-400">USD</span>
                    </span>
                    <span class="text-sm text-green-600"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>
                </div>
                <div class="flex gap-2 items-end justify-between mt-auto">
                    <div class="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Month</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">2,940.59 <span class="text-slate-500">USD</span></div>
                        </div>
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Week</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">1,259.28 <span class="text-slate-500">USD</span></div>
                        </div>
                    </div>
                    <div class="h-17 xs:h-12 md:h-17 2xl:h-12 w-28 xs:w-20 md:w-28 flex-grow mb-0.5">
                        <canvas class="iv-data-chart max-w-full" id="totalDeposit"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 h-full flex flex-col">
                <div class="relative flex items-center justify-between mb-1">
                    <h6 class="text-sm leading-4 font-medium font-heading text-slate-400">Total Withdraw</h6>
                    <div data-title="Total Withdraw" data-placement="left"  data-rtl-placement="right" class="tooltip-toggle">
                        <em class="text-slate-200 ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="mb-3 xs:mb-1">
                    <span class="text-2xl text-slate-700 dark:text-white">
                        49,595.34 <span class="text-slate-600 dark:text-slate-400">USD</span>
                    </span>
                    <span class="text-sm text-red-600"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                </div>
                <div class="flex gap-2 items-end justify-between mt-auto">
                    <div class="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Month</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">2,940.59 <span class="text-slate-500">USD</span></div>
                        </div>
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Week</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">1,259.28 <span class="text-slate-500">USD</span></div>
                        </div>
                    </div>
                    <div class="h-17 xs:h-12 md:h-17 2xl:h-12 w-28 xs:w-20 md:w-28 flex-grow mb-0.5">
                        <canvas class="iv-data-chart max-w-full" id="totalWithdraw"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 h-full flex flex-col">
                <div class="relative flex items-center justify-between mb-1">
                    <h6 class="text-sm leading-4 font-medium font-heading text-slate-400">Balance in Account</h6>
                    <div data-title="Total Balance in Account" data-placement="left"  data-rtl-placement="right" class="tooltip-toggle">
                        <em class="text-slate-200 ni ni-help-fill"></em>
                    </div>
                </div>
                <div class="mb-3 xs:mb-1">
                    <span class="text-2xl text-slate-700 dark:text-white">
                        79,358.50 <span class="text-slate-600 dark:text-slate-400">USD</span>
                    </span>
                </div>
                <div class="flex gap-2 items-end justify-between mt-auto">
                    <div class="flex flex-shrink-1 flex-grow flex-wrap gap-3">
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Month</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">2,940.59 <span class="text-slate-500">USD</span></div>
                        </div>
                        <div class="flex-grow me-5 last:me-0">
                            <div class="text-xxs text-slate-400 uppercase mb-0.5 tracking-widest">This Week</div>
                            <div class="text-sm leading-tighter text-slate-700 dark:text-white">1,259.28 <span class="text-slate-500">USD</span></div>
                        </div>
                    </div>
                    <div class="h-17 xs:h-12 md:h-17 2xl:h-12 w-28 xs:w-20 md:w-28 flex-grow mb-0.5">
                        <canvas class="iv-data-chart max-w-full" id="totalBalance"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
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
    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 h-full flex flex-col">
                <div class="flex justify-between items-start gap-2 mb-4">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Top Invested Plan</h6>
                        <p class="text-xs leading-5 text-slate-400">In last 30 days top invested schemes.</p>
                    </div>
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                <div class="-my-2.5">
                    <div class="py-2.5">
                        <div class="flex items-center justify-between text-slate-400 mb-1.5">
                            <div class="text-sm">Strater Plan</div>
                            <div class="text-xs">58%</div>
                        </div>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-primary-600" data-progress="58%"></div>
                        </div>
                    </div>
                    <div class="py-2.5">
                        <div class="flex items-center justify-between text-slate-400 mb-1.5">
                            <div class="text-sm">Silver Plan</div>
                            <div class="text-xs">18.49%</div>
                        </div>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-yellow-600" data-progress="18.49%"></div>
                        </div>
                    </div>
                    <div class="py-2.5">
                        <div class="flex items-center justify-between text-slate-400 mb-1.5">
                            <div class="text-sm">Dimond Plan</div>
                            <div class="text-xs">16%</div>
                        </div>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-green-600" data-progress="16%"></div>
                        </div>
                    </div>
                    <div class="py-2.5">
                        <div class="flex items-center justify-between text-slate-400 mb-1.5">
                            <div class="text-sm">Platinam Plan</div>
                            <div class="text-xs">29%</div>
                        </div>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-pink-600" data-progress="29%"></div>
                        </div>
                    </div>
                    <div class="py-2.5">
                        <div class="flex items-center justify-between text-slate-400 mb-1.5">
                            <div class="text-sm">Vibranium Plan</div>
                            <div class="text-xs">33%</div>
                        </div>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-indigo-600" data-progress="33%"></div>
                        </div>
                    </div>
                </div>
                <div class="h-[70px] pt-5 mt-auto">
                    <canvas class="iv-data-chart max-w-full" id="planPurchase"></canvas>
                </div>
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
    <div class="col-span-12 md:col-span-6 2xl:col-span-4">
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
    <div class="col-span-12 2xl:col-span-8">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex items-center justify-between -my-1">
                    <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Recent Investment</h6>
                    <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">View All</a>
                </div>
            </div>
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Plan</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Who</span></div>
                    <div class="relative hidden lg:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Amount</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                                <span>P1</span>
                            </div>
                            <div class="text-slate-400 text-xs inline-block ms-3">Silver <span class="hidden md:inline">- Daily 4.76% for 21 Days</span></div>
                        </div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-pink-500 bg-pink-100 dark:bg-pink-950 h-10 w-10 rounded-full font-medium">
                                <span>JC</span>
                            </div>
                            <div class="text-slate-600 text-xs font-bold flex items-center ms-3">Janice Carroll</div>
                        </div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">18/10/2019</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex h-1 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden w-20">
                            <div class="text-xs text-white bg-primary-600" data-progress="75%"></div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Invoice</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Print</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                                <span>P2</span>
                            </div>
                            <div class="text-slate-400 text-xs inline-block ms-3">Dimond <span class="hidden md:inline">- Daily 8.52% for 14 Days</span></div>
                        </div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-indigo-500 bg-indigo-100 dark:bg-indigo-950 h-10 w-10 rounded-full font-medium">
                                <span>VA</span>
                            </div>
                            <div class="text-slate-600 text-xs font-bold flex items-center ms-3">Victoria Aguilar</div>
                        </div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">18/10/2019</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Invoice</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Print</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                                <span>P3</span>
                            </div>
                            <div class="text-slate-400 text-xs inline-block ms-3">Platinam <span class="hidden md:inline">- Daily 14.82% for 7 Days</span></div>
                        </div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-purple-500 bg-purple-100 dark:bg-purple-950 h-10 w-10 rounded-full font-medium">
                                <span>EH</span>
                            </div>
                            <div class="text-slate-600 text-xs font-bold flex items-center ms-3">Emma Henry</div>
                        </div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">18/10/2019</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Invoice</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Print</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                                <span>P1</span>
                            </div>
                            <div class="text-slate-400 text-xs inline-block ms-3">Silver <span class="hidden md:inline"> - Daily 4.76% for 21 Days</span></div>
                        </div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-green-500 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium">
                                <span>AF</span>
                            </div>
                            <div class="text-slate-600 text-xs font-bold flex items-center ms-3">Alice Ford</div>
                        </div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">18/10/2019</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Invoice</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Print</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-slate-600 dark:text-slate-200 bg-slate-100 dark:bg-slate-900 h-10 w-10 rounded-full font-medium">
                                <span>P3</span>
                            </div>
                            <div class="text-slate-400 text-xs inline-block ms-3">Platinam <span class="hidden md:inline">- Daily 14.82% for 7 Days</span></div>
                        </div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-orange-500 bg-orange-100 dark:bg-orange-950 h-10 w-10 rounded-full font-medium">
                                <span>HW</span>
                            </div>
                            <div class="text-slate-600 text-xs font-bold flex items-center ms-3">Harold Walker</div>
                        </div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">18/10/2019</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">1.094780 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-green-600">Completed</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>View</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Invoice</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Print</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- table -->
        </div>
    </div><!-- col -->
</div><!-- grid -->
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
        // Bar Charts
        var totalDeposit = {
            labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : [hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), hexRGB("#6576ff", .2), "#6576ff"], // @v2.0
                data: [7200, 8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#totalDeposit', data:totalDeposit, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

        var totalWithdraw = {
            labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : [hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), hexRGB("#816bff", .2), "#816bff"],  // @v2.0
                data: [7200, 8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#totalWithdraw', data:totalWithdraw, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

        var totalBalance = {
            labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : [hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), hexRGB("#559bfb", .2), "#559bfb"],  // @v2.0
                data: [6000,8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#totalBalance', data:totalBalance, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });

        var planPurchase = {
            labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan"],
            dataUnit : 'USD',
            stacked : true,
            datasets : [{
                label : "Active User",
                color : hexRGB("#6576ff", .2),
                colorHover : "#6576ff",
                data: [6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690, 6000,8200, 7800, 9500, 5500, 9200, 9690]
            }]
        };
        Bar({selector:'#planPurchase', data:planPurchase, scales: "noScale", tooltip: "tooltipSmall", thickness: "thick" });
    </script>
@endpush