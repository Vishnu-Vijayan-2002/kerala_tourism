
<?php
session_start(); 
include "db.php";

if( $_GET["pack_id"] || $_GET["user_id"] ) {
    
    $id=$_GET["user_id"];
    $pid=$_GET["pack_id"];
    $image=$_GET["image"];
    $price=$_GET["price"];
    $title=$_GET["title"];
    $desc=$_GET["desc"];
    $user_name=$_GET["user_name"];
    $user_email=$_GET["user_email"];
    $user_phone=$_GET["user_phone"];
    $hotel_id=$_GET["hotel_id"];

    $checkUser= "SELECT COUNT(*) as chk from booking where user_id=$id AND pack_id=$pid";

    $result =mysqli_query($conn,$checkUser);

    $fetch = mysqli_fetch_array($result);

    
    if ($fetch['chk'] > 0) {

        echo"<script> alert('already booked'); window.location=(\"menu.php\");</script>";
    }
    else{
      
 $qry = "INSERT INTO booking (`pack_id`,`user_id`,`image`,`title`,`desc`,`price`,`status`,`user_email`,`user_name`,`user_phone`,`hotel_id`) VALUES('$pid','$id','$image','$title','$desc','$price','pending','$user_email','$user_name','$user_phone','$hotel_id')";

 if ($conn->query($qry) == TRUE){
// echo"<script> alert('booking successful'); window.location=(\"menu.php\"); </script>";

} else {
    echo"<script> alert('booking failed); </script>";
}
    }
}

?>