 <td><input type="button"  class="btn btn-danger" onClick="deleteme(<?php echo $name ; ?>)" value="Delete"></td>
 <script type="text/JavaScript">
                       function deleteme(delid)
                       {
                       if(confirm("Do you want Delete ?.....")){
                       window.location.href='delete_post.php?id='+delid+'';
                       return true;
                       }
                       } 
                      </script>