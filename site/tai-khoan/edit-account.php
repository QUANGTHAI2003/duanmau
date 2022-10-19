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
            <form action="./account.php" method="POST" id="form" class="account-update-form" enctype="multipart/form-data">
                <div class="form-form">
                    <div class="account-update-left">
                        <div class="account-update-item form-control">
                            <label for="username" class="account-update-label">Tên đăng nhập</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="account-update-input" value="<?= $ma_kh ?>">
                            <small></small>
                        </div>
                        <div class="account-update-item form-control">
                            <label for="username" class="account-update-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="account-update-input" value="<?= $ho_ten ?>">
                            <small></small>
                        </div>
                    </div>
                    <div class="account-update-right">
                        <div class="account-update-item form-control">
                            <label for="username" class="account-update-label">Email</label>
                            <input type="text" name="email" id="email" class="account-update-input" value="<?= $email ?>">
                            <small></small>
                        </div>
                        <div class="account-update-item form-control">
                            <label for="username" class="account-update-label">Hình</label>
                            <input type="file" name="hinh" id="username" class="account-update-input" value="<?= $hinh ?>" accept=".jpg, .jpeg, .png, .svg">
                            <?= $hinh ?>
                        </div>
                        <input type="hidden" name="mat_khau" value="<?= $mat_khau ?>">
                        <input type="hidden" name="vai_tro" value="<?= $vai_tro ?>">
                        <input type="hidden" name="kich_hoat" value="<?= $kich_hoat ?>">
                    </div>
                </div>
                <button type="submit" name="update_info" class="btn btn-acc" id="btnSubmit">Cập nhật</button>
            </form>
        </div>
    </div>
</section>
<script src="<?= $CONTENT_URL ?>/js/app.js"></script>
<script>
    form.addEventListener('keyup', function(e) {
        e.preventDefault();
        checkEmptyError(ma_kh, email, ho_ten);
        checkEmailError(email);
        checkLength(ma_kh, 5, 15);
        checkLength(ho_ten, 5, 20);
    });
</script>