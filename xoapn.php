<?php
include 'db_connection.php';

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Xóa các chi tiết đơn hàng trước
    $sql_delete_details = "DELETE FROM purchase_order_details WHERE order_id = $order_id";
    if ($conn->query($sql_delete_details) === TRUE) {
        // Sau đó xóa đơn hàng
        $sql_delete_order = "DELETE FROM purchase_orders WHERE id = $order_id";
        if ($conn->query($sql_delete_order) === TRUE) {
            echo "<script>alert('Xóa phiếu nhập thành công'); window.location.href='dsphieu.php';</script>";
        } else {
            echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
    }
} else {
    echo "<div class='alert alert-warning'>Không có ID phiếu nhập.</div>";
}

$conn->close();
?>
