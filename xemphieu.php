<!DOCTYPE html>
<html>
<head>
<title>Quản lý nhập hàng</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="./images/a1.png" type="image/x-icon/">
  <link href="hp.css" rel='stylesheet' type='text/css' />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body,h2,h3 {font-family: serif}
</style>
</head>
<body class="body " style="max-width:1600px; background-color: lemonchiffon;">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3; width:270px; background-color: skyblue;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="./images/iconnn.png" style="width:120%;" class="w3-round"><br><br>
  </div>
  <div class="w3-bar-block" style="font-family: Raleway;">
     <a href="hpage.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i><strong>QUẢN LÝ NHẬP HÀNG</strong></a> 
    <a href="dsnpp.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i><strong>Nhà phân phối</strong></a> 
    <a href="dsch.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-shopping-cart fa-fw w3-margin-right"></i><strong>Cửa hàng</strong></a>
    <a href="dsnv.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw w3-margin-right"></i><strong>Nhân viên</strong></a>
    <a href=" dsmh.php " onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-modx fa-fw w3-margin-right"></i><strong>Các mặt hàng</strong></a>
    <a href=" dsphieu.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-o fa-fw w3-margin-right"></i><strong>Phiếu nhập hàng</strong></a>
    <a href="tke.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pie-chart fa-fw w3-margin-right"></i><strong>Thống kê</strong></a>
   <a href="login.php" onclick="close()" style="color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-in fa-fw w3-margin-right"></i><strong>Đăng xuất</strong></a>
  </div>
  <!-- <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
  </div> -->
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
 <div class="w3-main" style="margin-top: -15px; margin-left:320px">
   <header id="qlnpp">
 <div class="w3-section w3-yellow w3-padding-10"> <!-- thanh ngang -->
    <div class="w3-container" style="margin-left: 400px">
    
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>

<body>
    <a href="whatever.htm" onClick="window.print();return false" style="margin-left: 1100px; margin-top: -70px; margin-bottom:-65px; font-size: 20px;"><strong>In phiếu</a></strong>
    <!-- <a href="whatever.htm" onClick="window.print();return false">Print</a> -->
 <div class="container">
        <h2 class="w3-center" style="font-size: 25pt; margin-top: -70px; margin-bottom:-65px; font-family: Raleway;" id="lienhe"><strong>PHIẾU NHẬP HÀNG</h2></strong>

<?php
include 'db_connection.php';

$order_id = $_GET['order_id'];

// Truy vấn thông tin đơn hàng
$sql_order = "SELECT po.*, e.full_name AS created_by_name, s.store_name, 
              d.distributor_name, d.address AS distributor_address, d.phone_number AS distributor_phone_number, d.bank_account_number AS distributor_bank_account_number
              FROM purchase_orders po
              INNER JOIN employees e ON po.created_by = e.employee_id
              INNER JOIN stores s ON po.store_id = s.store_id
              INNER JOIN distributors d ON po.distributor_id = d.distributor_id
              WHERE po.id = $order_id";
$result_order = $conn->query($sql_order);

if ($result_order === FALSE) {
    echo "Lỗi: " . $conn->error;
    exit();
}

if ($result_order->num_rows > 0) {
    $order = $result_order->fetch_assoc();

    // Truy vấn chi tiết đơn hàng
    $sql_order_details = "SELECT pod.*, p.pdname 
                          FROM purchase_order_details pod 
                          JOIN products p ON pod.product_id = p.id 
                          WHERE pod.order_id = $order_id";
    $result_order_details = $conn->query($sql_order_details);

    if ($result_order_details === FALSE) {
        echo "Lỗi: " . $conn->error;
        exit();
    }

    if ($result_order_details->num_rows > 0) {
       
        echo "<div class='card mb-4'; style='margin-top: 90px'>
                    <div class='card-header'; style='font-size: 25px'>Thông tin chung</div>
                    <div class='card-body'>
                        <p><strong>Số PN:</strong> " . $order['id'] . "</p>
                        <p><strong>Ngày lập:</strong> " . $order['order_date'] . "</p>
                        <p><strong>Tên cửa hàng:</strong> " . $order['store_name'] . "</p>
                        <p><strong>Tên nhà phân phối:</strong> " . $order['distributor_name'] . "</p>
                        <p><strong>Địa chỉ:</strong> " . $order['distributor_address'] . "</p>
                        <p><strong>Số điện thoại:</strong> " . $order['distributor_phone_number'] . "</p>
                        <p><strong>Số tài khoản:</strong> " . $order['distributor_bank_account_number'] . "</p>
                        <p><strong>Số hóa đơn nhập:</strong> " . $order['invoice_number'] . "</p>
                        <p><strong>Ngày ghi hóa đơn:</strong> " . $order['invoice_date'] . "</p>
                        <p><strong>Nhân viên lập phiếu:</strong> " . $order['created_by_name'] . "</p>
                    </div>
                </div>";

            if ($result_order_details->num_rows > 0) {
                 echo "<div class='card mb-4'>";
                echo "<h3 class='card-header';  style='font-size: 25px'>Chi tiết đơn hàng</h3>";
                ECHO "      <div class='card-body'>";
                echo "<table class='table table-bordered'>
                        <thead>
                            <tr style='background-color: lightgray'>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thuế VAT</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>";

                while ($row = $result_order_details->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['pdname'] . "</td>
                            <td>" . $row['quantity'] . "</td>
                            <td>" . number_format($row['unit_price'], 2) . " VND</td>
                            <td>" . number_format($row['vat'], 2) . "%</td>
                            <td>" . number_format($row['total'], 2) . " VND</td>
                          </tr>";
                }

                echo "</tbody>
                    </table>";
                
            } else {
                echo "<div class='alert alert-info'>Không có chi tiết đơn hàng.</div>";
            }
           echo "<p><strong>Tổng tiền:</strong> " . number_format($order['total'], 2) . " VND</p>";
                   
        } else {
            echo "<div class='alert alert-warning'>Không tìm thấy đơn hàng.</div>";
        }
    }
        $conn->close();
        ?>
    </div>
</body>
</html>