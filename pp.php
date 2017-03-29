<?php
use backendless\Backendless;
use backendless\model\BackendlessUser;
 
include "PHP-SDK-master/backendless/autoload.php";
Backendless::initApp('DAE8B0A2-C210-7D34-FF57-974A02255000', '81DADC32-5BF0-1DC5-FFB6-2D5AC74F5900', 'v1');
 
$user = Backendless::$UserService->login('akash@gmail.com', 'akash');
$user->setName("Bob");
Backendless::$UserService->update( $user );
?>