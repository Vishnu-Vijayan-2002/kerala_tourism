<?php
session_start(); 
include "db.php";

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$qry="SELECT *FROM `signup` WHERE `email`='$email' AND `password`='$password'";
$result=mysqli_query($conn,$qry);


// $count = mysqli_num_rows($result);
// if($count == 1)


if($result->num_rows>0)


{

    // $row=mysqli_fetch_assoc( $result );

    // $_SESSION['name'] = $row['name'];
    // $_SESSION['id'] = $row['id'];


    while($row=mysqli_fetch_array($result)){

    
    
  
      $user=$row['name'];
      $userid=$row['id'];
      $user_email=$row['email'];
      $user_phone=$row['phone'];

    


  
    }

    $_SESSION['name'] = $user;
    $_SESSION['id'] = $userid;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['user_phone'] = $user_phone;

   echo"<script> alert('welcome back'); window.location=(\"home.php\"); </script>";

    
}

else{
    echo"<script> alert('Failed to login'); window.location=(\"login.html\"); </script>";

}
}

?>