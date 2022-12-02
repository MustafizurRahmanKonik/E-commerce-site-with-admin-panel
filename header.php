<?php 
session_start();

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

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    </head>
    <body>
        
    
        <section id="header">
            <div class="logo"><a href="#"><img src="image/logo.jpg" class="logo" alt=""></a> </div>
            
            <div>
                <ul id="navigationbar" type="none">
                    <li><a  href="index.html">Home</a></li>
                    <li><a class="underline" href="shop.php">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html"><i class="fa-solid fa-shop"></i></a></li>
                    
                    <div>
                        <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count= count($_SESSION['cart']);
                        }
                        ?>
                        <a href="mycart.php" class="btn btn-outline-success">My Cart(<?php echo $count; ?>)</a>
                    </div>
                </ul>
            </div>
        </section>
    </body>
</html>