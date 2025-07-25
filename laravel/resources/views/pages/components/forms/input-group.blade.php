@extends('layouts.main', ['title'=> 'Input Group'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Input Group</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for input group. Extend form controls by adding text, buttons, or button groups on either side of text inputs, custom selects, and custom file inputs.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic example</h5>
            <p class="text-sm leading-6 text-slate-400">Place one add-on or button on either side of an input. You may also place one on both sides of an input. We do not support multiple form-controls in a single input group and <code class="text-primary-600">&lt;label&gt;</code>s must come outside the input group.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    @
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-01" placeholder="Username" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex max-xs:flex-col max-xs:-space-y-px xs:-space-x-px w-full items-stretch">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e transition-all" id="default-02" placeholder="Recipient's username" autocomplete="off">
                                <div class="px-4 py-1 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e flex items-center">
                                    @example.com
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white cursor-pointer mb-2" for="default-03">Your URL</label>
                            <div class="relative flex max-xs:flex-col max-xs:-space-y-px xs:-space-x-px w-full items-stretch">
                                <div class="px-4 py-1 flex-grow xs:flex-grow-0 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e flex items-center">
                                    https://example.com/users/
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e transition-all" id="default-03"  autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    $
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-04" placeholder="Username" autocomplete="off">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    .00
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex max-xs:flex-col max-xs:-space-y-px xs:-space-x-px w-full items-stretch">
                                <div class="px-4 py-1.5 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e flex items-center">
                                    With textarea
                                </div>
                                <textarea class="block flex-grow text-sm leading-4.5 px-4 py-1.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed max-xs:first:rounded-t max-xs:last:rounded-b xs:first:rounded-s xs:last:rounded-e transition-all resize-none" id="default-textarea" autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Sizing</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Small
                                </div>
                                <input type="text" class="block flex-grow box-border text-xs leading-5 px-4 py-1 h-8 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="size-01"  autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Default
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="size-02" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 text-base border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Large
                                </div>
                                <input type="text" class="block flex-grow box-border text-base leading-4.5 px-4 py-2.5 h-11 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="size-03" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Checkboxes and radios</h5>
            <p class="text-sm leading-6 text-slate-400">Place any checkbox or radio option within an input group’s addon instead of text.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600 transition-all duration-300" id="customCheck1">
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="check-01" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    <input type="radio" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 focus:z-10 disabled:bg-slate-50 disabled:checked:bg-primary-400 rounded-full border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600 transition-all duration-300" id="customRadio1" name="radioSize">
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="radio-01" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Multiple inputs</h5>
            <p class="text-sm leading-6 text-slate-400">While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex max-sm:flex-col max-sm:-space-y-px sm:-space-x-px w-full items-stretch">
                                <div class="px-4 py-1 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 max-sm:first:rounded-t max-sm:last:rounded-b sm:first:rounded-s sm:last:rounded-e flex items-center">
                                    First and last name
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed max-sm:first:rounded-t max-sm:last:rounded-b sm:first:rounded-s sm:last:rounded-e transition-all" id="default-05-1" autocomplete="off">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed max-sm:first:rounded-t max-sm:last:rounded-b sm:first:rounded-s sm:last:rounded-e transition-all" id="default-05-2" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Multiple addons</h5>
            <p class="text-sm leading-6 text-slate-400">Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    $
                                </div>
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    0.00
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-06" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-07" autocomplete="off">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    $
                                </div>
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    0.00
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Button addons</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-08" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-09" autocomplete="off">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Buttons with dropdowns</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="relative dropdown group">
                                    <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end"  class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 group-first:rounded-s group-last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300"><span>Drop</span> <em class="ms-1 -me-1 text-xl leading-4.5 ni ni-chevron-down"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>List Action</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                                            <li class="block border-t border-gray-200 dark:border-gray-800 my-2"></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>More Action</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-10" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-11" autocomplete="off">
                                <div class="relative dropdown group">
                                    <button tabindex="0"  data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start"  class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 group-first:rounded-s group-last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300"><span>Drop</span> <em class="ms-1 -me-1 text-xl leading-4.5 ni ni-chevron-down"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>List Action</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                                            <li class="block border-t border-gray-200 dark:border-gray-800 my-2"></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>More Action</span></a></li>
                                        </ul>
                                    </div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Segmented buttons</h5>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Action</a>
                                <div class="relative dropdown group">
                                    <button tabindex="0"  data-offset="0,4" data-placement="bottom-start"  data-rtl-placement="bottom-end" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 group-first:rounded-s group-last:rounded-e px-1 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-chevron-down"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>List Action</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                                            <li class="block border-t border-gray-200 dark:border-gray-800 my-2"></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>More Action</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-12" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="default-13" autocomplete="off">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Action</a>
                                <div class="relative dropdown group">
                                    <button tabindex="0" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 group-first:rounded-s group-last:rounded-e px-1 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300"><em class="text-xl leading-4.5 ni ni-chevron-down"></em></button>
                                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                        <ul class="py-2">
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>List Action</span></a></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>Another Action</span></a></li>
                                            <li class="block border-t border-gray-200 dark:border-gray-800 my-2"></li>
                                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-800 transition-all duration-300" href="#"><span>More Action</span></a></li>
                                        </ul>
                                    </div>
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
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Custom select</h5>
            <p class="text-sm leading-6 text-slate-400">Input groups include support for custom selects inputs. Browser default versions of these are not supported.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Options
                                </div>
                                <select class="block flex-grow text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" id="default-14">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <select class="block flex-grow text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" id="default-15">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Options
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                                <select class="block flex-grow text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" id="default-16">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <select class="block flex-grow text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:dark:outline-primary-950 focus:z-10 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" id="default-17">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->
    
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Custom file input</h5>
            <p class="text-sm leading-6 text-slate-400">Input groups include support for custom file inputs. Browser default versions of these are not supported.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Upload
                                </div>
                                <div class="relative flex-grow group">
                                    <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile1">
                                    <label class="absolute overflow-hidden top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed group-first:rounded-s group-last:rounded-e transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-800 after:px-4 after:border after:border-gray-300 after:dark:border-gray-900" for="customFile1">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="relative flex-grow group">
                                    <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile2">
                                    <label class="absolute overflow-hidden top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed group-first:rounded-s group-last:rounded-e transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-800 after:px-4 after:border after:border-gray-300 after:dark:border-gray-900" for="customFile2">Choose file</label>
                                </div>
                                <div class="px-4 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                    Upload
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                                <div class="relative flex-grow group">
                                    <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile3">
                                    <label class="absolute overflow-hidden top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed group-first:rounded-s group-last:rounded-e transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-800 after:px-4 after:border after:border-gray-300 after:dark:border-gray-900" for="customFile3">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12">
                        <div class="relative mb-5 last:mb-0">
                            <div class="relative flex -space-x-px w-full items-stretch">
                                <div class="relative flex-grow group">
                                    <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile4">
                                    <label class="absolute overflow-hidden top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-300 dark:border-gray-900 outline-none focus:border-primary-500 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed group-first:rounded-s group-last:rounded-e transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-800 after:px-4 after:border after:border-gray-300 after:dark:border-gray-900" for="customFile4">Choose file</label>
                                </div>
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 first:rounded-s last:rounded-e px-5 py-2 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white hover:dark:text-white active:bg-primary-700 active:dark:bg-primary-700 hover:z-10 transition-all duration-300">Button</a>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection