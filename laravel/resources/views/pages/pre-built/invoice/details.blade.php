@extends('layouts.main', ['title'=> 'Invoice Details'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            Invoice <strong class="text-primary-600 text-2xl font-normal">#746F5K2</strong>
        </h3>
        <p class="text-slate-400">Created At:  <span class="text-slate-600 dark:text-slate-400">18 Dec, 2019 01:02 PM</span></p>
    </div>
    <div>
        <a href="{{ route('invoice.list') }}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{ route('invoice.list') }}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->
<div class="relative border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="absolute top-5 end-5">
        <a href="{{ route('invoice.print') }}" target="_blank" class="relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md h-11 w-11 tracking-wide border border-primary-300 dark:border-primary-800 text-primary-600 hover:bg-primary-600 hover:text-white active:bg-primary-700 transition-all duration-300">
            <em class="text-xl leading-4.5 ni ni-printer-fill"></em>
        </a>
    </div>
    <div class="p-5 md:p-12">
        <div class="flex justify-center mb-6">
            <div class="relative inline-block transition-opacity duration-300 h-9">
                <img class="h-full opacity-0 dark:opacity-100" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="logo">
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between gap-6 pb-6">
            <div class="relative">
                <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Invoice To</span>
                <div class="invoice-contact-info">
                    <h4 class="text-2xl text-slate-700 dark:text-white font-heading font-bold tracking-tight mb-4">Gregory Ander son</h4>
                    <ul class="flex flex-col gap-4">
                        <li class="flex gap-2 text-slate-400">
                            <em class="text-base/5 text-primary-600 ni ni-map-pin-fill"></em>
                            <span class="text-sm">House #65, 4328 Marion Street<br>Newbury, VT 05051</span>
                        </li>
                        <li class="flex gap-2 text-slate-400">
                            <em class="text-base/5 text-primary-600 ni ni-call-fill"></em>
                            <span class="text-sm">+012 8764 556</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-[210px]">
                <h3 class="text-3xl text-primary-600 font-heading font-bold uppercase tracking-tight mb-2">Invoice</h3>
                <ul class="flex flex-col gap-2">
                    <li>
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight inline-block min-w-[90px]">Invoice ID</span>:<span class="font-medium text-sm text-slate-600 ms-3">66K5W3</span>
                    </li>
                    <li>
                        <span class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight inline-block min-w-[90px]">Date</span>:<span class="font-medium text-sm text-slate-600 ms-3">26 Jan, 2020</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="border-collapse w-full border-gray-300 dark:border-gray-900"> 
                <thead>
                    <tr>
                        <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                            <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Item Id</span>
                        </th>
                        <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                            <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Description</span>
                        </th>
                        <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                            <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Price</span>
                        </th>
                        <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-start">
                            <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Qty</span>
                        </th>
                        <th class="py-1 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-primary-600 uppercase font-bold text-xs leading-tight">Amount</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">24108054</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">DashWind - Conceptual App Dashboard - Regular License</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$40.00</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">5</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$200.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">24108054</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">6 months premium support</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$25.00</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$25.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">23604094</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">Invest Management Dashboard - Regular License</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$131.25</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$131.25</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">23604094</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">6 months premium support</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$78.75</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6 border-b border-gray-300 dark:border-gray-900">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">1</span>
                        </td>
                        <td class="py-2 px-2 first:ps-6 last:pe-6  border-b border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5">$78.75</span>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="pt-4">
                    <tr>
                        <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6" colspan="2"></td>
                        <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6" colspan="2">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">Subtotal</span>
                        </td>
                        <td class="pt-6 pb-1 px-2 first:ps-6 last:pe-6 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">$435.00</span>    
                        </td>
                    </tr>
                    <tr>
                        <td class="py-1 px-2 first:ps-6 last:pe-6" colspan="2"></td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6" colspan="2">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">Processing fee</span>
                        </td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">$10.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-1 px-2 first:ps-6 last:pe-6" colspan="2"></td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6" colspan="2">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">TAX</span>
                        </td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap">$43.50</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-1 px-2 first:ps-6 last:pe-6" colspan="2"></td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6 border-t border-gray-300 dark:border-gray-900" colspan="2">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">Grand Total</span>
                        </td>
                        <td class="py-1 px-2 first:ps-6 last:pe-6 border-t border-gray-300 dark:border-gray-900 text-end">
                            <span class="text-slate-600 dark:text-slate-400 text-sm/5 whitespace-nowrap font-medium">$478.50</span>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="italic text-xs text-slate-400 px-0.5"> Invoice was created on a computer and is valid without the signature and seal. </div>
        </div>
    </div>
</div>
@endsection