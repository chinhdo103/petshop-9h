<?php
include_once '../qiyshop/services/connect.php';

// Đảm bảo rằng bạn đã có kết nối đến cơ sở dữ liệu
// Nếu không, hãy thực hiện kết nối ở đây

$invoiceId = $_GET['mactdh']; // Đã sửa tên biến thành 'mactdh'
$stmt = $conn->prepare("SELECT chitiet_donhang.*, donhang.makh, khachhang.tenkh AS ten_khachhang, sanpham.tensp AS ten_sanpham 
                        FROM chitiet_donhang
                        INNER JOIN donhang ON chitiet_donhang.madh = donhang.madh
                        INNER JOIN khachhang ON donhang.makh = khachhang.makh
                        INNER JOIN sanpham ON chitiet_donhang.masp = sanpham.masp
                        WHERE chitiet_donhang.mactdh = ?");
$stmt->bind_param("i", $invoiceId);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>DISEE - Invoice HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="../qiyshop/assets1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../qiyshop/assets1/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../qiyshop/assets1/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="../qiyshop/assets1/css/style.css">
</head>

<body>

    <!-- Invoice 2 start -->
    <div class="invoice-2 invoice-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner clearfix">
                        <div class="invoice-info clearfix" id="invoice_wrapper">
                            <div class="invoice-headar">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="assets/img/logo-new2.png"
                                                    style="height: 90px; padding-bottom: 30px;" alt="logo">
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-id">
                                            <div class="info">
                                                <h1 class="inv-header-1">Hoá Đơn</h1>
                                                <p class="mb-1">Mã hoá đơn: <span>#45613</span></p>
                                                <p class="mb-0">Ngày xuất: <span>24 Jan 2022</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <h4 class="inv-title-1">Cửa Hàng</h4>
                                            <h2 class="name">QiyShop</h2>
                                            <p class="invo-addr-1">
                                                Theme Vessel <br />
                                                info@themevessel.com <br />
                                                21-12 Green Street, Meherpur, Bangladesh <br />
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <div class="invoice-number-inner">
                                                <h4 class="inv-title-1">Khách Hàng</h4>
                                                <h2 class="name">Tên KH</h2>
                                                <p class="invo-addr-1">
                                                    Apexo Inc <br />
                                                    billing@apexo.com <br />
                                                    169 Teroghoria, Bangladesh <br />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr class="tr">
                                                <th>STT.</th>
                                                <th class="pl0 text-start">Tên Sản Phẩm</th>
                                                <th class="text-center">Đơn Giá</th>
                                                <th class="text-center">Số Lượng</th>
                                                <th class="text-end">Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                             
                                             
                                              
                                            ?>
                                            <tr class="tr">
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span><?php echo $row['mactdh']; ?></span>
                                                    </div>
                                                </td>
                                                <td class="pl0"><?php echo $row['tensp']; ?></td>
                                                <td class="text-center"><?php echo $row['soluong']; ?></td>
                                                <td class="text-center"><?php echo $row['gia']; ?> đ</td>
                                                <td class="text-end"><?php echo $row['tonggia'] ?> đ</td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-5 col-sm-5">
                                        <div class="payment-method mb-30">
                                            <h3 class="inv-title-1">Payment Method</h3>
                                            <ul class="payment-method-list-1 text-14">
                                                <li><strong>Account No:</strong> 00 123 647 840</li>
                                                <li><strong>Account Name:</strong> Jhon Doe</li>
                                                <li><strong>Branch Name:</strong> xyz</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-7">
                                        <div class="terms-conditions mb-30">
                                            <h3 class="inv-title-1">Terms & Conditions</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy has</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-contact clearfix">
                                <div class="row g-0">
                                    <div class="col-sm-12">
                                        <div class="contact-info clearfix">
                                            <a href="tel:+55-4XX-634-7071" class="d-flex"><i class="fa fa-phone"></i>
                                                +00 123 647 840</a>
                                            <a href="tel:info@themevessel.com" class="d-flex"><i
                                                    class="fa fa-envelope"></i> info@themevessel.com</a>
                                            <a href="tel:info@themevessel.com" class="mr-0 d-flex d-none-580"><i
                                                    class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="javascript:window.print()" class="btn btn-lg btn-print">
                                <i class="fa fa-print"></i> Print Invoice
                            </a>
                            <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                                <i class="fa fa-download"></i> Download Invoice
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice 2 end -->

    <script src="../qiyshop/assets1/js/jquery.min.js"></script>
    <script src="../qiyshop/assets1/js/jspdf.min.js"></script>
    <script src="../qiyshop/assets1/js/html2canvas.js"></script>
    <script src="../qiyshop/assets1/js/app.js"></script>
</body>

</html>