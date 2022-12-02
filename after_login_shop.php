<?php 
include ("header.php");

?>
<!DOCTYPE html>

<html>
    <head>
        <title>E-commerce</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/all.min.css">
         <link rel="stylesheet" href="css/fontawesome.min.css">
         <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    
     
    </head>
    <body>
        
        
        <section id="page-header">
          
            
            <h2>Shopping</h2>
            <p>!!Save more with coupons & up to 70% off!!</p>
            
        </section>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <form action="managecart.php"  method="POST">
                    <div class="card">
                        <img src="img/products/f1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Shirt-1</h5>
                            <p class="card-text">Price: 450 tk</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Shirt 1">
                            <input type="hidden" name="Price" value="450">
                        </div>
                    </div>  
                    </form>
                </div>
                
                        <div class="col-lg-3">
                    <form action="managecart.php"  method="POST">
                    <div class="card">
                        <img src="img/products/f2.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Shirt-2</h5>
                            <p class="card-text">Price: 150 tk</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Shirt 2">
                            <input type="hidden" name="Price" value="150">
                            
                        </div>
                    </div>  
                    </form>
                </div>
                
                        <div class="col-lg-3">
                    <form action="managecart.php"  method="POST">
                    <div class="card">
                        <img src="img/products/f1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Shirt-3</h5>
                            <p class="card-text">Price: 250 tk</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Shirt 3">
                            <input type="hidden" name="Price" value="250">
                            
                        </div>
                    </div>  
                    </form>
                </div>
                        <div class="col-lg-3">
                            <form action="managecart.php" method="POST">
                    <div class="card">
                        <img src="img/products/f1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Shirt-4</h5>
                            <p class="card-text">Price: 350 tk</p>
                            <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to cart</button>
                            
                            <input type="hidden" name="Item_Name" value="Shirt 4">
                            <input type="hidden" name="Price" value="350">
                        </div>
                    </div>  
                    </form>
                </div>
                
                
                
                
            </div>
        </div>
    
      

        <section id="paging" class="section-p1"> 
            
           <a href="#">1</a>
           <a href="#">2</a>
           <a href="#"><i class="fa-solid fa-arrow-right"></i></a> 
        </section>

        <footer class="footer">
          <div class="colum1">
           <div class="logo"><img src="image/logo.jpg" class="logo" alt=""></div>
           <h4>Contact</h4>
           <p><b>Address: </b> Ashulia, Dhaka.</p>
           <p><b>Phone: </b> +8801799063771</p>
           <p><b>Hours: </b> 10:00 AM - 5:30 pm, Mon-Sat</p>
          <div class="follow">
             <h4>Follow Us</h4>
             <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
             </div>
          </div>
        </div> 
        <div class="colum1">
            <h4>About</h4>
           <a href="#">About Us</a>
           <a href="#">Delivery Information</a>
           <a href="#">Privacy Policy</a>
           <a href="#">Term & Condition</a>
           <a href="#">Contact Us</a>
        </div>

        <div class="colum1">
            <h4>My Account</h4>
           <a href="#">Sign In</a>
           <a href="#">View Cart</a>
           <a href="#">My Wishlist</a>
           <a href="#">Track My Order</a>
           <a href="#">Help</a>
        </div>
        <div class="install">
          <h4>Install App</h4>
          <p>From App store or Google Play</p>
          <div class="row">
           <img src="img/pay/app.jpg" alt="">
           <img src="img/pay/play.jpg" alt="">
          
          </div>
          <p>Secure Payment gateway</p>
          <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
         <p>
            @ 2022, Open Shop.Developed by Konik.
         </p>
        </div>

        </footer>

        

        <script src="js.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
