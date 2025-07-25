@extends('layouts.main', ['title'=> 'Advanced Controls'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Advanced Controls</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for custom styled Checkbox and Radio.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Image Checkbox &amp; Radio</h5>
            <p class="text-sm leading-6 text-slate-400">To create custom checkbox and radio with image, use <code class="text-pink-600">image-control</code> class with <code class="text-pink-600">custom-control</code> and put <code class="text-primary-600">&lt;img&gt;</code> tag inside of<code class="text-primary-600">&lt;label&gt;</code> tag.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-4">With Checkbox</h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="checkbox" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 
checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none  focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border border-white dark:border-gray-950 transition-all duration-300" id="imageCheck1">
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageCheck1"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/a.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="checkbox" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 
checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none  focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border border-white dark:border-gray-950 transition-all duration-300" id="imageCheck2" checked>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageCheck2"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/b.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Disabled</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="checkbox" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 
checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none  focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border border-white dark:border-gray-950 transition-all duration-300" id="imageCheck3" disabled>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageCheck3"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/c.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked Disabled</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="checkbox" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 
checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none  focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border border-white dark:border-gray-950 transition-all duration-300" id="imageCheck4" checked disabled>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageCheck4"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/d.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
                <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-4 mt-6">With Radio</h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="radio" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border border-white dark:border-gray-950 transition-all duration-300" name="imageRadio" id="imageRadio1">
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageRadio1"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/e.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="radio" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border border-white dark:border-gray-950 transition-all duration-300" name="imageRadio" id="imageRadio2" checked>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageRadio2"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/f.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Disabled</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="radio" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border border-white dark:border-gray-950 transition-all duration-300" name="imageRadioDisabled" id="imageRadio3" disabled>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageRadio3"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/g.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-6 md:col-span-3">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked Disabled</h6>
                        <div class="relative z-[1] inline-flex group">
                            <input type="radio" class="peer absolute z-10 start-4 top-4 h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 checked:border-white checked:dark:border-primary-600 checked:hover:border-white checked:hover:dark:border-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border border-white dark:border-gray-950 transition-all duration-300" name="imageRadioDisabled" id="imageRadio4" checked disabled>
                            <label class="peer-disabled:opacity-70 cursor-pointer rounded overflow-hidden bg-gray-900" for="imageRadio4"><img class="transition-all duration-300 group-hover:opacity-80" src="{{ asset('images/stock/h.jpg') }}" alt=""></label>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Grouped Checkbox</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <div class="grid grid-flow-dense grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">Default Mode</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnCheckControl1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnCheckControl1">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnCheckControl2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnCheckControl2">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnCheckControl3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnCheckControl3">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnCheckControl4" checked>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnCheckControl4">Option Checked</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnCheckControl5" disabled>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnCheckControl5">Option Disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">NoControl Mode</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnCheck1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnCheck1">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnCheck2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnCheck2">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnCheck3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnCheck3">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnCheck4" checked>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnCheck4">Option Checked</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnCheck5" disabled>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnCheck5">Option Disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-7">    
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">With Icon</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnIconCheckNc1">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconCheckNc1">
                                    <em class="text-lg ni ni-user"></em><span>User</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnIconCheckNc2">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconCheckNc2">
                                    <em class="text-lg ni ni-loader"></em><span>Loading</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnIconCheckNc3">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconCheckNc3">
                                    <em class="text-lg ni ni-signal"></em><span>Network</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnIconCheckNc4">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconCheckNc4">
                                    <em class="text-lg ni ni-wifi-off"></em><span>No Wifi</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-5">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">Only Icon</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconCheck1">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconCheck1">
                                    <em class="text-lg ni ni-user"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconCheck2">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconCheck2">
                                    <em class="text-lg ni ni-loader"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconCheck3">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconCheck3">
                                    <em class="text-lg ni ni-signal"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="checkbox" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconCheck4">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconCheck4">
                                    <em class="text-lg ni ni-wifi-off"></em>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Grouped Radio</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <div class="grid grid-flow-dense grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">Default Mode</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadio" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnRadioControl1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnRadioControl1">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadio" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnRadioControl2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnRadioControl2">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadio" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnRadioControl3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnRadioControl3">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadio" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnRadioControl4" checked>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnRadioControl4">Option Checked</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadio" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="btnRadioControl5" disabled>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-10 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800" for="btnRadioControl5">Option Disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">NoControl Mode</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadioNc" class="peer h-0 w-0 absolute opacity-0" id="btnRadio1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnRadio1">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadioNc" class="peer h-0 w-0 absolute opacity-0" id="btnRadio2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnRadio2">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadioNc" class="peer h-0 w-0 absolute opacity-0" id="btnRadio3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnRadio3">Option Label</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadioNc" class="peer h-0 w-0 absolute opacity-0" id="btnRadio4" checked>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnRadio4">Option Checked</label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnRadioNc" class="peer h-0 w-0 absolute opacity-0" id="btnRadio5" disabled>
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnRadio5">Option Disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-7">    
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">With Icon</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="radio" name="btnIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnIconRadioNc1">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconRadioNc1">
                                    <em class="text-lg ni ni-user"></em><span>User</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnIconRadioNc2">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconRadioNc2">
                                    <em class="text-lg ni ni-loader"></em><span>Loading</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnIconRadioNc3">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconRadioNc3">
                                    <em class="text-lg ni ni-signal"></em><span>Network</span>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnIconRadioNc4">
                                <label class="flex items-center gap-3 text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnIconRadioNc4">
                                    <em class="text-lg ni ni-wifi-off"></em><span>No Wifi</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-5">
                        <h6 class="text-base font-heading font-bold text-slate-700 dark:text-white mb-3">Only Icon</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex relative">
                                <input type="radio" name="btnOnlyIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconRadio1">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconRadio1">
                                    <em class="text-lg ni ni-user"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnOnlyIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconRadio2">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconRadio2">
                                    <em class="text-lg ni ni-loader"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnOnlyIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconRadio3">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconRadio3">
                                    <em class="text-lg ni ni-signal"></em>
                                </label>
                            </div>
                            <div class="inline-flex relative">
                                <input type="radio" name="btnOnlyIconRadio" class="peer h-0 w-0 absolute opacity-0" id="btnOnlyIconRadio4">
                                <label class="flex items-center justify-center text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm h-9 w-9 cursor-pointer rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="btnOnlyIconRadio4">
                                    <em class="text-lg ni ni-wifi-off"></em>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">With Custom Content</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <div class="grid grid-flow-dense grid-cols-12 gap-5">
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">User Selection</h6>
                        <div class="flex flex-col gap-3">
                            <div class="inline-flex relative w-full">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userSelection1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="userSelection1">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                                            <img class="rounded-md" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                        </span>
                                        <span class="ms-4">
                                            <span class="block text-sm font-bold text-slate-700 dark:text-white">Keith Jensen</span>
                                            <span class="block text-xs text-slate-400">Senior Developer</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userSelection2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="userSelection2">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-10 w-10 rounded-md font-medium">
                                            <span>AB</span>
                                        </span>
                                        <span class="ms-4">
                                            <span class="block text-sm font-bold text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                                            <span class="block text-xs text-slate-400">Senior Developer</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full">
                                <input type="checkbox" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userSelection3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="userSelection3">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-10 w-10 rounded-md font-medium">
                                            <img class="rounded-md" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                                        </span>
                                        <span class="ms-4">
                                            <span class="block text-sm font-bold text-slate-700 dark:text-white">Daisy Morgan</span>
                                            <span class="block text-xs text-slate-400">UI/UX Designer</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div><!-- group -->
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">User Choose</h6>
                        <div class="flex flex-col -space-y-px">
                            <div class="inline-flex relative w-full group">
                                <input type="radio" name="userChoice" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userChoice1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block border border-gray-200 dark:border-gray-800 w-full group-first:rounded-t group-last:rounded-b" for="userChoice1">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                                            <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                                        </span>
                                        <span class="block text-xs font-bold text-slate-700 dark:text-white ms-3">Keith Jensen</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full group">
                                <input type="radio" name="userChoice" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userChoice2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block border border-gray-200 dark:border-gray-800 w-full group-first:rounded-t group-last:rounded-b" for="userChoice2">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                                            <span>AB</span>
                                        </span>
                                        <span class="block text-xs font-bold text-slate-700 dark:text-white ms-3">Abu Bin Ishtiyak</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full group">
                                <input type="radio" name="userChoice" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userChoice3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block border border-gray-200 dark:border-gray-800 w-full group-first:rounded-t group-last:rounded-b" for="userChoice3">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                        </span>
                                        <span class="block text-xs font-bold text-slate-700 dark:text-white ms-3">Keith Jensen</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full group">
                                <input type="radio" name="userChoice" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="userChoice4">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-2.5 cursor-pointer inline-block border border-gray-200 dark:border-gray-800 w-full group-first:rounded-t group-last:rounded-b" for="userChoice4">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <span class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-8 w-8 rounded-full font-medium">
                                            <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                                        </span>
                                        <span class="block text-xs font-bold text-slate-700 dark:text-white ms-3">Daisy Morgan</span>
                                    </span>
                                </label>
                            </div>
                        </div><!-- group -->
                    </div><!-- col -->
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Payment Method</h6>
                        <div class="flex flex-col gap-3">
                            <div class="inline-flex relative w-full">
                                <input type="radio" name="paymentCheck" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="paymentCheck1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-1.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="paymentCheck1">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <em class="text-3xl ni ni-cc-paypal"></em>
                                        <span class="block text-sm text-slate-600 dark:text-slate-400 ms-3">Paypal</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full">
                                <input type="radio" name="paymentCheck" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="paymentCheck2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-1.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="paymentCheck2">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <em class="text-3xl ni ni-cc-mc"></em>
                                        <span class="block text-sm text-slate-600 dark:text-slate-400 ms-3">Master Card</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full">
                                <input type="radio" name="paymentCheck" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="paymentCheck3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-1.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="paymentCheck3">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <em class="text-3xl ni ni-cc-visa"></em>
                                        <span class="block text-sm text-slate-600 dark:text-slate-400 ms-3">Visa Card</span>
                                    </span>
                                </label>
                            </div>
                            <div class="inline-flex relative w-full">
                                <input type="radio" name="paymentCheck" class="peer h-4 w-4 absolute start-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="paymentCheck4">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 ps-11 pe-4 py-1.5 cursor-pointer inline-block rounded border border-gray-200 dark:border-gray-800 w-full" for="paymentCheck4">
                                    <span class="flex items-center whitespace-nowrap w-full">
                                        <em class="text-3xl ni ni-cc-stripe"></em>
                                        <span class="block text-sm text-slate-600 dark:text-slate-400 ms-3">Stripe</span>
                                    </span>
                                </label>
                            </div>
                        </div><!-- group -->
                    </div><!-- col -->
                </div><!-- grid -->
                
            </div>
        </div>
    </div>

</div>
@endsection