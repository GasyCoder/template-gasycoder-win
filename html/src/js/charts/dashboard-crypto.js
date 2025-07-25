!(function (NioApp) {
    "use strict";

    var orderOverview = {
        labels : ["19 Dec", "20 Dec", "21 Dec", "22 Dec", "23 Dec", "24 Dec", "25 Dec", "26 Dec", "27 Dec", "28 Dec", "29 Dec", "30 Dec", "31 Dec", "01 Jan"],
        dataUnit : 'USD',
        datasets : [{
            label : "Buy Orders",
            color : "#8feac5",
            data: [1740, 2500, 1820, 1200, 1600, 2500, 1820, 1200, 1700, 1820, 1400, 1600, 1930, 2100]
        },{
            label : "Sell Orders",
            color : "#9cabff",
            data: [2420, 1820, 3000, 5000, 2450, 1820, 2700, 5000, 2400, 2600, 4000, 2380, 2120, 1700]
        }]
    };

    NioApp.Chart.BarOrder = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    data: _get_data.datasets[i].data,
                    // Styles
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth:2,
                    borderColor: 'transparent',
                    hoverBorderColor : 'transparent',
                    borderSkipped : 'bottom',
                    barPercentage : NioApp.State.asMobile ? 1 : .7,
                    categoryPercentage : NioApp.State.asMobile ? 1 : .7,
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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:30,
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
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
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
                                min:100,
                                max:5000,
                                stepSize:1200
                            },
                            grid: { 
                                color: NioApp.hexRGB("#526484",.2),
                                tickLength:0,
                                zeroLineColor: NioApp.hexRGB("#526484",.2),
                                drawTicks:false,
                            },
                            
                        },
                        x: {
                            display: true,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            ticks: {
                                font:{
                                    size:9,
                                },
                                color:'#9eaecf',
                                source: 'auto',
                                padding:10,
                                reverse : NioApp.State.isRTL
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

    var coinOverview = {
        labels : ["Bitcoin", "Ethereum", "NioCoin", "Litecoin", "Bitcoin"],
        stacked:true,
        dataUnit:'',
        datasets : [{
            label : "Buy Orders",
            color : ["#f98c45", "#9cabff", "#8feac5", "#6b79c8", "#79f1dc"],
            data: [1740, 2500, 1820, 1200, 1600, 2500]
        },{
            label : "Sell Orders",
            color : [NioApp.hexRGB('#f98c45',.2),NioApp.hexRGB('#9cabff',.4),NioApp.hexRGB('#8feac5',.4),NioApp.hexRGB('#6b79c8',.4),NioApp.hexRGB('#79f1dc',.4)],
            data: [2420, 1820, 3000, 5000, 2450, 1820]
        }]
    };

    NioApp.Chart.BarCoin = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    data: _get_data.datasets[i].data,
                    // Styles
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth:2,
                    borderColor: 'transparent',
                    hoverBorderColor : 'transparent',
                    borderSkipped : 'bottom',
                    barThickness:'8',
                    categoryPercentage: 0.5,
                    barPercentage: 1.0
                });
            } 
            const chart = new Chart(selectCanvas, {
                type: 'bar',
                data: {
                    labels: _get_data.labels,
                    datasets: chart_data,
                },
                options: {
                    indexAxis: 'y',
                    plugins: {
                        legend: {
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:30,
                                padding:20,
                                color: '#6783b8',
                            }
                        },
                        tooltip: {
                            enabled: true,
                            rtl: NioApp.State.isRTL,
                            callbacks: {
                                label: function (context) {
                                    return `${context.parsed.x} ${_get_data.dataUnit}`;
                                },
                            },
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
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
                            display: false,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            ticks: {
                                beginAtZero:true,
                                padding:0,
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
                                padding:0,
                                // reverse: NioApp.State.isRTL,
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

    var userActivity = {
        labels : ["01 Nov", "02 Nov", "03 Nov", "04 Nov", "05 Nov", "06 Nov", "07 Nov", "08 Nov", "09 Nov", "10 Nov", "11 Nov", "12 Nov", "13 Nov", "14 Nov", "15 Nov", "16 Nov", "17 Nov", "18 Nov", "19 Nov", "20 Nov", "21 Nov"],
        dataUnit : 'USD',
        stacked : true,
        datasets : [{
            label : "Direct Join",
            color : "#9cabff",
            data: [110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90]
        },{
            label : "Referral Join",
            color : NioApp.hexRGB("#9cabff", .4),
            data: [125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 110, 80, 125, 55, 95, 75, 90, 75, 90]
        }]
    };

    NioApp.Chart.BarUser = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    data: _get_data.datasets[i].data,
                    // Styles
                    backgroundColor: _get_data.datasets[i].color,
                    borderWidth:2,
                    borderColor: 'transparent',
                    hoverBorderColor : 'transparent',
                    borderSkipped : 'bottom',
                    barPercentage : .8,
                    categoryPercentage : .9
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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth:30,
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
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
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
                            display: false,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            ticks: {
                                beginAtZero:true,
                                reverse : NioApp.State.isRTL
                            }
                        },
                        x: {
                            display: false,
                            stacked: (_get_data.stacked) ? _get_data.stacked : false,
                            ticks: {
                                reverse : NioApp.State.isRTL
                            }
                        }
                    }
                }
            });
        })
    }


    NioApp.Chart.init = function() {
        NioApp.Chart.BarOrder('.order-overview-chart');
        NioApp.Chart.BarCoin('.coin-overview-chart');
        NioApp.Chart.BarUser('.user-activity-chart');
    }
    NioApp.docReady(NioApp.Chart.init);

})(NioApp);