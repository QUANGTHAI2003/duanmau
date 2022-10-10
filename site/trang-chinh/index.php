<?php
    require_once '../../global.php';
    require_once '../../dao/loai.php';
    require_once '../../dao/pdo.php';

    if(exist_param("gioi-thieu")) {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "trang-chinh/gioi-thieu.php";
    } elseif(exist_param("lien-he")) {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "trang-chinh/lien-he.php";
    } elseif(exist_param("tin-tuc")) {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "trang-chinh/tin-tuc.php";
    } elseif(exist_param("san-pham")) {
        $items_loai = loai_selectAll();
        $VIEW_NAME = "hang-hoa/liet-ke-ui.php";
        require_once '../hang-hoa/liet-ke.php';
    } else {
        require_once '../../dao/hang-hoa.php';
        $items_home = hh_selectAll_home();
        $items_top = hh_select_top8();
        $items_loai = loai_selectAll();
        $VIEW_NAME = "trang-chinh/trang-chu.php";
    }

    require '../layout.php';
?>  