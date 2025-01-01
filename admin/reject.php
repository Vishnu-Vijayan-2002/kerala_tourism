<?php
session_start(); 
include "db.php";

if( $_GET["pack_id"]) {
    
  
    $pid=$_GET["pack_id"];
   
    $sql= "UPDATE  package  set `status`='no' where pack_id=$pid";


    
if ($conn->query($sql) === TRUE) {
        echo"<script> alert('Reject succesfuly'); window.location=(\"approved.php\");</script>";

  } else {
          echo"<script> alert('Cannot Reject'); window.location=(\"approved.php\");</script>";

  }
}

?>