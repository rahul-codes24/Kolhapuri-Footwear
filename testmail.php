
<?php 
include("connection.php");
include('smtp_config.php');



$to_email=$userid;
$subject="Order From Kolhapuri-Ecom";
$body="Hi sir/Mam <br>
You are orderd Kolhapuri chappal from Kolhapuri-Ecom<br>
thank you";
$header="From:Kolhapuri-Ecom";
echo smtp_mailer('shubhampatil6502@gmail.com','Subject','html');




?>