<?php

include "header.php";
?>


<html>
    <head>
    <link rel="stylesheet" href="./table.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    </head>
    <body>
<?php
include "db.php";
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
//$qry ="SELECT * FROM booking";
$qry="SELECT booking.*,hotel.* FROM booking,hotel WHERE `booking`.`hotel_id`=hotel.`hotel_id`";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>


<div class="main"   style="height:85px"> </div>
 

<div class="container" >
<ul class="responsive-table" >
    

<div class="main"   style="height:50px"> </div>

<div class="container" >
    

 <p><center><h3 style="padding:1px">Booking List</h3><center></p>
</div>
</div>
<hr style="height:10px; widtyh:10px; background-color:black">
<ul class="responsive-table" >
     <li  style="width:100%;" >
      <div class="col">SI NO.</div>
      <div class="col">Customer Name</div>
      <div class="col">Email</div>
      <div class="col">Phone</div>
      <div class="col">Location</div>
      <div class="col">Price</div>
      <div class="col">Hotel Name</div>
    </li>
<hr style="height:10px; widtyh:10px; background-color:black">
<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>



<li class="table-row">
      <div class="col" data-label="Job Id"><?php echo $count;?></div>
      <div class="col " data-label="Customer Name"><?php echo $row['user_name'];?></div>
      <div class="col" data-label="Amount"><?php echo $row['user_email'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['user_phone'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['title'];?></div>
      <div class="col" data-label="Payment Status">&#x20B9;
<?php echo $row['price'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['hotel_name'];?></div>
    </li>

<?php
            }
          
        }
        else{
            ?><br><br><br><br><br>
<h3 style="color:red">No Data Found</h3><br><br><br><br><br>
            <?php
        }
        ?>
  </ul>
            </div>

    </body>
</html>

<hr style="height:10px; widtyh:10px; background-color:black">
   </div>
<?php

include "footer.html";
?>