<?php
if(isset($_GET['edit_category'])) {
    $edit_category = $_GET['edit_category'];
    $get_categories = "SELECT * FROM `categories` WHERE category_id = $edit_category";
    $result = mysqli_query($con, $get_categories);
    $row = mysqli_fetch_assoc($result);
    $category_title = $row['category_title'];
}
if(isset($_POST['edit_cat'])) {
    $cat_title = $_POST['category_title'];
    $update_query = "UPDATE `categories` SET category_title = '$cat_title' WHERE category_id = $edit_category";
    $result_cat = mysqli_query($con, $update_query);
    if($result_cat) {
        echo "<script>alert('Category updated successfully')</script>";
        echo "<script>window.open('./index.php?view_categories', '_self')</script>";
    } else {
        echo "<script>alert('Error updating category')</script>";
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
                <label for="category_title" class="form-label">Category Title</label>
                <input type="text" value="<?php echo $category_title ?>" name="category_title" id="category_title" class="form-control" required="required">
            </div>
            <div class="text-center">
                <input type="submit" name="edit_cat" value="Update Category" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
</body>
</html>