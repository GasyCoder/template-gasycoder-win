@php
    $list = [
        [
            'icon'=>'user-fill-c',
            'route'=>'user.profile',
            'text'=>'Personal Infomation',
        ],
        [
            'icon'=>'bell-fill',
            'route'=>'user.profile.notification',
            'text'=>'Notifications',
        ],
        [
            'icon'=>'activity-round-fill',
            'route'=>'user.profile.activity',
            'text'=>'Account Activity',
        ],
        [
            'icon'=>'lock-alt-fill',
            'route'=>'user.profile.setting',
            'text'=>'Security Settings',
        ],
        [
            'icon'=>'grid-add-fill-c',
            'route'=>'user.profile.social',
            'text'=>'Connected with Social',
        ],
    ]
@endphp
<div id="pageAside" data-body-scroll="off" class="peer min-w-[260px] max-w-[calc(100%-2.5rem)] w-[300px] 2xl:w-[380px] max-lg:min-h-screen bg-white dark:bg-gray-950 lg:bg-transparent border-e border-gray-300 dark:border-gray-900 flex-shrink-0 fixed lg:static top-0 start-0 z-[999] transition-transform duration-500 lg:transition-none -translate-x-full rtl:translate-x-full [&.active]:transform-none lg:transform-none lg:rtl:transform-none">
    <div class="max-lg:mt-16 max-lg:max-h-[calc(100vh-theme(spacing.16))]" data-simplebar>
        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
            <div class="flex items-center">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-500 h-10 w-10 rounded-full font-medium">
                    <span>AB</span>
                </div>
                <div class="ms-4 flex flex-col">
                    <span class="text-sm font-bold text-slate-700 dark:text-white">{{ data_get($user, 'name') }}</span>
                    <span class="text-xs text-slate-400 mt-1">{{ data_get($user, 'email') }}</span>
                </div>
                <div class="dropdown relative ms-auto">
                    <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900 text-slate-400 hover:text-slate-600 [&.show]:text-slate-600">
                        <em class="text-xl dark:text-slate-300 ni ni-more-v"></em>
                    </button>
                    <div tabindex="0" class="dropdown-menu absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                        <ul class="py-2">
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                            <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 opacity-80 ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-widest leading-tight mb-3">Nio Wallet Account </h6>
            <div class="text-2xl leading-none pb-2 text-primary-600">{{ data_get($user['balance'], 'btc') }} <small class="font-normal text-base">BTC</small></div>
            <div class="text-xs text-slate-400">Locked <span class="text-slate-600 dark:text-slate-400">{{ data_get($user['balance'], 'locked') }} <span>BTC</span></span></div>
        </div>
        <div class="relative">
            <ul class="py-3">
                @foreach ($list as $item )    
                    <li>
                        <a class="group px-5 sm:px-6 py-3 sm:py-4 flex items-center text-sm font-medium leading-5 text-slate-600 hover:text-primary-600 [&.active]:text-primary-600 transition-all duration-300 {{ is_route($item['route']) ? ' active' : '' }}" href="{{route($item['route'])}}">
                            <em class="text-lg w-8 leading-5 opacity-80 text-slate-400 group-hover:text-primary-600 group-[.active]:text-primary-600 transition-all duration-300 ni ni-{{ $item['icon'] }}"></em>
                            <span>{{ $item['text'] }}</span>
                            <em class="text-base font-medium ms-auto leading-none -me-1 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div data-target="#pageAside" data-body-scroll="off" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible lg:!opacity-0 lg:!invisible"></div>