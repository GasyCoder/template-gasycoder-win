@extends('layouts.main', ['title'=> 'Accordions'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Accordions</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Toggle the visibility of content across your project with a few classes and DashWind collapse JavaScript plugins. The collapse plugin is used to show &amp; hide content.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Default Style</h5>
            <p class="text-sm leading-6 text-slate-400">To properly achieve the accordion style, be sure to use <code class="font-mono text-pink-500">.accordion</code> as a wrapper, <code class="font-mono text-pink-500">.accordion-item</code> to wrap around each item, <code class="font-mono text-pink-500">.accordion-toggle</code> on the element you to click and then <code class="font-mono text-pink-500">.accordion-body</code> as a sibling to the toggle element. </p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="accordion rounded border border-gray-200 dark:border-gray-800">
                <div class="accordion-item border-t border-gray-300 dark:border-gray-900 first:border-t-0 group active">
                    <button class="accordion-toggle relative block text-start ps-6 pe-12 py-4 group-[.active]:border-b border-gray-200 dark:border-gray-800 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-slate-700 group-[.active]:dark:text-white">What is DashWind?</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white font-bold leading-5 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pt-4 pb-5 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item border-t border-gray-300 dark:border-gray-900 first:border-t-0 group">
                    <button class="accordion-toggle relative block text-start ps-6 pe-12 py-4 group-[.active]:border-b border-gray-200 dark:border-gray-800 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-slate-700 group-[.active]:dark:text-white">What are some of the benefits of receiving my bill electronically?</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white font-bold leading-5 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pt-4 pb-5 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item border-t border-gray-300 dark:border-gray-900 first:border-t-0 group">
                    <button class="accordion-toggle relative block text-start ps-6 pe-12 py-4 group-[.active]:border-b border-gray-200 dark:border-gray-800 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-slate-700 group-[.active]:dark:text-white">What is the relationship between DashWind and payment?</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white font-bold leading-5 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pt-4 pb-5 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item border-t border-gray-300 dark:border-gray-900 first:border-t-0 group">
                    <button class="accordion-toggle relative block text-start ps-6 pe-12 py-4 group-[.active]:border-b border-gray-200 dark:border-gray-800 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-slate-700 group-[.active]:dark:text-white">What are the benefits of using DashWind?</h6>
                        <em class="absolute end-6 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white font-bold leading-5 h-5 w-5 transition-all duration-300 group-[.active]:rotate-180 ni ni-chevron-down"></em>
                    </button>
                    <div class="accordion-body px-6 pt-4 pb-5 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Accordion Style 2</h5>
            <p class="text-sm leading-6 text-slate-400">You can simply use tailwind classes to style your accordion diffrent, like you can remove borders, change colors.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="accordion">
                <div class="accordion-item group active">
                    <button class="accordion-toggle relative block text-start py-2 pe-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What is DashWind?</h6>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100 ni ni-minus"></em>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item group">
                    <button class="accordion-toggle relative block text-start py-2 pe-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What are some of the benefits of receiving my bill electronically?</h6>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100 ni ni-minus"></em>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item group">
                    <button class="accordion-toggle relative block text-start py-2 pe-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What is the relationship between DashWind and payment?</h6>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100 ni ni-minus"></em>
                        <em class="absolute end-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5 md:max-w-[720px]">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Accordion Style 3</h5>
            <p class="text-sm leading-6 text-slate-400">You can simply use tailwind classes to style your accordion diffrent, like you can remove borders, change colors or maybe place those icons on a diffrent place.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="accordion">
                <div class="accordion-item group active">
                    <button class="accordion-toggle relative block text-start py-2 ps-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What is DashWind?</h6>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100  ni ni-minus"></em>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body ps-9 py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item group">
                    <button class="accordion-toggle relative block text-start py-2 ps-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What are some of the benefits of receiving my bill electronically?</h6>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100  ni ni-minus"></em>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body ps-9 py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="accordion-item group">
                    <button class="accordion-toggle relative block text-start py-2 ps-9 w-full">
                        <h6 class="text-base font-bold text-slate-600 dark:text-slate-300 group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600">What is the relationship between DashWind and payment?</h6>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-0 group-[.active]:opacity-100  ni ni-minus"></em>
                        <em class="absolute start-0 top-1/2 -translate-y-1/2 text-base text-center text-slate-700 dark:text-white leading-5 h-5 w-5 transition-all duration-300 opacity-100 group-[.active]:opacity-0 ni ni-plus"></em>
                    </button>
                    <div class="accordion-body ps-9 py-2 hidden group-[.active]:block">
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="text-sm mb-4 last:mb-0 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection