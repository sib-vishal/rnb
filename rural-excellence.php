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
                <img src="images/banner/rural-exellence.png" alt="" class="img-fluid w-100" />
            </div>
        </div>
        <section>
            <div class="containerFull ">
                <div class="px-5">

                    <div class="row">
                        <div class="col-lg-6">

                            <h1 class="text_primary heading fontHeading fontWeight900">
                                Rural Excellence
                            </h1>
                        </div>
                        <div class="col-lg-6">

                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <img class="w-100" src="images/icons/7.png" alt="" />

                                </div>
                                <div class="col-lg-6">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Gross <br /> Enrollment <br />Ratio
                                    </h4>
                                </div>



                            </div>
                            <p class="mt-4">

                                That’s the abysmal percentage of rural children enrolled in higher education out of the
                                total population in the relevant age group.
                            </p>
                            <p class="mt-4">

                                With limited access to educational institutes, lack of employment opportunities, and
                                resource constraints, these students need a leg up in life.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="pt-3">
            <div class="containerFull">
                <div class="px-5">
                    <h4 class="text_primary heading fontWeight600">Addressing Rural Challenges</h4>

                    <?php
                    $vertical_impacts = [
                        [
                            'description' => 'Through its rural presence, RNB Global University positively impacts the rural Gross Enrollment Rate (GER) of Rajasthan and India.',
                            'icon' => 'earth.png',
                            'image' => 'challenge-1.png',

                        ],
                        [
                            'description' => 'Access to scholarships and financial aids make education affordable for deserving students.',
                            'icon' => 'degree.png',
                            'image' => 'challenge-2.png',

                        ],
                        [
                            'description' => 'Job readiness workshops at the end of each course enable students to easily integrate into jobs and industry.',
                            'icon' => 'board.png',
                            'image' => 'challenge-3.png',

                        ],
                        [
                            'description' => 'Partnerships with companies provide jobs to youth while creating a skilled workforce for the industry.',
                            'icon' => 'partnerships.png',
                            'image' => 'challenge-4.png',

                        ]
                    ];
                    ?>

                    <div class="mt-5">
                        <?php foreach ($vertical_impacts as $impact): ?>
                            <div class="rural-challenges  mb-4">
                                <div class="image">
                                    <img src="images/rural-excellence/<?= $impact['image'] ?>" alt="impact image"
                                        class="img-fluid ">

                                </div>
                                <div class="content ">

                                    <img src="images/icons/<?= $impact['icon'] ?>" alt="icon" class="icon-img">
                                    <p class="mb-0"><?= $impact['description'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>



                </div>

            </div>
        </section>

        <section class="pt-3">

            <div class="containerFull">
                <div class="px-5">
                    <h4 class="text_primary heading fontWeight600 text-center">
                        Our focus is not just academic— <br /> <span class="text_secondary">it’s holistic</span>
                    </h4>

                    <p class="text-center mt-3">
                        By blending at-par global world-class infrastructure with innovative <br /> pedagogy and
                        practical
                        application, the University delivers:
                    </p>

                    <h5 class="text_primary heading fontWeight600 text-center mt-5">
                        Campus and infrastructure 
                    </h5>
                    <div class="mt-5">
                        <img src="images/rural-excellence/infrastructure.png" alt="" class="img-fluid w-100" />
                    </div>
                    <?php

                    $campusFacilities = [
                        [
                            'icon' => 'facilities.png',
                            'title' => 'Amphitheatre style lecture halls with audio-visual aids'
                        ],
                        [
                            'icon' => 'facilities-2.png',
                            'title' => 'Indoor and outdoor sports facilities'
                        ],
                        [
                            'icon' => 'facilities-3.png',
                            'title' => 'Fully equipped labs'
                        ],
                        [
                            'icon' => 'facilities-4.png',
                            'title' => 'Moot court for mock court cases'
                        ],
                        [
                            'icon' => 'facilities-5.png',
                            'title' => 'Library'
                        ],
                        [
                            'icon' => 'facilities-6.png',
                            'title' => 'Radio room'
                        ]
                    ];
                    ?>
                    <div class="row campus-facilities mt-4">
                        <?php foreach ($campusFacilities as $facility): ?>
                            <div class="col-md-3 ">
                                <div class="facility-box text-center p-4   h-100">
                                    <img src="images/icons/<?= $facility['icon'] ?>" alt="<?= $facility['title'] ?>"
                                        class="mb-3" style="width: 100px;">
                                    <p class=""><?= $facility['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h5 class="text_primary heading fontWeight600 text-center mt-5">
                        Innovative Pedagogy
                    </h5>
                    <div class="mt-4">
                        <img src="images/rural-excellence/innovative-pedagogy.png" alt="" class="img-fluid w-100" />
                    </div>
                    <?php
                    $learningMethods = [
                        [
                            'icon' => 'padalogy.png',
                            'title' => 'Cooperative learning exercises'
                        ],
                        [
                            'icon' => 'padalogy-2.png',
                            'title' => 'Projects and internships'
                        ],
                        [
                            'icon' => 'padalogy-3.png',
                            'title' => 'Global exposure through e-learning'
                        ],
                        [
                            'icon' => 'padalogy-4.png',
                            'title' => 'Presentations and role plays'
                        ]
                    ];
                    ?>
                    <div class="row text-center learning-methods my-4">
                        <?php foreach ($learningMethods as $method): ?>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="p-3">
                                    <img src="images/icons/<?= $method['icon'] ?>" alt="<?= $method['title'] ?>"
                                        style="width: 100px; height: auto;" class="mb-3">
                                    <p class=""><?= $method['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h5 class="text_primary heading fontWeight600 text-center mt-5">
                        Modern Education System
                    </h5>
                    <div class="mt-4">
                        <img src="images/rural-excellence/edu-system.png" alt="" class="img-fluid w-100" />
                    </div>
                    <?php

                    $educationFeatures = [
                        [
                            'icon' => 'edu.png',
                            'title' => 'Industry-oriented syllabus'
                        ],
                        [
                            'icon' => 'edu-1.png',
                            'title' => 'Multi-disciplinary approach'
                        ],
                        [
                            'icon' => 'edu-2.png',
                            'title' => 'International methodologies'
                        ],
                        [
                            'icon' => 'edu-3.png',
                            'title' => 'Choice-based credit system'
                        ]
                    ];

                    ?>
                    <div class="row text-center learning-methods my-4">
                        <?php foreach ($learningMethods as $method): ?>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="p-3">
                                    <img src="images/icons/<?= $method['icon'] ?>" alt="<?= $method['title'] ?>"
                                        style="width: 100px; height: auto;" class="mb-3">
                                    <p class=""><?= $method['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h5 class="text_primary heading fontWeight600 text-center mt-5">
                        Diversified Global Teaching Arena
                    </h5>
                    <div class="mt-4">
                        <img src="images/rural-excellence/arena.png" alt="" class="img-fluid w-100" />
                    </div>
                    <?php

                    $facultyFeatures = [
                        [
                            'icon' => 'faculty.png',
                            'title' => 'Visiting faculty from reputed institutions'
                        ],
                        [
                            'icon' => 'faculty-2.png',
                            'title' => 'Experienced in-house faculty'
                        ],
                        [
                            'icon' => 'faculty-3.png',
                            'title' => 'Guest lecturers by industry leaders'
                        ],
                        [
                            'icon' => 'faculty-4.png',
                            'title' => 'International visits'
                        ]
                    ];
                    ?>
                    <div class="row text-center faculty-features my-4">
                        <?php foreach ($facultyFeatures as $feature): ?>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="p-3">
                                    <img src="images/icons/<?= $feature['icon'] ?>" alt="<?= $feature['title'] ?>"
                                        style="width: 100px; height: auto;" class="mb-3">
                                    <p class="mb-0"><?= $feature['title'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <div class="px-5">
                    <div class="swiper mySwiper campus_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="w-100" src="images/rural-excellence/campus.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="w-100" src="images/rural-excellence/campus.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="w-100" src="images/rural-excellence/campus.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="w-100" src="images/rural-excellence/campus.png" alt="" />
                            </div>
                            <div class="swiper-slide">
                                <img class="w-100" src="images/rural-excellence/campus.png" alt="" />
                            </div>


                        </div>
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="campus_swiper_btn mt-4  ">
                        <button class="btn_prev "><i class="fa fa-chevron-left text-white"></i></button>
                        <button class="btn_next "><i class="fa fa-chevron-right text-white"></i></button>
                    </div>

                </div>

            </div>
        </section>

        <section class=" ">
            <div class="containerFull">
                <div class="px-5 ">
                    <h4 class="text_primary heading fontWeight600 text-center">
                        Accolades
                    </h4>
                    <div class="mt-5">
                        <?php
                        $awards = [
                            [
                                'icon' => 'award-rural-2018.png',
                                'title' => 'Best Education In Rural India 2018',
                                'subtitle' => 'Assocham'
                            ],
                            [
                                'icon' => 'award-et-2017.png',
                                'title' => 'Best Education Brands 2017',
                                'subtitle' => 'Economic Times'
                            ],
                            [
                                'icon' => 'award-research-2024.png',
                                'title' => 'Excellence in Research and Innovation 2023-2024',
                                'subtitle' => 'Build India Achievement Awards'
                            ],
                            [
                                'icon' => 'award-indian-icon-2024.png',
                                'title' => 'Indian Icon Award in Higher Education 2023-2024',
                                'subtitle' => 'Indian Icon Awards'
                            ],
                            [
                                'icon' => 'award-university-2023.png',
                                'title' => 'University of the Year 2022-2023',
                                'subtitle' => 'Global Business and Education Awards'
                            ],
                            [
                                'icon' => 'award-west-rajasthan-2024.png',
                                'title' => 'Best University in Western Rajasthan for Researcher and Innovation 2023-2024',
                                'subtitle' => 'Emerging Icons of India Awards'
                            ],
                            [
                                'icon' => 'award-leadership-2024.png',
                                'title' => 'Excellence in Education, Leadership & Teaching 2023-2024',
                                'subtitle' => 'World Sustainability Global Awards'
                            ],
                            [
                                'icon' => 'award-iea-2024.png',
                                'title' => 'Best University of the Year 2023-2024',
                                'subtitle' => 'IEA Awards'
                            ],
                            [
                                'icon' => 'award-private-rajasthan.png',
                                'title' => 'Best Private University in Western Rajasthan for Research and Innovation 2023-2024',
                                'subtitle' => 'Global Triumph Foundation, GEC'
                            ],
                            [
                                'icon' => 'award-consumer-2024.png',
                                'title' => 'University of the Year 2024 in Recognition of Outstanding Contributions, Dedication, and Achievements',
                                'subtitle' => 'Global Chamber of Consumer Rights & ACS'
                            ],
                        ];
                        ?>
                        <div class="row  awards-section ">
                            <?php foreach ($awards as $award): ?>
                                <div class="col-md-6 col-lg-6 mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-3">

                                            <!-- <img src="images/awards/<?= $award['icon'] ?>" alt="<?= $award['title'] ?>"
                                                style="height: 60px;" class="mb-3"> -->
                                            <img src="images/demo-icon.jpg" alt="<?= $award['title'] ?>" style="width:150px"
                                                class="mb-3">
                                        </div>
                                        <div class="col-9 ps-lg-5">

                                            <h6 class="small_heading "><?= $award['title'] ?></h6>
                                            <p class="text-muted mt-3 fst-italic"><?= $award['subtitle'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>




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
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            centeredSlides: true,
            slidesPerView: 1.2,
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
            pagination: false,
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },

            navigation: {
                nextEl: ".btn_next",
                prevEl: ".btn_prev",
            },
        });
    </script>

</body>

</html>