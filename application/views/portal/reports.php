<html>
<head>
    <!-- META -->
    <title>411Metrics - Premium Call Tracking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- CSS -->
    <?php
        $portal_css = $portal_vars['portal_css'];
        $portal_img = $portal_vars['portal_img'];
        $portal_js = $portal_vars['portal_js'];

        if(strlen($portal_css) > 0){
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $portal_css;?>custom.css" media="all">
            <link rel="stylesheet" type="text/css" href="<?php echo $portal_css;?>reports.css" media="all">
            <link rel="stylesheet" type="test/css" href="<?php echo $portal_css;?>jquery-ui.css">
            <?php
        }
    ?>


    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans|Roboto" rel="stylesheet" type="text/css">

    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo $portal_js;?>highcharts.js"></script>
        <script src="<?php echo $portal_js;?>jquery-ui.js"></script>
        <script src="<?php echo $portal_js;?>no-data-to-display.js"></script>
        <script src="<?php echo $portal_js;?>modules/exporting.js"></script>
<!--        <script src="--><?php //echo $portal_js;?><!--jquery.dataTables.js"></script>-->


</head>
<body cz-shortcut-listen="true">


<div id="navigation">
    <div id="branding-logo"><img src="<?php echo $portal_img; ?>sharktek-logo.png" width="35" height="35"></div>
    <div id="branding">Sharktek Tracking</div>
    <div id="link-wrap">
        <div><img src="<?php echo $portal_img; ?>dash-icon.png"><a href="/Portal/dashboard">Dashboard</a></div>
        <div id="active-nav"><img src="<?php echo $portal_img; ?>pie-icon.png"><a href="/Portal/statistic">Reports</a></div>
        <div><img src="<?php echo $portal_img; ?>manage-icon.png"><a href="/Portal/manage">Manage Campaigns</a></div>
    </div>
    <div id="nav-user">
        Welcome alexelmore43_abw@indeedemail.com<br><a href="/Portal/account">Account Settings</a><a
                href="/Portal/auth/logout">Logout</a></div>
</div>
<div id="nav-accent"></div>

<!-- ===================================== END HEADER ===================================== -->
<div id="content">
    <div id="flex-container">
        <div id="graphs">
            <div id="graph_scroller">
                <div id="calls_per_day_container" class="graph_container">
                    <div id="calls_per_day"></div>
                </div>
                <div id="calls_per_day_by_camp_container" class="graph_container">
                    <div id="calls_per_day_by_camp"></div>
                </div>
                <div id="pie_bar_container">
                    <div id="avg_calls_per_day_by_camp_container" class="graph_container">
                        <div id="avg_calls_per_day_by_camp"></div>
                    </div>
                    <div id="total_calls_by_camp_container" class="graph_container">
                        <div id="total_calls_by_camp"></div>
                    </div>
                    <div id="avg_call_duration_by_camp_container" class="graph_container">
                        <div id="avg_call_duration_by_camp"></div>
                    </div>
                </div>
                <div id="time_hotspots_container" class="graph_container">
                    <div id="time_hotspots"></div>
                </div>
            </div>
        </div>
        <div id="metrics">
            <div id="metric_data">
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">Total Calls</div>
                        <div class="metric_number">456</div>
                    </div>
                </div>
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">Total Unique Calls</div>
                        <div class="metric_number">345</div>
                    </div>
                </div>
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">Total Minutes Used</div>
                        <div class="metric_number">10,000,000</div>
                    </div>
                </div>
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">Average Call Duration</div>
                        <div class="metric_number">00:00:30</div>
                    </div>
                </div>
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">Longest Call</div>
                        <div class="metric_number">02:05:53</div>
                    </div>
                </div>
                <div class="metric_container">
                    <div class="centered_metric">
                        <div class="metric_title">% Unique Calls</div>
                        <div class="metric_number">65.3%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END WRAP -->
<script>
    let chart_bg = 'rgba(65,73,83,0.1)';

    let d = new Date();
    d.setDate(d.getDate() - 7);
    let calls_per_day_options = {
        chart: {
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            type: 'areaspline',
            renderTo: 'calls_per_day',
            plotBorderColor: '#606063',
        },
        colors: ["#434348", "#4FC2F0", "#434348", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
            "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        title: {
            text: 'Calls Per Day',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            shared: true
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 300,
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            dateTimeLabelFormats: {
                day: '%b %e'
            }
        },
        yAxis: {
            title: {
                enabled: true,
                text: 'Calls/Day',
            },
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            min: 0 // this sets minimum values of y to 0
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
            },
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [
            {
                name: 'Total Calls',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            },
            {
                name: 'Unique Calls',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            }
        ]
    };
    let calls_per_day_by_camp_options = {
        chart: {
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            type: 'areaspline',
            renderTo: 'calls_per_day_by_camp',
            plotBorderColor: '#606063'
        },
        colors: ["#434348", "#4FC2F0", "#434348", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
            "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        title: {
            text: 'Calls Per Day by Campaign',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            shared: true
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 300,
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            dateTimeLabelFormats: {
                day: '%b %e'
            }
        },
        yAxis: {
            title: {
                enabled: true,
                text: 'Calls/Day',
            },
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            min: 0 // this sets minimum values of y to 0
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
            },
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [
            {
                name: 'SharkTek',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            },
            {
                name: 'BBB',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            },
            {
                name: 'Source',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            }
        ]
    };
    let avg_calls_per_day_by_camp_options = {
        chart: {
            // plotBackgroundColor: chart_bg,
            plotBorderWidth: null,
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            plotShadow: false,
            type: 'pie',
            renderTo: 'avg_calls_per_day_by_camp'
        },
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        title: {
            text: 'Avg Calls/Day By Campaign',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Chrome',
                y: 61.41,
                sliced: true,
                selected: true
            }, {
                name: 'Internet Explorer',
                y: 11.84
            }, {
                name: 'Firefox',
                y: 10.85
            }, {
                name: 'Edge',
                y: 4.67
            }, {
                name: 'Safari',
                y: 4.18
            }, {
                name: 'Sogou Explorer',
                y: 1.64
            }, {
                name: 'Opera',
                y: 1.6
            }, {
                name: 'QQ',
                y: 1.2
            }, {
                name: 'Other',
                y: 2.61
            }]
        }]
    };
    let total_calls_by_camp_options = {
        chart: {
            // plotBackgroundColor: chart_bg,
            plotBorderWidth: null,
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            plotShadow: false,
            type: 'pie',
            renderTo: 'total_calls_by_camp'
        },
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        title: {
            text: 'Total Calls By Campaign',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Chrome',
                y: 61.41,
                sliced: true,
                selected: true
            }, {
                name: 'Internet Explorer',
                y: 11.84
            }, {
                name: 'Firefox',
                y: 10.85
            }, {
                name: 'Edge',
                y: 4.67
            }, {
                name: 'Safari',
                y: 4.18
            }, {
                name: 'Sogou Explorer',
                y: 1.64
            }, {
                name: 'Opera',
                y: 1.6
            }, {
                name: 'QQ',
                y: 1.2
            }, {
                name: 'Other',
                y: 2.61
            }]
        }]
    };
    let avg_call_duration_by_camp_options = {
        chart: {
            plotBorderWidth: null,
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            plotShadow: false,
            type: 'pie',
            renderTo: 'avg_call_duration_by_camp'
        },
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        title: {
            text: 'Avg Call Duration by Campaign',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Chrome',
                y: 61.41,
                sliced: true,
                selected: true
            }, {
                name: 'Internet Explorer',
                y: 11.84
            }, {
                name: 'Firefox',
                y: 10.85
            }, {
                name: 'Edge',
                y: 4.67
            }, {
                name: 'Safari',
                y: 4.18
            }, {
                name: 'Sogou Explorer',
                y: 1.64
            }, {
                name: 'Opera',
                y: 1.6
            }, {
                name: 'QQ',
                y: 1.2
            }, {
                name: 'Other',
                y: 2.61
            }]
        }]
    };
    let time_hotspots_options = {
        chart: {
            backgroundColor: {
                linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                stops: [
                    [0, chart_bg]
                ]
            },
            type: 'areaspline',
            renderTo: 'time_hotspots',
            plotBorderColor: '#606063'
        },
        colors: ["#434348", "#4FC2F0", "#434348", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
            "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
        credits: {
            enabled: false
        },
        navigation: {
            buttonOptions: {
                theme: {
                    fill: chart_bg,
                    r: 0,
                    states: {
                        hover: {
                            fill: '#234461'
                        },
                        select: {
                            stroke: '#039',
                            fill: '#465c71'
                        }
                    }
                }
            }
        },
        title: {
            text: 'Time Hotspots by Campaign',
            style: {
                color: '#788b94',
                fontSize: '20px'
            }
        },
        tooltip: {
            shared: true
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 300,
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            dateTimeLabelFormats: {
                day: '%b %e'
            }
        },
        yAxis: {
            title: {
                enabled: true,
                text: 'Calls/Day',
            },
            gridLineColor: '#707073',
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            min: 0 // this sets minimum values of y to 0
        },
        legend: {
            itemStyle: {
                color: '#E0E0E3'
            },
            itemHoverStyle: {
                color: '#FFF'
            },
            itemHiddenStyle: {
                color: '#606063'
            }
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
            },
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [
            {
                name: 'Total Calls',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            },
            {
                name: 'Unique Calls',
                data: [0, 0, 0, 0, 0, 0, 0],
                pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            }
        ]
    };

    $(document).ready(function(){
       let calls_per_day = new Highcharts.Chart(calls_per_day_options);
       let calls_per_day_by_camp = new Highcharts.Chart(calls_per_day_by_camp_options);
       let avg_calls_per_day_by_camp = new Highcharts.Chart(avg_calls_per_day_by_camp_options);
       let total_calls_by_camp = new Highcharts.Chart(total_calls_by_camp_options);
       let avg_call_duration_by_camp = new Highcharts.Chart(avg_call_duration_by_camp_options);
       let time_hotspots = new Highcharts.Chart(time_hotspots_options);
    });
</script>

</body>
</html>