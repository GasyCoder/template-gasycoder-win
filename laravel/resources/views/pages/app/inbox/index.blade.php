@extends('layouts.main', ['title'=> 'Inbox / Mails'])
@section('content')
<div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
    <div id="ibxAside" class="peer max-w-[calc(100%-2.5rem)] w-[260px] xl:w-[300px] h-full lg:h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-full bg-white dark:bg-gray-950 lg:bg-transparent border-e border-gray-300 dark:border-gray-900 flex-shrink-0 absolute lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none flex flex-col items-stretch overflow-hidden">
        <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
            <h5 class="font-heading font-bold text-xl text-slate-700 dark:text-white leading-tighter -tracking-snug">NioMail</h5>
            <button class="modal-toggle *:pointer-events-none inline-flex items-center text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" data-target="#compose-mail">
                <em class="text-lg leading-none me-3 ni ni-plus"></em> <span>Compose</span>
            </button>
        </div>
        <div class="flex-grow h-full max-w-full overflow-auto [&_.simplebar-content]:flex  [&_.simplebar-content]:flex-col [&_.simplebar-content]:h-full  [&_.simplebar-content]:box-border" data-simplebar>
            <ul class="px-3 pt-3 lg:px-4 lg:pt-4">
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000 active">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-inbox"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Inbox</span>
                        <span class="inline-flex items-center justify-center align-middle tracking-snug text-xxs/4 font-medium text-white bg-primary-600 rounded-full px-2 py-px min-w-[2.25rem] ms-auto">8</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-edit"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Draft</span>
                        <span class="inline-flex items-center justify-center align-middle tracking-snug text-xxs/4 font-medium text-slate-600 dark:text-white bg-slate-100 dark:bg-slate-800 rounded-full px-2 py-px min-w-[2.25rem] ms-auto">12</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-star"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Favourite</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-send"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Sent</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-report"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Spam</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-trash"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">Trash</span>
                        <span class="inline-flex items-center justify-center align-middle tracking-snug text-xxs/4 font-medium text-red-600 dark:text-white bg-red-100 dark:bg-red-800 rounded-full px-2 py-px min-w-[2.25rem] ms-auto bg-danger badge-dim">8</span>
                    </a>
                </li>
                <li class="group my-0.5 rounded [&.active]:bg-primary-100 [&.active]:dark:bg-primary-950 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="relative flex items-center px-3 py-2" href="#">
                        <em class="text-xl leading-6 w-8 text-slate-400 group-[.active]:text-primary-600 ni ni-emails"></em>
                        <span class="text-sm font-medium leading-6 text-slate-600 dark:text-slate-300 ms-1 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">All Mails</span>
                    </a>
                </li>
            </ul>
            <div class="flex items-center justify-between pt-8 px-6 pb-3 lg:px-7">
                <h6 class="text-base font-heading font-bold -tracking-snug leading-tighter text-slate-700 dark:text-white">Label</h6>
                <a class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white" href="#"><em class="text-lg/none ni ni-plus-c"></em></a>
            </div>
            <ul class="px-3 lg:px-4">
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="flex flex-grow px-3 py-2" href="#"><span class="h-4 w-4 rounded-full bg-white dark:bg-gray-950 border-3 border-primary-600"></span><span class="text-sm/none text-slate-600 dark:text-white font-medium ms-4">Business</span></a>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0"  data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Edit Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Remove Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Label Color</span></a></li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show if unread</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hide</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="flex flex-grow px-3 py-2" href="#"><span class="h-4 w-4 rounded-full bg-white dark:bg-gray-950 border-3 border-red-600"></span><span class="text-sm/none text-slate-600 dark:text-white font-medium ms-4">Personal</span></a>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Edit Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Remove Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Label Color</span></a></li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show if unread</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hide</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <a class="flex flex-grow px-3 py-2" href="#"><span class="h-4 w-4 rounded-full bg-white dark:bg-gray-950 border-3 border-green-600"></span><span class="text-sm/none text-slate-600 dark:text-white font-medium ms-4">Social</span></a>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Edit Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Remove Label</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Label Color</span></a></li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show if unread</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Show</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hide</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="flex items-center justify-between pt-8 px-6 pb-3 lg:px-7">
                <h6 class="text-base font-heading font-bold -tracking-snug leading-tighter text-slate-700 dark:text-white">Contact</h6>
                <a class="inline-flex text-slate-400 hover:text-slate-700 dark:text-white" href="#"><em class="text-lg/none ni ni-plus-c"></em></a>
            </div>
            <ul class="px-3 lg:px-4 pb-3 lg:pb-4">
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="flex flex-grow px-3 py-2">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                                <span class="block text-xs leading-4 text-slate-400">CEO of Softnio</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>View Profile</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Send Email</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Start Chat</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="flex flex-grow px-3 py-2">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Dora Schmidt</span>
                                <span class="block text-xs leading-4 text-slate-400">VP Product Imagelab</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>View Profile</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Send Email</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Start Chat</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="flex flex-grow px-3 py-2">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Jessica Fowler</span>
                                <span class="block text-xs leading-4 text-slate-400">Developer at Softnio</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>View Profile</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Send Email</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Start Chat</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="group relative flex items-center rounded my-0.5 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="flex flex-grow px-3 py-2">
                        <div class="flex items-center">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Eula Flowers</span>
                                <span class="block text-xs leading-4 text-slate-400">Co-Founder of Vitzo</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative dropdown opacity-0 group-hover:opacity-100">
                        <button tabindex="0" data-offset="-8, -8" data-rtl-offset="8, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 h-9 w-9 text-slate-600"><em class="text-sm/4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>View Profile</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Send Email</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Start Chat</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="bg-gray-50 dark:bg-gray-900 p-6 mt-auto">
                <div class="mb-2">
                    <em class="text-xl/none ni ni-hard-drive"></em>
                    <span class="ms-1 text-sm text-slate-600 dark:text-slate-300"><strong>6 GB</strong> (5%) of 100GB used</span>
                </div>
                <div class="flex h-1.5 rounded-sm bg-slate-100 dark:bg-gray-700 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="5%"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-target="#ibxAside" class="class-toggle absolute inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
    <div class="flex-grow relative flex flex-col overflow-hidden flex-shrink bg-white dark:bg-gray-950">
        <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
            <ul class="flex items-center gap-0.75">
                <li class="w-8 text-start">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-all">
                </li>
                <li class="hidden sm:block">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 ni ni-undo"></em>
                    </a>
                </li>
                <li class="hidden sm:block">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 ni ni-archived"></em>
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 ni ni-trash"></em>
                    </a>
                </li>
                <li>
                    <div class="dropdown relative">
                        <button data-offset="14, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-more-v"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                    <span>Move To</span>
                                </a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                    <span>Delete</span>
                                </a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                    <span>Archive</span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="flex items-center gap-0.75">
                <li data-placement="top" class="tooltip-toggle" data-title="Prev Page">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 rtl:-scale-x-100 ni ni-arrow-left"></em>
                    </a>
                </li>
                <li data-placement="top" class="tooltip-toggle" data-title="Next Page">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 rtl:-scale-x-100 ni ni-arrow-right"></em>
                    </a>
                </li>
                <li class="lg:-me-1.5">
                    <button data-target="#searchForm" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 ni ni-search"></em>
                    </button>
                </li>
                <li class="lg:hidden -me-1.5">
                    <button data-target="#ibxAside" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                        <em class="text-xl text-slate-600 ni ni-menu-alt-r"></em>
                    </button>
                </li>
            </ul>
            <div class="absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center" id="searchForm">
                <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                    <button data-target="#searchForm" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                        <em class="text-xl leading-6 rtl:-scale-x-100 ni ni-arrow-left"></em>
                    </button>
                    <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autocomplete="off">
                    <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                        <em class="text-xl leading-6 ni ni-search"></em>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col max-h-full h-full overflow-auto" data-simplebar>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-01">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Can we help you set up email forwording?</span> We’ve noticed you haven’t set up email forward
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:00 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100 is-unread">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-02">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer active">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Ricardo Salazar</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Feedback</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Can we help you set up email forwording?</span> We’ve noticed you haven’t set up email forward
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden">
                    <a class="text-slate-500">
                        <em class="text-lg/none ni ni-clip-h"></em>
                    </a>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:00 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100 is-unread">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-03">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>LH</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Larry Hughes</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Individual Modal and Alert Design.</span> Please use the attached file for modal.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-04">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer active">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Laura Matthews</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Social</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Laravel Developer - Interview List</span> https://docs.google.com/document/d/12oOKEs4qjMlUiHXNVjHJBK
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-05">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer active">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Tammy Wilson</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">TokenWiz - New Page</span>  
                                here are the 2 screens I would to implement with TokenWiz
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100 is-unread">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-06">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer active">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-indigo-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>SP</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Sara Phillips</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">TokenLite Promo Assets</span>  
                                Please check out attached.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden">
                    <a class="text-slate-500">
                        <em class="text-lg/none ni ni-clip-h"></em>
                    </a>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-07">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>MA</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Mildred Arnold</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Token Page Content.</span>  
                                Please check included links for content.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-08">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Personal</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Feedback about licenses and support policy</span>  
                                Two important aspects of the marketplace are its licenses, which govern the use of your items by customers
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-09">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer active">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Tammy Wilson</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-sky-600 bg-sky-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Team</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Thanks for completing our survey</span>  
                                Since you've already completed our survey we wanted to give you the opportunity to win as well
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-10">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Ricardo Salazar</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Registration Confirmation for Envato Worldwide</span>  
                                The event organizer has provided the following information
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden">
                    <a class="text-slate-500">
                        <em class="text-lg/none ni ni-clip-h"></em>
                    </a>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-11">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>CL</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Catherine Larson</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Bring personality to your design work.</span>  
                                As designers, how we tell our stories is key. We must be unique, genuine, and use language with purpose to get meaningful results in our design work. 
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden">
                    <a class="text-slate-500">
                        <em class="text-lg/none ni ni-clip-h"></em>
                    </a>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-12">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-indigo-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>SP</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Sara Phillips</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Unique design portfolio examples.</span>  
                                Prepare to be blown away with our favourite unique design portfolio examples built
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-13">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Laura Matthews</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Personal</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Credit Card Verification Incomplete.</span>  
                                Your recently submitted credit card verification has NOT been completed. We found the following errors in your submission. 
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-14">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-gray-800 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>MG</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Maria Grant</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="me-3 max-md:hidden"><span class="relative inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Feedback</span></div>
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Introducing npm’s security insights API.</span>  
                                Something I think is very important to supply chain security is to have the right information available to make decisions about risk
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-15">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-gray-950 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>TN</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Timothy Nichols</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Do your table designs pass The Lunch Test</span>  
                                This email goes out to everyone who designs data-heavy applications. Lists and tables aren’t exactly the sexiest part of design, but in my own personal experience
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="group/ibxitem relative flex max-md:flex-wrap items-center bg-white dark:bg-gray-950 py-4 px-5 sm:px-9 lg:px-7 cursor-pointer transition-all hover:bg-gray-50 hover:dark:bg-gray-1000 border-b last:border-b-0 border-gray-200 dark:border-gray-800 [&.is-unread]:bg-gray-50 [&.is-unread]:dark:bg-gray-1000 [&.is-unread]:bg-opacity-60 [&.is-unread]:hover:bg-opacity-100">
                <button data-target="#ibxDetails" class="class-toggle absolute inset-x-0 inset-y-0 z-[1]"></button>
                <div class="pe-1 md:pe-2 flex-shrink-0 relative z-[2] inline-flex w-7">
                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-16">
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 relative z-[2] max-md:absolute max-md:top-13 max-md:start-7.5 max-sm:start-3.5">
                    <div class="inline-flex relative group/asterisk cursor-pointer">
                        <em class="text-lg/none text-slate-400 ni ni-star"></em>
                        <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 max-md:flex-grow max-md:pe-20 md:w-[180px] xl:w-[200px]">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-7 w-7 md:h-10 md:w-10 rounded-full font-medium">
                            <span>JL</span>
                        </div>
                        <div class="ms-4">
                            <span class="group-[.is-unread]/ibxitem:font-medium block text-sm font-normal leading-6 text-slate-700 dark:text-white">Jenkins Lori</span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink flex-grow max-md:mt-1.5 max-md:ps-8 max-md:pe-12 w-full max-w-full overflow-hidden">
                    <div class="flex items-center">
                        <div class="overflow-hidden whitespace-nowrap text-ellipsis">
                            <span class="inline text-slate-400">
                                <span class="text-slate-600 dark:text-slate-400 max-md:block group-[.is-unread]/ibxitem:font-medium me-0.5">Can I get email alerts.</span>  
                                If you subscribe to email notifications, you will receive an email alert
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-1 md:px-2 flex-shrink-0 w-9 text-center max-md:hidden"></div>
                <div class="px-1 md:px-2 flex-shrink-0 text-end w-20 xl:me-8 max-md:absolute max-md:top-5 max-md:end-7.5 max-sm:end-3.5">
                    <div class="text-sm text-slate-400">10:30 AM</div>
                </div>
                <div class="ps-1 md:ps-2 flex-shrink-0 relative flex-grow-0 w-8 ms-auto max-md:absolute max-md:bottom-5 max-md:end-6.5 max-sm:end-3">
                    <ul class="relative flex items-center justify-end md:-me-2">
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Archive">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-archived"></em>
                                </button>
                            </div>
                        </li>
                        <li class=" opacity-0 transition-all duration-300 bg-gray-50 dark:bg-gray-1000 px-0.5 group-hover/ibxitem:opacity-100">
                            <div data-placement="top" class="tooltip-toggle inline-flex " data-title="Delete">
                                <button class="inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900  text-slate-600">
                                    <em class="text-base ni ni-trash"></em>
                                </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative z-[1] h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:-mb-2 group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:top-auto group-[&:last-child:not(:nth-child(-n+3))]/ibxitem:bottom-full min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-trash"></em>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-archived"></em>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- dropdown -->
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- list -->
        <div id="ibxDetails" class="absolute inset-0 bg-white dark:bg-gray-950 z-[2] opacity-0 pointer-events-none invisible [&.active]:opacity-100 [&.active]:pointer-events-auto [&.active]:visible overflow-hidden flex flex-col">
            <div class="relative flex items-center justify-between border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:px-9 lg:px-7 min-h-[61px]">
                <ul class="flex items-center gap-0.75">
                    <li class="-ms-1.5">
                        <button data-target="#ibxDetails" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 rtl:-scale-x-100 ni ni-arrow-left"></em>
                        </button>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-archived"></em>
                        </a>
                    </li>
                    <li class="hidden sm:block">
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-report"></em>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-trash"></em>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-label"></em>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown relative">
                            <button data-offset="14, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-600 ni ni-more-v"></em>
                            </button>
                            <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <span>Mark as unread</span>
                                    </a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <span>Mark as not important</span>
                                    </a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <span>Archive this message</span>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="flex items-center gap-0.75">
                    <li data-placement="top" class="tooltip-toggle hidden sm:block" data-title="Prev Page">
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-chevron-left"></em>
                        </a>
                    </li>
                    <li data-placement="top" class="tooltip-toggle hidden sm:block" data-title="Next Page">
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </li>
                    <li class="-me-1.5">
                        <button data-target="#searchFormMessage" class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-search"></em>
                        </button>
                    </li>
                </ul>
                <div class="absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-100 transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center" id="searchFormMessage">
                    <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                        <button data-target="#searchFormMessage" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                            <em class="text-xl leading-6 rtl:-scale-x-100 ni ni-arrow-left"></em>
                        </button>
                        <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autocomplete="off">
                        <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300">
                            <em class="text-xl leading-6 ni ni-search"></em>
                        </button>
                    </div>
                </div>
            </div>
            <div class="h-full max-h-full overflow-auto" data-simplebar>
                <div class="flex items-start justify-between pt-6 sm:pt-7 pb-8 px-5 sm:px-9 lg:px-7">
                    <div>
                        <h4 class="font-heading font-bold text-xl lg:text-2xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-3">Introducing New Dashboard</h4>
                        <ul class="flex flex-wrap gap-2">
                            <li class="inline-flex align-middle -space-x-px">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-xxs font-heading font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-2 tracking-wide border border-primary-200 hover:border-primary-600 text-primary-600 hover:text-white bg-primary-200 hover:bg-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">Business</a>
                                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 first:rounded-s-sm last:rounded-e-sm h-5.5 w-5.5 tracking-wide border border-primary-200 hover:border-primary-600 text-primary-600 hover:text-white bg-primary-200 hover:bg-primary-600 active:bg-primary-700 transition-all duration-300">
                                    <em class="text-xs leading-4.5 ni ni-cross"></em>
                                </a>
                            </li>
                            <li class="inline-flex align-middle -space-x-px">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-xxs font-heading font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-2 tracking-wide border border-red-100 hover:border-red-600 text-red-600 hover:text-white bg-red-100 hover:bg-red-600 active:bg-red-700 hover:z-10 transition-all duration-300">Management</a>
                                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 first:rounded-s-sm last:rounded-e-sm h-5.5 w-5.5 tracking-wide border border-red-100 hover:border-red-600 text-red-600 hover:text-white bg-red-100 hover:bg-red-600 active:bg-red-700 transition-all duration-300">
                                    <em class="text-xs leading-4.5 ni ni-cross"></em>
                                </a>
                            </li>
                            <li class="inline-flex align-middle -space-x-px">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-xxs font-heading font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-2 tracking-wide border border-cyan-100 hover:border-cyan-600 text-cyan-600 hover:text-white bg-cyan-100 hover:bg-cyan-600 active:bg-cyan-700 hover:z-10 transition-all duration-300">Team</a>
                                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 first:rounded-s-sm last:rounded-e-sm h-5.5 w-5.5 tracking-wide border border-cyan-100 hover:border-cyan-600 text-cyan-600 hover:text-white bg-cyan-100 hover:bg-cyan-600 active:bg-cyan-700 transition-all duration-300">
                                    <em class="text-xs leading-4.5 ni ni-cross"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="flex items-center gap-1.5">
                        <li class="hidden sm:block">
                            <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-600 ni ni-printer"></em>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 group/asterisk">
                                <div class="inline-flex relative cursor-pointer">
                                    <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                    <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="relative px-5 sm:px-9 lg:px-7 pb-8 sm:pb-11 after:absolute after:bg-gray-200 after:dark:bg-gray-900 after:h-px after:bottom-4 sm:after:bottom-5.5 after:inset-x-5 sm:after:inset-x-9 last:after:hidden">
                        <div class="peer group/replyheader cursor-pointer flex items-center justify-between mb-2 gap-x-4" id="reply-01">
                            <div class="flex items-center flex-grow group-[.is-collapsed]/replyheader:overflow-hidden">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="ms-4 max-w-[calc(100%-theme(spacing.14))]">
                                    <div class="text-sm/6 font-bold text-slate-700 dark:text-white">Abu Bin Ishtiyak <span class="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden">14 Jan, 2020</span></div>
                                    <div class="dropdown inline-flex relative group-[.is-collapsed]/replyheader:hidden">
                                        <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center relative z-[1]">
                                            <span>to Mildred</span>
                                            <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em>
                                        </button>
                                        <div tabindex="0" class="dropdown-menu absolute min-w-[240px] sm:min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="p-3">
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">from:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">info@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">to:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">bcc:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">mailed-by:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">softnio.com</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-xs sm:text-sm leading-6 hidden group-[.is-collapsed]/replyheader:block text-slate-600 whitespace-nowrap overflow-hidden text-ellipsis max-sm:mt-0.5">I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</div>
                                </div>
                            </div>
                            <ul class="flex items-center flex-shrink-0 cursor-default gap-1.5 -me-2">
                                <li class="max-sm:hidden me-1.5"><em class="text-xl/none ni ni-clip-h"></em></li>
                                <li class="max-sm:hidden"><span class="me-4 text-slate-600">14 Jan, 2020</span></li>
                                <li data-placement="top" class="tooltip-toggle group-[.is-collapsed]/replyheader:hidden relative" data-title="Reply">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-curve-up-left"></em>
                                    </a>
                                </li>
                                <li class="group-[.is-collapsed]/replyheader:hidden dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-reply-fill"></em><span>Reply to</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-forward-arrow-fill"></em><span>Forward</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-trash-fill"></em><span>Delete this</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-report-fill"></em><span>Report Spam</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ms-12 sm:ms-14 mt-5 mb-3 peer-[.is-collapsed]:hidden">
                            <div class="entry">
                                <p>Hello team,</p>
                                <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                <p>Thank you <br> Ishityak</p>
                            </div>
                            <div class="rounded border border-gray-200 dark:border-gray-800 mt-7">
                                <ul class="flex flex-wrap px-5 py-4 gap-x-8 gap-y-2">
                                    <li class="w-[180px]">
                                        <a class="flex items-center w-full text-slate-600 dark:text-slate-300" href="#"><em class="text-2xl/none text-primary-600 me-4 ni ni-img"></em><span class="line-clamp-1">error-show-On-order.jpg</span></a>
                                    </li>
                                    <li class="w-[180px]">
                                        <a class="flex items-center w-full text-slate-600 dark:text-slate-300" href="#"><em class="text-2xl/none text-primary-600 me-4 ni ni-img"></em><span class="line-clamp-1">full-page-error.jpg</span></a>
                                    </li>
                                </ul>
                                <div class="bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 px-5 py-3 flex flex-wrap justify-between rounded-b">
                                    <span class="font-medium text-slate-700 dark:text-white text-sm">2 files attached</span>
                                    <a class="inline-flex items-center text-sm/none font-medium whitespace-nowrap gap-3.5 group/link" href="#">
                                        <em class="text-lg/none text-primary-500 group-hover/link:text-primary-600 transition-all duration-300 ni ni-download"></em>
                                        <span class="text-slate-400 group-hover/link:text-primary-600 transition-all duration-300">Download All</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative px-5 sm:px-9 lg:px-7 pb-8 sm:pb-11 after:absolute after:bg-gray-200 after:dark:bg-gray-900 after:h-px after:bottom-4 sm:after:bottom-5.5 after:inset-x-5 sm:after:inset-x-9 last:after:hidden">
                        <div class="peer group/replyheader cursor-pointer flex items-center justify-between mb-2 gap-x-4">
                            <div class="flex items-center flex-grow group-[.is-collapsed]/replyheader:overflow-hidden">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                    <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                </div>
                                <div class="ms-4 max-w-[calc(100%-theme(spacing.14))]">
                                    <div class="text-sm/6 font-bold text-slate-700 dark:text-white">Mildred Delgado <span class="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden">18 Jan, 2020</span></div>
                                    <div class="dropdown inline-flex relative group-[.is-collapsed]/replyheader:hidden">
                                        <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                            <span>to Mildred</span>
                                            <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em>
                                        </button>
                                        <div tabindex="0" class="dropdown-menu absolute min-w-[240px] sm:min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="p-3">
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">from:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">info@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">to:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">bcc:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">mailed-by:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">softnio.com</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-xs sm:text-sm leading-6 hidden group-[.is-collapsed]/replyheader:block text-slate-600 whitespace-nowrap overflow-hidden text-ellipsis max-sm:mt-0.5">It would be great if you send me itiam ut neque in magna porttitor...</div>
                                </div>
                            </div>
                            <ul class="flex items-center flex-shrink-0 cursor-default gap-1.5 -me-2">
                                <li class="max-sm:hidden"><span class="me-4 text-slate-600">14 Jan, 2020</span></li>
                                <li data-placement="top" class="tooltip-toggle group-[.is-collapsed]/replyheader:hidden relative" data-title="Reply">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-curve-up-left"></em>
                                    </a>
                                </li>
                                <li class="group-[.is-collapsed]/replyheader:hidden dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-reply-fill"></em><span>Reply to</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-forward-arrow-fill"></em><span>Forward</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-trash-fill"></em><span>Delete this</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-report-fill"></em><span>Report Spam</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ms-12 sm:ms-14 mt-5 mb-3 peer-[.is-collapsed]:hidden">
                            <div class="entry">
                                <p>Hello team,</p>
                                <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                <p>Thank you <br> Ishityak</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative px-5 sm:px-9 lg:px-7 pb-8 sm:pb-11 after:absolute after:bg-gray-200 after:dark:bg-gray-900 after:h-px after:bottom-4 sm:after:bottom-5.5 after:inset-x-5 sm:after:inset-x-9 last:after:hidden">
                        <div class="peer group/replyheader cursor-pointer flex items-center justify-between mb-2 gap-x-4 is-opened">
                            <div class="flex items-center flex-grow group-[.is-collapsed]/replyheader:overflow-hidden">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="ms-4 max-w-[calc(100%-theme(spacing.14))]">
                                    <div class="text-sm/6 font-bold text-slate-700 dark:text-white">Abu Bin Ishtiyak <span class="text-xxs/5 ms-1.5 font-normal text-slate-400 sm:hidden">20 Jan, 2020</span></div>
                                    <div class="dropdown inline-flex relative group-[.is-collapsed]/replyheader:hidden">
                                        <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                            <span>to Mildred</span>
                                            <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em>
                                        </button>
                                        <div tabindex="0" class="dropdown-menu absolute min-w-[240px] sm:min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="p-3">
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">from:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">info@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">to:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">bcc:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">team@softnio.com</a></span>
                                                </li>
                                                <li class="flex leading-4.5 py-0.75">
                                                    <span class="w-17 sm:w-19 text-xs/4.5 text-end me-3 text-slate-400">mailed-by:</span> 
                                                    <span class="text-sm/4.5"><a class="text-slate-700 dark:text-white hover:text-primary-600 transition-all" href="#">softnio.com</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-xs sm:text-sm leading-6 hidden group-[.is-collapsed]/replyheader:block text-slate-600 whitespace-nowrap overflow-hidden text-ellipsis max-sm:mt-0.5">It would be great if you send me itiam ut neque in magna porttitor...</div>
                                </div>
                            </div>
                            <ul class="flex items-center flex-shrink-0 cursor-default gap-1.5 -me-2">
                                <li class="max-sm:hidden"><span class="me-4 text-slate-600">14 Jan, 2020</span></li>
                                <li data-placement="top" class="tooltip-toggle group-[.is-collapsed]/replyheader:hidden relative" data-title="Reply">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-curve-up-left"></em>
                                    </a>
                                </li>
                                <li class="group-[.is-collapsed]/replyheader:hidden dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-reply-fill"></em><span>Reply to</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-forward-arrow-fill"></em><span>Forward</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-trash-fill"></em><span>Delete this</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-report-fill"></em><span>Report Spam</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ms-12 sm:ms-14 mt-5 mb-3 peer-[.is-collapsed]:hidden">
                            <div class="entry">
                                <p>Hello team,</p>
                                <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                <p>Thank you <br> Ishityak</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 dark:border-gray-800 sm:rounded sm:border sm:mt-2 sm:mb-9 lg:mb-10 sm:ms-24 lg:ms-20 sm:me-9 lg:me-10">
                    <div class="px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
                        <div class="relative py-4 flex-grow flex items-center sm:items-start max-sm:flex-wrap">
                            <div class="-ms-2 me-3">
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-curve-up-left"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-reply-fill"></em><span>Reply to Abu Bin Ishtiyak</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-forward-arrow-fill"></em><span>Forward</span>
                                                </a>
                                            </li>
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"> </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-edit-fill"></em><span>Edit Subject</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-sm font-bold sm:hidden">Reply</div>
                            <div class="w-full ">
                                <div class="flex items-center sm:pe-14">
                                    <label class="text-sm text-slate-400 pe-2 w-6">To</label>
                                    <input type="text" value="info@softnio.com"class="js-tags !border-transparent" placeholder="">
                                </div>
                                <div class="hidden [&.active]:flex items-center" id="mail-cc">
                                    <label class="text-sm text-slate-400 pe-2 w-6">Cc</label>
                                    <input type="text"class="js-tags !border-transparent">
                                    <button class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-cc"><em class="icon ni ni-cross"></em></button>
                                </div>
                                <div class="hidden [&.active]:flex items-center" id="mail-bcc">
                                    <label class="text-sm text-slate-400 pe-2 w-6">Bcc</label>
                                    <input type="text"class="js-tags !border-transparent">
                                    <button class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-bcc"><em class="icon ni ni-cross"></em></button>
                                </div>
                            </div>
                            <ul class="flex gap-x-3 absolute top-5 sm:top-6 end-0">
                                <li><button tabindex="-1" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-cc">CC</button></li>
                                <li><button tabindex="-1" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-bcc">BCC</button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-b border-gray-200 dark:border-gray-800">
                        <div class="py-2 px-5 sm:px-6">
                            <textarea class="block w-full text-sm leading-4.5 p-0 pt-2 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-between py-4 px-5 sm:px-6">
                        <ul class="inline-flex items-center gap-1.5">
                            <li class="me-2"><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" type="submit">Send</button></li>
                            <li>
                                <div data-placement="top" class="tooltip-toggle dropdown relative" data-title="Template">
                                    <a data-offset="0, 4" data-placement="top-start"  data-rtl-placement="top-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#"><em class="text-base/none ni ni-hash"></em></a>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <h6 class="relative px-5 py-2.5 flex items-center text-xs leading-5 text-slate-400">Quick Insert</h6>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank you message</span></a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Your issues solved</span></a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank you message</span></a>
                                            </li>
                                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-file-plus"></em><span>Save as Template</span></a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-notes-alt"></em><span>Manage Template</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Attachment" href="#"><em class="text-base/none ni ni-clip-v"></em></a>
                            </li>
                            <li>
                                <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Images" href="#"><em class="text-base/none ni ni-img"></em></a>
                            </li>
                        </ul>
                        <ul class="inline-flex items-center gap-1 -me-2">
                            <li>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Option</span></a></li>
                                            <li class=" active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Option</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" href="#"><em class="text-base/none ni ni-trash"></em></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- details -->
    </div>
</div>
@endsection

@push('modals')
<div id="compose-mail" class="modal group px-4 fixed inset-0 flex items-center transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] md:w-[720px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-heading font-bold text-slate-700 dark:text-white">Compose Mail</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
            <div class="relative py-4 flex-grow flex items-center sm:items-start max-sm:flex-wrap">
                <div class="w-full ">
                    <div class="flex items-center sm:pe-14">
                        <label class="text-sm text-slate-400 pe-2 w-6">To</label>
                        <input type="text" class="js-tags !border-transparent" data-placeholder="Recipient" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com">
                    </div>
                    <div class="hidden [&.active]:flex items-center nk-reply-form-input-cc" id="mail-cc-compose">
                        <label class="text-sm text-slate-400 pe-2 w-6">Cc</label>
                        <input type="text" class="js-tags !border-transparent">
                        <button class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-cc-compose"><em class="icon ni ni-cross"></em></button>
                    </div>
                    <div class="hidden [&.active]:flex items-center nk-reply-form-input-bcc" id="mail-bcc-compose">
                        <label class="text-sm text-slate-400 pe-2 w-6">Bcc</label>
                        <input type="text" class="js-tags !border-transparent">
                        <button class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-bcc-compose"><em class="icon ni ni-cross"></em></button>
                    </div>
                </div>
                <ul class="flex gap-x-3 absolute top-6 end-0">
                    <li><button tabindex="-1" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-cc-compose">CC</button></li>
                    <li><button tabindex="-1" class="class-toggle *:pointer-events-none text-slate-400 hover:text-primary-600" data-target="#mail-bcc-compose">BCC</button></li>
                </ul>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-6">
            <textarea class="block w-full text-sm leading-4.5 p-0 min-h-[278px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
        </div>
        <div class="flex justify-between p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800 rounded-b-[inherit]">
            <ul class="inline-flex items-center gap-1.5">
                <li class="me-2"><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" type="submit">Send</button></li>
                <li>
                    <div data-placement="top" class="tooltip-toggle dropdown relative" data-title="Template">
                        <a data-offset="0, 4" data-placement="top-start"  data-rtl-placement="top-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#"><em class="text-base/none ni ni-hash"></em></a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <h6 class="relative px-5 py-2.5 flex items-center text-xs leading-5 text-slate-400">Quick Insert</h6>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank you message</span></a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Your issues solved</span></a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank you message</span></a>
                                </li>
                                <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-file-plus"></em><span>Save as Template</span></a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-200 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-notes-alt"></em><span>Manage Template</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Attachment" href="#"><em class="text-base/none ni ni-clip-v"></em></a>
                </li>
                <li>
                    <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Images" href="#"><em class="text-base/none ni ni-img"></em></a>
                </li>
            </ul>
            <ul class="inline-flex items-center gap-1 -me-2">
                <li>
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl text-slate-600 ni ni-more-v"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Option</span></a></li>
                                <li class=" active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Option</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" href="#"><em class="text-base/none ni ni-trash"></em></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endpush