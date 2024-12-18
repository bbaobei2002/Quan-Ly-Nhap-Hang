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
 <div class="w3-main" style="margin-top: -15px; margin-left:320px">
   <header id="qlnpp">
 <div class="w3-section w3-yellow w3-padding-10"> <!-- thanh ngang -->
    <div class="w3-container" style="margin-left: 400px">
    <h1><b>QUẢN LÝ NHẬP HÀNG</b></h1>
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div style="margin-top: -20px; margin-left: 210px; " class="w3-row-padding w3-col w3-container m8 15">
    <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/ch.jpg" alt="qlnv" style="width:100%;" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" dsch.php " style="color: white; font-size: 25px;" target="_blank"> Quản lý cửa hàng</a>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/mh.jpg" alt="qlhslv" style="width:100%" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" dsmh.php " style="color: white; font-size: 25px;" target="_blank"> Quản lý mặt hàng</a>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/npp.jpg" alt="qlhslv" style="width:100%" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" dsnpp.php " style="color: white; font-size: 25px;" target="_blank"> Các nhà phân phối</a>
      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div style="margin-top: 20px; margin-left: 210px; " class="w3-row-padding w3-col w3-container m8 15">
    <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/pn.jpg" alt="pnhap" style="width:100%" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" dsphieu.php " style="color: white; font-size: 25px;" target="_blank"> Quản lý phiếu nhập</a>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/tk.jpg" alt="tk" style="width:100%" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" tke.php " style="color: white; font-size: 25px;" target="_blank"> Quản lý thống kê</a>
      </div>
    </div>

     <div class="w3-third w3-container w3-margin-bottom">
      <img class="chucnang" src="./images/a14.jpg" alt="qlnv" style="width:100%" class="w3-hover-opacity">
      <div class="w3-center w3-container" style="background-color: midnightblue;">
        <a href=" dsnv.php " style="color: white; font-size: 25px;" target="_blank"> Quản lý nhân viên</a>
      </div>
    </div>

    </div>
  </div>
  
  
 



  
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

</body>
</html>
