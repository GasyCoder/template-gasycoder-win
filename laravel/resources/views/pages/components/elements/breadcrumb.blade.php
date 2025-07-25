@extends('layouts.main', ['title'=> 'Breadcrumb'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Breadcrumb</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Indicate the current page’s location within a navigational hierarchy that automatically adds separators via CSS.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Default Style</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Home</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Library</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Library</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-3 after:my-0.5 after:rotate-[25deg] after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Data</li>
            </ul>
        </div>
    </div>
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Arrow Style</h5>
        </div>

        
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider">Home</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a><em class="text-slate-400 my-0.5 ms-2 font-medium rtl:-scale-x-100 ni ni-forward-ios"></em></li>
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider">Library</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a><em class="text-slate-400 my-0.5 ms-2 font-medium rtl:-scale-x-100 ni ni-forward-ios"></em></li>
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Library</a><em class="text-slate-400 my-0.5 ms-2 font-medium rtl:-scale-x-100 ni ni-forward-ios"></em></li>
                <li class="first:ps-0 ps-2 inline-flex text-slate-300 text-xs font-medium uppercase tracking-wider">Data</li>
            </ul>
        </div>
    </div>
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Pipe Style</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Home</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Library</li>
            </ul>
            <ul class="flex flex-wrap py-1">
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Home</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider"><a class="text-slate-400 hover:text-primary-600" href="#">Library</a></li>
                <li class="first:ps-0 ps-2 inline-flex last:after:hidden after:content-[''] after:block after:ms-2 after:w-px after:h-2.5 after:my-0.75 after:bg-slate-400 text-slate-300 text-xs font-medium uppercase tracking-wider">Data</li>
            </ul>
        </div>
    </div>

</div>
@endsection