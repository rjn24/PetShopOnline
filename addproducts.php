<?php include("Database/connection.php") ?>

<?php 

   session_start();
   
   if(!isset($_SESSION['AdminLoginId']))
   {
    header("location:adminlogin.php");
   }
   ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PetStore</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style2.css">

   <!-- Java Scripts -->

 
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

 

      <!-- Nav Bar -->
      <div class="navbar">    
      <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">petstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminpanel.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addproducts.php">Add Product</a>
        </li>

        
          
          </ul>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
</div> 
 <div class="header">
    <H1><?php  echo $_SESSION['AdminLoginId']  ?></H1>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
   <button type="submit" name="Logout">LOG OUT</button>
</form>
 </div>
    
 <!-- Add Product -->
 

 <form method="POST" action="producttodatabase.php" enctype="multipart/form-data" >
 <div class="mb-3">
  <label  class="form-label">Category</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" required  name="Categories" value="dog" >
  <label class="form-check-label" >
     Dog
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" required  name="Categories" value="cat"  >
  <label class="form-check-label" >
     Cat
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" required  name="Categories" value="bird"  >
  <label class="form-check-label" >
     Bird
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" required  name="Categories" value="other"  >
  <label class="form-check-label" >
     Other
  </label>
 </div>

 </div>


  

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" required  name="name" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" required  name="price" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Image  ( jpg , png and jpeg only )</label> 
    <input type="file" class="form-control" required  name="image" >
  </div>

  <button type="submit" class="btn btn-primary" required  name="addproduct">Submit</button>
</form>


    
  


 



 <!-- logout -->
      
    <?php 
      if(isset($_POST['Logout'])){
        session_destroy();
        header("location:adminlogin.php");
      }
    ?>
  </body>
  </html>
