@extends('layouts.main', ['title'=> 'User Notification'])

@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Users / <strong class="text-primary-600 text-2xl font-normal">{{ data_get($user, 'name') }}</strong>
        </h3>
        <ul class="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
            <li>User ID: <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'id') }}</span></li>
            <li>Last Login: <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'lastLogin') }}</span></li>
        </ul>
    </div>
    <div>
        <a href="{{route('user.list')}}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{route('user.list')}}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        <div class="flex-grow">
            
            @include ('pages.pre-built.user.partials.details-nav')

            <div class="p-5 sm:p-6">
                <div class="pb-0">
                    <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Notifications</h5>
                    <p class="text-slate-600 dark:text-slate-400">Get only notification what have enabled by user.</p>
                </div>
            </div>
            <div class="flex flex-col border-t border-gray-200 dark:border-gray-800">
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                        <em class="text-lg leading-none ni ni-curve-down-right"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">You have requested to <span>Withdrawal</span>.</div>
                        <div class="text-xs text-slate-400">1 hrs ago</div>
                    </div>
                </div>
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-green-100 dark:bg-green-950 text-green-600">
                        <em class="text-lg leading-none ni ni-curve-down-left"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">Your Deposit Order is placed.</div>
                        <div class="text-xs text-slate-400">2 hrs ago</div>
                    </div>
                </div>
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-blue-50 dark:bg-blue-950 text-blue-600">
                        <em class="text-lg leading-none ni ni-lock-alt"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">You have successfully changed your password.</div>
                        <div class="text-xs text-slate-400">2 days ago</div>
                    </div>
                </div>
                <div class="flex items-center p-5 border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                    <div class="flex-shrink-0 me-3 h-9 w-9 inline-flex items-center justify-center rounded-full bg-yellow-100 dark:bg-yellow-950 text-yellow-600">
                        <em class="text-lg leading-none ni ni-curve-down-right"></em>
                    </div>
                    <div>
                        <div class="text-sm text-slate-600 dark:text-slate-300">Your <span>Withdrawal</span> has been processed.</div>
                        <div class="text-xs text-slate-400">1 month ago</div>
                    </div>
                </div>
            </div>
        </div>

        @include ('pages.pre-built.user.partials.details-aside')

    </div>
</div>
@endsection