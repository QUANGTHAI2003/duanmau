<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/khach-hang.php';
    extract($_REQUEST);
    $items_kh = kh_selectAll();
    $VIEW_NAME = "trang-chinh/home.php";
    require "../layout.php";
?>
