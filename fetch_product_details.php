<?php
include 'db_connection.php';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql_product = "SELECT unit_price, vat FROM products WHERE id = $product_id";
    $result_product = $conn->query($sql_product);

    if ($result_product->num_rows > 0) {
        $product = $result_product->fetch_assoc();
        echo json_encode($product);
    } else {
        echo json_encode([]);
    }
}
?>
