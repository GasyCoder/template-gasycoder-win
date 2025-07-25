@extends('layouts.main', ['title'=> 'Profile'])
@section('content')
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
    <div class="relative flex">
        @include ('pages.pre-built.user.partials.profile-sidebar')
        <div class="flex-grow">
            <div class="p-5 sm:p-10">
                <div class="flex justify-between items-center pb-6 sm:pb-10 gap-x-6">
                    <div class="relative">
                        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Personal Information</h5>
                        <p class="text-slate-600 dark:text-slate-400">Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
                    <div class="lg:hidden">
                        <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                            <em class="text-xl ni ni-menu-alt-r"></em>
                        </button>
                    </div>
                </div>
                <div class="mb-8 last:mb-0">
                    <div class="py-2 px-5 bg-gray-100 dark:bg-gray-900 rounded">
                        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Basics</h6>
                    </div>
                    <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" data-target="#profile-edit">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Full Name</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'name') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                                <em class="text-base rtl:-scale-x-100 ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>
                    <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" data-target="#profile-edit">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Display Name</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'displayName') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                                <em class="text-base rtl:-scale-x-100 ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>
                    <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Email</span>
                            <span class="text-sm/6 text-slate-600 dark:text-slate-300 block md:w-1/2">{{ data_get($user, 'email') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 text-slate-400 group-hover:text-slate-600">
                                <em class="text-base ni ni-lock-alt"></em>
                            </span>
                        </div>
                    </div>
                    <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" data-target="#profile-edit">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Phone Number</span>
                            <span class="text-sm/6 text-slate-400 dark:text-slate-600 block md:w-1/2">{{ data_get($user, 'phone', 'Not add yet') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                                <em class="text-base rtl:-scale-x-100 ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>
                    <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" data-target="#profile-edit">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Date of Birth</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'dob') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                                <em class="text-base rtl:-scale-x-100 ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>
                    <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" data-target="#profile-edit">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Address</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'address') }},<br>{{ data_get($user, 'state') }}, {{ data_get($user, 'country') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                                <em class="text-base rtl:-scale-x-100 ni ni-forward-ios"></em>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mb-8 last:mb-0">
                    <div class="py-2 px-5 bg-gray-100 dark:bg-gray-900 rounded">
                        <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Preferences</h6>
                    </div>
                    <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Language</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'language') }} ({{ data_get($user, 'country') }})</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change Language</a>
                        </div>
                    </div>
                    <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Date Format</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'dateFormat') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change</a>
                        </div>
                    </div>
                    <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
                        <div class="md:flex md:items-center flex-grow">
                            <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Timezone</span>
                            <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">{{ data_get($user, 'timezone') }}</span>
                        </div>
                        <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                            <a href="#" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
<div id="profile-edit" class="modal group px-4 py-5 fixed inset-0 flex items-center transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] md:w-[720px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <button class="modal-close *:pointer-events-none absolute top-3 end-3 text-slate-500 hover:text-slate-700 dark:text-white">
            <em class="text-xl ni ni-cross"></em>
        </button>
        <div class="px-5 py-6 sm:p-15">
            <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white">Update Profile</h5>
            <ul class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900">
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#personal-info">Personal</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#personal-address">Address</button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div class="tab-panel hidden [&.active]:block active" id="personal-info">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="FullName">Full Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="{{data_get($user,'name')}}" id="FullName" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="DisplayName">Display Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="{{data_get($user,'displayName')}}" id="DisplayName" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="PhoneNumber">Phone Number</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="{{data_get($user,'phone')}}" id="PhoneNumber" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="DateofBirth">Date of Birth</label>
                                <div class="relative">
                                    <input value="{{data_get($user,'dob')}}" placeholder="dd/mm/yyyy" type="text" data-start-view="2" autocomplete="off" id="DateofBirth" class="js-datepicker block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="checkDisplayNmae">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="checkDisplayNmae">Use full name to display</label>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                <li>
                                    <button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Update Profile</button>
                                </li>
                                <li>
                                    <button class="modal-close *:pointer-events-none inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                </li>
                            </ul>
                        </div><!-- col -->
                    </div><!-- grid -->
                </div>
                <div class="tab-panel hidden [&.active]:block" id="personal-address">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="AddressLine1">Address Line 1</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="{{data_get($user,'address')}}" id="AddressLine1" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="AddressLine2">Address Line 2</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="AddressLine2" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="State">State</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="{{data_get($user,'state')}}" id="State" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="DateofBirth">Country</label>
                                <div class="relative">
                                    <select class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                <li>
                                    <button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Update Address</button>
                                </li>
                                <li>
                                    <button class="modal-close *:pointer-events-none inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                </li>
                            </ul>
                        </div><!-- col -->
                    </div><!-- grid -->
                </div>
            </div>
        </div>
    </div>
</div>
@endpush