@extends('layouts.main', ['title'=> 'File Manager'])
@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 bg-opacity-40 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        <div id="pageAside" class="peer max-w-[calc(100%-2.5rem)] w-[220px] max-lg:min-h-screen lg:rounded-s-md bg-white dark:bg-gray-950 border-e border-gray-300 dark:border-gray-900 flex-shrink-0 fixed lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none">
            <div class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]" data-simplebar>
                <ul class="p-4">
                    <li class="group/fmgmenu py-0.5 active">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-home-alt"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Home</span>
                        </a>
                    </li>
                    <li class="group/fmgmenu py-0.5">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-file-docs"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Files</span>
                        </a>
                        <ul class="ps-12 mb-2 -mt-0.5">
                            <li class="py-0.5">
                                <a href="#" class="relative flex items-center py-0.5 rounded text-slate-600 hover:text-primary-600"><span class="text-xs/5 font-medium">New Files</span></a>
                            </li>
                            <li class="py-0.5">
                                <a href="#" class="relative flex items-center py-0.5 rounded text-slate-600 hover:text-primary-600"><span class="text-xs/5 font-medium">This Months</span></a>
                            </li>
                            <li class="py-0.5">
                                <a href="#" class="relative flex items-center py-0.5 rounded text-slate-600 hover:text-primary-600"><span class="text-xs/5 font-medium">Older Files</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="group/fmgmenu py-0.5">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-star"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Starred</span>
                        </a>
                    </li>
                    <li class="group/fmgmenu py-0.5">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-share-alt"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Shared</span>
                        </a>
                    </li>
                    <li class="group/fmgmenu py-0.5">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-trash-alt"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Recovery</span>
                        </a>
                    </li>
                    <li class="group/fmgmenu py-0.5">
                        <a class="relative flex items-center py-2 px-3 rounded hover:bg-gray-50 hover:dark:bg-gray-900 transition-all duration-300 group-[.active]/fmgmenu:bg-primary-100 group-[.active]/fmgmenu:dark:bg-primary-950" href="#">
                            <em class="text-xl/5 -mt-0.5 w-8 text-slate-400 group-[.active]/fmgmenu:text-primary-600 ni ni-setting-alt"></em>
                            <span class="text-sm/6 font-medium text-slate-600 dark:text-slate-400 ms-1 group-[.active]/fmgmenu:text-primary-600 group-[.active]/fmgmenu:dark:text-primary-600">Settings</span>
                        </a>
                    </li>
                </ul>

                <div class="mt-24">
                    <div class="p-7">
                        <h6 class="font-heading text-sm/tighter font-bold -tracking-snug text-slate-600 mb-4 flex items-center">
                            <em class="text-xl/none me-4 ni ni-hard-drive"></em><span>Storage</span>
                        </h6>
                        <div class="flex h-1.5 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-primary-600" data-progress="5%"></div>
                        </div>
                        <div class="text-xs font-medium text-slate-400 mt-4">12.47 GB of 50 GB used</div>
                        <div class="mt-1">
                            <a href="#" class="text-xs/none font-medium whitespace-nowrap text-primary-600 hover:text-primary-700 transition-all duration-300">Upgrade Storage</a>
                        </div>
                    </div>
                    <div class="border-t border-gray-300 dark:border-gray-900 p-2">
                        <div class="dropdown relative">
                            <button data-offset="0, -4" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle *:pointer-events-none peer flex items-center justify-between py-3 px-5 w-full">
                                <div class="text-start">
                                    <div class="text-sm/5 font-bold text-slate-700 dark:text-white mb-1">Personal</div>
                                    <div class="text-xs/4 text-slate-400">Only you</div>
                                </div>
                                <em class="text-base/none -me-1 text-slate-600 ni ni-unfold-more"></em>
                            </button>
                            <div tabindex="0" class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Team Plan</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                    <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Personal</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                    <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                    <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Upgrade Plan</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-target="#pageAside"  data-body-scroll="off" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
        <div class="flex-grow">
            <div class="hidden lg:flex items-center justify-between flex-wrap py-3 px-5 border-b border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-tr-md">
                <div class="flex items-center flex-grow">
                    <em class="text-base/none text-slate-600 ni ni-search"></em>
                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search files, folders">
                </div>
                <ul class="flex items-center gap-4">
                    <li>
                        <div class="dropdown relative">
                            <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 bg-gray-200 dark:bg-gray-800 hover:dark:text-gray-600 active:dark:text-gray-600 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400  hover:dark:border-gray-400 active:bg-gray-600 active:dark:bg-gray-600 transition-all duration-300"><em class="text-xl/4.5 ni ni-plus"></em> <span class="ms-3">Create</span></button>
                            <div tabindex="0" class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li>
                                        <button data-target="#upload-modal" class="modal-toggle *:pointer-events-none w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" >
                                            <em class="text-start text-lg/none w-7 opacity-80 ni ni-upload-cloud"></em><span>Upload File</span>
                                        </button>
                                    </li>
                                    <li>
                                        <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                            <em class="text-start text-lg/none w-7 opacity-80 ni ni-file-plus"></em><span>Create File</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                            <em class="text-start text-lg/none w-7 opacity-80 ni ni-folder-plus"></em><span>Create Folder</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button data-target="#upload-modal" class="modal-toggle *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300"><em class="text-xl/4.5 ni ni-upload-cloud"></em> <span class="ms-3">Upload</span></button>
                    </li>
                </ul>
            </div>
            <div class="h-full max-h-full overflow-auto py-4.5 px-5 sm:py-5 lg:p-7">
                <div class="pb-4">
                    <div class="relative flex items-center justify-between">
                        <h3 class="font-heading font-bold text-2xl/tighter tracking-tight text-slate-700 dark:text-white">Files</h3>
                        <ul class="flex items-center gap-1.5 lg:hidden -me-1.5">
                            <li>
                                <button class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 focus:before:opacity-100  before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" data-target="#search"><em class="text-xl/none text-slate-400 dark:text-slate-300  ni ni-search"></em></button>
                            </li>
                            <li>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                        <em class="text-xl/none text-slate-400 dark:text-slate-300 ni ni-plus"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <button data-target="#upload-modal" class="modal-toggle *:pointer-events-none w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-upload-cloud"></em><span>Upload File</span>
                                                </button>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-file-plus"></em><span>Create File</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                    <em class="text-lg leading-none w-7 opacity-80 ni ni-folder-plus"></em><span>Create Folder</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><button class="class-toggle *:pointer-events-none inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900" data-target="#pageAside" data-body-scroll="off"><em class="text-xl/none text-slate-400 dark:text-slate-300  ni ni-menu-alt-r"></em></button></li>
                        </ul>
                        <div class="absolute inset-x-0 -inset-y-0.5 opacity-0 bg-white dark:bg-gray-950 transition-all duration-300 rounded-md pointer-events-none px-3 lg:hidden [&.active]:opacity-100 [&.active]:pointer-events-auto [&.active]:z-10" id="search">
                            <div class="relative w-full flex items-center">
                                <button class="class-toggle *:pointer-events-none inline-flex items-center justify-center h-9 w-9 text-slate-600 hover:text-red-600" data-target="#search"><em class="text-lg/none rtl:-scale-x-100 ni ni-arrow-left"></em></button>
                                <input type="text" class="flex-grow block w-full box-border text-sm leading-4.5 px-2 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 shadow-none focus:outline-offset-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" placeholder="Search files, folders">
                                <button class="inline-flex items-center justify-center h-9 w-9 text-slate-600 hover:text-primary-600"><em class="text-lg/none ni ni-search"></em></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-10 last:mb-0">
                    <div class="pb-3 relative flex justify-between items-center">
                        <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white">Quick Access</h6>
                        <button href="#" class="group class-toggle *:pointer-events-none active text-sm font-medium text-primary-600 hover:text-primary-700" data-target="#quick-access">
                            <div class="group-[.active]:hidden block">Show</div>
                            <div class="group-[.active]:block hidden">Hide</div>
                        </button>
                    </div>
                    <div class="hidden active [&.active]:block" id="quick-access">
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                <a href="#" class="block py-6 px-4">
                                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                        @include('components.icons.folder-alt')
                                    </div>
                                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">UI Design</span></div>
                                </a>
                                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600" ><em class="text-base/none ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                <a href="#" class="block py-6 px-4">
                                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                        @include('components.icons.folder-alt')
                                    </div>
                                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">DashWind Resource</span></div>
                                </a>
                                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600" ><em class="text-base/none ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                <a href="#" class="block py-6 px-4">
                                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                        @include('components.icons.folder-alt')
                                    </div>
                                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">Projects</span>.xlsx</div>
                                </a>
                                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600" ><em class="text-base/none ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                <a href="#" class="block py-6 px-4">
                                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                        @include('components.icons.file-type-zip-alt')
                                    </div>
                                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">All work</span>.zip</div>
                                </a>
                                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600" ><em class="text-base/none ni ni-cross"></em></a>
                                </div>
                            </div>
                            <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                <a href="#" class="block py-6 px-4">
                                    <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                        @include('components.icons.file-type-sheet-alt')
                                    </div>
                                    <div class="text-sm/snug text-center font-medium pt-4 flex justify-center"><span class="line-clamp-1">Sales Reports</span>.xlsx</div>
                                </a>
                                <div class="absolute top-2 end-2 transition-all duration-300 hideable [&.hideable]:opacity-0 group-hover/fileitem:opacity-100">
                                    <a href="#" class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600" ><em class="text-base/none ni ni-cross"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-10 last:mb-0">
                    <div class="pb-3 relative flex justify-between items-center">
                        <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white">Browse Files</h6>
                        <ul class="tab-nav flex items-center gap-4">
                            <li class="tab-item">
                                <button data-target="#file-grid-view" class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 [&.active]:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300 active">
                                    <em class="text-2xl/none ni ni-view-grid3-wd"></em>
                                </button>
                            </li>
                            <li class="tab-item">
                                <button data-target="#file-group-view" class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 [&.active]:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300">
                                    <em class="text-2xl/none ni ni-view-group-wd"></em>
                                </button>
                            </li>
                            <li class="tab-item">
                                <button data-target="#file-list-view" class="tab-toggle flex items-center justify-center h-6 w-6 text-slate-400 [&.active]:text-primary-600 hover:text-slate-700 dark:text-white transition-all duration-300">
                                    <em class="text-2xl/none ni ni-view-row-wd"></em>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-panel hidden [&.active]:block active" id="file-grid-view">
                            <div class="flex items-center justify-between gap-3">
                                <div class="dropdown relative">
                                    <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                        <span class="me-1">Last Opened</span>
                                        <em class="text-base/4.5 ni ni-caret-down-fill"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last Opened</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Name</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Size</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                    <span>Share</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                    <span>Copy</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                    <span>Move</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                    <span>Download</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.folder-secure-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">UI Design</span>
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">4.5 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.folder-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">Proposal</span>
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer active opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">4.5 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.folder-shared-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">Projects</span>
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Yesterday</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">35 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.folder-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">2022 Projects</span>
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">03 May</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">1.2 GB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-sheet-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">Update Data</span>.xlsx
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Yesterday</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-zip-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">DashWind v.1.2</span>.zip
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">03 May</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-zip-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">covstats v1.0</span>.zip
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">01 May</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-doc-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">Quotation</span>.doc
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">06 Apr</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-doc-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">Work-to-do</span>.txt
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                                <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 xs:col-span-6 sm:col-span-4 xl:col-span-3 2xl:col-span-2">
                                    <a href="#" class="flex flex-col pt-6 pb-4">
                                        <div class="h-18 [&>svg]:h-full [&>svg]:mx-auto">
                                            @include('components.icons.file-type-media-alt')
                                        </div>
                                        <div class="relative text-sm/snug text-center font-medium pt-4 px-5.5 mx-auto inline-flex justify-center">
                                            <span class="line-clamp-1">DashWind-Crypto-v1</span>.psd
                                            <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                            </div>
                                        </div>
                                        <ul class="flex items-center justify-center pt-1 gap-3">
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                            <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                        </ul>
                                    </a>
                                    <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                        <div class="dropdown relative">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                            <span>Details</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                            <span>Rename</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                            <span>Delete</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- item -->
                            </div><!-- grid -->
                        </div><!-- panel -->
                        <div class="tab-panel hidden [&.active]:block" id="file-group-view">
                            <div class="flex items-center justify-between gap-3">
                                <div class="dropdown relative">
                                    <button data-offset="0, 4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                        <span class="me-1">Last Opened</span>
                                        <em class="text-base/4.5 ni ni-caret-down-fill"></em>
                                    </button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last Opened</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Name</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                            <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Size</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown relative">
                                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li>
                                                <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                    <span>Share</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                    <span>Copy</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                    <span>Move</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                    <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                    <span>Download</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10 last:mb-0">
                                <h6 class="border-t border-gray-200 dark:border-gray-800 font-heading font-bold text-xs tracking-wider uppercase py-4">Folder</h6>
                                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">UI Design</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">4.5 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Proposal</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100 active">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">4.5 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-shared-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Project</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">2022 Projects</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">03 May</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                </div><!-- grid -->
                            </div>
                            <div class="mb-10 last:mb-0">
                                <h6 class="border-t border-gray-200 dark:border-gray-800 font-heading font-bold text-xs tracking-wider uppercase py-4">Files</h6>
                                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-sheet-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Database</span>.xlsx
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">Today</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-zip-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">DashWind v1.2</span>.zip
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 May</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-zip-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">covstats</span>.zip
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">01 May</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">235 KB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-doc-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Price List</span>.doc
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">25 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-doc-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Quotation</span>.doc
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">06 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-text-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Work-to-do</span>.txt
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-media-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">DashWind-v1</span>.psd
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-movie-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">New Movie</span>.mp4
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-sheet-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Project List</span>.xls
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                    <div class="group/fileitem relative border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded col-span-12 sm:col-span-6 2xl:col-span-4">
                                        <a href="#" class="flex flex-col p-4">
                                            <div class="flex items-center">
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-ppt-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Presentation</span>.ppt
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/fileitem:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="flex items-center pt-1 gap-3">
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">02 Apr</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">23 MB</li>
                                                <li class="text-xs/5 relative text-slate-400 first:before:hidden before:absolute before:rounded-full before:-start-1.5 before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2  before:h-1 before:w-1 before:bg-slate-400 before:opacity-80">3 Members</li>
                                            </ul>
                                        </a>
                                        <div class="absolute top-2 end-2 transition-all duration-300 group-hover/fileitem:opacity-100">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- item -->
                                </div><!-- grid -->
                            </div>
                        </div><!-- panel -->
                        <div class="tab-panel hidden [&.active]:block" id="file-list-view">
                            <div class="w-full">
                                <div class="flex items-center">
                                    <div class="flex-grow ">
                                        <div class="dropdown relative">
                                            <button data-offset="0, 4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                                <span class="me-1 font-medium text-sm">Name</span>
                                                <em class="text-base/4.5 ni ni-caret-down-fill"></em>
                                            </button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li class="group"><h6 class="relative px-5 py-1.5 flex items-center text-xs leading-5 tracking-[1px] font-bold uppercase text-slate-700 dark:text-white">Ordered By</h6></li>
                                                    <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Ascending</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                                    <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Descending</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-3/12 hidden sm:block">
                                        <div class="dropdown relative">
                                            <button data-offset="0, 4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center">
                                                <span class="me-1 font-medium text-sm">Last Opened</span>
                                                <em class="text-base/4.5 ni ni-arrow-long-down"></em>
                                            </button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last Opened</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                                    <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Name</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                                    <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Size</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-3/12 hidden md:block"><div class="font-medium text-sm">Members</div></div>
                                    <div class="flex-shrink w-[60px] pe-4 text-end">
                                        <div class="dropdown relative me-px">
                                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                            <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                <ul class="py-2">
                                                    <li>
                                                        <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                            <span>Share</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                            <span>Copy</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                            <span>Move</span>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                            <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                            <span>Download</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded">
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-01">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">UI/UX Design</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-02">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">UI Design</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100 active">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-03">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-sheet-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Update Data.xlsx</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block">
                                            <div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div>
                                            <div class="text-xs text-slate-400 mt-0.5">by Abu Bin Ishityak</div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block">
                                            <div class="flex">
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-7 w-7 rounded-full font-medium">
                                                    <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                                </div>
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-purple-600 h-7 w-7 rounded-full font-medium">
                                                    <span>IH</span>
                                                </div>
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-pink-600 h-7 w-7 rounded-full font-medium">
                                                    <span>AB</span>
                                                </div>
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-slate-700 dark:text-white bg-slate-300 dark:bg-slate-700 h-7 w-7 rounded-full font-medium">
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-04">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-zip-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">DashWind-package-v1.2.zip</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-05">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-doc-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Price-Update.doc</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-06">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.folder-shared-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Projects</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block">
                                            <div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div>
                                            <div class="text-xs text-slate-400 mt-0.5">by Iliash Hossain</div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block">
                                            <div class="flex">
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-purple-600 h-7 w-7 rounded-full font-medium">
                                                    <span>IH</span>
                                                </div>
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-pink-600 h-7 w-7 rounded-full font-medium">
                                                    <span>AB</span>
                                                </div>
                                                <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-7 w-7 rounded-full font-medium">
                                                    <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-07">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-doc-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">Quotation.doc</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-08">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-media-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">DashWind-Crypto-v1.psd</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-09">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-movie-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">New Movie 2020.mp4</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group/filelist flex items-center w-full border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                                        <div class="flex-grow py-4 first:ps-5">
                                            <div class="flex items-center">
                                                <div class="me-3">
                                                    <input type="checkbox" class="h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="mid-10">
                                                </div>
                                                <div class="h-8 [&>svg]:h-full [&>svg]:mx-auto">
                                                    @include('components.icons.file-type-ppt-alt')
                                                </div>
                                                <div class="relative text-sm/snug font-medium ps-3 pe-5.5 inline-flex">
                                                    <span class="line-clamp-1">2022 Presentation.ppt</span>
                                                    <div class="inline-flex absolute end-0 group/asterisk cursor-pointer opacity-0 group-hover/filelist:opacity-100">
                                                        <em class="text-lg/none text-primary-600 ni ni-star"></em>
                                                        <em class="text-lg/none text-primary-600 absolute top-0 opacity-0 group-hover/asterisk:opacity-100 group-[.active]/asterisk:opacity-100 ni ni-star-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden sm:block"><div class="text-sm text-slate-600 dark:text-slate-400">Today, 08:29 AM</div></div>
                                        <div class="w-3/12 py-4 first:ps-5 hidden md:block"><div class="text-sm text-slate-600 dark:text-slate-400">Only Me</div></div>
                                        <div class="flex-shrink w-[60px] py-4 first:ps-5 pe-4 text-end">
                                            <div class="dropdown relative">
                                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-base/4.5 ni ni-more-h"></em></button>
                                                <div tabindex="0" class="dropdown-menu absolute min-w-[150px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                                    <ul class="py-2">
                                                        <li>
                                                            <button data-target="#file-details" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-eye"></em>
                                                                <span>Details</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-share" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-share"></em>
                                                                <span>Share</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-copy" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-copy"></em>
                                                                <span>Copy</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button data-target="#file-move" class="modal-toggle *:pointer-events-none relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600  text-start ni ni-forward-arrow"></em>
                                                                <span>Move</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-download"></em>
                                                                <span>Download</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-pen"></em>
                                                                <span>Rename</span>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="relative px-5 py-2 flex items-center w-full rounded-[inherit] text-xs leading-5 text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 hover:bg-slate-50 hover:dark:bg-slate-900 transition-all duration-300">
                                                                <em class="text-lg/none w-8 opacity-80 text-primary-600 text-start ni ni-trash"></em>
                                                                <span>Delete</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- panel -->
                    </div><!-- content -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
<div id="upload-modal" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] md:w-[600px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <button class="modal-close *:pointer-events-none absolute top-3 end-3 text-slate-500 hover:text-slate-700 dark:text-white">
            <em class="text-xl ni ni-cross"></em>
        </button>
        <div class="px-5 py-6 sm:p-8">
            <div class="mb-9">
                <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white mb-4">Upload File file</h5>
                <div class="js-upload !bg-gray-50 dark:!bg-gray-900" id="DropzoneDefault">
                    <div class="dz-message !my-3" data-dz-message>
                        <span class="block text-sm text-primary-600">Drag and drop <span class="text-slate-400"> file here or </span> browse</span>
                    </div>
                </div>
            </div>
            <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white mb-3">Uploaded Files</h6>
            <div class="flex flex-col gap-2">
                <div class="flex items-center p-2 rounded border border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 h-12 me-1 [&>svg]:h-full">
                        @include('components.icons.file-type-zip')
                    </div>
                    <div class="flex-grow pe-3">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm/tighter font-medium text-slate-600 dark:text-white flex items-center">
                                <span class="line-clamp-1">DashWind-latest-version</span>.zip
                            </span>
                        </div>
                        <div class="text-xs text-slate-400">25.49 MB</div>
                    </div>
                    <div class="ms-auto">
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-xl text-slate-500 dark:text-slate-300 ni ni-trash"></em></a>
                    </div>
                </div>
                <div class="flex items-center p-2 rounded border border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 h-12 me-1 [&>svg]:h-full">
                        @include('components.icons.file-type-doc')
                    </div>
                    <div class="flex-grow pe-3">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm/tighter font-medium text-slate-600 dark:text-white flex items-center">
                                <span class="line-clamp-1">Update work history</span>.docx
                            </span>
                            <span class="text-xs text-slate-400">70% Done</span>
                        </div>
                        <div class="flex h-1 rounded-sm bg-slate-100 dark:bg-slate-900 overflow-hidden">
                            <div class="text-xs text-white bg-primary-600" data-progress="70%"></div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <a href="#" class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-xl text-slate-500 dark:text-slate-300 ni ni-trash"></em></a>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <ul class="flex items-center gap-5">
                    <li><button class="modal-close *:pointer-events-none text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">Cancel</button></li>
                    <li><button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Add Files</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="file-details" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center">
                <div class="h-10 [&>svg]:h-full">
                    @include('components.icons.folder')
                </div>
                <div class="ms-2">
                    <div class="flex items-center text-sm font-medium mb-1"><span class="line-clamp-1">UI/UX Design</span></div>
                    <div class="text-xs text-slate-400">Project</div>
                </div>
            </div>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <div class="nk-file-details">
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Type</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Folder</div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Size</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">35.48 MB</div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Location</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">
                        <ul class="flex flex-wrap py-1">
                            <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">ThemeForest</a><em class="text-slate-400 my-0.5 ms-2 font-medium rtl:-scale-x-100 ni ni-forward-ios"></em></li>
                            <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium tracking-wider">Project</li>
                        </ul>
                    </div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Owner</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Me</div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Shared with</div>
                    <div class="text-sm/5 flex-shrink-0 text-slate-600">
                        <div class="flex">
                            <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-7 w-7 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-purple-600 h-7 w-7 rounded-full font-medium">
                                <span>IH</span>
                            </div>
                            <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-white bg-pink-600 h-7 w-7 rounded-full font-medium">
                                <span>AB</span>
                            </div>
                            <div class="relative first:ms-0 -ms-2 flex-shrink-0 flex items-center justify-center text-xxs border-2 border-white dark:border-gray-950 text-slate-700 dark:text-white bg-slate-300 dark:bg-slate-700 h-7 w-7 rounded-full font-medium">
                                <span>+2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Modified</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Feb 19, 2020 by Abu Bit Istiyak</div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Opened</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Apr 23, 2020 by Me</div>
                </div>
                <div class="py-2 flex flex-wrap xs:flex-nowrap xs:py-1.5">
                    <div class="text-sm/5 w-full xs:w-[100px] xs:flex-shrink-0 text-slate-400">Created</div>
                    <div class="text-sm/5 text-slate-600 dark:text-slate-400">Feb 19, 2020</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
            <div class="flex items-center justify-between flex-wrap gap-3">
                <button class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">View All Activity</button>
                <ul class="flex items-center gap-5">
                    <li><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-slate-600  hover:dark:bg-slate-600 hover:border-slate-600 hover:dark:border-slate-600 active:bg-slate-600 hover:text-white hover:dark:text-white active:text-white transition-all duration-300">Share</button></li>
                    <li><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Download</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="file-share" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center">
                <div class="h-10 [&>svg]:h-full">
                    @include('components.icons.folder')
                </div>
                <div class="ms-2">
                    <div class="flex items-center text-sm font-medium mb-1"><span class="line-clamp-1">UI/UX Design</span></div>
                    <div class="text-xs font-medium text-slate-400">394.87 MB</div>
                </div>
            </div>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-4 sm:py-5 border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center">
                <label class="text-sm text-slate-400 pe-4">To</label>
                <input type="text" class="block w-full text-sm placeholder-slate-300 bg-transparent leading-4.5 p-0 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none" placeholder="Email or Name" >
                <button class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide whitespace-nowrap border border-slate-300 dark:border-slate-900 outline-none text-slate-700 dark:text-white hover:bg-slate-700 hover:border-slate-700 hover:text-white active:bg-slate-900 active:border-slate-700 active:text-white transition-all duration-300">Can View</button>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <textarea class="block w-full text-sm leading-4.5 p-0 min-h-[200px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border-0 focus:border-0 focus:outline-0 focus:ring-0 focus:ring-offset-0 focus:shadow-none disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" placeholder="Add a Message (optional)"></textarea>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
            <div class="flex items-center justify-end flex-wrap gap-3">
                <ul class="flex items-center gap-5">
                    <li><button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-slate-600  hover:dark:bg-slate-600 hover:border-slate-600 hover:dark:border-slate-600 active:bg-slate-600 hover:text-white hover:dark:text-white active:text-white transition-all duration-300">Cancel</button></li>
                    <li><button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Share</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="file-copy" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 pt-4 rounded-t-[inherit]">
            <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white">Copy item to ...</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 pb-5 sm:pb-6">
            <ul class="flex flex-wrap py-1 mb-2">
                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">
                    <a class="text-slate-400 hover:text-primary-600" href="#">Project</a>
                    <em class="text-slate-400 my-0.5 ms-2 text-xxs/none font-medium rtl:-scale-x-100 ni ni-forward-ios"></em>
                </li>
                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">Apps</li>
            </ul>
            <div class="border border-gray-200 dark:border-gray-800 rounded">
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI/UX Design</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI Design</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit] selected" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder-shared')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">Projects</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">2019 Project</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
            <div class="flex items-center justify-between flex-wrap gap-3">
                <button class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">Create New Folder</button>
                <ul class="flex items-center gap-5">
                    <li><button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-slate-600  hover:dark:bg-slate-600 hover:border-slate-600 hover:dark:border-slate-600 active:bg-slate-600 hover:text-white hover:dark:text-white active:text-white transition-all duration-300">Cancel</button></li>
                    <li><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Copy</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="file-move" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 pt-4 rounded-t-[inherit]">
            <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white">Move item to ...</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 pb-5 sm:pb-6">
            <ul class="flex flex-wrap py-1 mb-2">
                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">
                    <a class="text-slate-400 hover:text-primary-600" href="#">Project</a>
                    <em class="text-slate-400 my-0.5 ms-2 text-xxs/none font-medium rtl:-scale-x-100 ni ni-forward-ios"></em>
                </li>
                <li class="first:ps-0 ps-2 inline-flex items-center text-slate-300 text-xxs font-medium tracking-wider">Apps</li>
            </ul>
            <div class="border border-gray-200 dark:border-gray-800 rounded">
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI/UX Design</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">UI Design</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit] selected" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder-shared')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">Projects</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
                <a class="flex items-center px-5 py-2 last:border-b-0 border-b border-gray-200 dark:border-gray-800 [&.selected]:bg-gray-100 [&.selected]:dark:bg-gray-900 first:rounded-t-[inherit] last:rounded-b-[inherit]" href="#">
                    <div class="h-8 [&>svg]:h-full">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-sm font-medium ms-3"><span class="line-clamp-1">2019 Project</span></span>
                    <div class="ms-auto inline-flex -me-1"><em class="text-base/none rtl:-scale-x-100 ni ni-chevron-right"></em></div>
                </a>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-900 rounded-b-[inherit]">
            <div class="flex items-center justify-between flex-wrap gap-3">
                <button class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-all duration-300">Create New Folder</button>
                <ul class="flex items-center gap-5">
                    <li><button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-white bg-white dark:bg-gray-950 hover:bg-slate-600  hover:dark:bg-slate-600 hover:border-slate-600 hover:dark:border-slate-600 active:bg-slate-600 hover:text-white hover:dark:text-white active:text-white transition-all duration-300">Cancel</button></li>
                    <li><button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Move</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endpush