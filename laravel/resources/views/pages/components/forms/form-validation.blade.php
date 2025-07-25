@extends('layouts.main', ['title'=> 'Form Validation'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Form Validation</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Using the Validation plugin, you can simply add validation on clientside before submit form. The plugin also offering plenty of customization options. For a full overview of this plugin, check out the documentation.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Validation - Regular Style</h5>
            <p class="text-sm leading-6 text-slate-400">Validating your form, just add the class <code class="text-pink-600">.js-validate</code> to any <code class="text-primary-600">&lt;form&gt;</code>, then it validate the form show error message.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <form action="#" class="js-validate" id="jsValidate">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-full-name">Full Name</label>
                                <div class="form-wrap relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-full-name" name="fv-full-name" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-email">Email address</label>
                                <div class="form-wrap relative">
                                    <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                        <em class="text-slate-400 text-base leading-none ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-email" name="fv-email" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-phone">Phone</label>
                                <div class="form-wrap relative">
                                    <div class="relative flex flex-wrap -space-x-px w-full items-stretch">
                                        <div class="px-4 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                            +880
                                        </div>
                                        <input type="text" id="fv-phone" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" required>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Gender</label>
                                <div class="form-wrap relative">
                                    <ul class="flex flex-wrap gap-2">
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender" id="gender-male" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-male">Male</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender" id="gender-female" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-female">Female</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender" id="gender-other" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-other">Others</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-subject">Subject</label>
                                <div class="form-wrap relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-subject" name="fv-subject" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-topics">Topics</label>
                                <div class="form-wrap relative ">
                                    <select class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>
                                        <option value="">This is a placeholder</option>
                                        <option value="fv-gq">General Question</option>
                                        <option value="fv-tq">Tachnical Question</option>
                                        <option value="fv-ab">Account and Billing</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-message">Message</label>
                                <div class="form-wrap relative">
                                    <textarea class="block w-full text-sm leading-4.5 px-4 py-1.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="fv-message" name="fv-message" placeholder="Write your message" required></textarea>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Communication</label>
                                <div class="form-wrap relative">
                                    <ul class="flex flex-wrap items-center gap-3">
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com" id="fv-com-email" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-email">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com" id="fv-com-sms" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-sms">SMS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com" id="fv-com-phone" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-phone">Phone</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <button type="submit" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                </form>
            </div>
        </div><!-- card -->
    </div><!-- block -->

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Validation - Floating Style </h5>
            <p class="text-sm leading-6 text-slate-400">Validating your form, just add the class <code class="text-pink-600">.js-validate</code> to any <code class="text-primary-600">&lt;form&gt;</code>, then it validate the form show error message.</p>
        </div>

        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="p-5 sm:p-6">
                <form action="#" class="js-validate floating-feedbacks" id="jsValidateFloating">
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-full-name-floating">Full Name</label>
                                <div class="form-wrap relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-full-name-floating" name="fv-full-name-floating" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-email-floating">Email address</label>
                                <div class="form-wrap relative">
                                    <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                        <em class="text-slate-400 text-base leading-none ni ni-mail"></em>
                                    </div>
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-email-floating" name="fv-email-floating" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-phone-floating">Phone</label>
                                <div class="form-wrap relative">
                                    <div class="relative flex flex-wrap -space-x-px w-full items-stretch">
                                        <div class="px-4 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-900 first:rounded-s last:rounded-e flex items-center">
                                            +880
                                        </div>
                                        <input type="text" class="block flex-grow box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed first:rounded-s last:rounded-e transition-all" id="fv-phone-floating" name="fv-phone-floating"  required>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Gender</label>
                                <div class="form-wrap form-check-wrap relative">
                                    <ul class="flex flex-wrap gap-2">
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender-floating" id="gender-male-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-male-floating">Male</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender-floating" id="gender-female-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-female-floating">Female</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex relative">
                                                <input type="radio" class="peer h-0 w-0 absolute opacity-0" name="fv-gender-floating" id="gender-other-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 px-4 py-1.5 cursor-pointer inline-block rounded border-2 border-gray-200 dark:border-gray-800 peer-checked:border-primary-600 transition-all duration-300" for="gender-other-floating">Others</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-subject-floating">Subject</label>
                                <div class="form-wrap relative">
                                    <input type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-subject-floating" name="fv-subject-floating" required>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12 md:col-span-6">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-topics-floating">Topics</label>
                                <div class="form-wrap relative ">
                                    <select class="js-select block w-full text-sm leading-4.5 pe-10 ps-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" id="fv-topics-floating" name="fv-topics-floating" data-placeholder="Select a option" required>
                                        <option value="">This is a placeholder</option>
                                        <option value="fv-gq">General Question</option>
                                        <option value="fv-tq">Tachnical Question</option>
                                        <option value="fv-ab">Account and Billing</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="fv-message-floating">Message</label>
                                <div class="form-wrap relative">
                                    <textarea class="block w-full text-sm leading-4.5 px-4 py-1.5 min-h-[124px] text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all resize-none" id="fv-message-floating" name="fv-message-floating" placeholder="Write your message" required></textarea>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Communication</label>
                                <div class="form-wrap form-check-wrap relative">
                                    <ul class="flex flex-wrap items-center gap-3">
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com-floating" id="fv-com-email-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-email-floating">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com-floating" id="fv-com-sms-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-sms-floating">SMS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inline-flex">
                                                <input type="checkbox" class="peer h-6 w-6 bg-white dark:bg-gray-950 checked:bg-primary-600 checked:dark:bg-primary-600 checked:hover:bg-primary-600 checked:hover:dark:bg-primary-600 checked:focus:bg-primary-600 checked:focus:dark:bg-primary-600 focus:border-primary-600 focus:dark:border-primary-600 outline-none focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950 focus:ring-0 focus:ring-offset-0 disabled:bg-slate-50 disabled:dark:bg-slate-900 disabled:checked:bg-primary-400 disabled:checked:dark:bg-primary-400 rounded border-2 border-gray-300 dark:border-gray-800 checked:dark:border-primary-600  cursor-pointer disabled:cursor-not-allowed transition-all duration-300" name="fv-com-floating" id="fv-com-phone-floating" required>
                                                <label class="text-slate-600 dark:text-slate-400 peer-disabled:text-slate-400 peer-disabled:dark:text-slate-700 text-sm leading-5 pt-0.5 ps-3 cursor-pointer inline-block" for="fv-com-phone-floating">Phone</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- col -->
                        <div class="col-span-12">
                            <div class="form-group relative mb-5 last:mb-0">
                                <button type="submit" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300">Save Informations</button>
                            </div>
                        </div><!-- col -->
                    </div><!-- grid -->
                </form>
            </div>
        </div><!-- card -->
    </div><!-- block -->

</div>
@endsection