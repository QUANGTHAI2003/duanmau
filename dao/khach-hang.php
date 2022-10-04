<?php
require_once 'pdo.php';
    function kh_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro) {
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email, hinh, kich_hoat, vai_tro) VALUES(?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $email, $hinh='user.png', $kich_hoat = 1, $vai_tro = 1);
    }

    function kh_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro) {
        $sql = "UPDATE khach_hang SET mat_khau=?, ho_ten=?, email=?, hinh=?, kich_hoat=?, vai_tro=? WHERE ma_kh=?";
        pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat == 1, $vai_tro == 1, $ma_kh);
    }

    function kh_delete($ma_kh) {
        $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
        if(is_array($ma_kh)) {
            foreach ($ma_kh as $ma) {
                pdo_execute($sql, $ma);
            }
        } else {
            pdo_execute($sql, $ma_kh);
        }
    }

    function kh_selectAll() {
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
    }

    function kh_select_by_id($ma_kh) {
        $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
        return pdo_query_one($sql, $ma_kh);
    }

    function kh_exists($ma_kh) {
        $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
        return pdo_query_value($sql, $ma_kh) > 0;
    }

    function kh_select_by_role($vai_tro) {
        $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
        return pdo_query($sql, $vai_tro);
    }

    function kh_change_password($ma_kh, $mat_khau_moi) {
        $sql = "UPDATE khach_hang SET mat_khau = ? WHERE ma_kh = ?";
        pdo_execute($sql, $mat_khau_moi, $ma_kh);
    }
