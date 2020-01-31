 <table class="table table-striped table-hover">
                      <tr>
                        <th>user Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                       
                      </tr>


                      <?php 

                        $data = "select * from user";
                        $query = mysqli_query($con,$data);                      
                       
                        while( $row = mysqli_fetch_array($query)){

                         $name =$row['username'];
                         $email =$row['email'];                          
                         $date =$row['cdate'];

                        ?>
                      <tr>
                       <td><?php  echo $name  ?></td>
                       <td><?php  echo $email  ?></td>
                       <td><?php  echo $date  ?></td>
                      </tr>

                       <?php  } ?>
                    </table>