@extends('layouts.main', ['title'=> 'Gallery'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Image Gallery
        </h3>
        <p class="text-slate-400">You have total <span class="text-slate-600 dark:text-slate-400">1,257</span> Media.</p>
    </div>
    <div>
        <a href="#" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3">Download All</span>
        </a>
        <a href="#" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-heading font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 ni ni-download-cloud"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-10">
    <div class="grid grid-flow-dense grid-cols-12 gap-7">
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/a.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/a.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Dustin Mock</span>
                            <span class="block text-xs leading-4 text-slate-400">mock@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">34</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/b.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/b.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-400 h-10 w-10 rounded-full font-medium">
                            <span>AD</span>
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Ander Durham</span>
                            <span class="block text-xs leading-4 text-slate-400">ander@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">04</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/c.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/c.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Krish Kendall</span>
                            <span class="block text-xs leading-4 text-slate-400">krish@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">349</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/d.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/d.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Keith Jensen</span>
                            <span class="block text-xs leading-4 text-slate-400">keith@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">92</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/e.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/e.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>HW</span>
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Heather Walker</span>
                            <span class="block text-xs leading-4 text-slate-400">walker@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">341</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/f.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/f.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/d-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Asiya Wolff</span>
                            <span class="block text-xs leading-4 text-slate-400">asiya@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">139</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/g.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/g.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Abu Bin Ishtiyak</span>
                            <span class="block text-xs leading-4 text-slate-400">abu@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">148</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
        <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
            <div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                <a class="relative z-[1]" data-fslightbox href="{{ asset('images/stock/h.jpg') }}">
                    <img class="w-full rounded-t" src="{{ asset('images/stock/h.jpg') }}" alt="">
                </a>
                <div class="p-5 sm:p-6 flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/a-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <span class="block text-sm font-medium leading-6 text-slate-700 dark:text-white">Dustin Mock</span>
                            <span class="block text-xs leading-4 text-slate-400">mock@softnio.com</span>
                        </div>
                    </div>
                    <div>
                        <button class="relative inline-flex items-center text-center align-middle text-sm font-heading font-bold leading-4.5 tracking-wide transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-heart"></em>
                            <span class="ms-3">314</span>
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- col -->
    </div><!-- grid -->
</div><!-- block -->
@endsection