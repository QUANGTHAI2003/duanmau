<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/reset.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/responsive.css">
    <link rel="icon" href="<?= $IMAGES_URL ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <!-- <script src="./js/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php include '../layout/menu.php' ?>
    <section class="container">
        <?php include $VIEW_NAME ?>
    </section>
    <?php include '../layout/footer.php' ?>
</body>

</html>