
<?php

include "header.php";
?>

<?php include_once('processForm.php') ?>
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
        <form action="addpackage.php" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update Package</h2>
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Package</h4>
              </div>
              <img src="images/avatar.jpg" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required>
            <label>Choose Image</label>
          </div>
          <div class="form-group">
            <label>Location</label>
            <textarea name="bio" class="form-control"  required></textarea>
         
          <label>price</label>
            <input type="number" name="price" class="form-control" required>
            <label>Description</label>
            <textarea name="desc" class="form-control"  required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block">Add Package</button>
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
