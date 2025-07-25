<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="pageroot" class="{{ dark_mode() ? 'dark' : '' }}">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

        <title>@isset($title){{$title}} | @endisset{{config('app.desc')}}</title>

        @vite(['resources/css/app.css'])

    </head>  
    <body class="bg-gray-50 dark:bg-gray-1000 font-body text-sm leading-relaxed text-slate-600 dark:text-slate-300 font-normal min-w-[320px]" dir="{{ gcs('direction', 'ltr') }}">
        <div class="nk-app-root">
            <div class="nk-main">
                <div class="nk-wrap flex flex-col min-h-screen">
                    @yield('content')
                </div>
            </div>
        </div><!-- root -->
        @stack('modals')
        @include('layouts.partials.off-canvas')
        <!-- JavaScript -->
        @vite(['resources/js/scripts.js'])
        @stack('scripts')
    </body>
</html>
