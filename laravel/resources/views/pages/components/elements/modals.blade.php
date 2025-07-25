@extends('layouts.main', ['title'=> 'Modals'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-sans">Modals</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Documentation and examples for avatars.</p>
    </div>
    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Example with Variations</h5>
            <p class="text-sm leading-6 text-slate-400">Check out our modal component. <code class="font-mono text-pink-500">.modal</code> must have an id, use <code class="font-mono text-pink-500">.modal-toggle</code> with <code class="font-mono text-pink-500">[data-target="#{ModalID}"]</code> to create a toggler for modal. Also add <code class="font-mono text-pink-500">.modal-close</code> with the elements you want to close modal on click.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-5">
                <button data-target="#ModalDefault" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Default</button>
                <button data-target="#ModalSmall" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Small</button>
                <button data-target="#ModalLarge" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Large</button>
                <button data-target="#ModalTop" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Top</button>
                <button data-target="#ModalBottom" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Bottom</button>
                <button data-target="#ModalZoom" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal Zoom</button>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Use Case Modal</h5>
            <p class="text-sm leading-6 text-slate-400">Some use-case example of modals that helps in develop your projects.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="flex flex-wrap gap-5">
                <button data-target="#ModalWithForm" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Modal With Form</button>
                <button data-target="#ModalWithTabs" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-slate-800 text-white bg-slate-800 hover:bg-slate-900 hover:border-slate-900 active:bg-slate-950 transition-all duration-300">Modal With Tabs</button>
                <button data-target="#ModalSuccess" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-green-600 text-white bg-green-600 hover:bg-green-700 hover:border-green-700 active:bg-green-800 transition-all duration-300">Modal Success</button>
                <button data-target="#ModalDanger" class="modal-toggle relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-red-600 text-white bg-red-600 hover:bg-red-700 hover:border-red-700 active:bg-red-800 transition-all duration-300">Modal Danger</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('modals')
<div id="ModalDefault" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalSmall" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[360px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalLarge" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full md:w-[720px] sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalTop" class="modal group fixed inset-0 flex items-start py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalBottom" class="modal group fixed inset-0 flex items-end py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalZoom" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-300 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform duration-300 ease-out scale-95 group-[.show]:scale-100 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Modal Title</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalWithForm" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <div class="flex flex-shrink-0 items-center justify-between px-5 sm:px-6 py-4 rounded-t-[inherit] border-b border-gray-200 dark:border-gray-800">
            <h5 class="text-xl -tracking-snug font-sans font-bold text-slate-700 dark:text-white">Customer Info</h5>
            <button class="modal-close *:pointer-events-none text-slate-500 hover:text-slate-700 dark:text-white">
                <em class="text-2xl ni ni-cross"></em>
            </button>
        </div>
        <div class="px-5 sm:px-6 py-5 sm:py-6">
            <form action="#">
                <div class="relative mb-5 last:mb-0">
                    <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciFullName">Full Name</label>
                    <div class="relative">
                        <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciFullName" autocomplete="off">
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciEmailAddress">Email address</label>
                    <div class="relative">
                        <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciEmailAddress" autocomplete="off">
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciPhoneNo">Phone No</label>
                    <div class="relative">
                        <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciPhoneNo" autocomplete="off">
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Communication</label>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <div class="inline-flex">
                            <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciEmail">
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciEmail">Email</label>
                        </div>
                        <div class="inline-flex">
                            <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciSMS">
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciSMS">SMS</label>
                        </div>
                        <div class="inline-flex">
                            <input type="checkbox" class="peer h-4 w-4 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-900 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" id="ciPhone">
                            <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-xs leading-4 ps-2 cursor-pointer inline-block" for="ciPhone">Phone</label>
                        </div>
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="ciAmount">Amount</label>
                    <div class="relative">
                        <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="ciAmount" autocomplete="off">
                    </div>
                </div>
                <div class="relative mb-5 last:mb-0">
                    <button class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                </div>
            </form>
        </div>
        <div class="px-5 sm:px-6 py-4 bg-gray-200 dark:bg-gray-1000 rounded-b-[inherit] text-end">
            <span class="text-sm text-slate-400">Modal Footer Text</span>
        </div>
    </div>
</div>
<div id="ModalWithTabs" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body relative bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] md:w-[720px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <button class="modal-close *:pointer-events-none absolute top-3 end-3 text-slate-500 hover:text-slate-700 dark:text-white">
            <em class="text-xl ni ni-cross"></em>
        </button>
        <div class="px-5 py-6 sm:p-8">
            <h5 class="text-xl font-bold font-sans text-slate-700 dark:text-white">Update Profile</h5>
            <ul class="tab-nav flex flex-wrap font-sans text-sm border-b border-gray-300 dark:border-gray-900">
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600 active" data-target="#personal-info">Personal</button>
                </li>
                <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                    <button class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 [&.active]:after:opacity-100 [&.active]:text-primary-600" data-target="#personal-address">Address</button>
                </li>
            </ul>
            <div class="tab-content mt-5">
                <div class="tab-panel hidden [&.active]:block active" id="personal-info">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="FullName">Full Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="Abu Bin Ishtiyak" id="FullName" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="DisplayName">Display Name</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="Ishtiyak" id="DisplayName" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="PhoneNumber">Phone Number</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="+880" id="PhoneNumber" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="DateofBirth">Date of Birth</label>
                                <div class="relative">
                                    <input placeholder="dd/mm/yyyy" type="text" data-start-view="2" autocomplete="off" id="DateofBirth" class="js-datepicker block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="flex">
                                <input type="checkbox" class="peer relative h-6 w-12 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded-full transition-all border-2 border-gray-300 dark:border-gray-900 checked:bg-none after:absolute after:transition-all after:duration-300 after:h-4 after:w-4 after:rounded-full after:bg-gray-300 after:top-0.5 after:start-0.5 checked:after:bg-white checked:after:start-6.5  cursor-pointer disabled:cursor-not-allowed" id="checkDisplayNmae">
                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="checkDisplayNmae">Use full name to display</label>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                <li>
                                    <button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Update Profile</button>
                                </li>
                                <li>
                                    <button class="modal-close *:pointer-events-none inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                </li>
                            </ul>
                        </div><!-- col -->
                    </div><!-- grid -->
                </div>
                <div class="tab-panel hidden [&.active]:block" id="personal-address">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="AddressLine1">Address Line 1</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="2337 Kildeer Drive" id="AddressLine1" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="AddressLine2">Address Line 2</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="AddressLine2" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="State">State</label>
                                <div class="relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" value="Kentucky" id="State" autocomplete="off">
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="Country">Country</label>
                                <div class="relative">
                                    <select id="Country" class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                <li>
                                    <button class="modal-close *:pointer-events-none relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Update Address</button>
                                </li>
                                <li>
                                    <button class="modal-close *:pointer-events-none inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                </li>
                            </ul>
                        </div><!-- col -->
                    </div><!-- grid -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ModalSuccess" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <button class="modal-close *:pointer-events-none absolute top-3 end-3 text-slate-500 hover:text-slate-700 dark:text-white">
            <em class="text-xl ni ni-cross"></em>
        </button>
        <div class="px-5 py-6 sm:p-15">
            <div class="text-center">
                <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-green-600 h-20 w-20 rounded-full font-normal mx-auto">
                    <em class="text-3xl/none ni ni-check"></em>
                </div>
                <h4 class="font-sans font-bold text-xl lg:text-2xl text-slate-700 dark:text-white py-6">Congratulations!</h4>
                <div class="mb-5">
                    <div class="text-base/tight -tracking-snug text-slate-600 dark:text-slate-200 mb-2">You’ve successfully bought <strong>0.5968</strong> BTC for <strong>200.00</strong> USD</div>
                    <span class="text-xs text-slate-400">Learn when you reciveve bitcoin in your wallet. <a class="text-primary-500 hover:text-primary-700" href="#"> Click here</a></span>
                </div>
                <a href="#" class="modal-close *:pointer-events-none relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 min-w-[140px]">OK</a>
            </div>
        </div>
        <div class="px-5 sm:px-6 py-5 bg-gray-100 dark:bg-gray-1000 rounded-b-[inherit] text-center">
            <p class="text-sm text-slate-400">Earn upto $25 for each friend your refer! <a class="text-primary-500 hover:text-primary-700" href="#">Invite friends</a></p>
        </div>
    </div>
</div>
<div id="ModalDanger" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
    <div class="modal-body bg-white dark:bg-gray-950 rounded-md w-full sm:w-[520px] mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0 max-h-full overflow-auto">
        <button class="modal-close *:pointer-events-none absolute top-3 end-3 text-slate-500 hover:text-slate-700 dark:text-white">
            <em class="text-xl ni ni-cross"></em>
        </button>
        <div class="px-5 py-6 sm:p-15">
            <div class="text-center">
                <div class="relative flex-shrink-0 flex items-center justify-center text-white bg-red-600 h-20 w-20 rounded-full font-normal mx-auto">
                    <em class="text-3xl/none ni ni-cross"></em>
                </div>
                <h4 class="font-sans font-bold text-xl lg:text-2xl text-slate-700 dark:text-white py-6">Unable to Process!</h4>
                <div class="mb-5">
                    <div class="text-base -tracking-snug text-slate-600 dark:text-slate-200 mb-2">We are sorry, we were unable to process your payment. Please try after sometimes.</div>
                    <span class="text-sm text-slate-400">If you need help please contact us at (855) 485-7373.</span>
                </div>
                <a href="#" class="modal-close *:pointer-events-none relative inline-flex items-center justify-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-gray-200 dark:border-gray-800 text-gray-600 dark:text-gray-400 bg-gray-200 dark:bg-gray-800 hover:dark:text-gray-600 active:dark:text-gray-600 hover:bg-gray-400 hover:dark:bg-gray-400 hover:border-gray-400  hover:dark:border-gray-400 active:bg-gray-600 active:dark:bg-gray-600 transition-all duration-300 min-w-[140px]">Return</a>
            </div>
        </div>
    </div>
</div>
@endpush