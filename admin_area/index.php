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
    <title>Admin Dashboard</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom CSS -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image {
    width: 100px;
    object-fit: contain;
        }

    .footer {
    position: absolute;
    bottom: 0;
}
body {
    overflow-x: hidden;
}
.product_img {
    width: 100px;
    object-fit: contain;
}
    </style>
</head>
<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expend-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">

                <nav class="navbar navbar-expend-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

    <!-- third child -->
     <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/logo.png" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            

            <div class="button text-center">
                <a href="insert_product.php" class="btn btn-info text-light my-3">Insert Products</a>
                <a href="index.php?view_products" class="btn btn-info text-light my-3">View Products</a>
                <a href="index.php?insert_category" class="btn btn-info text-light my-3">Insert Categories</a>
                <a href="index.php?view_categories" class="btn btn-info text-light my-3">View Categories</a>
                <a href="index.php?insert_brand" class="btn btn-info text-light my-3">Insert Brands</a>
                <a href="index.php?view_brands" class="btn btn-info text-light my-3">View Brands</a>
                <a href="#" class="btn btn-info text-light my-3">All Orders</a>
                <a href="#" class="btn btn-info text-light my-3">All Payments</a>
                <a href="#" class="btn btn-info text-light my-3">List Users</a>
                <a href="#" class="btn btn-info text-light my-3">Logout</a>
            </div>
        </div>
     </div>


    <!-- fourth child -->
     <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
        if(isset($_GET['edit_products'])){
            include('edit_products.php');
        }
        if(isset($_GET['delete_products'])){
            include('delete_product.php');
        }
        if(isset($_GET['view_categories'])){
            include('view_categories.php');
        }
        if(isset($_GET['view_brands'])){
            include('view_brands.php');
        }
        if(isset($_GET['edit_category'])){
            include('edit_categories.php');
        }
        if(isset($_GET['edit_brands'])){
            include('edit_brands.php');
        }
        if(isset($_GET['delete_category'])){
            include('delete_category.php');
        }
        if(isset($_GET['delete_brands'])){
            include('delete_brands.php');
        }
        
        ?>
     </div>

     <!-- last child -->
     <!-- <div class="bg-info p-3 text-center footer">
            <p>All rights reserved ©- Designed by Dinesh van Putten</p>
         </div> -->
         <?php  
          include('../includes/footer.php');
          ?>
    </div>



        




<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>