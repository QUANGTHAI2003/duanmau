<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exist_param('change-pass')) {
    $items_edit = kh_select_by_id($ma_kh);
    extract($items_edit);
    $VIEW_NAME = '../tai-khoan/change-pass-form.php';
} elseif (exist_param('edit_info')) {
    $items_edit = kh_select_by_id($ma_kh);
    extract($items_edit);
    $VIEW_NAME = '../tai-khoan/edit-account.php';
} elseif (exist_param('update_info')) {
    try {
        $ma_kh = isset($_POST['ma_kh']) ? $_POST['ma_kh'] : '';
        $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
        $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : '';
        $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : '';

        $hinh = save_file('hinh', "$UPLOAD_URL_USER/");
        kh_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $items_edit = kh_select_by_id($ma_kh);
        extract($items_edit);
        $VIEW_NAME = './edit-account.php';
    } catch (Exception $e) {
        $VIEW_NAME = './edit-account.php';
    }
} else {
    $items_info = kh_select_by_id($ma_kh);
    extract($items_info);
    $VIEW_NAME = './info.php';
}
require '../layout.php';
