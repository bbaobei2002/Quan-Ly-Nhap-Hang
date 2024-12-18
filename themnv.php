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
   
 
 <!-- form -->
  <div class="w3-container w3-padding-large w3-white" style="margin-top: 50px;"> 
    <h4 class="w3-center" style="font-size: 25pt; margin-top: 40px; margin-bottom:-65px;" id="lienhe"><b>Thêm nhân viên</b></h4>
    <form action="connectnv.php" method="post">
      <!-- <b><label>ID: </label></b> <input type="hidden" id="id"  size="5" name="id"> -->
    <b><label>Mã nhân viên: </label></b> <input type="employee_id" id="employee_id"  size="5" name="employee_id" readonly>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px"></div>
    
    <hr class="w3-opacity">
    <!-- <form action="/action_page.php" target="_blank"> -->
      <div class="w3-section">
        <label><b>Tên nhân viên:</b></label>
        <input type="full_name" style="block-size: 40px;" class="w3-input w3-border" required="" name="full_name">
      </div>

       <div class="w3-section">
        <label><b>Ngày sinh:</b></label>
        <input type="date" style="block-size: 40px;" class="w3-input w3-border"  required="" name="date_of_birth">
      </div>

      <div>
       <strong>Giới tính:<br></strong>
    Nam <input type="radio" name="gender" value="Nam">, Nữ <input type="radio" name="gender" value="Nữ"><br>
  </div>
  <?php if(isset($_POST["gender"])) { echo $_POST["gender"]; } ?>

      <div class="w3-section">
        <label><b>Địa chỉ:</b></label>
        <input type="address" style="block-size: 40px;" class="w3-input w3-border"  required="" name="address">
      </div>

      <div class="w3-section">
        <label><b>Số CCCD:</b></label>
        <input type="id_card_number" style="block-size: 40px;" class="w3-input w3-border"  required="" name="id_card_number">
      </div>

      <div class="w3-section">
        <label><b>Ngày cấp:</b></label>
        <input type="date" style="block-size: 40px;" class="w3-input w3-border"  required="" name="issue_date">
      </div>

      <div class="w3-section">
        <label><b>Số tài khoản:</b></label>
        <input type="bank_account_number" style="block-size: 40px;" class="w3-input w3-border"  required="" name="bank_account_number">
      </div>

      <div class="w3-section">
        <label><b>Email:</b></label>
        <input type="email" style="block-size: 40px;" class="w3-input w3-border"  required="" name="email">
      </div>

       <div class="w3-section">
        <label><b>Số điện thoại:</b></label>
        <input type="phone_number" class="w3-input w3-border"  required="" name="phone_number">
      </div>
      <div class="clearfix"></div>
      <button type="submit" name="employees" class="w3-button w3-green w3-margin-bottom"><i style="color: white;" class="fa fa-paper-plane w3-margin-right"></i>Thêm nhân viên</button>
    </form>
  </div>


  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
