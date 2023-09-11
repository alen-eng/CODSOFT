<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['Subject'];
$message= $_POST['message'];
$to = "alenvarghese201@gmail.com";
$ssubject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@alenthomas.epizy.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL && $email ==filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo 'That\s a valid email address';
    mail($to,$ssubject,$txt,$headers);
    header("Location:thankyou.html");
}
echo 'Not a valid email address';
//redirect
header("Location:thankyou.html");
?>