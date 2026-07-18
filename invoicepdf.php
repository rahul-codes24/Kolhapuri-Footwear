<?php
include("connection.php");

// session_start();
// if(!isset($_SESSION["uname"])){
//     header("Location:index.html");
// }

$orderid=$_REQUEST["orderid"];
echo $orderid;
$q="select *from orders where orderid=$orderid";
if($res= mysqli_query($con,$q)){
if($row=mysqli_fetch_array($res)){

$inv=0000+$row[6];
$total=$row[4];



   


$html ="
<div style='margin:auto;height:30px;width:100px'><img src='logo.jpg' ></div>
<h3 style='text-align:center'>Kolhapuri E-com<h3>


";


$html .="
<h3 style='text-align:center;font-weight:300'>Invoice<h3>
    <div style='display:flex;justify-content:space-around;padding-bottom:10px;font-weight:300;font-size:1.1rem'>
        <div >
        <div>invoice no:$inv</div>
        <div>Date:$row[5]</div>
            <h4>Billed To:</h4>
            <div>Mobile:$row[2]</div>
            <div>address:$row[3]</div>


        </div>
        <div>
       
        
    </div>
        </div>
<table border='1' width='100%' cellspacing='0' cellpadding='10'>
   
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Price</th>
        
        
    </tr>";
    
}}
$a="select * from orderedproduct where orderid=$orderid";
if($res=mysqli_query($con,$a)){
while($row=mysqli_fetch_array($res)){

        $html .= "

    <tbody>
        <tr>
            <td>$row[0]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[8]</td>
            <td>$row[4]</td>
        </tr>
";
}}





 

$html .="
<tr><td colspan='4'>Total</td><td>$total</td></tr>
</tbody>
</table>
";

$html .="
<div style='text-align:center;margin-top:20px;font-weight:300;font-size:1.1rem'>Thank You.....</div>
<div style='padding-top:10px;font-weight:300;font-size:1.1rem'>
    <div></div>
    
        <div>Contact:</div>
        <div>9529959511</div>
        <div>Rajarampuri 2nd Lane</div>
        <div>Kolhapur</div>

    
</div>";
date_default_timezone_set("Asia/Kolkata"); 
$date = date('Y-m-d H:i:s');
$html .="<h6 style='text-align:right;font-weight:200;font-size:0.9rem'>Printed Date: $date</h6>";

require_once __DIR__ . '\vendor\autoload.php';
$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file="Monhtly_Report.pdf";
$mpdf->Output($file,'I');

?>