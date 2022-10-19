<?php
require_once '../../dao/khach-hang.php';
require_once '../../dao/pdo.php';
require "../../global.php";
extract($_REQUEST);
if (exist_param("btn_list")) {
    $items_kh = kh_selectAll();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
    try {
        $mat_khau = $_POST['mat_khau'];
        $mat_khau2 = $_POST['mat_khau2'];
        if ($mat_khau == $mat_khau2) {
            $ma_kh = isset($_POST['ma_kh']) ? $_POST['ma_kh'] : '';
            $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
            $mat_khau = isset($mat_khau) ? password_hash($mat_khau, PASSWORD_DEFAULT) : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : '';
            $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : '';

            $up_hinh = save_file("hinh", $UPLOAD_URL_USER);
            $hinh = strlen($up_hinh) > 0 ? $up_hinh : "user.png";

            kh_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $msg = "<div class='alert alert-success'>Thêm mới thành công</div>";
            $items_kh = kh_selectAll();
            $VIEW_NAME = "list.php";
        } else {
            $msg = "<div class='alert alert-danger'>Mật khẩu không khớp</div>";
            $VIEW_NAME = "add.php";
        }
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã khách hàng đã tồn tại</div>";
        $VIEW_NAME = "add.php";
    }
} elseif (exist_param("btn_edit")) {
    try {
        $ma_kh = $_REQUEST['ma_kh'];
        $kh_info = kh_select_by_id($ma_kh);
        extract($kh_info);
        $items_kh = kh_selectAll();
        $VIEW_NAME = "edit.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã khách hàng không tồn tại</div>";
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_delete")) {
    try {
        $ma_kh = $_REQUEST['ma_kh'];
        kh_delete($ma_kh);
        $msg = "<div class='alert alert-success'>Xóa thành công</div>";
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Xóa thất bại</div>";
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    }
} elseif (exist_param("btn_update")) {
    try {
        $mat_khau = $_POST['mat_khau'];
        $mat_khau2 = $_POST['mat_khau2'];
        if ($mat_khau == $mat_khau2) {
            $mat_khau = $_POST['mat_khau'];
            $mat_khau2 = $_POST['mat_khau2'];
            if ($mat_khau == $mat_khau2) {
                $ma_kh = isset($_POST['ma_kh']) ? $_POST['ma_kh'] : '';
                $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
                $mat_khau = isset($mat_khau) ? password_hash($mat_khau, PASSWORD_DEFAULT) : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : '';
                $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : '';

                $up_hinh = save_file("hinh", $UPLOAD_URL_USER);
                $hinh = strlen($up_hinh) > 0 ? $up_hinh : "user.png";

                kh_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
                $msg = "<div class='alert alert-success'>Thêm mới thành công</div>";
                $items_kh = kh_selectAll();
                $VIEW_NAME = "list.php";
            } else {
                $msg = "<div class='alert alert-danger'>Mật khẩu không khớp</div>";
                $VIEW_NAME = "add.php";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Mật khẩu không khớp</div>";
            $VIEW_NAME = "add.php";
        }
    } catch (Exception $exc) {
        $msg = "<div class='alert alert-danger'>Mã khách hàng không tồn tại</div>";
        $VIEW_NAME = "edit.php";
    }
} else {
    $items_kh = kh_selectAll();
    $VIEW_NAME = "add.php";
}
require "../layout.php";
