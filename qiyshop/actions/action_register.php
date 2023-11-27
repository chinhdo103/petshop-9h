<?php 

include_once '../services/connect.php';

function registerUser($name,$email, $password) {
    global $conn;

    // Hash the password before storing it in the database
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO khachhang (tenkh,email, matkhau) VALUES (?,?, ?)");
    $stmt->bind_param("sss",$name, $email, $password);

    if ($stmt->execute()) {
        // Registration successful
        return true;
    } else {
        // Registration failed
        return false;
    }

}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmPassword = $_POST['cpass'];

    // Validate form data
    // Add your validation logic here (e.g., check if email is valid, passwords match, etc.)

    // Example: Check if passwords match
    if ($password !== $confirmPassword) {
        $passwordMatchError = "Mật khẩu không khớp";
    } else {
        // Call the registerUser function
        if (registerUser($name,$email, $password)) {
            // Registration successful, redirect to a success page
            header("Location: ../login.php");
            exit();
        } else {
            // Registration failed, display an error message
            echo 'mật khẩu không trùng khớp';
        }
    }
}


?>