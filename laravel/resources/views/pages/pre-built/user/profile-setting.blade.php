@extends('layouts.main', ['title'=> 'Profile - Setting'])
@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        @include ('pages.pre-built.user.partials.profile-sidebar')
        <div class="flex-grow">
            <div class="p-5 sm:p-10">
                <div class="flex justify-between items-center pb-6 sm:pb-10 gap-x-6">
                    <div class="relative">
                        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Security Settings</h5>
                        <p class="text-slate-600 dark:text-slate-400">These settings are helps you keep your account secure.</p>
                    </div>
                    <div class="lg:hidden">
                        <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl ni ni-menu-alt-r"></em>
                        </button>
                    </div>
                </div>
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="p-5 sm:p-6 border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                            <div>
                                <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">Save my Activity Logs</h6>
                                <p class="text-slate-600 text-sm">You can save your all activity logs including unusual activity detected.</p>
                            </div>
                            <div>
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="checkUnusualActivity" checked>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                            <div>
                                <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">Change Password</h6>
                                <p class="text-slate-600 text-sm">Set a unique password to protect your account.</p>
                            </div>
                            <div>
                                <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-3">
                                    <li class="md:order-2">
                                        <a href="#" class="relative inline-flex items-center text-center whitespace-nowrap align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Change Password</a>
                                    </li>
                                    <li>
                                        <em class="text-xs text-slate-400 whitespace-nowrap">Last changed: <span class="text-slate-600 dark:text-slate-400">Oct 2, 2019</span></em>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                            <div>
                                <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">2 Factor Auth</h6>
                                <p class="text-slate-600 text-sm">Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
                            </div>
                            <div>
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Disable</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection