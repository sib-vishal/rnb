<?php $page = 'home'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL | Impact Stories </title>
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
                                Impact Stories
                            </h1>
                        </div>
                        <div class="col-lg-6">
                            <p class="">

                                At the end of the day, what matters is the positive impact we create. We’re glad that we
                                have been creating sustainable partnerships to drive the University’s mission forward
                                and benefitting both our current students and future generations.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull ">
                <div class="px-5">

                    <div class="row justify-content-center">
                        <div class="col-lg-10 tabs">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="pill"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">Incubation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2"
                                        aria-selected="false">Agriculture</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3"
                                        aria-selected="false">Infrastructure</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab4-tab" data-bs-toggle="pill" data-bs-target="#tab4"
                                        type="button" role="tab" aria-controls="tab4"
                                        aria-selected="false">Ecosystem</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab5-tab" data-bs-toggle="pill" data-bs-target="#tab5"
                                        type="button" role="tab" aria-controls="tab5"
                                        aria-selected="false">Climate</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab6-tab" data-bs-toggle="pill" data-bs-target="#tab6"
                                        type="button" role="tab" aria-controls="tab6"
                                        aria-selected="false">SDGs</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/Incubation.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-center">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Bina Khet Ki <br /> Kheti
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        Meet Priya, an RNBGU graduate in horticulture, who turned her academic knowledge
                                        into a groundbreaking venture. Inspired by her education and mentorship at the
                                        University’s Incubation Centre, she launched the “Bina Khet Ki Kheti”
                                        initiative, focusing on sustainable mushroom cultivation without the need for
                                        traditional farming land.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading mt-5 fontWeight600 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight.png',
                                    'title' => 'Introduces low-resource farming for arid regions'
                                ],
                                [
                                    'icon' => 'impact-helight-2.png',
                                    'title' => 'Inspires rural women to pursue agriculture-based startups'
                                ],
                                [
                                    'icon' => 'impact-helight-3.png',
                                    'title' => 'Generates jobs and delivers organic mushrooms to urban markets, driving economic growth'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/vk-foods.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        VK Foods
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        02
                                    </div>
                                    <p class="mt-4">
                                        When RNB Global University alumnus Rahul Verma returned to his family’s flour
                                        mill
                                        business, he brought more than just enthusiasm—he brought innovation. Using his
                                        newly
                                        acquired business management skills not just through classroom training but also
                                        across
                                        various guest lectures and seminars, he transformed his family’s small-scale
                                        operation
                                        into a recognized brand: VK Foods.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading fontWeight600 text_primary text-center  mt-5">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-4.png',
                                    'title' => 'Brand Development in an otherwise unorganised market'
                                ],
                                [
                                    'icon' => 'impact-helight-5.png',
                                    'title' => 'Creation of a sustainable model that respects heritage while embracing new age marketing skills'
                                ],
                                [
                                    'icon' => 'impact-helight-6.png',
                                    'title' => 'Source of employment for local farmers and workers, strengthening the regional economy'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/agriculture.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-center">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Desert <br />Agriculture
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        The University’s commitment to desert agriculture has nurtured over 35% of its
                                        students in horticulture courses. With access to state-of-the-art agriculture
                                        labs and experimental farms, these students are pioneering solutions for global
                                        food challenges posed by climate change.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading fontWeight600 mt-5 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-7.png',
                                    'title' => 'Testing of sustainable farming techniques like hydroponics and vertical farming in desert conditions'
                                ],
                                [
                                    'icon' => 'impact-helight-8.png',
                                    'title' => 'Training programmes by University students on productivity have reached 100+ local farmers'
                                ],
                                [
                                    'icon' => 'impact-helight-9.png',
                                    'title' => 'Seven horticulture course graduates have successfully launched startups that incorporate high-yield agricultural practices'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="">
                                <img class="img-fluid" src="images/impact-story/dairy-form.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Dairy Farm
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        02
                                    </div>
                                    <p class="mt-4">
                                        This student-led initiative at the University has merged education with
                                        sustainable entrepreneurship to create an eco-friendly dairy farm.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading fontWeight600 mt-5 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-10.png',
                                    'title' => 'Employs 15 villagers benefitting over 60 lives'
                                ],
                                [
                                    'icon' => 'impact-helight-11.png',
                                    'title' => 'Delivers organic dairy products enhancing local health and nutrition'
                                ],
                                [
                                    'icon' => 'impact-helight-12.png',
                                    'title' => 'Trains youth in modern dairy practices, fostering rural growth and replication'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/moot-court.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Moot Court
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        For our law students, participating in moot court sessions allows them to engage
                                        in mock trials, providing invaluable insights into the legal process and
                                        developing their critical thinking skills. Several local panchayat cases are
                                        also held in the University’s moot court, allowing students to be an audience to
                                        real-world cases and get first-hand practical exposure.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading fontWeight600 mt-5 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-13.png',
                                    'title' => 'Practical exposure for students to the legal process'
                                ],
                                [
                                    'icon' => 'impact-helight-14.png',
                                    'title' => 'Supplementing the local panchayat with high quality infrastructure'
                                ],
                                [
                                    'icon' => 'impact-helight-15.png',
                                    'title' => 'Student interactions with industry leaders and experts'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/ger.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Balancing GER
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        The Gross Enrollment Ratio (GER*) in rural India is 7%, compared to 23% in urban
                                        areas. RNB Global University is changing that by creating a space where local
                                        talent can thrive, driving societal progress through education. This is aligned
                                        with the National Education Policy 2020’s vision for attaining 50% national GER
                                        by 2035 in higher education.


                                    </p>
                                    <p class="mt-2">
                                        *GER is calculated by dividing the number of students enrolled in higher
                                        education out of the total population in the relevant age group.
                                    </p>

                                </div>


                            </div>
                            <h4 class="heading fontWeight600 mt-5 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-16.png',
                                    'title' => 'More than 25% of our students come from rural communities, helping increase the regional GER'
                                ],
                                [
                                    'icon' => 'impact-helight-17.png',
                                    'title' => 'Improved employability for rural students through vocational and skill-based courses'
                                ],
                                [
                                    'icon' => 'impact-helight-18.png',
                                    'title' => 'Increase in rural students applying for various UG and PG programs due to outreach efforts'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/afforestation.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="heading fontWeight600 text_secondary">
                                        Afforestation
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        The University has successfully initiated afforestation projects across the
                                        campus and nearby areas. These efforts have rejuvenated native flora, created
                                        habitats for wildlife, and reduced the harshness of the surrounding desert. This
                                        biodiversity contributes to a balanced ecosystem and acts as a natural shield
                                        against dust storms and soil erosion.


                                    </p>


                                </div>


                            </div>
                            <h4 class="heading fontWeight600 mt-5 text_primary text-center ">
                                Impact Highlights
                            </h4>

                            <?php $agricultureImpactStories = [
                                [
                                    'icon' => 'impact-helight-19.png',
                                    'title' => 'Extensive tilling and soil-binding techniques combat erosion and enhance fertility'
                                ],
                                [
                                    'icon' => 'impact-helight-20.png',
                                    'title' => 'Over 20K native and drought-resistant species of trees planted to rejuvenate biodiversity'
                                ],
                                [
                                    'icon' => 'impact-helight-21.png',
                                    'title' => '300 acres of green cover to improve air quality and prevent desertification'
                                ]
                            ];

                            ?>
                            <div class="row mt-5 imapact_highlight   ">
                                <?php foreach ($agricultureImpactStories as $story): ?>
                                    <div class="col-md-4 mb-4  item">
                                        <div class="py-4 px-5 p">
                                            <img src="images/icons/<?= $story['icon'] ?>" alt="Icon"
                                                style="height: 100px; ">
                                            <p class="mt-3"><?= $story['title'] ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                            <div class="mt-5">
                                <img class="img-fluid" src="images/impact-story/sdg.png" alt="">
                            </div>
                            <div class="mt-5 row  align-items-end">
                                <div class="col-lg-4 ">
                                    <h4 class="sub_heading fontWeight600 text_secondary">
                                        University Impact on <br /> UN Sustainable <br /> Development Goals
                                    </h4>

                                </div>
                                <div class="col-lg-8">
                                    <div class="number_box ">
                                        01
                                    </div>
                                    <p class="mt-4">
                                        The University’s outcomes extend beyond benefits to individual students,
                                        regional communities and national impact. As the name RNB Global suggests, we
                                        are aiming for global impact.
                                    </p>
                                </div>
                            </div>
                            <?php
                            $sdgs = [
                                [
                                    'id' => 1,
                                    'title' => 'No Poverty',
                                    'color' => '#e5243b',
                                    'description' => 'End poverty in all its forms everywhere',
                                    
                                ],
                                [
                                    'id' => 2,
                                    'title' => 'Zero Hunger',
                                    'color' => '#dda63a',
                                    'description' => 'End hunger, achieve food security and improved nutrition and promote sustainable agriculture',
                                ],
                                [
                                    'id' => 3,
                                    'title' => 'Good Health & Well Being',
                                    'color' => '#4c9f38',
                                    'description' => 'Ensure healthy lives and promote well-being for all at all ages',
                                ],
                                [
                                    'id' => 4,
                                    'title' => 'Quality Education',
                                    'color' => '#c5192d',
                                   'description' => 'Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all',
                                ],
                                [
                                    'id' => 5,
                                    'title' => 'Gender Equality',
                                    'color' => '#ff3a21',
                                   'description' => 'Achieve gender equality and empower all women and girls',
                                ],
                                [
                                    'id' => 6,
                                    'title' => 'Clean Water & Sanitation',
                                    'color' => '#26bde2',
                                    'description' => 'Ensure availability and sustainable management of water and sanitation for all',
                                ],
                                [
                                    'id' => 7,
                                    'title' => 'Affordable Energy & Clean Water',
                                    'color' => '#fcc30b',
                                    'description' => 'Ensure access to affordable, reliable, sustainable and modern energy for all',
                                ],
                                [
                                    'id' => 8,
                                    'title' => 'Decent Works & Economic Growth',
                                    'color' => '#a21942',
                                    'description' => 'Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all',
                                ],
                                [
                                    'id' => 9,
                                    'title' => 'Industry, Innovation & Infrastructure',
                                    'color' => '#fd6925',
                                    'description' => 'Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation',
                                ],
                                [
                                    'id' => 10,
                                    'title' => 'Reduce Inequalities',
                                    'color' => '#dd1367',
                                    'description' => 'Reduce inequality within and among countries',
                                ],
                                [
                                    'id' => 11,
                                    'title' => 'Climate Action',
                                    'color' => '#3f7e44',
                                   'description' => 'Take urgent action to combat climate change and its impacts',
                                ],
                            ];
                            ?>
                            <div class="row mt-5" style="--bs-gutter-x: 1rem;">
                                <?php foreach ($sdgs as $goal): ?>
                                    <div class="col-lg-4 mb-3">
                                        <div class="sdg-card">
                                            <img src="images/impact-story/sdg/sdg-<?= $goal['id'] ?>.png" alt="<?= $goal['title'] ?>"
                                                class="main-img">
                                            <!-- <img src="<?= $goal['img'] ?>" alt="<?= $goal['title'] ?>" class="main-img"> -->
                                            <div class="info-card" style="background-color: <?= $goal['color'] ?>;">
                                                <p class="text-white">
                                                    SDG <?= $goal['id'] ?>
                                                </p>
                                                <img  src="images/icons/sdg/sdg-<?= $goal['id'] ?>.png" class="icon mt-3 " alt="icon">
                                                <p class=" text-white mt-3"><?= $goal['title'] ?></p>
                                            </div>
                                            <div class="sdg-card-hover p-5" style="background-color: <?= $goal['color'] ?>;">
                                                 <h2 class="text-white ">
                                                    SDG <?= $goal['id'] ?>
                                                </h2>
                                                <hr/>
                                                <img  src="images/icons/sdg/sdg-<?= $goal['id'] ?>.png" class="icon mt-3 " alt="icon">

                                                <p class=" text-white mt-3"><?= $goal['description'] ?></p>




                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    
        <section class="pt-0">
            <div class="containerFull ">
                <div class="px-4 row justify-content-center ">
                    <p class="col-lg-7 text-center">
                        Your donations help accelerate the pace of our work and multiply the impact we create. Come be
                        our partner in this transformative journey!

                    </p>

                    <div class="mt-5 d-flex justify-content-center " style="">
                        <a class="btn_2 px-5" href="/">

                            Make a Donation
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

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const hash = window.location.hash;

        if (hash) {
            // Convert hash to lowercase for case-insensitive matching
            const targetId = hash.substring(1).toLowerCase();

            // Find the tab button that matches the hash
            const tabButton = Array.from(document.querySelectorAll('.nav-link')).find(btn =>
                btn.textContent.trim().toLowerCase() === targetId
            );

            if (tabButton) {
                // Use Bootstrap's Tab API to show the tab
                const tabTrigger = new bootstrap.Tab(tabButton);
                tabTrigger.show();
            }
        }
    });
</script>



</body>

</html>