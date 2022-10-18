<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/khach-hang.php';
    require '../../dao/thong-ke.php';
    extract($_REQUEST);
    $items_kh = kh_selectAll();
    $count_hh = tk_hh();
    $count_kh = tk_kh();
    $count_comment = tk_comment();
    // Thống kê hàng hóa
    $VIEW_NAME = "trang-chinh/home.php";
    require "../layout.php";
?>
<script src="../content/app.js"></script>
