@extends('layouts.main', ['title'=> 'Badges'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Badges</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Documentation and examples for badges, our small count and labeling component.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Variations</h5>
            <p class="text-sm leading-6 text-slate-400">We created predefined badges styles with states appearance.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-yellow-600 bg-yellow-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-cyan-600 bg-cyan-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-900 dark:border-gray-400 bg-gray-900 dark:bg-gray-400 text-white dark:text-gray-700 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-500 bg-gray-500 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pill Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-full px-2 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-2 border border-green-600 bg-green-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-full px-2 border border-yellow-600 bg-yellow-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-full px-2 border border-red-600 bg-red-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-full px-2 border border-cyan-600 bg-cyan-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-900 dark:border-gray-400 bg-gray-900 dark:bg-gray-400 text-white dark:text-gray-700 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-500 bg-gray-500 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Outline Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-sm px-1.5 border border-primary-600 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-green-600 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-yellow-600 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-red-600 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-cyan-600 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-900 dark:border-gray-400 text-gray-900 dark:text-gray-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-400 text-gray-500 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-300 dark:border-gray-900 text-slate-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Outline Pill Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-full px-2 border border-primary-600 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-2 border border-green-600 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-full px-2 border border-yellow-600 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-full px-2 border border-red-600 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-full px-2 border border-cyan-600 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-900 dark:border-gray-400 text-gray-900 dark:text-gray-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-400 text-gray-500 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-900 text-slate-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Dot Style</h5>
            <p class="text-sm leading-6 text-slate-400">Here is a diffrent appearance for badges with dot.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex items-center ps-3 text-primary-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Primary</span>
                <span class="relative inline-flex items-center ps-3 text-green-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Success</span>
                <span class="relative inline-flex items-center ps-3 text-yellow-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Warning</span>
                <span class="relative inline-flex items-center ps-3 text-red-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Danger</span>
                <span class="relative inline-flex items-center ps-3 text-cyan-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Info</span>
                <span class="relative inline-flex items-center ps-3 text-gray-900 dark:text-gray-400 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Dark</span>
                <span class="relative inline-flex items-center ps-3 text-gray-600 dark:text-gray-500 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Gray</span>
                <span class="relative inline-flex items-center ps-3 text-gray-500 dark:text-gray-600 text-xxs font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle after:content-[''] after:absolute after:rounded-full after:start-0 after:top-1/2 after:-translate-y-1/2 after:-mt-px after:h-1.5 after:w-1.5 after:bg-current">Light</span>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Pale color</h5>
            <p class="text-sm leading-6 text-slate-400">Here is badges with pale colors varients.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-sm px-1.5 border border-primary-100 dark:border-primary-950 bg-primary-100 dark:bg-primary-950 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-green-100 dark:border-green-950 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-red-100 dark:border-red-950 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-cyan-100 dark:border-cyan-950 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-300 dark:border-gray-900 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pill Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-full px-2 border border-primary-100 dark:border-primary-950 bg-primary-100 dark:bg-primary-950 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-2 border border-green-100 dark:border-green-950 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-full px-2 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-full px-2 border border-red-100 dark:border-red-950 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-full px-2 border border-cyan-100 dark:border-cyan-950 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-900 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-100 dark:border-gray-700 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Outline Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-sm px-1.5 border border-primary-300 dark:border-primary-800 bg-primary-100 dark:bg-primary-950 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-green-300 dark:border-green-800 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-yellow-300 dark:border-yellow-800 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-red-300 dark:border-red-800 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-500 dark:border-gray-700 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-400 dark:border-gray-600 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Outline Pill Style</h6>
            <div class="flex flex-wrap gap-3">
                <span class="relative inline-flex rounded-full px-2 border border-primary-300 dark:border-primary-800 bg-primary-100 dark:bg-primary-950 text-primary-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-2 border border-green-300 dark:border-green-800 bg-green-100 dark:bg-green-950 text-green-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Success</span>
                <span class="relative inline-flex rounded-full px-2 border border-yellow-300 dark:border-yellow-800 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Warning</span>
                <span class="relative inline-flex rounded-full px-2 border border-red-300 dark:border-red-800 bg-red-100 dark:bg-red-950 text-red-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Danger</span>
                <span class="relative inline-flex rounded-full px-2 border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Info</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-500 dark:border-gray-700 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Dark</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-400 dark:border-gray-600 bg-gray-200 dark:bg-gray-800 text-slate-500 dark:text-slate-300 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Gray</span>
                <span class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-slate-400 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Light</span>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Sizes</h5>
            <p class="text-sm leading-6 text-slate-400">You can make badge small or as big as you need.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default Style</h6>
            <div class="flex flex-wrap items-start gap-4">
                <span class="relative inline-flex rounded-sm px-6 py-3 border border-primary-600 bg-primary-600 text-white text-lg text-center font-medium leading-5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-5 py-3 border border-primary-600 bg-primary-600 text-white text-base text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-4 py-2 border border-primary-600 bg-primary-600 text-white text-sm text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-3 py-1 border border-primary-600 bg-primary-600 text-white text-xs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-sm px-1.5 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
            </div>
            <h6 class="first:mt-0 mt-6 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pill Style</h6>
            <div class="flex flex-wrap items-start gap-4">
                <span class="relative inline-flex rounded-full px-6 py-3 border border-primary-600 bg-primary-600 text-white text-lg text-center font-medium leading-5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-5 py-3 border border-primary-600 bg-primary-600 text-white text-base text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-4 py-2 border border-primary-600 bg-primary-600 text-white text-sm text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-3 py-1 border border-primary-600 bg-primary-600 text-white text-xs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
                <span class="relative inline-flex rounded-full px-2 border border-primary-600 bg-primary-600 text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Primary</span>
            </div>
        </div>
    </div>

</div>
@endsection