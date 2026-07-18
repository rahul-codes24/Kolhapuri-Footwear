<?php
include("connection.php");
include('smtp_config.php');
session_start();

$usernm=$_POST["userid"];
$id=$_POST["orderid"];
$msg=$_POST["reason"];
// $q="insert into orderStatus values ($id,'Reject')";
// mysqli_query($con,$q);
$q="delete from orderStatus where orderid=$id";
mysqli_query($con,$q);

$a="delete from orders where orderid=$id";
mysqli_query($con,$a);

$b="delete from orderedproduct where orderid=$id";
mysqli_query($con,$b);






$to_email=$usernm;
$subject="Order Canceled From Kolhapuri-Ecom";
$body=" <div style='text-align:center;border:1px solid black;width:400px;margin:auto;padding:10px'>
<div>
	<h1>KOLHAPURI-ECOM</h1>
</div >

<div >
	
	<h3>Order ID:</h3>
	$id
	<h3>Cancelation Reason:<h3>
   <h3 style='color:red'> $msg<h3>
</div>
<div>
	<h3>For Any Query</h3>
	<h4>Please Contact Us:</h4>
	<b style='color:green'>Mobile NO:9529959511</b>
</div>
<div style='color:coral'>
	<h2>Sorry For Inconvenient</h2>
</div>
</div>";




$header="From:Kolhapuri-Ecom";
$res = smtp_mailer($to_email,$subject,$body);
if($res === "success") {
	header("Location:admin_order.php");
} else {
	echo $res;
}








