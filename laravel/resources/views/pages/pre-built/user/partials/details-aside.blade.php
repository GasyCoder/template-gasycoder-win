<div id="pageAside" class="peer min-w-[260px] max-w-[calc(100%-2.5rem)] w-[300px] 2xl:w-[380px] max-2xl:min-h-screen bg-white dark:bg-gray-950 2xl:bg-transparent border-s border-gray-300 dark:border-gray-900 flex-shrink-0 fixed 2xl:static top-0 end-0 z-[999] transition-transform duration-500 2xl:transition-none translate-x-full rtl:-translate-x-full [&.active]:transform-none 2xl:transform-none 2xl:rtl:transform-none">
    <div class="max-2xl:mt-16 max-2xl:max-h-[calc(100vh-theme(spacing.16))]" data-simplebar>
        <div class="flex flex-col items-center text-center p-5 sm:px-6 sm:py-8 border-b border-gray-300 dark:border-gray-900">
            @if(isset($user['img'])) 
                <x-avatar size="2xl" rounded="true" image="{{$user['img']}}"> </x-avatar>
            @else
                <x-avatar size="2xl" rounded="true" variant="{{$user['theme']}}" text="{{get_initials($user['name'])}}"> </x-avatar>
            @endif
            <div class="mt-4">
                <span class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-900 text-slate-400 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle uppercase">{{ data_get($user, 'role') }}</span>
                <h6 class="text-xl text-slate-700 dark:text-white font-bold font-heading leading-tighter mb-2 mt-4">{{ data_get($user, 'name') }}</h6>
                <span class="text-sm text-slate-400">{{ data_get($user, 'email') }}</span>
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
                        <em class="text-lg ni ni-download-cloud"></em>
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
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">In Account </h6>
            <div class="flex items-end -mx-3">
                <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                    <div class="flex flex-col">
                        <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">
                            {{ data_get($user['balance'], 'invest') }}
                            <span class="text-lg leading-6 font-normal">USD</span>
                        </div>
                        <div class="text-xs mt-2">Invested Amount</div>
                    </div>
                </div>
                <div class="flex gap-x-2 px-3 text-sm text-slate-400">
                    <span class="text-slate-400 text-base"><em class="ni ni-plus"></em></span>
                    <div class="flex flex-col">
                        <div class="text-xl text-slate-700 dark:text-white font-bold leading-6 whitespace-nowrap">{{ data_get($user['balance'], 'profit') }}</div>
                        <div class="text-xs mt-2">Profit Earned</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
            <div class="grid grid-flow-dense grid-cols-12">
                <div class="col-span-4">
                    <div class="text-center">
                        <span class="block text-lg text-slate-600 dark:text-white font-bold">{{ data_get($user['orders'], 'total') }}</span>
                        <span class="block text-xs leading-5 text-slate-400">Total Order</span>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="text-center">
                        <span class="block text-lg text-slate-600 dark:text-white font-bold">{{ data_get($user['orders'], 'completed') }}</span>
                        <span class="block text-xs leading-5 text-slate-400">Complete</span>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="text-center">
                        <span class="block text-lg text-slate-600 dark:text-white font-bold">{{ data_get($user['orders'], 'progress') }}</span>
                        <span class="block text-xs leading-5 text-slate-400">Progress</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5 sm:p-6 border-b border-gray-300 dark:border-gray-900">
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Additional </h6>
            <div class="grid grid-flow-dense grid-cols-12 gap-4">
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">User ID:</span>
                    <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">{{ data_get($user, 'id') }}</span>
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">Last Login:</span>
                    <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">{{ data_get($user, 'lastLogin') }}</span>
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">KYC Status:</span>
                    <span class="block text-sm font-bold mt-1 text-green-600">{{ data_get($user, 'kycStatus') }}</span>
                </div>
                <div class="col-span-6">
                    <span class="block text-xs text-slate-400">Register At:</span>
                    <span class="block text-sm mt-1 text-slate-600 dark:text-slate-200">{{ data_get($user, 'joiningDate') }}</span>
                </div>
            </div>
        </div>
        <div class="p-5 sm:p-6">
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Groups </h6>
            <ul class="flex flex-wrap gap-2">
                @foreach ( $user['groups'] as $item )    
                    <li class="inline-flex align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-xxs font-heading font-bold leading-5 first:rounded-s last:rounded-e px-2 tracking-wide border border-gray-100 dark:border-gray-900 hover:border-gray-500 hover:dark:border-gray-800 text-slate-400 dark:text-slate-200 hover:text-white hover:dark:text-white bg-gray-100 dark:bg-gray-900 hover:bg-gray-500 hover:dark:bg-gray-800 active:bg-gray-800 hover:z-10 transition-all duration-300">{{$item}}</a>
                        <a href="#" class="relative inline-flex items-center justify-center text-center align-middle text-xs font-bold leading-4.5 first:rounded-s last:rounded-e h-5.5 w-5.5 tracking-wide border border-gray-100 dark:border-gray-900 hover:border-gray-500 hover:dark:border-gray-800 text-slate-400 dark:text-slate-200 hover:text-white hover:dark:text-white bg-gray-100 dark:bg-gray-900 hover:bg-gray-500 hover:dark:bg-gray-800 active:bg-gray-800 transition-all duration-300">
                            <em class="text-xs leading-4.5 ni ni-cross"></em>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div data-target="#pageAside" data-body-scroll="off" class="class-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[900] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible 2xl:!opacity-0 2xl:!invisible"></div>