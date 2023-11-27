<?php

  include_once 'header.php';
  include_once '../qiyshop/services/connect.php';

  // Assuming you have a user ID stored in the session
  $userId = $_SESSION['makh'];

  // Fetch cart items from the database
  $stmt = $conn->prepare("SELECT giohang.*, sanpham.anhsp FROM giohang JOIN sanpham ON giohang.masp = sanpham.masp WHERE giohang.makh = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();

?>

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg dichvu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text dichvu">
                    <p>Giỏ Hàng</p>
                    <h1>
                    </h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove">Hành Động</th>
                                <th class="product-image">Ảnh</th>
                                <th class="product-name">Tên sản phẩm</th>
                                <th class="product-price">Giá tiền</th>
                                <th class="product-quantity">Số lượng</th>
                                <th class="product-total">Tổng tiền/sp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $totalPrice = 0;

                            while ($row = $result->fetch_assoc()) {
                                // Output cart items dynamically
                            ?>
                            <tr class="table-body-row">
                                <!-- Display cart item details -->

                                <td class="product-remove"><a
                                        href="actions/action_remove_prcart.php?masp=<?php echo $row['masp']; ?>"><i
                                            class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="<?php echo 'assets/sanpham/'.$row['anhsp']; ?>"
                                        alt=""></td>
                                <td class="product-name"><?php echo $row['tensp']; ?></td>
                                <td class="product-price"><?php echo $row['giaban']; ?> đ</td>
                                <td class="product-quantity">
                                    <input type="number" placeholder="0" min="1" max="15"
                                        value="<?php echo $row['soluong']; ?>">
                                </td>
                                <td class="product-total"><?php echo $row['tonggia_sp']; ?> đ</td>
                            </tr>
                            <?php                                 $totalPrice += $row['tonggia_sp'];
} ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Tổng tiền sp: </strong></td>
                                <td><?php echo number_format($totalPrice, 2); ?> đ</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Phí giao hàng: </strong></td>
                                <td>Miễn Phí</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Thành tiền: </strong></td>
                                <td><?php echo number_format($totalPrice + 0, 2); ?> đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="shop.php" class="boxed-btn">Tiếp tục mua sắm</a>
                        <a href="actions/checkout.php" class="boxed-btn black">Thanh toán</a>
                    </div>
                </div>

                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.php">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
<?php
    include_once 'footer.php';

?>