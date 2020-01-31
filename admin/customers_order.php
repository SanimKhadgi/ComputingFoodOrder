<?php  include'connect.php';

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
            <h3> Posts  <small>  Manage Blog Posts</small></h3>
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
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
               
                <br>





                <table class="table table-striped table-hover">


                      <tr>
                        <th>SN.</th> 
                        <th>customers name</th>                        
                        <th>email</th>
                        <th>Mobile number</th>
                        <th>address</th>
                         <th>Order Date</th>
                        
                        
                       
                        
                      </tr>


                   <?php  
                include'connect.php'; 
               
                $getdata = "SELECT id,email, customer_name,mobile,address,odate FROM `oerder_keshav` GROUP BY email ";

                  $que = mysqli_query($con, $getdata);

                  while($fil = mysqli_fetch_array($que)){

                  $id=$fil['id'];
                  $customer_name =$fil['customer_name'];
                  $email =$fil['email'];
                  $odate =$fil['odate'];

                  $address =$fil['address'];
                  $mobile =$fil['mobile'];


                 

                 
                 ?>

                     <tr>
                        <td><?php echo  $id; ?></td> 
                        <td><?php echo  $customer_name; ?></td>                       
                        <td> <?php echo $email; ?></td>
                        <td> <?php echo $mobile; ?></td>
                        <td> <?php echo $address; ?></td>
                        <td> <?php echo $odate; ?></td>
                       
                        <td> <a class="btn btn-danger" href="show_order.php?id=<?php echo $email; ?>">Show </td>
                      </tr>

                      <?php    } ?>




                      
                    </table>



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

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

     <script type="text/JavaScript">
         function deleteme(delid)
         {
         if(confirm("Do you want Delete ?.....")){
         window.location.href='delete_customers.php?id='+delid+'';
         return true;
         }
         } 
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
