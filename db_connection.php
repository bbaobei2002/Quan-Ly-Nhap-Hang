


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlnh";

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



