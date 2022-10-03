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
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image3.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Change Password</h2>
                        <form action="./change-pass-query.php?ma_kh=<?= $ma_kh ?>" method="post">
                            <input type="text" class="password" name="mat_khau" value="<?= $mat_khau ?>" placeholder="Enter Your Password" required>
                            <input type="text" class="confirm-password" name="mat_khau2" placeholder="Enter Your Confirm Password" required>
                            <button name="update-pass" class="btn" type="submit">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
</section>