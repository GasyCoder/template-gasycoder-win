@extends('layouts.main', ['title'=> 'Customer Details'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Customer Details</h3>
        <p class="text-slate-400">An example page for customer details.</p>
    </div>
    <div>
        <a href="{{ route('customer.list') }}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{ route('customer.list') }}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-col items-center text-center p-5 sm:px-6 sm:py-8 border-b border-gray-300 dark:border-gray-900">
                <div class="relative flex-shrink-0 flex items-center justify-center text-3xl text-white bg-primary-600 h-20 w-20 rounded-full font-normal">
                    <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                </div>
                <div class="mt-4">
                    <span class="relative inline-flex rounded-full px-2 border border-gray-100 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-slate-700 dark:text-white text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle uppercase">Platinam</span>
                    <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2 mt-4">Francis Mitcham</h6>
                    <span class="text-sm text-slate-400">info@softnio.com</span>
                </div>
            </div>
            <div class="px-5 py-3 sm:px-6 border-b border-gray-300 dark:border-gray-900">
                <ul class="flex flex-wrap justify-center gap-1.5">
                    <li>
                        <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg ni ni-shield-off"></em>
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg ni ni-mail"></em>
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg ni ni-bookmark"></em>
                        </button>
                    </li>
                    <li>
                        <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-lg text-red-600 ni ni-na"></em>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
                <div class="grid grid-flow-dense grid-cols-12">
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">23</span>
                            <span class="block text-xs leading-5 text-slate-400">Total Order</span>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">20</span>
                            <span class="block text-xs leading-5 text-slate-400">Complete</span>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="text-center">
                            <span class="block text-lg text-slate-600 dark:text-white font-bold">3</span>
                            <span class="block text-xs leading-5 text-slate-400">Progress</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 sm:p-6">
                <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Short Details</h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">User ID:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">UD003054</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">Billing Email:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">billing@softnio.com</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">Billing Address:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">551 Swanston Street, Melbourne
                            <br>Victoria 3053 Australia</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">Language:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">English, France</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">Last Login:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">15 Feb, 2019 01:02 PM</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">KYC Status:</span>
                        <span class="block text-sm font-bold mt-1 text-green-600">Approved</span>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-12">
                        <span class="block text-xs text-slate-400">Register At:</span>
                        <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">Nov 24, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .col -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">In Account </h6>
                <div class="flex items-end -mx-3 mb-6">
                    <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                        <div class="flex flex-col">
                            <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">
                                237.89
                                <span class="text-lg leading-6 font-normal">1,643</span>
                            </div>
                            <div class="text-xs mt-2">Wallet Balance</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                        <span class="text-slate-400 text-base"><em class="ni ni-plus"></em></span>
                        <div class="flex flex-col">
                            <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">1,643.76</div>
                            <div class="text-xs mt-2">Credit Points</div>
                        </div>
                    </div>
                </div>

                <h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4">Recent Orders</h6>
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="table border-collapse w-full border-gray-300 dark:border-gray-900"> 
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                            <div class="table-cell align-middle py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 text-xs">Order ID</span>
                            </div>
                            <div class="hidden sm:table-cell align-middle py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 text-xs">Product Name</span>
                            </div>
                            <div class="hidden 2xl:table-cell align-middle py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 text-xs">Total Price</span>
                            </div>
                            <div class="table-cell align-middle py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 text-xs">Status</span>
                            </div>
                            <div class="table-cell align-middle py-1 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900 text-start">
                                <span class="text-slate-400 text-xs">Delivery</span>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700 ms-auto">#4947</a>
                            </div>
                            <div class="hidden sm:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <div class="flex items-center">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xxs text-white bg-primary-600 h-12 w-12 rounded font-medium">
                                        <img class="rounded" src="{{ asset('images/product/c.png') }}" alt="">
                                    </div>
                                    <span class="ms-4 block text-sm font-medium leading-6 text-slate-700 dark:text-white">
                                        Black Mi Band Smartwatch
                                    </span>
                                </div>
                            </div>
                            <div class="hidden 2xl:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-400">$ 89.49</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm font-medium text-yellow-600">Shipped</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">In 2 days</span>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700 ms-auto">#4948</a>
                            </div>
                            <div class="hidden sm:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <div class="flex items-center">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xxs text-white bg-primary-600 h-12 w-12 rounded font-medium">
                                        <img class="rounded" src="{{ asset('images/product/b.png') }}" alt="">
                                    </div>
                                    <span class="ms-4 block text-sm font-medium leading-6 text-slate-700 dark:text-white">
                                        Purple Smartwatch
                                    </span>
                                </div>
                            </div>
                            <div class="hidden 2xl:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-400">$299.49</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm font-medium text-green-600">Delivered</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">12 Dec, 2020</span>
                            </div>
                        </div><!-- row -->
                        <div class="table-row [&>*]:border-b [&>*]:last:border-b-0 transition-all duration-300 hover:bg-gray-50 hover:dark:bg-gray-1000 group">
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700 ms-auto">#4949</a>
                            </div>
                            <div class="hidden sm:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <div class="flex items-center">
                                    <div class="relative flex-shrink-0 flex items-center justify-center text-xxs text-white bg-primary-600 h-12 w-12 rounded font-medium">
                                        <img class="rounded" src="{{ asset('images/product/a.png') }}" alt="">
                                    </div>
                                    <span class="ms-4 block text-sm font-medium leading-6 text-slate-700 dark:text-white">
                                        Pink Fitness Tracker
                                    </span>
                                </div>
                            </div>
                            <div class="hidden 2xl:table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm text-slate-400">$99.49</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-sm font-medium text-red-600">Canceled</span>
                            </div>
                            <div class="table-cell align-middle py-2 px-2 first:ps-5 last:pe-5 border-gray-300 dark:border-gray-900">
                                <span class="text-xs text-slate-400">Never</span>
                            </div>
                        </div><!-- row -->
                    </div><!-- table -->
                </div><!-- card -->

                <h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4 mt-8">Payment Methods</h6>
                <div class="grid grid-flow-dense grid-cols-12 gap-4">
                    <div class="col-span-12 2xl:col-span-6">
                        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                            <div class="p-5 sm:p-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-primary-600 h-11 w-11 rounded-full font-medium">
                                            <em class="text-2xl ni ni-visa"></em>
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="block text-sm font-heading font-bold leading-6 text-slate-700 dark:text-white">
                                                Visa Card 
                                                <span class="text-slate-400 font-normal ms-1">**** 1955</span> 
                                            </h6>
                                            <span class="block text-xs leading-4 text-slate-400">Expires Nov 2023</span>
                                        </div>
                                    </div>
                                    <ul class="flex flex-nowrap gap-1.5 -me-1.5">
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-edit"></em>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-trash"></em>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-span-12 2xl:col-span-6">
                        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                            <div class="p-5 sm:p-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-indigo-900 h-11 w-11 rounded-full font-medium">
                                            <em class="text-2xl ni ni-american-express"></em>
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="block text-sm font-heading font-bold leading-6 text-slate-700 dark:text-white">
                                                American Express
                                                <span class="text-slate-400 font-normal ms-1">**** 4352</span> 
                                            </h6>
                                            <span class="block text-xs leading-4 text-slate-400">Expires Feb 2024</span>
                                        </div>
                                    </div>
                                    <ul class="flex flex-nowrap gap-1.5 -me-1.5">
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-edit"></em>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-trash"></em>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-span-12 2xl:col-span-6">
                        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                            <div class="p-5 sm:p-6">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-orange-500 h-11 w-11 rounded-full font-medium">
                                            <em class="text-2xl ni ni-mc"></em>
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="block text-sm font-heading font-bold leading-6 text-slate-700 dark:text-white">
                                                Mastercard
                                                <span class="text-slate-400 font-normal ms-1">**** 9478</span> 
                                            </h6>
                                            <span class="block text-xs leading-4 text-red-600">Expired</span>
                                        </div>
                                    </div>
                                    <ul class="flex flex-nowrap gap-1.5 -me-1.5">
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-edit"></em>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                                <em class="text-lg ni ni-trash"></em>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-span-12 2xl:col-span-6">
                        <button class="border border-dashed rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full w-full p-5 sm:p-6">
                            <span class="text-slate-400">
                                Add New Card
                            </span>
                        </button><!-- card -->
                    </div><!-- col -->
                </div><!-- grid -->

                <h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4 mt-8">Connect to Facebook</h6>
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
    </div><!-- col -->
</div><!-- grid -->
@endsection