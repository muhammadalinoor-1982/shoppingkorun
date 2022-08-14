<?php 

class DbConnection{
	private $host 		= "localhost";
	private $username 	= "root"; 	//shopping_rnoor
	private $password 	= "";	//01787667262shops
	private $dbname 	= "noor";		//shopping_noor
	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
	}

	public function userlogin($table_name, $username){

		$sql = "SELECT * FROM $table_name WHERE email = :email";

		$query = $this->conn->prepare($sql);

		$query->execute([":email"=>$username]);

		$user = $query->fetch(PDO::FETCH_ASSOC);

		return $user ?$user :array(); 

	}

	public function dataSave($sql){

		$status = $this->conn->exec($sql);
		$last_insert_id = $this->conn->lastInsertId();
		return $status ? $last_insert_id : 0;

	}

	public function getData($sql){

		$query = $this->conn->query($sql);

		$data = $query->fetchAll(PDO::FETCH_ASSOC);

		return $data;
	}

	public function getSingleData($sql){

		$query = $this->conn->query($sql);

		$data = $query->fetch(PDO::FETCH_ASSOC);

		return $data ? $data : [];

	}

	public function checkUser($sql){

		$query = $this->conn->query($sql);

		$data = $query->fetch(PDO::FETCH_ASSOC);

		return $data ? 1 : 0;

	}

	public function updateData($sql){

		$status = $this->conn->exec($sql);

		return $status ? 1 : 0;
	}

	public function deleteData($sql){

		$status = $this->conn->exec($sql);

		return $status ? 1 : 0;
	}

	public function sendSMS($numer, $sms){
		 
		 $user = "username";
		 $pass = "59=0D37c"; 
		 $sid = "XXXXXXXXXX";
		 
		 $url="http://sms.sslwireless.com/pushapi/dynamic/server.php";
		 
		 $param="user=$user&pass=$pass&sms[0][0]=$numer&sms[0][1]=".urlencode($sms)."&sms[0][2]=123456789&sid=$sid";
		 
		 $crl = curl_init();
		 
		 curl_setopt($crl,CURLOPT_SSL_VERIFYPEER,FALSE);
		 
		 curl_setopt($crl,CURLOPT_SSL_VERIFYHOST, 2);
		 
		 curl_setopt($crl,CURLOPT_URL,$url); 
		 
		 curl_setopt($crl,CURLOPT_HEADER,0);
		 
		 curl_setopt($crl,CURLOPT_RETURNTRANSFER,1);
		 curl_setopt($crl,CURLOPT_POST,1);
		 
		 curl_setopt($crl,CURLOPT_POSTFIELDS,$param);
		 
		 $response = curl_exec($crl);
		 
		 curl_close($crl);
		 
		 return  $response;
	 }

	 public function sendmail($to, $subject, $message){
	     
	     $from = 'aupuchowdhury@shoppingkorun.com';
	     
	     // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
         'X-Mailer: PHP/' . phpversion();
		 
		 $send = mail($to, $subject, $message, $headers);
		 
		 return $send ? true : false;
		 
	 }
	 
	 public function emailValidation($email) { 

    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    	
    		return 0;
    	else
    		return 1;
	}

	 public function nameValidation($name){

	 	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 

	 		return 0;
    	else
    		return 1;
	}
	 public function getRetting($id){

	 	$review_total = $this->getData("SELECT avg(ratting) as total FROM review_ratting WHERE product_id='$id' AND review_status=1");

	 	 for($i=0; $i < $review_total[0]['total']; $i++) 
	 	 				{ 
                          echo '<i class="fa fa-star"></i>'; 
                     	}

         for($i=0; $i < (5-$review_total[0]['total']); $i++) 
         				{ 
                          echo '<i class="fa fa-star-o"></i>';
                     	}  
	 }

}

 ?>