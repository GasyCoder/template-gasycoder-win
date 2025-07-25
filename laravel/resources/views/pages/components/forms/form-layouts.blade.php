@extends('layouts.main', ['title'=> 'Form Layouts'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Form Layouts</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Form Style - S1</h5>
            <p class="text-sm leading-6 text-slate-400">Below example helps you to build your own form nice way.</p>
        </div>

        <div class="grid grid-flow-dense grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                    <div class="p-5 sm:p-6">
                        <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Customer Info</h5>
                        <form action="#">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciFullName">Full Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciFullName" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciEmailAddress">Email address</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciEmailAddress" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciPhoneNo">Phone No</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciPhoneNo" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Communication</label>
                                <div class="flex flex-wrap gap-4 pt-2">
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciEmail">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciEmail">Email</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciSMS">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciSMS">SMS</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciPhone">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciPhone">Phone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciAmount">Amount</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciAmount" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Payment Methods</label>
                                <div class="flex flex-wrap gap-4 pt-2">
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciCard">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciCard">Card</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciBitcoin">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciBitcoin">Bitcoin</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciCash">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciCash">Cash</label>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <button class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- col -->
            <div class="col-span-12 lg:col-span-6">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                    <div class="p-5 sm:p-6">
                        <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Contact Form</h5>
                        <form action="#">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cfFullName">Full Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cfFullName" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cfEmailAddress">Email address</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cfEmailAddress" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cfPhoneNo">Phone No</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cfPhoneNo" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cfSubject">Subject</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cfSubject" autocomplete="off">
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciMessage">Message</label>
                                <div class="relative">
                                    <textarea class="block w-full text-sm leading-4.5 px-4 py-1.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="ciMessage" autocomplete="off"></textarea>
                                </div>
                            </div>
                            <div class="relative mb-5 last:mb-0">
                                <button class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- col -->
        </div><!-- grid -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Form Style - S2</h5>
            <p class="text-sm leading-6 text-slate-400">You can alow display form in column as example below.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Customer Info S2</h5>
                <form action="#">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cis2FullName">Full Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cis2FullName" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cis2EmailAddress">Email address</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cis2EmailAddress" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cis2PhoneNo">Phone No</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cis2PhoneNo" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="cis2Amount">Amount</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="cis2Amount" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Communication</label>
                                <div class="flex flex-wrap gap-4">
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2Email">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2Email">Email</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2SMS">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2SMS">SMS</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2Phone">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2Phone">Phone</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Payment Methods</label>
                                <div class="flex flex-wrap gap-4">
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2Card">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2Card">Card</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2Bitcoin">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2Bitcoin">Bitcoin</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="cis2Cash">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="cis2Cash">Cash</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="relative mb-5 last:mb-0">
                                <button class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                </form>
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Setting Form Style</h5>
            <p class="text-sm leading-6 text-slate-400">You can make style out your setting related form as per below example.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Website Setting</h5>
                <form action="#" class="flex flex-col gap-y-4">
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsSiteName">Site Name</label>
                                <span class="block italic text-xs text-slate-400">Specify the name of your website.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="wsSiteName" value="DashWind Admin Template" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsSiteEmail">Site Email</label>
                                <span class="block italic text-xs text-slate-400">Specify the email address of your website.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="wsSiteEmail" value="info@softnio.com" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsSiteCopyright">Site Copyright</label>
                                <span class="block italic text-xs text-slate-400">Copyright information of your website.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="wsSiteCopyright" value="&copy; 2025, DashWind. All Rights Reserved." autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Allow Registration</label>
                                <span class="block italic text-xs text-slate-400">Enable or disable registration from site.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="flex flex-wrap items-center gap-5">
                                    <div class="inline-flex">
                                        <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked id="registrationOptionEnable" name="registrationOption">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="registrationOptionEnable">Enable</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked id="registrationOptionDisable" name="registrationOption">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="registrationOptionDisable">Disable</label>
                                    </div>
                                    <div class="inline-flex">
                                        <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked id="registrationOptionOnRequest" name="registrationOption">
                                        <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="registrationOptionOnRequest">On Request</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsMainWebsite">Main Website</label>
                                <span class="block italic text-xs text-slate-400">Specify the URL if your main website is external.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="wsMainWebsite" value="https://www.softnio.com" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-5/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Maintanance Mode</label>
                                <span class="block italic text-xs text-slate-400">Enable to make website make offline.</span>
                            </div>
                        </div><!-- col -->
                        <div class="w-full lg:w-7/12 p-2">
                            <div class="relative mb-5 last:mb-0">
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="offline">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="offline">Offline</label>
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                    <div class="flex flex-wrap items-center -m-2">
                        <div class="w-full lg:w-7/12 p-2 lg:ms-[calc(100%/12*5)]">
                            <div class="relative mb-5 last:mb-0">
                                <button class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Update</button>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                </form>
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection