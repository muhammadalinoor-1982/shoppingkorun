<?php
session_start();
 include("../Admin/class/DbConnection.php");
 $obj = new DbConnection();
 
$email = $_POST['email'];

$sql = "SELECT * FROM customer WHERE email = '$email'";

$data = $obj->getData($sql);

if(count($data) > 0){
    
//$password = rand(100000, 999999);
//$password_hash = md5($password);
$key = base64_encode(base64_encode('A_'.$data[0]['customer_id'].'_B'));


$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi '.$data[0]['name'].'</h1>';
$message .= '<a href="http://www.shoppingkorun.com/NOOR_Enterprise/reset-password.php?key='.$key.'">Click here to reset password</a>';
$message .= '</body></html>';


$subject = "Reset Password of NOOR_Enterprise Online";

$send = $obj->sendmail($data[0]['email'], $subject, $message);

if($send){
    /*
    $update = $obj->updateData("UPDATE customer SET password='$password_hash' WHERE customer_id='".$data[0]['customer_id']."'");
    */
    
    echo "Your Password has been reset and Send a mail to you";
}
else{
    echo "Unable to reset password";
}
    
}
else{
     echo "Your are not registred customer!";
}







?>