   <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">A FOOD</a>  <!-----------------website name  ----------------->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
             <li><a href="pages.php">Pages</a></li>
           
            <li><a href="users.php">Users</a></li>
          </ul>

          <?php   include'connect.php';

                      

                        $user = $_SESSION['login'];
                        $data = "select * from user where email='$user'";
                        $query = mysqli_query($con,$data);                      
                       
                        while( $row = mysqli_fetch_array($query)){

                         $name =$row['username'];
                         $email =$row['email']; 
                         
                         $date =$row['cdate'];
                          }

                        

          ?>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
