<?php
    require_once '../../global.php';

    if(exist_param("gioi-thieu")) {
        $VIEW_NAME = "trang-chinh/gioi-thieu.php";
    } elseif(exist_param("lien-he")) {
        $VIEW_NAME = "trang-chinh/lien-he.php";
    } elseif(exist_param("tin-tuc")) {
        $VIEW_NAME = "trang-chinh/tin-tuc.php";
    } else {
        require_once '../../dao/hang-hoa.php';
        $VIEW_NAME = "trang-chinh/trang-chu.php";
    }

    require '../layout.php';
?>  