@extends('layouts.main', ['title'=> 'User Details'])

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
                <div class="pb-7 md:pb-8">
                    <h5 class="text-xl font-heading mb-2 font-bold leading-tighter text-slate-700 dark:text-white">Personal Information</h5>
                    <p class="text-slate-600 dark:text-slate-400">Basic info, like your name and address, that you use on Nio Platform.</p>
                </div>
                <div class="flex flex-wrap 2xl:max-w-5xl -my-2 md:-mx-6 lg:-mx-12 overflow-hidden">
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Title</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">Mr.</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Full Name</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'name') }}</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Date of Birth</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'dob') }}</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Surname</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">IO</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Mobile Number</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'phone') }}</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Email Address</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'email') }}</span>
                        </div>
                    </div>
                </div>
                <h6 class="text-slate-600 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-5 mt-6">
                    Additional Information
                </h6>
                <div class="flex flex-wrap 2xl:max-w-5xl -my-2 md:-mx-6 lg:-mx-12 overflow-hidden">
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Joining Date</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'joiningDate') }}</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Reg Method</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">Email</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Country</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'country') }}</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 py-2 md:py-3 md:px-6 lg:px-12">
                        <div class="flex justify-between gap-2">
                            <span class="text-slate-400 -tracking-snug">Nationality</span>
                            <span class="font-medium text-slate-600 dark:text-slate-300">{{ data_get($user, 'nationality') }}</span>
                        </div>
                    </div>
                </div><!-- grid -->
                <div class="border-t block border-gray-300 dark:border-gray-900 my-6"></div>
                <div class="flex items-center justify-between pb-4 gap-2">
                    <h5 class="text-xl -tracking-snug font-heading leading-tighter font-bold text-slate-700 dark:text-white">Admin Note</h5>
                    <a href="#" class="text-sm font-medium leading-none whitespace-nowrap text-primary-600 hover:text-primary-700">+ Add Note</a>
                </div>

                <div class="flex flex-col gap-7">
                    @foreach ($user['notes'] as $item)    
                        <div>
                            <div class="py-4 px-5 sm:py-5 sm:px-6 bg-slate-50 dark:bg-gray-900 rounded">
                                <p class="text-slate-600 dark:text-slate-400">{{ data_get($item, 'note') }} </p>
                            </div>
                            <div class="text-xs text-slate-400 dark:text-slate-600 mt-3">
                                <span>Added on <span class="text-slate-600 dark:text-slate-400">{{ data_get($item, 'on') }}</span> at <span class="text-slate-600 dark:text-slate-400">{{ data_get($item, 'at') }}</span></span>
                                <span class="px-1">|</span>
                                <span>By <span class="text-slate-600 dark:text-slate-400">{{ data_get($item, 'by') }}</span></span>
                                <a href="#" class="ms-3 text-xs font-medium leading-none whitespace-nowrap text-red-600 hover:text-red-700">Delete Note</a>
                            </div>
                        </div><!-- .bq-note-item -->
                    @endforeach
                </div>
            </div>

        </div>
        
        @include ('pages.pre-built.user.partials.details-aside')

    </div>
</div>
@endsection
