<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản lý sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Thêm
                        </button>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Image</th>
                                    <th>Tên thương hiệu</th>
                                    <th>Danh mục phụ</th>
                                    <th>Phân loại</th>
                                    <th>Giá bán</th>
                                    <th>Mô tả</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                        $query = mysqli_query($conn,"SELECT * FROM sanpham");
                                        while ($mhs = mysqli_fetch_array($query)){
                                            
                                            
                                ?>
                                <tr>

                                    <td><?php echo $mhs['masp']?></td>
                                    <td><?php echo $mhs['tensp']?></td>
                                    <td><img src="assets/image/sanpham/<?php echo $mhs['anhsp'];?>"
                                            style="padding-left: 20px;" width="100" alt=""></td>
                                    <td><?php echo $mhs['math']?></td>
                                    <td><?php echo $mhs['madmphu']?></td>
                                    <td><?php echo $mhs['phanloai']?></td>
                                    <td><?php echo $mhs['giaban']?></td>
                                    <td><?php echo $mhs['motasp']?></td>


                                    <td><a onclick="hapus_data('<?php echo $mhs['masp'];?>')"
                                            class="btn btn-sm btn-danger">Xóa</a>

                                        <a href="index.php?page=edit_data_sanpham&&masp=<?php echo $mhs['masp'];?>"
                                            class="btn btn-sm btn-success">Sửa</a>
                                        <a class="view-data-sp btn btn-sm btn-info" data-toggle="modal"
                                            data-target="#modal-view" data-masp="<?php echo $mhs['masp']?>"
                                            data-tensp="<?php echo $mhs['tensp']?>"
                                            data-math="<?php echo $mhs['math']?>"
                                            data-madmphu="<?php echo $mhs['madmphu']?>"
                                            data-phanloai="<?php echo $mhs['phanloai']?>"
                                            data-giaban="<?php echo $mhs['giaban']?>"
                                            data-anhsp="<?php echo $mhs['anhsp']?>"
                                            data-motasp="<?php echo $mhs['motasp']?>">Chi
                                            Tiết
                                        </a>

                                    </td>
                                </tr>
                                <?php 
                                }
                                ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>



                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- them data user -->
            <form method="post" action="../admin/add/add_data_sanpham.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control mb-3" placeholder="Mã sản phẩm" name="masp">
                            <input type="text" class="form-control mb-3" placeholder="Tên sản phẩm" name="tensp">
                            <input type="file" name='photo' class="form-control mb-3" id="customFile">
                            <select class="custom-select mb-3" name="math">
                                <option selected>Chọn thương hiệu</option>
                                <?php  
                                $query = mysqli_query($conn, "SELECT * FROM thuonghieu");
                                while ($mhs = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $mhs['math'] . '">' . $mhs['tenth'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="custom-select mb-3" name="madmphu">
                                <option selected>Chọn danh mục</option>
                                <?php  
                                $query = mysqli_query($conn, "SELECT * FROM dmphu");
                                while ($mhs = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $mhs['madmphu'] . '">' . $mhs['tendmphu'] . '</option>';
                                }
                                ?>
                            </select>
                            <input type="text" class="form-control mb-3" placeholder="Phân loại" name="phanloai">
                            <input type="text" class="form-control mb-3" placeholder="Giá bán" name="giaban">
                            <input type="text" class="form-control mb-3" placeholder="Mô tả" name="motasp">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- model view data -->
    <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chi tiết</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form method="get" action="../admin/add/add_data_sanpham.php">
                    <div class="modal-body">

                        <div class="form-row">
                            <div class="col">
                                <b>Mã sản phẩm:</b> <span id="masp"></span>
                            </div>

                            <div class="col">
                                <b>Tên sản phẩm:</b> <span id="tensp"></span>
                            </div>
                            <div class="col">
                                <b>Mã thương hiệu:</b> <span id="math"></span>
                            </div>
                            <div class="col">
                                <b>Mã DM phụ:</b> <span id="madmphu"></span>
                            </div>
                            <div class="col">
                                <b>Phân loại:</b> <span id="phanloai"></span>
                            </div>
                            <div class="col">
                                <b>Giá bán:</b> <span id="giaban"></span>
                            </div>

                            <div class="col">
                                <b>Ảnh:</b> <span id="anhsp"></span>
                            </div>
                            <div class="col">
                                <b>Mô tả:</b> <span id="motasp"></span>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                        <!-- <button type="submit" class="btn btn-primary">Lưu</button> -->
                    </div>
                </form>
            </div>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- vid 11 -->
    <script>
    function hapus_data(masp) {
        // Show a confirmation dialog using SweetAlert2
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa không?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "../admin/delete/delete_data_sanpham.php?masp=" + masp;
            }
        });
    }
    </script>


    <?php
  if(isset ($_GET['error'])){
    $x =($_GET['error']);
    if($x==1){
      echo "
      <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 2000
      });
      Toast.fire({
        icon: 'warning',
        title: 'Danh mục đã có'
      })</script>";
      
    }
    else if($x==2){
      echo "
      <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 2000
      });
      Toast.fire({
        icon: 'warning',
        title: 'Hãy nhập đầy đủ thông tin'
      })</script>";
      
    }else{
      echo "";
    }
  }
  