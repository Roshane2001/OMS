<?php
// Start session
session_start();

// Always redirect to login page
header("Location: http://localhost/OMS_R/dist/pages/login.php");
exit();
?>
