<?php 
    if(isset($_GET['delete_category'])) {
        $delete_category = $_GET['delete_category'];
        $delete_query = "DELETE FROM `categories` WHERE category_id = $delete_category";
        $result = mysqli_query($con, $delete_category);
        if($result) {
            echo "<script>alert('Category deleted successfully')</script>";
            echo "<script>window.open('./index.php?view_categories', '_self')</script>";
        } else {
            echo "<script>alert('Error deleting category')</script>";
        }
    }
        ?>