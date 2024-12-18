

<?php
include 'db_connection.php';

$order_id = $_POST['order_id'];
$employee_id = $_POST['employee_id'];
$store_id = $_POST['store_id'];
$distributor_id = $_POST['distributor_id'];
$invoice_number = $_POST['invoice_number'];
$invoice_date = $_POST['invoice_date'];
$created_by = $_POST['created_by'];
$order_date = $_POST['order_date'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$unit_price = $_POST['unit_price'];
$vat = $_POST['vat'];
$sub_total = $_POST['sub_total'];
$vat_amount = $_POST['vat_amount'];
$total = $_POST['total'];

// Bắt đầu giao dịch
$conn->begin_transaction();

try {
    // Lưu đơn hàng vào bảng purchase_orders
    $sql_order = "INSERT INTO purchase_orders (order_id, employee_id, store_id, distributor_id, invoice_number, invoice_date, created_by, order_date, total)
                     VALUES ('$order_id', '$employee_id', '$store_id', '$distributor_id', '$invoice_number', '$invoice_date', '$created_by', '$order_date', '$total')";
                
    if ($conn->query($sql_order) === TRUE) {
        $order_id = $conn->insert_id;

        // Lưu chi tiết đơn hàng vào bảng purchase_order_details
        $sql_order_details = "INSERT INTO purchase_order_details (order_id, product_id, quantity, unit_price, vat, sub_total, vat_amount, total) 
                              VALUES ('$order_id', '$product_id', '$quantity', '$unit_price', '$vat', '$sub_total', '$vat_amount', '$total')";
        if ($conn->query($sql_order_details) === TRUE) {
            // Commit giao dịch
            $conn->commit();
            header("Location: xemphieu.php?order_id=" . $order_id);
            exit();
        } else {
            error_log("Lỗi: " . $sql_order_details . "<br>" . $conn->error);
            throw new Exception("Lỗi: " . $sql_order_details . "<br>" . $conn->error);
        }
    } else {
        error_log("Lỗi: " . $sql_order . "<br>" . $conn->error);
        throw new Exception("Lỗi: " . $sql_order . "<br>" . $conn->error);
    }
} catch (Exception $e) {
    // Rollback giao dịch nếu có lỗi
    $conn->rollback();
    echo $e->getMessage();
}

$conn->close();
?>


