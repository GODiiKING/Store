<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products</title>
</head>
<body>
    <h3 class="text-center text-success">All products</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_products = "SELECT * FROM `products`";
            $result = mysqli_query($con, $get_products);
            while ($row = mysqli_fetch_assoc($result)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $total_sold = $row['total_sold'];
                $status = $row['status'];

                echo "<tr>
                    <td>$product_id</td>
                    <td>$product_title</td>
                    <td><img src='../images/$product_image' class='admin_image'></td>
                    <td>$product_price</td>
                    <td>$total_sold</td>
                    <td>$status</td>
                </tr>";
            }
            ?>
        </tbody>

    </table>
</body>
</html>