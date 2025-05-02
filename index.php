<?php $page = 'home'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alfa Education </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="banner-wrapper ">
            <div class="containerFull">
                <img src="images/banner/home-banner.svg" alt="" class="img-fluid w-100" />

            </div>

        </div>

        <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".awards_slider", {
            spaceBetween: 20,
            centeredSlides: true,
            slidesPerView: 1.5,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".next_1",
                prevEl: ".prev_1",
            },
        });
    </script>

</body>

</html>