
<?php
session_start();
include("includes/config.php");
if(isset($_POST['category'])){
   $category=$_POST['category-name'];
 
    $query="insert into category(category_id,category_name)values('','$category')";
    $result=mysqli_query($con,$query);
    if($result){
     echo 1;
     $_SESSION['status']="data inserted sucessfully";

    }
   
}
?>