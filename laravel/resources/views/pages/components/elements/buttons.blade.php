@extends('layouts.main', ['title'=> 'Buttons'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Buttons</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Documentation and examples of button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Variations</h5>
            <p class="text-sm leading-6 text-slate-400">DashWind includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Regular Buttons</h5>
            <div class="flex flex-wrap -m-3.5">
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Primary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Primary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Secondary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-700 text-white bg-slate-700 hover:bg-slate-800 hover:border-slate-800 active:bg-slate-900 transition-all duration-300">Secondary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Success</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-600 text-white bg-green-600 hover:bg-green-700 hover:border-green-700 active:bg-green-800 transition-all duration-300">Success</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Danger</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-600 text-white bg-red-600 hover:bg-red-700 hover:border-red-700 active:bg-red-800 transition-all duration-300">Danger</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Warning</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-yellow-600 text-white bg-yellow-600 hover:bg-yellow-700 hover:border-yellow-700 active:bg-yellow-800 transition-all duration-300">Warning</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Info</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-cyan-600 text-white bg-cyan-600 hover:bg-cyan-700 hover:border-cyan-700 active:bg-cyan-800 transition-all duration-300">Info</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Light</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 bg-gray-200 dark:bg-gray-800 hover:dark:text-gray-600 active:dark:text-gray-600 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400  hover:dark:border-gray-400 active:bg-gray-600 active:dark:bg-gray-600 transition-all duration-300">Light</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Dark</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-600 text-white bg-gray-600 hover:bg-gray-700 hover:border-gray-700 active:bg-gray-800 transition-all duration-300">Dark</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Pale Buttons</h5>
            <div class="flex flex-wrap -m-3.5">
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Primary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">Primary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Secondary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-200 dark:border-gray-900 text-slate-700 dark:text-white bg-slate-200 dark:bg-gray-900 hover:bg-slate-800 hover:dark:bg-gray-800 hover:border-slate-800  hover:dark:border-gray-800 hover:text-white active:bg-slate-900 active:dark:bg-gray-1000 transition-all duration-300">Secondary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Success</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-100 dark:border-green-950 text-green-600 bg-green-100 dark:bg-green-950 hover:bg-green-600 hover:dark:bg-green-600 hover:border-green-600 hover:dark:border-green-600 hover:text-white active:bg-green-700 active:dark:bg-green-700 transition-all duration-300">Success</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Danger</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-100 dark:border-red-950 text-red-600 bg-red-100 dark:bg-red-950 hover:bg-red-600 hover:dark:bg-red-600 hover:border-red-600 hover:dark:border-red-600 hover:text-white active:bg-red-700 active:dark:bg-red-700 transition-all duration-300">Danger</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Warning</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-yellow-100 dark:border-yellow-950 text-yellow-600 bg-yellow-100 dark:bg-yellow-950 hover:bg-yellow-600 hover:dark:bg-yellow-600 hover:border-yellow-600 hover:dark:border-yellow-600 hover:text-white active:bg-yellow-700 active:dark:bg-yellow-700 transition-all duration-300">Warning</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Info</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-cyan-100 dark:border-cyan-950 text-cyan-600 bg-cyan-100 dark:bg-cyan-950 hover:bg-cyan-600 hover:dark:bg-cyan-600 hover:border-cyan-600 hover:dark:border-cyan-600 hover:text-white active:bg-cyan-700 active:dark:bg-cyan-700 transition-all duration-300">Info</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Light</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-100 dark:border-gray-800 text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400 hover:dark:border-gray-400 hover:text-gray-600 hover:dark:text-gray-600 active:bg-gray-500 active:dark:bg-gray-500 transition-all duration-300">Light</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Dark</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-slate-200 bg-gray-200 dark:bg-gray-800 hover:bg-gray-600  hover:dark:bg-gray-600 hover:border-gray-600 hover:dark:border-gray-600 hover:text-white hover:dark:text-white active:bg-gray-700 active:dark:bg-gray-700 transition-all duration-300">Dark</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Bordered Buttons</h5>
            <div class="flex flex-wrap -m-3.5">
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Primary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 transition-all duration-300">Primary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Secondary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-600 hover:dark:border-slate-800 text-slate-700 dark:text-white hover:bg-slate-800 hover:dark:bg-slate-800 hover:text-white active:bg-slate-900 transition-all duration-300">Secondary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Success</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-600 text-green-600 hover:bg-green-600 hover:text-white active:bg-green-700 transition-all duration-300">Success</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Danger</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-600 text-red-600 hover:bg-red-600 hover:text-white active:bg-red-700 transition-all duration-300">Danger</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Warning</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-yellow-600 text-yellow-600 hover:bg-yellow-600 hover:text-white active:bg-yellow-700 transition-all duration-300">Warning</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Info</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-cyan-600 text-cyan-600 hover:bg-cyan-600 hover:text-white active:bg-cyan-700 transition-all duration-300">Info</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Light</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-400 dark:border-gray-800 text-gray-600 dark:text-gray-400 hover:bg-gray-400 hover:dark:bg-gray-400 hover:text-gray-600 hover:dark:text-gray-600 active:bg-gray-500 active:dark:bg-gray-500 transition-all duration-300">Light</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Dark</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-600  dark:border-gray-800  hover:dark:border-gray-600 text-gray-600 dark:text-slate-200 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white active:bg-gray-700 transition-all duration-300">Dark</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Pale Bordered Buttons</h5>
            <div class="flex flex-wrap -m-3.5">
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Primary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">Primary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Secondary</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-300 dark:border-gray-700 text-slate-700 dark:text-white bg-slate-200 dark:bg-gray-900 hover:bg-slate-800 hover:dark:bg-slate-800 hover:border-slate-800 hover:dark:border-slate-800 hover:text-white hover:dark:text-white active:bg-slate-900 active:dark:bg-slate-900 transition-all duration-300">Secondary</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Success</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-300 dark:border-green-800 text-green-600 bg-green-100 dark:bg-green-950 hover:bg-green-600 hover:dark:bg-green-600 hover:border-green-600 hover:dark:border-green-600 hover:text-white hover:dark:text-white active:bg-green-700 active:dark:bg-green-700 transition-all duration-300">Success</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Danger</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-300 dark:border-red-800 text-red-600 bg-red-100 dark:bg-red-950 hover:bg-red-600 hover:dark:bg-red-600 hover:border-red-600 hover:dark:border-red-600 hover:text-white hover:dark:text-white active:bg-red-700 active:dark:bg-red-700 transition-all duration-300">Danger</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Warning</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-yellow-300 dark:border-yellow-800 text-yellow-600 bg-yellow-100 dark:bg-yellow-950 hover:bg-yellow-600 hover:dark:bg-yellow-600 hover:border-yellow-600 hover:dark:border-yellow-600 hover:text-white hover:dark:text-white active:bg-yellow-700 active:dark:bg-yellow-700 transition-all duration-300">Warning</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Info</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-cyan-300 dark:border-cyan-800 text-cyan-600 bg-cyan-100 dark:bg-cyan-950 hover:bg-cyan-600 hover:dark:bg-cyan-600 hover:border-cyan-600 hover:dark:border-cyan-600 hover:text-white hover:dark:text-white active:bg-cyan-700 active:dark:bg-cyan-700 transition-all duration-300">Info</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Light</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-700 text-gray-500 dark:text-gray-300 bg-gray-100 dark:bg-gray-900 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400 hover:dark:border-gray-400 hover:text-gray-600 hover:dark:text-gray-700 active:bg-gray-500 active:dark:bg-gray-500 transition-all duration-300">Light</a>
                </div><!-- col -->
                <div class="w-1/2 md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Dark</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-400 dark:border-gray-600 text-gray-600 dark:text-slate-200 bg-gray-200 dark:bg-gray-800 hover:bg-gray-600 hover:dark:bg-gray-600 hover:border-gray-600 hover:dark:border-gray-600 hover:text-white hover:dark:text-white active:bg-gray-700 active:dark:bg-gray-700 transition-all duration-300">Dark</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Button Sizes</h5>
            <p class="text-sm leading-6 text-slate-400">Use the modifier class to control button sizes.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Extra Large</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-lg font-bold leading-5 rounded-md px-8 py-4 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Extra Large</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Button Large</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Button Large</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Regular Button</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Regular Button</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Small Button</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Small Button</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Extra Large</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-lg font-bold leading-5 rounded-full px-8 py-4 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Extra Large</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Button Large</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-full px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Button Large</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Regular Button</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded-full px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Regular Button</a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Small Button</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-full px-3 py-1 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Small Button</a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Button With Icon</h5>
            <p class="text-sm leading-6 text-slate-400">Use icons inside Button.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Start Icon</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-setting"></em>
                        <span class="ms-3">Button Start Icon</span>
                    </a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">End Icon</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <span class="me-3">Button End Icon</span>
                        <em class="text-xl leading-4.5 ni ni-setting"></em>
                    </a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Icon on End</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle w-full text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <span class="me-3">Action Button</span>
                        <em class="ms-auto text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-right"></em>
                    </a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Start Icon</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded-full px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-setting"></em>
                        <span class="ms-3">Button Start Icon</span>
                    </a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">End Icon</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded-full px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <span class="me-3">Button End Icon</span>
                        <em class="text-xl leading-4.5 ni ni-setting"></em>
                    </a>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Icon on End</h6>
                    <a href="#" class="relative inline-flex items-center text-center align-middle w-full text-sm font-bold leading-4.5 rounded-full px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <span class="me-3">Action Button</span>
                        <em class="ms-auto text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-right"></em>
                    </a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Button With Only Icon</h5>
            <p class="text-sm leading-6 text-slate-400">Use the icons as a button.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5 text-center">
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">LG</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md h-11 w-11 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-2xl leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">RG</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">SM</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-sm h-7.5 w-7.5 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-base leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">LG</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-full h-11 w-11 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-2xl leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">RG</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded-full h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
                <div class="w-1/3 md:w-1/6 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">SM</h6>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 rounded-full h-7.5 w-7.5 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-base leading-4.5 ni ni-play"></em>
                    </a>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

</div>
@endsection