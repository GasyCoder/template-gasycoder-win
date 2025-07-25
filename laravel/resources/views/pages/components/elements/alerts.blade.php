@extends('layouts.main', ['title'=> 'Alerts'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Alerts Styles</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Examples - Default Style</h5>
            <p class="text-sm leading-6 text-slate-400">Here is some basic example for designed alert components</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-1 gap-6">
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-primary-300 dark:border-primary-900 bg-primary-100 dark:bg-primary-950 text-primary-800 dark:text-primary-600">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-slate-200">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-green-300 dark:border-green-800 bg-green-100 dark:bg-green-950 text-green-800 dark:text-green-600">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-check-circle"></em> 
                    <p class="text-sm">
                        <strong>Thanks for your deposit</strong>. Your account balance has been updated accordingly.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-cyan-300 dark:border-cyan-800 bg-cyan-100 dark:bg-cyan-950 text-cyan-800 dark:text-cyan-600">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-yellow-300 dark:border-yellow-800 bg-yellow-100 dark:bg-yellow-950 text-yellow-800 dark:text-yellow-600">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a class="font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current" href="#">credit card</a> for make deposit.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-red-300 dark:border-red-800 bg-red-100 dark:bg-red-950 text-red-800 dark:text-red-600">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-cross-circle"></em> 
                    <p class="text-sm">
                        <strong>Update failed! </strong>. There is some technical issues.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a class="font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current" href="#">credit card</a> for make deposit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="grid grid-cols-1 gap-6">
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-primary-600 bg-primary-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-gray-600 bg-gray-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-green-600 bg-green-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-check-circle"></em> 
                    <p class="text-sm">
                        <strong>Thanks for your deposit</strong>. Your account balance has been updated accordingly.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-cyan-600 bg-cyan-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        <strong>Order has been placed</strong>. Your will be redirect for make your payment.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-yellow-600 bg-yellow-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a class="font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current" href="#">credit card</a> for make deposit.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-red-600 bg-red-600 text-white">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-cross-circle"></em> 
                    <p class="text-sm">
                        <strong>Update failed! </strong>. There is some technical issues.
                    </p>
                </div>
                <div class="py-4 pe-5 ps-12 relative rounded-md border border-gray-100 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-slate-300">
                    <em class="absolute text-xl leading-none w-8 top-4 start-5 ni ni-alert-circle"></em> 
                    <p class="text-sm">
                        Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a class="font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current" href="#">credit card</a> for make deposit.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Examples - Style Pro</h5>
            <p class="text-sm leading-6 text-slate-400">Here is some pro example styled alert components</p>
        </div>

        <div class="grid grid-cols-1 gap-6">
            <div class="py-4 px-5 border-s-4 border-primary-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Your Order Placed</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Your order has been successfully placed for diposit. Your will be redirect for make your payment. </p>
            </div>
            <div class="py-4 px-5 border-s-4 border-gray-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Your Order Placed</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Your order has been successfully placed for diposit. Your will be redirect for make your payment. </p>
            </div>
            <div class="py-4 px-5 border-s-4 border-green-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Payment Successfully Made</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Thanks for your deposit. Now you can see your transaction history. Your account has been updated accordingly. </p>
            </div>
            <div class="py-4 px-5 border-s-4 border-cyan-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Your Order Placed</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Your order has been successfully placed for diposit. Your will be redirect for make your payment. </p>
            </div>
            <div class="py-4 px-5 border-s-4 border-yellow-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Payment Information</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Sorry! your credit card already expired. Please enter a valid &amp; up-to-date credit card for make deposit. </p>
            </div>
            <div class="py-4 px-5 border-s-4 border-red-600 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Order Cancelled</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Your order has been cancelled due to received your payment.</p>
            </div>
            <div class="py-4 px-5 border-s-4 border-gray-400 shadow-md rounded-md bg-white dark:bg-gray-950">
                <h6 class="text-base font-bold -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Your Order Placed</h6>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Your order has been successfully placed for diposit. Your will be redirect for make your payment. </p>
            </div>
        </div>
    </div>

</div>
@endsection