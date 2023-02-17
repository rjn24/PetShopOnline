<?php include("Database/connection.php") ?>
<?php
   session_start();
  
 # print_r ($_SESSION['cart']);
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
  <link rel="stylesheet" href="css/styles.css">
<!-- Java Scripts -->

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="">PetStore</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cta">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
            </li>
           
            
          </ul>

        </div>
      </nav>


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Meet your new and loveable pets now.</h1>
         
        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/1dog.jpeg" alt="iphone-mockup">
        </div>

      </div>

    </div>

  </section>

 <!-- Pricing -->

 <section class="white-section" id="cta">

    <h2 class="section-heading">A Plan for your need.</h2>
    <p>Simple and affordable price plans for you.</p>
    

      <!-- Testing for bringing dog from database-->
      <h1>Dogs</h1>

    
    <div class="row">


    <?php
                         $query="SELECT * FROM `dog` ";
                         $user_result=mysqli_query($con,$query);
                         while($user_fetch=mysqli_fetch_assoc($user_result))
                           {   
                                  $id= $user_fetch['id'];
                                  $name=$user_fetch['name'];
                                  $price =$user_fetch['price'];
                                  $image= $user_fetch['image'];
                               echo '
                               <div class="pricing-column col-lg-6 col-md-6">
                               <div class="card">
                                 
                                    <div class="card-header">
                                       <h3>'.$name.'</h3>
                                     </div>
                                        <div class="card-body">
                                            <h2 class="price-text">₹'.$price.'</h2>
                                           <img src="images/'.$image.'" alt="" style="padding: 30px;width:700 px;height:400px;">
                                            <form action="mgcart.php" method="post">
                                           <input type="hidden" name="petname" value="'.$name.'">
                                            <input type="hidden" name="price"   value="'.$price.'">
                                            <input type="submit" name="pets" value="Add to cart"> 
                                           </form>
                                        </div>
                                 </div>
                             </div>
                               
                               
                               ';
                            }
                    ?>
      

    </div>

    <!-- Testing for cats-->

    <h1>Cats</h1>

    
<div class="row">


<?php
                     $query="SELECT * FROM `cat` ";
                     $user_result=mysqli_query($con,$query);
                     while($user_fetch=mysqli_fetch_assoc($user_result))
                       {   
                              $id= $user_fetch['id'];
                              $name=$user_fetch['name'];
                              $price =$user_fetch['price'];
                              $image= $user_fetch['image'];
                           echo '
                           <div class="pricing-column col-lg-6 col-md-6">
                           <div class="card">
                             
                                <div class="card-header">
                                   <h3>'.$name.'</h3>
                                 </div>
                                    <div class="card-body">
                                        <h2 class="price-text">₹'.$price.'</h2>
                                       <img src="images/'.$image.'" alt="" style="padding: 30px;width:700 px;height:400px;">
                                        <form action="mgcart.php" method="post">
                                       <input type="hidden" name="petname" value="'.$name.'">
                                        <input type="hidden" name="price"   value="'.$price.'">
                                        <input type="submit" name="pets" value="Add to cart"> 
                                       </form>
                                    </div>
                             </div>
                         </div>
                           
                           
                           ';
                        }
                ?>
  

</div>

<!-- for birds  --->
<h1>Birds</h1>

    
    <div class="row">


    <?php
                         $query="SELECT * FROM `bird` ";
                         $user_result=mysqli_query($con,$query);
                         while($user_fetch=mysqli_fetch_assoc($user_result))
                           {   
                                  $id= $user_fetch['id'];
                                  $name=$user_fetch['name'];
                                  $price =$user_fetch['price'];
                                  $image= $user_fetch['image'];
                               echo '
                               <div class="pricing-column col-lg-6 col-md-6">
                               <div class="card">
                                 
                                    <div class="card-header">
                                       <h3>'.$name.'</h3>
                                     </div>
                                        <div class="card-body">
                                            <h2 class="price-text">₹'.$price.'</h2>
                                           <img src="images/'.$image.'" alt="" style="padding: 30px;width:700 px;height:400px;">
                                            <form action="mgcart.php" method="post">
                                           <input type="hidden" name="petname" value="'.$name.'">
                                            <input type="hidden" name="price"   value="'.$price.'">
                                            <input type="submit" name="pets" value="Add to cart"> 
                                           </form>
                                        </div>
                                 </div>
                             </div>
                               
                               
                               ';
                            }
                    ?>
      

    </div>
  
    <!-- Others like hamster mouse fish etc -->
    <h1>Other</h1>

    
    <div class="row">


    <?php
                         $query="SELECT * FROM `other` ";
                         $user_result=mysqli_query($con,$query);
                         while($user_fetch=mysqli_fetch_assoc($user_result))
                           {   
                                  $id= $user_fetch['id'];
                                  $name=$user_fetch['name'];
                                  $price =$user_fetch['price'];
                                  $image= $user_fetch['image'];
                               echo '
                               <div class="pricing-column col-lg-6 col-md-6">
                               <div class="card">
                                 
                                    <div class="card-header">
                                       <h3>'.$name.'</h3>
                                     </div>
                                        <div class="card-body">
                                            <h2 class="price-text">₹'.$price.'</h2>
                                           <img src="images/'.$image.'" alt="" style="padding: 30px;width:700 px;height:400px;">
                                            <form action="mgcart.php" method="post">
                                           <input type="hidden" name="petname" value="'.$name.'">
                                            <input type="hidden" name="price"   value="'.$price.'">
                                            <input type="submit" name="pets" value="Add to cart"> 
                                           </form>
                                        </div>
                                 </div>
                             </div>
                               
                               
                               ';
                            }
                    ?>
      

    </div>
  


  </section>


 <!-- Reviews -->

 <section class="colored-section" id="testimonials">

<div id="testimonial-carousel" class="carousel slide" data-ride="false">
  <div class="carousel-inner">
    <div class="carousel-item active container-fluid">
      <h2 class="testimonial-text">Got my dog at a great price.</h2>
      <img class="testimonial-image" src="images/dog-img.jpg" alt="dog-profile">
      <em>Pebbles, Lucknow</em>
    </div>
    <div class="carousel-item container-fluid">
      <h2 class="testimonial-text">My dog used to be so lonely, now i have found a freind for him at your site and get get along quite well.I think?</h2>
      <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
      <em>Beverly, Delhi</em>
    </div>
  </div>
  <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
<span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>


<!-- Categories -->

 <section class="white-section" id="pricing">

<h2 class="section-heading">A Plan for your need.</h2>
<p>Simple and affordable price plans for you.</p>

<div class="row">

  <div class="pricing-column col-lg-3 col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>Dogs</h3>
      </div>
      <div class="card-body">
        <h2 class="price-text">Starting at ₹2000</h2>
       <img src="images/2dog.jpeg" alt="" style="padding: 30px;width:300 px;height:200px;">
      <a href="buy.php">  <button class="btn btn-lg btn-block btn-outline-dark" type="button">More</button></a>
      </div>
    </div>
  </div>

  <div class="pricing-column col-lg-3 col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>Cats</h3>
      </div>
      <div class="card-body">
        <h2 class="price-text">Starting at ₹1000</h2>
        <img src="images/1cat.jpeg" alt="" style="padding: 30px;width:300 px;height:200px;">
        <a href="buy.php">  <button class="btn btn-lg btn-block btn-outline-dark" type="button">More</button></a>
      </div>
    </div>
  </div>

  <div class="pricing-column col-lg-3">
    <div class="card">
      <div class="card-header">
        <h3>Birds</h3>
      </div>
      <div class="card-body">
        <h2 class="price-text">Starting at ₹200</h2>
        <img src="images/1bird.jpeg" alt="" style="padding: 30px;width:300 px;height:200px;">
        <a href="buy.php">  <button class="btn btn-lg btn-block btn-outline-dark" type="button">More</button></a>

      </div>
    </div>
  </div>
  
  <div class="pricing-column col-lg-3">
    <div class="card">
      <div class="card-header">
        <h3>others</h3>
      </div>
      <div class="card-body">
        <h2 class="price-text">Starting at ₹500</h2>
        <img src="images/1other.png" alt="" style="padding: 30px;width:300 px;height:200px;">
        <a href="buy.php">  <button class="btn btn-lg btn-block btn-outline-dark" type="button">More</button></a>

      </div>
    </div>
  </div>



</div>

</section>


  
  <!-- Call to Action -->

  <section class="colored-section" >

    <div class="container-fluid">

      <h3 class="big-heading">Find the True Loving Freind of Your Life, Today.</h3>
     
    </div>
  </section>

  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <p>Contact +91424847294</p>
      <p>Address p-21 xyz,New Delhi</p>
      <p>Email at petstore123@gmail.com</p>
     <a href="www.facebook.com"> <i class="social-icon fab fa-facebook-f" ></i></a>
     <a href="www.twitter.com"> <i class="social-icon fab fa-twitter"></i></a>
      <a href="www.instagram.com"></a> <i class="social-icon fab fa-instagram" ></i></a>
      <a href="www.gmail.com"><i class="social-icon fas fa-envelope" > </i></a>
      <p>© Copyright 2020 PetStore</p>
    </div>
  </footer>


</body>

</html>
