<?php
require_once '../../global.php';

extract($_REQUEST);
// change password
try {
    if (exist_param("update-pass")) {
        $ma_kh = $_REQUEST['ma_kh'];
        $mat_khau = $_POST['mat_khau'];
        $mat_khau2 = $_POST['mat_khau2'];
        
        if($mat_khau == $mat_khau2) {
            kh_change_password($ma_kh, password_hash($mat_khau, PASSWORD_DEFAULT));
            add_cookie("mat_khau", $mat_khau, 30);
            $msg = '<div class="alert alert-success">Đổi mật khẩu thành công</div>';
        } else {
            $msg = '<div class="alert alert-danger">Mật khẩu không khớp</div>';
        }
    }
} catch (PDOException $e) {
    $msg = $e->getMessage();
} finally {
    unset($conn);
}

require './change-pass-form.php';
