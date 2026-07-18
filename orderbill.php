<?php
include("connection.php");
include('smtp_config.php');
date_default_timezone_set("Asia/Kolkata"); 
$date = date('Y-m-d H:i:s');
$expdate=date('Y-m-d', strtotime($Date. ' + 7 days'));
$userid=$_REQUEST["userid"];
$name=$_REQUEST["name"];
$mobile=$_REQUEST["mobile"];
$address=$_REQUEST["address"];

$orderid=$_REQUEST["orderid"];
$alltotal=$_REQUEST["alltotal"];





$to_email=$userid;
$subject="Order From Kolhapuri-Ecom";
$body=" <div style='text-align:center;border:1px solid black;width:400px;margin:auto;padding:10px'>
<div>
	<h1>KOLHAPURI-ECOM</h1>
</div >
<p>Hi .<b style='color:red'>$name </b> You Are Ordered Product/s  From KOLHAPURI-ECOM</p>
<div >
	<h3>Order Details</h3>
	<table style='margin:auto;border:1px solid black;'>
		<tr>
			<td>Order Id:</td>
			<td>$orderid</td>
		</tr>
		<tr>
			<td>Total Amount:</td>
			<td>$alltotal</td>
		</tr>
		<tr>
			<td>Expected Delivery:</td>
			<td>$expdate</td>
		</tr>
		<tr>
			<td>Mobile No:</td>
			<td>$mobile</td>
		</tr>
	</table>
</div>
<div>
	<h3>For Any Query</h3>
	<h4>Please Contact Us:</h4>
	<b style='color:green'>Mobile NO:9529959511</b>
</div>
<div style='color:coral'>
	<h2>THANK YOU...</h2>
</div>
</div>";




$header="From:Kolhapuri-Ecom";
$res = smtp_mailer($to_email,$subject,$body);
if($res === "success") {
	header("Location:payment.php");
} else {
	echo $res;
}





$a="insert into orders values('$name','$userid','$mobile','$address',$alltotal,'$date',$orderid,'$expdate')";
if(mysqli_query($con,$a))
{
// header("Location:testmail.php?")
}
else{
    echo("Fail");
}

?>

