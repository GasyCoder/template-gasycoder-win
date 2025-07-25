!(function (NioApp) {
    "use strict";

    var todayOrders = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'Orders',
        lineTension : .3,
        datasets : [{
            label : "Orders",
            color : "#854fff",
            background : "transparent",
            data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
        }]
    };

    var todayRevenue = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'Orders',
        lineTension : .3,
        datasets : [{
            label : "Revenue",
            color : "#33d895",
            background : "transparent",
            data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
        }]
    };

    var todayCustomers = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'Orders',
        lineTension : .3,
        datasets : [{
            label : "Customers",
            color : "#ff63a5",
            background : "transparent",
            data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
        }]
    };

    var todayVisitors = {
        labels : ["12AM - 02AM", "02AM - 04AM", "04AM - 06AM", "06AM - 08AM", "08AM - 10AM", "10AM - 12PM", "12PM - 02PM", "02PM - 04PM", "04PM - 06PM", "06PM - 08PM", "08PM - 10PM", "10PM - 12PM"],
        dataUnit : 'Orders',
        lineTension : .3,
        datasets : [{
            label : "Visitors",
            color : "#559bfb",
            background : "transparent",
            data: [92, 105, 125, 85, 110, 106, 131, 105, 110, 131, 105, 110]
        }]
    };

    NioApp.Chart.LineSmall = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:_get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    fill: true,
                    borderWidth:2,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: "transparent",
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: _get_data.datasets[i].color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                title: function() {
                                    return false;
                                },
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#1c2b46',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#fff',
                            titleMarginBottom: 4,
                            bodyColor: '#fff',
                            bodyFont:{
                                size: 8
                            },
                            bodySpacing:4,
                            padding: 6,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: false,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            position : NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: false,
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                padding: 0
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                            
                        },
                        x: {
                            display: false,
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }
    
    var salesStatistics = {
        labels : ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan","13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit : 'People',
        lineTension : .4,
        datasets : [{
            label : "Total orders",
            color : "#9d72ff",
            dash : [0,0],
            background : NioApp.hexRGB('#9d72ff',.15),
            data: [3710, 4820, 4810, 5480, 5300, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950,6300, 7200, 7250, 7650, 6950, 4750]
        },{
            label : "Canceled orders",
            color : "#eb6459",
            dash : [5,5],
            background : "transparent",
            data: [110, 220, 810, 480, 600, 670, 660, 830, 590, 730, 790, 950, 100, 800, 950, 850, 950, 450, 900, 0, 200, 250, 900, 950, 300, 200, 250, 650, 950, 750]
        }]
    };

    NioApp.Chart.Line = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension:_get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    fill: true,
                    borderWidth:2,
                    borderDash:_get_data.datasets[i].dash,
                    borderColor: _get_data.datasets[i].color,
                    pointBorderColor: "transparent",
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#fff",
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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed.y} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#1c2b46',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#fff',
                            titleMarginBottom: 6,
                            bodyColor: '#fff',
                            bodyFont:{
                                size: 12
                            },
                            bodySpacing:4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            position : NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero:true,
                                font:{
                                    size:11,
                                },
                                color:'#9eaecf',
                                padding:10,
                                callback: function(value, index, values) {
                                    return '$ ' + value;
                                },
                                min:0,
                                stepSize:3000
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            ticks: {
                                font:{
                                    size:9,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding:10,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength: 0,
                                zeroLineColor: 'transparent',
                                drawTicks:false,
                            },
                        }
                    }
                }
            });
        })
    }
    
    var orderStatistics = {
        labels : ["Completed", "Processing", "Canclled"],
        dataUnit : 'People',
        legend: false,
        datasets : [{
            borderColor : "#fff",
            background : ["#816bff","#13c9f2","#ff82b7"],
            data: [4305, 859, 482]
        }]
    };

    NioApp.Chart.Doughnut = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth:2,
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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:12,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#1c2b46',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#fff',
                            titleMarginBottom: 6,
                            bodyColor: '#fff',
                            bodyFont:{
                                size: 12
                            },
                            bodySpacing:4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    rotation: -1.5,
                    cutoutPercentage:70,
                    maintainAspectRatio: false,
                }
            });
        })
    }

    NioApp.Chart.init = function() {
        NioApp.Chart.Line('.ecommerce-line-chart');
        NioApp.Chart.LineSmall('.ecommerce-line-chart-small');
        NioApp.Chart.Doughnut('.ecommerce-doughnut-chart');
    }
    NioApp.docReady(NioApp.Chart.init);

})(NioApp);