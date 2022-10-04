<section class="categories-product">
    <div class="product-cate">
        <div class="title-cate">Danh mục sản phẩm</div>
        <ul class="content-cate">
            <?php foreach ($items_loai as $loai) { ?>
                <li><a href="<?= $SITE_URL ?>/trang-chinh/?san-pham&ma_loai=<?= $loai['ma_loai'] ?>"><?= $loai['ten_loai'] ?></a></li>
            <?php } ?>

        </ul>
    </div>
</section>