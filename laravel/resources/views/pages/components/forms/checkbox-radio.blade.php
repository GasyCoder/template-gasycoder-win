@extends('layouts.main', ['title'=> 'Checkbox Radio'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Checkbox &amp; Radio</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for .</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Checkbox Styles</h5>
            <p class="text-sm leading-6 text-slate-400">To create custom control, wrapped with <code class="text-primary-600">&lt;div&gt;</code> each checkbox <code class="text-primary-600">&lt;input&gt;</code> &amp; <code class="text-primary-600">&lt;label&gt;</code></p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customCheck1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customCheck1">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked id="customCheck2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customCheck2">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Disabled</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" disabled id="customCheck3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customCheck3">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Check Disabled</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked disabled id="customCheck4">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customCheck4">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Size</h6>
                            <div class="flex items-center flex-wrap gap-4">
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customCheck7">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="customCheck7">Option Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customCheck6">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customCheck6">Option Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer h-8 w-8 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customCheck5">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-base leading-6 pt-1 ps-4 cursor-pointer inline-block" for="customCheck5">Option Label</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Radio Styles</h5>
            <p class="text-sm leading-6 text-slate-400">To create custom control, wrapped with <code class="text-primary-600">&lt;div&gt;</code> each checkbox <code class="text-primary-600">&lt;input&gt;</code> &amp; <code class="text-primary-600">&lt;label&gt;</code></p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                            <div class="inline-flex">
                                <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customRadio1" name="customRadio">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customRadio1">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked</h6>
                            <div class="inline-flex">
                                <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked id="customRadio2" name="customRadio">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customRadio2">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Disabled</h6>
                            <div class="inline-flex">
                                <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" disabled id="customRadio3" name="customRadioDisabled">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customRadio3">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Check Disabled</h6>
                            <div class="inline-flex">
                                <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" checked disabled id="customRadio4" name="customRadioDisabled">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customRadio4">Option Label</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Size</h6>
                            <div class="flex items-center flex-wrap gap-4">
                                <div class="inline-flex">
                                    <input type="radio" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customRadio7" name="radioSize">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="customRadio7">Option Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="radio" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customRadio6" name="radioSize">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customRadio6">Option Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="radio" class="peer h-8 w-8 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="customRadio5" name="radioSize">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-base leading-6 pt-1 ps-4 cursor-pointer inline-block" for="customRadio5">Option Label</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Switch Style</h5>
            <p class="text-sm leading-6 text-slate-400">The switch markup of a <code class="text-pink-600">checkbox</code> but render a toggle switch.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="customSwitch1">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customSwitch1">Switch</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Checked</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" checked id="customSwitch2">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customSwitch2">Switch</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Disabled</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" disabled id="customSwitch3">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customSwitch3">Switch</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 md:col-span-3">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Check Disabled</h6>
                            <div class="inline-flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" checked disabled id="customSwitch4">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customSwitch4">Switch</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="preview-block">
                            <h6 class="block text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Size</h6>
                            <div class="flex items-center flex-wrap gap-4">
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer relative h-4 w-8 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-2 after:w-2 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-4.5  cursor-pointer disabled:cursor-not-allowed" id="customSwitch7">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="customSwitch7">Switch Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="customSwitch6">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="customSwitch6">Switch Label</label>
                                </div>
                                <div class="inline-flex">
                                    <input type="checkbox" class="peer relative h-8 w-16 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-5 after:w-5 after:rounded-full after:bg-gray-300 after:top-1 after:start-1 checked:after:bg-white checked:after:start-9  cursor-pointer disabled:cursor-not-allowed" id="customSwitch5">
                                    <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-base leading-6 pt-1 ps-4 cursor-pointer inline-block" for="customSwitch5">Switch Label</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection