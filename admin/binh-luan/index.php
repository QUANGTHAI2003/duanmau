<?php
require "../../global.php";
require_once '../../dao/pdo.php';
require_once '../../dao/binh-luan.php';
require_once '../../dao/thong-ke.php';
extract($_REQUEST);

if (exist_param("ma_hh", $_REQUEST)) {
    $items_detail = bl_select_by_hh($ma_hh);
    $VIEW_NAME = 'detail.php';
} elseif (exist_param("btn_delete")) {
    try {
        bl_delete($ma_bl);
        $msg = "<div class='alert alert-success'>Xóa thành công</div>";
        $items_bl = bl_selectAll();
        $items_detail = bl_select_by_hh($ma_hh);
        $VIEW_NAME = 'detail.php';
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Xóa thất bại</div>";
        $items_bl = bl_selectAll();
        $items_detail = bl_select_by_hh($ma_hh);
        $VIEW_NAME = 'detail.php';
    }
} else {
    $items_bl = thong_ke_binh_luan();
    $VIEW_NAME = 'list.php';
}

require "../layout.php";
