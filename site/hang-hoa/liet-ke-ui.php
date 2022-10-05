<section class="background">
    <div class="content-bg">
        <h3 class="title-bg"><?= $ten_loai ?? 'Tất cả sản phẩm' ?></h3>
        <p>
            <span class="bg-title">Trang chủ</span>
            <i class="fa-solid fa-angle-right"></i>
            <span class="page"><?= $ten_loai ?? 'Sản phẩm' ?></span>
        </p>
    </div>
</section>
<section class="product-list">
    <h2 class="text-gradient"><?= $ten_loai ?? 'Tất cả sản phẩm' ?></h2>
    <br>
    <div class="product-list-container">
        <div class="product-inner-container">
            <?php include '../hang-hoa/danh-muc.php' ?>
            <section class="product-grid">
                <?php foreach ($items as $pro) { ?>
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $pro['ma_hh'] ?>" style="text-decoration:none">
                        <section class="product-grid-inner">
                            <article class="product-card mix tesla">
                                <section class="product-thumbnail">
                                    <img src="<?= $IMAGES_URL ?>/<?= $pro['hinh'] ?>" alt="">
                                </section>
                                <section class="product-content">
                                    <h3 class="product-name" style="color: black"><?php echo $pro['ten_hh'] ?></h3>
                                    </h3>
                                    <section class="product-price">
                                        <section class="product-new-price price">
                                            <?= number_format($pro['don_gia'], 0, ',', '.') . 'đ' ?>
                                        </section>
                                    </section>
                                </section>
                            </article>
                        </section>
                    </a>
                <?php } ?>
            </section>
        </div>
    </div>
</section>