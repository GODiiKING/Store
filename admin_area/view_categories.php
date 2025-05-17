<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories</title>
</head>
<body>
<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class='text-center'>
            <th>S1no</th>
            <th>Category Title</th>
            <th>Total Products</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $select_cat = "SELECT * FROM `categories`";
        $result = mysqli_query($con, $select_cat);
        $number = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $category_id = $row['category_id'];
            $category_title = $row['category_title'];
            $number++;
            ?>
            <tr class='text-center'>
                <td><?php echo $number;?></td>
                <td><?php echo $category_title;?></td>
                <td>
                    <?php
                    $get_count = "SELECT * FROM `products` WHERE category_id = $category_id";
                    $result_count = mysqli_query($con, $get_count);
                    $rows_count = mysqli_num_rows($result_count);
                    echo $rows_count;
                    ?>
                </td>
                <td>
                    <a href='index.php?edit_category=<?php echo $category_id;?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a>
                </td>
                <td>
                    <a href='index.php?delete_category=<?php echo $category_id;?>' class='text-light'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>