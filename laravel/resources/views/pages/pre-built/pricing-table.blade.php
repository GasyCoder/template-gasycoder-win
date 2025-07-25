@extends('layouts.main', ['title'=> 'Pricing Table'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Pricing Table
        </h3>
        <p class="text-slate-400">Choose your pricing plan and start enjoying our service.</p>
    </div>
</div><!-- block head -->
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="pb-5">
                        <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Starter</h4>
                        <p class="text-sm text-slate-400">Enjoy entry level of invest &amp; earn.</p>
                    </div>
                    <div class="flex flex-wrap -mx-3.5">
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">1.67%</div>
                            <div class="text-sm text-slate-400">Daily Interest</div>
                        </div>
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">30</div>
                            <div class="text-sm text-slate-400">Term Days</div>
                        </div>
                    </div>
                </div>
                <div class="p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800">
                    <ul>
                        <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$250</span></li>
                        <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$1,999</span></li>
                        <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                        <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">125%</span></li>
                    </ul>
                    <div class="mt-6 text-center">
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 bg-white dark:bg-gray-950 hover:bg-gray-200 hover:dark:bg-gray-900 hover:text-slate-700 dark:text-white hover:border-gray-200 dark:border-gray-800 active:bg-gray-300 active:text-slate-700 dark:text-white active:border-gray-300 dark:border-gray-900 transition-all duration-300">Choose this plan</button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="pb-5">
                        <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Silver</h4>
                        <p class="text-sm text-slate-400">Best plan for user to investers.</p>
                    </div>
                    <div class="flex flex-wrap -mx-3.5">
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">4.76%</div>
                            <div class="text-sm text-slate-400">Daily Interest</div>
                        </div>
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">21</div>
                            <div class="text-sm text-slate-400">Term Days</div>
                        </div>
                    </div>
                </div>
                <div class="p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800">
                    <ul>
                        <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$2,000</span></li>
                        <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$4,999</span></li>
                        <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                        <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">200%</span></li>
                    </ul>
                    <div class="mt-6 text-center">
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 bg-white dark:bg-gray-950 hover:bg-gray-200 hover:dark:bg-gray-900 hover:text-slate-700 dark:text-white hover:border-gray-200 dark:border-gray-800 active:bg-gray-300 active:text-slate-700 dark:text-white active:border-gray-300 dark:border-gray-900 transition-all duration-300">Choose this plan</button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <span class="absolute top-2 end-2 inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Recommend</span>
                <div class="p-5 sm:p-6 text-center">
                    <div class="pb-5">
                        <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Dimond</h4>
                        <p class="text-sm text-slate-400">Enjoy entry level of invest &amp; earn.</p>
                    </div>
                    <div class="flex flex-wrap -mx-3.5">
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">14.29%</div>
                            <div class="text-sm text-slate-400">Daily Interest</div>
                        </div>
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">14</div>
                            <div class="text-sm text-slate-400">Term Days</div>
                        </div>
                    </div>
                </div>
                <div class="p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800">
                    <ul>
                        <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$5,000</span></li>
                        <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$20,000</span></li>
                        <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                        <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">300%</span></li>
                    </ul>
                    <div class="mt-6 text-center">
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 bg-white dark:bg-gray-950 hover:bg-gray-200 hover:dark:bg-gray-900 hover:text-slate-700 dark:text-white hover:border-gray-200 dark:border-gray-800 active:bg-gray-300 active:text-slate-700 dark:text-white active:border-gray-300 dark:border-gray-900 transition-all duration-300">Choose this plan</button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="pb-5">
                        <h4 class="text-xl lg:text-2xl text-slate-600 dark:text-white font-heading font-bold leading-tighter tracking-tight mb-1">Palitinam</h4>
                        <p class="text-sm text-slate-400">Just invest money &amp; earn.</p>
                    </div>
                    <div class="flex flex-wrap -mx-3.5">
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">21.07%</div>
                            <div class="text-sm text-slate-400">Daily Interest</div>
                        </div>
                        <div class="w-1/2 px-3.5">
                            <div class="text-xl lg:text-2xl text-slate-700 dark:text-white font-heading font-bold leading-tighter tracking-tight">7</div>
                            <div class="text-sm text-slate-400">Term Days</div>
                        </div>
                    </div>
                </div>
                <div class="p-5 sm:p-6 border-t border-gray-200 dark:border-gray-800">
                    <ul>
                        <li class="flex py-1"><span class="w-1/2">Min Deposit</span> - <span class="ms-auto">$10,500</span></li>
                        <li class="flex py-1"><span class="w-1/2">Max Deposit</span> - <span class="ms-auto">$50,999</span></li>
                        <li class="flex py-1"><span class="w-1/2">Deposit Return</span> - <span class="ms-auto">Yes</span></li>
                        <li class="flex py-1"><span class="w-1/2">Total Return</span> - <span class="ms-auto">500%</span></li>
                    </ul>
                    <div class="mt-6 text-center">
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 bg-white dark:bg-gray-950 hover:bg-gray-200 hover:dark:bg-gray-900 hover:text-slate-700 dark:text-white hover:border-gray-200 dark:border-gray-800 active:bg-gray-300 active:text-slate-700 dark:text-white active:border-gray-300 dark:border-gray-900 transition-all duration-300">Choose this plan</button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- grid -->
</div><!-- block -->
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Pricing Table V2
        </h3>
        <p class="text-slate-400">Choose your pricing plan and start enjoying our service.</p>
    </div>
</div><!-- block head -->
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="py-1 mb-6">
                        <img class="max-w-[90px] mx-auto" src="{{ asset('images/icons/plan-s1.svg') }}" alt="">
                    </div>
                    <div class="w-[220px] mx-auto">
                        <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Starter</h5>
                        <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                    </div>
                    <div class="pt-5">
                        <div class="text-2xl text-slate-600 dark:text-white font-bold">$99 <span>/yr</span></div>
                        <span class="text-sm text-slate-400">1 User, Billed Yearly</span>
                    </div>
                    <div class="pt-6">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <span class="absolute top-2 end-2 inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Recommend</span>
                <div class="p-5 sm:p-6 text-center">
                    <div class="py-1 mb-6">
                        <img class="max-w-[90px] mx-auto" src="{{ asset('images/icons/plan-s2.svg') }}" alt="">
                    </div>
                    <div class="w-[220px] mx-auto">
                        <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Pro</h5>
                        <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                    </div>
                    <div class="pt-5">
                        <div class="text-2xl text-slate-600 dark:text-white font-bold">$299 <span>/yr</span></div>
                        <span class="text-sm text-slate-400">5 User, Billed Yearly</span>
                    </div>
                    <div class="pt-6">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="py-1 mb-6">
                        <img class="max-w-[90px] mx-auto" src="{{ asset('images/icons/plan-s3.svg') }}" alt="">
                    </div>
                    <div class="w-[220px] mx-auto">
                        <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Enterprise</h5>
                        <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                    </div>
                    <div class="pt-5">
                        <div class="text-2xl text-slate-600 dark:text-white font-bold">$599 <span>/yr</span></div>
                        <span class="text-sm text-slate-400">20 User, Billed Yearly</span>
                    </div>
                    <div class="pt-6">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <div class="p-5 sm:p-6 text-center">
                    <div class="py-1 mb-6">
                        <img class="max-w-[90px] mx-auto" src="{{ asset('images/icons/plan-s1.svg') }}" alt="">
                    </div>
                    <div class="w-[220px] mx-auto">
                        <h5 class="text-xl text-slate-700 dark:text-white font-heading font-bold leading-tighter -tracking-snug mb-1">Starter</h5>
                        <span class="text-sm text-slate-400">If you are a small business amn please select this plan</span>
                    </div>
                    <div class="pt-5">
                        <div class="text-2xl text-slate-600 dark:text-white font-bold">$99 <span>/yr</span></div>
                        <span class="text-sm text-slate-400">1 User, Billed Yearly</span>
                    </div>
                    <div class="pt-6">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection