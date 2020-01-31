
<?php   
include'connect.php';



if ($_SESSION['login']=='') { 
  
    header('location:login.php');

}



 $result = mysqli_query($con,"SHOW TABLES");
  $page_num=mysqli_num_rows($result);
   



  $getdata = "select * from user";
  $que = mysqli_query($con, $getdata);
  $post_num = mysqli_num_rows($que);



  $getdata = "select * from user";
  $que = mysqli_query($con, $getdata);
  $user_num = mysqli_num_rows($que);
 
 



?>


<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $user_num ; ?></h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><?php  echo $page_num; ?> </h2>
                    <h4>Pages</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $post_num ; ?></h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php  include'count_visitor.php' ; ?></h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
              </div>