@extends('layouts.main', ['title'=> 'Custom SVG Icons'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Custom SVG Icons</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400"><strong>Softnio</strong> team design some beautiful and eyecatching custom icons that helps much in your dashboard. All the icons are in SVG format so it never blury in retina device and you can update color easily be edit SVG code.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.account-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Account Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full [&>svg]:mx-auto">
                        @include('components.icons.bills')
                    </div>
                    <span class="text-xxs text-slate-400">Bills</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.card-credit')
                    </div>
                    <span class="text-xxs text-slate-400">Card Credit</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.card-debit')
                    </div>
                    <span class="text-xxs text-slate-400">Card Debit</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.card-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Card Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.code-scan')
                    </div>
                    <span class="text-xxs text-slate-400">Code Scan</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.codes')
                    </div>
                    <span class="text-xxs text-slate-400">Codes</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.connect-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Connect Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.customize')
                    </div>
                    <span class="text-xxs text-slate-400">Customize</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.devices')
                    </div>
                    <span class="text-xxs text-slate-400">Devices</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.emails')
                    </div>
                    <span class="text-xxs text-slate-400">Emails</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-doc')
                    </div>
                    <span class="text-xxs text-slate-400">File Doc</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-excel')
                    </div>
                    <span class="text-xxs text-slate-400">File Excel</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-media')
                    </div>
                    <span class="text-xxs text-slate-400">File Media</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-pdf')
                    </div>
                    <span class="text-xxs text-slate-400">File PDF</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-word')
                    </div>
                    <span class="text-xxs text-slate-400">File Word</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-zip')
                    </div>
                    <span class="text-xxs text-slate-400">File ZIP</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.invoice')
                    </div>
                    <span class="text-xxs text-slate-400">Invoice</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.loop')
                    </div>
                    <span class="text-xxs text-slate-400">Loop</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.password-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Password Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.profile')
                    </div>
                    <span class="text-xxs text-slate-400">Profile</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.recheck')
                    </div>
                    <span class="text-xxs text-slate-400">Recheck</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.reports')
                    </div>
                    <span class="text-xxs text-slate-400">Reports</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.settings')
                    </div>
                    <span class="text-xxs text-slate-400">Settings</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.support')
                    </div>
                    <span class="text-xxs text-slate-400">Support</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.support-account')
                    </div>
                    <span class="text-xxs text-slate-400">Support Account</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.support-general')
                    </div>
                    <span class="text-xxs text-slate-400">Support General</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.support-payment')
                    </div>
                    <span class="text-xxs text-slate-400">Support Payment</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.support-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Support Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.sync')
                    </div>
                    <span class="text-xxs text-slate-400">Sync</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.plan-s1')
                    </div>
                    <span class="text-xxs text-slate-400">Plan 1</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.plan-s2')
                    </div>
                    <span class="text-xxs text-slate-400">Plan 2</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.plan-s3')
                    </div>
                    <span class="text-xxs text-slate-400">Plan 3</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.doc-checked')
                    </div>
                    <span class="text-xxs text-slate-400">Doc Checked</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.help-desk')
                    </div>
                    <span class="text-xxs text-slate-400">Help/Support</span>
                </div>
            </div><!-- col -->
        </div><!-- grid -->
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">File Manager Icons</h5>
            <p class="text-sm leading-6 text-slate-400">All the icons used in file manager app</p>
        </div>

        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder')
                    </div>
                    <span class="text-xxs text-slate-400">Folder</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder-secure')
                    </div>
                    <span class="text-xxs text-slate-400">Folder Secure</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder-shared')
                    </div>
                    <span class="text-xxs text-slate-400">Folder Shared</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder-alt')
                    </div>
                    <span class="text-xxs text-slate-400">Folder Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder-secure-alt')
                    </div>
                    <span class="text-xxs text-slate-400">Folder Secure Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.folder-shared-alt')
                    </div>
                    <span class="text-xxs text-slate-400">Folder Shared Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-code')
                    </div>
                    <span class="text-xxs text-slate-400">File Code</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-doc')
                    </div>
                    <span class="text-xxs text-slate-400">File Doc</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-media')
                    </div>
                    <span class="text-xxs text-slate-400">File Media</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-movie')
                    </div>
                    <span class="text-xxs text-slate-400">File Movie</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-music')
                    </div>
                    <span class="text-xxs text-slate-400">File Music</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-pdf')
                    </div>
                    <span class="text-xxs text-slate-400">File PDF</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-ppt')
                    </div>
                    <span class="text-xxs text-slate-400">File PPT</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-sheet')
                    </div>
                    <span class="text-xxs text-slate-400">File Sheet</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-text')
                    </div>
                    <span class="text-xxs text-slate-400">File Text</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-zip')
                    </div>
                    <span class="text-xxs text-slate-400">File Zip</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-code-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Code Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-doc-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Doc Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-media-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Media Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-movie-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Movie Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-music-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Music Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-pdf-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File PDF Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-ppt-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File PPT Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-sheet-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Sheet Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-text-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Text Alt</span>
                </div>
            </div><!-- col -->
            <div class="col-span-6 sm:col-span-4 lg:col-span-3">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full  [&>svg]:mx-auto">
                        @include('components.icons.file-type-zip-alt')
                    </div>
                    <span class="text-xxs text-slate-400">File Zip Alt</span>
                </div>
            </div><!-- col -->
        </div><!-- grid -->
    </div>

</div>
@endsection