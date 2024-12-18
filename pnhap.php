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
    
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
    </div>
  </header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Purchase Order</title>
    <script>
        function addProductRow() {
            var table = document.getElementById('products_table');
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            cell1.innerHTML = rowCount;

            var cell2 = row.insertCell(1);
            var productSelect = document.createElement('select');
            productSelect.name = 'product_id[]';
            productSelect.onchange = function() { updatePriceAndVat(rowCount); };
            cell2.appendChild(productSelect);

            var cell3 = row.insertCell(2);
            var quantityInput = document.createElement('input');
            quantityInput.type = 'number';
            quantityInput.name = 'quantity[]';
            quantityInput.oninput = function() { calculate(); };
            cell3.appendChild(quantityInput);

            var cell4 = row.insertCell(3);
            var unitPriceInput = document.createElement('input');
            unitPriceInput.type = 'number';
            unitPriceInput.name = 'unit_price[]';
            unitPriceInput.readOnly = true;
            cell4.appendChild(unitPriceInput);

            var cell5 = row.insertCell(4);
            var vatInput = document.createElement('input');
            vatInput.type = 'number';
            vatInput.name = 'vat[]';
            vatInput.readOnly = true;
            cell5.appendChild(vatInput);

            var cell6 = row.insertCell(5);
            var subTotalInput = document.createElement('input');
            subTotalInput.type = 'number';
            subTotalInput.name = 'sub_total[]';
            subTotalInput.readOnly = true;
            cell6.appendChild(subTotalInput);

            var cell7 = row.insertCell(6);
            var vatAmountInput = document.createElement('input');
            vatAmountInput.type = 'number';
            vatAmountInput.name = 'vat_amount[]';
            vatAmountInput.readOnly = true;
            cell7.appendChild(vatAmountInput);

            var cell8 = row.insertCell(7);
            var totalInput = document.createElement('input');
            totalInput.type = 'number';
            totalInput.name = 'total[]';
            totalInput.readOnly = true;
            cell8.appendChild(totalInput);

            populateProductOptions(productSelect);
        }

        function populateProductOptions(selectElement) {
            var products = JSON.parse(document.getElementById('products_data').value);
            products.forEach(product => {
                var option = document.createElement('option');
                option.value = product.id;
                option.text = product.pdname;
                selectElement.appendChild(option);
            });
        }

        function updatePriceAndVat(rowIndex) {
            var table = document.getElementById('products_table');
            var productId = table.rows[rowIndex].cells[1].children[0].value;
            var products = JSON.parse(document.getElementById('products_data').value);

            var selectedProduct = products.find(product => product.id == productId);
            if (selectedProduct) {
                table.rows[rowIndex].cells[3].children[0].value = selectedProduct.price;
                table.rows[rowIndex].cells[4].children[0].value = selectedProduct.vat;
                calculate();
            }
        }

        function calculate() {
            var table = document.getElementById('products_table');
            var rowCount = table.rows.length;
            var grandTotal = 0;

            for (var i = 1; i < rowCount; i++) {
                var quantity = table.rows[i].cells[2].children[0].value;
                var unitPrice = table.rows[i].cells[3].children[0].value;
                var vat = table.rows[i].cells[4].children[0].value;

                if (quantity && unitPrice && vat) {
                    var subTotal = quantity * unitPrice;
                    var vatAmount = (vat / 100) * subTotal;
                    var total = subTotal + vatAmount;

                    table.rows[i].cells[5].children[0].value = subTotal.toFixed(2);
                    table.rows[i].cells[6].children[0].value = vatAmount.toFixed(2);
                    table.rows[i].cells[7].children[0].value = total.toFixed(2);

                    grandTotal += total;
                }
            }

            document.getElementById('grand_total').value = grandTotal.toFixed(2);
        }
    </script>
</head>
<body>
    <div class="w3-container w3-padding-large w3-white" style="margin-top: -40px;"> 
        <h1 class="w3-center" style="font-size: 25pt; margin-top: 20px; margin-bottom:-65px;" id="lienhe"><b>PHIẾU NHẬP HÀNG</b></h1>
    
        <form action="connectpnhap.php" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label style=" margin-left: 500px" for="order_date">Số PN:</label>
            <input style="margin-top: 80px;" id="id" name="id" readonly required><br><br>
       
            <label style=" margin-left: 500px" for="order_date">Ngày lập:</label>
            <input type="date" id="order_date" name="order_date" required><br><br>

            <label style=" margin-left: 500px" for="store_id">Cửa hàng:</label>
            <select name="store_id" id="store_id">
                <?php
                $result = $conn->query("SELECT store_id, store_name FROM stores");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["store_id"]."'>".$row["store_name"]."</option>";
                }
                ?>
            </select><br><br>

            <label for="distributor_id">Tên nhà phân phối:</label>
            <select name="distributor_id" id="distributor_id">
                <?php
                $result = $conn->query("SELECT distributor_id, distributor_name FROM distributors");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["distributor_id"]."'>".$row["distributor_name"]."</option>";
                }
                ?>
            </select><br><br>

            <div id="distributors">
                <p>Địa chỉ: <input size="144" type="text" id="address" name="address" readonly></p>
                <p>Số điện thoại: <input size="70" type="text" id="phone_number" name="phone_number" readonly>
                Số tài khoản: <input size="55" type="text" id="bank_account_number" name="bank_account_number" readonly></p>
            </div>

            <label for="invoice_number">Số hóa đơn nhập:</label>
            <input size="67" type="text" id="invoice_number" name="invoice_number">
            <label for="invoice_date">Ngày ghi hóa đơn:</label>
            <input type="date" id="invoice_date" name="invoice_date"><br><br>

            <label for="created_by">Người lập:</label><br>
            <select name="created_by" id="created_by">
                <?php
                $result = $conn->query("SELECT employee_id, full_name FROM employees");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["employee_id"]."'>".$row["full_name"]."</option>";
                }
                ?>
            </select><br><br>

            <h3>Products</h3>
            <table id="products_table" border="1" style="margin-left: 60px; width:90%; height:70px;">
                <thead>
                    <tr style="background-color: skyblue;">
                        <th>STT</th>
                        <th>Tên hàng</th>
                        <th>Số lượng</th>
                        <th>Đơn giá (VNĐ)</th>
                        <th>VAT (%)</th>
                        <th>Thành tiền</th>
                        <th>Thuế VAT (VNĐ)</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <select id="product_id" name="product_id[]" onchange="updatePriceAndVat(1)">
                                <option value="">Chọn sản phẩm</option>
                                <?php
                                include 'db_connection.php';

                                $products = [];

                                if ($conn->connect_error) {
                                    die("Kết nối thất bại: " . $conn->connect_error);
                                }

                                $sql = "SELECT id, pdname, price, vat FROM products";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $products[] = $row;
                                        echo "<option value='" . $row["id"] . "'>" . $row["pdname"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>Không có sản phẩm nào</option>";
                                }
                                $conn->close();
                                ?>
                            </select>
                        </td>
                        <td><input type="number" id="quantity" name="quantity[]" required oninput="calculate()"></td>
                        <td><input type="number" step="0.01" id="unit_price" name="unit_price[]" required readonly></td>
                        <td><input type="number" step="0.01" id="vat" name="vat[]" required readonly></td>
                        <td><input type="number" step="0.01" id="sub_total" name="sub_total[]" readonly></td>
                        <td><input type="number" step="0.01" id="vat_amount" name="vat_amount[]" readonly></td>
                        <td><input type="number" step="0.01" id="total" name="total[]" readonly></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" onclick="addProductRow()">Add Product</button>

            <br><br>
            <label for="grand_total"><strong>Tổng cộng (VNĐ):</strong></label>
            <input type="number" step="0.01" id="grand_total" name="grand_total" readonly><br><br>

            <input type="hidden" id="products_data" value='<?php echo json_encode($products); ?>'>
            <strong><input style="margin-left: 500px; background-color: skyblue;" type="submit" value="Tạo Phiếu Nhập Hàng"></strong>
        </form>
    </div>
</body>
</html>
