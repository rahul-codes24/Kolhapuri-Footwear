<?php
include("connection.php");

$year=$_POST['year'];

        $a="select * from orderedproduct";
        if($res1=mysqli_query($con,$a)){
            while($row1=mysqli_fetch_array($res1)){
                $pro_id=$row1[0];
                $pro_quantity=$row1[3];
                $pro_total=$row1[4]*$pro_quantity;
                $price=$row1[4];
                $pro_name=$row1[2];
                $date=$row1[9];
                $categeory=$row1[10];
                // $year=date('Y', strtotime($date));
                $month=date('m', strtotime($date));
             
                $flag=0;
                $b="select * from revenue where  year=$year";
               
                if($res2=mysqli_query($con,$b)){
                    
                    while($row2=mysqli_fetch_array($res2)){
                       
                        if($row2[0]==$row1[0]){
                            $pro_quantity= $pro_quantity+$row2[3];
                            $pro_total=$row2[2]*$pro_quantity;
                        
                           
                            $u="update revenue set sell=$pro_quantity,total=$pro_total where pro_id=$pro_id";
                            mysqli_query($con,$u);
                           
                            $flag=1;
                            
                        }
                    }

                }
                if($flag==0){
                    $i="insert into revenue values($pro_id,'$pro_name',$price,$pro_quantity,$month,$year,$pro_total,'$categeory')";
                    mysqli_query($con,$i);
                }
            
        }
    }


   


$html ="<div style=' background-image: url('pdf.jpg');'>
<div style='margin:auto;height:30px;width:100px'><img src='logo.jpg' ></div>
<h3 style='text-align:center'>Kolhapuri E-com<h3>";


$html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    <caption>Year:$year</caption>
    <tr><td colspan='6'><h3 syle='text-align:center'>Male Best Seller<h3></tr>
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
      
        <th>Price</th>
        <th>Categeory</th>
        <th>Totalsell</th>
    </tr>";
    $m="select pro_id,pro_name,price,month,year,MAX(sell) as sell from revenue where categeory='Male'";
    if($res3=mysqli_query($con,$m)){
                    
        if($row3=mysqli_fetch_array($res3)){
       
        $html .= "
       
    <tbody>
        <tr>
            <td>$row3[0]</td>
            <td>$row3[1]</td>
            <td>$row3[2]</td>
           
            <td>Male</td>
            <td>$row3[5]</td>
        </tr>
";

    }
}
$m="select pro_id,pro_name,price,month,year,MAX(sell) as sell from revenue where categeory='Female'";
if($res3=mysqli_query($con,$m)){
                
    if($row3=mysqli_fetch_array($res3)){
   
    $html .= "
    <tr><td colspan='6'></tr>
    <tr><td colspan='6'><h3 syle='text-align:center'>Female Best Seller<h3></tr>
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
       
        <th>Price</th>
        <th>Categeory</th>
        <th>Totalsell</th>
    </tr>
<tbody>
    <tr>
        <td>$row3[0]</td>
        <td>$row3[1]</td>
        <td>$row3[2]</td>
       
        <td>Female</td>
        <td>$row3[5]</td>
    </tr>
";

}
}

$html .="

</tbody>
</table>
</div>";
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