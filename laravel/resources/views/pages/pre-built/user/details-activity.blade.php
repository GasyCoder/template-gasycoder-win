@extends('layouts.main', ['title'=> 'User Activities'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Users / <strong class="text-primary-600 text-2xl font-normal">{{ data_get($user, 'name') }}</strong>
        </h3>
        <ul class="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
            <li>User ID: <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'id') }}</span></li>
            <li>Last Login: <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'lastLogin') }}</span></li>
        </ul>
    </div>
    <div>
        <a href="{{route('user.list')}}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{route('user.list')}}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        <div class="flex-grow">
            
            @include ('pages.pre-built.user.partials.details-nav')

            <div class="p-5 sm:p-6">
                <div class="pb-0">
                    <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Recent Activities</h5>
                    <p class="text-slate-600 dark:text-slate-400">Recent login activities on this user account.</p>
                </div>
            </div>

            <div class="p-0">
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
            </div>
        </div>

        @include ('pages.pre-built.user.partials.details-aside')

    </div>
</div>
@endsection