<?php
session_start(); 
  $msg1 = "";
  $msg_class1 = "";
  $conn = mysqli_connect("localhost", "root", "", "ktour");
  if (isset($_POST['save_profile'])) {
    // for the database
    $bio = stripslashes($_POST['bio']);
    $price = stripslashes($_POST['price']);
    $desc = stripslashes($_POST['desc']);
    $hotel_id =stripslashes($_SESSION['hotel_id']);
    $pack_id =stripslashes($_POST['pack_id']);
   
 
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE package SET profile_image='$profileImageName', bio='$bio', price='$price',`desc`='$desc',`status`='no',`hotel_id`='$hotel_id' where pack_id='$pack_id'";
       $sql2 = "DELETE from package where pack_id='$pack_id'";
        if(mysqli_query($conn, $sql)&& mysqli_query($conn, $sql2)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
?>