<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/khach-hang.php';

try {
    if (isset($_POST['forgot'])) {
        $ma_kh = $_POST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $mat_khau2 = $_POST['mat_khau2'];
        $kh = kh_select_by_id($ma_kh);

        if (kh_exists($ma_kh)) {
            if ($mat_khau == $mat_khau2) {
                kh_change_password($ma_kh, password_hash($mat_khau, PASSWORD_DEFAULT));
                add_cookie("mat_khau", $mat_khau, 30);
                $msg = '<div class="alert alert-success">Đổi mật khẩu thành công</div>';
            } else {
                $msg = '<div class="alert alert-danger">Mật khẩu không khớp</div>';
            }
        } else {
            $msg = '<div class="alert alert-danger">Mã khách hàng không tồn tại</div>';
        }
    }
} catch (PDOException $e) {
    $msg = $e->getMessage();
} finally {
    unset($conn);
}
require './quen-mk-form.php';
