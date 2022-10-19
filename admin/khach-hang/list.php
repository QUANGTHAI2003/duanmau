<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search here...">
    </div>

    <!--<img src="images/profile.jpg" alt="">-->
</div>

<div class="dash-content">
    <div class="overview">
        <div class="activity">
            <div class="activity-header">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Product Management</span>
                </div>
                <div class="add title">
                    <button class="text openbox">
                        <a href="./index.php?btn_add">
                            <i class="uil uil-plus"></i>
                        </a>
                    </button>
                </div>
            </div>
            <?= $msg ?>
            <div class="activity-user">
                <div class="title-user">
                    <div class="title-pro name">Mã KH</div>
                    <div class="title-pro name">Họ tên</div>
                    <div class="title-pro email">Email</div>
                    <div class="title-pro date">Hình ảnh</div>
                    <div class="title-pro status">Vai trò</div>
                    <div class="title-pro func">Chức năng</div>
                </div>
                <?php
                if (is_array($items_kh) || is_object($items_kh)) {
                    foreach ($items_kh as $kh) {
                        extract($kh);
                ?>
                        <div class="list-user">
                            <div class="id"><?= $ma_kh ?></div>
                            <div class="name"><?= $ho_ten ?></div>
                            <div class="email"><?= $email ?></div>
                            <div class="image"><?= $hinh ?></div>
                            <div class="role"><?= ($vai_tro == 0) ? "Nhân viên" : "Khách hàng"; ?></div>
                            <div class="func">
                                <a href="./index.php?btn_edit&ma_kh=<?= $ma_kh ?>">
                                    <button class="btn btn-update updateBtn">Sửa</button>
                                </a>
                                <a onclick="confirm('Bạn có chắc chắn muốn xóa không')" href="./index.php?btn_delete&ma_kh=<?= $ma_kh ?>">
                                    <button class="btn btn-delete" name="delete">Xóa</button>
                                </a>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>
<script src="<?= $CONTENT_URL ?>/js/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.alert').delay(3000).slideUp(400, 'linear');
    });
</script>