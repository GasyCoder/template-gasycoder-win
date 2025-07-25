@extends('layouts.main', ['title'=> 'Form Elements'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Form Elements</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms. Here’s a quick example to demonstrate form styles, so use these classes to opt into their customized displays.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Form controls</h5>
            <p class="text-sm leading-6 text-slate-400">Textual form controls—like <code class="text-pink-500">&lt;input&gt;</code>s, <code class="text-pink-500">&lt;select&gt;</code>s, and <code class="text-pink-500">&lt;textarea&gt;</code>. Included are styles for general appearance, focus state, sizing, and more. Additional classes can be used to vary this layout on a per-form basis.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-sm tracking-relaxed leading-tight mb-3">Default Style's</h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-01">Input text Default</label>
                            <div class="relative">
                                <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-01" placeholder="Input placeholder" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-05">Input with Text</label>
                            <div class="relative">
                                <div class="absolute h-7 top-1 end-1 px-3 bg-white dark:bg-gray-950 rounded flex items-center">
                                    <span class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Usd</span>
                                </div>
                                <input type="text" class="block w-full text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-05" placeholder="Input placeholder" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-02">Input with Icon Start</label>
                            <div class="relative">
                                <div class="absolute h-9 w-9 top-0 start-0 flex items-center justify-center">
                                    <em class="text-slate-400 text-base leading-none ni ni-user"></em>
                                </div>
                                <input type="text" class="block w-full text-sm leading-4.5 ps-10 pe-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-02" placeholder="Input placeholder" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-03">Input with Icon End</label>
                            <div class="relative">
                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                    <em class="text-slate-400 text-base leading-none ni ni-mail"></em>
                                </div>
                                <input type="text" class="block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border outline-none border-gray-200 dark:border-gray-800 focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-03" placeholder="Input placeholder" autocomplete="off">
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 sm:row-span-2 sm:col-start-7 sm:row-start-2">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-textarea">Textarea</label>
                            <div class="relative">
                                <textarea class="block w-full text-sm leading-4.5 px-4 py-2.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="default-textarea" autocomplete="off">Large text area content</textarea>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="customFile">Default File Upload</label>
                            <div class="relative">
                                <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile">
                                <label class=" absolute top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 ocus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-900 after:px-4 after:rounded-e after:border after:border-gray-200 after:dark:border-gray-800" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6 sm:row-span-2">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-07">Default Select Multiple</label>
                            <div class="relative">
                                <select class="block w-full text-sm leading-5 pe-4 ps-4 pt-1.5 pb-4 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all [&>*]:px-2 [&>*]:py-1 [&>*]:my-0.5 [&>*]:-mx-2 [&>*]:rounded-sm [&>*]:cursor-pointer [&>*]:text-slate-600" id="default-07" multiple>
                                    <option value="option_select0">Default Option</option>
                                    <option value="option_select1">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-06">Default Select</label>
                            <div class="relative">
                                <select class="block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all bg-[right_0.5rem_center] rtl:bg-[left_0.5rem_center]" id="default-06">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name">Option select name</option>
                                    <option value="option_select_name">Option select name</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->

                <div class="border-t border-gray-300 dark:border-slate-900 my-7"></div><!-- sap -->
                
                <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-sm tracking-relaxed leading-tight mb-3">State Preview</h6>

                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-01">Focus State</label>
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 outline outline-offset-0 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-primary-500 dark:border-primary-600 outline-none outline-primary-200 dark:outline-primary-950 focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-01" placeholder="Input placeholder">
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-02">Filled State</label>
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-02" value="Abu Bin Ishtiyak">
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-04">Error State</label>
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-red-500 dark:border-red-600 outline-none focus:border-red-500 focus:dark:border-red-600 focus:outline-offset-0 focus:outline-red-200  focus:dark:outline-red-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-04" placeholder="Input placeholder">
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-1-03">Disabled State</label>
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-1-03" disabled value="info@softnio.com">
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->

                <div class="border-t border-gray-300 dark:border-slate-900 my-7"></div><!-- sap -->
                
                <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-sm tracking-relaxed leading-tight mb-3">Size Preview</h6>

                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-4">
                        <div class="relative mb-5 last:mb-0">
                            <input type="text" class="block w-full box-border text-base leading-4.5 px-4 py-2.5 h-11 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-md transition-all" id="default-2-01"  placeholder="Input Large">
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-4">
                        <div class="relative mb-5 last:mb-0">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="default-2-02"  placeholder="Input Regular">
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-4">
                        <div class="relative mb-5 last:mb-0">
                            <input type="text" class="block w-full box-border text-xs leading-5 px-4 py-1 h-8 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-sm transition-all" id="default-2-03"  placeholder="Input Small">
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Select with ChoiceJS</h5>
            <p class="text-sm leading-6 text-slate-400">
                using .js-select class in <code class="text-pink-500">&lt;select&gt;</code> element to replace browser default style with <a class="text-primary-500 hover:text-primary-700" target="_blank" href="https://choices-js.github.io/Choices/">ChoiceJS</a>, as its give you a customizable select box with support for searching, tagging, and many other highly used options.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">

                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-4-01">ChoiceJS Default</label>
                            <div class="relative">
                                <select id="default-4-01" class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name_1">Option select name 1</option>
                                    <option value="option_select_name_2">Option select name 2</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-4-02">ChoiceJS With Search</label>
                            <div class="relative">
                                <select id="default-4-02" class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" data-search="true">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name_1">Option select name 1</option>
                                    <option value="option_select_name_2">Option select name 2</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="default-4-03">ChoiceJS Multiple Select</label>
                            <div class="relative">
                                <select id="default-4-03" class="js-select" multiple data-sort="false" data-placeholder="Select Multiple options">
                                    <option value="default_option">Default Option</option>
                                    <option value="option_select_name_1">Option select name 1</option>
                                    <option value="option_select_name_2">Option select name 2</option>
                                    <option value="option_select_name_3">Option select name 3</option>
                                    <option value="option_select_name_4">Option select name 4</option>
                                    <option value="option_select_name_5">Option select name 5</option>
                                    <option value="option_select_name_6">Option select name 6</option>
                                    <option value="option_select_name_7">Option select name 7</option>
                                    <option value="option_select_name_8">Option select name 8</option>
                                    <option value="option_select_name_9">Option select name 9</option>
                                    <option value="option_select_name_10">Option select name 10</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->

            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection