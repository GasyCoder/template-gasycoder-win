@extends('layouts.full-screen', ['title'=> 'Success'])
@section('content')
<div class="relative flex flex-wrap lg:flex-nowrap min-h-screen">
    <div class="relative flex flex-col min-h-full bg-white dark:bg-gray-950 w-full lg:w-[45%] flex-shrink-0">
        <div class="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
            <div class="relative flex flex-shrink-0 pb-11">
                <a href="{{ url('/') }}" class="relative inline-block transition-opacity duration-300 h-10">
                    <img class="h-full opacity-0 dark:opacity-100" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo">
                </a>
            </div>
            <div class="pb-5">
                <h5 class="text-xl font-heading font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Thank you for submitting form</h5>
                <p class="text-sm leading-6 text-green-600">You can now sign in with your new password</p>
            </div>
        </div>
        <div class="mx-auto w-full max-w-[420px] px-5 pt-7 pb-10 2xl:me-[90px]">
            <ul class="flex flex-wrap -m-3 relative">
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
                    <a data-offset="0,0" data-placement="top-end" data-rtl-placement="top-start" class="dropdown-toggle peer *:pointer-events-none inline-flex text-xs leading-none whitespace-nowrap transition-all duration-300 font-normal font-body text-primary-600 hover:text-primary-700 p-3" href="#"><span>English</span><em class="ms-1 ni ni-chevron-up"></em></a>
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
            <div class="mt-4.5">
                <p>&copy; {{ date('Y') }} {{config('app.name')}}. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <div class="w-full min-h-full flex-shrink flex-grow bg-[linear-gradient(to_right,_#2c3782_calc(60%-150px),_#39469f_calc(60%-150px),_#39469f_60%,_#4856b5_60%,_#4856b5_calc(60%+150px),_#5b6ac6_calc(60%+150px),_#5b6ac6_100%)]"></div>
</div>
@endsection