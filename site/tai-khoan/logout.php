<?php
session_start();
$msg = '';
unset($_SESSION['ma_kh']);
$_SESSION['logout_success'] = 1;
header("location: ../trang-chinh/index.php");
