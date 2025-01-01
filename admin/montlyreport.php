
<?php
include "db.php";
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT DISTINCT  `sendamount`.`amount`,`hotel`.* FROM `booking`,`sendamount`,`hotel` WHERE `hotel`.`hotel_id`=`sendamount`.`hid` AND `booking`.`hotel_id`=`hotel`.`hotel_id`";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>

<?php

include "header.php";
?>


<html>
    <head>
    <link rel="stylesheet" href="./table.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    </head>
    <body>
<div class="main"   style="height:50px"> </div>

<div class="container" >
    

 <p><center><h3 style="padding:50px"> Payment Report  </h3><center></p>
</div></div>
<ul class="responsive-table">

    <li  style="width:100%;" >
      <div class="col">Hotel Name</div>
      <div class="col">Location</div>
      <div class="col">HOTEL NAME</div>
      <div class="col">Total Amount </div>
      <div class="col">Commision</div>
    </li>

<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>



<li class="table-row">
      <div class="col" data-label="Job Id"><?php echo $count;?></div>
      <div class="col" data-label="Customer Name"><?php echo $row['hotel_name'];?></div>
      <div class="col" data-label="Amount"><?php echo $row['location'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['amount'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['amount']+$row['amount'];?></div>
    </li>

<?php
            }
          
        }
        else{
            ?><br><br><br><br><br>
            <?php
        }
        ?>
  </ul>
   </div>
            <?php

include "header.php";
?>

    </body>
</html>

<?php

include "footer.html";
?>