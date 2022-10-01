<?php
    require_once '../../dao/khach-hang.php';
    require_once '../../dao/pdo.php';
    require "../../global.php";
    extract($_REQUEST);
    if(exist_param("btn_list")) {
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_insert")) {
        $ma_kh = isset($_POST['ma_kh']) ? $_POST['ma_kh'] : '';
        $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';  
        $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $hinh = isset($_FILES['hinh']['name']) ? $_FILES['hinh']['name'] : '';
        $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : '';
        $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : '';

        kh_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_edit")) {
        $ma_kh = $_REQUEST['ma_kh'];
        $kh_info = kh_select_by_id($ma_kh);
        extract($kh_info);
        $items_kh = kh_selectAll();
        $VIEW_NAME = "edit.php";
    } elseif(exist_param("btn_delete")) {
        $ma_kh = $_REQUEST['ma_kh'];
        kh_delete($ma_kh);
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_update")) {
        $ma_kh = isset($_POST['ma_kh']) ? $_POST['ma_kh'] : '';
        $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';  
        $mat_khau = isset($_POST['mat_khau']) ? $_POST['mat_khau'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $hinh = isset($_FILES['hinh']['name']) ? $_FILES['hinh']['name'] : '';
        $kich_hoat = isset($_POST['kich_hoat']) ? $_POST['kich_hoat'] : '';
        $vai_tro = isset($_POST['vai_tro']) ? $_POST['vai_tro'] : '';
        kh_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        
        $items_kh = kh_selectAll();
        $VIEW_NAME = "list.php";
    } else {
        $items_kh = kh_selectAll();
        $VIEW_NAME = "add.php";
    }
    require "../layout.php";
