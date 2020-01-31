<?php  

include('connect.php');
  $r= "SELECT SUM(TABLE_ROWS)
   FROM INFORMATION_SCHEMA.TABLES
   WHERE TABLE_SCHEMA = 'isrccomn_isrc'";

    $qry = mysqli_query($con,$r);

    echo $tt = mysqli_num_rows($qry);



 ?>