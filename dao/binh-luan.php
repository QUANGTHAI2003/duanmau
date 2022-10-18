<?php
function bl_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}

function bl_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $sql = "UPDATE binh_luan SET ma_bl = ?, ma_kh = ?, ma_hh = ?, noi_dung = ? WHERE ma_kh = ?";
    pdo_execute($sql, $ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}

function bl_delete($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl = ?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

function bl_selectAll()
{
    $sql = "SELECT * FROM binh_luan ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}

function bl_select_by_id($ma_bl)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl = ?";
    return pdo_query_one($sql, $ma_bl);
}

function bl_exist($ma_bl)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl = ?";
    return pdo_query_value($sql, $ma_bl) > 0;
}

function bl_select_by_hh($ma_hh)
{
    $sql = "SELECT hh.ma_hh, kh.hinh, bl.noi_dung, kh.ho_ten, bl.ngay_bl, kh.ma_kh 
                FROM hang_hoa hh 
                JOIN binh_luan bl ON hh.ma_hh = bl.ma_hh 
                JOIN khach_hang kh ON bl.ma_kh = kh.ma_kh 
                WHERE hh.ma_hh = ? 
                GROUP BY hh.ma_hh, kh.hinh 
                ORDER BY bl.ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}

function bl_select_by_kh($ma_kh)
{
    $sql = "SELECT ho_ten, hinh, noi_dung, ngay_bl FROM binh_luan bl JOIN khach_hang kh ON bl.ma_kh = kh.ma_kh WHERE bl.ma_kh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_kh);
}
