<?php
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;

include "PHP-SDK-master/backendless/autoload.php";

Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', 'DE196C2F-B518-3F6E-FFE6-E6516DF36C00', 'v1');
$user = Backendless::$Persistence->of( 'ambulance')->find( );
$array=(array)$user;
//print_r($array);


// echo($array['data']);
$data=(array_column($array, 'data'));
//$offset=(array_column($data, 0));
// $offset1=(array_column($offset, 1));
//echo "<br><br>";
//print($data[0][0]['user_name']);
$count=count($data[0]);
//echo "<br><br>";
//echo "<br><br>";

//$user_id=$data[0][0]['a_id'];
//$user_name=$data[0][0]['a_model'];
//$user_loc=$data[0][0]['a_type'];
////$req_time=$data[0][0]['user_time'];
//$hos_name=$data[0][0]['user_name'];
//$hos_loc=$data[0][0]['hos_loc'];
//$driver_loc=$data[0][0]['driver_loc'];
//$driver_id=$data[0][0]['driver_id'];
//$driver_name=$data[0][0]['driver_name'];
//$accept_time=$data[0][0]['accept_time'];
//$admit_time=$data[0][0]['admit_time'];
//$asp_loc=$data[0][0]['asp_loc'];
//print($user_name);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ambulance Details | Ambulance Service</title>
    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
    <script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="js/custom/general.js"></script>
    <script type="text/javascript" src="js/custom/dashboard.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body class="">

<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Ambulance <span>Service</span></h1>
            <!--<span class="slogan">admin template</span>-->

                <!--<div class="search">-->
                    <!--<form action="#" method="post">-->
                        <!--<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />-->
                        <!--<button class="submitbutton"></button>-->
                    <!--</form>-->
            <!--</div>&lt;!&ndash;search&ndash;&gt;-->

            <br clear="all" />

        </div><!--left-->

        <div class="right">
            <!--<div class="notification">-->
                <!--<a class="count" href="ajax/notifications.html"><span>9</span></a>-->
            <!--</div>-->
            <div class="userinfo">
                <img src="images/thumbs/avatar.png" alt="" />
                <span>Kiran Raaj</span>
            </div><!--userinfo-->

            <div class="userinfodrop">
                <div class="avatar">
                    <a href="#"><img src="images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                        Change theme: <br />
                        <a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                    <h4>Kiran raaj</h4>
                    <span class="email">kiran@gmail.com</span>
                    <ul>
                        <!--<li><a href="editprofile.html">Edit Profile</a></li>-->
                        <li><a href="aspsettings.php">Account Settings</a></li>
                        <!--<li><a href="help.html">Help</a></li>-->
                        <li><a href="index.php">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->


    <div class="header">
        <ul class="headermenu">
            <li><a href="aspdashboard.php">Dashboard</a></li>
            <li class="current"><a href="aspambulancedetails.php">Ambulance Details</a></li>
            <li><a href="aspdriverdetails.php">Driver details</a></li>
            <!--<li><a href="reports.html">Reports</a></li>-->
        </ul>
        <!--<ul class="shortcuts">-->
        <!--<li><a href="#" class="settings"><span>Settings</span></a></li>-->
        <!--<li><a href="#" class="users"><span>Users</span></a></li>-->
        <!--<li><a href="#" class="gallery"><span>Gallery</span></a></li>-->
        <!--<li><a href="#" class="events"><span>Events</span></a></li>-->
        <!--<li><a href="#" class="analytics"><span>Analytics</span></a></li>-->
        <!--</ul>-->

        <!--<div class="headerwidget">-->
        <!--<div class="earnings">-->
        <!--<div class="one_half">-->
        <!--<h4>Today's Earnings</h4>-->
        <!--<h2>$640.01</h2>-->
        <!--</div>&lt;!&ndash;one_half&ndash;&gt;-->
        <!--<div class="one_half last alignright">-->
        <!--<h4>Current Rate</h4>-->
        <!--<h2>53%</h2>-->
        <!--</div>&lt;!&ndash;one_half last&ndash;&gt;-->
        <!--</div>&lt;!&ndash;earnings&ndash;&gt;-->
        <!--</div>&lt;!&ndash;headerwidget&ndash;&gt;-->

    </div><!--header-->

    <!--<div class="vernav2 iconmenu">-->
    <!--<ul>-->
    <!--<li><a href="#formsub" class="editor">Forms</a>-->
    <!--<span class="arrow"></span>-->
    <!--<ul id="formsub">-->
    <!--<li><a href="forms.html">Basic Form</a></li>-->
    <!--<li><a href="wizard.html">Wizard</a></li>-->
    <!--<li><a href="editor.html">WYSIWYG</a></li>-->
    <!--</ul>-->
    <!--</li>-->
    <!--<li><a href="filemanager.html" class="gallery">File Manager</a></li>-->
    <!--<li><a href="elements.html" class="elements">Elements</a></li>-->
    <!--<li><a href="widgets.html" class="widgets">Widgets</a></li>-->
    <!--<li><a href="calendar.html" class="calendar">Calendar</a></li>-->
    <!--<li><a href="support.html" class="support">Customer Support</a></li>-->
    <!--<li><a href="typography.html" class="typo">Typography</a></li>-->
    <!--<li><a href="tables.html" class="tables">Tables</a></li>-->
    <!--<li><a href="buttons.html" class="buttons">Buttons &amp; Icons</a></li>-->
    <!--<li><a href="#error" class="error">Error Pages</a>-->
    <!--<span class="arrow"></span>-->
    <!--<ul id="error">-->
    <!--<li><a href="notfound.html">Page Not Found</a></li>-->
    <!--<li><a href="forbidden.html">Forbidden Page</a></li>-->
    <!--<li><a href="internal.html">Internal Server Error</a></li>-->
    <!--<li><a href="offline.html">Offline</a></li>-->
    <!--</ul>-->
    <!--</li>-->
    <!--<li><a href="#addons" class="addons">Addons</a>-->
    <!--<span class="arrow"></span>-->
    <!--<ul id="addons">-->
    <!--<li><a href="newsfeed.html">News Feed</a></li>-->
    <!--<li><a href="profile.html">Profile Page</a></li>-->
    <!--<li><a href="productlist.html">Product List</a></li>-->
    <!--<li><a href="photo.html">Photo/Video Sharing</a></li>-->
    <!--</ul>-->
    <!--</li>-->
    <!--</ul>-->
    <!--<a class="togglemenu"></a>-->
    <!--<br /><br />-->
</div><!--leftmenu-->

<div class="">

    <div class="pageheader">

        <ul class="hornav">
            <li class="current"><a href="#updates">Ambulance Details</a></li>
            <li><a href="#addambulance">Add Ambulance</a></li>
            <li><a href="#editambulance">Edit Ambulance</a></li>
            <li><a href="#deleteambulance">Delete Ambulance</a></li>
        </ul>
    </div><!--pageheader-->

    <div id="contentwrapper" class="contentwrapper">

        <div id="updates" class="subcontent">
            <!--<div class="notibar announcement">-->
                <!--<a class="close"></a>-->
                <!--<h3>Announcement</h3>-->
                <!--<p>A new patient has been added.</p>-->
            <!--</div>&lt;!&ndash; notification announcement &ndash;&gt;-->

            <div class="">

                <!--<ul class="shortcuts">-->
                <!--<li><a href="#" class="settings"><span>Settings</span></a></li>-->
                <!--<li><a href="#" class="users"><span>Users</span></a></li>-->
                <!--<li><a href="#" class="gallery"><span>Gallery</span></a></li>-->
                <!--<li><a href="#" class="events"><span>Events</span></a></li>-->
                <!--<li><a href="#" class="analytics"><span>Analytics</span></a></li>-->
                <!--</ul>-->

                <br clear="all" />

                <!--<div class="contenttitle2 nomargintop">-->
                <!--<h3>Visit Overview</h3>-->
                <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->

                <!--<div class="overviewhead">-->
                <!--<div class="overviewselect">-->
                <!--<select id="overviewselect" name="select">-->
                <!--<option value="">Last 1 hour ago</option>-->
                <!--<option value="">Last 5 hours ago</option>-->
                <!--<option value="">Today</option>-->
                <!--<option value="">Yesterday</option>-->
                <!--<option value="">This Week</option>-->
                <!--<option value="">Last Week</option>-->
                <!--<option value="">This Month</option>-->
                <!--<option value="">Last Month</option>-->
                <!--</select>-->
                <!--</div>&lt;!&ndash;floatright&ndash;&gt;-->
                <!--From: &nbsp;<input type="text" id="datepickfrom" /> &nbsp; &nbsp; To: &nbsp;<input type="text" id="datepickto" />-->
                <!--</div>&lt;!&ndash;overviewhead&ndash;&gt;-->

                <br clear="all" />


                <table style="..." cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">
                    <!--<colgroup>-->
                    <!--<col class="con0" width="20%" />-->
                    <!--<col class="con1" width="20%" />-->
                    <!--<col class="con0" width="20%" />-->
                    <!--<col class="con1" width="20%" />-->
                    <!--<col class="con0" width="20%" />-->
                    <!--<col class="con1" width="20%" />-->
                    <!--<col class="con0" width="20%" />-->
                    <!--<col class="con1" width="20%" />-->
                    <!--</colgroup>-->
                    <thead>
                    <tr>
                        <th class="head0"><h4>Ambulance Id</h4></th>
                        <th class="head1"><h4>Ambulance Model</h4></th>
                        <th class="head0"><h4>Ambulance No.</h4></th>
                        <th class="head1"><h4>Ambulance Type</h4></th>
                        <th class="head0"><h4>Capacity</h4></th>
                        <th class="head1"><h4>Status</h4></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach($data[0] as $r) {
                    ?>
                    <tr>
                        <td><h5><?php echo $r['a_id'] ?></h5></td>
                        <td><h5><?php echo $r['a_model'] ?></h5></td>
                        <td><h5><?php echo $r['a_vehicleno'] ?></h5></td>
                        <td><h5><?php echo $r['a_type'] ?></h5></td>
                        <td><h5><?php echo $r['acapacity'] ?></h5></td>
                        <td><h5><?php echo $r['status'] ?></h5></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>

                <!--<br clear="all" />-->

                <!--<div id="chartplace" style="height:300px;"></div>-->

                <!--<br clear="all" />-->

                <!--<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">-->
                <!--<colgroup>-->
                <!--<col class="con0" style="width: 4%" />-->
                <!--<col class="con1" />-->
                <!--<col class="con0" />-->
                <!--<col class="con1" />-->
                <!--<col class="con0" />-->
                <!--<col class="con1" />-->
                <!--</colgroup>-->
                <!--<thead>-->
                <!--<tr>-->
                <!--<th class="head0"><input type="checkbox" class="checkall" /></th>-->
                <!--<th class="head1">Rendering engine</th>-->
                <!--<th class="head0">Browser</th>-->
                <!--<th class="head1">Platform(s)</th>-->
                <!--<th class="head0">Engine version</th>-->
                <!--<th class="head1">CSS grade</th>-->
                <!--</tr>-->
                <!--</thead>-->
                <!--<tfoot>-->
                <!--<tr>-->
                <!--<th class="head0"><input type="checkbox" class="checkall" /></th>-->
                <!--<th class="head1">Rendering engine</th>-->
                <!--<th class="head0">Browser</th>-->
                <!--<th class="head1">Platform(s)</th>-->
                <!--<th class="head0">Engine version</th>-->
                <!--<th class="head1">CSS grade</th>-->
                <!--</tr>-->
                <!--</tfoot>-->
                <!--<tbody>-->
                <!--<tr>-->
                <!--<td align="center"><input type="checkbox" /></td>-->
                <!--<td>Trident</td>-->
                <!--<td>Internet  Explorer 5.5</td>-->
                <!--<td>Win 95+</td>-->
                <!--<td class="center">5.5</td>-->
                <!--<td class="center">A</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td align="center"><input type="checkbox" /></td>-->
                <!--<td>Trident</td>-->
                <!--<td>Internet Explorer 6</td>-->
                <!--<td>Win 98+</td>-->
                <!--<td class="center">6</td>-->
                <!--<td class="center">A</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--<td align="center"><input type="checkbox" /></td>-->
                <!--<td>Trident</td>-->
                <!--<td>Internet Explorer 7</td>-->
                <!--<td>Win XP SP2+</td>-->
                <!--<td class="center">7</td>-->
                <!--<td class="center">A</td>-->
                <!--</tr>-->
                <!--</tbody>-->
                <!--</table>-->

                <br />

                <!--<div class="widgetbox">-->
                <!--<div class="title"><h3>Latest Articles</h3></div>-->
                <!--<div class="widgetcontent">-->
                <!--<div id="scroll1" class="mousescroll">-->
                <!--<ul class="entrylist">-->
                <!--<li>-->
                <!--<div class="entry_wrap">-->
                <!--<div class="entry_img"><img src="images/thumbs/image1.png" alt="" /></div>-->
                <!--<div class="entry_content">-->
                <!--<h4><a href="#">Why Won't My Cat Eat?</a></h4>-->
                <!--<small>Submitted by: <a href="#"><strong>Hiccup</strong></a> - June 10, 2012</small>-->
                <!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>-->
                <!--<p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>-->
                <!--</div>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="even">-->
                <!--<div class="entry_wrap">-->
                <!--<div class="entry_img"><img src="images/thumbs/image2.png" alt="" /></div>-->
                <!--<div class="entry_content">-->
                <!--<h4><a href="#">We Are About Color</a></h4>-->
                <!--<small>Submitted by: <a href="#"><strong>Hiccup</strong></a> - June 10, 2012</small>-->
                <!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>-->
                <!--<p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>-->
                <!--</div>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<div class="entry_wrap">-->
                <!--<div class="entry_img"><img src="images/thumbs/image3.png" alt="" /></div>-->
                <!--<div class="entry_content">-->
                <!--<h4><a href="#">Ancient Technology</a></h4>-->
                <!--<small>Submitted by: <a href="#"><strong>Hiccup</strong></a> - June 10, 2012</small>-->
                <!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>-->
                <!--<p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>-->
                <!--</div>-->
                <!--</div>-->
                <!--</li>-->
                <!--<li class="even">-->
                <!--<div class="entry_wrap">-->
                <!--<div class="entry_img"><img src="images/thumbs/image4.png" alt="" /></div>-->
                <!--<div class="entry_content">-->
                <!--<h4><a href="#">Bird's Nest Soup</a></h4>-->
                <!--<small>Submitted by: <a href="#"><strong>Hiccup</strong></a> - June 10, 2012</small>-->
                <!--<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non...</p>-->
                <!--<p><button class="stdbtn btn_lime">Approve</button> <button class="stdbtn">Decline</button></p>-->
                <!--</div>-->
                <!--</div>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</div>&lt;!&ndash;#scroll1&ndash;&gt;-->
                <!--</div>&lt;!&ndash;widgetcontent&ndash;&gt;-->
                <!--</div>&lt;!&ndash; widgetbox &ndash;&gt;-->


            </div><!--two_third dashboard_left -->

            <!--<div class="one_third last dashboard_right">-->
            <!---->
            <!--<div class="contenttitle2 nomargintop">-->
            <!--<h3>Top Rated Sites</h3>-->
            <!--</div>&lt;!&ndash;contenttitle&ndash;&gt;-->
            <!---->
            <!---->
            <!--<ul class="toplist">-->
            <!--<li>-->
            <!--<div>-->
            <!--<span class="three_fourth">-->
            <!--<span class="left">-->
            <!--<span class="title"><a href="#">loremipsum.com</a></span>-->
            <!--<span class="desc">Social Network</span>-->
            <!--</span>&lt;!&ndash;left&ndash;&gt;-->
            <!--</span>&lt;!&ndash;three_fourth&ndash;&gt;-->
            <!--<span class="one_fourth last">-->
            <!--<span class="right">-->
            <!--<span class="h3">8.1</span>-->
            <!--</span>&lt;!&ndash;right&ndash;&gt;-->
            <!--</span>&lt;!&ndash;one_fourth&ndash;&gt;-->
            <!--<br clear="all" />-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div>-->
            <!--<span class="three_fourth">-->
            <!--<span class="left">-->
            <!--<span class="title"><a href="#">dolorsitamet.net</a></span>-->
            <!--<span class="desc">Social Network</span>-->
            <!--</span>&lt;!&ndash;left&ndash;&gt;-->
            <!--</span>&lt;!&ndash;three_fourth&ndash;&gt;-->
            <!--<span class="one_fourth last">-->
            <!--<span class="right">-->
            <!--<span class="h3">7.8</span>-->
            <!--</span>&lt;!&ndash;right&ndash;&gt;-->
            <!--</span>&lt;!&ndash;one_fourth&ndash;&gt;-->
            <!--<br clear="all" />-->
            <!--</div>-->
            <!--</li>-->
            <!--<li>-->
            <!--<div>-->
            <!--<span class="three_fourth">-->
            <!--<span class="left">-->
            <!--<span class="title"><a href="#">consectetur.org</a></span>-->
            <!--<span class="desc">Social Network</span>-->
            <!--</span>&lt;!&ndash;left&ndash;&gt;-->
            <!--</span>&lt;!&ndash;three_fourth&ndash;&gt;-->
            <!--<span class="one_fourth last">-->
            <!--<span class="right">-->
            <!--<span class="h3">7.5</span>-->
            <!--</span>&lt;!&ndash;right&ndash;&gt;-->
            <!--</span>&lt;!&ndash;one_fourth&ndash;&gt;-->
            <!--<br clear="all" />-->
            <!--</div>-->
            <!--</li>-->
            <!--</ul>-->
            <!---->
            <!--<div class="widgetbox">-->
            <!--<div class="title"><h3>Newly Registered User</h3></div>-->
            <!--<div class="widgetoptions">-->
            <!--<div class="right"><a href="#">View All Users</a></div>-->
            <!--<a href="#">Add User</a>-->
            <!--</div>-->
            <!--<div class="widgetcontent userlistwidget nopadding">-->
            <!--<ul>-->
            <!--<li>-->
            <!--<div class="avatar"><img alt="" src="images/thumbs/avatar1.png" /></div>-->
            <!--<div class="info">-->
            <!--<a href="#">Squint</a> <br />-->
            <!--Front-End Engineer <br /> 18 minutes ago-->
            <!--</div>&lt;!&ndash;info&ndash;&gt;-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="avatar"><img alt="" src="images/thumbs/avatar2.png" /></div>-->
            <!--<div class="info">-->
            <!--<a href="#">Eunice</a> <br />-->
            <!--Architectural Designer <br /> 18 minutes ago-->
            <!--</div>&lt;!&ndash;info&ndash;&gt;-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="avatar"><img alt="" src="images/thumbs/avatar1.png" /></div>-->
            <!--<div class="info">-->
            <!--<a href="#">Captain Gutt</a> <br />-->
            <!--Software Engineer <br /> 18 minutes ago-->
            <!--</div>&lt;!&ndash;info&ndash;&gt;-->
            <!--</li>-->
            <!--<li>-->
            <!--<div class="avatar"><img alt="" src="images/thumbs/avatar2.png" /></div>-->
            <!--<div class="info">-->
            <!--<a href="#">Flynn</a> <br />-->
            <!--Accounting Manager <br /> 18 minutes ago-->
            <!--</div>&lt;!&ndash;info&ndash;&gt;-->
            <!--</li>-->
            <!--</ul>-->
            <!--<a class="more" href="#">View More Users</a>-->
            <!--</div>&lt;!&ndash;widgetcontent&ndash;&gt;-->
            <!--</div>-->
            <!---->
            <!--<div class="widgetbox">-->
            <!--<div class="title"><h3>Latest News</h3></div>-->
            <!--<div class="widgetcontent">-->
            <!--<div id="accordion" class="accordion">-->
            <!--<h3><a href="#">Section 1</a></h3>-->
            <!--<div>-->
            <!--<p>-->
            <!--Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer-->
            <!--ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit-->
            <!--amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut-->
            <!--odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.-->
            <!--</p>-->
            <!--</div>-->
            <!--<h3><a href="#">Section 2</a></h3>-->
            <!--<div>-->
            <!--<p>-->
            <!--Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet-->
            <!--purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor-->
            <!--velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In-->
            <!--suscipit faucibus urna.-->
            <!--</p>-->
            <!--</div>-->
            <!--<h3><a href="#">Section 3</a></h3>-->
            <!--<div>-->
            <!--<p>-->
            <!--Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.-->
            <!--Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero-->
            <!--ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis-->
            <!--lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.-->
            <!--</p>-->
            <!--<ul class="margin1020">-->
            <!--<li>List item one</li>-->
            <!--<li>List item two</li>-->
            <!--<li>List item three</li>-->
            <!--</ul>-->
            <!--</div>-->
            <!--<h3><a href="#">Section 4</a></h3>-->
            <!--<div>-->
            <!--<p>-->
            <!--Cras dictum. Pellentesque habitant morbi tristique senectus et netus-->
            <!--et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in-->
            <!--faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia-->
            <!--mauris vel est.-->
            <!--</p>-->
            <!--<p>-->
            <!--Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.-->
            <!--Class aptent taciti sociosqu ad litora torquent per conubia nostra, per-->
            <!--inceptos himenaeos.-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>     -->
            <!--</div> &lt;!&ndash;widgetcontent&ndash;&gt;-->
            <!--</div>&lt;!&ndash;widgetbox&ndash;&gt;                        -->

            <!--</div>&lt;!&ndash;one_third last&ndash;&gt;-->


        </div><!-- #updates -->

        <div id="addambulance" class="subcontent" style="display: none;">

            <form class="stdform " action="#" method="post">
                <h4>
                <p>
                    <label>Ambulance No.</label>
                    <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                    <small class="desc">Enter the Ambulance vehicle number.</small>
                </p>
                <p>
                    <label>Ambulance Model</label>
                    <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                    <small class="desc">Enter the Ambulance Model.</small>
                </p>
                <p>
                    <label>Ambulance Type</label>
                    <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                    <small class="desc">Enter the Ambulance Type.</small>
                </p>
                <p>
                    <label>Capacity</label>
                    <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                    <small class="desc">Enter the Ambulance Capacity.</small>
                </p>
                <br clear="all" /><br />

                <p class="stdformbutton">
                    <button class="submit radius2">Add Ambulance</button>
                    <input type="reset" class="reset radius2" value="Reset  " />
                </p>
                </h4>
            </form>
            &nbsp;
        </div><!-- #addambulance -->

        <div id="editambulance" class="subcontent" style="display: none;">
            <form id="form1" class="stdform" method="post" action="#">
            <h4>
            <p>
                <label>Select Ambulance Vehicle No.</label>
                <span class="field">
                            <select name="selection" id="selection">
                            	<option value="">Select One</option>
                                <option value="1">TN 09 0990</option>
                                <option value="2">TN 45 4545</option>
                                <option value="3">TN 34 3432</option>
                                <option value="4">TN 34 3454</option>
                            </select>
                            </span>
            </p>
                <p class="stdformbutton">
                    <button class="submit radius2">Select</button>
                </p>
            </h4>
            </form>
        </div><!-- #editambulance -->

        <div id="deleteambulance" class="subcontent" style="display: none;">
            <form id="form2" class="stdform" method="post" action="#">
            &nbsp;<h4>
            <p>
                <label>Select Ambulance Vehicle No.</label>
                <span class="field">
                            <select name="selection" id="selection1">
                            	<option value="">Select One</option>
                                <option value="1">TN 09 0990</option>
                                <option value="2">TN 45 4545</option>
                                <option value="3">TN 34 3432</option>
                                <option value="4">TN 34 3454</option>
                            </select>
                            </span>
            </p>
                <p class="stdformbutton">
                    <button class="submit radius2">Select</button>
                </p>
            </h4>
            </form>
        </div><!-- #deleteambulance -->

    </div><!--contentwrapper-->

    <br clear="all" />

</div><!-- centercontent -->


</div><!--bodywrapper-->

</body>

</html>
