
<?php

include "header.php";
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
</head>
<body>
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Your Feedback <span>Help Us</span></p>
        </div>


        </div>

        <form action="" method="post">
          <div class="row">
            <div class="col-xl-6 form-group" >
              <input type="text" name="name" class="form-control" id="name" value="admin" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" value="admin@gmail.com" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group" style="margin-top:15px">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group" style="margin-top:15px">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <!-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div> -->
          <div class="text-center">
            <!-- <button type="submit"  name="submit" >Send Message</button> -->

            <input type="submit"  name="submit" value="Send feedback" style="background-color:#0d6efd;color:white;border:none;padding:10px;margin:25px;border-radius:20px;width:150px">
        
        </div>

        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->



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


<?php
include 'db.php';
session_start(); 

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['subject'];
    $email=$_POST['email'];
    $phone=$_POST['message'];
    $hotel_id=$_GET['hotel_id'];

   
    
 $qry = "INSERT INTO  chat (`name`,`message`,`subject`,`email`,`hotel_id`) VALUES('$name','$password','$phone','$email','$hotel_id')";
// $qry1 = "INSERT INTO login(`name`,`password`,`type`,`status`,`user_id`) VALUES('$name','$password','user','pending',(select max(id) from reg))";

echo $qry;

 if ($conn->query($qry) == TRUE){
    echo"<script> alert('successful'); window.location=(\"feedback.php\"); </script>";

} else {
    echo"<script> alert('failed); </script>";
}
    }


?>
