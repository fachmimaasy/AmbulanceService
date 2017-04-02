<?php
session_start();
use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
$d=$_SESSION['ownerid'];
include "PHP-SDK-master/backendless/autoload.php";

Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', 'DE196C2F-B518-3F6E-FFE6-E6516DF36C00', 'v1');
$user = Backendless::$Persistence->of( 'hospital')->find( );
$array=(array)$user;
$data=(array_column($array, 'data'));
//$user1 = Backendless::$Persistence->of( 'userdata')->find( );
//$array1=(array)$user1;
//$data1=(array_column($array, 'data1'));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Profile | Hospital Admin</title>
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
                <span>Dr.Akash</span>
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
                	<h4>Dr.Akash karthick</h4>
                    <span class="email">karthickakash17@gmail.com</span>
                    <ul>
                    	<!-- <li><a href="editprofile.html">Edit Profile</a></li> -->
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <!-- <li><a href="help.html">Help</a></li> -->
                        <li><a href="index.php">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li><a href="hospdashboard.php"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <li class="current"><a href="hospprofile.php"><span class="icon icon-pencil"></span>Profile</a></li>
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
<!--            <h1 class="pagetitle">Dashboard</h1>-->
            <span class="pagedesc"></span>
            
            <ul class="hornav">
                <li class="current"><a href="#hospitaldetails">Hospital Details</a></li>
                <li><a href="#editdetails">Edit Details</a></li>
            </ul>
        </div> <!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
<!--            <form class="stdform " action="#" method="post">-->
<!--                <h4>-->
<!--                    <p>-->
<!--                        <label><b>Hospital Name : </b></label>-->
<!--                        <span class="field"><h5>GKM Hospital</h5></span>-->
<!--                    </p>-->
<!--                </h4>-->
<!--                <h4>-->
<!--                    <p>-->
<!--                        <label>Location : </label>-->
<!--                        <span class="field"><h5>Daaksdjaskd asdkaskfj askfnksfn</h5></span>-->
<!--                    </p>-->
<!--                </h4>-->
<!--                <h4>-->
<!--                    <p>-->
<!--                        <label>Specialities : </label>-->
<!--                        <span class="field"><h5>WER,werwe,werewr,werewr.</h5></span>-->
<!--                    </p>-->
<!--                </h4>-->
<!--            </form>-->
            <div id="hospitaldetails" class="subcontent">
            <form class="stdform stdform2" method="post" action="#">
                <?php
                foreach ($data[0] as $r){
//                    echo $r['hid'];
//                    echo "break";
//                    echo $d;
                if($d==$r['hid']) {
                    ?>
                    <p>
                        <label>Hospital Name : </label>
                        <span class="field"><?php echo $r['name'] ?></span>
                    </p>

                    <p>
                        <label>Address : </label>
                        <span class="field"><?php echo $r['address'] ?></span>
                    </p>
                    <p>
                        <label>Type : </label>
                        <span class="field"><?php echo $r['type'] ?></span>
                    </p>
                    <p>
                        <label>Capacity : </label>
                        <span class="field"><?php echo $r['capacity'] ?></span>
                    </p>

                    <p>
                        <label>Specialites : </label>
                        <span class="field"><?php echo $r['speciality'] ?></span>
                    </p>
                    <p>
                        <label>Contact No : </label>
                        <span class="field"><?php echo $r['phno'] ?></span>
                    </p>

                    <?php
                }}
                ?>
            </form>
<!--            <table cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">-->
<!--                <tr>-->
<!--                    <th align=""><h4>Hospital Name :</h4></th>-->
<!--                    <td align=""><h5>Akash Hospitals</h5></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th align=""><h4>Locatiom :</h4></th>-->
<!--                    <td align=""><h5>Avadi</h5></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th align=""><h4>Specialities :</h4></th>-->
<!--                    <td align=""><h5>Ortho</h5></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th align=""></th>-->
<!--                    <td align=""><h5>Multi speciality</h5></td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <th align=""></th>-->
<!--                    <td align=""><h5>Cardiac</h5></td>-->
<!--                </tr>-->
<!--            </table>-->
        




            </div><!-- #hospitaldetails -->
            
            <div id="editdetails" class="subcontent" style="display: none;">
                <form class="stdform " action="#" method="post">
                    <h4>
                        <p>
                            <label>Hospital Name</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Hospital Name.</small>
                        </p>
                        <p>
                            <label>Address</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Hospital Address.</small>
                        </p>
                        <p>
                            <label>Type</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Hospital Type(eg. primary,multispeciality,superspeciality).</small>
                        </p>
                        <p>
                            <label>Capacity</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Capacity of persons the hospital can handle.</small>
                        </p>
                        <p>
                            <label>Speciality</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Speciality.</small>
                        </p>
                        <p>
                            <label>Contact No.</label>
                            <span class="field"><input type="text" name="input1" class="smallinput" /></span>
                            <small class="desc">Enter the Contatc No.</small>
                        </p>

                        <br clear="all" /><br />

                        <p class="stdformbutton">
                            <button class="submit radius2">Edit Changes</button>
                            <input type="reset" class="reset radius2" value="Reset  " />
                        </p>
                    </h4>
                </form>

                &nbsp;
            </div><!-- #editdetails -->
        
        </div><!--contentwrapper-->
        
        <br clear="all" />
        
	</div><!-- centercontent -->
    
    
</div><!--bodywrapper-->


</body>

</html>
