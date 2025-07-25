@extends('layouts.full-screen', ['title'=> 'Login'])
@section('content')
<div class="relative flex min-h-screen">
    <div class="relative flex flex-col min-h-full bg-white dark:bg-gray-950 w-full flex-shrink-0">
        <div class="m-auto w-full max-w-[420px] xs:max-w-[520px] p-5">
            <div class="relative flex justify-center flex-shrink-0 pb-6">
                <a href="{{ url('/') }}" class="relative inline-block transition-opacity duration-300 h-10">
                    <img class="h-full opacity-0 dark:opacity-100" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo">
                </a>
            </div>
            <div class="border border-gray-300 dark:border-gray-900 rounded p-5 sm:p-6 md:p-10">
                <div class="pb-5">
                    <h5 class="text-xl font-heading font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Sign-In</h5>
                    <p class="text-sm leading-6 text-slate-400">Access the DashWind panel using your email and passcode.</p>
                </div>
                <form action="{{ url('/') }}">
                    <div class="relative mb-5 last:mb-0">
                        <label class="flex justify-between items-center text-sm font-medium text-slate-700 dark:text-white mb-2" for="emailAddress">
                            <span>Email or Username </span>
                        </label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-2.5 h-11 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-md transition-all" id="emailAddress" placeholder="Enter your email address or username" autocomplete="off">
                        </div>
                    </div>
                    <div class="relative mb-5 last:mb-0">
                        <label class="flex justify-between items-center text-sm font-medium text-slate-700 dark:text-white mb-2" for="password">
                            <span>Passcode </span>
                            <a href="{{ route('auths.reset-v2') }}" class="inline-flex text-xs leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">Forgot Code?</a>
                        </label>
                        <div class="relative">
                            <a tabindex="-1" href="#password" class="absolute h-11 w-11 top-0 end-0 flex items-center justify-center js-password-toggle group/password">
                                <em class="group-[.is-shown]/password:hidden text-slate-400 text-base leading-none ni ni-eye"></em>
                                <em class="hidden group-[.is-shown]/password:block text-slate-400 text-base leading-none ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="block w-full box-border text-sm leading-4.5 px-4 py-2.5 h-11 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-md transition-all" id="password" placeholder="Enter your passcode" autocomplete="off">
                        </div>
                    </div>
                    <div class="relative mb-5 last:mb-0">
                        <button class="relative w-full flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Sign In</button>
                    </div>
                </form>
                <div class="pt-6"> 
                    New on our platform? 
                    <a class="text-primary-500 hover:text-primary-600 transition-all duration-300" href="{{ route('auths.register-v2') }}">Create an account</a>
                </div>
                <div class="text-center pt-6 pb-4">
                    <h6 class="text-slate-300 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight px-1.5 inline-block relative before:absolute before:h-px before:w-5 before:bg-slate-300 before:top-1/2 before:-translate-y-1/2 before:end-full after:absolute after:h-px after:w-5 after:bg-slate-300 after:top-1/2 after:-translate-y-1/2 after:start-full">Or</h6>
                </div>
                <ul class="flex flex-wrap justify-center gap-x-6">
                    <li>
                        <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 px-4 py-3" href="#">Facebook</a>
                    </li>
                    <li>
                        <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 px-4 py-3" href="#">Google</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-200 dark:border-gray-800 py-6 px-5.5">
            <div class="container max-w-7xl">
                <div class="flex flex-wrap -m-2">
                    <div class="w-full lg:w-1/2 p-2 lg:order-last">
                        <ul class="flex flex-wrap justify-center lg:justify-end -m-3 relative">
                            <li>
                                <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" href="{{ route('terms-policy') }}">Terms &amp; Condition</a>
                            </li>
                            <li>
                                <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" href="{{ route('terms-policy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" href="{{ route('faqs') }}">Help</a>
                            </li>
                            <li class="relative dropdown">
                                <a data-offset="0,0" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle peer *:pointer-events-none inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" href="#"><span>English</span><em class="ms-1 ni ni-chevron-up"></em></a>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[140px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                    <ul>
                                        <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                            <a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <img src="{{ asset('images/flags/english.png') }}" alt="" class="w-6 me-3">
                                                <span>English</span>
                                            </a>
                                        </li>
                                        <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                            <a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <img src="{{ asset('images/flags/spanish.png') }}" alt="" class="w-6 me-3">
                                                <span>Español</span>
                                            </a>
                                        </li>
                                        <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                            <a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <img src="{{ asset('images/flags/french.png') }}" alt="" class="w-6 me-3">
                                                <span>Français</span>
                                            </a>
                                        </li>
                                        <li class="first:rounded-t-md last:rounded-b-md first:border-t-0 border-t border-gray-200 dark:border-gray-800">
                                            <a  href="#" class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                                <img src="{{ asset('images/flags/turkey.png') }}" alt="" class="w-6 me-3">
                                                <span>Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2 p-2">
                        <p class="text-slate-400 text-center lg:text-start text-sm/4">&copy; {{ date('Y') }} {{config('app.name')}}. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection