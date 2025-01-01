<?php
session_start(); 
include "db.php";

if( $_GET["pack_id"]) {
    
    $id=$_SESSION['id'];
    $pid=$_GET["pack_id"];
    echo $id;
    echo $pid;
    $sql= "DELETE from booking where user_id=$id AND pack_id=$pid";


    
if ($conn->query($sql) === TRUE) {
        echo"<script> alert('Delete succesfuly'); window.location=(\"menu.php\");</script>";

  } else {
          echo"<script> alert('Cannot Delete'); window.location=(\"menu.php\");</script>";

  }
}

?>