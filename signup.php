<?php
include 'db.php';
if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];


    $checkUser= "SELECT COUNT(*) as chk from signup  where email='$email'";

    $result =mysqli_query($conn,$checkUser);

    $fetch = mysqli_fetch_array($result);

    
    if ($fetch['chk'] > 0) {

        echo"<script> alert('already exist'); window.location=(\"signup.html\");</script>";
    }
    else{

    
 $qry = "INSERT INTO signup (`name`,`password`,`phone`,`email`,`type`,`status`) VALUES('$name','$password','$phone','$email','user','pending')";
// $qry1 = "INSERT INTO login(`name`,`password`,`type`,`status`,`user_id`) VALUES('$name','$password','user','pending',(select max(id) from reg))";

// echo $qry;

 if ($conn->query($qry) == TRUE){
    echo"<script> alert('successful'); window.location=(\"login.html\"); </script>";

} else {
    echo"<script> alert('failed); </script>";
}
    }
}

?>
