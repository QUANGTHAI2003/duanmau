<?php
session_start();
require_once '../../dao/pdo.php';


if (isset($_POST['register'])) {
    if (
        empty($_POST['email']) ||
        empty($_POST['mat_khau']) ||
        empty($_POST['ho_ten']) ||
        empty($_POST['mat_khau2']) ||
        empty($_POST['ma_kh']) ||
        empty($_POST['hinh']) ||
        empty($_POST['kich_hoat']) ||
        empty($_POST['vai_tro'])
    ) {
        try {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $mat_khau2 = $_POST['mat_khau2'];
            $password = $_POST['password'];

            $conn = pdo_get_connection();
            $sql = "INSERT INTO `member` VALUES ('', '$firstname', '$lastname', '$username', '$password')";
            $conn->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
        $conn = null;
        header('location:index.php');
    } else {
        echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
    }
}
