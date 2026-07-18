<?php
include("connection.php");
include('smtp_config.php');


// $to_email="shubhampatil6502@gmail.com";
// $subject="Order From Kolhapuri-Ecom";
// $body="Hi <b>OTP<b> <br>";

// echo smtp_mailer($to_email,$subject,$body);


// function smtp_mailer($to,$subject, $msg){
// 	$mail = new PHPMailer(); 
// 	$mail->IsSMTP(); 
// 	$mail->SMTPAuth = true; 
// 	$mail->SMTPSecure = 'tls'; 
// 	$mail->Host = "smtp.gmail.com";
// 	$mail->Port = 587; 
// 	$mail->IsHTML(true);
// 	$mail->CharSet = 'UTF-8';
// 	//$mail->SMTPDebug = 2; 
// 	$mail->Username = "kolhapuriecom@gmail.com";
// 	$mail->Password = "aydi lwdn ijqd rmxn";
// 	$mail->SetFrom("kolhapuriE-com@gmail.com");
// 	$mail->Subject = $subject;
// 	$mail->Body =$msg;
// 	$mail->AddAddress($to);
// 	$mail->SMTPOptions=array('ssl'=>array(
// 		'verify_peer'=>false,
// 		'verify_peer_name'=>false,
// 		'allow_self_signed'=>false
// 	));
// 	if(!$mail->Send()){
// 		echo $mail->ErrorInfo;
// 	}else{
// 		header("Location:regist.php");
// 	}
// }
// 
$email=$_REQUEST["mail"];
$to_email="shubhampatil6502@gmail.com";
$otp=rand(1000,9999);
$subject=" Kolhapuri-Ecom";
$body="OTP<b>$otp<b> <br>";
$res = smtp_mailer($to_email,$subject,$body);
if($res === "success") {
	header("Location:sendotp.php?otp=$otp");
} else {
	echo $res;
}
?>