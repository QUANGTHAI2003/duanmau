<?php
session_start();
unset($_SESSION['email']);
$_SESSION['logout_success'] = 1;
header("location: ../trang-chinh/index.php");
