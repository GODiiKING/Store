<?php
if(isset($_GET['edit_brands'])) {
    $edit_brand = $_GET['edit_brands'];
    $get_brands = "SELECT * FROM `brands` WHERE brand_id = $edit_category";
    $result = mysqli_query($con, $get_categories);
    $row = mysqli_fetch_assoc($result);
    $brand_title = $row['brand_title'];
}
if(isset($_POST['edit_brand'])) {
    $brand_title = $_POST['brand_title'];
    $update_query = "UPDATE `brands` SET brand_title = '$brand_title' WHERE brand_id = $edit_brand";
    $result_brand = mysqli_query($con, $update_query);
    if($result_brand) {
        echo "<script>alert('Brand updated successfully')</script>";
        echo "<script>window.open('./index.php?view_brands', '_self')</script>";
    } else {
        echo "<script>alert('Error updating brand')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Categories</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Edit Category</h1>
        <form action="" method="post" class="text-center" enctype="multipart/form-data">
            <div class="form-outline w-50 m-auto mb-4">
                <label for="brand_title" class="form-label">Category Title</label>
                <input type="text" value="<?php $brand_title ?>" name="brand_title" id="brand_title" class="form-control" required="required">
            </div>
            <div class="text-center">
                <input type="submit" name="edit_brand" value="Update Brand" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
</body>
</html>