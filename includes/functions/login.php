<?php session_start();
require ('../classes/user.php');
require ('../connection/connection.php');

$user=new user();

extract($_POST);

$login_resp=$user->login($conn, $email, $password);

// print_r($login_resp);

// echo $login_resp['message'];

if($login_resp['status'])
{
    // echo "logged";
    $_SESSION['email']=$email;
    echo json_encode(['code' => 200]);
}
else
{
    // echo "failed";
   echo json_encode(['code' => 404, 'message' => 'Check Credentials']);
}






?>