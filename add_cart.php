<?php if(isset($_POST['submit'])){

$heading = $_POST['heading'] ;

$sub_heading = $_POST['sub_heading'] ;

$content = $_POST['content'] ;

$picture = $_FILES['picture']['name'];

$temp_img =$_FILES['picture']['tmp_name'];

move_uploaded_file($temp_img,'images/$picture');

}



$insert = 'INSERT INTO cart_keshav(heading,sub_heading,content,picture) values('$heading','$sub_heading','$content','$picture');
mysqli_query($conn,$insert)' ; 
} 


?>