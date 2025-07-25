@extends('layouts.main', ['title'=> 'Copywriter Dashboard'])
@section('content')
<div class="flex justify-between items-center pb-5 relative">
    <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white">Welcome Back!</h3>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="rounded-md bg-primary-600 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-base text-white">Words Available</div>
                    <a href="#" class="text-white">See History</a>
                </div>
                <h5 class="font-heading font-bold text-3xl leading-tighter tracking-tight mb-2 text-white">452 <small class="text-2xl font-normal">words</small></h5>
                <div class="text-sm text-white text-opacity-75 mt-1"><span class="text-white">1548</span>/2000 free words generated</div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="rounded-md bg-orange-400 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-base text-white">Drafts Available</div>
                    <a href="#" class="text-white">See All</a>
                </div>
                <h5 class="font-heading font-bold text-3xl leading-tighter tracking-tight mb-2 text-white">3 <small class="text-2xl font-normal">Drafts</small></h5>
                <div class="text-sm text-white text-opacity-75 mt-1"><span class="text-white">7</span>/10 free drafts created</div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="rounded-md bg-blue-500 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-base text-white">Documents Available</div>
                    <a href="#" class="text-white">See All</a>
                </div>
                <h5 class="font-heading font-bold text-3xl leading-tighter tracking-tight mb-2 text-white">6 <small class="text-2xl font-normal">Documents</small></h5>
                <div class="text-sm text-white text-opacity-75 mt-1"><span class="text-white">4</span>/10 free documents generated</div>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="rounded-md bg-red-600 h-full">
            <div class="p-5 sm:p-6">
                <div class="flex items-center justify-between mb-2">
                    <div class="text-base text-white">Tools Available</div>
                    <a href="#" class="text-white">All Tools</a>
                </div>
                <h5 class="font-heading font-bold text-3xl leading-tighter tracking-tight mb-2 text-white">12 <small class="text-2xl font-normal">Tools</small></h5>
                <div class="text-sm text-white text-opacity-75 mt-1"><span class="text-white">4</span>/16 tools used to generate</div>
            </div>
        </div>
    </div><!-- col -->
</div><!-- grid -->
<div class="flex justify-between items-center pb-4 relative">
    <h3 class="font-heading font-bold text-2xl leading-tighter tracking-tight text-slate-700 dark:text-white">Popular Templates</h3>
    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">Explore All</a>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7 pb-7">
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-primary-600 bg-primary-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium mb-3">
                    <em class="icon ni ni-bulb-fill"></em>
                </div>
                <h5 class="text-xl font-heading font-bold text-slate-700 dark:text-white mb-1">Blog Ideas</h5>
                <p class="text-slate-600 dark:text-slate-400">Produce trendy blog ideas for your business that engages.</p>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-cyan-600 bg-cyan-100 dark:bg-primary-950 h-10 w-10 rounded-full font-medium mb-3">
                    <em class="icon ni ni-spark-fill"></em>
                </div>
                <h5 class="text-xl font-heading font-bold text-slate-700 dark:text-white mb-1">Social Media Posts</h5>
                <p class="text-slate-600 dark:text-slate-400">Creative and engaging social media post for your brand.</p>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-red-600 bg-red-100 dark:bg-red-950 h-10 w-10 rounded-full font-medium mb-3">
                    <em class="icon ni ni-bulb-fill"></em>
                </div>
                <h5 class="text-xl font-heading font-bold text-slate-700 dark:text-white mb-1">YouTube Tags Generator</h5>
                <p class="text-slate-600 dark:text-slate-400">Generate SEO optimized keywords for your YouTube video.</p>
            </div>
        </div>
    </div><!-- col -->
    <div class="col-span-12 sm:col-span-6 2xl:col-span-3">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="p-5 sm:p-6">
                <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-purple-600 bg-purple-100 dark:bg-purple-950 h-10 w-10 rounded-full font-medium mb-3">
                    <em class="icon ni ni-laptop"></em>
                </div>
                <h5 class="text-xl font-heading font-bold text-slate-700 dark:text-white mb-1">Website Headlines/Copy</h5>
                <p class="text-slate-600 dark:text-slate-400">Generate professional copy for your website that converts users.</p>
            </div>
        </div>
    </div><!-- col -->
</div><!-- grid -->
<div class="flex justify-between items-center pb-4 relative">
    <h3 class="font-heading font-bold text-2xl leading-tighter tracking-tight text-slate-700 dark:text-white">Recent Documents</h3>
    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-700">See All</a>
</div><!-- block head -->
<div class="grid grid-flow-dense grid-cols-12 gap-7">
    <div class="col-span-12">
        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <div class="table w-full text-sm text-slate-400">
                <div class="table-row [&>*]:border-b [&>*]:last:border-b-0">
                    <div class="relative table-cell align-middle w-13 px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="did-all">
                    </div>
                    <div class="relative table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Name</span>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Type</span>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <span class=" text-slate-400 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight">Last Modified</span>
                    </div>
                    <div class="relative table-cell align-middle px-2 py-2 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900"><span>&nbsp;</span></div>
                </div>
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle w-13 px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="did-01">
                    </div>
                    <div class="relative table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-base text-slate-600 dark:text-white">The Impact of Artificial Intelligence on the Future of Work</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="relative inline-flex rounded-full px-2 border border-gray-300 dark:border-gray-900 bg-gray-300 dark:bg-gray-900 text-slate-600 dark:text-slate-200 dark:text-slate-200 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Document</div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <ul class="flex flex-wrap gap-x-2">
                            <li>Feb 15,2023</li>
                            <li>02:31 PM</li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-eye"></em><span>View Document</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-edit"></em><span>Rename</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-trash"></em><span>Move to Trash</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle w-13 px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="did-02">
                    </div>
                    <div class="relative table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-base text-slate-600 dark:text-white">How to Boost Your Online Presence with Social Media Marketing</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="relative inline-flex rounded-full px-2 border border-blue-100 dark:border-blue-950 bg-blue-100 dark:bg-blue-950 text-blue-500 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Social Media</div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <ul class="flex flex-wrap gap-x-2">
                            <li>Feb 15,2023</li>
                            <li>02:31 PM</li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-eye"></em><span>View Document</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-edit"></em><span>Rename</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-trash"></em><span>Move to Trash</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle w-13 px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="did-03">
                    </div>
                    <div class="relative table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-base text-slate-600 dark:text-white">Top 10 Tips for Effective Time Management in the Workplace</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="relative inline-flex rounded-full px-2 border border-purple-100 dark:border-purple-950 bg-purple-100 dark:bg-purple-950 text-purple-500 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Blog Content</div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <ul class="flex flex-wrap gap-x-2">
                            <li>Feb 15,2023</li>
                            <li>02:31 PM</li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-eye"></em><span>View Document</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-edit"></em><span>Rename</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-trash"></em><span>Move to Trash</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <div class="table-row transition-all duration-300 [&>*]:border-b [&>*]:last:border-b-0 hover:bg-gray-50 hover:dark:bg-gray-1000">
                    <div class="relative table-cell align-middle w-13 px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="did-04">
                    </div>
                    <div class="relative table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="text-base text-slate-600 dark:text-white">Transforming Healthcare with Big Data: Exploring the Opportunities</div>
                    </div>
                    <div class="relative hidden sm:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <div class="relative inline-flex rounded-full px-2 border border-yellow-100 dark:border-yellow-950 bg-yellow-100 dark:bg-yellow-950 text-yellow-600 text-xxs text-center font-medium leading-4.5 tracking-snug whitespace-nowrap align-middle">Website Copy &amp; SEO</div>
                    </div>
                    <div class="relative hidden lg:table-cell align-middle px-2 py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900">
                        <ul class="flex flex-wrap gap-x-2">
                            <li>Feb 15,2023</li>
                            <li>02:31 PM</li>
                        </ul>
                    </div>
                    <div class="relative table-cell align-middle py-4 first:ps-6 last:pe-6 border-gray-300 dark:border-gray-900 text-end">
                        <div class="dropdown relative">
                            <button data-offset="-14, -8" data-rtl-offset="14, -8"  data-placement="bottom-end"  data-rtl-placement="bottom-start" class="dropdown-toggle *:pointer-events-none peer -me-2 inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 [&.show]:before:h-10 [&.show]:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 [&.show]:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900">
                                <em class="text-xl text-slate-400 dark:text-slate-300 ni ni-more-h"></em>
                            </button>
                            <div class="dropdown-menu absolute min-w-[160px] border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow hidden peer-[.show]:block z-[1000]">
                                <ul class="py-2">
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-eye"></em><span>View Document</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-edit"></em><span>Rename</span></a></li>
                                    <li><a class="relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300" href="#"><em class="text-lg leading-none w-7 text-start opacity-80 ni ni-trash"></em><span>Move to Trash</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>
    </div><!-- col -->
</div><!-- grid -->
@endsection