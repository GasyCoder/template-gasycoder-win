@extends('layouts.main', ['title'=> 'Avatar'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Avatar</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Documentation and examples for avatars.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Variations</h5>
            <p class="text-sm leading-6 text-slate-400">Carefully designed avatar examples with diffrent shape, layout and states.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Default Style's</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-full font-medium">
                            <em class="ni ni-user-alt"></em>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Status Style's</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                            <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-full font-medium">
                            <em class="ni ni-user-alt"></em>
                            <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-gray-500 dark:bg-gray-300"></div>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            <div class="absolute rounded-full end-0 bottom-0 h-3 w-3 border-2 border-white dark:border-gray-950 bg-yellow-600"></div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Square Style's</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-md font-medium">
                            <em class="ni ni-user-alt"></em>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                            <img class="rounded-md" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Status Style's</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                            <span>AB</span>
                            <div class="absolute rounded-full -end-1.5 -bottom-1.5 h-3 w-3 border-2 border-white dark:border-gray-950 bg-green-600"></div>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-md font-medium">
                            <em class="ni ni-user-alt"></em>
                            <div class="absolute rounded-full -end-1.5 -bottom-1.5 h-3 w-3 border-2 border-white dark:border-gray-950 bg-gray-500 dark:bg-gray-300"></div>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                            <img class="rounded-md" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            <div class="absolute rounded-full -end-1.5 -bottom-1.5 h-3 w-3 border-2 border-white dark:border-gray-950 bg-yellow-600"></div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Group Style's</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="flex">
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <span>AB</span>
                            </div>
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-green-600 h-10 w-10 rounded-full font-medium">
                                <span>NL</span>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <span>AB</span>
                            </div>
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="first:ms-0 -ms-[20%] relative flex-shrink-0 flex items-center justify-center text-sm border-2 border-white dark:border-gray-950 text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/4 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Group Style's S2</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex h-10 w-10">
                            <div class="absolute top-0 end-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                <span>A</span>
                            </div>
                            <div class="absolute bottom-0 start-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-green-600 rounded-full font-medium">
                                <span>N</span>
                            </div>
                        </div>
                        <div class="relative flex h-10 w-10">
                            <div class="absolute top-0 end-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                <span>A</span>
                            </div>
                            <div class="absolute bottom-0 start-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="relative flex h-10 w-10">
                            <div class="absolute top-0 end-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/b-sm.jpg') }}" alt="">
                            </div>
                            <div class="absolute bottom-0 start-0 flex-shrink-0 h-[70%] w-[70%] flex items-center justify-center text-xs border-2 border-white dark:border-gray-950 text-white bg-primary-600 rounded-full font-medium">
                                <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Color</h5>
            <p class="text-sm leading-6 text-slate-400">Add any of tailwind text and bg class combinations to change the appearance of a avatar.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Highlighted colors</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-slate-900 h-10 w-10 rounded-full font-medium">
                            <span>NL</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-yellow-600 h-10 w-10 rounded-full font-medium">
                            <span>CH</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-red-600 h-10 w-10 rounded-full font-medium">
                            <span>SW</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-green-600 h-10 w-10 rounded-full font-medium">
                            <span>GO</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-cyan-600 h-10 w-10 rounded-full font-medium">
                            <span>PS</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-blue-600 h-10 w-10 rounded-full font-medium">
                            <span>DM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-pink-600 h-10 w-10 rounded-full font-medium">
                            <span>HS</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-indigo-600 h-10 w-10 rounded-full font-medium">
                            <span>SM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-black h-10 w-10 rounded-full font-medium">
                            <span>TM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-slate-600 h-10 w-10 rounded-full font-medium">
                            <span>JC</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-orange-600 h-10 w-10 rounded-full font-medium">
                            <span>VA</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-purple-600 h-10 w-10 rounded-full font-medium">
                            <span>EH</span>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Pale colors</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-primary-100 dark:bg-primary-950 text-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-slate-100 dark:bg-slate-900 text-slate-900 dark:text-slate-100 h-10 w-10 rounded-full font-medium">
                            <span>NL</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-yellow-100 dark:bg-yellow-950 text-yellow-600 h-10 w-10 rounded-full font-medium">
                            <span>CH</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-red-100 dark:bg-red-950 text-red-600 h-10 w-10 rounded-full font-medium">
                            <span>SW</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-green-100 dark:bg-green-950 text-green-600 h-10 w-10 rounded-full font-medium">
                            <span>GO</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-cyan-100 dark:bg-cyan-950 text-cyan-600 h-10 w-10 rounded-full font-medium">
                            <span>PS</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-blue-100 dark:bg-blue-950 text-blue-600 h-10 w-10 rounded-full font-medium">
                            <span>DM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-pink-100 dark:bg-pink-950 text-pink-600 h-10 w-10 rounded-full font-medium">
                            <span>HS</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-indigo-100 dark:bg-indigo-950 text-indigo-600 h-10 w-10 rounded-full font-medium">
                            <span>SM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-gray-200 dark:bg-gray-800 text-black dark:text-white h-10 w-10 rounded-full font-medium">
                            <span>TM</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-slate-50 dark:bg-slate-900 text-slate-600 h-10 w-10 rounded-full font-medium">
                            <span>JC</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-orange-100 dark:bg-orange-950 text-orange-600 h-10 w-10 rounded-full font-medium">
                            <span>VA</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm bg-purple-100 dark:bg-purple-950 text-purple-600 h-10 w-10 rounded-full font-medium">
                            <span>EH</span>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Example with Sizes</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full md:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Rounded Avatars</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-5xl text-white bg-primary-600 h-28 w-28 rounded-full font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-3xl text-white bg-primary-600 h-20 w-20 rounded-full font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-primary-600 h-16 w-16 rounded-full font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-[9px] text-white bg-primary-600 h-6 w-6 rounded-full font-medium">
                            <span>A</span>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full md:w-1/2 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">Squared Avatars</h6>
                    <div class="flex flex-wrap gap-3">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-5xl text-white bg-primary-600 h-28 w-28 rounded-md font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-3xl text-white bg-primary-600 h-20 w-20 rounded-md font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xl text-white bg-primary-600 h-16 w-16 rounded-md font-normal">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-md font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-primary-600 h-8 w-8 rounded-md font-medium">
                            <span>AB</span>
                        </div>
                        <div class="relative flex-shrink-0 flex items-center justify-center text-[9px] text-white bg-primary-600 h-6 w-6 rounded-md font-medium">
                            <span>A</span>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Use Case</h5>
            <p class="text-sm leading-6 text-slate-400">Lets take a look at some real use case for avatar.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full sm:w-1/2 md:w-1/3 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">User Card 1</h6>
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="ms-4">
                            <div class="text-xs font-medium leading-none pt-0.5 pb-1.5 text-primary-500 group-hover:text-primary-600">Administrator</div>
                            <div class="text-slate-600 dark:text-slate-400 text-xs font-bold flex items-center">Abu Bin Ishityak <em class="text-sm leading-none ms-1 ni ni-chevron-down"></em></div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">User Card 2</h6>
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-sm text-white bg-primary-600 h-10 w-10 rounded-full font-medium">
                            <img class="rounded-full" src="{{ asset('images/avatar/c-sm.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <div class="text-slate-700 dark:text-white text-sm font-bold flex items-center">Keith Jensen</div>
                            <div class="text-xs font-normal leading-none pt-0.5 pb-1.5 text-slate-400">keith@softnio.com</div>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="w-full sm:w-1/2 md:w-1/3 p-3.5">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-3">User Card 3</h6>
                    <div class="flex items-center">
                        <div class="relative flex-shrink-0 flex items-center justify-center text-xs text-white bg-indigo-400 h-8 w-8 rounded-full font-medium">
                            <span>AB</span>
                        </div>
                        <div class="ms-3">
                            <div class="text-slate-600 dark:text-slate-400 text-xs font-bold flex items-center">Abu Bin Ishityak</div>
                        </div>
                    </div>
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div><!-- block -->

</div>
@endsection