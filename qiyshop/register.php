<?php
   include_once 'header.php';
   include_once '../qiyshop/services/connect.php';

?>


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg dichvu">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">

            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- login -->

<div class="login">
    <div class="from_container">

        <!-- Dang Ky -->
        <div class="form signup_form">
            <form enctype="multipart/form-data" action="actions/action_register.php" method="post">

                <h3>Đăng ký</h3>
                <div class="input_box">
                    <input type="text" name="name" placeholder="Tên Người Dùng" required />
                    <!-- <i class="ri-mail-line email"></i> -->
                </div>

                <div class="input_box">
                    <input type="email" name="email" placeholder="Email" required />
                    <i class="ri-mail-line email"></i>
                </div>
                <div class="input_box">
                    <input type="password" name="pass" placeholder="Mật khẩu" required />
                    <i class="ri-lock-2-line password"></i>
                    <i class="ri-eye-off-line pw_hide"></i>

                </div>
                <div class="input_box">
                    <input type="password" name="cpass" placeholder="Nhập lại mật khẩu" required />
                    <i class="ri-lock-2-line password"></i>
                    <i class="ri-eye-off-line pw_hide"></i>
                </div>



                <button class="button_login" name="submit">Đăng ký</button>

                <div class="login_signup"> Bạn đã có tài khoản? <a href="login.php" id="signup">Đăng nhập</a>
                </div>


            </form>
        </div>


    </div>


</div>




<?php
    include_once 'footer.php';
?>