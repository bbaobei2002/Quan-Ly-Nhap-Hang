<?php
include 'db_connection.php';

if (isset($_GET['distributor_id'])) {
    $distributor_id = intval($_GET['distributor_id']);

    $sql = "SELECT address, phone_number, bank_account_number 
            FROM distributors 
            WHERE distributor_id = $distributor_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}

$conn->close();
?>

