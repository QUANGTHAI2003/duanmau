<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Register Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../content/css/login.css" type="text/css" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <section class="w3l-mockup-form">
        <div class="container" style="max-width: 1200px;">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="../../content/images/image2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <?php require_once '../../global.php' ?>
                        <?= $msg ?>
                        <form action="./register.php" id="form" method="POST" enctype="multipart/form-data">
                            <div class="form-ctn" style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 16px">
                                <div class="form-left">
                                    <div class="form-control">
                                        <input type="text" id="ma_kh" class="name" name="ma_kh" placeholder="Tên đăng nhập" value="">
                                        <small></small>
                                    </div>
                                    <div class="form-control">
                                        <input type="password" id="mat_khau" class="password" name="mat_khau" placeholder="Mât khẩu">
                                        <small></small>
                                    </div>
                                    <div class="form-control">
                                        <input type="password" id="mat_khau2" class="confirm-password" name="mat_khau2" placeholder="Xác nhận mật khẩu">
                                        <small></small>
                                    </div>
                                </div>
                                <div class="form-right">
                                    <div class="form-control">
                                        <input type="text" id="ho_ten" class="" name="ho_ten" placeholder="Họ và tên">
                                        <small></small>
                                    </div>
                                    <div class="form-control">
                                        <input type="email" id="email" class="" name="email" placeholder="Email">
                                        <small></small>
                                    </div>
                                    <div class="form-control">
                                        <input type="file" name="hinh" id="imageUpload" accept=".jpg, .jpeg, .png, .svg">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="vai_tro" value="0">
                            <input type="hidden" name="kich_hoat" value="0">
                            <button name="register" class="btn" id="btnSubmit" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login-form.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= $CONTENT_URL ?>/js/app.js"></script>
    <script>
        form.addEventListener('keyup', function(e) {
            e.preventDefault();
            checkEmptyError(ma_kh, mat_khau, mat_khau2, email, ho_ten);
            checkEmailError(email);
            checkLength(ma_kh, 5, 15);
            checkLength(mat_khau, 8, 20);
            checkLength(ho_ten, 5, 20);
            checkMatchPasswordError(mat_khau, mat_khau2);
        });
    </script>
</body>

</html>