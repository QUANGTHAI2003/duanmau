<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <!-- Header section -->
        <?php include './pages/menu.php' ?>
        <?php include './pages/bread_cump.php' ?>
        <section class="product-list">
            <h2 class="text-gradient">Tất cả sản phẩm</h2>
            <br>
            <?php include './pages/select.php' ?>
            <div class="product-list-container">
                <section class="product-grid">
                    <?php
                    foreach ($result as $val) { ?>
                        <a href="./detail.php?id=<?php echo $val['id'] ?>" style="text-decoration:none">
                            <section class="product-grid-inner">
                                <article class="product-card mix tesla">
                                    <section class="product-thumbnail">
                                        <img src="<?php echo $val['image'] ?>" alt="">
                                    </section>
                                    <section class="product-content">
                                        <h3 class="product-name" style="color: black"><?php echo $val['name'] ?>
                                        </h3>
                                        <section class="product-price">
                                            <section class="product-new-price price">
                                                <?php echo number_format($val['price'], 0, '.', '.') . "đ"; ?>
                                            </section>
                                            <section class="product-old-price price"><?php echo number_format($val['old-price'], 0, '.', '.') . "đ";
                                                                                        ?>
                                            </section>
                                        </section>
                                    </section>
                                </article>
                            </section>
                        </a>
                    <?php } ?>
                </section>
                <?php include './pages/pagination.php' ?>
            </div>
        </section>
        <?php include './pages/footer.php' ?>
    </div>
    <script src="./js/app.js"></script>
    <script src="./js/cart.js"></script>

</body>

</html>