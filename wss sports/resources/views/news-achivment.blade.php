<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wss-sports</title>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">GWR Records</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/award-2025.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3">GWR PRESTIGIOUS AWARD 2025</h4>
                            <p>An International Award Ceremony Honoring Excellence in Various Fields.We evaluate certify unique, verified achievements across all domains</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/dragon.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3">GWR Phoenix Rising awards & GWR Dragon Legacy Global world record season - 5</h4>
                            <p>Witness the breathtaking fusion of passion and prowess at the GWR Phoenix Rising Awards & GWR Dragon Legacy Global World Record event.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/nadana.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3">NADANA AMUDHAM – GWR Classical Dance Record</h4>
                            <p>A history of 1000+ classical dancers on the same ground of performing a tribute to our country “INDIA”Partner with us to host official record-setting events.</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-4">Iuyf Yoga Events</h1>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden h-100 d-flex flex-column">
                    <img class="img-fluid" src="img/asian.jpg" alt="">
                    <div class="position-relative p-4 pt-0 d-flex flex-column flex-grow-1">
                        <h4 class="mb-3 pt-4">International Yoga Championship Sri Lanka-2025</h4>
                        <p class="flex-grow-1">
                            IUYF Champion of champions will be selected in male as well as in female category.
                            Best two from each group (i.e. sub junior, junior and senior boys and girls)
                            will be taken on the basis of their performance in athletic Yoga.
                        </p>
                        <a class="small fw-medium mt-auto" href="">
                            Read More<i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden h-100 d-flex flex-column">
                    <img class="img-fluid" src="img/1styoga.jpg" alt="">
                    <div class="position-relative p-4 pt-0 d-flex flex-column flex-grow-1">
                        <h4 class="mb-3">1st Iuyf Yoga World Championship</h4>
                        <p class="flex-grow-1">
                            IUYF 1st World Championship will be selected in male as well as in female category.
                            Best two from each group (i.e. sub junior, junior and senior boys and girls)
                            will be taken on the basis of their performance in athletic Yoga.
                        </p>
                        <a class="small fw-medium mt-auto" href="">
                            Read More<i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Service End -->

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
