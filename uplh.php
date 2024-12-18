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
 <div class="w3-main" style="margin-left:300px">
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
  
 

</head>
<body>
<?php
$SERVER = 'localhost';
$user = 'root';
$pass = '';
$database = 'qlnh';

$conn = mysqli_connect($SERVER, $user, $pass, $database);

$Maloai = $_GET['Maloai'];


$sql = "select * from loaihang where Maloai = $Maloai";

$recordset = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($recordset);
?>


<form name="form2" method="post" action="capnhatlh.php" style="margin-left: 330px">
  <table class="w3-center w3-text-black" style= "background-color: white; width: 60%; height: 300px;" border="3">
    <tr>
      <td colspan="2" align="center"><strong>Cập nhật</strong></td>
      <!-- <td width="126"></td>
      <td width="358">
        <input type="id" name="id" value="<?php echo $row['id']; ?>" readonly size="40">
      </td>
    </tr> -->

    <tr style="background-color: skyblue;">
    <td><strong>Mã loại:</strong></td>
    <td><input type="Maloai" name="Maloai" value="<?php echo $row['Maloai']; ?>" readonly size="40"></td>
    </tr>

    <tr style="background-color: skyblue;">
    <td><strong>Tên loại:</strong></td>
    <td><input type="Tenloai" name="Tenloai" value="<?php echo $row['Tenloai']; ?>" size="40"></td>
    </tr>

    <!--  <tr style="background-color: skyblue;">
    <td><strong>Giới tính:</strong></td>
    <td><input type="gioitinh" name="gioitinh" value="<?php echo $row['gioitinh']; ?>" size="40"></td>
    </tr>

     <tr style="background-color: skyblue;">
    <td><strong>Ngày sinh:</strong></td>
    <td><input type="ngaysinh" name="ngaysinh" value="<?php echo $row['ngaysinh']; ?>" size="40"></td>
    </tr>

     <tr style="background-color: skyblue;">
    <td><strong>Sđt:</strong></td>
    <td><input type="sdt" name="sdt" value="<?php echo $row['sdt']; ?>" size="40"></td>
    </tr> -->

    <tr>
      <td colspan="2" align="center">
        <strong><input style="background-color: skyblue;" type="submit" name="button" id="button" value="Cập nhật"></strong>
        <strong><input style="background-color: skyblue;" type="reset" name="button2" value="Nhập lại"></strong>
      </td>
    </tr>
  </table>
</form>



  </body>
</html>