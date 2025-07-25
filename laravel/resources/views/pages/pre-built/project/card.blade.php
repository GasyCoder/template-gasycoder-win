@extends('layouts.main', ['title'=> 'Project Card'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Projects</h3>
        <p class="text-slate-400">You have total 95 projects.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
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
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
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
                        <button  data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-600 h-10 w-10 rounded-md font-medium">
                            <span>RW</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Redesign Website</h6>
                            <span class="text-sm leading-4 text-slate-400">Runnergy</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Design the website for Runnergy main website including their user dashboard.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>25 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">23%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="23%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-blue-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                    </ul>
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>21 Days Left</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-md font-medium">
                            <span>KR</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Keyword Research for SEO</h6>
                            <span class="text-sm leading-4 text-slate-400">Techyspec</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Improve SEO keyword research, A/B testing, Local market improvement.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>2 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">52.5%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="52.5%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-red-100 dark:border-red-950 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>Due Tomorrow</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-red-600 h-10 w-10 rounded-md font-medium">
                            <span>WD</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Website Development</h6>
                            <span class="text-sm leading-4 text-slate-400">Fitness Next</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Develop the website using WordPree for the Fitness Next client.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>44 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">65.5%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="65.5%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-blue-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>16 Days Left</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-md font-medium">
                            <span>KR</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Keyword Research for SEO</h6>
                            <span class="text-sm leading-4 text-slate-400">Techyspec</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Improve SEO keyword research, A/B testing, Local market improvement.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>8 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">100%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="100%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
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
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-green-100 dark:border-green-950 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>Done</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
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
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-red-600 h-10 w-10 rounded-md font-medium">
                            <span>WD</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Website Development</h6>
                            <span class="text-sm leading-4 text-slate-400">Fitness Next</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Develop the website using WordPree for the Fitness Next client.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>44 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">65.5%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="65.5%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-blue-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>16 Days Left</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-x-3 mb-5">
                    <a href="#" class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-600 h-10 w-10 rounded-md font-medium">
                            <span>RW</span>
                        </div>
                        <div class="ms-4 flex flex-col">
                            <h6 class="text-base leading-5 text-slate-700 dark:text-white font-heading font-bold mb-0.5">Redesign Website</h6>
                            <span class="text-sm leading-4 text-slate-400">Runnergy</span>
                        </div>
                    </a>
                    <div class="relative dropdown">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 -mt-2 inline-flex items-center justify-center text-xs isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-9 hover:before:w-9 [&.show]:before:h-9 [&.show]:before:w-9 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                    <p>Design the website for Runnergy main website including their user dashboard.</p>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex items-center text-slate-400"><em class="text-base leading-6 me-2 ni ni-check-round-cut"></em><span>25 Tasks</span></div>
                        <div class="font-medium text-slate-600 dark:text-slate-300">23%</div>
                    </div>
                    <div class="flex h-1.5 rounded-full bg-slate-100 dark:bg-slate-900 overflow-hidden">
                        <div class="rounded-full bg-primary-600" data-progress="23%"></div>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <ul class="flex items-center gap-1.5">
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                <img class="rounded-[inherit]" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-blue-600 h-8 w-8 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </li>
                    </ul>
                    <span class="relative inline-flex items-center rounded-sm px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">
                        <em class="me-2 text-base leading-none ni ni-clock"></em><span>21 Days Left</span>
                    </span>
                </div>
            </div>
        </div>
    </div><!-- col -->
</div><!-- grid -->
@endsection