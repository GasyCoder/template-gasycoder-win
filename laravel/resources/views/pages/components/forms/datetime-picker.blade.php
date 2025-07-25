@extends('layouts.main', ['title'=> 'Date & Time Picker'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Date &amp; Time Picker</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for date and time picker for form.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Date Picker</h5>
            <p class="text-sm leading-6 text-slate-400">Custom datepicker with <a class="text-primary-600 hover:text-primary-700" target="_blank" href="https://mymth.github.io/vanillajs-datepicker">'vanillajs-datepicker</a>. and time picker from nioapp custom script</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="datePicker1" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Datepicker</label>
                            <div class="relative">
                                <input placeholder="dd/mm/yyyy" type="text"  data-title="Text" data-today-btn="true" data-today-btn-mode="1"  data-clear-btn="true" autocomplete="off" id="datePicker1" class="js-datepicker block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                            </div>
                            <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="datePicker2" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Datepicker Alt</label>
                            <div class="relative">
                                <input placeholder="dd/mm/yyyy" type="text" data-start-view="2" autocomplete="off" id="datePicker2" class="js-datepicker block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                            </div>
                            <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="datePicker3" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Datepicker with Start Icon</label>
                            <div class="relative">
                                <div class="absolute h-9 w-9 top-0 start-0 flex items-center justify-center">
                                    <em class="text-slate-400 text-base leading-none ni ni-calendar"></em>
                                </div>
                                <input placeholder="dd/mm/yyyy" type="text"  data-title="Text" data-today-btn="true" data-today-btn-mode="1"  data-clear-btn="true" autocomplete="off" id="datePicker3" class="js-datepicker block w-full box-border text-sm leading-4.5 ps-10 pe-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                            </div>
                            <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="datePicker4" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Datepicker with End Icon</label>
                            <div class="relative">
                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                    <em class="text-slate-400 text-base leading-none ni ni-calendar-alt"></em>
                                </div>
                                <input placeholder="dd/mm/yyyy" type="text"  data-title="Text" data-today-btn="true" data-today-btn-mode="1"  data-clear-btn="true" autocomplete="off" id="datePicker4" class="js-datepicker block w-full box-border text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                            </div>
                            <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="form-note">
                            Use <code class="text-pink-400">data-start-view="1"</code> attribute to <code class="text-pink-400">input</code> to enable month view,
                            <code class="text-pink-400">data-start-view="2"</code> attribute to <code class="text-pink-400">input</code> to enable Year view.
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Date Range Picker</h5>
            <p class="text-sm leading-6 text-slate-400"> Use <code class="text-pink-400">data-range="init"</code> attribute to <code class="text-pink-400">.js-datepicker</code> to enable range date picker. </p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Datepicker Range</label>
                            <div class="js-datepicker relative flex -space-x-px w-full items-stretch" data-range="init" >
                                <input placeholder="dd/mm/yyyy" type="text" class="block flex-grow min-w-[120px] box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-s transition-all" name="start">
                                <span class="px-3 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-900 flex items-center">to</span>
                                <input  placeholder="dd/mm/yyyy" type="text" class="block flex-grow min-w-[120px] box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-e transition-all" name="end">
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Time Picker</h5>
            <p class="text-sm leading-6 text-slate-400">Use <code class="text-pink-400">data-format="24"</code> attribute to <code class="text-pink-400">input</code> to enable 24hour time formate.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="timePicker1" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Time Picker</label>
                            <div class="relative">
                                <input placeholder="hh:mm" data-placement="top-start" type="text" class="js-timepicker block w-full box-border text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off" id="timePicker1">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label for="timePicker2" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Time Picker (24hour)</label>
                            <div class="relative">
                                <input placeholder="hh:mm" data-placement="top-start" type="text" data-format="24" class="js-timepicker block w-full box-border text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off" id="timePicker2">
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection