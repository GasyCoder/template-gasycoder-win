@extends('layouts.main', ['title'=> 'Spinner'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Spinner</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">DashWind includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent align-[-0.125em] border-slate-600 animate-[spin_750ms_linear_infinite]"></div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Colors</h5>
            <p class="text-sm leading-6 text-slate-400">The border spinner uses its border-color, meaning you can customize the color with border color utilities.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-3">
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-primary-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-gray-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-green-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-red-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-yellow-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-cyan-600 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-slate-500 animate-[spin_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent border-gray-800 animate-[spin_750ms_linear_infinite]"></div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-6 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Growing spinner</h5>
            <p class="text-sm leading-6 text-slate-400">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-slate-600 animate-[grow_750ms_linear_infinite]"></div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-3">
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-primary-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-gray-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-green-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-red-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-yellow-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-cyan-600 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-slate-50 dark:bg-slate-9000 animate-[grow_750ms_linear_infinite]"></div>
                <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-gray-600 animate-[grow_750ms_linear_infinite]"></div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-6 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Size</h5>
            <p class="text-sm leading-6 text-slate-400">Change h-[value], w-[value] to make a smaller/larger spinner that can quickly be used within other components.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-12">
                <div class="flex flex-wrap gap-3">
                    <div class="inline-block h-4 w-4 rounded-full border-2 border-r-transparent align-[-0.125em] border-slate-600 animate-[spin_750ms_linear_infinite]"></div>
                    <div class="inline-block h-8 w-8 rounded-full border-4 border-r-transparent align-[-0.125em] border-slate-600 animate-[spin_750ms_linear_infinite]"></div>
                    <div class="inline-block h-12 w-12 rounded-full border-4 border-r-transparent align-[-0.125em] border-slate-600 animate-[spin_750ms_linear_infinite]"></div>
                </div>
                <div class="flex flex-wrap gap-3">
                    <div class="inline-block h-4 w-4 rounded-full  align-[-0.125em] bg-slate-600 animate-[grow_750ms_linear_infinite]"></div>
                    <div class="inline-block h-8 w-8 rounded-full  align-[-0.125em] bg-slate-600 animate-[grow_750ms_linear_infinite]"></div>
                    <div class="inline-block h-12 w-12 rounded-full  align-[-0.125em] bg-slate-600 animate-[grow_750ms_linear_infinite]"></div>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-6 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">With Buttons</h5>
            <p class="text-sm leading-6 text-slate-400">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-8">
                <div class="flex flex-wrap gap-3">
                    <a href="#" class="relative inline-flex items-center opacity-60 justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <div class="inline-block h-4 w-4 rounded-full border-2 border-r-transparent align-[-0.125em] border-white animate-[spin_750ms_linear_infinite]"></div>
                    </a>
                    <a href="#" class="relative inline-flex items-center opacity-60 text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <div class="inline-block h-4 w-4 rounded-full border-2 border-r-transparent align-[-0.125em] border-white animate-[spin_750ms_linear_infinite]"></div>
                        <span class="ms-3">loading ...</span>
                    </a>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="#" class="relative inline-flex items-center opacity-60 justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <div class="inline-block h-4 w-4 rounded-full  align-[-0.125em] bg-white animate-[grow_750ms_linear_infinite]"></div>
                    </a>
                    <a href="#" class="relative inline-flex items-center opacity-60 text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <div class="inline-block h-4 w-4 rounded-full  align-[-0.125em] bg-white animate-[grow_750ms_linear_infinite]"></div>
                        <span class="ms-3">loading ...</span>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- block -->

</div>
@endsection