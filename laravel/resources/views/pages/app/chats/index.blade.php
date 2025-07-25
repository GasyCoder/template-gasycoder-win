@extends('layouts.main', ['title'=> 'Chats'])
@section('content')
<div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
    <div class="w-full lg:w-[320px] 2xl:w-[380px] lg:border-e lg:border-gray-200 dark:border-gray-800 overflow-hidden max-h-full relative flex flex-col flex-shrink-0 rounded-s">
        <div class="flex items-center justify-between pt-4.5 pb-4 px-5 md:px-7">
            <div class="dropdown relative">
                <a href="#"  data-offset="0, 4" data-placement="bottom-start"  data-rtl-placement="bottom-end"  class="dropdown-toggle *:pointer-events-none peer flex items-center">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                        <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                    </div>
                    <div class="text-xl ms-4 text-slate-700 dark:text-white">Chats</div>
                    <em class="text-lg/none ms-4 ni ni-chevron-down"></em>
                </a>
                <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                    <ul class="py-2">
                        <li>
                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                <span>Channels</span>
                            </a>
                        </li>
                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                        <li>
                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                <span>Help</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="flex items-center gap-3">
                <li>
                    <div class="dropdown relative">
                        <button data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded-full h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 active:text-white active:dark:text-white active:bg-gray-600 active:dark:bg-gray-600 [&.show]:text-white [&.show]:dark:text-white [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600 transition-all duration-300">
                            <em class="text-xl/none ni ni-setting-alt-fill"></em>
                        </button>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                            <li>
                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li>
                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <span>Message Requests</span>
                                </a>
                            </li>
                            <li>
                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <span>Archives Chats</span>
                                </a>
                            </li>
                            <li>
                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <span>Unread Chats</span>
                                </a>
                            </li>
                            <li>
                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                    <span>Group Chats</span>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded-full h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 bg-gray-200 dark:text-white bg-gray-200 dark:bg-gray-900 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 active:text-white active:dark:text-white active:bg-gray-600 active:dark:bg-gray-600 transition-all duration-300">
                        <em class="text-xl/none ni ni-edit-alt-fill"></em>
                    </a>
                </li>
            </ul>
        </div>
        <div class="h-full max-h-full overflow-auto" data-simplebar>
            <div class="px-5 md:px-7 pt-1 pb-7">
                <div class="relative">
                    <div class="absolute h-9 w-9 top-0 start-0 flex items-center justify-center">
                        <em class="text-slate-400 text-base/none ni ni-search"></em>
                    </div>
                    <input type="text" class="block w-full text-xs/4.5 ps-10 pe-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-gray-100 dark:bg-gray-900 border border-gray-100 dark:border-gray-900 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed placeholder:text-slate-400 rounded-full transition-all" id="default-03" placeholder="Search by name">
                </div>
            </div>
            <div class="px-5 pb-7 lg:px-7">
                <h6 class="font-bold text-xxs/tight tracking-widest text-slate-400 uppercase mb-3">Favorites</h6>
                <ul class="flex overflow-x-auto gap-2.5 md:flex-wrap">
                    <li>
                        <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-full h-11 w-11 tracking-wide border border-gray-200 dark:border-gray-800 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-gray-700 hover:dark:bg-gray-700 hover:text-white hover:dark:text-white active:bg-gray-800 active:dark:bg-gray-800 active:text-white active:active:text-white transition-all duration-300">
                            <em class="text-2xl/4.5 ni ni-plus"></em>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <span>AB</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-600 h-11 w-11 rounded-full font-medium bg-pink">
                                <span>KH</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium bg-purple">
                                <span>VB</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-11 w-11 rounded-full font-medium bg-info">
                                <span>SK</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- .fav-list -->
            </div>
            <div class="px-2 lg:px-4">
                <h6 class="font-bold text-xxs/tight tracking-widest text-slate-400 uppercase ms-3 mb-3">Messages</h6>
                <ul>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900 current">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium bg-purple">
                                <span>IH</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-gray-500 dark:bg-gray-300"></div>
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">Iliash Hossain</div>
                                    <span class="text-xs text-slate-400">Now</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>You: Please confrim if you got my last messages.</p></div>
                                    <div class="flex text-slate-400">
                                        <em class="text-sm/none ni ni-check-circle-fill"></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900 is-unread">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <span>AB</span>
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-gray-500 dark:bg-gray-300"></div>
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">Abu Bin Ishtiyak</div>
                                    <span class="text-xs text-slate-400">4:49 AM</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>Hi, I am Ishtiyak, can you help me with this problem ?</p></div>
                                    <div class="flex text-primary-600">
                                        <em class="text-sm/none ni ni-bullet-fill"></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">George Philips</div>
                                    <span class="text-xs text-slate-400">6 Apr</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>Have you seens the claim from Rose?</p></div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                                <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">Larry Hughes</div>
                                    <span class="text-xs text-slate-400">3 Apr</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>Hi Frank! How is you doing?</p></div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                <span>TW</span>
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">Tammy Wilson</div>
                                    <span class="text-xs text-slate-400">27  Mar</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>You: I just bought a new computer but i am having some problem</p></div>
                                    <div class="flex text-slate-400">
                                        <em class="text-sm/none ni ni-check-circle"></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="group/chatitem conversation-item relative rounded transition-all hover:bg-gray-100 hover:dark:bg-gray-900  [&.current]:bg-gray-50 [&.current]:dark:bg-gray-1000 hover:[&.current]:bg-gray-100 hover:[&.current]:dark:bg-gray-900">
                        <a class="flex items-center w-full p-3 cursor-pointer chat-open" href="#">
                            <div class="relative flex h-11 w-11 flex-shrink-0">
                                <div class="absolute top-0 end-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                    <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                </div>
                                <div class="absolute bottom-0 start-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-green-600 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                            </div>
                            <div class="ms-4 w-[calc(100%-theme(spacing.15))]">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm font-medium text-slate-600 dark:text-white mb-1 group-[.is-unread]/chatitem:font-bold group-[.is-unread]/chatitem:text-slate-700 group-[.is-unread]/chatitem:dark:text-white">Softnio Group</div>
                                    <span class="text-xs text-slate-400">27  Mar</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="line-clamp-1 text-xs group-[.is-unread]/chatitem:font-medium group-[.is-unread]/chatitem:text-slate-600 text-slate-400 w-[calc(100%-theme(spacing.10))]"><p>You: I just bought a new computer but i am having some problem</p></div>
                                    <div class="flex text-slate-400">
                                        <em class="text-sm/none ni ni-check-circle"></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute inset-y-0 end-3 opacity-0 group-hover/chatitem:opacity-100 pointer-events-none group-hover/chatitem:pointer-events-auto transition-all z-[2] flex items-center justify-end w-12 bg-gray-100  dark:bg-gray-900">
                            <div class="dropdown relative">
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-xl ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Hide</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Mark as Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Ignore Messages</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <span>Block Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="conversation-body profile-shown group/messagebody flex flex-col overflow-hidden flex-grow z-[5] transition-all duration-300 ease-in-out absolute inset-0 opacity-0 pointer-events-none lg:opacity-100 lg:pointer-events-auto [&.conversation-shown]:opacity-100 [&.conversation-shown]:pointer-events-auto lg:static bg-white dark:bg-gray-950 [&.profile-shown]:2xl:pe-[365px]">
        <div class="relative flex items-center justify-between py-4 px-7 bg-white dark:bg-gray-950 border-b border-gray-200 dark:border-gray-800">
            <ul class="flex items-center -m-0.5 sm:-m-1.5">
                <li class="p-0.5 sm:p-1.5 lg:hidden -ms-3">
                    <a href="#" class="conversation-close inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 nk-chat-hide"><em class="text-xl/none rtl:-scale-x-100 ni ni-arrow-left"></em></a>
                </li>
                <li class="p-0.5 sm:p-1.5">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium">
                            <span>IH</span>
                        </div>
                        <div class="ms-4">
                            <div class="font-bold text-sm text-slate-700 dark:text-white mb-1 line-clamp-1">Iliash Hossain</div>
                            <div class="text-xs text-slate-400"><span class="hidden sm:inline-block me-0.5">Active </span> 35m ago</div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="flex items-center -m-0.5 sm:-m-1.5">
                <li class="p-0.5 sm:p-1.5">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600">
                        <em class="text-xl/none ni ni-call-fill"></em>
                    </a>
                </li>
                <li class="p-0.5 sm:p-1.5">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600">
                        <em class="text-xl/none ni ni-video-fill"></em>
                    </a>
                </li>
                <li class="p-0.5 sm:p-1.5 hidden sm:block">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600">
                            <em class="text-xl/none ni ni-setting-fill"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg/none w-7 opacity-80 ni ni-archive"></em><span>Make as Archive</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg/none w-7 opacity-80 ni ni-cross-c"></em><span>Remove Conversion</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg/none w-7 opacity-80 ni ni-setting"></em><span>More Options</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="p-0.5 sm:p-1.5 -me-3">
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 group-[.profile-shown]/messagebody:before:h-10 group-[.profile-shown]/messagebody:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 group-[.profile-shown]/messagebody:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600 profile-toggle">
                        <em class="text-xl/none ni ni-alert-circle-fill"></em>
                    </a>
                </li>
            </ul>
        </div><!-- head -->
        <div class="p-5 lg:px-7 bg-gray-100 dark:bg-gray-1000 bg-opacity-70 h-full max-h-full overflow-auto" data-simplebar>
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-you">
                <div class="p-1 mb-6">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium">
                        <span>IH</span>
                    </div>
                </div>
                <div class="p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                Hello!
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#" data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                I found an issues when try to purchase the product.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#" data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Iliash Hossain</li>
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">29 Apr, 2020  4:28 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-me">
                <div class="w-full p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center flex-row-reverse py-0.5">
                            <div class="bg-primary-600 text-white rounded-lg group-last/chatbubble:ltr:rounded-br-none  group-last/chatbubble:rtl:rounded-bl-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl px-4 py-2">
                                Thanks for inform. We just solved the issues. Please check now.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="8, -8" data-rtl-offset="-8, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center justify-end pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Abu Bin Ishtiyak</li>
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">29 Apr, 2020  4:12 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-you">
                <div class="p-1 mb-6">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium">
                        <span>IH</span>
                    </div>
                </div>
                <div class="p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                This is really cool.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                It’s perfect. Thanks for letting me know.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Iliash Hossain</li>
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">29 Apr, 2020 4:28 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="overflow-hidden py-4 text-center">
                <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute before:h-px before:bg-gray-300 before:dark:bg-gray-900 before:w-screen before:top-1/2 before:end-full after:absolute after:h-px after:bg-gray-300 after:dark:bg-gray-900 after:w-screen after:top-1/2 after:start-full"><span>12 May, 2020</span></div>
            </div>
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-you">
                <div class="p-1 mb-6">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium">
                        <span>IH</span>
                    </div>
                </div>
                <div class="p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                Hey, I am facing problem as i can not login into application. Can you help me to reset my password?
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3:49 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-me">
                <div class="w-full p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center flex-row-reverse py-0.5">
                            <div class="bg-primary-600 text-white rounded-lg group-last/chatbubble:ltr:rounded-br-none  group-last/chatbubble:rtl:rounded-bl-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl px-4 py-2">
                                Definately. We are happy to help you.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="14, -8" data-rtl-offset="-14, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center justify-end pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3:55 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-you">
                <div class="p-1 mb-6">
                    <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-11 w-11 rounded-full font-medium">
                        <span>IH</span>
                    </div>
                </div>
                <div class="p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center py-0.5">
                            <div class="bg-white dark:bg-gray-900 rounded-lg group-last/chatbubble:ltr:rounded-bl-none  group-last/chatbubble:rtl:rounded-br-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-bl group-[&:not(:first-child)]/chatbubble:ltr:rounded-tl group-[&:not(:last-child)]/chatbubble:rtl:rounded-br group-[&:not(:first-child)]/chatbubble:rtl:rounded-tr px-4 py-2">
                                Thank you! Let me know when it done.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="-14, -8" data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3:59 PM</li>
                    </ul>
                </div>
            </div><!-- chat -->
            <div class="group/chat flex items-end -m-1 pt-2 first:pt-0 is-me">
                <div class="w-full p-1">
                    <div class="chat-bubbles">
                        <div class="group/chatbubble flex items-center flex-row-reverse py-0.5">
                            <div class="bg-primary-600 text-white rounded-lg group-last/chatbubble:ltr:rounded-br-none  group-last/chatbubble:rtl:rounded-bl-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl px-4 py-2">
                                We just reset your account. Please check your email for verification.
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="14, -8" data-rtl-offset="-14, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="group/chatbubble flex items-center flex-row-reverse py-0.5">
                            <div class="bg-primary-600 text-white rounded-lg group-last/chatbubble:ltr:rounded-br-none  group-last/chatbubble:rtl:rounded-bl-none  group-[&:not(:last-child)]/chatbubble:ltr:rounded-br group-[&:not(:first-child)]/chatbubble:ltr:rounded-tr group-[&:not(:last-child)]/chatbubble:rtl:rounded-bl group-[&:not(:first-child)]/chatbubble:rtl:rounded-tl px-4 py-2">
                                Please confirm if your got email
                            </div>
                            <ul class="flex items-center mx-3 flex-shrink-0 transition-all duration-300 opacity-0 group-hover/chatbubble:opacity-100">
                                <li>
                                    <div class="dropdown relative">
                                        <a href="#"  data-offset="14, -8" data-rtl-offset="-14, -8" data-placement="bottom-start"  data-rtl-placement="bottom-end"  class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                            <em class="text-base/none ni ni-more-h"></em>
                                        </a>
                                        <div class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                            <ul class="py-2">
                                                <li class="sm:hidden">
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-reply-fill"></em> <span>Reply</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-pen-alt-fill"></em> <span>Edit</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                        <em class="text-lg/none w-7 opacity-80 ni ni-trash-fill"></em> <span>Remove</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden md:block">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600">
                                        <em class="text-base/none ni ni-reply-fill"></em>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="flex items-center justify-end pt-1 gap-3">
                        <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:h-1 before:w-1 before:bg-slate-400 before:opacity-80"><span>Now</span> <em class="ms-1 text-slate-400 ni ni-check-circle-fill"></em></li>
                    </ul>
                </div>
            </div><!-- chat -->
        </div>
        <div class="flex items-center bg-white dark:bg-gray-950 py-4 px-5">
            <div class="relative z-[2] flex items-center -ms-1.5">
                <button class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600 class-toggle *:pointer-events-none [&.active]:opacity-60 [&.active]:-rotate-45 transition-all duration-300" data-target="#chat-upload"><em class="text-2xl/none ni ni-plus-circle-fill"></em></button>
                <div class="absolute start-full p-2 bg-white dark:bg-gray-950 hidden [&.active]:block" id="chat-upload">
                    <ul class="flex items-center">
                        <li><a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#"><em class="text-xl/none ni ni-img-fill"></em></a></li>
                        <li><a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#"><em class="text-xl/none ni ni-camera-fill"></em></a></li>
                        <li><a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#"><em class="text-xl/none ni ni-mic"></em></a></li>
                        <li><a class="inline-flex items-center justify-center h-9 w-9 text-primary-600 hover:text-primary-700" href="#"><em class="text-xl/none ni ni-grid-sq"></em></a></li>
                    </ul>
                </div>
            </div>
            <div class="flex-grow px-2">
                <div class="form-control-wrap">
                    <textarea class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" rows="1" id="default-textarea" placeholder="Type your message..."></textarea>
                </div>
            </div>
            <ul class="flex items-center gap-1.5">
                <li>
                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-primary-600"><em class="text-xl/none ni ni-happyf-fill"></em></a>
                </li>
                <li>
                    <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded-full h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300"><em class="text-xl/4.5 rtl:-scale-x-100 ni ni-send-alt"></em></button>
                </li>
            </ul>
        </div><!-- editor -->
        <div class="conversation-profile peer !absolute top-0 end-0 translate-x-full rtl:-translate-x-full max-w-[calc(100%-2.5rem)] w-[325px] 2xl:w-[365px] h-full max-h-full bg-white dark:bg-gray-950 z-[100] transition-transform duration-300 ease-in-out 2xl:border-s border-gray-200 dark:border-gray-800 visible [&.visible]:translate-x-0" data-simplebar>
            <div class="relative flex flex-col items-center text-center p-5 sm:px-6 sm:py-8 border-b border-gray-200 dark:border-gray-800">
                <div class="absolute top-4 end-4">
                    <div class="dropdown relative">
                        <button  data-offset="-14, -8"  data-rtl-offset="14, -8" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg text-slate-600 dark:text-slate-300 ni ni-more-h"></em>
                        </button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2 text-start">
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                        <span>View Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                        <span>Block Messsages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-purple-600 h-16 w-16 rounded-full font-normal">
                    <span>IH</span>
                </div>
                <div class="mt-4">
                    <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Iliash Hossain</h6>
                    <span class="text-sm text-slate-400">Active 35m ago</span>
                </div>
            </div>
            <div class="accordion manual-close">
                <div class="accordion-item border-t border-gray-200 dark:border-gray-800 first:border-t-0 group active">
                    <button class="accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full">
                        <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Options</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-sm/5 text-center text-primary-500 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pb-6 lg:px-7 hidden group-[.active]:block">
                        <ul class="-m-1">
                            <li class="p-1">
                                <a class="flex items-center group/chatoption" href="#">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                        <em class="text-base/none ni ni-edit-alt"></em>
                                    </div>
                                    <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Nickname</div>
                                </a>
                            </li>
                            <li class="p-1">
                                <a class="flex items-center group/chatoption chat-search-toggle" href="#">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                        <em class="text-base/none ni ni-search"></em>
                                    </div>
                                    <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Search In Conversation</div>
                                </a>
                            </li>
                            <li class="p-1">
                                <a class="flex items-center group/chatoption" href="#">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                        <em class="text-base/none ni ni-circle-fill"></em>
                                    </div>
                                    <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-300 ms-3">Change Theme</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item border-t border-gray-200 dark:border-gray-800 first:border-t-0 group active">
                    <button class="accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full">
                        <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Settings</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-sm/5 text-center text-primary-500 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pb-6 lg:px-7 hidden group-[.active]:block">
                        <ul class="-m-2">
                            <li class="p-2 inline-flex">
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer relative h-4 w-8 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-2 after:w-2 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-4.5  cursor-pointer disabled:cursor-not-allowed" id="notifications">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm font-bold leading-4 ps-3 cursor-pointer inline-block" for="notifications">Notifications</label>
                                </div>
                            </li>
                            <li class="p-2">
                                <a class="flex items-center group/chatoption" href="#">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                        <em class="text-base/none ni ni-bell-off-fill"></em>
                                    </div>
                                    <div class="ms-3">
                                        <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-200 mb-0.5">Ignore Messages</div>
                                        <div class="text-xs text-slate-400">You won’t be notified when message you.</div>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2">
                                <a class="flex items-center group/chatoption" href="#">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-900 h-8 w-8 rounded-full font-medium">
                                        <em class="text-base/none ni ni-alert-fill"></em>
                                    </div>
                                    <div class="ms-3">
                                        <div class="group-hover/chatoption:text-slate-800 group-hover/chatoption:dark:text-white text-sm font-bold transition-all duration-300 text-slate-600 dark:text-slate-200 mb-0.5">Something Wrong</div>
                                        <div class="text-xs text-slate-400">Give feedback and report conversion.</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-item border-t border-gray-200 dark:border-gray-800 first:border-t-0 group active">
                    <button class="accordion-toggle relative block text-start px-6 py-5 lg:px-7 w-full">
                        <h6 class="text-xxs/4 pt-0.5 tracking-relaxed text-slate-400 uppercase font-bold">Shared Photos</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-sm/5 text-center text-primary-500 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pb-6 lg:px-7 hidden group-[.active]:block">
                        <ul class="flex flex-wrap -m-1">
                            <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#">
                                <img class="rounded" src="{{ asset('images/slides/slide-a.jpg') }}" alt="">
                            </a></li>
                            <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#">
                                <img class="rounded" src="{{ asset('images/slides/slide-b.jpg') }}" alt="">
                            </a></li>
                            <li class="inline-flex p-1 w-1/3"><a class="inline-block" href="#">
                                <img class="rounded" src="{{ asset('images/slides/slide-c.jpg') }}" alt="">
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-toggle absolute inset-0 bg-slate-950 bg-opacity-20 z-[99] opacity-0 invisible peer-[.visible]:opacity-100 peer-[.visible]:visible 2xl:!opacity-0 2xl:!invisible"></div>
    </div>
</div>
@endsection

@push('scripts')
    @vite(['resources/js/apps.js'])
@endpush