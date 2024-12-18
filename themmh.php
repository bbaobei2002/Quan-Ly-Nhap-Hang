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
    <h4 class="w3-center" style="font-size: 25pt; margin-top: 40px; margin-bottom:-65px;" id="tmh"><b>Thêm mặt hàng</b></h4>
    <form action="connectmh.php" method="post">
    <b><label>Mã hàng: </label></b> <input type="product_id" id="product_id"  size="5" name="product_id">
    
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px"></div>
    
    <hr class="w3-opacity">
    <!-- <form action="/action_page.php" target="_blank"> -->
      <div class="w3-section">
        <label><b>Tên hàng:</b></label>
        <input type="pdname" style="block-size: 40px;" class="w3-input w3-border" required="" name="pdname">
      </div>

      <div class="w3-section">
        <label><b>Đơn giá:</b></label>
        <input type="price" style="block-size: 40px;" class="w3-input w3-border"  required="" name="price">
      </div>

      <div class="w3-section">
        <label><b>VAT (%):</b></label>
        <input type="vat" style="block-size: 40px;" class="w3-input w3-border"  required="" name="vat">
      </div>

      <div class="w3-section">
        <label><b>Công dụng:</b></label>
        <input type="uses" style="block-size: 40px;" class="w3-input w3-border"  required="" name="uses">
      </div>
       <div class="w3-section">
        <label><b>Mô tả:</b></label>
        <input type="description" class="w3-input w3-border"  required="" name="description">
      </div>
      <div class="clearfix"></div>
      <button type="submit" name="products" class="w3-button w3-green w3-margin-bottom"><i style="color: white;" class="fa fa-paper-plane w3-margin-right"></i>Thêm mặt hàng</button>
    </form>
  </div>


  </body>
</html>