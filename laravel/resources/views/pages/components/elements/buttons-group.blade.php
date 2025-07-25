@extends('layouts.main', ['title'=> 'Buttons Group'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Buttons Group</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Group a series of buttons together on a single line with the button group.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Example</h5>
            <p class="text-sm leading-6 text-slate-400">Combine sets of button to wrap a series of buttons</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default Buttons</h6>
                    <div class="inline-flex align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Start</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Middle</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">End</a>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pale Buttons</h6>
                    <div class="inline-flex align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Start</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Middle</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">End</a>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Bordered Buttons</h6>
                    <div class="inline-flex align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 hover:z-10 transition-all duration-300">Start</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 hover:z-10 transition-all duration-300">Middle</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 hover:z-10 transition-all duration-300">End</a>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pale Bordered Buttons</h6>
                    <div class="inline-flex isolate align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Start</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Middle</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">End</a>
                    </div>
                </div><!-- col -->
            </div><!-- row -->

        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Button Toolbar</h5>
            <p class="text-sm leading-6 text-slate-400">Combine sets of button groups into button toolbars for more complex components.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-3">
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">1</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">2</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">3</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">4</a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">5</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">6</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">7</a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">8</a>
                </div>
            </div><!-- toolbar -->

        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Button Sizing</h5>
            <p class="text-sm leading-6 text-slate-400">Use Any sized button in group button.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col gap-4">
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 first:rounded-s-md last:rounded-e-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Start</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 first:rounded-s-md last:rounded-e-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Middle</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 first:rounded-s-md last:rounded-e-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">End</a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Start</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Middle</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">End</a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-3 py-1 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Start</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-3 py-1 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">Middle</a>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s-sm last:rounded-e-sm px-3 py-1 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 hover:z-10 transition-all duration-300">End</a>
                </div>
            </div><!-- row -->

        </div>
    </div>

</div>
@endsection