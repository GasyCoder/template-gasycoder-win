@extends('layouts.main', ['title'=> 'Users Lists'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Users Lists</h3>
        <p class="text-slate-400 dark:text-slate-600">You have total 2,595 users.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full sm:mt-1 -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800  opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-download-cloud"></em><span class="ms-3">Export</span>
                    </a>
                </li>
                <li class="ms-auto">
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded h-9 w-9 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                            <em class="text-xl leading-4.5 ni ni-plus"></em>
                        </a>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Add User</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Add Team</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Import User</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->

<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
    <div class="grid grid-flow-dense grid-cols-12 gap-6">
        @foreach ( $users as $item => $user)
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="p-5 sm:p-6">
                        <div class="relative">
                            <span @class([
                                "absolute flex items-center justify-center h-5 w-5 rounded-full",
                                "bg-green-600 text-white" => $user['status'] == "active",
                                "bg-gray-100 dark:bg-gray-800 text-slate-700 dark:text-white" => $user['status'] == "inactive",
                                "bg-yellow-600 text-white" => $user['status'] == "pending",
                                "bg-red-600 text-white" => $user['status'] == "suspend",
                            ])>
                                <em @class([
                                    "icon ni",
                                    "ni-check-thick" => $user['status'] == "active",
                                    "ni-text" => $user['status'] == "inactive",
                                    "ni-clock" => $user['status'] == "pending",
                                    "ni-na" => $user['status'] == "suspend",
                                ])></em>
                            </span>
                            <div class="dropdown absolute top-0 end-0 -mt-1 -me-1" >
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-focus"></em>
                                                <span>Quick View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View Details</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-mail"></em>
                                                <span>Send Email</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-star"></em>
                                                <span>Reset Pass</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-off"></em>
                                                <span>Reset 2FA</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                                <span>Suspend User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-center text-center p-2">
                                @if(isset($user['img'])) 
                                    <x-avatar size="xl" rounded="true" image="{{$user['img']}}"><div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div></x-avatar>
                                @else
                                    <x-avatar size="xl" rounded="true" variant="{{$user['theme']}}" text="{{get_initials($user['name'])}}"><div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div></x-avatar>
                                @endif
                                <div class="mt-5">
                                    <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{ data_get($user, 'name') }}</h6>
                                    <span class="text-sm text-slate-400">{{ '@'.data_get($user, 'displayName') }}</span>
                                </div>
                            </div>
                            <div class="pt-2 text-center mx-auto max-w-[200px]">
                                <p>I am an UI/UX Designer and Love to be creative.</p>
                            </div>
                            <ul class="flex justify-around text-center pt-4 pb-6 w-full">
                                <li class="px-2">
                                    <span class="text-lg text-slate-800 dark:text-white block">{{ data_get($user, 'projects') }}</span>
                                    <span class="text-sm leading-6 text-slate-400 block">Projects</span>
                                </li>
                                <li class="px-2">
                                    <span class="text-lg text-slate-800 dark:text-white block">{{ data_get($user, 'performed') }}%</span>
                                    <span class="text-sm leading-6 text-slate-400 block">Performed</span>
                                </li>
                                <li class="px-2">
                                    <span class="text-lg text-slate-800 dark:text-white block">{{ data_get($user, 'tasks') }}</span>
                                    <span class="text-sm leading-6 text-slate-400 block">Tasks</span>
                                </li>
                            </ul>
                            <div class="flex justify-center pb-1">
                                <a href="{{route('user.details')}}" class="relative inline-flex items-center justify-center text-center font-heading align-middle text-sm font-bold leading-4.5 rounded-full px-4.5 py-2 tracking-wide min-w-[150px] border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-950 hover:bg-gray-600 hover:dark:bg-gray-600 hover:text-white hover:dark:text-white hover:border-gray-600 hover:dark:border-gray-600 active:bg-gray-700  active:dark:bg-gray-700 active:text-white active:dark:text-white active:border-gray-600 active:dark:border-gray-600 transition-all duration-300">
                                    <span>View Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
            </div><!-- col -->
            @if ($item == 3)
                @break
            @endif
        @endforeach
    </div><!-- grid -->
</div><!-- block -->
<div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
    <div class="pb-5">
        <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">User Cards Alternet</h5>
        <p class="text-sm leading-6 text-slate-400">An alternet version of user card here.</p>
    </div>

    <div class="grid grid-flow-dense grid-cols-12 gap-6">
        @foreach ( $users as $item => $user)
            <div class="col-span-12 sm:col-span-6 lg:col-span-4 2xl:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <div class="p-5 sm:p-6">
                        <div class="relative">
                            <div class="dropdown absolute top-0 end-0 -mt-1 -me-1" >
                                <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-8 hover:before:w-8 [&.show]:before:h-8 [&.show]:before:w-8 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-600 dark:text-slate-300 hover:text-slate-400">
                                    <em class="text-base ni ni-more-h"></em>
                                </button>
                                <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded shadow hidden peer-[.show]:block z-[1000]">
                                    <ul class="py-2">
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-focus"></em>
                                                <span>Quick View</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-eye"></em>
                                                <span>View Details</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-mail"></em>
                                                <span>Send Email</span>
                                            </a>
                                        </li>
                                        <li class="block border-t border-gray-300 dark:border-gray-900 my-2"></li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-star"></em>
                                                <span>Reset Pass</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-shield-off"></em>
                                                <span>Reset 2FA</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#">
                                                <em class="text-start text-lg leading-none w-7 opacity-80 ni ni-na"></em>
                                                <span>Suspend User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-center text-center p-2">
                                @if(isset($user['img'])) 
                                    <x-avatar size="2xl" rounded="true" image="{{$user['img']}}"><div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div></x-avatar>
                                @else
                                    <x-avatar size="2xl" rounded="true" variant="{{$user['theme']}}" text="{{get_initials($user['name'])}}"><div class="absolute rounded-full end-1 bottom-1 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div></x-avatar>
                                @endif
                                <div class="mt-5">
                                    <h6 class="text-base text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2">{{ data_get($user, 'name') }}</h6>
                                    <span class="text-sm text-slate-400">{{ data_get($user, 'designation') }}</span>
                                </div>
                            </div>
                            <ul class="pt-4 pb-5">
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Join Date</span>
                                    <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'joiningDate') }}</span>
                                </li>
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Contact</span>
                                    <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'phone') }}</span>
                                </li>
                                <li class="flex items-center justify-between text-base leading-7">
                                    <span class="text-slate-400 dark:text-slate-600">Email</span>
                                    <span class="text-slate-600 dark:text-slate-400">{{ data_get($user, 'email') }}</span>
                                </li>
                            </ul>
                            <div class="flex justify-center pb-1">
                                <a href="{{route('user.details')}}" class="relative inline-flex items-center justify-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide w-full border border-primary-100 dark:border-primary-950 text-primary-600 bg-primary-100 dark:bg-primary-950 hover:bg-primary-600 hover:dark:bg-primary-600 hover:border-primary-600 hover:dark:border-primary-600 hover:text-white active:bg-primary-700 active:dark:bg-primary-700 transition-all duration-300">
                                    <span>View Profile</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
            </div><!-- col -->
            @if ($item == 3)
                @break
            @endif
        @endforeach
    </div><!-- grid -->
</div><!-- block -->
@endsection