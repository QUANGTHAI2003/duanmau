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
    <div class="account-update-container">
        <div class="account-update">
            <h2 class="account-title">Cập nhật tài khoản</h2>
            <form action="./account.php" method="POST" class="account-update-form" enctype="multipart/form-data">
                <div class="account-update-left">
                    <div class="account-update-item">
                        <label for="username" class="account-update-label">Tên đăng nhập</label>
                        <input type="text" name="ma_kh" id="username" class="account-update-input" value="<?= $ma_kh ?>">
                    </div>
                    <div class="account-update-item">
                        <label for="username" class="account-update-label">Họ và tên</label>
                        <input type="text" name="ho_ten" id="username" class="account-update-input" value="<?= $ho_ten ?>">
                    </div>
                </div>
                <div class="account-update-right">
                    <div class="account-update-item">
                        <label for="username" class="account-update-label">Email</label>
                        <input type="text" name="email" id="username" class="account-update-input" value="<?= $email ?>">
                    </div>
                    <div class="account-update-item">
                        <label for="username" class="account-update-label">Hình</label>
                        <input type="file" name="hinh" id="username" class="account-update-input" value="<?= $hinh ?>">
                        <?= $hinh ?>
                    </div>
                    <input type="hidden" name="mat_khau" value="<?= $mat_khau ?>">
                    <input type="hidden" name="vai_tro" value="<?= $vai_tro ?>">
                    <input type="hidden" name="kich_hoat" value="<?= $kich_hoat ?>">
                </div>
                <button type="submit" name="update_info">Cập nhật</button>
            </form>
        </div>
    </div>
</section>