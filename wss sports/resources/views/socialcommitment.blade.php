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
    @include('partials.css-links')

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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!--SPORTS START -->
    <!-- Sports Section -->
    <br>
   <!--Social Commitment start-->
   <!-- Social Commitment -->
<!-- Social Commitment -->
<section id="social-commitment" class="py-5" style="background:#ffffff; color:#212529;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-4">
      <h6 class="text-uppercase fw-bold" style="color:#e50914;">Social Commitment</h6>
      <h2 class="fw-bold">Sports With Purpose — Creating Impact Beyond the Field</h2>
      <p class="text-muted" style="max-width:760px;margin:0 auto;">
        WSS believes sports can transform lives. Our social initiatives focus on youth development, gender equality,
        inclusivity in underserved communities, and impactful CSR collaborations. Together with our affiliates,
        we are building a movement where every child, regardless of background, gets the chance to dream and achieve through sports.
      </p>
    </div>

    <!-- Points -->
    <div class="row g-4 mt-4">
      <!-- Rural & Underprivileged Youth -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center p-4" style="background:#f8f9fa;">
          <i class="fa-solid fa-children fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Uplifting Rural Youth</h5>
          <p class="small text-muted">
            We extend quality coaching, mentorship, and access to competitive events for children from rural
            and underprivileged backgrounds — ensuring talent is recognized, no matter where it comes from.
          </p>
        </div>
      </div>

      <!-- Empower Girls -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center p-4" style="background:#f8f9fa;">
          <i class="fa-solid fa-person-running fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Empowering Girls in Sports</h5>
          <p class="small text-muted">
            Sports become a tool for confidence and equality. We provide safe platforms, scholarships,
            and leadership opportunities to encourage more girls to step into the arena and shine.
          </p>
        </div>
      </div>

      <!-- Remote Areas -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center p-4" style="background:#f8f9fa;">
          <i class="fa-solid fa-earth-asia fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Inclusivity in Remote Regions</h5>
          <p class="small text-muted">
            We actively reach remote and tribal areas, breaking barriers of distance and access.
            Every child deserves the chance to play, compete, and feel included in the sporting ecosystem.
          </p>
        </div>
      </div>

      <!-- CSR & Success Stories -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-0 shadow-sm text-center p-4" style="background:#f8f9fa;">
          <i class="fa-solid fa-hand-holding-heart fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">CSR Impact & Stories</h5>
          <p class="small text-muted">
            Through CSR partnerships, we run sustainable programs and showcase inspiring success stories.
            These stories highlight how sports create real-world change in communities.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>





   <!--Social Commitment end -->



<!-- Sports End -->


    <!-- SPORTS END  -->

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
