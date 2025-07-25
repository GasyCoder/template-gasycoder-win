@extends('layouts.main', ['title'=> 'Tooltips'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.75 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter -tracking-[0.03em] text-slate-700 dark:text-white font-heading">Tooltips</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-attributes.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Hover over the button below to see tooltips.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-4">
                <button type="button" class="tooltip-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="top" data-title="Tooltip on top">
                Tooltip on top
                </button>
                <button type="button" class="tooltip-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="right"  data-rtl-placement="left" data-title="Tooltip on End">
                Tooltip on End
                </button>
                <button type="button" class="tooltip-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="bottom" data-title="Tooltip on bottom">
                Tooltip on bottom
                </button>
                <button type="button" class="tooltip-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="left"  data-rtl-placement="right" data-title="Tooltip on Start">
                Tooltip on Start
                </button>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Inline Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Here is an example with inline text.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-4">
                <p>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a class="tooltip-toggle font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current whitespace-nowrap" data-placement="top" data-title="Enter Valid Card" href="#">credit card</a> for make deposit.</p>
            </div>
        </div>
    </div>

</div>
@endsection