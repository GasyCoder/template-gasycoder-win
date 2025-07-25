@extends('layouts.main', ['title'=> 'Tabs Nav'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Tabs Nav</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Use the Custom tab javascript plugin to extend navigational tabs and pills to create tabbable panes of local content, even via dropdown menus.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Basic Examples</h5>
            <p class="text-sm leading-6 text-slate-400">Checkout our awesome tab component.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900 -mt-4">
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#tabItem1">Personal</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItem2">Security</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItem3">Notifications</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItem4">Connect</button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div class="tab-panel hidden [&.active]:block active" id="tabItem1">
                    <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItem2">
                    <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItem3">
                    <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItem4">
                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">With Icon</h5>
            <p class="text-sm leading-6 text-slate-400">Checkout our awesome tab component with icons.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900 -mt-4">
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#tabItemIcon1">
                        <em class="text-xl ni ni-user"></em>
                        <span class="ms-2">Personal</span>
                    </button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemIcon2">
                        <em class="text-xl ni ni-lock-alt"></em>
                        <span class="ms-2">Security</span>
                    </button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemIcon3">
                        <em class="text-xl ni ni-bell"></em>
                        <span class="ms-2">Notifications</span>
                    </button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemIcon4">
                        <em class="text-xl ni ni-link"></em>
                        <span class="ms-2">Connect</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div class="tab-panel hidden [&.active]:block active" id="tabItemIcon1">
                    <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemIcon2">
                    <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemIcon3">
                    <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemIcon4">
                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                </div>
            </div>
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Alternet Tab style</h5>
            <p class="text-sm leading-6 text-slate-400">Tab component with centered style navigation.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <ul class="tab-nav flex flex-wrap justify-center font-heading text-sm -mt-4 -me-5 md:-me-6 lg:-me-7 xl:-me-9">
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#tabItemALternet1">Personal</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemALternet2">Security</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemALternet3">Notifications</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#tabItemALternet4">Connect</button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div class="tab-panel hidden [&.active]:block active" id="tabItemALternet1">
                    <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incid.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemALternet2">
                    <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemALternet3">
                    <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                </div>
                <div class="tab-panel hidden [&.active]:block" id="tabItemALternet4">
                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                </div>
            </div>
        </div>
    </div><!-- block -->


</div>
@endsection