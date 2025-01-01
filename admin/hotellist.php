

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
$qry ="SELECT * FROM hotel";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){
?>

 

<div class="container-fluid" >
<ul class="responsive-table" >


<div class="main"   style="height:50px"> </div>

<div class="container" >
    

 <p><center><h3 style="padding:50px">Hotel List </h3><center></p>
</div>
</div>
<hr style="height:10px; widtyh:10px; background-color:black">
<ul class="responsive-table" >

    <li  style="width:100%;" >
      <div class="col ">SI NO.</div>
      <div class="col ">Hotel Name</div>
      <div class="col ">Email</div>
      <div class="col ">Phone</div>
      <div class="col ">Location</div>
    </li>
    
<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;
?>

<li class="table-row">
      <div class="col" data-label="Job Id"><?php echo $count;?></div>
      <div class="col" data-label="Customer Name"><?php echo $row['hotel_name'];?></div>
      <div class="col" data-label="Amount"><?php echo $row['email'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['phone'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['location'];?></div>
    </li>

<?php
            }
          
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