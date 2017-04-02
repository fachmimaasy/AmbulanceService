<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
  use backendless\Backendless;
use backendless\model\BackendlessUser;
use backendless\model\Data;
 
include "PHP-SDK-master/backendless/autoload.php";
 
Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', 'DE196C2F-B518-3F6E-FFE6-E6516DF36C00', 'v1');
 $user = Backendless::$Persistence->of( 'user_history')->find( );
 $array=(array)$user;
 //print_r($array);


// echo($array['data']);
   $data=(array_column($array, 'data'));
  //$offset=(array_column($data, 0));
// $offset1=(array_column($offset, 1));
 // echo "<br><br>";
   //print($data[0][0]['user_name']);
   //echo "<br><br>";
   //echo "<br><br>";

   // $user_id=$data[0][0]['user_id'];    
   // $user_name=$data[0][1]['user_name']; 
   // $user_loc=$data[0][0]['user_loc'];
   // $req_time=$data[0][0]['req_time'];
   // $hos_name=$data[0][0]['user_name'];
   // $hos_loc=$data[0][0]['hos_loc'];
   // $driver_loc=$data[0][0]['driver_loc'];
   // $driver_id=$data[0][0]['driver_id'];
   // $driver_name=$data[0][0]['driver_name'];
   // $accept_time=$data[0][0]['accept_time'];
   // $admit_time=$data[0][0]['admit_time'];
   // $asp_loc=$data[0][0]['asp_loc'];
   //  print($user_name);

?>

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
                    <span class="email">karthickakash17@gmail.com</span>s
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
                 <?php foreach ($data[0] as $key) {?>
            
                
                        <tr>

                            <td><h5> <?php echo $key['user_name']; ?></h5></td>
                            <td><h5><?php echo $key['user_id'];  ?></h5></td>
                            <td><h5><?php echo $key['user_loc'];  ?></h5></td>
                        </tr>
                          <?php  } ?>
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
                    <?php foreach ($data[0] as $key) {?>
                    <tr>
                        <td><h5><?php echo $key['user_name']; ?>   </h5></td>
                        <td><h5><?php echo $key['user_id'];   ?>    </h5></td>
                        <td><h5><?php echo $key['user_loc'];  ?>   </h5></td>
                        <td><h5><?php echo $key['driver_loc']; ?>  </h5></td>
                        <td><h5><?php echo $key['driver_id']; ?>    </h5></td>
                        <td><h5><?php echo $key['driver_name']; ?></h5></td>
                        <td><h5><?php echo $key['drivercontact']; ?></h5></td>
                        <td><h5><?php echo $key['asp_loc']; ?></h5></td>
                        
                    </tr>
                    <?php }?>
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
                <?php foreach ($data[0] as $key) {?>

                    <tr>
                       <td><h5><?php echo $key['user_name']; ?>   </h5></td>
                        <td><h5><?php echo $key['user_id'];   ?>    </h5></td>
                        <td><h5><?php echo $key['user_loc'];  ?>   </h5></td>
                        <td><h5><?php echo $key['driver_loc']; ?>  </h5></td>
                        <td><h5><?php echo $key['driver_id']; ?>    </h5></td>
                        <td><h5><?php echo $key['driver_name']; ?></h5></td>
                        <td><h5><?php echo $key['drivercontact']; ?></h5></td>
                        <td><h5><?php echo $key['asp_loc']; ?></h5></td>
                        <td><h5><?php echo $key['hos_name']; ?></h5></td>
                        <td><h5><?php echo $key['hos_loc']; ?></h5></td>
                    </tr>
                    <?php }?>
                </table>
            </div><!-- #editdriver -->


        </div><!--contentwrapper-->

        <br clear="all" />

    </div><!-- centercontent -->


</div><!--bodywrapper-->

</body>

</html>
