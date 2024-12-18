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
body,h2 {font-family: serif}
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
   <header id="qlpn">
 <div class="w3-section w3-yellow w3-padding-10"> <!-- thanh ngang -->
    <div class="w3-container" style="margin-left: 500px">
     <h1 style="margin-top: 10px; font-famil: Raleway;"><b>THỐNG KÊ</b></h1>
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>


<?php
include 'db_connection.php';

// Truy vấn tổng số lượng hàng đã nhập theo từng mặt hàng
$sql_quantity_by_product = "SELECT p.pdname, SUM(pod.quantity) as total_quantity
                            FROM purchase_order_details pod
                            INNER JOIN products p ON pod.product_id = p.id
                            GROUP BY p.pdname";
$result_quantity_by_product = $conn->query($sql_quantity_by_product);

if ($result_quantity_by_product === FALSE) {
    echo "Lỗi: " . $conn->error;
    exit();
}

// Truy vấn tổng số tiền đã chi ra theo từng ngày
$sql_amount_by_date = "SELECT po.order_date, SUM(po.total) as total_amount
                       FROM purchase_orders po
                       GROUP BY po.order_date";
$result_amount_by_date = $conn->query($sql_amount_by_date);

if ($result_amount_by_date === FALSE) {
    echo "Lỗi: " . $conn->error;
    exit();
}

$conn->close();
?>
    <style>
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .statistic {
            margin-bottom: 20px;
        }
        .statistic h2 {
            margin: 0;
            padding: 0;
            font-size: 24px;
            color: #333;
        }
        .statistic p {
            font-size: 18px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div style="margin-top: -30px;" class="container">


    <div  class="statistic">
        <h2>Số lượng hàng đã nhập theo từng mặt hàng</h2>
        <table>
            <tr>
                <th>Mặt hàng</th>
                <th>Số lượng</th>
            </tr>
            <?php while ($row = $result_quantity_by_product->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['pdname']; ?></td>
                    <td><?php echo number_format($row['total_quantity']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="statistic">
        <h2>Số tiền đã chi ra theo từng ngày</h2>
        <table>
            <tr>
                <th>Ngày</th>
                <th>Số tiền</th>
            </tr>
            <?php while ($row = $result_amount_by_date->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['order_date']; ?></td>
                    <td><?php echo number_format($row['total_amount'], 2); ?> VND</td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</div>
</body>
</html>
