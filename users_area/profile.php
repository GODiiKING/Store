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
    <title>Welcome <?php echo $_SESSION['username']?>"</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <style>
        body{
            overflow-x: hidden;
        }

        .profile_img {
    width: 90%;
    margin: auto;
    display: block;
    /* height: 100%; */
    object-fit: contain;
    }
    .edit_image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    }
    </style>
    
</head>
<body style="background-color:rgb(39, 9, 58);"> <!-- #212529 -->
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <img src="../images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="../display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="profile.php">My Account</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="../cart.php"><i class="fa-solid fa-cart-shopping"><sup><?php cart_item(); ?></sup></i></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="#">Total Price:<?php total_cart_price(); ?></a>
        </li>
      </ul>
      <form class="d-flex" action="../search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
         <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart()
?>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav me-auto">
    <?php 
    if(!isset($_SESSION['username'])){
      echo " </li class='nav-item'>
    <a class='nav-link text-light' href='#'>Welcome Guest</a>
    </li>";
  }else{
      echo " <li class='nav-item'>
      <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
      </li>";
  }
    if(!isset($_SESSION['username'])){
        echo " <li class='nav-item'>
        <a class='nav-link text-light' href='./users_area/user_logout.php'>Login</a>
        </li>";
    }else{
        echo " <li class='nav-item'>
        <a class='nav-link text-light' href='./users_area/user_login.php'>Logout</a>
        </li>";
    }
    ?>
    </ul>

</nav>

<!-- third child -->
<div class="bg-dark">
    <h3 class="text-center text-light">Anime Store</h3>
    <p class="text-center text-light">Unleash the Otaku Within!</p>
</div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-2">
        <ul class="navbar-nav bg-dark text-center" style="height: 100vh;">
        <li class="nav-item bg-dark">
          <a class="nav-link text-light" href="#"><h4>Your profile</h4></a>
        </li>
        <li class="nav-item">
          <img src="../images/logo.png" class="profile_img my-4" alt="">
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pending orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Edit Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">My orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Delete Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Logout</a>
        </li>
        
        </ul>
    </div>
    <div class="col-md-10 text-center">
        <?php get_user_order_details();
        if(isset($_GET['edit_account'])){
            include('edit_account.php');
        }
        if(isset($_GET['my_orders'])){
            include('user_orders.php');
      }
      if(isset($_GET['delete_account'])){
        include('delete_account.php');
  }
        ?>
    </div>
</div> 


        <!-- last child -->
         <!-- footer -->
          <?php  
          include('../includes/footer.php');
          ?>
    </div>

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>