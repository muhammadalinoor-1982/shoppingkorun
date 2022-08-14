<?php
session_start();
 include("../class/DbConnection.php");
 $obj = new DbConnection();
 
$msg_id 		= $_POST['head'];
$customer_id 	= $_POST['checkbox'];

$save = 0;

if (count($customer_id) > 0) {
    
	for ($i = 0; $i < count($customer_id); $i++) {
	    
		$save = $obj->dataSave("INSERT INTO `send_message`(message_id, customer_id) VALUES('".$msg_id."', '".$customer_id[$i]."')");
	}
	
}

if($save){

    $_SESSION['smg'] = "<div class='alert alert-success'>Mail send successfully!!</div>";

	}

else{

    $_SESSION['smg'] = "<div class='alert alert-info'>Unable to send mail!!</div>";

	}

header("Location:../customer-list.php?msg_id=".$msg_id);

?>