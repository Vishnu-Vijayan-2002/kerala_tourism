<?php

include "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload PHP</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <!-- <a href="profiles.php">View all profiles</a> -->
        <form  action="" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update Package</h2>
          <?php if (!empty($msg1)): ?>
            <div class="alert <?php echo $msg_class1 ?>" role="alert">
              <?php echo $msg1; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Package</h4>
              </div>
              <img src="images/<?php echo $_GET['image'];?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required>
            <label>Choose Image</label>
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" name="bio" value="<?php echo $_GET['bio'];?>" class="form-control"  required>
         
          <label>price</label>
            <input type="text" name="price" class="form-control" value="<?php echo $_GET['price'];?>"  required>
            <label>offer</label>
            <input type="offer" name="pack_id" value="<?php echo $_GET['pack_id'];?>" class="form-control"  required></textarea>
          
            <label>Description</label>
            <input type="text" name="desc" value="<?php echo $_GET['desc'];?>" class="form-control"  required></textarea>
            
            <label>checkin</label>
            <input type="datetime-local" name="checkin"  class="form-control"  required></textarea>
            
            <label>checkout</label>
            <input type="datetime-local" name="checkout"  class="form-control"  required></textarea>
            
        </div>
          <div class="form-group">
            <input type="submit" name="save_profile" class="btn btn-primary btn-block" value="Update Package">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<script src="scripts.js"></script>

<?php

include "footer.html";
?>

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
    $checkin = stripslashes($_POST['checkin']);
    $checkout = stripslashes($_POST['checkout']);

    $hotel_id =stripslashes($_SESSION['hotel_id']);
    $pack_id =stripslashes($_POST['pack_id']);
   

    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
   echo "kkkkkkkkkkkkkkkkkk";
    // Upload image only if no errors
    if (empty($error)) {

      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        echo "pppppppppppppppp",$pack_id;

        $sss = "UPDATE package SET bio='$bio',price='$price',cit='$checkin', ceckout='$checkout',profile_image='$profileImageName' where pack_id='$pack_id'";
    
        if ($conn->query($sss) == TRUE){
          echo "pppppppppppppppp",$pack_id;
          //  echo "<script>alert('updated Success');window.location = 'hotel_approved_pk.php';</script>";

  
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