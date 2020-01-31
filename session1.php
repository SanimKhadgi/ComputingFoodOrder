 <?php 
                  session_start();
                  
               
                    
                    $_SESSION['qty'] = $_SESSION['qty'] - 1;
                    if( $_SESSION['qty'] <=1 ){

                    $_SESSION['qty'] = 1;  }

                     $_SESSION['qty'];


                    
                    header('location:page2.php');




                    ?>