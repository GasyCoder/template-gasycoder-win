@extends('layouts.main', ['title'=> 'Number Spinner'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Number Spinner</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for number spinner with basic number type input.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Number Spinner</h5>
            <p class="text-sm leading-6 text-slate-400">With number spinner input you can use <code class="text-pink-600">min, max, step</code> same as <code class="text-pink-600">input[type="number"]</code>.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Number Spinner Basic</label>
                            <div class="relative flex -space-x-px w-full items-stretch number-spinner-wrap">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-minus" data-number="minus"><em class="text-sm leading-4.5 ni ni-minus"></em></button>
                                <input type="number" class="number-spinner relative z-10 text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" value="0">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-plus" data-number="plus"><em class="text-sm leading-4.5 ni ni-plus"></em></button>
                            </div>
                        </div> 
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Number Spinner Step (10)</label>
                            <div class="relative flex -space-x-px w-full items-stretch number-spinner-wrap">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-minus" data-number="minus"><em class="text-sm leading-4.5 ni ni-minus"></em></button>
                                <input type="number" class="number-spinner relative z-10 text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" placeholder="number" value="20" step="10">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-plus" data-number="plus"><em class="text-sm leading-4.5 ni ni-plus"></em></button>
                            </div>
                        </div> 
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Number Spinner Min Max (15 - 80)</label>
                            <div class="relative flex -space-x-px w-full items-stretch number-spinner-wrap">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-minus" data-number="minus"><em class="text-sm leading-4.5 ni ni-minus"></em></button>
                                <input type="number" class="number-spinner relative z-10 text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" placeholder="number" value="20" min="15" max="80">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300 number-spinner-btn number-plus" data-number="plus"><em class="text-sm leading-4.5 ni ni-plus"></em></button>
                            </div>
                        </div> 
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Number Spinner with Primary Button</label>
                            <div class="relative flex -space-x-px w-full items-stretch number-spinner-wrap">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 z-10 number-spinner-btn number-plus number-spinner-btn number-minus" data-number="minus"><em class="text-sm leading-4.5 ni ni-minus"></em></button>
                                <input type="number" class="number-spinner relative text-center block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" value="0">
                                <button class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 z-10 number-spinner-btn number-plus number-spinner-btn number-plus" data-number="plus"><em class="text-sm leading-4.5 ni ni-plus"></em></button>
                            </div>
                        </div> 
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection