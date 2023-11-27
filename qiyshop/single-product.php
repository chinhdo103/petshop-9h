<?php
    include_once 'header.php';
    // include_once'../qiyshop/services/connect.php';
   // Get the product ID from the URL



// Use prepared statement to avoid SQL injection
    $sql = "SELECT sp.*, th.tenth
            FROM sanpham sp
            JOIN thuonghieu th ON sp.math = th.math
            WHERE sp.masp = '".$_GET['masp']."'";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $masp);
    $stmt->execute();
    $result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the product details
    $row = $result->fetch_assoc();
    $masp = $row["masp"];
    $tensanpham = $row["tensp"];
    $motasp = $row["motasp"];
    $tenth = $row["tenth"];
    $duongDanAnh = $row["anhsp"];
    $giaban = $row["giaban"];
    $imagePath = "../admin/assets/image/sanpham/" . $duongDanAnh;

       
?>




<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg dichvu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text dichvu">
                    <p>Chi Tiết Sản Phẩm</p>
                    <h1>
                    </h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="product-image">
                    <!-- Update the image source to use dynamic $imagePath -->
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo $tensanpham; ?>">

                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3><?php echo $tensanpham; ?> (<?php echo $masp; ?>)</h3>
                    <span>Thương Hiệu: <a href="">
                            <?php echo $tenth ?></a></span>
                    <!-- Display the actual product price -->

                    <p class=" single-product-pricing"><?php echo $giaban ?> đ </p>

                    <!-- <p><?php echo $motasp ?></p> -->


                    <div class="single-product-form">

                        <form action="../qiyshop/actions/add_to_card.php" method="post">
                            <input type="hidden" name="masp" value="<?php echo $masp; ?>">
                            <input type="number" name="soluong" placeholder="0" min="1" max="15">
                            <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ
                            </button>

                        </form>
                        <p><strong>Tổng tiền: </strong><?php echo $tenth ?></p>
                        <!-- <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ
                            hàng</button> -->
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$sql = "SELECT sp.*, mt.mota, mt.loiich, mt.huongdan, mt.luuy
            FROM sanpham sp
            JOIN motasp mt ON sp.masp = mt.masp
            WHERE sp.masp = '".$_GET['masp']."'";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $masp);
    $stmt->execute();
    $result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the product details
    $row = $result->fetch_assoc();
    $mota = $row["mota"];
    $loiich = $row["loiich"];
    $huongdan = $row["huongdan"];
    $luuy = $row["luuy"];
?>


<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="section-text">
                <h4 class="">Mô tả</h4>
            </div>
        </div>
        <div class="row">
            <div class="section-text">
                <h6>1. Mô tả</h6>
                <p><?php echo $mota; ?>
                </p>


            </div>
        </div>
        <div class="row">
            <div class="section-text">
                <h6>2. Lợi ích chính</h6>
                <p><?php echo $loiich; ?>
                </p>


            </div>
        </div>
        <div class="row">
            <div class="section-text">
                <h6>3. Hướng dẫn cho ăn</h6>
                <p><?php echo $huongdan; ?>
                </p>


            </div>
        </div>
        <div class="row">
            <div class="section-text">
                <h6>4. Một số lưu ý</h6>
                <p><?php echo $luuy; ?>
                </p>


            </div>
        </div>
        <?php
    } else {
        echo "Không có mô tả.";
    }  
    ?>
    </div>
</div>

<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Sản Phẩm</span> Liên Quan</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 85$ </p>
                    <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
                    </div>
                    <h3>Berry</h3>
                    <p class="product-price"><span>Per Kg</span> 70$ </p>
                    <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end more products -->
<?php
 }
 $stmt->close();
    include_once 'footer.php';

    ?>