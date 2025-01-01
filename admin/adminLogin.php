<?php
include "db.php";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$qry="SELECT *FROM `admin` WHERE `email`='$email' AND `password`='$password'";
$result=mysqli_query($conn,$qry);

if($result->num_rows>0){
    echo"<script> alert('successful'); window.location=(\"adminHome.php\"); </script>";

}

else{
    echo"<script> alert('Failed to login'); window.location=(\"adminLogin.html\"); </script>";

}
}

?>