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
        <div><img src="<?php echo $portal_img; ?>pie-icon.png"><a href="/Portal/statistic">Reports</a></div>
        <div><img src="<?php echo $portal_img; ?>manage-icon.png"><a href="/Portal/manage">Manage Campaigns</a></div>
    </div>
    <div id="nav-user">
    Welcome alexelmore43_abw@indeedemail.com<br><a href="/Portal/account">Account Settings</a><a
            href="/Portal/auth/logout">Logout</a></div>
    </div>
<div id="nav-accent"></div>

<!-- ===================================== END HEADER ===================================== -->
<div id="content">
    <div id="line" style="width: 95%; margin: 63px auto;"></div>
    <script type="text/javascript">
        let days_in_week = 7;
        let total_week_calls = [];
        let unique_week_calls = [];
        let total_line_data = [];
        let unique_line_data = [];
        let d = new Date();
        for(let count = 1; count <= days_in_week; count++){
            d.setDate(d.getDate() - 1);
            let year = d.getFullYear().toString();
            let month = d.getMonth().toString();
            if(month.length < 2){
                month = "0" + month;
            }

            let day = d.getDate().toString();
            if(day.length < 2){
                day = "0" + day;
            }

            let index = year.toString() + month.toString() + day.toString();
            total_week_calls[index] = 0;
            unique_week_calls[index] = [];
        }

        for(let i = 0; i < days_in_week; i++){
            total_line_data.push(0);
            unique_line_data.push(0);
        }


        function loadChart(){
            $("#line");

            let counter = 0;
            for(let entry in total_week_calls){
                total_line_data[counter] = total_week_calls[entry];
                counter++;
            }

            let unique_counter = 0;
            for(let entry in unique_week_calls){
                let phones = unique_week_calls[entry];
                unique_line_data[unique_counter] = phones.length;
                unique_counter++;
            }

            let d = new Date();
            d.setDate(d.getDate() - days_in_week);
            let options = {
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
                colors: ["#434348", "#4FC2F0", "#434348", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
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
                        data: total_line_data,
                        pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                        pointInterval: 24 * 3600 * 1000
                    },
                    {
                        name: 'Unique Calls',
                        data: unique_line_data,
                        pointStart: Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate()),
                        pointInterval: 24 * 3600 * 1000
                    }
                ]
            };

            let chart = new Highcharts.Chart(options);
        }

        function addToCalls(timestamp, phone){
            let dt = new Date(timestamp);
            let year = dt.getFullYear().toString();
            let month = dt.getMonth().toString();

            if(month.length < 2){
                month = "0" + month;
            }

            let day = dt.getDate().toString();
            if(day.length < 2){
                day = "0" + day;
            }
            let index = year.toString() + month.toString() + day.toString();
            total_week_calls[index] = total_week_calls[index] + 1;

            let phones = unique_week_calls[index];
            if(!phones.includes(phone.replace(/\D/g,''))){
                phones.push(phone.replace(/\D/g,''));
            }

            unique_week_calls[index] = phones;
        }

        async function editDateTimes(){
            let d = new Date();
            let end_date = Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate());
            d.setDate(d.getDate() - days_in_week);
            let start_date = Date.UTC(d.getFullYear(), d.getUTCMonth(), d.getUTCDate());
            $('#example').find('tr').each(function(){
                let timestamp = parseInt($(this).find('.date').text()) * 1000;
                if(start_date <= timestamp && timestamp <= end_date){
                    addToCalls(timestamp, $(this).find('.caller_number').text());
                }

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
            loadChart();
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
