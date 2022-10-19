<div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>
    <div class="search-box">
        <form method="GET">
            <button type="submit">
                <i class="uil uil-search"></i>
            </button>
            <input type="text" name="name" value="" placeholder="Search here...">
        </form>
    </div>
</div>
<div class="dash-content">
    <div class="overview">
        <div class="activity">
            <div class="activity-header">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Categories Management</span>
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
            <div class="activity-categories">
                <div class="title-categories">
                    <div class="title-pro stt">STT</div>
                    <div class="title-pro categories">Tên danh mục</div>
                    <div class="title-pro func">Chức năng</div>
                </div>
                <?php
                if (is_array($items_loai) || is_object($items_loai)) {
                    foreach ($items_loai as $loai) {
                        extract($loai);
                ?>
                        <div class="list-categories">
                            <div class="name"><?= $ma_loai ?></div>
                            <div class="qty"><?= $ten_loai ?></div>
                            <div class="func">
                                <a href="./index.php?btn_edit&ma_loai=<?= $ma_loai ?>">
                                    <button class="btn btn-update updateBtn">Sửa</button>
                                </a>
                                <a onclick="confirm('Bạn có chắc chắn muốn xóa không')" href="./index.php?btn_delete&ma_loai=<?= $ma_loai ?>">
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