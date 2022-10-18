<div class="same-cate">
    <h3 class="title">Sản phẩm cùng loại</h3>
    <!-- Product with the same type -->
    <div class="same-cate-inner">
        <?php foreach ($hh_cung_loai as $hh_loai) { ?>
            <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $hh_loai['ma_hh'] ?>">
                <div class="product-type">
                    <div class="product-type-image">
                        <img src="<?= $CONTENT_URL ?>/images/<?= $hh_loai['hinh'] ?>" alt="">
                    </div>
                    <div class="product-type-content">
                        <h4 class="product-type-name"><?= $hh_loai['ten_hh'] ?></h4>
                        <div class="product__price">
                            <span class="product-type-price"><?= number_format($hh_loai['don_gia'], 0, ',', '.') . 'đ' ?></span>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>