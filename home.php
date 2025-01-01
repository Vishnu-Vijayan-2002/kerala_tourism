<?php
session_start(); 
include "header.php";
?>


<?php
include "db.php";
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
// $qry ="SELECT * FROM package";
$qry="SELECT package.*,hotel.* FROM package,hotel WHERE `package`.`hotel_id`=hotel.`hotel_id` AND package.`status`='yes'";

$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>TRAVELISTA</title>
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


  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Fabulous<br>Travel With Us</h2>
          <p data-aos="fade-up" data-aos-delay="100">“A journey of a thousand miles begins with a single step”
</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#chefs" class="btn-book-a-table">Book Event</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/img8.jpg" style="width:350px;height:350px;object-fit:cover;border-radius:50px;
" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">

        </div>

        
      </div>
    </div>

  </section>
<!---search bar----
<br>
<br>
<br>
<meta name="viewport"
        content="width=device-width, initial-scale=1">

<div class="search">
          <center>  <form action="#">
                <input type="text"
                    placeholder=" Search"
                    name="search">
                <button>
                <i class="fa fa-search">
                    </i>
                </button>
            </form></center>
        </div>
    </div>
     <style>
		
	/* styling navlist */
	#navlist {
		background-color: #0074D9;
		position: absolute;
		width: 100%;
	}
		
	/* styling navlist anchor element */
	#navlist a {
		float:left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 12px;
		text-decoration: none;
		font-size: 15px;
	}
	
	.navlist-right{
		float:right;
	}

	/* hover effect of navlist anchor element */
	#navlist a:hover {
		background-color: #0074D9;
		color: #008000;
	}
		
	/* styling search bar */
	.search input[type=text]{
		width:300px;
		height:45px;
		border-radius:25px;
		border: none;
	}
		
	.search{
    background-color: #0074D9;
    color: #000;
		float:cenre;
		margin:12px;
	}
		
	.search button{
		background-color: #0074D9;
		color: #000;
		float:center;
		padding: 5px 10px;
		margin-right: px;
		font-size: 12px;
		border: none;
		cursor: pointer;
	}
</style>

		
<---/search bar---->

  <section id="header" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Destinations</h2>
          <p>Find <span>Your Moments</span> In Our Website</p>
        </div>


     


 
        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">

  
    
          <div class="swiper-wrapper">
          <?php
          
while($row=mysqli_fetch_array($result)){



?>
       
          <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(hotel/images/<?php echo $row['profile_image'];?>)">
              <h3><?php echo $row['bio'];?></h3>
              <h3><?php echo $row['hotel_name'];?></h3>
              <div class="price align-self-start">&#x20B9;
<?php echo $row['price'];?></div>
<h4 style="font-size:16px" >Type <?php echo $row['types'];?></h4>
                <h4 style="font-size:16px" >Category  : <?php echo $row['cat'];?></h4>
             
                <h4 style="font-size:16px" >Check in : <?php echo $row['cit'];?></h4>
                <h4 style="font-size:16px" >heck out : <?php echo $row['ceckout'];?></h4>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>

         
            </div><!-- End Event item -->

     
            <?php
            }
          
        }
        
        ?>
        
           

          </div>
         
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->







    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Packages</h2>
          <p>Our <span>Proffesional</span> Packages</p>
        </div>

        <?php
include "db.php";

// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry1="SELECT package.*,hotel.* FROM package,hotel WHERE `package`.`hotel_id`=hotel.`hotel_id` AND package.`status`='yes'";
$result1=mysqli_query($conn,$qry1);
if(mysqli_num_rows($result1)>0){

?>

      
     
        <div class="row gy-4">

  
        <?php

while($row=mysqli_fetch_array($result1)){



?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">


 
            <div class="chef-member">

              <div class="member-img">
                <img src="hotel/images/<?php echo $row['profile_image'];?>" class="img-fluid" alt="" style="height:500px;width:100%">
                <div class="social"  style="transform: rotate(90deg);margin-right:135px;">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
              <h4 >Hotel : <?php echo $row['hotel_name'];?></h4>
                <h4 style="font-size:16px" >package-info : <?php echo $row['bio'];?></h4>
                <h4 style="font-size:16px" >Type <?php echo $row['types'];?></h4>
                <h4 style="font-size:16px" >Category  : <?php echo $row['cat'];?></h4>
             

                <span style="color:red;font-size:18px"><B>&#x20B9;<?php echo $row['price'];?></B> <B style="color:green;font-size:12px">  <?php if( $row['offer']!=NULL) {echo $row['offer'].'% OFF/-';} ?></B></span>
                <p ><?php echo $row['desc'];?></p>
                <h4 style="font-size:16px" >Check in : <?php echo $row['cit'];?></h4>
                <h4 style="font-size:16px" >Check out : <?php echo $row['ceckout'];?></h4>
       <div >
     <button style="background-color: #0d6efd;border:none;padding:8px;border-radius:10px">    
     <a href="booking.php?pack_id=<?php echo $row['pack_id'];?>&user_id=<?php  echo $_SESSION['id'];?>&image=<?php echo $row['profile_image'];?>&price=<?php echo $row['price'];?>&title=<?php echo $row['bio'];?>&desc=<?php echo $row['desc'];?>&user_name=<?php echo $_SESSION['name'];?>&user_email=<?php echo $_SESSION['user_email'];?>&user_phone=<?php echo $_SESSION['user_phone'];?>&hotel_id=<?php echo $row['hotel_id'];?>"  style="color:white;margin:2px">Book Event</a></button>

       </div>
              </div>

       
            </div>


          </div><!-- End Chefs Member -->

         
          <?php
            }
          
        }
        
        ?>
        </div>

      

      </div>
    
    
    </section><!-- End Chefs Section -->
  
  
      
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
