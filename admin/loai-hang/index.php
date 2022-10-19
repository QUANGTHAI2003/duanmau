<?php
require_once '../../dao/loai.php';
require_once '../../dao/pdo.php';
require_once "../../global.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items_loai = loai_selectAll();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
    try {
        $ten_loai = $_POST['ten_loai'];
        loai_insert($ten_loai);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
        $msg = "<div class='alert alert-success'>Thêm mới thành công</div>";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã loại đã tồn tại</div>";
        $VIEW_NAME = "add.php";
    }
} elseif (exist_param("btn_edit")) {
    try {
        $ma_loai = $_REQUEST['ma_loai'];
        $loai_info = loai_select_by_id($ma_loai);
        extract($loai_info);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "edit.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã loại không tồn tại</div>";
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_delete")) {
    try {
        $ma_loai = $_REQUEST['ma_loai'];
        loai_delete($ma_loai);
        $msg = "<div class='alert alert-success'>Xóa thành công</div>";
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã loại không tồn tại</div>";
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_update")) {
    try {
        $ma_loai = $_REQUEST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        loai_update($ma_loai, $ten_loai);
        $msg = "<div class='alert alert-success'>Cập nhật thành công</div>";
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã loại không tồn tại</div>";
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    }
} else {
    $items_loai = loai_selectAll();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
