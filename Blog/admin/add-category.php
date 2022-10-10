<?php   
include("includes/header.php");
if(isset($_SESSION['status'])){
    print_r($_SESSION['status']);
   echo $_SESSION['status'];
    die();
}
  ?>



<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header">

        <h4>
 

            Add Category
            <a href="#" class="btn btn-danger float-end">Back</a>
        </h4>
        </div>
        <div class="card-body">
          <form action="category-code.php" method="POST">
           <div class="row">
            <div class="col md-6 mb-3">
                <label for="">category name</label>
                <input type="text" name="category-name" class="form-control">

            </div>
         
          </div>
          <button  name="category" class="btn btn-success">Add </button>
          </form>
        

    </div>
</div>

<?php include("includes/footer.php");
?>



