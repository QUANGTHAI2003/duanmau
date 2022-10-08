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

        <div class="activity-detail">
            <div class="title-detail">
                <div class="title-pro name">
                    <input type="checkbox" onclick="toogleCheckBox(this)" id="">
                </div>
                <div class="title-pro name">Nội dung</div>
                <div class="title-pro image">Ngày bình luận</div>
                <div class="title-pro price">Người bình luận</div>
                <div class="title-pro func">&emsp;&emsp;</div>
            </div>
            <?php
            if (is_array($items_detail) || is_object($items_detail)) {
                foreach ($items_detail as $bl) {
                    extract($bl);
            ?>
                    <div class="list-detail">
                        <div class="name">
                            <input type="checkbox" name="checkBox" value="checkbox<?= $ma_hh ?>" id="">
                        </div>
                        <div class="name text">
                            <?= $noi_dung ?>
                        </div>
                        <div class="image"><?= $ngay_bl ?></div>
                        <div class="qty"><?= $ma_kh ?></div>
                        <div class="func">
                            <a href="./index.php?btn_delete&ma_bl=<?= $ma_bl ?>">
                                <button>
                                    <span>Delete</span>
                                </button>
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
        for (let i = 0; i < lengthCheckBox; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>