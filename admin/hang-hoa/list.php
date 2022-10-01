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
        <div class="activity"></div>
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
        <div class="activity-product">
            <div class="title-product">
                <div class="title-pro name">Tên sản phẩm</div>
                <div class="title-pro image">Hình ảnh</div>
                <div class="title-pro price">Giá</div>
                <div class="title-pro status">Ngày nhập</div>
                <div class="title-pro func">Chức năng</div>
            </div>
            <?php
            if (is_array($items_hh) || is_object($items_hh)) {
                foreach ($items_hh as $hh) {
                    extract($hh);
            ?>
                    <div class="list-product" style="align-items: center;">
                        <div class="name"><?= $ten_hh ?></div>
                        <div class="image"><img src="../../upload/<?= $hinh ?>" alt=""></div>
                        <div class="qty"><?= number_format($don_gia, 0, ',', '.') . 'đ' ?></div>
                        <div class="price"><?= $ngay_nhap ?></div>
                        <div class="func">
                            <a href="./index.php?btn_edit&ma_hh=<?= $ma_hh ?>">
                                <button class="btn btn-update updateBtn">Sửa</button>
                            </a>
                            <a onclick="alert('Bạn có chắc là sẽ xóa  <?= $ten_hh ?>')" href="./index.php?btn_delete&ma_hh=<?= $ma_hh ?>">
                                <button class="btn btn-delete" name="delete">Xóa</button>
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <div class="product__pagination">
            <a href="?btn_list&page_num=0">|&lt;</a>
            <a href="?btn_list&page_num=<?= $_SESSION['page_num'] -1 ?>">&lt;&lt;</a>
            <a href="?btn_list&page_num=<?= $_SESSION['page_num'] +1 ?>">&gt;&gt;</a>
            <a href="?btn_list&page_num=<?= $_SESSION['page_count'] + 1?>">&gt;|</a>
        </div>
    </div>
</div>
</div>
</div>