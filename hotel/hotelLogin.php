<?php
session_start(); 
include "db.php";
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$qry="SELECT *FROM `hotel` WHERE `email`='$email' AND `password`='$password'";
$result=mysqli_query($conn,$qry);

if($result->num_rows>0){

    while($row=mysqli_fetch_array($result)){

    
    
  
        $hotel_name=$row['hotel_name'];
        $hotel_id=$row['hotel_id'];
  
      
  
  
    
      }
  
      $_SESSION['hotel_name'] = $hotel_name;
      $_SESSION['hotel_id'] = $hotel_id;

   
   echo"<script> alert('successful'); window.location=(\"Home.php\"); </script>";

}

else{
    echo"<script> alert('Failed to login'); window.location=(\"hotelLogin.html\"); </script>";

}
}

?>