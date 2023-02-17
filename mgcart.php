<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['pets']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'petname');
            if(in_array($_POST['petname'],$myitems))
            {
                echo"   
                    <script>
                            alert('Already added to cart');
                            window.location.href='buy.php';
                        </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('petname'=>$_POST['petname'],'price'=>$_POST['price'],'quantity'=>1);
             echo"   
                 <script>
                      alert(' Added to cart');
                 window.location.href='buy.php';
                </script>";
            }

        }
        else
        {
            $_SESSION['cart'][0]=array('petname'=>$_POST['petname'],'price'=>$_POST['price'],'quantity'=>1);
            echo"   
                <script>
                    alert(' Added to cart');
                    window.location.href='buy.php';
                </script>";
        }
    
    
    }
    if(isset($_POST['removepet']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['petname']==$_POST['petname'])
            {

              unset($_SESSION['cart'] [$key]);
             $_SESSION['cart']==array_values($_SESSION['cart']);
             echo "<script> 
                   alert('ITEM REMOVED'); 
                    window.location.href='cart.php';  
             </script>";
             }
         }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['petname']==$_POST['petname'])
            {
               $_SESSION['cart'][$key]['quantity']=$_POST['Mod_Quantity'];
              
             echo "<script> 
                 
                    window.location.href='cart.php';  
                  </script>";
             }
         }
    }
}

?>