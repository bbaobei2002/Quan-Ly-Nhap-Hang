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
 <div class="w3-section w3-padding-10"> <!-- thanh ngang -->
    <div class="w3-container" style="margin-left: 400px">
    </div>
  
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>

<?php
include 'db_connection.php';

if (isset($_POST['update'])) {
    $distributor_id = $_POST['distributor_id'];
    $distributor_name = $_POST['distributor_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $bank_account_number = $_POST['bank_account_number'];

    // Cập nhật thông tin nhà phân phối
    $sql_update = "UPDATE distributors SET 
                   distributor_name = '$distributor_name',
                   address = '$address',
                   phone_number = '$phone_number',
                   bank_account_number = '$bank_account_number'
                   WHERE distributor_id = $distributor_id";

    if ($conn->query($sql_update) === TRUE) {
        echo "<script>alert('Cập nhật thành công'); window.location.href='dsnpp.php';</script>";
    } else {
        echo "<div class='alert alert-danger'>Lỗi: " . $conn->error . "</div>";
    }
}

if (isset($_GET['distributor_id'])) {
    $distributor_id = $_GET['distributor_id'];
    $sql_distributor = "SELECT * FROM distributors WHERE distributor_id = $distributor_id";
    $result_distributor = $conn->query($sql_distributor);

    if ($result_distributor->num_rows > 0) {
        $distributor = $result_distributor->fetch_assoc();
        ?>
       
        <body>
            <div class="container">
              
                <form action="upnpp.php" method="post">
                    <input type="hidden" name="distributor_id" value="<?php echo $distributor_id; ?>">
                    <div class="form-group">
                        <label for="distributor_name"><strong>Tên nhà phân phối:</label></strong>
                        <input type="text" class="form-control" id="distributor_name" name="distributor_name" value="<?php echo $distributor['distributor_name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address"><strong>Địa chỉ:</label></strong>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $distributor['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number"><strong>Số điện thoại:</label></strong>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $distributor['phone_number']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bank_account_number"><strong>Số tài khoản:</label></strong>
                        <input type="text" class="form-control" id="bank_account_number" name="bank_account_number" value="<?php echo $distributor['bank_account_number']; ?>" required>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "<div class='alert alert-danger'>Không tìm thấy nhà phân phối.</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Không có ID nhà phân phối.</div>";
}

$conn->close();
?>
