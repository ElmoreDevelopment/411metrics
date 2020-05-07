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
            <link rel="stylesheet" type="text/css" href="<?php echo $portal_css;?>customdt.css" media="all">
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
        <script src="<?php echo $portal_js;?>jquery.dataTables.js"></script>


</head>
<body cz-shortcut-listen="true">


<div id="navigation">
    <div id="branding-logo"><img src="<?php echo $portal_img; ?>sharktek-logo.png" width="35" height="35"></div>
    <div id="branding">Sharktek Tracking</div>
    <div id="link-wrap">
        <div id="active-nav"><img src="<?php echo $portal_img; ?>dash-icon.png"><a href="/Portal/dashboard">Dashboard</a></div>
        <img src="<?php echo $portal_img; ?>pie-icon.png"><a href="/Portal/statistic">Reports</a>
        <img src="<?php echo $portal_img; ?>manage-icon.png"><a href="/Portal/manage">Manage Campaigns</a></div>
    <div id="nav-user">
        Welcome alexelmore43_abw@indeedemail.com<br><a href="/Portal/account">Account Settings</a><a
                href="/Portal/auth/logout">Logout</a></div>
</div>
<div id="nav-accent"></div>

<!-- ===================================== END HEADER ===================================== -->
<div id="content">
    <div id="line" style="width: 95%; margin: 63px auto;" data-highcharts-chart="0">
        <div class="highcharts-container" id="highcharts-0"
             style="position: relative; overflow: hidden; width: 1824px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
            <svg version="1.1"
                 style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                 xmlns="http://www.w3.org/2000/svg" width="1824" height="400">
                <desc>Created with Highcharts 4.0.1</desc>
                <defs>
                    <linearGradient x1="0" y1="0" x2="1" y2="1" id="highcharts-1">
                        <stop offset="0" stop-color="#171d25" stop-opacity="1"></stop>
                        <stop offset="1" stop-color="#171d25" stop-opacity="1"></stop>
                    </linearGradient>
                    <clipPath id="highcharts-2">
                        <rect x="0" y="0" width="1754" height="263"></rect>
                    </clipPath>
                </defs>
                <rect x="0" y="0" width="1824" height="400" strokeWidth="0" fill="url(#highcharts-1)"
                      class=" highcharts-background"></rect>
                <g class="highcharts-button" style="cursor:default;" stroke-linecap="round"
                   transform="translate(1790,10)"><title>Chart context menu</title>
                    <rect x="0.5" y="0.5" width="24" height="22" strokeWidth="1" fill="#171d25" stroke-width="1"
                          stroke="none" rx="0" ry="0"></rect>
                    <path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666"
                          stroke-width="3" zIndex="1"></path>
                    <text x="0" zIndex="1" style="color:black;fill:black;" y="13"></text>
                </g>
                <path fill="rgba(67,67,72,0.25)"
                      d="M 814.1708683473389 177.5 C 827.490868347339 177.5 827.490868347339 197.5 814.1708683473389 197.5 C 800.8508683473389 197.5 800.8508683473389 177.5 814.1708683473389 177.5 Z"></path>
                <path fill="rgba(144,238,126,0.25)"
                      d="M 814.1708683473389 177.5 C 827.490868347339 177.5 827.490868347339 197.5 814.1708683473389 197.5 C 800.8508683473389 197.5 800.8508683473389 177.5 814.1708683473389 177.5 Z"></path>
                <g class="highcharts-grid" zIndex="1"></g>
                <g class="highcharts-grid" zIndex="1">
                    <path fill="none" d="M 60 188.5 L 1814 188.5" stroke="#707073" stroke-width="1" zIndex="1"
                          opacity="1"></path>
                </g>
                <g class="highcharts-axis" zIndex="2">
                    <path fill="none" d="M 322.5 319 L 322.5 329" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                    <path fill="none" d="M 568.5 319 L 568.5 329" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                    <path fill="none" d="M 813.5 319 L 813.5 329" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                    <path fill="none" d="M 1059.5 319 L 1059.5 329" stroke="#C0D0E0" stroke-width="1"
                          opacity="1"></path>
                    <path fill="none" d="M 1304.5 319 L 1304.5 329" stroke="#C0D0E0" stroke-width="1"
                          opacity="1"></path>
                    <path fill="none" d="M 1550.5 319 L 1550.5 329" stroke="#C0D0E0" stroke-width="1"
                          opacity="1"></path>
                    <path fill="none" d="M 1796.5 319 L 1796.5 329" stroke="#C0D0E0" stroke-width="1"
                          opacity="1"></path>
                    <path fill="none" d="M 76.5 319 L 76.5 329" stroke="#C0D0E0" stroke-width="1" opacity="1"></path>
                    <path fill="none" d="M 60 319.5 L 1814 319.5" stroke="#C0D0E0" stroke-width="1" zIndex="7"
                          visibility="visible"></path>
                </g>
                <g class="highcharts-axis" zIndex="2">
                    <text x="27.984375" zIndex="7" text-anchor="middle"
                          transform="translate(0,0) rotate(270 27.984375 187.5)" class=" highcharts-yaxis-title"
                          style="color:#707070;fill:#707070;" visibility="visible" y="187.5">Calls/Day
                    </text>
                </g>
                <g class="highcharts-series-group" zIndex="3">
                    <g class="highcharts-series" visibility="visible" zIndex="0.1"
                       transform="translate(60,56) scale(1 1)" clip-path="url(#highcharts-2)">
                        <path fill="rgba(67,67,72,0.5)"
                              d="M 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5 L 1736.8039215686274 131.5 L 17.19607843137255 131.5"
                              zIndex="0"></path>
                        <path fill="none"
                              d="M 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5"
                              stroke="#434348" stroke-width="2" zIndex="1" stroke-linejoin="round"
                              stroke-linecap="round"></path>
                        <path fill="none"
                              d="M 7.196078431372548 131.5 L 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5 L 1746.8039215686274 131.5"
                              stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)"
                              stroke-width="22" zIndex="2" class=" highcharts-tracker" style="cursor:pointer;"></path>
                    </g>
                    <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1"
                       transform="translate(60,56) scale(1 1)" clip-path="none" style="cursor:pointer;">
                        <path fill="#434348"
                              d="M 1736 127.5 C 1741.328 127.5 1741.328 135.5 1736 135.5 C 1730.672 135.5 1730.672 127.5 1736 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 1491 127.5 C 1496.328 127.5 1496.328 135.5 1491 135.5 C 1485.672 135.5 1485.672 127.5 1491 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 1245.4873949579833 127.5 C 1250.8153949579832 127.5 1250.8153949579832 135.5 1245.4873949579833 135.5 C 1240.1593949579833 135.5 1240.1593949579833 127.5 1245.4873949579833 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 999.8291316526611 127.5 C 1005.1571316526611 127.5 1005.1571316526611 135.5 999.8291316526611 135.5 C 994.5011316526611 135.5 994.5011316526611 127.5 999.8291316526611 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 754.1708683473389 125.5 C 762.1628683473389 125.5 762.1628683473389 137.5 754.1708683473389 137.5 C 746.178868347339 137.5 746.178868347339 125.5 754.1708683473389 125.5 Z"
                              stroke="#FFFFFF" stroke-width="1"></path>
                        <path fill="#434348"
                              d="M 508 127.5 C 513.328 127.5 513.328 135.5 508 135.5 C 502.672 135.5 502.672 127.5 508 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 262 127.5 C 267.328 127.5 267.328 135.5 262 135.5 C 256.672 135.5 256.672 127.5 262 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#434348"
                              d="M 17 127.5 C 22.328 127.5 22.328 135.5 17 135.5 C 11.672 135.5 11.672 127.5 17 127.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                    </g>
                    <g class="highcharts-series" visibility="visible" zIndex="0.1"
                       transform="translate(60,56) scale(1 1)" clip-path="url(#highcharts-2)">
                        <path fill="rgba(144,238,126,0.5)"
                              d="M 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5 L 1736.8039215686274 131.5 L 17.19607843137255 131.5"
                              zIndex="0"></path>
                        <path fill="none"
                              d="M 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5"
                              stroke="#90ee7e" stroke-width="2" zIndex="1" stroke-linejoin="round"
                              stroke-linecap="round"></path>
                        <path fill="none"
                              d="M 7.196078431372548 131.5 L 17.19607843137255 131.5 C 17.19607843137255 131.5 164.59103641456582 131.5 262.85434173669466 131.5 C 361.11764705882354 131.5 410.249299719888 131.5 508.5126050420168 131.5 C 606.7759103641456 131.5 655.90756302521 131.5 754.1708683473389 131.5 C 852.4341736694678 131.5 901.5658263305322 131.5 999.8291316526611 131.5 C 1098.09243697479 131.5 1147.2240896358544 131.5 1245.4873949579833 131.5 C 1343.7507002801121 131.5 1392.8823529411764 131.5 1491.1456582633052 131.5 C 1589.4089635854339 131.5 1736.8039215686274 131.5 1736.8039215686274 131.5 L 1746.8039215686274 131.5"
                              stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)"
                              stroke-width="22" zIndex="2" class=" highcharts-tracker" style="cursor:pointer;"></path>
                    </g>
                    <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1"
                       transform="translate(60,56) scale(1 1)" clip-path="none" style="cursor:pointer;">
                        <path fill="#90ee7e" d="M 1736 127.5 L 1740 131.5 1736 135.5 1732 131.5 Z" stroke="#FFFFFF"
                              stroke-width="0.00001"></path>
                        <path fill="#90ee7e" d="M 1491 127.5 L 1495 131.5 1491 135.5 1487 131.5 Z" stroke="#FFFFFF"
                              stroke-width="0.00001"></path>
                        <path fill="#90ee7e"
                              d="M 1245.4873949579833 127.5 L 1249.4873949579833 131.5 1245.4873949579833 135.5 1241.4873949579833 131.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#90ee7e"
                              d="M 999.8291316526611 127.5 L 1003.8291316526611 131.5 999.8291316526611 135.5 995.8291316526611 131.5 Z"
                              stroke="#FFFFFF" stroke-width="0.00001"></path>
                        <path fill="#90ee7e"
                              d="M 754.1708683473389 125.5 L 760.1708683473389 131.5 754.1708683473389 137.5 748.1708683473389 131.5 Z"
                              stroke="#FFFFFF" stroke-width="1"></path>
                        <path fill="#90ee7e" d="M 508 127.5 L 512 131.5 508 135.5 504 131.5 Z" stroke="#FFFFFF"
                              stroke-width="0.00001"></path>
                        <path fill="#90ee7e" d="M 262 127.5 L 266 131.5 262 135.5 258 131.5 Z" stroke="#FFFFFF"
                              stroke-width="0.00001"></path>
                        <path fill="#90ee7e" d="M 17 127.5 L 21 131.5 17 135.5 13 131.5 Z" stroke="#FFFFFF"
                              stroke-width="0.00001"></path>
                    </g>
                </g>
                <text x="912" text-anchor="middle" class="highcharts-title" zIndex="4"
                      style="color:#788b94;font-size:20px;fill:#788b94;width:1760px;" y="25">
                    <tspan>Week Overview: Calls Per Day</tspan>
                </text>
                <g class="highcharts-legend" zIndex="7" transform="translate(806,364)">
                    <g zIndex="1">
                        <g>
                            <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                <text x="21" y="15"
                                      style="color:#E0E0E3;font-size:12px;font-weight:bold;cursor:pointer;fill:#E0E0E3;"
                                      text-anchor="start" zIndex="2">
                                    <tspan>Total Calls</tspan>
                                </text>
                                <rect x="0" y="4" width="16" height="12" zIndex="3" fill="#434348"></rect>
                            </g>
                            <g class="highcharts-legend-item" zIndex="1" transform="translate(114.375,3)">
                                <text x="21" y="15"
                                      style="color:#E0E0E3;font-size:12px;font-weight:bold;cursor:pointer;fill:#E0E0E3;"
                                      text-anchor="start" zIndex="2">
                                    <tspan>Unique Calls</tspan>
                                </text>
                                <rect x="0" y="4" width="16" height="12" zIndex="3" fill="#90ee7e"></rect>
                            </g>
                        </g>
                    </g>
                </g>
                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">
                    <text x="77.19607843137254" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>Apr 29</tspan>
                    </text>
                    <text x="322.85434173669466" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>Apr 30</tspan>
                    </text>
                    <text x="568.5126050420167" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 1</tspan>
                    </text>
                    <text x="814.1708683473389" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 2</tspan>
                    </text>
                    <text x="1059.829131652661" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 3</tspan>
                    </text>
                    <text x="1305.4873949579833" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 4</tspan>
                    </text>
                    <text x="1551.1456582633052" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 5</tspan>
                    </text>
                    <text x="1796.8039215686274" text-anchor="middle"
                          style="color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="339" opacity="1">
                        <tspan>May 6</tspan>
                    </text>
                </g>
                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                    <text x="45" text-anchor="end"
                          style="width:582px;color:#E0E0E3;cursor:default;font-size:11px;fill:#E0E0E3;" y="191"
                          opacity="1">0
                    </text>
                </g>
                <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;"
                   transform="translate(673,29)" opacity="1" visibility="visible">
                    <path fill="none"
                          d="M 3.5 0.5 L 122.5 0.5 C 125.5 0.5 125.5 0.5 125.5 3.5 L 125.5 61.5 C 125.5 64.5 125.5 64.5 122.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke-width="5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996"
                          transform="translate(1, 1)" width="125" height="64"></path>
                    <path fill="none"
                          d="M 3.5 0.5 L 122.5 0.5 C 125.5 0.5 125.5 0.5 125.5 3.5 L 125.5 61.5 C 125.5 64.5 125.5 64.5 122.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke-width="3" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999"
                          transform="translate(1, 1)" width="125" height="64"></path>
                    <path fill="none"
                          d="M 3.5 0.5 L 122.5 0.5 C 125.5 0.5 125.5 0.5 125.5 3.5 L 125.5 61.5 C 125.5 64.5 125.5 64.5 122.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke-width="1" isShadow="true" stroke="black" stroke-opacity="0.15"
                          transform="translate(1, 1)" width="125" height="64"></path>
                    <path fill="rgba(249, 249, 249, .85)"
                          d="M 3.5 0.5 L 122.5 0.5 C 125.5 0.5 125.5 0.5 125.5 3.5 L 125.5 61.5 C 125.5 64.5 125.5 64.5 122.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                          stroke-width="1" stroke="#434348"></path>
                    <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21">
                        <tspan style="font-size: 10px">Saturday, May 2, 2020</tspan>
                        <tspan style="fill:#434348" x="8" dy="16">●</tspan>
                        <tspan dx="0"> Total Calls:</tspan>
                        <tspan style="font-weight:bold" dx="0">0</tspan>
                        <tspan style="fill:#90ee7e" x="8" dy="16">●</tspan>
                        <tspan dx="0"> Unique Calls:</tspan>
                        <tspan style="font-weight:bold" dx="0">0</tspan>
                    </text>
                </g>
            </svg>
        </div>
    </div>
    <script type="text/javascript">
        //intial load of call_line
        $(document).ready(function () {
            $("#line");
            var options = {
                chart: {
                    backgroundColor: {
                        linearGradient: {x1: 0, y1: 0, x2: 1, y2: 1},
                        stops: [
                            [0, '#171d25'],
                            [1, '#171d25']
                        ]
                    },
                    type: 'areaspline',
                    renderTo: 'line',
                    plotBorderColor: '#606063'
                },
                colors: ["#434348", "#90ee7e", "#434348", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                    "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
                credits: {
                    enabled: false
                },
                navigation: {
                    buttonOptions: {
                        theme: {
                            fill: '#171d25',
                            r: 0,
                            states: {
                                hover: {
                                    fill: '#7cb5ec'
                                },
                                select: {
                                    stroke: '#039',
                                    fill: '#7cb5ec'
                                }
                            }
                        }
                    }
                },
                title: {
                    text: 'Week Overview: Calls Per Day',
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
                    tickPixelInterval: 200,
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
                series: [{}, {}]
            };

            // $.ajax({
            //     url: "/Portal/statistic/JSON_call_line",
            //     data: 'testdata',
            //     type: 'post',
            //     dataType: "json",
            //     success: function (data) {
            //         //options.xAxis.categories = data.categories;
            //         var d = new Date();
            //         d.setDate(d.getDate() - 7);
            //         options.series[0].name = 'Total Calls';
            //         options.series[0].data = data.calls;
            //         options.series[0].pointStart = Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate());
            //         options.series[0].pointInterval = 24 * 3600 * 1000;
            //         options.series[1].name = 'Unique Calls';
            //         options.series[1].data = data.unique;
            //         options.series[1].pointStart = Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate());
            //         options.series[1].pointInterval = 24 * 3600 * 1000;
            //         var chart = new Highcharts.Chart(options);
            //     }
            // });

        });

        $(document).ready(function(){
            // $.ajax({
            //     url: "http://10.0.0.27/codeigniter/index.php/portal/get_calls",
            //     method: "GET",
            //     success: function(result){
            //         console.log(result);
            //     }
            // })
        })

        async function editDateTimes(){
            $('#example').find('tr').each(function(){
                let timestamp = parseInt($(this).find('.date').text()) * 1000;
                let dt = new Date(timestamp);
                let date = months[dt.getMonth()] + " " + dt.getDate() + ", " + dt.getFullYear();
                let hours = dt.getHours();
                let minutes = dt.getMinutes();
                let amPm = 'am';
                if(hours > 12){
                    amPm = 'pm';
                    hours = hours - 12;
                }

                if(hours === 0){
                   hours = 12;
                }

                if(minutes.toString().length < 2){
                    minutes = "0" + minutes;
                }


                let time = hours + ":" + minutes + amPm;
                $(this).find('.date').text(date);
                $(this).find('.time').text(time);
            });
        }
    </script>

    <script>

        $(document).ready(function () {
            editDateTimes().then((value) => {
                $('#example').dataTable({
                aaSorting: [[0, 'desc']],
                "iDisplayLength": 15,
                "fnPreDrawCallback": function () {
                    $("#example").hide();
                },
                "paging": true,
                "pagingType": "simple_numbers",
                "language": {
                    "search": "Search:"
                },
                "lengthMenu": [10, 25, 50, 75, 100],

                "fnDrawCallback": function () {
                    $("#example").show();
                    $("tr:odd").css("background-color", "#171d25");
                    $("tr:even").css("background-color", "#171d25");
                    //alert("Draw");
                },
                "fnInitComplete": function () {
                }
            });
                $("#example").show();
            })
        });


        let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        function exportTableToCSV(filename) {
            let csv = [];
            let rows = document.querySelectorAll("table tr");
            for (let i = 1; i < rows.length; i++) {
                let row = [], cols = rows[i].querySelectorAll("td");
                //to DB
                let start_date, end_date, source, call_number, call_name, city, state, status;

                //from table
                let date = cols[0].innerText;
                let time = cols[1].innerText;
                source = cols[2].innerText;
                call_number = cols[3].innerText;
                call_name = cols[4].innerText;
                let table_city = cols[5].innerText;
                let duration = cols[6].innerText;
                status = cols[7].innerText;

                //get city & state
                let city_state_broken = table_city.split(",");
                city = city_state_broken[0];
                state = city_state_broken[1];


                //----- get start date -------
                let start_date_broken = date.split(" ");
                let month = start_date_broken[0];
                let day = start_date_broken[1];
                let year = start_date_broken[2];
                let military_time = to24Hour(time);
                let start_month_number = (months.indexOf(month) + 1).toString();

                if(day.toString().length < 2){
                    day = "0" + day.toString();
                }

                if(start_month_number.length < 2){
                    start_month_number = "0" + start_month_number;
                }

                start_date = year + "-" + start_month_number + "-" + day + "T" + military_time
                start_date = Date.parse(start_date) / 1000;

                //get end date
                end_date = addDuration(start_date, duration);

                row = ['',start_date, end_date,'', '"' + source + '"', call_number, '"' + call_name + '"', city, state, status]

                csv.push(row.join(","));
            }
            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }

        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;
            // CSV file
            csvFile = new Blob([csv], {type: "text/csv"});
            // Download link
            downloadLink = document.createElement("a");
            // File name
            downloadLink.download = filename;
            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);
            // Hide download link
            downloadLink.style.display = "none";
            // Add the link to DOM
            document.body.appendChild(downloadLink);
            // Click download link
            downloadLink.click();
        }

        function to24Hour(time){
            let start_time_numbers = time.slice(0, -2);
            let amPm = time.slice(-2);

            // [Hour, Minutes]
            let start_time_broken = start_time_numbers.split(":");
            let hours = parseInt(start_time_broken[0]);
            let minutes = start_time_broken[1];

            if(amPm.toLowerCase() === 'pm' && hours !== 12){
                hours = hours + 12;
            }

            if(amPm.toLowerCase() === 'am' && hours === 12){
                hours = 0;
            }

            if(hours.toString().length < 2){
                hours = '0' + hours.toString();
            }

            return hours + ":" + minutes + ":00";
        }

        function addDuration(start_time, duration){
            let dur_split = duration.split(":");
            let add_hours = parseInt(dur_split[0]) * 60 * 60;
            let add_min = parseInt(dur_split[1]) * 60;
            let add_sec = parseInt(dur_split[2]);
            return parseInt(start_time) + add_hours + add_min + add_sec;
        }

    </script>

    <div id="record-wrap">
        <div id="example_wrapper" class="dataTables_wrapper no-footer">
            <table id="example" class="hover dataTable no-footer"
                   style="background-color: rgb(23, 29, 37); color: rgb(255, 255, 255); width: 100%;" width="100%"
                   role="grid" aria-describedby="example_info">
                <thead>
                <tr role="row" style="background-color: rgb(23, 29, 37);">
                    <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-sort="descending" aria-label="Date:: activate to sort column ascending"
                        style="width: 0px;">Date:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Time:: activate to sort column ascending" style="width: 0px;">Time:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Source:: activate to sort column ascending" style="width: 0px;">Source:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Caller Number:: activate to sort column ascending" style="width: 0px;">Caller
                        Number:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Caller Name:: activate to sort column ascending" style="width: 0px;">Caller Name:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="City:: activate to sort column ascending" style="width: 0px;">City:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Duration:: activate to sort column ascending" style="width: 0px;">Duration:
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Status:: activate to sort column ascending" style="width: 0px;">Status:
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $calls_array = json_decode($calls);
                    foreach($calls_array as $call){
                        $id = $call->id;
                        $caller_name = $call->caller_name;
                        $caller_number = $call->caller_number;
                        $source_name = $call->source_name;
                        $location = $call->location;
                        $duration = $call->duration;
                        $status = $call->status;
                        $start_time = $call->date;

                        echo "<tr id='call_$id'>";
                        echo "<td class='dt-center date'>$start_time</td>";
                        echo "<td class='dt-center time'></td>";
                        echo "<td class='dt-center source'>$source_name</td>";
                        echo "<td class='dt-center caller_number'>$caller_number</td>";
                        echo "<td class='dt-center caller_name'>$caller_name</td>";
                        echo "<td class='dt-center city'>$location</td>";
                        echo "<td class='dt-center duration'>$duration</td>";
                        echo "<td class='dt-center status'>$status</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- END WRAP -->

</body>
</html>
