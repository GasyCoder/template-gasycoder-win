@extends('layouts.main', ['title'=> 'List Dropdowns'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">List Style for Dropdown</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin. Our exclusive link list style for dropdown that give you more power.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Dropdown Variations</h5>
            <p class="text-sm leading-6 text-slate-400">Here some examples for dropdown previews.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Previews</h6>
            <div class="flex flex-wrap gap-4">
                <div class="relative dropdown">
                    <button tabindex="0" data-offset="0,4" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>DropDown</span></button>
                    <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="relative dropdown">
                    <button tabindex="0" data-offset="0,4" data-placement="top-start"  data-rtl-placement="top-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>DropUp</span></button>
                    <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="relative dropdown">
                    <button tabindex="0" data-offset="0,4" data-placement="right-start" data-rtl-placement="left-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>DropEnd</span></button>
                    <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="relative dropdown">
                    <button tabindex="0" data-offset="0,4" data-placement="left-start" data-rtl-placement="right-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>DropStart</span></button>
                    <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Dropdown List Style - General</h5>
            <p class="text-sm leading-6 text-slate-400">Here is few General styles for dropdown list style.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">With Border</h6>
            <div class="flex flex-wrap -m-3.5">
                
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Selected / Actived</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900 group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">With Icon</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                            <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Preview</h6>
                    <div class="flex flex-wrap gap-4">
                        <div class="relative dropdown">
                            <button tabindex="0" data-offset="0,4" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>Click Here</span></button>
                            <div tabindex="0" class="dropdown-menu show min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative dropdown">
                            <button tabindex="0" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><em class="text-xl leading-4.5 ni ni-more-h"></em></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-300 dark:border-gray-900"><a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">Without Border</h6>
            <div class="flex flex-wrap -m-3.5">
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Selected / Actived</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">With Icon</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Preview</h6>
                    <div class="flex flex-wrap gap-4">
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>Click Here</span></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><em class="text-xl leading-4.5 ni ni-more-h"></em></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">With Separator</h6>
            <div class="flex flex-wrap -m-3.5">
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Selected / Actived</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>List Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Another Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>More Action</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">With Icon</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Preview</h6>
                    <div class="flex flex-wrap gap-4">
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>Click Here</span></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><em class="text-xl leading-4.5 ni ni-more-h"></em></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-setting"></em><span>Action Settings</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-notify"></em><span>Push Notification</span></a></li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Dropdown List Style - Column</h5>
            <p class="text-sm leading-6 text-slate-400">Here is few Column styles for dropdown list style.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">Multiple Column</h6>
            <div class="flex flex-wrap -m-3.5">
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">3 Column</h6>
                    <div class="min-w-[280px] max-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow overflow-hidden">
                        <ul class="flex flex-wrap text-center">
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jan</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Feb</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Mar</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Apr</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>May</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jun</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jul</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Aug</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Sep</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Oct</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Nov</span></a></li>
                            <li class="w-1/3 border-e [&:nth-child(3n)]:border-e-0 border-b [&:nth-last-child(-n+3)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Dec</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">4 Column</h6>
                    <div class="min-w-[280px] max-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow overflow-hidden">
                        <ul class="flex flex-wrap text-center">
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jan</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Feb</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Mar</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Apr</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>May</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jun</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jul</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Aug</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Sep</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Oct</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Nov</span></a></li>
                            <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Dec</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Preview</h6>
                    <div class="flex flex-wrap gap-4">
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>Click Here</span></button>
                            <div tabindex="0" class="dropdown-menu min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="flex flex-wrap text-center">
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jan</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Feb</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Mar</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Apr</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>May</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jun</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jul</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Aug</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Sep</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Oct</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Nov</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Dec</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><em class="text-xl leading-4.5 ni ni-more-h"></em></button>
                            <div tabindex="0" class="dropdown-menu min-w-[280px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="flex flex-wrap text-center">
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jan</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Feb</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Mar</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Apr</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>May</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jun</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Jul</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Aug</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Sep</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Oct</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Nov</span></a></li>
                                    <li class="w-1/4 border-e [&:nth-child(4n)]:border-e-0 border-b [&:nth-last-child(-n+4)]:border-b-0 border-gray-300 dark:border-gray-900"><a class="relative px-5 py-2.5 flex items-center justify-center text-xs leading-5 font-normal text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Dec</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Dropdown List Style - Heading</h5>
            <p class="text-sm leading-6 text-slate-400">Here is a style for dropdown list with heading style.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="text-base font-bold text-slate-700 dark:text-white font-heading mb-3">with Heading</h6>
            <div class="flex flex-wrap -m-3.5">
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6></li>
                            <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hello Team!</span></a></li>
                            <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank You!</span></a></li>
                            <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Most Welcome!</span></a></li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6></li>
                            <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-file-plus"></em><span>Save as Template</span></a></li>
                            <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Selected / Actived</h6>
                    <div class="min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow">
                        <ul class="py-2">
                            <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Show</h6></li>
                            <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>10 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>20 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>30 Items</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                            <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Order By</h6></li>
                            <li class="group active"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-arrow-long-up"></em><span>DESC</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            <li class="group"><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-arrow-long-down"></em><span>ASC</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Preview</h6>
                    <div class="flex flex-wrap gap-4">
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><span>Click Here</span></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6></li>
                                    <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hello Team!</span></a></li>
                                    <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank You!</span></a></li>
                                    <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Most Welcome!</span></a></li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6></li>
                                    <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                    <li><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative dropdown">
                            <button tabindex="0"  data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-white bg-gray-200 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-600 hover:border-gray-400 hover:dark:border-gray-600 [&.show]:bg-gray-600 [&.show]:dark:bg-gray-600  [&.show]:border-gray-600 [&.show]:dark:border-gray-600 [&.show]:text-white active:bg-gray-600 active:dark:bg-gray-600 active:text-white transition-all duration-300"><em class="text-xl leading-4.5 ni ni-more-h"></em></button>
                            <div tabindex="0" class="dropdown-menu min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <lis><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">List Action</h6></lis>
                                    <lis><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Hello Team!</span></a></lis>
                                    <lis><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Thank You!</span></a></lis>
                                    <lis><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><span>Most Welcome!</span></a></lis>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <lis><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Manage</h6></lis>
                                    <lis><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-file-plus"></em><span>Save as Template</span></a></lis>
                                    <lis><a class="relative px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 ni ni-notes-alt"></em><span>Manage Template</span></a></lis>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- block -->

</div>
@endsection