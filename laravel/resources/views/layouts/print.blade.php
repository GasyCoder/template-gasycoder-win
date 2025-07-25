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
    <body class="bg-white font-body text-sm leading-relaxed text-slate-600 font-normal min-w-[320px]" onload="printPromot()" dir="{{ gcs('direction', 'ltr') }}">
        @yield('content')
        <script>
            function printPromot() { window.print(); }
        </script>
    </body>
</html>
