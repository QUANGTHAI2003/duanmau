<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../content/css/login.css" type="text/css" media="screen" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="../../content/images/image.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <?php require_once '../../global.php' ?>
                        <?= $msg ?>
                        <form action="./login.php" method="POST">
                            <div class="form-control">
                                <input type="text" class="email" name="ma_kh" id="ma_kh" placeholder="Enter Your Username" value="<?= get_cookie('ma_kh') ?>">
                                <small></small>
                            </div>
                            <div class="form-control">
                                <input type="password" class="password input" name="mat_khau" id="mat_khau" placeholder="Enter Your Password" style="margin-bottom: 2px;" value="<?= get_cookie('mat_khau') ?>">
                                <small></small>
                            </div>
                            <div class="more-type">
                                <label><input type="checkbox" name="ghi_nho" checked>Ghi nhớ tài khoản</label>
                                <p>
                                    <a href="./quen-mk-form.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a>
                                </p>
                            </div>
                            <button name="login" class="btn enterbtn" id="btnSubmit" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register-form.php">Register</a>.</p>
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
            checkEmptyError(ma_kh, mat_khau);
            checkLength(ma_kh, 5, 15);
            checkLength(mat_khau, 8, 20);
            checkLength(ho_ten, 5, 20);
        });
    </script>
</body>

</html>