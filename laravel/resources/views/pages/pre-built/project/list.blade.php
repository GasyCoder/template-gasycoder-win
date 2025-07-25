@extends('layouts.main', ['title'=> 'Project List'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Projects</h3>
        <p class="text-slate-400">You have total 95 projects.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 [&.show]:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <em class="text-xl leading-4.5 me-3 ni ni-filter-alt"></em>
                            <span class="me-4">Filtered By</span>
                            <em class="text-xl leading-4.5 -me-1 rtl:-scale-x-100 ni ni-chevron-right"></em>
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
                    <a href="#" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-plus"></em><span class="ms-3">Add Project</span>
                    </a>
                    <a href="#" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-plus"></em>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
        <thead>
            <tr>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-all">
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Project Name</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Client</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Project Lead</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden lg:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Team</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden 2xl:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Status</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden md:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Progress</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start hidden xs:table-cell">
                    <span class="block text-sm leading-relaxed font-bold text-slate-400">Deadline</span>
                </th>
                <th class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-1 inline-flex items-center justify-center isolate relative h-7 w-7 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archive"></em>
                                        <span>Mark As Archive</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                        <span>Remove Projects</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-1">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-md font-medium">
                            <span>DD</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">DashWind Development</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Softnio</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Abu Bin Istiak</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
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
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Open</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="93.5%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">93.5%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>5 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-2">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-600 h-10 w-10 rounded-md font-medium">
                            <span>RW</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Redesign Website</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Runnergy</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Alex Ashley</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-cyan-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Onhold</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="23%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">23%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>21 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-3">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-md font-medium">
                            <span>KR</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Keyword Research for SEO</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Techyspec</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Emily Smith</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Ongoing</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="52.5%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">52.5%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-red-100 dark:border-red-950 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>Due Tomorrow</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-4">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-red-600 h-10 w-10 rounded-md font-medium">
                            <span>WD</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Website Development</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Fitness Next</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Michael Wood</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-cyan-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Open</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="65.5%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">65.5%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>16 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-5">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-blue-600 h-10 w-10 rounded-md font-medium">
                            <span>SO</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">SEO Optimization</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Techyspec</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Emily Smith</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Closed</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="100%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">100%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-green-100 dark:border-green-950 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>Done</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-6">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-md font-medium">
                            <span>DD</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">DashWind Development</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Softnio</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Abu Bin Istiak</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-red-600 h-8 w-8 rounded-full font-medium">
                                <span>D</span>
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Open</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600 w-[65.5%]" data-progress="65.5%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">65.5%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>5 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-7">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-red-600 h-10 w-10 rounded-md font-medium">
                            <span>WD</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Website Development</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Fitness Next</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Alex Ashley</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-indigo-600 h-8 w-8 rounded-full font-medium">
                                <span>P</span>
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Open</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="65.5%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">65.5%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>16 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
                </td>
            </tr>
            <tr class="transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 w-12 sm:w-13">
                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="pid-8">
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-600 h-10 w-10 rounded-md font-medium">
                            <span>RW</span>
                        </div>
                        <h6 class="ms-4 text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Redesign Website</h6>
                    </a>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Runnergy</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <span class="text-sm text-slate-400">Michael Wood</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden lg:table-cell">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                                <span>I</span>
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden 2xl:table-cell">
                    <span class="text-sm text-slate-400">Onhold</span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden md:table-cell">
                    <div class="flex items-center gap-4">
                        <div class="flex h-1.5 w-[140px] rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="rounded-full bg-primary-600" data-progress="23%"></div>
                        </div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">23%</div>
                    </div>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 hidden xs:table-cell">
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>16 Days Left</span>
                    </span>
                </td>
                <td class="py-4 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end max-w-[3.75rem]">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-500 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-edit"></em>
                                        <span>Edit Project</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-check-round-cut"></em>
                                        <span>Mark As Done</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- dropdown -->
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