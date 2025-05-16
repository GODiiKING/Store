<!-- connect to file -->
<?php 
include('includes/connect.php');
session_start();
if(!isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    // echo $order_id;
    $select_data = "SELECT * FROM `user_orders` WHERE order_id='$order_id'";
    $result = mysqli_query($con, $select_data);
    $row_fetch = mysqli_fetch_assoc($result_data);
    $invoice_number = $row_fetch['invoice_number'];
    $amount_due = $row_fetch['amount_due'];
}

if(isset($_POST['confirm_payment'])) {
    $invoice_number = $_POST['invoice_number'];
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];

    $insert_query = "INSERT INTO `user_payments` (order_id, amount, payment_mode, invoice_number) VALUES ('$order_id', '$amount', '$payment_mode', '$invoice_number')";
    $result_query = mysqli_query($con, $insert_query);

    if($result_query) {
        echo "<h3 class='text-center text-light'>Payment successful</h3>";
        echo "<script>window.open('profile.php?my_orders','_self')</scrip>";
    }
    $update_orders = "UPDATE `user_orders` SET order_status='Complete' WHERE order_id='$order_id'";
    $result_orders = mysqli_query($con, $update_orders);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <h1 class="text-center text-light">Confirm Payment</h1>
    <div class="container my-5">
        <form action="" method="post">
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number; ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <label for="amount" class="text-light">Amount</label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount_due; ?>">
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option>Select Payment Mode</option>
                    <option>UPI</option>
                    <option>Netbanking</option>
                    <option>Paypal</option>
                    <option>Cash on Delivery</option>
                    <option>Payoffline</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center w-50 m-auto">
                <input type="submit" class="bg-info py-2 px-3 border-0" name="confirm_payment" value="Confirm">
            </div>
        </form>
    </div>
</body>
</html>