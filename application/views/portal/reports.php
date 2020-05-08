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
        <div><img src="<?php echo $portal_img; ?>dash-icon.png"><a href="/codeigniter/index.php/portal/dashboard">Dashboard</a></div>
        <div id="active-nav"><img src="<?php echo $portal_img; ?>pie-icon.png"><a href="/codeigniter/index.php/portal/reports">Reports</a></div>
        <div><img src="<?php echo $portal_img; ?>manage-icon.png"><a href="/codeigniter/index.php/portal/manage">Manage Campaigns</a></div>
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
                <div id="calls_per_day_container" class="date_container">
                    <div>From <input type="date" id="start_date" onchange="startDateChanged(this)"/> to <input type="date" id="end_date" onchange="endDateChanged(this)"/></div>
                </div>
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
                <div class="metric_container" id="metric_total_calls">
                    <div class="centered_metric">
                        <div class="metric_title">Total Calls</div>
                        <div class="metric_number">456</div>
                    </div>
                </div>
                <div class="metric_container" id="metric_unique_calls">
                    <div class="centered_metric">
                        <div class="metric_title">Total Unique Calls</div>
                        <div class="metric_number">345</div>
                    </div>
                </div>
                <div class="metric_container" id="metric_perc_unique">
                    <div class="centered_metric">
                        <div class="metric_title">% Unique Calls</div>
                        <div class="metric_number">65.3%</div>
                    </div>
                </div>
                <div class="metric_container" id="metric_total_minutes">
                    <div class="centered_metric">
                        <div class="metric_title">Total Minutes Used</div>
                        <div class="metric_number">10,000,000</div>
                    </div>
                </div>
                <div class="metric_container" id="metric_avg_duration">
                    <div class="centered_metric">
                        <div class="metric_title">Average Call Duration</div>
                        <div class="metric_number">00:00:30</div>
                    </div>
                </div>
                <div class="metric_container" id="metric_longest_call">
                    <div class="centered_metric">
                        <div class="metric_title">Longest Call</div>
                        <div class="metric_number">02:05:53</div>
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
            zoomType: 'X'
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
            tickPixelInterval: 100,
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
            tickPixelInterval: 100,
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
            pointFormat: 'Avg Calls/Day: <b>{point.y:.1f}</b><br>% of Chart: <b>{point.percentage:.0f}%</b>'
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
            data: [
             {
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
            pointFormat: 'Avg Calls/Day: <b>{point.y:.1f}</b><br>% of Chart: <b>{point.percentage:.0f}%</b>'
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
            pointFormat: '<b>{point.percentage:.1f}%</b><br>Duration: <b>{point.y:.1f}</b>',
            formatter: function(){
                let seconds = this.y;
                let seconds_string = durations[seconds];
                return this.point.name + "<br><b>" + seconds_string + "</b>";
            }
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
            colorByPoint: true,
            data: []
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
            text: 'Call Volume By Hour',
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
            tickPixelInterval: 100,
            labels: {
                style: {
                    color: '#E0E0E3'
                }
            },
            dateTimeLabelFormats: {
                millisecond: '%l:%M%P',
                second: '%l:%M%P',
                minute: '%l:%M%P',
                hour: '%l:%M%P',
                day: '%l:%M%P',
                week: '%l:%M%P',
                month: '%l:%M%P',
                year: '%l:%M%P'
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
    let start_date = '2017-08-29';
    let end_date = '2017-09-30';

    let durations = [];

    function updateCharts(){
        let start_dt;
        if(start_date !== 0){
            start_dt = new Date(Date.parse(start_date + 'T18:59:00'));
        } else {
            start_dt = new Date(Date.parse('2017-01-01T18:59:00'));
        }

        let end_dt;
        if(end_date !== 0){
            end_dt = new Date(Date.parse(end_date + 'T18:59:00'));
        } else {
            end_dt = new Date();
        }

        let localDt = new Date();
        let start_utcDt = Date.UTC(start_dt.getUTCFullYear(), start_dt.getUTCMonth(), start_dt.getUTCDate()) / 1000;
        let end_utcDt = end_dt.getTime() / 1000;
        let tz_offset = localDt.getTimezoneOffset();

        $.ajax({
            url: '/codeigniter/index.php/portal/get_calls_for_charts/',
            type: 'POST',
            data: {start_date: start_utcDt, end_date: end_utcDt, tz_offset: tz_offset},
            success: function(result){
                let return_array = jQuery.parseJSON(result);
                parseCallsPerDay(return_array['calls_per_day'], start_dt);
                parseCallsPerDayByCamp(return_array['calls_per_day_by_camp'], start_dt);
                parseAvgCallsPerDayByCampaign(return_array['avg_calls_per_day_by_camp']);
                parseTotalCallsByCampaign(return_array['total_calls_by_camp']);
                parseAvgCallDurationByCampaign(return_array['avg_call_duration_by_camp'])
                parseTimeHotspots(return_array['time_hotspots']);
                parseMetrics(return_array['metrics']);
                console.log(return_array);
            }
        });
    }


    $(document).ready(function(){
        $('#start_date').val(start_date);
        $('#end_date').val(end_date);

        updateCharts();
    });

    function parseCallsPerDay(calls_per_day, start_dt){
        let total_calls = calls_per_day['total_calls'];
        let unique_calls = calls_per_day['unique_calls'];
        calls_per_day_options.series = [
            {
                name: 'Total Calls',
                data: total_calls,
                pointStart: Date.UTC(start_dt.getFullYear(), start_dt.getUTCMonth(), start_dt.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            },
            {
                name: 'Unique Calls',
                data: unique_calls,
                pointStart: Date.UTC(start_dt.getFullYear(), start_dt.getUTCMonth(), start_dt.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            }
        ];
        let calls_per_day_chart = new Highcharts.Chart(calls_per_day_options);
    }

    function parseCallsPerDayByCamp(calls, start_dt){
        calls_per_day_by_camp_options.series = [];

        for(let campaign in calls){
            let data = calls[campaign];
            calls_per_day_by_camp_options.series.push({
                name: campaign,
                data: data,
                pointStart: Date.UTC(start_dt.getFullYear(), start_dt.getUTCMonth(), start_dt.getUTCDate()),
                pointInterval: 24 * 3600 * 1000
            });
        }

        let calls_per_day_by_camp = new Highcharts.Chart(calls_per_day_by_camp_options);

    }

    function parseAvgCallsPerDayByCampaign(data){
        console.log(data);
        avg_calls_per_day_by_camp_options.series[0].data = [];
        for(let campaign in data){
            console.log(campaign);
            let  data_point = data[campaign];
            avg_calls_per_day_by_camp_options.series[0].data.push(
                {
                    name: campaign,
                    y: data_point
                }
            );
        }

        let avg_calls_per_day_by_camp = new Highcharts.Chart(avg_calls_per_day_by_camp_options);
    }
    
    function parseTotalCallsByCampaign(data){
        total_calls_by_camp_options.series[0].data = [];
        for(let campaign in data){
            let  data_point = data[campaign];
            total_calls_by_camp_options.series[0].data.push(
                {
                    name: campaign,
                    y: data_point
                }
            );
        }

        let total_calls_by_camp = new Highcharts.Chart(total_calls_by_camp_options);
    }

    function parseAvgCallDurationByCampaign(data){
        avg_call_duration_by_camp_options.series[0].data = [];
        for(let campaign in data){
            let seconds_array = data[campaign];
            let seconds = seconds_array[0];
            let seconds_string = seconds_array[1];
            durations[seconds] = seconds_string;
            avg_call_duration_by_camp_options.series[0].data.push(
                {
                    name: campaign,
                    y: seconds,
                }
            );
        }

        let avg_call_duration_by_camp  = new Highcharts.Chart(avg_call_duration_by_camp_options);
    }

    function parseTimeHotspots(data){
        let start_dt = new Date();
        time_hotspots_options.series = [];

        for(let campaign in data){
            let points = data[campaign];
            if(campaign === 'total'){
                campaign = "All Calls";
            }

            time_hotspots_options.series.push({
                name: campaign,
                data: points,
                pointStart: Date.UTC(start_dt.getFullYear(), start_dt.getUTCMonth(), start_dt.getUTCDate()),
                pointInterval: 3600 * 1000
            });
        }

        let time_hotspots = new Highcharts.Chart(time_hotspots_options);
    }

    function parseMetrics(data){
        //total calls
        $('#metric_total_calls').find('.metric_number').text(data['total_calls']);
        $('#metric_unique_calls').find('.metric_number').text(data['unique_calls']);
        $('#metric_perc_unique').find('.metric_number').text(data['unique_percentage'] + "%");
        $('#metric_longest_call').find('.metric_number').text(data['longest_call']);
        $('#metric_total_minutes').find('.metric_number').text(data['minutes_used']);
        $('#metric_avg_duration').find('.metric_number').text(data['avg_call_duration']);
    }

    function startDateChanged(input){
        start_date = $(input).val();
        if(start_date === '' || start_date === null){
            start_date = 0;
        }

        $('#end_date').val('');

        updateCharts();
    }

    function endDateChanged(input){
        end_date = $(input).val();
        if(end_date === '' || end_date === null){
            end_date = 0;
        }
        updateCharts();
    }
</script>

</body>
</html>
