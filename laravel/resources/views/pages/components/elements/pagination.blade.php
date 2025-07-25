@extends('layouts.main', ['title'=> 'Pagination'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Pagination</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">The following example of basic pagination.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Sytle</h5>
            <p class="text-sm leading-6 text-slate-400">Checkout our basic style for pagination..</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="inline-flex align-middle -space-x-px">
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e px-3 sm:px-4 py-2 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">Prev</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">2</a>
                <div class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e px-3 sm:px-4 py-2 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">Next</a>
            </div>
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Working with Icons</h5>
            <p class="text-sm leading-6 text-slate-400">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="inline-flex align-middle -space-x-px">
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-left"></em></a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">2</a>
                <div class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-right"></em></a>
            </div>
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Disabled and Active States</h5>
            <p class="text-sm leading-6 text-slate-400">Use disabled for links that appear un-clickable and active to indicate the current page.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="inline-flex align-middle -space-x-px">
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-left"></em></a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-primary-600 bg-primary-600 text-white z-[11] transition-all duration-300">2</a>
                <div class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-right"></em></a>
            </div>
        </div>
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Sizing</h5>
            <p class="text-sm leading-6 text-slate-400">Here is some examples with diffrent size.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-4">
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-4.5 first:rounded-s last:rounded-e w-7.5 h-7.5 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-left"></em></a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-5 first:rounded-s-sm last:rounded-e-sm h-7.5 w-7.5 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-5 first:rounded-s-sm last:rounded-e-sm h-7.5 w-7.5 tracking-wide border border-primary-600 bg-primary-600 text-white z-[11] transition-all duration-300">2</a>
                    <div class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-5 first:rounded-s-sm last:rounded-e-sm h-7.5 w-7.5 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300">
                        <em class="icon ni ni-more-h"></em>
                    </div>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-5 first:rounded-s-sm last:rounded-e-sm h-7.5 w-7.5 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-normal leading-4.5 first:rounded-s last:rounded-e w-7.5 h-7.5 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-right"></em></a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-left"></em></a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-primary-600 bg-primary-600 text-white z-[11] transition-all duration-300">2</a>
                    <div class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-normal leading-4.5 first:rounded-s last:rounded-e w-9 h-9 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-right"></em></a>
                </div>
                <div class="inline-flex align-middle -space-x-px">
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e w-11 h-11 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-left"></em></a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e h-11 w-11 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">1</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e h-11 w-11 tracking-wide border border-primary-600 bg-primary-600 text-white z-[11] transition-all duration-300">2</a>
                    <div class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e h-11 w-11 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:z-10 transition-all duration-300"><em class="icon ni ni-more-h"></em></div>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e h-11 w-11 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300">6</a>
                    <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-base font-normal leading-4.5 first:rounded-s last:rounded-e w-11 h-11 tracking-wide border border-slate-200 dark:border-slate-900 text-slate-500 dark:text-slate-400 hover:bg-slate-100 hover:dark:bg-slate-800 hover:text-primary-600 active:bg-primary-700 hover:z-10 transition-all duration-300"><em class="icon rtl:-scale-x-100 ni ni-chevrons-right"></em></a>
                </div>
            </div>
        </div>
    </div><!-- block -->

</div>
@endsection