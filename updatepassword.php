<?php
session_start();
include "db.php";

if (isset($_POST['submit'])) {
    $password1 = $_POST['newpassword'];
    $password = $_POST['renewpassword'];
    $id = $_SESSION['id'];


    if ($password == $password1) {
        $sql = "UPDATE  signup  set `password`='$password' where id=$id";



        if ($conn->query($sql) === TRUE) {
            echo "<script> alert('Update succesfuly'); window.location=(\"profile.php\");</script>";
        } else {
            echo "<script> alert('Cannot update'); window.location=(\"profile.php\");</script>";
        }
    }
    else {
        echo "<script> alert('password mismatch'); window.location=(\"profile.php\");</script>";
    }
} 
