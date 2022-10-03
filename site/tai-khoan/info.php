<section class="background">
    <div class="content-bg">
        <h3 class="title-bg">Thông tin tài khoản</h3>
        <p>
            <span class="bg-title">
                <a href="./index.php">Trang chủ</a>
            </span>
            <i class="fa-solid fa-angle-right"></i>
            <span class="page">
                Thông tin tài khoản
            </span>
        </p>
    </div>
</section>
<section class="account-info-container">
    <?php include './menu.php' ?>
    <div class="account-content-container">
        <div class="account-content">
            <div class="account-profile">
                <div class="profile-title">Profile Image</div>
                <div class="profile-img">
                    <img src="<?= $IMAGES_URL_USER ?>/<?= $hinh ?>" alt="">
                </div>
            </div>
            <div class="account-content-info">
                <h2 class="account-title">Account Details</h2>
                <div class="account-info">
                    <div class="account-info-item">
                        <span class="account-info-title">Tên đăng nhập: </span>
                        <span class="account-info-content"><?= $ma_kh ?></span>
                    </div>
                    <div class="account-info-item">
                        <span class="account-info-title">Họ và tên: </span>
                        <span class="account-info-content"><?= $ho_ten ?></span>
                    </div>
                    <div class="account-info-item">
                        <span class="account-info-title">Email: </span>
                        <span class="account-info-content"><?= $email ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>