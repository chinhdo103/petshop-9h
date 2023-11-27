<?php

  include_once 'header.php';
  include_once '../qiyshop/services/connect.php';

  // Assuming you have a user ID stored in the session
  $userId = $_SESSION['makh'];

  // Fetch cart items from the database
  $stmt = $conn->prepare("SELECT *  FROM donhang  WHERE makh = ?");
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
                                <th class="product-image">Mã đơn hàng</th>
                                <th class="product-name">Mã khách hàng</th>
                                <th class="product-price">Ngày tạo</th>
                                <th class="product-quantity">Tổng Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = $result->fetch_assoc()) {
                                // Output cart items dynamically
                            ?>
                            <tr class="table-body-row">
                                <!-- Display cart item details -->



                                <td class="product-name"><?php echo $row['madh']; ?></td>
                                <td class="product-price"><?php echo $row['makh']; ?> </td>
                                <td class="product-name"><?php echo $row['ngaytao']; ?></td>

                                <td class="product-total"><?php echo $row['tonggia']; ?> đ</td>
                            </tr>
                            <?php                               
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