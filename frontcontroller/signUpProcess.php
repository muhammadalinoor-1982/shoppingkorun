<?php 

 function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcrwJUUAAAAAD_lc6teM2HHSw8iHM2bnuBu5Bug',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

session_start();
include("../Admin/class/DbConnection.php");
$obj = new DbConnection();

$name 		= $_POST['name'];
$phone 		= $_POST['phone'];
$email 		= $_POST['email'];
$gender 	= $_POST['gender'];
$address 	= $_POST['address'];
$password 	= $_POST['npassword'];
$cpassword 	= $_POST['cnewpassword'];


$nameFormat = $obj->nameValidation($name);

if ($name == '' ){ $_SESSION['nameerror'] = "<div class='alert alert-danger'>Name is Required</div>"; 
					header("Location:../signup.php");
					exit();
						}
else{
if (!$nameFormat){ $_SESSION['nameerror'] = "<div class='alert alert-info'>Invalide Name</div>"; 
					header("Location:../signup.php");
					exit();
						}
}

if ($phone == '' ){ $_SESSION['phoneerror'] = "<div class='alert alert-danger'>Phone number is Required</div>"; 
					header("Location:../signup.php");
					exit();
						}
else{
if (!$phone){ $_SESSION['phoneerror'] = "<div class='alert alert-info'>Invalide phone number</div>"; 
					header("Location:../signup.php");
					exit();
						}
} 

$emailFormat = $obj->emailValidation($email);

if ($email == '' ){ $_SESSION['emailerror'] = "<div class='alert alert-danger'>Email address is Required</div>"; 
					header("Location:../signup.php");
					exit();
						}
else{
if (!$emailFormat){ $_SESSION['emailerror'] = "<div class='alert alert-info'>Invalide email address</div>"; 
					header("Location:../signup.php");
					exit();
						}
}

if ($gender==''){ $_SESSION['gendererror'] = "<div class='alert alert-danger'>Gender is Required</div>"; 
					header("Location:../signup.php");
					exit();
						}

if ($password==''){ $_SESSION['passerror'] = "<div class='alert alert-danger'>Password is Required</div>"; 
					header("Location:../signup.php");
					exit();
						}
else{
if ($password!== $cpassword){ $_SESSION['passerror'] = "<div class='alert alert-info'>Password is not match</div>"; 
					header("Location:../signup.php");
					exit();
						}
}


$access = $obj->checkUser("SELECT * FROM customer WHERE email = '$email'");

if ($access=='0') {


	$query = "INSERT INTO customer(name, phone, email, gender, address, password) VALUES('$name', '$phone', '$email', '$gender', '$address', '".md5($password)."')";

	$get_customer_id = $obj->dataSave($query);

	if ($get_customer_id) 
		{
            
            $token = base64_encode(base64_encode(base64_encode($get_customer_id.'@_')));
            
            $message = '<html><body>';
            $message .= '<h1 style="color:#f40;">Hi '.$name.'</h1>';
            $message .= '<a href="http://www.shoppingkorun.com/NOOR_Enterprise/verify-account.php?key='.$token.'">Click here to Verify your account</a>';
            $message .= '</body></html>';

            $subject = "Verify account of NOOR_Enterprise Online";
            $send = $obj->sendmail($email, $subject, $message);
            
			$_SESSION['smg'] = "<div class='alert alert-success'><strong>Congratulation your account has been created successfully!</strong></div>";
		}
	else
		{
			$_SESSION['smg'] = "<div class='alert alert-info'><strong>Sorry Unable to create account !!</strong></div>";
		}
}
else{

	$_SESSION['smg'] = "<div class='alert alert-info'><strong>This user already exist !!</strong></div>";
}

header("Location:../thankYou.php");

}

 ?>
