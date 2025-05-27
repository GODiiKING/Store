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
    <title>Store</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
.card img {
    width: 100%; /* Adjust width to fit the card */
    height: auto; /* Maintain aspect ratio */
    max-height: 200px; /* Set a slightly larger maximum height */
    object-fit: contain; /* Ensure the entire image fits within the card */
}
    </style>
</head>
<body style="background-color: #212529;">
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="./users_area/user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Total Price:<?php total_cart_price(); ?></a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
         <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav me-auto">
    <?php 
      if(!isset($_SESSION['username'])){
        echo " </li class='nav-item'>
      <a class='nav-link text-white' href='#'>Welcome Guest</a>
      </li>";
    }else{
        echo " <li class='nav-item'>
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
        </li>";
    }
    if(!isset($_SESSION['username'])){
        echo "<li class='nav-item'>
        <a class='nav-link text-white' href='./users_area/user_login.php'>Login</a>
        </li>";
    }else{  
        echo "<li class='nav-item'>
        <a class='nav-link' href='./users_area/user_logout.php'>Logout</a>
        </li>";
    }
      ?>
    <!-- </li class="nav-item">
    <a class="nav-link" href="./users_area/user_login.php">Login</a>
    </li> -->
    </ul>
</nav>

<!-- third child -->
<div class="bg-dark">
<h3 class="text-center text-white">Anime Store</h3>
<p class="text-center text-white">Unleash the Otaku Within!</p>
</div>



<!-- fourth child -->
<div class="row px-1">
    <div class="col-md-10">
      <!-- products -->
      <div class="row">
      <!-- fetching products -->
      <?php 
      // calling function
      getproducts();
      get_unique_categories();
      get_unique_brands();      
      ?>
<!-- row end -->
</div>
<!-- col end -->
</div>



<!-- col-md-2 -->
    <div class="col-md-2 bg-secondary p-0">
      <!-- sidenav -->
       <!-- brand to be displayed -->
       <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-dark">
          <a href="#" class="nav-link text-white"><h4>Delivery Brands</h4></a>
          <?php 
          getbrands()
          ?>
        </li>

        
       </ul>


        <!-- Categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-dark">
          <a href="#" class="nav-link text-white"><h4>Categories</h4></a>
        </li>

        <?php 
          getcategories()
          ?>
       </ul>

    </div>
</div>

        <!-- last child -->
         <!-- footer -->
         <?php  
          include('./includes/footer.php');
          ?>
    </div>

    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>