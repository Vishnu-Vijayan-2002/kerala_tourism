<?php
include "db.php";

$pack_id=$_REQUEST['pack_id'];

$amount=$_REQUEST['amount'];
$hid=$_REQUEST['hid'];


$qryss="SELECT *FROM `sendamount` WHERE `pack_id`='$pack_id'";
$result=mysqli_query($conn,$qryss);

if($result->num_rows==0)
{
echo "aaaa";

    $cal=$amount/2;
$qry="insert into sendamount(hid,amount,pack_id)values('$hid','$cal','$pack_id')";
$up="update  booking  set price='$cal' where book_id='$pack_id'";
if ($conn->query($qry) == TRUE &&$conn->query($up) == TRUE){
    echo"<script> alert('send successful'); window.location=(\"hotel_approved_bk.php\"); </script>";

} else {

    echo"<script> alert('failed); </script>";
}
}else {

    echo"<script> alert('Already Payment Paid'); window.location=(\"hotel_approved_bk.php\"); </script>";
}
?>