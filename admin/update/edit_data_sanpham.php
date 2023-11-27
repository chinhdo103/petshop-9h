<?php

    $masp = $_GET['masp'];
   $sql = "SELECT * from sanpham where masp ='$masp' ";
   $result = $conn->query($sql); 



?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Sửa thông tin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <?php foreach( $result as $value ){?>
                <form method="post" action="update/update_data_sanpham.php" enctype="multipart/form-data">


                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Mã thương hiệu</label>
                                <input type="text" class="form-control" placeholder="nhập mã thương hiệu"
                                    value="<?php echo $value['masp'] ?> " name="masp" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tên thương hiệu</label>
                                <input type="text" class="form-control" placeholder="nhập tên"
                                    value="<?php echo $value['tensp'] ?> " name="tensp" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Mã thương hiệu</label>
                            <select class="custom-select" id="inputGroupSelect01" name="math">
                                <option selected>Chọn mã thương hiệu</option>
                                <?php  
                                    $query = mysqli_query($conn, "SELECT * FROM thuonghieu");
                                    while ($mhs = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $mhs['math'] . '">' . $mhs['tenth'] . '</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Mã danh mục phụ</label>
                            <select class="custom-select" id="inputGroupSelect01" name="madmphu">
                                <option selected>Chọn mã danh mục phụ</option>
                                <?php  
                                    $query = mysqli_query($conn, "SELECT * FROM dmphu");
                                    while ($mhs = mysqli_fetch_array($query)) {
                                        echo '<option value="' . $mhs['madmphu'] . '">' . $mhs['tendmphu'] . '</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Phân loại</label>
                                <input type="text" class="form-control" placeholder="nhập tên"
                                    value="<?php echo $value['phanloai'] ?> " name="phanloai" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="text" class="form-control" placeholder="nhập tên"
                                    value="<?php echo $value['giaban'] ?> " name="giaban" required>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="form-group">
                                    <label class="form-label" for="customFile">Tải hình ảnh lên</label>
                                    <input type="file" name='photo' class="form-control" id="customFile" />

                                </div>
                                <img src="assets/image/sanpham/<?php echo $value['anhsp'];?>"
                                    style="padding-left: 20px;" width="200" alt="">

                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input type="text" class="form-control" placeholder="mô tả"
                                    value="<?php echo $value['motasp'] ?>" name="motasp">
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <button type="submit" class="btn btn-sm btn-info"
                                style="margin-top: 20px; margin-bottom: 20px;"> Lưu </button>
                        </div>



                    </div>


                    <?php } ?>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>