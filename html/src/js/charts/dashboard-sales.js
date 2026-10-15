!(function (NioApp) {
    'use strict';

    let salesOverview = {
        labels: [
            '01',
            '02',
            '03',
            '04',
            '05',
            '06',
            '07',
            '08',
            '09',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30',
        ],
        dataUnit: 'BTC',
        lineTension: 0.1,
        datasets: [
            {
                label: 'Sales Overview',
                color: '#798bff',
                background: NioApp.hexRGB('#798bff', 0.3),
                data: [
                    8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500,
                    9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690, 8200, 7800,
                    9500, 5500, 9200, 9690, 8200, 7800, 9500, 5500, 9200, 9690,
                ],
            },
        ],
    };

    NioApp.Chart.Line = function (selector, set_data) {
        let elm = document.querySelectorAll(selector);
        elm.forEach((item) => {
            let _get_data =
                typeof set_data === 'undefined' ? eval(item.id) : set_data;
            const selectCanvas = document
                .getElementById(item.id)
                .getContext('2d');

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension: _get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    fill: true,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 3,
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 3,
                    data: _get_data.datasets[i].data,
                });
            }
            const chart = new Chart(selectCanvas, {
                type: 'line',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    plugins: {
                        legend: {
                            display: _get_data.legend
                                ? _get_data.legend
                                : false,
                            labels: {
                                boxWidth: 30,
                                padding: 20,
                                color: '#6783b8',
                            },
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#eff6ff',
                            titleFont: {
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont: {
                                size: 12,
                            },
                            bodySpacing: 4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false,
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            stacked: _get_data.stacked
                                ? _get_data.stacked
                                : false,
                            position: NioApp.State.isRTL ? 'right' : 'left',
                            ticks: {
                                beginAtZero: true,
                                font: {
                                    size: 11,
                                },
                                color: '#9eaecf',
                                padding: 10,
                                callback: function (value, index, values) {
                                    return '$ ' + value;
                                },
                                min: 100,
                                stepSize: 3000,
                            },
                            grid: {
                                color: NioApp.hexRGB('#526484', 0.2),
                                tickLength: 0,
                                zeroLineColor: NioApp.hexRGB('#526484', 0.2),
                                drawTicks: false,
                            },
                        },
                        x: {
                            display: true,
                            stacked: _get_data.stacked
                                ? _get_data.stacked
                                : false,
                            ticks: {
                                font: {
                                    size: 9,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 10,
                                reverse: NioApp.State.isRTL,
                            },
                            grid: {
                                color: 'transparent',
                                tickLength: 0,
                                zeroLineColor: 'transparent',
                                drawTicks: false,
                            },
                        },
                    },
                },
            });
        });
    };

    let salesRevenue = {
        labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
        ],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Sales Revenue',
                color: [
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    '#6576ff',
                ], //@v2.0
                data: [
                    11000, 8000, 12500, 5500, 9500, 14299, 11000, 8000, 12500,
                    5500, 9500, 14299,
                ],
            },
        ],
    };

    let activeSubscription = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Active User',
                color: [
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    NioApp.hexRGB('#6576ff', 0.2),
                    '#6576ff',
                ], //@v2.0
                data: [8200, 7800, 9500, 5500, 9200, 9690],
            },
        ],
    };

    let totalSubscription = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Active User',
                color: [
                    NioApp.hexRGB('#aea1ff', 0.2),
                    NioApp.hexRGB('#aea1ff', 0.2),
                    NioApp.hexRGB('#aea1ff', 0.2),
                    NioApp.hexRGB('#aea1ff', 0.2),
                    NioApp.hexRGB('#aea1ff', 0.2),
                    '#aea1ff',
                ], //@v2.0
                data: [8200, 7800, 9500, 5500, 9200, 9690],
            },
        ],
    };

    NioApp.Chart.Bar = function (selector, set_data) {
        let elm = document.querySelectorAll(selector);
        elm.forEach((item) => {
            let _get_data =
                typeof set_data === 'undefined' ? eval(item.id) : set_data;
            var _d_legend =
                typeof _get_data.legend === 'undefined'
                    ? false
                    : _get_data.legend;
            const selectCanvas = document
                .getElementById(item.id)
                .getContext('2d');

            var chart_data = [];
            for (var i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    data: _get_data.datasets[i].data,
                    // Styles
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth: 2,
                    borderColor: 'transparent',
                    hoverBorderColor: 'transparent',
                    borderSkipped: 'bottom',
                    barPercentage: 0.7,
                    categoryPercentage: 0.7,
                });
            }
            var chart = new Chart(selectCanvas, {
                type: 'bar',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    plugins: {
                        legend: {
                            display: _get_data.legend
                                ? _get_data.legend
                                : false,
                            labels: {
                                boxWidth: 30,
                                padding: 20,
                                color: '#6783b8',
                            },
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                title: function () {
                                    return false;
                                },
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#eff6ff',
                            titleFont: {
                                size: 11,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 4,
                            bodyColor: '#9eaecf',
                            bodyFont: {
                                size: 10,
                            },
                            bodySpacing: 3,
                            padding: 8,
                            footerMarginTop: 0,
                            displayColors: false,
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: false,
                            stacked: _get_data.stacked
                                ? _get_data.stacked
                                : false,
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                        x: {
                            display: false,
                            stacked: _get_data.stacked
                                ? _get_data.stacked
                                : false,
                            ticks: {
                                reverse: NioApp.State.isRTL,
                            },
                        },
                    },
                },
            });
        });
    };

    NioApp.Chart.init = function () {
        NioApp.Chart.Line('.sales-overview-chart');
        NioApp.Chart.Bar('.sales-bar-chart');
    };
    NioApp.docReady(NioApp.Chart.init);
})(NioApp);
