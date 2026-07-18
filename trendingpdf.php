
<?php
include("connection.php");
// $html ="<h3 style='text-align:center'>Kolhapuri E-com<h3>";


// $html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
//     <caption>Year:$year</caption>
//     <tr>
//         <th>Product Id</th>
//         <th>product Name</th>
//         <th>Quantity</th>
//         <th>Price</th>
//         <th>Totalsell</th>
//     </tr>";
//     $m="select pro_id,pro_name,price,month,year,MAX(sell) as sell from revenue where categeory='Male'";
//     if($res3=mysqli_query($con,$m)){
                    
//         if($row3=mysqli_fetch_array($res3)){
       
//         $html .= "

//     <tbody>
//         <tr>
//             <td>$row[0]</td>
//             <td>$row[1]</td>
//             <td>$row[2]</td>
//             <td>$row[3]</td>
//             <td>$row[5]</td>
//         </tr>
// ";





//     }
// }

// $html .="
// <tr><td colspan='4'>Total</td><td>$alltotal</td></tr>
// </tbody>
// </table>";
// date_default_timezone_set("Asia/Kolkata"); 
// $date = date('Y-m-d H:i:s');
// $html .="<h6 style='text-align:right;font-weight:200;font-size:0.9rem'>Printed Date: $date</h6>";

// require_once __DIR__ . '\vendor\autoload.php';
// $mpdf= new \Mpdf\Mpdf();
// $mpdf->WriteHTML($html);
// $file="Monhtly_Report.pdf";
// $mpdf->Output($file,'I');
// $d="delete from revenue";
// mysqli_query($con,$d);

$html ="<h3 style='text-align:center'>Kolhapuri E-com<h3>";


$html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    <caption></caption>
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Totalsell</th>
    </tr>";
    $alltotal=0;
    $m="select pro_id,pro_name,price,month,year,MAX(sell) as sell from revenue where categeory='Male'";
      if($res3=mysqli_query($con,$m)){
                        
     if($row3=mysqli_fetch_array($res3)){
            // $alltotal+=$row[6];
       
        $html .= "

    <tbody>
        <tr>
            <td>$row3[0]</td>
            <td>$row3[1]</td>
            <td>$row3[3]</td>
            <td>$row3[2]</td>
            <td>$row3[6]</td>
        </tr>
";





    }
}

$html .="
<tr><td colspan='4'>Total</td><td>$alltotal</td></tr>
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