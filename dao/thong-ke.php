<?php
function thong_ke_hang_hoa()
{
    $sql = "SELECT l.ma_loai, l.ten_loai,
            COUNT(*) so_luong, 
            MIN(hh.don_gia) gia_min,
            MAX(hh.don_gia) gia_max,
            AVG(hh.don_gia) gia_avg
            FROM hang_hoa hh 
            JOIN loai l ON l.ma_loai = hh.ma_loai 
            GROUP BY l.ma_loai, l.ten_loai";
    return pdo_query($sql);
}

function thong_ke_binh_luan()
{

    $sql = "SELECT hh.ma_hh, hh.ten_hh, 
            COUNT(*) so_luong, 
            MIN(bl.ngay_bl) cu_nhat, 
            MAX(bl.ngay_bl) moi_nhat
            FROM binh_luan bl 
            JOIN hang_hoa hh ON hh.ma_hh = bl.ma_hh 
            GROUP BY hh.ma_hh, hh.ten_hh 
            HAVING so_luong > 0";
    return pdo_query($sql);
}

function tk_hh()
{
    $sql = "SELECT COUNT(*) FROM hang_hoa";
    return pdo_query_value($sql);
}

function tk_kh()
{
    $sql = "SELECT COUNT(*) FROM khach_hang";
    return pdo_query_value($sql);
}

function tk_comment()
{
    $sql = "SELECT COUNT(*) FROM binh_luan";
    return pdo_query_value($sql);
}
