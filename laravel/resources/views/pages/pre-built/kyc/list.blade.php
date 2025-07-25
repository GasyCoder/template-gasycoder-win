@extends('layouts.main', ['title'=> 'KYC Documents'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">KYC Documents</h3>
        <p class="text-slate-400">You have total <span class="text-slate-600">1,257</span> KYC documents.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full sm:mt-1 -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800  opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3">Export</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="border-y sm:border-x sm:rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full -mx-3.5 sm:m-0">
    <div class="p-5 relative">
        <div class="flex items-center justify-between relative">
            <div class="flex items-center gap-4">
                <div class="relative w-[132px]">
                    <select class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                        <option value="">Bulk Action</option>
                        <option value="SendEmail">Send Email</option>
                        <option value="ChangeGroup">Change Group</option>
                        <option value="SuspendUser">Suspend User</option>
                        <option value="DeleteUser">Delete User</option>
                    </select>
                </div>
                <button disabled class="relative hidden md:inline-flex font-heading items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-700 text-gray-500 dark:text-gray-300 bg-gray-100 dark:bg-gray-900 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400 hover:dark:border-gray-400 hover:text-gray-600 hover:dark:text-gray-700 active:bg-gray-500 active:dark:bg-gray-500 transition-all duration-300 disabled:text-gray-400 disabled:bg-gray-50 disabled:border-gray-100 disabled:hover:text-gray-400 disabled:hover:bg-gray-50  disabled:hover:border-gray-100">Apply</button>
                <button disabled class="relative inline-flex md:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-700 text-gray-500 dark:text-gray-300 bg-gray-100 dark:bg-gray-900 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400 hover:dark:border-gray-400 hover:text-gray-600 hover:dark:text-gray-700 active:bg-gray-500 active:dark:bg-gray-500 transition-all duration-300 disabled:text-gray-400 disabled:bg-gray-50 disabled:border-gray-100 disabled:hover:text-gray-400 disabled:hover:bg-gray-50  disabled:hover:border-gray-100">
                    <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-right"></em>
                </button>
            </div>
            <ul class="flex flex-wrap items-start gap-2.5">
                <li>
                    <button  data-target="#searchForm" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-search"></em>
                    </button>
                </li>
                <li class="h-9 border-s border-gray-200 dark:border-gray-800"></li>
                <li>
                    <button data-target="#cardOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-menu-right"></em>
                    </button>
                    <div id="cardOptions" class="absolute sm:relative start-0 end-0 top-0 bottom-0 -m-5 p-5 sm:p-0 sm:m-0 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent shadow sm:shadow-none shadow-gray-200 dark:shadow-gray-900 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[700]">
                        <ul class="flex items-center gap-x-1">
                            <li class="me-auto sm:hidden -ms-2">
                                <button data-target="#cardOptions" class="class-toggle inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                    <em class="text-xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-arrow-left"></em>
                                </button>
                            </li>
                            <li>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-filter-alt"></em>
                                        <span class="absolute top-0.5 end-0.5 h-2 w-2 inline-block rounded-full bg-primary-600"></span>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute clickable end-0 mt-0.5 xs:-mt-2 -me-6 xs:me-2 top-full min-w-[260px] xs:min-w-[360px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                        <div class="flex items-center justify-between px-5 py-3 border-b border-gray-200 dark:border-gray-800">
                                            <span class="font-medium text-slate-700 dark:text-white">Filter Users</span>
                                        </div>
                                        <div class="p-5">
                                            <div class="grid grid-flow-dense grid-cols-12 gap-x-6 gap-y-4">
                                                <div class="col-span-6">
                                                    <div class="flex">
                                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="haveBalance">
                                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="haveBalance">Have Balance</label>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-span-6">
                                                    <div class="flex">
                                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="KYCVerified">
                                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="KYCVerified">KYC Verified</label>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-span-6">
                                                    <div class="relative mb-5 last:mb-0">
                                                        <label class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3" for="userRole">Role </label>
                                                        <div class="relative">
                                                            <select id="userRole" class="js-select  block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                                                <option value="AnyRole">Any Role</option>
                                                                <option value="Investor">Investor</option>
                                                                <option value="Seller">Seller</option>
                                                                <option value="Buyer">Buyer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-span-6">
                                                    <div class="relative mb-5 last:mb-0">
                                                        <label class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3" for="userStatus">Status</label>
                                                        <div class="relative">
                                                            <select id="userStatus" class="js-select  block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                                                <option value="AnyRole">Any Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Suspend">Suspend</option>
                                                                <option value="Deleted">Deleted</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-span-12">
                                                    <button href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-700 text-white bg-slate-700 hover:bg-slate-800 hover:border-slate-800 active:bg-slate-900 transition-all duration-300">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between px-5 py-3 border-t border-gray-200 dark:border-gray-800">
                                            <a class="text-sm text-primary-500 hover:text-primary-700 transition-all duration-300" href="#">Reset Filter</a>
                                            <a class="text-sm text-primary-500 hover:text-primary-700 transition-all duration-300" href="#">Save Filter</a>
                                        </div>
                                    </div>
                                </div><!-- dropdown -->
                            </li>
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
                    </div><!-- card option -->
                </li>
            </ul>
        </div>
        <div class="absolute inset-0 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t-md" id="searchForm">
            <div class="p-5 flex items-center">
                <button data-target="#searchForm" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300" data-target="search"><em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em></button>
                <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or email" autocomplete="off">
                <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-search"></em></button>
            </div>
        </div>
    </div>
    <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
        <thead>
            <tr>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="uid-all">
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">User</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden xs:table-cell">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">Doc Type</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">Documents</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">Submitted</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">Status</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                    <span class="block text-sm leading-relaxed text-slate-400 font-normal">Checked By</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-t border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-5 w-5 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-300 bg-white dark:bg-gray-950 hover:bg-gray-300 hover:dark:bg-gray-800 hover:border-gray-300 hover:dark:border-gray-800 [&.show]:bg-gray-300 [&.show]:dark:bg-gray-800 [&.show]:border-gray-300 [&.show]:dark:border-gray-800 active:bg-gray-400 active:border-gray-400 transition-all duration-300">
                            <em class="text-sm leading-4.5 ni ni-plus"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute clickable end-0 mt-0.5 top-full min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="px-4 py-2">
                                    <div class="flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="checkBalance">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="checkBalance">Balance</label>
                                    </div>
                                </li>
                                <li class="px-4 py-2">
                                   <div class="flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="checkPhone">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="checkPhone">Phone</label>
                                    </div>
                                </li>
                                <li class="px-4 py-2">
                                    <div class="flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="checkVerified">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="checkVerified">Verified</label>
                                    </div>
                                </li>
                                <li class="px-4 py-2">
                                    <div class="flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="checkStatus">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block font-normal" for="checkStatus">Status</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $kycs as $kyc)
                <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group"> 
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="{{ data_get($kyc, 'id') }}">
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            @if(isset($kyc['avatar'])) 
                                <x-avatar rounded="true" image="{{$kyc['avatar']}}"> </x-avatar>
                            @else
                                <x-avatar rounded="true" variant="{{$kyc['theme']}}" text="{{get_initials($kyc['name'])}}"></x-avatar>
                            @endif
                            <div class="ms-4">
                                <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">
                                    {{ data_get($kyc, 'name') }} 
                                    <span @class([
                                        "h-2 w-2 inline-block rounded-full md:hidden ms-1",
                                        "bg-cyan-600" => $kyc['status'] == "pending",
                                        "bg-green-600" => $kyc['status'] == "approved",
                                        "bg-red-600" => $kyc['status'] == "rejected",
                                    ])></span>
                                </span>
                                <span class="block text-xs leading-4 text-slate-400">{{ data_get($kyc, 'id') }} </span>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                        <span class="text-sm font-normal text-slate-600 dark:text-white">{{ data_get($kyc, 'docType') }}</span>
                    </td>
                    
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                        <ul class="flex  gap-4 text-sm font-normal text-slate-400">
                            @foreach (data_get($kyc, 'documents') as $doc )
                                <li class="inline-flex items-center align-middle gap-2.5">{{$doc}} <span><em class="icon ni ni-download text-primary-500 text-xl"></em></span>
                                </li>
                            @endforeach 
                        </ul>
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                        <span class="text-sm text-slate-400">{{ data_get($kyc, 'submitted') }}</span>
                    </td>
                
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                        <span @class([
                            "text-xs font-medium me-1 capitalize",
                            "text-cyan-600" => $kyc['status'] == "pending",
                            "text-green-600" => $kyc['status'] == "approved",
                            "text-red-600" => $kyc['status'] == "rejected",
                        ]) >
                            {{ data_get($kyc, 'status') }}
                        </span>
                        @if($kyc['status'] == "approved" || $kyc['status'] == "rejected" )
                            <em class="icon ni ni-info text-sm tooltip-toggle transition-all duration-300" data-placement="top" data-title="{{ucfirst($kyc['status'])}} at {{$kyc['submitted']}}"></em>
                        @endif
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                        <div class="flex items-center gap-3">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-orange-100 dark:bg-orange-950 text-orange-600 h-10 w-10 rounded-full font-medium">
                                <span>{{get_initials($kyc['checkedBy'])}}</span>
                            </div>
                            <span class=" text-slate-700 dark:text-white text-xs font-medium">{{ data_get($kyc, 'checkedBy') }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                        <ul class="relative flex items-center justify-end -me-2">
                            <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                                <div data-placement="top" class="tooltip-toggle inline-flex" data-title="Quick View">
                                    <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="icon ni ni-eye-fill text-lg"></em>
                                    </button>
                                </div>
                            </li>
                            <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                                <div data-placement="top" class="tooltip-toggle inline-flex" data-title="Approve">
                                    <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="icon ni ni-check-fill-c text-lg"></em>
                                    </button>
                                </div>
                            </li>
                            <li class="opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover:opacity-100">
                                <div data-placement="top" class="tooltip-toggle inline-flex" data-title="Reject">
                                    <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="icon ni ni-cross-fill-c text-lg"></em>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                        <em class="text-xl ni ni-more-h"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="{{route('kyc.details')}}">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-focus"></em>
                                                    <span>Quick View</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="{{route('kyc.details')}}">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                    <span>View Details</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 icon ni ni-user"></em>
                                                    <span>View Profile</span>
                                                </a>
                                            </li>
                                          
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 icon ni ni-check-round"></em>
                                                    <span>Approved</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                                    <span>Rejected</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- dropdown -->
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
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
            <div class="flex items-center gap-x-4">
                <div class="text-xs uppercase text-slate-600">Page</div>
                <div class="relative w-16">
                    <select class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" data-search="true">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="text-xs uppercase text-slate-600">Of 102</div>
            </div>
        </div>
    </div>
</div>
@endsection