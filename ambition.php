<?php $page = 'ambition'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL | Ambition </title>
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
                <img src="images/ambition/ambition.png" alt="" class="img-fluid w-100" />
            </div>
        </div>
        <section>
            <div class="containerFull ">
                <div class="px-5">

                    <div class="row">
                        <div class="col-lg-6">

                            <h1 class="text_primary heading fontHeading fontWeight900">
                                The University’s <br />Ambitions
                            </h1>
                        </div>
                        <div class="col-lg-6">

                            <p class="">
                                As a nation, we require a diverse set of future leaders who can drive progress and
                                innovation. Achieving this goal hinges on our ability to provide quality higher
                                education that actively cultivates leadership qualities in our youth. However, in rural
                                India, students often receive an education that fails to equip them with the skills
                                necessary for success in today’s competitive job market. The traditional rote-learning
                                approach does not foster critical thinking, creativity, or practical skills. What these
                                students need is a holistic learning experience—one that nurtures not only academic
                                excellence but also personal and professional growth.

                            </p>

                        </div>

                    </div>
                    <div class="row mt-4">

                        <?php $education_goals = [
                            [
                                'id' => 1,
                                'title' => 'Expanding access to higher education',
                            ],
                            [
                                'id' => 2,
                                'title' => 'Equal opportunities for everyone',
                            ],
                            [
                                'id' => 3,
                                'title' => 'Developing skills and vocational training',
                            ],
                            [
                                'id' => 4,
                                'title' => 'Fostering a spirit of scientific temper',
                            ]
                        ];
                        ?>
                        <h4 class="heading fontWeight600 text_primary mt-4 mb-4">
                            Key Outcomes
                        </h4>


                        <?php foreach ($education_goals as $goal): ?>
                            <div class="col-lg-6 mb-3">
                                <div class="key-outcome ">
                                    <div class="goal-img">
                                        <img class=" img-1 w-75 mx-auto d-block" src="images/ambition/key-<?= $goal['id'] ?>.png"
                                            alt="">
                                        <img class=" img-2 w-75 mx-auto d-block opacity-0" src="images/ambition/key-<?= $goal['id'] ?><?= $goal['id'] ?>.png"
                                            alt="">

                                    </div>
                                    <p class="title text-center mt-3"><?= $goal['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="mt-5  ger_section ">
                        <!-- <img src="images/ger .png" alt=""> -->
                        <h4 class="text-center sub_heading text-white ">
                            RNBGU is committed to contribute to India's goal of <br /> <span
                                class="text_secondary">achieveing 50% Gross Enrollment Rate (GER) by</span> <br /> 2030
                            in higher education
                        </h4>

                    </div>

                    <h4 class="text_primary heading  fontWeight600 mt-5">
                        Ensuring an Accessible and <br /> Vibrant Educational Experience
                    </h4>
                    <?php
                    $education_features = [
                        [

                            'caption' => 'Modest fees, practically at par with secondary and higher secondary education'
                        ],
                        [

                            'caption' => 'Availability of diverse scholarship models to support underprivileged or academically excellent students'
                        ],
                        [

                            'caption' => 'Sensitivity and flexibility around language of instruction and local culture'
                        ],
                        [

                            'caption' => 'Adding regional context in academic content via both curriculum and pedagogy'
                        ],
                        [

                            'caption' => 'Improving teaching through digital modes such as Learning Management Systems and computer labs'
                        ],
                        [

                            'caption' => 'Practical exposure through industrial visits, expert sessions, events, and internships'
                        ]
                    ]; ?>
                    <div class="mt-5 row">
                        <?php foreach ($education_features as $key => $feature): ?>
                            <div class="col-lg-6 mb-5 ">

                                <div class="feature-card ">
                                    <img class="img-fluid" src="images/ambition/feature/<?= $key + 1 ?>.png" alt="Feature">
                                    <p class="feature-caption mt-3"><?= $feature['caption'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </section>

        <section class="pt-0">
            <div class="containerFull ">
                <div class="px-4 row justify-content-center ">
                    <p class="col-lg-7 text-center">
                        Support us in cultivating the next generation of leaders

                    </p>

                    <div class="mt-5 d-flex justify-content-center " style="">
                        <a class="btn_2 px-5" href="/">

                            Contribute to Our Mission
                        </a>
                    </div>


                </div>

            </div>
        </section>

        <section class="pt-0">
            <div class="containerFull">
                <div class="px-5">

                    <h4 class="heading fontWeight600 text_primary">
                        Connect with us today.
                    </h4>
                    <div class="mt-5">
                        <a class="btn_2 px-5" href="/">

                            contact us
                        </a>

                    </div>
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