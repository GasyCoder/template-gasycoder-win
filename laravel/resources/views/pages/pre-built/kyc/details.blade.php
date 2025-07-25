@extends('layouts.main', ['title'=> 'KYC Details'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">
            KYCs / <strong class="text-primary-600 text-2xl font-normal">Abu Bin Ishtiyak</strong>
        </h3>
        <ul class="flex flex-wrap gap-x-4 gap-y-1 text-slate-400">
            <li>Application ID: <span class="text-slate-600 dark:text-slate-400">KID000844</span></li>
            <li>Submited At: <span class="text-slate-600 dark:text-slate-400">18 Dec, 2019 01:02 PM</span></li>
        </ul>
    </div>
    <div>
        <a href="{{route('kyc.list')}}" class="relative hidden sm:inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em><span class="ms-3">Back</span>
        </a>
        <a href="{{route('kyc.list')}}" class="relative inline-flex sm:hidden items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-arrow-left"></em>
        </a>
    </div>
</div><!-- block head -->

<div class="grid grid-cols-12 gap-7">
    <div class="col-span-12 lg:col-span-5">
        <div class="pb-5">
            <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Applicantion Info</h5>
            <p class="text-slate-600 dark:text-slate-400">Submission date, approve date, status etc.</p>
            
        </div>
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="m-0 p-0 list-none">
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900 [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Submitted By</div>
                        <div class="text-slate-600 dark:text-slate-300">UD01489</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Submitted At</div>
                        <div class="text-slate-600 dark:text-slate-300">18 Dec, 2019 01:02 PM</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Status</div>
                        <div class="text-slate-600">
                            <span class="relative inline-flex items-center text-center align-middle text-xs font-semibold leading-4.5 rounded px-3 py-1.5 tracking-wide border border-green-300 dark:border-green-800 text-green-600 bg-green-100 dark:bg-green-950 transition-all duration-300">Approved</span>
                        </div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Last Checked</div>
                        <div class="text-slate-600">
                            <div class="flex items-center gap-3">
                                <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-orange-100 dark:bg-orange-950 text-orange-600 h-10 w-10 rounded-full font-medium">
                                    <span>AB</span>
                                </div>
                                <div class="font-bold">
                                    <span class="text-xs dark:text-white">Saiful Islam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Last Checked At</div>
                        <div class="text-slate-600 dark:text-slate-300">19 Dec, 2019 05:26 AM</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="pb-5 pt-10">
            <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Uploaded Documents</h5>
            <p class="text-slate-600 dark:text-slate-400">Here is user uploaded documents.</p>
        </div>
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="m-0 p-0 list-none">
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Document Type</div>
                        <div class="text-slate-600 dark:text-slate-300">National ID Card</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Front Side</div>
                        <div class="text-slate-600 dark:text-slate-300">National ID Card</div>
                    </div>
                </li>   
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Back Side</div>
                        <div class="text-slate-600 dark:text-slate-300">National ID Card</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Proof/Selfie</div>
                        <div class="text-slate-600 dark:text-slate-300">National ID Card</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-span-12 lg:col-span-7">
        <div class="pb-5">
            <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Applicant Information</h5>
            <p class="text-slate-600 dark:text-slate-400">Basic info, like name, phone, address, country etc.</p>
        </div>
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="m-0 p-0 list-none">
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">First Name</div>
                        <div class="text-slate-600 dark:text-slate-300">Abu Bin</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Last Name</div>
                        <div class="text-slate-600 dark:text-slate-300">Ishtiyak</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Email Address</div>
                        <div class="text-slate-600 dark:text-slate-300">info@softnio.com</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Phone Number</div>
                        <div class="text-slate-400 text-soft"><em>Not available</em>
                        </div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Date of Birth</div>
                        <div class="text-slate-600 dark:text-slate-300">28 Oct, 2015</div> 
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Full Address</div>
                        <div class="text-slate-600 dark:text-slate-300">6516, Eldoret, Uasin Gishu, 30100</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Country of Residence</div>
                        <div class="text-slate-600 dark:text-slate-300">Kenya</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Full Address</div>
                        <div class="text-slate-600 dark:text-slate-300">6516, Eldoret, Uasin Gishu, 30100</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Wallet Type</div>
                        <div class="text-slate-600 dark:text-slate-300">Bitcoin</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Wallet Address</div>
                        <div class="text-slate-600 text-break dark:text-slate-300">1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX</div>
                    </div>
                </li>
                <li class="[&>*]:border-b dark:[&>*]:border-gray-900  [&>*]:last:border-b-0 transition-all duration-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 py-3 px-5 items-center">
                        <div class="text-slate-400">Telegram</div>
                        <div class="text-slate-600 dark:text-slate-300"><span>@tokenlite</span> 
                            <a href="https://t.me/tokenlite" target="_blank"><em class="icon ni ni-telegram"></em>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection