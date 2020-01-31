<?php  include'connect.php';

session_start(); 
ob_start();

if ($_SESSION['login']=='') { 
  
    header('location:login.php');

}

       

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Posts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

   <?php  include'nav.php';  ?>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
           
          </div>
         
    </header>

   

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">



              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <?php   include'dashboard.php';   ?>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg" style="height: 40px;">
                <h3 style="float: left" class="panel-title">Add new user </h3>
                
              </div>
              <div class="panel-body">
               
                <br>




                      <section id="user" style=" margin-top:-40px;">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                              <form id="login" action="add_new_user.php" method="post" enctype="multipart/form-data" class="well">
                                    <div class="form-group">
                                      <label>E-mail </label>
                                      <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                     <div class="form-group">
                                      <label>Confirm E-mail </label>
                                      <input type="text" name="cemail" class="form-control" placeholder="Confirm  Email">
                                    </div>
                                     <div class="form-group">
                                      <label>Username </label>
                                      <input type="text" name="username" class="form-control" placeholder="Enter usernamel">
                                    </div>
                                     <div class="form-group">
                                      <label>Password </label>
                                      <input type="password" name="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <div class="form-group">
                                      <label>Confirm Password</label>
                                      <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-default btn-block">Add New User</button>
                                </form>
                            </div>
                          </div>
                        </div>
                      </section>

                  <?php
                       
                         
                          if(isset($_POST['submit'])){

                          $email = $_POST['email'] ;

                          $cemail = $_POST['cemail'] ;

                          $username = $_POST['username'] ;

                          $password = $_POST['password'] ;

                          $cpassword =$_POST['cpassword'] ;

                          $cdate = date("Y-m-d");

                          if($email==$cemail AND $password==$cpassword AND $email !='' AND $cemail !='' AND $username !='' AND $password !=='' AND  $cpassword !=''){

                          $insert = "INSERT INTO user(cdate,username,email,password) values('$cdate','$username','$email','$password')";
                          $qry=mysqli_query($con,$insert) ; 

                          if($qry){ header('location:users.php');}

                        
                              }

                          else{

                            echo "<h4 style='color:red; margin-left:370px;'>Missmatched username or password or blank fields</h4>";

                          }    

                              }                  


                           ?>

                     



              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

  <?php  include'copyright.php';  ?>
    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
