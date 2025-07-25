@extends('layouts.main', ['title'=> 'Calendar'])
@section('content')
<div class="flex justify-between items-center pb-5 md:pb-7 relative">
    <div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white">
            Calendar
        </h3>
    </div>
    <div>
        <button id="addEvent" data-target="#eventFormModal" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-4.5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">
            <em class="text-xl leading-4.5 ni ni-plus"></em><span class="ms-3">Add Event</span>
        </button>
    </div>
</div><!-- block head -->
<div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900  p-5 sm:p-6">
    <div class="js-calendar" id="fullCalendar"></div>
</div>
@endsection

@push('modals')

<div id="eventPreviewModal" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full md:w-[600px] sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        
        <div class="modal-header flex items-center justify-between px-5 sm:px-6 py-3 sm:py-4 rounded-t-md border-b border-gray-200 dark:border-gray-900">
            <h4 class="modal-title event-title text-xl font-heading font-bold text-slate-700 dark:text-white"></h4>
            <button class="modal-close *:pointer-events-none text-current dark:text-current opacity-80 hover:opacity-100 transition-all duration-300">
                <em class="text-xl ni ni-cross"></em>
            </button>
        </div>
        <div class="modal-body px-5 sm:px-6 py-4 sm:py-5">
            <div>
            <div class="flex flex-wrap -mx-4 gap-y-4">
                <div class="w-1/2 px-4">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-2">Start Time</h6>
                    <p class="event-start text-sm text-slate-600 dark:text-slate-400"></p>
                </div>
                <div class="w-1/2 px-4">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-2">End Time</h6>
                    <p class="event-end text-sm text-slate-600 dark:text-slate-400"></p>
                </div>
                <div class="w-full px-4">
                    <h6 class="text-slate-400 dark:text-slate-300 whitespace-nowrap uppercase font-bold text-xs tracking-relaxed leading-tight mb-2">Event Details</h6>
                    <p class="event-description text-sm text-slate-600 dark:text-slate-400"></p>
                </div>
            </div>
            </div>
        </div>
        <div class="modal-footer flex items-center justify-between px-5 sm:px-6 pb-4 sm:pb-5 gap-3">
            <button type="button" data-target="#eventFormModal" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" id="editEvent">Edit Event</button>
            <button type="button" data-target="#eventDeleteModal" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-100 dark:border-red-950 text-red-600 bg-red-100 dark:bg-red-950 hover:bg-red-600 hover:dark:bg-red-600 hover:border-red-600 hover:dark:border-red-600 hover:text-white active:bg-red-700 active:dark:bg-red-700 transition-all duration-300">Delete</button>
        </div>
    </div>
</div>

<div id="eventDeleteModal" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="modal-body px-5 sm:px-15 md:px-18 py-9 sm:py-15 md:py-18 text-center">
            <div class="h-20 w-20 bg-red-600 rounded-full flex items-center justify-center text-white mx-auto"><em class="text-4xl/none ni ni-cross"></em></div>
            <h3 class="text-2xl font-heading font-bold leading-tighter text-slate-700 dark:text-white mt-6 mb-3">Are You Sure?</h3>
            <p class="text-sm text-slate-400 dark:text-slate-300">This event data will be removed permanently.</p>
            <ul class="flex justify-center gap-6 pt-5">
                <li><button type="button" class="modal-close relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-600 text-white bg-green-600 hover:bg-green-700 hover:border-green-700 active:bg-green-800 transition-all duration-300" id="deleteEvent">Yes Delete it!</button></li>
                <li><button type="button" class="modal-close relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-100 dark:border-red-950 text-red-600 bg-red-100 dark:bg-red-950 hover:bg-red-600 hover:dark:bg-red-600 hover:border-red-600 hover:dark:border-red-600 hover:text-white active:bg-red-700 active:dark:bg-red-700 transition-all duration-300">Cancel</button></li>
            </ul>
        </div>
    </div>
</div>

<div id="eventFormModal" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full md:w-[600px] sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">

        <div class="modal-header flex items-center justify-between px-5 sm:px-6 py-3 sm:py-4 rounded-t-md border-b border-gray-200 dark:border-gray-900">
            <h4 class="modal-title fc-form-title text-xl font-heading font-bold text-slate-700 dark:text-white"></h4>
            <button class="modal-close *:pointer-events-none text-current dark:text-current opacity-80 hover:opacity-100 transition-all duration-300">
                <em class="text-xl ni ni-cross"></em>
            </button>
        </div>
        <div class="modal-body px-5 sm:px-6 py-4 sm:py-5">
            <div class="flex flex-wrap -m-3.5">
                <div class="w-full p-3.5">
                    <div class="form-group">
                        <label for="eventTitle" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Event Title</label>
                        <div class="relative">
                            <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="eventTitle" placeholder="Event Title">
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="form-group">
                        <label for="eventStartDate" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Event Starts</label>
                        <div class="flex flex-wrap -m-1.5">
                            <div class="w-7/12 p-1.5">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all fc-event-datepicker" id="eventStartDate" placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="w-5/12 p-1.5">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all fc-event-timepicker" id="eventStartTime" placeholder="hh-mm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 p-3.5">
                    <div class="form-group">
                        <label for="eventEndDate" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Event Ends</label>
                        <div class="flex flex-wrap -m-1.5">
                            <div class="w-7/12 p-1.5">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all fc-event-datepicker" id="eventEndDate" placeholder="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="w-5/12 p-1.5">
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all fc-event-timepicker" id="eventEndTime" placeholder="hh-mm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3.5">
                    <div class="form-group">
                        <label for="eventDescription" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Event Description</label>
                        <div class="relative">
                            <textarea class="block w-full text-sm leading-4.5 px-4 py-2.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="eventDescription" placeholder="Event Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3.5">
                    <div class="form-group fc-category-select">
                        <label for="eventCategory" class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Event Category</label>
                        <div class="relative">
                            <select id="eventCategory" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer flex items-center justify-between px-5 sm:px-6 pb-4 sm:pb-5 gap-3">
            <button type="button" class="modal-close relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" id="eventAdd">Add Event</button>
            <button type="button" class="modal-close relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300" id="eventUpdate">Update Event</button>
            <button type="button" class="modal-close relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-100 dark:border-red-950 text-red-600 bg-red-100 dark:bg-red-950 hover:bg-red-600 hover:dark:bg-red-600 hover:border-red-600 hover:dark:border-red-600 hover:text-white active:bg-red-700 active:dark:bg-red-700 transition-all duration-300">Discard</button>
        </div>
    </div>
</div>
@endpush

@push('scripts')
    @vite(['resources/js/apps.js'])
@endpush