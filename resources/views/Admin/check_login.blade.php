<?php
session_start();

function checkLogin() {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: page_login.php");
        exit();
    }
}

// Add this at the top of email_inbox.php
checkLogin();
?>