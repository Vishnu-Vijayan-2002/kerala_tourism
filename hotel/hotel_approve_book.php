<?php
session_start(); 
include "db.php";

if( $_GET["book_id"]) {
    
  
    $pid=$_GET["book_id"];
    $pack_id=$_GET['pack_id'];
   
    $sql= "UPDATE  booking  set `status`='accepted' where user_id=$pid and `pack_id`='$pack_id' ";


    
if ($conn->query($sql) === TRUE) {
        echo"<script> alert('Approved succesfuly'); window.location=(\"hotel_approved_bk.php\");</script>";

  } else {
     echo"<script> alert('Cannot Approve'); window.location=(\"hotel_booking.php\");</script>";

  }
}

?>