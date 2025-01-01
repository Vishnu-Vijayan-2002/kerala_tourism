
<?php
include "db.php";
// $qry="SELECT reg.*,login.* FROM reg,login WHERE reg.`id`=login.`user_id` AND login.`status`='pending'";
$qry ="SELECT * FROM feedback";
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
    

 <p><center><h3 style="padding:50px"> User Feedback List  </h3><center></p>
</div></div>
<hr style="height:10px; widtyh:10px; background-color:black">
<ul class="responsive-table" >

    <li  style="width:100%;" >
      <div class="col">SI NO.</div>
      <div class="col">Customer Name</div>
      <div class="col">Email</div>
      <div class="col">Subject</div>
      <div class="col">Message</div>
    </li>

<?php
$count=0;
while($row=mysqli_fetch_array($result)){

    $count++;


?>



<li class="table-row">
      <div class="col" data-label="Job Id"><?php echo $count;?></div>
      <div class="col" data-label="Customer Name"><?php echo $row['name'];?></div>
      <div class="col" data-label="Amount"><?php echo $row['email'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['subject'];?></div>
      <div class="col" data-label="Payment Status"><?php echo $row['message'];?></div>
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
  <hr style="height:10px; widtyh:10px; background-color:black">
   </div>
            <?php

include "header.php";
?>

    </body>
</html>

<?php

include "footer.html";
?>