<!-- connect to file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
echo "<script>window.open('https://www.paypal.com','_self')</script>";

if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}

// getting total items and total price of all items
$get_ip_add=getIPAddress();
$total_price=0;
$cart_query_price="SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
$result_cart_price=mysqli_query($con,$cart_query_price);
$count_products=mysqli_num_rows($result_cart_price);
while($row_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$row_price['product_id'];
    $select_products="SELECT * FROM `products` WHERE product_id='$product_id'";
    $run_price=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
    }
}
?>