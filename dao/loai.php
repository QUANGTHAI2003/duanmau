<?php
function loai_selectAll()
{
    $sql = "SELECT * FROM loai ORDER BY ma_loai ASC";
    return pdo_query($sql);
}

// Thêm mới loai
function loai_insert($ten_loai)
{
    $sql = "INSERT INTO loai(ten_loai) VALUES (?)";
    pdo_execute($sql, $ten_loai);
}

// Cập nhật dữ liệu
function loai_update($ma_loai, $ten_loai)
{
    $sql = "UPDATE loai SET ten_loai = ? WHERE ma_loai = ?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}

// Xóa
function loai_delete($ma_loai)
{
    $sql = "DELETE FROM loai WHERE ma_loai = ?";
    if(is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}

// Lấy thông tin 1 mã loại
function loai_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loai WHERE ma_loai = ?";
    return pdo_query_one($sql, $ma_loai);
}

// Kiểm tra tồn tại
function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loai WHERE ma_loai = ?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
