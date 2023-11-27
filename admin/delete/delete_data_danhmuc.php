<?php
    include_once("../services/connect.php");
    $madm = $_GET['madm'];
    
    $sql = "DELETE FROM danhmuc WHERE madm='$madm'";
    $result = $conn->query($sql); 

    // $query = mysqli_query($conn,"DELETE FROM tb_admin WHERE id='$id'");
    header("Location: ../index.php?page=danhmuc");
?>