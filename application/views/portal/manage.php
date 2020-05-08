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
            <link rel="stylesheet" type="text/css" href="<?php echo $portal_css;?>manage.css" media="all">
            <link rel="stylesheet" type="test/css" href="<?php echo $portal_css;?>jquery-ui.css">
            <?php
        }
    ?>


    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans|Roboto|Material+Icons" rel="stylesheet" type="text/css">

    <!-- Javascript -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo $portal_js;?>jquery-ui.js"></script>

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
    <div id="campaigns">
        <table id="campaign_table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Campaign Number</th>
                    <th>Forwarding To</th>
                    <th class="options"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $row_class = 1;
                foreach($campaigns as $campaign){
                    echo "<tr id='campaign_" . $campaign['id'] . "'>";
                    echo "<td class='camp_name row_" . $row_class . "'>" . $campaign['name'] . "</td>";
                    echo "<td class='camp_num row_" . $row_class . "''>" . $campaign['campaign_number'] . "</td>";
                    echo "<td class='camp_forward row_" . $row_class . "''>" . $campaign['forward_to'] . "</td>";
                    echo "<td class='camp_edit'><i class='material-icons edit' onclick='editRow(" . $campaign['id'] . ")'>edit</i><i class='material-icons save' style='display: none;' onclick='saveRow(" . $campaign['id'] . ")'>save</i></td>";
                    echo "<tr>";

                    if($row_class == 1){
                        $row_class = 2;
                    } else {
                        $row_class = 1;
                    }
                }
                echo "<tr id='add_row'><td colspan='3' class='row_$row_class' onclick='addCampaign()'>+ Add Campaign</td>"
            ?>
            </tbody>
        </table>
    </div>
</div>
<div id="add_campaign_dialog_container">
    <div id="add_campaign_dialog">
        <div id="add_campaign_top_band">
            <span>Add Campaign</span>
            <span id="close" onclick="closeClicked()">X</span>
        </div>
        <div id="inputs_container">
            <table id="inputs_table">
                <tr>
                    <td>
                        <label for="camp_name">Name your Campaign:</label>
                        <input id="camp_name"/>
                    </td>
                    <td>
                        <label for="camp_number">Campaign Number:</label>
                        <input id="camp_number"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="camp_forward">Forward Calls To:</label>
                        <input id="camp_forward"/>
                    </td>
                    <td>
                        <label for="camp_city">City, State:</label>
                        <input id="camp_city"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button id="submit_new" onclick="addSubmit()">Submit</button>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>


<!-- END WRAP -->
<script>
    function editRow(id){
        let row = $('#campaign_' + id);
        let name_td = row.find('.camp_name');
        let forward_td = row.find('.camp_forward');
        let number_td = row.find('.camp_num');

        name_td.html("<input type='text' class='edit_box' value='" + name_td.text() + "'/>");
        forward_td.html("<input type='text' class='edit_box' value='" + forward_td.text() + "'/>");
        number_td.html("<input type='text' class='edit_box' value='" + number_td.text() + "'/>");

        row.find('.edit').hide();
        row.find('.save').show();
    }

    function saveRow(id){
        let row = $('#campaign_' + id);
        let name_td = row.find('.camp_name');
        let forward_td = row.find('.camp_forward');
        let number_td = row.find('.camp_num');

        let name = name_td.find('input').val();
        let number = number_td.find('input').val();
        let forward = forward_td.find('input').val();

        $.ajax({
            url: '/codeigniter/index.php/portal/update_campaign/',
            type: 'POST',
            data: {name: name, number: number, forward: forward, id: id},
            success: function(result){
                console.log(result);
                name_td.text(name);
                number_td.text(number);
                forward_td.text(forward);

                row.find('.save').hide();
                row.find('.edit').show();
            }
        });
    }

    function addCampaign(){
        $('#add_campaign_dialog_container').show();
    }

    function addSubmit(){
        let name = $('#camp_name').val();
        let city = $('#camp_city').val();
        let number = $('#camp_number').val();
        let forward = $('#camp_forward').val();

        $.ajax({
            url: '/codeigniter/index.php/portal/add_campaign/',
            type: 'POST',
            data: {name: name, number: number, forward: forward, city: city},
            success: function(result){
                $('#add_campaign_dialog_container').hide();
                window.location.reload();
            }
        });
    }

    function closeClicked(){
        $('#add_campaign_dialog_container').hide();
    }
</script>

</body>
</html>
