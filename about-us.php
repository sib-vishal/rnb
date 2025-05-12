<?php $page = 'home'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL | About Us </title>
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
                <img src="images/banner/about.png" alt="" class="img-fluid w-100" />
            </div>
        </div>
        <section>
            <div class="containerFull ">
                <div class="px-5">

                    <div class="row">
                        <div class="col-lg-6">

                            <h1 class="text_primary heading fontHeading fontWeight900">
                                About Us
                            </h1>
                        </div>
                        <div class="col-lg-6">

                            <p class="">
                                The Development Office at RNB Global University is dedicated to generating philanthropic
                                support to advance the University's impact.

                            </p>
                            <p class="mt-4">

                                Through the generosity of our donors, we can ensure that talented students from all
                                backgrounds have the opportunity to study at RNB Global University, that our research
                                makes
                                a meaningful impact globally, and that our expertise is applied to address some of the
                                world's most pressing challenges while transforming the lives of our students.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="containerFull">
                <div class="px-5">

                    <h4 class="heading text_primary  fontWeight600 ">
                        RNB Global University <br /> <span class="text_secondary">Development</span> Plan (UDP)
                    </h4>
                    <p class="col-lg-6 mt-4">
                        Our ambitious, four-phase development plan is set to establish RNB Global University as India’s
                        leading rural institution, capable of nurturing a thriving community of students and scholars.
                    </p>

                    <div class="row mt-5 phase-container">
                        <?php
                        $university_phases = [
                            [
                                'phase' => 'Phase 1',
                                'title' => 'Increasing enrollment and brand recognition of the University',
                                'icon' => 'user.png'
                            ],
                            [
                                'phase' => 'Phase 2',
                                'title' => 'Building capacity in R&D and improving the quality of education',
                                'icon' => 'book.png'
                            ],
                            [
                                'phase' => 'Phase 3',
                                'title' => 'Upgrading the University\'s infrastructure',
                                'icon' => 'school.png'
                            ],
                            [
                                'phase' => 'Phase 4',
                                'title' => 'Establishing global presence in the field of higher education',
                                'icon' => 'bulb.png'
                            ]
                        ];
                        ?>
                        <?php foreach ($university_phases as $phase): ?>
                            <div class="col-lg-3">
                                <div class="phase-box">
                                    <div class="phase">
                                        <img class="" src="images/icons/<?= $phase['icon'] ?>"></img>
                                        <h4 class="phase-title"><?= $phase['phase'] ?></h4>
                                        <p class="mt-2"><?= $phase['title'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="containerFull">
                <div class="px-5">
                    <h4 class="heading text_primary fontWeight600 text-center">
                        The <span class="text_secondary">UDP’s</span> Catalyst for Innovation
                    </h4>
                    <p class="col-lg-6 mx-auto text-center mt-4">
                        The strategic and successful execution of our four-phase development plan will enable the
                        university to achieve its goals and make transformative strides in these key areas.
                    </p>

                </div>
            </div>

        </section>
        <section>
            <div class="containerFull">
                <div class="px-5">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <img class="img-fluid" src="images/research.png" alt="">

                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h5 class="text_primary sub_heading fontWeight500">
                                Pioneering research
                            </h5>
                            <p class="mt-3">
                                Conduct path-breaking research work through its Center for Desert Agriculture Innovation
                                that adds to the practical knowledge in the field of agriculture in this time of climate
                                change.
                            </p>

                        </div>

                    </div>
                    <div class="row align-items-center mt-5">

                        <div class="col-lg-5 pe-lg-5">
                            <h5 class="text_blue_light sub_heading fontWeight500">
                                Advancing Industry-<br />Academia Collaboration
                            </h5>
                            <p class="mt-3">
                                Through the Atal Community Innovation Center (ACIC) we foster an entrepreneurial mindset
                                to turn local resources into thriving businesses, creating jobs, and addressing market
                                needs.
                            </p>

                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid" src="images/about/Frame 226.png" alt="">

                        </div>

                    </div>
                    <div class="row align-items-center mt-5">
                        <div class="col-lg-7">
                            <img class="img-fluid" src="images/about/Frame 224.png" alt="">

                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h5 class="text_secondary sub_heading fontWeight500">
                                Promoting Social and <br /> Sustainable Development
                            </h5>
                            <p class="mt-3">
                                Leverage Rajasthan’s peculiar geographic needs and civilisation solutions to provide
                                unique solutions through Water Resource Solution Lab.
                            </p>

                        </div>

                    </div>
                    <div class="row align-items-center mt-5">

                        <div class="col-lg-5 pe-lg-5">
                            <h5 class="text_blue_light sub_heading fontWeight500">
                                Achieve Global Leadership <br />in Innovation
                            </h5>
                            <p class="mt-3">
                                RNB Global University aims to be the champion in design philosophy for pedagogy and
                                continue to enhance the educational experience.
                            </p>

                        </div>
                        <div class="col-lg-7">
                            <img class="img-fluid" src="images/about/Frame 223.png" alt="">

                        </div>

                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <a href="about-us.php" class="btn_2 px-5 ">Contribute to Our Mission</a>
                    </div>

                </div>
            </div>

        </section>
        <section class="ambitious-section">
            <div class="containerFull">
                <div class="px-5">

                    <div class="row   align-items-center">
                        <div class="col-lg-6 pe-lg-5 h-full ">
                            <div class="">
                                <h4 class="heading fontWeight600 text_primary  ">
                                    Why the <span class="text_secondary">Development Office</span> was Established
                                </h4>
                                <p class="mt-4">
                                    RNB Global University is committed to building a sustainable and thriving future
                                    through long-term relationships with alumni, donors, and corporate partners. To
                                    support this vision, the Development Office was established as a key driver of
                                    strategic growth and community engagement. Development offices are standard practice
                                    in many renowned global institutions, particularly in the West, where they play a
                                    pivotal role in fostering connections, managing fundraising efforts, and ensuring
                                    continued innovation. Likewise, our Development Office is designed to enhance these
                                    efforts, ensuring we have the resources necessary to provide the best education and
                                    opportunities to our students and future leaders.

                                </p>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-box">
                                <img src="images/about/Frame 234.png" alt="" class="img-fluid w-100" />

                            </div>


                        </div>


                    </div>
                </div>


            </div>
        </section>
        <section>
            <div class="containerFull">
                <div class="px-5">

                    <h4 class="heading text_primary fontWeight600">
                        <span class="text_secondary">Functions</span> of a University Development Office
                    </h4>
                    <div class="mt-4">

                        <?php
                        $connection_goals = [
                            [
                                'title' => 'Build stronger connections',
                                'description' => 'with all partners and stakeholders by nurturing long-term relationships',
                                'icon' => 'link.png'
                            ],
                            [
                                'title' => 'Philanthropic opportunities',
                                'description' => 'unlocked by attracting donations, grants, and other support to advance our mission',
                                'icon' => 'hands.png'
                            ],
                            [
                                'title' => 'Strategic growth',
                                'description' => 'to allocate funds so as to align with short-term and long-term goals',
                                'icon' => 'chart.png'
                            ],
                            [
                                'title' => 'Engage with alumni',
                                'description' => 'by providing a platform for them to contribute to their alma mater meaningfully',
                                'icon' => 'student.png'
                            ]
                        ];
                        ?>

                        <div class="goal-container">
                            <?php foreach ($connection_goals as $goal): ?>
                                <div class="goal-box">
                                    <img src="images/icons/<?= $goal['icon'] ?>" alt="">
                                    <h4 class="mt-4"><?= $goal['title'] ?></h4>
                                    <p class="mt-2"><?= $goal['description'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <p class="mt-4">
                        The RNB Global University Development Office is committed to growing the University
                        strategically. The resultant improvement of the local economy and increase in skilled
                        capacitated youth will directly contribute to influencing the migration of people.
                    </p>
                </div>

            </div>
        </section>

        <section>
            <div class="containerFull">
                <div class="px-5">
                    <?php $impacts = [
                        [
                            'title' => 'Short-term Impact',
                            'description' => 'Increase in Gross Enrolment Rate in higher education',
                            'icon' => 'bag.png',
                            'color' => '#2e2e72'
                        ],
                        [
                            'title' => 'Medium-term Impact',
                            'description' => 'Skilled capacitated youth',
                            'icon' => 'degree.png',
                            'color' => '#ffc72c'
                        ],
                        [
                            'title' => 'Long-term Impact',
                            'description' => 'Transforming the lives of students and their families',
                            'icon' => 'suitcase.png',
                            'color' => '#00a6de'
                        ]
                    ];


                    ?>

                    <div class="impact-box mt-4">
                        <div class="row justify-content-center">
                            <?php foreach ($impacts as $impact): ?>
                                <div class="col-md-4 mb-4">
                                    <div class=" card-impact  p-4  h-100">
                                        <img src="images/icons/<?= $impact['icon'] ?>" class="mb-3"
                                            alt="icon">
                                        <h5 class=" mt-3 "><?= $impact['title'] ?></h5>
                                        <p class="mb-0 mt-3"><?= $impact['description'] ?></p>
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