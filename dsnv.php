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
    <h1 style="margin-top: 10px;"><b>QUẢN LÝ NHÂN VIÊN</b></h1>
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>

<body>
    <div class="container">

<?php
include 'db_connection.php';

// Xóa nhân viên nếu có yêu cầu
if (isset($_GET['delete_id'])) {
    $employee_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM employees WHERE employee_id = $employee_id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "<script>alert('Xóa nhân viên thành công'); window.location.href='dsnv.php';</script>";
    } else {
        echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
    }
}

// Truy vấn danh sách nhân viên
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<div class="container">
  
    <table class="table table-bordered" style="background-color: white; margin-top: 30px;">
        <thead>
            <tr style="background-color: skyblue;">
                <th>Mã nhân viên</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['employee_id'] . "</td>
                        <td>" . $row['full_name'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['phone_number'] . "</td>
                        <td>
                            <a href='upnv.php?employee_id=" . $row['employee_id'] . "' class='btn btn-warning'>Chỉnh sửa</a>
                            <a href='dsnv.php?delete_id=" . $row['employee_id'] . "' class='btn btn-danger' onclick='return confirm(\"Bạn có chắc chắn muốn xóa nhân viên này?\");'>Xóa</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Không có nhân viên nào</td></tr>";
        }
        ?>
        </tbody>
        <div>
    </table>
    <a href="themnv.php" onclick="close()" style="margin-left: 10px; margin-top: 10px; color: black;" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw w3-margin-right"></i><strong>Thêm nhân viên</strong></a> 
</div>
</div>
</body>
</html>
<?php
$conn->close();
?>
