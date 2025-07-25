@extends('layouts.main', ['title'=> 'noUislider'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">noUislider</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for range slider with noUislider plugin.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Configuration</h5>
            <p class="text-sm leading-6 text-slate-400">For input slider use <code class="text-pink-400">.js-range</code> class on a blank div that must have an <code class="text-pink-400">id</code>.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 overflow-hidden">
            <div class="p-5">
                <div class="flex flex-wrap -m-3 sm:-m-4">
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Default Range Slider</label>
                            <div class="relative">
                                <div class="js-range" data-start="30" id="DefaultRange"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Connect (upper)</label>
                            <div class="relative">
                                <div class="js-range" data-start="20" data-connect="upper" id="RangeConnect"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Slider Step (10)</label>
                            <div class="relative">
                                <div class="js-range" data-step="10" data-start="20" id="RangeStep"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Multiple</label>
                            <div class="relative">
                                <div class="js-range" data-connect="true" data-start="30 70" id="RangeMultiple"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Vertical Slider</h5>
            <p class="text-sm leading-6 text-slate-400">To make this vertical just add <code class="text-pink-400">[data-orientation="vertical"]</code> attribute on <code class="text-pink-400">.js-range</code> element.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 overflow-hidden">
            <div class="p-5">
                <div class="flex flex-wrap -m-3 sm:-m-4">
                    <div class="w-1/2 sm:w-1/4 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Default Range Slider</label>
                            <div class="relative">
                                <div class="js-range" data-orientation="vertical" data-start="30" id="verticalDefaultRange"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-1/2 sm:w-1/4 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Connect (upper)</label>
                            <div class="relative">
                                <div class="js-range" data-orientation="vertical" data-start="20" data-connect="upper" id="verticalRangeConnect"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-1/2 sm:w-1/4 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Slider Step (10)</label>
                            <div class="relative">
                                <div class="js-range" data-orientation="vertical" data-step="10" data-start="20" id="verticalRangeStep"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-1/2 sm:w-1/4 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Range Multiple</label>
                            <div class="relative">
                                <div class="js-range" data-orientation="vertical" data-connect="true" data-start="30 70" id="verticalRangeMultiple"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Advanced Configuration</h5><p class="text-sm leading-6 text-slate-400">Range slider with tooltip value preview. just add <code class="text-pink-400">[data-tooltip="true"]</code> attribute on <code class="text-pink-400">.js-range</code> element.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 overflow-hidden">
            <div class="p-5">
                <div class="flex flex-wrap -m-3 sm:-m-4">
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Tooltip Slider</label>
                            <div class="relative">
                                <div class="js-range" data-tooltip="true" data-start="40" id="TooltipRange"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Minimum Distance Slider</label>
                            <div class="relative">
                                <div class="js-range" data-tooltip="true" data-connect="true" data-start="30 60" data-min-distance="20" id="MinDistanceRange"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="w-full sm:w-1/2 p-3 sm:p-4">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-4">Maximum Distance Slider</label>
                            <div class="relative">
                                <div class="js-range" data-tooltip="true" data-connect="true" data-start="30 60" data-max-distance="50" id="MaxDistanceRange"></div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection