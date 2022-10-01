<?php
session_start();
require_once '../../dao/pdo.php';

try {
    if (isset($_POST['login'])) {
        if (empty($_POST['email']) || empty($_POST['mat_khau'])) {
            $msg = "Email or Password is empty";
        } else {
            $query = "SELECT * FROM khach_hang WHERE email = :email AND mat_khau = :mat_khau";
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($query);
            $stmt->execute(
                array(
                    'email' => $_POST['email'],
                    'mat_khau' => $_POST['mat_khau']
                )
            );
            $count = $stmt->rowCount();
            if ($count > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['username'] = $row['ho_ten'];
                $_SESSION['login_success'] = 1;
                header("location: ../trang-chinh/index.php");
            } else {
                $msg = "Username or Password is invalid";
            }
        }
        unset($conn);
    }
} catch (PDOException $e) {
    $msg = $e->getMessage();
}
