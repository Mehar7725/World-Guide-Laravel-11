<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = $_POST['full_name'];
    
    // Handle profile image upload
    $profile_image = 'assets/img/user/default.jpg';
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {
        $upload_dir = 'assets/img/user/';
        $file_ext = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
        $file_name = uniqid() . '.' . $file_ext;
        $target_file = $upload_dir . $file_name;
        
        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_file)) {
            $profile_image = $target_file;
        }
    }
    
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, full_name, profile_image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $password, $full_name, $profile_image);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Registration successful! Please login.";
        header("Location: page_login.php");
    } else {
        $_SESSION['error_message'] = "Registration failed: " . $conn->error;
        header("Location: page_register.php");
    }
    exit();
}
?>