<?php
    require_once '../../global.php';
    require_once '../../dao/hang-hoa.php';
    require_once '../../dao/loai.php';

    extract($_REQUEST);

    if(exist_param("ma_loai")){
        $items = hh_select_by_loai($ma_loai);
    } elseif(exist_param("keywords")){
        $items = hh_select_by_keyword($keywords);
    } elseif(exist_param("ma_hh")){
        $items_hh = hh_select_by_id($ma_hh);
    } else{
        $items = hh_selectAll();
        $items_loai = loai_selectAll();
    }

    $VIEW_NAME = "hang-hoa/liet-ke-ui.php";
    // require '../layout.php';
?>