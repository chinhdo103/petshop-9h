<?php
    include_once 'header.php';

?>
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg dichvu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text dichvu">
                    <p>The Best For Pets</p>
                    <h1>
                    </h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
<!-- <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".strawberry">Strawberry</li>
                        <li data-filter=".berry">Berry</li>
                        <li data-filter=".lemon">Lemon</li>
                    </ul>
                </div>
            </div>
        </div> -->
<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="section-title-sp">
                <h3><span class="orange-text-sp">Đồ dùng cho chó <p>Hiển thị 1-324 sản phẩm
                        </p>
                </h3>

            </div>
        </div>
        <div class="row product-lists">
            <?php
            // $sql = "SELECT sp.masp,sp.tensp, sp.anhsp, sp.math, th.tenth, sp.giaban,th.tenth FROM sanpham sp
            //         JOIN thuonghieu th ON sp.math = th.math";
         
          
            $madm = isset($_GET['madm']) ? $_GET['madm'] : null;
            $madmchinh = isset($_GET['madmchinh']) ? $_GET['madmchinh'] : null;
            $madmphu = isset($_GET['madmphu']) ? $_GET['madmphu'] : null;
            $math = isset($_GET['math']) ? ($_GET['math']) : null;
            
            $sql = "SELECT sp.*, th.tenth
                    FROM sanpham sp
                    JOIN thuonghieu th ON sp.math = th.math";

            if (!empty($madm)) {
                $sql .= " JOIN dmphu mphu ON sp.madmphu = mphu.madmphu
                        JOIN dmchinh mchinh ON mphu.madmchinh = mchinh.madmchinh
                        JOIN danhmuc danhm ON mchinh.madm = danhm.madm
                        WHERE danhm.madm = ?";
                $param = $madm;
            } elseif (!empty($madmchinh)) {
                $sql .= " JOIN dmphu mphu ON sp.madmphu = mphu.madmphu
                        JOIN dmchinh mchinh ON mphu.madmchinh = mchinh.madmchinh
                        WHERE mchinh.madmchinh = ?";
                $param = $madmchinh;
            } elseif (!empty($madmphu)) {
                $sql .= " WHERE sp.madmphu = ?";
                $param = $madmphu;
            } elseif (!empty($math)) {
                $sql .= " WHERE sp.math = ?";
                $param = $math;
            } else {
                // Nếu không có tham số, trả về tất cả sản phẩm
                $param = null;
            }



            $stmt = $conn->prepare($sql);

            if (!is_null($param)) {
                $stmt->bind_param("s", $param);
            }

            $stmt->execute();
            $result = $stmt->get_result();


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $masp = $row["masp"];
                    $tensanpham = $row["tensp"];
                    $duongDanAnh = $row["anhsp"];
                    $math = $row["math"];
                    $tenth = $row["tenth"];
                    $giaban = $row["giaban"]; // Brand name from thuonghieu table
                    $imagePath = "../admin/assets/image/sanpham/" . $duongDanAnh;
                   
                    
            ?>
            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.php?masp=<?php echo $row['masp']; ?>"><img
                                src="<?php echo $imagePath; ?>" alt=""></a>
                    </div>

                    <a href="shop.php?math=<?php echo $math; ?>">
                        <p class="text-th"><?php echo $tenth; ?></p>
                    </a>
                    <h3><a style="color:#020C0E;"
                            href="single-product.php?masp=<?php echo $row['masp']; ?>"><?php echo $tensanpham; ?></a>
                    </h3>

                    <!-- star -->
                    <div class="product-star">
                        <span class="row-star">
                            <span class="row-star-icon">
                                <i class="ri-star-fill"></i>
                            </span>
                            <span class="row-star-icon">
                                <i class="ri-star-fill"></i>
                            </span>
                            <span class="row-star-icon">
                                <i class="ri-star-fill"></i>
                            </span>
                            <span class="row-star-icon">
                                <i class="ri-star-fill"></i>
                            </span>
                            <span class="row-star-icon">
                                <i class="ri-star-fill"></i>
                            </span>
                        </span>
                        <span class="row-star-title"> 0 đánh giá</span>
                    </div>
                    <p class="product-price "><?php echo $giaban; ?> đ</p>
                    <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ
                        hàng</button>
                </div>
            </div>
            <?php  
                }
            } else {
                echo "Không có dữ liệu thương hiệu.";
            }
            ?>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end products --><?php
    include_once 'footer.php';

    ?>