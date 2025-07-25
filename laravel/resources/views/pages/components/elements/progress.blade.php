@extends('layouts.main', ['title'=> 'Progress'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Progress</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples for using custom progress bars featuring support for stacked bars, animated backgrounds, and text labels. Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Here is some examples for progess bar..</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="5%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="25%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="50%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="75%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="100%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Different Sizes</h5>
            <p class="text-sm leading-6 text-slate-400">You can change progress thikness.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-1 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="70%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="75%"></div>
                </div>
                <div class="flex h-4 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="80%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">With Label</h5>
            <p class="text-sm leading-6 text-slate-400">Add labels to your progress bars by placing text within the progress bar.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-4 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-center text-white bg-primary-600" data-progress="50%">
                        50%
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Set Background</h5>
            <p class="text-sm leading-6 text-slate-400">Use background utility classes to change the appearance of individual progress bars.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-green-600" data-progress="25%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-cyan-600" data-progress="50%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-yellow-600" data-progress="75%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-red-600" data-progress="100%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Multiple Bars</h5>
            <p class="text-sm leading-6 text-slate-400">Include multiple progress bars in a progress component if you need.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600" data-progress="15%"></div>
                    <div class="text-xs text-white bg-green-600" data-progress="30%"></div>
                    <div class="text-xs text-white bg-yellow-600" data-progress="20%"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Striped Bar</h5>
            <p class="text-sm leading-6 text-slate-400">Use background utility classes to change the appearance of individual progress bars.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-green-600 bg-gradient-to-br stripe bg-[length:theme(spacing.2)_theme(spacing.2)]" data-progress="25%" ></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-cyan-600 stripe bg-[length:theme(spacing.2)_theme(spacing.2)]" data-progress="50%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-yellow-600 stripe bg-[length:theme(spacing.2)_theme(spacing.2)]" data-progress="75%"></div>
                </div>
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-red-600 stripe bg-[length:theme(spacing.2)_theme(spacing.2)]" data-progress="100%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Animated Stripes</h5>
            <p class="text-sm leading-6 text-slate-400">The striped gradient can also be animated.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col space-y-6">
                <div class="flex h-2 rounded-sm bg-slate-50 dark:bg-slate-900 overflow-hidden">
                    <div class="text-xs text-white bg-primary-600 stripe bg-[length:theme(spacing.2)_theme(spacing.2)] animate-[progressBarStripes_1s_linear_infinite]" data-progress="75%"></div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection