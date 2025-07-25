@extends('layouts.main', ['title'=> 'Card Boxed'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Card Boxed</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Cards provide a flexible and extensible content container with multiple variants and options.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full lg:w-1/3 p-3.5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <img class="rounded-t-md" src="{{ asset('images/slides/slide-a.jpg') }}" alt="">
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Card with stretched link</h5>
                            <p class="text-sm text-slate-600 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Go somewhere</a>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full lg:w-1/3 p-3.5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Card title</h5>
                            <h5 class="text-base leading-tighter font-bold font-heading text-slate-500 mb-3 -mt-1.5">Card subtitle</h5>
                            <p class="text-sm text-slate-600 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <ul class="flex space-x-5">
                                <li><a href="#" class="text-sm text-primary-600 hover:text-primary-700">Card link</a></li>
                                <li><a href="#" class="text-sm text-primary-600 hover:text-primary-700">Another link</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Header and footer</h5>
            <p class="text-sm leading-6 text-slate-400">Add an optional header and/or footer within a card.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full lg:w-1/3 p-3.5">
                    <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-t-md border-b border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900">
                            <h6 class="text-sm text-slate-600 dark:text-slate-400">Featured Title</h6>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Special title treatment</h5>
                            <p class="text-sm text-slate-600 mb-4">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Go somewhere</a>
                        </div>
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-b-md border-t border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900">
                            <div class="text-xs text-slate-400">2 days ago</div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Card Styles</h5>
            <p class="text-sm leading-6 text-slate-400">Cards include various options for customizing their backgrounds, borders, and color.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="border rounded-md bg-primary-600 border-primary-600">
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-t-md bg-primary-700 bg-opacity-40">
                            <h6 class="text-sm text-white">Header</h6>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Primary card title</h5>
                            <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="border rounded-md bg-gray-600 border-gray-600">
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-t-md bg-gray-700 bg-opacity-40">
                            <h6 class="text-sm text-white">Header</h6>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Dark card title</h5>
                            <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="border rounded-md bg-red-600 border-red-600">
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-t-md bg-red-700 bg-opacity-40">
                            <h6 class="text-sm text-white">Header</h6>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Danger card title</h5>
                            <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="border rounded-md bg-green-600 border-green-600">
                        <div class="px-5 sm:px-6 py-3 sm:py-4 rounded-t-md bg-green-700 bg-opacity-40">
                            <h6 class="text-sm text-white">Header</h6>
                        </div>
                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Success card title</h5>
                            <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

</div>
@endsection