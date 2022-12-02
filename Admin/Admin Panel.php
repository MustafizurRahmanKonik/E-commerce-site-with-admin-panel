<?php
require ("connectionadmin.php");
session_start();
session_regenerate_id(true); # protibar refresh korar pore new id make hoi jeno hacking thke bache
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Panel</title>
    <style>
        body{
            margin=0;

        }
div.header{
    color: #f0f0f0;
    font-family: poppins;
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 0 60px;
    background-color: black;
}

div.header button{
    background-color: white;
    font-size: 16px;
    font-weight: 550;
    padding: 8px 12px;
    border: 2px solid black;
    border-radius: 6px;
}

    </style>
</head>
<body>
    <div class="header">
        <h2>ADMIN PANEL- <?php echo htmlspecialchars($_SESSION['AdminLoginId']) ?> </h2>
      
        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">

        <button type="submit" name="Logout">LOG OUT</button>

         </form>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                 <table class="table text-center table-dark"> 
                    <thead>
                        <tr>
                         <th scope="col">Order ID</th>   
                         <th scope="col">Customer Name</th>   
                         <th scope="col">Phone No</th>   
                         <th scope="col">Address</th>   
                         <th scope="col">Pay Mode</th> 
                         <th scope="col">Orders</th>   
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query="SELECT * FROM order_manager ";
                        $user_result= mysqli_query($con,$query);
                        while($user_fetch=mysqli_fetch_assoc($user_result))
                        {
                            echo"
                        <tr>
                            <td>$user_fetch[Order_Id]</td>
                            <td>$user_fetch[Full_Name]</td>
                            <td>$user_fetch[Phone_No]</td>
                            <td>$user_fetch[Address]</td>
                            <td>$user_fetch[Pay_Mode]</td>
                            <td>

                            <table class='table text-center table-dark'> 
                            <thead>
                                <tr>
                                 <th scope='col'>Item Name</th>   
                                 <th scope='col'>Price</th>   
                                 <th scope='col'>Quantity</th>   
                                
                                </tr>
                            </thead>
        
                            <tbody>
                            ";

                            $order_query="SELECT * FROM user_orders WHERE Order_Id='$user_fetch[Order_Id]'";
                            $order_result=mysqli_query($con,$order_query);
                            while($order_fetch=mysqli_fetch_assoc($order_result))
                            {
                              echo"
                                 <tr>
                                 <td>$order_fetch[Item_Name]</td>
                                 <td>$order_fetch[Price]</td>
                                  <td>$order_fetch[Quantity]</td>
                                
                                 </tr>
                              ";  
                            }
                            echo "
                            </tbody>
                            </table>
                            </td>
                        </tr>

                        ";
                        }
                        ?>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['Logout']))
{
    session_destroy();
    echo "<script> window.location.href='Admin Login.php';</script>";
}

?>

</body>
</html>
