@extends('layouts.main', ['title'=> 'Admin Profile Notification'])
@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        @include ('admin.partials.profile-sidebar')
        <div class="flex-grow">
            <div class="p-5 sm:p-10">
                <div class="flex justify-between items-center  pb-6 sm:pb-10 gap-x-6">
                    <div class="relative">
                        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Notification Settings</h5>
                        <p class="text-slate-600 dark:text-slate-400">You will get only notification what have enabled.</p>
                    </div>
                    <div class="lg:hidden">
                        <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl ni ni-menu-alt-r"></em>
                        </button>
                    </div>
                </div>
                <div class="pb-4">
                    <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">Security Alerts</h6>
                    <p class="text-slate-600 text-sm">You will get only those email notification what you want.</p>
                </div>
                <ul class="flex flex-col gap-4">
                    <li>
                        <div class="flex">
                            <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="checkUnusualActivity" checked>
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="checkUnusualActivity">Email me whenever encounter unusual activity</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex">
                            <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="checkNewSignIn">
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="checkNewSignIn">Email me if new browser is used to sign in</label>
                        </div>
                    </li>
                </ul>
                <div class="pb-4 pt-6 sm:pt-10">
                    <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">News</h6>
                    <p class="text-slate-600 text-sm">You will get only those email notification what you want.</p>
                </div>
                <ul class="flex flex-col gap-4">
                    <li>
                        <div class="flex">
                            <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="notifyLatestNews" checked>
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="notifyLatestNews">Notify me by email about sales and latest news</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex">
                            <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="notifyFeatureUpdate">
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="notifyFeatureUpdate">Email me about new features and updates</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex">
                            <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="notifyAccountTips" checked>
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="notifyAccountTips">Email me about tips on using account</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection