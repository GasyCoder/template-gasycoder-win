!(function (NioApp) {
    'use strict';

    var solidLineChart = {
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
        dataUnit: 'BTC',
        lineTension: 0.4,
        legend: true,
        datasets: [
            {
                label: 'Total Received',
                color: '#5ce0aa',
                background: 'transparent',
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
            },
            {
                label: 'Total Send',
                color: '#798bff',
                background: 'transparent',
                data: [80, 54, 105, 120, 82, 85, 60, 80, 54, 105, 120, 82],
            },
        ],
    };
    var filledLineChart = {
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
        dataUnit: 'BTC',
        lineTension: 0.4,
        datasets: [
            {
                label: 'Total Received',
                color: '#798bff',
                fill: true,
                background: NioApp.hexRGB('#798bff', 0.4),
                data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95],
            },
        ],
    };
    var straightLineChart = {
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
        dataUnit: 'BTC',
        lineTension: 0,
        datasets: [
            {
                label: 'Total Received',
                color: '#798bff',
                fill: true,
                background: NioApp.hexRGB('#798bff', 0.3),
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
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
                    borderDash: _get_data.datasets[i].dash,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: _get_data.datasets[i].color,
                    pointBackgroundColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 2,
                    pointRadius: 4,
                    pointHitRadius: 4,
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
                                boxWidth: 12,
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
                            borderColor: '#eff6ff',
                            borderWidth: 2,
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
                            position: NioApp.State.isRTL ? 'right' : 'left',
                            ticks: {
                                beginAtZero: true,
                                font: {
                                    size: 12,
                                },
                                color: '#9eaecf',
                                padding: 15,
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
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 10,
                                reverse: NioApp.State.isRTL,
                            },
                            grid: {
                                color: 'transparent',
                                tickLength: 10,
                                zeroLineColor: NioApp.hexRGB('#526484', 0.2),
                                offset: false,
                                drawTicks: false,
                            },
                        },
                    },
                },
            });
        });
    };
    var barChartData = {
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
        dataUnit: 'People',
        datasets: [
            {
                label: 'join',
                color: '#9cabff',
                data: [
                    110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90,
                    110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90,
                    75, 90,
                ],
            },
        ],
    };
    var barChartMultiple = {
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
        datasets: [
            {
                label: 'Income',
                color: '#9cabff',
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
            },
            {
                label: 'Expense',
                color: '#f4aaa4',
                data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125],
            },
        ],
    };
    var barChartStacked = {
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
        stacked: true,
        dataUnit: 'USD',
        datasets: [
            {
                label: 'Income',
                color: '#9cabff',
                data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95],
            },
            {
                label: 'Expense',
                color: '#f4aaa4',
                data: [75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125],
            },
        ],
    };

    NioApp.Chart.Bar = function (selector, set_data) {
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
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].color,
                    data: _get_data.datasets[i].data,
                    barPercentage: 0.7,
                    categoryPercentage: 0.7,
                });
            }
            const chart = new Chart(selectCanvas, {
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
                                boxWidth: 12,
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
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont: {
                                size: 9,
                            },
                            bodySpacing: 4,
                            padding: 6,
                            footerMarginTop: 0,
                            displayColors: false,
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            position: NioApp.State.isRTL ? 'right' : 'left',
                            stacked: _get_data.stacked
                                ? _get_data.stacked
                                : false,
                            ticks: {
                                beginAtZero: true,
                                font: {
                                    size: 12,
                                },
                                color: '#9eaecf',
                                padding: 10,
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
                                    size: 12,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 10,
                                reverse: NioApp.State.isRTL,
                            },
                            grid: {
                                color: 'transparent',
                                tickLength: 10,
                                zeroLineColor: 'transparent',
                                offset: true,
                                drawTicks: false,
                            },
                        },
                    },
                },
            });
        });
    };
    var pieChartData = {
        labels: ['Send', 'Receive', 'Withdraw'],
        dataUnit: 'BTC',
        legend: false,
        datasets: [
            {
                borderColor: '#fff',
                background: ['#9cabff', '#f4aaa4', '#8feac5'],
                data: [110, 80, 125],
            },
        ],
    };

    NioApp.Chart.Pie = function (selector, set_data) {
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
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].borderColor,
                    hoverBorderColor: _get_data.datasets[i].borderColor,
                    data: _get_data.datasets[i].data,
                });
            }
            const chart = new Chart(selectCanvas, {
                type: 'pie',
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
                                boxWidth: 12,
                                padding: 20,
                                color: '#6783b8',
                            },
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#fff',
                            borderColor: '#eff6ff',
                            borderWidth: 2,
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
                    rotation: -1.5,
                    cutoutPercentage: 70,
                    maintainAspectRatio: false,
                },
            });
        });
    };

    var doughnutChartData = {
        labels: ['Send', 'Receive', 'Withdraw'],
        dataUnit: 'BTC',
        legend: false,
        datasets: [
            {
                borderColor: '#fff',
                background: ['#9cabff', '#f4aaa4', '#8feac5'],
                data: [110, 80, 125],
            },
        ],
    };

    NioApp.Chart.Doughnut = function (selector, set_data) {
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
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].borderColor,
                    hoverBorderColor: _get_data.datasets[i].borderColor,
                    data: _get_data.datasets[i].data,
                });
            }
            const chart = new Chart(selectCanvas, {
                type: 'doughnut',
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
                                boxWidth: 12,
                                padding: 20,
                                color: '#6783b8',
                            },
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#fff',
                            borderColor: '#eff6ff',
                            borderWidth: 2,
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
                    rotation: -1.5,
                    cutoutPercentage: 70,
                    maintainAspectRatio: false,
                },
            });
        });
    };

    var polarChartData = {
        labels: ['Send', 'Receive', 'Withdraw'],
        dataUnit: 'BTC',
        legend: false,
        datasets: [
            {
                borderColor: '#fff',
                background: [
                    NioApp.hexRGB('#9cabff', 0.8),
                    NioApp.hexRGB('#f4aaa4', 0.8),
                    NioApp.hexRGB('#8feac5', 0.8),
                ],
                data: [110, 80, 125],
            },
        ],
    };

    NioApp.Chart.Polar = function (selector, set_data) {
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
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].borderColor,
                    hoverBorderColor: _get_data.datasets[i].borderColor,
                    data: _get_data.datasets[i].data,
                });
            }
            const chart = new Chart(selectCanvas, {
                type: 'polarArea',
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
                                boxWidth: 12,
                                padding: 20,
                                color: '#6783b8',
                            },
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed.r} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#fff',
                            borderColor: '#eff6ff',
                            borderWidth: 2,
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
                    rotation: -1.5,
                    cutoutPercentage: 70,
                    maintainAspectRatio: false,
                },
            });
        });
    };

    NioApp.Chart.init = function () {
        NioApp.Chart.Line('.line-chart');
        NioApp.Chart.Bar('.bar-chart');
        NioApp.Chart.Pie('.pie-chart');
        NioApp.Chart.Doughnut('.doughnut-chart');
        NioApp.Chart.Polar('.polar-chart');
    };
    NioApp.docReady(NioApp.Chart.init);
})(NioApp);
