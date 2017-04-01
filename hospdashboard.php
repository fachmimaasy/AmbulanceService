<?php
session_start();
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
$_SESSION['ownerid'];
include "PHP-SDK-master/backendless/autoload.php";

Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', 'DE196C2F-B518-3F6E-FFE6-E6516DF36C00', 'v1');
$user = Backendless::$Persistence->of( 'userdata')->find( );
$array=(array)$user;
$data=(array_column($array, 'data'));
$user1 = Backendless::$Persistence->of( 'userdata')->find( );
$array1=(array)$user1;
$data1=(array_column($array, 'data1'));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dashboard | Hospital Admin</title>
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
            <h1 class="logo">Hospital <span>Admin</span></h1>
            <!--<span class="slogan"></span>-->
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
                <span>Juan Dela Cruz</span>
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
                	<h4>Akash karthick</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li class="current"><a href="dashboard.php"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <li><a href="hospprofile.php"><span class="icon icon-pencil"></span>Profile</a></li>
            <!-- <li><a href="messages.html"><span class="icon icon-message"></span>Messages</a></li>
            <li><a href="reports.html"><span class="icon icon-chart"></span>Reports</a></li> -->
        </ul>
        
        <div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Patients Admitted</h4>
                    <h2>0</h2>
                </div><!--one_half-->
               <!--  <div class="one_half last alignright">
                	<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div> --><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
        
    </div><!--header-->
    
    <!-- <div class="vernav2 iconmenu">
    	<ul>
        	<li><a href="#formsub" class="editor">Forms</a>
            	<span class="arrow"></span>
            	<ul id="formsub">
               		<li><a href="forms.html">Basic Form</a></li>
                    <li><a href="wizard.html">Wizard</a></li>
                    <li><a href="editor.html">WYSIWYG</a></li>
                </ul>
            </li>
            <li><a href="filemanager.html" class="gallery">File Manager</a></li>
            <li><a href="elements.html" class="elements">Elements</a></li>
            <li><a href="widgets.html" class="widgets">Widgets</a></li>
            <li><a href="calendar.html" class="calendar">Calendar</a></li>
            <li><a href="support.html" class="support">Customer Support</a></li>
            <li><a href="typography.html" class="typo">Typography</a></li>
            <li><a href="tables.html" class="tables">Tables</a></li>
			<li><a href="buttons.html" class="buttons">Buttons &amp; Icons</a></li>
            <li><a href="#error" class="error">Error Pages</a>
            	<span class="arrow"></span>
            	<ul id="error">
               		<li><a href="notfound.html">Page Not Found</a></li>
                    <li><a href="forbidden.html">Forbidden Page</a></li>
                    <li><a href="internal.html">Internal Server Error</a></li>
                    <li><a href="offline.html">Offline</a></li>
                </ul>
            </li>
            <li><a href="#addons" class="addons">Addons</a>
            	<span class="arrow"></span>
            	<ul id="addons">
               		<li><a href="newsfeed.html">News Feed</a></li>
                    <li><a href="profile.html">Profile Page</a></li>
                    <li><a href="productlist.html">Product List</a></li>
                    <li><a href="photo.html">Photo/Video Sharing</a></li>
                </ul>
            </li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu--> 
        
    <div class="">
    
        <div class="pageheader">
            <h1 class="pagetitle">Dashboard</h1>
            <span class="pagedesc"></span>
            
            <ul class="hornav">
                <li class="current"><a href="#updates">New Updates</a></li>
                <li><a href="#activities">All</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
        	<div id="updates" class="subcontent">
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
                        <th class="head0"><h4>User Id</h4></th>
                        <th class="head1"><h4>User name</h4></th>
                        <th class="head0"><h4>Blood Group</h4></th>
                        <th class="head1"><h4>Gender</h4></th>
                        <th class="head0"><h4>User DOB</h4></th>
                        <th class="head1"><h4>User Diet</h4></th>
                        <th class="head0"><h4>User Addiction</h4></th>
                        <th class="head1"><h4>User Phone no</h4></th>
                        <th class="head0"><h4>Sergeries</h4></th>
                        <th class="head1"><h4>Medical illness</h4></th>
                        <th class="head0"><h4>Medication</h4></th>
                        <th class="head1"><h4>Contact Family Member</h4></th>
                        <th class="head0"><h4>Maritial Status</h4></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach($data[0] as $r) {
                        ?>
                        <tr>
                            <td><h5><?php echo $r['uid'] ?></h5></td>
                            <td><h5><?php echo $r['uname'] ?></h5></td>
                            <td><h5><?php echo $r['bloodgroup'] ?></h5></td>
                            <td><h5><?php echo $r['gender'] ?></h5></td>
                            <td><h5><?php echo $r['udob'] ?></h5></td>
                            <td><h5><?php echo $r['udiet'] ?></h5></td>
                            <td><h5><?php echo $r['uaddiction'] ?></h5></td>
                            <td><h5><?php echo $r['uphone_num'] ?></h5></td>
                            <td><h5><?php echo $r['surgeries'] ?></h5></td>
                            <td><h5><?php echo $r['medical_illness'] ?></h5></td>
                            <td><h5><?php echo $r['medication'] ?></h5></td>
                            <td><h5><?php echo $r['contact_mem'] ?></h5></td>
                            <td><h5><?php echo $r['marital_status'] ?></h5></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                    
            </div><!-- #updates -->
            
            <div id="activities" class="subcontent" style="display: none;">
            	&nbsp;
            </div><!-- #activities -->
        
        </div><!--contentwrapper-->
        
        <br clear="all" />
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>

</html>
