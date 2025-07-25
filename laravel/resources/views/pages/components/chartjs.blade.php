@extends('layouts.main', ['title'=> 'Chart JS'])
@section('content')
<div class="lg:max-w-[960px] mx-auto">

    <div class="pb-6 sm:pb-10 relative md:max-w-[720px]">
        <a class="inline-flex items-center text-base mb-3 relative font-normal text-slate-400" href="{{ route('components') }}">
            <em class="text-2xl leading-none w-8 inline-block -mt-0.5 rtl:-scale-x-100 ni ni-arrow-left -tracking-wide"></em>
            <span class="ms-1">Components</span>
        </a>
        <h2 class="mb-4 font-normal text-3xl lg:text-5xl leading-tighter tracking-tight text-slate-700 dark:text-white font-heading">Chart Js</h2>
        <p class="text-lg text-slate-600 dark:text-slate-400"><a class="text-primary-600 hover:text-primary-700" href="https://www.chartjs.org/" target="_blank">ChartJs</a> is ver simple and flexible JavaScript charting for designers & developers. You can visualize your data in different ways. We present some of examples for you.</p>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Solid Line Chart</h5>
            <p class="text-sm leading-6 text-slate-400">A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="h-[260px]"><canvas class="line-chart" id="solidLineChart"></canvas></div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Filled Line Chart</h5>
            <p class="text-sm leading-6 text-slate-400">Alternetly, you can use line chart with some background to display more visualy.</p>
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12 md:col-span-6">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter  mb-4">Rounded Chart</h6>
                    <div class="h-[180px]"><canvas class="line-chart" id="filledLineChart"></canvas></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter  mb-4">Straight Chart</h6>
                    <div class="h-[180px]"><canvas class="line-chart" id="straightLineChart"></canvas></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Bar Chart - Single</h5>
            <p class="text-sm leading-6 text-slate-400">A bar chart provides a way of showing data values represented as vertical bars.</p>
        </div>

        <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
            <div class="h-[260px]"><canvas class="bar-chart" id="barChartData"></canvas></div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Bar Chart - Multiple</h5>
            <p class="text-sm leading-6 text-slate-400">A bar chart provides a way of comparison of multiple data sets side by side or with stacked view.</p>
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12 md:col-span-6">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter mb-4">Multiple Bar</h6>
                    <div class="h-[180px]"><canvas class="bar-chart" id="barChartMultiple"></canvas></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter mb-4">Stacked Bar</h6>
                    <div class="h-[180px]"><canvas class="bar-chart" id="barChartStacked"></canvas></div>
                </div>
            </div>
        </div>
    </div>

    <div class="[&:not(:last-child)]:pb-7 lg:[&:not(:last-child)]:pb-14">
        <div class="pb-5">
            <h5 class="text-xl font-medium -tracking-snug text-slate-700 dark:text-white leading-tighter mb-2">Pie &amp; Donught Charts</h5>
            <p class="text-sm leading-6 text-slate-400">Pie and doughnut charts are probably the most commonly used charts. It use to show relational proportions between data.</p>
        </div>
        <div class="grid grid-flow-dense grid-cols-12 gap-7">
            <div class="col-span-12 md:col-span-4">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter text-center mb-4">Pie Chart</h6>
                    <div class="h-[180px]"><canvas class="pie-chart" id="pieChartData"></canvas></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter text-center mb-4">Doughnut Chart</h6>
                    <div class="h-[180px]"><canvas class="doughnut-chart" id="doughnutChartData"></canvas></div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4">
                <div class="p-5 sm:p-6 border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900">
                    <h6 class="font-heading font-bold text-base/tighter text-center mb-4">Polar Chart</h6>
                    <div class="h-[180px]"><canvas class="polar-chart" id="polarChartData"></canvas></div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    @vite(['resources/js/charts.js'])
    <script type="module">
        // Example page Line Chart
        var solidLineChart = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dataUnit : 'BTC',
            lineTension : .4,
            legend: true,
            point: true,
            datasets : [{
                label : "Total Received",
                color : "#5ce0aa",
                background : 'transparent',
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
            },{
                label : "Total Send",
                color : "#798bff",
                background : 'transparent',
                data: [80, 54, 105, 120, 82, 85, 60, 80, 54, 105, 120, 82]
            }]
        };
        Line({selector: '#solidLineChart', data : solidLineChart });

        var filledLineChart = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dataUnit : 'BTC',
            lineTension : .4,
            point: true,
            datasets : [{
                label : "Total Received",
                color : "#798bff",
                fill: true,
                background : hexRGB('#798bff',.4),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
            }]
        };
        Line({selector:'#filledLineChart', data:filledLineChart});

        var straightLineChart = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dataUnit : 'BTC',
            lineTension : 0,
            point: true,
            datasets : [{
                label : "Total Received",
                color : "#798bff",
                fill: true,
                background : hexRGB('#798bff',.3),
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
            }]
        };
        Line({selector:'#straightLineChart', data:straightLineChart});

        // Example page Bar Chart
        var barChartData = {
            labels : ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30"],
            dataUnit : 'People',
            datasets : [{
                label : "join",
                color : "#9cabff",
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
            }]
        };
        Bar({selector:'#barChartData', data:barChartData, tooltip:"tooltipSmall"});
        var barChartMultiple = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            dataUnit : 'USD',
            datasets : [{
                label : "Income",
                color : "#9cabff",
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
            },{
                label : "Expense",
                color : "#f4aaa4",
                data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125]
            }]
        };
        Bar({selector:'#barChartMultiple', data:barChartMultiple, tooltip:"tooltipSmall"});
        var barChartStacked = {
            labels : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            stacked: true,
            dataUnit : 'USD',
            datasets : [{
                label : "Income",
                color : "#9cabff",
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95]
            },{
                label : "Expense",
                color : "#f4aaa4",
                data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125]
            }]
        };
        Bar({selector:'#barChartStacked', data:barChartStacked, tooltip:"tooltipSmall"});

        // Example page Pie Chart
        var pieChartData = {
            labels : ["Send", "Receive", "Withdraw"],
            dataUnit : 'BTC',
            legend: false,
            datasets : [{
                borderColor : "#fff",
                background : ["#9cabff","#f4aaa4","#8feac5"],
                data: [110, 80, 125]
            }]
        };
        Pie({selector:'#pieChartData', data:pieChartData});

        // Example page Doughnut Chart
        var doughnutChartData = {
            labels : ["Send", "Receive", "Withdraw"],
            dataUnit : 'BTC',
            legend: false,
            datasets : [{
                borderColor : "#fff",
                background : ["#9cabff","#f4aaa4","#8feac5"],
                data: [110, 80, 125]
            }]
        };
        Doughnut({selector:'#doughnutChartData', data:doughnutChartData});

        // Example page Doughnut Chart
        var polarChartData = {
            labels : ["Send", "Receive", "Withdraw"],
            dataUnit : 'BTC',
            legend: false,
            datasets : [{
                borderColor : "#fff",
                background : [hexRGB("#9cabff",.8),hexRGB("#f4aaa4",.8),hexRGB("#8feac5",.8)],
                data: [110, 80, 125]
            }]
        };
        Polar({selector:'#polarChartData', data:polarChartData});
    </script>
@endpush