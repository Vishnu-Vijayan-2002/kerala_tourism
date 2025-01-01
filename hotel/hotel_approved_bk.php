<html>
    <head>
    <?php

include "header.php";
?>
    <link rel="stylesheet" href="./table.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    </head>
    <body>
<?php
session_start(); 
include "db.php";
$hotel_id=$_SESSION['hotel_id'];
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT `booking`.* FROM `booking` WHERE `booking`.`hotel_id`='$hotel_id'";

$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>





<div class="main"   style="height:85px"> </div>
 

<div class="container" >
<ul class="responsive-table" >

    <li  style="width:100%;" >
      <div class="col ">SI NO.</div>
      <div class="col ">Customer Name</div>
      <div class="col ">Email</div>
      <div class="col ">Phone</div>
      <div class="col ">Package</div>
      <div class="col ">Price</div>
    
    </li>

<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>



<li class="table-row" >
      <div class="col " data-label="Job Id"><?php echo $count;?></div>
      <div class="col " data-label="Customer Name"><?php echo $row['user_name'];?></div>
      <div class="col " data-label="Amount"><?php echo $row['user_email'];?></div>
      <div class="col " data-label="Payment Status"><?php echo $row['user_phone'];?></div>
      <div class="col " data-label="Payment Status"><?php echo $row['title'];?></div>
      <div class="col " data-label="Payment Status">&#x20B9;<?php echo $row['price'];?></div>
      <button style="background-color: #0d6efd;border:none;padding:8px;border-radius:10px">    
     <a href="sendhalftoadmin.php?pack_id=<?php echo $row['book_id'];?>&&amount=<?php echo $row['price'];?>&&hid=<?php echo $row['hotel_id'];?>"  style="color:white;margin:2px">send haff %</a></button>

    </li>

<?php
            }
          
        }
        else{
            ?><br><br><br><br><br>
<center>   <h4 style="color:black">No Data Found</h4><br><br><br><br><br></center>

            <?php
        }
        
        ?>
  </ul>
            </div>

    </body>
</html>

<?php

  include "footer.html";
  ?>