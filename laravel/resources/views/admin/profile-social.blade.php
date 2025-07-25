@extends('layouts.main', ['title'=> 'Admin Social Account'])

@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        @include ('admin.partials.profile-sidebar')
        <div class="flex-grow">
            <div class="p-5 sm:p-10">
                <div class="flex justify-between items-center pb-4 gap-x-6">
                    <div class="relative">
                        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Connected with Social Account</h5>
                        <p class="text-slate-600 dark:text-slate-400">You can connect with your social account such as facebook, google etc to make easier to login into account.</p>
                    </div>
                    <div class="lg:hidden">
                        <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl ni ni-menu-alt-r"></em>
                        </button>
                    </div>
                </div>
                <h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4">Connect to Facebook</h6>
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                            <div class="flex items-center gap-4 sm:max-w-lg">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-[#3b5998] h-11 w-11 rounded-full font-medium">
                                    <em class="text-2xl ni ni-facebook-f"></em>
                                </div>
                                <div>
                                    <p class="text-slate-600 dark:text-slate-400">You have successfully connected with your facebook account, you can easily log in using your account too.</p>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-heading whitespace-nowrap font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-red-600 text-white bg-red-600 hover:bg-red-700 active:bg-red-800 transition-all duration-300">Revoke Access</a>
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
                <h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4 mt-8">Connect to Google</h6>
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="p-5 sm:p-6">
                        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                            <div class="flex items-center gap-4 sm:max-w-lg">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-[#de5246] h-11 w-11 rounded-full font-medium">
                                    <em class="text-2xl ni ni-google"></em>
                                </div>
                                <div>
                                    <p class="text-slate-600 dark:text-slate-400">You can connect with your google account. <em class="block text-slate-400">Not connected yet</em></p>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="relative inline-flex items-center text-center align-middle text-base font-heading whitespace-nowrap font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">Connect</a>
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
                <div class="mt-10">
                    <h6 class="text-base font-heading font-bold">Import Contacts <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700 ms-auto">Import from Google</a></h6>
                    <p class="text-sm text-slate-600 dark:text-slate-400">You have not imported contacts from your mobile phone.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
