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
    <h1><?php  echo $_SESSION['AdminLoginId']  ?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
   <button type="submit" name="Logout">LOG OUT</button>
</form>
 </div>
    
 <!-- Order Table -->
 <div class="container mt-5 ">
    <div class="row">
        <div class="col-lg-12">
        <table class="table text-center ">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Paymode</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM `order_manager` ";
     $user_result=mysqli_query($con,$query);
     while($user_fetch=mysqli_fetch_assoc($user_result))
     {
        echo"<tr>
        <td>$user_fetch[Order_id]</td>
        <td>$user_fetch[Full_Name]</td>
        <td>$user_fetch[Phone_no]</td>
        <td>$user_fetch[Address]</td>
        <td>$user_fetch[Pay_Mode]</td>
        <td><table class='table text-center '>
        <thead>
          <tr>
            <th scope='col'>Petname</th>
            <th scope='col'>Price</th>
            <th scope='col'>Quantity</th>
           
          </tr>
        </thead>
        <tbody>
        ";
       $order_query="SELECT * FROM `user_orders` WHERE  `Order_id`=$user_fetch[Order_id]"  ;
       $order_result=mysqli_query($con,$order_query);
       while($order_fetch=mysqli_fetch_assoc($order_result))
       {

        echo "
                   <tr>
                    <td>$order_fetch[Petname]</td>
                    <td>$order_fetch[Price]</td>
                    <td>$order_fetch[Quantity]</td>
                   </tr>
             ";
       }
       
       echo" 


                </tbody>
                </table>            
       </td>
      </tr>";
     }
    ?>
    
  </tbody>
</table>
        </div>
    </div>


 </div>

      
    <?php 
      if(isset($_POST['Logout'])){
        session_destroy();
        header("location:adminlogin.php");
      }
    ?>
  </body>
  </html>
