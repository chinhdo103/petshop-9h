<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>
        <!-- ---------QUAN LY TAI KHOAN -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Quản Lí Tài Khoản
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=admin" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tài Khoản Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=khachhang" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tài Khoản Khách Hàng</p>
                    </a>
                </li>

            </ul>
        </li>
        <!-- -------------QUAN LY DANH MUC -->

        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-solid fa-list"></i>
                <p>
                    Quản Lí Danh Mục
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="index.php?page=danhmuc" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh Mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=danhmucchinh" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh Mục Chính</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=danhmucphu" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh Mục Phụ</p>
                    </a>
                </li>

            </ul>
        </li>


        <!-- -----------------QUAN LY SAN PHAM-------- THUONG HIEU -->

        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-solid fa-tag"></i>
                <p>
                    Quản Lí Sản Phẩm
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=sanpham" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sản Phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=mota_sanpham" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mô Tả Sản Phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=thuonghieu" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thương Hiệu</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- -------------------------QUAN LY DON HANG -->
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-solid fa-tag"></i>
                <p>
                    Quản Lí Đơn Hàng
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=giohang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Giỏ Hàng</p>
                    </a>
                </li>

            </ul>
        </li>



        <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout

                </p>
            </a>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->