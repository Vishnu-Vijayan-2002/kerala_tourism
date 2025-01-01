<?php
include 'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['subject'];
    $email=$_POST['email'];
    $phone=$_POST['message'];


   
    
 $qry = "INSERT INTO  feedback (`name`,`message`,`subject`,`email`) VALUES('$name','$password','$phone','$email')";
// $qry1 = "INSERT INTO login(`name`,`password`,`type`,`status`,`user_id`) VALUES('$name','$password','user','pending',(select max(id) from reg))";

echo $qry;

 if ($conn->query($qry) == TRUE){
    echo"<script> alert('successful'); window.location=(\"feedback.php\"); </script>";

} else {
    echo"<script> alert('failed); </script>";
}
    }


?>
