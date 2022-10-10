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
                <span class="text">Analytics Management</span>
            </div>
        </div>

        <div class="activity-analytics">
            <div class="title-analytics">
                <div class="title-pro name">Loại hàng</div>
                <div class="title-pro image">Số lượng</div>
                <div class="title-pro price">Giá cao nhất</div>
                <div class="title-pro status">Giá thấp nhất</div>
                <div class="title-pro func">Giá trung binh</div>
            </div>
        </div>
        <?php
        if (is_array($items) || is_object($items)) {
            foreach ($items as $bl) {
                extract($bl);
        ?>
                <div class="list-analytics">
                    <div class="name"><?= $ten_loai ?></div>
                    <div class="image"><?= $so_luong ?></div>
                    <div class="qty"><?= number_format($gia_min, 2, ',', '.') ?></div>
                    <div class="price"><?= number_format($gia_max, 2, ',', '.') ?></div>
                    <div class="func">
                        <?= number_format($gia_avg, 2, ',', '.') ?>
                    </div>
                </div>
        <?php }
        } ?>
        <a href="./index.php?chart">
            <button class="btn btn-info view">Xem biểu đồ</button>
        </a>
    </div>
</div>
</div>