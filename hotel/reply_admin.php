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
session_start(); 
include "db.php";

$hotel_id=$_SESSION['hotel_id'];
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT * FROM chat where `hotel_id`='$hotel_id' ";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>


<div class="main"   style="height:85px"> </div>
 

<div class="container" >
<ul class="responsive-table" >

    <li  style="width:100%;" >
      <div class="col col-1">SI NO.</div>
      <div class="col col-2">Customer Name</div>
      <!-- <div class="col col-3">Email</div> -->
      <div class="col col-4">Subject</div>
      <div class="col col-4">Message</div>
      <!-- <div class="col col-4">Reply</div> -->
    </li>

<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>



<li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $count;?></div>
      <div class="col col-2" data-label="Customer Name"><?php echo $row['name'];?></div>
      <!-- <div class="col col-3" data-label="Amount"><?php echo $row['email'];?></div> -->
      <div class="col col-4" data-label="Payment Status"><?php echo $row['subject'];?></div>
      <div class="col col-4" data-label="Payment Status"><?php echo $row['message'];?></div>
      <!-- <div class="col col-4" data-label="Payment Status"><a href="contact_admin.php" >Send Reply</a></div> -->
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

    </body><?php

include "footer.html";
?>
</html>

