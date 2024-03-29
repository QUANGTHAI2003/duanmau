<?php
require_once '../../dao/hang-hoa.php';
require_once '../../dao/loai.php';
require_once '../../dao/pdo.php';
require "../../global.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items_hh = hh_select_page();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
    try {
        $ten_hh = isset($_POST['ten_hh']) ? $_POST['ten_hh'] : '';
        $don_gia = isset($_POST['don_gia']) ? $_POST['don_gia'] : '';
        $giam_gia = isset($_POST['giam_gia']) ? $_POST['giam_gia'] : '';
        $ma_loai = isset($_POST['ma_loai']) ? $_POST['ma_loai'] : '';
        $dac_biet = isset($_POST['dac_biet']) ? $_POST['dac_biet'] : '';
        $mo_ta = isset($_POST['mo_ta']) ? $_POST['mo_ta'] : 'Thông tin sản phẩm đang được cập nhật';
        $ngay_nhap = date('d-m-Y');
        $so_luot_xem = 0;
        $up_hinh = save_file('hinh', $UPLOAD_URL_PRO);
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'no-image.png';
        hh_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $msg = "<div class='alert alert-success'>Thêm mới thành công</div>";
        $items_hh = hh_select_page();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã hàng hóa đã tồn tại</div>";
        $VIEW_NAME = "add.php";
    }
} elseif (exist_param("btn_edit")) {
    try {
        $ma_hh = $_REQUEST['ma_hh'];
        $hh_info = hh_select_by_id($ma_hh);
        extract($hh_info);
        $items_hh = hh_select_page();
        $items_loai = loai_selectAll();
        $VIEW_NAME = "edit.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã hàng hóa đã tồn tại</div>";
        $VIEW_NAME = "add.php";
    }
} elseif (exist_param("btn_delete")) {
    try {
        $ma_hh = $_REQUEST['ma_hh'];
        hh_delete($ma_hh);
        $msg = "<div class='alert alert-success'>Xóa thành công</div>";
        $items_hh = hh_select_page();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Xóa thất bại</div>";
        $items_hh = hh_select_page();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_update")) {
    try {
        $ma_hh = $_REQUEST['ma_hh'];
        $ten_hh = isset($_POST['ten_hh']) ? $_POST['ten_hh'] : '';
        $don_gia = isset($_POST['don_gia']) ? $_POST['don_gia'] : '';
        $giam_gia = isset($_POST['giam_gia']) ? $_POST['giam_gia'] : '';
        $ma_loai = isset($_POST['ma_loai']) ? $_POST['ma_loai'] : '';
        $dac_biet = isset($_POST['dac_biet']) ? $_POST['dac_biet'] : '';
        $ngay_nhap = date('d-m-Y');
        $mo_ta = $_POST['mo_ta'] ?? 'Thông tin sản phẩm đang được cập nhật';

        $up_hinh = save_file('up_hinh', $UPLOAD_URL_PRO);
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

        hh_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
        $msg = "<div class='alert alert-success'>Cập nhật thành công</div>";
        $items_hh = hh_select_page();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã hàng hóa đã tồn tại</div>";
        $VIEW_NAME = "add.php";
    }
} else {
    $loai_hang = loai_selectAll();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
