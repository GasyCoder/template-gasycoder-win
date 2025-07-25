!(function (NioApp) {
    "use strict";

    NioApp.WorldMap = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            const map = new jsVectorMap({
                selector: `#${item.id}`,
                map: 'world',
                showTooltip: true,
                zoomButtons:false,
                zoomOnScroll:false,
                visualizeData: {
                    scale: ['#ccd7e2', '#798bff'],
                    values: { AF: 16.63, AL: 11.58, DZ: 158.97, AO: 85.81, AG: 1.1, AR: 351.02, AM: 8.83, AU: 1219.72, AT: 366.26, AZ: 52.17, BS: 7.54, BH: 21.73, BD: 105.4, BB: 3.96, BY: 52.89, BE: 461.33, BZ: 1.43, BJ: 6.49, BT: 1.4, BO: 19.18, BA: 16.2, BW: 12.5, BR: 2023.53, BN: 11.96, BG: 44.84, BF: 8.67, BI: 1.47, KH: 11.36, CM: 21.88, CA: 1563.66, CV: 1.57, CF: 2.11, TD: 7.59, CL: 199.18, CN: 5745.13, CO: 283.11, KM: 0.56, CD: 12.6, CG: 11.88, CR: 35.02, CI: 22.38, HR: 59.92, CY: 22.75, CZ: 195.23, DK: 304.56, DJ: 1.14, DM: 0.38, DO: 50.87, EC: 61.49, EG: 216.83, SV: 21.8, GQ: 14.55, ER: 2.25, EE: 19.22, ET: 30.94, FJ: 3.15, FI: 231.98, FR: 2555.44, GA: 12.56, GM: 1.04, GE: 11.23, DE: 3305.9, GH: 18.06, GR: 305.01, GD: 0.65, GT: 40.77, GN: 4.34, GW: 0.83, GY: 2.2, HT: 6.5, HN: 15.34, HK: 226.49, HU: 132.28, IS: 12.77, IN: 1430.02, ID: 695.06, IR: 337.9, IQ: 84.14, IE: 204.14, IL: 201.25, IT: 2036.69, JM: 13.74, JP: 5390.9, JO: 27.13, KZ: 129.76, KE: 32.42, KI: 0.15, KR: 986.26, UNDEFINED: 5.73, KW: 117.32, KG: 4.44, LA: 6.34, LV: 23.39, LB: 39.15, LS: 1.8, LR: 0.98, LY: 77.91, LT: 35.73, LU: 52.43, MK: 9.58, MG: 8.33, MW: 5.04, MY: 218.95, MV: 1.43, ML: 9.08, MT: 7.8, MR: 3.49, MU: 9.43, MX: 1004.04, MD: 5.36, MN: 5.81, ME: 3.88, MA: 91.7, MZ: 10.21, MM: 35.65, NA: 11.45, NP: 15.11, NL: 770.31, NZ: 138, NI: 6.38, NE: 5.6, NG: 206.66, NO: 413.51, OM: 53.78, PK: 174.79, PA: 27.2, PG: 8.81, PY: 17.17, PE: 153.55, PH: 189.06, PL: 438.88, PT: 223.7, QA: 126.52, RO: 158.39, RU: 1476.91, RW: 5.69, WS: 0.55, ST: 0.19, SA: 434.44, SN: 12.66, RS: 38.92, SC: 0.92, SL: 1.9, SG: 217.38, SK: 86.26, SI: 46.44, SB: 0.67, ZA: 354.41, ES: 1374.78, LK: 48.24, KN: 0.56, LC: 1, VC: 0.58, SD: 65.93, SR: 3.3, SZ: 3.17, SE: 444.59, CH: 522.44, SY: 59.63, TW: 426.98, TJ: 5.58, TZ: 22.43, TH: 312.61, TL: 0.62, TG: 3.07, TO: 0.3, TT: 21.2, TN: 43.86, TR: 729.05, TM: 0, UG: 17.12, UA: 136.56, AE: 239.65, GB: 2258.57, US: 14624.18, UY: 40.71, UZ: 37.72, VU: 0.72, VE: 285.21, VN: 101.99, YE: 30.02, ZM: 15.69, ZW: 5.57 }
                  }
                
              })
        })
    }

    var deviceStatusData = {
        labels: ["Desktop", "Mobile", "Tablet"],
        dataUnit: 'People',
        legend: false,
        datasets: [{
            borderColor: "#fff",
            background: ["#9cabff", "#b8acff", "#7de1f8"],
            data: [84.5, 14.2, 1.3]
        }]
    };

    var TrafficChannelDoughnutData = {
        labels: ["Organic Search", "Social Media", "Referrals", "Others"],
        dataUnit: 'People',
        legend: false,
        datasets: [{
            borderColor: "#fff",
            background: ["#798bff", "#b8acff", "#ffa9ce", "#f9db7b"],
            data: [4305, 859, 482, 138]
        }]
    };

    NioApp.Chart.DoughnutAnalytics = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

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
                            display: (_get_data.legend) ? _get_data.legend : false,
                            labels: {
                                boxWidth: 12,
                                padding: 20,
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
                            backgroundColor: '#fff',
                            borderColor: '#eff6ff',
                            borderWidth: 2,
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size: 12
                            },
                            bodySpacing: 4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    rotation: -1.5,
                    cutoutPercentage: 70,
                    maintainAspectRatio: false,
                }
            });
        })
    }

    var OrganicSearchData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Organic Search",
            color: "#798bff",
            background: NioApp.hexRGB('#798bff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var SocialMediaData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Social Media",
            color: "#b8acff",
            background: NioApp.hexRGB('#b8acff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var ReferralsData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Referrals",
            color: "#ffa9ce",
            background: NioApp.hexRGB('#ffa9ce', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var OthersData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Others",
            color: "#f9db7b",
            background: NioApp.hexRGB('#f9db7b', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var BounceRateData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Bounce Rate",
            color: "#798bff",
            background: NioApp.hexRGB('#798bff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var PageviewsData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Pageviews",
            color: "#9a89ff",
            background: NioApp.hexRGB('#9a89ff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var NewUsersData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "New Users",
            color: "#798bff",
            background: NioApp.hexRGB('#798bff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };

    var TimeOnSiteData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"],
        dataUnit: 'Hours',
        lineTension: .1,
        datasets: [{
            label: "Time on Site",
            color: "#9a89ff",
            background: NioApp.hexRGB('#9a89ff', .25),
            data: [110, 80, 125, 65, 95, 75, 90, 110, 80, 125, 70, 95]
        }]
    };



    NioApp.Chart.LineSmallAnalytics = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

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
                                boxWidth: 12,
                                padding: 20,
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
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 11,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size:9,
                            },
                            bodySpacing: 4,
                            padding:6,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: false,
                            ticks: {
                                beginAtZero: false,
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                padding: 0
                            },
                            grid: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2),
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }

    var analyticAuData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Active Users",
            color: "#9cabff",
            background: "#9cabff",
            data: [1110, 1220, 1310, 980, 900, 770, 1060, 830, 690, 730, 790, 950, 1100, 800, 1250, 850, 950, 450, 900, 1000, 1200, 1250, 900, 950, 1300, 1200, 1250, 650, 950, 750]
        }]
    };


    NioApp.Chart.barAnalytics = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

            const chart_data = [];
            for (let i = 0; i < _get_data.datasets.length; i++) {
                chart_data.push({
                    label: _get_data.datasets[i].label,
                    tension: _get_data.lineTension,
                    backgroundColor: _get_data.datasets[i].background,
                    borderWidth: 2,
                    borderColor: _get_data.datasets[i].color,
                    data: _get_data.datasets[i].data,
                    barPercentage: .7,
                    categoryPercentage: .7
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
                                boxWidth: 12,
                                padding: 20,
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
                            backgroundColor: '#eff6ff',
                            titleFont:{
                                size: 11,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size:9,
                            },
                            bodySpacing: 4,
                            padding:6,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            position: NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: false,
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                padding: 0,
                                display: false,
                                stepSize: 300
                            },
                            grid: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength: 0,
                                zeroLineColor: 'transparent',
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }

    var analyticOvData = {
        labels: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan", "13 Jan", "14 Jan", "15 Jan", "16 Jan", "17 Jan", "18 Jan", "19 Jan", "20 Jan", "21 Jan", "22 Jan", "23 Jan", "24 Jan", "25 Jan", "26 Jan", "27 Jan", "28 Jan", "29 Jan", "30 Jan"],
        dataUnit: 'People',
        lineTension: .1,
        datasets: [{
            label: "Current Month",
            color: "#c4cefe",
            dash: [5,5],
            background: "transparent",
            data: [3910, 4420, 4110, 5180, 4400, 5170, 6460, 8830, 5290, 5430, 4690, 4350, 4600, 5200, 5650, 6850, 6950, 4150, 4300, 6000, 6800, 2250, 6900, 7950, 6900, 4200, 6250, 7650, 8950, 9750]
        }, {
            label: "Current Month",
            color: "#798bff",
            dash: [0,0],
            background: NioApp.hexRGB('#798bff', .15),
            data: [4110, 4220, 4810, 5480, 4600, 5670, 6660, 4830, 5590, 5730, 4790, 4950, 5100, 5800, 5950, 5850, 5950, 4450, 4900, 8000, 7200, 7250, 7900, 8950, 6300, 7200, 7250, 7650, 6950, 4750]
        }]
    };

    NioApp.Chart.LineLargeAnalytics = function(selector, set_data){
        let elm = document.querySelectorAll(selector);
        elm.forEach(item => {
            let _get_data = (typeof set_data === 'undefined') ? eval(item.id) : set_data;
            const selectCanvas = document.getElementById(item.id).getContext("2d");

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
                    pointBorderColor: 'transparent',
                    pointBackgroundColor: 'transparent',
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
                                boxWidth: 12,
                                padding: 20,
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
                            backgroundColor: '#fff',
                            borderColor: '#eff6ff',
                            borderWidth: 2,
                            titleFont:{
                                size: 13,
                            },
                            titleColor: '#6783b8',
                            titleMarginBottom: 6,
                            bodyColor: '#9eaecf',
                            bodyFont:{
                                size: 12
                            },
                            bodySpacing: 4,
                            padding: 10,
                            footerMarginTop: 0,
                            displayColors: false
                        },
                    },
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            position: NioApp.State.isRTL ? "right" : "left",
                            ticks: {
                                beginAtZero: true,
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                padding: 8,
                                stepSize: 2400
                            },
                            grid: {
                                color: NioApp.hexRGB("#526484", .2),
                                tickLength: 0,
                                zeroLineColor: NioApp.hexRGB("#526484", .2),
                                drawTicks:false,
                            },
                        },
                        x: {
                            display: false,
                            ticks: {
                                font:{
                                    size:12,
                                },
                                color: '#9eaecf',
                                source: 'auto',
                                padding: 0,
                                reverse: NioApp.State.isRTL
                            },
                            grid: {
                                color: "transparent",
                                tickLength: 0,
                                zeroLineColor: 'transparent',
                                offset: true,
                                drawTicks:false,
                            }
                        }
                    }
                }
            });
        })
    }

    NioApp.Chart.init = function() {
        NioApp.Chart.DoughnutAnalytics('.analytics-doughnut');
        NioApp.Chart.LineSmallAnalytics('.analytics-line-small');
        NioApp.Chart.barAnalytics('.analytics-au-chart');
        NioApp.Chart.LineLargeAnalytics('.analytics-line-large');
        NioApp.WorldMap('.vector-map')
    }
    NioApp.docReady(NioApp.Chart.init);

})(NioApp);