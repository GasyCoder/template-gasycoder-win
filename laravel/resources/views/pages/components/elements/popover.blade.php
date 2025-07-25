@extends('layouts.main', ['title'=> 'Popovers'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Popovers</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Documentation and examples for avatars.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Click the following button to see the basic example of popover.</p>
        </div>

        <div class="p-4 sm:p-5 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="popover relative inline-block">
                <button tabindex="0" class="popover-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="right" data-rtl-placement="left" data-title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"><span>Click to toggle popover</span></button>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Directional Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Click the following buttons to see directional example of popover.</p>
        </div>

        <div class="p-4 sm:p-5 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-4">
                <div class="popover relative inline-block">
                    <button tabindex="0" class="popover-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span>Popover on top</span></button>
                </div>
                <div class="popover relative inline-block">
                    <button tabindex="0" class="popover-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="right" data-rtl-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span>Popover on End</span></button>
                </div>
                <div class="popover relative inline-block">
                    <button tabindex="0" class="popover-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span>Popover on bottom</span></button>
                </div>
                <div class="popover relative inline-block">
                    <button tabindex="0" class="popover-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300" data-placement="left"  data-rtl-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span>Popover on Start</span></button>
                </div>
            </div>
        </div>
    </div><!-- block -->

</div>
@endsection