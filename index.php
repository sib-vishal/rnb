<?php $page = 'home'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL </title>
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
                <img src="images/banner/home-banner.png" alt="" class="img-fluid w-100" />
            </div>
        </div>
        <section>
            <div class="containerFull">
                <h1 class="text-center large_heading fontHeading fontWeight900">
                    <span class="text_primary"> RNB Global University</span> <span class="text_secondary">Development
                        Office</span>
                </h1>
                <div class="row mt-4 justify-content-center  ">
                    <p class="text-center col-lg-9">
                        The RNB Global University Development Office is crucial in securing funds to support the
                        University’s mission of transforming rural India through education and skill development. Our
                        fundraising efforts are focused on advancing the University’s academic priorities and supporting
                        the
                        growth of rural communities through targeted initiatives that foster educational excellence,
                        community development, and socio-economic empowerment.
                    </p>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="about-us.php" class="btn_2 px-5 ">Know More</a>
                </div>
            </div>
        </section>
        <?php
        $data = [
            [
                'id' => 1,
                'title' => "Rajasthan's",
                'subtitle' => "Education Gap",
                'percentage' => 71,
                'description' => "<strong>2.19 million eligible students</strong> in Rajasthan do not pursue higher education",
                'image' => 'images/states/map-1.png'

            ],
            [
                'id' => 2,
                'title' => "India's",
                'subtitle' => "Education Gap",
                'percentage' => 72,
                'description' => "<strong>37.97 million eligible</strong>  students in India do not pursue higher education",
                'image' => 'images/states/map-2.png'

            ],
            [
                'id' => 3,
                'title' => "Rajasthan's",
                'subtitle' => "Job Crunch ",
                'percentage' => 24,
                'description' => "is the prevailing unemployment rate in Rajasthan",
                'image' => 'images/states/map-3.png'

            ],
            [
                'id' => 4,
                'title' => "India's",
                'subtitle' => "Job Crunch ",
                'percentage' => 7.1,
                'description' => "is the prevailing <strong>unemployment</strong>  rate in India",
                'image' => 'images/states/map-4.png'
            ],
            [
                'id' => 5,
                'title' => "India's",
                'subtitle' => "Labor Gap",
                'percentage' => 30.8,
                'description' => " is the <strong>female workforce participation</strong> rate in India",
                'image' => 'images/states/map-5.png'
            ]
        ];
        ?>
        <section>
            <div class="containerFull">
                <div class="expendible-box">
                    <?php foreach ($data as $index => $state): ?>
                        <div class="item overflow-hidden w-100" data-order="<?= $index + 1 ?>">
                            <div class="p-3 d-flex align-items-center w-100 h-100">
                                <div class="row w-full align-items-center">
                                    <div class="col-lg-6  column_1">
                                        <h5 class="number">
                                            <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                        </h5>
                                        <h5 class="mt-4 title-1 fontWeight600">
                                            <?= htmlspecialchars($state['title']) ?>
                                        </h5>
                                        <p class=" title-2 mt-1">
                                            <?= htmlspecialchars($state['subtitle']) ?>
                                        </p>
                                        <h3 class="large_heading  mt-4 percentage fontWeight300 text_primary">
                                            <?= $state['percentage'] ?>%
                                        </h3>
                                        <p class="description mt-3">
                                            <?= $state['description'] ?>
                                        </p>
                                    </div>

                                    <div class="col-lg-6 column_2">
                                        <img class="img-fluid img_expendible_item"
                                            src="<?= htmlspecialchars($state['image']) ?> " alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="cta_section">

                <div class="containerFull  ">
                    <div class="p-4">
                        <h4 class="heading text-center fontHeading fontWeight900 text-white">
                            These are not just statistics. They are stories of India’s <br /> untapped potential. Of
                            lives
                            that could be better.
                        </h4>
                        <div class="d-flex justify-content-center mt-5">
                            <a href="about-us.php" class="btn_2 px-5 ">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ambitious-section">
            <div class="containerFull">
                <div class="row mt-4  align-items-center">
                    <div class="col-lg-6 pe-lg-5 h-full ">
                        <div class="">
                            <h4 class="heading fontWeight600 text_primary">
                                Designed for Rural <br /> Excellence
                            </h4>
                            <p class="mt-4">
                                For those who live in the arid region of Bikaner, success means migrating to bigger
                                cities.
                                What if we could reverse this rural migration? What if we could create a thriving
                                ecosystem
                                in Bikaner consisting of education opportunities, jobs, business growth, and
                                innovation? And
                                what if this could set the stage for a ripple effect of prosperity across Rajasthan
                                and
                                throughout India?

                            </p>
                            <p class="mt-4">Our goal is to turn these ‘what ifs’ into reality for rural India.
                            </p>
                            <div class="mt-5 d-flex align-items-center gap-3">
                                <a href="about-us.php" class="btn_1 ">Know More</a>
                                <a href="about-us.php" class="btn_2 ">Donate</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="images/img2.png" alt="" class="img-fluid w-100" />

                        </div>


                    </div>


                </div>


            </div>
        </section>
        <section>
            <div class="containerFull">
                <div class="position-relative horizontal-headng-line w-full">
                    <h4 class="heading fontWeight600 text-center text_primary  position-relative z-2 ">
                        Impact stories
                    </h4>
                </div>

                <p class="text-center mt-4">
                    We monitor our outcomes beyond mere access to education. See how your donations make a positive
                    impact on rural India.
                </p>

                <img class="img-fluid mt-4 w-100" src="images/impact.png" alt="">

                <?php
                $impactTitles = [
                    "Incubation",
                    "Agriculture",
                    "Infrastructure",
                    "Ecosystem",
                    "Climate",
                    "Sustainable Development Goals"
                ];
                ?>

                <ul class="mt-4 list_impact">
                    <?php foreach ($impactTitles as $title): ?>
                        <li>
                            <div class="ms-4 text-box ">
                                <?= htmlspecialchars($title) ?>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>

                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </section>
        <section class="ambitious-section">
            <div class="containerFull">
                <div class="row mt-4  align-items-center">
                    <div class="col-lg-6 pe-lg-5 h-full ">
                        <div class="">
                            <h4 class="heading fontWeight600 text_primary">
                                Our Vision for the Future is <br /> Ambitious
                            </h4>
                            <p class="mt-4">
                                As we continue to grow, the University’s development plan includes key initiatives
                                designed to enhance the educational experience and build a robust infrastructure to
                                support this goal. By investing in these critical areas, we aim to equip our students
                                with the skills and knowledge they need to succeed, while also addressing the evolving
                                needs of the local and global communities we serve

                            </p>

                            <div class="mt-5 d-flex align-items-center gap-3">
                                <a href="about-us.php" class="btn_1 ">Know More</a>
                                <a href="about-us.php" class="btn_2 ">Donate</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="images/vision.png" alt="" class="img-fluid w-100" />

                        </div>


                    </div>


                </div>


            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <h4 class="heading fontWeight600 text_primary">
                    Connect with us today.
                </h4>
                <div class="mt-5">
                    <a class="btn_2 px-5" href="/">

                        contact us
                    </a>

                </div>


            </div>
        </section>
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