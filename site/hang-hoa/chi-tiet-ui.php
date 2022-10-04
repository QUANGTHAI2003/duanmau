<!-- Header section -->
<section class="background">
    <section class="content-bg">
        <h3 class="title-bg">
            <?= $ten_hh ?>
        </h3>
        <p>
            <span class="bg-title">Trang chủ </span>
            <i class="fa-solid fa-angle-right"></i>
            <span class="page"><?= $ten_loai ?></span>
            <i class="fa-solid fa-angle-right"></i>
            <span class="page"><?= $ten_hh ?></span>
        </p>
    </section>
</section>
<section class="container-details">
    <section class="details">
        <article class="article">
            <section class="images-details">
                <img src="<?= $IMAGES_URL ?>/<?= $hinh ?>" alt="">
            </section>
            <section class="content">
                <h2 class="title"><?= $ten_hh ?>
                </h2>
                <section class="status">
                    Thương hiệu: <span>Đang cập nhật</span> | Tình trạng:
                    <span>Còn hàng</span>
                </section>
                <section class="prices">
                    <span class="price-new"><?php echo number_format($don_gia, 0, '.', '.') . "đ" ?>
                    </span>
                </section>
                <section class="origin">
                    <span>Nguồn gốc: Việt Nam</span>
                </section>
                <section class="desc">
                    <p>
                        <?= $mo_ta ?>
                    </p>
                </section>
                <?php if (!isset($_SESSION['ma_kh'])) { ?>
                    <section class="button open-modal-btn">
                        <input class="btnAdd" type="submit" form="cart" name="addToCart" value="ADD TO CART">
                    </section>
                    <div class="modal hide">
                        <div class="modal__inner">
                            <div class="modal__header">
                                <h2>Đăng nhập để mua hàng</h2>
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="modal__body">
                                <div class="form">
                                    <a href="./login.php">
                                        <div class="login btn">Đăng nhập</div>
                                    </a>
                                    <a href="./register.php">
                                        <div class="register btn">Đăng ký</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <section class="button">
                        <form onclick="alert('Thành công thêm <?= $val['name'];  ?> vào giỏ hàng');" action="./addToCart.php?id=<?php echo $val['id']; ?>" method="post" id="cart">
                            <input class="btnAdd" type="submit" form="cart" name="addToCart" value="ADD TO CART">
                        </form>
                    </section>
                <?php } ?>
                <p>Gọi đặt mua: <span>19006750</span> để nhanh chóng đặt hàng</p>
            </section>
        </article>
    </section>
</section>


<section class="banner-details">
    <img src="./images/bg_pro.webp" alt="">
</section>
<section class="about-details">
    <div class="details-footer">
        <section class="comments">
            <?php require './binh-luan.php'; ?>
            <?php foreach ($bl_list as $bl) { ?>
                <section class="comment">
                    <div class="comment__avatar">
                        <img src="<?= $IMAGES_URL_USER ?>/<?= $bl['hinh'] ?>" alt="">
                    </div>
                    <div class="comment__content">
                        <div class="comment__header">
                            <h4 class="comment__name"><?= $bl['ho_ten'] ?></h4>
                            <span class="comment__date"><?= $bl['ngay_bl'] ?></span>
                        </div>
                        <p class="comment__text"><?= $bl['noi_dung'] ?></p>
                    </div>
                </section>
            <?php } ?>
        </section>
        <div class="same-cate">
            <a href="">
                <h3 class="title">Sản phẩm cùng loại</h3>
            </a>
        </div>
    </div>
</section>

<!-- <script src="./js/cart.js"></script> -->
<script src="./js/app.js"></script>
<script src="./js/modalOpen.js"></script>