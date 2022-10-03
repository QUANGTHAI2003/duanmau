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
        <div class="container">
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
                        <?= $msg = ''; $msg ?>
                        <form action="./register.php" method="POST" enctype="multipart/form-data">
                            <div class="form-ctn">
                                <div class="form-left">
                                    <input type="text" class="name" name="ma_kh" placeholder="Tên đăng nhập" value="">
                                    <input type="password" class="password" name="mat_khau" placeholder="Mât khẩu">
                                    <input type="password" class="confirm-password" name="mat_khau2" placeholder="Xác nhận mật khẩu">
                                </div>
                                <div class="form-right">
                                    <input type="text" class="" name="ho_ten" placeholder="Họ và tên">
                                    <input type="email" class="" name="email" placeholder="Email">
                                    <input type="file" name="hinh" id="">
                                </div>
                            </div>
                            <input type="hidden" name="vai_tro" value="0">
                            <input type="hidden" name="kich_hoat" value="0">
                            <button name="register" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login-form.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
</body>

</html>