<?php 

include'connect.php';   

$data = "select * from visitor";

$qry  = mysqli_query($con,$data);

echo $visit = mysqli_num_rows($qry);

  ?>