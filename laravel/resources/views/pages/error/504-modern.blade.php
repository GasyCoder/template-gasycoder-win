@extends('layouts.full-screen', ['title'=> 'Error 504'])
@section('content')
<div class="relative flex items-center justify-center min-h-screen">
    <div class="m-auto text-center py-8 px-4 max-w-[520px]">
        <div class="mb-15">
            <img src="{{ asset('images/gfx/error-504.svg') }}" alt="">
        </div>
        <h3 class="font-heading font-bold text-2xl lg:text-3xl leading-tighter tracking-tight text-slate-700 dark:text-white pb-4">Gateway Timeout Error</h3>
        <p class="text-base text-slate-600 mb-4">We are very sorry for inconvenience. It looks like some how our server did not receive a timely response.</p>
        <a href="{{ url('/') }}" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-md px-6 py-3 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 mt-3">Back To Home</a>
    </div>
</div>
@endsection