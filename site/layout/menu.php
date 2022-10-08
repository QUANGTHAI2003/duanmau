<?php
require_once '../layout/success.php';
if (isset($_SESSION['login_success'])) { ?>
    <script>
        showLoginSuccessToast();
    </script>
<?php unset($_SESSION['login_success']);
}

if (isset($_SESSION['logout_success'])) { ?>
    <script>
        showLogOutSuccessToast();
    </script>
<?php unset($_SESSION['logout_success']);
}

?>

<header class="header">
    <section class="header-top">
        <section class="bar">
            <i class="fa-solid fa-bars menu"></i>
        </section>
        <section class="logo main">
            <a href="<?= $SITE_URL ?>/trang-chinh/">
                <img src="<?= $IMAGES_URL ?>/logo.webp" alt="logo">
            </a>
        </section>
        <section class="overlay"></section>
        <section class="search-box">
            <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke-ui.php" class="form" method="GET">
                <input type="text" name="keywords" <?= isset($_GET['keywords']) ? $_GET['keywords'] : "" ?> class="form-control search-input" id="input-search" aria-label="Tìm sản phẩm" placeholder="Bạn cần tìm gì?" autocomplete="off" autofocus onblur="this.value = ''">
                <button type="submit" aria-label="Tìm Kiếm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <div class="search-suggest">
                <div id="search-result">

                </div>
            </div>
        </section>
        <section class="more">
            <section class="user group-account">
                <i class="fa-solid fa-user-plus"></i>
                <section class="group">
                    <?php if (isset($_SESSION['ma_kh'])) { ?>
                        <p><?= $_SESSION['username'] ?></p>
                        <a href="../tai-khoan/account.php?ma_kh=<?= $_SESSION['ma_kh'] ?>" class="btn">Tài khoản</a>
                        <a href="../tai-khoan/logout.php" class="btn">Đăng xuất</a>
                    <?php } else { ?>
                        <a href="../tai-khoan/login-form.php" class="btn">Đăng nhập</a>
                        <a href="../tai-khoan/register.php" class="btn">Đăng ký</a>
                    <?php } ?>
                </section>
            </section>
            <section class="cart">
                <section class="cart-item">
                    <ul class="list-item-cart">
                        <li class="item-cart">
                            <img src="./images/18.webp" alt="">
                            <section class="info-cart">
                                <section class="name-cart">Vải thiều</section>
                                <section class="price-qty">
                                    <section class="price-item-cart">
                                        40000</section>
                                    <section class="qty-item-cart">x 1</section>
                                </section>
                            </section>
                        </li>
                    </ul>
                    <section class="total">
                        <div class="total-price">
                            <section class="total-price">Tổng tiền: </section>
                            <span>
                                0
                            </span>
                        </div>
                        <a href="./cart.php" class="btn">Xem giỏ hàng</a>
                    </section>

                </section>

                <a href="./cart.php">
                    <i class="fa-solid fa-cart-shopping cart-icon"></i>
                    <span>
                        0
                    </span>
                </a>
            </section>
        </section>
    </section>
    <nav class="nav">
        <ul class="ul-main">
            <li><a class="<?php if(exist_param('trang-chu')) echo  'active' ?>" href="<?= $SITE_URL ?>/trang-chinh?trang-chu">Trang Chủ</a></li>
            <li><a class="<?php if(exist_param('gioi-thieu')) echo  'active' ?>" href="<?= $SITE_URL ?>/trang-chinh/?gioi-thieu">Giới Thiệu</a>
            </li>
            <li>
                <section class="main-subnav">
                    <a href="<?= $SITE_URL ?>/trang-chinh/?san-pham" class="<?php if(exist_param('san-pham')) echo  'active' ?>">Sản phẩm</a>
                    <i class="fa-solid fa-angle-down down <?php if(exist_param('san-pham')) echo  'active' ?>"></i>
                    <ul class="subnav">
                        <li>
                            <a href="<?= $SITE_URL ?>/trang-chinh/?san-pham">
                                <i class="fa-solid fa-caret-right"></i>
                                Tất cả
                            </a>
                        </li>
                        <?php foreach ($items_loai as $loai) { ?>
                            <li>
                                <a href="<?= $SITE_URL ?>/trang-chinh/?san-pham&ma_loai=<?= $loai['ma_loai'] ?>">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <?= $loai['ten_loai'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </section>
            </li>
            <li><a class="<?php if(exist_param('tin-tuc')) echo  'active' ?>" href="<?= $SITE_URL ?>/trang-chinh/?tin-tuc">Tin Tức</a>
            </li>
            <li><a class="<?php if(exist_param('lien-he')) echo  'active' ?>" href="<?= $SITE_URL ?>/trang-chinh/?lien-he">Liên hệ</a>
            </li>
        </ul>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
    const searchInput = document.querySelector('.search-input');
    const showSearch = document.querySelector('.search-suggest');
    searchInput.addEventListener('focus', function() {
        showSearch.style.display = 'block';
    })
    searchInput.addEventListener('blur', function() {
        showSearch.style.display = 'none';
    })

    document.addEventListener('keydown', function(e) {
        if (e.keyCode == 191) {
            searchInput.focus();
            searchInput.value = null;
        }
    })
    document.addEventListener('keyup', function(e) {
        if (e.keyCode == 191) {
            searchInput.value = null;
        }
    })

    let items = document.querySelectorAll('.ul-main li');
    items.forEach(li => {
        li.addEventListener('click', function() {
            items.forEach(item_remove_active => {
                item_remove_active.classList.remove('active');
            })
            this.classList.add('.active');
        })
    })
</script>