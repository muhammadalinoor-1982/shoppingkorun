<?php
session_start();
 include("class/DbConnection.php");
 $obj = new DbConnection();
 
$sql = "SELECT * FROM send_message, customer, message WHERE send_message.message_id = message.msg_id AND send_message.customer_id = customer.customer_id AND send_message.send_status = 0";

$getdata = $obj->getData($sql);
    
if (count($getdata) > 0) {

	foreach ($getdata as $data) {

		$key = base64_encode(base64_encode('A_'.$data['customer_id'].'_B'));
		$subject 	= $data['msg_head'];
		$message 	= '<html><body>';
		$message 	.= '<h1 style="color:red;">'.$data['msg_head'].'</h1>';
		$message 	.= '<h1 style="color:blue;">'.$data['msg_body'].'</h1>';
		$message 	.= '<img src="http://www.shoppingkorun.com/Admin/uploads/message/'.$data['msg_tag'].'" ><br>';
		$message 	.= '<a href="'.$data['msg_link'].'?key='.$key.'">Please Visit</a>';
		$message 	.= '<h1 style="color:green;">'.$data['msg_foot'].'</h1>';
		$message 	.= '</body></html>';

		$send = $obj->sendmail($data['email'], $subject, $message);
		if ($send) {
			$obj->updateData("UPDATE send_message SET send_status = 1, updated_at = '".date('Y-m-d h:i:s')."' WHERE id = '".$data['id']."' ");
		}

	}

}

?>