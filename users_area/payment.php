<!-- connect to file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Payment</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<style>
    .payment_img {
        width: 90%
        margin: auto;
        display: block;
    }
</style>
<body style="background-color: #212529;">
<!-- php code to access user id -->
<?php 
$user_ip = getIPAddress();
$get_user = "SELECT * FROM `user_table` WHERE user_ip='$user_ip'";
$result = mysqli_query($con, $get_user);

// Check if the query returned any results
if ($result && mysqli_num_rows($result) > 0) {
    $run_query = mysqli_fetch_array($result);
    $user_id = $run_query['user_id'];
} else {
    // Handle the case where no user is found
    $user_id = null;
    echo "<h3 class='text-center text-danger'>User not found. Please log in.</h3>";
}
?>
    <div class="container">
    <h2 class="text-center text-light">Payment options</h2>
    <div class="row d-flex justify-content-center align-items-center my-5">
        <div class="col-md-6">
            <a href="https://www.paypal.com" target="_blank"><img src="../images/logo.png" alt="" class="payment_img"></a>
        </div>
        <div class="col-md-6">
            <a href="order.php?$user_id=<?php echo $user_id ?>" class="text-decoration-none"><h2 class="text-center">Pay offline</h2></a>
        </div>
    </div>
</div>
</body>
</html>