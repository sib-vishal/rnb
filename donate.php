<?php $page = 'donate'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL | Donate </title>
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
                                Donate
                            </h1>
                        </div>
                        <div class="col-lg-6">

                            <p class="">
                                To achieve the University’s ambitious vision, we invite visionary philanthropists,
                                government agencies, socially conscious businesses, and like-minded foundations to
                                partner in this transformative journey.

                            </p>

                        </div>

                    </div>

                </div>


            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <div class="px-4">

                    <h4 class="text_primary heading text-center  fontWeight600">
                        Why Your Support Matters
                    </h4>
                    <p class="col-lg-10 mt-4 mx-auto text-center">
                        Today, we are proud to be a thriving community of close to 200 donors who have walked this path
                        with us, shaping futures and empowering young minds. Almost 30% of our donors are from the
                        manufacturing and infrastructure sector and 50% of our donors are HNI and Philanthropy. Other
                        major donors belong to the logistics, energy, financial services, consulting, and philanthropy
                        sectors. Our donors have played a pivotal role in the mission of the University, nudging the
                        ecosystem change in this rural landscape. Their contributions have helped University provide
                        lively and holistic University Life to the students and invest in Academic Excellence creating
                        long term impact.
                    </p>
                </div>

            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <div class="px-4">
                    <div class="donate">
                        <!-- Pills Navigation -->
                        <ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="donors-tab" data-bs-toggle="pill"
                                    data-bs-target="#donors" type="button" role="tab">
                                    Number of Donors
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="funds-percent-tab" data-bs-toggle="pill"
                                    data-bs-target="#funds-percent" type="button" role="tab">
                                    Funds/Grants received <small>(in %)</small>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="funds-inr-tab" data-bs-toggle="pill"
                                    data-bs-target="#funds-inr" type="button" role="tab">
                                    Funds/Grants received <small>(INR in lakhs)</small>
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="donors" role="tabpanel"
                                aria-labelledby="donors-tab">
                                <p>Content for Number of Donors goes here.</p>
                            </div>
                            <div class="tab-pane fade" id="funds-percent" role="tabpanel"
                                aria-labelledby="funds-percent-tab">
                                <p>Content for Funds/Grants received (in %) goes here.</p>
                            </div>
                            <div class="tab-pane fade" id="funds-inr" role="tabpanel" aria-labelledby="funds-inr-tab">
                                <p>Content for Funds/Grants received (INR in lakhs) goes here.</p>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
        </section>
        <section class="pt-4">
            <div class="containerFull">
                <div class="px-4">
                    <h4 class="text-center heading fontWeight600 text_primary">
                        There are numerous ways you can <br /> contribute to <span class="text_secondary">our
                            mission</span>
                    </h4>
                    <?php $donation_categories = [
                        [
                            'title' => 'Student Support',
                            'list' => [
                                'Scholarship',
                                'Special Purpose Scholarship',
                                'Innovative Research',
                                'Leadership and Activities',
                                'Global Experience',
                                'Industry Experience',
                                'Community Impact'
                            ],
                            'img' => 'student-support.png'
                        ],
                        [
                            'title' => 'Academic Excellence',
                            'list' => [
                                'Digital Infrastructure',
                                'Innovative Pedagogy',
                                'State-of-the-Art Labs',
                                'Research Fellowships',
                                'Faculty Excellence'
                            ],
                            'img' => 'academic-excellence.png'
                        ],
                        [
                            'title' => 'University Life',
                            'list' => [
                                'Campus Development',
                                'Sports and Wellness',
                                'Innovation and Incubation Centre',
                                'Library Enhancement'
                            ],
                            'img' => 'university-life.png'
                        ],
                        [
                            'title' => 'Endowment',
                            'list' => [
                                'Chairs and Professorships',
                                'Student Success',
                                'State-of-the-Art Labs',
                                'Faculty Excellence',
                                'Infrastructure and Facilities',
                                'Academic Advancement',
                                'Named Annual Scholarships',
                                'Research Excellence'
                            ],
                            'img' => 'endowment.png'
                        ],
                        [
                            'title' => 'General Giving',
                            'list' => [
                                'General Donations',
                                'Gifts',
                                'Sponsorships'
                            ],
                            'img' => 'general-giving.png'
                        ]
                    ];
                    ?>

                    <?php foreach ($donation_categories as $index => $category): ?>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="d-flex align-items-start">
                                    <img class="img-fluid" src="images/donate/mission-1.png" alt="<?= $category['title'] ?>" />
                                    <!-- <img src="images/donate/<?= $category['img'] ?>" alt="<?= $category['title'] ?>" /> -->


                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="">

                                    <h5 class="mb-1"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                        <?= $category['title'] ?>
                                    </h5>
                                    <ul class="mb-0">
                                        <?php foreach ($category['list'] as $item): ?>
                                            <li><?= $item ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>








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