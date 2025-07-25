@extends('layouts.main', ['title'=> 'Toast'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Toast</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Push notifications to your visitors with a toast, a lightweight and easily customizable alert message. It's built with flexbox, so they’re easy to align and position.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-5 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Toasts are lightweight notifications designed to mimic the push notifications.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="w-[350px] max-w-full text-sm text-slate-600 pointer-events-auto bg-white dark:bg-gray-950 bg-opacity-85 border border-gray-300 dark:border-gray-900 rounded shadow mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
                    <strong class="me-auto text-primary-600">Tailwind</strong>
                    <small class="text-slate-500 text-xs">11 mins ago</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-slate-400 hover:text-red-400">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3"> Hello, world! This is a toast message. </div>
            </div>
        </div>
    </div>
    <div class="[&:not(:last-child)]:pb-5 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Stacked Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Here is multiple toast stacked togather.</p>
        </div>
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="w-[350px] max-w-full text-sm text-slate-600 pointer-events-auto bg-white dark:bg-gray-950 bg-opacity-85 border border-gray-300 dark:border-gray-900 rounded shadow mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
                    <strong class="me-auto text-primary-600">Tailwind</strong>
                    <small class="text-slate-500 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-slate-400 hover:text-red-400">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3">See? Just like this.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-slate-600 pointer-events-auto bg-white dark:bg-gray-950 bg-opacity-85 border border-gray-300 dark:border-gray-900 rounded shadow mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
                    <strong class="me-auto text-primary-600">Tailwind</strong>
                    <small class="text-slate-500 text-xs">2 seconds ago</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-slate-400 hover:text-red-400">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3">Heads up, toasts will stack automatically</div>
            </div>
        </div>
    </div>
    <div class="[&:not(:last-child)]:pb-5 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Color Scheme Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Here is some example .</p>
        </div>
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-primary-600 border border-primary-700 rounded shadow-[0_3px_12px_1px] shadow-primary-200 dark:shadow-primary-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-primary-700">
                    <strong class="me-auto text-white">Primary</strong>
                    <small class="text-slate-200 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-slate-200 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-slate-200">Hello, world! This is a toast message.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-yellow-600 border border-yellow-700 rounded shadow-[0_3px_12px_1px] shadow-yellow-200 dark:shadow-yellow-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-yellow-700">
                    <strong class="me-auto text-white">Yellow</strong>
                    <small class="text-yellow-100 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-yellow-100 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-yellow-100">Hello, world! This is a toast message.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-green-600 border border-green-700 rounded shadow-[0_3px_12px_1px] shadow-green-200 dark:shadow-green-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-green-700">
                    <strong class="me-auto text-white">Green</strong>
                    <small class="text-green-100 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-green-100 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-green-100">Hello, world! This is a toast message.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-red-600 border border-red-700 rounded shadow-[0_3px_12px_1px] shadow-red-200 dark:shadow-red-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-red-700">
                    <strong class="me-auto text-white">Red</strong>
                    <small class="text-red-100 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-red-100 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-red-100">Hello, world! This is a toast message.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-cyan-600 border border-cyan-700 rounded shadow-[0_3px_12px_1px] shadow-cyan-200 dark:shadow-cyan-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-cyan-700">
                    <strong class="me-auto text-white">Cyan</strong>
                    <small class="text-cyan-100 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-cyan-100 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-cyan-100">Hello, world! This is a toast message.</div>
            </div>
            <div class="w-[350px] max-w-full text-sm text-white pointer-events-auto bg-slate-700 border border-slate-800 rounded shadow-[0_3px_12px_1px] shadow-slate-200 dark:shadow-slate-950 mb-3 last:mb-0">
                <div class="flex items-center py-1 px-3 rounded-t-[inherit] border-b border-slate-800">
                    <strong class="me-auto text-white">Dark</strong>
                    <small class="text-slate-100 text-xs">Just Now</small>
                    <button class="inline-flex border-0 text-2xl -me-1 ms-1 text-slate-100 hover:text-white">
                        <em class="leading-none ni ni-cross-sm"></em>
                    </button>
                </div>
                <div class="p-3 text-slate-100">Hello, world! This is a toast message.</div>
            </div>
        </div>
    </div>

</div>
@endsection