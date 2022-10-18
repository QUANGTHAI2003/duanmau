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
    <?php include './menu.php'; ?>
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="content-wthree">
                        <?= $msg ?>
                        <h2>Change Password - <?= $ma_kh ?></h2>
                        <form action="../change-pass.php?ma_kh=<?= $ma_kh ?>" method="post" style="max-width: 300px; display: flex; flex-direction: column; gap: 8px 0;">
                            <div class="form-control">
                                <input type="text" class="password" name="mat_khau" id="mat_khau" placeholder="Enter Your Password">
                                <small></small>
                            </div>
                            <div class="form-control">
                                <input type="text" class="confirm-password" name="mat_khau2" id="mat_khau2" placeholder="Enter Your Confirm Password">
                                <small></small>
                            </div>
                            <button name="update-pass" class="btn-change" id="btnSubmit" type="submit">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
</section>
<script src="<?= $CONTENT_URL ?>/js/app.js"></script>
<script>
    form.addEventListener('keyup', function(e) {
        e.preventDefault();
        checkEmptyError(mat_khau, mat_khau2);
        checkLength(mat_khau, 8, 20);
        checkMatchPasswordError(mat_khau, mat_khau2);
    });
</script>