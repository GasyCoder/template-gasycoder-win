@extends('layouts.main', ['title'=> 'Messages - Support Ticket'])
@section('content')
<div class="relative flex overflow-hidden rounded border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 min-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)] max-h-[calc(100vh-theme(spacing.16)-theme(spacing.16)-theme(spacing.17)-1px)]">
    <div class="w-full lg:w-[320px] 2xl:w-[380px] lg:border-e lg:border-gray-200 dark:border-gray-800 overflow-hidden max-h-full relative flex flex-col flex-shrink-0 rounded-s bg-slate-50 dark:bg-gray-900 bg-opacity-70">
        <div class="relative border-b border-gray-200 dark:border-gray-800 px-5 sm:px-8 lg:px-7 bg-slate-50 dark:bg-slate-900 z-[2] rounded-ss">
            <ul class="flex -mx-3">
                <li class="px-3 group/navitem active">
                    <a class="inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100" href="#">Active</a>
                </li>
                <li class="px-3 group/navitem">
                    <a class="inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100" href="#">Closed</a>
                </li>
                <li class="px-3 group/navitem">
                    <a class="inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100" href="#">Stared</a>
                </li>
                <li class="px-3 group/navitem">
                    <a class="inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100" href="#">All</a>
                </li>
                <li class="px-3 group/navitem ms-auto">
                    <button data-target="#searchForm" class="class-toggle *:pointer-events-none inline-flex relative text-slate-400 hover:text-primary-600 group-[.active]/navitem:text-primary-600 font-medium text-sm/6 py-4 transition-all duration-300 after:absolute after:h-0.5 after:bg-primary-600 after:start-0 after:end-0 after:-bottom-px after:opacity-0 after:transition-all after:duration-300 group-[.active]/navitem:after:opacity-100">
                        <em class="text-lg leading-6 ni ni-search"></em>
                    </button>
                </li>
            </ul>
            <div class="absolute inset-0 -bottom-px border-b border-gray-200 dark:border-gray-800 opacity-0 invisible [&.active]:opacity-100 [&.active]:visible z-[800] transition-all duration-300 bg-white dark:bg-gray-950 sm:rounded-t flex items-center" id="searchForm">
                <div class="px-4 sm:px-7 lg:px-6 flex items-center w-full">
                    <button data-target="#searchForm" class="class-toggle relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 transition-all duration-300 -ms-px">
                        <em class="text-lg leading-6 rtl:-scale-x-100 ni ni-arrow-left"></em>
                    </button>
                    <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search by user or message" autocomplete="off">
                    <button type="submit" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 text-slate-600 hover:text-primary-600 transition-all duration-300 -me-px">
                        <em class="text-lg leading-6 ni ni-search"></em>
                    </button>
                </div>
            </div>
        </div>
        <div class="h-full max-h-full overflow-auto" data-simplebar>
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default current">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <span>AB</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Abu Bin Ishtiyak</span>
                            <div class="h-1.5 w-1.5 inline-block rounded-full bg-pink-400 ms-1"></div>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="inline-flex"><em class="text-lg/none ni ni-clip-h"></em></div>
                            <div class="ms-3">12 Jan</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Unable to select currency when order.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello team, I am facing problem as i can not select currency on buy order page.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Jackelyn Dugas</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">15 Jan</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Have not received bitcoin yet.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hey! I recently bitcoin from you. But still have not received yet.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto active">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default is-unread">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-400 h-10 w-10 rounded-full font-medium bg-purple">
                    <span>MJ</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Mayme Johnston</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">11 Jan</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">I can not submit kyc application</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello support! I can not upload my documents on kyc application.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="unread">
                                <span class="relative inline-flex rounded-sm px-1 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-3.5 tracking-snug whitespace-nowrap align-middle">2</span>
                            </div>
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Jake Smityh</span>
                            <div class="h-1.5 w-1.5 inline-block rounded-full bg-pink-400 ms-1"></div>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">30 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Have not received bitcoin yet.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hey! I recently bitcoin from you. But still have not received yet.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Amanda Moore</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">28 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Wallet needs to verify.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-full font-medium">
                    <span>RV</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Rebecca Valdez</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">26 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">I want my money back.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hey! I don't want to stay as your subscriber any more, Also i want my mony back.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-orange-600 h-10 w-10 rounded-full font-medium">
                    <span>CG</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Charles Greene</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">21 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Have not received bitcoin yet.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hey! I recently bitcoin from you. But still have not received yet.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-full font-medium">
                    <span>EA</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Ethan Anderson</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">16 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Unable to select currency when order.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello team, I am facing problem as i can not select currency on buy order page.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Jose Peterson</span>
                            <div class="h-1.5 w-1.5 inline-block rounded-full bg-pink-400 ms-1"></div>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">14 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Have not received bitcoin yet.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hey! I recently bitcoin from you. But still have not received yet.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                    <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Amanda Moore</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">12 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">Wallet needs to verify.</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
            <div class="group/messageitem conversation-item flex py-5 px-5 sm:px-8 lg:px-7 border-b last:border-b-0 border-gray-200 dark:border-gray-800 cursor-pointer [&.current]:bg-white [&.current]:dark:bg-gray-950 [&.current]:cursor-default">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-full font-medium">
                    <span>MJ</span>
                </div>
                <div class="flex-grow ms-3 max-w-(calc(100%-theme(spacing.15)))">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex items-center text-xs/5 text-slate-400  group-[.is-unread]/messageitem:font-medium  group-[.is-unread]/messageitem:text-slate-700 group-[.is-unread]/messageitem:dark:text-white">
                            <span>Mayme Johnston</span>
                        </div>
                        <div class="inline-flex items-center text-xs text-slate-400">
                            <div class="ms-3">16 Dec, 2019</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex-grow-0 pe-2 max-w-[calc(100%-theme(spacing.7))]">
                            <h6 class="font-heading text-sm font-bold leading-tighter text-slate-700 dark:text-white mb-1 line-clamp-1">I can not submit kyc application</h6>
                            <p class="text-[13px] text-slate-400 line-clamp-2 group-[.is-unread]/messageitem:font-medium group-[.is-unread]/messageitem:text-slate-600">Hello support! I can not upload my documents on kyc application.</p>
                        </div>
                        <div class="inline-flex flex-col text-center py-0.5">
                            <div class="inline-flex relative group/asterisk cursor-pointer mt-auto">
                                <em class="text-lg/none text-slate-400 ni ni-star"></em>
                                <em class="text-lg/none text-yellow-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- message item -->
        </div>
    </div>
    <div class="conversation-body profile-shown group/messagebody flex flex-col overflow-hidden flex-grow z-[5] transition-all duration-300 ease-in-out absolute inset-0 opacity-0 pointer-events-none lg:opacity-100 lg:pointer-events-auto [&.conversation-shown]:opacity-100 [&.conversation-shown]:pointer-events-auto lg:static bg-white dark:bg-gray-950 [&.profile-shown]:2xl:pe-[280px]">
        <div class="relative border-b border-gray-200 dark:border-gray-800 py-3 px-5 sm:py-4 sm:px-9 lg:py-8">
            <h4 class="font-heading font-bold leading-tighter tracking-tight text-slate-700 dark:text-white text-2xl hidden lg:block mb-2 sm:mb-4 line-clamp-1">Unable to select currency when order</h4>
            <div class="flex items-center justify-between">
                <div class="hidden lg:block">
                    <ul class="flex flex-wrap gap-6">
                        <li>
                            <span class="inline-flex items-center text-slate-400 gap-2">
                                <em class="text-sm/none text-primary-600 ni ni-flag-fill"></em> 
                                <span>Technical Problem</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="lg:hidden">
                    <a href="#" class="conversation-close -ms-1.5 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 nk-msg-hide">
                        <em class="text-xl text-slate-600 rtl:-scale-x-100 ni ni-arrow-left"></em>
                    </a>
                </div>
                <ul class="flex gap-2">
                    <li>
                        <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-slate-50 dark:bg-slate-900 hover:bg-slate-600 hover:dark:bg-slate-700 hover:text-white hover:border-slate-600 hover:dark:border-slate-700 active:bg-slate-800 active:text-white active:border-slate-800 transition-all duration-300">
                            <em class="text-base leading-4.5 ni ni-check"></em>
                            <span class="ms-3">Mark as Closed</span>
                        </a>
                    </li>
                    <li class="lg:hidden">
                        <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-300 bg-white dark:bg-gray-950 hover:bg-slate-600 hover:dark:bg-slate-700 hover:text-white  hover:dark:text-white hover:border-slate-600 hover:dark:border-slate-700 [&.show]:bg-slate-600 [&.show]:dark:bg-slate-700 [&.show]:text-white [&.show]:border-slate-600  [&.show]:dark:border-slate-700 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 profile-toggle">
                            <em class="text-base leading-4.5 ni ni-info-i"></em>
                        </a>
                    </li>
                    <li class="relative dropdown">
                        <button tabindex="0" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-300 bg-white dark:bg-gray-950 hover:bg-slate-600 hover:dark:bg-slate-700 hover:text-white  hover:dark:text-white hover:border-slate-600 hover:dark:border-slate-700 [&.show]:bg-slate-600 [&.show]:dark:bg-slate-700 [&.show]:text-white [&.show]:border-slate-600  [&.show]:dark:border-slate-700 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300"><em class="text-base leading-4.5 ni ni-more-h"></em></button>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="p-1">
                                <li class="rounded">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-user-add"></em>
                                        <span>Assign To Member</span>
                                    </a>
                                </li>
                                <li class="rounded">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-archive"></em>
                                        <span>Move to Archive</span>
                                    </a>
                                </li>
                                <li class="rounded">
                                    <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-done"></em>
                                        <span>Mark as Close</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="profile-toggle hidden lg:flex me-13 group-[.profile-shown]/messagebody:me-0 group-[.profile-shown]/messagebody:-rotate-180 h-9 w-9 items-center justify-center border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-full z-[2] 2xl:z-[200] text-slate-400 absolute -bottom-4.5 -end-4.5 transition-all duration-300 ease-in-out">
                <em class="text-lg/none rtl:-scale-x-100 ni ni-arrow-left"></em>
            </a>
        </div>
        <div class="h-full max-h-full overflow-auto" data-simplebar>
            <div class="px-5 sm:px-9 py-6 lg:hidden border-b border-gray-200 dark:border-gray-800">
                <h4 class="font-heading font-bold tracking-tight text-slate-700 dark:text-white text-xl/tighter mb-2 sm:mb-4 line-clamp-1">Unable to select currency when order</h4>
                <ul class="flex flex-wrap gap-6">
                    <li>
                        <span class="inline-flex items-center text-slate-400 gap-2">
                            <em class="text-sm/none text-primary-600 ni ni-flag-fill"></em> 
                            <span>Technical Problem</span>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="py-5 px-5 sm:px-9 lg:py-8">
                <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">Abu Bin Ishtiyak</div>
                    </div>
                    <div class="text-xs text-slate-400">14 Jan, 2020</div>
                </div>
                <div class="ms-12">
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

            <div class="py-5 px-5 sm:px-9 lg:py-8">
                <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                            <span>ST</span>
                        </div>
                        <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">Support Team <span class="text-slate-400 font-normal">(You)</span></div>
                    </div>
                    <div class="text-xs text-slate-400">14 Jan, 2020</div>
                </div>
                <div class="ms-12">
                    <div class="entry">
                        <p>Hello Ishtiyak,</p>
                        <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                        <p>Thank you very much. </p>
                    </div>
                    <div class="inline-block text-xs rounded bg-gray-100 dark:bg-gray-900 bg-opacity-70 px-3 py-1.5 mt-5">
                        Replied by <span>Iliash Hossain</span> at 11:32 AM
                    </div>
                </div>
            </div>

            <div class="text-center overflow-hidden mx-5 sm:mx-9 lg:mx-10 px-8">
                <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute after:absolute before:h-px after:h-px before:bg-gray-200 before:dark:bg-gray-900 after:bg-gray-200 after:dark:bg-gray-900 before:w-screen after:w-screen before:top-1/2 after:top-1/2 before:end-full after:start-full"><span class="text-slate-600 dark:text-slate-400">Iliash Hossian</span> assigned user: <span class="text-primary-600">Saiful Islam</span> at 14 Jan, 2020 at 11:34 AM</div>
            </div>
            <div class="py-5 px-5 sm:px-9 lg:py-8">
                <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-purple-600 h-8 w-8 rounded-full font-medium">
                            <span>IH</span>
                        </div>
                        <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">Iliash Hossain <span class="text-slate-400 font-normal">added a note</span></div>
                    </div>
                    <div class="text-xs text-slate-400">14 Jan, 2020</div>
                </div>
                <div class="ms-12">
                    <div class="entry rounded bg-gray-100 dark:bg-gray-900 bg-opacity-70 px-5 py-3">
                        <p>Devement Team need to check out the issues.</p>
                    </div>
                </div>
            </div>

            <div class="text-center overflow-hidden mx-5 sm:mx-9 lg:mx-10 px-8">
                <div class="relative inline-block px-3 text-slate-400 text-xs/snug before:absolute after:absolute before:h-px after:h-px before:bg-gray-200 before:dark:bg-gray-900 after:bg-gray-200 after:dark:bg-gray-900 before:w-screen after:w-screen before:top-1/2 after:top-1/2 before:end-full after:start-full"><strong class="text-gray-600 dark:text-gray-400">15 January 2020</strong></div>
            </div>
            <div class="py-5 px-5 sm:px-9 lg:py-8">
                <div class="flex items-center justify-between mb-2 cursor-pointer [&.is-opended]:cursor-default">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                            <span>ST</span>
                        </div>
                        <div class="text-sm/4 font-bold text-slate-600 dark:text-white ms-3">Support Team <span class="text-slate-400 font-normal">(You)</span></div>
                    </div>
                    <div class="text-xs text-slate-400">15 Jan, 2020</div>
                </div>
                <div class="ms-12">
                    <div class="entry">
                        <p>Hello Ishtiyak,</p>
                        <p>Thanks for waiting for us. Our team solved the issues. So check now on our website. Hopefuly you can order now.</p>
                        <p>Thank you very much once again.</p>
                    </div>
                    <div class="inline-block text-xs rounded bg-gray-100 dark:bg-gray-900 bg-opacity-70 px-3 py-1.5 mt-5">
                        Replied by <span>Noor Parvez</span> at 11:32 AM
                    </div>
                </div>
            </div>

            <div class="border-t sm:border border-gray-200 dark:border-gray-800 sm:rounded sm:mt-2 sm:mx-9 lg:mx-10 sm:mb-9 lg:mb-10">
                <div class="flex items-center justify-between px-5 sm:px-6 border-b border-gray-200 dark:border-gray-800">
                    <ul class="tab-nav flex flex-wrap font-heading text-sm">
                        <li class="tab-item pe-5 last:pe-0">
                            <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#tabItem1">Reply</button>
                        </li>
                        <li class="tab-item pe-5 last:pe-0">
                            <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItem2">Private Note</button>
                        </li>
                    </ul>
                    <div class="flex items-center">
                        <div class="text-slate-400 me-3">Reply as:</div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-[9px] text-white bg-purple-600 h-6 w-6 rounded-full font-medium">
                            <span>IH</span>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-panel hidden [&.active]:block active" id="tabItem1">
                        <div class="nk-reply-form-editor">
                            <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-2 px-5 sm:px-6">
                                <textarea class="block w-full text-sm leading-4.5 px-0 pt-3 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Hello"></textarea>
                            </div>
                            <div class="flex justify-between p-5 sm:py-4 sm:px-6">
                                <ul class="inline-flex items-center gap-1.5">
                                    <li class="me-2"><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" type="submit">Reply</button></li>
                                    <li>
                                        <div data-placement="top" class="tooltip-toggle dropdown relative" data-title="Template">
                                            <a data-offset="0,4" data-placement="top-start"  data-rtl-placement="top-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" href="#"><em class="text-base/none ni ni-hash"></em></a>
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
                                        <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Insert Emoji" href="#"><em class="text-base/none ni ni-happy"></em></a>
                                    </li>
                                    <li>
                                        <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Images" href="#"><em class="text-base/none ni ni-img"></em></a>
                                    </li>
                                </ul>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class=""><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Option</span></a></li>
                                            <li class=" active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Option</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-panel hidden [&.active]:block" id="tabItem2">
                        <div class="nk-reply-form-editor">
                            <div class="border-b border-gray-200 dark:border-gray-800 last:border-b-0 py-2 px-5 sm:px-6">
                                <textarea class="block w-full text-sm leading-4.5 px-0 pt-3 min-h-[78px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Type your private note, that only visible to internal team."></textarea>
                            </div>
                            <div class="flex justify-between p-5 sm:py-4 sm:px-6">
                                <ul class="inline-flex items-center gap-1.5">
                                    <li class="me-2">
                                        <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" type="submit">Add Note</button>
                                    </li>
                                    <li>
                                        <a data-placement="top" class="tooltip-toggle relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide" data-title="Upload Attachment" href="#"><em class="text-base/none  ni ni-clip-v"></em></a>
                                    </li>
                                </ul>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl text-slate-600 ni ni-more-v"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class=""><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Option</span></a></li>
                                            <li class=" active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Option</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conversation-profile peer !absolute top-0 end-0 translate-x-full rtl:-translate-x-full w-[280px] h-full max-h-full bg-white dark:bg-gray-950 z-[100] transition-transform duration-300 ease-in-out border-s border-gray-200 dark:border-gray-800 visible [&.visible]:translate-x-0" data-simplebar>
            <div class="relative flex flex-col items-center text-center p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="absolute top-4 end-4">
                    <div class="dropdown relative">
                        <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
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
                                        <span>Ban From System</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="relative px-5 py-2.5 flex items-center text-xs leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#">
                                        <em class="text-lg leading-none w-7 opacity-80 ni ni-repeat"></em>
                                        <span>View Orders</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-primary-600 h-16 w-16 rounded-full font-normal">
                    <span>AB</span>
                </div>
                <div class="mt-4">
                    <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">Abu Bin Ishtiyak</h6>
                    <span class="text-sm text-slate-400">info@softnio.com</span>
                </div>
                <div class="grid grid-flow-dense grid-cols-12 mt-5 w-full">
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">23</span>
                            <span class="block text-xs leading-5 text-slate-400">Total Order</span>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">20</span>
                            <span class="block text-xs leading-5 text-slate-400">Complete</span>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">3</span>
                            <span class="block text-xs leading-5 text-slate-400">Progress</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 sm:p-6">
                <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Additional </h6>
                <ul class="user-contacts">
                    <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                        <em class="text-base/6 inline-block text-slate-400 w-7 ni ni-mail"></em><span>info@softnio.com</span>
                    </li>
                    <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                        <em class="text-base/6 inline-block text-slate-400 w-7 ni ni-call"></em><span>+938392939</span>
                    </li>
                    <li class="flex text-slate-600 dark:text-slate-300 text-sm/6 py-1">
                        <em class="text-base/6 inline-block text-slate-400 w-7 ni ni-map-pin"></em><span>1134 Ridder Park Road <br>San Fransisco, CA 94851</span>
                    </li>
                </ul>
                <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Additional </h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                    <div class="col-span-6">
                        <span class="block text-xs text-slate-400">Ref ID:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">TID-049583</span>
                    </div>
                    <div class="col-span-6">
                        <span class="block text-xs text-slate-400">Requested:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Abu Bin Ishtiak</span>
                    </div>
                    <div class="col-span-6">
                        <span class="block text-xs text-slate-400">Status:</span>
                        <span class="block text-sm font-bold mt-1 text-green-600">Open</span>
                    </div>
                    <div class="col-span-6">
                        <span class="block text-xs text-slate-400">Last Reply:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Abu Bin Ishtiak</span>
                    </div>
                </div>
                <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight mb-3 mt-6 first:mt-0">Assigned Account </h6>
                <ul class="flex flex-wrap gap-3">
                    <li>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-full font-medium">
                            <span>IH</span>
                        </div>
                    </li>
                    <li>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-10 w-10 rounded-full font-medium">
                            <span>ST</span>
                        </div>
                    </li>
                    <li>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-slate-600 h-10 w-10 rounded-full font-medium">
                            <span>SI</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="profile-toggle absolute inset-0 bg-slate-950 bg-opacity-20 dark:bg-opacity-50 z-[99] opacity-0 invisible peer-[.visible]:opacity-100 peer-[.visible]:visible 2xl:!opacity-0 2xl:!invisible"></div>
    </div>
</div>
@endsection

@push('scripts')
    @vite(['resources/js/apps.js'])
@endpush