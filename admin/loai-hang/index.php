<?php
    require_once '../../dao/loai.php';
    require_once '../../dao/pdo.php';
    require_once "../../global.php";
    extract($_REQUEST);
    if(exist_param("btn_list")) {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_insert")) {
        $ten_loai = $_POST['ten_loai'];
        loai_insert($ten_loai);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_edit")) {
        $ma_loai = $_REQUEST['ma_loai'];
        $loai_info = loai_select_by_id($ma_loai);
        extract($loai_info);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "edit.php";
    } elseif(exist_param("btn_delete")) {
        $ma_loai = $_REQUEST['ma_loai'];
        loai_delete($ma_loai);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } elseif(exist_param("btn_update")) {
        $ma_loai = $_REQUEST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        loai_update($ma_loai, $ten_loai);
        $items_loai = loai_selectAll();
        $VIEW_NAME = "list.php";
    } else {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "add.php";
    }
    require "../layout.php";
?>