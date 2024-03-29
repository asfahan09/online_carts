<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "add_to_cart");

if (mysqli_connect_error()) {
    echo "<script> alert('Cannot connect to the database'); window.location.href='mycart.php'; </script>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES (?,?,?,?)";
        $stmt1 = mysqli_prepare($conn, $query1);

        if ($stmt1) {
            $full_name = $_POST['Full_name'];
            $phone_no = $_POST['Phone_No'];
            $address = $_POST['Address'];
            $cod = $_POST['COD'];

            mysqli_stmt_bind_param($stmt1, "ssss", $full_name, $phone_no, $address, $cod);
            if (mysqli_stmt_execute($stmt1)) {
                $order_id = mysqli_insert_id($conn);
                $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                foreach ($_SESSION['cart'] as $key => $values) {
                    $item_name = $values['Item_Name'];
                    $price = $values['Price'];
                    $quantity = $values['Quantity'];

                    
                    $stmt2 = mysqli_prepare($conn, $query2);

                    if ($stmt2) {
                        mysqli_stmt_bind_param($stmt2, "isii", $order_id, $item_name, $price, $quantity);
                        if (mysqli_stmt_execute($stmt2)) {
                            unset($_SESSION['cart']);
                            echo "<script> alert('Order Placed'); window.location.href='index.php'; </script>";
                        } else {
                            echo "<script> alert('SQL Error'); window.location.href='mycart.php'; </script>";
                        }
                    } else {
                        echo "<script> alert('SQL Query Prepare Error'); window.location.href='mycart.php'; </script>";
                    }
                }
            } else {
                echo "<script> alert('SQL Error'); window.location.href='mycart.php'; </script>";
            }
        } else {
            echo "<script> alert('SQL Query Prepare Error'); window.location.href='mycart.php'; </script>";
        }
    }
}
?>
