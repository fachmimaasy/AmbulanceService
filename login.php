ob_start();
<?php 

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
if($user_status=="admin")
{
	header("location: admindashboard.php");
}
if($user_status=="asp")
{
	header("location: aspdashboard.php");
}
if($user_status=="hosp")
{
	header("location: hospdashboard.html");
}



}
 catch(Exception $e){
 	header("location: index.php");

  echo "incorrect";


 }


}

?>