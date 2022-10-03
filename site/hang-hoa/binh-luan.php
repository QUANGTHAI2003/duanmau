<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';
require_once '../../dao/binh-luan.php';

// Bình luận
if (exist_param('noi_dung')) {
    $ma_kh = $_SESSION['ma_kh'];
    $noi_dung = $_POST['noi_dung'];
    $ma_hh = $_GET['ma_hh'];
    $ngay_bl = date_format(date_create(), 'd-m-Y');
    bl_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}
$bl_list = bl_select_by_hh($ma_hh); ?>

<h3 class="title">Bình luận</h3>
<div class="comment-input">
    <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="POST">
        <input type="text" name="noi_dung" placeholder="Viết bình luận">
        <button type="submit" name="comment">Bình luận</button>
    </form>
</div>