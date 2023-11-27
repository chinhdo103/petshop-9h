<?php
session_start();
include_once('../services/connect.php');

// Assuming you have a user ID stored in the session
$userId = $_SESSION['makh'];

// Fetch cart items from the database
$stmt = $conn->prepare("SELECT giohang.*, sanpham.anhsp FROM giohang JOIN sanpham ON giohang.masp = sanpham.masp WHERE giohang.makh = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

// Calculate total amount
$totalAmount = 0;
while ($row = $result->fetch_assoc()) {
    $totalAmount += $row['tonggia_sp'];
}

// Insert into invoices table
$stmt_invoice = $conn->prepare("INSERT INTO donhang (makh, tonggia) VALUES (?, ?)");
$stmt_invoice->bind_param("id", $userId, $totalAmount);
$stmt_invoice->execute();
$invoiceId = $stmt_invoice->insert_id;

// Move cart items to invoice_items table
$stmt_move_to_invoice = $conn->prepare("INSERT INTO chitiet_donhang (madh, masp, soluong, gia, tonggia) VALUES (?, ?, ?, ?, ?)");
$stmt_move_to_invoice->bind_param("isidd", $invoiceId, $row['masp'], $row['soluong'], $row['giaban'], $row['tonggia_sp']);

// Execute for each cart item
$result->data_seek(0);
while ($row = $result->fetch_assoc()) {
    $stmt_move_to_invoice->execute();
}


// Clear the cart for the current user
$stmt_clear_cart = $conn->prepare("DELETE FROM giohang WHERE makh = ?");
$stmt_clear_cart->bind_param("i", $userId);
$stmt_clear_cart->execute();

$stmt_invoice->close();
$stmt_move_to_invoice->close();
$stmt_clear_cart->close();
$stmt->close();
$conn->close();

// Redirect to the invoice page
header('Location: ../invoice.php?mactdh=' . $invoiceId);
?>