<?php
include 'config.php';

// Destroy session and redirect to login
session_destroy();
header('Location: login.php?message=logged_out');
exit();
?>