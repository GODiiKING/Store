<!-- connect to file -->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Cart details</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
      .cart_img {
    width: 80px;
    height: 80px;
    object-fit: contain;
}
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./users_area/user.registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup><?php cart_item(); ?></sup></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart()
?>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <?php 
      if(!isset($_SESSION['username'])){
        echo " </li class='nav-item'>
      <a class='nav-link' href='#'>Welcome Guest</a>
      </li>";
    }else{
        echo " <li class='nav-item'>
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
        </li>
        ";
    }
    if(!isset($_SESSION['username'])){
      echo "<li class='nav-item'>
      <a class='nav-link' href='./users_area/user_login.php'>Login</a>
      </li>";
  }else{  
      echo "<li class='nav-item'>
      <a class='nav-link' href='./users_area/user_logout.php'>Logout</a>
      </li>";
  }
      ?>
    </li class="nav-item">
    <a class="nav-link" href="./users_area/user.login.php">Login</a>
    </li>
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>





        <!-- fourth child -->
        <div class="container">
            <div class="row">
              <form action="" method="post">
                <table class="table table-bordered text-center">
                    
                      <!-- php code to display dynamic data -->
                       <?php 

                       $get_ip_add=getIPAddress();
                       $total_price=0;
                       $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                       $result_query=mysqli_query($con, $cart_query);
                       $result_count=mysqli_num_rows($result_query); // ?
                        if($result_count>0){
                          echo "<thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan='2'>Operations</th>
                        </tr>
                    </thead>
                    <tbody>";
                    
                       while($row=mysqli_fetch_array($result_query)){
                         $product_id=$row['product_id'];
                         $select_products="Select * from `products` where product_id='$product_id'";
                         $result_products=mysqli_query($con, $select_products);
                         while($row_product_price=mysqli_fetch_array($result_products)){
                           $product_price=array($row_product_price['product_price']); 
                           $price_table=$row_product_price['product_price'];
                           $product_title=$row_product_price['product_title'];
                           $product_image1=$row_product_price['product_image1'];
                           $product_values=array_sum($product_price); //[200]
                           $total_price+=$product_values; //[200]
                         
                       ?>
                        <tr>
                            <td><?php echo $product_title ?></td>
                            <td><img src="./admin_area/product_images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
                            <td><input type="text" name="qty" id="" class="form-input w-50"></td>
                            <?php  
                            $get_ip_add=getIPAddress();
                            if(isset($_POST['update_cart'])){
                              $quantities=$_POST['qty'];
                              $update_cart="update `cart_details` set quantity='$quantities' where ip_address='$get_ip_add'";
                              $result_products_quantity=mysqli_query($con, $update_cart);
                              $total_price=$total_price*$quantities;
                            }
                            ?>
                            <td><?php echo $price_table ?>/-</td>
                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id  ?>"></td>
                            <td>
                              <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Update</button> -->
                               <input type="submit" value="Update Cart" name="update_cart" class="bg-info px-3 py-2 border-0 mx-3">
                              <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
                              <input type="submit" value="Remove Cart" name="remove_cart" class="bg-info px-3 py-2 border-0 mx-3">
                            </td>

                        </tr>

                        <?php 
                        }}} 

                        else{
                          echo "<h2 class='text-center text-danger'>Your cart is empty</h2>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- subtotal -->
                 <div class="d-flex mb-5">
                        <?php 
                        $get_ip_add=getIPAddress();
                        $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                        $result_query=mysqli_query($con, $cart_query);
                        $result_count=mysqli_num_rows($result_query); // ?
                         if($result_count>0){
                          echo " <h4 class='px-3'>Subtotal:<strong class='text-info'>< $total_price /-</strong></h4>
                          <input type='submit' value= 'Continue Shopping' name='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'>
                          <button class='bg-secondary p-3 py-2 border-0'><a href='checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";
                         } else{
                          echo "<input type='submit' value= 'Continue Shopping' name='continue shopping' class='bg-info px-3 py-2 border-0 mx-3'>";
                          }
                          if (isset($_POST['continue_shopping'])){
                            echo "<script>window.open('index.php','_self')</script>";
                          }
                          ?>

                    
                 </div>
            </div>
        </div>
        </form>
        <!-- function to remove item from cart -->
        <?php 
        function remove_cart_item(){
          global $con;
          if(isset($_POST['remove_cart'])){
            foreach($_POST['removeitem'] as $remove_id){
              echo $remove_id;
              $delete_query="Delete from `cart_details` where product_id='$remove_id'";
              $run_delete=mysqli_query($con, $delete_query);
              if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
              }
            }
          }
        }
        echo $remove_item=remove_cart_item();
        ?>



         <!-- footer -->
          <?php  
          include('./includes/footer.php');
          ?>
    </div>

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>