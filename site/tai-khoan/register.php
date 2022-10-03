<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/khach-hang.php';

$msg = '';
try {
    if (isset($_POST['register'])) {
        if (empty($_POST['ma_kh']) || empty($_POST['mat_khau']) || empty($_POST['ho_ten']) || empty($_POST['email']) || empty($_POST['mat_khau2'])) {
            $msg = "Vui lòng nhập đầy đủ thông tin";
        } else {
            if (!kh_exists($_POST['ma_kh'])) {
                if ($_POST['mat_khau'] == $_POST['mat_khau2']) {
                    $hinh = save_file('hinh', "$UPLOAD_URL_USER/");
                    kh_insert($_POST['ma_kh'], $_POST['mat_khau'], $_POST['ho_ten'], $_POST['email'], "$hinh", '0', '0');
                    $msg = "<div class='alert alert-success'>Đăng ký thành công!</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Mật khẩu không khớp!</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Mã khách hàng đã tồn tại!</div>";
            }
        }
    }
} catch (PDOException $e) {
    $msg = $e->getMessage();
} finally {
    header("location: ./register-form.php");
    unset($conn);
}
require './register-form.php';
