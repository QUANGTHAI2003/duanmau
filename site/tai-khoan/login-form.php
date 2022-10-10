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
                            <input type="text" class="email" name="ma_kh" placeholder="Enter Your Email" value="<?= get_cookie('ma_kh') ?? '' ?>" required>
                            <div class="field">
                                <input type="password" class="password input" name="mat_khau" placeholder="Enter Your Password" style="margin-bottom: 2px;" value="<?= get_cookie('mat_khau') ?? '' ?>" required>
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye eye-open" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye eye-close hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div class="more-type">
                                <label><input type="checkbox" name="ghi_nho" checked>Ghi nhớ tài khoản</label>
                                <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a>
                                </p>
                            </div>
                            <button name="login" class="btn enterbtn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register-form.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const input = document.querySelector('.input');
        const eyeOpen = document.querySelector('.eye-open');
        const eyeClose = document.querySelector('.eye-close');

        eyeOpen.addEventListener('click', () => {
            eyeOpen.classList.add('hidden')
            eyeClose.classList.remove('hidden')
            input.setAttribute('type', 'text')
        });
        eyeClose.addEventListener('click', () => {
            eyeOpen.classList.remove('hidden')
            eyeClose.classList.add('hidden')
            input.setAttribute('type', 'password')
        });
    </script>
    <!-- <script src="./js/app.js"></script> -->
</body>

</html>