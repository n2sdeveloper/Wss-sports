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
    <br><br>
<div class="container-xxl py-5">
  <div class="container text-center">
    <h6 class="text-danger fw-bold">Sports Categories</h6>
    <h1 class="mb-5 fw-bold">Explore Our Sporting Excellence</h1>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="sportsTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#indoor">Indoor</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#outdoor">Outdoor</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#traditional">Traditional</a></li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">

      <!-- Indoor -->
      <div class="tab-pane fade show active" id="indoor">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/tabletennis.jpg') }}" class="card-img-top" alt="Table Tennis">
                <div class="card-body">
                    <h5 class="fw-bold">Table Tennis</h5>
                    <p>Sharpen reflexes and coordination with indoor challenges.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/batmitton.jpg') }}" class="card-img-top" alt="Badminton">
                <div class="card-body">
                    <h5 class="fw-bold">Badminton</h5>
                    <p>Speed, agility, and stamina — all in one exciting game.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/chessboard.jpg') }}" class="card-img-top" alt="Chess">
                <div class="card-body">
                    <h5 class="fw-bold">Chess</h5>
                    <p>Enhance strategy and critical thinking in a classic indoor game.</p>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- Outdoor -->
 <div class="tab-pane fade" id="outdoor">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/football.jpg') }}" class="card-img-top" alt="Football">
                <div class="card-body">
                    <h5 class="fw-bold">Football</h5>
                    <p>Teamwork and strategy in the world’s most popular sport.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/cricket.jpg') }}" class="card-img-top" alt="Cricket">
                <div class="card-body">
                    <h5 class="fw-bold">Cricket</h5>
                    <p>Experience the thrill of batting, bowling, and fielding.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/athletics.jpg') }}" class="card-img-top" alt="Basketball">
                <div class="card-body">
                    <h5 class="fw-bold">Athletics</h5>
                    <p>Athletics, endurance, speed, and overall physical fitness.</p>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- Traditional -->
      <div class="tab-pane fade" id="traditional">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/Silambam.jpg') }}" class="card-img-top" alt="Silambam">
                <div class="card-body">
                    <h5 class="fw-bold">Silambam</h5>
                    <p>Ancient martial art focusing on skill and discipline.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/kabbadi.jpeg') }}" class="card-img-top" alt="Kabaddi">
                <div class="card-body">
                    <h5 class="fw-bold">Kabaddi</h5>
                    <p>Strength, courage, and agility in a traditional sport.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100 sport-card">
                <img src="{{ asset('img/kho-kho.jpg') }}" class="card-img-top" alt="Kho-Kho">
                <div class="card-body">
                    <h5 class="fw-bold">Kho-Kho</h5>
                    <p>Quick reflexes and team strategy in a classic traditional game.</p>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
  </div>
</div>


<!-- arts start -->
<div class="container-xxl py-5">
  <div class="container text-center">
    <h6 class="text-danger fw-bold">Arts Categories</h6>
    <h1 class="mb-5 fw-bold">Explore Our Artistic Excellence</h1>

    <!-- Tabs -->
    <ul class="nav nav-pills justify-content-center mb-4" id="artsTab" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#dance">Dance</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#drawing">Arts</a></li>
      <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#henna">Henna & Nail Arts</a></li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">

      <!-- Dance -->
      <div class="tab-pane fade show active" id="dance">
       <div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 art-card">
            <img src="{{ asset('img/bharatanatyam.jpg') }}" class="card-img-top" alt="Bharatanatyam">
            <div class="card-body">
                <h5 class="fw-bold">Bharatanatyam</h5>
                <p>Classical South Indian dance emphasizing expressions and storytelling.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 art-card">
            <img src="{{ asset('img/oddisidance.jpg') }}" class="card-img-top" alt="Odissi">
            <div class="card-body">
                <h5 class="fw-bold">Odissi</h5>
                <p>Graceful dance form from Odisha, known for sculpturesque poses and fluid movements.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 art-card">
            <img src="{{ asset('img/kathak.jpg') }}" class="card-img-top" alt="Kathak">
            <div class="card-body">
                <h5 class="fw-bold">Kathak</h5>
                <p>Northern Indian classical dance focusing on intricate footwork and spins.</p>
            </div>
        </div>
    </div>
</div>

</div>

      <!-- Drawing -->
      <div class="tab-pane fade" id="drawing">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/drawing.jpg') }}" class="card-img-top" alt="Drawing">
        <div class="card-body">
          <h5 class="fw-bold">Drawing</h5>
          <p>Enhance creativity and imagination through sketches and illustrations.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/painting.jpg') }}" class="card-img-top" alt="Painting">
        <div class="card-body">
          <h5 class="fw-bold">Painting</h5>
          <p>Bring colors to life and express emotions through artistic painting.</p>
        </div>
      </div>
    </div>

     <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/sketching.jpg') }}" class="card-img-top" alt="Sketching">
        <div class="card-body">
          <h5 class="fw-bold">Sketching</h5>
          <p>Develop observation and artistic skills with detailed sketches.</p>
        </div>
      </div>
    </div>
  </div>
</div>


      <!-- Henna & Nail Arts -->
      <div class="tab-pane fade" id="henna">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/henna.jpg') }}" class="card-img-top" alt="Henna">
        <div class="card-body">
          <h5 class="fw-bold">Henna</h5>
          <p>Traditional designs and intricate patterns for hands and feet.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/nailart.jpg') }}" class="card-img-top" alt="Nail Arts">
        <div class="card-body">
          <h5 class="fw-bold">Nail Arts</h5>
          <p>Creative nail designs to express individuality and style.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100 art-card">
        <img src="{{ asset('img/Calligraphy.jpg') }}" class="card-img-top" alt="Calligraphy">
        <div class="card-body">
          <h5 class="fw-bold">Calligraphy</h5>
          <p>Art of beautiful writing, enhancing artistic expression and style.</p>
        </div>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
</div>

<!-- arts end -->
<!-- CSS for hover effect -->

<!-- Reach Section -->
<section id="reach" class="py-5" style="background:#fff;">
  <div class="container text-center">
    <h6 class="text-uppercase fw-bold" style="color:#e50914;">Our Reach</h6>
    <h2 class="fw-bold mb-4">Where We Are & Who We Serve</h2>
    <p class="text-muted mb-5">Expanding excellence across academies, partner schools, and international offices.</p>

    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3">
        <div class="rounded-circle d-flex flex-column align-items-center justify-content-center p-4 shadow"
             style="width:160px;height:160px;margin:auto;background:#f8f9fa;">
          <i class="fas fa-school fa-2x mb-2" style="color:#e50914;"></i>
          <h4 class="fw-bold mb-0">41+</h4>
          <small class="text-muted">Academies</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="rounded-circle d-flex flex-column align-items-center justify-content-center p-4 shadow"
             style="width:160px;height:160px;margin:auto;background:#f8f9fa;">
          <i class="fas fa-university fa-2x mb-2" style="color:#e50914;"></i>
          <h4 class="fw-bold mb-0">100+</h4>
          <small class="text-muted">Partner Schools</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="rounded-circle d-flex flex-column align-items-center justify-content-center p-4 shadow"
             style="width:160px;height:160px;margin:auto;background:#f8f9fa;">
          <i class="fas fa-globe-asia fa-2x mb-2" style="color:#e50914;"></i>
          <h4 class="fw-bold mb-0">3</h4>
          <small class="text-muted">Countries</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="rounded-circle d-flex flex-column align-items-center justify-content-center p-4 shadow"
             style="width:160px;height:160px;margin:auto;background:#f8f9fa;">
          <i class="fas fa-building fa-2x mb-2" style="color:#e50914;"></i>
          <h4 class="fw-bold mb-0">Offices</h4>
          <small class="text-muted">Mumbai • Bangalore • Thoothukudi</small>
        </div>
      </div>
    </div>
  </div>
</section>




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
