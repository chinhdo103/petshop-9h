<?php
    include_once("../services/connect.php");
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $math = $_POST['math'];
    $madmphu = $_POST['madmphu'];
    $phanloai = $_POST['phanloai'];
    $giaban = $_POST['giaban'];
    $motasp = $_POST['motasp'];

    $name_file = $_FILES['photo']['name'];
    $clean_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');


    $file_tmp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp,'../assets/image/sanpham/'. $name_file);
    // Sử dụng prepared statements để ngăn chặn SQL Injection
    $sql = "UPDATE sanpham SET tensp = '$tensp', math = '$math',madmphu = '$madmphu', phanloai = '$phanloai', giaban = '$giaban' , anhsp='$name_file'where masp='$masp'";
        $result = $conn->query($sql); 
        // $query = mysqli_query($conn,"INSERT INTO tb_admin ( name, username, password, level) VALUES ('$name','$username','$password','$level')");
        header("Location: ../index.php?page=sanpham");
    
   
?>