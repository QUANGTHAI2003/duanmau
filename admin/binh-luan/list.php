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
        <div class="activity-header">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Comments Management</span>
            </div>
        </div>

        <div class="activity-comment">
            <div class="title-comment">
                <div class="title-pro name">Hàng hóa</div>
                <div class="title-pro image">Số bình luận</div>
                <div class="title-pro price">Bình luận mới nhất</div>
                <div class="title-pro status">Bình luận cũ nhất</div>
                <div class="title-pro func">Bình luận chi tiết</div>
            </div>
            <?php
            if (is_array($items_bl) || is_object($items_bl)) {
                foreach ($items_bl as $bl) {
                    extract($bl);
            ?>
                    <div class="list-comment">
                        <div class="name"><?= $ten_hh ?></div>
                        <div class="image"><?= $so_luong ?></div>
                        <div class="qty"><?= $moi_nhat ?></div>
                        <div class="price"><?= $cu_nhat ?></div>
                        <div class="func">
                            <a href="./index.php?ma_hh=<?= $ma_hh ?>">
                                <button>Chi tiêt</button>
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>

<script>
    function toogleCheckBox(source) {
        var checkboxes = document.getElementsByName('checkBox');
        lengthCheckBox = checkboxes.length;
        for (var i = 0; i < lengthCheckBox; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>