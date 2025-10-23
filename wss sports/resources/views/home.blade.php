<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WSS Sports Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/wsslogo.jpg') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ctabutton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quotesection.css') }}" rel="stylesheet">
    <link href="{{ asset('css/update.css') }}" rel="stylesheet">

    @include('partials.fontlinks')
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

    @include('partials.navbar')
    <!-- Navbar Start -->

    <!-- Carousel Start -->
  @include('partials.slider')
      <!--cta buttons -->
    <div class="container pt-5">
    <div class="hero-buttons text-center wow fadeInUp" data-wow-delay="0.2s">
        <a href="{{ url('/join-us') }}" class="btn btn-wss-primary rounded-pill py-3 px-5 me-3 mb-3">
            <i class="fa fa-user-plus me-2"></i> JOIN US
        </a>
        <a href="{{ url('/programs-academies') }}" class="btn btn-wss-secondary rounded-pill py-3 px-5 me-3 mb-3">
            <i class="fa fa-graduation-cap me-2"></i> EXPLORE ACADEMIES
        </a>
        <a href="{{ url('/affiliate') }}" class="btn btn-wss-tertiary rounded-pill py-3 px-5 mb-3">
            <i class="fa fa-handshake-o me-2"></i> AFFILIATE NOW
        </a>
    </div>
</div>


    <br><br>
    <!--cta button end -->






    <!-- Feature Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 text-center text-md-start">

      <!-- Academies -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
          <div class="btn-lg-square bg-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center">
            <i class="fa fa-users text-white fs-4"></i>
          </div>
          <h1 class="mb-0 fw-bold ms-3" data-toggle="counter-up">41</h1>
        </div>
        <h5 class="fw-semibold text-uppercase">Academies in India</h5>
        <p class="text-muted small mb-0">
          Spreading excellence with 41+ active academies across India.
        </p>
      </div>

      <!-- Partner Schools -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
          <div class="btn-lg-square bg-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center">
            <i class="fa fa-check text-white fs-4"></i>
          </div>
          <h1 class="mb-0 fw-bold ms-3" data-toggle="counter-up">100</h1>
        </div>
        <h5 class="fw-semibold text-uppercase">Partner Schools</h5>
        <p class="text-muted small mb-0">
          Strong partnerships with 100+ schools nationwide.
        </p>
      </div>

      <!-- Countries -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
          <div class="btn-lg-square bg-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center">
            <i class="fa fa-award text-white fs-4"></i>
          </div>
          <h1 class="mb-0 fw-bold ms-3" data-toggle="counter-up">3</h1>
        </div>
        <h5 class="fw-semibold text-uppercase">Countries</h5>
        <p class="text-muted small mb-0">
          Expanding in India, Sri Lanka, and Malaysia.
        </p>
      </div>

      <!-- Certification -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
        <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
          <div class="btn-lg-square bg-primary rounded-circle shadow-sm d-flex align-items-center justify-content-center">
            <i class="fa fa-users-cog text-white fs-4"></i>
          </div>
        </div>
        <h5 class="fw-semibold text-uppercase">ISO 9001:2015 Certified</h5>
        <p class="text-muted small mb-0">
          Recognized for international quality standards.
        </p>
      </div>

    </div>
  </div>
</div>


    <!-- Feature Start -->


    <!-- About Start -->
    {{-- <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">About Us</h6>
                        <h1 class="mb-4">25+ Years Experience In Solar & Renewable Energy Industry</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Diam dolor diam ipsum</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->


    <!-- Service Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Latest News</h6>
                <h1 class="mb-4">Explore the Latest News and Updates from Our Academy</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-3.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-4.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-5.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!--achivement start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Academy Achievements</h6>
            <h1 class="mb-4">Celebrating the Proud Achievements of Our Academy</h1>
        </div>
        <div class="row g-4">
            <!-- Achievement 1 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-1.jpg" alt="Achievement 1">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-trophy fa-3x"></i>
                        </div>
                        <h4 class="mb-3">National Championship</h4>
                        <p>Our students secured 1st place in the National Level Sports Championship 2025.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Achievement 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-2.jpg" alt="Achievement 2">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-medal fa-3x"></i>
                        </div>
                        <h4 class="mb-3">International Recognition</h4>
                        <p>Our academy received global recognition for excellence in training & performance.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Achievement 3 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-3.jpg" alt="Achievement 3">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-star fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Best Academy Award</h4>
                        <p>Awarded the “Best Academy of the Year” for outstanding contribution in sports & arts.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Achievement 4 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-4.jpg" alt="Achievement 4">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-crown fa-3x"></i>
                        </div>
                        <h4 class="mb-3">State-Level Champions</h4>
                        <p>Our students won multiple gold medals in state-level competitions this year.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Achievement 5 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-5.jpg" alt="Achievement 5">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-flag fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Cultural Excellence</h4>
                        <p>Our academy was recognized for outstanding cultural events & performances.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Achievement 6 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/achievement-6.jpg" alt="Achievement 6">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Community Service</h4>
                        <p>Our students actively participate in social service and community development.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- achivement end -->


    <!--Announcement start-->


    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Announcements</h6>
            <h1 class="mb-4">Latest Announcements from Our Academy</h1>
        </div>
        <div class="row g-4">
            <!-- Announcement 1 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-1.jpg" alt="Announcement 1">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-bullhorn fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Annual Sports Meet</h4>
                        <p>Join us for the grand Annual Sports Meet 2025 starting on October 12th.</p>
                        <a class="small fw-medium" href="#">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-2.jpg" alt="Announcement 2">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-calendar-alt fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Exam Schedule</h4>
                        <p>The updated exam timetable for the academic year has been released.</p>
                        <a class="small fw-medium" href="#">View Schedule<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 3 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-3.jpg" alt="Announcement 3">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-graduation-cap fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Convocation Ceremony</h4>
                        <p>The Convocation Ceremony will be held on December 15th for graduating students.</p>
                        <a class="small fw-medium" href="#">Learn More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 4 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-4.jpg" alt="Announcement 4">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-microphone fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Guest Lecture</h4>
                        <p>Renowned sports professionals will deliver a motivational session this month.</p>
                        <a class="small fw-medium" href="#">Know More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 5 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-5.jpg" alt="Announcement 5">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-users fa-3x"></i>
                        </div>
                        <h4 class="mb-3">New Admissions</h4>
                        <p>Admissions for the upcoming academic year are now open. Apply before deadline.</p>
                        <a class="small fw-medium" href="#">Apply Now<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Announcement 6 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="img/announcement-6.jpg" alt="Announcement 6">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-certificate fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Scholarship Program</h4>
                        <p>Scholarship applications are open for meritorious and deserving students.</p>
                        <a class="small fw-medium" href="#">Apply Scholarship<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


    <!-- Announcement End -->

<!-- latest update -->
<!-- Home Page Section: News | Announcements | Achievements -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-danger text-uppercase fw-bold">Updates</h6>
            <h1 class="mb-4 fw-bold">Stay Updated with Our Academy</h1>
        </div>
        <div class="row g-4">
            <!-- Latest News -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-lg overflow-hidden">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('img/news.jpg') }}" class="card-img-top" alt="News Image">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 text-center">
                                <i class="fa fa-newspaper-o fa-2x text-danger"></i>
                            </div>
                            <h5 class="card-title fw-bold text-center">Latest News</h5>
                            <ul class="list-unstyled mt-3">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/news/1" class="text-decoration-none text-dark">New course launched on Renewable Energy</a>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/news/2" class="text-decoration-none text-dark">Workshop on Solar Panel Installation</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/news/3" class="text-decoration-none text-dark">Academy ranked among top 10 in India</a>
                                </li>
                            </ul>
                        </div>
                        <a href="/news" class="btn btn-danger w-100 mt-3">View More</a>
                    </div>
                </div>
            </div>

            <!-- Announcements -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-lg overflow-hidden">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('img/announcement.jpg') }}" class="card-img-top" alt="Announcement Image">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 text-center">
                                <i class="fa fa-bullhorn fa-2x text-danger"></i>
                            </div>
                            <h5 class="card-title fw-bold text-center">Announcements</h5>
                            <ul class="list-unstyled mt-3">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/announcement/1" class="text-decoration-none text-dark">Semester registration open from Sep 15</a>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/announcement/2" class="text-decoration-none text-dark">Maintenance of campus on Sep 12</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/announcement/3" class="text-decoration-none text-dark">Guest lecture on Renewable Energy</a>
                                </li>
                            </ul>
                        </div>
                        <a href="/announcement" class="btn btn-danger w-100 mt-3">View More</a>
                    </div>
                </div>
            </div>

            <!-- Achievements -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-lg overflow-hidden">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('img/achivement.jpg') }}" class="card-img-top" alt="Achievement Image">
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-3 text-center">
                                <i class="fa fa-trophy fa-2x text-danger"></i>
                            </div>
                            <h5 class="card-title fw-bold text-center">Achievements</h5>
                            <ul class="list-unstyled mt-3">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/achievement/1" class="text-decoration-none text-dark">Student won National Science Award</a>
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/achievement/2" class="text-decoration-none text-dark">Academy received Green Campus Certification</a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-angle-right me-2 text-danger"></i>
                                    <a href="/achievement/3" class="text-decoration-none text-dark">Team participated in Solar Hackathon</a>
                                </li>
                            </ul>
                        </div>
                        <a href="/achievement" class="btn btn-danger w-100 mt-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>




<!-- latest updated end -->

  <!-- Quote Section start-->
    <section class="quote-section py-5 bg-light text-center position-relative">
        <div class="container">
            <!-- Quote Icon -->
            <div class="quote-icon mb-4 wow fadeInDown" data-wow-delay="0.1s">
                <i class="fa fa-quote-left text-danger fa-3x"></i>
            </div>

            <!-- Quote Text -->
            <blockquote class="blockquote wow fadeInUp" data-wow-delay="0.2s">
                <p class="fs-4 fw-semibold text-dark">
                    “GREAT THINGS ARE NOT DONE BY ONE PERSON. THEY’RE DONE BY A TEAM OF PEOPLE.”
                </p>
            </blockquote>

            <!-- Author / Source -->
            <footer class="blockquote-footer mt-3 text-muted wow fadeInUp" data-wow-delay="0.3s">
                – WSS Sports Team
            </footer>
        </div>
    </section>

    <br><br>
    <!-- quote section end -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <!-- Text Section -->
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Why Choose WSS Sports Academy!</h6>
                    <h1 class="mb-4">Excellence in Sports Training for All Ages</h1>
                    <p class="mb-4 pb-2">At WSS Sports Academy, we nurture talent and build champions. Our expert coaches, state-of-the-art facilities, and personalized training programs ensure every athlete reaches their full potential.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-trophy text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Award-Winning</p>
                                    <h5 class="mb-0">Coaches</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Team</p>
                                    <h5 class="mb-0">Spirit</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-calendar-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Flexible</p>
                                    <h5 class="mb-0">Schedules</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">24/7</p>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/wsssportsacademy.png') }}" style="object-fit: cover;" alt="WSS Sports Academy">
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Feature End -->


    <!-- Projects Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Academy</h6>
                <h1 class="mb-4"> through the latest news, announcements, and achievements</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Latest News</li>
                        <li class="mx-2" data-filter=".second">Latest Announcement</li>
                        <li class="mx-2" data-filter=".third">Latest Achivement</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/img-600x400-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/img-600x400-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Free Quote</h6>
                        <h1 class="mb-4">Get A Free Quote</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quote End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Academy Member</h6>
                <h1 class="mb-4">Experienced Academy Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="img/wusf-avatar.jpg" alt="">
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
                            <img class="img-fluid w-75" src="img/wusf-avatar.jpg" alt="">
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
                            <img class="img-fluid w-75" src="img/wusf-avatar.jpg" alt="">
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
    <!-- cta buttons -->
    <!-- cta buttons end -->
    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Testimonial</h6>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


 @include('partials.footer')


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
