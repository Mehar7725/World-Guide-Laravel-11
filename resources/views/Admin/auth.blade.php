<?php
session_start();

// Test credentials
$valid_email = "admin@example.com";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: page_login.php");
        exit();
    }
}

// If accessed directly without POST
header("Location: page_login.php");
exit();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>HUD | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/css/vendor.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
    <!-- BEGIN #app -->
    <div id="app" class="app app-full-height app-without-header">
        <!-- BEGIN login -->
        <div class="login">
            <!-- BEGIN login-content -->
            <div class="login-content">
                <form action="auth.php" method="POST" name="login_form">
                    <h1 class="text-center">Sign In</h1>
                    
                    <?php if(isset($_SESSION['login_error'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                                echo $_SESSION['login_error']; 
                                unset($_SESSION['login_error']); 
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="text-inverse text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
                        </div>
                        <input type="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                    <div class="text-center text-inverse text-opacity-50">
                        Don't have an account yet? <a href="page_register.html" class="text-inverse text-decoration-none text-opacity-50">Sign up</a>
                    </div>
                </form>
            </div>
            <!-- END login-content -->
        </div>
        <!-- END login -->
        
        <!-- BEGIN theme-panel -->
        <div class="app-theme-panel">
            <!-- Your existing theme panel code -->
        </div>
        <!-- END theme-panel -->
    </div>
    <!-- END #app -->
    
    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->
</body>
</html>