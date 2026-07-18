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


   


$html ="
<div style='margin:auto;height:30px;width:100px'><img src='logo.jpg' ></div>
<h3 style='text-align:center'>Kolhapuri E-com<h3>";


$html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    <caption>Year:$year</caption>
    <tr>
        <th>Product Id</th>
        <th>product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Totalsell</th>
    </tr>";
    $alltotal=0;
    $c="select * from revenue where  year=$year";
    if($res=mysqli_query($con,$c)){
                    
        while($row=mysqli_fetch_array($res)){
            $alltotal+=$row[6];
       
        $html .= "

    <tbody>
        <tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[3]</td>
            <td>$row[2]</td>
            <td>$row[6]</td>
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