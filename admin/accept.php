<?php
session_start(); 
include "db.php";

if( $_GET["pack_id"]) {
    
  
    $pid=$_GET["pack_id"];
   
    $sql= "UPDATE  package  set `status`='yes' where pack_id=$pid";


    
if ($conn->query($sql) === TRUE) {
        echo"<script> alert('Approved succesfuly'); window.location=(\"approved.php\");</script>";

  } else {
          echo"<script> alert('Cannot Approve'); window.location=(\"approved.php\");</script>";

  }
}

?>