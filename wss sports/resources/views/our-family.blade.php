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
    @include('partials.css-links')
    <style>
        .logo-wrapper {
    height: 180px; /* bigger logo area */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
}
.logo-wrapper img {
    max-height: 160px; /* bigger logo */
    max-width: 100%;
    object-fit: contain;
}

    </style>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Start -->
   <!-- Official Partners Section -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="text-danger text-uppercase fw-bold">Our Official Partners</h6>
            <h1 class="fw-bold mb-3">WSS & Child Organizations</h1>
            <p class="text-muted">
                WSS is the parent brand with multiple child organizations that have grown across diverse fields
                including sports, yoga, arts, and education.
            </p>
        </div>

        <!-- Partner Cards Grid -->
        <div class="row g-4">
            <!-- GWR -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/gwr.jpg') }}" alt="GWR Logo">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">GWR – Global World Record</h5>
                        <p class="text-muted">Established 2019–20, recognized worldwide for record-breaking achievements.</p>
                        <a href="https://globalworldrecord.org" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- IUYF -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/iuyf.jpg') }}" alt="IUYF Logo">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">IUYF – Int. Union Yoga Federation</h5>
                        <p class="text-muted">Formed in 2016–17, promoting yoga and holistic wellness globally.</p>
                        <a href="https://iuyfworld.com/iuyfworld" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- WUSF -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/wusf.jpg') }}" alt="WUSF Logo">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">WUSF – World Union Silambam Federation</h5>
                        <p class="text-muted">Founded 2015–16, committed to preserving and promoting Silambam worldwide.</p>
                        <a href="https://worldunionsilambamfederation.com" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- WSS Academies -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/spl.jpg') }}" alt="WSS Academies">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">WSS Academies</h5>
                        <p class="text-muted">Our global network of academies empowering young athletes in multiple sports.</p>
                        <a href="https://wsssportsacademy.com" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Global Aari Arts -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img//aariwebsite.png') }}" alt="Global Aari Arts Logo">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">Global Aari Arts & Artists Federation</h5>
                        <p class="text-muted">Established in 2025 to promote traditional Aari art and support global artists.</p>
                        <a href="https://globalartsartist.org" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- WSS International College -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="card shadow-sm h-100 border-0 text-center">
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/academy.png') }}" alt="WSS College Logo">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bold">WSS International Sports & Development College</h5>
                        <p class="text-muted">A premier institution for sports and development, nurturing future champions.</p>
                        <a href="#" class="btn btn-outline-danger btn-sm rounded-pill px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Official Partners End -->

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
