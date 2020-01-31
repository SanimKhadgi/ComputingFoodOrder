
<?php    include'connect.php';

session_start(); 

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
    <title>Admin Area | Pages</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

   <?php  include 'nav.php';   ?>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h3> Pages      <small>Manage Site Pages</small></h3>
          </div>
         
        </div>
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
            <table class="table table-striped table-hover">


                      <tr>
                        <th>Title</th>
                       
                        <th>Show</th>
                        <th></th>
                      </tr>


                   <?php  
                 
                   $get = $_SESSION['table'];
                   $getdata = "select * from $get ORDER BY id DESC";
                   $que = mysqli_query($con, $getdata);
                   while($fil = mysqli_fetch_array($que)){

                   $id = $fil['id'];               
                  
                  $heading = $fil['heading'];             


                    ?>
                     <tr>

                        <td><?php echo $heading; ?></td>
                     
                        
                        <td><a class="btn btn-default" href="show_data.php?id=<?php echo $id ; ?>">Show</a></td>
                      </tr>

                      <?php    } ?>




                      
                    </table>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">page name : </h3>   <!--------------------------------page name ----------------------------->
              </div>
              <div class="panel-body">

                <?php  
                  
                   $get = $_SESSION['table'];
                   $getdata = "select * from $get ORDER BY id DESC LIMIT 1";
                   $que = mysqli_query($con, $getdata);
                   while($fil = mysqli_fetch_array($que)){
                   $id = $fil['id'];
                 
                  
                  $heading = $fil['heading'];
                  $sub_heading = $fil['sub_heading'];
                  $content =$fil['content'];
                  $image = $fil['picture'];

                  $content_2=substr($content,0,200) ;


                    ?>
                
                <h3 class="text-center "> <?php $heading ;  ?> </h3> <p class="align-right"><img style="width: 300px;" src="images/<?php echo $image ;?>"></p>
                <h4 class="text-center text-muted"><?php  echo $sub_heading ; ?> </h4>

                <p>
                  
                  <?php echo $content ;  ?>

                
                </p>

               <?php  } ?>

              







              </div>
              </div>

          </div>
        </div>
      </div>
    </section>


    <!-- Modals -->
  <?php  include'copyright.php';  ?>
    <!-- Add Page -->
    

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
