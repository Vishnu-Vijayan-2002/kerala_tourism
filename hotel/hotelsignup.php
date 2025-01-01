<?php
include 'db.php';
if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $location=$_REQUEST['location'];

    $checkUser= "SELECT COUNT(*) as chk from hotel  where email='$email'";

    $result =mysqli_query($conn,$checkUser);

    $fetch = mysqli_fetch_array($result);

    
    if ($fetch['chk'] > 0) {

        echo"<script> alert('already exist'); window.location=(\"hotelsignup.html\");</script>";
    }
    else{

    
 $qry = "INSERT INTO hotel (`hotel_name`,`email`,`password`,`status`,`location`,`phone`) VALUES('$name','$email','$password','yes','$location','$phone')";
// $qry1 = "INSERT INTO login(`name`,`password`,`type`,`status`,`user_id`) VALUES('$name','$password','user','pending',(select max(id) from reg))";

// echo $qry;

 if ($conn->query($qry) == TRUE){
    echo"<script> alert('successful'); window.location=(\"hotellogin.html\"); </script>";

} else {
    echo"<script> alert('failed); </script>";
}
    }
}

?>
