@extends('layouts.main', ['title'=> 'Analytics Dashboard'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white mb-2">Website Analytics</h3>
        <p class="text-slate-400">Welcome to Analytics Dashboard.</p>
    </div>
    <div>
        <button data-target="#pageOptions" class="class-toggle sm:hidden *:pointer-events-none -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
            <em class="text-xl text-slate-600 dark:text-slate-300 ni ni-more-v"></em>
        </button>
        <div id="pageOptions" class="absolute sm:relative start-0 end-0 top-full -mx-3.5 bg-white dark:bg-gray-950 sm:bg-transparent sm:dark:bg-transparent max-sm:shadow max-sm:dark:shadow-gray-800 opacity-0 invisible sm:opacity-100 sm:visible [&.active]:opacity-100 [&.active]:visible z-[1000]">
            <ul class="flex items-center gap-4 px-3.5 py-5 sm:py-0">
                <li>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 hover:dark:border-gray-800 [&.show]:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <em class="text-xl leading-4.5 me-3 hidden sm:inline ni ni-calender-date"></em>
                            <span class="me-4"><span class="hidden md:inline">Last</span> 30 Days</span>
                            <em class="text-xl leading-4.5 rtl:-scale-x-100 ni ni-chevron-right"></em>
                        </a>
                        <div class="dropdown-menu absolute min-w-[180px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 30 Days</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 6 Months</span></a></li>
                                <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>Last 1 Years</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="ms-auto">
                    <a href="#" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
                        <em class="text-xl leading-4.5 ni ni-reports"></em><span class="ms-3">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12 lg:col-span-8 2xl:col-span-6">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-center gap-2 mb-5">
                    <div>
                        <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Audience Overview</h6>
                        <p class="text-xs leading-5 text-slate-400">How have your users, sessions, bounce rate metrics trended.</p>
                    </div>
                    <div class="inline-flex align-middle -space-x-px">
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">7 D</a>
                        <a href="#" class="active relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">1 M</a>
                        <a href="#" class="relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 first:rounded-s last:rounded-e px-2.5 py-1 tracking-wide whitespace-nowrap border border-gray-300 dark:border-gray-900 text-slate-400 bg-white dark:bg-gray-1000 hover:bg-gray-50 hover:dark:bg-gray-1000 hover:text-slate-600 [&.active]:bg-gray-100 [&.active]:dark:bg-gray-900 [&.active]:text-slate-700 [&.active]:dark:text-white hover:z-10 transition-all duration-300">3 M</a>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 mb-6">
                    <div class="w-1/2 xs:w-1/4 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Users</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.57K</span>
                        <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>12.37%</span>
                    </div>
                    <div class="w-1/2 xs:w-1/4 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Sessions</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">3.98K</span>
                        <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>47.74%</span>
                    </div>
                    <div class="w-1/2 xs:w-1/4 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Bounce</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">28.49%</span>
                        <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                    </div>
                    <div class="w-1/2 xs:w-1/4 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Time</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">7m 28s</span>
                        <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>12.37%</span>
                    </div>
                </div>
                <div class="h-[175px]">
                    <canvas class="analytics-line-large max-w-full" id="analyticOvData"></canvas>
                </div>
                <div class="flex justify-between mt-2 ms-11">
                    <div class="text-xs text-slate-400">01 Jan, 2020</div>
                    <div class="text-xs text-slate-400 hidden sm:block">15 Jan, 2020</div>
                    <div class="text-xs text-slate-400">30 Jan, 2020</div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-5">
                    <div>
                        <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Active Users</h6>
                        <p class="text-xs leading-5 text-slate-400">How do your users visited in the time.</p>
                    </div>
                    <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle" data-title="Users of this month">
                        <em class="text-slate-300 ni ni-help"></em>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 mb-6">
                    <div class="w-1/3 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Monthly</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">9.28K</span>
                        <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>4.63%</span>
                    </div>
                    <div class="w-1/3 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Weekly</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">2.69K</span>
                        <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>1.92%</span>
                    </div>
                    <div class="w-1/3 px-2">
                        <div class="text-xs leading-5 font-medium text-slate-400 mb-1.5">Daily (Avg)</div>
                        <span class="block text-2xl leading-7 text-slate-700 dark:text-white">0.94K</span>
                        <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>3.45%</span>
                    </div>
                </div>
                <div class="h-[170px]">
                    <canvas class="analytics-au-chart max-w-full" id="analyticAuData"></canvas>
                </div>
                <div class="flex justify-between mt-2">
                    <div class="text-xs text-slate-400">01 Jan, 2020</div>
                    <div class="text-xs text-slate-400">30 Jan, 2020</div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 lg:col-span-4 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-start gap-2 mb-3">
                    <div>
                        <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Website Performance</h6>
                        <p class="text-xs leading-5 text-slate-400">How has performend this month.</p>
                    </div>
                    <div data-placement="left"  data-rtl-placement="right" class="tooltip-toggle" data-title="Performance of this month">
                        <em class="text-slate-300 ni ni-help"></em>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex justify-between items-end">
                        <div class="w-[150px] xs:w-[350px] md:w-[150px] my-0.5">
                            <div class="text-xs font-medium text-slate-400">Bounce Rate <span class="font-normal">(avg)</span></div>
                            <div class="h-[36px]">
                                <canvas class="analytics-line-small max-w-full" id="BounceRateData"></canvas>
                            </div>
                        </div>
                        <div class="text-end ms-2">
                            <div class="text-lg leading-tight mb-1 text-slate-700 dark:text-white">23.59%</div>
                            <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>4.5%</span>
                            <div class="text-xs text-slate-400">vs. last month</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="w-[150px] xs:w-[350px] md:w-[150px] my-0.5">
                            <div class="text-xs font-medium text-slate-400">Pageviews <span class="font-normal">(avg)</span></div>
                            <div class="h-[36px]">
                                <canvas class="analytics-line-small max-w-full" id="PageviewsData"></canvas>
                            </div>
                        </div>
                        <div class="text-end ms-2">
                            <div class="text-lg leading-tight mb-1 text-slate-700 dark:text-white">5.48</div>
                            <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em>-1.48%</span>
                            <div class="text-xs text-slate-400">vs. last month</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="w-[150px] xs:w-[350px] md:w-[150px] my-0.5">
                            <div class="text-xs font-medium text-slate-400">New Users <span class="font-normal">(avg)</span></div>
                            <div class="h-[36px]">
                                <canvas class="analytics-line-small max-w-full" id="NewUsersData"></canvas>
                            </div>
                        </div>
                        <div class="text-end ms-2">
                            <div class="text-lg leading-tight mb-1 text-slate-700 dark:text-white">549</div>
                            <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>6.8%</span>
                            <div class="text-xs text-slate-400">vs. last month</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="w-[150px] xs:w-[350px] md:w-[150px] my-0.5">
                            <div class="text-xs font-medium text-slate-400">Time on Site <span class="font-normal">(avg)</span></div>
                            <div class="h-[36px]">
                                <canvas class="analytics-line-small max-w-full" id="TimeOnSiteData"></canvas>
                            </div>
                        </div>
                        <div class="text-end ms-2">
                            <div class="text-lg leading-tight mb-1 text-slate-700 dark:text-white">3m 35s</div>
                            <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em>1.4%</span>
                            <div class="text-xs text-slate-400">vs. last month</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-6">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 pb-2 sm:p-6 sm:pb-3">
                <div class="flex justify-between items-center gap-2">
                    <div>
                        <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white mb-1">Traffic Channel</h6>
                        <p class="text-xs leading-5 text-slate-400">Top traffic channels metrics.</p>
                    </div>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Channel</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Sessions</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Prev Sessions</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Change</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Trend</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Organic Search</div>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">4,305</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">4,129</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">4.29% <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em></span></span>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                            <canvas class="analytics-line-small max-w-full" id="OrganicSearchData"></canvas>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Social Media</div>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">859</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">936</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">15.8% <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em></span></span>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                            <canvas class="analytics-line-small max-w-full" id="SocialMediaData"></canvas>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Referrals</div>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">482</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">793</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">41.3% <span class="text-sm leading-none text-red-600"><em class="icon ni ni-arrow-long-down"></em></span></span>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                            <canvas class="analytics-line-small max-w-full" id="ReferralsData"></canvas>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-slate-700 dark:text-white dark:text-slate-400 text-sm font-medium flex items-center">Others</div>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">138</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs text-slate-500">97</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class="text-xs">12.6% <span class="text-sm leading-none text-green-600"><em class="icon ni ni-arrow-long-up"></em></span></span>
                    </div>
                    <div class="relative table-cell align-middle py-3.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="h-[44px] w-[90px] sm:w-[130px] ms-auto">
                            <canvas class="analytics-line-small max-w-full" id="OthersData"></canvas>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- table -->
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-center gap-2 mb-4">
                    <div>
                        <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Traffic Channel</h6>
                    </div>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="h-[160px]">
                    <canvas class="analytics-doughnut max-w-full" id="TrafficChannelDoughnutData"></canvas>
                </div>
                <div class="flex flex-wrap pt-7 mx-auto w-80 max-w-full -m-1.5">
                    <div class="w-1/2 p-1.5">
                        <div class="flex items-center">
                            <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#9cabff]"></span>
                            <span class="text-xs text-slate-400">Organic Search</span>
                        </div>
                        <div class="text-lg text-slate-700 dark:text-white ms-5">4,305 <small class="text-xs text-slate-400">58.63%</small></div>
                    </div>
                    <div class="w-1/2 p-1.5">
                        <div class="flex items-center">
                            <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#b8acff]"></span>
                            <span class="text-xs text-slate-400">Social Media</span>
                        </div>
                        <div class="text-lg text-slate-700 dark:text-white ms-5">859 <small class="text-xs text-slate-400">23.94%</small></div>
                    </div>
                    <div class="w-1/2 p-1.5">
                        <div class="flex items-center">
                            <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#ffa9ce]"></span>
                            <span class="text-xs text-slate-400">Referrals</span>
                        </div>
                        <div class="text-lg text-slate-700 dark:text-white ms-5">482 <small class="text-xs text-slate-400">12.94%</small></div>
                    </div>
                    <div class="w-1/2 p-1.5">
                        <div class="flex items-center">
                            <span class="inline-block h-3 w-3 rounded-sm me-2 bg-[#f9db7b]"></span>
                            <span class="text-xs text-slate-400">Others</span>
                        </div>
                        <div class="text-lg text-slate-700 dark:text-white ms-5">138 <small class="text-xs text-slate-400">4.49%</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-center gap-2 mb-3">
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Users by Country</h6>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="vector-map h-[160px] my-4" id="worldMap"></div>
                <table class="w-full -mb-1">
                    <tr class="text-sm">
                        <td class="py-2 text-slate-400">United States</td>
                        <td class="py-2 text-slate-700 dark:text-white">12,094</td>
                        <td class="py-2 text-slate-400 text-end">23.54%</td>
                    </tr>
                    <tr class="text-sm">
                        <td class="py-2 text-slate-400">India</td>
                        <td class="py-2 text-slate-700 dark:text-white">7,984</td>
                        <td class="py-2 text-slate-400 text-end">7.16%</td>
                    </tr>
                    <tr class="text-sm">
                        <td class="py-2 text-slate-400">Turkey</td>
                        <td class="py-2 text-slate-700 dark:text-white">6,338</td>
                        <td class="py-2 text-slate-400 text-end">6.54%</td>
                    </tr>
                    <tr class="text-sm">
                        <td class="py-2 text-slate-400">Bangladesh</td>
                        <td class="py-2 text-slate-700 dark:text-white">4,749</td>
                        <td class="py-2 text-slate-400 text-end">5.29%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 2xl:col-span-6">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 pb-2 sm:p-6 sm:pb-3">
                <div class="flex justify-between items-center gap-2">
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Browser Used</h6>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>Browser</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Users</span></div>
                    <div class="relative hidden sm:table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>% Users</span></div>
                    <div class="relative table-cell align-middle py-2 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end"><span>Bounce Rate</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <em class="text-primary-600 text-xl w-7 ni ni-globe"></em>
                            <div class="text-slate-700 dark:text-white font-medium">Google Chrome</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-600">1,641</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center bg-transparent">
                            <div class="text-white rounded-sm h-1.5 bg-primary-600" data-progress="72.84%"></div>
                            <div class="text-xs text-slate-400 ps-2">72.84%</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-400">22.62%</span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <em class="text-red-600 text-xl w-7 ni ni-globe"></em>
                            <div class="text-slate-700 dark:text-white font-medium">Mozilla Firefox</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-600">497</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center bg-transparent">
                            <div class="text-white rounded-sm h-1.5 bg-primary-600" data-progress="7.93%"></div>
                            <div class="text-xs text-slate-400 ps-2">7.93%</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-400">20.49%</span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <em class="text-cyan-600 text-xl w-7 ni ni-globe"></em>
                            <div class="text-slate-700 dark:text-white font-medium">Safari Browser</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-600">187</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center bg-transparent">
                            <div class="text-white rounded-sm h-1.5 bg-primary-600" data-progress="4.87%"></div>
                            <div class="text-xs text-slate-400 ps-2">4.87%</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-400">21.34%</span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <em class="text-blue-600 text-xl w-7 ni ni-globe"></em>
                            <div class="text-slate-700 dark:text-white font-medium">Edge / IE</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-600">28</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center bg-transparent">
                            <div class="text-white rounded-sm h-1.5 bg-primary-600" data-progress="1.14%"></div>
                            <div class="text-xs text-slate-400 ps-2">1.14%</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-400">21.34%</span>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center">
                            <em class="text-purple-600 text-xl w-7 ni ni-globe"></em>
                            <div class="text-slate-700 dark:text-white font-medium">Other Browser</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-600">683</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="flex items-center bg-transparent">
                            <div class="text-white rounded-sm h-1.5 bg-primary-600" data-progress="10.76%"></div>
                            <div class="text-xs text-slate-400 ps-2">10.76%</div>
                        </div>
                    </div>
                    <div class="relative table-cell align-middle py-4.5 px-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <span class="text-xs text-slate-400">20.49%</span>
                    </div>
                </div><!-- row -->
            </div><!-- table -->
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 pb-2 sm:p-6 sm:pb-3">
                <div class="flex justify-between items-center gap-2">
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Pages View by Users</h6>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">Page</span>
                    <span class="text-xs text-slate-400">Page Views</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/</span>
                    <span class="text-xs text-slate-600">2,879</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/subscription/index.html</span>
                    <span class="text-xs text-slate-600">2,094</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/general/index.html</span>
                    <span class="text-xs text-slate-600">1,634</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/crypto/index.html</span>
                    <span class="text-xs text-slate-600">1,497</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/invest/index.html</span>
                    <span class="text-xs text-slate-600">1,349</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/subscription/profile.html</span>
                    <span class="text-xs text-slate-600">984</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/general/index-crypto.html</span>
                    <span class="text-xs text-slate-600">879</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/apps/messages/index.html</span>
                    <span class="text-xs text-slate-600">598</span>
                </div>
                <div class="flex items-center justify-between gap-4 px-5 py-2 sm:px-6 border-b border-gray-300 dark:border-gray-900 last:border-b-0">
                    <span class="text-xs text-slate-400">/general/index-crypto.html</span>
                    <span class="text-xs text-slate-600">436</span>
                </div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 md:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex justify-between items-center gap-2 mb-4">
                    <h6 class="font-heading text-sm -tracking-snug leading-tighter font-bold text-slate-700 dark:text-white">Sessions by Device</h6>
                    <div class="dropdown relative">
                        <a href="#" data-offset="0,4" data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer relative inline-flex items-center text-center align-middle text-xs font-bold leading-5 rounded-sm px-3 py-1 tracking-wide border border-gray-300 dark:border-gray-900 text-slate-600 dark:text-slate-200 bg-white dark:bg-gray-900 hover:bg-slate-600 [&.show]:bg-slate-600 hover:dark:bg-gray-800 [&.show]:dark:bg-gray-800 hover:text-white [&.show]:text-white hover:dark:text-white [&.show]:dark:text-white hover:border-slate-600 [&.show]:border-slate-600 [&.show]:dark:border-gray-800 hover:dark:border-gray-800 active:bg-slate-700 active:text-white active:border-slate-600 transition-all duration-300">
                            <span>30 Days</span>
                            <em class="text-sm leading-none font-bold -me-0.5 ms-1 ni ni-chevron-down"></em>
                        </a>
                        <div tabindex="0" class="dropdown-menu absolute min-w-[120px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                            <ul class="py-2">
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>7 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>15 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                                <li class="group active"><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><span>30 Days</span><em class="hidden group-[.active]:block text-xs font-medium leading-none absolute top-1/2 end-4 -translate-y-1/2 ni ni-check-thick"></em></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="h-[200px]">
                    <canvas class="analytics-doughnut max-w-full" id="deviceStatusData"></canvas>
                </div>
                <div class="flex flex-wrap justify-between pt-7 mx-auto w-[280px] max-w-full -m-1.5 my-auto">
                    <div class="p-1.5">
                        <em class="text-2xl leading-none text-[#798bff] ni ni-monitor"></em>
                        <div class="text-xs leading-5 mb-2 text-slate-400">Desktop</div>
                        <div class="text-lg font-medium text-slate-700 dark:text-white">84.5%</div>
                        <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                    </div>
                    <div class="p-1.5">
                        <em class="text-2xl leading-none text-[#baaeff] ni ni-mobile"></em>
                        <div class="text-xs leading-5 mb-2 text-slate-400">Mobile</div>
                        <div class="text-lg font-medium text-slate-700 dark:text-white">14.2%</div>
                        <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                    </div>
                    <div class="p-1.5">
                        <em class="text-2xl leading-none text-[#7de1f8] ni ni-tablet"></em>
                        <div class="text-xs leading-5 mb-2 text-slate-400">Tablet</div>
                        <div class="text-lg font-medium text-slate-700 dark:text-white">1.3%</div>
                        <div class="text-green-600 -ms-0.5 leading-none"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- col -->
</div><!-- grid -->
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
        var analyticOvData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Current Month",
                color: "#c4cefe",
                dash: [5,5],
                background: "transparent",
                data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750]
            }, {
                label: "Current Month",
                color: "#798bff",
                dash: [0,0],
                background: hexRGB('#798bff', .15),
                data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750]
            }]
        };
        Line({selector: '#analyticOvData', data : analyticOvData, scales: "scales4" })

        var OrganicSearchData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Organic Search",
                color: "#798bff",
                background: hexRGB('#798bff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#OrganicSearchData', data : OrganicSearchData, scales: "noScale", tooltip:"tooltipSmall" });

        var SocialMediaData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Social Media",
                color: "#b8acff",
                background: hexRGB('#b8acff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#SocialMediaData', data : SocialMediaData, scales: "noScale", tooltip:"tooltipSmall" });

        var ReferralsData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Referrals",
                color: "#ffa9ce",
                background: hexRGB('#ffa9ce', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#ReferralsData', data : ReferralsData, scales: "noScale", tooltip:"tooltipSmall" });

        var OthersData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Others",
                color: "#f9db7b",
                background: hexRGB('#f9db7b', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#OthersData', data : OthersData, scales: "noScale", tooltip:"tooltipSmall" });

        var BounceRateData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Bounce Rate",
                color: "#798bff",
                background: hexRGB('#798bff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#BounceRateData', data : BounceRateData, scales: "noScale", tooltip:"tooltipSmall" });

        var PageviewsData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Pageviews",
                color: "#9a89ff",
                background: hexRGB('#9a89ff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#PageviewsData', data : PageviewsData, scales: "noScale", tooltip:"tooltipSmall" });

        var NewUsersData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "New Users",
                color: "#798bff",
                background: hexRGB('#798bff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#NewUsersData', data : NewUsersData, scales: "noScale", tooltip:"tooltipSmall" });

        var TimeOnSiteData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
            dataUnit: 'Hours',
            lineTension: .1,
            datasets: [{
                label: "Time on Site",
                color: "#9a89ff",
                background: hexRGB('#9a89ff', .25),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector: '#TimeOnSiteData', data : TimeOnSiteData, scales: "noScale", tooltip:"tooltipSmall" });

        //Bar Charts
        var analyticAuData = {
            labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
            dataUnit: 'People',
            lineTension: .1,
            datasets: [{
                label: "Active Users",
                color: "#9cabff",
                background: "#9cabff",
                data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200, 1250, 900, 950, 1300, 1200, 1250, 650, 950, 750]
            }]
        };
        Bar({selector:'#analyticAuData', data:analyticAuData, scales: "noScaleLine" });

        // Doughnut Charts
        var deviceStatusData = {
            labels: ["Desktop", "Mobile", "Tablet"],
            dataUnit: 'People',
            legend: false,
            datasets: [{
                borderColor: "#fff",
                background: ["#9cabff", "#b8acff", "#7de1f8"],
                data: [84.5, 14.2, 1.3]
            }]
        };
        Doughnut({selector:'#deviceStatusData', data:deviceStatusData});
        var TrafficChannelDoughnutData = {
            labels: ["Organic Search", "Social Media", "Referrals", "Others"],
            dataUnit: 'People',
            legend: false,
            datasets: [{
                borderColor: "#fff",
                background: ["#798bff", "#b8acff", "#ffa9ce", "#f9db7b"],
                data: [4305, 859, 482, 138]
            }]
        };
        Doughnut({selector:'#TrafficChannelDoughnutData', data:TrafficChannelDoughnutData});

    </script>
@endpush