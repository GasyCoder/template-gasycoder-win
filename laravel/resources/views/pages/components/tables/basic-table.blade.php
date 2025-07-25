@extends('layouts.main', ['title'=> 'Basic Table'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Basic Table Example</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400">Examples for opt-in styling of tables with Bootstrap. Just add the base class <code class="text-pink-500">.table</code> to any <code class="text-blue-500">&lt;table&gt;</code> tag, then extend with custom styles or our various included modifier classes.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Table Default</h5>
            <p class="text-sm leading-6 text-slate-400">Using the most basic table markup, here’s how <code class="text-pink-600">.table</code> based tables look by default.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <table class="table border-collapse w-full [&_th]:text-start [&_th]:p-2 [&_td]:p-2 first:[&_th]:ps-5 last:[&_th]:pe-5 first:[&_td]:ps-5 last:[&_td]:pe-5">
                <thead class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody class="[&_th]:border-b [&_td]:border-b [&_:last-child_th]:border-b-0 [&_:last-child_td]:border-b-0 [&_th]:border-gray-300 [&_th]:dark:border-gray-900 [&_td]:border-gray-300 [&_td]:dark:border-gray-900">
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Stripe Table</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <table class="table border-collapse w-full [&_th]:text-start [&_th]:p-2 [&_td]:p-2 first:[&_th]:ps-5 last:[&_th]:pe-5 first:[&_td]:ps-5 last:[&_td]:pe-5">
                <thead class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody class="[&_th]:border-b [&_td]:border-b [&_:last-child_th]:border-b-0 [&_:last-child_td]:border-b-0 [&_th]:border-gray-300 [&_th]:dark:border-gray-900 [&_td]:border-gray-300 [&_td]:dark:border-gray-900 odd:[&_tr]:bg-gray-100 odd:[&_tr]:dark:bg-gray-900">
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter">Bordered Table</h5>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <table class="table border-collapse w-full [&_th]:text-start [&_th]:p-2 [&_td]:p-2 first:[&_th]:ps-5 last:[&_th]:pe-5 first:[&_td]:ps-5 last:[&_td]:pe-5">
                <thead class="[&_th]:border [&_th]:border-gray-300 [&_th]:dark:border-gray-900">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody class="[&_th]:border [&_td]:border [&_th]:border-gray-300 [&_th]:dark:border-gray-900 [&_td]:border-gray-300 [&_td]:dark:border-gray-900">
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Responsive Table</h5>
            <p class="text-sm leading-6 text-slate-400">Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="w-full overflow-auto">
                <table class="table border-collapse w-full [&_th]:text-start [&_th]:p-2 [&_td]:p-2 first:[&_th]:ps-5 last:[&_th]:pe-5 first:[&_td]:ps-5 last:[&_td]:pe-5">
                    <thead class="[&_th]:border-b [&_th]:border-gray-300 [&_th]:dark:border-gray-900">
                        <tr>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                            <th>Heading</th>
                        </tr>
                    </thead>
                    <tbody class="[&_th]:border-b [&_td]:border-b [&_:last-child_th]:border-b-0 [&_:last-child_td]:border-b-0 [&_th]:border-gray-300 [&_th]:dark:border-gray-900 [&_td]:border-gray-300 [&_td]:dark:border-gray-900">
                        <tr>
                            <th>1</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection