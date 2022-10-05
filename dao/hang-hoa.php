<?php
    function hh_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet,$so_luot_xem, $ngay_nhap, $mo_ta) {
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta);
    }

    function hh_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta) {
        $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, dac_biet=?, so_luot_xem=?, ngay_nhap=?, mo_ta=? WHERE ma_hh=?";
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
    }

    function hh_delete($ma_hh) {
        $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
        if(is_array($ma_hh)) {
            foreach ($ma_hh as $ma) {
                pdo_execute($sql, $ma);
            }
        } else {
            pdo_execute($sql, $ma_hh);
        }
    }

    function hh_selectAll() {
        $sql = "SELECT * FROM hang_hoa";
        return pdo_query($sql);
    }


    function hh_selectAll_home() {
        $sql = "SELECT * FROM hang_hoa ORDER BY ngay_nhap DESC LIMIT 8";
        return pdo_query($sql);
    }

    function hh_select_by_id($ma_hh) {
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
    }

    function hh_exist($ma_hh) {
        $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_value($sql, $ma_hh) > 0;
    }

    function hh_tang_so_luot_xem($ma_hh) {
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
        pdo_execute($sql, $ma_hh);
    }

    function hh_select_top10() {
        $sql = "SELECT * FROM hang_hoa WHERE dac_biet = 1 ORDER BY ngay_nhap LIMIT 8";
        return pdo_query($sql);
    }

    function hh_select_by_loai($ma_loai, $ma_hh) {
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? AND NOT ma_hh = ?";
        return pdo_query($sql, $ma_loai, $ma_hh);
    }

    function hh_select_by_keyword($keyword) {
        $sql = "SELECT * FROM hang_hoa hh "
                . "JOIN loai l ON hh.ma_loai = l.ma_loai "
                . "WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
    }

    function hh_select_page() {
        global $SL_PER_PAGE;
        if(!isset($_SESSION['page_num'])) {
            $_SESSION['page_num'] = 0;
        }
        if(!isset($_SESSION['page_count'])) {
            $row_count = pdo_query_value("SELECT COUNT(*) FROM hang_hoa");
            $_SESSION['page_count'] = ceil($row_count / $SL_PER_PAGE);
        }
        if(exist_param("page_num")) {
            $_SESSION['page_num'] = $_REQUEST['page_num'];
        }
        if($_SESSION['page_num'] < 0) {
            $_SESSION['page_num'] = $_SESSION['page_count'] - 1;
        }
        if($_SESSION['page_num'] > $_SESSION['page_count'] + 1) {
            $_SESSION['page_num'] = 0;
        }
        $sta = $SL_PER_PAGE * $_SESSION['page_num'];
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$sta.", $SL_PER_PAGE";
        return pdo_query($sql);
    }

    function hh_select_loai($ma_hh) {
        $sql = "SELECT ten_loai, ten_hh FROM hang_hoa hh JOIN loai l ON hh.ma_loai = l.ma_loai WHERE ma_hh=?";
        return pdo_query_one($sql, $ma_hh);
    } 
?>