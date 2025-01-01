

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
            background-color: #1e1e1e;
            text-align: center;
            justify-content: center;

        }

        * {

            box-sizing: border-box;
            padding: 5px;

        }

        .center {
            text-align: center;
            justify-content: center;
            width: 100%;
            justify-content: center;
        }

        .center1 {
            margin: 10px auto;
            text-align: center;
            justify-content: center;
            width: 50%;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;


        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #ffff;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 30px;

        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #0d6efd;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="center">
        <div class="center1">

            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form  method="post">

                            <div class="row">
                                <div class="col-50">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe" value=" <?php echo $_GET["user_name"]?>" pattern="[ A-Za-z ]+" required>
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="john@example.com"   value=" <?php echo $_GET["user_email"]?>" required>
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" pattern="[ A-Za-z ]+" required>
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="" pattern="[ A-Za-z ]+" required>

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <input type="text" id="state" name="state" placeholder="NY" pattern="[ A-Za-z ]+" required>
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    
                                    <input type="text" id="cname" name="cardname" placeholder="Name on Card" required>
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required  required maxlength="16" minlength="16">
                                   
                                    <select name="month" placeholder="month" class="form-control ">
						<option value="null">january</option>
						<option value="Myself">february</option>
						
						<option value="Daughter">march</option>
						<option value="=friend">april</option>

						<option value="Sister">may</option>
                        <option value="Sister">june</option>
                        <option value="Sister">july</option>
                        <option value="Sister">august</option>
                        <option value="Sister">speptember</option>
                        <option value="Sister">october</option>
                        <option value="Sister">november</option>
                        <option value="Sister">december</option>
                        
                        


					</select>
			
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <select>
                                                    <div class="col-70">
                                                
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                              </select>
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="password" id="cvv" name="cvv" placeholder="352" required maxlength="3" minlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-25">
                                    <div class="container">
                                        <p>Total <span class="price" style="color:black"><b>&#x20B9;<?php echo $_GET["price"]?></b></span></p>
                                    </div>
                                </div>

                            </div>
                            <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
                            <input type="submit"  name="submit" value="Continue to checkout"  class="btn">
                            <!-- <button style="background-color: #0d6efd;border:none;padding:8px;border-radius:10px">    <a href="payment_s.php?pack_id=$pid&user_id=$id&image=$imag&price=$price&title=$title&desc=$desc&user_name=$user_name&user_email=$user_email&user_phone=$user_phone&hotel_id=$hotel_id"  style="color:white;margin:2px">Book Event</a></button> -->

                        </form>
                    </div>
                </div>
                <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
    </div>
  </div> -->
            </div>
        </div>
    </div>
</body>
</html>


<?php
session_start(); 
include "db.php";

if(isset($_POST['submit'])) {
    
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
 echo"<script> alert('booking successful'); window.location=(\"menu.php\"); </script>";

} else {
    echo"<script> alert('booking failed); </script>";
}
    }
}

?>
