<?php
require_once '../../global.php';
require '../../dao/pdo.php';
require '../../dao/khach-hang.php';
try {
    if (isset($_POST['login'])) {
        if (empty($_POST['ma_kh']) || empty($_POST['mat_khau'])) {
            $msg = "Email or Password is empty";
        } else {
            $ma_kh = $_POST['ma_kh'];
            $mat_khau = $_POST['mat_khau'];
            $user = kh_select_by_id($ma_kh);
            if ($user) {
                if (password_verify($mat_khau, $user['mat_khau'])) {
                    $_SESSION['ma_kh'] = $user['ma_kh'];
                    $_SESSION['username'] = $user['ho_ten'];
                    $_SESSION['vai_tro'] = $user['vai_tro'];
                    $_SESSION['login_success'] = 1;
                    if ($user['vai_tro'] == 1) {
                        header("location: ../trang-chinh/index.php");
                    } else {
                        header("location: ../../admin/trang-chinh/index.php");
                    }
                } else {
                    $msg = "Mật khẩu không đúng";
                }
            } else {
                $msg = "Mã khách hàng không tồn tại";
            }
        }
    } else {
        $ma_kh = get_cookie('ma_kh');
        $mat_khau = get_cookie('mat_khau');
    }
} catch (PDOException $e) {
    $msg = $e->getMessage();
} finally {
    unset($conn);
}
require './login-form.php';
