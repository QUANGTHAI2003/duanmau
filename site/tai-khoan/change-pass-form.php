<?php
require_once '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exist_param("update-pass")) {
    $user_up = kh_select_by_id($ma_kh);
    if ($user_up) {
        if ($_POST['mat_khau'] != $_POST['mat_khau2']) {
            $error = "Mật khẩu không khớp";
            $VIEW_NAME = './change-pass.php';
        } else {
            if ($user_up['mat_khau'] != $_POST['mat_khau']) {
                $error = "Mật khẩu cũ không đúng";
                $VIEW_NAME = './change-pass.php';
            } else {
                kh_change_password($ma_kh, $_POST['mat_khau']);
                $VIEW_NAME = './change-pass.php';
            }
        }
    }
}
