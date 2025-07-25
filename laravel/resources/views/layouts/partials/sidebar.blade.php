<div class="nk-sidebar group/sidebar peer dark fixed w-72 [&.is-compact:not(.has-hover)]:w-[74px] min-h-screen max-h-screen overflow-hidden h-full start-0 top-0 z-[1031] transition-[transform,width] duration-300 -translate-x-full rtl:translate-x-full xl:translate-x-0 xl:rtl:translate-x-0 [&.sidebar-visible]:translate-x-0">
    <div class="flex items-center min-w-full w-72 h-16 border-b border-e bg-white dark:bg-gray-950 border-gray-200 dark:border-gray-900 px-6 py-3 overflow-hidden">
        <div class="-ms-1 me-4">
            <div class="hidden xl:block">
                <a href="#" class="sidebar-compact-toggle *:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                    <em class="text-2xl text-slate-600 dark:text-slate-300 ni ni-menu"></em>
                </a>
            </div>
            <div class="xl:hidden">
                <a href="#" class="sidebar-toggle *:pointer-events-none inline-flex items-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                    <em class="text-2xl text-slate-600 dark:text-slate-300 rtl:-scale-x-100 ni ni-arrow-left"></em>
                </a>
            </div>
        </div>
        <div class="relative flex flex-shrink-0">
            <a href="{{ url('/') }}" class="relative inline-block transition-opacity duration-300 h-9 group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0">
                <img class="h-full opacity-0 dark:opacity-100" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo2x.png 2x') }}" alt="{{ site_info('name') }}">
                <img class="h-full opacity-100 dark:opacity-0 absolute start-0 top-0" src="{{ asset('images/logo-dark.png') }}" srcset="{{ asset('images/logo-dark2x.png 2x') }}" alt="{{ site_info('name') }}">
            </a>
        </div>
    </div>
    <div class="nk-sidebar-body max-h-full relative overflow-hidden w-full bg-white dark:bg-gray-950 border-e border-gray-200 dark:border-gray-900">
        <div class="flex flex-col w-full h-[calc(100vh-theme(spacing.16))]">
            <div class="h-full pt-4 pb-10" data-simplebar>
                
                <ul class="nk-menu">
                    <li class="relative first:pt-1 pt-10 pb-2 px-6 before:absolute before:h-px before:w-full before:start-0 before:top-1/2 before:bg-gray-200 dark:before:bg-gray-900 first:before:hidden before:opacity-0 group-[&.is-compact:not(.has-hover)]/sidebar:before:opacity-100">
                        <h6 class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Dashboards</h6>
                    </li><!-- menu-heading -->

                    <li class="nk-menu-item py-0.5{{ is_route('ecommerce') ? ' active' : '' }} group/item">
                        <a href="{{ route('ecommerce') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-cart"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Ecommerce</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('copywriter') ? ' active' : '' }} group/item">
                        <a href="{{ route('copywriter') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-edit-alt"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">AI Copywriter</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('sales') ? ' active' : '' }} group/item">
                        <a href="{{ route('sales') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-cc-alt2"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Sales</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('crypto') ? ' active' : '' }} group/item">
                        <a href="{{ route('crypto') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-bitcoin-cash"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Crypto</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('analytics') ? ' active' : '' }} group/item">
                        <a href="{{ route('analytics') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-growth"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Analytics</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('invest') ? ' active' : '' }} group/item">
                        <a href="{{ route('invest') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-coins"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Invest</span>
                        </a>
                    </li>

                    <li class="relative first:pt-1 pt-10 pb-2 px-6 before:absolute before:h-px before:w-full before:start-0 before:top-1/2 before:bg-gray-200 dark:before:bg-gray-900 first:before:hidden before:opacity-0 group-[&.is-compact:not(.has-hover)]/sidebar:before:opacity-100">
                        <h6 class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Pre-Built Pages</h6>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('project.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-tile-thumb"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Projects
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('project.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('project.card') ? ' active' : '' }}">
                                <a href="{{ route('project.card') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Project Cards
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('project.list') ? ' active' : '' }}">
                                <a href="{{ route('project.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Project List
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('user.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-users"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                User Manage
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('user.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('user.list') ? ' active' : '' }}">
                                <a href="{{ route('user.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        User List - Regular
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('user.list-compact') ? ' active' : '' }}">
                                <a href="{{ route('user.list-compact') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        User List - Compact
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('user.details') ? ' active' : '' }}">
                                <a href="{{ route('user.details') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        User Details - Regular
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('user.profile') ? ' active' : '' }}">
                                <a href="{{ route('user.profile') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        User Profile - Regular
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('user.card') ? ' active' : '' }}">
                                <a href="{{ route('user.card') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        User Contact - Card
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('customer.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-user-list"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Customers
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('customer.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('customer.list') ? ' active' : '' }}">
                                <a href="{{ route('customer.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Customer List
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('customer.details') ? ' active' : '' }}">
                                <a href="{{ route('customer.details') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Customer Details
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('kyc.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-file-docs"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                AML / KYCs
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('kyc.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('kyc.list') ? ' active' : '' }}">
                                <a href="{{ route('kyc.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        KYC List - Regular
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('kyc.details') ? ' active' : '' }}">
                                <a href="{{ route('kyc.details') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        KYC Details - Regular
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('apps.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-grid-alt"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Applications
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('apps.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('apps.messages') ? ' active' : '' }}">
                                <a href="{{ route('apps.messages') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Messages
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('apps.inbox') ? ' active' : '' }}">
                                <a href="{{ route('apps.inbox') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Inbox / Mail
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('apps.file-manager') ? ' active' : '' }}">
                                <a href="{{ route('apps.file-manager') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        File Manager
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('apps.chats') ? ' active' : '' }}">
                                <a href="{{ route('apps.chats') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Chats / Messenger
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('apps.calendar') ? ' active' : '' }}">
                                <a href="{{ route('apps.calendar') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Calendar
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('invoice.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-file-docs"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Invoice
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('invoice.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('invoice.list') ? ' active' : '' }}">
                                <a href="{{ route('invoice.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Invoice List
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('invoice.details') ? ' active' : '' }}">
                                <a href="{{ route('invoice.details') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Invoice Details
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('product.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-card-view"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Products
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('product.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('product.list') ? ' active' : '' }}">
                                <a href="{{ route('product.list') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Product List
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('product.card') ? ' active' : '' }}">
                                <a href="{{ route('product.card') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Product Card
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('product.details') ? ' active' : '' }}">
                                <a href="{{ route('product.details') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Product Details
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('pricing-table') ? ' active' : '' }} group/item">
                        <a href="{{ route('pricing-table') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-view-col"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Pricing Table</span>
                        </a>
                    </li>
                    <li class="nk-menu-item py-0.5{{ is_route('gallery') ? ' active' : '' }} group/item">
                        <a href="{{ route('gallery') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-img"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Image Gallery</span>
                        </a>
                    </li>

                    <li class="relative first:pt-1 pt-10 pb-2 px-6 before:absolute before:h-px before:w-full before:start-0 before:top-1/2 before:bg-gray-200 dark:before:bg-gray-900 first:before:hidden before:opacity-0 group-[&.is-compact:not(.has-hover)]/sidebar:before:opacity-100">
                        <h6 class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Misc Pages</h6>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('auths.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-signin"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Auth Pages
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('auths.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.login') ? ' active' : '' }}">
                                <a href="{{ route('auths.login') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Login / Signin
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.register') ? ' active' : '' }}">
                                <a href="{{ route('auths.register') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Register / Signup
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.reset') ? ' active' : '' }}">
                                <a href="{{ route('auths.reset') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Forgot Password
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.success') ? ' active' : '' }}">
                                <a href="{{ route('auths.success') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Success / Confirm
                                    </span>
                                </a>
                            </li>
                            
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.*') ? ' active' : '' }}">
                                <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Classic Version - v2
                                    </span>
                                    <em class="text-base leading-none text-slate-400 group-[.active]/sub1:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/sub1:rotate-90 group-[.active]/sub1:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                                </a>
                                <ul class="nk-menu-sub hidden ms-[calc(theme(spacing.6)+theme(spacing.9))] border-s border-gray-300 dark:border-gray-900 my-2">
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.login-v2') ? ' active' : '' }}">
                                        <a href="{{ route('auths.login-v2') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Login / Signin
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.register-v2') ? ' active' : '' }}">
                                        <a href="{{ route('auths.register-v2') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Register / Signup
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.reset-v2') ? ' active' : '' }}">
                                        <a href="{{ route('auths.reset-v2') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Forgot Password
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.success-v2') ? ' active' : '' }}">
                                        <a href="{{ route('auths.success-v2') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Success / Confirm
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('auths.*') ? ' active' : '' }}">
                                <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        No Slider Version - v3
                                    </span>
                                    <em class="text-base leading-none text-slate-400 group-[.active]/sub1:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/sub1:rotate-90 group-[.active]/sub1:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                                </a>
                                <ul class="nk-menu-sub hidden ms-[calc(theme(spacing.6)+theme(spacing.9))] border-s border-gray-300 dark:border-gray-900 my-2">
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.login-v3') ? ' active' : '' }}">
                                        <a href="{{ route('auths.login-v3') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Login / Signin
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.register-v3') ? ' active' : '' }}">
                                        <a href="{{ route('auths.register-v3') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Register / Signup
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.reset-v3') ? ' active' : '' }}">
                                        <a href="{{ route('auths.reset-v3') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Forgot Password
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item py-px sub has-sub group/sub2 {{ is_route('auths.success-v3') ? ' active' : '' }}">
                                        <a href="{{ route('auths.success-v3') }}" target="_blank" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-4 font-normal leading-5 text-sm tracking-normal normal-case">
                                            <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub2:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                                Success / Confirm
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('errors.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-files"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Error Pages
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('errors.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('errors.404-classic') ? ' active' : '' }}">
                                <a href="{{ route('errors.404-classic') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        404 Classic
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('errors.504-classic') ? ' active' : '' }}">
                                <a href="{{ route('errors.504-classic') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        504 Classic
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('errors.404-modern') ? ' active' : '' }}">
                                <a href="{{ route('errors.404-modern') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        404 Modern
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('errors.504-modern') ? ' active' : '' }}">
                                <a href="{{ route('errors.504-modern') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        504 Modern
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ (is_route('blank') || is_route('faqs') || is_route('terms-policy') || is_route('regular-v1') || is_route('regular-v2')) ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-files"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Other Pages
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ (is_route('blank') || is_route('faqs') || is_route('terms-policy') || is_route('regular-v1') || is_route('regular-v2')) ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('blank') ? ' active' : '' }}">
                                <a href="{{ route('blank') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Blank / Startup
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('faqs') ? ' active' : '' }}">
                                <a href="{{ route('faqs') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Faqs / Help
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('terms-policy') ? ' active' : '' }}">
                                <a href="{{ route('terms-policy') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Terms / Policy
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('regular-v1') ? ' active' : '' }}">
                                <a href="{{ route('regular-v1') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Regular Page - v1
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('regular-v2') ? ' active' : '' }}">
                                <a href="{{ route('regular-v2') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Regular Page - v2
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative first:pt-1 pt-10 pb-2 px-6 before:absolute before:h-px before:w-full before:start-0 before:top-1/2 before:bg-gray-200 dark:before:bg-gray-900 first:before:hidden before:opacity-0 group-[&.is-compact:not(.has-hover)]/sidebar:before:opacity-100">
                        <h6 class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Components</h6>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('components.elements.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-layers"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Ui Elements
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{  is_route('components.elements.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.alerts') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.alerts') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Alerts
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.accordions') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.accordions') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Accordions
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.avatar') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.avatar') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Avatar
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.badges') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.badges') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Badges
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.buttons') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.buttons') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Buttons
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.buttons-group') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.buttons-group') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Button Group
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.breadcrumb') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.breadcrumb') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Breadcrumb
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.cards') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.cards') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Cards
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.list-dropdown') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.list-dropdown') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        List Dropdown
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.modals') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.modals') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Modals
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.pagination') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.pagination') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Pagination
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.popover') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.popover') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Popover
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.progress') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.progress') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Progress
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.spinner') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.spinner') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Spinner
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.tabs') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.tabs') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Tabs
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.toast') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.toast') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Toasts
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.tooltip') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.tooltip') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Tooltip
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.elements.typography') ? ' active' : '' }}">
                                <a href="{{ route('components.elements.typography') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Typography
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('components.forms.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-card-view"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Forms
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{  is_route('components.forms.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.form-elements') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.form-elements') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Form Elements
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.checkbox-radio') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.checkbox-radio') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Checkbox Radio
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.advanced-controls') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.advanced-controls') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Advanced Controls
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.input-group') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.input-group') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Input Group
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.form-upload') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.form-upload') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Form Upload
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.datetime-picker') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.datetime-picker') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Date & Time Picker
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.number-spinner') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.number-spinner') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Number Spinner
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.nouislider') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.nouislider') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        noUiSlider
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.form-layouts') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.form-layouts') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Form Layouts
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.forms.form-validation') ? ' active' : '' }}">
                                <a href="{{ route('components.forms.form-validation') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Form Validation
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('components.tailwind-config') ? ' active' : '' }} group/item">
                        <a href="{{ route('components.tailwind-config') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-tailwind"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Tailwind Config</span>
                        </a>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ (is_route('components.nioicon') || is_route('components.svg-icons')) ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-dot-box"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Crafted Icons
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ (is_route('components.nioicon') || is_route('components.svg-icons')) ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.svg-icons') ? ' active' : '' }}">
                                <a href="{{ route('components.svg-icons') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        SVG Icon - Exclusive
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.nioicon') ? ' active' : '' }}">
                                <a href="{{ route('components.nioicon') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Nioicon - HandCrafted
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('components.tables.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-table-view"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Tables
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('components.tables.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.tables.basic-table') ? ' active' : '' }}">
                                <a href="{{ route('components.tables.basic-table') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Basic Tables
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.tables.data-table') ? ' active' : '' }}">
                                <a href="{{ route('components.tables.data-table') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        DataTables
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5 has-sub group/item {{ is_route('components.widgets.*') ? ' active' : '' }}">
                        <a href="#" class="nk-menu-link sub nk-menu-toggle flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-puzzle"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                Widgets
                            </span>
                            <em class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 text-base leading-none text-slate-400 group-[.active]/item:text-primary-500 absolute end-5 top-1/2 -translate-y-1/2 rtl:-scale-x-100 group-[.active]/item:rotate-90 group-[.active]/item:rtl:-rotate-90 transition-all duration-300 icon ni ni-chevron-right"></em>
                        </a>
                        <ul class="nk-menu-sub mb-1 hidden group-[&.is-compact:not(.has-hover)]/sidebar:!hidden"  {{ is_route('components.widgets.*') ? 'style=display:block' : '' }}>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.widgets.cards') ? ' active' : '' }}">
                                <a href="{{ route('components.widgets.cards') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Card Widgets
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.widgets.charts') ? ' active' : '' }}">
                                <a href="{{ route('components.widgets.charts') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Chart Widgets
                                    </span>
                                </a>
                            </li>
                            <li class="nk-menu-item py-px sub has-sub group/sub1 {{ is_route('components.widgets.ratings') ? ' active' : '' }}">
                                <a href="{{ route('components.widgets.ratings') }}" class="nk-menu-link flex relative items-center align-middle py-1.5 pe-10 ps-[calc(theme(spacing.6)+theme(spacing.9))] font-normal leading-5 text-sm tracking-normal normal-case">
                                    <span class="text-slate-600 dark:text-slate-500 group-[.active]/sub1:text-primary-500 hover:text-primary-500 whitespace-nowrap flex-grow inline-block">
                                        Rating Widgets
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item py-0.5{{ is_route('components.chartjs') ? ' active' : '' }} group/item">
                        <a href="{{ route('components.chartjs') }}" class="nk-menu-link flex relative items-center align-middle py-2.5 ps-6 pe-10 font-heading font-bold tracking-snug group">
                            <span class="font-normal tracking-normal w-9 inline-flex flex-grow-0 flex-shrink-0 text-slate-400 group-[.active]/item:text-primary-500 group-hover:text-primary-500">
                                <em class="text-2xl leading-none text-current transition-all duration-300 icon ni ni-pie"></em>
                            </span>
                            <span class="group-[&.is-compact:not(.has-hover)]/sidebar:opacity-0 flex-grow-1 inline-block whitespace-nowrap transition-all duration-300 text-slate-600 dark:text-slate-500 group-[.active]/item:text-primary-500 group-hover:text-primary-500">Chart JS</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div><!-- sidebar -->
<div class="sidebar-toggle fixed inset-0 bg-slate-950 bg-opacity-20 z-[1030] opacity-0 invisible peer-[.sidebar-visible]:opacity-100 peer-[.sidebar-visible]:visible xl:!opacity-0 xl:!invisible"></div>