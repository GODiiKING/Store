<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List payments</title>
</head>
<body>
<h3 class="text-center text-success">All payments</h3>
<table class="table table-bordered mpayments

    <?php 
    $get_payments = "SELECT * FROM `user_payments`";
    $result = mysqli_query($con, $get_payments);
    $row_count = mysqli_num_rows($result);
    

    if($row_count == 0) {
        echo "<h2 class='text-center text-danger mt-5'>No payments received yet</h2>";
    } else {
        echo "<tr>
            <th>S1 no</th>
            <th>Invoice Number</th>
            <th>Amount</th>
            <th>Payment mode</th>
            <th>Order date</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class='bg-secondary text-light'>";
        $number = 0;
        while($row_data = mysqli_fetch_assoc($result)) {
            $order_id = $row_data['order_id'];
            $payment_id = $row_data['payment_id'];
            $amount = $row_data['amount'];
            $invoice_number = $row_data['invoice_number'];
            $payment_mode = $row_data['payment_mode'];
            $date = $row_data['date'];
            $number++;
            
            echo "<tr class='text-center'>
                    <td>$number</td>
                    <td>$invoice_number</td>
                    <td>$amount/td>
                    <td>$payment_mode</td>
                    <td>$date</td>
                    <td>
                    <a href=''class='text-light'><i class='fa-solid fa-trash'></i></a>
                </td></tr>";
        }
    }
        ?>

        
       
    </tbody>
</table>
</body>
</html>