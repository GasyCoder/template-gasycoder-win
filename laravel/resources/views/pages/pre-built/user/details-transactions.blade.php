@extends('layouts.main', ['title'=> 'User Transactions'])

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
                    <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Recent Orders</h5>
                    <p class="text-slate-600 dark:text-slate-400">Recent order made by user.</p>
                </div>
            </div>

            <div class="p-0">
                <div class="table w-full text-sm text-slate-400">
                    <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                        <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Order No.</span></div>
                        <div class="relative hidden sm:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Customer</span></div>
                        <div class="relative hidden md:table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Date</span></div>
                        <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Amount</span></div>
                        <div class="relative table-cell align-middle py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span class="hidden xs:inline">Status</span></div>
                    </div>
                    <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span>
                                <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95954</a>
                            </span>
                        </div>
                        <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-purple-500 bg-purple-100 dark:bg-purple-950 h-8 w-8 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Abu Bin Ishityak</div>
                            </div>
                        </div>
                        <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs">02/11/2020</span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs font-medium text-slate-600 dark:text-white">4,596.75 <span class="font-normal text-slate-500">USD</span></span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                        </div>
                    </div><!-- row -->
                    <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span>
                                <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95850</a>
                            </span>
                        </div>
                        <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-blue-600 bg-blue-100 dark:bg-blue-950 h-8 w-8 rounded-full font-medium">
                                    <span>DE</span>
                                </div>
                                <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Desiree Edwards</div>
                            </div>
                        </div>
                        <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs">02/02/2020</span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs font-medium text-slate-600 dark:text-white">596.75 <span class="font-normal text-slate-500">USD</span></span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-red-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Canceled</span>
                        </div>
                    </div><!-- row -->
                    <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span>
                                <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95812</a>
                            </span>
                        </div>
                        <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-full overflow-hidden">
                                    <img src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                                </div>
                                <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Blanca Schultz</div>
                            </div>
                        </div>
                        <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs">02/01/2020</span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs font-medium text-slate-600 dark:text-white">199.99 <span class="font-normal text-slate-500">USD</span></span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                        </div>
                    </div><!-- row -->
                    <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span>
                                <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95256</a>
                            </span>
                        </div>
                        <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-indigo-600 bg-indigo-100 dark:bg-indigo-950 h-8 w-8 rounded-full font-medium">
                                    <span>NL</span>
                                </div>
                                <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Naomi Lawrence</div>
                            </div>
                        </div>
                        <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs">01/29/2020</span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs font-medium text-slate-600 dark:text-white">1099.99 <span class="font-normal text-slate-500">USD</span></span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-green-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Paid</span>
                        </div>
                    </div><!-- row -->
                    <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span>
                                <a class="inline-flex text-sm leading-snug whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-500 hover:text-primary-600" href="">#95135</a>
                            </span>
                        </div>
                        <div class="relative hidden sm:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <div class="flex items-center">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-green-600 bg-green-100 dark:bg-green-950 h-8 w-8 rounded-full font-medium">
                                    <span>CH</span>
                                </div>
                                <div class="text-slate-600 dark:text-white text-xs font-bold flex items-center ms-3">Cassandra Hogan</div>
                            </div>
                        </div>
                        <div class="relative hidden md:table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs">01/29/2020</span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="text-xs font-medium text-slate-600 dark:text-white">1099.99 <span class="font-normal text-slate-500">USD</span></span>
                        </div>
                        <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                            <span class="relative inline-flex ps-3 text-xs font-medium leading-4.5 align-middle tracking-snug whitespace-nowrap text-yellow-600 max-xs:w-0 max-xs:overflow-hidden before:absolute before:start-0  before:top-1/2  before:-translate-y-1/2  before:rounded-full  before:h-1.5  before:w-1.5  before:bg-current">Due</span>
                        </div>
                    </div><!-- row -->
                </div>
            </div>

        </div>

        @include ('pages.pre-built.user.partials.details-aside')

    </div>
</div>
@endsection
