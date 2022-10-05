<?php
    require_once '../../global.php';
    require '../../dao/hang-hoa.php';
    require '../../dao/binh-luan.php';
    require '../../dao/loai.php';
    require '../../dao/pdo.php';

    extract($_REQUEST);
    $items_hh = hh_select_by_id($ma_hh);
    $item_loaihh = hh_select_loai($ma_hh);
    extract($items_hh);
    extract($item_loaihh);

    // Tăng số lượt xem
    hh_tang_so_luot_xem($ma_hh);

    // Truy vấn hàng cùng loại
    $hh_cung_loai = hh_select_by_loai($ma_loai, $ma_hh);
    $items_loai = loai_selectAll();

    $VIEW_NAME =   "../hang-hoa/chi-tiet-ui.php";


    require '../layout.php';
