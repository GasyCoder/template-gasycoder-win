@extends('layouts.main', ['title'=> 'Form Upload'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Form Upload / Dropzone</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples and usage guidelines for form upload fields with default file input type and with Dropzone plugin.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Default Upload Field</h5>
            <p class="text-sm leading-6 text-slate-400">File Upload with default input file type.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="customFile">Default File Upload</label>
                            <div class="relative">
                                <input type="file" class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customFile">
                                <label class=" absolute top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 ocus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-900 after:px-4 after:rounded-e after:border after:border-gray-200 after:dark:border-gray-800" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div><!-- col -->
                    <div class="col-span-12 sm:col-span-6">
                        <div class="relative mb-5 last:mb-0">
                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="customMultipleFile">Multiple File Upload</label>
                            <div class="relative">
                                <input type="file" multiple class="block relative w-full m-0 opacity-0 h-9 z-[2] js-file-input" id="customMultipleFile">
                                <label class=" absolute top-0 start-0 z-1 w-full text-sm leading-4.5 px-4 py-2 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 ocus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all after:absolute after:-top-px after:-end-px after:-bottom-px after:z-[3] after:h-9 after:text-slate-700 after:dark:text-white after:content-['Browse'] after:flex after:items-center after:bg-gray-100 after:dark:bg-gray-900 after:px-4 after:rounded-e after:border after:border-gray-200 after:dark:border-gray-800" for="customMultipleFile">Choose file</label>
                            </div>
                        </div>
                    </div><!-- col -->
                </div><!-- grid -->
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Default Upload Field</h5>
            <p class="text-sm leading-6 text-slate-400">File Upload with default input file type.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5">
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Dropzone Default</label>
                        <div class="js-upload" id="DropzoneDefault">
                            <div class="dz-message" data-dz-message>
                                <span class="block text-sm text-slate-400">Drag and drop file</span>
                                <span class="block text-base text-slate-400 mb-1 uppercase">or</span>
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">SELECT</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Dropzone Single File</label>
                        <div class="js-upload" data-max-files="1" id="DropzoneSingleFile">
                            <div class="dz-message" data-dz-message>
                                <span class="block text-sm text-slate-400">Drag and drop file</span>
                                <span class="block text-base text-slate-400 mb-1 uppercase">or</span>
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">SELECT</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Dropzone File Size Limit (4mb)</label>
                        <div class="js-upload" data-max-file-size="4" id="DropzoneFileSizeLimit">
                            <div class="dz-message" data-dz-message>
                                <span class="block text-sm text-slate-400">Drag and drop file</span>
                                <span class="block text-base text-slate-400 mb-1 uppercase">or</span>
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">SELECT</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Dropzone with only Image Upload</label>
                        <div class="js-upload" data-accepted-files="image/*"  id="DropzonewithonlyImage">
                            <div class="dz-message" data-dz-message>
                                <span class="block text-sm text-slate-400">Drag and drop file</span>
                                <span class="block text-base text-slate-400 mb-1 uppercase">or</span>
                                <button class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">SELECT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection