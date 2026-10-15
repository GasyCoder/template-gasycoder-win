!(function (NioApp) {
    'use strict';

    var totalDeposit = {
        labels: [
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
        ],
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
                    NioApp.hexRGB('#6576ff', 0.2),
                    '#6576ff',
                ], // @v2.0
                data: [7200, 8200, 7800, 9500, 5500, 9200, 9690],
            },
        ],
    };

    var totalWithdraw = {
        labels: [
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
        ],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Active User',
                color: [
                    NioApp.hexRGB('#816bff', 0.2),
                    NioApp.hexRGB('#816bff', 0.2),
                    NioApp.hexRGB('#816bff', 0.2),
                    NioApp.hexRGB('#816bff', 0.2),
                    NioApp.hexRGB('#816bff', 0.2),
                    NioApp.hexRGB('#816bff', 0.2),
                    '#816bff',
                ], // @v2.0
                data: [7200, 8200, 7800, 9500, 5500, 9200, 9690],
            },
        ],
    };

    var totalBalance = {
        labels: [
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
        ],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Active User',
                color: [
                    NioApp.hexRGB('#559bfb', 0.2),
                    NioApp.hexRGB('#559bfb', 0.2),
                    NioApp.hexRGB('#559bfb', 0.2),
                    NioApp.hexRGB('#559bfb', 0.2),
                    NioApp.hexRGB('#559bfb', 0.2),
                    NioApp.hexRGB('#559bfb', 0.2),
                    '#559bfb',
                ], // @v2.0
                data: [6000, 8200, 7800, 9500, 5500, 9200, 9690],
            },
        ],
    };

    var planPurchase = {
        labels: [
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
            '01 Jan',
            '02 Jan',
            '03 Jan',
            '04 Jan',
            '05 Jan',
            '06 Jan',
            '07 Jan',
        ],
        dataUnit: 'USD',
        stacked: true,
        datasets: [
            {
                label: 'Active User',
                color: NioApp.hexRGB('#6576ff', 0.2),
                colorHover: '#6576ff',
                data: [
                    6000, 8200, 7800, 9500, 5500, 9200, 9690, 6000, 8200, 7800,
                    9500, 5500, 9200, 9690, 6000, 8200, 7800, 9500, 5500, 9200,
                    9690,
                ],
            },
        ],
    };

    NioApp.Chart.InvestBar = function (selector, set_data) {
        let elm = document.querySelectorAll(selector);
        elm.forEach((item) => {
            let _get_data =
                typeof set_data === 'undefined' ? eval(item.id) : set_data;
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
                    barPercentage: 0.85,
                    categoryPercentage: 0.9,
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
        NioApp.Chart.InvestBar('.iv-data-chart');
    };
    NioApp.docReady(NioApp.Chart.init);
})(NioApp);
