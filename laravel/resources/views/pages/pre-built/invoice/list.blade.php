@extends('layouts.main', ['title'=> 'Invoice List'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Invoices</h3>
        <p class="text-slate-400">You have total 937 invoices.</p>
    </div>
    <div>
        <div class="dropdown relative">
            <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                <em class="text-xl leading-4.5 ni ni-plus"></em>
            </a>
            <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                <ul class="py-2">
                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Add New</span></a></li>
                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Import</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- block head -->
<div class="border-y sm:border-x sm:rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full -mx-3.5 sm:m-0">
    <div class="p-5 relative">
        <div class="flex items-center justify-between relative">
            <h5 class="font-heading font-bold text-xl leading-tighter tracking-snug text-slate-700 dark:text-white">All Invoice</h5>
            <ul class="flex flex-wrap items-start gap-2.5">
                <li>
                    <button  data-target="#searchForm" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-search"></em>
                    </button>
                </li>
                <li class="h-9 border-s border-gray-200 dark:border-gray-800"></li>
                <li>
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-setting"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Show</h6>
                                </li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>10 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>20 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>30 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li>
                                    <h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Order By</h6>
                                </li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>DESC</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>ASC</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </li>
            </ul>
        </div>
        <div class="absolute inset-0 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t-md" id="searchForm">
            <div class="p-5 flex items-center">
                <button data-target="#searchForm" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300" data-target="search"><em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em></button>
                <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Quick search by order id" autocomplete="off">
                <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-search"></em></button>
            </div>
        </div>
    </div>
    <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
        <thead>
            <tr>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                    <span class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed     leading-tight">Order ID</span>
                    </span>
                    <span class="hidden md:inline-block">
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Date</span>
                    </span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                    <span class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Amount</span>
                    </span>
                    <span class="hidden md:inline-block">
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Status</span>
                    </span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-end"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#746F5K2</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">23 Jan 2019, 10:45pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$2300.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-green-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Complete</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#546H74W</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">12 Jan 2020, 10:45pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$120.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-yellow-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Pending</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#87X6A44</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">26 Dec 2019, 12:15 pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$560.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-green-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Complete</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#986G531</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">21 Jan 2019, 6 :12 am</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$3654.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-red-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Cancelled</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#326T4M9</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">21 Jan 2019, 6 :12 am</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$200.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-green-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Complete</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#746F5K2</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">23 Jan 2019, 10:45pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$2300.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-green-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Complete</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#546H74W</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">12 Jan 2020, 10:45pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$120.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-yellow-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Pending</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[90px] lg:min-w-[120px]">
                        <a href="{{ route('invoice.details') }}" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600 ms-auto">#87X6A44</a>
                    </div>
                    <span class="text-sm whitespace-nowrap text-slate-400">26 Dec 2019, 12:15 pm</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <div class="md:inline-block md:min-w-[100px] lg:min-w-[50%]">
                        <span class="text-sm font-medium text-slate-700 dark:text-white">$560.00</span>
                    </div>
                    <span class="relative inline-flex items-center ps-3 text-green-600 text-xs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Complete</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                    <ul class="hidden sm:flex items-center justify-end gap-2">
                        <li>
                            <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded h-7.5 w-7.5 tracking-wide border border-white dark:border-gray-900 text-primary-600 bg-white dark:bg-gray-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-800 active:dark:bg-primary-800 transition-all duration-300">
                                <em class="text-base leading-4.5 ni ni-printer-fill"></em>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.details') }}" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded px-3 py-1 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 dark:text-primary-600 dark:bg-opacity-60 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">View</a>
                        </li>
                    </ul>
                    <div class="sm:hidden">    
                        <a href="{{ route('invoice.details') }}" class="-me-2 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-400 dark:text-slate-300 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="p-5">
        <div class="flex flex-wrap justify-center sm:justify-between gap-4">
            <div class="inline-flex align-middle -space-x-px">
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e px-4 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">Prev</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">2</a>
                <div class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">7</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e px-4 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-500 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">Next</a>
            </div>
        </div>
    </div>
</div>
@endsection