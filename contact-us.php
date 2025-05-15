<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNB GLOBAL | Contact </title>
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
        <section class="">
            <div class="containerFull">

                <div class="px-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="heading ">
                                <span class="text_primary">RNB Global University </span><br />
                                <span class="text_secondary">Development Office</span>
                            </h4>
                            <div class="contact-card mt-4">
                                <div class="contact-item">
                                    <img src="images/icons/location.png" alt="Location Icon" class="icon" />
                                    <p>AltF Coworking, 101, NH-19, above <br /> Sandoz Restaurant, CRRI, Ishwar <br />
                                        Nagar, Okhla,
                                        New Delhi, Delhi 110044</p>
                                </div>

                                <div class="contact-item">
                                    <img src="images/icons/phone.png" alt="Phone Icon" class="icon" />
                                    <p>+91 8287920107</p>
                                </div>

                                <div class="contact-item">
                                    <img src="images/icons/mail.png" alt="Email Icon" class="icon" />
                                    <p><a target="_blank"
                                            href="mailto:development@rnbglobal.edu.in">development@rnbglobal.edu.in</a>
                                    </p>
                                </div>
                            </div>
                            <h4 class="heading mt-5 ">
                                <span class="text_primary">RNB Global University </span>
                            </h4>
                            <div class="contact-card mt-4">

                                <div class="contact-item">
                                    <img src="images/icons/location.png" alt="Location Icon" class="icon" />
                                    <p>RNB Global City, Ganganagar Road, <br /> Bikaner, Rajasthan-334601</p>
                                </div>

                                <div class="contact-item">
                                    <img src="images/icons/phone.png" alt="Phone Icon" class="icon" />
                                    <p>+91-151-2220333</p>
                                </div>

                                <div class="contact-item">
                                    <img src="images/icons/mail.png" alt="Email Icon" class="icon" />
                                    <p><a target="_blank" href="mailto:info@rnbglobal.edu.in">info@rnbglobal.edu.in</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-wrapper">

                                <form class="custom-form p-3 rounded">
                                    <div class="row mb-3" style="--bs-gutter-x: 1rem">
                                        <div class="col">
                                            <input type="text" class="form-control form-field" placeholder="First name*"
                                                required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-field" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-field" placeholder="Email address*"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control form-field" placeholder="Phone number*"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control form-field" rows="8"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn_2 ">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>


                </div>


            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">

                <div class="px-5">
                    <h4 class="heading ">
                        <span class="text_primary">Development team: </span>

                    </h4>

                    <div class="row justify-content-evenly text-center mt-5">

                        <!-- Card 1 -->
                        <div class="col-md-5 mb-4">
                            <div class="profile-card">
                                <div class="profile-img-wrapper">
                                    <img src="images/team/khushbu.png" alt="Khushbu Merchant" class="profile-img">
                                    <img src="images/team/linkedin.png" alt="LinkedIn" class="linkedin-icon">
                                </div>
                                <h4 class="mt-5">Khushbu Merchant</h4>
                                <p class="description mt-4">
                                    Khushbu is a seasoned educationist with 18 years of experience in strategy, sector
                                    landscaping, and fundraising. She has spent about a decade with Big4 firms such as
                                    EY and KPMG. Post which she had a serendipitous transition to the Development sector
                                    working with Educate Girls, Magic Bus, Armman, and RNB Global University. She
                                    specialises in Education, Gender, Livelihood and Health portfolios.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-5 mb-4">
                            <div class="profile-card">
                                <div class="profile-img-wrapper">
                                    <img src="images/team/shobhit.png" alt="Shobhit Prakash" class="profile-img">
                                    <img src="images/team/linkedin.png" alt="LinkedIn" class="linkedin-icon">
                                </div>
                                <h4 class="mt-5">Shobhit Prakash</h4>
                                <p class="description mt-4">
                                    Shobhit is a seasoned professional with 18 years of experience in the social
                                    development sector, having worked with renowned organizations such as Rekhta
                                    Foundation, Community – The Youth Collective, Rainbow Home Programs (RFI),
                                    Compassion International, World Vision, and Shikhar Microfinance Pvt. Ltd. With
                                    expertise in resource mobilization, fundraising, relationship management, program
                                    implementation, and microfinance, Shobhit has played a pivotal role in advancing
                                    sustainable development and livelihood programs.
                                </p>
                            </div>
                        </div>

                    </div>



                </div>


            </div>
        </section>
        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>


</body>

</html>