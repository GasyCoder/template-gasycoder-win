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
<ul class="flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900 px-5 sm:px-6">
    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
        <a href="{{ route('user.details') }}" class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600{{ is_route('user.details') ? ' active' : '' }}">
            <em class="text-xl ni ni-user-circle"></em>
            <span class="ms-2 max-md:hidden">Personal</span>
        </a>
    </li>
    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
        <a href="{{ route('user.details.transaction') }}" class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600{{ is_route('user.details.transaction') ? ' active' : '' }}">
            <em class="text-xl ni ni-repeat"></em>
            <span class="ms-2 max-md:hidden">Transactions</span>
        </a>
    </li>
    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
        <a href="{{ route('user.details.notification') }}" class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600{{ is_route('user.details.notification') ? ' active' : '' }}">
            <em class="text-xl ni ni-bell"></em>
            <span class="ms-2 max-md:hidden">Notifications</span>
        </a>
    </li>
    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
        <a href="{{ route('user.details.activity') }}" class="inline-flex items-center text-sm font-bold py-4 max-sm:px-1 max-md:px-2 relative -mb-px text-slate-600 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600{{ is_route('user.details.activity') ? ' active' : '' }}">
            <em class="text-xl ni ni-activity"></em>
            <span class="ms-2 max-md:hidden">Activities</span>
        </a>
    </li>
    <li class="pe-4 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0 ms-auto 2xl:hidden">
        <div class="py-2">
            <button data-target="#pageAside" data-body-scroll="off" class="class-toggle *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.active]:before:h-10 [&.active]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.active]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                <em class="text-xl ni ni-user-list-fill"></em>
            </button>
        </div>
    </li>
</ul>