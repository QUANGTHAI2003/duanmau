<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quên mật khẩu</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../content/css/login.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="../../content/images/image3.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Forgot Password</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <?php require_once '../../global.php' ?>
                        <?= $msg ?>
                        <form action="./quen-mk.php" id="form" method="POST">
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
                            <button name="forgot" class="btn" type="submit" id="btnSubmit" >Đổi mật khẩu</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="login.php">Login</a>.</p>
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
            checkEmptyError(ma_kh, mat_khau, mat_khau2);
            checkLength(ma_kh, 5, 15);
            checkLength(mat_khau, 8, 20);
            checkMatchPasswordError(mat_khau, mat_khau2);
        });
    </script>
</body>

</html>