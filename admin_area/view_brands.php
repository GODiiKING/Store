<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Brands</title>
</head>
<body>
<h3 class="text-center text-success">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class='text-center'>
            <th>S1no</th>
            <th>Brand Title</th>
            <th>Total Products</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $select_cat = "SELECT * FROM `brands`";
        $result = mysqli_query($con, $select_cat);
        $number = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $brand_id = $row['brand_id'];
            $brand_title = $row['brand_title'];
            $number++;
            ?>

            <tr class='text-center'>
                <td><?php echo $number;?></td>
                <td><?php echo $brand_title;?></td>
                <td>
                    <?php
                    $get_count = "SELECT * FROM `products` WHERE category_id = $category_id";
                    $result_count = mysqli_query($con, $get_count);
                    $rows_count = mysqli_num_rows($result_count);
                    echo $rows_count;
                    ?>
                </td>
                <td>
                    <a href='index.php?edit_brands=<?php echo $brand_id;?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a>
                </td>
                <td>
                    <a href='index.php?delete_brands=<?php echo $brand_id;?>' type="button" class="text-light" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      </div>
      <div class="modal-body">
        <h4>Are you sure you want to delete this?</h4>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary"><a href='index.php?delete_brands=<?php echo $brand_id;?>' class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>

</body>
</html>