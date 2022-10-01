<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="../content/css/style.css">
    <link rel="stylesheet" href="../content/css/responsive.css">
    <link rel="stylesheet" href="../content/css/loading.css">
    <link rel="icon" href="<?= $IMAGES_URL ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- <script src="./js/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <!-- Banner section -->
    <section class="banner">
        <section class="sliders">
            <section class="slide-content mySwiper" style="overflow-x: hidden;">
                <section class="slider-main swiper-wrapper">
                    <section class="slider-content swiper-slide">
                        <img src="<?= $IMAGES_URL ?>/slider_1.webp" alt="" width="100%" />
                    </section>
                    <!-- <section class="slider-content swiper-slide">
                        <img src="<?= $IMAGES_URL ?>/slider_4.webp" alt="" width="100%" />
                    </section> -->
                    <section class="slider-content swiper-slide">
                        <img src="<?= $IMAGES_URL ?>/slider_3.webp" alt="" width="100%" />
                    </section>
                </section>
                <section class="pagination">
                    <section class="dot" onclick="currentSlide(0)"></section>
                    <section class="dot" onclick="currentSlide(1)"></section>
                    <section class="dot" onclick="currentSlide(2)"></section>
                </section>
            </section>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            centeredSlides: true,
            autoheight: true,
            loop: true,
            autoplay: {
                delay: 2500,
            },
            pagination: {
                el: ".pagination",
                clickable: true,
            },
        });
    </script>
    <!-- Collection section -->
    <section class="section-collection">
        <section class="collection">
            <section class="col-1 col">
                <section class="content">
                    <h1 class="title">Rau quả tươi</h1>
                    <span>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                        chất lượng ngon nhất giao đến
                        tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
                    </span>
                    <a href="#" class="btn btn-primary btn_xem" title="Rau quả tươi">Xem ngay</a>
                </section>
            </section>
            <section class="col-2 col">
                <section class="content">
                    <h1 class="title">Sinh tố hoa quả</h1>
                    <span>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                        chất lượng ngon nhất giao đến
                        tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
                    </span>
                    <a href="#" class="btn btn-primary btn_xem" title="Sinh tố hoa quả">Xem ngay</a>
                </section>
            </section>
            <section class="col-3 col">
                <section class="content">
                    <h1 class="title">Thực phẩm tươi</h1>
                    <span>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                        chất lượng ngon nhất giao đến
                        tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
                    </span>
                    <a href="#" class="btn btn-primary btn_xem" title="Thực phẩm tươi">Xem ngay</a>
                </section>
            </section>
            <section class="col-4 col">
                <section class="content">
                    <h1 class="title">Hoa quả tươi mát</h1>
                    <span>Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                        chất lượng ngon nhất giao đến
                        tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị
                    </span>
                    <a href="#" class="btn btn-primary btn_xem" title="Hoa quả tươi mát">Xem ngay</a>
                </section>
            </section>
        </section>
    </section>
    <!-- Content section -->
    <section class="content">
        <!-- About us section -->
        <section class="about-us">
            <h2 class="text-gradient">VỀ CHÚNG TÔI</h2>
            <p>Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch với số lượng lớn đang
                vào vụ mùa thu hoạch nên
                br chúng tôi có thể cung ứng cho tất cả các đối tác xuất khẩu nông sản trên cả
                nước.
            </p>
            <section class="icon-body">
                <section class="icon-item">
                    <section>
                        <img src="<?= $IMAGES_URL ?>/icon_uti_1.webp" alt="">
                    </section>
                    <section class="content">
                        <h3 class="title">Trang trại hữu cơ</h3>
                        <span class="para">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </section>
                </section>
                <section class="icon-item">
                    <img src="<?= $IMAGES_URL ?>/icon_uti_2.webp" alt="">
                    <section class="content">
                        <h3 class="title">Thực phẩm sạch</h3>
                        <span class="para">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </section>
                </section>
                <section class="icon-item">
                    <img src="<?= $IMAGES_URL ?>/icon_uti_3.webp" alt="">
                    <section class="content">
                        <h3 class="title">An toàn sinh học</h3>
                        <span class="para">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </section>
                </section>
                <section class="icon-item">
                    <img src="<?= $IMAGES_URL ?>/icon_uti_4.webp" alt="">
                    <section class="content">
                        <h3 class="title">Đa dạng sinh học</h3>
                        <span class="para">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</span>
                    </section>
                </section>
            </section>
        </section>
        <!-- Product list section -->
        <section class="product-list">
            <h2 class="text-gradient">DANH MỤC SẢN PHẨM</h2>
            <section class="product-list-container grid">
                <!-- Categories list -->
                <ul class="product-filters">
                    <li>
                        <button class="product__item active-product">
                            <span>Rau củ</span>
                        </button>
                    </li>
                    <li>
                        <button class="product__item">
                            <span>Hoa quả</span>
                        </button>
                    </li>
                    <li>
                        <button class="product__item">
                            <span>Hải sản</span>
                        </button>
                    </li>
                    <li>
                        <button class="product__item">
                            <span>Các loại hạt</span>
                        </button>
                    </li>
                    <li>
                        <button class="product__item">
                            <span>Thực phẩm tươi sống</span>
                        </button>
                    </li>
                </ul>
                <section class="product-grid">
                    <a href="./detail.php" style="text-decoration:none">
                        <section class="pro duct-grid-inner">
                            <article class="product-card mix tesla">
                                <section class="product-thumbnail">
                                    <img src="<?= $IMAGES_URL ?>/18.webp" alt="">
                                </section>
                                <section class="product-content">
                                    <h3 class="product-name" style="color: black">Vải thiều
                                    </h3>
                                    <section class="product-price">
                                        <section class="product-new-price price">
                                            40000
                                        </section>
                                        <section class="product-old-price price">50000
                                        </section>
                                    </section>
                                </section>
                            </article>
                        </section>
                    </a>
                </section>
            </section>
        </section>
        <!-- Hotline section -->
        <section class="hotline-section">
            <video autoplay loop muted>
                <source src="<?= $CONTENT_URL ?>/video/pexels-kindel-media-7457085.mp4" type="video/mp4">
            </video>
            <section class="hotline-section-content">
                <section class="hotline-content">
                    <h2 class="hotline-title">Hotline</h2>
                    <a class="hotline" href="tel:19006750">1900 6750</a>
                    <p class="introduce">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                        toàn
                        và đảm bảo chất lượng ngon nhất.
                    </p>
                </section>
            </section>
        </section>
        <!-- Best seller section -->
        <section class="product-list">
            <h2 class="text-gradient">SẢN PHẨM BÁN CHẠY</h2>
            <section class="product-list-container grids">
                <a href="./detail.php" style="text-decoration:none">
                    <section class="pro duct-grid-inner">
                        <article class="product-card mix tesla">
                            <section class="product-thumbnail">
                                <img src="<?= $IMAGES_URL ?>/18.webp" alt="">
                            </section>
                            <section class="product-content">
                                <h3 class="product-name" style="color: black">Vải thiều
                                </h3>
                                <section class="product-price">
                                    <section class="product-new-price price">
                                        40000
                                    </section>
                                    <section class="product-old-price price">50000
                                    </section>
                                </section>
                            </section>
                        </article>
                    </section>
                </a>
            </section>
        </section>
        <!-- Lastest news section -->
        <section class="lastest-news">
            <h2 class="text-gradient">TIN TỨC MỚI NHẤT</h2>
            <section class="lastest-news-container">
                <article class="col-item">
                    <section class="image">
                        <img class="card-img" src="<?= $IMAGES_URL ?>/news1.webp" alt="">
                    </section>
                    <section class="time">
                        <i class="fa-regular fa-calendar"></i>
                        <span>24/05/2022</span>
                    </section>
                    <section class="content-news">
                        <h3>Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao</h3>
                        <p>Khoảng gần một tuần nay, do ảnh hưởng của những cơn mưa lớn kéo dài liên tiếp nên...</p>
                    </section>
                </article>
                <article class="col-item center">
                    <section class="image">
                        <img class="card-img" src="<?= $IMAGES_URL ?>/news2.webp" alt="">
                    </section>
                    <section class="time">
                        <i class="fa-regular fa-calendar"></i>
                        <span>24/05/2022</span>
                    </section>
                    <section class="content-news">
                        <h3>Nhập khẩu rau quả vượt mốc 1 tỷ USD, Thái Lan chiếm 60% thị phần</h3>
                        <p>Theo báo cáo từ Bộ NN&PTNT, giá trị xuất khẩu hàng rau quả tháng 9 năm 2017 ước đ...</p>
                    </section>
                </article>
                <article class="col-item">
                    <section class="image">
                        <img class="card-img" src="<?= $IMAGES_URL ?>/news3.webp" alt="">
                    </section>
                    <section class="time">
                        <i class="fa-regular fa-calendar"></i>
                        <span>24/05/2022</span>
                    </section>
                    <section class="content-news">
                        <h3>Bí quyết bảo quản nho đen trong tủ lạnh tươi lâu hơn</h3>
                        <p>Bí quyết lựa chọn và bảo quản nho tươi – Nho rất ngon và tốt cho sức khỏe, tuy nh...</p>
                    </section>
                </article>
            </section>
        </section>
        <!-- Top brand section -->
        <!-- Top brand section -->
        <section class="top-brand">
            <h2 class="text-gradient">TOP THƯƠNG HIỆU</h2>
            <article class="brand">
                <img src="<?= $IMAGES_URL ?>/brand_1.webp" alt="">
                <img src="<?= $IMAGES_URL ?>/brand_2.webp" alt="">
                <img src="<?= $IMAGES_URL ?>/brand_3.webp" alt="">
                <img src="<?= $IMAGES_URL ?>/brand_4.webp" alt="">
                <img src="<?= $IMAGES_URL ?>/brand_5.webp" alt="">
                <img src="<?= $IMAGES_URL ?>/brand_6.webp" alt="">
            </article>
        </section>
        <!-- Footer section -->
        <script src="<?= $CONTENT_URL ?>/js/app.js"></script>
</body>

</html>