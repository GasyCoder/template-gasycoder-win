@extends('layouts.full-screen', ['title'=> 'Reset'])
@section('content')
<div class="relative flex min-h-screen">
    <div class="relative flex flex-col min-h-full bg-white dark:bg-gray-950 w-full lg:w-[45%] flex-shrink-0">
        <div class="absolute lg:hidden top-0 end-0 p-5 sm:p-11 z-10">
            <button data-target="#pageAside" class="class-toggle *:pointer-events-none relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 hover:dark:bg-gray-800 hover:text-white hover:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                <em class="text-xl ni ni-info"></em>
            </button>
        </div>

        <div class="m-auto w-full max-w-[420px] p-5 2xl:me-[90px]">
            <div class="relative flex flex-shrink-0 pb-11">
                <a href="{{ url('/') }}" class="relative inline-block transition-opacity duration-300 h-10">
                    <img class="h-full opacity-0 dark:opacity-100" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                    <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo">
                </a>
            </div>
            <div class="pb-5">
                <h5 class="text-xl font-heading font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Reset password</h5>
                <p class="text-sm leading-6 text-slate-400">If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
            </div>
            <form action="{{ route('auths.success') }}">
                <div class="relative mb-5 last:mb-0">
                    <label class="flex justify-between items-center text-sm font-medium text-slate-700 dark:text-white mb-2" for="emailAddress">
                        <span>Email </span>
                        <a href="#" class="inline-flex text-xs leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600">Need Help?</a>
                    </label>
                    <div class="relative">
                        <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-2.5 h-11 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded-md transition-all" id="emailAddress" placeholder="Enter your email address" autocomplete="off">
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <button class="relative w-full flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Send Reset Link</button>
                </div>
            </form>
            <div class="pt-6"> 
                <a class="text-primary-500 hover:text-primary-600 font-medium transition-all duration-300" href="{{ route('auths.login') }}">Return to login</a>
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
    <div id="pageAside" class="peer min-w-[260px] max-w-[calc(100%-2.5rem)] flex flex-col w-full min-h-screen bg-gray-50 dark:bg-gray-900 flex-shrink flex-grow fixed lg:static top-0 end-0 z-[999] transition-transform duration-500 lg:transition-none  translate-x-full rtl:-translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none">
        <div class="m-auto w-full max-w-[550px] p-4 sm:p-11">
            <div class="swiper js-slider" data-loop="true">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-center">
                            <img src="{{ asset('images/slides/promo-a.png') }}" srcset="{{ asset('images/slides/promo-a2x.png 2x') }}" alt="">
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-center">
                            <img src="{{ asset('images/slides/promo-b.png') }}" srcset="{{ asset('images/slides/promo-b2x.png 2x') }}" alt="">
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-center">
                            <img src="{{ asset('images/slides/promo-c.png') }}" srcset="{{ asset('images/slides/promo-c2x.png 2x') }}" alt="">
                            <div class="py-6 sm:p-11">
                                <h4 class="text-xl lg:text-2xl font-heading font-bold -tracking-tight text-slate-700 dark:text-white leading-tighter mb-2">DashWind</h4>
                                <p>You can start to create your products easily with its user-friendly design &amp; most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination flex justify-center gap-1 !relative pt-6 [&>*]:bg-gray-300 [&>*]:opacity-100 [&>.swiper-pagination-bullet-active]:bg-slate-400"></div>
            </div>
        </div>
    </div>
    <div data-target="#pageAside" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>
</div>
@endsection