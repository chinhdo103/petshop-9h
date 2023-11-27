<?php
    include_once("../services/connect.php");
    $madm = $_POST['madm'];
    $tendm = $_POST['tendm'];
    $motadm = $_POST['motadm'];

    // Sử dụng prepared statements để ngăn chặn SQL Injection
    $stmt = $conn->prepare("UPDATE danhmuc SET tendm = ?, motadm = ? WHERE madm = ?");
    $stmt->bind_param("sss", $tendm, $motadm, $madm);

    // Thực hiện câu lệnh SQL
    if ($stmt->execute()) {
        header("Location: ../index.php?page=danhmuc");
    } else {
        echo "Có lỗi xảy ra khi cập nhật dữ liệu: " . $stmt->error;
    }
    
   
?>