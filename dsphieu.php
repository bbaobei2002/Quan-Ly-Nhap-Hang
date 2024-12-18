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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
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
  <div class="w3-bar-block">
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
    <div class="w3-container" style="margin-left: 400px">
    <h1 style="margin-top: 10px;"><b>QUẢN LÝ PHIẾU NHẬP</b></h1>
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>

<body>
    <div class="container">
       <!--  <div class="w3-section w3-yellow w3-padding-10">
            <div class="w3-container" style="margin-left: 350px; margin-top: -65px;">
            <h1><b>QUẢN LÝ PHIẾU NHẬP</b></h1>
        </div>
    </div> -->
       
        <?php
        include 'db_connection.php';

        // Truy vấn danh sách các phiếu nhập
       $sql_orders = "SELECT po.*, e.full_name AS created_by_name, s.store_name, d.distributor_name
               FROM purchase_orders po
               INNER JOIN employees e ON po.created_by = e.employee_id
               INNER JOIN stores s ON po.store_id = s.store_id
               INNER JOIN distributors d ON po.distributor_id = d.distributor_id
               ORDER BY po.id ASC"; // Sắp xếp theo ID tăng dần
        $result_orders = $conn->query($sql_orders);

        if ($result_orders === FALSE) {
            echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
            exit();
        }

        if ($result_orders->num_rows > 0) {
            echo "<table class='table table-bordered' style='background-color: white'>
                    <thead>
                        <tr class= 'text-center' style='background-color: skyblue'>
                            <th><strong>Mã phiếu </strong></th>
                            <th>Cửa hàng</th>
                            <th>Nhà phân phối</th>
                            <th>Số hóa đơn</th>
                            <th>Ngày ghi hóa đơn</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tổng tiền</th>
                            <th>Người lập phiếu</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result_orders->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['store_name'] . "</td>
                        <td>" . $row['distributor_name'] . "</td>
                        <td>" . $row['invoice_number'] . "</td>
                        <td>" . $row['invoice_date'] . "</td>
                        <td>" . $row['order_date'] . "</td>
                        <td>" . number_format($row['total'], 2) . " VND</td>
                        <td>" . $row['created_by_name'] . "</td>
                        <td>
                            <a href='xemphieu.php?order_id=" . $row['id'] . "' class='btn btn-info btn-primary btn-sm'>Xem chi tiết</a><br><br>
                            <a href='uppn.php?order_id=" . $row['id'] . "' class='btn btn-warning btn-primary btn-sm'>Chỉnh sửa</a><br><br>
                            <a href='xoapn.php?order_id=" . $row['id'] . "' class='btn btn-danger btn-primary btn-sm' onclick='return confirm(\"Bạn có chắc chắn muốn xóa phiếu nhập này?\")'>Xóa</a>
                        </td>
                      </tr>";
            }

            echo "</tbody>
                </table>";

        } else {
            echo "<div class='alert alert-info'>Không có phiếu nhập nào.</div>";
        }

        $conn->close();
        ?>
        <div>
            <a href="pnhap.php" onclick="close()" style="margin-left: 20px; margin-top: 10px; color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw w3-margin-right"></i><strong>Thêm phiếu nhập</strong></a> 
        </div>
    </div>
</body>
</html>
