@extends('layouts.main', ['title'=> 'Admin Login Activity'])

@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        @include ('admin.partials.profile-sidebar')
        <div class="flex-grow">
            <div class="p-5 sm:p-10">
                <div class="flex justify-between items-center pb-6 sm:pb-10 gap-x-6">
                    <div class="relative">
                        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Login Activity</h5>
                        <p class="text-slate-600 dark:text-slate-400">Here is your last 20 login activities log. <em class="text-slate-400 relative top-0.5 ni ni-info"></em></p>
                    </div>
                    <div class="lg:hidden">
                        <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl ni ni-menu-alt-r"></em>
                        </button>
                    </div>
                </div>
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="table border-collapse w-full border-gray-300 dark:border-gray-900"> 
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Browser</span>
                            </div>
                            <div class="hidden sm:table-cell py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">IP</span>
                            </div>
                            <div class="table-cell py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Time</span>
                            </div>
                            <div class="table-cell py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end"> </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">11:34 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end"> </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Mozilla on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">86.188.154.225</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Nov 20, 2019 10:34 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on iMac</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Nov 12, 2019 08:56 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Nov 03, 2019 04:29 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Mozilla on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">86.188.154.225</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Oct 29, 2019 09:38 AM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on iMac</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Oct 23, 2019 04:16 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Oct 15, 2019 11:41 PM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Mozilla on Window</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">86.188.154.225</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Oct 13, 2019 05:43 AM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-600 dark:text-slate-400">Chrome on iMac</span>
                            </div>
                            <div class="hidden sm:table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">192.149.122.128</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Oct 03, 2019 04:12 AM</span>
                            </div>
                            <div class="table-cell py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-end">
                                <button class="inline-flex items-center justify-center isolate -me-2 relative h-6 w-6 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-4 before:w-4 hover:before:h-6 hover:before:w-6 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-red-100 text-slate-400 hover:text-red-600">
                                    <em class="text-base ni ni-cross"></em>
                                </button>
                            </div>
                        </div><!-- row -->
                    </div><!-- table -->
                </div><!-- card -->
            </div>
        </div><!-- content -->
    </div>
</div>
@endsection
