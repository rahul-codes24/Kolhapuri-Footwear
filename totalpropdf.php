<?php
include("connection.php");


     

   


$html ="
<div style='margin:auto;height:30px;width:100px'><img src='logo.jpg' ></div>
<h3 style='text-align:center'>Kolhapuri E-com<h3>";


$html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
        <th>Price</th>
        <th>Categeory</th>
    </tr>
    <tbody>";
   
    $a="select * from addproduct";
    if($res=mysqli_query($con,$a)){
        while($row=mysqli_fetch_array($res)){
        
        $html .= "

   
    
        <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[8]</td>
          
        </tr>
";





    }
}

$html .="

</tbody>
</table>";
date_default_timezone_set("Asia/Kolkata"); 
$date = date('Y-m-d H:i:s');
$html .="<h6 style='text-align:right;font-weight:200;font-size:0.9rem'>Printed Date: $date</h6>";

require_once __DIR__ . '\vendor\autoload.php';
$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file="Monhtly_Report.pdf";
$mpdf->Output($file,'I');
$d="delete from revenue";
mysqli_query($con,$d);
?>