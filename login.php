ob_start();
<?php 

session_start();
use backendless\Backendless;
include "PHP-SDK-master/backendless/autoload.php";


if(isset($_POST['signin'])){



$username=$_POST['username'];

$password=$_POST['password'];




 
Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', '6EE6BD0B-D8A4-3F2D-FF33-6258770A4800', 'v1');


try{

 $user = Backendless::$UserService->login($username, $password );
 
 $user=Backendless::$UserService->getCurrentUser();;


// $contact["name"];




//$con=new Contact($user);
$array=(array)$user;
//print_r($array);

echo "<br>";echo "<br>";
echo "<br>";echo "<br>";



 // $data=(array_column($array, "date"));

 // print_r($data);
// echo count($data);
// echo "<br>";echo "<br>";
// echo "<br>";echo "<br>";
// echo count($data[0]);
// echo "<br>";echo "<br>";
// echo "<br>";echo "<br>";
//echo "correct";
//}



$user_status=$array["user_status"];

    Backendless::initApp('BCDBFE65-5A5E-801F-FF67-FEAF8F20A400', 'DE196C2F-B518-3F6E-FFE6-E6516DF36C00', 'v1');
    $user = Backendless::$Persistence->of( 'Users')->find( );
    $array=(array)$user;
    $data=(array_column($array, 'data'));

    print_r($data[0][0]['ownerId']);

    $_SESSION['ownerid']=$data[0][0]['ownerId'];
//    $var=$data[0]['ownerId'];
if($user_status=="admin")
{
	header("Location: admindashboard.php");
}
if($user_status=="asp")
{
	header("location: aspdashboard.php");
}
if($user_status=="hosp")
{
	header("location: hospdashboard.php");
}



}
 catch(Exception $e){
 	header("location: index.php");

  echo "incorrect";


 }


}

?>