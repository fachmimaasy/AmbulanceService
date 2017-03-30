<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dashboard | Admin</title>
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

<body>

<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">App <span>Admin</span></h1>
<!--            <span class="slogan">admin </span>-->
            
<!--            <div class="search">-->
<!--                <form action="#" method="post">-->
<!--                    <input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />-->
<!--                    <button class="submitbutton"></button>-->
<!--                </form>-->
<!--            </div><!--search-->-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
<!--            <div class="notification">-->
<!--                <a class="count" href="ajax/notifications.html"><span>9</span></a>-->
<!--            </div>-->
            <div class="userinfo">
                <img src="images/thumbs/avatar.png" alt="" />
                <span>Akash Karthick</span>
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
                    <h4>Akash Karthick</h4>
                    <span class="email">karthickakash17@gmail.com</span>
                    <ul>
                        <!-- <li><a href="editprofile.html">Edit Profile</a></li> -->
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <!-- <li><a href="help.html">Help</a></li> -->
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="admindashboard.php"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <!-- <li><a href="manageblog.html"><span class="icon icon-pencil"></span>Manage Blog</a></li> -->
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
    


    <div class="">

        <div class="pageheader">

            <ul class="hornav">
                <li class="current"><a href="#updates">Requested</a></li>
                <li><a href="#adddriver">Accepted</a></li>
                <li><a href="#editdriver">Admitted</a></li>
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


                    <br clear="all" />


                    <br clear="all" />

                    <table style="width: 50%" cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">
                        <tr>
                            <th>UserName</th>
                            <th>UserId</th>
                            <th>Location</th>
                        </tr>
                        <tr>
                            <td>Raj</td>
                            <td>1</td>
                            <td>12.234 34.3434</td>
                        </tr>
                    </table>



                </div><!--two_third dashboard_left -->




            </div><!-- #updates -->

            <div id="adddriver" class="subcontent" style="display: none;">

                <table style="width:80%"  cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">
                    <tr>
                        <th>UserName</th>
                        <th>UserId</th>
                        <th>Location</th>
                        <th>DriverName</th>
                        <th>DriverId</th>
                        <th>DriverLocation</th>
                        <th>DriverContact</th>
                        <th>ServiceLocation</th>
                    </tr>
                </table>                &nbsp;
            </div><!-- #adddriver -->

            <div id="editdriver" class="subcontent" style="display: none;">
                <table style="width:100%"  cellpadding="0" cellspacing="0" border="0" class="stdtable overviewtable">
                    <tr>
                        <th>UserName</th>
                        <th>UserId</th>
                        <th>Location</th>
                        <th>DriverName</th>
                        <th>DriverId</th>
                        <th>DriverLocation</th>
                        <th>DriverContact</th>
                        <th>ServiceLocation</th>
                        <th>HospitalName</th>
                        <th>HospitalLocation</th>
                    </tr>
                </table>
            </div><!-- #editdriver -->


        </div><!--contentwrapper-->

        <br clear="all" />

    </div><!-- centercontent -->


</div><!--bodywrapper-->

</body>

</html>
