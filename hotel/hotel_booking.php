
<?php
include "header.php";
?>
<html>
<head>
    
    <link rel="stylesheet" href="./table.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    </head>
    <body>
<div class="main"   style="height:85px"> </div>
 

<div class="container" >
<ul class="responsive-table" >

    
<?php
session_start(); 
include "db.php";
$hotel_id=$_SESSION['hotel_id'];
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT * FROM booking where `hotel_id`='$hotel_id' and `status`='pending' ";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>
<li  style="width:100%;" >
      <div class="col col-1">SI NO.</div>
      <div class="col col-1">Customer Name</div>
      <div class="col col-1">Email</div>
      <div  class="col col-1">Phone</div>
      <div  class="col col-1">Package</div>
      <div  class="col col-1">Price</div>
      <div  class="col col-1">Approve</div>
      <div class="col col-1" >Reject</div>
    </li>


<?php
$count=0;
while($row=mysqli_fetch_array($result)){
    $count++;
$user_id=$row['user_id'];
$pack_id=$row['pack_id'];
?>

<li class="table-row">
      <div  class="col col-1" data-label="Job Id"><?php echo $count;?></div>
      <div  class="col col-1"data-label="Customer Name"><?php echo $row['user_name'];?></div>
      <div class="col col-1" data-label="Amount"><?php echo $row['user_email'];?></div>
      <div   class="col col-1"data-label="Payment Status"><?php echo $row['user_phone'];?></div>
      <div  class="col col-1" data-label="Payment Status"><?php echo $row['title'];?></div>
      <div  class="col col-1" data-label="Payment Status">&#x20B9;<?php echo $row['price'];?></div>
      <div  class="col col-1"data-label="Payment Status"><a href="hotel_approve_book.php?book_id=<?php echo $user_id?>&pack_id=<?php echo $pack_id?>">Yes</a></div>
      <div class="col col-1" data-label="Payment Status"><a href="hotel_reject_book.php?book_id=<?php echo $user_id?>&pack_id=<?php echo $pack_id?>">No</a></div>
    </li>
<?php
  }
        }else{
            ?><br><br><br><br><br>
 <center>   <h4 style="color:black">No Data Found</h4><br><br><br><br><br></center>
            <?php
        }
?>
</ul>
            </div>
            <?php

include "footer.html";
?>
    </body>
</html>

