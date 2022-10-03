<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
$msg = '';
try {
    if (isset($_POST['login'])) {
        if (empty($_POST['ma_kh']) || empty($_POST['mat_khau'])) {
            $msg = "Email or Password is empty";
        } else {
            $query = "SELECT * FROM khach_hang WHERE ma_kh = :ma_kh AND mat_khau = :mat_khau";
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($query);
            $stmt->execute(
                array(
                    'ma_kh' => $_POST['ma_kh'],
                    'mat_khau' => $_POST['mat_khau']
                )
            );

            if(exist_param('ghi_nho')) {
                add_cookie('ma_kh', $_POST['ma_kh'], 30);
                add_cookie('mat_khau', $_POST['mat_khau'], 30);
            } else {
                delete_cookie('ma_kh');
                delete_cookie('mat_khau');
            }

            $count = $stmt->rowCount();
            if ($count > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['ma_kh'] = $_POST['ma_kh'];
                $_SESSION['username'] = $row['ho_ten'];
                $_SESSION['login_success'] = 1;
                header("location: ../trang-chinh/index.php");
            } else {
                $msg = "<div class='alert alert-danger'>Email hoặc password sai! Vui lòng thử lại</div>";
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
