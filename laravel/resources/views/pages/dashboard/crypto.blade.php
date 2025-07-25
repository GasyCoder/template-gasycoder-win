@extends('layouts.main', ['title'=> 'Crypto Dashboard'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Overview</h3>
        <p class="text-slate-400">Welcome to Crypto Buy/Sell Platform.</p>
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
    <div class="col-span-12 lg:col-span-8">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-4">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Orders Overview</h6>
                        <p class="text-xs leading-5 text-slate-400">In last 15 days buy and sells overview. <a class="text-primary-500 hover:text-primary-600" href="#">Detailed Stats</a></p>
                    </div>
                    <div class="dropdown relative -mt-2">
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
    <div class="col-span-12 lg:col-span-4">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:px-6 sm:py-4 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex items-center justify-between -my-1">
                    <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white">Action Center</h6>
                    <div class="dropdown relative ms-auto">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
    <div class="col-span-12 2xl:col-span-8 row-span-2">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex items-center justify-between -my-1">
                    <h6 class="font-heading text-base -tracking-snug leading-6.5 font-bold text-slate-700 dark:text-white"><span class="me-2">Orders Activities</span> <a href="#" class="hidden sm:inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 d-none d-sm-inline">See History</a></h6>
                    <ul class="flex gap-x-5 -my-1">
                        <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>Paid</span></a></li>
                        <li><a class="relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>Pending</span></a></li>
                        <li><a class="active relative text-slate-400 [&.active]:text-slate-600 py-2.5 block leading-none before:absolute before:inset-0 before:top-auto before:h-0.5 before:bg-primary-600 before:opacity-0 [&.active]:before:opacity-100" href="#"><span>All</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]"><span>Type</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Desc</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                    <div class="relative hidden xl:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Time</span></div>
                    <div class="relative hidden 2xl:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Ref</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>USD Amount</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Amount</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-green-600 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-down-left"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#f9841e] bg-[#feefe2] dark:bg-[#362c25] h-10 w-10 rounded-full font-medium ni ni-sign-btc"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Buy Bitcoin</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/10/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">11:37 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309232</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">4,596.75 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 0.2040 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-green-600 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-down-left"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#6174b9] bg-[#eaedf6] dark:bg-[#20293c] h-10 w-10 rounded-full font-medium ni ni-sign-eth"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Buy Ethereum</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/10/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">10:37 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309231</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">2,039.39 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 0.12600 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-primary-600 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-up-right"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#f9841e] bg-[#feefe2] dark:bg-[#362c25] h-10 w-10 rounded-full font-medium ni ni-sign-btc"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Sell Bitcoin</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/10/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">10:45 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309230</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">9,285.71 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 0.94750 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-primary-600 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-up-right"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#6174b9] bg-[#eaedf6] dark:bg-[#20293c] h-10 w-10 rounded-full font-medium ni ni-sign-eth"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Sell Ethereum</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/11/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">10:25 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309229</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">12,596.75 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 1.02050 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-green-600 bg-green-100 dark:bg-green-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-down-left"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#f9841e] bg-[#feefe2] dark:bg-[#362c25] h-10 w-10 rounded-full font-medium ni ni-sign-btc"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Buy Bitcoin</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/10/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">10:12 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309228</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">400.00 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 0.00056 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 w-[66px]">
                        <ul class="flex items-center">
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-primary-600 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium icon ni ni-arrow-up-right"></em></li>
                            <li class="first:ms-0 -ms-3.5"><em class="relative flex-shrink-0 flex items-center justify-center text-lg border-2 border-white dark:border-gray-950 text-[#6174b9] bg-[#eaedf6] dark:bg-[#20293c] h-10 w-10 rounded-full font-medium ni ni-sign-eth"></em></li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white text-sm font-medium flex items-center">Sell Ethereum</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">02/09/2020</span>
                    </div>
                    <div class="relative hidden xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">05:15 PM</span>
                    </div>
                    <div class="relative hidden 2xl:table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-primary-600">RE2309227</span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">6,246.50 <span class="font-normal text-slate-500">USD</span></span>
                    </div>
                    <div class="relative table-cell align-middle py-4 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs font-medium text-slate-700 dark:text-white">+ 0.02575 <span class="font-normal text-slate-500">BTC</span></span>
                    </div>
                </div><!-- row -->
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 2xl:col-span-4 md:col-span-6">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-4">
                    <div>
                        <h6 class="font-heading text-base -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Top Coin in Orders</h6>
                        <p class="text-xs leading-5 text-slate-400">In last 15 days buy and sells overview.</p>
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
                <div class="flex gap-x-3">
                    <div class="flex-grow h-[165px]">
                        <canvas class="coin-overview-chart max-w-full" id="coinOverview"></canvas>
                    </div>
                    <ul class="flex-shrink-0 w-[100px]">
                        <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#f98c45]"></span><span>Bitcoin</span></li>
                        <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#9cabff]"></span><span>Ethereum</span></li>
                        <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#8feac5]"></span><span>NioCoin</span></li>
                        <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#6b79c8]"></span><span>Litecoin</span></li>
                        <li class="flex items-center text-xs leading-5 py-1 text-slate-400 gap-2"><span class="relative inline-block w-3 h-3 rounded-sm bg-[#79f1dc]"></span><span>Bitcoin Cash</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 2xl:col-span-4 md:col-span-6">
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
</div><!-- grid -->
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
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

        var coinOverview = {
            labels : ["Bitcoin", "Ethereum", "NioCoin", "Litecoin", "Bitcoin"],
            stacked:true,
            dataUnit:'',
            datasets : [{
                label : "Buy Orders",
                color : ["#f98c45", "#9cabff", "#8feac5", "#6b79c8", "#79f1dc"],
                data: [1740, 2500, 1820, 1200, 1600, 2500]
            },{
                label : "Sell Orders",
                color : [hexRGB('#f98c45',.2),hexRGB('#9cabff',.4),hexRGB('#8feac5',.4),hexRGB('#6b79c8',.4),hexRGB('#79f1dc',.4)],
                data: [2420, 1820, 3000, 5000, 2450, 1820]
            }]
        };
        Bar({selector:'#coinOverview', data:coinOverview, scales: "noScale", axis: "y", thickness: "thin" });

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
    </script>
@endpush