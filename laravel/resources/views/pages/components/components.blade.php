@extends('layouts.main', ['title'=> 'Components'])
@php
    $list = [
    ['title'=>'Alerts','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.alerts'],
    ['title'=>'Accordions','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.accordions'],
    ['title'=>'Avatar','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.avatar'],
    ['title'=>'Badges','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.badges'],
    ['title'=>'Buttons','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.buttons'],
    ['title'=>'Button Group','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.buttons-group'],
    ['title'=>'Breadcrumb','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.breadcrumb'],
    ['title'=>'Cards','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.cards'],
    ['title'=>'Dropdowns','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.list-dropdown'],
    ['title'=>'Modals','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.modals'],
    ['title'=>'Pagination','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.pagination'],
    ['title'=>'Popover','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.popover'],
    ['title'=>'Progress','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.progress'],
    ['title'=>'Spinner','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.spinner'],
    ['title'=>'Tabs','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.tabs'],
    ['title'=>'Toasts','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.toast'],
    ['title'=>'Tooltip','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.elements.tooltip'],
    ['title'=>'Basic Tables','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.tables.basic-table'],
    ['title'=>'Datatables','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.tables.data-table'],
    ['title'=>'Form Elements','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.form-elements'],
    ['title'=>'Form Upload','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.form-upload'],
    ['title'=>'Checkbox Radio','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.checkbox-radio'],
    ['title'=>'Advanced Control','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.advanced-controls'],
    ['title'=>'Date & Time Picker','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.datetime-picker'],
    ['title'=>'Form Validation','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.forms.form-validation'],
    ['title'=>'Chart JS','desc'=>'A Handful and flexible alert messages examples.','route'=>'components.chartjs'],
]
@endphp
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ url('/') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Dashboard</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Components</h2>
        <p class="text-lg text-slate-600 mb-4"><strong>DashWind</strong> includes all the necessary components and elements with utility classes that helps you to create your web apps or application faster.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="flex flex-wrap -m-3.5">
            @foreach ( $list as $item)    
                <div class="p-3.5 w-full lg:w-1/2">
                    <a href="{{route($item['route'])}}" class="group relative block border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full p-6 overflow-hidden">
                        <div class="flex items-center justify-between">
                            <div>
                                <h6 class="font-heading font-bold text-base/tighter -tracking-snug text-slate-700 dark:text-white mb-1">{{$item['title']}}</h6>
                                <p class="text-sm text-slate-400">{{$item['desc']}}</p>
                            </div>
                            <div class="-me-2">
                                <span class="inline-flex items-center justify-center isolate relative h-9 w-9 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 hover:before:h-10 hover:before:w-10 group-hover:before:h-10 group-hover:before:w-10 before:rounded-full before:opacity-0 hover:before:opacity-100 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2 before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 dark:before:bg-gray-900"><em class="text-xl/none rtl:-scale-x-100 ni ni-chevron-right"></em></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection