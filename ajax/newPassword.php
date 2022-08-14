<?php
session_start();
 include("../Admin/class/DbConnection.php");
 $obj = new DbConnection();
 
$password = md5($_POST['password']);
$customer_id = $_POST['id'];


$update = $obj->updateData("UPDATE customer SET password='$password' WHERE customer_id='$customer_id'");

    if($update){
        echo "Your new password successfully reset.!";
        }
    else{
        echo "Unable to  reset your password.!";
        }


?>