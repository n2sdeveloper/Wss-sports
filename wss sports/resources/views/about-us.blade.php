<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wss-Sports</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
     <link rel="icon" href="{{ asset('img/wsslogo.jpg') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('partials.header')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- #region--> <!-- About Section -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary">About WSS Sports Academy</h6>
                <h1 class="mb-4">Nurturing the Next Generation of <span style="color: red">Champions</span></h1>
                <p class="mb-4">
                    Founded in <strong>2011</strong> and incorporated in <strong>2017</strong>,
                    <strong>WSS Sports & Entertainment Pvt Ltd</strong> is a multi-chain Sports, Arts & Science academy
                    dedicated to shaping the future of young talent. We focus on developing skills,
                    discipline, and sportsmanship while providing world-class facilities and professional coaching.
                </p>
                <p class="mb-4">
                    Our mission is to empower students of all ages to excel in sports, arts, and academics through
                    personalized training programs, expert guidance, and a holistic learning environment.
                </p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="#">Join Us Today</a>
            </div>

            <!-- Image Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid rounded shadow" src="{{ asset('img/about-us-image.jpg') }}" alt="WSS Sports Academy">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our vision start -->
<!-- Our Vision Section - Image Left, Text Right -->
<!-- Vision Section -->
<div class="container-xxl py-5" style="background-color: #fff5f5;">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Image Column -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden shadow-lg">
                    <img class="img-fluid w-100" src="{{ asset('img/success.jpg') }}" alt="Our Vision" style="object-fit: cover; height: 450px;">
                    <!-- Overlay removed -->
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <h6 class="text-danger fw-bold mb-3">Our Vision</h6>
                <h1 class="display-5 fw-bold text-dark mb-4">Transforming Hidden Talent into Brilliance</h1>
                <p class="fs-5 text-dark mb-4">
                    We support economically backward talent. A diamond shines by itself, but an ore must be discovered and transformed into a diamond. At
                    <strong>WSS Sports Academy</strong>, we find that ore and shape it into brilliance.
                </p>
                <a class="btn btn-danger btn-lg px-5 py-3 shadow-sm rounded-pill" href="#">Learn More</a>
            </div>

        </div>
    </div>
</div>
<!-- Vision End -->


<!-- Mission Section -->
<div class="container-xxl py-5" style="background-color: #fdfdfd;">
    <div class="container">
        <div class="row g-5 align-items-center flex-lg-row-reverse">

            <!-- Image Column -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden shadow-lg">
                    <img class="img-fluid w-100" src="{{ asset('img/ourmission.jpg') }}" alt="Our Mission" style="object-fit: cover; height: 450px;">
                    <!-- Overlay removed -->
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                <h6 class="text-danger fw-bold mb-3">Our Mission</h6>
                <h1 class="display-5 fw-bold text-dark mb-4">Empowering Talent and Shaping Champions</h1>
                <p class="fs-5 text-dark mb-4">
                    Our mission is to empower economically backward and gifted talent by providing access to world-class training, personalized coaching, and a holistic environment. At
                    <strong>WSS Sports Academy</strong>, we transform potential into excellence and help every student shine in sports, arts, and academics.
                </p>
                <a class="btn btn-danger btn-lg px-5 py-3 shadow-sm rounded-pill" href="#">Join Our Programs</a>
            </div>

        </div>
    </div>
</div>
<!-- Mission End -->


<!-- Objective Section -->
<div class="container-xxl py-5" style="background-color: #fff5f5;">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Image Column -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden shadow-lg">
                    <img class="img-fluid w-100" src="{{ asset('img/objective.jpg') }}" alt="Our Objective" style="object-fit: cover; height: 450px;">
                    <!-- Overlay removed -->
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <h6 class="text-danger fw-bold mb-3">Our Objective</h6>
                <h1 class="display-5 fw-bold text-dark mb-4">Passion for Sports is Our Foundation</h1>
                <p class="fs-5 text-dark mb-4">
                    We push beyond limits in sports, arts, and science to empower individuals
                    to achieve their highest goals and improve their well-being.
                </p>
                <a class="btn btn-danger btn-lg px-5 py-3 shadow-sm rounded-pill" href="#">Discover More</a>
            </div>

        </div>
    </div>
</div>
<!-- Objective End -->
<br><br>
<!-- Certifications & Structure Section -->
<div class="container-xxl py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Left Text Content -->
            <div class="col-lg-6">
                <h6 class="text-danger text-uppercase fw-bold mb-3">Certifications & Structure</h6>
                <h1 class="fw-bold mb-4">Our Credentials & Governance</h1>
                <p class="text-muted mb-4">
                    We are committed to excellence, guided by strong corporate governance and certified processes.
                    Our organizational structure reflects transparency, accountability, and leadership.
                </p>

                <ul class="list-unstyled">
                    <li class="mb-3 d-flex">
                        <i class="fa fa-id-card text-danger me-3 fs-5"></i>
                        <span><strong>CIN:</strong> U74999TN2018PTC120435</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fa fa-certificate text-danger me-3 fs-5"></i>
                        <span><strong>ISO 9001:2015 Certified</strong> — Quality management excellence.</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fa fa-users text-danger me-3 fs-5"></i>
                        <span><strong>4 Directors</strong> (Executive & Non-Executive) ensuring strategic growth.</span>
                    </li>
                </ul>
            </div>

            <!-- Right Styled Card Box -->
            <div class="col-lg-6">
                <div class="bg-white shadow-lg rounded-3 p-5">
                    <h4 class="text-danger fw-bold mb-4">Why It Matters</h4>
                    <p class="mb-3">
                        Our certifications validate our commitment to global standards, while our
                        governance structure ensures responsible decision-making and sustainable growth.
                    </p>
                    <p class="mb-0">
                        With strong leadership and international certification, we continue to inspire trust
                        among our partners, clients, and stakeholders.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Team Member</h6>
                <h1 class="mb-4">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-1.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-2.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/team-3.jpg" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    @include('partials.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
