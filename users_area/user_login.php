<!-- connect to file -->
<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - Login</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body{
            overflow-x: hidden;
        }
    </style>

</head>
<body style="background-color: #212529;">
    <div class="container-fluid my-3">
    <a href="../index.php" class="btn btn-secondary d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 0; margin: 10px; font-size: 24px;">&#8592;</a>
        <h2 class="text-center text-white">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">

                <form action="" method="post">
                    <!-- username field -->
                    <div class="form-outline mb-4 text-white">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>     
                    </div>

                    <!-- password field -->
                    <div class="form-outline mb-4 text-white">
                    <label for="user_password" class="form-label">Password</label>
                                <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/> 
                                </div>

                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="btn-info py-2 px-3 border-0" name="user_login"/>
                        <p class="small fw-bold mt-2 pt-1 mb-0 text-white">Don't have an account? <a href="user_registration.php" class="text-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $user_ip_address = getIPAddress();

    // cart item
    $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
    $select_cart = mysqli_query($con, $select_query_cart);
    $row_count_cart = mysqli_num_rows($select_cart);
    if($row_count > 0){
        $_SESSION['username']=$user_username; 
        if(password_verify($user_password, $row_data['user_password'])){
            // echo "<script>alert('Login successful')</script>";
            if($row_count_cart == 0){
                $_SESSION['username']=$user_username; 
                    echo "<script>alert('Login successful')</script>";
                    echo "<script>window.open('profile.php','_self')</script>";
                }else{
                    $_SESSION['username']=$user_username; 
                    echo "<script>alert('Login successful')</script>";
                    echo "<script>window.open('payment.php','_self')</script>";
                }
        }else{
            echo "<script>alert('Invalid credentials')</script>";
        } 
    }else{
            echo "<script>alert('Invalid credentials')</script>";
        }
}
?>