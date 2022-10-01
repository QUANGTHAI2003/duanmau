<?php
    require_once '../../global.php';
    require_once '../../dao/hang-hoa.php';

    extract($_REQUEST);

    if(exist_param("ma_loai")){
        $items = hh_select_by_loai($ma_loai);
    } elseif(exist_param("keywords")){
        $items = hh_select_by_keyword($keywords);
    } else{
        $items = hh_selectAll();
    }

    $VIEW_NAME = "hang-hoa/liet-ke-ui.php";
    require '../layout.php';
?>