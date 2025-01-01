

<?php

include "header.php";
?>
<?php
include "db.php";
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT * FROM signup";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0){

?>

<html>
    <head>
    <link rel="stylesheet" href="./table.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    </head>
    <body>
<div class="main"   style="height:50px"> </div>
 <div class="container" >
<ul class="responsive-table" >
<p><center><h3 style="padding:50px">User List </h3><center></p><div>
</div></div>
<hr style="height:10px; widtyh:10px; background-color:black">
<ul class="responsive-table" >


    <li  style="width:100%;" >
      <div class="col col-1">SI NO.</div>
      <div class="col col-2">Customer Name</div>
      <div class="col col-3">Email</div>
      <div class="col col-4">Phone</div>
      <!-- <div class="col col-4">Addresss</div> -->
      
    </li>
<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>
<li class="table-row">
      <div class="col col-1" data-label="Job Id"><?php echo $count;?></div>
      <div class="col col-2" data-label="Customer Name"><?php echo $row['name'];?></div>
      <div class="col col-3" data-label="Amount"><?php echo $row['email'];?></div>
      <div class="col col-4" data-label="Payment Status"><?php echo $row['phone'];?></div>
      <!-- <div class="col col-4" data-label="Payment Status"><?php echo $row['type'];?></div> -->
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
<hr style="height:10px; widtyh:10px; background-color:black">
<?php

include "footer.html";
?>