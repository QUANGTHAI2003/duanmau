<div class="account-nav">
        <ul class="account-nav-ul">
            <h2>Trang tài khoản</h2>
            <p>Xin chào - <b>Quang Thái</b></p>
            <li class="account-nav-li">
                <a href="<?= $SITE_URL ?>/tai-khoan/account.php?ma_kh=<?= $ma_kh ?>" class="account-nav-a">
                    <i class="fa-solid fa-user"></i>
                    <span class="account-nav-span">Thông tin tài khoản</span>
                </a>
            </li>
            <li class="account-nav-li">
                <a href="<?= $SITE_URL ?>/tai-khoan/account.php/?edit_info&ma_kh=<?= $ma_kh ?>" class="account-nav-a">
                    <i class="fa-solid fa-user"></i>
                    <span class="account-nav-span">Cập nhật tài khoản</span>
                </a>
            </li>
            <li class="account-nav-li">
                <a href="<?= $SITE_URL ?>/tai-khoan/account.php/?change-pass&ma_kh=<?= $ma_kh ?>" class="account-nav-a">
                    <i class="fa-solid fa-user"></i>
                    <span class="account-nav-span">Đổi mật khẩu</span>
                </a>
            </li>
            <li class="account-nav-li">
                <a href="<?= $SITE_URL ?>/tai-khoan/account.php?logout&ma_kh=<?= $ma_kh ?>" class="account-nav-a">
                    <i class="fa-solid fa-sign-out"></i>
                    <span class="account-nav-span">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </div>