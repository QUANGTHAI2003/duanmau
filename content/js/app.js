// Active link 
const linkProduct = document.querySelectorAll('.product__item');
linkProduct.forEach(l => l.addEventListener('click', function () {
    linkProduct.forEach(l => l.classList.remove('active-product'));
    this.classList.add('active-product');
}));

// show and hide back to top
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Change tab
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const indents = $$('.indent')
const infos = $$('.info-item')

indents.forEach((tab, index) => {
    const info = infos[index];
    tab.onclick = function () {
        $('.indent.change').classList.remove('change');
        $('.info-item.change').classList.remove('change');
        this.classList.add('change')
        info.classList.add('change')
    }
})


// Show menu and overlay
$('.menu').addEventListener('click', () => {
    $('.nav').classList.add('show-menu');
    $('.overlay').style.display = 'block'
})

// Hide menu and overlay
$('.overlay').addEventListener('click', () => {
    $('.nav').classList.remove('show-menu');
    $('.overlay').style.display = 'none'
})

// slideshow
// let index = 1;
// const slides = document.querySelectorAll(".slider-content");
// const dots = document.querySelectorAll(".dot");

// var slideIndex;
// function showSlides() {
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (const dot of dots) {
//         dot.style.backgroundColor = "white";
//     }
//     for (let i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace("active", "");
//     }

//     slides[slideIndex].style.display = "block";
//     dots[slideIndex].className += " active";
//     dots[slideIndex].style.backgroundColor = "#f3e385";
//     slideIndex++;
//     if (slideIndex > slides.length - 1) {
//         slideIndex = 0
//     }
//     setTimeout(showSlides, 3000);
// }
// showSlides(slideIndex = 0);

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

$(".delete-link").click(function () {
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $.ajax({
        type: "POST",
        url: "./delete.php",
        data: info,
        success: function () {
            window.location.reload();
            alert("Đã xóa sản phẩm trong giỏ hàng thành công");
        }
    });
})

$(".delivery-button").click(function () {
    var element = $(this);
    var del_id = element.attr("id");
    var info = 'id=' + del_id;
    $.ajax({
        data: info,
        success: function () {
            $('.order-success').css('background', 'red');
        }
    });
})

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}