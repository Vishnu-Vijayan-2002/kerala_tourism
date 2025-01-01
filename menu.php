<?php
include "header.php";
session_start(); 
?>



<?php
include "db.php";

$id=$_SESSION['id'];
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry = "SELECT * FROM booking where user_id=$id";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) > 0) {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kerala</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
        * Template Name: Yummy - v1.1.0
        * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
  </head>

  <body>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
    
          <p>Check Your <span>Bookings</span></p>
        </div>



        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            




            <div class="row gy-5">





              <?php

              while ($row = mysqli_fetch_array($result)) {



              ?>

                <div class="col-lg-4 menu-item">


                  <a href="hotel/images/<?php echo $row['image']; ?>" class="glightbox"><img   src="hotel/images/<?php echo $row['image']; ?>" alt="" style ="border-radius:50px;height:350px;width:350px"></a>
                  <h4> <?php echo $row['title']; ?></h4>
                  <h6 style="color:#0d6efd"> [<?php echo $row['status']; ?>]</h6>
                  <p class="ingredients">
                  <?php echo $row['desc']; ?>
                  
                  </p>

                  <p class="price">
                  &#x20B9; <?php echo $row['price']; ?>
                  </p>

                  <!-- <button style="background-color: #0d6efd;border:none;padding:8px;border-radius:360px;width:50px;height:50px;transform:rotate(35deg)">    <a href="booking.php"  style="color:white;margin:2px">EDIT</a></button> -->
                  <button style="background-color: rgb(11, 173, 79);border:none;padding:2px;border-radius:360px;width:80px;height:30px;transform:rotate(0deg);font-size:12px">    <a href="delete.php?pack_id= <?php echo $row['pack_id']; ?>"  style="color:white;margin:2px">REMOVE</a></button>

    

                </div><!-- Menu Item -->


            <?php
              }
            }else{
              ?><br><br><br><br><br>
  <h3 style="color:red">No Data Found</h3><br><br><br><br><br>
              <?php
          }

            ?>

            </div><!-- End Event item -->



          </div>





        </div>
    </section><!-- End Menu Section -->



    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>

  </html>

  <?php

  include "footer.html";
  ?>